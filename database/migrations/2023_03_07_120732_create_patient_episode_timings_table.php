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
        Schema::create('patient_episode_timings', function (Blueprint $table) {
            $table->id();
            $table->json("oasis_start_care")->nullable();
            $table->foreignId('patient_id')->constrained();
            $table->json("schedule_therapy")->nullable();
            $table->json("non_oasis_start_care")->nullable();
            $table->json("initial_oasis_recert")->nullable();
            $table->json("initial_non_oasis_recert")->nullable();
            $table->date("start_care_date");
            $table->date("episode_start_date");
            $table->string('episode_timing')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_episode_timings');
    }
};
