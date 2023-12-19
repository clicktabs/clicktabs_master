<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_id')->nullable();

            $table->text('primary_reason')->nullable();
            $table->boolean('hypertension')->default(false);
            $table->boolean('hypotension')->default(false);
            $table->boolean('cardiac')->default(false);
            $table->boolean('respiratory')->default(false);
            $table->boolean('osteoporosis')->default(false);
            $table->boolean('fractures')->default(false);
            $table->string('cancer_site')->nullable();
            $table->boolean('infection')->default(false);
            $table->boolean('immunosuppressed')->default(false);
            $table->string('open_wound_etiology')->nullable();
            $table->boolean('falls_without_injury')->default(false);
            $table->boolean('falls_with_injury')->default(false);
            $table->boolean('hospitalizations')->default(false);
            $table->boolean('er_visits')->default(false);
            $table->boolean('recent_surgeries')->default(false);
            $table->text('pertinent_details')->nullable();
            $table->boolean('surgery')->default(false);
            $table->boolean('procedures')->default(false);
            $table->string('expected_in_future')->nullable();
            $table->string('expected_in_future_explanation')->nullable();
            $table->string('temperature')->nullable();
            $table->string('temp_or')->nullable();
            $table->string('temp_tat')->nullable();
            $table->string('pulse_apical')->nullable();
            $table->string('pulse_radial')->nullable();
            $table->string('pulse_brachial')->nullable();
            $table->string('pulse_carotid')->nullable();
            $table->string('pulse_ri')->nullable();
            $table->string('pulse_oximetry_rest')->nullable();
            $table->string('pulse_oximetry_activity')->nullable();
            $table->string('pulse_oximetry_activity_specify')->nullable();
            $table->string('bp_left_rest')->nullable();
            $table->string('bp_right_rest')->nullable();
            $table->string('bp_sitting_lying_rest')->nullable();
            $table->string('bp_standing_rest')->nullable();
            $table->string('bp_left_activity')->nullable();
            $table->string('bp_right_activity')->nullable();
            $table->string('bp_sitting_lying_activity')->nullable();
            $table->string('bp_standing_activity')->nullable();
            $table->string('bp_left_post_activity')->nullable();
            $table->string('bp_right_post_activity')->nullable();
            $table->string('bp_sitting_lying_post_activity')->nullable();
            $table->string('bp_standing_post_activity')->nullable();
            $table->string('respirations')->nullable();
            $table->string('respirations_ri')->nullable();
            $table->string('apnea_periods')->nullable();
            $table->string('respirations_or')->nullable();
            $table->boolean('pneumonia')->default(false);
            $table->boolean('tetanus')->default(false);
            $table->boolean('shingles')->default(false);
            $table->boolean('hepatitis_c')->default(false);
            $table->string('other_immunizations')->nullable();
            $table->string('immunization_needs')->nullable();
            $table->boolean('covid_initial_vaccine')->default(false);
            $table->boolean('covid_booster')->default(false);
            $table->string('vaccination_booster')->nullable();
            $table->text('immunization_restrictions')->nullable();

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
        Schema::dropIfExists('patient_oases');
    }
}
