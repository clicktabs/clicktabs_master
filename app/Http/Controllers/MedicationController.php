<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
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
        $medication = Medication::find($id);
        return view('patients.components.patient-forms.medication-edit-modal', compact('medication'));
    }
    public function changeStatus($id)
    {
        $medication = Medication::find($id);
        if ($medication->status == 1) {
            $medication->update([
                'status' => 0,
            ]);
        } else {
            $medication->update([
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

        // Validate the incoming request data
    $validatedData = $request->validate([
        'p_id' => 'required|integer',
        'long_standing' => 'nullable|integer',
        'start_date' => 'required',
        'through_date' => 'required',
        'medication_dosage' => 'required'
    ]);

    // Create a new Medication instance
    $medication = new Medication();
    $medication->patient_id = $request->p_id;
    $medication->long_standing = $request->long_standing;
    $medication->start_date = $request->start_date;
    $medication->through_date = $request->through_date;
    $medication->medication_dosage = $request->medication_dosage;
    $medication->strength = $request->strength;
    $medication->frequency = $request->frequency;
    $medication->route = $request->route;
    $medication->classification = $request->classification;
    $medication->type = $request->type;
    $medication->physician = $request->physician;
    $medication->pharmacy = $request->pharmacy;
    $medication->status = $request->status;
    $medication->Medication = $request->Medication;

    $medication->save();
    $active_status_m = 'ui-tabs-active ui-state-active';

    return redirect()->back()->with([
        'success' => 'Medication added successfully',
        'active_status_m' => $active_status_m
    ]);

}

    public function discontinueStore(Request $request)
    {
        // dd($request->all());
        Medication::create($request->all());
        return redirect()->back()->with('success', 'Success!!! Medication Discontinue Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function show(Medication $medication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function edit(Medication $medication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medication $medication)
    {
        $validatedData = $request->validate([
        'start_date' => 'required',
        'through_date' => 'required',
        'medication_dosage' => 'required',
        'strength' => 'required',
        'frequency' => 'required',
        'route' => 'required',
        'classification' => 'required',
        'type' => 'required',
        'physician' => 'required',
        'pharmacy' => 'required',
        'status' => 'required',
    ]);
        $medication->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Medication Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medication $medication)
    {
        try {
            $medication->delete();
            return redirect()->back()->with('success', 'Medication record deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Medication record.');
        }
    }
}
