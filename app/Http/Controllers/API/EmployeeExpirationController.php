<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeExpirationRequest;
use App\Models\Employee;
use App\Models\EmployeeExpiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeExpirationController extends Controller
{
    public function index()
    {
        $employee = Employee::find($_GET['e_id']);
        $employee_expirations = $employee->expirations;

        foreach ($employee_expirations as $single_employee_expiration) {
            $single_employee_expiration['employee_id'] = $employee->first_name .' '. $employee->last_name;
        }

        return response()->json([
            'success' => true,
            'data' => $employee_expirations,
        ]);
    }

    public function store(EmployeeExpirationRequest $request)
    {
        $employeeExpiration = new EmployeeExpiration();
        $employeeExpiration->expirations_doc_type       = $request->expirations_doc_type;
        $employeeExpiration->expirations_date         = $request->expirations_date;
        $employeeExpiration->expiration_notes           = $request->expiration_notes;
        $employeeExpiration->employee_id                 = $request->employee_id;
        $employeeExpiration->save();

        $employee = Employee::find($request->employee_id);
        $expirations = $employee->expirations;

        return response()->json([
            'message' => 'Employee Expiration Created Successfully.',
            'data' => $expirations
        ], 200);
    }

    public function edit($id)
    {
        $employeeExpiration = EmployeeExpiration::find($id);

        if (!$employeeExpiration) {
            return response()->json([
                'success' => false,
                'message' => 'Employee expiration not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $employeeExpiration,
        ]);
    }

    public function show($id)
    {
        $employeeExpiration = EmployeeExpiration::find($id);

        if (!$employeeExpiration) {
            return response()->json([
                'success' => false,
                'message' => 'Employee expiration not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $employeeExpiration,
        ]);
    }

    public function update(EmployeeExpirationRequest $request, $id)
    {
        $employeeExpiration = EmployeeExpiration::find($id);
        $employeeExpiration->expirations_doc_type       = $request->expirations_doc_type;
        $employeeExpiration->expirations_date           = $request->expirations_date;
        $employeeExpiration->expiration_notes           = $request->expiration_notes;
        $employeeExpiration->employee_id                = $request->employee_id;
        $employeeExpiration->save();

        $employee = Employee::find($request->employee_id);
        $expirations = $employee->expirations;

        return response()->json([
            'message' => 'Employee Expiration Updated Successfully.',
            'data' => $expirations
        ], 200);
    }

    public function destroy($id)
    {
        $employeeExpiration = EmployeeExpiration::find($id);

        if (!$employeeExpiration) {
            return response()->json([
                'success' => false,
                'message' => 'Employee expiration not found',
            ], 404);
        }

        $employeeExpiration->delete();

        return response()->json([
            'success' => true,
            'message' => 'Employee expiration deleted successfully',
        ]);
    }
}
