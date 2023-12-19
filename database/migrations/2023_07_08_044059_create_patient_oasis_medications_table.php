<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_medications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();
            $table->text('antipsychotic')->nullable();
            $table->text('anticoagulant')->nullable();
            $table->text('antibiotic')->nullable();
            $table->text('opioid')->nullable();
            $table->text('antiplatelet')->nullable();
            $table->text('hypoglycemic')->nullable();
            $table->text('noneofAbobe25')->nullable();
            $table->text('drugRegimenReview')->nullable();
            $table->text('agencyContactPhysician')->nullable();
            $table->text('agencyContactCompletePhysician')->nullable();
            $table->text('patientReceivedInstructionSpecialPrecautions')->nullable();
            $table->text('managementOralMedication')->nullable();
            $table->text('managInjeMedi')->nullable();
            $table->text('cancerTreatments')->nullable();
            $table->text('respiratoryTherapies')->nullable();
            $table->text('other26')->nullable();
            $table->text('cancerTreatments27')->nullable();
            $table->text('respiratoryTherapies27')->nullable();
            $table->text('other27')->nullable();
            $table->text('includeAnyDates')->nullable();
            $table->text('influenzaVaccineReceived')->nullable();
            $table->text('numberOfTherapy')->nullable();
            $table->text('notappli27')->nullable();
            $table->text('template')->nullable();
            $table->text('newInterventions')->nullable();
            $table->text('goalTemplete')->nullable();
            $table->text('newgoals')->nullable();
            $table->integer('modified_by')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('patient_oasis_medications');
    }
}
