<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Administrative;
use App\Models\SkilledAgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\PatientEpisodeTiming;
use App\Models\Demographic;
use App\Models\PatientAddressInfo;
use App\Models\PatientServiceAddress;
use App\Models\Patient;
use App\Models\Hhavisitnote;
use App\Models\Hhavisitnote1;
use App\Models\Hhavisitnote2;
use App\Models\Nursingvisitnote;
use App\Models\Nursingvisitnote1;
use App\Models\Nursingvisitnote2;
use App\Models\Nursingvisitnote3;
use App\Models\Nursingvisitnote4;
use App\Models\Nursingvisitnote5;

use App\Models\NurseSectionFirst;
use App\Models\NurseSectionFirstTwo;
use App\Models\NurseSectionFirstThree;
use App\Models\NurseSectionFirstFour;

use App\Models\NurseSectionSecond;
use App\Models\NurseSectionSecondTwo;
use App\Models\PatientCaseManager;
use App\Models\PatientInsurance;
use App\Models\Pharmacy;
use App\Models\Physician;
use App\Models\PatientExtraInfo;
use App\Models\PatientEthincity;
use App\Models\PatientTransportation;
use App\Models\Account;
use App\Models\AideSupervisoryVisit;
use App\Models\NurseSectionSecondFour;
use App\Models\NurseSectionSecondThree;
use App\Models\OasisEDeath;
use App\Models\PatientDemographic;
use App\Models\QaList;

class SkilledAgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function planofcare($id)
    {

        $petiming = PatientEpisodeTiming::where('patient_id', $id)->first();
        $addressInfo = PatientAddressInfo::where('patient_id', $id)->first();
        $addressserviceInfo = PatientServiceAddress::where('patient_id', $id)->first();
        $patient = Patient::where('id', $id)->first();
        // return $addressInfo;
        // return $petiming;
        return view('skilled-agency.plan-of-care', compact('patient','petiming','addressInfo','addressserviceInfo'));
    }

    public function physicianorder()
    {
        return view('skilled-agency.physician-order');
    }
    public function oasisStartofcare()
    {

        return view('skilled-agency.oasis-e-start-of-care')->with('active','phistory');

    }
    public function getOasisStartofcare(Request $request, $id) {
        $patient = Patient::findOrFail($id);

        $companyId = Auth::user()->organization_id;

        $pharmacies = Pharmacy::where('org_id', $companyId)->get();
        $physicians = Physician::where('org_id', $companyId)->get();
        $psa = PatientServiceAddress::where('patient_id',$patient->id)->first();
        $psa = PatientCaseManager::where('patient_id',$patient->id)->first();
        // return $psa;

        $new_goals_addons = Addon::where('name', 'like', 'New Goals%')->where('status', '1')->first();
        $new_goals = get_sub_addons($new_goals_addons, $companyId);

        $invention_addons = Addon::where('name', 'like', 'New Interventions%')->where('status', '1')->first();
        $inventions = get_sub_addons($invention_addons, $companyId);

        $payors = Addon::where('name', 'like', 'Payor%')->where('status', '1')->first();
        $payors_sub_addons = get_sub_addons($payors, $companyId);
        $insurance_type = Addon::where('name', 'like', 'Insurance Type%')->where('status', '1')->first();
        $insurance_type_sub_addons = get_sub_addons($insurance_type, $companyId);
        $patient_severity = Addon::where('name', 'like', 'Severity%')->where('status', '1')->first();
        $patient_severity_sub_addons = get_sub_addons($patient_severity, $companyId);
        $insurance = PatientInsurance::where('patient_id', $id)->first();
        $administrative = Administrative::where('patient_history_id', $id)->first();

        $patientExtraInfo = PatientExtraInfo::where('patient_id', $id)->first();
        $race_enc = json_decode($patientExtraInfo->race_ethnicity, true);
        $patientEthincity = PatientEthincity::where('patient_id', $id)->first();
        $ethnicities = json_decode($patientEthincity->ethincity_info, true);
        $source_of_add = json_decode($patientExtraInfo->source_of_admission, true);


        $patientInsurance = $patient->insurance;
        $patientAddressInfo = $patient->address;
        $patientEpisodeTiming = $patient->episode;
        $pTransportation = $patient->transportation;
        $patientTransportation = json_decode($pTransportation->transportation, true);
        $account = Account::where('user_id', Auth::user()->id)->first();


        return view('skilled-agency.oasis-e-start-of-care', compact('account','source_of_add','patientTransportation','pharmacies','physicians', 'payors_sub_addons','insurance_type_sub_addons', 'patient', 'patient_severity_sub_addons','psa','insurance','administrative', 'patientExtraInfo','ethnicities','patientInsurance','patientAddressInfo','patientEpisodeTiming','race_enc', 'new_goals', 'inventions'))->with('active',$request->tab);
    }

    public function nursingVisitNote()
    {
        return view('skilled-agency.nurse-visit-note.index')->with('active','first');
    }

    public function saveNursing(Request $request){
        if(isset($request->next)){
            $nsf=new NurseSectionFirst;
            $nsf->visitDate=$request->visitDate;
            $nsf->timeIn=$request->timeIn;
            $nsf->timeOut=$request->timeOut;
            $nsf->visitType=$request->visitType;
            $nsf->q5001=$request->q5001;
            $nsf->q5002=$request->q5002;
            $nsf->q5009=$request->q5009;
            $nsf->g0162=$request->g0162;
            $nsf->g0299=$request->g0299;
            $nsf->g0493=$request->g0493;
            $nsf->g0494=$request->g0494;
            $nsf->g0495=$request->g0495;
            $nsf->g0496=$request->g0496;
            $nsf->diagnosis=$request->diagnosis;
            $nsf->homeboundReason=$request->homeboundReason;
            $nsf->temperature=$request->temperature;
            $nsf->temp=$request->temp;
            $nsf->pulse=$request->pulse;
            $nsf->pul=$request->pul;
            $nsf->respirations=$request->respirations;
            $nsf->irregularRespi=$request->irregularRespi;
            $nsf->weight=$request->weight;
            $nsf->pressureRight=$request->pressureRight;
            $nsf->pressureLeft=$request->pressureLeft;
            $nsf->apneaPeriodsText=$request->apneaPeriodsText;
            $nsf->apneaPeriods=$request->apneaPeriods;
            $nsf->apneaPeriods1=$request->apneaPeriods1;
            $nsf->apneaPeriods2=$request->apneaPeriods2;
            $nsf->patientExperiencing=$request->patientExperiencing;
            $nsf->origin=$request->origin;
            $nsf->location=$request->location;
            $nsf->duration=$request->duration;
            $nsf->intensity=$request->intensity;
            $nsf->reliefMeasures=$request->reliefMeasures;
            $nsf->demonstrated=$request->demonstrated;
            $nsf->changeVitalSig=$request->changeVitalSig;
            $nsf->pOther=$request->pOther;
            $nsf->implicationsCarePlan=$request->implicationsCarePlan;
            $nsf->lungSounds=$request->lungSounds;
            $nsf->fLocation=$request->fLocation;
            $nsf->wheezeLocation=$request->wheezeLocation;
            $nsf->diminished=$request->diminished;
            $nsf->absent=$request->absent;
            $nsf->absentOther=$request->absentOther;
            $nsf->cough=$request->cough;
            $nsf->productiveCough=$request->productiveCough;
            $nsf->amtCough=$request->amtCough;
            $nsf->hemoptysisFrequency=$request->hemoptysisFrequency;
            $nsf->hemoptysisFrequencyAmount=$request->hemoptysisFrequencyAmount;
            $nsf->coughAU=$request->coughAU;
            $nsf->suction=$request->suction;
            $nsf->respiratoryStatus=$request->respiratoryStatus;
            $nsf->created_by=Auth::user()->id;
            $nsf->save();

            $nsf=new NurseSectionFirstTwo;
            $nsf->dyspnea=$request->dyspnea;
            $nsf->stridorq=$request->stridorq;
            $nsf->stridor1=$request->stridor1;
            $nsf->saturation=$request->saturation;
            $nsf->substernal=$request->substernal;
            $nsf->radiating=$request->radiating;
            $nsf->dull=$request->dull;
            $nsf->aching=$request->aching;
            $nsf->sharp=$request->sharp;
            $nsf->viselike=$request->viselike;
            $nsf->viselikeOther=$request->viselikeOther;
            $nsf->shortnessOfBreathh=$request->shortnessOfBreathh;
            $nsf->activity=$request->activity;
            $nsf->rest=$request->rest;
            $nsf->heartSounds=$request->heartSounds;
            $nsf->abnormal=$request->abnormal;
            $nsf->fatigued=$request->fatigued;
            $nsf->edema=$request->edema;
            $nsf->pedalRight=$request->pedalRight;
            $nsf->pedalLeft=$request->pedalLeft;
            $nsf->pitting=$request->pitting;
            $nsf->nonPittingSite=$request->nonPittingSite;
            $nsf->cramps=$request->cramps;
            $nsf->capillaryRefill=$request->capillaryRefill;
            $nsf->alert=$request->alert;
            $nsf->rightGrasp=$request->rightGrasp;
            $nsf->rightOther=$request->rightOther;
            $nsf->leftGrasp=$request->leftGrasp;
            $nsf->leftOther=$request->leftOther;
            $nsf->pupils=$request->pupils;
            $nsf->otherPerral=$request->otherPerral;
            $nsf->impairment=$request->impairment;
            $nsf->impair=$request->impair;
            $nsf->impairmentVertigo=$request->impairmentVertigo;
            $nsf->impairmentFalls=$request->impairmentFalls;
            $nsf->impairmentBal=$request->impairmentBal;
            $nsf->impairmentWeekness=$request->impairmentWeekness;
            $nsf->changeInAdl=$request->changeInAdl;
            $nsf->good=$request->good;
            $nsf->fair=$request->fair;
            $nsf->poor=$request->poor;
            $nsf->npo=$request->npo;
            $nsf->difficultySwallowing=$request->difficultySwallowing;
            $nsf->oralIntake=$request->oralIntake;
            $nsf->tubeFeeding=$request->tubeFeeding;
            $nsf->tube=$request->tube;
            $nsf->bowelSounds=$request->bowelSounds;
            $nsf->quadrantsXquadrants=$request->quadrantsXquadrants;
            $nsf->abdominal=$request->abdominal;
            $nsf->save();

            $nsf=new NurseSectionFirstThree;
            $nsf->lastBm=$request->lastBm;
            $nsf->incontience=$request->incontience;
            $nsf->diarrhea=$request->diarrhea;
            $nsf->constipation=$request->constipation;
            $nsf->impaction=$request->impaction;
            $nsf->administered=$request->administered;
            $nsf->tolerated=$request->tolerated;
            $nsf->toleratedOther=$request->toleratedOther;
            $nsf->urineColor=$request->urineColor;
            $nsf->urineOdor=$request->urineOdor;
            $nsf->urineBurning=$request->urineBurning;
            $nsf->urineHesitancy=$request->urineHesitancy;
            $nsf->nocturia=$request->nocturia;
            $nsf->oliguria=$request->oliguria;
            $nsf->retention=$request->retention;
            $nsf->incontinenceOccurs=$request->incontinenceOccurs;
            $nsf->cardiopulmonaryType=$request->cardiopulmonaryType;
            $nsf->french=$request->french;
            $nsf->bulbinflated=$request->bulbinflated;
            $nsf->dateChange=$request->dateChange;
            $nsf->irrigated=$request->irrigated;
            $nsf->lm=$request->lm;
            $nsf->lmOther=$request->lmOther;
            $nsf->endocrineBlood=$request->endocrineBlood;
            $nsf->patient=$request->patient;
            $nsf->caregiver=$request->caregiver;
            $nsf->nurse=$request->nurse;
            $nsf->reportedByOther=$request->reportedByOther;
            $nsf->bloodSugarThisVisit=$request->bloodSugarThisVisit;
            $nsf->checkByNurse=$request->checkByNurse;
            $nsf->glycosuria=$request->glycosuria;
            $nsf->polyuria=$request->polyuria;
            $nsf->polydipsia=$request->polydipsia;
            $nsf->sweats=$request->sweats;
            $nsf->polyphagia=$request->polyphagia;
            $nsf->weak=$request->weak;
            $nsf->faint=$request->faint;
            $nsf->stupor=$request->stupor;
            $nsf->byPatient=$request->byPatient;
            $nsf->bycaregiver=$request->bycaregiver;
            $nsf->byNurse=$request->byNurse;
            $nsf->byOther=$request->byOther;
            $nsf->longStanding=$request->longStanding;
            $nsf->patient_id=$request->patient_id;
            $nsf->startDate=$request->startDate;
            $nsf->throughDate=$request->throughDate;
            $nsf->medicationDosage=$request->medicationDosage;
            $nsf->strength=$request->strength;
            $nsf->route=$request->route;
            $nsf->frequency=$request->frequency;
            $nsf->classification=$request->classification;
            $nsf->type=$request->type;
            $nsf->physician=$request->physician;


            $nsf->save();

            $nsf=new NurseSectionFirstFour;
            $nsf->pharmacy=$request->pharmacy;
            $nsf->status=$request->status;
            $nsf->dosageFrequency=$request->dosageFrequency;
            $nsf->onAllergic=$request->onAllergic;
            $nsf->onMedication=$request->onMedication;
            $nsf->onDrugInteraction=$request->onDrugInteraction;
            $nsf->onFoodInteractions=$request->onFoodInteractions;
            $nsf->rxRfillBy=$request->rxRfillBy;
            $nsf->expirationDates=$request->expirationDates;
            $nsf->onContraindications=$request->onContraindications;
            $nsf->onPillCount=$request->onPillCount;
            $nsf->ampleSupply=$request->ampleSupply;
            $nsf->disposalOfSharps=$request->disposalOfSharps;
            $nsf->disposalOfSharpsOther=$request->disposalOfSharpsOther;
            $nsf->durationOfTherapy=$request->durationOfTherapy;
            $nsf->missedDoses=$request->missedDoses;
            $nsf->administeredPatient1=$request->administeredPatient1;
            $nsf->byCaregiver2=$request->byCaregiver2;
            $nsf->byNurse1=$request->byNurse1;
            $nsf->byOther1=$request->byOther1;
            $nsf->medicationThisVisit=$request->medicationThisVisit;
            $nsf->typeOfLine=$request->typeOfLine;
            $nsf->central=$request->central;
            $nsf->implantedPortLocation=$request->implantedPortLocation;
            $nsf->catheterLength=$request->catheterLength;
            $nsf->evidenceOfInfection=$request->evidenceOfInfection;
            $nsf->numberOfLumens=$request->numberOfLumens;
            $nsf->dressingChange=$request->dressingChange;
            $nsf->performedbypatient=$request->performedbypatient;
            $nsf->performedbycaregiver=$request->performedbycaregiver;
            $nsf->performedbynurse=$request->performedbynurse;
            $nsf->performedbynurseother=$request->performedbynurseother;
            $nsf->capperformedbypatient=$request->capperformedbypatient;
            $nsf->capperformedbycaregiver=$request->capperformedbycaregiver;
            $nsf->capchangeperformedbyother=$request->capchangeperformedbyother;
            $nsf->tubingByPatient=$request->tubingByPatient;
            $nsf->tubingByCaregiver=$request->tubingByCaregiver;
            $nsf->tubingByNurse=$request->tubingByNurse;
            $nsf->tubingchangedByOther=$request->tubingchangedByOther;
            $nsf->flush=$request->flush;
            $nsf->saline=$request->saline;
            $nsf->heparin=$request->heparin;
            $nsf->ml1=$request->ml1;
            $nsf->mlInstructed=$request->mlInstructed;
            $nsf->mlPatient=$request->mlPatient;
            $nsf->caregiverInfusion=$request->caregiverInfusion;
            $nsf->managementInfusionPatient=$request->managementInfusionPatient;
            $nsf->managementInfusionCaregiver=$request->managementInfusionCaregiver;
            $nsf->managementInfusionDemonstrates=$request->managementInfusionDemonstrates;
            $nsf->managementInfusionVerbalizesProper=$request->managementInfusionVerbalizesProper;
            $nsf->comments=$request->comments;
            $nsf->save();

            $patient_id = $request->patient_id;
            $schedule_id = $request->schedule_id;
            $organization_id = Auth::user()->organization_id;
            $physicians = Physician::where('active_status', 1)->where('org_id', $organization_id)->get();
            $pharmacies = Pharmacy::where('org_id', $organization_id)->get();

            return view('skilled-agency.nurse-visit-note.index', compact('patient_id','physicians','pharmacies','schedule_id'))->with('active','final');
        }

        if(isset($request->save_exit)){

            $nss=new NurseSectionSecond;
            $nss->agitated=$request->agitated;
            $nss->fearful=$request->fearful;
            $nss->sad=$request->sad;
            $nss->discourage=$request->discourage;
            $nss->lonely=$request->lonely;
            $nss->depressed=$request->depressed;
            $nss->helpless=$request->helpless;
            $nss->forgetfull=$request->forgetfull;
            $nss->confused=$request->confused;
            $nss->content=$request->content;
            $nss->happy=$request->happy;
            $nss->hopeful=$request->hopeful;
            $nss->motivated=$request->motivated;
            $nss->statusOther=$request->statusOther;
            $nss->turgor=$request->turgor;
            $nss->turgorColor=$request->turgorColor;
            $nss->turgorTemp=$request->turgorTemp;
            $nss->itch=$request->itch;
            $nss->rash=$request->rash;
            $nss->try=$request->try;
            $nss->scaling=$request->scaling;
            $nss->redness=$request->redness;
            $nss->ecchymosis=$request->ecchymosis;
            $nss->pallor=$request->pallor;
            $nss->jaundice=$request->jaundice;
            $nss->turgorOther=$request->turgorOther;
            $nss->soiledDressingRemoved=$request->soiledDressingRemoved;
            $nss->created_by=Auth::user()->id;
            $nss->save();

            $nss=new NurseSectionSecondTwo;
             $nss->soiledDressingProperly=$request->soiledDressingProperly;
            $nss->woundCleaned=$request->woundCleaned;
            $nss->woundIrrigated=$request->woundIrrigated;
            $nss->woundDressingType=$request->woundDressingType;
            $nss->drainageVolume=$request->drainageVolume;
            $nss->vacuumReset=$request->vacuumReset;
            $nss->tolerated=$request->tolerated;
            $nss->medicatedWoundcare=$request->medicatedWoundcare;
            $nss->dressingPerformedPatient=$request->dressingPerformedPatient;
            $nss->dressingByNurse=$request->dressingByNurse;
            $nss->dressingByVaregiver=$request->dressingByVaregiver;
            $nss->dressingOther=$request->dressingOther;
            $nss->woundcarePatient=$request->woundcarePatient;
            $nss->woundcareCaregiver=$request->woundcareCaregiver;
            $nss->soiledDisposal=$request->soiledDisposal;
            $nss->symptomsReport=$request->symptomsReport;
            $nss->woundcarePerformpatient=$request->woundcarePerformpatient;
            $nss->woundcarePerformcaregiver=$request->woundcarePerformcaregiver;
            $nss->dressingChangebyCaregiver=$request->dressingChangebyCaregiver;
            $nss->skilledObservationAssessment=$request->skilledObservationAssessment;
            $nss->assessmentCare=$request->assessmentCare;
            $nss->assessmentChange=$request->assessmentChange;
            $nss->assessmentUrineTesting=$request->assessmentUrineTesting;
            $nss->skilledObservationAssessmentWoundCare=$request->skilledObservationAssessmentWoundCare;
            $nss->assessmentWoundDressing=$request->assessmentWoundDressing;
            $nss->symptomsInfection=$request->symptomsInfection;
            $nss->turgorColor2=$request->turgorColor2;
            $nss->turgorTemp2=$request->turgorTemp2;
            $nss->turgorColor3=$request->turgorColor3;
            $nss->turgorTemp3=$request->turgorTemp3;
            $nss->painmanagement=$request->painmanagement;
            $nss->bowelBladderTraining=$request->bowelBladderTraining;
            $nss->digitalRemovalEnema=$request->digitalRemovalEnema;
            $nss->changeRadio=$request->changeRadio;
            $nss->injection=$request->injection;
            $nss->administerMedication=$request->administerMedication;
            $nss->save();


             $nss=new NurseSectionSecondThree();
            $nss->insulinPrep=$request->insulinPrep;
            $nss->insulinAdminister=$request->insulinAdminister;
            $nss->diabeticAssessment=$request->diabeticAssessment;
            $nss->teachDiabeticCare=$request->teachDiabeticCare;
            $nss->teachAdminister=$request->teachAdminister;
            $nss->teachIvs=$request->teachIvs;
            $nss->teachClysis=$request->teachClysis;
            $nss->ostomyCare=$request->ostomyCare;
            $nss->conduitCare=$request->conduitCare;
            $nss->teachCare2=$request->teachCare2;
            $nss->AdministerTubeFeedings=$request->AdministerTubeFeedings;
            $nss->administerTracheostomy=$request->administerTracheostomy;
            $nss->administerTreatment=$request->administerTreatment;
            $nss->teachTerminallyIll=$request->teachTerminallyIll;
            $nss->observeAssessMedication=$request->observeAssessMedication;
            $nss->teachMedicationPurpose=$request->teachMedicationPurpose;
            $nss->teachMedicationSideEffect=$request->teachMedicationSideEffect;
            $nss->teachMedicationAdministration=$request->teachMedicationAdministration;
            $nss->evaluateDiet=$request->evaluateDiet;
            $nss->evaluateFluidIntake=$request->evaluateFluidIntake;
            $nss->dietTeaching=$request->dietTeaching;
            $nss->sssessAdlsFunctionality=$request->sssessAdlsFunctionality;
            $nss->teachSafetyPrecautions=$request->teachSafetyPrecautions;
            $nss->teachSkinCarePressureInjury=$request->teachSkinCarePressureInjury;
            $nss->psychologicalIntervention=$request->psychologicalIntervention;
            $nss->posturalDrainage=$request->posturalDrainage;
            $nss->prenatalAssessment=$request->prenatalAssessment;
            $nss->save();

            $nss=new NurseSectionSecondFour();
            $nss->postPartumassessment=$request->postPartumassessment;
            $nss->teachInfantChildCare=$request->teachInfantChildCare;
            $nss->childCareOther=$request->childCareOther;
            $nss->instructionsPatientResponse=$request->instructionsPatientResponse;
            $nss->carePlanReviewed=$request->carePlanReviewed;
            $nss->carePatientInvolvement=$request->carePatientInvolvement;
            $nss->carePlanOutcomeAchieved=$request->carePlanOutcomeAchieved;
            $nss->carePlanPrnOrderObtained=$request->carePlanPrnOrderObtained;
            $nss->planForNextVisit=$request->planForNextVisit;
            $nss->nextPhysicianVisit=$request->nextPhysicianVisit;
            $nss->approximateNextVisitDate=$request->approximateNextVisitDate;
            $nss->dischargePlanning=$request->dischargePlanning;
            $nss->dischargePlan=$request->dischargePlan;
            $nss->billableSuppliesRecorded=$request->billableSuppliesRecorded;
            $nss->physicianProvider=$request->physicianProvider;
            $nss->physicianPt=$request->physicianPt;
            $nss->physicianOt=$request->physicianOt;
            $nss->physicianSt=$request->physicianSt;
            $nss->physicianSw=$request->physicianSw;
            $nss->physicianSn=$request->physicianSn;
            $nss->careCoordinationPhysicianOther=$request->careCoordinationPhysicianOther;
            $nss->aide=$request->aide;
            $nss->supervisoryVisit=$request->supervisoryVisit;
            $nss->patientSatisfied=$request->patientSatisfied;
            $nss->explain=$request->explain;
            $nss->aideCarePlan=$request->aideCarePlan;
            $nss->aideCarePlanUpdated=$request->aideCarePlanUpdated;
            $nss->observationOf=$request->observationOf;
            $nss->teachingTrainingOf=$request->teachingTrainingOf;
            $nss->nurseSignatureTitle=$request->nurseSignatureTitle;
            $nss->nurseSignatureDate=$request->nurseSignatureDate;
            $nss->patientSignature=$request->patientSignature;
            $nss->save();

            $qaList = QaList::updateOrInsert(
                ['patient_id' => $request->schedule_id],
                ['status' => 0]
            );

            if (isset($request->save_exit)) {
                return redirect(route('patients.qa'));
            }

            return redirect(route('skilled-agency.nurse-visit-note.index'));
        }
    }

    public function hhacareplan()
    {
        return view('skilled-agency.hha-care-plan');
    }
    public function sixtydaysummary()
    {
        return view('skilled-agency.60-day-summary');
    }

    public function aidesupervisoryvisit()
    {
        return view('skilled-agency.aide-supervisory-visit');
    }

    public function storeAideSupervisoryVisit(Request $request)
    {
        $asv = AideSupervisoryVisit::firstOrNew(['schedule_id' => $request->schedule_id]);

        $asv->SupervisionDate = $request->SupervisionDate;
        $asv->Start = $request->Start;
        $asv->End = $request->End;
        $asv->SupervisorName = $request->SupervisorName;
        $asv->ClinicianName = $request->ClinicianName;
        $asv->cpatov = $request->cpatov;
        $asv->schedulevisit = $request->schedulevisit;
        $asv->dutyAssigned = $request->dutyAssigned;
        $asv->Cooperative = $request->Cooperative;
        $asv->Courteous = $request->Courteous;
        $asv->communication = $request->communication;
        $asv->Followsinstruction = $request->Followsinstruction;
        $asv->Documentsappropriately = $request->Documentsappropriately;
        $asv->competency = $request->competency;
        $asv->Timely = $request->Timely;
        $asv->Adheres = $request->Adheres;
        $asv->Complies = $request->Complies;
        $asv->patientrights = $request->patientrights;
        $asv->Changes = $request->Changes;
        $asv->save();

        $qaList = QaList::updateOrInsert(
            ['schedule_id' => $request->schedule_id],
            ['status' => 0]
        );

        $message = $asv->wasRecentlyCreated ? 'Supervisory Visit Added' : 'Supervisory Visit Updated';

        return redirect()->route('dashboard')->with(['success' => $message]);
    }



    public function hhaVisitNote()
    {
        return view('skilled-agency.hha-visit-note');
    }
    public function discharge()
    {
        return view('skilled-agency.oasis-e-discharge');
    }
    public function recertification()
    {
        return view('skilled-agency.oasis-e-recertification');
    }

    public function skilleddashboard()
    {
        return view('patients.skilled-nursing-dashboard');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // hha visit note

    public function index(){
        $hhavisitnote = DB::table('hhavisitnotes')
        ->join('hhavisitnote1s', 'hhavisitnote1s.id', '=', 'hhavisitnotes.hhavisitnote1s.id')
        ->join('hhavisitnote2s', 'hhavisitnote2s.id', '=', 'hhavisitnotes.hhavisitnote2s.id')
        ->get();

        $hhavisitnote1 = DB::table('hhavisitnote1s')
        ->get();
        $hhavisitnote2 = DB::table('hhavisitnote2s')
        ->get();

        return view('skilled-agency/hha-visit-note', ['hhavisitnotes' => $hhavisitnote , 'hhavisitnote1s' => $hhavisitnote1 , 'hhavisitnote2s' => $hhavisitnote2]);
    }

    public function store(Request $req)
    {
        // dd($req->input());   // dd($req->all());

        Hhavisitnote::create([
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


        ]);

        Hhavisitnote1::create([
            'clean_dentures_1' => $req->clean_dentures_1,
            'shave' => $req->shave,
            'shave_1' => $req->shave_1,
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

        $exception = $req->all();
        $exception['exception_code'] = generate_random_token('u');

        try {
            DB::transaction(function() use ($exception) {
                Hhavisitnote::create($exception);
                Hhavisitnote1::create($exception);
                Hhavisitnote2::create($exception);
            });

            return redirect()->with('success', ' HHA visit Record Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error! HHA visit Record Could Not Be Created.');
        }
    }

 // Nursing visit note


    public function nursing(){
        $hhavisitnote = DB::table('Nursingvisitnotes')
        ->join('Nursingvisitnotes', 'Nursingvisitnotes.id', '=', 'Nursingvisitnotes.Nursingvisitnotes.id')
        ->join('Nursingvisitnote1s', 'Nursingvisitnote1s.id', '=', 'Nursingvisitnotes.Nursingvisitnote1s.id')
        ->join('Nursingvisitnote2s', 'Nursingvisitnote2s.id', '=', 'Nursingvisitnotes.Nursingvisitnote2s.id')
        ->join('Nursingvisitnote3s', 'Nursingvisitnote3s.id', '=', 'Nursingvisitnotes.Nursingvisitnote3s.id')
        ->join('Nursingvisitnote4s', 'Nursingvisitnote4s.id', '=', 'Nursingvisitnotes.Nursingvisitnote4s.id')
        ->join('Nursingvisitnote5s', 'Nursingvisitnote5s.id', '=', 'Nursingvisitnotes.Nursingvisitnote5s.id')
        ->get();

        $Nursingvisitnote1 = DB::table('Nursingvisitnote1s')
        ->get();
        $Nursingvisitnote2 = DB::table('Nursingvisitnote2s')
        ->get();
        $Nursingvisitnote3 = DB::table('Nursingvisitnote3s')
        ->get();
        $Nursingvisitnote4 = DB::table('Nursingvisitnote4s')
        ->get();
        $Nursingvisitnote5 = DB::table('Nursingvisitnote5s')
        ->get();

        return view('skilled-agency/hha-visit-note', ['hhavisitnotes' => $hhavisitnote , 'Nursingvisitnote1s' => $Nursingvisitnote1,
            'Nursingvisitnote2s' => $Nursingvisitnote2, 'Nursingvisitnote3s' => $Nursingvisitnote3, 'Nursingvisitnote4s' => $Nursingvisitnote4,
            'Nursingvisitnote5s' => $Nursingvisitnote5,
        ]);
    }

    public function nursevisit(Request $req){
        Nursingvisitnote::create([
            'visit_date' => $req->visit_date,
            'time_in' => $req->time_in,
            'time_out' => $req->time_out,
            'type_of_visit_1' => $req->type_of_visit_1,
            'type_of_visit_2' => $req->type_of_visit_2,
            'type_of_visit_3' => $req->type_of_visit_3,
            'type_of_visit_4' => $req->type_of_visit_4,
            'type_of_visit_5' => $req->type_of_visit_5,
            'type_of_visit_6' => $req->type_of_visit_6,
            'Q5001' => $req->Q5001,
            'Q5002' => $req->Q5002,
            'Q5009' => $req->Q5009,
            'G0162' => $req->G0162,
            'G0299' => $req->G0299,
            'G0493' => $req->G0493,
            'G0494' => $req->G0494,
            'G0495' => $req->G0495,
            'G0496' => $req->G0496,
            'diagnosis' => $req->diagnosis,
            'homebound_reason' => $req->homebound_reason,
            'temperature' => $req->temperature,
            'temp' => $req->temp,
            'Pulse' => $req->Pulse,
            'pul' => $req->pul,
            'Respirations' => $req->Respirations,
            'respiration' => $req->respiration,
            'Weight' => $req->Weight,
            'blood_pressure_right' => $req->blood_pressure_right,
            'blood_pressure_left' => $req->blood_pressure_left,
            'apnea_periods' => $req->apnea_periods,
            'blood_pressure_right' => $req->blood_pressure_right,
            'blood_pressure_left' => $req->blood_pressure_left,
            'apnea_periods' => $req->apnea_periods,
            'ApneaPeriods' => $req->ApneaPeriods,
            'blood_pressure_right' => $req->blood_pressure_right,
            'blood_pressure_left' => $req->blood_pressure_left,
            'apnea_periods' => $req->apnea_periods,
            'ApneaPeriods' => $req->ApneaPeriods,
            'patient_experiencing' => $req->patient_experiencing,
            'origin' => $req->origin,
            'location' => $req->location,
            'duration' => $req->duration,
            'intensity' => $req->intensity,
            'relief_measures' => $req->relief_measures,
            'demonstrated' => $req->demonstrated,
            'p_other' => $req->p_other,
            'ImplicationsCarePlan' => $req->ImplicationsCarePlan,
            'LungSounds' => $req->LungSounds,
            'f_location' => $req->f_location,
            'wheeze_location' => $req->wheeze_location,
            'diminished' => $req->diminished,
            'absent' => $req->absent,
            'absent_other' => $req->absent_other,
            'cough' => $req->cough,
            'productive_cough' => $req->productive_cough,
            'amt_cough' => $req->amt_cough,
        ]);

        Nursingvisitnote1::create([
           //nursingvisitnote1
           'hemoptysis_frequency' => $req->hemoptysis_frequency,
           'hemoptysis_frequency_amount' => $req->hemoptysis_frequency_amount,
           'RespiratoryStatus' => $req->RespiratoryStatus,
           'dyspnea' => $req->dyspnea,
           'stridorq' => $req->stridorq,
           'stridor' => $req->stridor,
           'saturation' => $req->saturation,
           'denies' => $req->denies,
           'anginal' => $req->anginal,
           'postural' => $req->postural,
           'localized' => $req->localized,
           'substernal' => $req->substernal,
           'radiating' => $req->radiating,
           'dull' => $req->dull,
           'aching' => $req->aching,
           'sharp' => $req->sharp,
           'viselike' => $req->viselike,
           'viselike_other' => $req->viselike_other,
           'shortness_of_breath' => $req->shortness_of_breath,
           'activity' => $req->activity,
           'rest' => $req->rest,
           'duration' => $req->duration,
           'HeartSounds' => $req->HeartSounds,
           'abnormal' => $req->abnormal,
           'fatigued' => $req->fatigued,
           'edema' => $req->edema,
           'pedal_righ' => $req->pedal_righ,
           'pedal_left' => $req->pedal_left,
           'pitting' => $req->pitting,
           'cramps' => $req->cramps,
           'capillary_refill' => $req->capillary_refill,
           'alert' => $req->alert,
           'right_grasp' => $req->right_grasp,
           'right_other' => $req->right_other,
           'left_grasp' => $req->left_grasp,
           'left-other' => $req->left_other,
           'pupils' => $req->pupils,
           'other_perral' => $req->other_perral,
           'impairment' => $req->impairment,
           'impair' => $req->impair,
           'impairment_vertigo' => $req->impairment_vertigo,
           'impairment_falls' => $req->impairment_falls,
           'impairment_bal' => $req->impairment_bal,
           'impairment_weekness' => $req->impairment_weekness,
           'change_in_adl' => $req->change_in_adl,
           'good' => $req->good,
           'fair' => $req->fair,
           'poor' => $req->poor,
           'npo' => $req->npo,
           'oral_intake' => $req->oral_intake,
       ]);
        Nursingvisitnote2::create([
             //nursingvisitnote2
         'tube_feeding' => $req->tube_feeding,
         'tube_feeding_cont' => $req->tube_feeding_cont,
         'BowelSounds' => $req->BowelSounds,
         'abdominal' => $req->abdominal,
         'last_bm' => $req->last_bm,
         'incontience' => $req->incontience,
         'diarrhea' => $req->diarrhea,
         'constipation' => $req->constipation,
         'impaction' => $req->impaction,
         'administered' => $req->administered,
         'tolerated' => $req->tolerated,
         'urine_color' => $req->urine_color,
         'urine_odor' => $req->urine_odor,
         'urine_burning' => $req->urine_burning,
         'urine_hesitancy' => $req->urine_hesitancy,
         'nocturia' => $req->nocturia,
         'oliguria' => $req->oliguria,
         'retention' => $req->retention,
         'incontinence_occurs' => $req->incontinence_occurs,
         'cardiopulmonary_type' => $req->cardiopulmonary_type,
         'french' => $req->french,
         'Bulbinflated' => $req->Bulbinflated,
         'date_change' => $req->date_change,
         'irrigated' => $req->irrigated,
         'lm' => $req->lm,
         'endocrine_blood' => $req->endocrine_blood,
         'patient' => $req->patient,
         'caregiver' => $req->caregiver,
         'nurse' => $req->nurse,
         'reported_by_other' => $req->reported_by_other,
         'blood_sugar_this_visit' => $req->blood_sugar_this_visit,
         'check_by_nurse' => $req->check_by_nurse,
         'glycosuria' => $req->glycosuria,
         'polyuria' => $req->polyuria,
         'polydipsia' => $req->polydipsia,
         'Sweats' => $req->Sweats,
         'polyphagia' => $req->polyphagia,
         'faint' => $req->faint,
         'stupor' => $req->stupor,
         'by_Patient' => $req->by_Patient,
         'by_caregiver' => $req->by_caregiver,
         'by_Nurse' => $req->by_Nurse,
         'Monitored_by_other' => $req->Monitored_by_other,
         'new_or_changed' => $req->new_or_changed,
         'new_at_drug' => $req->new_at_drug,
         'dosage_frequency' => $req->dosage_frequency,
         'effective' => $req->effective,
         'effective_other' => $req->effective_other,
         'orders_obtain' => $req->orders_obtain,
         'on_allergic' => $req->on_allergic,
         'on_medication' => $req->on_medication,
         'on_food_interactions' => $req->on_food_interactions,
         'Rx_refill_by' => $req->Rx_refill_by,
         'pill_count' => $req->pill_count,
         'ample_supply' => $req->ample_supply,
     ]);

        Nursingvisitnote3::create([
            //nursingvisitnote3
            'disposal_of_sharps' => $req->disposal_of_sharps,
            'Duration_of_therapy' => $req->Duration_of_therapy,
            'Missed_doses' => $req->Missed_doses,
            'administered_by_patient_1' => $req->administered_by_patient_1,
            'administered_by_caregiver_1' => $req->administered_by_caregiver_1,
            'administered_by_nurse_1' => $req->administered_by_nurse_1,
            'administered_by_other_1' => $req->administered_by_other_1,
            'type_of_line' => $req->type_of_line,
            'central' => $req->central,
            'Implanted_port_location' => $req->Implanted_port_location,
            'catheter_length' => $req->catheter_length,
            'evidence_of_infection' => $req->evidence_of_infection,
            'number_of_lumens' => $req->number_of_lumens,
            'dressing_change' => $req->dressing_change,
            'Performed_bypatient' => $req->Performed_bypatient,
            'Performed_bycaregiver' => $req->Performed_bycaregiver,
            'Performed_bynurse' => $req->Performed_bynurse,
            'Performed_bynurse_other' => $req->Performed_bynurse_other,
            'Cap_performed_bypatient' => $req->Cap_performed_bypatient,
            'Cap_performed_bycaregiver' => $req->Cap_performed_bycaregiver,
            'Cap_performed_bynurse' => $req->Cap_performed_bynurse,
            'Cap_performed_byother' => $req->Cap_performed_byother,
            'tubing_changed_by_patient' => $req->tubing_changed_by_patient,
            'tubing_changed_by_caregiver' => $req->tubing_changed_by_caregiver,
            'tubing_changed_by_nurse' => $req->tubing_changed_by_nurse,
            'tubing_changed_by_other' => $req->tubing_changed_by_other,
            'Saline' => $req->Saline,
            'Heparin' => $req->Heparin,
            'ml_1' => $req->ml_1,
            'management_of_infusion_patient' => $req->management_of_infusion_patient,
            'management_of_infusion_caregiver' => $req->management_of_infusion_caregiver,
            'management_of_infusion_demonstrates' => $req->management_of_infusion_demonstrates,
            'management_of_infusion_verbalizes_proper' => $req->management_of_infusion_verbalizes_proper,
            'Comments' => $req->Comments,
            'angry' => $req->angry,
            'agitated' => $req->agitated,
            'fearful' => $req->fearful,
            'sad' => $req->sad,
            'discourage' => $req->discourage,
            'lonely' => $req->lonely,
            'depressed' => $req->depressed,
            'helpless' => $req->helpless,
        ]);

        Nursingvisitnote4::create([

              //nursingvisitnote4
          'forgetfull' => $req->forgetfull,
          'confused' => $req->confused,
          'content' => $req->content,
          'happy' => $req->happy,
          'hopeful' => $req->hopeful,
          'motivated' => $req->motivated,
          'status_other' => $req->status_other,
          'turgor' => $req->turgor,
          'turgor_color' => $req->turgor_color,
          'turgor_temp' => $req->turgor_temp,
          'itch' => $req->itch,
          'rash' => $req->rash,
          'try' => $req->try,
          'scaling' => $req->scaling,
          'redness' => $req->redness,
          'ecchymosis' => $req->ecchymosis,
          'pallor' => $req->pallor,
          'jaundice' => $req->jaundice,
          'turgor_other' => $req->turgor_other,
          'soiled_dressing_removed' => $req->soiled_dressing_removed,
          'soiled_dressing_properly' => $req->soiled_dressing_properly,
          'wound_cleaned' => $req->wound_cleaned,
          'wound_irrigated' => $req->wound_irrigated,
          'wound_dressingtype' => $req->wound_dressingtype,
          'Drainage_emptied' => $req->Drainage_emptied,
          'vacuum_reset' => $req->vacuum_reset,
          'tolerated' => $req->tolerated,
          'Medicated_woundcare' => $req->Medicated_woundcare,
          'dressing_performed_by_patient' => $req->dressing_performed_by_patient,
          'dressing_performed_by_nurse' => $req->dressing_performed_by_nurse,
          'dressing_performed_by_caregiver' => $req->dressing_performed_by_caregiver,
          'dressing_performed_by_caregiver_other' => $req->dressing_performed_by_caregiver_other,
          'Woundcare_patient' => $req->Woundcare_patient,
          'Woundcare_caregiver' => $req->Woundcare_caregiver,
          'soiled_disposal' => $req->soiled_disposal,
          'symptoms_report_to' => $req->symptoms_report_to,
          'woundcare_performpatient' => $req->woundcare_performpatient,
          'woundcare_performcaregiver' => $req->woundcare_performcaregiver,
          'dressing_changeby_caregiver' => $req->dressing_changeby_caregiver,
          'Skilled_observation_assessment' => $req->Skilled_observation_assessment,
          'Skilled_observation_assessment_care' => $req->Skilled_observation_assessment_care,
          'Skilled_observation_assessment_change' => $req->Skilled_observation_assessment_change,
          'Skilled_observation_assessment_urine_testing' => $req->Skilled_observation_assessment_urine_testing,
          'Skilled_observation_assessment_wound_care' => $req->Skilled_observation_assessment_wound_care,
          'Skilled_observation_assessment_wound_dressing' => $req->Skilled_observation_assessment_wound_dressing,
          'Observe signs_symptoms_of_infection' => $req->Observe_signs_symptoms_of_infection,
          'venipucture' => $req->venipucture,
          'painmanagement' => $req->painmanagement,
          'Bowel_Bladder_training' => $req->Bowel_Bladder_training,
          'digital_removal_Enema' => $req->digital_removal_Enema,
          'change' => $req->change,
          'injection' => $req->injection,
          'administer_medication' => $req->administer_medication,
          'Insulin_prep' => $req->Insulin_prep,
          'Insulin_administer' => $req->Insulin_administer,
          'Diabetic_assessment' => $req->Diabetic_assessment,
          'Teach_diabetic_care' => $req->Teach_diabetic_care,
          'Teach_administer' => $req->Teach_administer,
          'Teach_ivs' => $req->Teach_ivs
      ]);

        Nursingvisitnote5::create([
         //nursingvisitnote5
         'Teach_clysis' => $req->Teach_clysis,
         'Ostomy_care' => $req->Ostomy_care,
         'conduit_care' => $req->conduit_care,
         'Teach_care' => $req->Teach_care,
         'Administer_tracheostomy' => $req->Administer_tracheostomy,
         'Administer_treatment' => $req->Administer_treatment,
         'Teach_care_terminally_ill' => $req->Teach_care_terminally_ill,
         'Observe_and_assess_medication' => $req->Observe_and_assess_medication,
         'Teach_medication_purpose' => $req->Teach_medication_purpose,
         'Teach_medication_side_effect' => $req->Teach_medication_side_effect,
         'Teach_medication_administration' => $req->Teach_medication_administration,
         'Evaluate_diet' => $req->Evaluate_diet,
         'Evaluate_fluid_intake' => $req->Evaluate_fluid_intake,
         'Diet_teaching' => $req->Diet_teaching,
         'Assess_ADLs_Functionality' => $req->Assess_ADLs_Functionality,
         'Teach_Safety_precautions' => $req->Teach_Safety_precautions,
         'Teach_skin_care_pressure_injury' => $req->Teach_skin_care_pressure_injury,
         'Psychological_intervention' => $req->Psychological_intervention,
         'Chest_physiotherapy_postural_drainage' => $req->Chest_physiotherapy_postural_drainage,
         'Prenatal_assessment' => $req->Prenatal_assessment,
         'Post_partum_assessment' => $req->Post_partum_assessment,
         'Teach_infant_child_care' => $req->Teach_infant_child_care,
         'child_care_other' => $req->child_care_other,
         'lab_work_blood_drawn' => $req->lab_work_blood_drawn,
         'lab_work_blood_drawn_for' => $req->lab_work_blood_drawn_for,
         'lab_work_blood_drawn_other' => $req->lab_work_blood_drawn_other,
         'lab_work_blood_drawn_delivered' => $req->lab_work_blood_drawn_delivered,
         'Instructions_Patient_Response' => $req->Instructions_Patient_Response,
         'Care_plan_reviewed' => $req->Care_plan_reviewed,
         'Care_patient_involvement' => $req->Care_patient_involvement,
         'Care_plan_outcome_achieved' => $req->Care_plan_outcome_achieved,
         'Care_plan_prn_order_obtained' => $req->Care_plan_prn_order_obtained,
         'Plan_for_next_visit' => $req->Plan_for_next_visit,
         'next_physician_visit' => $req->next_physician_visit,
         'approximate_next_visit_date' => $req->approximate_next_visit_date,
         'DischargePlanning' => $req->DischargePlanning,
         'discharge_plan_verified' => $req->discharge_plan_verified,
         'BillableSuppliesRecorded' => $req->BillableSuppliesRecorded,
         'physician_pt' => $req->physician_pt,
         'physician_ot' => $req->physician_ot,
         'physician_st' => $req->physician_st,
         'physician_sw' => $req->physician_sw,
         'sn' => $req->sn,
         'physician_other' => $req->physician_other,
         'aide' => $req->aide,
         'aide_supervisory_visit_present' => $req->aide_supervisory_visit_present,
         'supervisory_visit_scheduled' => $req->supervisory_visit_scheduled,
         'PatientSatisfied' => $req->PatientSatisfied,
         'Explain' => $req->Explain,
         'AideCarePlan' => $req->AideCarePlan,
         'AideCarePlanUpdated' => $req->AideCarePlanUpdated,
         'Observation_of' => $req->Observation_of,
         'Teaching_training_of' => $req->Teaching_training_of,
         'Nurse_signature_title' => $req->Nurse_signature_title,
         'Nurse_signature_date' => $req->Nurse_signature_date,
         'Patient_signature' => $req->Patient_signature,
     ]);

        $exception = $req->all();
        $exception['exception_code'] = generate_random_token('u');

        try {
            DB::transaction(function() use ($exception) {
                Nursingvisitnote::create($exception);
                Nursingvisitnote1::create($exception);
                Nursingvisitnote2::create($exception);
                Nursingvisitnote3::create($exception);
                Nursingvisitnote4::create($exception);
                Nursingvisitnote5::create($exception);
            });

            return redirect()->with('success', ' Nurse visit Record Created Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error! Nurse visit Record Could Not Be Created.');
        }

    }

    /**
     * Store Oasis E Death
     */
    public function storeOasisEDeath(Request $request) {
        $oed = new OasisEDeath();
        $oed->dopca = $request->dopca;
        $oed->assessmentCompleted_Month = $request->assessmentCompleted_Month;
        $oed->assessmentCompleted_Day = $request->assessmentCompleted_Day;
        $oed->assessmentCompleted_Year = $request->assessmentCompleted_Year;
        $oed->inpatientFacility = $request->inpatientFacility;
        $oed->inpatientFacility_1 = $request->inpatientFacility_1;
        $oed->Discharge = $request->Discharge;
        $oed->certifyingPhysician = $request->certifyingPhysician;
        $oed->dischargeMonth = $request->dischargeMonth;
        $oed->dischargeDay = $request->dischargeDay;
        $oed->dischargeYear = $request->dischargeYear;
        $oed->EmergentCare = $request->EmergentCare;
        $oed->improperMedication = $request->improperMedication;
        $oed->Hyperglycemia = $request->Hyperglycemia;
        $oed->aboveReasons = $request->aboveReasons;
        $oed->reasonUnknown = $request->reasonUnknown;
        $oed->wifpa = $request->wifpa;
        $oed->admissionReason = $request->admissionReason;
        $oed->facilityName_1 = $request->facilityName_1;
        $oed->patientLast = $request->patientLast;
        $oed->patientFirst = $request->patientFirst;
        $oed->patientMiddle = $request->patientMiddle;
        $oed->patientID = $request->patientID;
        $oed->pcrmltsp = $request->pcrmltsp;
        $oed->electronicHealth = $request->electronicHealth;
        $oed->healthInformation = $request->healthInformation;
        $oed->Verbal = $request->Verbal;
        $oed->paperBased = $request->paperBased;
        $oed->otherMethods = $request->otherMethods;
        $oed->pfsrwmr = $request->pfsrwmr;
        $oed->Boxes = $request->Boxes;
        $oed->exceptMajor = $request->exceptMajor;
        $oed->jointDislocations = $request->jointDislocations;
        $oed->fallWithInjury = $request->fallWithInjury;
        $oed->fallInjury = $request->fallInjury;
        $oed->MedicationIntervention = $request->MedicationIntervention;
        $oed->Influenza = $request->Influenza;
        $oed->fluseason = $request->fluseason;
        $oed->fluseason_specify = $request->fluseason_specify;
        $oed->fpi = $request->fpi;
        $oed->dimrtmp = $request->dimrtmp;
        $oed->itmamp = $request->itmamp;
        $oed->itppu = $request->itppu;
        $oed->putpmwh = $request->putpmwh;
        $oed->admissionDate = $request->admissionDate;
        $oed->admissiontransferDate = $request->admissiontransferDate;
        $oed->TransferPlanned = $request->TransferPlanned;
        $oed->reasonforAdmission = $request->reasonforAdmission;
        $oed->TransferReason = $request->TransferReason;
        $oed->reference_reason = $request->reference_reason;
        $oed->TransferredTo = $request->TransferredTo;
        $oed->TransferReason_1 = $request->TransferReason_1;
        $oed->HHAdisciplines = $request->HHAdisciplines;
        $oed->SNdisciplines = $request->SNdisciplines;
        $oed->PTdisciplines = $request->PTdisciplines;
        $oed->OTdisciplines = $request->OTdisciplines;
        $oed->STdisciplines = $request->STdisciplines;
        $oed->MSWdisciplines = $request->MSWdisciplines;
        $oed->Aidedisciplines = $request->Aidedisciplines;
        $oed->Otherdisciplines = $request->Otherdisciplines;
        $oed->OtherHHAdisciplines = $request->OtherHHAdisciplines;
        $oed->SNtransfer = $request->SNtransfer;
        $oed->PTtransfer = $request->PTtransfer;
        $oed->OTtransfer = $request->OTtransfer;
        $oed->STtransfer = $request->STtransfer;
        $oed->MSWtransfer = $request->MSWtransfer;
        $oed->Aidetransfer = $request->Aidetransfer;
        $oed->Othertransfer = $request->Othertransfer;
        $oed->OtherTeamMembers = $request->OtherTeamMembers;
        $oed->agencyPolicy = $request->agencyPolicy;
        $oed->RepresentativePP = $request->RepresentativePP;
        $oed->explain = $request->explain;
        $oed->documentation = $request->documentation;
        $oed->currentPlan = $request->currentPlan;
        $oed->currentPlanOfCare = $request->currentPlanOfCare;
        $oed->copyOrder = $request->copyOrder;
        $oed->copyOther_1 = $request->copyOther_1;
        $oed->copyOther_2 = $request->copyOther_2;
        $oed->dateofdeath = $request->dateofdeath;
        $oed->PlanOfCare = $request->PlanOfCare;
        $oed->PlanOfCare_1 = $request->PlanOfCare_1;
        $oed->relationshiptoPatient = $request->relationshiptoPatient;
        $oed->pptd = $request->pptd;
        $oed->personName = $request->personName;
        $oed->Relationship = $request->Relationship;
        $oed->RelationName = $request->RelationName;
        $oed->RelationName_1 = $request->RelationName_1;
        $oed->RelationName_2 = $request->RelationName_2;
        $oed->RelationName_3 = $request->RelationName_3;
        $oed->involvedSN = $request->involvedSN;
        $oed->involvedPT = $request->involvedPT;
        $oed->involvedOT = $request->involvedOT;
        $oed->involvedST = $request->involvedST;
        $oed->involvedMSW = $request->involvedMSW;
        $oed->involvedAide = $request->involvedAide;
        $oed->teamMembers = $request->teamMembers;
        $oed->otherMembers = $request->otherMembers;
        $oed->otherMembers_1 = $request->otherMembers_1;
        $oed->representative = $request->representative;
        $oed->pharmaceutical_1 = $request->pharmaceutical_1;
        $oed->pharmaceutical = $request->pharmaceutical;
        $oed->medications = $request->medications;
        $oed->TransferDeath = $request->TransferDeath;
        $oed->TransferDeath_1 = $request->TransferDeath_1;
        $oed->malled = $request->malled;
        $oed->emalled = $request->emalled;
        $oed->faxed = $request->faxed;
        $oed->faxed_1 = $request->faxed_1;
        $oed->Othercertifying = $request->Othercertifying;
        $oed->Datecertifying = $request->Datecertifying;
        $oed->secondaryPhysician_1 = $request->secondaryPhysician_1;
        $oed->secondaryPhysician_date = $request->secondaryPhysician_date;
        $oed->primaryCare = $request->primaryCare;
        $oed->primaryCare_date = $request->primaryCare_date;
        $oed->anyRepresentative = $request->anyRepresentative;
        $oed->anyRepresentative_date = $request->anyRepresentative_date;
        $oed->personCompleting = $request->personCompleting;
        $oed->personCompleting_date = $request->personCompleting_date;
        $oed->personCompleting_time = $request->personCompleting_time;

        $oed->save();

        // return redirect()->with('success', 'Oasis E Death Record Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkilledAgency  $SkilledAgency
     * @return \Illuminate\Http\Response
     */
    public function show(SkilledAgency $SkilledAgency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkilledAgency  $SkilledAgency
     * @return \Illuminate\Http\Response
     */
    public function edit(SkilledAgency $SkilledAgency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkilledAgency  $SkilledAgency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkilledAgency $SkilledAgency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkilledAgency  $SkilledAgency
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkilledAgency $SkilledAgency)
    {
        //
    }
}
