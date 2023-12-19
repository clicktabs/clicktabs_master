<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisInverviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_inverviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();
            $table->text('symptomPresence')->nullable();
            $table->text('symptomFrequency')->nullable();
            $table->text('littleInterest')->nullable();
            $table->text('phqInterview')->nullable();
            $table->text('totalScore')->nullable();
            $table->text('socialIsolation')->nullable();
            $table->text('psychiatricSymptoms')->nullable();
            $table->text('behaviorSymptoms')->nullable();            
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
        Schema::dropIfExists('patient_oasis_inverviews');
    }
}
