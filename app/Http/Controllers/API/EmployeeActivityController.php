<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EmployeeActivities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeActivityController extends Controller
{
    public function index()
    {
        $employeeActivities = EmployeeActivities::all();
        return response()->json(['data' => $employeeActivities]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required|exists:employees,id',
            'start_time' => 'required|date_format:Y-m-d H:i:s',
            'end_time' => 'required|date_format:Y-m-d H:i:s',
            'activity_type' => 'required|string',
            'activity_share_level' => 'required|string',
            'activity_notes' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $employeeActivity = new EmployeeActivities();
        $employeeActivity->start_time       = $request->start_time;
        $employeeActivity->end_time         = $request->end_time;
        $employeeActivity->activity_type    = $request->activity_type;
        $employeeActivity->activity_share_level = $request->activity_share_level;
        $employeeActivity->activity_share_level = $request->activity_share_level;
        $employeeActivity->activity_notes       = $request->activity_notes;
        $employeeActivity->employee_id          = $request->employee_id;
        $employeeActivity->save();

        return response()->json(['data' => $employeeActivity], 201);
    }

    public function show(EmployeeActivities $employeeActivity)
    {
        return response()->json(['data' => $employeeActivity]);
    }

    public function update(Request $request,  $id)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'exists:employees,id',
            'start_time' => 'date_format:Y-m-d H:i:s',
            'end_time' => 'date_format:Y-m-d H:i:s',
            'activity_type' => 'string',
            'activity_share_level' => 'string',
            'activity_notes' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $employeeActivity = EmployeeActivities::find($id);
        $employeeActivity->start_time       = $request->start_time;
        $employeeActivity->end_time         = $request->end_time;
        $employeeActivity->activity_type    = $request->activity_type;
        $employeeActivity->activity_share_level = $request->activity_share_level;
        $employeeActivity->activity_share_level = $request->activity_share_level;
        $employeeActivity->activity_notes       = $request->activity_notes;
        $employeeActivity->employee_id          = $request->employee_id;
        $employeeActivity->save();
        return response()->json(['data' => $employeeActivity], 200);
    }

    public function destroy(EmployeeActivities $id)
    {
        $employeeActivity = EmployeeActivities::find($id);
        $employeeActivity->delete();
        return response()->json(null, 204);
    }
}
