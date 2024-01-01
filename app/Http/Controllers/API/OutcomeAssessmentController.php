<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Account;

use App\Models\PatientHistory;
use App\Models\Administrative;
use App\Models\Demographic;
use App\Models\HearingVision;
use App\Models\CognitiveMoodBehavior;
use App\Models\Preference;
use App\Models\EnvironmentCondition;
use App\Models\FunctionalStatus;
use App\Models\FunctionalAbilitie;
use App\Models\BladderBowel;
use App\Models\ActiveDiagnosis;
use App\Models\HealthCondition;
use App\Models\SwallowingNutritional;
use App\Models\SkinCondition;
use App\Models\Medication;
use App\Models\SpecialTreatment;
use App\Models\PhysicianOrders;
use App\Models\CMS;
use App\Models\QaList;

use App\Models\Schedule;
use App\Models\Patient;
use App\Models\Organization;
use App\Models\pdf;
use Dompdf\Dompdf;
use Illuminate\Support\Carbon;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use DB;

class OutcomeAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $patient=Patient::find(12);
        $account = Account::where('user_id', Auth::user()->id)->first();
        $org_id=Auth::user()->organization_id;
        $orgn=Organization::find($org_id);
        return view('skilled-agency.oasis-e-start-of-care',compact('patient','account','orgn') )->with('active','phistory');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // patinet history save
       // dd($request);

        if(isset($request->patientHistory)){
            $patient_id = $request->patient_id;
            $data = [
                'patient_id' => $patient_id,
                'primary_reason' => $request->primary_reason,
                'hypertension' => $request->has('hypertension'),
                'hypotension' => $request->hypotension,
                'cardiac' => $request->has('cardiac'),
                'respiratory' => $request->has('respiratory'),
                'osteoporosis' => $request->has('osteoporosis'),
                'fractures' => $request->has('fractures'),
                'cancerSite' => $request->cancerSite,
                'infection' => $request->has('infection'),
                'immunosuppressed' => $request->has('immunosuppressed'),
                'openWoundEtiology' => $request->openWoundEtiology,
                'fallsWithoutInjury' => $request->has('fallsWithoutInjury'),
                'fallsWithInjury' => $request->has('fallsWithInjury'),
                'hospitalizations' => $request->has('hospitalizations'),
                'erVisits' => $request->has('erVisits'),
                'recentSurgeries' => $request->has('recentSurgeries'),
                'pertinentDetails' => $request->pertinentDetails,
                'surgery' => $request->has('surgery'),
                'procedures' => $request->has('procedures'),
                'expectedFuture' => $request->expectedFuture,
                'expectedFutureExplanation' => $request->expectedFutureExplanation,
                'temperature' => $request->temperature,
                'tempOr' => $request->tempOr,
                'tempTat' => $request->tempTat,
                'pulseApical' => $request->pulseApical,
                'radial' => $request->radial,
                'brachial' => $request->brachial,
                'carotid' => $request->carotid,
                'ri' => $request->ri,
                'oximetryRest' => $request->oximetryRest,
                'oximetryActivity' => $request->oximetryActivity,
                'activitySpecify' => $request->activitySpecify,
                'leftRest' => $request->leftRest,
                'rightRest' => $request->rightRest,
                'sittingLyingRest' => $request->sittingLyingRest,
                'standingRest' => $request->standingRest,
                'leftActivity' => $request->leftActivity,
                'rightActivity' => $request->rightActivity,
                'sittingLyingActivity' => $request->sittingLyingActivity,
                'standingActivity' => $request->standingActivity,
                'leftPostActivity' => $request->leftPostActivity,
                'rightPostActivity' => $request->rightPostActivity,
                'sittingLyingPostActivity' => $request->sittingLyingPostActivity,
                'standingPostActivity' => $request->standingPostActivity,
                'respirations' => $request->respirations,
                'respirationsRi' => $request->respirationsRi,
                'apneaPeriods' => $request->apneaPeriods,
                'respirationsOr' => $request->respirationsOr,
                'pneumonia' => $request->has('pneumonia'),
                'tetanus' => $request->has('tetanus'),
                'shingles' => $request->shingles,
                'hepatitisC' => $request->has('hepatitisC'),
                'otherImmunizations' => $request->otherImmunizations,
                'immunizationNeeds' => $request->immunizationNeeds,
                'covidVaccineInitial' => $request->has('covidVaccineInitial'),
                'covidVaccineBooster' => $request->has('covidVaccineBooster'),
                'vaccinationBooster' => $request->vaccinationBooster,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            PatientHistory::updateOrInsert(['patient_id' => $patient_id], $data);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_id,'tab'=>'admin'])->with(['active' => 'admin', 'success' => 'Patient History data updated Successfully']);

        }
        if(isset($request->administrative)){
            $patient_history_id = $request->patient_history_id;
            $data = [
                'nipNumber' => $request->nipNumber,
                'ukUnknown' => $request->ukUnknown,
                'cmsNumber' => $request->cmsNumber,
                'branchState' => $request->branchState,
                'branchId' => $request->branchId,
                'patientIdNo' => $request->patientIdNo,
                'patientName' => $request->patientName,
                'patientMi' => $request->patientMi === 'on' ? 1 : 0,
                'lastName' => $request->lastName,
                'middleName' => $request->middleName,
                'state' => $request->state,
                'zip' => $request->zip,
                'socialSecurityNumber' => $request->socialSecurityNumber,
                'ssnUnknown' => $request->ssnUnknown === 'on' ? 1 : 0,
                'medicare' => $request->medicare,
                'noMedicare' => $request->noMedicare === 'on' ? 1 : 0,
                'medicaid' => $request->medicaid,
                'noMedicaid' => $request->noMedicaid === 'on' ? 1 : 0,
                'gender' => $request->gender,
                'dateofbirth' => $request->dateofbirth,
                'primaryAllowValue0' => $request->primaryAllowValue0 === 'on' ? 1 : 0,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $administrative = Administrative::updateOrInsert(['patient_history_id' => $patient_history_id], $data);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'demographic'])->with(['active' => 'demographic', 'success' => 'Administrative data updated Successfully']);

        }

        if (isset($request->demographic)){
            // dd($request->all());
            $patient_history_id = $request->patient_history_id;
            $data = [
                // 'patient_history_id'=$request->patient_history_id;
                'hispanic' => $request->has('hispanic'),
                'mexican' => $request->has('mexican'),
                'rican' => $request->has('rican'),
                'cuban' => $request->has('cuban'),
                'anotherHispanic' => $request->has('anotherHispanic'),
                'unableRespond' => $request->has('unableRespond'),
                'declines' => $request->has('declines'),
                'white' => $request->has('white'),
                'black' => $request->has('black'),
                'americanIndian' => $request->has('americanIndian'),
                'asianIndian' => $request->has('asianIndian'),
                'chines' => $request->has('chines'),
                'fillipino' => $request->has('fillipino'),
                'japanes' => $request->has('japanes'),
                'korean' => $request->has('korean'),
                'vietnamese' => $request->has('vietnamese'),
                'otherAsian' => $request->has('otherAsian'),
                'nativeHawaiian' => $request->has('nativeHawaiian'),
                'guamanian' => $request->has('guamanian'),
                'samoa' => $request->has('samoa'),
                'otherIsland' => $request->has('otherIsland'),
                'noa' => $request->has('noa'),
                'nocharge' => $request->has('nocharge'),
                'traditional' => $request->has('traditional'),
                'hmo' => $request->has('hmo'),
                'compensation' => $request->has('compensation'),
                'programs' => $request->has('programs'),
                'government' => $request->has('government'),
                'insurance' => $request->has('insurance'),
                'privateHmo' => $request->has('privateHmo'),
                'selfpay' => $request->has('selfpay'),
                'other' => $request->has('other'),
                'unknown' => $request->has('unknown'),
                'preferred' => $request->preferred,
                'interpater' => (int)$request->interpater,
                'startCareDate' => $request->startCareDate,
                'resumptionDate' => $request->resumptionDate,
                'rn' => $request->has('rn'),
                'pt' => $request->has('pt'),
                'slpSt' => $request->has('slpSt'),
                'ot' => $request->has('ot'),
                'assessmentDate' => $request->assessmentDate,
                'startofcare' => $request->has('startofcare'),
                'resumption' => $request->has('resumption'),
                'recertification' => $request->has('recertification'),
                'otherFollow' => $request->has('otherFollow'),
                'transferred' => $request->has('transferred'),
                'facility' => $request->has('facility'),
                'deathHome' => $request->has('deathHome'),
                'dischargeAgency' => $request->has('dischargeAgency'),
                'dischargedDate' => $request->dischargedDate,
                'orderedDate' => $request->orderedDate,
                'episodeDate' => $request->has('episodeDate'),
                'referralDate' => $request->referralDate,
                'episodeTiming' => $request->episodeTiming,
                'transportationA' => $request->has('transportationA'),
                'transportationB' => $request->has('transportationB'),
                'transportationC' => $request->has('transportationC'),
                'transportationX' => $request->has('transportationX'),
                'transportationY' => $request->has('transportationY'),
                'longTerm' => $request->has('longTerm'),
                'skilled' => $request->has('skilled'),
                'shortstay' => $request->has('shortstay'),
                'careHospital' => $request->has('careHospital'),
                'inpatient' => $request->has('inpatient'),
                'psychiatric' => $request->has('psychiatric'),
                'otherDischarge' => $request->has('otherDischarge'),
                'noapply' => $request->has('noapply'),
                'dischargeDate' => $request->dischargeDate,
                'ukUnknown' => $request->has('ukUnknown'),
                'emergentCareNo' => $request->has('emergentCareNo'),
                'emergentCareYes' => $request->has('emergentCareYes'),
                'emergentCareUsedHospital' => $request->has('emergentCareUsedHospital'),
                'emergentCareUnknown' => $request->has('emergentCareUnknown'),
                'emergentCareImproper' => $request->has('emergentCareImproper'),
                'emergentCareHypo' => $request->has('emergentCareHypo'),
                'emergentCareOther' => $request->has('emergentCareOther'),
                'emergentCareOtherunknown' => $request->has('emergentCareOtherunknown'),
                'hospital' => $request->has('hospital'),
                'rehabilitation' => $request->has('rehabilitation'),
                'nursing' => $request->has('nursing'),
                'hospice' => $request->has('hospice'),
                'inpatient' => $request->has('inpatient'),
                'remained' => $request->has('remained'),
                'community' => $request->has('community'),
                'institutional' => $request->has('institutional'),
                'patientMoved' => $request->has('patientMoved'),
                'otherUnknown' => $request->has('otherUnknown'),
                'reconciledNo' => $request->has('reconciledNo'),
                'reconciledYes' => $request->has('reconciledYes'),
                'reconciledNa' => $request->has('reconciledNa'),
                'subsequentProvider' => $request->has('subsequentProvider'),
                'providerSubsequent' => $request->has('providerSubsequent'),
                'electronicHealth' => $request->has('electronicHealth'),
                'healthInformation' => $request->has('healthInformation'),
                'inPerson' => $request->has('inPerson'),
                'paperBased' => $request->has('paperBased'),
                'otherMethods' => $request->has('otherMethods'),
                'reconciledMedication' => $request->has('reconciledMedication'),
                'record' => $request->has('record'),
                'exchange' => $request->has('exchange'),
                'verbal' => $request->has('verbal'),
                'routePaperBased' => $request->has('routePaperBased'),
                'routeOther' => $request->has('routeOther'),
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            Demographic::updateOrInsert(['patient_history_id' => $patient_history_id], $data);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'hearing'])->with(['active' => 'hearing', 'success' => 'Success!!! Demographic Data Updated']);
        }

        if(isset($request->hearingSubmit)){
            $patient_history_id = $request->patient_history_id;
            $data = [
                'hearingAdequate' => $request->hearingAdequate,
                'hearingMinimal' => $request->hearingMinimal,
                'hearingModerate' => $request->hearingModerate,
                'hearingHighlyImpaired' => $request->hearingHighlyImpaired,
                'visionAdequate' => $request->visionAdequate,
                'visionImpaired' => $request->visionImpaired,
                'visionHighlyImpaired' => $request->visionHighlyImpaired,
                'visionSeverelyImpaired' => $request->visionSeverelyImpaired,
                'healthLiteracyNever' => $request->healthLiteracyNever,
                'healthLiteracyRarely' => $request->healthLiteracyRarely,
                'healthLiteracySometimes' => $request->healthLiteracySometimes,
                'healthLiteracyOften' => $request->healthLiteracyOften,
                'healthLiteracyAlways' => $request->healthLiteracyAlways,
                'healthLiteracyPatient' => $request->healthLiteracyPatient,
                'healthLiteracyPatientUnable' => $request->healthLiteracyPatientUnable,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            HearingVision::updateOrInsert(['patient_history_id' => $patient_history_id], $data);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cognitive'])->with(['active' => 'cognitive', 'success' => 'Success!!! Hearing and Vision Data Updated']);
        }


        if(isset($request->cognitivesubmit)){
            $patient_history_id = $request->patient_history_id;
            $data = [
                'mentalStatus' => $request->mentalStatus,
                'repetition' => $request->repetition,
                'temporal' => $request->temporal,
                'month' => $request->month,
                'day' => $request->day,
                'recall' => $request->recall,
                'recallBlue' => $request->recallBlue,
                'recallBed' => $request->recallBed,
                'addScore' => $request->addScore,
                'acute' => $request->acute,
                'inattention' => $request->inattention,
                'disorganized' => $request->disorganized,
                'altered' => $request->altered,
                'alert' => $request->alert,
                'prompting' => $request->prompting,
                'assistance' => $request->assistance,
                'considerable' => $request->considerable,
                'dependent' => $request->dependent,
                'whenConfused' => $request->whenConfused,
                'whenAnxious' => $request->whenAnxious,
                'symptom' => $request->symptom,
                'frequency' => $request->frequency,
                'interest' => $request->interest,
                'hopeless' => $request->hopeless,
                'trouble' => $request->trouble,
                'tired' => $request->tired,
                'appetite' => $request->appetite,
                'bad' => $request->bad,
                'concentrating' => $request->concentrating,
                'speaking' => $request->speaking,
                'thoughts' => $request->thoughts,
                'totalScore' => $request->totalScore,
                'socialIsolation' => $request->socialIsolation,
                'memoryDeficit' => $request->memoryDeficit,
                'impaired' => $request->impaired,
                'disruption' => $request->disruption,
                'aggression' => $request->aggression,
                'infantile' => $request->infantile,
                'delusional' => $request->delusional,
                'noa' => $request->noa,
                'never' => $request->never,
                'lessMonth' => $request->lessMonth,
                'onesMonth' => $request->onesMonth,
                'severalTimes' => $request->severalTimes,
                'severalWeek' => $request->severalWeek,
                'daily' => $request->daily,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            CognitiveMoodBehavior::updateOrInsert(['patient_history_id' => $patient_history_id], $data);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'preference'])->with(['active' => 'preference', 'success' => 'Success!!! Cognitive Mood Behavior Data Updated']);

        }

        if(isset($request->preference)){
            $patientHistory = $request->patient_history_id;
            $prefData = [
                'livesAlone' => $request->livesAlone,
                'livesWithOthers' => $request->livesWithOthers,
                'livesInCongregate' => $request->livesInCongregate,
                'supervisionSafety' => $request->supervisionSafety,
                'adlAssistance' => $request->adlAssistance,
                'medicationAdministration' => $request->medicationAdministration,
                'medicalProcedures' => $request->medicalProcedures,
                'patient' => $request->patient,
                'representative' => $request->representative,
                'other' => $request->other,
                'ccptihhsp' => $request->ccptihhsp,
                'communicationPatient' => $request->communicationPatient,
                'communicationRepresentative' => $request->communicationRepresentative,
                'preferences' => $request->preferences,
                'communicationOther' => $request->communicationOther,
                'communicationStatus' => $request->communicationStatus,
                'personalGoalPatient' => $request->personalGoalPatient,
                'personalGoalRepresentative' => $request->personalGoalRepresentative,
                'otherDiscussed' => $request->otherDiscussed,
                'agreementStatus' => $request->agreementStatus,
                'goalWrittenByPatient' => $request->goalWrittenByPatient,
                'goalWrittenByRepresentative' => $request->goalWrittenByRepresentative,
                'otherGoalWritten' => $request->otherGoalWritten,
                'goalAgreementByPatient' => $request->goalAgreementByPatient,
                'goalAgreementByRepresentative' => $request->goalAgreementByRepresentative,
                'otherGoalAgreement' => $request->otherGoalAgreement,
                'otherField1' => $request->otherField1,
                'otherField2' => $request->otherField2,
                'resumptionofCare' => $request->resumptionofCare,
                'discontinued' => $request->discontinued,
                'platsp' => $request->platsp,
                'platspExplain' => $request->platspExplain,
                'ifhha' => $request->ifhha,
                'ifhhaOo' => $request->ifhhaOo,
                'ifhhaExplain' => $request->ifhhaExplain,
                'bleedingPrecautions' => $request->bleedingPrecautions,
                'siderailsUp' => $request->siderailsUp,
                'infectionControlMeasures' => $request->infectionControlMeasures,
                'precautions' => $request->precautions,
                'elevateHead' => $request->elevateHead,
                'precautionsWalker' => $request->precautionsWalker,
                'seizurePrecautions' => $request->seizurePrecautions,
                'hrSupervision' => $request->hrSupervision,
                'fallPrecautions' => $request->fallPrecautions,
                'clearPathways' => $request->clearPathways,
                'aspiration' => $request->aspiration,
                'precautionsLock' => $request->precautionsLock,
                'otherPrecaution' => $request->otherPrecaution,
                'itanffrp' => $request->itanffrp,
                'spi' => $request->spi,
                'spiComments' => $request->spiComments,
                'materialsRights' => $request->materialsRights,
                'materialsState' => $request->materialsState,
                'materialsAdvance' => $request->materialsAdvance,
                'materialsDoNot' => $request->materialsDoNot,
                'materialsHipaa' => $request->materialsHipaa,
                'materialsOasis' => $request->materialsOasis,
                'materialsEmergency' => $request->materialsEmergency,
                'materialsAgencyPhone' => $request->materialsAgencyPhone,
                'materialsContactPhysician' => $request->materialsContactPhysician,
                'materialsStandardPrecautions' => $request->materialsStandardPrecautions,
                'materialsStandardHandwashing' => $request->materialsStandardHandwashing,
                'materialsBasicHome' => $request->materialsBasicHome,
                'materialsMedicationRegimen' => $request->materialsMedicationRegimen,
                'materialsMedicationAdministration' => $request->materialsMedicationAdministration,
                'materialsAdministratorContact' => $request->materialsAdministratorContact,
                'materialsCopyOfRights' => $request->materialsCopyOfRights,
                'otherMaterials' => $request->otherMaterials,
                'materialsRightsResponsibilities' => $request->materialsRightsResponsibilities,
                'materialsStateHotline' => $request->materialsStateHotline,
                'materialsAdvanceDirectives' => $request->materialsAdvanceDirectives,
                'materialsDoNotResuscitate' => $request->materialsDoNotResuscitate,
                'materialsHipaaNotice' => $request->materialsHipaaNotice,
                'materialsOasisPrivacy' => $request->materialsOasisPrivacy,
                'aterialsAgencyPhoneNumber' => $request->aterialsAgencyPhoneNumber,
                'materialsWhenToContactPhysician' => $request->materialsWhenToContactPhysician,
                'materialsStandardPrecautions' => $request->materialsStandardPrecautions,
                'materialsBasicHomeSafety' => $request->materialsBasicHomeSafety,
                'disease' => $request->disease,
                'disease2' => $request->disease2,
                'materialsMedicationRegimen' => $request->materialsMedicationRegimen,
                'contactInformation' => $request->contactInformation,
                'copyOfRightsResponsibilities' => $request->copyOfRightsResponsibilities,
                'otherMaterialsInfo' => $request->otherMaterialsInfo,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            Preference::updateOrInsert(['patient_history_id' => $patientHistory], $prefData);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patientHistory,'tab'=>'funStatus'])->with(['active' => 'funStatus', 'success' => 'Success!!! Preference Data Updated']);

        }

        if(isset($request->funStatus)){
            $patientHistory = $request->patient_history_id;
            $data = [
                'grooming' => $request->grooming,
                'dressingUpper' => $request->dressingUpper,
                'dressingLower' => $request->dressingLower,
                'bathing' => $request->bathing,
                'toiletTransferring' => $request->toiletTransferring,
                'toiletingHygiene' => $request->toiletingHygiene,
                'transferring' => $request->transferring,
                'ifha' => $request->ifha,
                'Orderobtained' => $request->Orderobtained,
                'indoorsRailings' => $request->indoorsRailings,
                'assistiveDevice1' => $request->assistiveDevice1,
                'assistiveDevice2' => $request->assistiveDevice2,
                'assistiveDevice3' => $request->assistiveDevice3,
                'assistiveDevice4' => $request->assistiveDevice4,
                'assistiveDevice5' => $request->assistiveDevice5,
                'outdoorsRailings' => $request->outdoorsRailings,
                'assistiveDevice6' => $request->assistiveDevice6,
                'assistiveDevice7' => $request->assistiveDevice7,
                'assistiveDevice8' => $request->assistiveDevice8,
                'assistiveDevice9' => $request->assistiveDevice9,
                'assistiveDevice10' => $request->assistiveDevice10,
                'toiletHygieneAd' => $request->toiletHygieneAd,
                'atbftm' => $request->atbftm,
                'dtpplta' => $request->dtpplta,
                'rpeTestScoreComment' => $request->rpeTestScoreComment,
                'dspias' => $request->dspias,
                'reacher' => $request->reacher,
                'splints' => $request->splints,
                'sockDonner' => $request->sockDonner,
                'sowerBench' => $request->sowerBench,
                'showerChair' => $request->showerChair,
                'dressingStick' => $request->dressingStick,
                'raised' => $request->raised,
                'handled' => $request->handled,
                'lognHandeOther' => $request->lognHandeOther,
                'ivalue' => $request->ivalue,
                'vc' => $request->vc,
                'min' => $request->min,
                'mod' => $request->mod,
                'max' => $request->max,
                'dval' => $request->dval,
                'ivalue2' => $request->ivalue2,
                'vc2' => $request->vc2,
                'min2' => $request->min2,
                'mod2' => $request->mod2,
                'max2' => $request->max2,
                'dval2' => $request->dval2,
                'ivalue3' => $request->ivalue3,
                'vc3' => $request->vc3,
                'min3' => $request->min3,
                'mod3' => $request->mod3,
                'max3' => $request->max3,
                'dval3' => $request->dval3,
                'ivalue4' => $request->ivalue4,
                'vc4' => $request->vc4,
                'min4' => $request->min4,
                'mod4' => $request->mod4,
                'max4' => $request->max4,
                'dval4' => $request->dval4,
                'ivalue5' => $request->ivalue5,
                'vc5' => $request->vc5,
                'min5' => $request->min5,
                'mod5' => $request->mod5,
                'max5' => $request->max5,
                'dval5' => $request->dval5,
                'oralHygieneTeeth' => $request->oralHygieneTeeth,
                'oralHygieneDentures' => $request->oralHygieneDentures,
                'oralHygieneUpper' => $request->oralHygieneUpper,
                'oralHygieneLower' => $request->oralHygieneLower,
                'oralHygienePartial' => $request->oralHygienePartial,
                'testingStanding' => $request->testingStanding,
                'testingSitting' => $request->testingSitting,
                'sittingSurfaceDesc' => $request->sittingSurfaceDesc,
                'restrictions' => $request->restrictions,
                'bedrest' => $request->bedrest,
                'privileges' => $request->privileges,
                'tolerated' => $request->tolerated,
                'transfer' => $request->transfer,
                'exercises' => $request->exercises,
                'partial' => $request->partial,
                'crutches2' => $request->crutches2,
                'cane2' => $request->cane2,
                'walker2' => $request->walker2,
                'ivalue6' => $request->ivalue6,
                'vc6' => $request->vc6,
                'min6' => $request->min6,
                'mod6' => $request->mod6,
                'max6' => $request->max6,
                'dval6' => $request->dval6,
                'ivalue7' => $request->ivalue7,
                'vc7' => $request->vc7,
                'min7' => $request->min7,
                'mod7' => $request->mod7,
                'max7' => $request->max7,
                'dval7' => $request->dval7,
                'ivalue8' => $request->ivalue8,
                'vc8' => $request->vc8,
                'min8' => $request->min8,
                'mod8' => $request->mod8,
                'max8' => $request->max8,
                'dval8' => $request->dval8,
                'ivalue9' => $request->ivalue9,
                'vc9' => $request->vc9,
                'min9' => $request->min9,
                'mod9' => $request->mod9,
                'max9' => $request->max9,
                'dval9' => $request->dval9,
                'ivalue10' => $request->ivalue10,
                'vc10' => $request->vc10,
                'min10' => $request->min10,
                'mod10' => $request->mod10,
                'max10' => $request->max10,
                'dval10' => $request->dval10,
                'ivalue11' => $request->ivalue11,
                'vc11' => $request->vc11,
                'min11' => $request->min11,
                'mod11' => $request->mod11,
                'max11' => $request->max11,
                'dval11' => $request->dval11,
                'ivalue12' => $request->ivalue12,
                'vc12' => $request->vc12,
                'min12' => $request->min12,
                'mod12' => $request->mod12,
                'max12' => $request->max12,
                'uval12' => $request->uval12,
                'ivalue13' => $request->ivalue13,
                'vc13' => $request->vc13,
                'min13' => $request->min13,
                'mod13' => $request->mod13,
                'max13' => $request->max13,
                'uval13' => $request->uval13,
                'abilityToSwallow' => $request->abilityToSwallow,
                'ivalue14' => $request->ivalue14,
                'vc14' => $request->vc14,
                'min14' => $request->min14,
                'mod14' => $request->mod14,
                'max14' => $request->max14,
                'uval14' => $request->uval14,
                'standingna' => $request->standingna,
                'exaggerated' => $request->exaggerated,
                'roundedUpperBack' => $request->roundedUpperBack,
                'sshaped' => $request->sshaped,
                'weight2' => $request->weight2,
                'wbat' => $request->wbat,
                'pwb' => $request->pwb,
                'tdwb' => $request->tdwb,
                'nwb' => $request->nwb,
                'rpeTestScore' => $request->rpeTestScore,
                'katz' => $request->katz,
                'lawtontest' => $request->lawtontest,
                'tinettiScore' => $request->tinettiScore,
                'tugtestScore' => $request->tugtestScore,
                'bergTest' => $request->bergTest,
                'functionreachtest' => $request->functionreachtest,
                'activitiesSpecific' => $request->activitiesSpecific,
                'noRestrictions2' => $request->noRestrictions2,
                'completeBedrest' => $request->completeBedrest,
                'bathroomPrevileges' => $request->bathroomPrevileges,
                'upAsTolerated2' => $request->upAsTolerated2,
                'transferbed' => $request->transferbed,
                'excercisePre' => $request->excercisePre,
                'partialWeight' => $request->partialWeight,
                'independet' => $request->independet,
                'crutches' => $request->crutches,
                'cane' => $request->cane,
                'wheelchair' => $request->wheelchair,
                'walker' => $request->walker,
                'otherSpecify10' => $request->otherSpecify10,
                'otherSpecify5' => $request->otherSpecify5,
                'otherSpecify7' => $request->otherSpecify7,
                'task15' => $request->task15,
                'ivalue15' => $request->ivalue15,
                'min15' => $request->min15,
                'mod15' => $request->mod15,
                'max15' => $request->max15,
                'task16' => $request->task16,
                'ivalue16' => $request->ivalue16,
                'min16' => $request->min16,
                'mod16' => $request->mod16,
                'max16' => $request->max16,
                'task17' => $request->task17,
                'ivalue17' => $request->ivalue17,
                'min17' => $request->min17,
                'mod17' => $request->mod17,
                'max17' => $request->max17,
                'task18' => $request->task18,
                'ivalue18' => $request->ivalue18,
                'min18' => $request->min18,
                'mod18' => $request->mod18,
                'max18' => $request->max18,
                'task19' => $request->task19,
                'ivalue19' => $request->ivalue19,
                'min19' => $request->min19,
                'mod19' => $request->mod19,
                'max19' => $request->max19,
                'task20' => $request->task20,
                'ivalue20' => $request->ivalue20,
                'min20' => $request->min20,
                'mod20' => $request->mod20,
                'max20' => $request->max20,
                'tonicity' => $request->tonicity,
                'hypertonic' => $request->hypertonic,

                'hypotonic' => $request->hypotonic,
                'isDescribe' => $request->isDescribe,
                'tonicityDescribe' => $request->tonicityDescribe,
                'ivalue21' => $request->ivalue21,
                'min21' => $request->min21,
                'mod21' => $request->mod21,
                'max21' => $request->max21,
                'uval21' => $request->uval21,
                'ivalue22' => $request->ivalue22,
                'min22' => $request->min22,
                'mod22' => $request->mod22,
                'max22' => $request->max22,
                'uval22' => $request->uval22,
                'ivalue23' => $request->ivalue23,
                'min23' => $request->min23,
                'mod23' => $request->mod23,
                'max23' => $request->max23,
                'uval23' => $request->uval23,
                'ivalue24' => $request->ivalue24,
                'min24' => $request->min24,
                'mod24' => $request->mod24,
                'max24' => $request->max24,
                'uval24' => $request->uval24,
                'code' => $request->code,
                'reasonforNeed' => $request->reasonforNeed,
                'adaptOther' => $request->adaptOther,
                'appropriateComment' => $request->appropriateComment,
                'roll' => $request->roll,
                'assistiveComment' => $request->assistiveComment,
                'sit' => $request->sit,
                'scoot' => $request->scoot,
                'sit2' => $request->sit2,
                'otherSpecify1' => $request->otherSpecify1,
                'otherSpecify2' => $request->otherSpecify2,
                'otherSpecify3' => $request->otherSpecify3,
                'specifyComment2' => $request->specifyComment2,
                'specifyComment3' => $request->specifyComment3,
                'specifyComment4' => $request->specifyComment4,
                'specifyComment10' => $request->specifyComment10,
                'specifyComment11' => $request->specifyComment11,
                'lipClosure' => $request->lipClosure,
                'sitcomment2' => $request->sitcomment2,
                'bed' => $request->bed,
                'toilet' => $request->toilet,
                'floor' => $request->floor,
                'auto' => $request->auto,
                'indoors' => $request->indoors,
                'quality' => $request->quality,
                'outdoor2' => $request->outdoor2,
                'quality2' => $request->quality2,
                'propulsion' => $request->propulsion,
                'propulsionComment' => $request->propulsionComment,
                'pressureRelief' => $request->pressureRelief,
                'footRests' => $request->footRests,
                'locks' => $request->locks,
                'levelSurface' => $request->levelSurface,
                'levelSurfaceComment' => $request->levelSurfaceComment,
                'uneven' => $request->uneven,
                'planComments' => $request->planComments,
                'muscleTone' => $request->muscleTone,
                'posture' => $request->posture,
                'endurance' => $request->endurance,
                'distance1' => $request->distance1,
                'distance2' => $request->distance2,
                'distance3' => $request->distance3,
                'distanceLimit' => $request->distanceLimit,
                'distance4' => $request->distance4,
                'distance5' => $request->distance5,
                'distance6' => $request->distance6,
                'assistive1' => $request->assistive1,
                'assistive2' => $request->assistive2,
                'assistive3' => $request->assistive3,
                'qualityDeviations' => $request->qualityDeviations,
                'nwbcomment' => $request->nwbcomment,
                'otherTests' => $request->otherTests,
                'testScores' => $request->testScores,
                'whatSchoreImplies' => $request->whatSchoreImplies,
                'scoreImplise2' => $request->scoreImplise2,
                'whatSchoreImplies2' => $request->whatSchoreImplies2,
                'katzComment' => $request->katzComment,
                'whatSchoreImplies3' => $request->whatSchoreImplies3,
                'lawtonComment' => $request->lawtonComment,
                'whatSchoreImplies4' => $request->whatSchoreImplies4,
                'tinettiScoreCcomment' => $request->tinettiScoreCcomment,
                'whatSchoreImplies5' => $request->whatSchoreImplies5,
                'tugtestScoreComment' => $request->tugtestScoreComment,
                'whatSchoreImplies6' => $request->whatSchoreImplies6,
                'bergTestScore' => $request->bergTestScore,
                'whatSchoreImplies7' => $request->whatSchoreImplies7,
                'functionreachtestComment' => $request->functionreachtestComment,
                'whatSchoreImplies8' => $request->whatSchoreImplies8,
                'activitiesSpecificComment' => $request->activitiesSpecificComment,
                'whatSchoreImplies9' => $request->whatSchoreImplies9,
                'functionalImpact' => $request->functionalImpact,
                'otherSpecify4' => $request->otherSpecify4,
                'otherSpecify6' => $request->otherSpecify6,
                'otherSpecify8' => $request->otherSpecify8,
                'planComments8' => $request->planComments8,
                'assistance3' => $request->assistance3,
                'lightComment' => $request->lightComment,
                'clothingCareComment' => $request->clothingCareComment,
                'moneyManagmentComment' => $request->moneyManagmentComment,
                'medicationComment' => $request->medicationComment,
                'homeSaftyComment' => $request->homeSaftyComment,
                'describe' => $request->describe,
                'commants21' => $request->commants21,
                'comments22' => $request->comments22,
                'commants23' => $request->commants23,
                'commants24' => $request->commants24,
                'area1' => $request->area1,
                'area2' => $request->area2,
                'area3' => $request->area3,
                'area4' => $request->area4,
                'area5' => $request->area5,
                'right1' => $request->right1,
                'right2' => $request->right2,
                'right3' => $request->right3,
                'right4' => $request->right4,
                'right5' => $request->right5,
                'right6' => $request->right6,
                'right7' => $request->right7,
                'right8' => $request->right8,
                'right9' => $request->right9,
                'right10' => $request->right10,
                'left1' => $request->left1,
                'left2' => $request->left2,
                'left3' => $request->left3,
                'left4' => $request->left4,
                'left5' => $request->left5,
                'left6' => $request->left6,
                'left7' => $request->left7,
                'left8' => $request->left8,
                'left9' => $request->left9,
                'left10' => $request->left10,
                'visualTracking' => $request->visualTracking,
                'discrimination' => $request->discrimination,
                'motorPlanning' => $request->motorPlanning,
                'yesRecommendations' => $request->yesRecommendations,
                'imparirmentsNotes' => $request->imparirmentsNotes,
                'eating2' => $request->eating2,
                'oralHygiene' => $request->oralHygiene,
                'toiletingHygieneDetails' => $request->toiletingHygieneDetails,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            $fstat = FunctionalStatus::updateOrInsert(['patient_history_id' => $patientHistory], $data);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patientHistory,'tab'=>'functionalabilitie'])->with(['active' => 'functionalabilitie', 'success' => 'Success!!! Functional Status Data Updated']);
        }

        if(isset($request->functionalabilitiesubmit)){
            $data = [
                'safeCare' => $request->safeCare,
                'indoorMobility' => $request->indoorMobility,
                'stairs' => $request->stairs,
                'functionalCognition' => $request->functionalCognition,
                'manualWheelchair' => $request->manualWheelchair,
                'motorizedWheelchair' => $request->motorizedWheelchair,
                'mechanicalLift' => $request->mechanicalLift,
                'priorDeviceWalker' => $request->priorDeviceWalker,
                'noneOfTheAbove' => $request->noneOfTheAbove,
                'eating1' => $request->eating1,
                'eating2' => $request->eating2,
                'oralHygiene1' => $request->oralHygiene1,
                'oralHygiene2' => $request->oralHygiene2,
                'toiletingHygiene1' => $request->toiletingHygiene1,
                'toiletoiletingHygiene2tingHygiene1' => $request->toiletoiletingHygiene2tingHygiene1,
                'batheself1' => $request->batheself1,
                'batheself2' => $request->batheself2,
                'bodyDressing1' => $request->bodyDressing1,
                'bodyDressing2' => $request->bodyDressing2,
                'lowerBodyDressing1' => $request->lowerBodyDressing1,
                'lowerBodyDressing2' => $request->lowerBodyDressing2,
                'footwear1' => $request->footwear1,
                'footwear2' => $request->footwear2,
                'amputation' => $request->amputation,
                'paralysis' => $request->paralysis,
                'legallyBlind' => $request->legallyBlind,
                'bowelBladder' => $request->bowelBladder,
                'endurance' => $request->endurance,
                'minimalExertion' => $request->minimalExertion,
                'contracture' => $request->contracture,
                'ambulation' => $request->ambulation,
                'functionalLimitationsOther' => $request->functionalLimitationsOther,
                'hearing' => $request->hearing,
                'speech' => $request->speech,
                'speechOther' => $request->speechOther,
                'priorTransferAbility' => $request->priorTransferAbility,
                'priorSocialActivityLevel' => $request->priorSocialActivityLevel,
                'noProblem' => $request->noProblem,
                'joints' => $request->joints,
                'muscles' => $request->muscles,
                'bones' => $request->bones,
                'hpapp' => $request->hpapp,
                'hparp' => $request->hparp,
                'yesNote' => $request->yesNote,
                'treatmentReceived' => $request->treatmentReceived,
                'hpapp2note' => $request->hpapp2note,
                'painJoints' => $request->painJoints,
                'painMuscles' => $request->painMuscles,
                'painBones' => $request->painBones,
                'tingling' => $request->tingling,
                'numbness' => $request->numbness,
                'swelling' => $request->swelling,
                'contracture' => $request->contracture,
                'ue' => $request->ue,
                'le' => $request->le,
                'atrophy' => $request->atrophy,
                'rom' => $request->rom,
                'motorChanges' => $request->motorChanges,
                'motorChangeFine' => $request->motorChangeFine,
                'motorChangeGross' => $request->motorChangeGross,
                'handGrips' => $request->handGrips,
                'strongR' => $request->strongR,
                'strongL' => $request->strongL,
                'weakR' => $request->weakR,
                'weakL' => $request->weakL,
                'htpa' => $request->htpa,
                'belowRight' => $request->belowRight,
                'belowLeft' => $request->belowLeft,
                'aboveRight' => $request->aboveRight,
                'aboveLeft' => $request->aboveLeft,
                'upperRight' => $request->upperRight,
                'upperLeft' => $request->upperLeft,
                'upperOther' => $request->upperOther,
                'exaggeratedForward' => $request->exaggeratedForward,
                'upperBack' => $request->upperBack,
                'canTStand' => $request->canTStand,
                'dtppl' => $request->dtppl,
                'abilitySafety' => $request->abilitySafety,
                'age' => $request->age,
                'noDiagnosis' => $request->noDiagnosis,
                'priorHistory' => $request->priorHistory,
                'incontinence' => $request->incontinence,
                'visualImpairment' => $request->visualImpairment,
                'mobility' => $request->mobility,
                'hazards' => $request->hazards,
                'pharmacy' => $request->pharmacy,
                'affecting' => $request->affecting,
                'cognitive' => $request->cognitive,
                'total' => $request->total,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $patient_history_id = $request->patient_history_id;

            FunctionalAbilitie::updateOrInsert(['patient_history_id' => $patient_history_id], $data);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'bladd'])->with(['active' => 'bladd', 'success' => 'Success!! Functional Abilitie Data Updated']);

        }

        if(isset($request->bladd)){
            $patient_history_id = $request->patient_history_id;

            $bladdData = [
                'tractInfection' => $request->tractInfection,
                'catheterPresence' => $request->catheterPresence,
                'incontinenceFrequency' => $request->incontinenceFrequency,
                'bowelElimination' => $request->bowelElimination,
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $bladd = BladderBowel::updateOrInsert(['patient_history_id' => $request->patient_history_id], $bladdData);

            return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'activeDig'])->with(['active' => 'activeDig', 'success' => 'Success!! Bladder Bowel Data Updated']);
     }

     if(isset($request->activeDig)){
        $patient_history_id = $request->patient_history_id;
        $activeDigData = [
            'parimaryOne' => $request->parimaryOne,
            'primaryAllow' => $request->primaryAllow,
            'primaryAllowValue0' => $request->primaryAllowValue0,
            'primaryAllowValue1' => $request->primaryAllowValue1,
            'primaryAllowValue2' => $request->primaryAllowValue2,
            'primaryAllowValue3' => $request->primaryAllowValue3,
            'primaryAllowValue4' => $request->primaryAllowValue4,
            'otherdig' => json_encode($request->otherdig),
            'otherDiagnosisb' => json_encode($request->otherDiagnosisb),
            'otherDiagnosisb0' => $request->otherDiagnosisb0,
            'otherDiagnosisb1' => $request->otherDiagnosisb1,
            'otherDiagnosisb2' => $request->otherDiagnosisb2,
            'otherDiagnosisb3' => $request->otherDiagnosisb3,
            'otherDiagnosisb4' => $request->otherDiagnosisb4,
            'otherDiagnosisCHeading' => $request->otherDiagnosisCHeading,
            'otherDiagnosisc' => $request->otherDiagnosisc,
            'otherDiagnosisc0' => $request->otherDiagnosisc0,
            'otherDiagnosisc1' => $request->otherDiagnosisc1,
            'otherDiagnosisc2' => $request->otherDiagnosisc2,
            'otherDiagnosisc3' => $request->otherDiagnosisc3,
            'otherDiagnosisc4' => $request->otherDiagnosisc4,
            'otherDiagnosisDHeding' => $request->otherDiagnosisDHeding,
            'otherDiagnosisd' => $request->otherDiagnosisd,
            'otherDiagnosisd0' => $request->otherDiagnosisd0,
            'otherDiagnosisd1' => $request->otherDiagnosisd1,
            'otherDiagnosisd2' => $request->otherDiagnosisd2,
            'otherDiagnosisd3' => $request->otherDiagnosisd3,
            'otherDiagnosisd4' => $request->otherDiagnosisd4,
            'otherDiagnosisEHeading' => $request->otherDiagnosisEHeading,
            'otherDiagnosise' => $request->otherDiagnosise,
            'otherDiagnosise0' => $request->otherDiagnosise0,
            'otherDiagnosise1' => $request->otherDiagnosise1,
            'otherDiagnosise2' => $request->otherDiagnosise2,
            'otherDiagnosise3' => $request->otherDiagnosise3,
            'otherDiagnosise4' => $request->otherDiagnosise4,
            'otherDiagnosisFHeading' => $request->otherDiagnosisFHeading,
            'otherDiagnosisf' => $request->otherDiagnosisf,
            'otherDiagnosisf0' => $request->otherDiagnosisf0,
            'otherDiagnosisf1' => $request->otherDiagnosisf1,
            'otherDiagnosisf2' => $request->otherDiagnosisf2,
            'otherDiagnosisf3' => $request->otherDiagnosisf3,
            'otherDiagnosisf4' => $request->otherDiagnosisf4,
            'activeDiogonisis' => $request->activeDiogonisis,
            'diabetesMellitus' => $request->diabetesMellitus,
            'diogonisisNoa' => $request->diogonisisNoa,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        ActiveDiagnosis::updateOrInsert(['patient_history_id' => $request->patient_history_id], $activeDigData);

        return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'healthcon'])->with(['active' => 'healthcon', 'success' => 'Success!! Active Diagnosis Data Updated']);
    }

    if(isset($request->healthcon)){
        $patient_history_id = $request->patient_history_id;
        $healthconData = [
            'patient_history_id' => $request->patient_history_id,
            'historyOfFalls' => $request->historyOfFalls,
            'unintentional' => $request->unintentional,
            'multipleHospital' => $request->multipleHospital,
            'multipleEmergency' => $request->multipleEmergency,
            'declineInMental' => $request->declineInMental,
            'reportedOrObserved' => $request->reportedOrObserved,
            'currentlyTaking' => $request->currentlyTaking,
            'currentlyReports' => $request->currentlyReports,
            'otherRisk' => $request->otherRisk,
            'none' => $request->none,
            'painSleep' => $request->painSleep,
            'rehabilitation' => $request->rehabilitation,
            'dayDayActivities' => $request->dayDayActivities,
            'anyFalls' => $request->anyFalls,
            'noInjury' => $request->noInjury,
            'injurySkin' => $request->injurySkin,
            'majorInjury' => $request->majorInjury,
            'dyspneic' => $request->dyspneic,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $healthcon = HealthCondition::updateOrInsert(['patient_history_id' => $request->patient_history_id], $healthconData);

        return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'swallowing'])->with(['active' => 'swallowing', 'success' => 'Success!! Health Condition Data Updated']);
    }
    if(isset($request->swallowing)){
        $patient_history_id = $request->patient_history_id;
        $swallData = [
            'patient_history_id' => $request->patient_history_id,
            'height' => $request->height,
            'weight' => $request->weight,
            'parenteral' => $request->parenteral,
            'feeding' => $request->feeding,
            'mechanically' => $request->mechanically,
            'therapeutic' => $request->therapeutic,
            'noa' => $request->noa,
            'parenteralNo' => $request->parenteralNo,
            'parenteralYes' => $request->parenteralYes,
            'feedingTubeNo' => $request->feedingTubeNo,
            'feedingTubeYes' => $request->feedingTubeYes,
            'mechanicallyAlteredNo' => $request->mechanicallyAlteredNo,
            'mechanicallyAlteredYes' => $request->mechanicallyAlteredYes,
            'therapeuticDietNo' => $request->therapeuticDietNo,
            'therapeuticDietYes' => $request->therapeuticDietYes,
            'noneofAbobeNo' => $request->noneofAbobeNo,
            'noneofAbobeYes' => $request->noneofAbobeYes,
            'feedingEatingNo' => $request->feedingEatingNo,
            'feedingEatingYes' => $request->feedingEatingYes,
            'feedingEatingUnable' => $request->feedingEatingUnable,
            'feedingEatingAble' => $request->feedingEatingAble,
            'feedingEatingUnableGastrostomy' => $request->feedingEatingUnableGastrostomy,
            'feedingEatingUnableNutrients' => $request->feedingEatingUnableNutrients,
            'modified_by' => $request->modified_by,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $swall = SwallowingNutritional::updateOrInsert(['patient_history_id' => $request->patient_history_id], $swallData);
        return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'skin'])->with(['active' => 'skin', 'success' => 'Success!! Swallowing Nutritional Data Updated']);
    }
    if(isset($request->skin)){
        $patient_history_id = $request->patient_history_id;
        $skinData = [
            'patient_history_id' => $request->patient_history_id,
            'patientUnhealedPressureUlcer' => $request->patientUnhealedPressureUlcer,
            'recentSocAssessment' => $request->recentSocAssessment,
            'socmonth' => $request->socmonth,
            'socday' => $request->socday,
            'socyear' => $request->socyear,
            'dischargeStage2' => $request->dischargeStage2,
            'socstagea1' => $request->socstagea1,
            'socstageb1' => $request->socstageb1,
            'socstagec1' => $request->socstagec1,
            'unstageable' => $request->unstageable,
            'sloughEschar' => $request->sloughEschar,
            'unstageablef1' => $request->unstageablef1,
            'unstageablea1' => $request->unstageablea1,
            'unstageablea2' => $request->unstageablea2,
            'unstageableb1' => $request->unstageableb1,
            'unstageableb2' => $request->unstageableb2,
            'unstageableac1' => $request->unstageableac1,
            'unstageablec2' => $request->unstageablec2,
            'unstageabled1' => $request->unstageabled1,
            'unstageabled2' => $request->unstageabled2,
            'unstageable1' => $request->unstageable1,
            'unstageablee2' => $request->unstageablee2,
            'unstageablef1' => $request->unstageablef1,
            'unstageablef2' => $request->unstageablef2,
            'pressureInjuries' => $request->pressureInjuries,
            'stageofUnhealedPressure' => $request->stageofUnhealedPressure,
            'patientStasisUlcer' => $request->patientStasisUlcer,
            'stasisUlcer' => $request->stasisUlcer,
            'statusofStasisUlcer' => $request->statusofStasisUlcer,
            'patientSurgicalWound' => $request->patientSurgicalWound,
            'statusSurgicalWound' => $request->statusSurgicalWound,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $skin = SkinCondition::updateOrInsert(['patient_history_id' => $request->patient_history_id], $skinData);

        return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'medication'])->with(['active' => 'medication', 'success' => 'Success!! Swallowing Nutritional Data Updated']);
    }

    if(isset($request->medicationsubmit)){
        $patient_history_id = $request->patient_history_id;
        $mediData = [
            'patient_history_id' => $request->patient_history_id,
            'antipsychoticNo' => $request->antipsychoticNo,
            'antipsychoticYes' => $request->antipsychoticYes,
            'anticoagulantNo' => $request->anticoagulantNo,
            'anticoagulantYes' => $request->anticoagulantYes,
            'antibioticNo' => $request->antibioticNo,
            'antibioticYes' => $request->antibioticYes,
            'opioidNo' => $request->opioidNo,
            'opioidYes' => $request->opioidYes,
            'antiplateletNo' => $request->antiplateletNo,
            'antiplateletYes' => $request->antiplateletYes,
            'hypoglycemicNo' => $request->hypoglycemicNo,
            'hypoglycemicYes' => $request->hypoglycemicYes,
            'noneofAbobeNo' => $request->noneofAbobeNo,
            'noneofAbobeYes' => $request->noneofAbobeYes,
            'drugReview' => $request->drugReview,
            'agencyPhysician' => $request->agencyPhysician,
            'agencyCompletePhysician' => $request->agencyCompletePhysician,
            'instructionSpecial' => $request->instructionSpecial,
            'independently' => $request->independently,
            'medication' => $request->medication,
            'correctTimes' => $request->correctTimes,
            'administered' => $request->administered,
            'prescribed' => $request->prescribed,
            'managIndependently' => $request->managIndependently,
            'managInjectable' => $request->managInjectable,
            'managCorrectTimes' => $request->managCorrectTimes,
            'managAdministered' => $request->managAdministered,
            'managNa' => $request->managNa,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $mediData = Medication::updateOrInsert(['patient_history_id' => $request->patient_history_id], $mediData);

        return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'treatment'])->with(['active' => 'treatment', 'success' => 'Success!! Medication Data Updated']);
    }

    if(isset($request->treatment)){
        $patient_history_id = $request->patient_history_id;
        $treatData = [
            'patient_history_id' => $request->patient_history_id,
            'chemotherapy' => $request->chemotherapy,
            'iv' => $request->iv,
            'oral' => $request->oral,
            'rocOther' => $request->rocOther,
            'radiation' => $request->radiation,
            'oxygenTherapy' => $request->oxygenTherapy,
            'continuous' => $request->continuous,
            'intermittent' => $request->intermittent,
            'concentration' => $request->concentration,
            'suctioning' => $request->suctioning,
            'scheduled' => $request->scheduled,
            'needed' => $request->needed,
            'tracheostomy' => $request->tracheostomy,
            'invasive' => $request->invasive,
            'nonInvasive' => $request->nonInvasive,
            'bipap' => $request->bipap,
            'cpap' => $request->cpap,
            'medications' => $request->medications,
            'vasMedications' => $request->vasMedications,
            'antibiotics' => $request->antibiotics,
            'anticoagulation' => $request->anticoagulation,
            'Otherh10' => $request->Otherh10,
            'transfusions' => $request->transfusions,
            'dialysis' => $request->dialysis,
            'hemodialysis' => $request->hemodialysis,
            'peritonealDialysis' => $request->peritonealDialysis,
            'otherIvAccess' => $request->otherIvAccess,
            'otherPeripheral' => $request->otherPeripheral,
            'midLine' => $request->midLine,
            'central' => $request->central,
            'noa' => $request->noa,
            'treatmentsChemotherapy' => $request->treatmentsChemotherapy,
            'treatmentsIv' => $request->treatmentsIv,
            'cancerTreatmentsIral' => $request->cancerTreatmentsIral,
            'cancerTreatmentsOther' => $request->cancerTreatmentsOther,
            'cancerTreatmentscRadiation' => $request->cancerTreatmentscRadiation,
            'respiratoryOxygen' => $request->respiratoryOxygen,
            'respiratoryContinuous' => $request->respiratoryContinuous,
            'respiratoryIntermittent' => $request->respiratoryIntermittent,
            'respiratoryConcentration' => $request->respiratoryConcentration,
            'respiratorySuctioning' => $request->respiratorySuctioning,
            'respiratoryScheduled' => $request->respiratoryScheduled,
            'respiratoryNeeded' => $request->respiratoryNeeded,
            'respiratoryTracheostomy' => $request->respiratoryTracheostomy,
            'respiratoryInvasive' => $request->respiratoryInvasive,
            'respiratoryNonInvasive' => $request->respiratoryNonInvasive,
            'respiratoryBipap' => $request->respiratoryBipap,
            'respiratoryCpap' => $request->respiratoryCpap,
            'respiratoryIvMedications' => $request->respiratoryIvMedications,
            'respiratoryVasoactive' => $request->respiratoryVasoactive,
            'respiratoryAntibiotics' => $request->respiratoryAntibiotics,
            'respiratoryAnticoagulation' => $request->respiratoryAnticoagulation,
            'respiratoryOther' => $request->respiratoryOther,
            'respiratoryTransfusions' => $request->respiratoryTransfusions,
            'respiratoryDialysis' => $request->respiratoryDialysis,
            'respiratoryHemodialysis' => $request->respiratoryHemodialysis,
            'respiratoryPeritoneal' => $request->respiratoryPeritoneal,
            'respiratoryIVAccess' => $request->respiratoryIVAccess,
            'respiratoryPeripheral' => $request->respiratoryPeripheral,
            'respiratoryMidline' => $request->respiratoryMidline,
            'respiratoryCentral' => $request->respiratoryCentral,
            'respiratoryNoa' => $request->respiratoryNoa,
            'includeDates' => $request->includeDates,
            'influenzaNo' => $request->influenzaNo,
            'influenzaYes' => $request->influenzaYes,
            'influenzaYesReceived' => $request->influenzaYesReceived,
            'influenzaAssessed' => $request->influenzaAssessed,
            'influenzaIndicated' => $request->influenzaIndicated,
            'influenzaInability' => $request->influenzaInability,
            'influenzaNotReceive' => $request->influenzaNotReceive,
            'numberOfTherapy' => $request->numberOfTherapy,
            'notappli' => $request->notappli,
            'coordinationComment' => $request->coordinationComment,
            'dmeCompanyName' => $request->dmeCompanyName,
            'companyPhn' => $request->companyPhn,
            'companyOxygen' => $request->companyOxygen,
            'companyOxygenPhn' => $request->companyOxygenPhn,
            'communityOrganizations' => $request->communityOrganizations,
            'companyServices' => $request->companyServices,
            'comOrgComment' => $request->comOrgComment,
            'companyComContact' => $request->companyComContact,
            'companyComPhn' => $request->companyComPhn,
            'companyComComment' => $request->companyComComment,
            'usedWound' => $request->usedWound,
            'twointotwo' => $request->twointotwo,
            'fourintofour' => $request->fourintofour,
            'abds' => $request->abds,
            'cottonTipped' => $request->cottonTipped,
            'drainSponges' => $request->drainSponges,
            'hydrocolloids' => $request->hydrocolloids,
            'nuGauze' => $request->nuGauze,
            'transparentDressings' => $request->transparentDressings,
            'woundCleanser' => $request->woundCleanser,
            'nonusesOther' => $request->nonusesOther,
            'nonUsedOtherNote' => $request->nonUsedOtherNote,
            'alcoholSwabs' => $request->alcoholSwabs,
            'angiocatheterSize' => $request->angiocatheterSize,
            'notessize' => $request->notessize,
            'batteriesSize' => $request->batteriesSize,
            'batteriesSizeNote' => $request->batteriesSizeNote,
            'centralLineDressing' => $request->centralLineDressing,
            'extensionTubings' => $request->extensionTubings,
            'infusionPump' => $request->infusionPump,
            'injectionCaps' => $request->injectionCaps,
            'ivPole' => $request->ivPole,
            'ivTubing' => $request->ivTubing,
            'syringesSize' => $request->syringesSize,
            'syringesSizeNote' => $request->syringesSizeNote,
            'tape' => $request->tape,
            'tapeOther' => $request->tapeOther,
            'externalCatheters' => $request->externalCatheters,
            'ostomyPouch' => $request->ostomyPouch,
            'ostomyPouchNote' => $request->ostomyPouchNote,
            'ostomyWafer' => $request->ostomyWafer,
            'ostomyWaferNote' => $request->ostomyWaferNote,
            'skinProtectant' => $request->skinProtectant,
            'stomaAdhesive' => $request->stomaAdhesive,
            'underpads' => $request->underpads,
            'pouch' => $request->pouch,
            'pouchOther' => $request->pouchOther,
            'pouchNote' => $request->pouchNote,
            'aceticAcid' => $request->aceticAcid,
            'aceticAcidStatus' => $request->aceticAcidStatus,
            'aceticAcidNote' => $request->aceticAcidNote,
            'irrigationTray' => $request->irrigationTray,
            'saline' => $request->saline,
            'straightCatheter' => $request->straightCatheter,
            'straightCatheterOther' => $request->straightCatheterOther,
            'straightCatheterOtherNote' => $request->straightCatheterOtherNote,
            'chemstrips' => $request->chemstrips,
            'syringes' => $request->syringes,
            'syringesOther' => $request->syringesOther,
            'syringesOtherNote' => $request->syringesOtherNote,
            'feedingTube' => $request->feedingTube,
            'feedingTubeType' => $request->feedingTubeType,
            'feedingTubeTypeSize' => $request->feedingTubeTypeSize,
            'sterile' => $request->sterile,
            'nonSterile' => $request->nonSterile,
            'medBox' => $request->medBox,
            'stapleRemoval' => $request->stapleRemoval,
            'steriStrips' => $request->steriStrips,
            'sutureRemovalKit' => $request->sutureRemovalKit,
            'sutureRemovalKitOther' => $request->sutureRemovalKitOther,
            'sutureRemovalKitNote' => $request->sutureRemovalKitNote,
            'augmentative' => $request->augmentative,
            'augmentativeNote' => $request->augmentativeNote,
            'bathBench' => $request->bathBench,
            'brace' => $request->brace,
            'orthotics' => $request->orthotics,
            'orthoticsNote' => $request->orthoticsNote,
            'cane' => $request->cane,
            'commode' => $request->commode,
            'dressing' => $request->dressing,
            'eggcrate' => $request->eggcrate,
            'enteral' => $request->enteral,
            'grab' => $request->grab,
            'grabNote' => $request->grabNote,
            'handheldShower' => $request->handheldShower,
            'hospitalBed' => $request->hospitalBed,
            'semiElectric' => $request->semiElectric,
            'hoyerLift' => $request->hoyerLift,
            'kneeScooter' => $request->kneeScooter,
            'medicalAlert' => $request->medicalAlert,
            'nebulizer' => $request->nebulizer,
            'oxygenConcentrator' => $request->oxygenConcentrator,
            'pressureRelieving' => $request->pressureRelieving,
            'prosthesis' => $request->prosthesis,
            'rue' => $request->rue,
            'rle' => $request->rle,
            'lue' => $request->lue,
            'lle' => $request->lle,
            'other' => $request->other,
            'otherNote' => $request->otherNote,
            'raisedToilet' => $request->raisedToilet,
            'reacher' => $request->reacher,
            'specialMattress' => $request->specialMattress,
            'specialMattressNote' => $request->specialMattressNote,
            'suctionMachine' => $request->suctionMachine,
            'tensUnit' => $request->tensUnit,
            'transferEquipment' => $request->transferEquipment,
            'board' => $request->board,
            'lift' => $request->lift,
            'ventilator' => $request->ventilator,
            'walker' => $request->walker,
            'wheelchair' => $request->wheelchair,
            'otherSupplies' => $request->otherSupplies,
            'otherSuppliesNote' => $request->otherSuppliesNote,
            'cth' => $request->cth,
            'dependentUpon' => $request->dependentUpon,
            'crutches' => $request->crutches,
            'canes' => $request->canes,
            'walker' => $request->walker,
            'wheelchairAdapet' => $request->wheelchairAdapet,
            'manual' => $request->manual,
            'motorized' => $request->motorized,
            'prostheticLimb' => $request->prostheticLimb,
            'scooter' => $request->scooter,
            'ahelper' => $request->ahelper,
            'dependentOther' => $request->dependentOther,
            'dependentOther' => $request->dependentOther,
            'specialTransportation' => $request->specialTransportation,
            'physicalAssist' => $request->physicalAssist,
            'leavingHome' => $request->leavingHome,
            'normalInability' => $request->normalInability,
            'leavingHomeRequires' => $request->leavingHomeRequires,
            'cthNote' => $request->cthNote,
            'nextVisit' => $request->nextVisit,
            'visitComments' => $request->visitComments,
            'physician' => $request->physician,
            'verbalOrder' => $request->verbalOrder,
            'signature' => $request->signature,
            'signatureDate' => $request->signatureDate,
            'signatureTime' => $request->signatureTime,
            'physicianSignature' => $request->physicianSignature,
            'physicianSignatureDate' => $request->physicianSignatureDate,
            'physicianSignatureTime' => $request->physicianSignatureTime,
            'familyMember' => $request->familyMember,
            'familyMemberDate' => $request->familyMemberDate,
            'familyMemberTime' => $request->familyMemberTime,
            'personCompleting' => $request->personCompleting,
            'personCompletingDate' => $request->personCompletingDate,
            'personCompletingTime' => $request->personCompletingTime,
            'agencyName' => $request->agencyName,
            'agencyPhone' => $request->agencyPhone,
            'discontinued' => $request->discontinued,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    ];

    $mediData = SpecialTreatment::updateOrInsert(['patient_history_id' => $request->patient_history_id], $treatData);

    return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'physician'])->with(['active' => 'physician', 'success' => 'Success!! Special Treatment Data Updated']);
}

    if(isset($request->physicianSubmit)){
        // return $request->all();
        $patient_history_id = $request->patient_history_id;
        $attributes = [
            'physicianName' => $request->PhysicianName,
            'patientName' => $request->ClientName,
            'physicianAddress' => $request->Address_1,
            'physicianAddress2' => $request->Address_2,
            'physicianPrimaryPhone' => $request->Tel_1,
            'physicianFax' => $request->Fax,
            'physicianAlternatePhone' => $request->Tel_2,
            'physicianSpeciality' => $request->SSS,
            'physicianDateOfBirth' => $request->ClientDateOfBirth,
            'physicianSsn' => $request->NPI,
            'physicianCurrentDate' => $request->currentdate,
            'physicianGender' => $request->Sex,
            'phsicianSkilled' => $request->phsicianSkilled,
            'phsicianHealthAide' => $request->phsicianHealthAide,
            'phsicianTherapy' => $request->phsicianTherapy,
            'phsicianOther' => $request->phsicianOther,
            'primaryDiagnosis' => $request->PrimaryDiagnosis,
            'icd9' => $request->PD_ICD9,
            'otherDiagnosis1' => $request->OtherDiagnosis,
            'icd101' => $request->icd101,
            'otherDiagnosis2' => $request->otherDiagnosis2,
            'icd102' => $request->icd102,
            'otherDiagnosis3' => $request->otherDiagnosis3,
            'icd103' => $request->icd103,
            'otherDiagnosis4' => $request->otherDiagnosis4,
            'icd104' => $request->icd104,
            'otherDiagnosis5' => $request->otherDiagnosis5,
            'icd105' => $request->icd105,
            'newMedicationDate' => $request->NewMedicationDate,
            'oldMedicationsDate' => $request->OldMedicationsDate,
            'changeMedicationDate' => $request->changeMedicationDate,
            'mdSignature' => $request->MdSignature,
            'singImageName' => $request->singImageName,
            'mdSignatureDate' => $request->MdSignatureDate,
            'nurseSignature' => $request->NurseSignature,
            'nurseSignatureDate' => $request->NurseSignatureDate,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $conditions = ['patient_history_id' => $request->patient_history_id];

        PhysicianOrders::updateOrInsert($conditions, $attributes);

        return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'cms', 'success' => 'Success!! Physician Orders Data Updated']);
    }


    if(isset($request->cmssubmit) || isset($request->saveandcomplete)){
        $patient_history_id = $request->patient_history_id;
        $attributes = [
            'patient_history_id' => $request->patient_history_id,
            'hiClaimNo' => $request->hiClaimNo,
            'startOfCareDate' => $request->startOfCareDate,
            'certiPeriodFrom' => $request->certiPeriodFrom,
            'certiPeriodTo' => $request->certiPeriodTo,
            'medicalRecordNo' => $request->medicalRecordNo,
            'name' => $request->name,
            'address' => $request->address,
            'gender' => $request->gender,
            'dateOfBirth' => $request->dateOfBirth,
            'phone' => $request->phone,
            'riskProfile' => $request->riskProfile,
            'clinicalManager' => $request->clinicalManager,
            'branchInfo' => $request->branchInfo,
            'branchAddress' => $request->branchAddress,
            'clinicPhone' => $request->clinicPhone,
            'providerNumber' => $request->providerNumber,
            'medicare' => $request->medicare,
            'fax' => $request->fax,
            'diagonsisCode' => $request->diagonsisCode,
            'description' => $request->description,
            'date' => $request->date,
            'secDiagnosisCode' => $request->secDiagnosisCode,
            'secDescription' => $request->secDescription,
            'mentalStatus' => $request->mentalStatus,
            'supplies' => $request->supplies,
            'prognosis' => $request->prognosis,
            'safety' => $request->safety,
            'nutritional' => $request->nutritional,
            'limitations' => $request->limitations,
            'other' => $request->other,
            'activities' => $request->activities,
            'medications' => $request->medications,
            'substance' => $request->substance,
            'reaction' => $request->reaction,
            'treatments' => $request->treatments,
            'nurseSign' => $request->nurseSign,
            'signDate' => $request->signDate,
            'certify' => $request->certify,
            'fine' => $request->fine,
            'physician' => $request->physician,
            'physicianAddress' => $request->physicianAddress,
            'physicianPhone' => $request->physicianPhone,
            'npi' => $request->npi,
            'physicianFax' => $request->physicianFax,
            'physicianSign' => $request->physicianSign,
            'physicianSignDate' => $request->physicianSignDate,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        if (isset($request->saveandcomplete)) {

            if (!PatientHistory::where('patient_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Patient History is missing.']);
            }

            if (!Administrative::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Administrative data is missing.']);
            }

            if (!Demographic::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Demographic data is missing.']);
            }

            if (!HearingVision::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Hearing and Vision data is missing.']);
            }

            if (!CognitiveMoodBehavior::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Cognitive, Mood, and Behavior data is missing.']);
            }

            if (!Preference::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Preference data is missing.']);
            }

            if (!FunctionalStatus::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Functional Status data is missing.']);
            }

            if (!FunctionalAbilitie::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Functional Abilities data is missing.']);
            }

            if (!BladderBowel::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Bladder and Bowel data is missing.']);
            }

            if (!ActiveDiagnosis::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Active Diagnosis data is missing.']);
            }

            if (!HealthCondition::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Health Condition data is missing.']);
            }

            if (!SwallowingNutritional::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Swallowing and Nutritional data is missing.']);
            }

            if (!SkinCondition::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Skin Condition data is missing.']);
            }

            if (!Medication::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Medication data is missing.']);
            }

            if (!SpecialTreatment::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Special Treatment data is missing.']);
            }

            if (!PhysicianOrders::where('patient_history_id', $request->patient_history_id)->exists()) {
                return redirect()->route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patient_history_id,'tab'=>'cms'])->with(['active' => 'phistory', 'error' => 'Physician Orders data is missing.']);
            }

            $conditions = ['patient_history_id' => $request->patient_history_id];
            CMS::updateOrInsert($conditions, $attributes);

            $patientId = ['patient_id' => $request->patient_history_id];
            $attributes = ['status' => 1];
            QaList::updateOrInsert($patientId, $attributes);

            $schedule = Schedule::where('id', $request->task_schedule_id)->first();
            $schedule->scheduling_status = 'completed';
            $schedule->save();


            return redirect()->route('dashboard')->with(['active' => 'phistory', 'success' => 'Success!! Patient OASIS & QA Complete']);

        } else {

            $qaList = new QaList();
            $qaList->patient_id = $request->patient_history_id;
            $qaList->status = 0;
            $qaList->save();

            $conditions = ['patient_history_id' => $request->patient_history_id];
            CMS::updateOrInsert($conditions, $attributes);
            return redirect()->back()->with(['active' => 'phistory', 'success' => 'Success!! CMS Data Updated']);
        }
    }

        // $schedule = Schedule::find($request->task_schedule_id)->first();
        // $schedule->scheduling_status = 'complete';
        // $schedule->save();

        // $dompdf = new Dompdf();
        // $html = View::make('pdf.home-care.oasis-e-start-of-care', compact('request'))->render();
        // // $html = View::make('pdf.home-care.aide-supervisory', compact('request'))->render();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->render();

        // $filename = 'pdf_' . $request->task_schedule_id . '.pdf';
        // Storage::put('pdfs/'.$filename, $dompdf->output());
        // $pdf = new pdf();
        // $pdf->task_id = $request->task_schedule_id;
        // $pdf->url = '/pdfs/' . $filename;
        // $pdf->save();

        // return redirect(route('patients',$request->patient_id));
}

    public function saveSentDate(Request $request){
        $itemId = $request->input('itemId');
        $itemType = $request->input('itemType');
        $selectedDate = $request->input('selectedDate');

        if ($itemType == 'CMS') {
            CMS::where('id', $itemId)->update(['sent_date' => $selectedDate]);
        } else {
            PhysicianOrders::where('id', $itemId)->update(['sent_date' => $selectedDate]);
        }

        return response()->json(['message' => 'Sent date updated successfully']);
    }

    public function saveSentMethod(Request $request){
        $itemId = $request->input('itemId');
        $itemType = $request->input('itemType');
        $selectedMethod = $request->input('selectedMethod');

        if ($itemType == 'CMS') {
            CMS::where('id', $itemId)->update(['sent_method' => $selectedMethod]);
        } else {
            PhysicianOrders::where('id', $itemId)->update(['sent_method' => $selectedMethod]);
        }

        return response()->json(['message' => 'Sent method updated successfully']);
    }

    public function saveReceiveDate(Request $request){
        $itemId = $request->input('itemId');
        $itemType = $request->input('itemType');
        $selectedDate = $request->input('selectedDate');

        try {
            if ($itemType == 'CMS') {
                $cms = CMS::where('id', $itemId)->first();
                if ($cms) {
                    $cms->receive_date = $selectedDate;
                    $cms->save();
                }
            } else {
                $physicianOrder = PhysicianOrders::where('id', $itemId)->first();
                if ($physicianOrder) {
                    $physicianOrder->receive_date = $selectedDate;
                    $physicianOrder->save();
                }
            }

            return response()->json(['message' => 'Receive date updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the receive date'], 500);
        }
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
     * Display the specified Pdf.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printPdf($name)
    {
        //
        // if($name=='patientHistory'){
       return view('home-healthcare.allpdf.'.$name);
        // }
   }

   public function geSign(Request $request){

    $pin=$request->pin;

    $account=Account::where('pin',$pin)->first();
    return json_encode($account);
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // DB::connection()->enableQueryLog();
        $patient=Patient::find($id);
        // $queries = DB::getQueryLog();
        // dd($queries);
        $account = Account::where('user_id', Auth::user()->id)->first();
        $org_id=Auth::user()->organization_id;
        $orgn=Organization::find($org_id);
        return view('home-healthcare.oasis-e-start-of-care',compact('patient','account','orgn') );
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $employee = Patient::find($id);
        if($employee)
        {
            $employee->delete();
            return response()->json([
                'status'=>200,
                'message'=> 'Patient Deleted Successfully!',
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=> 'Patient not found!',
            ]);
        }
    }
}
