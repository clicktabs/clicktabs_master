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
        Schema::create('call_logs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time');
            $table->string('received_by');
            $table->string('caller_name');
            $table->string('caller_patient_name');
            $table->longText('topic_reason');
            $table->longText('outcome');
            $table->string('intervention');
            $table->string('referred');
            $table->string('care_coordination');
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
        Schema::dropIfExists('call_logs');
    }
};
