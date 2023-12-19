<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacilityReferralSourceRequest;
use App\Models\FacilityReferralSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class FacilityReferralSourceController extends Controller
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
        $addonFacilityReferrals = FacilityReferralSource::where('company_id', $companyId)->get();
        return view('addons.facilityreferralsource.dashboard', compact('addonFacilityReferrals', 'organizations'));

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

        $addonFacilityReferrals = FacilityReferralSource::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.facilityreferralsource.sub_dashboard', compact('addonFacilityReferrals', 'organizations', 'name'));

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
        return view('addons.facilityreferralsource.create', compact('organizations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacilityReferralSourceRequest $request)
    {
         //
         $validated = $request->all();
         $validated['code'] = generate_random_token();
         $validated['user_id'] = Auth::id();
         $validated['company_id'] = $request->organisation_id;
         try{

             FacilityReferralSource::create($validated);
             return redirect()->route('facilityReferral.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

         }catch (\Throwable $th){
             dd($th->getMessage());
             // return redirect()->back()->withInput();
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacilityReferralSource  $facilityReferralSource
     * @return \Illuminate\Http\Response
     */
    public function show(FacilityReferralSource $facilityReferralSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacilityReferralSource  $facilityReferralSource
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonFacilityReferral = FacilityReferralSource::where('id', $addon_id)->first();
        return view('addons.facilityreferralsource.edit', compact('addonFacilityReferral'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacilityReferralSource  $facilityReferralSource
     * @return \Illuminate\Http\Response
     */
    public function update(FacilityReferralSourceRequest $request)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonFacilityReferral = FacilityReferralSource::where('id', $addon_id)->first();

            $addonFacilityReferral->name = request('name');
            $addonFacilityReferral->reference_code = request('reference_code');
            $addonFacilityReferral->save();

            return redirect()->route('facilityReferral.index')->with('success', 'Success. '. request('name') . ' was updated successfully. ');;
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacilityReferralSource  $facilityReferralSource
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacilityReferralSource $facilityReferralSource)
    {
        //
    }

    public function change_status(Request $req, FacilityReferralSource $facilityReferral)
    {
        $facilityReferralId = decrypt($req->facilityReferralId);

        $outcome = $facilityReferral->changeStatus($facilityReferralId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
