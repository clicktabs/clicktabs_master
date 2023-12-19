<?php
/*
* Workday - A time clock application for employees
* URL: https://codecanyon.net/item/workday-a-time-clock-application-for-employees/23076255
* Support: official.codefactor@gmail.com
* Version: 7.0
* Author: Brian Luna
* Copyright 2023 Codefactor
*/
namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\Models\WorkDayTables;
use App\Models\Employee;
use App\Models\EmployeeAttendance;
use App\Classes\Permission;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class ClockController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('permission:employee-list', ['only' => ['index']]);
//        $this->middleware('permission:employee-create', ['only' => ['create', 'store', 'edit', 'update']]);
//        $this->middleware('permission:employee-delete', ['only' => ['destroy', 'delete']]);
////        $this->middleware('permission:org-view', ['only' => ['show']]);
//    }

    public function clockView()
    {
        $data = WorkDayTables::settings()->where('id', 1)->first();

        $timezone = $data->timezone;

        $timeformat = $data->time_format;

        $rfid = $data->rfid;

        return view('webclock', [
            'timezone' => $timezone,
            'timeformat' => $timeformat,
            'rfid' => $rfid
        ]);
    }

    public function clocking(Request $request)
    {
        if ($request->idno == null)
        {
            return response()->json([
                "error" => trans("Please enter your ID number")
            ]);
        }

        if($request->type ==  null)
        {
            return response()->json([
                "error" => trans("Please click the click-in or clock-out button")
            ]);
        }

        $requestedEmployeeId = strtoupper($request->idno);

        $type = $request->type;

        $date = date('m-d-y');

        $time = date('h:i:s A');

        $ip = $request->ip();

        # ip resriction
        $iprestriction = WorkDayTables::settings()->value('iprestriction');

        if ($iprestriction != null)
        {
            $ips = explode(",", $iprestriction);

            if(in_array($ip, $ips) == false)
            {
                return response()->json([
                    "error" => trans("Your device it not registered")
                ]);
            }
        }

        # employee
        $employee_id = Employee::where('employee_id', $requestedEmployeeId)->value('id');

        if($employee_id == null)
        {
            return response()->json([
                "error" => trans("Employee not found")
            ]);
        }

        $person = Employee::where('id', $employee_id)->first();

        $lastname = $person->last_name;

        $firstname = $person->first_name;

        $employee = mb_strtoupper($lastname.', '.$firstname);

        # settings
        $settings = WorkDayTables::settings()->where('id', 1)->first();

        $timezone = $settings->timezone;

        $timeformat = $settings->time_format;

        if ($type == 'clockin')
        {
            $has = EmployeeAttendance::where([['employee_id', $requestedEmployeeId],['date', $date]])->exists();

            if ($has == 1)
            {
                $hti = EmployeeAttendance::where([['employee_id', $requestedEmployeeId],['date', $date]])->value('timein');

                $hti = date('h:i A', strtotime($hti));

                $hti_24 = ($timeformat == 12) ? $hti : date("H:i", strtotime($hti)) ;

                return response()->json([
                    "error" => trans("You were clocked-in today at")." ".$hti_24,
                ]);

            } else {

                // $last_in_notimeout = EmployeeAttendance::where([['employee_id', $requestedEmployeeId],['timeout', NULL]])->count();

                // if($last_in_notimeout >= 1)
                // {
                //     return response()->json([
                //         "error" => trans("You are not allowed to clock in twice or more in a day")
                //     ]);

                // }
                // else {

                    // $sched_in_time = WorkDayTables::schedules()->where([['id_number', $idno], ['archive', 0]])->value('intime');

                    // if($sched_in_time == NULL)
                    // {
                    //     $status_in = null;

                    // } else {

                    //     $sched_clock_in_time_24h = date("H.i", strtotime($sched_in_time));

                    //     $time_in_24h = date("H.i", strtotime($time));

                    //     if ($time_in_24h <= $sched_clock_in_time_24h)
                    //     {
                    //         $status_in = trans("In Time");

                    //     } else {

                    //         $status_in = trans("Late In");
                    //     }
                    // }

                    EmployeeAttendance::insert([
                        [
                            'user_id' => Auth::user()->id,
                            'employee_id' => $requestedEmployeeId,
                            'date' => $date,
                            'employee_name' => $employee,
                            'timein' => $date." ".$time,
                            'status_timein' => NULL ,
                            // $status_in
                        ],
                    ]);

                    return response()->json([
                        "type" => $type,
                        "time" => $time,
                        "date" => $date,
                        "employee" => $employee,
                    ]);
                // }
            }
        }

        if ($type == 'clockout')
        {
            $timeIN = EmployeeAttendance::where([['employee_id', $requestedEmployeeId], ['timeout', NULL]])->value('timein');

            $clockInDate = EmployeeAttendance::where([['employee_id', $requestedEmployeeId],['timeout', NULL]])->value('date');

            $hasout = EmployeeAttendance::where([['employee_id', $requestedEmployeeId],['date', $date]])->value('timeout');

            $timeOUT = date("Y-m-d h:i:s A", strtotime($date." ".$time));

            if($timeIN == NULL)
            {
                return response()->json([
                    "error" => trans("You are not clocked-in")
                ]);
            }

            if ($hasout != NULL)
            {
                $hto = EmployeeAttendance::where([['employee_id', $requestedEmployeeId],['date', $date]])->value('timeout');

                $hto = date('h:i A', strtotime($hto));

                $hto_24 = ($timeformat == 12) ? $hto : date("H:i", strtotime($hto)) ;

                return response()->json([
                    "error" => trans("You were clocked-out today at")." ".$hto_24,
                ]);

            } else {

                // $sched_out_time = WorkDayTables::schedules()->where([['idno', $idno], ['archive', 0]])->value('outime');

                // if($sched_out_time == NULL)
                // {
                //     $status_out = null;

                // } else {

                //     $sched_clock_out_time_24h = date("H.i", strtotime($sched_out_time));

                //     $time_out_24h = date("H.i", strtotime($timeOUT));

                //     if($time_out_24h >= $sched_clock_out_time_24h)
                //     {
                //         $status_out = trans("On Time");

                //     } else {

                //         $status_out = trans("Early Out");
                //     }
                // }

                $time1 = Carbon::createFromFormat("m-d-y h:i:s A", $timeIN);
                $time2 = Carbon::createFromFormat("m-d-y h:i:s A", $timeOUT);
                $th = $time1->diffInHours($time2);
                $tm = floor(($time1->diffInMinutes($time2) - (60 * $th)));
                $totalhour = $th.".".$tm;

                EmployeeAttendance::where([['employee_id', $requestedEmployeeId],['date', $clockInDate]])->update(array(
                    'timeout' => $timeOUT,
                    'totalhours' => $totalhour,
                    'status_timeout' => NULL)
                    //$status_out
                );

                return response()->json([
                    "type" => $type,
                    "time" => $time,
                    "date" => $date,
                    "employee" => $employee,
                ]);
            }
        }
    }

}
