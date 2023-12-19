<?php

namespace App\Http\Controllers;

use App\Models\Immunization;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function editModal($id)
    {
        $immunization = Immunization::find($id);
        return view('patients.components.patient-forms.Immunization-edit-modal', compact('immunization'));
    }
    public function changeStatus($id)
    {
        $immunization = Immunization::find($id);
        if ($immunization->status == 1) {
            $immunization->update([
                'status' => 0,
            ]);
        } else {
            $immunization->update([
                'status' => 1,
            ]);
        }
        return redirect()->back()->with('success', 'Success!!! Medication Status Changed Successfully');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'immunization' => 'required',
            'type' => 'required',
            'administered_on' => 'required',
            'administered_by' => 'required',
            'lot' => 'required',
            'reason' => 'nullable',
        ]);

        $vital = Immunization::create($request->all());

        $active_status_i = 'ui-tabs-active ui-state-active';

        return redirect()->back()->with([
            'success', 'Success!!! Immunization Created Successfully!!',
            'active_status_i' => $active_status_i
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function show(Immunization $immunization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function edit(Immunization $immunization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immunization $immunization)
    {
        $request->validate([
            'patient_id' => 'required',
            'immunization' => 'required',
            'type' => 'required',
            'administered_on' => 'required',
            'administered_by' => 'required',
            'lot' => 'required',
            'reason' => 'nullable'
        ]);

        $immunization->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Immunization Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immunization $immunization)
    {
        try {
            $immunization->delete();
            return redirect()->back()->with('success', 'Immunization record deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Immunization record.');
        }
    }
}
