<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeePayRateRequest;
use App\Models\Addon;
use App\Models\AddonSubCategories;
use App\Models\Employee;
use App\Models\EmployeePay;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeePayController extends Controller
{
    public function index()
    {
        $employeePays = EmployeePay::all();

        return response()->json([
            'data' => $employeePays
        ]);
    }

    public function store(EmployeePayRateRequest $request)
    {
        $employeePay = new EmployeePay();
        $employeePay->pay_rate_service_code         = $request->pay_rate_service_code;
        $employeePay->pay_rate_billing_code         = $request->pay_rate_billing_code;
        $employeePay->pay_rate_start_date           = $request->pay_rate_start_date;
        $employeePay->pay_rate_end_date             = $request->pay_rate_end_date;
        $employeePay->pay_rate_pay_type             = $request->pay_rate_pay_type;
        $employeePay->pay_rate_amount               = $request->pay_rate_amount;
        $employeePay->employee_id                   = $request->employee_id;
        $employeePay->save();

        $employee = Employee::find($request->employee_id);
        $employee_pays = $employee->pays;

        foreach ($employee_pays as $single_employee_pay) {
            $pay_rate_service_code = $single_employee_pay['pay_rate_service_code'];
            $pay_rate_pay_type = $single_employee_pay['pay_rate_pay_type'];
            $pay_rate_billing_code = $single_employee_pay['pay_rate_billing_code'];

            $pay_rate_addon = AddonSubCategories::where('code', 'like', $pay_rate_service_code.'%')->where('status', '1')->first();
            $pay_rate_type_addon = AddonSubCategories::where('code', 'like', $pay_rate_pay_type.'%')->where('status', '1')->first();
            $pay_rate_billing_addon = AddonSubCategories::where('code', 'like', $pay_rate_billing_code.'%')->where('status', '1')->first();
            $single_employee_pay['pay_rate_service_code'] = $pay_rate_addon->name;
            $single_employee_pay['pay_rate_pay_type'] = $pay_rate_type_addon->name;
            $single_employee_pay['pay_rate_billing_code'] = $pay_rate_billing_addon->name;
            $single_employee_pay['employee_id'] = $employee->first_name . $employee->last_name;
        }

        return response()->json([
            'message' => 'Employee pay rate created successfully.',
            'data' => $employee_pays
        ], 200);
    }

    public function show($id)
    {
        $employeePay = EmployeePay::find($id);
        return response()->json([
            'data' => $employeePay
        ]);
    }

    public function edit($id)
    {
        $employee_pays = EmployeePay::find($id);
        if($employee_pays)
        {
            return response()->json([
                'status'=>200,
                'employee_pays'=> $employee_pays,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No employee found!',
            ]);
        }
    }

    public function update(EmployeePayRateRequest $request, $id)
    {
        $employeePay = EmployeePay::find($id);
        $employeePay->pay_rate_service_code         = $request->pay_rate_service_code;
        $employeePay->pay_rate_billing_code         = $request->pay_rate_billing_code;
        $employeePay->pay_rate_start_date           = $request->pay_rate_start_date;
        $employeePay->pay_rate_end_date             = $request->pay_rate_end_date;
        $employeePay->pay_rate_pay_type             = $request->pay_rate_pay_type;
        $employeePay->pay_rate_amount               = $request->pay_rate_amount;
        $employeePay->employee_id                   = $request->employee_id;
        $employeePay->save();

        $employee = Employee::find($request->employee_id);
        $employee_pays = $employee->pays;

        foreach ($employee_pays as $single_employee_pay) {
            $pay_rate_service_code = $single_employee_pay['pay_rate_service_code'];
            $pay_rate_pay_type = $single_employee_pay['pay_rate_pay_type'];
            $pay_rate_billing_code = $single_employee_pay['pay_rate_billing_code'];

            $pay_rate_addon = AddonSubCategories::where('code', 'like', $pay_rate_service_code.'%')->where('status', '1')->first();
            $pay_rate_type_addon = AddonSubCategories::where('code', 'like', $pay_rate_pay_type.'%')->where('status', '1')->first();
            $pay_rate_billing_addon = AddonSubCategories::where('code', 'like', $pay_rate_billing_code.'%')->where('status', '1')->first();
            $single_employee_pay['pay_rate_service_code'] = $pay_rate_addon->name;
            $single_employee_pay['pay_rate_pay_type'] = $pay_rate_type_addon->name;
            $single_employee_pay['pay_rate_billing_code'] = $pay_rate_billing_addon->name;
            $single_employee_pay['employee_id'] = $employee->first_name . $employee->last_name;
        }

        return response()->json([
            'message' => 'Employee pay rate updated successfully.',
            'data' => $employee_pays
        ], 200);
    }

    public function destroy($id)
    {
        $employeePay = EmployeePay::find($id);
        $employeePay->delete();
        return response()->json([
            'message' => 'Employee pay rate deleted successfully.'
        ]);
    }
}
