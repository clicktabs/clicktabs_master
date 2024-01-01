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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->date('kt_calendar_datepicker_start_date');
            $table->date('kt_calendar_datepicker_end_date');
            $table->time('start_time')->default('00:00:00');
            $table->time('end_time')->default('00:00:00');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('employee_id');
            $table->string('task');
            $table->unsignedBigInteger('sc_sub_addon_id');
            $table->string('bill_unit_type');
            $table->string('mileage_rate')->nullable();
            $table->string('user_rate')->nullable();
            $table->string('pay_unit_type')->nullable();
            $table->string('scheduling_status');
            $table->string('organization_id')->nullable();
            $table->unsignedBigInteger('payor_sub_addon_id');
            $table->text('scheduling_notes')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('sc_sub_addon_id')->references('id')->on('addon_sub_categories')->onDelete('cascade');
            $table->foreign('payor_sub_addon_id')->references('id')->on('addon_sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
};
