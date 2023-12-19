<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('employee_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('mr_no')->nullable();
            $table->string('mr')->nullable();
            $table->string('task')->nullable();
            $table->string('bill_unit')->nullable();
            $table->string('pay_unit')->nullable();
            $table->boolean('status')->nullable();
            $table->string('primary_payer')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    


    public function down()
    {
        Schema::dropIfExists('employee_schedules');
    }
};
