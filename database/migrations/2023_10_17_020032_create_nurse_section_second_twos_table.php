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
        Schema::create('nurse_section_second_twos', function (Blueprint $table) {
            $table->id();
           $table->boolean('soiledDressingProperly')->nullable();
            $table->string('woundCleaned')->nullable();
            $table->string('woundIrrigated')->nullable();
            $table->string('woundDressingType')->nullable();
            $table->string('drainageVolume')->nullable();
            $table->string('vacuumReset')->nullable();
            $table->string('tolerated')->nullable();
            $table->boolean('medicatedWoundcare')->nullable();
            $table->boolean('dressingPerformedPatient')->nullable();
            $table->boolean('dressingByNurse')->nullable();
            $table->boolean('dressingByVaregiver')->nullable();
            $table->string('dressingOther')->nullable();
            $table->boolean('woundcarePatient')->nullable();
            $table->boolean('woundcareCaregiver')->nullable();
            $table->boolean('soiledDisposal')->nullable();
            $table->boolean('symptomsReport')->nullable();
            $table->boolean('woundcarePerformpatient')->nullable();
            $table->boolean('woundcarePerformcaregiver')->nullable();
            $table->boolean('dressingChangebyCaregiver')->nullable();
            $table->boolean('skilledObservationAssessment')->nullable();
            $table->boolean('assessmentCare')->nullable();
            $table->boolean('assessmentChange')->nullable();
            $table->boolean('assessmentUrineTesting')->nullable();
            $table->boolean('skilledObservationAssessmentWoundCare')->nullable();
            $table->boolean('assessmentWoundDressing')->nullable();
            $table->boolean('symptomsInfection')->nullable();
            $table->string('turgorColor2')->nullable();
            $table->string('turgorTemp2')->nullable();
            $table->string('turgorColor3')->nullable();
            $table->string('turgorTemp3')->nullable();
            $table->boolean('painmanagement')->nullable();
            $table->boolean('bowelBladderTraining')->nullable();
            $table->boolean('digitalRemovalEnema')->nullable();
            $table->string('changeRadio')->nullable();
            $table->string('injection')->nullable();
            $table->string('administerMedication')->nullable();
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
        Schema::dropIfExists('nurse_section_second_two');
    }
};
