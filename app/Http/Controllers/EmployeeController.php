<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Addon;
use App\Models\AddonSubCategories;
use App\Models\AdmissionSource;
use App\Models\AgencyBranch;
use App\Models\Caregiver;
use App\Models\Employee;
use App\Models\Restriction;
use App\Models\Attribute;
use App\Models\JobTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DataTables;

class EmployeeController extends Controller
{
    public $organization_id;
    public function __construct()
    {
        $this->middleware('permission:employee-list', ['only' => ['index']]);
        $this->middleware('permission:employee-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:employee-delete', ['only' => ['destroy', 'delete']]);
    }
    public function index()
    {
        $this->organization_id = Auth::user()->organization_id;

        $employees = Employee::where('organization_id', '=', $this->organization_id)->get();

        $agency_addon = Addon::where('name', 'like', 'Agency Branch%')->where('status', '1')->first();
        $agency_branch = get_sub_addons($agency_addon, $this->organization_id);

        $credential_addon = Addon::where('name', 'like', 'Credentials%')->where('status', '1')->first();
        $admission_source = get_sub_addons($credential_addon, $this->organization_id);

        $service_addon = Addon::where('name', 'like', 'Service Code%')->where('status', '1')->first();
        $service_code = get_sub_addons($service_addon, $this->organization_id);

        $billing_addon = Addon::where('name', 'like', 'Billing Code%')->where('status', '1')->first();
        $billing_code = get_sub_addons($billing_addon, $this->organization_id);

        $pay_type_addon = Addon::where('name', 'like', 'Pay Type%')->where('status', '1')->first();
        $pay_type = get_sub_addons($pay_type_addon, $this->organization_id);

        $job_addon = Addon::where('name', 'like', 'Job Title%')->where('status', '1')->first();
        $jobs = get_sub_addons($job_addon, $this->organization_id);

        return view('employees.index', compact('agency_branch', 'employees', 'admission_source', 'pay_type', 'billing_code', 'service_code', 'jobs'));
    }

    public function create()
    {
        $this->organization_id = Auth::user()->organization_id;
        $agency_addon = Addon::where('name', 'like', 'Agency Branch%')->where('status', '1')->first();
        $agency_branch = get_sub_addons($agency_addon, $this->organization_id);

        $credential_addon = Addon::where('name', 'like', 'Credentials%')->where('status', '1')->first();
        $admission_source = get_sub_addons($credential_addon, $this->organization_id);

        $job_addon = Addon::where('name', 'like', 'Job Title%')->where('status', '1')->first();
        $jobs = get_sub_addons($job_addon, $this->organization_id);

        return view('employees.create',  compact('agency_branch', 'admission_source', 'jobs'));
    }

    public function store(EmployeeRequest $request){}

    public function show($id)
    {
        $this->organization_id = Auth::user()->organization_id;
        $employee = Employee::find($id);
        $employees = Employee::where('status', 1)->get();

//        $matching_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
//                                ->where('addons.name', 'Matching Code')
//                                ->select(['addon_sub_categories.*'])
//                                ->get();
        $matching_codes = Addon::where('name', 'like', 'Matching Code%')->where('status', '1')->first();
        $matching_codes = get_sub_addons($matching_codes, $this->organization_id);

//        $restriction_codes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
//                                ->where('addons.name', 'Restriction')
//                                ->select(['addon_sub_categories.*'])
//                                ->get();
        $restriction_codes = Addon::where('name', 'like', 'Restriction%')->where('status', '1')->first();
        $restriction_codes = get_sub_addons($restriction_codes, $this->organization_id);

//        $categories = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
//                                ->where('addons.name', 'Category')
//                                ->select(['addon_sub_categories.*'])
//                                ->get();
        $categories = Addon::where('name', 'like', 'Category%')->where('status', '1')->first();
        $categories = get_sub_addons($categories, $this->organization_id);

//        $allAttributes = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
//                                ->where('addons.name', 'Attribute')
//                                ->select(['addon_sub_categories.*'])
//                                ->get();
        $allAttributes = Addon::where('name', 'like', 'Attribute%')->where('status', '1')->first();
        $allAttributes = get_sub_addons($allAttributes, $this->organization_id);

//        $compatibilitys = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
//                                ->where('addons.name', 'Compatibility  Code')
//                                ->orWhere('addons.name', 'Compatibility Code')
//                                ->select(['addon_sub_categories.*'])
//                                ->get();
        $compatibilitys = Addon::where('name', 'like', 'Compatibility  Code%')->where('status', '1')->first();
        $compatibilitys = get_sub_addons($compatibilitys, $this->organization_id);

//        $atrs = Addon::join('addon_sub_categories', 'addons.id', 'addon_sub_categories.addon_id')
//                                ->where('addons.name', 'Attribute')
//                                ->select(['addon_sub_categories.*'])
//                                ->get();
        $atrs = Addon::where('name', 'like', 'Attribute%')->where('status', '1')->first();
        $atrs = get_sub_addons($atrs, $this->organization_id);

        $agency_addon = Addon::where('name', 'like', 'Agency Branch%')->where('status', '1')->first();
        $agency_branch = get_sub_addons($agency_addon, $this->organization_id);

        $credential_addon = Addon::where('name', 'like', 'Credentials%')->where('status', '1')->first();
        $admission_source = get_sub_addons($credential_addon, $this->organization_id);

        $service_addon = Addon::where('name', 'like', 'Service Code%')->where('status', '1')->first();
        $service_code = get_sub_addons($service_addon, $this->organization_id);

        $billing_addon = Addon::where('name', 'like', 'Billing Code%')->where('status', '1')->first();
        $billing_code = get_sub_addons($billing_addon, $this->organization_id);

        $pay_type_addon = Addon::where('name', 'like', 'Pay Type%')->where('status', '1')->first();
        $pay_type = get_sub_addons($pay_type_addon, $this->organization_id);

        $job_addon = Addon::where('name', 'like', 'Job Title%')->where('status', '1')->first();
        $jobs = get_sub_addons($job_addon, $this->organization_id);

        $doc_type_addon = Addon::where('name', 'like', 'Document Type%')->where('status', '1')->first();
        $docs = get_sub_addons($doc_type_addon, $this->organization_id);

        $doc_name_addon = Addon::where('name', 'like', 'Document Name%')->where('status', '1')->first();
        $doc_name = get_sub_addons($doc_name_addon, $this->organization_id);

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

        $restrictions = Restriction::whereEmployeeId($id)->latest()->get();
        $attributes = Attribute::whereEmployeeId($id)->latest()->get();
        $caregivers = Caregiver::whereEmployeeId($id)->latest()->get();

        return view('employees.show', compact('agency_branch', 'employee', 'employees', 'matching_codes', 'compatibilitys', 'allAttributes', 'categories', 'restriction_codes', 'atrs', 'admission_source', 'pay_type', 'billing_code', 'service_code', 'employee_pays', 'docs', 'doc_name', 'jobs','restrictions','attributes','caregivers'));
    }


    public function edit($id)
    {
        $agency_branch = AgencyBranch::where('active_status', '1')->get();
        $admission_source = AdmissionSource::where('active_status', '1')->get();
        $jobs = JobTitle::where('active_status', '1')->get();
        return view('employees.create',  compact('agency_branch', 'admission_source', 'jobs'));
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $user = Employee::find($id);
        if($user) {
            $user->delete($id);
            return redirect()->route('employees.index')->with('success', 'Employee was deleted successfully. ');
        } else {
            return redirect()->route('employees.index')->with('error', 'Employee was not deleted successfully. ');
        }
    }


    public function EmployeesAjax(Request $request) {
        if($request->ajax())
        {
            $data= Employee::all();
            // dd($data);
            // $data = Patient::select('first_name', 'middle_name', 'last_name', 'patient_code')->where()->;

            /* if($request->filled('from_date') && $request->filled('to_date'))
            {
                $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
            } */

            return DataTables::of($data)->addIndexColumn()
            ->addColumn('id', function ($employee) {
                return '<input type="checkbox" name="employee_ids[]" value="'.$employee->id.'">';
             })
             ->addColumn('name', function ($employee) {
                return $employee->first_name . ' ' . $employee->last_name;
             })
             ->addColumn('employee_id', function ($employee) {
                return $employee->employee_id;
             })
             ->addColumn('dob', function ($employee) {
                return $employee->dob;
             })
             ->addColumn('address', function ($employee) {
                return $employee->address_line_1;
             })
             ->rawColumns(['id', 'name', 'employee_id', 'dob', 'address'])
            ->make(true);
        }
    }
}
