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
        Schema::create('isp_docs', function (Blueprint $table) {
            $table->id();
            $table->string('schedule_id')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('medicaid')->nullable();
            $table->string('odmr_resident')->nullable();
            $table->string('service_coordinator')->nullable();
            $table->date('isp_date')->nullable();
            $table->string('county')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('odmr_facility')->nullable();
            $table->string('type_of_service')->nullable();
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
        Schema::dropIfExists('isp_docs');
    }
};
