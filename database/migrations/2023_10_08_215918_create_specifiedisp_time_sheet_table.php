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
        Schema::create('specifiedisp_time_sheet', function (Blueprint $table) {
            $table->id();
            $table->string('hpc_time_sheet_id')->nullable();
            $table->string('Descriptionofservice_1')->nullable();
            $table->string('service_1')->nullable();
            $table->string('service_2')->nullable();
            $table->string('service_3')->nullable();
            $table->string('service_4')->nullable();
            $table->string('service_5')->nullable();
            $table->string('service_6')->nullable();
            $table->string('service_7')->nullable();
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
        Schema::dropIfExists('specifiedisp_time_sheet');
    }
};
