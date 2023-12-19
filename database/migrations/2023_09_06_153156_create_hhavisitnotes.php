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
        Schema::create('hhavisitnotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('hhavisitnotes_id')->nullable();
            $table->string('date_1')->nullable();
            $table->string('time_in')->nullable();
            $table->string('date_2')->nullable();
            $table->string('time_out')->nullable();
            $table->string('vitals_results')->nullable();
            $table->string('vitals_P')->nullable();
            $table->string('refused_1')->nullable();
            $table->string('comments_1')->nullable();
            $table->string('vitals_R')->nullable();
            $table->string('vitals_B_P')->nullable();
            $table->string('comments_2')->nullable();
            $table->string('refused_2')->nullable();
            $table->string('vitals_weight')->nullable();
            $table->string('vitals_pain_rating')->nullable();
            $table->string('refused_3')->nullable();
            $table->string('comments_3')->nullable();
            $table->string('bath')->nullable();
            $table->string('comments_4')->nullable();
            $table->string('bed_bath')->nullable();
            $table->string('refused_4')->nullable();
            $table->string('comments_5')->nullable();
            $table->string('refused_5')->nullable();
            $table->string('assis_bath_chair_1')->nullable();
            $table->string('assis_bath_chair_2')->nullable();
            $table->string('assis_bath_chair_3')->nullable();
            $table->string('other_specify')->nullable();
            $table->string('comments_6')->nullable();
            $table->string('assist_bath_chair')->nullable();
            $table->string('assist_bath_chair_1')->nullable();
            $table->string('comments_7')->nullable();
            $table->string('assist_with_dressing')->nullable();
            $table->string('assist_with_dressing_1')->nullable();
            $table->string('comments_8')->nullable();
            $table->string('hair_care')->nullable();
            $table->string('hair_care_1')->nullable();
            $table->string('comments_9')->nullable();
            $table->string('shampoo')->nullable();
            $table->string('shampoo_1')->nullable();
            $table->string('comments_11')->nullable();
            $table->string('skin_care')->nullable();
            $table->string('skin_care_1')->nullable();
            $table->string('comments_12')->nullable();
            $table->string('foot_care')->nullable();
            $table->string('foot_care_1')->nullable();
            $table->string('comments_13')->nullable();
            $table->string('moisturizer')->nullable();
            $table->string('moisturizer_1')->nullable();
            $table->string('comments_14')->nullable();
            $table->string('check_pressure_areas')->nullable();
            $table->string('check_pressure_areas_1')->nullable();
            $table->string('comments_15')->nullable();
            $table->string('nail_care')->nullable();
            $table->string('nail_care_1')->nullable();
            $table->string('comments_16')->nullable();
            $table->string('oral_care')->nullable();
            $table->string('oral_care_1')->nullable();
            $table->string('comments_17')->nullable();
            $table->string('clean_dentures')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hhavisitnotes');
    }
};
