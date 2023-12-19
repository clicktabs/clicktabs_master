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
        Schema::create('oasis_e_dath_sec_ajnoq', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('dopca')->nullable();
            $table->string('assessmentCompleted_Month')->nullable();
            $table->string('assessmentCompleted_Day')->nullable();
            $table->string('assessmentCompleted_Year')->nullable();
            $table->string('inpatientFacility')->nullable();
            $table->string('inpatientFacility_1')->nullable();
            $table->string('Discharge')->nullable();
            $table->text('certifyingPhysician')->nullable();
            $table->string('dischargeMonth')->nullable();
            $table->string('dischargeDay')->nullable();
            $table->string('dischargeYear')->nullable();
            $table->string('EmergentCare')->nullable();
            $table->string('improperMedication')->nullable();
            $table->string('Hyperglycemia')->nullable();
            $table->string('aboveReasons')->nullable();
            $table->string('reasonUnknown')->nullable();
            $table->string('wifpa')->nullable();
            $table->text('admissionReason')->nullable();
            $table->string('facilityName_1')->nullable();
            $table->string('patientLast')->nullable();
            $table->string('patientFirst')->nullable();
            $table->string('patientMiddle')->nullable();
            $table->string('patientID')->nullable();
            $table->string('pcrmltsp')->nullable();
            $table->string('electronicHealth')->nullable();
            $table->string('healthInformation')->nullable();
            $table->string('Verbal')->nullable();
            $table->string('paperBased')->nullable();
            $table->string('otherMethods')->nullable();
            // Fields from Section J
            $table->string('pfsrwmr')->nullable();
            $table->integer('Boxes')->nullable();
            $table->integer('exceptMajor')->nullable();
            $table->integer('jointDislocations')->nullable();
            $table->boolean('fallWithInjury')->nullable();
            $table->text('fallInjury')->nullable();
            // Fields from Section N
            $table->string('MedicationIntervention')->nullable();
            // Fields from Section O
            $table->string('Influenza')->nullable();
            $table->string('fluseason')->nullable();
            $table->text('fluseason_specify')->nullable();
            // Fields from Section Q
            $table->string('fpi')->nullable();
            $table->string('dimrtmp')->nullable();
            $table->string('itmamp')->nullable();
            $table->string('itppu')->nullable();
            $table->string('putpmwh')->nullable();
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
        Schema::table('oasis_e_dath_sec_a', function (Blueprint $table) {
            $table->dropColumn(['patient_id', 'schedule_id']);
        });
    }
};
