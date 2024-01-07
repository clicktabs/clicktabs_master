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
        Schema::create('oasis_e_recertification_n_s', function (Blueprint $table) {
            $table->id();

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
        Schema::dropIfExists('oasis_e_recertification_n_s');
    }
};
