<?php

namespace App\Http\Controllers;

use App\Http\Requests\TertiaryInsuranceRequest;
use App\Models\TertiaryInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class TertiaryInsuranceController extends Controller
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
        $addonTertiaryInsurances = TertiaryInsurance::where('company_id', $companyId)->get();
        return view('addons.tertiary_insurance.dashboard', compact('addonTertiaryInsurances', 'organizations'));

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

        $addonTertiaryInsurances = TertiaryInsurance::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.tertiary_insurance.sub_dashboard', compact('addonTertiaryInsurances', 'organizations', 'name'));

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
        return view('addons.tertiary_insurance.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TertiaryInsuranceRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            TertiaryInsurance::create($validated);
            return redirect()->route('tertiaryInsurance.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TertiaryInsurance  $tertiaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(TertiaryInsurance $tertiaryInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TertiaryInsurance  $tertiaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonTertiaryInsurance = TertiaryInsurance::where('id', $addon_id)->first();
        return view('addons.tertiary_insurance.edit', compact('addonTertiaryInsurance'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TertiaryInsurance  $tertiaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(TertiaryInsuranceRequest $request)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonPrimaryInsurance = TertiaryInsurance::where('id', $addon_id)->first();

            $addonPrimaryInsurance->name = request('name');
            $addonPrimaryInsurance->reference_code = request('reference_code');
            $addonPrimaryInsurance->save();

            return redirect()->route('tertiaryInsurance.index');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TertiaryInsurance  $tertiaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(TertiaryInsurance $tertiaryInsurance)
    {
        //
    }

    public function change_status(Request $req, TertiaryInsurance $tertiaryInsurance)
    {
        $tertiaryInsuranceId = decrypt($req->tertiaryInsuranceId);

        $outcome = $tertiaryInsurance->changeStatus($tertiaryInsuranceId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
