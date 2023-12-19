<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PatientDischargeRequest;
use App\Models\Patient;
use App\Models\PatientDischarge;

class PatientStatusController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(PatientDischargeRequest $request, $id)
    {
        $discharge_patient = PatientDischarge::where('patient_id', $request->patient_id)->first();
        dd($discharge_patient);
        $patient_discharge = new PatientDischarge();
        $patient_discharge->status = $request->patient_status;
        $patient_discharge->discharge_date = $request->discharge_date;
        $patient_discharge->patient_id = $request->patient_id;
        $patient_discharge->discharge_reason = $request->discharge_reason;
        $patient_discharge->discharge_comment = $request->discharge_comment;
        Patient::where('id', $request->patient_id)->update(['status'=>$request->patient_status]);
        $patient_discharge->save();

        return response()->json([
            'status'=> 200,
            'message' => 'Patient successfully discharged!'
        ]);
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
