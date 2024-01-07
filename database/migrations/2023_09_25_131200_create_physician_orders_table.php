<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicianOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physician_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();

            $table->text('physicianName')->nullable();
            $table->text('patientName')->nullable();
            $table->text('physicianAddress')->nullable();
            $table->text('physicianAddress2')->nullable();
            $table->text('physicianPrimaryPhone')->nullable();
            $table->text('physicianFax')->nullable();
            $table->text('physicianAlternatePhone')->nullable();
            $table->text('physicianSpeciality')->nullable();
            $table->text('physicianDateOfBirth')->nullable();
            $table->text('physicianSsn')->nullable();
            $table->text('physicianCurrentDate')->nullable();
            $table->string('physicianGender')->nullable();
            $table->integer('phsicianSkilled')->nullable();
            $table->integer('phsicianHealthAide')->nullable();
            $table->integer('phsicianTherapy')->nullable();
            $table->integer('phsicianOther')->nullable();
            $table->text('primaryDiagnosis')->nullable();
            $table->text('icd9')->nullable();

            $table->text('otherDiagnosis1')->nullable();
            $table->text('icd101')->nullable();
            $table->text('otherDiagnosis2')->nullable();
            $table->text('icd102')->nullable();
            $table->text('otherDiagnosis3')->nullable();
            $table->text('icd103')->nullable();
            $table->text('otherDiagnosis4')->nullable();
            $table->text('icd104')->nullable();
            $table->text('otherDiagnosis5')->nullable();
            $table->text('icd105')->nullable();
            $table->text('newMedicationDate')->nullable();
            $table->text('oldMedicationsDate')->nullable();
            $table->text('changeMedicationDate')->nullable();
            $table->text('mdSignature')->nullable();
            $table->text('mdSignatureDate')->nullable();
            $table->text('nurseSignature')->nullable();
            $table->text('nurseSignatureDate')->nullable();


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
        Schema::dropIfExists('physician_orders');
    }
};
