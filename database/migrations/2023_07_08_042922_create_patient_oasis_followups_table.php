<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisFollowupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_followups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();
            $table->text('followEat')->nullable();
            $table->text('livesAlone')->nullable();
            $table->text('followHygiene')->nullable();
            $table->text('followToileting')->nullable();
            $table->text('followshower')->nullable();
            $table->text('followUpperBodyDressing')->nullable();
            $table->text('followLowerBodyDressing')->nullable();
            $table->text('followFootwear')->nullable();
            $table->text('dischargeEating')->nullable();
            $table->text('dischargeOralHygiene')->nullable();
            $table->text('dischargeToileting')->nullable();
            $table->text('dischargebatheself')->nullable();
            $table->text('dischargeUpperbodyDressing')->nullable();
            $table->text('dischargeLowerbodyDressing')->nullable();
            $table->text('dischargeFootware')->nullable();
            $table->text('rollleft1')->nullable();
            $table->text('rollleft2')->nullable();
            $table->text('sitToLying1')->nullable();
            $table->text('sitToLying2')->nullable();
            $table->text('lyingtoSitting1')->nullable();
            $table->text('lyingtoSitting2')->nullable();
            $table->text('sittoStand1')->nullable();
            $table->text('sittoStand2')->nullable();
            $table->text('charToBad1')->nullable();
            $table->text('charToBad2')->nullable();
            $table->text('toiletTransfer1')->nullable();
            $table->text('toiletTransfer2')->nullable();
            $table->text('carTransfer1')->nullable();
            $table->text('carTransfer2')->nullable();
            $table->text('walk10feet1')->nullable();
            $table->text('walk10feet2')->nullable();
            $table->text('walk150feet1')->nullable();
            $table->text('walk150feet2')->nullable();
            $table->text('curbstep1')->nullable();
            $table->text('curbstep2')->nullable();
            $table->text('setp41')->nullable();
            $table->text('setp42')->nullable();
            $table->text('step121')->nullable();
            $table->text('step122')->nullable();
            $table->text('picking1')->nullable();
            $table->text('picking2')->nullable();
            $table->text('patientUseWheelchair')->nullable();
            $table->text('while501')->nullable();
            $table->text('while502')->nullable();
            $table->text('typeWheelchair')->nullable();
            $table->text('while1501')->nullable();
            $table->text('while1502')->nullable();
            $table->text('type_of_wheelchair_150')->nullable();
            $table->text('roleLeftRight')->nullable();
            $table->text('siteToLying17')->nullable();
            $table->text('lyingtosit17')->nullable();
            $table->text('sitToStand17')->nullable();
            $table->text('chairToBad17')->nullable();
            $table->text('toiletTranfer17')->nullable();
            $table->text('carTransfer17')->nullable();
            $table->text('walk10feet17')->nullable();
            $table->text('walk50feet17')->nullable();
            $table->text('walk150feet17')->nullable();
            $table->text('walk10feetuneven17')->nullable();
            $table->text('step1curb17')->nullable();
            $table->text('step417')->nullable();
            $table->text('step1217')->nullable();
            $table->text('patient_use_wheelchair')->nullable();
            $table->text('wheelchair5017')->nullable();
            $table->text('wheelchair15017')->nullable();
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
        Schema::dropIfExists('patient_oasis_followups');
    }
}
