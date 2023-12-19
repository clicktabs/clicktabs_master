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
        Schema::create('nurse_section_firsts', function (Blueprint $table) {
            $table->id();
            $table->string('visitDate')->nullable();
            $table->string('timeIn')->nullable();
            $table->string('timeOut')->nullable();
            $table->string('visitType')->nullable();
            $table->boolean('q5001')->nullable();
            $table->boolean('q5002')->nullable();
            $table->boolean('q5009')->nullable();
            $table->boolean('g0162')->nullable();
            $table->boolean('g0299')->nullable();
            $table->boolean('g0493')->nullable();
            $table->boolean('g0494')->nullable();
            $table->boolean('g0495')->nullable();
            $table->boolean('g0496')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('homeboundReason')->nullable();
            $table->string('temperature')->nullable();
            $table->string('temp')->nullable();
            $table->string('pulse')->nullable();
            $table->string('pul')->nullable();
            $table->string('respirations')->nullable();
            $table->string('irregularRespi')->nullable();
            $table->string('weight')->nullable();
            $table->string('pressureRight')->nullable();
            $table->string('pressureLeft')->nullable();
            $table->string('apneaPeriodstext')->nullable();
            $table->string('apneaPeriods')->nullable();
            $table->string('apneaPeriods1')->nullable();
       
            $table->string('apneaPeriods2')->nullable();
            $table->string('patientExperiencing')->nullable();
            $table->string('origin')->nullable();
            $table->string('location')->nullable();
            $table->string('duration')->nullable();
            $table->string('intensity')->nullable();
            $table->string('reliefMeasures')->nullable();
            $table->string('demonstrated')->nullable();
            $table->boolean('changeVitalSig')->nullable();
            $table->string('pOther')->nullable();
            $table->string('implicationsCarePlan')->nullable();
            $table->string('lungSounds')->nullable();
            $table->string('fLocation')->nullable();
            $table->string('wheezeLocation')->nullable();
            $table->boolean('diminished')->nullable();
            $table->boolean('absent')->nullable();
            $table->string('absentOther')->nullable();
            $table->string('cough')->nullable();
            $table->string('productiveCough')->nullable();
            $table->string('amtCough')->nullable();
            $table->string('hemoptysisFrequency')->nullable();
            $table->string('hemoptysisFrequencyAmount')->nullable();
            $table->string('respiratoryStatus')->nullable();                    
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
        Schema::dropIfExists('nurse_section_firsts');
    }
};
