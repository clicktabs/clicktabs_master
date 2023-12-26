<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oasis_e_recertifications', function (Blueprint $table) {
            $table->id();

            // Section A: Administrative Information
            $table->text('dopca', 55)->nullable();
            $table->text('monthAssessment', 55)->nullable();
            $table->text('dayAssessment', 55)->nullable();
            $table->text('yearAssessment', 55)->nullable();
            $table->text('TypeOfVisit', 55)->nullable();
            $table->text('OtherTypeOfVisit', 55)->nullable();
            $table->boolean('Recertification')->nullable();
            $table->boolean('Other_followup')->nullable();
            $table->text('M0100_explain')->nullable();
            $table->text('EpisodeTiming', 55)->nullable();

            // PATIENT CONTACTS/CAREGIVERS
            $table->boolean('Patient')->nullable();
            $table->boolean('Caregiver')->nullable();
            $table->boolean('Family_member')->nullable();
            $table->boolean('Representative')->nullable();
            $table->boolean('familyCaregiver')->nullable();
            $table->boolean('caregiver_other')->nullable();
            $table->text('caregiver_other_1', 55)->nullable();
            $table->text('patientRepresentative', 20)->nullable();
            $table->text('representativePerson', 55)->nullable();
            $table->text('representativePerson_1', 55)->nullable();
            $table->text('relationship', 55)->nullable();
            $table->text('relationship_other_1', 55)->nullable();
            $table->text('address')->nullable();
            $table->text('city', 55)->nullable();
            $table->text('state', 55)->nullable();
            $table->text('zip', 55)->nullable();
            $table->text('phone', 55)->nullable();
            $table->text('email', 55)->nullable();
            $table->text('patient_1', 55)->nullable();
            $table->text('patientrepresentative_1', 55)->nullable();
            $table->text('caregiverName', 55)->nullable();
            $table->text('relationship_1', 55)->nullable();
            $table->text('caregiverName_1', 55)->nullable();
            $table->text('address_1')->nullable();
            $table->text('city_1', 55)->nullable();
            $table->text('state_1', 55)->nullable();
            $table->text('zip_1', 55)->nullable();
            $table->text('phone_1', 55)->nullable();
            $table->text('email_1', 55)->nullable();
            $table->text('PaidService', 10)->nullable();
            $table->text('companyName', 55)->nullable();
            $table->text('phoneNumber', 20)->nullable();
            $table->text('contactName', 55)->nullable();
            $table->text('PRIORITY', 55)->nullable();
            $table->text('EmergencyContact', 55)->nullable();
            $table->text('EmergencyContact_1', 55)->nullable();
            $table->text('relationship_2', 20)->nullable();
            $table->text('relationship_2_other', 55)->nullable();
            $table->text('address_2')->nullable();
            $table->text('city_2', 55)->nullable();
            $table->text('state_2', 55)->nullable();
            $table->text('zip_2', 55)->nullable();
            $table->text('phone_2', 55)->nullable();
            $table->text('email_2', 55)->nullable();
            $table->text('caregiver_2', 55)->nullable();
            $table->text('relationship_3', 20)->nullable();
            $table->text('relationship_3_other', 55)->nullable();
            $table->text('address_3')->nullable();
            $table->text('city_3', 55)->nullable();
            $table->text('state_3', 55)->nullable();
            $table->text('zip_3', 55)->nullable();
            $table->text('phone_3', 55)->nullable();
            $table->text('email_3', 55)->nullable();
            $table->text('criticalSituation', 10)->nullable();
            $table->text('name_4', 55)->nullable();
            $table->text('phoneNumber_4', 20)->nullable();
            $table->text('patientLast', 55)->nullable();
            $table->text('patientFirst', 55)->nullable();
            $table->text('patientInitial', 55)->nullable();
            $table->text('pid', 55)->nullable();
            $table->text('patientName_5', 55)->nullable();
            $table->text('patientID', 55)->nullable();

            // SUPPORTIVE ASSISTANCE/CARE PREFERENCES SUMMARY
            $table->boolean('OASISassessment')->nullable();
            $table->text('IADLs', 10)->nullable();
            $table->text('IADLsIfYes', 55)->nullable();
            $table->boolean('No_assistance')->nullable();
            $table->boolean('Meals')->nullable();
            $table->boolean('ADLs_ADLs')->nullable();
            $table->boolean('Transportation')->nullable();
            $table->boolean('SupervisionSupport')->nullable();
            $table->boolean('Medications')->nullable();
            $table->boolean('Home_maintenance')->nullable();
            $table->boolean('OtherAssistance')->nullable();
            $table->text('Home_maintenance_1', 55)->nullable();
            $table->text('WillingToAssist', 15)->nullable();
            $table->text('unknowntextarea')->nullable();
            $table->text('AssistThePatient', 15)->nullable();
            $table->text('unknowntextarea_1')->nullable();
            $table->boolean('noAssistance')->nullable();
            $table->text('sundayAm', 15)->nullable();
            $table->text('mondayAm', 15)->nullable();
            $table->text('tuesdayAM', 15)->nullable();
            $table->text('wednesdayAM', 15)->nullable();
            $table->text('thursdayAM', 15)->nullable();
            $table->text('fridayAM', 15)->nullable();
            $table->text('saturdayAM', 15)->nullable();
            $table->text('sundayPm', 15)->nullable();
            $table->text('mondayPm', 15)->nullable();
            $table->text('tuesdayPm', 15)->nullable();
            $table->text('wednesdayPm', 15)->nullable();
            $table->text('thursdayPm', 15)->nullable();
            $table->text('fridayPm', 15)->nullable();
            $table->text('saturdayPm', 15)->nullable();
            $table->text('sundayNights', 15)->nullable();
            $table->text('mondayNights', 15)->nullable();
            $table->text('tuesdayNights', 15)->nullable();
            $table->text('wednesdayNights', 15)->nullable();
            $table->text('thursdayNights', 15)->nullable();
            $table->text('fridayNights', 15)->nullable();
            $table->text('saturdayNights', 15)->nullable();

            // ADVANCE DIRECTIVES
            $table->text('DirectivesOrder', 15)->nullable();
            $table->integer('OASISassessment_2')->nullable();
            $table->boolean('advanceDirectives')->nullable();
            $table->boolean('livingWill')->nullable();
            $table->boolean('doCardiopulmonary')->nullable();
            $table->boolean('donotResuscitate')->nullable();
            $table->boolean('donotIntubate')->nullable();
            $table->boolean('noArtificial')->nullable();
            $table->boolean('powerofAttorney')->nullable();
            $table->text('powerofAttorney_1', 55)->nullable();
            $table->text('powerPhone', 20)->nullable();
            $table->boolean('FinancialPower')->nullable();
            $table->text('financialPowerName', 55)->nullable();
            $table->text('phonefinancialPower', 20)->nullable();
            $table->boolean('stateSpecificform')->nullable();
            $table->text('stateSpecificform_1', 55)->nullable();
            $table->boolean('copiesonFile')->nullable();
            $table->boolean('pcp')->nullable();
            $table->boolean('copiesonFile_other')->nullable();
            $table->text('copiesonFile_other_1', 55)->nullable();
            $table->text('Comments')->nullable();

            // SENSORY STATUS
            $table->boolean('patientWears')->nullable();
            $table->boolean('Contacts')->nullable();
            $table->boolean('Contacts_1')->nullable();
            $table->boolean('prosthesis_R')->nullable();
            $table->boolean('prosthesis_L')->nullable();
            $table->boolean('hearingaid_R')->nullable();
            $table->boolean('hearingaid_L')->nullable();
            $table->text('hearingaid_Other', 55)->nullable();
            $table->boolean('Eyes')->nullable();
            $table->boolean('Ears')->nullable();
            $table->boolean('Nose')->nullable();
            $table->boolean('Mouth')->nullable();
            $table->boolean('Throat')->nullable();
            $table->boolean('Sight')->nullable();
            $table->boolean('Hearing')->nullable();
            $table->boolean('Smell')->nullable();
            $table->boolean('Taste')->nullable();
            $table->boolean('Throat_2')->nullable();
            $table->text('activityLimitation')->nullable();
            $table->text('therapist')->nullable();

            // NEUROLOGICAL STATUS
            $table->boolean('Problem')->nullable();
            $table->text('neurologicalSystem')->nullable();
            $table->boolean('traumaticBrain')->nullable();
            $table->date('dateofInjury')->nullable();
            $table->text('type', 55)->nullable();
            $table->boolean('headaches')->nullable();
            $table->date('Lastheadaches')->nullable();
            $table->text('lastHeadachestype', 55)->nullable();
            $table->boolean('seizures')->nullable();
            $table->date('lastSeizure')->nullable();
            $table->text('lastSeizuretype', 55)->nullable();
            $table->boolean('Aphasic')->nullable();
            $table->boolean('Receptive')->nullable();
            $table->boolean('Expressive')->nullable();
            $table->boolean('Tremors')->nullable();
            $table->boolean('atRest')->nullable();
            $table->boolean('voluntaryMovement')->nullable();
            $table->boolean('Continuous')->nullable();
            $table->boolean('Spasms')->nullable();
            $table->text('Spasm', 55)->nullable();
            $table->text('dominant_side', 10)->nullable();
            $table->boolean('sideHemiplegia')->nullable();
            $table->text('Hemiplegia', 10)->nullable();
            $table->boolean('Paraplegia')->nullable();
            $table->boolean('Quadriplegia')->nullable();
            $table->text('pcafa', 10)->nullable();
            $table->text('conditionAffect')->nullable();

            // COGNITIVE STATUS
            $table->text('PatientCognitive', 55)->nullable();
            $table->text('PatientConfused', 55)->nullable();
            $table->text('PatienAnxious', 55)->nullable();
            $table->text('PatientHas', 20)->nullable();
            $table->text('psychiatricNursing', 10)->nullable();

            // PSYCHOSOCIAL
            $table->text('patientCommunicate', 10)->nullable();
            $table->text('ifnoExplain', 55)->nullable();
            $table->text('signLanguage', 55)->nullable();
            $table->text('improveCommunication')->nullable();
            $table->text('supportPatient', 10)->nullable();
            $table->text('relationship_4')->nullable();
            $table->text('spiritualResource', 55)->nullable();
            $table->text('phoneResource', 20)->nullable();
            $table->boolean('change')->nullable();
            $table->boolean('changeSince')->nullable();
            $table->boolean('Angry')->nullable();
            $table->boolean('Fear')->nullable();
            $table->boolean('Sadness')->nullable();
            $table->boolean('Discouraged')->nullable();
            $table->boolean('Lonely')->nullable();
            $table->boolean('Depressed')->nullable();
            $table->boolean('Helpless')->nullable();
            $table->boolean('Content')->nullable();
            $table->boolean('Happy')->nullable();
            $table->boolean('Hopeful')->nullable();
            $table->boolean('Motivated')->nullable();
            $table->boolean('contentOther')->nullable();
            $table->text('contentOther_1', 55)->nullable();
            $table->boolean('nothingReported')->nullable();
            $table->text('Sleep', 20)->nullable();
            $table->text('Rest', 20)->nullable();
            $table->text('frequencyNap', 55)->nullable();
            $table->text('hoursSlept', 10)->nullable();
            $table->text('sleptExplain', 55)->nullable();
            $table->boolean('Caregiver_3')->nullable();
            $table->boolean('Clinician')->nullable();
            $table->boolean('Representative_2')->nullable();
            $table->boolean('behaviorstoward_Others')->nullable();
            $table->text('behaviorstoward_Others_1', 55)->nullable();
            $table->text('Rest_2', 15)->nullable();
            $table->text('describeInappropriate')->nullable();
            $table->boolean('lackofMotivation')->nullable();
            $table->boolean('inabilitytoRecognize')->nullable();
            $table->boolean('Unrealistic')->nullable();
            $table->boolean('Denial')->nullable();
            $table->boolean('Abuse')->nullable();
            $table->boolean('Neglect')->nullable();
            $table->boolean('Exploitation')->nullable();
            $table->boolean('Verbal')->nullable();
            $table->boolean('Emotional')->nullable();
            $table->boolean('Physical')->nullable();
            $table->boolean('Financial')->nullable();
            $table->text('PotentialActual', 15)->nullable();
            $table->text('MSWreferral', 10)->nullable();
            $table->text('Otherintervention')->nullable();
            $table->text('affectFunctionalAbility', 10)->nullable();
            $table->text('psychosocialExplain')->nullable();

            // CARE PREFERENCES/PATIENT’S PERSONAL GOALS
            $table->boolean('patient_2')->nullable();
            $table->boolean('representative_3')->nullable();
            $table->text('didOther', 55)->nullable();
            $table->text('ccptihhsp', 10)->nullable();
            $table->text('preferences')->nullable();
            $table->boolean('communicationPatient')->nullable();
            $table->boolean('communicationRepresentative')->nullable();
            $table->text('communicationOther')->nullable();
            $table->text('communicationStatus', 10)->nullable();
            $table->boolean('thePatient')->nullable();
            $table->boolean('theRepresentative')->nullable();
            $table->text('otherRepresentative', 55)->nullable();
            $table->boolean('personalGoal')->nullable();
            $table->boolean('workingOn')->nullable();
            $table->text('otherWorking', 55)->nullable();
            $table->boolean('personalGoalPatient')->nullable();
            $table->boolean('personalGoalRepresentative')->nullable();
            $table->text('otherDiscussed_1', 55)->nullable();
            $table->text('agreementStatus', 20)->nullable();
            $table->boolean('The')->nullable();
            $table->boolean('ThePatient_2')->nullable();
            $table->boolean('Representative_4')->nullable();
            $table->text('otherGoalWritten', 55)->nullable();
            $table->boolean('thestakeholders')->nullable();
            $table->boolean('patientstakeholders')->nullable();
            $table->boolean('representativestakeholders')->nullable();
            $table->text('otherGoalAgreement', 55)->nullable();
            $table->text('documentGoals')->nullable();

            // STRENGTHS/LIMITATIONS
            $table->text('involvedFamily')->nullable();
            $table->text('structuralImpairment')->nullable();
            $table->text('functionalImpairment')->nullable();
            $table->text('patientActivities')->nullable();
            $table->text('nurseSkill', 10)->nullable();
            $table->text('specificStructural')->nullable();
            $table->text('changes', 10)->nullable();
            $table->text('limitations')->nullable();

            // SAFETY MEASURES
            $table->boolean('Bleeding')->nullable();
            $table->boolean('siderailsUp')->nullable();
            $table->boolean('infectionControl')->nullable();
            $table->boolean('precautions')->nullable();
            $table->boolean('elevateHead')->nullable();
            $table->boolean('walker')->nullable();
            $table->boolean('seizurePrecautions')->nullable();
            $table->boolean('supervision')->nullable();
            $table->boolean('fallPrecautions')->nullable();
            $table->boolean('clearpathways')->nullable();
            $table->boolean('Aspiration')->nullable();
            $table->boolean('transfers')->nullable();
            $table->text('transfersOther', 55)->nullable();
            $table->text('changesPreparedness', 10)->nullable();
            $table->text('preparednessExplain')->nullable();

            // Primary Diagnosis & Other Diagnoses
            $table->text('primaryDiagnosis', 55)->nullable();
            $table->text('notAllowed', 55)->nullable();
            $table->text('otherDiagnoses', 55)->nullable();
            $table->text('allowedDiagnoses', 55)->nullable();
            $table->text('allowedDiagnoses_b', 55)->nullable();
            $table->text('allowedDiagnoses_c', 55)->nullable();
            $table->text('allowedDiagnoses_d', 55)->nullable();
            $table->text('allowedDiagnosesd', 55)->nullable();
            $table->text('allowedDiagnoses_e', 55)->nullable();
            $table->text('allowedDiagnoses_ee', 55)->nullable();
            $table->text('allowedDiagnoses_f', 55)->nullable();
            $table->text('allowedDiagnoses_ff', 55)->nullable();
            $table->text('Complete', 55)->nullable();
            $table->text('Complete_g', 55)->nullable();
            $table->text('Completeh', 55)->nullable();
            $table->text('Complete_h', 55)->nullable();
            $table->text('Completei', 55)->nullable();
            $table->text('Complete_i', 55)->nullable();
            $table->text('Completej', 55)->nullable();
            $table->text('Complete_j', 55)->nullable();
            $table->text('Completek', 55)->nullable();
            $table->text('Complete_k', 55)->nullable();
            $table->text('Completei_2', 55)->nullable();
            $table->text('Complete_i_2', 55)->nullable();
            $table->text('Completem', 55)->nullable();
            $table->text('Complete_m', 55)->nullable();
            $table->text('Completen', 55)->nullable();
            $table->text('Complete_n', 55)->nullable();
            $table->text('Completeo', 55)->nullable();
            $table->text('Complete_o', 55)->nullable();
            $table->text('Completep', 55)->nullable();
            $table->text('Complete_p', 55)->nullable();
            $table->text('Completeq', 55)->nullable();
            $table->text('Complete_q', 55)->nullable();
            $table->text('Completer', 55)->nullable();
            $table->text('Complete_r', 55)->nullable();
            $table->text('Completes', 55)->nullable();
            $table->text('Complete_s', 55)->nullable();
            $table->text('Completet', 55)->nullable();
            $table->text('Complete_t', 55)->nullable();
            $table->text('Completeu', 55)->nullable();
            $table->text('Complete_u', 55)->nullable();
            $table->text('Completv', 55)->nullable();
            $table->text('Complete_vhm', 55)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oasis_e_recertifications');
    }
};
