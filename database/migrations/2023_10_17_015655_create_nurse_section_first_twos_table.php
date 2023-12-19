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
        Schema::create('nurse_section_first_twos', function (Blueprint $table) {
            $table->id();
            $table->string('dyspnea')->nullable();
            $table->string('stridorq')->nullable();
            $table->string('stridor1')->nullable();
            $table->string('saturation')->nullable();
            
            $table->boolean('substernal')->nullable();
            $table->boolean('radiating')->nullable();
            $table->boolean('dull')->nullable();
            $table->boolean('aching')->nullable();
            $table->boolean('sharp')->nullable();
            $table->boolean('viselike')->nullable();
            $table->string('viselikeOther')->nullable();
            $table->string('shortnessOfBreathh')->nullable();
            $table->string('activity')->nullable();
            $table->string('rest')->nullable();
            $table->string('heartSounds')->nullable();
            $table->string('abnormal')->nullable();
            $table->string('fatigued')->nullable();
            $table->string('edema')->nullable();
            $table->string('pedalRight')->nullable();
            $table->string('pedalLeft')->nullable();
            $table->string('pitting')->nullable();
            $table->string('nonPittingSite')->nullable();
            $table->boolean('cramps')->nullable();
            $table->string('capillaryRefill')->nullable();
            $table->string('alert')->nullable();
            $table->string('rightGrasp')->nullable();
            $table->string('rightOther')->nullable();
            $table->string('leftGrasp')->nullable();
            $table->string('leftOther')->nullable();
            $table->string('pupils')->nullable();
            $table->string('otherPerral')->nullable();
            $table->string('impairment')->nullable();
            $table->string('impair')->nullable();
            $table->string('impairmentVertigo')->nullable();
            $table->string('impairmentFalls')->nullable();
            $table->string('impairmentBal')->nullable();
            $table->string('impairmentWeekness')->nullable();
            $table->string('changeInAdl')->nullable();
            $table->boolean('good')->nullable();
            $table->boolean('fair')->nullable();
            $table->boolean('poor')->nullable();
            $table->string('npo')->nullable();
            $table->boolean('difficultySwallowing')->nullable();
            $table->string('oralIntake')->nullable();
            $table->string('tubeFeeding')->nullable();
            $table->string('tube')->nullable();
            $table->string('bowelSounds')->nullable();
            $table->string('quadrantsXquadrants')->nullable();
            $table->string('abdominal')->nullable();
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
        Schema::dropIfExists('nurse_section_first_two');
    }
};
