<?php

namespace App\Http\Controllers;

use App\Http\Requests\InternalReferralSourceRequest;
use App\Models\InternalReferralSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class InternalReferralSourceController extends Controller
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
        $addonInternalReferralSources = InternalReferralSource::where('company_id', $companyId)->get();
        return view('addons.internalreferralsource.dashboard', compact('addonInternalReferralSources', 'organizations'));

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
        return view('addons.internalreferralsource.create', compact('organizations'));
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

        $addonInternalReferralSources = InternalReferralSource::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.internalreferralsource.sub_dashboard', compact('addonInternalReferralSources', 'organizations', 'name'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InternalReferralSourceRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            InternalReferralSource::create($validated);
            return redirect()->route('internalReferralSource.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InternalReferralSource  $internalReferralSource
     * @return \Illuminate\Http\Response
     */
    public function show(InternalReferralSource $internalReferralSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InternalReferralSource  $internalReferralSource
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          //
          $addon_id = decrypt($id);

          $addonInternalReferral = InternalReferralSource::where('id', $addon_id)->first();
          return view('addons.internalreferralsource.edit', compact('addonInternalReferral'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InternalReferralSource  $internalReferralSource
     * @return \Illuminate\Http\Response
     */
    public function update(InternalReferralSourceRequest $request)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonInternalReferral = InternalReferralSource::where('id', $addon_id)->first();

            $addonInternalReferral->name = request('name');
            $addonInternalReferral->reference_code = request('reference_code');
            $addonInternalReferral->save();

            return redirect()->route('inPatientCode.index')->with('success', 'Success. '. request('name') . ' was updated successfully. ');;
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InternalReferralSource  $internalReferralSource
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternalReferralSource $internalReferralSource)
    {
        //
    }
}
