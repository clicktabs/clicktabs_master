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
        Schema::create('nurse_section_first_fours', function (Blueprint $table) {
            $table->id();
            $table->string('pharmacy')->nullable();
            $table->string('status')->nullable();
            $table->string('dosageFrequency')->nullable();
            $table->boolean('onAllergic')->nullable();
            $table->boolean('onMedication')->nullable();
            $table->boolean('onDrugInteraction')->nullable();
            $table->boolean('onFoodInteractions')->nullable();
            $table->string('rxRfillBy')->nullable();
            $table->boolean('expirationDates')->nullable();
            $table->boolean('onContraindications')->nullable();
            $table->string('onPillCount')->nullable();
            $table->boolean('ampleSupply')->nullable();
            $table->boolean('disposalOfSharps')->nullable();
            $table->string('disposalOfSharpsOther')->nullable();
            $table->boolean('durationOfTherapy')->nullable();
            $table->string('missedDoses')->nullable();
            $table->boolean('administeredPatient1')->nullable();
            $table->boolean('byCaregiver2')->nullable();
            $table->boolean('byNurse1')->nullable();
            $table->string('byOther1')->nullable();
            $table->string('medicationThisVisit')->nullable();
            $table->string('typeOfLine')->nullable();
            $table->string('central')->nullable();
            $table->string('implantedPortLocation')->nullable();
            $table->string('catheterLength')->nullable();
            $table->string('evidenceOfInfection')->nullable();
            $table->string('numberOfLumens')->nullable();
            $table->string('dressingChange')->nullable();
            $table->string('performedbypatient')->nullable();
            $table->boolean('performedbycaregiver')->nullable();
            $table->boolean('performedbynurse')->nullable();
            $table->string('performedbynurseother')->nullable();
            $table->boolean('capperformedbypatient')->nullable();
            $table->boolean('capperformedbycaregiver')->nullable(); 
            $table->boolean('capperformedbynurse')->nullable();
            $table->string('capchangeperformedbyother')->nullable();
            $table->boolean('tubingByPatient')->nullable();
            $table->boolean('tubingByCaregiver')->nullable();
            $table->boolean('tubingByNurse')->nullable();
            $table->string('tubingchangedByOther')->nullable();
            $table->boolean('flush')->nullable();
            $table->string('saline')->nullable();
            $table->string('heparin')->nullable();
            $table->string('ml1')->nullable();
            $table->boolean('mlInstructed')->nullable();
            $table->boolean('mlPatient')->nullable();
            $table->boolean('caregiverInfusion')->nullable();
            $table->boolean('managementInfusionPatient')->nullable();
            $table->boolean('managementInfusionCaregiver')->nullable();
            $table->boolean('managementInfusionDemonstrates')->nullable();
            $table->boolean('managementInfusionVerbalizesProper')->nullable();
            $table->string('comments')->nullable();
           
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
        Schema::dropIfExists('nurse_section_first_fours');
    }
};
