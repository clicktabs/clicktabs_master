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
        Schema::create('nursingvisitnotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('nursingvisitnotes_id')->nullable();
            $table->string('visit_date')->nullable();
            $table->string('time_in')->nullable();
            $table->string('time_out')->nullable();
            $table->string('type_of_visit_1')->nullable();
            $table->string('type_of_visit_2')->nullable();
            $table->string('type_of_visit_3')->nullable();
            $table->string('type_of_visit_4')->nullable();
            $table->string('type_of_visit_5')->nullable();
            $table->string('type_of_visit_6')->nullable();
            $table->string('Q5001')->nullable();
            $table->string('Q5002')->nullable();
            $table->string('Q5009')->nullable();
            $table->string('G0162')->nullable();
            $table->string('G0299')->nullable();
            $table->string('G0493')->nullable();
            $table->string('G0494')->nullable();
            $table->string('G0495')->nullable();
            $table->string('G0496')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('homebound_reason')->nullable();
            $table->string('temperature')->nullable();
            $table->string('temp')->nullable();
            $table->string('Pulse')->nullable();
            $table->string('pul')->nullable();
            $table->string('Respirations')->nullable();
            $table->string('respiration')->nullable();
            $table->string('Weight')->nullable();
            $table->string('blood_pressure_right')->nullable();
            $table->string('blood_pressure_left')->nullable();
            $table->string('apnea_periods')->nullable();
            $table->string('ApneaPeriods')->nullable();
            $table->string('patient_experiencing')->nullable();
            $table->string('origin')->nullable();
            $table->string('location')->nullable();
            $table->string('duration')->nullable();
            $table->string('intensity')->nullable();
            $table->string('relief_measures')->nullable();
            $table->string('demonstrated')->nullable();
            $table->string('p_other')->nullable();
            $table->string('ImplicationsCarePlan')->nullable();
            $table->string('LungSounds')->nullable();
            $table->string('f_location')->nullable();
            $table->string('wheeze_location')->nullable();
            $table->string('diminished')->nullable();
            $table->string('absent')->nullable();
            $table->string('absent_other')->nullable();
            $table->string('cough')->nullable();
            $table->string('productive_cough')->nullable();
            $table->string('amt_cough')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('nursingvisitnotes');
    }
};
