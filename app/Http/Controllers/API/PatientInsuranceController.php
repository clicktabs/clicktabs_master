<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PatientInsuranceRequest;
use App\Models\PatientInsurance;
use Illuminate\Http\Request;

class PatientInsuranceController extends Controller
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
    public function store(PatientInsuranceRequest $request)
    {
        if(request()->patient_id == null){
            return response()->json([
                'status'=> 500,
                'message' => 'Please fill previous form first!!'
            ]);
        }
        $patient_insurance = new PatientInsurance();

        $patient_insurance->primary_payor = $request->primary_payor_na ? $request->primary_payor_na : $request->primary_payor;
        $patient_insurance->secondary_payor = $request->secondary_payor_na ? $request->secondary_payor_na : $request->secondary_payor;
        $patient_insurance->co_pay = $request->co_pay_money_na ? $request->co_pay_money_na : $request->co_pay_money;
        $patient_insurance->private_pay = $request->private_pay_na ? $request->private_pay_na : $request->private_pay;
        $patient_insurance->medicaid_id = $request->insurance_medicaid_member_id_na ? $request->insurance_medicaid_member_id_na : $request->insurance_medicaid_member_id;
        $patient_insurance->medicare_id = $request->insurance_medicare_member_id_check_na ? $request->insurance_medicare_member_id_check_na : $request->insurance_medicare_member_id_check;
        $patient_insurance->nic_id = $request->insurance_nic_member_id_check_na ? $request->insurance_nic_member_id_check_na : $request->insurance_nic_member_id_check;
        $patient_insurance->payment_source = json_encode($request->insurance_current_payment_source);
        $patient_insurance->patient_id = $request->patient_id;
        $patient_insurance->save();

        return response()->json([
            'status'=> 200,
            'message' => 'Patient Insurance successfully created'
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
