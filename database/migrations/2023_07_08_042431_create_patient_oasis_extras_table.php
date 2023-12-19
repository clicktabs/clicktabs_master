<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_extras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();

            $table->text('payment_source')->nullable();
            $table->text('ethnicity')->nullable();
            $table->text('race')->nullable();
            $table->text('preferred_language')->nullable();
            $table->text('interpater_use')->nullable();
            $table->text('communicate_with_doctor')->nullable();

            $table->text('start_care_date')->nullable();
            $table->text('resumption_of_care_date')->nullable();
            $table->text('discipline')->nullable();
            $table->text('date_assessment_completed')->nullable();
            $table->text('completed_reason')->nullable();
            $table->text('discharged_date')->nullable();
            $table->text('physician_ordered_date')->nullable();
            $table->text('episode_timeing_based_date')->nullable();

            $table->text('referral_date')->nullable();
            $table->text('EpisodeTiming')->nullable();
            $table->text('transportation')->nullable();
            $table->text('inpatientFacilities')->nullable();
            $table->text('inpatientDischargeDate')->nullable();
            $table->text('emergentCare')->nullable();
            $table->text('emergentCareReason')->nullable();
            $table->text('inpatientFacility')->nullable();
            $table->text('dischargeDisposition')->nullable();
            $table->text('listSubsequentProvider')->nullable();
            $table->text('currentReconciledMedication')->nullable();
            $table->text('reconciled_medication_list')->nullable();
            $table->text('routeCurrentReconciled')->nullable();

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
        Schema::dropIfExists('patient_oasis_extras');
    }
}
