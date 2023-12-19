<?php

namespace App\Http\Controllers;

use App\Models\PatientCaregiver;
use Illuminate\Http\Request;
use App\Models\Addon;

class PatientCaregiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    {
        public function index()
        {
            return view('patient-reports.active-allergy')
        }
        }

    public function caregivereditModal($id)
    {
        $caregiver = PatientCaregiver::find($id);

        $matching_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
                                ->where('addons.name', 'Matching Code')
                                ->select(['addon_sub_categories.*'])
                                ->get();

        $compatibilitys = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
                                ->where('addons.name', 'Compatibility  Code')
                                ->orWhere('addons.name', 'Compatibility Code')
                                ->select(['addon_sub_categories.*'])
                                ->get();

        return view('patients.components.patient-forms.caregiver-edit-modal', compact('caregiver', 'matching_codes', 'compatibilitys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PatientCaregiver::create(request()->all());
        return back()->with('success','Success!! Patient Caregiver Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientCaregiver  $patientCaregiver
     * @return \Illuminate\Http\Response
     */
    public function show(PatientCaregiver $patientCaregiver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientCaregiver  $patientCaregiver
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientCaregiver $patientCaregiver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientCaregiver  $patientCaregiver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientCaregiver $patientCaregiver)
    {
        $patientCaregiver->update($request->all());
        return redirect()->back()->with('success', 'Success!!! patient Caregiver Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientCaregiver  $patientCaregiver
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientCaregiver $patientCaregiver)
    {
        $patientCaregiver->delete();
        return redirect()->back()->with('success', 'Success!!! Patient Caregiver Deleted Successfully');
    }
}
