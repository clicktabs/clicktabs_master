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
        Schema::create('referral_diagnoses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('referral_id');
            $table->string('primary_diagnosis')->nullable();
            $table->string('secondary_diagnosis')->nullable();
            $table->date('surgery_date')->nullable();
            $table->string('signafiq_med_surg_history')->nullable();
            $table->string('prognosis')->nullable();
            $table->string('therapeutic_goals')->nullable();
            $table->string('diagnosis_known_by')->nullable();
            $table->string('not_kown_explain')->nullable();
            $table->string('provide_orders')->nullable();
            $table->string('physician_provider')->nullable();
            $table->string('clinic')->nullable();
            $table->string('clinic_phone')->nullable();
            $table->string('patient_essentially_homebound')->nullable();
            $table->string('home_health_services')->nullable();
            $table->string('condition_for_which_patient')->nullable();
            $table->string('skilled_nursing')->nullable();
            $table->string('pt')->default(0);
            $table->string('ot')->default(0);
            $table->string('slp')->default(0);
            $table->string('mss')->default(0);
            $table->string('other')->default(0);
            $table->string('physician_signature')->nullable();
            $table->date('physician_signature_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referral_diagnoses');
    }
};
