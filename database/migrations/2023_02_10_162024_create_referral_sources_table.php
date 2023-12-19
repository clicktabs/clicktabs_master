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
        Schema::create('referral_sources', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('referral_id');
            $table->string('nursing_therapy_assignment')->nullable();
            $table->string('med_sup_eqp')->nullable();
            $table->string('admitted')->nullable();
            $table->string('staff_assigned_add')->nullable();
            $table->string('reason_for_addmitted')->nullable();
            $table->string('recomendation_pt')->default(0);
            $table->string('recomendation_ot')->default(0);
            $table->string('recomendation_slp')->default(0);
            $table->string('recomendation_msw')->default(0);
            $table->string('recomendation_md')->default(0);
            $table->string('recomendation_other')->nullable();
            $table->string('agency_staff_signature')->nullable();
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
        Schema::dropIfExists('referral_sources');
    }
};
