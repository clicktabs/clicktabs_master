<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwallowingNutritionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swallowing_nutritionals', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();

            $table->boolean('parenteral')->nullable();
            $table->boolean('feeding')->nullable();
            $table->boolean('mechanically')->nullable();
            $table->boolean('therapeutic')->nullable();
            $table->boolean('noa')->nullable();
            $table->boolean('parenteralNo')->nullable();
            $table->boolean('parenteralYes')->nullable();
            $table->boolean('feedingTubeNo')->nullable();
            $table->boolean('feedingTubeYes')->nullable();
            $table->boolean('mechanicallyAlteredNo')->nullable();
            $table->boolean('mechanicallyAlteredYes')->nullable();
            $table->boolean('therapeuticDietNo')->nullable();
            $table->boolean('therapeuticDietYes')->nullable();
            $table->boolean('noneofAbobeNo')->nullable();
            $table->boolean('noneofAbobeYes')->nullable();
            $table->boolean('feedingEatingNo')->nullable();
            $table->boolean('feedingEatingYes')->nullable();
            $table->boolean('feedingEatingUnable')->nullable();
            $table->boolean('feedingEatingAble')->nullable();
            $table->boolean('feedingEatingUnableGastrostomy')->nullable();
            $table->boolean('feedingEatingUnableNutrients')->nullable();
            
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
        Schema::dropIfExists('swallowing_nutritionals');
    }
};
