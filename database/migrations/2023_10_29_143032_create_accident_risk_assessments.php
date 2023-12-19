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
        Schema::create('accident_risk_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('patient_name')->nullable();
            $table->string('clinician')->nullable();
            $table->integer('consciousness_1')->nullable();
            $table->integer('consciousness_2')->nullable();
            $table->integer('consciousness_3')->nullable();
            $table->integer('falls_history_1')->nullable();
            $table->integer('falls_history_2')->nullable();
            $table->integer('falls_history_3')->nullable();
            $table->integer('ambulatory_status_1')->nullable();
            $table->integer('ambulatory_status_2')->nullable();
            $table->integer('ambulatory_status_3')->nullable();
            $table->integer('vision_status_1')->nullable();
            $table->integer('vision_status_2')->nullable();
            $table->integer('vision_status_3')->nullable();
            $table->integer('gait_balance_1')->nullable();
            $table->integer('gait_balance_2')->nullable();
            $table->integer('gait_balance_3')->nullable();
            $table->integer('gait_balance_4')->nullable();
            $table->integer('gait_balance_5')->nullable();
            $table->integer('gait_balance_6')->nullable();
            $table->integer('gait_balance_7')->nullable();
            $table->integer('blood_pressure_1')->nullable();
            $table->integer('blood_pressure_2')->nullable();
            $table->integer('blood_pressure_3')->nullable();
            $table->integer('medications_1')->nullable();
            $table->integer('medications_2')->nullable();
            $table->integer('medications_3')->nullable();
            $table->integer('medications_4')->nullable();
            $table->integer('diseases_1')->nullable();
            $table->integer('diseases_2')->nullable();
            $table->integer('diseases_3')->nullable();
            $table->integer('total_score')->nullable();
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
        Schema::dropIfExists('accident_risk_assessments');
    }
};
