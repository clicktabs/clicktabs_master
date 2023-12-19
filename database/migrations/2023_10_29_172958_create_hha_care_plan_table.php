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
        Schema::create('hha_care_plan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('clientName')->nullable();
            $table->string('associatedCare')->nullable();
            $table->string('primaryDiagnosis')->nullable();
            $table->string('diet')->nullable();
            $table->string('mrn')->nullable();
            $table->date('visitdate')->nullable();
            $table->string('hhaFrequency')->nullable();
            $table->string('secondaryDiagnosis')->nullable();
            $table->string('allergies')->nullable();
            $table->string('dnr_1')->nullable();
            $table->boolean('no')->nullable();

            // Add fields for Vital Sign Parameters
            $table->string('greater_1')->nullable();
            $table->string('greater_2')->nullable();
            $table->string('greater_3')->nullable();
            $table->string('greater_4')->nullable();
            $table->string('greater_5')->nullable();
            $table->string('greater_6')->nullable();
            $table->string('les_1')->nullable();
            $table->string('les_2')->nullable();
            $table->string('les_3')->nullable();
            $table->string('les_4')->nullable();
            $table->string('les_5')->nullable();
            $table->string('les_6')->nullable();
            $table->boolean('na')->nullable();

            // Add fields for Safety Precautions
            $table->boolean('anticoagulantPrecautions')->nullable();
            $table->boolean('keepPathwayClear')->nullable();
            $table->boolean('properPositionDuring')->nullable();
            $table->boolean('sharpsSafety')->nullable();
            $table->boolean('supportDuring')->nullable();
            $table->boolean('emergencyPlan')->nullable();
            $table->boolean('keepSide')->nullable();
            $table->boolean('safetyinADLs')->nullable();
            $table->boolean('slowPosition')->nullable();
            $table->boolean('useOf')->nullable();
            $table->boolean('fallPrecautions')->nullable();
            $table->boolean('neutropenicPrecautions')->nullable();
            $table->boolean('seizurePrecautions')->nullable();
            $table->boolean('standardPrecautions')->nullable();
            $table->boolean('precautions')->nullable();
            $table->string('Other')->nullable();

            // Add fields for Functional Limitations
            $table->boolean('Amputation')->nullable();
            $table->boolean('Hearing')->nullable();
            $table->boolean('Ambulation')->nullable();
            $table->boolean('Dyspnea')->nullable();
            $table->boolean('Bowel')->nullable();
            $table->boolean('Paralysis')->nullable();
            $table->boolean('Speech')->nullable();
            $table->string('other_1')->nullable();

            // Add fields for Activities Permitted
            $table->boolean('Complete')->nullable();
            $table->boolean('Transfer')->nullable();
            $table->boolean('Independent')->nullable();
            $table->boolean('Wheelchair')->nullable();
            $table->boolean('bedRest')->nullable();
            $table->boolean('Exercise')->nullable();
            $table->boolean('Crutches')->nullable();
            $table->boolean('Walker')->nullable();
            $table->boolean('tolerated')->nullable();
            $table->boolean('weight')->nullable();
            $table->boolean('Cane')->nullable();
            $table->string('cane_Other')->nullable();
            $table->string('status')->nullable();


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
        Schema::dropIfExists('hha_care_plan');
    }
};
