<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisBladderBowelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_bladder_bowels', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('patient_oasis_id')->nullable();
          $table->text('urinaryTractInfection')->nullable();
          $table->text('urinaryCatheterPresence')->nullable();
          $table->text('bowelIncontinenceFrequency')->nullable();
          $table->text('ostomyforBowelElimination')->nullable();
          $table->text('parimaryOne')->nullable();
          $table->text('primaryAllow')->nullable();
          $table->text('primaryAllowValue')->nullable();
          $table->text('otherDiagnosisOne')->nullable();
          $table->text('otherDiagnosisOneValue')->nullable();
          $table->text('otherDiagnosisTwo')->nullable();
          $table->text('otherDiagnosisTwoValue')->nullable();
          $table->text('otherDiagnosisThree')->nullable();
          $table->text('otherDiagnosisThreeValue')->nullable();
          $table->text('otherDiagnosisFour')->nullable();
          $table->text('otherDiagnosisFourValue')->nullable();
          $table->text('otherDiagnosisFive')->nullable();
          $table->text('otherDiagnosisFiveValue')->nullable();
          $table->text('activeDiogonisis')->nullable();
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
        Schema::dropIfExists('patient_oasis_bladder_bowels');
    }
}
