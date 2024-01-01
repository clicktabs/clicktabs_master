<?php
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\SubCategoryController;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

use App\Http\Controllers\AddonsCategoryController;
use App\Http\Controllers\AddonsSubCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeesAplication;
use App\Http\Controllers\EmployeesListController;
use App\Http\Controllers\EVV_Controller;
use App\Http\Controllers\NonAdmitPatients;
use App\Http\Controllers\OrderManagement;
use App\Http\Controllers\ExportOasis;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PatientAdmissionController;
use App\Http\Controllers\PatientDischargeWebController;
use App\Http\Controllers\PatientListController;
use App\Http\Controllers\PatientPendingController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ScheduleCalendar;
use App\Http\Controllers\SocialWorkerController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddonController;
use App\Http\Controllers\AdmissionSourceController;
use App\Http\Controllers\AgencyBranchController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FacilityReferralSourceController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\InPatientAdmissionCodeController;
use App\Http\Controllers\InternalReferralSourceController;
use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\TaxIdTypeController;
use App\Http\Controllers\LeaveGroupController;
use App\Http\Controllers\OrganizationAddressController;
use App\Http\Controllers\OrganizationContactPersonController;
use App\Http\Controllers\OrganizationInfoController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PhysicianController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\PrimaryInsuranceController;
use App\Http\Controllers\RelationshipController;
use App\Http\Controllers\SecondaryInsuranceController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesRequiredController;
use App\Http\Controllers\TertiaryInsuranceController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\RestrictionController;
use App\Http\Controllers\AllergyController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\ImmunizationController;
use App\Http\Controllers\CaregiverController;
use App\Http\Controllers\OtdischargeController;
use App\Http\Controllers\ClockController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\VitalsController;
use App\Http\Controllers\patientCaregiverController;
use App\Http\Controllers\PatientAttributeController;
use App\Http\Controllers\PatientRestrictionController;
use App\Http\Controllers\NursingTaskController;
use App\Http\Controllers\HaaTaskController;
use App\Http\Controllers\MswOtherController;
use App\Http\Controllers\TherapyController;
use App\Http\Controllers\DietitianController;
use App\Http\Controllers\DailyOutliarController;
use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NonOasisController;
use App\Http\Controllers\SkilledAgencyController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\NursingNoteController;
use App\Http\Controllers\NewReffaralController;
use App\Http\Controllers\AideSupervisoryVisitController;
use App\Http\Controllers\PhysicianOrderController;
use App\Http\Controllers\OasisETransferController;
use App\Http\Controllers\OasisEDischargeController;
use App\Http\Controllers\OasisEResumptionofCareController;
use App\Http\Controllers\OasisExportController;
use App\Http\Controllers\OpenOasisController;
use App\Http\Controllers\OpenShiftController;
use App\Http\Controllers\CompletedTaskController;
use App\Http\Controllers\ContinueMedicationController;
use App\Http\Controllers\DischargePatientController;
use App\Http\Controllers\HospitalizationController;
use App\Http\Controllers\OnHoldController;
use App\Http\Controllers\OrderPendingsignatureController;
use App\Http\Controllers\OrderToBeSentCOntroller;
use App\Http\Controllers\PastDueVisitController;
use App\Http\Controllers\PatientAddressInfoController;
use App\Http\Controllers\PatientBirthedayController;
use App\Http\Controllers\PatienRosterController;
use App\Http\Controllers\PatienVitalSignsController;
use App\Http\Controllers\PendingReferralsController;
use App\Http\Controllers\PhysicianOrderHistoryController;
use App\Http\Controllers\PlanoFCareHistoryCOntroller;
use App\Http\Controllers\RecentTransfersController;
use App\Http\Controllers\ScheduledTaskController;
use App\Http\Controllers\sixtydaySummaryController;
use App\Http\Controllers\VisitVerificationController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\PendingFacetoFaceController;
use App\Http\Controllers\PhoneRosterController;
use App\Http\Controllers\AnnualReportAgencyProviderController;
use App\Http\Controllers\PossiblemuiController;
use App\Http\Controllers\UnanticipatedHospitalizationMuiFormController;
use App\Http\Controllers\UnapprovedBehavioralSupportMuiFormController;
use App\Http\Controllers\UnusualincidentReportlogController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PayRollDetailController;
use App\Http\Controllers\CMS1460Controller;
use App\Http\Controllers\CMS1500Controller;
use App\Http\Controllers\InactiveAllergyController;
use App\Http\Controllers\MissedVisitController;
use App\Http\Controllers\NonAdmitPatientController;
use App\Http\Controllers\DiscontinueMedicationController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\MissVisitNoteController;
use App\Http\Controllers\API\NonOasisRecertificationController;
use App\Http\Controllers\API\NonOasisDischargeController;
use App\Http\Controllers\API\PatientStatusController;
use App\Http\Controllers\API\PlanOfCareController;
use App\Http\Controllers\API\OutcomeAssessmentController;
use App\Http\Controllers\IspdocumentationController;
use App\Http\Controllers\PlanOfCareHomeHealthCareController;
use App\Http\Controllers\physicianOrderSkilledagencyController;
use App\Http\Controllers\OhiostateController;
use App\Http\Controllers\EthicController;
use App\Http\Controllers\NewHiringController;
use App\Http\Controllers\HpctimesheetController;
use App\Http\Controllers\ReportmuiController;
use App\Http\Controllers\UnanticipatedhospitalizationmuiController;
use App\Http\Controllers\UnapprovedbehavioralsupportController;
use App\Http\Controllers\HhavisitnoteController;
use App\Http\Controllers\HhavisitnoteController1;
use App\Http\Controllers\HhavisitnoteController2;
use App\Http\Controllers\HhavisitnoteController3;
use App\Http\Controllers\NursevistenoteController;
use App\Http\Controllers\Company_infoController;
use App\Http\Controllers\SubscriptionPlanController;
use App\Http\Controllers\InfectioncontrolController;
use App\Http\Controllers\NonskilledAgencyController;
use App\Http\Controllers\MileagelogController;
use App\Http\Controllers\OasisQAController;
use App\Http\Controllers\NonSkilledReportController;
use App\Http\Controllers\QaController;
use App\Http\Controllers\InfectionController;
use App\Http\Controllers\OasisEDealthController;
use App\Http\Controllers\OasisERecertificationController;
use App\Http\Controllers\ResumptionOfCareController;





Route::middleware(['check.expiration'])->group(function () {

        // for New Hiring
Route::get('hiring/new',[NewHiringController::class,'create'])->name('new.hiring');
Route::get('hiring/show',[NewHiringController::class,'show'])->name('hiring.show');
Route::post('/hiring/storeApplication',[NewHiringController::class,'storeApplication'])->name('store.hiring');

Route::post('/hiring/storeApp',[NewHiringController::class,'storeApplication'])->name('hiring.storeApplication');

Route::post('/hiring/storeformi9',[NewHiringController::class,'storeformi9'])->name('store.hiring2');
Route::post('/hiring/formit4',[NewHiringController::class,'formit4'])->name('hiring.formit4');

Route::post('/hiring/formw4',[NewHiringController::class,'formw4'])->name('hiring.formw4');
Route::post('/hiring/ethics',[NewHiringController::class,'ethics'])->name('store.hiring');
Route::post('/hiring/ethics',[NewHiringController::class,'ethics'])->name('hiring.ethics');
Route::post('/hiring/addendum',[NewHiringController::class,'addendum'])->name('hiring.addendum');
Route::post('/hiring/storeconfidentially',[NewHiringController::class,'storeconfidentially'])->name('hiring.confidentially');
Route::post('/hiring/storecovid19',[NewHiringController::class,'storecovid19'])->name('hiring.ecovid19');

Route::post('/hiring/storenoncompete',[NewHiringController::class,'storenoncompete'])->name('hiring.storenoncompete');
Route::post('/hiring/storeReference',[NewHiringController::class,'storeReference'])->name('store.hiring');
Route::post('/hiring/storehealth',[NewHiringController::class,'storehealth'])->name('hiring.storehealth');
Route::post('/hiring/storehepatitis',[NewHiringController::class,'storehepatitis'])->name('hiring.storehepatitis');
Route::post('/hiring/storeCoronavirus',[NewHiringController::class,'storeCoronavirus'])->name('store.hiring');
Route::post('/hiring/storememo',[NewHiringController::class,'storememo'])->name('store.hiring');Route::post('/hiring/storememo',[NewHiringController::class,'storememo'])->name('store.hiring');
Route::post('/hiring/storetb',[NewHiringController::class,'storetb'])->name('hiring.storetb');
Route::post('/hiring/storerequired',[NewHiringController::class,'storerequired'])->name('store.hiring');


Route::get('/caregiver/{id}/edit', [CaregiverController::class, 'caregivereditModal'])->name('caregivers.editmodal');
Route::get('/restrictions/{id}/edit', [RestrictionController::class, 'restrictioneditModal'])->name('restrictions.editmodal');
Route::get('/attributes/{id}/edit', [AttributeController::class, 'attributesditModal'])->name('attributes.editmodal');
Route::get('/vitals/{id}/edit', [VitalsController::class, 'editModal'])->name('vitals.editmodal');
Route::get('/vitals/{id}/change-status', [VitalsController::class, 'changeStatus'])->name('vitals.changeStatus');
Route::get('/immunizations/{id}/edit', [ImmunizationController::class, 'editModal'])->name('immunizations.editmodal');
Route::get('/immunizations/{id}/change-status', [ImmunizationController::class, 'changeStatus'])->name('immunizations.changeStatus');
Route::get('/allergies/{id}/edit', [AllergyController::class, 'editModal'])->name('allergies.editmodal');
Route::get('/medications/{id}/edit', [MedicationController::class, 'editModal'])->name('medication.editmodal');
Route::get('/allergies/{id}/change-status', [AllergyController::class, 'changeStatus'])->name('allergies.changeStatus');
Route::get('/authorizations/{id}/change-status', [AuthorizationController::class, 'changeStatus'])->name('authorizations.changeStatus');
Route::get('/authorizations/{id}/edit', [AuthorizationController::class, 'editModal'])->name('authorizations.editmodal');
Route::get('/medication/{id}/change-status', [MedicationController::class, 'changeStatus'])->name('medication.changeStatus');
Route::get('/authorizations/{id}', [AuthorizationController::class, 'changeStatus'])->name('authorizations.changeStatus');


});


//Company information
Route::get('/company_address', [Company_infoController::class, 'company_address'])->name('company_address');

//Skilled Agency
Route::resources(['oasis-soc-e' => OutcomeAssessmentController::class]);
Route::post('skilled-agency/getSign',[ OutcomeAssessmentController::class,'geSign'])->name('skilled-agency.getSign');

Route::get('printoasispdf/{name}',[ OutcomeAssessmentController::class,'printPdf'])->name('printoasispdf');

Route::post('/save-qa-date', [OutcomeAssessmentController::class, 'saveSentDate'])->name('save.sentDate');
Route::post('/save-sent-method', [OutcomeAssessmentController::class, 'saveSentMethod'])->name('save.sent.method');
Route::post('/save-receive-method', [OutcomeAssessmentController::class, 'saveReceiveDate'])->name('save.receive.date');

Route::get('/patients/skilled-nursing-dashboard', [SkilledAgencyController::class, 'skilleddashboard'])->name('patients.skilled-nursing-dashboard');
Route::get('/skilled-agency/physician-order', [SkilledAgencyController::class, 'physicianorder'])->name('skilled-agency.physicianorder');
Route::get('/skilled-agency/plan-of-care', [SkilledAgencyController::class, 'planofcare'])->name('skilled-agency.plan-of-care');
Route::get('/skilled-agency/oasis-e-start-of-care', [SkilledAgencyController::class, 'oasisStartofcare'])->name('skilled-agency.oasis-e-start-of-care');
Route::get('/skilled-agency/oasis-e-start-of-care/{id}', [SkilledAgencyController::class, 'getOasisStartofcare'])->name('skilled-agency.get-oasis-e-start-of-care');
Route::get('/skilled-agency/oasis-e-dealth', [SkilledAgencyController::class, 'oasisStartofcare'])->name('skilled-agency.oasis-e-dealth');
Route::get('/skilled-agency/oasis-e-recertification', [SkilledAgencyController::class, 'recertification'])->name('skilled-agency.oasis-e-recertification');
Route::get('/skilled-agency/discharge', [SkilledAgencyController::class, 'discharge'])->name('skilled-agency.oasis-e-dischanrge');

Route::get('/skilled-agency/nurse-visit-note/index', [SkilledAgencyController::class, 'nursingVisitNote'])->name('skilled-agency.nurse-visit-note.index');
Route::get('/skilled-agency/hha-visit-note', [SkilledAgencyController::class, 'hhaVisitNote'])->name('skilled-agency.hha-visit-note');
Route::get('/pdf/skilled-agency/hha-visit-note', [PDFController::class, 'hhaVisitNote'])->name('pdf.skilled-agency.hha-visit-note');
Route::get('/skilled-agency/hha-care-plan', [SkilledAgencyController::class, 'hhacareplan'])->name('skilled-agency.hha-care-plan');
Route::get('/skilled-agency/60-day-summary', [SkilledAgencyController::class, 'sixtydaysummary'])->name('skilled-agency.60-day-summary');
Route::get('/skilled-agency/aide-supervisory-visit', [SkilledAgencyController::class, 'aidesupervisoryvisit'])->name('skilled-agency.aide-supervisory-visit');
Route::get('/pdf/skilled-agency/aide-supervisory-visit', [PDFController::class, 'AideSupervisoryVisit'])->name('skilled-agency.aide-supervisory-visit.pdf');
Route::POST('/skilled-agency/aide-supervisory-visit', [SkilledAgencyController::class, 'storeAideSupervisoryVisit'])->name('skilled-agency.aide-supervisory-visit.store');
Route::post('/skilled-agency/store', [SkilledAgencyController::class, 'store'])->name('skilled-agency.hha-visit-note');
Route::POST('/skilled-agency/nurse-visit-note/nursevisit', [SkilledAgencyController::class, 'saveNursing'])->name('skilled-agency.saveNursing');
Route::POST('/skilled-agency/oasis-e-death/store', [SkilledAgencyController::class, 'storeOasisEDeath'])->name('skilled-agency.oasis-e-death.store');
Route::get('/pdf/skilled-agency/oasis-e-death', [PDFController::class, 'oasisEdeath'])->name('skilled-agency.oasis-e-death.pdf');
//infection-control
Route::get('/skilled-agency/infections/infection-control', [InfectionController::class, 'index'])->name('skilled-agency.infection-control.index');
Route::post('/skilled-agency/infections/infection-control/store', [InfectionController::class, 'store'])->name('skilled-agency.infection-control.store');

Route::resource('oasis-e-dealth', OasisEDealthController::class);

Route::get('/skilled-agency/oasis-e-resumption-of-care', [ResumptionOfCareController::class, 'index'])->name('skilled-agency.oasis-e-resumption-of-care.index');
Route::post('/skilled-agency/oasis-e-resumption-of-care/store', [ResumptionOfCareController::class, 'store'])->name('skilled-agency.oasis-e-resumption-of-care.store');
Route::get('/pdf/skilled-agency/oasis-e-resumption-of-care', [PDFController::class, 'ResumptionOfCare'])->name('skilled-agency.oasis-e-resumption-of-care.pdf');

//Non-Skilled Dashboard
Route::get('/patients/non-skilled-dashboard/{id}', [NonskilledAgencyController::class, 'dashboard'])->name('patients.non-skilled-dashboard');

Route::post('/patients/non-skilled-forms/status', [NonskilledAgencyController::class, 'nonSkilledStatus'])->name('nonSkilledStatus');

//Six Days Summary
Route::post('/patients/non-skilled-sixty-says-summary-store', [NonskilledAgencyController::class, 'sixtyDaysSummaryStore'])->name('nonskilled.sixtyDaysSummaryStore');
//ACCIDENT RISK ASSESSMENT
Route::post('/patients/non-skilled-accident-risk-assessment-store', [NonskilledAgencyController::class, 'accidentRiskAssessmentStore'])->name('nonskilled.accidentRiskAssessmentStore');
//HOME HEALTH AIDE CARE PLAN
Route::post('/patients/non-skilled-hha-care-plan-store', [NonskilledAgencyController::class, 'hhaCarePlanStore'])->name('nonskilled.hhaCarePlanStore');

//hha Visit Note Store
Route::post('/patients/non-skilled-hha-visit-note-store', [NonskilledAgencyController::class, 'hhaVisitNoteStore'])->name('nonskilled.hhaVisitNoteStore');
Route::post('/patients/non-skilled-hha-visit-note-update', [NonskilledAgencyController::class, 'hhaVisitNoteUpdate'])->name('nonskilled.hhaVisitNoteUpdate');


//hha Visit Note Store
Route::post('/patients/non-skilled-physician-order-store', [NonskilledAgencyController::class, 'physicianOrderStore'])->name('nonskilled.physicianOrderStore');

// Referral-intake Store
Route::post('/patients/non-skilled-referral-intake-store', [NonskilledAgencyController::class, 'referralintakeStore'])->name('nonskilled.referralintakeStore');

// nursing-assess-home-care Store
Route::post('/patients/non-skilled-nursing-assess-home-care-store', [NonskilledAgencyController::class, 'nursingassesshomecarestore'])->name('nonskilled.nursingassessHomecarestore');



// /

// Create Migration
Route::get('cmd', function () {
    // Artisan::call('make:model Caregiver -mcr');
    // Schema::create('caregivers', function (Blueprint $table) {
    //     $table->id();
    //     $table->integer('employee_id');
    //     $table->string('caregiver');
    //     $table->string('matching_code');
    //     $table->string('compatibility');
    //     $table->date('visit_date');
    //     $table->integer('hours_together');
    //     $table->text('note');
    //     $table->integer('modified_by')->nullable();
    //     $table->integer('created_by')->nullable();
    //     $table->timestamps();
    // });
});

// Route::get('/aide-supervisory-visit', [AideSupervisoryVisitController::class, 'index'])->name('aide-supervisory-visit');
Route::get('/physician-order', [PhysicianOrderController::class, 'index'])->name('physician-order');
Route::get('/oasis-e-discharge', [OasisEResumptionofCareController::class, 'index'])->name('oasis-e-discharge');
Route::get('/oasis-e-resumption-of-care', [OasisEResumptionofCareController::class, 'index'])->name('oasis-e-resumption-of-care');
Route::post('/oasis-e-resumption-of-care/store', [OasisEResumptionofCareController::class, 'store'])->name('resumptionOfCare.store');
Route::get('/oasis-e-transfer', [OasisETransferController::class, 'index'])->name('oasis-e-transfer');
Route::post('/oasis-e-transfer/store', [OasisETransferController::class, 'store'])->name('oasisETransfer.store');

Route::resource('nursing_tasks', NursingTaskController::class);
Route::resource('haa_tasks', HaaTaskController::class);
Route::resource('msw_others', MswOtherController::class);
Route::resource('therapies', TherapyController::class);
Route::resource('dietitian', DietitianController::class);
Route::resource('dailyOutliar', DailyOutliarController::class);
Route::resource('patient-episode-timing', EpisodeController::class);

Route::get('/nonoasis-sos', [NonOasisController::class, 'index'])->name('nonoasis');
// nursing Visit Node
Route::get('/nursing-visit-note', [NursingNoteController::class, 'index'])->name('nursing.visit.note');

Route::get('/routes', [DashboardController::class, 'getControllerActions'])->name('routes');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/nonoasis-sos/{id}', [NonOasisController::class, 'show'])->name('nonoasis');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/calllogs/store', [DashboardController::class, 'calllogStore'])->name('calllogs.store');

    Route::get('/search-employee', [EmployeeManagementController::class, 'search'])->name('search.employees');

    Route::resource('users', UsersController::class);
    Route::resource('roles', RolesController::class);
    Route::get('role-list', [RolesController::class,'index'])->name('role-list');
    Route::get('add-role-form', [RolesController::class,'create'])->name('add-role-form');
    Route::post('insert-role', [RolesController::class,'store'])->name('insert-role');
    Route::get('edit-role/{addon_subcategory_id}', [RolesController::class,'edit'])->name('edit-role');
    Route::post('update-role/{addon_subcategory_id}', [RolesController::class,'update'])->name('update-role');
    Route::get('accounts', [UsersController::class, 'account'])->name('profile.account');
    Route::post('account/update', [UsersController::class, 'accountUpdate'])->name('account.update');

    Route::post('/signatures/upload', [UsersController::class, 'uploadSignature'])->name('signatures.upload');
    Route::get('/check-pin', [UsersController::class, 'checkPin']);

    Route::get('roles-list-with-permissions',[RolePermissionController::class,'rolesListWithPermissions'])->name('roles-list-with-permissions');
    Route::get('create-role-with-permissions',[RolePermissionController::class,'createRoleWithPermissions'])->name('create-role-with-permissions');
    Route::post('insert-role-permissions', [RolePermissionController::class,'insertRolePermissions'])->name('insert-role-permissions');
    Route::get('edit-role-with-permissions/{addon_subcategory_id}',[RolePermissionController::class,'editRoleWithPermissions'])->name('edit-role-with-permissions');


    Route::post('update-role-with-permissions/{addon_subcategory_id}',[RolePermissionController::class,'updateRoleWithPermissions'])->name('update-role-with-permissions');
    Route::resource('organizations', OrganizationController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('referrals', ReferralController::class);
    Route::resource('races', RaceController::class);
    Route::resource('addons', AddonController::class);
    Route::resource('leaveGroups', LeaveGroupController::class);
    Route::resource('taxes', TaxIdTypeController::class);
    Route::resource('jobTitles', JobTitleController::class);
    Route::resource('credentials', AdmissionSourceController::class);
    Route::resource('facilityReferral', FacilityReferralSourceController::class);
    Route::resource('inPatientCode', InPatientAdmissionCodeController::class);
    Route::resource('internalReferralSource', InternalReferralSourceController::class);
    Route::resource('gender', GenderController::class);
    Route::resource('agency', AgencyBranchController::class);
    Route::resource('service', ServicesController::class);
    Route::resource('serviceRequired', ServicesRequiredController::class);
    Route::resource('insurance', PrimaryInsuranceController::class);
    Route::resource('secondaryInsurance', SecondaryInsuranceController::class);
    Route::resource('tertiaryInsurance', TertiaryInsuranceController::class);
    Route::resource('relationship', RelationshipController::class);
    Route::resource('physician', PhysicianController::class);
    Route::resource('pharmacy', PharmacyController::class);
    Route::resource('employees', EmployeeController::class);



    // QA
    Route::get('/patients-qa', [QaController::class, 'index'])->name('patients.qa');
    Route::get('/patients/pending/qa', [QaController::class, 'pendingList'])->name('patients.pending.qa');

    //Reporting

    Route::get('/patients-reports', [ReportController::class, 'index'])->name('patients.reports');
    Route::post('/patients-reports/print', [PDFController::class, 'PatientsReports'])->name('patients.reports.print');

    Route::get('/patients/ajax/pull', [PatientController::class, 'PatientsAjax'])->name('patients.pull.ajax');

    Route::put('update_org_info/{org}', [OrganizationInfoController::class, 'update'])->name('update_org_info');
    Route::post('update_org_contact_person', [OrganizationContactPersonController::class, 'update'])->name('update_org_contact_person');
    Route::post('update_org_address', [OrganizationAddressController::class, 'update'])->name('update_org_address');

    Route::post('/pharmacy-update', [PharmacyController::class, 'update'])->name('pharmacy.update');
    Route::get('/pharmacy-details', [PharmacyController::class, 'pharmacy_details'])->name('pharmacy.details');
    Route::get('/physician-details', [PhysicianController::class, 'check_npi_number'])->name('physician.details');
    Route::get('/clinical-diagnosis-details', [PatientController::class, 'check_icd_request'])->name('patients.icd_details');
    Route::get('/physician-single-details', [PhysicianController::class, 'check_physician_details'])->name('physician.single_details');


    Route::get('/subscriptions/process-payment/{planId}', [SubscriptionPlanController::class, 'processPayment'])->name('subscriptions.process-payment');
    // for employees

    // For Job title addons
    Route::get('/addon-jobs', [JobTitleController::class, 'index'])->name('addonJobs.index');

    // For Race addons
    Route::post('/addon-race-update', [RaceController::class, 'update'])->name('addonRace.update');

    // For Tax ID addons
    Route::get('/addon-tax', [TaxIdTypeController::class, 'index'])->name('addonTax.index');

    // For Leave Group addons
    Route::post('/addon-leave-update', [LeaveGroupController::class, 'update'])->name('addonLeave.update');

    // For Job title addons
    Route::get('/addon-jobs', [JobTitleController::class, 'index'])->name('addonJobs.index');

    // For Job title addons
    Route::get('/otdischarge-summary', [OtdischargeController::class, 'index'])->name('otdischarge.index');

    // For Race addons
    Route::post('/addon-race-update', [RaceController::class, 'update'])->name('addonRace.update');
    Route::post('change_race_status', [RaceController::class, 'change_status'])->name('change_race_status');
    Route::post('/check_addons', [RaceController::class, 'check_addons'])->name('check_addons');

    Route::post('/check_admission_addons', [AdmissionSourceController::class, 'check_addons'])->name('check_admission_addons');
    Route::post('/check_agency_addons', [AgencyBranchController::class, 'check_addons'])->name('check_agency_addons');
    Route::post('/check_referral_addons', [FacilityReferralSourceController::class, 'check_addons'])->name('check_referral_addons');
    Route::post('/check_gender_addons', [GenderController::class, 'check_addons'])->name('check_gender_addons');
    Route::post('/check_inpatient_addons', [InPatientAdmissionCodeController::class, 'check_addons'])->name('check_inpatient_addons');
    Route::post('/check_insurance_addons', [PrimaryInsuranceController::class, 'check_addons'])->name('check_insurance_addons');
    Route::post('/check_internal_addons', [InternalReferralSourceController::class, 'check_addons'])->name('check_internal_addons');
    Route::post('/check_job_addons', [JobTitleController::class, 'check_addons'])->name('check_job_addons');
    Route::post('/check_leavegroup_addons', [LeaveGroupController::class, 'check_addons'])->name('check_leavegroup_addons');
    Route::post('/check_physician_addons', [PhysicianController::class, 'check_addons'])->name('check_physician_addons');
    Route::post('/check_relationship_addons', [RelationshipController::class, 'check_addons'])->name('check_relationship_addons');
    Route::post('/check_secondary_insurance_addons', [SecondaryInsuranceController::class, 'check_addons'])->name('check_secondary_insurance_addons');
    Route::post('/check_service_required_addons', [ServicesRequiredController::class, 'check_addons'])->name('check_service_required_addons');
    Route::post('/check_services_addons', [ServicesController::class, 'check_addons'])->name('check_services_addons');
    Route::post('/check_tax_addons', [TaxIdTypeController::class, 'check_addons'])->name('check_tax_addons');
    Route::post('/check_tertiary_addons', [TertiaryInsuranceController::class, 'check_addons'])->name('check_tertiary_addons');

    // For Tax addons
    Route::get('/addon-tax', [TaxIdTypeController::class, 'index'])->name('addonTax.index');

    Route::post('/change_org_status', [OrganizationController::class, 'change_status'])->name('change_org_status');
    Route::post('/change_tax_status', [TaxIdTypeController::class, 'change_status'])->name('change_tax_status');
    Route::post('/change_job_status', [JobTitleController::class, 'change_status'])->name('change_job_status');
    Route::post('/change_admission_status', [AdmissionSourceController::class, 'change_status'])->name('change_admission_status');
    Route::post('change-org-status', [OrganizationController::class, 'change_status'])->name('change_org_status');
    Route::post('change-tax-status', [TaxIdTypeController::class, 'change_status'])->name('change_tax_status');
    Route::post('/change-job-status', [JobTitleController::class, 'change_status'])->name('change_job_status');
    Route::post('/change-facility-status', [FacilityReferralSourceController::class, 'change_status'])->name('change_facility_status');
    Route::post('/change-inpatient-code-status', [InPatientAdmissionCodeController::class, 'change_status'])->name('change_patientcode_status');
    Route::post('/change-internal-referral-status', [InternalReferralSourceController::class, 'change_status'])->name('change_internal_referral_status');
    Route::post('/change-gender-status', [GenderController::class, 'change_status'])->name('change_gender_status');
    Route::post('/change-agency-status', [AgencyBranchController::class, 'change_status'])->name('change_agency_status');
    Route::post('/change-service-status', [ServicesController::class, 'change_status'])->name('change_services_status');
    Route::post('/change-service-required-status', [ServicesRequiredController::class, 'change_status'])->name('change_service_required_status');
    Route::post('/change-insurance-status', [PrimaryInsuranceController::class, 'change_status'])->name('change_insurance_status');
    Route::post('/change-secondary-insurance-status', [SecondaryInsuranceController::class, 'change_status'])->name('change_secondary_insurance_status');
    Route::post('/change-tertiary-insurance-status', [TertiaryInsuranceController::class, 'change_status'])->name('change_tertiary_insurance_status');
    Route::post('/change-relationship-status', [RelationshipController::class, 'change_status'])->name('change_relationship_status');
    Route::post('/change-physician-status', [PhysicianController::class, 'change_status'])->name('change_physician_status');
    Route::post('/change-leave-status', [LeaveGroupController::class, 'change_status'])->name('change_leave_status');
    Route::post('/change-pharmacy-status', [PharmacyController::class, 'change_status'])->name('change_pharmacy_status');


    Route::post('/addon-tax-update', [TaxIdTypeController::class, 'update'])->name('addonTax.update');
    Route::post('/addon-job-update', [JobTitleController::class, 'update'])->name('addonJob.update');
    Route::post('/addon-admissionsource-update', [AdmissionSourceController::class, 'update'])->name('addonAdmissionSource.update');
    Route::post('/addon-facility-referral-update', [FacilityReferralSourceController::class, 'update'])->name('addonFacilityReferral.update');
    Route::post('/addon-inpatient-code-update', [InPatientAdmissionCodeController::class, 'update'])->name('addonInPatientCode.update');
    Route::post('/addon-internal-referral-update', [InPatientAdmissionCodeController::class, 'update'])->name('addonInternalReferral.update');
    Route::post('/addon-gender-update', [GenderController::class, 'update'])->name('addonGender.update');
    Route::post('/addon-agency-update', [AgencyBranchController::class, 'update'])->name('addonAgency.update');
    Route::post('/addon-service-update', [ServicesController::class, 'update'])->name('addonService.update');
    Route::post('/addon-service-required-update', [ServicesRequiredController::class, 'update'])->name('addonServiceRequired.update');
    Route::post('/addon-insurance-update', [PrimaryInsuranceController::class, 'update'])->name('addonInsurance.update');
    Route::post('/addon-secondary-insurance-update', [SecondaryInsuranceController::class, 'update'])->name('addonSecondaryInsurance.update');
    Route::post('/addon-tertiary-insurance-update', [TertiaryInsuranceController::class, 'update'])->name('addonTertiaryInsurance.update');
    Route::post('/addon-relationship-update', [RelationshipController::class, 'update'])->name('addonRelationship.update');
    Route::post('/addon-physician-update', [PhysicianController::class, 'update'])->name('physician.update');

    // Reports

    Route::get('/patient-reports/open-oasis', [OpenOasisController::class, 'index'])->name('patient-reports.open-oasis');
    Route::get('/patient-reports/open-shift', [OpenShiftController::class, 'index'])->name('patient-reports.open-shift');
    Route::get('/patient-reports/active-allergy', [AllergyController::class, 'index'])->name('patient-reports.active-allergy');
    Route::get('/patient-reports/inactive-allergy', [InactiveAllergyController::class, 'index'])->name('patient-reports.inactive-allergy');
    Route::get('/patient-reports/authorization', [AuthorizationController::class, 'index'])->name('patient-reports.authorization');
    Route::get('/patient-reports/completed-task', [CompletedTaskController::class, 'index'])->name('patient-reports.completed-task');
    Route::get('/patient-reports/continue-medication', [ContinueMedicationController::class, 'index'])->name('patient-reports.continue-medication');
    Route::get('/patient-reports/discharge-patients', [DischargePatientController::class, 'index'])->name('patient-reports.discharge-patients');
    Route::get('/patient-reports/hospitalization', [HospitalizationController::class, 'index'])->name('patient-reports.hospitalization');
    Route::get('/patient-reports/on-hold', [OnHoldController::class, 'index'])->name('patient-reports.on-hold');
    Route::get('/patient-reports/orders-pending-signature', [OrderPendingsignatureController::class, 'index'])->name('patient-reports.orders-pending-signature');
    Route::get('/patient-reports/orders-to-be-sent', [OrderToBeSentCOntroller::class, 'index'])->name('patient-reports.orders-to-be-sent');
    Route::get('/patient-reports/past-due-visit', [PastDueVisitController::class, 'index'])->name('patient-reports.past-due-visit');
    Route::get('/patient-reports/patient-address', [PatientAddressInfoController::class, 'index'])->name('patient-reports.patient-address');
    Route::get('/patient-reports/patients-birthday', [PatientBirthedayController::class, 'index'])->name('patient-reports.patients-birthday');
    Route::get('/patient-reports/patients-roster', [PatienRosterController::class, 'index'])->name('patient-reports.patients-roster');
    Route::get('/patient-reports/patients-vital-signs', [PatienVitalSignsController::class, 'index'])->name('patient-reports.patients-vital-signs');
    Route::get('/patient-reports/pending-referrals', [PendingReferralsController::class, 'index'])->name('patient-reports.pending-referrals');
    Route::get('/patient-reports/physician-order-history', [PhysicianOrderHistoryController::class, 'index'])->name('patient-reports.physician-order-history');
    Route::get('/patient-reports/plane-of-care-history', [PlanoFCareHistoryCOntroller ::class, 'index'])->name('patient-reports.plane-of-care-history');
    Route::get('/patient-reports/recent-transfers', [RecentTransfersController::class, 'index'])->name('patient-reports.recent-transfers');
    Route::get('/patient-reports/scheduled-task', [ScheduledTaskController::class, 'index'])->name('patient-reports.scheduled-task');
    Route::get('/patient-reports/sixtydays-summary', [sixtydaySummaryController::class, 'index'])->name('patient-reports.sixtydays-summary');
    Route::get('/patient-reports/visit-verification', [VisitVerificationController::class, 'index'])->name('patient-reports.visit-verification');
    Route::get('/patient-reports/orders-history', [OrderHistoryController::class, 'index'])->name('patient-reports.orders-history');
    Route::get('/patient-reports/pending-face-to-face', [PendingFacetoFaceController::class, 'index'])->name('patient-reports.pending-face-to-face');
    Route::get('/patient-reports/phone-roster', [PhoneRosterController::class, 'index'])->name('patient-reports.phone-roster');
    Route::get('/patient-reports/payroll', [PayRollDetailController::class, 'index'])->name('patient-reports.payroll');
    Route::get('/patient-reports/missed-visits', [MissedVisitController::class, 'index'])->name('patient-reports.missed-visits');
    Route::get('/patient-reports/non-admit-patient', [NonAdmitPatientController::class, 'index'])->name('patient-reports.non-admit-patient');
    Route::get('/patient-reports/discontinue-medication', [DiscontinueMedicationController::class, 'index'])->name('patient-reports.discontinue-medication');
    Route::get('/patient-reports/discontinue-medication', [DiscontinueMedicationController::class, 'index'])->name('patient-reports.discontinue-medication');




    // Cookies
    Route::get('cookie-consent-preferences', [CookiesController::class, 'index'])->name('CookiesController');

     // CMS Bill Forms
     Route::get('/cms-1460', [CMS1460Controller::class, 'index'])->name('cms-1460');
     Route::get('/cms-1500', [CMS1500Controller::class, 'index'])->name('cms-1500');
     // Added by Enamul
    Route::get('/patient/admission', [PatientAdmissionController::class, 'index'])->name('patient.admission');
    Route::post('/patient/admission/update/{id}', [PatientAdmissionController::class, 'update'])->name('patient.admission.update');
    Route::get('/patient/list', [PatientListcontroller::class, 'index'])->name('patient.list');
    // Schedule calendar
    Route::get('/schedule/calendar', [ScheduleCalendar::class, 'index'])->name('schedule.calendar');
    Route::get('/schedule/calendar/day', [ScheduleCalendar::class, 'day_calendar'])->name('schedule.calendar.day');
    Route::get('/schedule/calendar/week', [ScheduleCalendar::class, 'week_calendar'])->name('schedule.calendar.week');
    Route::get('/schedule/calendar/list', [ScheduleCalendar::class, 'list'])->name('schedule.calendar.list');
    Route::post('/schedule/calendar/employee/update', [ScheduleCalendar::class, 'updateEmployee'])->name('schedule.calendar.employee.update');
    Route::get('/employee/standard/application', [EmployeesAplication::class, 'application'])->name('employees.application');
    Route::post('/schedule/save', [ScheduleCalendar::class, 'store'])->name('schedule.save');
    Route::get('/get-dates/{patientId}', [ScheduleCalendar::class, 'getEpisodeDates'])->name('getScheduleDate');
    Route::get('/schedule/get-schedule', [ScheduleCalendar::class, 'getAllSchedule']);
    Route::get('/schedule/employee-wise/get-schedule', [ScheduleCalendar::class, 'getEmployeeWiseSchedule']);
    Route::get('/schedule/user/get-schedule', [ScheduleCalendar::class, 'getUserSchedule']);
    Route::get('/task-form/{data}', [ScheduleCalendar::class, 'formOpen'])->name('skilled-agency.task-form');
    Route::get('/schedule/get-patient-schedule', [ScheduleCalendar::class, 'getPatientSchedule']);
    Route::get('/schedule/get-today-schedule', [ScheduleCalendar::class, 'getAllTodaySchedule']);
    Route::get('/schedule/get-week-schedule', [ScheduleCalendar::class, 'getAllWeekSchedule']);
    Route::post('/schedule/get-edit-weekly-schedule', [ScheduleCalendar::class, 'getEditWeekSchedule']);
    Route::post('/schedule/delete-schedule', [ScheduleCalendar::class, 'deleteSchedule']);
    Route::post('/schedule/edit-weekly-schedule', [ScheduleCalendar::class, 'editWeekSchedule']);
    Route::post('/schedule/delete-events-list', [ScheduleCalendar::class, 'deleteEventList']);
    Route::post('/schedule/update-drag-event', [ScheduleCalendar::class, 'updateDragEvent']);
    Route::post('/schedule/update-copy-event', [ScheduleCalendar::class, 'updateCopyEvent']);
    Route::put('/schedule-update/api', [ScheduleCalendar::class, 'update_calendar_api']);

    // Oasis E Recertification
    Route::post('/task-form/oasis-e-recertification', [OasisERecertificationController::class, 'Store'])->name('oasis-e-recertification.store');

    // Social worker
    Route::get('/social/worker', [SocialWorkerController::class, 'index'])->name('socialworker.index');
    /*
    |--------------------------------------------------------------------------
    | Universal SmartClock has clock-in and clock-out functions
    |--------------------------------------------------------------------------
    */
    Route::get('clock-in-out', [ClockController::class, 'clockView'])->name('clock-in-out');
    Route::post('webclock/clocking', [ClockController::class, 'clocking']);

    Route::resource('/evv/resolution/center', EVV_controller::class);
    Route::resource('/order-management', OrderManagement::class);
    Route::resource('/export-oasis', ExportOasis::class);

    Route::get('index','OrderManagement@order');
    Route::get('index','ExportOasis@export');

    Route::resource('/addons-list', AddonsCategoryController::class);
    Route::resource('/sub-addon-list', AddonsSubCategoryController::class);
    Route::resource('non-admit-patient', NonAdmitPatients::class);
    Route::resource('oasis-qa', OasisQAController::class);
    Route::resource('discharge', PatientDischargeWebController::class);
    Route::resource('status', PatientStatusController::class);

    // Visit note controller
    Route::resource('visit-note', MissVisitNoteController::class);

    // Medication
    Route::resource('medications', MedicationController::class);
    Route::post('/medication/discontinue/store', [MedicationController::class, 'store'])->name('medication.discontinue.store');

    Route::post('/pdf/medication-profile/{id}', [PDFController::class, 'medicationProfile'])->name('medication-profile.pdf');

    // Allergy
    Route::resource('allergies', AllergyController::class);

    // Vitals
    Route::resource('vitals', VitalsController::class);

 // Vitals Signs
 Route::get('/vital-signs', [VitalsController::class, 'index'])->name('vital-signs');


    // Authorizations
    Route::resource('authorizations', AuthorizationController::class);

    Route::resource('immunizations', ImmunizationController::class);
    Route::resource('communications', CommunicationController::class);

    // Attribute
    Route::resource('attributes', AttributeController::class);

    // Restriction
    Route::resource('restrictions', RestrictionController::class);

    // Restriction
    Route::resource('caregivers', CaregiverController::class);

    // patient Caregiver, Restriction, Attributes
    Route::resource('patientCaregivers', patientCaregiverController::class);
    Route::get('/patient/caregiver/{id}/edit', [patientCaregiverController::class, 'caregivereditModal'])->name('patient.caregiver.editmodal');

    Route::resource('patientAttribute', PatientAttributeController::class);
    Route::get('/patient/attribute/{id}/edit', [PatientAttributeController::class, 'attributeEditModal'])->name('patient.attribute.editmodal');

    Route::resource('patientRestriction', PatientRestrictionController::class);
    Route::get('/patient/restriction/{id}/edit', [PatientAttributeController::class, 'restrictionEditModal'])->name('patient.restriction.editmodal');

    // Patient pending
    Route::get('/pending/patient', [PatientPendingController::class, 'index'])->name('patients.pending');

    // Report functionality
    Route::resource('report', ReportController::class);
    Route::get('/generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generate.pdf');
    Route::get('/generate-phusician-pdf/{id}', [PDFController::class, 'generatePhysicianPDF'])->name('generate.phusicianPDF');
    Route::get('/generate-cms-pdf/{id}', [PDFController::class, 'generateCmsPDF'])->name('generate.cmsPDF');

    // Templates addons
    Route::resource('templates', TemplatesController::class);

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    | DOMPDF
    */
    Route::get('/pdf/home-care/aide-supervisory', [PDFController::class, 'generatePDF'])->name('pdf.home-care.aide-supervisory');
    Route::get('/pdf/home-care/hha-visit-note', [PDFController::class, 'generatePDF'])->name('pdf.home-care.hha-visit-note');
    Route::get('/pdf/home-care/oasis-e-start-of-care', [PDFController::class, 'generatePDF'])->name('pdf.home-care.oasis-e-start-of-care');
    Route::get('/pdf/home-care/oasis-e-death-at-home', [PDFController::class, 'generatePDF'])->name('pdf.home-care.oasis-e-death-at-home');
    Route::get('/pdf/home-care/oasis-e-discharge.', [PDFController::class, 'generatePDF'])->name('pdf.home-care.oasis-e-discharge.');
    Route::get('/pdf/home-care/oasis-e-recertification', [PDFController::class, 'generatePDF'])->name('pdf.home-care.oasis-e-recertification');
    Route::get('/pdf/home-care/oasis-e-resumption-of-care', [PDFController::class, 'generatePDF'])->name('pdf.home-care.oasis-e-resumption-of-care');
    Route::get('/pdf/home-care/oasis-e-transfer', [PDFController::class, 'generatePDF'])->name('pdf.home-care.oasis-e-transfer');

    // Censors Report
    Route::get('/pdf/censors-report', [PDFController::class, 'censorsReport'])->name('pdf.censors-report');

    // Censors Report
    Route::get('/pdf/skilled-agency/nurse-visit-note', [PDFController::class, 'nurseVisitNote'])->name('pdf.skilled-agency.nurse-visit-note');

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    Route::get('signaturepad', [SignaturePadController::class, 'index']);
    Route::post('signaturepad', [SignaturePadController::class, 'upload'])->name('signaturepad.upload');

    /*
    |--------------------------------------------------------------------------
    | Web Routes for Company info
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    Route::get('layouts/company_info', [Company_infoController::class, 'info']);
    Route::post('layouts/company_info', [Company_infoController::class, 'info'])->name('company_info');


    // from route start here

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/generate-barcode', [ProductController::class, 'index'])->name('generate.barcode');


});

// For super admin
Route::group(['middleware' => ['auth', 'verified', 'role:super-admin']], function () {

    // List all subscription plans
    Route::get('/subscription-plans', [SubscriptionPlanController::class, 'index'])->name('subscription.index');

    // Show the create form
    Route::get('/subscription-plans/create', [SubscriptionPlanController::class, 'create'])->name('subscription.create');

    // Store a new subscription plan
    Route::post('/subscription-plans', [SubscriptionPlanController::class, 'store'])->name('subscription.store');

    // Show the edit form for a subscription plan
    Route::get('/subscription-plans/{id}/edit', [SubscriptionPlanController::class, 'edit'])->name('subscription.edit');

    // Update a specific subscription plan
    Route::put('/subscription-plans/{id}', [SubscriptionPlanController::class, 'update'])->name('subscription.update');

    // Delete a specific subscription plan
    Route::get('/subscription-plans/{id}', [SubscriptionPlanController::class, 'destroy'])->name('subscription.destroy');

    Route::get('/subscriptions/pending-payments', [SubscriptionPlanController::class, 'pendingIndex'])->name('subscriptions.pending-payment');
    Route::post('/subscriptions/update', [SubscriptionPlanController::class, 'updateSubscription'])->name('update.subscription');

});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('invoice', [InvoiceController::class, 'Invoice']);



// Home route
Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
