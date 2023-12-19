<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id')->nullable();

            $table->text('primary_reason')->nullable();

            $table->boolean('hypertension')->nullable();
            $table->boolean('hypotension')->nullable();
            $table->boolean('cardiac')->nullable();
            $table->boolean('respiratory')->nullable();
            $table->boolean('osteoporosis')->nullable();
            $table->boolean('fractures')->nullable();
            $table->string('cancerSite')->nullable();
            $table->boolean('infection')->nullable();
            $table->boolean('immunosuppressed')->nullable();

            $table->string('openWoundEtiology')->nullable();
            $table->boolean('fallsWithoutInjury')->nullable();
            $table->boolean('fallsWithInjury')->nullable();
            $table->boolean('hospitalizations')->nullable();
            $table->boolean('erVisits')->nullable();
            $table->boolean('recentSurgeries')->nullable();
            $table->text('pertinentDetails')->nullable();
            $table->boolean('surgery')->nullable();
            $table->boolean('procedures')->nullable();
            $table->integer('expectedFuture')->nullable();
            $table->string('expectedFutureExplanation')->nullable();
            $table->string('temperature')->nullable();
            $table->string('tempOr')->nullable();
            $table->integer('tempTat')->nullable();
            $table->string('pulseApical')->nullable();
            $table->string('radial')->nullable();
            $table->string('brachial')->nullable();
            $table->string('carotid')->nullable();
            $table->string('ri')->nullable();
            $table->string('oximetryRest')->nullable();
            $table->string('oximetryActivity')->nullable();
            $table->string('activitySpecify')->nullable();
            $table->string('leftRest')->nullable();
            $table->string('rightRest')->nullable();
            $table->string('sittingLyingRest')->nullable();
            $table->string('standingRest')->nullable();

            $table->string('leftActivity')->nullable();
            $table->string('rightActivity')->nullable();
            $table->string('sittingLyingActivity')->nullable();
            $table->string('standingActivity')->nullable();
            $table->string('leftPostActivity')->nullable();
            $table->string('rightPostActivity')->nullable();
            $table->string('sittingLyingPostActivity')->nullable();
            $table->string('standingPostActivity')->nullable();
            $table->string('respirations')->nullable();
            $table->integer('respirationsRi')->nullable();        
            $table->string('apneaPeriods')->nullable();            
            $table->string('respirationsOr')->nullable();
            $table->boolean('pneumonia')->nullable();
            $table->boolean('tetanus')->nullable();
            $table->boolean('shingles')->nullable();
            $table->boolean('hepatitisC')->nullable();
            $table->string('otherImmunizations')->nullable();
            $table->string('immunizationNeeds')->nullable();
            $table->boolean('covidVaccineInitial')->nullable();
            $table->boolean('covidVaccineBooster')->nullable();
            $table->string('vaccinationBooster')->nullable();
            

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
        Schema::dropIfExists('patient_histories');
    }
}
