<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeSchedule;

class ScheduleController extends Controller
{

    public function index()
    {
        $schedules = EmployeeSchedule::all();
        return response()->json(['data' => $schedules]);
    }

    public function create()
    {
       
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',
            'service_id'  => 'required',
            'task'        => 'nullable'  
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        } else {

        $schedule                    = new EmployeeSchedule();
        $schedule->patient_id        = $request->patient_id;
        $schedule->employee_id       = $request->employee_id;
        $schedule->start_date        = $request->start_date;
        $schedule->end_date          = $request->end_date;
        $schedule->service_id        = $request->service_id;
        $schedule->mr_no             = $request->mr_no;
        $schedule->mr                = $request->mr;
        $schedule->task              = $request->task;
        $schedule->bill_unit         = $request->bill_unit;
        $schedule->pay_unit          = $request->pay_unit;
        $schedule->status            = $request->status;
        $schedule->primary_payer     = $request->primary_payer;
        $schedule->note              = $request->note;
        $schedule->save();

        return response()->json(['data' => $schedule], 201);

        }
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
       
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',
            'service_id'  => 'required',
            'task'        => 'nullable'
            
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        } else {

        $schedule                    = EmployeeSchedule::find($id);
        $schedule->patient_id        = $request->patient_id;
        $schedule->employee_id       = $request->employee_id;
        $schedule->start_date        = $request->start_date;
        $schedule->end_date          = $request->end_date;
        $schedule->service_id        = $request->service_id;
        $schedule->mr_no             = $request->mr_no;
        $schedule->mr                = $request->mr;
        $schedule->task              = $request->task;
        $schedule->bill_unit         = $request->bill_unit;
        $schedule->pay_unit          = $request->pay_unit;
        $schedule->status            = $request->status;
        $schedule->primary_payer     = $request->primary_payer;
        $schedule->note              = $request->note;
        $schedule->save();

        return response()->json(['data' => $schedule], 201);

        }
    }


    public function destroy($id)
    {
        $schedule  = EmployeeSchedule::find($id);
        $schedule->delete();
        return response()->json(['message' => $schedule], 204);
    }
}
