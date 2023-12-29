<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleStoreRequest;
use DatePeriod;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Employee;
use App\Models\Addon;
use App\Models\AddonSubCategories;
use App\Models\Services;
use App\Models\Schedule;
use App\Models\PatientEpisodeManager;
use DateTime;
use DateInterval;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Hhavisitnote;
use App\Models\Hhavisitnote1;
use App\Models\Hhavisitnote2;
use App\Models\Medication;
use App\Models\Account;
use App\Models\Pharmacy;
use App\Models\Physician;

class ScheduleCalendar extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:scheduled-create', ['only' => ['index']]);
        $this->middleware('permission:schedule-list', ['only' => ['list']]);
        $this->middleware('permission:scheduled-create', ['only' => ['store']]);
        $this->middleware('permission:scheduled-delete', ['only' => ['deleteSchedule']]);
        $this->middleware('permission:scheduled-show', ['only' => ['show']]);
        $this->middleware('permission:scheduled-edit', ['only' => ['getEditWeekSchedule']]);
    }

    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->where('status', '=', 'admit')->get();
        $employees = Employee::where('organization_id', '=', $organization_id)->get();
        $services = Services::all();

        $service_codes = Addon::where('name', 'like', 'Service Code%')->where('status', '1')->first();
        $service_codes = get_sub_addons($service_codes, $organization_id);

        $payors = Addon::where('name', 'like', 'Payor%')->where('status', '1')->first();
        $payors = get_sub_addons($payors, $organization_id);

        $tasks = Addon::where('name', 'like', 'Tasks%')->where('status', '1')->first();
        $tasks = get_sub_addons($tasks, $organization_id);

        $todayDate = date('Y-m-d');
        $currentDate = PatientEpisodeManager::select('episode_start_date', 'episode_end_date')
            ->where('episode_start_date', '<=', $todayDate)
            ->where('episode_end_date', '>=', $todayDate)
            ->first();

        if ($currentDate) {
            $previousStartDate = date('Y-m-d', strtotime('-1 day', strtotime($currentDate->episode_start_date)));
            $previousDate = PatientEpisodeManager::select('episode_start_date', 'episode_end_date')
                ->where('episode_start_date', '<=', $previousStartDate)
                ->where('episode_end_date', '>=', $previousStartDate)
                ->first();

            if (!$previousDate) {
                $previousDate = null;
            }

            $nextEndDate = date('Y-m-d', strtotime('+1 day', strtotime($currentDate->episode_end_date)));

            $nextDate = PatientEpisodeManager::select('episode_start_date', 'episode_end_date')
                ->where('episode_start_date', '<=', $nextEndDate)
                ->where('episode_end_date', '>=', $nextEndDate)
                ->first();

            if (!$nextDate) {
                $nextDate = null;
            }
        } else {
            $previousDate = null;
            $nextDate = null;
        }

        return view('scheduling.index', compact('patients', 'employees', 'service_codes', 'payors', 'services', 'tasks','currentDate','previousDate','nextDate'));
    }

    public function getEpisodeDates(Request $request, $patientId) {
        $today = Carbon::today();
        $currentDate = PatientEpisodeManager::select('episode_start_date', 'episode_end_date')
            ->where('patient_id', $patientId)
            ->whereDate('episode_start_date', '<=', $today)
            ->whereDate('episode_end_date', '>=', $today)
            ->first();

        $previousDate = $this->getAdjacentEpisodeDate($patientId, $currentDate->episode_start_date ?? null, 'previous');
        $nextDate = $this->getAdjacentEpisodeDate($patientId, $currentDate->episode_end_date ?? null, 'next');

        // Return the dates as JSON
        return response()->json([
            'previousDate' => $this->formatDateRange($previousDate),
            'currentDate' => $this->formatDateRange($currentDate),
            'nextDate' => $this->formatDateRange($nextDate),
        ]);
    }

    private function getAdjacentEpisodeDate($patientId, $date, $direction = 'previous') {
        if (!$date) {
            return null;
        }

        $date = Carbon::parse($date)->{($direction === 'previous') ? 'subDay' : 'addDay'}();

        return PatientEpisodeManager::select('episode_start_date', 'episode_end_date')
            ->where('patient_id', $patientId)
            ->whereDate(($direction === 'previous') ? 'episode_end_date' : 'episode_start_date', $date)
            ->first();
    }

    private function formatDateRange($date) {
        return $date ? [
            'start' => Carbon::parse($date->episode_start_date)->format('m/d/Y'),
            'end' => Carbon::parse($date->episode_end_date)->format('m/d/Y')
        ] : ['start' => '', 'end' => ''];
    }

    public function getAllSchedule(){

        $organization_id = Auth::user()->organization_id;

        $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', '=', 'employees.id')
            ->leftJoin('patients', 'schedule.patient_id', '=', 'patients.id')
            ->select([
                'employees.first_name',
                'employees.last_name',
                'patients.first_name as patient_first_name',
                'patients.last_name as patient_last_name',
                'schedule.*'
            ])
            ->where('employees.organization_id', '=', $organization_id) // Example where clause
            ->where('patients.organization_id', '=', $organization_id) // Example where clause
            ->get();



        return response()->json([
            'status' => 200,
            'data' => $schedules,
        ]);
    }

    public function getEmployeeWiseSchedule(){
        $user = Auth::user();
        $organization_id = $user->organization_id;

        $schedulesQuery = Schedule::leftJoin('employees', 'schedule.employee_id', '=', 'employees.id')
            ->leftJoin('patients', 'schedule.patient_id', '=', 'patients.id')
            ->select([
                'employees.first_name',
                'employees.last_name',
                'patients.first_name as patient_first_name',
                'patients.last_name as patient_last_name',
                'schedule.*'
            ])
            ->where('employees.organization_id', '=', $organization_id)
            ->where('patients.organization_id', '=', $organization_id);

        // If the user is not an admin, apply additional filtering by employee_id
        if (!$user->hasRole('admin')) {
            $employeeId = Employee::where('employee_id', $user->user_code)
                ->where('organization_id', $organization_id)
                ->value('id');

            $schedulesQuery->where('schedule.employee_id', '=', $employeeId);
        }

        $schedules = $schedulesQuery->get();

        return response()->json([
            'status' => 200,
            'data' => $schedules,
        ]);
    }
    public function getUserSchedule(){

        $organization_id = Auth::user()->organization_id;
        $u_id = Employee::where('employee_id', Auth::user()->user_code)->first();

        $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', '=', 'employees.id')
            ->leftJoin('patients', 'schedule.patient_id', '=', 'patients.id')
            ->select([
                'employees.first_name',
                'employees.last_name',
                'patients.first_name as patient_first_name',
                'patients.last_name as patient_last_name',
                'schedule.*'
            ])
            ->where('schedule.employee_id', '=', $u_id->id)
            ->get();
        return response()->json([
            'status' => 200,
            'data' => $schedules,
        ]);
    }
    public function formOpen($data) {
        $schedule = Schedule::where('id', $data)->first();

        if (!$schedule) {
            return view('schedule_not_found');
        }

        switch ($schedule->task) {
            case 'Oasis-E-Death(Non-Billable)':
                return view('Skilled-Agency.oasis-e-dealth');
            case 'Oasis-E-Recertification(Billable)':
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.oasis-e-recertification', compact('patient'));
            case 'Oasis-E-Transfer(Non-Billable)':
                return view('Skilled-Agency.oasis-e-transfer');
            case 'OASIS-E Start of Care':
                $patient = Patient::where('id', $schedule->patient_id)->first();
                $patientExtraInfo = $patient->extra_info;
                $race_enc = json_decode($patientExtraInfo->race_ethnicity, true);
                $patientEthincity = $patient->ethincity;
                $ethnicities = json_decode($patientEthincity->ethincity_info, true);
                $source_of_add = json_decode($patientExtraInfo->source_of_admission, true);
                $patientInsurance = $patient->insurance;
                $patientAddressInfo = $patient->address;
                $patientEpisodeTiming = $patient->episode;
                $pTransportation = $patient->transportation;;
                $patientTransportation = json_decode($pTransportation->transportation, true);
                $episodeDaterange = PatientEpisodeManager::select('episode_start_date', 'episode_end_date')->where('id',$schedule->episode_id)->first();
                $medications = Medication::select('medication_dosage','frequency','route','status')->where('patient_id', $patient->id)->get();
                $account = Account::first();
                return view('Skilled-Agency.oasis-e-start-of-care', compact('patient','race_enc','ethnicities','source_of_add','patientInsurance','patientAddressInfo',
                'patientEpisodeTiming','patientTransportation', 'episodeDaterange','medications','schedule','account'))->with('active', 'phistory');

            case 'Skilled Nurse Visit (Billable)':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case '60-day-summary':
                return view('Skilled-Agency.60-day-summary');

            case 'Plan Of Care':
                return view('Skilled-Agency.plan-of-care');

            case 'Physician Order':
                return view('Skilled-Agency.physician-order');

            case 'Aide Supervisory Visit':
                return view('Skilled-Agency.aide-supervisory-visit');

            case 'LVN/LPN Visit (Billable)':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case 'Pediatric Skilled Nursing':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case 'Skilled Nurse Visit AM (Billable)':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case 'Skilled Nurse Visit PM (Billable)':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case 'Skilled Nurse Evaluation':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case 'SN Injection':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case 'SNV W/ Discharge Summary':
                $organization_id = Auth::user()->organization_id;
                $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
                $pharmacies = Pharmacy::where('org_id', $organization_id)->get();
                $patient = Patient::where('id', $schedule->patient_id)->first();
                return view('Skilled-Agency.nurse-visit-note.index', compact('patient', 'physicians', 'pharmacies'));

            case 'HHA Visit (Billable)':
                $hhhaData = [];
                $hhhaData['visitnote'] = Hhavisitnote::where('schedule_id', $data)->first();
                if (!empty($hhhaData['visitnote'])) {
                    $hhhaData['hhavisitnote1'] = Hhavisitnote1::where('hhavisitnote1s_id', $hhhaData['visitnote']->id)->first();
                    $hhhaData['hhavisitnote2'] = Hhavisitnote2::where('hhavisitnote2s_id', $hhhaData['visitnote']->id)->first();
                    return view('Skilled-Agency.hha-visit-note-edit', compact('data','hhhaData'));
                } else {
                    return view('Skilled-Agency.hha-visit-note', compact('data'));
                }

            default:
                return redirect()->back()->with('danger', 'Something Went Wrong!!');
        }
    }


    public function getPatientSchedule(Request $request) {
        $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', '=', 'employees.id')
            ->leftJoin('patients', 'schedule.patient_id', '=', 'patients.id')
            ->select([
                'employees.first_name',
                'employees.last_name',
                'patients.first_name as patient_first_name',
                'patients.last_name as patient_last_name',
                'schedule.*'
            ])->where('patient_id', '=', $request->id)
            ->get();
        return response()->json([
            'status' => 200,
            'data' => $schedules,
        ]);
    }

    public function getAllTodaySchedule(){
        $date = date('Y-m-d');
        $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', 'employees.id')
                            ->where('schedule.kt_calendar_datepicker_start_date', $date)
                            ->select(['employees.first_name', 'employees.last_name', 'schedule.*'])
                            ->select(['employees.first_name', 'schedule.*'])
                            ->select(['employees.first_name', 'employees.last_name', 'schedule.*'])
                            ->get();
        return response()->json($schedules);
    }

    public function getAllWeekSchedule(){
        $today = date('Y-m-d');
        $endDate = new DateTime(); // Current date
        $startDate = new DateTime(); // Current date
        $startDate->sub(new DateInterval('P6D')); // Subtract 6 days from the start date

        $dateRange = [];

        while ($startDate <= $endDate) {
            $dateRange[] = $startDate->format('Y-m-d');
            $startDate->add(new DateInterval('P1D')); // Add 1 day to the start date
        }

        $lastSevenDays = $dateRange;
        $firstDayOfWeek = date('Y-m-d', strtotime('this week', strtotime($today)));
        $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', 'employees.id')
                            ->where('schedule.kt_calendar_datepicker_start_date', '>=', $lastSevenDays[0])
                            ->where('schedule.kt_calendar_datepicker_start_date', '<=', $today)
                            ->select(['employees.first_name', 'employees.last_name', 'schedule.*'])
                            ->select(['employees.first_name', 'schedule.*'])
                            ->select(['employees.first_name', 'employees.last_name', 'schedule.*'])
                            ->get();
        return response()->json($schedules);
    }

    public function day_calendar() {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->get();
        $employees = Employee::where('organization_id', '=', $organization_id)->get();
        $services = Services::all();
        $service_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
            ->where('addons.name', 'Service Code')
            ->select(['addon_sub_categories.*'])
            ->get();
        $payors = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
            ->where('addons.name', 'Payor')
            ->select(['addon_sub_categories.*'])
            ->get();
        return view('scheduling.day', compact('patients', 'employees', 'service_codes', 'payors', 'services'));
    }

    public function week_calendar() {
        return view('scheduling.weekly');
    }

    public function list() {
        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->get();
        $employees = Employee::where('organization_id', '=', $organization_id)->get();
        $services = Services::all();
        $service_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
            ->where('addons.name', 'Service Code')
            ->select(['addon_sub_categories.*'])
            ->get();

        $payors = Addon::where('name', 'like', 'Payor%')->where('status', '1')->first();
        $payors = get_sub_addons($payors, $organization_id);

        // $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', 'employees.id')
        //                     ->select(['employees.first_name', 'schedule.*'])
        //                     ->get();

        $tasks = Addon::where('name', 'like', 'Tasks%')->where('status', '1')->first();
        $tasks = get_sub_addons($tasks, $organization_id);


        $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', '=', 'employees.id')
            ->leftJoin('patients', 'schedule.patient_id', '=', 'patients.id')
            ->select([
                'employees.first_name',
                'employees.last_name',
                'patients.first_name as patient_first_name',
                'patients.last_name as patient_last_name',
                'schedule.*'
            ])
            ->where('employees.organization_id', '=', $organization_id) // Example where clause
            ->where('patients.organization_id', '=', $organization_id) // Example where clause
            ->get();

        return view('scheduling.list', compact('schedules', 'patients', 'employees', 'services', 'service_codes', 'payors', 'tasks'));
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateEmployee(Request $request)
    {
        $schedule = Schedule::find($request->id);
        $schedule->employee_id  = $request->employee_id;
        $schedule->save();

        return response()->json([
            'status' => 200,
            'message' => 'Employee assigned successfully',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ScheduleStoreRequest $request)
    {
        $organization_id = Auth::user()->organization_id;
        $episode_id = $request->episode_id;

        if ($episode_id == 'current') {
            $todayDate = date('Y-m-d'); // Generate today's date
            $episode = PatientEpisodeManager::where('episode_start_date', '<=', $todayDate)
                ->where('episode_end_date', '>=', $todayDate)
                ->first();
        } elseif ($episode_id == 'previous') {
            $todayDate = date('Y-m-d'); // Generate today's date
            $currentEpisode = PatientEpisodeManager::where('episode_start_date', '<=', $todayDate)
                ->where('episode_end_date', '>=', $todayDate)
                ->first();

            if ($currentEpisode) {
                // Calculate the previous date from today's episode start date
                $previousStartDate = date('Y-m-d', strtotime('-1 day', strtotime($currentEpisode->episode_start_date)));

                // Find the episode for the calculated previous start date
                $episode = PatientEpisodeManager::where('episode_start_date', '<=', $previousStartDate)
                    ->where('episode_end_date', '>=', $previousStartDate)
                    ->first();
            } else {
                // Handle the case where there is no current episode
            }
        } elseif ($episode_id == 'future') {
            $todayDate = date('Y-m-d'); // Generate today's date
            $currentEpisode = PatientEpisodeManager::where('episode_start_date', '<=', $todayDate)
                ->where('episode_end_date', '>=', $todayDate)
                ->first();

            if ($currentEpisode) {
                // Calculate the next date from today's episode end date
                $nextEndDate = date('Y-m-d', strtotime('+1 day', strtotime($currentEpisode->episode_end_date)));

                // Find the episode for the calculated next end date
                $episode = PatientEpisodeManager::where('episode_start_date', '<=', $nextEndDate)
                    ->where('episode_end_date', '>=', $nextEndDate)
                    ->first();
            } else {
                // Handle the case where there is no current episode
            }
        } else {
            // Handle other cases or provide an error response
        }
         if($request->schadule_id) {
             $this->update_function($request, $request->schadule_id);
             return redirect('/schedule/calendar');
         } else {
             $start_date = $request->kt_calendar_datepicker_start_date;
             $end_date = $request->kt_calendar_datepicker_end_date;

             $start_time = Carbon::parse($request->kt_calendar_datepicker_start_date)->format('H:i:s');
             $end_time = Carbon::parse($request->kt_calendar_datepicker_end_date)->format('H:i:s');

             // Convert dates to DateTime objects
             $start_date_obj = new DateTime($start_date);
             $end_date_obj = new DateTime($end_date);

             // Calculate the difference between the dates
             $date_diff = $end_date_obj->diff($start_date_obj);

             $interval = new DateInterval('P1D'); // Represents a period of 1 day
             $date_range = new DatePeriod($start_date_obj, $interval, $end_date_obj);

             // Check if the difference is greater than or equal to 1 day
             if ($date_diff->days > 1) {
                 $sunday_dates = [];
                 $monday_dates = [];
                 $tuesday_dates = [];
                 $wednesday_dates = [];
                 $thursday_dates = [];
                 $friday_dates = [];
                 $saturday_dates = [];
                 $all_dates = [];
                 if($request->sun){
                     $current_date = clone $start_date_obj;
                     while ($current_date <= $end_date_obj) {
                         // Check if the current date is a Sunday (weekday = 0 for Sunday)
                         if ($current_date->format('w') === '0') {
                             $sunday_dates[] = $current_date->format('Y-m-d');
                         }

                         // Increment the current date by 1 day
                         $current_date->add(new DateInterval('P1D'));
                     }
                     $all_dates = array_merge($all_dates, $sunday_dates);
                 }
                 if($request->mon){
                     $current_date = clone $start_date_obj;
                     while ($current_date <= $end_date_obj) {
                         // Check if the current date is a Sunday (weekday = 1 for Monday)
                         if ($current_date->format('w') === '1') {
                             $monday_dates[] = $current_date->format('Y-m-d');
                         }

                         // Increment the current date by 1 day
                         $current_date->add(new DateInterval('P1D'));
                     }
                     $all_dates = array_merge($all_dates, $monday_dates);
                 }
                 if($request->tue){
                     $current_date = clone $start_date_obj;
                     while ($current_date <= $end_date_obj) {
                         // Check if the current date is a Sunday (weekday = 2 for Tuesday)
                         if ($current_date->format('w') === '2') {
                             $tuesday_dates[] = $current_date->format('Y-m-d');
                         }

                         // Increment the current date by 1 day
                         $current_date->add(new DateInterval('P1D'));
                     }
                     $all_dates = array_merge($all_dates, $tuesday_dates);
                 }
                 if($request->wed){
                     $current_date = clone $start_date_obj;
                     while ($current_date <= $end_date_obj) {
                         // Check if the current date is a Sunday (weekday = 3 for Wednesday)
                         if ($current_date->format('w') === '3') {
                             $tuesday_dates[] = $current_date->format('Y-m-d');
                         }

                         // Increment the current date by 1 day
                         $current_date->add(new DateInterval('P1D'));
                     }
                     $all_dates = array_merge($all_dates, $tuesday_dates);
                 }
                 if($request->thu){
                     $current_date = clone $start_date_obj;
                     while ($current_date <= $end_date_obj) {
                         // Check if the current date is a Sunday (weekday = 4 for Thursday)
                         if ($current_date->format('w') === '4') {
                             $thursday_dates[] = $current_date->format('Y-m-d');
                         }

                         // Increment the current date by 1 day
                         $current_date->add(new DateInterval('P1D'));
                     }
                     $all_dates = array_merge($all_dates, $thursday_dates);
                 }
                 if($request->fri){
                     $current_date = clone $start_date_obj;
                     while ($current_date <= $end_date_obj) {
                         // Check if the current date is a Sunday (weekday = 5 for Friday)
                         if ($current_date->format('w') === '5') {
                             $friday_dates[] = $current_date->format('Y-m-d');
                         }

                         // Increment the current date by 1 day
                         $current_date->add(new DateInterval('P1D'));
                     }
                     $all_dates = array_merge($all_dates, $friday_dates);
                 }
                 if($request->sat){
                     $current_date = clone $start_date_obj;
                     while ($current_date <= $end_date_obj) {
                         // Check if the current date is a Sunday (weekday = 6 for Saturday)
                         if ($current_date->format('w') === '6') {
                             $saturday_dates[] = $current_date->format('Y-m-d');
                         }

                         // Increment the current date by 1 day
                         $current_date->add(new DateInterval('P1D'));
                     }
                     $all_dates = array_merge($all_dates, $saturday_dates);
                 }


                 if(count($all_dates) > 0) {
                     foreach($all_dates as $all_date){
                         $schedule = new Schedule();
                         $schedule->kt_calendar_datepicker_start_date = $all_date;
                         $schedule->kt_calendar_datepicker_end_date = $all_date;
                         $schedule->start_time = $start_time;
                         $schedule->end_time = $end_time;
                         $schedule->patient_id = $request->patient_id;
                         $schedule->mileage_rate = $request->mileage_rate;
                         $schedule->user_rate  = $request->user_rate;
                         $schedule->employee_id  = $request->employee_id;
                         $schedule->task  = $request->task;
                         $schedule->sc_sub_addon_id  = $request->sc_sub_addon_id;
                         $schedule->bill_unit_type  = $request->bill_unit_type;
                         $schedule->pay_unit_type  = $request->pay_unit_type;
                         $schedule->scheduling_status  = $request->scheduling_status;
                         $schedule->payor_sub_addon_id  = $request->payor_sub_addon_id;
                         $schedule->scheduling_notes  = $request->scheduling_notes;
                         $schedule->organization_id  = $organization_id;
                         $schedule->created_at = date('Y-m-d H:i:s');
                         if ($episode) {
                            $schedule->episode_id  = $episode->id;
                        }
                         $schedule->save();
                     }
                 } else {
                        $s_date = Carbon::parse($start_date)->format('Y-m-d');
                        $e_date = Carbon::parse($end_date)->format('Y-m-d');
                         $schedule = new Schedule();
                         $schedule->kt_calendar_datepicker_start_date = $s_date;
                         $schedule->kt_calendar_datepicker_end_date = $e_date;
                         $schedule->start_time = $start_time;
                         $schedule->end_time = $end_time;
                         $schedule->patient_id = $request->patient_id;
                         $schedule->employee_id  = $request->employee_id;
                         $schedule->mileage_rate = $request->mileage_rate;
                         $schedule->user_rate  = $request->user_rate;
                         $schedule->task  = $request->task;
                         $schedule->sc_sub_addon_id  = $request->sc_sub_addon_id;
                         $schedule->bill_unit_type  = $request->bill_unit_type;
                         $schedule->pay_unit_type  = $request->pay_unit_type;
                         $schedule->scheduling_status  = $request->scheduling_status;
                         $schedule->payor_sub_addon_id  = $request->payor_sub_addon_id;
                         $schedule->scheduling_notes  = $request->scheduling_notes;
                         $schedule->organization_id  = $organization_id;
                         $schedule->created_at = date('Y-m-d H:i:s');
                         if ($episode) {
                            $schedule->episode_id  = $episode->id;
                        }
                         $schedule->save();
                 }
                 return redirect('/schedule/calendar');
             } else {
                 $schedule = new Schedule();
                 $schedule->kt_calendar_datepicker_start_date = $start_date;
                 $schedule->kt_calendar_datepicker_end_date = $end_date;
                 $schedule->start_time = $start_time;
                 $schedule->end_time = $end_time;
                 $schedule->patient_id = $request->patient_id;
                 $schedule->employee_id  = $request->employee_id;
                 $schedule->task  = $request->task;
                 $schedule->sc_sub_addon_id  = $request->sc_sub_addon_id;
                 $schedule->bill_unit_type  = $request->bill_unit_type;
                 $schedule->mileage_rate = $request->mileage_rate;
                 $schedule->user_rate  = $request->user_rate;
                 $schedule->pay_unit_type  = $request->pay_unit_type;
                 $schedule->scheduling_status  = $request->scheduling_status;
                 $schedule->payor_sub_addon_id  = $request->payor_sub_addon_id;
                 $schedule->scheduling_notes  = $request->scheduling_notes;
                 $schedule->organization_id  = $organization_id;
                 $schedule->created_at = date('Y-m-d H:i:s');
                 if ($episode) {
                    $schedule->episode_id  = $episode->id;
                }
                 if($schedule->save()){
                     return redirect('/schedule/calendar');
                 }
             }
         }
    }

    public function getEditWeekSchedule(Request $request){
        $schedule = Schedule::where('id', $request->id)->first();
        return response()->json([
            'status' => 200,
            'schedule' => $schedule,
        ]);
    }

    public function deleteSchedule(Request $request){
        for ($i = 0; $i < count($request->ids); $i++) {
            $schedule = Schedule::find($request->ids[$i]);
            if ($schedule) {
                $schedule->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'Schedule Deleted Successfully!',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Schedule not found!',
                ]);
            }
        }

//        $schedule = Schedule::where('id', $request->id)->first();
//        return response()->json([
//            'status' => 200,
//            'schedule' => $schedule,
//        ]);
    }

    public function updateDate($days, $currentDate) {
        $modified_date = Date($currentDate, strtotime($days.' days'));
        return $modified_date;
    }

//    public function udpateDragDate
    public function updateDragEvent(Request $request) {
        $formatedDate = $request->date;
        $modifyed_date = $this->updateDate($request->days, $formatedDate);
        $schedule = Schedule::find($request->schedule_id);
        $schedule->kt_calendar_datepicker_start_date = $modifyed_date;
        $schedule->kt_calendar_datepicker_end_date = $modifyed_date;
        $schedule->save();
    }

    public function updateCopyEvent(Request $request) {
        $formatedDate = $request->date;
        if($request->days !== null) {
            $modifyed_date = $this->updateDate($request->days, $formatedDate);
        } else {
            $modifyed_date = $formatedDate;
        }

        $schedule = Schedule::find($request->schedule_id);
        $newSchedule = $schedule->replicate();
        $newSchedule->kt_calendar_datepicker_start_date = $modifyed_date;
        $newSchedule->kt_calendar_datepicker_end_date = $modifyed_date;
        $newSchedule->updated_at = Carbon::now();
        $newSchedule->save();
    }

    public function editWeekSchedule(Request $request){
        if($request->kt_calendar_datepicker_start_date){
            $start_date = $request->kt_calendar_datepicker_start_date;
            $end_date = $request->kt_calendar_datepicker_end_date;

            $start_time = Carbon::parse($request->kt_calendar_datepicker_start_date)->format('H:i:s');
            $end_time = Carbon::parse($request->kt_calendar_datepicker_end_date)->format('H:i:s');
            Schedule::where('id', $request->id)->update([
                "kt_calendar_datepicker_start_date" => $start_date,
                "kt_calendar_datepicker_end_date" => $end_date,
                "start_time" => $start_time,
                "end_time" => $end_time,
                "patient_id" => $request->patient_id,
                "employee_id"  => $request->employee_id,
                "task"  => $request->task,
                "sc_sub_addon_id"  => $request->sc_sub_addon_id,
                "bill_unit_type"  => $request->bill_unit_type,
                "mileage_rate" => $request->mileage_rate,
                "user_rate"  => $request->user_rate,
                "pay_unit_type"  => $request->pay_unit_type,
                "scheduling_status"  => $request->scheduling_status,
                "payor_sub_addon_id"  => $request->payor_sub_addon_id,
                "scheduling_notes"  => $request->scheduling_notes,
                "updated_at" => date('Y-m-d H:i:s'),
            ]);
        }else{
            Schedule::where('id', $request->id)->update([
                "patient_id" => $request->patient_id,
                "mileage_rate" => $request->mileage_rate,
                "user_rate"  => $request->user_rate,
                "employee_id"  => $request->employee_id,
                "task"  => $request->task,
                "sc_sub_addon_id"  => $request->sc_sub_addon_id,
                "bill_unit_type"  => $request->bill_unit_type,
                "pay_unit_type"  => $request->pay_unit_type,
                "scheduling_status"  => $request->scheduling_status,
                "payor_sub_addon_id"  => $request->payor_sub_addon_id,
                "scheduling_notes"  => $request->scheduling_notes,
                "updated_at" => date('Y-m-d H:i:s'),
            ]);
        }

        return redirect('/schedule/calendar');
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

    public function update_function($request, $id) {
        $start_date = $request->kt_calendar_datepicker_start_date;
        $end_date = $request->kt_calendar_datepicker_end_date;
        $start_time = Carbon::parse($request->kt_calendar_datepicker_start_date)->format('H:i:s');
        $end_time = Carbon::parse($request->kt_calendar_datepicker_end_date)->format('H:i:s');

        $episode_id = $request->episode_id;

        if ($episode_id == 'current') {
            $todayDate = date('Y-m-d'); // Generate today's date
            $episode = PatientEpisodeManager::where('episode_start_date', '<=', $todayDate)
                ->where('episode_end_date', '>=', $todayDate)
                ->first();
        } elseif ($episode_id == 'previous') {
            $todayDate = date('Y-m-d'); // Generate today's date
            $currentEpisode = PatientEpisodeManager::where('episode_start_date', '<=', $todayDate)
                ->where('episode_end_date', '>=', $todayDate)
                ->first();

            if ($currentEpisode) {
                // Calculate the previous date from today's episode start date
                $previousStartDate = date('Y-m-d', strtotime('-1 day', strtotime($currentEpisode->episode_start_date)));

                // Find the episode for the calculated previous start date
                $episode = PatientEpisodeManager::where('episode_start_date', '<=', $previousStartDate)
                    ->where('episode_end_date', '>=', $previousStartDate)
                    ->first();
            } else {
                // Handle the case where there is no current episode
            }
        } elseif ($episode_id == 'future') {
            $todayDate = date('Y-m-d'); // Generate today's date
            $currentEpisode = PatientEpisodeManager::where('episode_start_date', '<=', $todayDate)
                ->where('episode_end_date', '>=', $todayDate)
                ->first();

            if ($currentEpisode) {
                // Calculate the next date from today's episode end date
                $nextEndDate = date('Y-m-d', strtotime('+1 day', strtotime($currentEpisode->episode_end_date)));

                // Find the episode for the calculated next end date
                $episode = PatientEpisodeManager::where('episode_start_date', '<=', $nextEndDate)
                    ->where('episode_end_date', '>=', $nextEndDate)
                    ->first();
            } else {
                // Handle the case where there is no current episode
            }
        } else {
            // Handle other cases or provide an error response
        }

        // Convert dates to DateTime objects
        $start_date_obj = new DateTime($start_date);
        $end_date_obj = new DateTime($end_date);

        // Calculate the difference between the dates
        $date_diff = $end_date_obj->diff($start_date_obj);
        // Check if the difference is greater than or equal to 1 day

        $interval = new DateInterval('P1D'); // Represents a period of 1 day
        $date_range = new DatePeriod($start_date_obj, $interval, $end_date_obj);
        if ($date_diff->days > 1) {
            $sunday_dates = [];
            $monday_dates = [];
            $tuesday_dates = [];
            $wednesday_dates = [];
            $thursday_dates = [];
            $friday_dates = [];
            $saturday_dates = [];
            $all_dates = [];
            if($request->sun){
                $current_date = clone $start_date_obj;
                while ($current_date <= $end_date_obj) {
                    // Check if the current date is a Sunday (weekday = 0 for Sunday)
                    if ($current_date->format('w') === '0') {
                        $sunday_dates[] = $current_date->format('Y-m-d');
                    }

                    // Increment the current date by 1 day
                    $current_date->add(new DateInterval('P1D'));
                }
                $all_dates = array_merge($all_dates, $sunday_dates);
            }
            if($request->mon){
                $current_date = clone $start_date_obj;
                while ($current_date <= $end_date_obj) {
                    // Check if the current date is a Sunday (weekday = 1 for Monday)
                    if ($current_date->format('w') === '1') {
                        $monday_dates[] = $current_date->format('Y-m-d');
                    }

                    // Increment the current date by 1 day
                    $current_date->add(new DateInterval('P1D'));
                }
                $all_dates = array_merge($all_dates, $monday_dates);
            }
            if($request->tue){
                $current_date = clone $start_date_obj;
                while ($current_date <= $end_date_obj) {
                    // Check if the current date is a Sunday (weekday = 2 for Tuesday)
                    if ($current_date->format('w') === '2') {
                        $tuesday_dates[] = $current_date->format('Y-m-d');
                    }

                    // Increment the current date by 1 day
                    $current_date->add(new DateInterval('P1D'));
                }
                $all_dates = array_merge($all_dates, $tuesday_dates);
            }
            if($request->wed){
                $current_date = clone $start_date_obj;
                while ($current_date <= $end_date_obj) {
                    // Check if the current date is a Sunday (weekday = 3 for Wednesday)
                    if ($current_date->format('w') === '3') {
                        $tuesday_dates[] = $current_date->format('Y-m-d');
                    }

                    // Increment the current date by 1 day
                    $current_date->add(new DateInterval('P1D'));
                }
                $all_dates = array_merge($all_dates, $tuesday_dates);
            }
            if($request->thu){
                $current_date = clone $start_date_obj;
                while ($current_date <= $end_date_obj) {
                    // Check if the current date is a Sunday (weekday = 4 for Thursday)
                    if ($current_date->format('w') === '4') {
                        $thursday_dates[] = $current_date->format('Y-m-d');
                    }

                    // Increment the current date by 1 day
                    $current_date->add(new DateInterval('P1D'));
                }
                $all_dates = array_merge($all_dates, $thursday_dates);
            }
            if($request->fri){
                $current_date = clone $start_date_obj;
                while ($current_date <= $end_date_obj) {
                    // Check if the current date is a Sunday (weekday = 5 for Friday)
                    if ($current_date->format('w') === '5') {
                        $friday_dates[] = $current_date->format('Y-m-d');
                    }

                    // Increment the current date by 1 day
                    $current_date->add(new DateInterval('P1D'));
                }
                $all_dates = array_merge($all_dates, $friday_dates);
            }
            if($request->sat){
                $current_date = clone $start_date_obj;
                while ($current_date <= $end_date_obj) {
                    // Check if the current date is a Sunday (weekday = 6 for Saturday)
                    if ($current_date->format('w') === '6') {
                        $saturday_dates[] = $current_date->format('Y-m-d');
                    }

                    // Increment the current date by 1 day
                    $current_date->add(new DateInterval('P1D'));
                }
                $all_dates = array_merge($all_dates, $saturday_dates);
            }

//            dd(count($all_dates));
            $i = 0;
            $organization_id = Auth::user()->organization_id;
            if(count($all_dates) > 0) {
                foreach($all_dates as $all_date){
                    if($i > 1) {
                        $schedule = new Schedule();
                    } else {
                        $schedule = Schedule::find($id);
                    }
                    $schedule->kt_calendar_datepicker_start_date = $all_date;
                    $schedule->kt_calendar_datepicker_end_date = $all_date;
                    $schedule->start_time = $start_time;
                    $schedule->end_time = $end_time;
                    $schedule->patient_id = $request->patient_id;
                    $schedule->mileage_rate = $request->mileage_rate;
                    $schedule->user_rate  = $request->user_rate;
                    $schedule->employee_id  = $request->employee_id;
                    $schedule->task  = $request->task;
                    $schedule->sc_sub_addon_id  = $request->sc_sub_addon_id;
                    $schedule->bill_unit_type  = $request->bill_unit_type;
                    $schedule->pay_unit_type  = $request->pay_unit_type;
                    $schedule->scheduling_status  = $request->scheduling_status;
                    $schedule->payor_sub_addon_id  = $request->payor_sub_addon_id;
                    $schedule->scheduling_notes  = $request->scheduling_notes;
                    $schedule->created_at = date('Y-m-d H:i:s');
                    $schedule->organization_id  = $organization_id;
                    $schedule->save();

                    $i++;
                }
            } else {
                    $schedule = Schedule::find($id);
                    if(empty($schedule)) {
                        $schedule = new Schedule();
                    } else {
                        $s_date = Carbon::parse($start_date)->format('Y-m-d');
                        $e_date = Carbon::parse($end_date)->format('Y-m-d');

                        $schedule->kt_calendar_datepicker_start_date = $s_date;
                        $schedule->kt_calendar_datepicker_end_date = $e_date;
                        $schedule->start_time = $start_time;
                        $schedule->end_time = $end_time;
                        $schedule->patient_id = $request->patient_id;
                        $schedule->mileage_rate = $request->mileage_rate;
                        $schedule->user_rate  = $request->user_rate;
                        $schedule->employee_id  = $request->employee_id;
                        $schedule->task  = $request->task;
                        $schedule->sc_sub_addon_id  = $request->sc_sub_addon_id;
                        $schedule->bill_unit_type  = $request->bill_unit_type;
                        $schedule->pay_unit_type  = $request->pay_unit_type;
                        $schedule->scheduling_status  = $request->scheduling_status;
                        $schedule->payor_sub_addon_id  = $request->payor_sub_addon_id;
                        $schedule->scheduling_notes  = $request->scheduling_notes;
                        $schedule->created_at = date('Y-m-d H:i:s');
                        if ($episode) {
                            $schedule->episode_id  = $episode->id;
                        }
                        $schedule->save();
                    }
            }
        } else {
            $schedule = Schedule::find($id);
            $schedule->kt_calendar_datepicker_start_date = $start_date;
            $schedule->kt_calendar_datepicker_end_date = $end_date;
            $schedule->start_time = $start_time;
            $schedule->end_time = $end_time;
            $schedule->patient_id = $request->patient_id;
//            $schedule->mi_no  = $request->mi_no;
//            $schedule->client_assess  = $request->client_assess;
            $schedule->mileage_rate = $request->mileage_rate;
            $schedule->user_rate  = $request->user_rate;
            $schedule->employee_id  = $request->employee_id;
            $schedule->task  = $request->task;
            $schedule->sc_sub_addon_id  = $request->sc_sub_addon_id;
            $schedule->bill_unit_type  = $request->bill_unit_type;
            $schedule->pay_unit_type  = $request->pay_unit_type;
            $schedule->scheduling_status  = $request->scheduling_status;
            $schedule->payor_sub_addon_id  = $request->payor_sub_addon_id;
            $schedule->scheduling_notes  = $request->scheduling_notes;
            $schedule->created_at = date('Y-m-d H:i:s');
            if ($episode) {
                $schedule->episode_id  = $episode->id;
            }
            $schedule->save();
        }
    }

    public function update_calendar_api(Request $request) {
        $id = $request->schadule_id;

        $this->update_function($request, $id);

        return response()->json([
            'status' => 200,
            'message' => 'Schedule updated successfully',
        ]);
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
