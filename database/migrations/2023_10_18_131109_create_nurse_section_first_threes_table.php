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
        Schema::create('nurse_section_first_threes', function (Blueprint $table) {
            $table->id();
             $table->string('lastBm')->nullable();
            $table->boolean('incontience')->nullable();
            $table->boolean('diarrhea')->nullable();
            $table->boolean('constipation')->nullable();
            $table->boolean('impaction')->nullable();
            $table->string('administered')->nullable();
            $table->string('tolerated')->nullable();
            $table->string('toleratedOther')->nullable();
            $table->string('urineColor')->nullable();
            $table->string('urineOdor')->nullable();
            $table->boolean('urineBurning')->nullable();
            $table->boolean('urineHesitancy')->nullable();
            $table->boolean('nocturia')->nullable();
            $table->boolean('oliguria')->nullable();
            $table->boolean('retention')->nullable();
            $table->string('incontinenceOccurs')->nullable();
            $table->string('cardiopulmonaryType')->nullable();
            $table->string('french')->nullable();
            $table->string('bulbinflated')->nullable();
            $table->string('dateChange')->nullable();
            $table->string('irrigated')->nullable();
            $table->string('lm')->nullable();
            $table->string('lmOther')->nullable();
            $table->string('endocrineBlood')->nullable();
            $table->boolean('patient')->nullable();
            $table->boolean('caregiver')->nullable();
            $table->boolean('nurse')->nullable();
            $table->string('reportedByOther')->nullable();
            $table->string('bloodSugarThisVisit')->nullable();
            $table->string('checkByNurse')->nullable();
            $table->boolean('glycosuria')->nullable();
            $table->boolean('polyuria')->nullable();
            $table->boolean('polydipsia')->nullable();
            $table->boolean('sweats')->nullable();
            $table->boolean('polyphagia')->nullable();
            $table->boolean('weak')->nullable();
            $table->boolean('faint')->nullable();
            $table->boolean('stupor')->nullable();
            $table->boolean('byPatient')->nullable();
            $table->boolean('bycaregiver')->nullable();
            $table->boolean('byNurse')->nullable();
            $table->string('byOther')->nullable();
            $table->string('longStanding')->nullable();
            $table->string('patient_id')->nullable();
            $table->string('startDate')->nullable();
            $table->string('throughDate')->nullable();
            $table->string('medicationDosage')->nullable();
            $table->string('strength')->nullable();
            $table->string('route')->nullable();
            $table->string('frequency')->nullable();
            $table->string('classification')->nullable();
            $table->string('type')->nullable();
            $table->string('physician')->nullable();            
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
        Schema::dropIfExists('nurse_section_first_threes');
    }
};
