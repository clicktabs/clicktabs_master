<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisDischargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_discharges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();
            $table->text('roleLeftRight18')->nullable();
            $table->text('sitlying18')->nullable();
            $table->text('lyingToStting18')->nullable();
            $table->text('sitToStand18')->nullable();
            $table->text('chairtobed18')->nullable();
            $table->text('toiletTranfer18')->nullable();
            $table->text('carTransfer18')->nullable();
            $table->text('walk10feet18')->nullable();
            $table->text('walk50feet18')->nullable();
            $table->text('walk150feet18')->nullable();
            $table->text('walk10uneven18')->nullable();
            $table->text('setpcurb18')->nullable();
            $table->text('step418')->nullable();
            $table->text('patientWheelchair18')->nullable();
            $table->text('walk50feettwo18')->nullable();
            $table->text('type_of_wheelchair18')->nullable();
            $table->text('while5018')->nullable();
            $table->text('type_of_wheelchair_15018')->nullable();
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
        Schema::dropIfExists('patient_oasis_discharges');
    }
}
