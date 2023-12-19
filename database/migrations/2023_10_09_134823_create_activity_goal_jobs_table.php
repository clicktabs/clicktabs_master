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
        Schema::create('activity_goal_jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('activity_goals_id');
            $table->text('job_description')->nullable();
            $table->string('job_1')->nullable();
            $table->string('int_1')->nullable();
            $table->string('job_2')->nullable();
            $table->string('int_2')->nullable();
            $table->string('job_3')->nullable();
            $table->string('int_3')->nullable();
            $table->string('job_4')->nullable();
            $table->string('int_4')->nullable();
            $table->string('job_5')->nullable();
            $table->string('int_5')->nullable();
            $table->string('job_6')->nullable();
            $table->string('int_6')->nullable();
            $table->string('job_7')->nullable();
            $table->string('int_7')->nullable();
            $table->string('job_8')->nullable();
            $table->string('int_8')->nullable();
            $table->string('job_9')->nullable();
            $table->string('int_9')->nullable();
            $table->string('job_10')->nullable();
            $table->string('int_10')->nullable();
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
        Schema::dropIfExists('activity_goal_jobs');
    }
};
