<?php

namespace App\Http\Controllers;

use App\Http\Requests\PharmacyRequest;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PharmacyController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:pharmacy-list', ['only' => ['index']]);
        $this->middleware('permission:pharmacy-create', ['only' => ['create', 'store', 'update']]);
        $this->middleware('permission:pharmacy-edit', ['only' => ['edit']]);
        $this->middleware('permission:pharmacy-show', ['only' => ['show']]);
        $this->middleware('permission:pharmacy-delete', ['only' => ['destroy', 'delete']]);
    }

    public function index()
    {
        //
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $companyId = '0';
                break;

            default:
                $companyId = Auth::user()->organization_id;

        }

        $pharmacies = Pharmacy::where('org_id', $companyId)->get();
        return view('pharmacy.dashboard', compact('pharmacies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $organizations = Auth::user()->organization_id;
        return view('pharmacy.create', compact('organizations'));

    }

    public function pharmacy_details(Request $request){

        try {
            $id = $request->id;
            $pharmacy = Pharmacy::where('id', $id)->get(['name','address','telephone','fax']);
            return response()->json(['data' => $pharmacy]);
        }catch(\Exception $th){
            return redirect()->back()->withInput();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PharmacyRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['org_id'] = $request->org_id;
        Pharmacy::create($validated);
        return redirect()->route('pharmacy.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacy $pharmacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pharmacy_id = decrypt($id);

        $pharmacy = Pharmacy::where('id', $pharmacy_id)->first();
        return view('pharmacy.edit', compact('pharmacy'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $pharmacy)
    {
         //
         $pharmacy_id = decrypt(request('id'));

        $pharmacy = Pharmacy::where('id', $pharmacy_id)->first();

        $pharmacy->name = request('name');
        $pharmacy->telephone = request('telephone');
        $pharmacy->fax = request('fax');
        $pharmacy->address = request('address');
        $pharmacy->reference_code = request('reference_code');
        $pharmacy->save();

        return redirect()->route('pharmacy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pharmacy  $pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacy $pharmacy)
    {
        //
    }

    public function change_status(Request $req, Pharmacy $pharmacy)
    {
        $pharmacyId = decrypt($req->pharmacyId);

        $outcome = $pharmacy->changeStatus($pharmacyId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
