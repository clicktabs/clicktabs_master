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
        Schema::create('patient_demographics', function (Blueprint $table) {
            $table->id();
            $table->boolean('hispanic_origin')->nullable();
            $table->boolean('ethnicity_mexican')->nullable();
            $table->boolean('ethnicity_puerto_rican')->nullable();
            $table->boolean('ethnicity_cuban')->nullable();
            $table->boolean('ethnicity_other')->nullable();
            $table->boolean('ethnicity_unable_to_respond')->nullable();
            $table->boolean('ethnicity_declines_to_respond')->nullable();
            $table->boolean('race_white')->nullable();
            $table->boolean('race_black_african_american')->nullable();
            $table->boolean('race_american_indian_alaska_native')->nullable();
            $table->boolean('race_asian_indian')->nullable();
            $table->boolean('race_chinese')->nullable();
            $table->boolean('race_filipino')->nullable();
            $table->boolean('race_japanese')->nullable();
            $table->boolean('race_korean')->nullable();
            $table->boolean('race_vietnamese')->nullable();
            $table->boolean('race_other_asian')->nullable();
            $table->boolean('race_native_hawaiian')->nullable();
            $table->boolean('race_guamanian_chamorro')->nullable();
            $table->boolean('race_samoan')->nullable();
            $table->boolean('race_other_pacific_islander')->nullable();
            $table->boolean('race_unable_to_respond')->nullable();
            $table->boolean('race_declines_to_respond')->nullable();
            $table->boolean('race_none_of_the_above')->nullable();
            $table->boolean('payment_source_none')->nullable();
            $table->boolean('payment_source_medicare_fee_for_service')->nullable();
            $table->boolean('payment_source_medicare_managed_care')->nullable();
            $table->boolean('payment_source_medicaid_fee_for_service')->nullable();
            $table->boolean('payment_source_medicaid_managed_care')->nullable();
            $table->boolean('payment_source_workers_compensation')->nullable();
            $table->boolean('payment_source_title_programs')->nullable();
            $table->boolean('payment_source_other_government')->nullable();
            $table->boolean('payment_source_private_insurance')->nullable();
            $table->boolean('payment_source_private_managed_care')->nullable();
            $table->boolean('payment_source_self_pay')->nullable();
            $table->boolean('payment_source_other')->nullable();
            $table->boolean('payment_source_unknown')->nullable();
            $table->string('preferred_language')->nullable();
            $table->boolean('interpreter_required')->nullable();
            $table->boolean('unable_to_determine_interpreter')->nullable();

            //page 3
            $table->date('start_care_date')->nullable();
            $table->date('resumption_of_care_date')->nullable();
            $table->boolean('discipline_rn')->nullable();
            $table->boolean('discipline_pt')->nullable();
            $table->boolean('discipline_slp_st')->nullable();
            $table->boolean('discipline_ot')->nullable();
            $table->date('date_assessment_completed')->nullable();
            $table->boolean('completed_reason_start_of_care')->nullable();
            $table->boolean('completed_reason_resumption_of_care')->nullable();
            $table->boolean('completed_reason_recertification')->nullable();
            $table->boolean('completed_reason_other_follow_up')->nullable();
            $table->boolean('completed_reason_transferred_inpatient_not_discharged')->nullable();
            $table->boolean('completed_reason_transferred_inpatient_discharged')->nullable();
            $table->boolean('completed_reason_death_at_home')->nullable();
            $table->boolean('completed_reason_discharged_from_agency')->nullable();
            $table->date('discharged_date')->nullable();
            $table->date('physician_ordered_date')->nullable();
            $table->boolean('episode_timeing_based_date')->nullable();
            $table->date('referral_date')->nullable();

            //page 4
            $table->string('episode_timing')->nullable();
            $table->boolean('transportation_medical_appointments')->nullable();
            $table->boolean('transportation_non_medical')->nullable();
            $table->boolean('transportation_none')->nullable();
            $table->boolean('transportation_unable_to_respond')->nullable();
            $table->boolean('transportation_declines_to_respond')->nullable();
            $table->boolean('inpatient_facility_long_term_nursing')->nullable();
            $table->boolean('inpatient_facility_skilled_nursing')->nullable();
            $table->boolean('inpatient_facility_short_stay_acute_hospital')->nullable();
            $table->boolean('inpatient_facility_long_term_care_hospital')->nullable();
            $table->boolean('inpatient_facility_inpatient_rehabilitation')->nullable();
            $table->boolean('inpatient_facility_psychiatric_hospital')->nullable();
            $table->boolean('inpatient_facility_other')->nullable();
            $table->boolean('inpatient_facility_na')->nullable();
            $table->date('inpatient_discharge_date')->nullable();
            $table->boolean('emergent_care_no')->nullable();
            $table->boolean('emergent_care_without_hospital_admission')->nullable();
            $table->boolean('emergent_care_with_hospital_admission')->nullable();
            $table->boolean('emergent_care_unknown')->nullable();
            $table->boolean('emergent_care_reason_medication_administration')->nullable();
            $table->boolean('emergent_care_reason_hypoglycemia_hyperglycemia')->nullable();
            $table->boolean('emergent_care_reason_other')->nullable();
            $table->boolean('emergent_care_reason_unknown')->nullable();

            //page 5
            $table->string('inpatient_facility')->nullable();
            $table->string('discharge_disposition')->nullable();
            $table->string('provision_current_reconciled_medication_list_transfer')->nullable();
            $table->string('provision_current_reconciled_medication_list_discharge')->nullable();
            $table->string('route_current_reconciled_medication_list_subsequent_provider')->nullable();
            $table->string('provision_current_reconciled_medication_list_patient')->nullable();
            $table->string('route_current_reconciled_medication_list_patient')->nullable();

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
        Schema::dropIfExists('patient_demographics');
    }
};
