<?php

use App\Http\Controllers\API\EmployeeBillingController;
use App\Http\Controllers\API\PatientAdmitController;
use App\Http\Controllers\API\PatientAdvanceDirective;
use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\API\PatientDemographicsController;
use App\Http\Controllers\API\PatientDiagnosisController;
use App\Http\Controllers\API\PatientDischargeController;
use App\Http\Controllers\API\PatientEmergencyPrecedenceController;
use App\Http\Controllers\API\PatientEpisodeController;
use App\Http\Controllers\API\PatientInsuranceController;
use App\Http\Controllers\API\PatientNonAdmitController;
use App\Http\Controllers\API\PatientPharmacyController;
use App\Http\Controllers\API\PatientPhysicianController;
use App\Http\Controllers\API\PharmacyController;
use App\Http\Controllers\API\PhysicianController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\SocialWorkerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\EmployeeManagementController;
use App\Http\Controllers\API\EmployeeActivityController;
use App\Http\Controllers\API\EmployeePayController;
use App\Http\Controllers\API\EmployeeExpirationController;
use App\Http\Controllers\API\EmployeeAttachmentController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\SubCategoryController;
use App\Http\Controllers\API\ScheduleController;
use App\Http\Controllers\API\PatientAdmissionController;
use App\Http\Controllers\API\PatientEpisodeManagerController;
use App\Http\Controllers\API\InfectionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/*API CREATE FOR FORM START*/
 Route::resource('accidentrisks',AccidentRiskAssesmentController::class);
 Route::resource('changephysicians',ChangePhysicianController::class);
 Route::resource('hhasupervisors',HhaSupervisorController::class);
 Route::resource('non_oasis_recertifications',NonOasisRecertificationApiController::class);
 Route::resource('physician_orders',PhysicianOrderController::class);
 Route::resource('patient_recertifications',PatientRecertificationApiController::class);
 Route::resource('referral_intakes',ReferralIntakeController::class);
 Route::resource('post_fall_evaluations',PostFallEvaluationController::class);
 /*API CREATE FOR FORM END*/
 /*API create for hhservicerequest*/
 Route::resource('hh_service_requests',HhServiceRequestController::class);
 /*API create for hhservicerequest*/

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/employee-create', [EmployeeController::class, 'store'])->name('api.employee');
    Route::post('/employee-edit/{id}', [EmployeeController::class, 'edit'])->name('api.employee.edit');
    Route::put('/employee-update/{id}', [EmployeeController::class, 'update'])->name('api.employee.update');
    Route::get('/employee', [EmployeeController::class, 'index'])->name('api.employee.index');
    Route::get('/employee-search', [EmployeeManagementController::class, 'search'])->name('search.employee');
    Route::get('employee-attendance-list', [EmployeeController::class, 'attendanceList'])->name('employee-attendance-list');
    Route::get('leave-apply-form', [EmployeeController::class,'leaveApplyForm'])->name('leave-apply-form');
    Route::post('apply-leave', [EmployeeController::class,'leaveApply'])->name('apply.leave');
    Route::get('leave-list', [EmployeeController::class,'leaveList'])->name('leave-list');
    Route::get('edit-leave/{leaveId}', [EmployeeController::class,'editLeave'])->name('edit-leave');
    Route::post('update-leave/{leaveId}', [EmployeeController::class,'updateLeave'])->name('update-leave');
    Route::get('delete-leave/{leaveId}', [EmployeeController::class,'deleteLeave'])->name('delete-leave');
    Route::get('request-time-off-form', [EmployeeController::class,'requestTimeOff'])->name('request-time-off-form');
    Route::post('request-time-off-add', [EmployeeController::class,'requestTimeOffAdd'])->name('request-time-off-add');
    Route::get('request-time-off-list', [EmployeeController::class,'requestTimeOffList'])->name('request-time-off-list');
    Route::get('edit-request-time-off/{timeOffId}', [EmployeeController::class,'editrequestTimeOff'])->name('edit-request-time-off');
    Route::post('update-request-time-off/{timeOffId}', [EmployeeController::class,'updaterequestTimeOff'])->name('update-request-time-off');
    Route::get('delete-request-time-off/{timeOffId}', [EmployeeController::class,'deleterequestTimeOff'])->name('delete-request-time-off');
    Route::get('/download-employees', [EmployeeController::class, 'downloadEmployeesExcel']);


    Route::resources([
        'employee-activities' => EmployeeActivityController::class,
        'employee-pay' => EmployeePayController::class,
        'employee-bill' => EmployeeBillingController::class,
        'employee-expiration' => EmployeeExpirationController::class,
        'employee-attachment' => EmployeeAttachmentController::class,
        'category' => CategoryController::class,
        'sub-category' => SubCategoryController::class,
        'social-worker' => SocialWorkercontroller::class,
        'schedule' => ScheduleController::class,
        'physician' => PhysicianController::class,
        'pharmacy' => PharmacyController::class,
        'patient' => PatientController::class,
        'ethics' => EthicsController::class,

        'patient-physician' => PatientPhysicianController::class,
        'patient-diagnosis' => PatientDiagnosisController::class,
        'patient-pharmacy' => PatientPharmacyController::class,
        'patient-advance-directive' => PatientAdvanceDirective::class,
        'patient-emergency-preparedness' => PatientEmergencyPrecedenceController::class,
        'patient-episode' => PatientEpisodeController::class,
        'patient-insurance' => PatientInsuranceController::class,
        'patient-admission' => PatientAdmissionController::class,
        'patient-non-admit' => PatientNonAdmitController::class,
        'patient-admit' => PatientAdmitController::class,
        'patient-discharge' => PatientDischargeController::class,
        'patient-episode-manager' => PatientEpisodeManagerController::class,
    ]);
});
Route::resource('patient-demographic', PatientDemographicsController::class);
Route::get('admited/patients', [PatientController::class, 'admitedPatients']);
Route::get('infections', [InfectionController::class, 'index']);
