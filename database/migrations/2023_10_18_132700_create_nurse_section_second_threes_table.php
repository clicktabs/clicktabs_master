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
        Schema::create('nurse_section_second_threes', function (Blueprint $table) {
            $table->id();
             $table->boolean('insulinPrep')->nullable();
            $table->boolean('insulinAdminister')->nullable();
            $table->boolean('diabeticAssessment')->nullable();
            $table->boolean('teachDiabeticCare')->nullable();
            $table->boolean('teachAdminister')->nullable();
            $table->boolean('teachIvs')->nullable();
            $table->boolean('teachClysis')->nullable();
            $table->boolean('ostomyCare')->nullable();
            $table->boolean('conduitCare')->nullable();
            $table->boolean('teachcare')->nullable();
            $table->boolean('tachcare1')->nullable();
            $table->boolean('teachCare2')->nullable();
            $table->boolean('AdministerTubeFeedings')->nullable();
            $table->string('administerTracheostomy')->nullable();
            $table->boolean('administerTreatment')->nullable();
            $table->boolean('teachTerminallyIll')->nullable();
            $table->boolean('observeAssessMedication')->nullable();
            $table->boolean('teachMedicationPurpose')->nullable();
            $table->boolean('teachMedicationSideEffect')->nullable();
            $table->boolean('teachMedicationAdministration')->nullable();
            $table->boolean('evaluateDiet')->nullable();
            $table->boolean('evaluateFluidIntake')->nullable();
            $table->boolean('dietTeaching')->nullable();
            $table->boolean('sssessAdlsFunctionality')->nullable();
            $table->boolean('teachSafetyPrecautions')->nullable();
            $table->boolean('teachSkinCarePressureInjury')->nullable();
            $table->boolean('psychologicalIntervention')->nullable();
            $table->boolean('posturalDrainage')->nullable();
            $table->boolean('prenatalAssessment')->nullable();
           
            
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
        Schema::dropIfExists('nurse_section_second_threes');
    }
};
