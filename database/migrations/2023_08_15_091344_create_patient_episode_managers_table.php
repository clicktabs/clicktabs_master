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
        Schema::create('patient_episode_managers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('start_of_care_date');
            $table->string('episode_start_date');
            $table->string('episode_end_date');
            $table->string('case_manager');
            $table->string('primary_insurance');
            $table->string('secondary_insurance');
            $table->string('primary_physician');
            $table->string('comment');
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
        Schema::dropIfExists('patient_episode_managers');
    }
};
