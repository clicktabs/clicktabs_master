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
        Schema::create('nursingvisitnote4s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('nursingvisitnote4s_id')->nullable();
            $table->string('forgetfull')->nullable();
            $table->string('confused')->nullable();
            $table->string('content')->nullable();
            $table->string('happy')->nullable();
            $table->string('hopeful')->nullable();
            $table->string('motivated')->nullable();
            $table->string('status_other')->nullable();
            $table->string('turgor')->nullable();         
            $table->string('turgor_color')->nullable();
            $table->string('turgor_temp')->nullable();
            $table->string('itch')->nullable();
            $table->string('rash')->nullable();
            $table->string('try')->nullable();
            $table->string('scaling')->nullable();
            $table->string('redness')->nullable();
            $table->string('ecchymosis')->nullable();
            $table->string('pallor')->nullable();
            $table->string('jaundice')->nullable();
            $table->string('turgor_other')->nullable();
            $table->string('soiled_dressing_removed')->nullable();
            $table->string('soiled_dressing_properly')->nullable();
            $table->string('wound_cleaned')->nullable();
            $table->string('wound_irrigated')->nullable();
            $table->string('wound_dressingtype')->nullable();
            $table->string('Drainage_emptied')->nullable();
            $table->string('vacuum_reset')->nullable();
            $table->string('tolerated')->nullable();
            $table->string('Medicated_woundcare')->nullable();
            $table->string('dressing_performed_by_patient')->nullable();
            $table->string('dressing_performed_by_nurse')->nullable();
            $table->string('dressing_performed_by_caregiver')->nullable();
            $table->string('dressing_performed_by_caregiver_other')->nullable();
            $table->string('Woundcare_patient')->nullable();
            $table->string('Woundcare_caregiver')->nullable();
            $table->string('soiled-disposal')->nullable();
            $table->string('symptoms_report_to')->nullable();
            $table->string('woundcare_performpatient')->nullable();
            $table->string('woundcare_performcaregiver')->nullable();
            $table->string('dressing_changeby_caregiver')->nullable();
            $table->string('Skilled_observation_assessment')->nullable();
            $table->string('Skilled_observation_assessment_care')->nullable();
            $table->string('Skilled_observation_assessment_change')->nullable();
            $table->string('Skilled_observation_assessment_urine_testing')->nullable();
            $table->string('Skilled_observation_assessment_wound_care')->nullable();
            $table->string('Skilled_observation_assessment_wound_dressing')->nullable();
            $table->string('Observe_signs_symptoms_of_infection')->nullable();
            $table->string('venipucture')->nullable();
            $table->string('painmanagement')->nullable();
            $table->string('Bowel_Bladder_training')->nullable();
            $table->string('digital_removal_Enema')->nullable();
            $table->string('change')->nullable();
            $table->string('injection')->nullable();
            $table->string('administer_medication')->nullable();
            $table->string('Insulin_prep')->nullable();
            $table->string('Insulin_administer')->nullable();
            $table->string('Diabetic_assessment')->nullable();
            $table->string('Teach_diabetic_care')->nullable();
            $table->string('Teach_administer')->nullable();
            $table->string('Teach_ivs')->nullable();
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
        Schema::dropIfExists('nursingvisitnote4s');
    }
};
