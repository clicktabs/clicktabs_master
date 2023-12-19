<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCognitiveMoodBehaviorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cognitive_mood_behaviors', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            // page 7 
            $table->integer('mentalStatus')->nullable();
            $table->integer('repetition')->nullable();            
            $table->integer('temporal')->nullable();
            $table->integer('month')->nullable();
            $table->integer('day')->nullable();
            $table->integer('recall')->nullable();
            $table->integer('recallBlue')->nullable();
            $table->integer('recallBed')->nullable();

            // page 8

            $table->integer('addScore')->nullable();
            $table->integer('acute')->nullable();
            $table->integer('inattention')->nullable();
            $table->integer('disorganized')->nullable();
            $table->integer('altered')->nullable();
            $table->boolean('alert')->nullable();
            $table->boolean('prompting')->nullable();
            $table->boolean('assistance')->nullable();
            $table->boolean('considerable')->nullable();
            $table->boolean('dependent')->nullable();
            $table->integer('whenConfused')->nullable();
            $table->integer('whenAnxious')->nullable();

            // page 9
            $table->integer('symptom')->nullable();
            $table->integer('frequency')->nullable();

            $table->boolean('interest')->nullable();
            $table->boolean('hopeless')->nullable();
            $table->boolean('trouble')->nullable();
            $table->boolean('tired')->nullable();
            $table->boolean('appetite')->nullable();
            $table->boolean('bad')->nullable();
            $table->boolean('concentrating')->nullable();
            $table->boolean('speaking')->nullable();
            $table->boolean('thoughts')->nullable();
            $table->text('totalScore')->nullable();
            $table->integer('socialIsolation')->nullable();

            // page 10
            
            $table->boolean('memoryDeficit')->nullable();
            $table->boolean('impaired')->nullable();
            $table->boolean('disruption')->nullable();
            $table->boolean('aggression')->nullable();
            $table->boolean('infantile')->nullable();
            $table->boolean('delusional')->nullable();
            $table->boolean('noa')->nullable();
            $table->boolean('never')->nullable();
            $table->boolean('lessMonth')->nullable();
            $table->boolean('onesMonth')->nullable();
            $table->boolean('severalTimes')->nullable();
            $table->boolean('severalWeek')->nullable();
            $table->boolean('daily')->nullable();

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
        Schema::dropIfExists('cognitive_mood_behaviors');
    }
}
