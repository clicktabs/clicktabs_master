<?php

namespace App\Http\Controllers;

use App\Models\PatientRestriction;
use Illuminate\Http\Request;
use App\Models\Addon;

class PatientRestrictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function restrictionEditModal($id)
    {
        $restriction = PatientRestriction::find($id);
        $restriction_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
                                ->where('addons.name', 'Restriction')
                                ->select(['addon_sub_categories.*'])
                                ->get();
        return view('patients.components.patient-forms.restriction-edit-modal', compact('restriction', 'restriction_codes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PatientRestriction::create($request->all());
        return redirect()->back()->with('success', 'Success!!! Restriction Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientRestriction  $patientRestriction
     * @return \Illuminate\Http\Response
     */
    public function show(PatientRestriction $patientRestriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientRestriction  $patientRestriction
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientRestriction $patientRestriction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientRestriction  $patientRestriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientRestriction $patientRestriction)
    {
        $patientRestriction->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Restriction Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientRestriction  $patientRestriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientRestriction $patientRestriction)
    {
        $patientRestriction->delete();
        return redirect()->back()->with('success', 'Success!!! Restriction Deleted Successfully');
    }
}
