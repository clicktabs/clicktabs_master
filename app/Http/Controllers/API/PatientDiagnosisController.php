<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientDiagnosisRequest;
use App\Models\PatientClinicalDiagnosis;
use Illuminate\Http\Request;

class PatientDiagnosisController extends Controller
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
    public function store(PatientDiagnosisRequest $request)
    {
        $patient_clinical_diagnosis = new PatientClinicalDiagnosis();
        $patient_clinical_diagnosis->patient_id = $request->patient_id;
        $patient_clinical_diagnosis->primary_diagnosis_code = $request->icd_name_search;
        $patient_clinical_diagnosis->primary_diagnosis_name = $request->ic_code_name;
        $patient_clinical_diagnosis->severity = $request->primary_diagnosis_severity;
        $patient_clinical_diagnosis->other_diagnosis_code = json_encode($request->other_diagnosis_code);
        $patient_clinical_diagnosis->other_diagnosis_name = json_encode($request->ic_another_code);
        $patient_clinical_diagnosis->save();

        return response()->json([
            'status'=> 200,
            'data' => $patient_clinical_diagnosis
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
