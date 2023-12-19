<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHearingVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hearing_visions', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();

            $table->boolean('hearingAdequate')->nullable();
            $table->boolean('hearingMinimal')->nullable();
            $table->boolean('hearingModerate')->nullable();
            $table->boolean('hearingHighlyImpaired')->nullable();
            $table->boolean('visionAdequate')->nullable();
            $table->boolean('visionImpaired')->nullable();
            $table->boolean('visionHighlyImpaired')->nullable();
            $table->boolean('visionSeverelyImpaired')->nullable();
            $table->boolean('healthLiteracyNever')->nullable();
            $table->boolean('healthLiteracyRarely')->nullable();
            $table->boolean('healthLiteracySometimes')->nullable();
            $table->boolean('healthLiteracyOften')->nullable();
            $table->boolean('healthLiteracyAlways')->nullable();
            $table->boolean('healthLiteracyPatient')->nullable();
            $table->boolean('healthLiteracyPatientUnable')->nullable();

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
        Schema::dropIfExists('hearing_visions');
    }
}
