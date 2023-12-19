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
        Schema::create('nurse_section_second_fours', function (Blueprint $table) {
            $table->id();
             $table->boolean('postPartumassessment')->nullable();
            $table->boolean('teachInfantChildCare')->nullable();
            $table->string('childCareOther')->nullable();
            $table->string('instructionsPatientResponse')->nullable();
            $table->boolean('carePlanReviewed')->nullable();
            $table->boolean('carePatientInvolvement')->nullable();
            $table->boolean('carePlanOutcomeAchieved')->nullable();
            $table->boolean('carePlanPrnOrderObtained')->nullable();
            $table->string('planForNextVisit')->nullable();
            $table->string('nextPhysicianVisit')->nullable();
            $table->string('approximateNextVisitDate')->nullable();
            $table->string('dischargePlanning')->nullable();
           
            $table->string('dischargePlan')->nullable();
            $table->string('billableSuppliesRecorded')->nullable();
            $table->boolean('physicianProvider')->nullable();
            $table->boolean('physicianPt')->nullable();
            $table->boolean('physicianOt')->nullable();
            $table->boolean('physicianSt')->nullable();
            $table->boolean('physicianSw')->nullable();
            $table->boolean('physicianSn')->nullable();
            $table->string('careCoordinationPhysicianOther')->nullable();
            $table->string('aide')->nullable();
            $table->string('supervisoryVisit')->nullable();
            $table->string('patientSatisfied')->nullable();
            $table->string('explain')->nullable();
            $table->string('aideCarePlan')->nullable();
            $table->string('aideCarePlanUpdated')->nullable();
            $table->string('observationOf')->nullable();
            $table->string('teachingTrainingOf')->nullable();
            $table->string('nurseSignatureTitle')->nullable();
            $table->string('nurseSignatureDate')->nullable();
            $table->string('patientSignature')->nullable();
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
        Schema::dropIfExists('nurse_section_second_fours');
    }
};
