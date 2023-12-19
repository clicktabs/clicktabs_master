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
        Schema::create('nursingvisitnote5s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('nursingvisitnote5s_id')->nullable();
            $table->string('Teach_clysis')->nullable();
            $table->string('Ostomy_care')->nullable();
            $table->string('conduit_care')->nullable();
            $table->string('Teach_care')->nullable();
            $table->string('Administer_tracheostomy')->nullable();
            $table->string('Administer_treatment')->nullable();
            $table->string('Teach_care_terminally_ill')->nullable();
            $table->string('Observe_and_assess_medication')->nullable();
            $table->string('Teach_medication_purpose')->nullable();
            $table->string('Teach_medication_side_effect')->nullable();
            $table->string('Teach_medication_administration')->nullable();
            $table->string('Evaluate_diet')->nullable();
            $table->string('Evaluate_fluid_intake')->nullable();
            $table->string('Diet_teaching')->nullable();
            $table->string('Assess_ADLs_Functionality')->nullable();
            $table->string('Teach_Safety_precautions')->nullable();
            $table->string('Teach_skin_care_pressure_injury"')->nullable();
            $table->string('Psychological_intervention')->nullable();
            $table->string('Chest_physiotherapy_postural_drainage')->nullable();
            $table->string('Prenatal_assessment')->nullable();
            $table->string('Post_partum_assessment')->nullable();
            $table->string('Teach_infant_child_care')->nullable();
            $table->string('child_care_other')->nullable();
            $table->string('lab_work_blood_drawn')->nullable();
            $table->string('lab_work_blood_drawn_for')->nullable();
            $table->string('lab_work_blood_drawn_other')->nullable();
            $table->string('lab_work_blood_drawn_delivered')->nullable();
            $table->string('Instructions_Patient_Response')->nullable();
            $table->string('Care_plan_reviewed')->nullable();
            $table->string('Care_patient_involvement')->nullable();
            $table->string('Care_plan_outcome_achieved')->nullable();
            $table->string('Care_plan_prn_order_obtained')->nullable();
            $table->string('Plan_for_next_visit')->nullable();
            $table->string('next_physician_visit')->nullable();
            $table->string('approximate_next_visit_date')->nullable();
            $table->string('DischargePlanning')->nullable();
            $table->string('discharge_plan_verified')->nullable();
            $table->string('BillableSuppliesRecorded')->nullable();
            $table->string('physician_pt')->nullable();
            $table->string('physician_ot')->nullable();
            $table->string('physician_st')->nullable();
            $table->string('physician_sw')->nullable();
            $table->string('sn')->nullable();
            $table->string('physician_other')->nullable();
            $table->string('aide')->nullable();
            $table->string('aide_supervisory_visit_present')->nullable();
            $table->string('supervisory_visit_scheduled')->nullable();
            $table->string('PatientSatisfied')->nullable();
            $table->string('Explain')->nullable();
            $table->string('AideCarePlan')->nullable();
            $table->string('AideCarePlanUpdated')->nullable();
            $table->string('Observation_of')->nullable();
            $table->string('Teaching_training_of')->nullable();
            $table->string('Nurse_signature_title')->nullable();
            $table->string('Nurse_signature_date')->nullable();
            $table->string('Patient_signature')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('nursingvisitnote5s');
    }
};
