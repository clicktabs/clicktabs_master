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
        Schema::create('hpc_time_sheet', function (Blueprint $table) {
            $table->id();
            $table->string('schedule_id')->nullable();
            $table->string('hpcProvider_name')->nullable();
            $table->string('hpcindividual_name')->nullable();
            $table->string('hpcProvider_contractNo')->nullable();
            $table->string('hpcIndividul_MedicaidNo')->nullable();
            $table->string('hpcProvider_signature')->nullable();
            $table->text('TypeofService_1')->nullable();
            $table->text('TypeofService_2')->nullable();
            $table->text('TypeofService_3')->nullable();
            $table->text('TypeofService_4')->nullable();
            $table->text('TypeofService_5')->nullable();
            $table->text('TypeofService_6')->nullable();
            $table->text('TypeofService_7')->nullable();
            $table->date('DateofService_1')->nullable();
            $table->date('DateofService_2')->nullable();
            $table->date('DateofService_3')->nullable();
            $table->date('DateofService_4')->nullable();
            $table->date('DateofService_5')->nullable();
            $table->date('DateofService_6')->nullable();
            $table->date('DateofService_7')->nullable();
            $table->string('PlaceofService_1')->nullable();
            $table->string('PlaceofService_2')->nullable();
            $table->string('PlaceofService_3')->nullable();
            $table->string('PlaceofService_4')->nullable();
            $table->string('PlaceofService_5')->nullable();
            $table->string('PlaceofService_6')->nullable();
            $table->string('PlaceofService_7')->nullable();
            $table->string('groupSize_1')->nullable();
            $table->string('groupSize_2')->nullable();
            $table->string('groupSize_3')->nullable();
            $table->string('groupSize_4')->nullable();
            $table->string('groupSize_5')->nullable();
            $table->string('groupSize_6')->nullable();
            $table->string('groupSize_7')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('hpc_time_sheet');
    }
};
