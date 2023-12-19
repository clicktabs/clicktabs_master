<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientNonAdmitRequest;
use App\Models\Patient;
use App\Models\PatientNonAdmitReason;
use Illuminate\Http\Request;

class PatientNonAdmitController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PatientNonAdmitRequest $request)
    {
        $patient = Patient::find($request->patient_id);
        $patient->status = 'non-admit';
        $patient->save();
        $patient_non_admit = new PatientNonAdmitReason();
        $patient_non_admit->patient_id = $request->patient_id;
        $patient_non_admit->non_admit_date = $request->non_admit_date;
        $patient_non_admit->reasons = json_encode($request->non_admit_reason);
        $patient_non_admit->comments = $request->comments;
        $patient_non_admit->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Patient move to non admit successfully!',
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
