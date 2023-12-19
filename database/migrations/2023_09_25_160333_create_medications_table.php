<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('patient_history_id')->nullable();
            $table->string('patient_id')->nullable();
            $table->string('antipsychoticNo')->nullable();
            $table->string('antipsychoticYes')->nullable();
            $table->string('anticoagulantNo')->nullable();
            $table->string('anticoagulantYes')->nullable();
            $table->string('antibioticNo')->nullable();
            $table->string('antibioticYes')->nullable();
            $table->string('opioidNo')->nullable();
            $table->string('opioidYes')->nullable();
            $table->string('antiplateletNo')->nullable();
            $table->string('antiplateletYes')->nullable();
            $table->string('hypoglycemicNo')->nullable();
            $table->string('hypoglycemicYes')->nullable();
            $table->string('noneofAbobeNo')->nullable();
            $table->string('noneofAbobeYes')->nullable();
            $table->string('pharmacy')->nullable();

            $table->string('drugReview')->nullable();
            $table->string('agencyPhysician')->nullable();
            $table->string('agencyCompletePhysician')->nullable();
            $table->string('instructionSpecial')->nullable();

            $table->string('long_standing')->nullable();
            $table->string('start_date')->nullable();
            $table->string('through_date')->nullable();
            $table->string('medication_dosage')->nullable();
            $table->string('strength')->nullable();
            $table->string('route')->nullable();
            $table->string('frequency')->nullable();
            $table->string('classification')->nullable();
            $table->string('type')->nullable();
            $table->string('physician')->nullable();
            $table->string('status')->nullable();

            $table->string('independently')->nullable();
            $table->string('medication')->nullable();
            $table->string('correctTimes')->nullable();
            $table->string('administered')->nullable();
            $table->string('prescribed')->nullable();
            
            $table->string('managIndependently')->nullable();
            $table->string('managInjectable')->nullable();
            $table->string('managCorrectTimes')->nullable();
            $table->string('managAdministered')->nullable();
            $table->string('managNa')->nullable();


            $table->string('modified_by')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
            // table field name requered
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medications');
    }
}
