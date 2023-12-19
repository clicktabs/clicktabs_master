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
        Schema::create('hha_care_plan_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hha_care_plan_id')->nullable();
            $table->string('Temperature')->nullable();
            $table->string('BloodPressure')->nullable();
            $table->string('HeartRate')->nullable();
            $table->string('Respirations')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Assist')->nullable();
            $table->string('assistWith')->nullable();
            $table->string('incontinenceCare')->nullable();
            $table->string('emptyDrainage')->nullable();
            $table->string('bedBath')->nullable();
            $table->string('tubBath')->nullable();
            $table->string('Shower')->nullable();
            $table->string('showerChair')->nullable();
            $table->string('hairComb')->nullable();
            $table->string('oralCare')->nullable();
            $table->string('kkinCare')->nullable();
            $table->string('Pericare')->nullable();
            $table->string('Shave')->nullable();
            $table->string('Dressing')->nullable();
            $table->string('medicationReminder')->nullable();
            $table->string('assistTransfer')->nullable();
            $table->string('Dangle')->nullable();
            $table->string('turnPosition')->nullable();
            $table->string('rangeMotion')->nullable();
            $table->string('assistwithAmbulation')->nullable();
            $table->string('makeBed')->nullable();
            $table->string('Housekeeping')->nullable();
            $table->string('Nutrition')->nullable();
            $table->string('mealSetUp')->nullable();
            $table->string('assistWithFeeding')->nullable();
            $table->string('Record')->nullable();
            $table->text('comments')->nullable();

            $table->boolean('healthAide')->nullable();
            $table->boolean('carePlan')->nullable();
            $table->string('Signature')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('hha_care_plan_details');
    }
};
