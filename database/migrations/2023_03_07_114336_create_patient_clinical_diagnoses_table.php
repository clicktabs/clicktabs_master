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
        Schema::create('patient_clinical_diagnoses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('primary_diagnosis_code')->nullable();
            $table->string('primary_diagnosis_name')->nullable();
            $table->string('severity')->nullable();
            $table->json('other_diagnosis_code')->nullable();
            $table->json('other_diagnosis_name')->nullable();
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
        Schema::dropIfExists('patient_clinical_diagnoses');
    }
};
