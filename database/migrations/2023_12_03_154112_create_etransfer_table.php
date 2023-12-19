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
        Schema::create('etransfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->integer('dopca')->nullable();
            $table->string('assessment_month')->nullable();
            $table->string('assessment_day')->nullable();
            $table->string('assessment_year')->nullable();
            $table->json('resumption_of_care')->nullable();
            $table->string('assessment_month2')->nullable();
            $table->string('assessment_day2')->nullable();
            $table->string('assessment_year2')->nullable();
            $table->integer('EmergentCare')->nullable();
            $table->json('reason_for_emergent_care')->nullable();
            $table->integer('wifpa')->nullable();
            $table->integer('pcrmltsp')->nullable();
            $table->json('route_of_transmission')->nullable();
            $table->integer('pfsrwmr')->nullable();
            $table->integer('boxA')->nullable();
            $table->integer('boxB')->nullable();
            $table->integer('boxC')->nullable();
            $table->integer('medicationIntervention')->nullable();
            $table->integer('medicationIntervention2')->nullable();
            $table->integer('medicationIntervention3')->nullable();
            $table->integer('fpi')->nullable();
            $table->integer('dimrtmp')->nullable();
            $table->integer('itmamp')->nullable();
            $table->integer('itppu')->nullable();
            $table->integer('putpmwh')->nullable();
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
        Schema::dropIfExists('etransfer');
    }
};
