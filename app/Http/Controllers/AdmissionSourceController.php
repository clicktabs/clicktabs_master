<?php

namespace App\Http\Controllers;

use App\Models\AdmissionSource;
use Illuminate\Http\Request;
use App\Http\Requests\AdmissionSourceRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class AdmissionSourceController extends Controller
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

        $addonAdmissionSources = AdmissionSource::where('company_id', $companyId)->get();
        return view('addons.admissionsource.dashboard', compact('addonAdmissionSources', 'organizations'));

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

        $addonAdmissionSources = AdmissionSource::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.admissionsource.sub_dashboard', compact('addonAdmissionSources', 'organizations', 'name'));

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
        return view('addons.admissionsource.create', compact('organizations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdmissionSourceRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            AdmissionSource::create($validated);
            return redirect()->route('credentials.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdmissionSource  $admissionSource
     * @return \Illuminate\Http\Response
     */
    public function show(AdmissionSource $admissionSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmissionSource  $admissionSource
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonAdmissionSource = AdmissionSource::where('id', $addon_id)->first();
        return view('addons.admissionSource.edit', compact('addonAdmissionSource'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmissionSource  $admissionSource
     * @return \Illuminate\Http\Response
     */
    public function update(AdmissionSourceRequest $admissionSource)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonAdmissionSource = AdmissionSource::where('id', $addon_id)->first();

            $addonAdmissionSource->name = request('name');
            $addonAdmissionSource->reference_code = $addon_id;
            $addonAdmissionSource->save();

            return redirect()->route('credentials.index')->with('success', 'Success. '. request('name') . ' was updated successfully. ');;
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmissionSource  $admissionSource
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmissionSource $admissionSource)
    {
        //
    }


    public function change_status(Request $req, AdmissionSource $admissionSource)
    {
        $admissionSourceId = decrypt($req->admissionSourceId);

        $outcome = $admissionSource->changeStatus($admissionSourceId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
