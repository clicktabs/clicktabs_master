<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\Services;
use App\Models\Schedule;
use App\Models\Physician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\CallLog;
use Carbon\Carbon;
use App\Models\Account;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;

class DashboardController extends Controller
{
    public function index()
    {
        date_default_timezone_set('EST'); // Set the desired time zone

        $currentHour = date('H'); // Get the current hour in 24-hour format
        if ($currentHour >= 0 && $currentHour < 12) {
            $greatings = "Good Morning!";
        } elseif ($currentHour >= 12 && $currentHour < 17) {
            $greatings = "Good Afternoon!";
        } else {
            $greatings = "Good Evening!";
        }

        $user = Auth::user();

        $org_id = $user->organization_id;
        $patients = Patient::where('organization_id', $org_id)->get();
        $callLogs = CallLog::with('patient')->get();
        $callLogs = [];

        $physicians = Physician::where('org_id', $org_id)->get();

        $employees = Employee::where('organization_id', $org_id)->get();

        $service_addon = Addon::where('name', 'like', 'Service Code%')->where('status', '1')->first();
        $service_codes = get_sub_addons($service_addon, $org_id);

        $payors = Addon::where('name', 'like', 'Payor%')->where('status', '1')->first();
        $payors = get_sub_addons($payors, $org_id);

        $addon = Addon::where('name', 'like', 'Office Location%')->where('user_id', '=', $user->id)->first();
        $office_locations = get_sub_addons($addon, $org_id);

        // For admin dashboard permission
        $user_admin_dashboard_permission = $user->hasPermissionTo('admin-dashboard');

        // Assign dashboard value depend on permission
        if($user_admin_dashboard_permission) {
            $employee_patients = Patient::where('organization_id', $org_id)->get();
            $current_user = $user;
            $current_user = Employee::where('organization_id', $org_id)->get();
            $employee_task = Schedule::where('organization_id', '=', $org_id)->get();
        }

        // For employee dashboard
        $user_employee_dashboard_permission = $user->hasPermissionTo('employee-dashboard');
        $current_user='';
        $employee_patients='';
        $employee_task='';

        $accountInfo = Account::select('phone', 'zip')->where('user_id', Auth::user()->id)->first();

        // if($user_employee_dashboard_permission) {
            $employee_patients = [];
            $current_user = $user;
            $current_user = Employee::where('employee_id', '=', $current_user->user_code)->first();
            $employee_patient_ids = $current_user ? Schedule::select('patient_id')->where('employee_id', '=', $current_user->id)->distinct()->get() : [];
            $employee_task = $current_user ? Schedule::where('employee_id', '=', $current_user->id)->get() : [];

            foreach($employee_patient_ids as $single_patient_id) {
                $employee_patients[] = Patient::find($single_patient_id)->first();
            }
        // }
        // return Auth::user();
        if(Auth::user()->roles[0]["name"] == "admin" || Auth::user()->roles[0]["name"] == "Administrator" ) {
            if (!empty($user->organization_id)) {
                $subscription = Subscription::where('organization_id', $user->organization_id)->where('status', 'active')->first();

                if($subscription){
                    $subscriptionTypeName = SubscriptionPlan::where('id',$subscription->subscription_plan_id)->first('type');
                    $subscriptionPlanType =  $subscriptionTypeName ? $subscriptionTypeName->type : null;
                } else {
                    $subscriptionPlanType = null;
                }

            } else {
                $subscriptionPlanType = null;
            }
        }else{
            $subscriptionPlanType = null;
        }

        // dd($current_user);

        return view('dashboard', compact('subscriptionPlanType','greatings', 'current_user', 'patients', 'physicians', 'callLogs', 'service_codes', 'payors', 'employees', 'employee_patients', 'user', 'employee_task','accountInfo'));
        // return view('dashboard', compact('patients', 'callLogs', 'greatings', 'services', 'service_codes', 'payors', 'employees'));
    }

    public function getControllerActions()
    {
        // Get a collection of all the routes
        $routeCollection = Route::getRoutes();
        // Create your base array of routes
        $routes = [];

        // loop through the collection of routes
        foreach ($routeCollection as $route) {

            // get the action which is an array of items
            $action = $route->getAction();

            // if the action has the key 'controller'
            if (array_key_exists('controller', $action)) {

                // explode the string with @ creating an array with a count of 2
                $explodedAction = explode('@', $action['controller']);

                // check to see if an array exists for the controller name
                if (!isset($routes[$explodedAction[0]])) {

                    // if not create it, this will look like
                    // $routes['controllerName']
                    $routes[$explodedAction[0]] = [];
                }
                // set the add the method name to the controller array
                $routes[$explodedAction[0]][] = $explodedAction[1];
            }
        }

        // show the glory of your work
        dd($routes);
    }

    public function calllogStore(Request $request)
    {
        $validatedData = $request->validate([
            'date_time' => 'required',
            'received_by' => 'required|string',
            'caller_name' => 'required|string',
            'caller_patient_name' => 'required|string',
            'topic_reason' => 'required|string',
            'intervention' => 'required|string',
            'referred' => 'required',
            'care_coordination' => 'required',
            'outcome' => 'required',
        ]);
        $validatedData['date_time'] = Carbon::parse($validatedData['date_time']);
        $callLog = CallLog::create($validatedData);
        return redirect()->back()->with('success', 'Success!!! Call log Saved Successfully');
    }
}

