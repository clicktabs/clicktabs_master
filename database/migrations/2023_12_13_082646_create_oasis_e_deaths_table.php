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
        Schema::create('oasis_e_deaths', function (Blueprint $table) {
            $table->id();
            $table->string('dopca', 55)->nullable();
            $table->string('assessmentCompleted_Month', 20)->nullable();
            $table->string('assessmentCompleted_Day', 20)->nullable();
            $table->string('assessmentCompleted_Year', 20)->nullable();
            $table->boolean('inpatientFacility')->nullable();
            $table->boolean('inpatientFacility_1')->nullable();
            $table->boolean('Discharge')->nullable();
            $table->text('certifyingPhysician')->nullable();
            $table->string('dischargeMonth', 15)->nullable();
            $table->string('dischargeDay', 15)->nullable();
            $table->string('dischargeYear', 15)->nullable();
            $table->string('EmergentCare', 20)->nullable();
            $table->boolean('improperMedication')->nullable();
            $table->boolean('Hyperglycemia')->nullable();
            $table->boolean('aboveReasons')->nullable();
            $table->boolean('reasonUnknown')->nullable();
            $table->string('wifpa', 15)->nullable();
            $table->text('admissionReason')->nullable();
            $table->string('facilityName_1')->nullable();
            $table->string('patientLast', 20)->nullable();
            $table->string('patientFirst', 20)->nullable();
            $table->string('patientMiddle', 20)->nullable();
            $table->string('patientID', 20)->nullable();
            $table->string('pcrmltsp', 15)->nullable();
            $table->boolean('electronicHealth')->nullable();
            $table->boolean('healthInformation')->nullable();
            $table->boolean('Verbal')->nullable();
            $table->boolean('paperBased')->nullable();
            $table->boolean('otherMethods')->nullable();
            $table->string('pfsrwmr', 10)->nullable();
            $table->string('Boxes', 10)->nullable();
            $table->string('exceptMajor', 10)->nullable();
            $table->string('jointDislocations', 10)->nullable();
            $table->string('fallWithInjury', 10)->nullable();
            $table->text('fallInjury')->nullable();
            $table->string('MedicationIntervention', 15)->nullable();
            $table->string('Influenza', 15)->nullable();
            $table->string('fluseason', 15)->nullable();
            $table->text('fluseason_specify')->nullable();
            $table->string('fpi', 10)->nullable();
            $table->string('dimrtmp', 10)->nullable();
            $table->string('itmamp', 10)->nullable();
            $table->string('itppu', 10)->nullable();
            $table->string('putpmwh', 15)->nullable();
            $table->string('admissionDate', 10)->nullable();
            $table->string('admissiontransferDate', 10)->nullable();
            $table->string('TransferPlanned', 10)->nullable();
            $table->string('reasonforAdmission')->nullable();
            $table->string('TransferReason', 50)->nullable();
            $table->string('reference_reason', 55)->nullable();
            $table->string('TransferredTo', 10)->nullable();
            $table->text('TransferReason_1')->nullable();
            $table->boolean('HHAdisciplines')->nullable();
            $table->boolean('SNdisciplines')->nullable();
            $table->boolean('PTdisciplines')->nullable();
            $table->boolean('OTdisciplines')->nullable();
            $table->boolean('STdisciplines')->nullable();
            $table->boolean('MSWdisciplines')->nullable();
            $table->boolean('Aidedisciplines')->nullable();
            $table->boolean('Otherdisciplines')->nullable();
            $table->string('OtherHHAdisciplines', 50)->nullable();
            $table->boolean('SNtransfer')->nullable();
            $table->boolean('PTtransfer')->nullable();
            $table->boolean('OTtransfer')->nullable();
            $table->boolean('STtransfer')->nullable();
            $table->boolean('MSWtransfer')->nullable();
            $table->boolean('Aidetransfer')->nullable();
            $table->boolean('Othertransfer')->nullable();
            $table->string('OtherTeamMembers', 20)->nullable();
            $table->string('agencyPolicy', 10)->nullable();
            $table->string('RepresentativePP', 10)->nullable();
            $table->string('explain')->nullable();
            $table->string('documentation', 10)->nullable();
            $table->string('currentPlan', 10)->nullable();
            $table->string('currentPlanOfCare', 10)->nullable();
            $table->string('copyOrder', 10)->nullable();
            $table->string('copyOther_1', 10)->nullable();
            $table->string('copyOther_2', 55)->nullable();
            $table->string('dateofdeath', 10)->nullable();
            $table->string('PlanOfCare', 10)->nullable();
            $table->string('PlanOfCare_1', 55)->nullable();
            $table->string('relationshiptoPatient', 55)->nullable();
            $table->string('pptd', 10)->nullable();
            $table->string('personName', 55)->nullable();
            $table->string('Relationship', 30)->nullable();
            $table->string('RelationName', 30)->nullable();
            $table->string('RelationName_1', 30)->nullable();
            $table->string('RelationName_2', 30)->nullable();
            $table->string('RelationName_3', 30)->nullable();
            $table->boolean('involvedSN')->nullable();
            $table->boolean('involvedPT')->nullable();
            $table->boolean('involvedOT')->nullable();
            $table->boolean('involvedST')->nullable();
            $table->boolean('involvedMSW')->nullable();
            $table->boolean('involvedAide')->nullable();
            $table->boolean('teamMembers')->nullable();
            $table->boolean('otherMembers')->nullable();
            $table->string('otherMembers_1', 55)->nullable();
            $table->string('representative', 10)->nullable();
            $table->string('pharmaceutical_1', 55)->nullable();
            $table->string('pharmaceutical', 10)->nullable();
            $table->string('medications', 15)->nullable();
            $table->string('TransferDeath', 15)->nullable();
            $table->text('TransferDeath_1')->nullable();
            $table->boolean('malled')->nullable();
            $table->boolean('emalled')->nullable();
            $table->boolean('faxed')->nullable();
            $table->string('faxed_1', 10)->nullable();
            $table->string('Othercertifying', 55)->nullable();
            $table->string('Datecertifying', 55)->nullable();
            $table->string('secondaryPhysician_1', 55)->nullable();
            $table->string('secondaryPhysician_date', 30)->nullable();
            $table->string('primaryCare', 55)->nullable();
            $table->string('primaryCare_date', 30)->nullable();
            $table->string('anyRepresentative', 55)->nullable();
            $table->string('anyRepresentative_date', 30)->nullable();
            $table->string('personCompleting', 55)->nullable();
            $table->string('personCompleting_date', 20)->nullable();
            $table->string('personCompleting_time', 20)->nullable();
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
        Schema::dropIfExists('oasis_e_deaths');
    }
};
