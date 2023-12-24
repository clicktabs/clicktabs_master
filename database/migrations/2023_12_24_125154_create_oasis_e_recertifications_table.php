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

            $table->string('dopca', 30)->nullable();
            $table->string('monthAssessment', 55)->nullable();
            $table->string('dayAssessment', 55)->nullable();
            $table->string('yearAssessment', 55)->nullable();
            $table->string('TypeOfVisit', 55)->nullable();
            $table->string('OtherTypeOfVisit', 55)->nullable();
            $table->boolean('Recertification')->nullable();
            $table->boolean('Other_follow-up')->nullable();
            $table->text('M0100_explain')->nullable();
            $table->string('EpisodeTiming', 30)->nullable();

            // PATIENT CONTACTS/CAREGIVERS
            $table->boolean('Patient')->nullable();
            $table->boolean('Caregiver')->nullable();
            $table->boolean('Family_member')->nullable();
            $table->boolean('Representative')->nullable();
            $table->boolean('familyCaregiver')->nullable();
            $table->boolean('caregiver_other')->nullable();
            $table->string('caregiver_other_1', 55)->nullable();
            $table->string('patientRepresentative', 20)->nullable();
            $table->string('representativePerson', 30)->nullable();
            $table->string('representativePerson_1', 55)->nullable();
            $table->string('relationship', 30)->nullable();
            $table->string('relationship_1', 55)->nullable();
            $table->string('address')->nullable();
            $table->string('city', 30)->nullable();
            $table->string('state', 30)->nullable();
            $table->string('zip', 30)->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('email', 55)->nullable();
            $table->string('patient_1', 55)->nullable();
            $table->string('patientrepresentative', 55)->nullable();
            $table->string('caregiverName', 55)->nullable();
            $table->string('relationship', 30)->nullable();
            $table->string('caregiverName_1', 55)->nullable();
            $table->text('address_1')->nullable();
            $table->string('city_1', 30)->nullable();
            $table->string('state_1', 30)->nullable();
            $table->string('zip_1', 30)->nullable();
            $table->string('phone_1', 30)->nullable();
            $table->string('email_1', 55)->nullable();
            $table->string('PaidService', 10)->nullable();
            $table->string('companyName', 55)->nullable();
            $table->string('phoneNumber', 20)->nullable();
            $table->string('contactName', 55)->nullable();
            $table->string('PRIORITY', 55)->nullable();
            $table->string('EmergencyContact', 30)->nullable();
            $table->string('EmergencyContact_1', 55)->nullable();
            $table->string('relationship', 20)->nullable();
            $table->string('relationship_1', 55)->nullable();
            $table->text('address_2')->nullable();
            $table->string('city_2', 30)->nullable();
            $table->string('state_2', 30)->nullable();
            $table->string('zip_2', 30)->nullable();
            $table->string('phone_2', 30)->nullable();
            $table->string('email_2', 55)->nullable();
            $table->string('caregiver_2', 55)->nullable();
            $table->string('relationship', 20)->nullable();
            $table->string('relationship_1', 55)->nullable();
            $table->text('address_3')->nullable();
            $table->string('city_3', 30)->nullable();
            $table->string('state_3', 30)->nullable();
            $table->string('zip_3', 30)->nullable();
            $table->string('phone_3', 30)->nullable();
            $table->string('email_3', 30)->nullable();
            $table->string('criticalSituation', 10)->nullable();
            $table->string('name_4', 55)->nullable();
            $table->string('phoneNumber_4', 20)->nullable();
            $table->string('patientLast', 30)->nullable();
            $table->string('patientFirst', 30)->nullable();
            $table->string('patientInitial', 30)->nullable();
            $table->string('pid', 30)->nullable();
            $table->string('patientName_5', 55)->nullable();
            $table->string('patientID', 30)->nullable();

            // SUPPORTIVE ASSISTANCE/CARE PREFERENCES SUMMARY
            $table->boolean('OASISassessment')->nullable();
            $table->string('IADLs', 10)->nullable();
            $table->string('IADLsIfYes', 55)->nullable();
            $table->boolean('No_assistance')->nullable();
            $table->boolean('Meals')->nullable();
            $table->boolean('ADLs_ADLs')->nullable();
            $table->boolean('Transportation')->nullable();
            $table->boolean('SupervisionSupport')->nullable();
            $table->boolean('Medications')->nullable();
            $table->boolean('Home_maintenance')->nullable();
            $table->boolean('OtherAssistance')->nullable();
            $table->string('Home_maintenance_1', 55)->nullable();
            $table->string('WillingToAssist', 15)->nullable();
            $table->text('unknowntextarea')->nullable();
            $table->string('AssistThePatient', 15)->nullable();
            $table->text('unknowntextarea_1')->nullable();
            $table->boolean('noAssistance')->nullable();
            $table->string('sundayAm', 15)->nullable();
            $table->string('mondayAm', 15)->nullable();
            $table->string('tuesdayAM', 15)->nullable();
            $table->string('wednesdayAM', 15)->nullable();
            $table->string('thursdayAM', 15)->nullable();
            $table->string('fridayAM', 15)->nullable();
            $table->string('saturdayAM', 15)->nullable();
            $table->string('sundayPm', 15)->nullable();
            $table->string('mondayPm', 15)->nullable();
            $table->string('tuesdayPm', 15)->nullable();
            $table->string('wednesdayPm', 15)->nullable();
            $table->string('thursdayPm', 15)->nullable();
            $table->string('fridayPm', 15)->nullable();
            $table->string('saturdayPm', 15)->nullable();
            $table->string('sundayNights', 15)->nullable();
            $table->string('mondayNights', 15)->nullable();
            $table->string('tuesdayNights', 15)->nullable();
            $table->string('wednesdayNights', 15)->nullable();
            $table->string('thursdayNights', 15)->nullable();
            $table->string('fridayNights', 15)->nullable();
            $table->string('saturdayNights', 15)->nullable();

            // ADVANCE DIRECTIVES
            $table->string('DirectivesOrder', 15)->nullable();
            $table->integer('OASISassessment_2', 15)->nullable();
            $table->boolean('advanceDirectives')->nullable();
            $table->boolean('livingWill')->nullable();
            $table->boolean('doCardiopulmonary')->nullable();
            $table->boolean('donotResuscitate')->nullable();
            $table->boolean('donotIntubate')->nullable();
            $table->boolean('noArtificial')->nullable();
            $table->boolean('powerofAttorney')->nullable();
            $table->string('powerofAttorney_1', 55)->nullable();
            $table->string('powerPhone', 20)->nullable();
            $table->boolean('FinancialPower')->nullable();
            $table->string('financialPowerName', 55)->nullable();
            $table->string('phonefinancialPower', 20)->nullable();
            $table->boolean('stateSpecificform')->nullable();
            $table->string('stateSpecificform_1', 55)->nullable();
            $table->boolean('copiesonFile')->nullable();
            $table->boolean('pcp')->nullable();
            $table->boolean('copiesonFile_other')->nullable();
            $table->string('copiesonFile_other_1', 55)->nullable();
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
            $table->boolean('Throat')->nullable();
            $table->text('activityLimitation')->nullable();
            $table->text('therapist')->nullable();

            // NEUROLOGICAL STATUS
            $table->boolean('Problem')->nullable();
            $table->text('neurologicalSystem')->nullable();
            $table->boolean('traumaticBrain')->nullable();
            $table->date('dateofInjury')->nullable();
            $table->string('type', 30)->nullable();
            $table->boolean('headaches')->nullable();
            $table->date('Lastheadaches')->nullable();
            $table->string('lastHeadachestype', 30)->nullable();
            $table->boolean('seizures')->nullable();
            $table->date('lastSeizure')->nullable();
            $table->string('lastSeizuretype', 30)->nullable();
            $table->boolean('Aphasic')->nullable();
            $table->boolean('Receptive')->nullable();
            $table->boolean('Expressive')->nullable();
            $table->boolean('Tremors')->nullable();
            $table->boolean('atRest')->nullable();
            $table->boolean('voluntaryMovement')->nullable();
            $table->boolean('Continuous')->nullable();
            $table->boolean('Spasms')->nullable();
            $table->string('Spasm', 55)->nullable();
            $table->string('dominant_side', 10)->nullable();
            $table->boolean('sideHemiplegia')->nullable();
            $table->string('Hemiplegia', 10)->nullable();
            $table->boolean('Paraplegia')->nullable();
            $table->boolean('Quadriplegia')->nullable();
            $table->string('pcafa', 10)->nullable();
            $table->text('conditionAffect')->nullable();

            // COGNITIVE STATUS
            $table->string('PatientCognitive', 25)->nullable();
            $table->string('PatientConfused', 25)->nullable();
            $table->string('PatienAnxious', 25)->nullable();
            $table->string('PatientHas', 20)->nullable();
            $table->string('psychiatricNursing', 10)->nullable();

            // PSYCHOSOCIAL
            $table->string('patientCommunicate', 10)->nullable();
            $table->string('ifnoExplain', 55)->nullable();
            $table->string('signLanguage', 55)->nullable();
            $table->text('improveCommunication')->nullable();
            $table->string('supportPatient', 10)->nullable();
            $table->text('relationship')->nullable();
            $table->string('spiritualResource', 55)->nullable();
            $table->string('phoneResource', 20)->nullable();
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
            $table->string('contentOther_1', 55)->nullable();
            $table->boolean('nothingReported')->nullable();
            $table->string('Sleep', 20)->nullable();
            $table->string('Rest', 20)->nullable();
            $table->string('frequencyNap', 55)->nullable();
            $table->string('hoursSlept', 10)->nullable();
            $table->string('sleptExplain', 55)->nullable();
            $table->boolean('Caregiver')->nullable();
            $table->boolean('Clinician')->nullable();
            $table->boolean('Representative')->nullable();
            $table->boolean('behaviorstoward_Others')->nullable();
            $table->string('behaviorstoward_Others_1', 55)->nullable();
            $table->string('Rest', 15)->nullable();
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
            $table->string('PotentialActual', 15)->nullable();
            $table->string('MSWreferral', 10)->nullable();
            $table->text('Otherintervention')->nullable();
            $table->string('affectFunctionalAbility', 10)->nullable();
            $table->text('psychosocialExplain')->nullable();

            // CARE PREFERENCES/PATIENT’S PERSONAL GOALS
            $table->boolean('patient')->nullable();
            $table->boolean('representative')->nullable();
            $table->string('didOther', 55)->nullable();
            $table->string('ccptihhsp', 10)->nullable();
            $table->text('preferences')->nullable();
            $table->boolean('communicationPatient')->nullable();
            $table->boolean('communicationRepresentative')->nullable();
            $table->boolean('communicationOther', 55)->nullable();
            $table->string('communicationStatus', 10)->nullable();
            $table->boolean('thePatient')->nullable();
            $table->boolean('theRepresentative')->nullable();
            $table->string('otherRepresentative', 55)->nullable();
            $table->boolean('personalGoal')->nullable();
            $table->boolean('workingOn')->nullable();
            $table->string('otherWorking', 55)->nullable();
            $table->boolean('personalGoalPatient')->nullable();
            $table->boolean('personalGoalRepresentative')->nullable();
            $table->string('otherDiscussed_1', 55)->nullable();
            $table->string('agreementStatus', 20)->nullable();
            $table->boolean('The')->nullable();
            $table->boolean('ThePatient')->nullable();
            $table->boolean('Representative')->nullable();
            $table->string('otherGoalWritten', 55)->nullable();
            $table->boolean('thestakeholders')->nullable();
            $table->boolean('patientstakeholders')->nullable();
            $table->boolean('representativestakeholders')->nullable();
            $table->string('otherGoalAgreement', 55)->nullable();
            $table->text('documentGoals')->nullable();

            // STRENGTHS/LIMITATIONS
            $table->text('involvedFamily')->nullable();
            $table->text('structuralImpairment')->nullable();
            $table->text('functionalImpairment')->nullable();
            $table->text('patientActivities')->nullable();
            $table->string('nurseSkill', 10)->nullable();
            $table->text('specificStructural')->nullable();
            $table->string('changes', 10)->nullable();
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
            $table->string('transfersOther', 55)->nullable();
            $table->string('changesPreparedness', 10)->nullable();
            $table->text('preparednessExplain')->nullable();
            $table->string('primaryDiagnosis', 55)->nullable();
            $table->string('notAllowed', 55)->nullable();
            $table->string('otherDiagnoses', 55)->nullable();
            $table->string('allowedDiagnoses', 55)->nullable();
            $table->string('allowedDiagnoses_b', 55)->nullable();
            $table->string('allowedDiagnoses_c', 55)->nullable();
            $table->string('allowedDiagnoses_d', 55)->nullable();
            $table->string('allowedDiagnosesd', 55)->nullable();
            $table->string('allowedDiagnoses_e', 55)->nullable();
            $table->string('allowedDiagnoses_ee', 55)->nullable();
            $table->string('allowedDiagnoses_f', 55)->nullable();
            $table->string('allowedDiagnoses_ff', 55)->nullable();
            $table->string('Complete', 55)->nullable();
            $table->string('Complete_g', 55)->nullable();
            $table->string('Completeh', 55)->nullable();
            $table->string('Complete_h', 55)->nullable();
            $table->string('Completei', 55)->nullable();
            $table->string('Complete_i', 55)->nullable();
            $table->string('Completej', 55)->nullable();
            $table->string('Complete_j', 55)->nullable();
            $table->string('Completek', 55)->nullable();
            $table->string('Complete_k', 55)->nullable();
            $table->string('Completei', 55)->nullable();
            $table->string('Complete_i', 55)->nullable();
            $table->string('Completem', 55)->nullable();
            $table->string('Complete_m', 55)->nullable();
            $table->string('Completen', 55)->nullable();
            $table->string('Complete_n', 55)->nullable();
            $table->string('Completeo', 55)->nullable();
            $table->string('Complete_o', 55)->nullable();
            $table->string('Completep', 55)->nullable();
            $table->string('Complete_p', 55)->nullable();
            $table->string('Completeq', 55)->nullable();
            $table->string('Complete_q', 55)->nullable();
            $table->string('Completer', 55)->nullable();
            $table->string('Complete_r', 55)->nullable();
            $table->string('Completes', 55)->nullable();
            $table->string('Complete_s', 55)->nullable();
            $table->string('Completet', 55)->nullable();
            $table->string('Complete_t', 55)->nullable();
            $table->string('Completeu', 55)->nullable();
            $table->string('Complete_u', 55)->nullable();
            $table->string('Completv', 55)->nullable();
            $table->string('Complete_vhm', 55)->nullable();

            // Functional Status
            $table->integer('Grooming')->nullable();
            $table->integer('catdub')->nullable();
            $table->integer('Groom')->nullable();
            $table->integer('Bathing')->nullable();
            $table->integer('ToiletTransferring')->nullable();
            $table->integer('Transferring')->nullable();
            $table->integer('Ambulation')->nullable();
            $table->string('ifhha', 15)->nullable();
            $table->text('reasonforNeed')->nullable();
            $table->string('OccupationalTherapy', 15)->nullable();
            $table->text('textarea')->nullable();
            $table->boolean('No_Restrictions')->nullable();
            $table->boolean('Complete_bedrest')->nullable();
            $table->boolean('Bathroomprivileges')->nullable();
            $table->boolean('tolerated')->nullable();
            $table->boolean('transfer_bedchair')->nullable();
            $table->boolean('exercisespPprescribed')->nullable();
            $table->boolean('partialWeight')->nullable();
            $table->boolean('Independent')->nullable();
            $table->boolean('Crutches')->nullable();
            $table->boolean('Cane')->nullable();
            $table->boolean('Wheelchair')->nullable();
            $table->boolean('Walker')->nullable();
            $table->text('activities_1')->nullable();
            $table->text('activities_2')->nullable();
            $table->text('commentsRegarding')->nullable();

            // FUNCTIONAL LIMITATIONS
            $table->boolean('Amputation')->nullable();
            $table->boolean('Paralysis')->nullable();
            $table->boolean('legallyBlind')->nullable();
            $table->boolean('Bowel')->nullable();
            $table->boolean('Endurance')->nullable();
            $table->boolean('Dyspnea')->nullable();
            $table->boolean('Contracture')->nullable();
            $table->boolean('Ambulation')->nullable();
            $table->string('limitationOther', 55)->nullable();
            $table->boolean('Hearing')->nullable();
            $table->boolean('Speech')->nullable();
            $table->string('hearingOther', 55)->nullable();

            // Functional Abilities and Goals
            $table->integer('SelfCare')->nullable();
            $table->integer('code_reason')->nullable();
            $table->boolean('Eating')->nullable();
            $table->boolean('oralHygiene')->nullable();
            $table->boolean('toiletingHygiene')->nullable();
            $table->text('additionalComment')->nullable();
            $table->integer('Mobility')->nullable();
            $table->integer('Mobility_CS')->nullable();
            $table->boolean('rollLeft')->nullable();
            $table->boolean('sitLying')->nullable();
            $table->boolean('Lying')->nullable();
            $table->boolean('Sit')->nullable();
            $table->boolean('Chair')->nullable();
            $table->boolean('Toilet')->nullable();
            $table->boolean('Walk')->nullable();
            $table->boolean('WalkFeet')->nullable();
            $table->boolean('WalkOnce')->nullable();
            $table->boolean('WalkUneven')->nullable();
            $table->boolean('Walkstep')->nullable();
            $table->boolean('WalkAbility')->nullable();
            $table->string('dpuws', 10)->nullable();
            $table->boolean('wheelTurns')->nullable();
            $table->boolean('musculoskeletal_np')->nullable();
            $table->text('musculoskeletalSystem')->nullable();
            $table->boolean('FractureLocation')->nullable();
            $table->string('Fracture', 55)->nullable();
            $table->boolean('spj')->nullable();
            $table->string('Swollen', 55)->nullable();
            $table->string('Contracture', 55)->nullable();
            $table->string('contractureLocation', 55)->nullable();
            $table->string('Hand_grips', 15)->nullable();
            $table->boolean('strongL')->nullable();
            $table->boolean('strongR')->nullable();
            $table->boolean('weakR')->nullable();
            $table->boolean('weakL')->nullable();
            $table->boolean('motorChanges')->nullable();
            $table->boolean('Fine')->nullable();
            $table->boolean('Gross')->nullable();
            $table->string('Gross_1', 55)->nullable();
            $table->boolean('Weakness')->nullable();
            $table->boolean('UE')->nullable();
            $table->boolean('LE')->nullable();
            $table->string('WeaknessOther', 55)->nullable();
            $table->boolean('AtrophyYes')->nullable();
            $table->string('Atrophy', 55)->nullable();
            $table->boolean('DecreasedYes')->nullable();
            $table->string('decreasedROM', 55)->nullable();
            $table->boolean('Shuffling')->nullable();
            $table->boolean('Widebased')->nullable();
            $table->boolean('Amputations')->nullable();
            $table->boolean('BK')->nullable();
            $table->boolean('AK')->nullable();
            $table->boolean('UE')->nullable();
            $table->boolean('R')->nullable();
            $table->boolean('L')->nullable();
            $table->string('shufflingOther', 55)->nullable();
            $table->boolean('shufflingOther_yes')->nullable();
            $table->string('shufflingOther_1', 55)->nullable();
            $table->string('PatientFunctionalAbility', 10)->nullable();
            $table->text('PatientFunctionalAbilityExplain')->nullable();
            
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
