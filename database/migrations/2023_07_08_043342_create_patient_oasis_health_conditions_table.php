<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisHealthConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_health_conditions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();
            $table->text('riskHospitalization')->nullable();
            $table->text('painEffectonSleep')->nullable();
            $table->text('participationRehabilitation')->nullable();
            $table->text('dayDayActivities')->nullable();
            $table->text('had_any_falls_since')->nullable();
            $table->text('noInjuri21')->nullable();
            $table->text('injuryskin21')->nullable();
            $table->text('majorinjury21')->nullable();
            $table->text('patient_dyspneic')->nullable();
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('nutritionalApproache')->nullable();
            $table->text('parenteralFeeding')->nullable();
            $table->text('feedingTube')->nullable();
            $table->text('mechanicallyAltered')->nullable();
            $table->text('therapeuticDiet')->nullable();
            $table->text('noneofAbobe')->nullable();
            $table->text('feedingEating')->nullable();
            $table->text('patientUnhealedPressureUlcer')->nullable();
            $table->text('patientUnhealedPressureUlcercheck')->nullable();
            $table->text('socmonth23')->nullable();
            $table->text('socday23')->nullable();
            $table->text('socyear23')->nullable();
            $table->text('socstage223')->nullable();
            $table->text('socstage323')->nullable();
            $table->text('socstage423')->nullable();
            $table->text('unstageable1')->nullable();
            $table->text('unstageable223')->nullable();
            $table->text('unstageablea223')->nullable();
            $table->text('unstageable323')->nullable();
            $table->text('unstageableb223')->nullable();
            $table->text('unstageablea423')->nullable();
            $table->text('unstageablec223')->nullable();
            $table->text('unstageabled223')->nullable();
            $table->text('unstageabled2223')->nullable();
            $table->text('unstageablee223')->nullable();
            $table->text('unstageablee2223')->nullable();
            $table->text('unstageablef223')->nullable();
            $table->text('unstageablef2223')->nullable();
            $table->text('pressureInjuries')->nullable();
            $table->text('stageofUnhealedPressure')->nullable();
            $table->text('patientStasisUlcer')->nullable();
            $table->text('statusofStasisUlcer')->nullable();
            $table->text('patientSurgicalWound')->nullable();
            $table->text('StatusSurgicalWound')->nullable();
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
        Schema::dropIfExists('patient_oasis_health_conditions');
    }
}
