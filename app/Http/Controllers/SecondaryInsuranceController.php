<?php

namespace App\Http\Controllers;

use App\Http\Requests\SecondarynsuranceRequest;
use App\Models\SecondaryInsurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class SecondaryInsuranceController extends Controller
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
        $addonSecondaryInsurances = SecondaryInsurance::where('company_id', $companyId)->get();
        return view('addons.secondary_insurance.dashboard', compact('addonSecondaryInsurances', 'organizations'));

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

        $addonSecondaryInsurances = SecondaryInsurance::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.secondary_insurance.sub_dashboard', compact('addonSecondaryInsurances', 'organizations', 'name'));

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
        return view('addons.secondary_insurance.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SecondarynsuranceRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            SecondaryInsurance::create($validated);
            return redirect()->route('secondaryInsurance.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecondaryInsurance  $secondaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(SecondaryInsurance $secondaryInsurance)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecondaryInsurance  $secondaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonSecondaryInsurance = SecondaryInsurance::where('id', $addon_id)->first();
        return view('addons.secondary_insurance.edit', compact('addonSecondaryInsurance'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SecondaryInsurance  $secondaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(SecondarynsuranceRequest $request)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonPrimaryInsurance = SecondaryInsurance::where('id', $addon_id)->first();

            $addonPrimaryInsurance->name = request('name');
            $addonPrimaryInsurance->reference_code = request('reference_code');
            $addonPrimaryInsurance->save();

            return redirect()->route('secondaryInsurance.index');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecondaryInsurance  $secondaryInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondaryInsurance $secondaryInsurance)
    {
        //
    }

    public function change_status(Request $req, SecondaryInsurance $secondaryInsurance)
    {
        $secondaryInsuranceId = decrypt($req->secondaryInsuranceId);

        $outcome = $secondaryInsurance->changeStatus($secondaryInsuranceId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
