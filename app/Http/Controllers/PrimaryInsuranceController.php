<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrimaryInsuranceRequest;
use App\Models\PrimaryInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class PrimaryInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $addonPrimaryInsurances = PrimaryInsurance::where('company_id', $companyId)->get();
        return view('addons.insurance.dashboard', compact('addonPrimaryInsurances', 'organizations'));

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

        $addonPrimaryInsurances = PrimaryInsurance::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.races.sub_dashboard', compact('addonPrimaryInsurances', 'organizations', 'name'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = Auth::user()->organization_id;
        }
        return view('addons.insurance.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrimaryInsuranceRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            PrimaryInsurance::create($validated);
            return redirect()->route('insurance.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrimaryInsurance  $primaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(PrimaryInsurance $primaryInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrimaryInsurance  $primaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonPrimaryInsurance = PrimaryInsurance::where('id', $addon_id)->first();
        return view('addons.insurance.edit', compact('addonPrimaryInsurance'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrimaryInsurance  $primaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(PrimaryInsuranceRequest $request)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonPrimaryInsurance = PrimaryInsurance::where('id', $addon_id)->first();

            $addonPrimaryInsurance->name = request('name');
            $addonPrimaryInsurance->reference_code = request('reference_code');
            $addonPrimaryInsurance->save();

            return redirect()->route('insurance.index');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrimaryInsurance  $primaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrimaryInsurance $primaryInsurance)
    {
        //
    }

    public function change_status(Request $req, PrimaryInsurance $primaryInsurance)
    {
        $primaryInsuranceId = decrypt($req->primaryInsuranceId);

        $outcome = $primaryInsurance->changeStatus($primaryInsuranceId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
