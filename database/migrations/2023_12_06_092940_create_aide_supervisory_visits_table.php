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
        Schema::create('aide_supervisory_visits', function (Blueprint $table) {
            $table->id();
            $table->date('SupervisionDate')->nullable();
            $table->string('Start')->nullable();
            $table->string('End')->nullable();
            $table->string('SupervisorName')->nullable();
            $table->string('ClinicianName')->nullable();
            $table->string('cpatov')->nullable();
            $table->date('schedulevisit')->nullable();
            $table->string('dutyAssigned')->nullable();
            $table->string('Cooperative')->nullable();
            $table->string('Courteous')->nullable();
            $table->string('communication')->nullable();
            $table->string('Followsinstruction')->nullable();
            $table->string('Documentsappropriately')->nullable();
            $table->string('competency')->nullable();
            $table->string('Timely')->nullable();
            $table->string('Adheres')->nullable();
            $table->string('Complies')->nullable();
            $table->string('patientrights')->nullable();
            $table->text('Changes')->nullable();
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
        Schema::dropIfExists('aide_supervisory_visits');
    }
};
