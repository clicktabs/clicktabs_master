<?php

namespace App\Http\Controllers;

use App\Http\Requests\InPatientAdmissionCodeRequest;
use App\Models\InPatientAdmissionCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;

class InPatientAdmissionCodeController extends Controller
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
        $addonInPatientAdmissionCodes = InPatientAdmissionCode::where('company_id', $companyId)->get();
        return view('addons.inpatientcode.dashboard', compact('addonInPatientAdmissionCodes', 'organizations'));

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

        $addonInPatientAdmissionCodes = InPatientAdmissionCode::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.inpatientcode.sub_dashboard', compact('addonInPatientAdmissionCodes', 'organizations', 'name'));

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
        return view('addons.inpatientcode.create', compact('organizations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InPatientAdmissionCodeRequest $request)
    {
        //
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            InPatientAdmissionCode::create($validated);
            return redirect()->route('inPatientCode.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InPatientAdmissionCode  $inPatientAdmissionCode
     * @return \Illuminate\Http\Response
     */
    public function show(InPatientAdmissionCode $inPatientAdmissionCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InPatientAdmissionCode  $inPatientAdmissionCode
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonInPatientAdmissionCode = InPatientAdmissionCode::where('id', $addon_id)->first();
        return view('addons.inpatientcode.edit', compact('addonInPatientAdmissionCode'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InPatientAdmissionCode  $inPatientAdmissionCode
     * @return \Illuminate\Http\Response
     */
    public function update(InPatientAdmissionCodeRequest $request)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonInPatientAdmissionCode = InPatientAdmissionCode::where('id', $addon_id)->first();

            $addonInPatientAdmissionCode->name = request('name');
            $addonInPatientAdmissionCode->reference_code = request('reference_code');
            $addonInPatientAdmissionCode->save();

            return redirect()->route('inPatientCode.index')->with('success', 'Success. '. request('name') . ' was updated successfully. ');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InPatientAdmissionCode  $inPatientAdmissionCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(InPatientAdmissionCode $inPatientAdmissionCode)
    {
        //
    }

    public function change_status(Request $req, InPatientAdmissionCode $inPatientCode)
    {
        $inPatientCodeId = decrypt($req->inPatientCodeId);

        $outcome = $inPatientCode->changeStatus($inPatientCodeId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
