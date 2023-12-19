<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use App\Models\AddonSubCategories;
use App\Models\AdmissionSource;
use App\Models\AgencyBranch;
use App\Models\EmployeeLeave;
use App\Models\EmployeeAttendance;
use App\Models\Employee;
use App\Models\RequestTimeOff;
use App\Models\WorkDayTables;
use App\Models\JobTitle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\ExcelExport\EmployeesExport;

class EmployeeController extends Controller
{

    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $employees = Employee::where('organization_id', '=', $organization_id)->get();

        return response()->json([
            'status' => 200,
            'data' => $employees
        ]);
    }

    public function create()
    {
        $agency_branch = AgencyBranch::where('active_status', '1')->get();
        $admission_source = AdmissionSource::where('active_status', '1')->get();
        $jobs = JobTitle::where('active_status', '1')->get();
        return response()->json([
            'status' => 200,
            'agency_branch' => $agency_branch,
            'admission_source' => $admission_source,
            'jobs' => $jobs,
        ]);
    }

    public function generate_unique_number($last_id, $padding = 4)
    {
        $prefix = 0;
        $rand_number = rand(1231,7879);
        $serial = str_pad($last_id + 1, $padding, '0', STR_PAD_LEFT);
        return $rand_number + $serial;
    }

    public function store(EmployeeRequest $request)
    {

        $organization_id = Auth::user()->organization_id;

        $lastId = Employee::orderBy('created_at', 'desc')->value('id');
        $employee = new Employee();

        if ($request->hasFile('photo')) {
            $ext = $request->file('photo')->extension();
            $final_name = time() . '-' . uniqid() . '-' . 'photo' . '.' . $ext;

            $request->file('photo')->move(public_path('employee/'), $final_name);

            $employee->photo = $final_name;
        }
        $employee->supervisor_id = Auth::user()->id;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->dob = $request->dob;
        $employee->doh = $request->doh;
        $employee->dot = $request->dot;
        $employee->ssn = $request->ssn;
        $employee->mi = $request->mi;
        $employee->status = $request->status;
        $employee->employee_id = $this->generate_unique_number($lastId ?? 0, 4);
        $employee->organization_id = $organization_id;
        $employee->type = $request->type;
        $employee->job_title = $request->job_title;
        $employee->credentials = $request->credentials;
        $employee->agency_branch = $request->agency_branch;
        $employee->address_line_1 = $request->address_line_1;
        $employee->address_line_2 = $request->address_line_2;
        $employee->county = $request->county;
        $employee->lat = $request->lat;
        $employee->lon = $request->lon;
        $employee->mobile_phone = $request->phone;
        $employee->home_phone = $request->home_phone;
        $employee->emergency = $request->emergency;
        $employee->gender = $request->gender;

        $employee->city = $request->city;
        $employee->fax = $request->fax;
        $employee->email = $request->email;
        $employee->state = $request->state;
        $employee->zip = $request->zip;

        $employee->prefered_contact = $request->prefered_contact;
        $employee->save();

        $lastUserId = User::orderBy('created_at', 'desc')->value('id');
        $user = new User();
        $user->user_code = $employee->employee_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make(12345678);
        $user->organization_id = $organization_id;
        $user->created_by = Auth::user()->id;
        $user->save();

        UserInfo::create([
            'user_id' => $user->id,
            'phone_number' => $request->phone,
            'dob' => $request->dob,
            'address' => $request->address_line_1,
        ]);

        $user->assignRole('employee');

        return response()->json([
            'status' => 200,
            'message' => 'Employee Added Successfully!',
        ]);
    }


    public function show($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            return response()->json([
                'status' => 200,
                'employee' => $employee,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No employee found!',
            ]);
        }
    }


    public function edit($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            return response()->json([
                'status' => 200,
                'employee' => $employee,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No employee found!',
            ]);
        }
    }

    public function update(EmployeeRequest $request, $id)
    {
        $request->all();

        $employee = Employee::find($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->dob = $request->dob;
        $employee->ssn = $request->ssn;
        $employee->mi = $request->mi;
        $employee->status = $request->status;

        $employee->type = $request->type;
        $employee->job_title = $request->job_title;
        $employee->credentials = $request->credentials;
        $employee->agency_branch = $request->agency_branch;
        $employee->address_line_1 = $request->address_line_1;
        $employee->address_line_2 = $request->address_line_2;
        $employee->county = $request->county;
        $employee->lat = $request->lat;
        $employee->lon = $request->lon;
        $employee->mobile_phone = $request->phone;
        $employee->home_phone = $request->home_phone;
        $employee->emergency = $request->emergency;
        $employee->gender = $request->gender;

        $employee->city = $request->city;
        $employee->fax = $request->fax;
        $employee->email = $request->email;
        $employee->state = $request->state;
        $employee->zip = $request->zip;

        $employee->prefered_contact = $request->prefered_contact;

        if ($request->hasFile('photo')) {
            if ($employee->photo !== null) {
                $imagePath = public_path('employee/' . $employee->photo);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $ext = $request->file('photo')->extension();
            $final_name = time() . '-' . uniqid() . '-' . 'photo' . '.' . $ext;
            $request->file('photo')->move(public_path('employee/'), $final_name);
            $employee->photo = $final_name;
        }

        $employee->update();

        return response()->json([
            'status' => 200,
            'message' => 'Employee Updated Successfully!',
        ]);
    }


    public function destroy($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->delete();
            return response()->json([
                'status' => 200,
                'message' => 'employee Deleted Successfully!',
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'employee not found!',
            ]);
        }
    }

    public function downloadEmployeesExcel()
    {
        $employees = Employee::all();

        $file = Excel::download(new EmployeesExport($employees), 'employees.xlsx')->getFile();

        $url = url('/') . '/' . $file->getPathname();

        return response()->json([
            'status' => 'success',
            'message' => 'Employees data exported successfully',
            'data' => [
                'url' => $url,
            ],
        ]);
    }
    public function attendanceList()
    {
        $userId = Auth::user()->id;
        $employeeAttendanceData =  EmployeeAttendance::where('user_id', $userId)->with('getEmployee')->get();
        $time_format = WorkDayTables::settings()->value("time_format");
        return view('employees.ownAttendance', compact('employeeAttendanceData', 'time_format'));
    }
    public function leaveApplyForm()
    {
        $url=route('apply.leave');
        $heading='Apply Leave';
        return view('employees.apply-leave-form',compact('url','heading'));
    }
    public function leaveApply(Request $request)
    {
        $employee = Auth::user('email')->getEmployee;
        EmployeeLeave::insert([
            'employee_id' => $employee->employee_id,
            'user_id' => Auth::user()->id,
            'supervisor_id' => $employee->supervisor_id,
            'leave_from'=> $request->leaveFrom,
            'leave_type' => $request->leaveType,
            'leave_until' => $request->leaveUntil,
            'return_date' => $request->returnDate,
            'reason' => $request->reason,
        ]);
        return redirect()->back();
    }
    public function leaveList()
    {
        $employee = Auth::user('email')->getEmployee;

        if ((Auth::user()->id != 1) && (Auth::user()->id !=2) ) {
            $employeeLeaves = EmployeeLeave::where('user_id', Auth::user()->id)->get();
        } else {
            $employeeLeaves = EmployeeLeave::where('supervisor_id', $employee->supervisor_id)->get();
        }
        return view('employees.employee-leavelist', compact('employeeLeaves'));
    }

    public function editLeave(Request $request)
    {
        $url=route('update-leave',['leaveId'=>$request->leaveId]);
        $heading='Update Leave';
        $employeeLeaveData=EmployeeLeave::where('id',$request->leaveId)->first();
        return view('employees.apply-leave-form',compact('employeeLeaveData','url','heading'));
    }
    public function UpdateLeave(Request $request)
    {
        EmployeeLeave::where('id',$request->leaveId)->update([
            'leave_from'=> $request->leaveFrom,
            'leave_type' => $request->leaveType,
            'leave_until' => $request->leaveUntil,
            'return_date' => $request->returnDate,
            'reason' => $request->reason,
            'status' => $request->status,
        ]);

        return redirect()->route('leave-list');
    }
    public function deleteLeave(Request $request)
    {
        EmployeeLeave::where('id',$request->leaveId)->delete();
        return redirect()->back();
    }
    public function requestTimeOff()
    {
        // if (permission::permitted('schedule-add')=='fail'){ return redirect()->route('denied'); }
             
        $employees = Employee::get();
        $time_format = WorkDayTables::settings()->value("time_format");
        $heading='Add RequestTimeOff';
        $url=route('request-time-off-add');
        $restDays=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
         return view('employees.request-time-off-form',compact('employees','time_format','heading','url','restDays'));
    }
    public function requestTimeOffAdd(Request $request)
    {
        // $intime = date("h:i", strtotime($request->startTime)) ;
        // $outime = date("h:i ", strtotime($request->offTime)) ;
        $restday = ($request->restDay != null) ? implode(',', $request->restDay) : null ;
        RequestTimeOff::insert([
            'employee_id' => $request->employee_id,
            'employee_name' =>mb_strtoupper($request->employee_name) ?? '',
            'intime' =>$request->startTime ?? '',
            'outime'=> $request->offTime ?? '',
            'datefrom' =>$request->dateFrom,
            'dateto' => $request->dateUntil,
            'hours' => $request->totalHours,
            'restday' =>  $restday,
            'status' =>  $request->status ?? 0,
            'archive' =>'0',
        ]);
        return redirect()->route('request-time-off-list');
    }
    public function requestTimeOffList(Request $request)
    {
       $timeOffEmployeesLists= RequestTimeOff::orderby('id','DESC')->get();
       return view('employees.request-time-off-list',compact('timeOffEmployeesLists'));
    }
    public function editrequestTimeOff(Request $request)
    {
        $employees = Employee::get();
        $time_format = WorkDayTables::settings()->value("time_format");
        $restDays=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        $url=route('update-request-time-off',['timeOffId'=>$request->timeOffId]);
        $heading='Update RequestTimeOff';
        $timeOffEmployeesData=RequestTimeOff::where('id',$request->timeOffId)->first();
        return view('employees.request-time-off-form',compact('timeOffEmployeesData','url','heading','time_format','restDays','employees'));
    }
    public function updaterequestTimeOff(Request $request)
    {
        $restday = ($request->restDay != null) ? implode(',', $request->restDay) : null ;
        RequestTimeOff::where('id',$request->timeOffId)->update([
            'employee_id' => $request->employee_id,
            'employee_name' =>mb_strtoupper($request->employee_name) ?? '',
            'intime' =>$request->startTime ?? '',
            'outime'=> $request->offTime ?? '',
            'datefrom' =>$request->dateFrom,
            'dateto' => $request->dateUntil,
            'hours' => $request->totalHours,
            'restday' =>  $restday,
            'status' =>  $request->status ?? 0,
            'archive' =>'0',
        ]);

        return redirect()->route('request-time-off-list');
    }
    public function deleterequestTimeOff(Request $request)
    {
        RequestTimeOff::where('id',$request->timeOffId)->delete();
        return redirect()->back();
    }
}
