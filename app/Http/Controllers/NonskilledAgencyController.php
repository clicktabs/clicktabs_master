<?php

namespace App\Http\Controllers;

use App\Models\NonskilledAgency;
use App\Models\IspDoc;
use App\Models\IspDocsService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AnnualReportRequest;
use App\Http\Requests\MUIformRequest;
use App\Http\Requests\HospitalizationRequest;
use App\Http\Requests\UnapprovedBehavioralSupportMuiFormRequest;
use App\Http\Requests\HPCTimeSheetRequest;
use App\Http\Requests\MedicationAdministrationRequest;
use App\Http\Requests\SixtyDaysSummaryRequest;
use App\Http\Requests\ReferralIntakeRequest;
use App\Http\Requests\AccidentRiskAssessmentRequest;
use App\Http\Requests\HhaCarePlanRequest;
use App\Http\Requests\PhysicianOrderRequest;
use App\Models\AnnualReport;
use App\Models\MOIReport;
use App\Models\HospitalizationReport;
use App\Models\UnapprovedBehavioralSupportMuiForm;
use App\Models\UnusualIncidentReport;
use App\Models\IncidentReport;
use App\Models\HpcTimeSheets;
use App\Models\SpecifiedispTimeSheet;
use App\Models\ActivityGoals;
use App\Models\ActivityGoalJobs;
use App\Models\MedicationAdministration;
use App\Models\MedicationsDetails;
use App\Models\MedsAsNeeded;
use App\Models\MedicationRecord;
use App\Models\MedicationCountSheet;
use App\Models\DrugDetail;
use App\Models\MileageLog;
use App\Models\MileageLogData;
use App\Models\SixtyDaysSummary;
use App\Models\AccidentRiskAssessment;
use App\Models\referralIntake;
use App\Models\nursingassessment;
use App\Models\Infectioncontrol;
use App\Models\HhaCarePlan;
use App\Models\HhaCarePlanDetails;
use App\Models\Hhavisitnote;
use App\Models\Hhavisitnote1;
use App\Models\Hhavisitnote2;
use App\Models\PhysicianOrder;
use App\Models\NursingAssessment2;
use App\Models\NursingAssessment3;
use App\Models\QaList;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NursingAssessmentRequest;

class NonskilledAgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('passport-forms.hha-supervisory');
    }
    public function hhacare()
    {
        return view('passport-forms.hha-care-plan');
    }
    public function hhavisit()
    {
        return view('passport-forms.hha-visit-note');
    }
    public function summary()
    {
        return view('passport-forms.60-day-summary');
    }
    public function customepoc()
    {
        return view('passport-forms.custome-poc');
    }
    public function accidentrisk()
    {
        return view('passport-forms.accident-risk-assessment');
    }
    public function mileage(){
            return view('dodd-forms.mileage-log');
    }
    public function activitiesgoal(){
        return view('dodd-forms.activities-goals-log');
    }
    public function asneeded(){
        return view('dodd-forms.medication-as-needed');
    }
    public function medadministtration(){
        return view('dodd-forms.medication-administration-record');
    }
    public function medlist(){
        return view('dodd-forms.medication-count-list');
    }

    public function dashboard($id) {
        return view('patients.non-skilled-dashboard', compact('id'));
    }
    public function passportDashboard($id) {
        return view('patients.non-skilled-passport-dashboard', compact('id'));
    }

    public function sixtyDaysSummaryStore(SixtyDaysSummaryRequest $request)
    {
        $validatedData = $request->validated();
        $sixtyDaysSummary = new SixtyDaysSummary($validatedData);
        $sixtyDaysSummary->schedule_id = $request->input('schedule_id');
        $sixtyDaysSummary->status = 'pending';
        $sixtyDaysSummary->save();
        return redirect()->back()->with('success', '60 Days Summary created successfully!');
    }

    public function accidentRiskAssessmentStore(AccidentRiskAssessmentRequest $request)
    {
        $validatedData = $request->validated();
        $assessment  = new AccidentRiskAssessment($validatedData);
        $assessment->schedule_id = $request->input('schedule_id');
        $assessment->status = 'pending';
        $assessment->save();
        return redirect()->back()->with('success', 'Accident Risk Assessment created successfully!');
    }

    public function referralintakeStore(ReferralIntakeRequest $request)
    {
        $referral = referralIntake::create($request->validated());
        $referral->schedule_id = $request->input('schedule_id');
        $referral->status = 'pending';
        $referral->save();
        return redirect()->back()->with('success', 'Referral-intake created successfully!');
    }

    public function nursingassesshomecarestore(NursingAssessmentRequest $request)
    {
        // First, validate the request
        $validatedData = $request->validated();

        // Start a transaction
        DB::beginTransaction();
        try {
            // Store NursingAssessment data

            $nursingAssessmentData = $request->only([
                    'schedule_id', 'lastName', 'firstName', 'middleInitial', 'passportId', 'ssn',
                    'contactPerson', 'contactPhone', 'lsDwelling', 'otherDwelling', 'Floor', 'Elevator',
                    'LivesAlone', 'individualsLiving', 'services', 'Hospital', 'hospitalAddress',
                    'hospitalizedFrom', 'hospitalizedTo', 'Diagnoses', 'hospitalContact', 'hospitalPhone',
                    'patientDirect', 'Relationship', 'patientHeight', 'patientWeight', 'patientWeightLoss',
                    'amountLost', 'Speech_1', 'Speech_2', 'Speech_3', 'Sight_1', 'Sight_2', 'Sight_3',
                    'Hearing_1', 'Hearing_2', 'Hearing_3', 'Hand_1', 'Hand_2', 'Hand_3', 'Upper_1', 'Upper_2',
                    'Upper_3', 'Lower_1', 'Lower_2', 'Lower_3', 'Respiratory_1', 'Respiratory_2',
                    'Respiratory_3', 'Cardiac_1', 'Cardiac_2', 'Cardiac_3', 'Circulatory_1', 'Circulatory_2',
                    'Circulatory_3', 'describeImpact'
            ]);
            $nursingAssessmentData['schedule_id'] = $request->input('schedule_id');
            $nursingAssessmentData['status'] = 'pending';
            $nursingAssessment = NursingAssessment::create($nursingAssessmentData);

            // Store NursingAssessment2 data
            NursingAssessment2::create(
                $request->only([
                    'HistoryOfTuberculosis', 'extraPulmonary', 'patientCompleteTherapy', 'patientTuberculosis',
                    'Pulmonary', 'extrapulmonary2', 'HxProphylaxis', 'result', 'available', 'afb', 'chestXray',
                    'Oriented_1', 'Oriented_2', 'Oriented_3', 'Anxiety_1', 'Anxiety_2', 'Anxiety_3',
                    'Agitated_1', 'Agitated_2', 'Agitated_3', 'Short_1', 'Short_2', 'Short_3', 'Wanders_1',
                    'Wanders_2', 'Wanders_3', 'Depression_1', 'Depression_2', 'Depression_3', 'Impaired_1',
                    'Impaired_2', 'Impaired_3', 'Danger_1', 'Danger_2', 'Danger_3', 'Articulates_1',
                    'Articulates_2', 'Articulates_3', 'disorder_1', 'disorder_2', 'disorder_3', 'Abusive_1',
                    'Abusive_2', 'Abusive_3', 'Mental_1', 'Mental_2', 'Mental_3', 'independent_1',
                    'independent_2', 'independent_3', 'reminding_1', 'reminding_2', 'reminding_3',
                    'compliant_1', 'compliant_2', 'compliant_3', 'preparing_1', 'preparing_2', 'preparing_3',
                    'administration_1', 'administration_2', 'administration_3', 'TaughtToAdminister', 'explain',
                    'centralLine', 'peripheralLine', 'requiresHome', 'Injections', 'bloodWork'
                ]) + ['nursingassessments_id' => $nursingAssessment->id]
            );

            // Store NursingAssessment3 data
            NursingAssessment3::create(
                $request->only([
                    'Continent_1', 'Continent_2', 'occasionallyIncontinen_1', 'occasionallyIncontinen_2',
                    'Incontinent_1', 'Incontinent_2', 'Decubitus', 'Dressings', 'dressingsSterile', 'Enema',
                    'Catheter', 'Monitor', 'tubeFeeding', 'tubeIrrigation', 'Suctioning', 'Oxygen', 'bloodTests',
                    'Ambulation', 'rehabilitativeTherapy', 'physicalTherapy', 'ambulateInside_1',
                    'ambulateInside_2', 'ambulateInside_3', 'ambulateInside_4', 'ambulateInside_5',
                    'ambulateInside_6', 'ambulateOutside_1', 'ambulateOutside_2', 'ambulateOutside_3',
                    'ambulateOutside_4', 'ambulateOutside_5', 'ambulateOutside_6', 'seatedPosition_1',
                    'seatedPosition_2', 'seatedPosition_3', 'seatedPosition_4', 'seatedPosition_5',
                    'seatedPosition_6', 'fromBed_1', 'fromBed_2', 'fromBed_3', 'fromBed_4', 'fromBed_5',
                    'fromBed_6', 'Commode_1', 'Commode_2', 'Commode_3', 'Commode_4', 'Commode_5',
                    'Commode_6', 'Wheelchair_1', 'Wheelchair_2', 'Wheelchair_3', 'Wheelchair_4', 'Wheelchair_5',
                    'Wheelchair_6', 'Grooming_1', 'Grooming_2', 'Grooming_3', 'Dressing_1', 'Dressing_2',
                    'Dressing_3', 'Washing_1', 'Washing_2', 'Washing_3', 'Bathing_1', 'Bathing_2', 'Bathing_3',
                    'Feeding_1', 'Feeding_2', 'Feeding_3', 'mealPrep_1', 'mealPrep_2', 'mealPrep_3',
                    'reheatMeals_1', 'reheatMeals_2', 'reheatMeals_3', 'Bathroom_1', 'Bathroom_2', 'Bathroom_3',
                    'bedpan_1', 'bedpan_2', 'bedpan_3', 'Commode_11', 'Commode_12', 'Commode_13', 'Catheter_1',
                    'Catheter_2', 'Catheter_3', 'Laundry_1', 'Laundry_2', 'Laundry_3', 'Shopping_1', 'Shopping_2',
                    'Shopping_3', 'Housecleaning_1', 'Housecleaning_2', 'Housecleaning_3', 'observationOfPatient',
                    'relayed', 'Prepared', 'preparedPhone', 'Affiliation', 'fax', 'Signature', 'signatureDate',
                    'agencyServicesToPatient', 'agencyName', 'Services2', 'insuranceBenefits', 'appliedToMedicaid',
                    'Doctor', 'socialWorker', 'dischargePlanner', 'Location', 'otherlocation', 'pleaseExplain'
                ]) + ['nursingassessments_id' => $nursingAssessment->id]
            );

            // Commit the transaction
            DB::commit();

            return redirect()->back()->with('success', 'Nursing Assessment created successfully!');
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollback();

            return response()->json(['message' => 'Failed to save nursing assessments', 'error' => $e->getMessage()], 500);
        }


    }

    public function hhaCarePlanStore(HhaCarePlanRequest $request)
    {
        // Create a new HhaCarePlan record
        $hhaCarePlan = new HhaCarePlan([
            'schedule_id' => $request->input('schedule_id'),
            'clientName' => $request->input('clicentName'),
            'associatedCare' => $request->input('associatedCare'),
            'primaryDiagnosis' => $request->input('primaryDiagnosis'),
            'diet' => $request->input('diet'),
            'mrn' => $request->input('mrn'),
            'visitdate' => $request->input('visitdate'),
            'hhaFrequency' => $request->input('hhaFrequency'),
            'secondaryDiagnosis' => $request->input('secondaryDiagnosis'),
            'allergies' => $request->input('allergies'),
            'dnr_1' => $request->input('dnr_1'),
            'no' => $request->input('no'),
            // Add other fields as needed
            'greater_1' => $request->input('greater_1'),
            'greater_2' => $request->input('greater_2'),
            'greater_3' => $request->input('greater_3'),
            'greater_4' => $request->input('greater_4'),
            'greater_5' => $request->input('greater_5'),
            'greater_6' => $request->input('greater_6'),
            'les_1' => $request->input('les_1'),
            'les_2' => $request->input('les_2'),
            'les_3' => $request->input('les_3'),
            'les_4' => $request->input('les_4'),
            'les_5' => $request->input('les_5'),
            'les_6' => $request->input('les_6'),
            'na' => $request->input('na'),
            'anticoagulantPrecautions' => $request->input('anticoagulantPrecautions'),
            'keepPathwayClear' => $request->input('keepPathwayClear'),
            'properPositionDuring' => $request->input('properPositionDuring'),
            'sharpsSafety' => $request->input('sharpsSafety'),
            'supportDuring' => $request->input('supportDuring'),
            'emergencyPlan' => $request->input('emergencyPlan'),
            'keepSide' => $request->input('keepSide'),
            'safetyinADLs' => $request->input('safetyinADLs'),
            'slowPosition' => $request->input('slowPosition'),
            'useOf' => $request->input('useOf'),
            'fallPrecautions' => $request->input('fallPrecautions'),
            'neutropenicPrecautions' => $request->input('neutropenicPrecautions'),
            'seizurePrecautions' => $request->input('seizurePrecautions'),
            'standardPrecautions' => $request->input('standardPrecautions'),
            'precautions' => $request->input('precautions'),
            'Other' => $request->input('Other'),
            'Amputation' => $request->input('Amputation'),
            'Hearing' => $request->input('Hearing'),
            'Ambulation' => $request->input('Ambulation'),
            'Dyspnea' => $request->input('Dyspnea'),
            'Bowel' => $request->input('Bowel'),
            'Paralysis' => $request->input('Paralysis'),
            'Speech' => $request->input('Speech'),
            'other_1' => $request->input('other_1'),
            'Complete' => $request->input('Complete'),
            'Transfer' => $request->input('Transfer'),
            'Independent' => $request->input('Independent'),
            'Wheelchair' => $request->input('Wheelchair'),
            'bedRest' => $request->input('bedRest'),
            'Exercise' => $request->input('Exercise'),
            'Crutches' => $request->input('Crutches'),
            'Walker' => $request->input('Walker'),
            'tolerated' => $request->input('tolerated'),
            'weight' => $request->input('weight'),
            'Cane' => $request->input('Cane'),
            'cane_Other' => $request->input('cane_Other'),
            'status' => 'pending',
        ]);

        $hhaCarePlan->save();

        $hhaCarePlanDetails = new HhaCarePlanDetails([
            'hha_care_plan_id' => $hhaCarePlan->id,
            'Temperature' => $request->input('Temperature'),
            'BloodPressure' => $request->input('BloodPressure'),
            'HeartRate' => $request->input('HeartRate'),
            'Respirations' => $request->input('Respirations'),
            'Weight' => $request->input('Weight'),
            'Assist' => $request->input('Assist'),
            'assistWith' => $request->input('assistWith'),
            'incontinenceCare' => $request->input('incontinenceCare'),
            'emptyDrainage' => $request->input('emptyDrainage'),
            'bedBath' => $request->input('bedBath'),
            'tubBath' => $request->input('tubBath'),
            'Shower' => $request->input('Shower'),
            'showerChair' => $request->input('showerChair'),
            'hairComb' => $request->input('hairComb'),
            'oralCare' => $request->input('oralCare'),
            'kkinCare' => $request->input('kkinCare'),
            'Pericare' => $request->input('Pericare'),
            'Shave' => $request->input('Shave'),
            'Dressing' => $request->input('Dressing'),
            'medicationReminder' => $request->input('medicationReminder'),
            'assistTransfer' => $request->input('assistTransfer'),
            'Dangle' => $request->input('Dangle'),
            'turnPosition' => $request->input('turnPosition'),
            'rangeMotion' => $request->input('rangeMotion'),
            'assistwithAmbulation' => $request->input('assistwithAmbulation'),
            'makeBed' => $request->input('makeBed'),
            'Housekeeping' => $request->input('Housekeeping'),
            'Nutrition' => $request->input('Nutrition'),
            'mealSetUp' => $request->input('mealSetUp'),
            'assistWithFeeding' => $request->input('assistWithFeeding'),
            'Record' => $request->input('Record'),
            'comments' => $request->input('comments'),
            'healthAide' => $request->input('healthAide'),
            'carePlan' => $request->input('carePlan'),
            'Signature' => $request->input('Signature'),
            'date' => $request->input('date'),
        ]);
        $hhaCarePlanDetails->save();
        return redirect()->back()->with('success', 'HHA Care Plan created successfully');
    }

    public function hhaVisitNoteStore(Request $req)
    {
        // dd($req->input());   // dd($req->all());

        $hha1s = Hhavisitnote::create([
            'schedule_id' => $req->input('schedule_id'),
            'date_1' => $req->date_1,
            'time_in' => $req->time_in,
            'date_2' => $req->date_2,
            'time_out' => $req->time_out,
            'vitals_results' => $req->vitals_results,
            'vitals_P' => $req->vitals_P,
            'refused_1' => $req->refused_1,
            'comments_1' => $req->comments_1,
            'vitals_R' => $req->vitals_R,
            'vitals_R' => $req->vitals_R,
            'vitals_B_P' => $req->vitals_B_P,
            'comments_2' => $req->comments_2,
            'refused_2' => $req->refused_2,
            'vitals_weight' => $req->vitals_weight,
            'vitals_pain_rating' => $req->vitals_pain_rating,
            'refused_3' => $req->refused_3,
            'comments_3' => $req->comments_3,
            'bath' => $req->bath,
            'comments_4' => $req->comments_4,
            'bed_bath' => $req->bed_bath,
            'refused_4' => $req->refused_4,
            'comments_5' => $req->comments_5,
            'refused_5' => $req->refused_5,
            'assis_bath_chair_1' => $req->assis_bath_chair_1,
            'assis_bath_chair_2' => $req->assis_bath_chair_2,
            'assis_bath_chair_3' => $req->assis_bath_chair_3,
            'other_specify' => $req->other_specify,
            'comments_6' => $req->comments_6,
            'assist_bath_chair' => $req->assist_bath_chair,
            'assist_bath_chair_1' => $req->assist_bath_chair_1,
            'comments_7' => $req->comments_7,
            'assist_with_dressing' => $req->assist_with_dressing,
            'assist_with_dressing_1' => $req->assist_with_dressing_1,
            'comments_8' => $req->comments_8,
            'hair_care' => $req->hair_care,
            'comments_9' => $req->comments_9,
            'shampoo' => $req->shampoo,
            'shampoo_1' => $req->shampoo_1,
            'comments_11' => $req->comments_11,
            'skin_care' => $req->skin_care,
            'skin_care_1' => $req->skin_care_1,
            'comments_12' => $req->comments_12,
            'moisturizer' => $req->moisturizer,
            'moisturizer_1' => $req->moisturizer_1,
            'foot_care' => $req->moisturizer,
            'foot_care_1' => $req->moisturizer_1,
            'comments_14' => $req->comments_14,
            'check_pressure_areas' => $req->check_pressure_areas,
            'check_pressure_areas_1' => $req->check_pressure_areas_1,
            'comments_15' => $req->comments_15,
            'nail_care' => $req->nail_care,
            'nail_care_1' => $req->nail_care_1,
            'comments_16' => $req->comments_16,
            'oral_care' => $req->oral_care,
            'oral_care_1' => $req->oral_care_1,
            'comments_17' => $req->comments_17,
            'clean_dentures' => $req->clean_dentures,

            'status' => 'pending',


        ]);

        Hhavisitnote1::create([
            'hhavisitnote1s_id' => $hha1s->id,
            'clean_dentures_1' => $req->clean_dentures_1,
            'shave' => $req->shave,
            'shave_1' => $req->shave_1,
            'comments_19' => $req->comments_19,
            'other' => $req->other,
            'other_1' => $req->other_1,
            'comments_20' => $req->comments_20,
            'perineal_care' => $req->perineal_care,
            'perineal_care_1' => $req->perineal_care_1,
            'comments_21' => $req->comments_21,
            'assist_with_elimination' => $req->assist_with_elimination,
            'assist_with_elimination_1' => $req->assist_with_elimination_1,
            'comments_22' => $req->comments_22,
            'catheter_care' => $req->catheter_care,
            'catheter_care_1' => $req->catheter_care_1,
            'comments_23' => $req->comments_23,
            'ostomy_care' => $req->ostomy_care,
            'ostomy_care_1' => $req->ostomy_care_1,
            'comments_24' => $req->comments_24,
            'Intake' => $req->Intake,
            'Output' => $req->Output,
            'comments_25' => $req->comments_25,
            'inspect_reinforce_dressing' => $req->inspect_reinforce_dressing,
            'comments_26' => $req->comments_26,
            'refuse_7' => $req->refuse_7,
            'medication_reminders' => $req->medication_reminders,
            'comments_27' => $req->comments_27,
            'refuse_8' => $req->refuse_8,
            'medication_assistance' => $req->medication_assistance,
            'comments_28' => $req->comments_28,
            'refuse_9' => $req->refuse_9,
            'other_303' => $req->other_303,
            'comments_29' => $req->comments_29,
            'ambulation' => $req->ambulation,
            'w_c' => $req->w_c,
            'walker' => $req->walker,
            'cane' => $req->cane,
            'refuse_11' => $req->refuse_11,
            'gait_belt' => $req->gait_belt,
            'chair' => $req->chair,
            'bed' => $req->bed,
            'dangle' => $req->dangle,
            'commod' => $req->commod,
            'shower' => $req->shower,
            'tub' => $req->tub,
            'comments_31' => $req->comments_31,
            'ROM' => $req->ROM,
            'Arm' => $req->Arm,
            'Leg' => $req->Leg,
            'comments_32' => $req->comments_32,
            'reposition' => $req->reposition,
        ]);

        Hhavisitnote2::create([
            'hhavisitnote2s_id' => $hha1s->id,
            'every_hrs' => $req->every_hrs,
            'comments_33' => $req->comments_33,
            'exercise_pt' => $req->exercise_pt,
            'exercise_ot' => $req->exercise_ot,
            'exercise_slp' => $req->exercise_slp,
            'refused_17' => $req->refused_17,
            'comments_35' => $req->comments_35,
            'other_408' => $req->other_408,
            'refused_18' => $req->refused_18,
            'comments_36' => $req->comments_36,
            'meal_preparation' => $req->meal_preparation,
            'refused_19' => $req->refused_19,
            'comments_37' => $req->comments_37,
            'assist_feeding' => $req->assist_feeding,
            'refused_20' => $req->refused_20,
            'comments_38' => $req->comments_38,
            'radio_1' => $req->radio_1,
            'refused_21' => $req->refused_21,
            'comments_39' => $req->comments_39,
            'grocery_shopping' => $req->grocery_shopping,
            'refused_22' => $req->refused_22,
            'comments_40' => $req->comments_40,
            'other_500' => $req->other_500,
            'refused_23' => $req->refused_23,
            'comments_41' => $req->comments_41,
            'other_100' => $req->other_100,
            'refused_24' => $req->refused_24,
            'comments_42' => $req->comments_42,
            'bedroom' => $req->bedroom,
            'bathroom' => $req->bathroom,
            'kitchen' => $req->kitchen,
            'change_bed_linen' => $req->change_bed_linen,
            'refused_25' => $req->refused_25,
            'comments_43' => $req->comments_43,
            'equipment_care' => $req->equipment_care,
            'refused_26' => $req->refused_26,
            'comments_44' => $req->comments_44,
            'other_50' => $req->other_50,
            'comments_45' => $req->comments_45,
            'CommentsNotes' => $req->CommentsNotes,
            'sn' => $req->sn,
            'therapy' => $req->therapy,
            'ot' => $req->ot,
            'slp' => $req->slp,
            'family' => $req->family,
            'patient' => $req->patient,
            'signature_date' => $req->signature_date,
            'date' => $req->date,
            'patientsign' => $req->patientsign,
            'patient_date' => $req->patient_date

        ]);
        return redirect()->back()->with('success', ' HHA visit Record Created Successfully');

    }
    public function hhaVisitNoteUpdate(Request $req)
    {
        $id  = $req->id;
        $hha1s = Hhavisitnote::findOrFail($id);

        $hha1s->update([
            // 'schedule_id' => $req->input('schedule_id'),
            'date_1' => $req->date_1,
            'time_in' => $req->time_in,
            'date_2' => $req->date_2,
            'time_out' => $req->time_out,
            'vitals_results' => $req->vitals_results,
            'vitals_P' => $req->vitals_P,
            'refused_1' => $req->refused_1,
            'comments_1' => $req->comments_1,
            'vitals_R' => $req->vitals_R,
            'vitals_R' => $req->vitals_R,
            'vitals_B_P' => $req->vitals_B_P,
            'comments_2' => $req->comments_2,
            'refused_2' => $req->refused_2,
            'vitals_weight' => $req->vitals_weight,
            'vitals_pain_rating' => $req->vitals_pain_rating,
            'refused_3' => $req->refused_3,
            'comments_3' => $req->comments_3,
            'bath' => $req->bath,
            'comments_4' => $req->comments_4,
            'bed_bath' => $req->bed_bath,
            'refused_4' => $req->refused_4,
            'comments_5' => $req->comments_5,
            'refused_5' => $req->refused_5,
            'assis_bath_chair_1' => $req->assis_bath_chair_1,
            'assis_bath_chair_2' => $req->assis_bath_chair_2,
            'assis_bath_chair_3' => $req->assis_bath_chair_3,
            'other_specify' => $req->other_specify,
            'comments_6' => $req->comments_6,
            'assist_bath_chair' => $req->assist_bath_chair,
            'assist_bath_chair_1' => $req->assist_bath_chair_1,
            'comments_7' => $req->comments_7,
            'assist_with_dressing' => $req->assist_with_dressing,
            'assist_with_dressing_1' => $req->assist_with_dressing_1,
            'comments_8' => $req->comments_8,
            'hair_care' => $req->hair_care,
            'comments_9' => $req->comments_9,
            'shampoo' => $req->shampoo,
            'shampoo_1' => $req->shampoo_1,
            'comments_11' => $req->comments_11,
            'skin_care' => $req->skin_care,
            'skin_care_1' => $req->skin_care_1,
            'comments_12' => $req->comments_12,
            'moisturizer' => $req->moisturizer,
            'moisturizer_1' => $req->moisturizer_1,
            'foot_care' => $req->moisturizer,
            'foot_care_1' => $req->moisturizer_1,
            'comments_14' => $req->comments_14,
            'check_pressure_areas' => $req->check_pressure_areas,
            'check_pressure_areas_1' => $req->check_pressure_areas_1,
            'comments_15' => $req->comments_15,
            'nail_care' => $req->nail_care,
            'nail_care_1' => $req->nail_care_1,
            'comments_16' => $req->comments_16,
            'oral_care' => $req->oral_care,
            'oral_care_1' => $req->oral_care_1,
            'comments_17' => $req->comments_17,
            'clean_dentures' => $req->clean_dentures,

            'status' => 'pending',


        ]);
        $hha2s = Hhavisitnote1::where('hhavisitnote1s_id', $id);
        $hha2s->update([
            // 'hhavisitnote1s_id' => $hha1s->id,
            'clean_dentures_1' => $req->clean_dentures_1,
            'shave' => $req->shave,
            'shave_1' => $req->shave_1,
            'comments_19' => $req->comments_19,
            'other' => $req->other,
            'other_1' => $req->other_1,
            'comments_20' => $req->comments_20,
            'perineal_care' => $req->perineal_care,
            'perineal_care_1' => $req->perineal_care_1,
            'comments_21' => $req->comments_21,
            'assist_with_elimination' => $req->assist_with_elimination,
            'assist_with_elimination_1' => $req->assist_with_elimination_1,
            'comments_22' => $req->comments_22,
            'catheter_care' => $req->catheter_care,
            'catheter_care_1' => $req->catheter_care_1,
            'comments_23' => $req->comments_23,
            'ostomy_care' => $req->ostomy_care,
            'ostomy_care_1' => $req->ostomy_care_1,
            'comments_24' => $req->comments_24,
            'Intake' => $req->Intake,
            'Output' => $req->Output,
            'comments_25' => $req->comments_25,
            'inspect_reinforce_dressing' => $req->inspect_reinforce_dressing,
            'comments_26' => $req->comments_26,
            'refuse_7' => $req->refuse_7,
            'medication_reminders' => $req->medication_reminders,
            'comments_27' => $req->comments_27,
            'refuse_8' => $req->refuse_8,
            'medication_assistance' => $req->medication_assistance,
            'comments_28' => $req->comments_28,
            'refuse_9' => $req->refuse_9,
            'other_303' => $req->other_303,
            'comments_29' => $req->comments_29,
            'ambulation' => $req->ambulation,
            'w_c' => $req->w_c,
            'walker' => $req->walker,
            'cane' => $req->cane,
            'refuse_11' => $req->refuse_11,
            'gait_belt' => $req->gait_belt,
            'chair' => $req->chair,
            'bed' => $req->bed,
            'dangle' => $req->dangle,
            'commod' => $req->commod,
            'shower' => $req->shower,
            'tub' => $req->tub,
            'comments_31' => $req->comments_31,
            'ROM' => $req->ROM,
            'Arm' => $req->Arm,
            'Leg' => $req->Leg,
            'comments_32' => $req->comments_32,
            'reposition' => $req->reposition,
        ]);
        $hha3s = Hhavisitnote2::where('hhavisitnote2s_id', $id);
        $hha3s->update([
            // 'hhavisitnote2s_id' => $hha1s->id,
            'every_hrs' => $req->every_hrs,
            'comments_33' => $req->comments_33,
            'exercise_pt' => $req->exercise_pt,
            'exercise_ot' => $req->exercise_ot,
            'exercise_slp' => $req->exercise_slp,
            'refused_17' => $req->refused_17,
            'comments_35' => $req->comments_35,
            'other_408' => $req->other_408,
            'refused_18' => $req->refused_18,
            'comments_36' => $req->comments_36,
            'meal_preparation' => $req->meal_preparation,
            'refused_19' => $req->refused_19,
            'comments_37' => $req->comments_37,
            'assist_feeding' => $req->assist_feeding,
            'refused_20' => $req->refused_20,
            'comments_38' => $req->comments_38,
            'radio_1' => $req->radio_1,
            'refused_21' => $req->refused_21,
            'comments_39' => $req->comments_39,
            'grocery_shopping' => $req->grocery_shopping,
            'refused_22' => $req->refused_22,
            'comments_40' => $req->comments_40,
            'other_500' => $req->other_500,
            'refused_23' => $req->refused_23,
            'comments_41' => $req->comments_41,
            'other_100' => $req->other_100,
            'refused_24' => $req->refused_24,
            'comments_42' => $req->comments_42,
            'bedroom' => $req->bedroom,
            'bathroom' => $req->bathroom,
            'kitchen' => $req->kitchen,
            'change_bed_linen' => $req->change_bed_linen,
            'refused_25' => $req->refused_25,
            'comments_43' => $req->comments_43,
            'equipment_care' => $req->equipment_care,
            'refused_26' => $req->refused_26,
            'comments_44' => $req->comments_44,
            'other_50' => $req->other_50,
            'comments_45' => $req->comments_45,
            'CommentsNotes' => $req->CommentsNotes,
            'sn' => $req->sn,
            'therapy' => $req->therapy,
            'ot' => $req->ot,
            'slp' => $req->slp,
            'family' => $req->family,
            'patient' => $req->patient,
            'signature_date' => $req->signature_date,
            'date' => $req->date,
            'patientsign' => $req->patientsign,
            'patient_date' => $req->patient_date

        ]);

        $qaList = QaList::updateOrInsert(
            ['schedule_id' => $req->schedule_id],
            ['status' => 0]
        );
        return redirect()->back()->with('success', ' HHA visit Record Updated Successfully');

    }

    public function physicianOrderStore(PhysicianOrderRequest $request)
    {
        $validatedData = $request->validated();
        $physicianOrder = new PhysicianOrder($validatedData);
        $physicianOrder->schedule_id = $request->input('schedule_id');
        $physicianOrder->status = 'pending';
        $physicianOrder->save();

        return redirect()->back()->with('success', 'Physician Order Save Successfully');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NonskilledAgency  $nonskilledAgency
     * @return \Illuminate\Http\Response
     */
    public function show(NonskilledAgency $nonskilledAgency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonskilledAgency  $nonskilledAgency
     * @return \Illuminate\Http\Response
     */
    public function edit(NonskilledAgency $nonskilledAgency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NonskilledAgency  $nonskilledAgency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonskilledAgency $nonskilledAgency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonskilledAgency  $nonskilledAgency
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonskilledAgency $nonskilledAgency)
    {
        //
    }

    public function ispdocs(Request $request){
        // return $request->all();
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'medicaid' => 'required|string',
            'odmr_resident' => 'required|string',
            'service_coordinator' => 'required|string',
            'isp_date' => 'required|date',
            'county' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'odmr_facility' => 'required|string',
            'type_of_service' => 'required|string',
        ]);

        // Create a new instance of your IspDoc model and assign the request data
        $modelInstance = new IspDoc();
        $modelInstance->name = $request->input('name');
        $modelInstance->address = $request->input('address');
        $modelInstance->medicaid = $request->input('medicaid');
        $modelInstance->odmr_resident = $request->input('odmr_resident');
        $modelInstance->service_coordinator = $request->input('service_coordinator');
        $modelInstance->isp_date = $request->input('isp_date');
        $modelInstance->county = $request->input('county');
        $modelInstance->start_date = $request->input('start_date');
        $modelInstance->end_date = $request->input('end_date');
        $modelInstance->odmr_facility = $request->input('odmr_facility');
        $modelInstance->type_of_service = $request->input('type_of_service');
        $modelInstance->schedule_id = $request->input('schedule_id');
        $modelInstance->status = 'pending';
        // Save the model instance
        $modelInstance->save();

        // Get the ID of the saved instance
        $savedId = $modelInstance->id;

        $servicesData = $request->input('service_description');

        foreach ($servicesData as $index => $serviceDescription) {
            $IspDocsService = new IspDocsService();
            $IspDocsService->ispdoc_id = $savedId;
            $IspDocsService->service_description = $serviceDescription;
            $IspDocsService->service_frequency = $request->input('service_frequency')[$index];
            $IspDocsService->day_1 = $request->input('day_1')[$index];
            $IspDocsService->day_2 = $request->input('day_2')[$index];
            $IspDocsService->day_3 = $request->input('day_3')[$index];
            $IspDocsService->day_4 = $request->input('day_4')[$index];
            $IspDocsService->day_5 = $request->input('day_5')[$index];
            $IspDocsService->day_6 = $request->input('day_6')[$index];
            $IspDocsService->day_7 = $request->input('day_7')[$index];
            $IspDocsService->day_8 = $request->input('day_8')[$index];
            $IspDocsService->day_9 = $request->input('day_9')[$index];
            $IspDocsService->day_10 = $request->input('day_10')[$index];
            $IspDocsService->day_11 = $request->input('day_11')[$index];
            $IspDocsService->day_12 = $request->input('day_12')[$index];
            $IspDocsService->day_13 = $request->input('day_13')[$index];
            $IspDocsService->day_14 = $request->input('day_14')[$index];
            $IspDocsService->day_15 = $request->input('day_15')[$index];
            $IspDocsService->day_16 = $request->input('day_16')[$index];
            $IspDocsService->day_17 = $request->input('day_17')[$index];
            $IspDocsService->day_18 = $request->input('day_18')[$index];
            $IspDocsService->day_19 = $request->input('day_19')[$index];
            $IspDocsService->day_20 = $request->input('day_20')[$index];
            $IspDocsService->day_21 = $request->input('day_21')[$index];
            $IspDocsService->day_22 = $request->input('day_22')[$index];
            $IspDocsService->day_23 = $request->input('day_23')[$index];
            $IspDocsService->day_24 = $request->input('day_24')[$index];
            $IspDocsService->day_25 = $request->input('day_25')[$index];
            $IspDocsService->day_26 = $request->input('day_26')[$index];
            $IspDocsService->day_27 = $request->input('day_27')[$index];
            $IspDocsService->day_28 = $request->input('day_28')[$index];
            $IspDocsService->day_29 = $request->input('day_29')[$index];
            $IspDocsService->day_30 = $request->input('day_30')[$index];
            $IspDocsService->day_31 = $request->input('day_31')[$index];
            // Save the record
            $IspDocsService->save();
        }
        return redirect()->back()->with('success', 'ISP Document Save Successfully');
    }

    public function agencyReport(AnnualReportRequest $request)
    {
        $validatedData = $request->validated();
        $annualReport = new AnnualReport($validatedData);
        $annualReport->schedule_id = $request->input('schedule_id');
        $annualReport->status = 'pending';
        $annualReport->save();
        return redirect()->back()->with('success', 'Annual report created successfully!');
    }

    public function MUIreport(MUIformRequest $request)
    {
        $validatedData = $request->validated();
        $muiReport = new MOIReport($validatedData);
        $muiReport->schedule_id = $request->input('schedule_id');
        $muiReport->status = 'pending';
        $muiReport->save();
        return redirect()->back()->with('success', 'MOI report created successfully!');
    }

    public function MUIhospitalization(HospitalizationRequest $request)
    {
        $validatedData = $request->validated();
        $hospitalizationReport = new HospitalizationReport($validatedData);
        $hospitalizationReport->schedule_id = $request->input('schedule_id');
        $hospitalizationReport->status = 'pending';
        $hospitalizationReport->save();
        return redirect()->back()->with('success', 'Hospitalization MOI report created successfully!');
    }

    public function unapprovedBehavioral(UnapprovedBehavioralSupportMuiFormRequest $request)
    {
        $validatedData = $request->validated();
        $BehavioralReport = new UnapprovedBehavioralSupportMuiForm($validatedData);
        $BehavioralReport->schedule_id = $request->input('schedule_id');
        $BehavioralReport->status = 'pending';
        $BehavioralReport->save();
        return redirect()->back()->with('success', 'Unapproved Behavioral Support Mui Form MOI report created successfully!');
    }

    public function unusalIncidentReport(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'ProviderFacility' => 'required|string|max:255',
            'MonthYear' => 'required|string|max:255',
            'County' => 'required|string|max:255',
            'ReviewedBy' => 'required|string|max:255',
            'Title' => 'required|string|max:255',
            'ReviewDate' => 'required|date',
            'TrendsPatternIdentified' => 'required|in:YES,NO',
            'TrendsPatternAddressed' => 'required|in:YES,NO',
            'ActionTakenToAddressPatterns' => 'required|string',
        ]);

        $unusualIncidentReport = new UnusualIncidentReport;
        $unusualIncidentReport->ProviderFacility = $validatedData['ProviderFacility'];
        $unusualIncidentReport->MonthYear = $validatedData['MonthYear'];
        $unusualIncidentReport->County = $validatedData['County'];
        $unusualIncidentReport->ReviewedBy = $validatedData['ReviewedBy'];
        $unusualIncidentReport->Title = $validatedData['Title'];
        $unusualIncidentReport->ReviewDate = $validatedData['ReviewDate'];
        $unusualIncidentReport->TrendsPatternIdentified = $validatedData['TrendsPatternIdentified'];
        $unusualIncidentReport->TrendsPatternAddressed = $validatedData['TrendsPatternAddressed'];
        $unusualIncidentReport->ActionTakenToAddressPatterns = $validatedData['ActionTakenToAddressPatterns'];
        $unusualIncidentReport->save();

        $unusualIncidentReport->schedule_id = $request->input('schedule_id');
        $unusualIncidentReport->status = 'pending';

        $unusualIncidentReport->save();

        $savedId = $unusualIncidentReport->id;
        $dataName = $request->input('name');

        foreach ($dataName as $index => $datas) {
            $incidentReport = new IncidentReport([
            'unusal_incident_report_id' => $savedId,
            'name' => $request->input('name')[$index],
            'ui' => $request->input('ui')[$index],
            'date' => $request->input('date')[$index],
            'injury' => $request->input('injury')[$index],
            'home_name_address' => $request->input('home_name_address')[$index],
            'location' => $request->input('location')[$index],
            'description' => $request->input('description')[$index],
            'actionTaken' => $request->input('actionTaken')[$index],
            'factors' => $request->input('factors')[$index],
            'preventionPlan' => $request->input('preventionPlan')[$index],
        ]);
            $incidentReport->save();
        }

        return redirect()->back()->with('success', 'Unusual incident report submitted successfully');
    }

    public function hpcTimeSheetStore(HPCTimeSheetRequest $request)
    {
        $serviceRecord = new HpcTimeSheets($request->validated());
        $serviceRecord->schedule_id = $request->input('schedule_id');
        $serviceRecord->status = 'pending';
        $serviceRecord->save();
        $savedServiceRecordId = $serviceRecord->id;

        $data = $request->input('Descriptionofservice_1');
        $dataName = $request->input('Descriptionofservice_1')[0];
        $dataName1 = $request->input('service_1')[0];
        $dataName2 = $request->input('service_3')[0];
        if (!empty($dataName) || !empty($dataName1) || !empty($dataName2)) {
        foreach ($data as $index => $datas) {
            $specifiedispTimeSheet = new SpecifiedispTimeSheet();
            $specifiedispTimeSheet->hpc_time_sheet_id = $savedServiceRecordId;
            $specifiedispTimeSheet->Descriptionofservice_1 = $datas;
            $specifiedispTimeSheet->service_1 = $request->input('service_1')[$index];
            $specifiedispTimeSheet->service_2 = $request->input('service_2')[$index];
            $specifiedispTimeSheet->service_3 = $request->input('service_3')[$index];
            $specifiedispTimeSheet->service_4 = $request->input('service_4')[$index];
            $specifiedispTimeSheet->service_5 = $request->input('service_5')[$index];
            $specifiedispTimeSheet->service_6 = $request->input('service_6')[$index];
            $specifiedispTimeSheet->service_7 = $request->input('service_7')[$index];
            $specifiedispTimeSheet->save();
            }
        }

        return redirect()->back()->with('success', 'HPC Time Sheet has been saved successfully.');
    }

    public function activeGoalStore(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255'
        ]);

        $activeGoal = new ActivityGoals;
        $activeGoal->customer_name = $validatedData['customer_name'];
        $activeGoal->schedule_id = $request->schedule_id;
        $activeGoal->status = 'pending';
        $activeGoal->save();

        $activeGoalId = $activeGoal->id;
        $GoalsDetails= $request->job_description;
        if (!empty($GoalsDetails)) {
            foreach ($GoalsDetails as $index => $jobDescription) {
                $activityGoalJobs = new ActivityGoalJobs();
                $activityGoalJobs->activity_goals_id = $activeGoalId;
                $activityGoalJobs->job_description = $jobDescription;
                $activityGoalJobs->job_1 = $request->job_1[$index];
                $activityGoalJobs->int_1 = $request->int_1[$index];
                $activityGoalJobs->job_2 = $request->job_2[$index];
                $activityGoalJobs->int_2 = $request->int_2[$index];
                $activityGoalJobs->job_3 = $request->job_3[$index];
                $activityGoalJobs->int_3 = $request->int_3[$index];
                $activityGoalJobs->job_4 = $request->job_4[$index];
                $activityGoalJobs->int_4 = $request->int_4[$index];
                $activityGoalJobs->job_5 = $request->job_5[$index];
                $activityGoalJobs->int_5 = $request->int_5[$index];
                $activityGoalJobs->job_6 = $request->job_6[$index];
                $activityGoalJobs->int_6 = $request->int_6[$index];
                $activityGoalJobs->job_7 = $request->job_7[$index];
                $activityGoalJobs->int_7 = $request->int_7[$index];
                $activityGoalJobs->job_8 = $request->job_8[$index];
                $activityGoalJobs->int_8 = $request->int_8[$index];
                $activityGoalJobs->job_9 = $request->job_9[$index];
                $activityGoalJobs->int_9 = $request->int_9[$index];
                $activityGoalJobs->job_10 = $request->job_10[$index];
                $activityGoalJobs->int_10 = $request->int_10[$index];
                $activityGoalJobs->save();
            }
            return redirect()->back()->with('success', 'ActiveGoal created successfully');
        }
        return redirect()->back()->with('success', 'ActiveGoal created successfully');
    }

    public function medicationAdministrationStore(MedicationAdministrationRequest $request)
    {
        $medicationAdministration = new MedicationAdministration;
        $medicationAdministration->schedule_id = $request->schedule_id;
        $medicationAdministration->status = 'pending';
        $medicationAdministration->individual_name = $request->input('individual_name');
        $medicationAdministration->sex = $request->input('sex');
        $medicationAdministration->dob = $request->input('dob');
        $medicationAdministration->diagnosis = $request->input('diagnosis');
        $medicationAdministration->diet = $request->input('diet');
        $medicationAdministration->sd_instruction = $request->input('sd_instruction');
        $medicationAdministration->phone_number = $request->input('phone_number');
        $medicationAdministration->pysician_name = $request->input('pysician_name');
        $medicationAdministration->date = $request->input('date');
        $medicationAdministration->provider_name = $request->input('provider_name');
        $medicationAdministration->comment_section = $request->input('comment_section');
        $medicationAdministration->save();

        $medicationAdministrationId = $medicationAdministration->id;
        $medsDetails= $request->medication;

        if (!empty($medsDetails)) {
            foreach ($medsDetails as $index => $medsDetail) {
            $medicationsDetails = new MedicationsDetails;
            $medicationsDetails->medication_administration_id = $medicationAdministrationId;
            $medicationsDetails->medication = $medsDetail;
            $medicationsDetails->f1 = $request->f1[$index];
            $medicationsDetails->f2 = $request->f2[$index];
            $medicationsDetails->f3 = $request->f3[$index];
            $medicationsDetails->f4 = $request->f4[$index];
            $medicationsDetails->f5 = $request->f5[$index];
            $medicationsDetails->f6 = $request->f6[$index];
            $medicationsDetails->f7 = $request->f7[$index];
            $medicationsDetails->f8 = $request->f8[$index];
            $medicationsDetails->f9 = $request->f9[$index];
            $medicationsDetails->f10 = $request->f10[$index];
            $medicationsDetails->f11 = $request->f11[$index];
            $medicationsDetails->f12 = $request->f12[$index];
            $medicationsDetails->save();
            }
            return redirect()->back()->with('success', 'Medication Administration record created successfully');
        }
        return redirect()->back()->with('success', 'Medication Administration record created successfully');
    }

    public function medicationAssNeedStore(Request $request)
    {
        $medsAsNeeded = new MedsAsNeeded;
        $medsAsNeeded->individual_name = $request->input('individual_name');
        $medsAsNeeded->sex = $request->input('sex');
        $medsAsNeeded->dob = $request->input('dob');
        $medsAsNeeded->mdate = $request->input('mdate');
        $medsAsNeeded->provider_name = $request->input('provider_name');
        $medsAsNeeded->comment_section = $request->input('comment_section');
        $medsAsNeeded->schedule_id = $request->input('schedule_id');
        $medsAsNeeded->status = 'pending';
        $medsAsNeeded->save();

        $medsAsNeededId = $medsAsNeeded->id;
        $medicationDetails = $request->input('date');

        if (!empty($medicationDetails)) {
            foreach ($medicationDetails as $index => $medicationDetail) {
                $medicationRecord = new MedicationRecord;
                $medicationRecord->meds_as_needed_id = $medsAsNeededId;
                $medicationRecord->date = $medicationDetail;
                $medicationRecord->hours = $request->input('hours')[$index];
                $medicationRecord->initials = $request->input('initials')[$index];
                $medicationRecord->medication = $request->input('medication')[$index];
                $medicationRecord->reason = $request->input('reason')[$index];
                $medicationRecord->results = $request->input('results')[$index];
                $medicationRecord->signature = $request->input('signature')[$index];
                $medicationRecord->save();
            }
            return redirect()->back()->with('success', 'Meds As Needed record created successfully');
        }

        return redirect()->back()->with('success', 'Meds As Needed record created successfully');
    }

    public function medicationCountSheetStore(Request $request)
        {
            $medicationCountSheet = new MedicationCountSheet;
            $medicationCountSheet->individual_name = $request->input('individual_name');
            $medicationCountSheet->staff_name = $request->input('staff_name');
            $medicationCountSheet->schedule_id = $request->input('schedule_id');
            $medicationCountSheet->status = 'pending';
            $medicationCountSheet->save();

            $medicationCountSheetId = $medicationCountSheet->id;
            $drugNames = $request->input('drug_name');

        if (!empty($drugNames)) {
            foreach ($drugNames as $index => $drugName) {
                $drugDetail = new DrugDetail;
                $drugDetail->medication_count_sheet_id = $medicationCountSheetId;
                $drugDetail->drug_name = $drugName;
                $drugDetail->rx = $request->input('rx')[$index];
                $drugDetail->total_amount = $request->input('total_amount')[$index];
                $drugDetail->controlled_med = $request->input('controlled_med')[$index];
                $drugDetail->save();
            }
            return redirect()->back()->with('success', 'Meds As Needed record created successfully');
        }
        return redirect()->back()->with('success', 'Medication Count Sheet created successfully');
    }
    public function milageLogStore(Request $request)
        {
            $mileageLog = new MileageLog;
            $mileageLog->license_plate = $request->input('license_plate');
            $mileageLog->house_address = $request->input('house_address');
            $mileageLog->schedule_id = $request->input('schedule_id');
            $mileageLog->status = 'pending';
            $mileageLog->save();

            $mileageLogId = $mileageLog->id;
            $dates = $request->input('date');

        if (!empty($dates)) {
            foreach ($dates as $index => $date) {
                $mileageLogData = new MileageLogData;
                $mileageLogData->mileage_logs_id = $mileageLogId;
                $mileageLogData->date = $date;
                $mileageLogData->employee = $request->input('employee')[$index];
                $mileageLogData->consumer_name = $request->input('consumer_name')[$index];
                $mileageLogData->beginning_mileage = $request->input('beginning_mileage')[$index];
                $mileageLogData->ending_mileage = $request->input('ending_mileage')[$index];
                $mileageLogData->total_mileage = $request->input('total_mileage')[$index];
                $mileageLogData->office_use_only = $request->input('office_use_only')[$index];
                $mileageLogData->comment_purpose = $request->input('comment_purpose')[$index];
                $mileageLogData->save();
            }
            return redirect()->back()->with('success', 'Mileage Log created successfully');
        }
        return redirect()->back()->with('success', 'Mileage Log created successfully');
    }

    public function nonSkilledStatus(Request $request){

        $id = $request->data_id;
        $formType = $request->type;

        switch ($formType) {
            case 'mileage_log':
                $mileageLog = MileageLog::find($id);
                if ($mileageLog) {
                    $mileageLog->update(['status' => 'approved']);
                    return redirect()->route('nonskilled.mileageLogReport')->with('success', 'Mileage Log Approved');
                } else {
                    return redirect()->back()->with('danger', 'Mileage Log Not Found');
                }
                break;

            case 'medication_count_sheet':
                $medicationCountSheet = MedicationCountSheet::find($id);
                if ($medicationCountSheet) {
                    $medicationCountSheet->status = 'approved';
                    $medicationCountSheet->save();
                    return redirect()->route('nonskilled.medicationCountSheetReport')->with('success', 'Medication Count Sheet Approved');
                } else {
                    return redirect()->back()->with('danger', 'Medication Count Sheet Not Found');
                }
            break;

            case 'medication_as_need':
                $medsAsNeeded = MedsAsNeeded::find($id);
                if ($medsAsNeeded) {
                    $medsAsNeeded->status = 'approved';
                    $medsAsNeeded->save();
                    return redirect()->route('nonskilled.medicationAssNeedReport')->with('success', 'Medication As Needed Approved');
                } else {
                    return redirect()->back()->with('danger', 'Medication As Needed Not Found');
                }
            break;

            case 'medication_administration':
                $medicationAdministration = MedicationAdministration::find($id);
                if ($medicationAdministration) {
                    $medicationAdministration->status = 'approved';
                    $medicationAdministration->save();
                    return redirect()->route('nonskilled.medicationAdministrationReport')->with('success', 'Medication Administration Approved');
                } else {
                    return redirect()->back()->with('danger', 'Medication Administration Not Found');
                }
            break;

            case 'active_goal':
                $activityGoalJobs = ActivityGoals::find($id);
                if ($activityGoalJobs) {
                    $activityGoalJobs->status = 'approved';
                    $activityGoalJobs->save();
                    return redirect()->route('nonskilled.activeGoalReport')->with('success', 'Activity Goal Approved');
                } else {
                    return redirect()->back()->with('danger', 'Activity Goal Not Found');
                }
            break;

            case 'ispdocs':
                $ispDoc = IspDoc::find($id);
                if ($ispDoc) {
                    $ispDoc->status = 'approved';
                    $ispDoc->save();
                    return redirect()->route('nonskilled.ispdocsReport')->with('success', 'ISP Documentation Approved');
                } else {
                    return redirect()->back()->with('danger', 'ISP Documentation  Not Found');
                }
            break;

            case 'agency_Report':
                $agencyReport = AnnualReport::find($id);
                if ($agencyReport) {
                    $agencyReport->status = 'approved';
                    $agencyReport->save();
                    return redirect()->route('nonskilled.agencyreportReport')->with('success', 'Agency Report Approved');
                } else {
                    return redirect()->back()->with('danger', 'Agency Report Not Found');
                }
            break;

            case 'moi_Report':
                $moiReport = MOIReport::find($id);
                if ($moiReport) {
                    $moiReport->status = 'approved';
                    $moiReport->save();
                    return redirect()->route('nonskilled.MUIreportReport')->with('success', 'MOI Report Approved');
                } else {
                    return redirect()->back()->with('danger', 'MOI Report Not Found');
                }
            break;

            case 'hospitalization':
                $hospitalizationReport = HospitalizationReport::find($id);
                if ($hospitalizationReport) {
                    $hospitalizationReport->status = 'approved';
                    $hospitalizationReport->save();
                    return redirect()->route('nonskilled.hospitalizationReport')->with('success', 'MUI Hospitalization Report Approved');
                } else {
                    return redirect()->back()->with('danger', 'MUI Hospitalization Not Found');
                }
            break;

            case 'unapproved_behavioral':
                $unapprovedBehavioralSupportMuiForm = UnapprovedBehavioralSupportMuiForm::find($id);
                if ($unapprovedBehavioralSupportMuiForm) {
                    $unapprovedBehavioralSupportMuiForm->status = 'approved';
                    $unapprovedBehavioralSupportMuiForm->save();
                    return redirect()->route('nonskilled.unapprovedBehavioralReport')->with('success', 'Unapproved Behavioral Support MUI Report Approved');
                } else {
                    return redirect()->back()->with('danger', 'Unapproved Behavioral Support MUI Report Not Found');
                }
            break;

            case 'unusual_incident_report':
                $unusualIncidentReport = UnusualIncidentReport::find($id);
                if ($unusualIncidentReport) {
                    $unusualIncidentReport->status = 'approved';
                    $unusualIncidentReport->save();
                    return redirect()->route('nonskilled.unusalIncidentReportReport')->with('success', 'Unusal Incident Report Approved');
                } else {
                    return redirect()->back()->with('danger', 'Unusal Incident Not Found');
                }
            break;

            case 'hpc_time_sheet':
                $medicationCountSheet = MedicationCountSheet::find($id);
                if ($medicationCountSheet) {
                    $medicationCountSheet->status = 'approved';
                    $medicationCountSheet->save();
                    return redirect()->route('nonskilled.hpcTimeSheetReport')->with('success', 'Medication Count Sheet Approved');
                } else {
                    return redirect()->back()->with('danger', 'Medication Count Sheet Not Found');
                }
            break;


            default:
                return redirect()->back()->with('danger', 'Something Went wrong');
                break;
        }


    }

}
