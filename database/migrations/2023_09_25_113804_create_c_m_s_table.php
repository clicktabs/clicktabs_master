<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_s', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            
            $table->integer('hiClaimNo')->nullable();
            $table->date('startOfCareDate')->nullable();
            $table->date('certiPeriodFrom')->nullable();
            $table->date('certiPeriodTo')->nullable();
            $table->integer('medicalRecordNo')->nullable();
            $table->text('name')->nullable();
            $table->text('address')->nullable();
            $table->text('gender')->nullable();
            $table->text('dateOfBirth')->nullable();
            $table->text('phone')->nullable();
            $table->text('riskProfile')->nullable();
            $table->text('clinicalManager')->nullable();
            $table->text('branchInfo')->nullable();
            $table->text('branchAddress')->nullable();
            $table->text('clinicPhone')->nullable();
            $table->text('providerNumber')->nullable();
            $table->text('medicare')->nullable();
            $table->text('fax')->nullable();
            $table->text('diagonsisCode')->nullable();
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->text('secDiagnosisCode')->nullable();
            $table->text('secDescription')->nullable();
            $table->text('mentalStatus')->nullable();
            $table->text('supplies')->nullable();
            $table->text('prognosis')->nullable();
            $table->text('safety')->nullable();
            $table->text('nutritional')->nullable();
            $table->text('limitations')->nullable();
            $table->text('other')->nullable();
            $table->text('activities')->nullable();
            $table->text('medications')->nullable();
            $table->text('substance')->nullable();
            $table->text('reaction')->nullable();
            $table->text('treatments')->nullable();
            $table->text('nurseSign')->nullable();
            $table->text('signDate')->nullable();

            $table->boolean('certify')->nullable();
            $table->boolean('fine')->nullable();
            $table->text('physician')->nullable();
            $table->text('physicianAddress')->nullable();
            $table->text('physicianPhone')->nullable();
            $table->text('npi')->nullable();
            $table->text('physicianFax')->nullable();
            $table->text('physicianSign')->nullable();
            $table->date('physicianSignDate')->nullable();

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
        Schema::dropIfExists('c_m_s');
    }
}
