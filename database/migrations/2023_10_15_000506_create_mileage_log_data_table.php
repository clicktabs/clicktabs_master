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
        Schema::create('mileage_log_data', function (Blueprint $table) {
            $table->id();
            $table->string('mileage_logs_id')->nullable();
            $table->string('date')->nullable();
            $table->string('employee')->nullable();
            $table->string('consumer_name')->nullable();
            $table->string('beginning_mileage')->nullable();
            $table->string('ending_mileage')->nullable();
            $table->string('total_mileage')->nullable();
            $table->string('office_use_only')->nullable();
            $table->string('comment_purpose')->nullable();
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
        Schema::dropIfExists('mileage_log_data');
    }
};
