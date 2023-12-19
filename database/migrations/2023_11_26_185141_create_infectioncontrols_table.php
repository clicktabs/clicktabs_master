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
        Schema::create('infection_controls', function (Blueprint $table) {
            $table->id();
                   //infection-modal
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->unsignedBigInteger('primaryPhysician_id')->nullable();
            $table->unsignedBigInteger('caseManager_id')->nullable();
            $table->unsignedBigInteger('infectionReportedBy_id')->nullable();
            $table->date('dateReported')->nullable();
            $table->string('time')->nullable();
            $table->unsignedBigInteger('infectionReportedTo_id')->nullable();
            $table->string('ii_status')->nullable();
            $table->date('date_of_Onset')->nullable();
            $table->boolean('dateSet')->nullable();
            $table->string('infectionDescription')->nullable();
            $table->string('infectionType')->nullable();
            $table->string('infectionSite')->nullable();
            $table->string('patientLocation')->nullable();
            $table->string('Communicable')->nullable();
            $table->integer('PhysicianNotified')->nullable();
            $table->integer('labsOrdered')->nullable();
            $table->integer('PatientHospitalized')->nullable();
            $table->integer('CultureTaken')->nullable();
            $table->unsignedBigInteger('iatcPhysician_id')->nullable();
            $table->date('date_1')->nullable();
            $table->string('time_1')->nullable();
            $table->date('date_2')->nullable();
            $table->string('time_2')->nullable();
            $table->date('date_3')->nullable();
            $table->string('time_3')->nullable();
            $table->string('dateNotified')->nullable();
            $table->string('timedNotified')->nullable();
            $table->text('notes')->nullable();
            $table->text('treatmentNotes')->nullable();
            $table->string('infectionFollow')->nullable();
            $table->string('follow-UpRequired')->nullable();
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
        Schema::dropIfExists('infectioncontrols');
    }
};
