<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeBillingRequest;
use App\Models\AddonSubCategories;
use App\Models\Employee;
use App\Models\EmployeeBill;
use Illuminate\Http\Request;

class EmployeeBillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $employee = Employee::find($_GET['e_id']);
        $employee_bills = $employee->bills;

        foreach ($employee_bills as $single_employee_bill) {
            $billing_code = $single_employee_bill['billing_code'];
            $billing_code_addon = AddonSubCategories::where('code', 'like', $billing_code.'%')->where('status', '1')->first();
            $single_employee_bill['billing_code'] = $billing_code_addon->name;
            $single_employee_bill['billing_description'] = $billing_code_addon->description;
            $single_employee_bill['employee_id'] = $employee->first_name .' '. $employee->last_name;
        }

        return response()->json([
            'data' => $employee_bills
        ], 200);
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
    public function store(EmployeeBillingRequest $request)
    {
        $employeePay = new EmployeeBill();
        $employeePay->billing_code      = $request->billing_code;
        $employeePay->employee_id       = $request->employee_id;
        $employeePay->save();

        $employee = Employee::find($request->employee_id);
        $employee_bills = $employee->bills;

        foreach ($employee_bills as $single_employee_bill) {
            $billing_code = $single_employee_bill['billing_code'];
            $billing_code_addon = AddonSubCategories::where('code', 'like', $billing_code.'%')->where('status', '1')->first();
            $single_employee_bill['billing_code'] = $billing_code_addon->name;
            $single_employee_bill['billing_description'] = $billing_code_addon->description;
            $single_employee_bill['employee_id'] = $employee->first_name . $employee->last_name;
        }

        return response()->json([
            'message' => 'Employee pay rate created successfully.',
            'data' => $employee_bills
        ], 200);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        $employee_bill = EmployeeBill::find($id);
        return response()->json([
            'status'=>200,
            'data'=> $employee_bill,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $employeePay = EmployeeBill::find($id);
        $employeePay->billing_code      = $request->billing_code;
        $employeePay->employee_id       = $request->employee_id;
        $employeePay->save();

        $employee = Employee::find($request->employee_id);
        $employee_bills = $employee->bills;

        foreach ($employee_bills as $single_employee_bill) {
            $billing_code = $single_employee_bill['billing_code'];
            $billing_code_addon = AddonSubCategories::where('code', 'like', $billing_code.'%')->where('status', '1')->first();
            $single_employee_bill['billing_code'] = $billing_code_addon->name;
            $single_employee_bill['billing_description'] = $billing_code_addon->description;
            $single_employee_bill['employee_id'] = $employee->first_name . $employee->last_name;
        }

        return response()->json([
            'message' => 'Employee pay rate created successfully.',
            'data' => $employee_bills
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $employee_bill = EmployeeBill::find($id);
        if($employee_bill)
        {
            $employee_bill->delete();
            return response()->json([
                'status'=>200,
                'message'=> 'Bill Deleted Successfully!',
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=> 'Bill not found!',
            ]);
        }
    }
}
