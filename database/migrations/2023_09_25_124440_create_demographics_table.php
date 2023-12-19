<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographics', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            // page 2
            $table->boolean('hispanic')->nullable();
            $table->boolean('mexican')->nullable();
            $table->boolean('rican')->nullable();
            $table->boolean('cuban')->nullable();
            $table->boolean('anotherHispanic')->nullable();
            $table->boolean('unableRespond')->nullable();
            $table->boolean('declines')->nullable();

            $table->boolean('white')->nullable();
            $table->boolean('black')->nullable();
            $table->boolean('americanIndian')->nullable();
            $table->boolean('asianIndian')->nullable();
            $table->boolean('chines')->nullable();
            $table->boolean('fillipino')->nullable();
            $table->boolean('japanes')->nullable();
            $table->boolean('korean')->nullable();
            $table->boolean('vietnamese')->nullable();
            $table->boolean('otherAsian')->nullable();
            $table->boolean('nativeHawaiian')->nullable();
            $table->boolean('guamanian')->nullable();
            $table->boolean('samoa')->nullable();
            $table->boolean('otherIsland')->nullable();
            // below two field repeated
            // $table->boolean('patient_unable_to_respond')->nullable();
            // $table->boolean('patient_declines')->nullable();
            $table->boolean('noa')->nullable();

            $table->boolean('nocharge')->nullable();
            $table->boolean('traditional')->nullable();
            $table->boolean('hmo')->nullable();
           
            // $table->boolean('Medicaid_traditional')->nullable();
            // $table->boolean('Medicaid_hmo')->nullable();

            $table->boolean('compensation')->nullable();
            $table->boolean('programs')->nullable();
            $table->boolean('government')->nullable();
            $table->boolean('insurance')->nullable();
            $table->boolean('privateHmo')->nullable();
            $table->boolean('selfpay')->nullable();
            $table->boolean('other')->nullable();
            $table->boolean('unknown')->nullable();
            $table->string('preferred')->nullable();
            $table->boolean('interpater')->nullable();
            $table->boolean('withDoctor')->nullable();
            $table->boolean('unDetermine')->nullable();
          

            //page 3
            $table->date('startCareDate')->nullable();
            $table->date('resumptionDate')->nullable();
            $table->boolean('rn')->nullable();
            $table->boolean('pt')->nullable();
            $table->boolean('slpSt')->nullable();
            $table->boolean('ot')->nullable();

            $table->date('assessmentDate')->nullable();
            $table->boolean('startofcare')->nullable();
            $table->boolean('resumption')->nullable();
            $table->boolean('recertification')->nullable();
            $table->boolean('otherFollow')->nullable();
            $table->boolean('transferred')->nullable();
            $table->boolean('facility')->nullable();
            $table->boolean('deathHome')->nullable();
            $table->boolean('dischargeAgency')->nullable();
            $table->date('dischargedDate')->nullable();
            $table->date('orderedDate')->nullable();
            $table->boolean('episodeDate')->nullable();
            $table->date('referralDate')->nullable();

            //page 4
            $table->text('episodeTiming')->nullable();
            $table->boolean('transportationA')->nullable();
            $table->boolean('transportationB')->nullable();
            $table->boolean('transportationC')->nullable();
            $table->boolean('transportationX')->nullable();
            $table->boolean('transportationY')->nullable();
            $table->boolean('longTerm')->nullable();
            $table->boolean('skilled')->nullable();
            $table->boolean('shortstay')->nullable();
            $table->boolean('careHospital')->nullable();
            $table->boolean('inpatient')->nullable();
            $table->boolean('psychiatric')->nullable();
            $table->boolean('otherDischarge')->nullable();
            $table->boolean('noapply')->nullable();
            $table->date('dischargeDate')->nullable();
            $table->boolean('ukUnknown')->nullable(); 
            $table->boolean('emergentCareNo')->nullable();
            $table->boolean('emergentCareYes')->nullable();
            $table->boolean('emergentCareUsedHospital')->nullable();
            $table->boolean('emergentCareUnknown')->nullable();
            $table->boolean('emergentCareImproper')->nullable();
            $table->boolean('emergentCareHypo')->nullable();
            $table->boolean('emergentCareOther')->nullable();
            $table->boolean('emergentCareOtherunknown')->nullable();
          

            //page 5
            $table->boolean('hospital')->nullable();
            $table->boolean('rehabilitation')->nullable();
            $table->boolean('nursing')->nullable();
            $table->boolean('hospice')->nullable();
            // $table->boolean('inpatient')->nullable();
            $table->boolean('remained')->nullable();
            $table->boolean('community')->nullable();
            $table->boolean('institutional')->nullable();

            $table->boolean('patientMoved')->nullable();
            $table->boolean('otherUnknown')->nullable();
            $table->boolean('reconciledNo')->nullable();
            $table->boolean('reconciledYes')->nullable();
            $table->boolean('reconciledNa')->nullable();
            $table->boolean('subsequentProvider')->nullable();
            $table->boolean('providerSubsequent')->nullable();
            $table->boolean('electronicHealth')->nullable();
            $table->boolean('healthInformation')->nullable();
            $table->boolean('inPerson')->nullable();
            
            $table->boolean('paperBased')->nullable();
            $table->boolean('otherMethods')->nullable();
            $table->boolean('reconciledMedication')->nullable();
            $table->boolean('record')->nullable();
            $table->boolean('exchange')->nullable();
            $table->boolean('verbal')->nullable();
            $table->boolean('routePaperBased')->nullable();
            $table->boolean('routeOther')->nullable();
           
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
        Schema::dropIfExists('demographics');
    }
}
