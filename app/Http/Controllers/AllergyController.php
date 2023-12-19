<?php

namespace App\Http\Controllers;
use App\Models\Allergy;

use Illuminate\Http\Request;


class AllergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
         public function index()
    {
        $allergies=Allergy::all();
        return view('patient-reports.active-allergy',compact('allergies'));

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
        $allergy = Allergy::find($id);
        return view('patients.components.patient-forms.allergy-edit-modal', compact('allergy'));

    }
    public function changeStatus($id)
    {
        $allergy = Allergy::find($id);
        if ($allergy->status == 1) {
            $allergy->update([
                'status' => 0,
            ]);
        } else {
            $allergy->update([
                'status' => 1,
            ]);
        }
        return redirect()->back()->with('success', 'Success!!! Allergy Status Changed Successfully');
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
            'allergy' => 'required',
            'reaction' => 'required',
            'type' => 'required',
            'start_date' => 'required|date',
            'severity' => 'required',
            'end_date' => 'nullable|date',
            'information_source' => 'required',
            'comments' => 'nullable',
        ]);

        $allergy = Allergy::create($request->all());
        // Allergy::create($request->all());
        $active_status_a = 'ui-tabs-active ui-state-active';

        return redirect()->back()->with([
            'success', 'Success!!! Allergy Saved Successfully',
            'active_status_a' => $active_status_a
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function show(Allergy $allergy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function edit(Allergy $allergy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allergy $allergy)
    {
        $request->validate([
            'patient_id' => 'required',
            'allergy' => 'required',
            'reaction' => 'required',
            'type' => 'required',
            'start_date' => 'required|date',
            'severity' => 'required',
            'end_date' => 'nullable|date',
            'information_source' => 'required',
            'comments' => 'nullable',
        ]);

        $allergy->update($request->all());
        return redirect()->back()->with('success', 'Success!!! Allergy Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allergy $allergy)
    {
        //
    }
}
