<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkinConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skin_conditions', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            $table->integer('patientUnhealedPressureUlcer')->nullable();
            $table->boolean('recentSocAssessment')->nullable();

             $table->text('socmonth')->nullable();
             $table->text('socday')->nullable();
             $table->text('socyear')->nullable();
             $table->boolean('dischargeStage2')->nullable();
             $table->integer('socstagea1')->nullable();
             $table->integer('socstageb1')->nullable();
             $table->integer('socstagec1')->nullable();
             $table->integer('unstageable')->nullable();
             $table->integer('sloughEschar')->nullable();
             $table->integer('unstageablef1')->nullable();
             $table->integer('unstageablef2')->nullable();
             $table->integer('unstageablea1')->nullable();
             $table->integer('unstageablea2')->nullable();
             $table->integer('unstageableb1')->nullable();
             $table->integer('unstageableb2')->nullable();
             $table->integer('unstageableac1')->nullable();
             $table->integer('unstageablec2')->nullable();
             $table->integer('unstageabled1')->nullable();
             $table->integer('unstageabled2')->nullable();
             $table->integer('unstageable1')->nullable();
             $table->integer('unstageablee2')->nullable();
             $table->integer('unstageablef1Injury')->nullable();
             $table->integer('unstageablef2Injury')->nullable();
             $table->integer('pressureInjuries')->nullable();
             $table->integer('stageofUnhealedPressure')->nullable();
             $table->integer('patientStasisUlcer')->nullable();
             $table->integer('stasisUlcer')->nullable();
             $table->integer('statusofStasisUlcer')->nullable();
             $table->integer('patientSurgicalWound')->nullable();
             $table->integer('statusSurgicalWound')->nullable();
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
        Schema::dropIfExists('skin_conditions');
    }
};
