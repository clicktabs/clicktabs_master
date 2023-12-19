<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_diagnoses', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            $table->text('parimaryOne')->nullable();
            $table->text('primaryAllow')->nullable();
            $table->boolean('primaryAllowValue0')->nullable();
            $table->boolean('primaryAllowValue1')->nullable();
            $table->boolean('primaryAllowValue2')->nullable();
            $table->boolean('primaryAllowValue3')->nullable();
            $table->boolean('primaryAllowValue4')->nullable();
            
            $table->text('otherdig')->nullable();

            $table->text('otherDiagnosisb')->nullable();
            $table->boolean('otherDiagnosisb0')->nullable();
            $table->boolean('otherDiagnosisb1')->nullable();
            $table->boolean('otherDiagnosisb2')->nullable();
            $table->boolean('otherDiagnosisb3')->nullable();
            $table->boolean('otherDiagnosisb4')->nullable();

            $table->text('otherDiagnosisCHeading')->nullable();            
            $table->text('otherDiagnosisc')->nullable();

            $table->boolean('otherDiagnosisc0')->nullable();
            $table->boolean('otherDiagnosisc1')->nullable();
            $table->boolean('otherDiagnosisc2')->nullable();
            $table->boolean('otherDiagnosisc3')->nullable();
            $table->boolean('otherDiagnosisc4')->nullable();

            $table->text('otherDiagnosisDHeding')->nullable();   
            $table->text('otherDiagnosisd')->nullable();   

            $table->boolean('otherDiagnosisd0')->nullable();
            $table->boolean('otherDiagnosisd1')->nullable();
            $table->boolean('otherDiagnosisd2')->nullable();
            $table->boolean('otherDiagnosisd3')->nullable();
            $table->boolean('otherDiagnosisd4')->nullable();

            $table->text('otherDiagnosisEHeading')->nullable();   
            $table->text('otherDiagnosise')->nullable();   

            $table->boolean('otherDiagnosise0')->nullable();
            $table->boolean('otherDiagnosise1')->nullable();
            $table->boolean('otherDiagnosise2')->nullable();
            $table->boolean('otherDiagnosise3')->nullable();
            $table->boolean('otherDiagnosise4')->nullable();

            $table->text('otherDiagnosisFHeading')->nullable();   
            $table->text('otherDiagnosisf')->nullable();   
            
            $table->boolean('otherDiagnosisf0')->nullable();
            $table->boolean('otherDiagnosisf1')->nullable();
            $table->boolean('otherDiagnosisf2')->nullable();
            $table->boolean('otherDiagnosisf3')->nullable();
            $table->boolean('otherDiagnosisf4')->nullable();

            $table->text('activeDiogonisis')->nullable();
            $table->text('diabetesMellitus')->nullable();
            $table->text('diogonisisNoa')->nullable();
            
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
        Schema::dropIfExists('active_diagnoses');
    }
}
