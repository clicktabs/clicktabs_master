<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Addon;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\PatientAddressInfo;
use App\Models\PatientExtraInfo;
use App\Models\Schedule;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pharmacy;
use Illuminate\Support\Facades\Auth;
use App\Models\Physician;
use App\Models\Medication;
use App\Models\Allergy;
use App\Models\Authorization;
use App\Models\Immunization;
use App\Models\Communication;
use Illuminate\Support\Facades\Log;
use App\Traits\ApiService;
use App\Models\Vital;
use App\Models\Caregiver;
use App\Models\Restriction;
use App\Models\Attribute;
use App\Models\PatientCaregiver;
use App\Models\PatientRestriction;
use App\Models\PatientAttribute;
use App\Models\NursingTask;
use App\Models\HaaTask;
use App\Models\MswOther;
use App\Models\Therapy;
use App\Models\Dietitian;
use App\Models\DailyOutliar;
use App\Models\PrimaryInsurance;
use App\Models\SecondaryInsurance;
use App\Models\Organization;
use App\Models\Account;
use App\Models\PatientHistory;
use App\Models\PhysicianOrders;
use App\Models\CMS;

use App\Models\PatientCaseManager;
use App\Models\PatientServiceAddress;
use App\Models\PatientEpisodeManager;

class PatientController extends Controller
{
    use ApiService;

    public function __construct()
    {
        $this->middleware('permission:patient-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:patient-list', ['only' => ['index']]);
        $this->middleware('permission:patient-delete', ['only' => ['destroy', 'delete']]);
//        $this->middleware('permission:org-view', ['only' => ['show']]);
    }

    public function index()
    {

        $organization_id = Auth::user()->organization_id;
        $patients = Patient::where('organization_id', '=', $organization_id)->where('status', '=', 'pending')->get();

        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        $companyId = Auth::user()->organization_id;

       // dd($companyId);

        $pharmacies = Pharmacy::where('org_id', $companyId)->get();
        $physicians = Physician::where('org_id', $companyId)->get();

        $payors = Addon::where('name', 'like', 'Payor%')->where('status', '1')->first();
        $payors_sub_addons = get_sub_addons($payors, $companyId);
        $insurance_type = Addon::where('name', 'like', 'Insurance Type%')->where('status', '1')->first();
        $insurance_type_sub_addons = get_sub_addons($insurance_type, $companyId);
        $patient_severity = Addon::where('name', 'like', 'Severity%')->where('status', '1')->first();
        $patient_severity_sub_addons = get_sub_addons($patient_severity, $companyId);

        return view('patients.create', compact('pharmacies','physicians', 'payors_sub_addons','insurance_type_sub_addons', 'patient_severity_sub_addons'));
    }

    public function store(PatientRequest $req)
    {
        $patientCode = $req->all();
        $patientCode['patient_code'] = generate_random_token('P');

        try {
            DB::transaction(function() use ($patientCode) {
                Patient::create($patientCode);
                PatientExtraInfo::create($patientCode);
                PatientAddressInfo::create($patientCode);
            });

            return redirect()->route('organizations.show', [$patientCode['org_id']])->with('success', 'Patient Record Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error! Patient Record Could Not Be Created.');
        }
    }

    public function check_icd_request(Request $request){
        Log::debug("===============>>>>>>>>>>>>> URL");
        Log::info($request->name);
        try {
            $name = $request->name;

            $requestUrl = "&terms={$name}";
            $clinical_data = $this->makeIcdRequest($requestUrl);
            Log::debug("===============>>>>>>>>>>>>> URL");
            Log::info($clinical_data);
            return response()->json(['data' => $clinical_data]);
        }catch(\Exception $th){
            return redirect()->back()->withInput();
        }
    }

    public function show($id)
    {
        $organization_id = Auth::user()->organization_id;
        $medications = Medication::with('physicianInfo')->where('patient_id',$id)->latest()->get();
        $allergies = Allergy::wherePatientId($id)->latest()->get();
        $authorizations = Authorization::wherePatientId($id)->latest()->get();
        $immunizations = Immunization::wherePatientId($id)->latest()->get();
        $communications = Communication::wherePatientId($id)->latest()->get();
        $vitals = Vital::wherePatientId($id)->latest()->get();
        $NursingTasks = NursingTask::wherePatientId($id)->latest()->get();
        $HaaTasks = HaaTask::wherePatientId($id)->latest()->get();
        $MswOthers = MswOther::wherePatientId($id)->latest()->get();
        $Therapys = Therapy::wherePatientId($id)->latest()->get();
        $Dietitians = Dietitian::wherePatientId($id)->latest()->get();
        $DailyOutliars = DailyOutliar::wherePatientId($id)->latest()->get();
        $primaryInsurances = PrimaryInsurance::where('active_status', 1)->get();
        $secondaryInsurances = SecondaryInsurance::where('active_status', 1)->get();
        $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
        $pharmacies = Pharmacy::where('org_id', $organization_id)->get();

        $matching_codes = Addon::where('name', 'like', 'Matching Code%')->where('status', '1')->first();
        $matching_codes = get_sub_addons($matching_codes, $organization_id);

        $restriction_codes = Addon::where('name', 'like', 'Restriction%')->where('status', '1')->first();
        $restriction_codes = get_sub_addons($restriction_codes, $organization_id);

        $categories = Addon::where('name', 'like', 'Category%')->where('status', '1')->first();
        $categories = get_sub_addons($categories, $organization_id);

        $allAttributes = Addon::where('name', 'like', 'Attribute%')->where('status', '1')->first();
        $allAttributes = get_sub_addons($allAttributes, $organization_id);

        $compatibilitys = Addon::where('name', 'like', 'Compatibility  Code%')->where('status', '1')->first();
        $compatibilitys = get_sub_addons($compatibilitys, $organization_id);

        $caregivers = PatientCaregiver::with('patient')->wherePatientId($id)->latest()->get();
        $restrictions = PatientRestriction::with('patient')->wherePatientId($id)->latest()->get();
        $attributes = PatientAttribute::with('patient')->wherePatientId($id)->latest()->get();
        $patients = Patient::where('organization_id', '=', $organization_id)->get();
        $patient = Patient::find($id);
        $patientHistorys = PatientHistory::all();
        $physicianOrders = PhysicianOrders::all();
        $cmss = CMS::all();


        $case_manager_info = PatientCaseManager::where('patient_id',$patient->id)->first();
        // return $case_manager_info;

        $employees = Employee::where('organization_id', '=', $organization_id)->get();
        $services = Services::all();

        $service_codes = Addon::where('name', 'like', 'Service Code%')->where('status', '1')->first();
        $service_codes = get_sub_addons($service_codes, $organization_id);

        $payors = Addon::where('name', 'like', 'Payor%')->where('status', '1')->first();
        $payors = get_sub_addons($payors, $organization_id);

        $schedules = Schedule::leftJoin('employees', 'schedule.employee_id', '=', 'employees.id')
            ->select([
                'employees.first_name',
                'employees.last_name',
                'schedule.*'
            ])
            ->where('patient_id', '=', $id)
            ->get();

        $account = Account::where('user_id', Auth::user()->id)->first();
        $orgn=Organization::find($organization_id);

        // Episode manager
        $episode_manager = PatientEpisodeManager::where('patient_id', $id)->get();

        return view('patients.show', compact('id', 'cmss','physicianOrders','patientHistorys','patients', 'patient', 'employees', 'services', 'service_codes', 'payors', 'medications', 'allergies', 'authorizations','immunizations','communications','vitals', 'matching_codes', 'restriction_codes', 'categories', 'allAttributes', 'compatibilitys', 'caregivers', 'restrictions', 'attributes', 'NursingTasks', 'HaaTasks','MswOthers','Therapys','Dietitians','DailyOutliars', 'primaryInsurances','secondaryInsurances','physicians', 'schedules', 'account','orgn', 'episode_manager', 'physicians', 'pharmacies'));
    }

    public function edit(Patient $patient)
    {
        $companyId = Auth::user()->organization_id;

        $pharmacies = Pharmacy::where('org_id', $companyId)->get();
        $physicians = Physician::where('org_id', $companyId)->get();

        $psa = PatientServiceAddress::where('patient_id',$patient->id)->first();
        $psa = PatientCaseManager::where('patient_id',$patient->id)->first();
        // return $psa;
        $pat = Patient::with('extra_info', 'diagnosis', 'emergencyContact', 'emergency', 'insurance','episode', 'service')->where('id', $patient->id)->first();
        $selectedPhysicianId = $pat->extra_info->physician_id;
        $selectpharmacyId = $pat->extra_info->pharmacy_id;
        $pDiagnosis = $pat->diagnosis;
        $emergency= $pat->emergency;
        $emergencyContact= $pat->emergencyContact;
        $payors = Addon::where('name', 'like', 'Payor%')->where('status', '1')->first();
        $payors_sub_addons = get_sub_addons($payors, $companyId);
        $insurance_type = Addon::where('name', 'like', 'Insurance Type%')->where('status', '1')->first();
        $insurance_type_sub_addons = get_sub_addons($insurance_type, $companyId);
        $patient_severity = Addon::where('name', 'like', 'Severity%')->where('status', '1')->first();
        $patient_severity_sub_addons = get_sub_addons($patient_severity, $companyId);
         $coordinationOfCare = json_decode($pat->extra_info->coordination_of_care, true);

        return view('patients.edit', compact('pat','pharmacies','physicians', 'payors_sub_addons','insurance_type_sub_addons', 'patient', 'patient_severity_sub_addons','psa','selectedPhysicianId','pDiagnosis','selectpharmacyId'));
    }

    public function update(Request $request, Patient $patient)
    {
        //
    }

    public function destroy($patient)
    {
        $toBeDeleted = Patient::where('patient_code', $patient)->first();
        $status = ($toBeDeleted->status) ?  [false, "Disabled"] :  [true, "Enabled"] ;
        try {
            $toBeDeleted->update(['status' => $status[0]]);
            return redirect()->back()->with('success', "Successful! Patient Successfully $status[1]");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Error! Patient Could Not $status[1].");
        }

    }
}
