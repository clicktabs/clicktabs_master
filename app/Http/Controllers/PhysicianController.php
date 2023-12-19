<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhysicianRequest;
use App\Models\Physician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;
use App\Traits\ApiService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class PhysicianController extends Controller
{
    use ApiService;

    public function __construct()
    {
        $this->middleware('permission:physician-list', ['only' => ['index']]);
        $this->middleware('permission:physician-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:physician-delete', ['only' => ['destroy', 'delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->makeGetRequest();
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $companyId = '0';
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $companyId = Auth::user()->organization_id;
                $organizations = Auth::user()->organization_id;
        }

        $physicians = Physician::where('org_id', $companyId)->get();

        return view('physicians.dashboard', compact('physicians', 'organizations'));

    }


    public function check_physician_details(Request $request){

        try {

            $id = $request->id;
            Log::debug("===============>>>>>>>>>>>>>");
            Log::info($id);
            $physician = Physician::where('id', $id)->get(['first_name', 'last_name','address_line_1','primary_phone','fax']);
            Log::debug("===============>>>>>>>>>>>>>");
            Log::info($physician);
            return response()->json(['data' => $physician]);
        }catch(\Exception $th){
            return redirect()->back()->withInput();
        }
    }

    public function check_npi_number(Request $request) {
    $npiNumber = $request->input('id');

    // First API URL
    $apiUrl1 = "https://npiregistry.cms.hhs.gov/api/?number={$npiNumber}&version=2.1";
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, $apiUrl1);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    $response1 = curl_exec($ch1);

    if (curl_errno($ch1)) {
        return response()->json(['error' => 'cURL Error: ' . curl_error($ch1)], 500);
    }

    $httpStatus1 = curl_getinfo($ch1, CURLINFO_HTTP_CODE);
    curl_close($ch1);

    // Second API URL
    $uuid = 'baffcf5f-6b2f-49d4-9014-8834b4ada1e9';
    $apiUrl2 = "https://data.cms.gov/data-api/v1/dataset/{$uuid}/data";
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $apiUrl2);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    $response2 = curl_exec($ch2);

    if (curl_errno($ch2)) {
        return response()->json(['error' => 'cURL Error: ' . curl_error($ch2)], 500);
    }

    $httpStatus2 = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
    curl_close($ch2);

    // Initialize an array to store matching results
    $matchingResults = [];

    // Process data from the first API
    if ($httpStatus1 === 200) {
        $data1 = json_decode($response1, true);
        if ($data1 !== null && isset($data1['results'])) {
            $matchingResults[] = $data1['results'][0];
        }
    }

    // Process data from the second API
    if ($httpStatus2 === 200) {
        $data2 = json_decode($response2, true);
        if ($data2 !== null) {
            foreach ($data2 as $item) {
                if (isset($item['NPI']) && $item['NPI'] === $npiNumber) {
                    $matchingResults[] = $item;
                }
            }
        }
    }

    // Check if there are matching results
    if (!empty($matchingResults)) {
        return response()->json($matchingResults);
    }

    return response()->json(['error' => 'NPI not found in the data'], 404);
}






    public function check_addons(Request $request){
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = $request->organisation_id;

        }

        $addonPhysicians = Physician::where('org_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('physicians.sub_dashboard', compact('addonPhysicians', 'organizations', 'name'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = Auth::user()->organization_id;
        }
        return view('physicians.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhysicianRequest $request)
    {
        $pCheck = Physician::where('npi_number', $request->npi_number)->first();
        if (!empty($pCheck)) {
            return redirect()->back()->with('danger', 'Physician already exist. ');
        } else {
            $validated = $request->all();
            $validated['code'] = generate_random_token();
            $validated['user_id'] = Auth::id();
            $validated['org_id'] = $request->org_id;
            switch($request->verification_pecos) {
                case("false"):
                    $validated['pecos_verification'] = false;
                    break;

                default:
                    $validated['pecos_verification'] = true;
            }

            try{
                Physician::create($validated);
                return redirect()->route('physician.index')->with('success', 'Success. '.$validated['first_name'].' '.$validated['last_name']. ' was created successfully. ');

            }catch (\Throwable $th){
                dd($th->getMessage());
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $physicianId = decrypt($id);

        $physician = Physician::where('id', $physicianId)->first();
        return view('physicians.show', compact('physician'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return redirect()->route('physician.index');
        // $physicianId = decrypt($id);

        // $physician = Physician::where('id', $physicianId)->first();
        // return view('physicians.edit', compact('physician'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function update(PhysicianRequest $request)
    {
        //
        $physicianId = decrypt(request('id'));

        try {

            $physician = Physician::where('id', $physicianId)->first();

            $physician->first_name = request('first_name');
            $physician->last_name = request('last_name');
            $physician->mi = request('mi');
            $physician->credentials = request('credentials');
            $physician->npi_number = request('npi_number');
            $physician->speciality = request('speciality');
            $physician->email = request('email');
            $physician->address_line_1 = request('address_line_1');
            $physician->address_line_2 = request('address_line_2');
            $physician->state = request('state');
            $physician->city = request('city');
            $physician->zip = request('zip');
            $physician->primary_phone = request('primary_phone');
            $physician->alternate_phone = request('alternate_phone');
            $physician->fax = request('fax');
            switch(request('verification_pecos')) {
                case("false"):
                    $physician->pecos_verification = false;
                    break;

                default:
                    $physician->pecos_verification = true;
            }

            $physician->save();

            return redirect()->route('physician.index');

        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Physician  $physician
     * @return \Illuminate\Http\Response
     */
    public function destroy(Physician $physician)
    {
        //
    }

    public function change_status(Request $req, Physician $physician)
    {
        $physicianId = decrypt($req->physicianId);

        $outcome = $physician->changeStatus($physicianId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
