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
        Schema::create('unusal_incident_report', function (Blueprint $table) {
            $table->id();
            $table->string('schedule_id')->nullable();
            $table->string('ProviderFacility')->nullable();
            $table->string('MonthYear')->nullable();
            $table->string('County')->nullable();
            $table->string('ReviewedBy')->nullable();
            $table->string('Title')->nullable();
            $table->date('ReviewDate')->nullable();
            $table->string('TrendsPatternIdentified')->nullable();
            $table->string('TrendsPatternAddressed')->nullable();
            $table->text('ActionTakenToAddressPatterns')->nullable();
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
        Schema::dropIfExists('unusal_incident_report');
    }
};
