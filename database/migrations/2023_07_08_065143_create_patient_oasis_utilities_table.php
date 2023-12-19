<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisUtilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_utilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();
            $table->text('hearing')->nullable();
            $table->text('vision')->nullable();
            $table->text('healthLiteracy')->nullable();
            $table->text('mentalStatus')->nullable();
            $table->text('repetitionofThreeWords')->nullable();
            $table->text('temporalOrientation')->nullable();
            $table->text('whatMonth')->nullable();
            $table->text('whatDay')->nullable();
            $table->text('ableToRecall')->nullable();
            $table->text('ableToRecalBlue')->nullable();
            $table->text('ableToRecalBed')->nullable();
            $table->text('addScore')->nullable();
            $table->text('evidenceAcuteChange')->nullable();
            $table->text('behaviorPresent')->nullable();
            $table->text('behaviorContinuePresent')->nullable();
            $table->text('behaviorFluctuatePresent')->nullable();
            $table->text('cognitiveFunctioning')->nullable();
            $table->text('whenConfused')->nullable();
            $table->text('whenAnxious')->nullable();
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
        Schema::dropIfExists('patient_oasis_utilities');
    }
}
