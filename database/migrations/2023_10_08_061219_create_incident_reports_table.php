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
        Schema::create('incident_reports', function (Blueprint $table) {
            $table->id();
            $table->string('unusal_incident_report_id');
            $table->string('name')->nullable();
            $table->string('ui')->nullable();
            $table->string('date')->nullable();
            $table->string('injury')->nullable();
            $table->text('home_name_address')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->string('actionTaken')->nullable();
            $table->string('factors')->nullable();
            $table->string('preventionPlan')->nullable();
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
        Schema::dropIfExists('incident_reports');
    }
};
