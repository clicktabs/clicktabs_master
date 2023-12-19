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
        Schema::create('otdischarge', function (Blueprint $table) {
            $table->id();
            $table->string("patientid");
            $table->string('MRN')->unique();
            $table->string('Episode');
            $table->date('VisitDate');
            $table->date('DCDate'); 
            $table->string('Physician');
            $table->string('PrimaryDX');
            $table->string('SecondaryDX');
            $table->string('PTNotified');
            $table->string('No');
            $table->string('patientcondition_stable');
            $table->string('patientcondition_improved');
            $table->string('patientcondition_unchanged');
            $table->string('patientcondition_unstable');
            $table->string('patientcondition_declined');
            $table->string('patientcondition_goalsmet');
            $table->string('patientcondition_goalsnotmet');
            $table->string('patientcondition_goalspartiallymet');
            $table->string('services_SN');
            $table->string('services_PT');
            $table->string('services_OT');
            $table->string('services_ST');
            $table->string('services_MSW');
            $table->string('services_HHA');
            $table->string('services_other');
            $table->string('caresummary'); 
            $table->string('conditionofdischarge');
            $table->string('discharge_disposition_1');
            $table->string('discharge_disposition_2');
            $table->string('discharge_disposition_3');
            $table->string('discharge_disposition_4');
            $table->string('discharge_disposition_5');
            $table->string('discharge_instructions_patient');
            $table->string('discharge_instructions_caregiver');
            $table->string('discharge_instructions_NA');
            $table->string('discharge_instructions_Other');
            $table->string('discharge_instructions_description');
            $table->string('verbalized_understanding_yes');
            $table->string('verbalized_understanding_no');
            $table->string('allservicesnotified');
            $table->string('ordersummarycompleted');
            $table->string('informationprovided');
            $table->string('physiciannotified');
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
        Schema::dropIfExists('otdischarge');
    }
};
