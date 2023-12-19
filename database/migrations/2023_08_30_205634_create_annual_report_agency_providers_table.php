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
        Schema::create('annual_report_agency_providers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('agencyprovider_Name')->nullable();
            $table->date('agencyproviderMUI_Review')->nullable();
            $table->integer('agencyproviderMUI_categories')->nullable();
            $table->integer('agencyprovidertotalnumber_MUI')->nullable();
            $table->integer('agencyprovidersameperiod_MUI')->nullable();
            $table->integer('annualReport_Attempted_suicide_1')->nullable();
            $table->integer('annualReport_Attempted_suicide_2')->nullable();
            $table->integer('annualReport_Attempted_suicide_3')->nullable();
            $table->integer('annualReport_Attempted_Death-Non-Accidental')->nullable();
            $table->integer('annualReport_Attempted_Death-Non-Accidental_1')->nullable();
            $table->integer('annualReport_Attempted_Death-Non-Accidental_2')->nullable();
            $table->integer('annualReport_Attempted_Exploitation')->nullable();
            $table->integer('annualReport_Attempted_Exploitation_1')->nullable();
            $table->integer('annualReport_Attempted_Exploitation_2')->nullable();
            $table->integer('annualReport_Attempted_Failure')->nullable();
            $table->integer('annualReport_Attempted_Failure_1')->nullable();
            $table->integer('annualReport_Attempted_Failure_2')->nullable();
            $table->integer('annualReport_Attempted_Enforcement')->nullable();
            $table->integer('annualReport_Attempted_Enforcement_1')->nullable();
            $table->integer('annualReport_Attempted_Enforcement_2')->nullable();
            $table->integer('annualReport_Attempted_Medical_Emergency')->nullable();
            $table->integer('annualReport_Attempted_Medical_Emergency_1')->nullable();
            $table->integer('annualReport_Attempted_Medical_Emergency_2')->nullable();
            $table->integer('annualReport_Attempted_Misappropriation')->nullable();
            $table->integer('annualReport_Attempted_Misappropriation_1')->nullable();
            $table->integer('annualReport_Attempted_Misappropriation_2')->nullable();
            $table->integer('annualReport_Attempted_Missing_Individual')->nullable();
            $table->integer('annualReport_Attempted_Missing_Individual_1')->nullable();
            $table->integer('annualReport_Attempted_Missing_Individual_2')->nullable();
            $table->integer('annualReport_Attempted_Neglect')->nullable();
            $table->integer('annualReport_Attempted_Neglect_1')->nullable();
            $table->integer('annualReport_Attempted_Neglect_2')->nullable();
            $table->integer('annualReport_Attempted_PeertoPeer')->nullable();
            $table->integer('annualReport_Attempted_PeertoPeer_1')->nullable();
            $table->integer('annualReport_Attempted_PeertoPeer_2')->nullable();
            $table->integer('annualReport_Attempted_Physical_Abuse')->nullable();
            $table->integer('annualReport_Attempted_Physical_Abuse_1')->nullable();
            $table->integer('annualReport_Attempted_Physical_Abuse_2')->nullable();
            $table->integer('annualReport_Attempted_Prohibited')->nullable();
            $table->integer('annualReport_Attempted_Prohibited_1')->nullable();
            $table->integer('annualReport_Attempted_Prohibited_2')->nullable();
            $table->integer('annualReport_Rights_ Code_Violation')->nullable();
            $table->integer('annualReport_Rights_ Code_Violation_1')->nullable();
            $table->integer('annualReport_Rights_ Code_Violation_2')->nullable();
            $table->integer('annualReport_Rights_Sexual_Abuse')->nullable();
            $table->integer('annualReport_Rights_Sexual_Abuse_1')->nullable();
            // $table->integer('annnualReport_Rights_Sexual_Abuse_2')->nullable();
            $table->integer('annualReport_Rights_Significant_Injury')->nullable();
            $table->integer('annualReport_Rights_Significant_Injury_1')->nullable();
            $table->integer('annualReport_Rights_Significant_Injury_2')->nullable();
            $table->integer('annualReport_Rights_Unapproved_Behavioral')->nullable();
            $table->integer('annualReport_Rights_Unapproved_Behavioral_1')->nullable();
            $table->integer('annualReport_Rights_Unapproved_Behavioral_2')->nullable();
            $table->integer('annualReport_Rights_Unanticipated_Hospitalization')->nullable();
            $table->integer('annualReport_Rights_Unanticipated_Hospitalization_1')->nullable();
            $table->integer('annualReport_Rights_Unanticipated_Hospitalization_2')->nullable();
            $table->string('annualReport_Rights_Verbal_Abuse')->nullable();
            $table->string('annualReport_Rights_Verbal_Abuse_1')->nullable();
            $table->string('annualReport_Rights_Verbal_Abuse_2')->nullable();
            $table->string('annualReport_Rights_Explain')->nullable();
            $table->string('annualReport_Rights_AgencyTrends')->nullable();
            $table->string('annualReport_Rights_Description_action')->nullable();
            $table->string('annualReport_Rights_previouse_year')->nullable();
            $table->string('annualReport_Rights_preventive')->nullable();
            $table->string('annualReport_Rights_individualswith5')->nullable();
            $table->string('annualReport_Rights_MUI_types')->nullable();
            $table->char('annualReport_Rights_actionplansPreventives')->nullable();
            $table->date('annualReport_Rights_datatheAction')->nullable();
            $table->date('annualReport_Rights_Datereview')->nullable();
            $table->string('annualReport_Rights_nameofpersonComplete')->nullable();
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
        Schema::dropIfExists('annual_report_agency_providers');
    }
};
