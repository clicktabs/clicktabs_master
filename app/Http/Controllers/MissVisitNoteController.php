<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\MissVisitNote;

class MissVisitNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $org_id = Auth::user()->organization_id;
        $visit_notes = MissVisitNote::where('organization_id', $org_id)->get();

        return response()->json([
            'status' => 200,
            'data' => $visit_notes
        ]);
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
        $organization_id = Auth::user()->organization_id;
        $validatedData = $request->validate([
            'p_communication_date' => 'required|date',
            'p_communication_phy' => 'required|exists:physicians,id',
            'p_communication_patient' => 'required|exists:patients,id',
            'p_communication_text' => 'required',
        ],[
            'p_communication_date.required' => 'The date field is required.',
            'p_communication_phy.exists' => 'The physician does not exist.',
            'p_communication_patient.exists' => 'The patient does not exist.',
            'p_communication_text.required' => 'The communication text is required.',
        ]);

        if(!$validatedData) {
            return response()->json([
                'status' => 400,
                'message' => 'Something went wrong',
            ]);
        }

        $visit_note = new MissVisitNote();
        $visit_note->user_id = Auth::user()->id;
        $visit_note->patient_id = $request->p_communication_phy;
        $visit_note->physician_id = $request->p_communication_patient;
        $visit_note->note = $request->p_communication_text;
        $visit_note->note_date = $request->p_communication_date;
        $visit_note->organization_id = $organization_id;
        $visit_note->save();

        return redirect()->route('dashboard')->with('success', 'Missed Visit note saved successfully.');
        // return response()->json([
        //     'status' => 200,
        //     'message' => 'missed Visit note saved successfully.',
        // ]);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
