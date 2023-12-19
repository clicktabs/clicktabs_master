<?php

namespace App\Http\Controllers;

use App\Models\PatientAttribute;
use Illuminate\Http\Request;
use App\Models\Addon;

class PatientAttributeController extends Controller
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

    public function attributeEditModal($id)
    {
        $attributes = PatientRestriction::find($id);
        $categories = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
            ->where('addons.name', 'Category')
            ->select(['addon_sub_categories.*'])
            ->get();
        return view('patients.components.patient-forms.attributes-edit-modal', compact('attributes', 'categories'));
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
        PatientAttribute::create(request()->all());
        return back()->with('success','Success!! Patient Attribute Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientAttribute  $patientAttribute
     * @return \Illuminate\Http\Response
     */
    public function show(PatientAttribute $patientAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientAttribute  $patientAttribute
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientAttribute $patientAttribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatientAttribute  $patientAttribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatientAttribute $patientAttribute)
    {
        $patientAttribute->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Attribute Caregiver Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientAttribute  $patientAttribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientAttribute $patientAttribute)
    {
        $patientAttribute->delete();
        return redirect()->back()->with('success', 'Success!!! Patient Attribute Deleted Successfully');
    }
}
