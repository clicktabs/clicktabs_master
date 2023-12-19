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
        Schema::create('nursingassessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('lastName')->nullable();
            $table->string('firstName')->nullable();
            $table->string('middleInitial')->nullable();
            $table->string('passportId')->nullable();
            $table->integer('ssn')->nullable();
            $table->string('contactPerson')->nullable();
            $table->string('contactPhone')->nullable();
            $table->string('lsDwelling')->nullable();
            $table->string('otherDwelling')->nullable();
            $table->string('Floor')->nullable();
            $table->string('Elevator')->nullable();
            $table->string('LivesAlone')->nullable();
            $table->string('individualsLiving')->nullable();
            $table->string('services')->nullable();
            $table->string('Hospital')->nullable();
            $table->string('hospitalAddress')->nullable();
            $table->string('hospitalizedFrom')->nullable();
            $table->string('hospitalizedTo')->nullable();
            $table->string('Diagnoses')->nullable();
            $table->string('hospitalContact')->nullable();
            $table->string('hospitalPhone')->nullable();
            $table->string('patientDirect')->nullable();
            $table->string('Relationship')->nullable();
            $table->string('patientHeight')->nullable();
            $table->string('patientWeight')->nullable();
            $table->string('patientWeightLoss')->nullable();
            $table->string('amountLost')->nullable();
            $table->boolean('Speech_1')->nullable();
            $table->boolean('Speech_2')->nullable();
            $table->boolean('Speech_3')->nullable();
            $table->boolean('Sight_1')->nullable();
            $table->boolean('Sight_2')->nullable();
            $table->boolean('Sight_3')->nullable();
            $table->boolean('Hearing_1')->nullable();
            $table->boolean('Hearing_2')->nullable();
            $table->boolean('Hearing_3')->nullable();
            $table->boolean('Hand_1')->nullable();
            $table->boolean('Hand_2')->nullable();
            $table->boolean('Hand_3')->nullable();
            $table->boolean('Upper_1')->nullable();
            $table->boolean('Upper_2')->nullable();
            $table->boolean('Upper_3')->nullable();
            $table->boolean('Lower_1')->nullable();
            $table->boolean('Lower_2')->nullable();
            $table->boolean('Lower_3')->nullable();
            $table->boolean('Respiratory_1')->nullable();
            $table->boolean('Respiratory_2')->nullable();
            $table->boolean('Respiratory_3')->nullable();
            $table->boolean('Cardiac_1')->nullable();
            $table->boolean('Cardiac_2')->nullable();
            $table->boolean('Cardiac_3')->nullable();
            $table->boolean('Circulatory_1')->nullable();
            $table->boolean('Circulatory_2')->nullable();
            $table->boolean('Circulatory_3')->nullable();
            $table->string('describeImpact')->nullable();
            $table->string('IsPatientAlert')->nullable();
            $table->string('HistoryOfTuberculosis')->nullable();
            $table->string('Pulmonary')->nullable();
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
        Schema::dropIfExists('nursingassessments');
    }
};
