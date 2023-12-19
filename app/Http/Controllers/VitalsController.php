<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vital;

class VitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vital-signs');
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
        $vital = Vital::find($id);
        return view('patients.components.patient-forms.vitals-edit-modal', compact('vital'));
    }
    public function changeStatus($id)
    {
        $vital = Vital::find($id);
        if ($vital->status == 1) {
            $vital->update([
                'status' => 0,
            ]);
        } else {
            $vital->update([
                'status' => 1,
            ]);
        }
        return redirect()->back()->with('success', 'Success!!! vitals Status Changed Successfully');
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
            'pulse' => 'required',
            'temperature' => 'required',
            'waight' => 'required',
            'respiration' => 'required',
            'bp' => 'required',
            'bs' => 'nullable',
            'pain' => 'required',
        ]);

        $vital = Vital::create($request->all());
        $active_status_v = 'ui-tabs-active ui-state-active';

        return redirect()->back()->with([
            'success', 'Success!!! Vital Saved Successfully!!',
            'active_status_v' => $active_status_v
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vital $vital)
    {
        $request->validate([
            'patient_id' => 'required',
            'pulse' => 'required',
            'temperature' => 'required',
            'waight' => 'required',
            'respiration' => 'required',
            'bp' => 'required',
            'bs' => 'nullable',
            'pain' => 'required',
        ]);

        $vital->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Vital Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vital $vital)
    {
        try {
            $vital->delete();
            return redirect()->back()->with('success', 'Vital record deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete vital record.');
        }
    }
}
