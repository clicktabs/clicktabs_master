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
        Schema::create('resumption_cares', function (Blueprint $table) {
            $table->id();
            $table->string('dopca')->nullable();
            $table->string('month')->nullable();
            $table->string('day')->nullable();
            $table->string('year')->nullable();
            $table->boolean('StartCare')->nullable();
            $table->boolean('ResumptionCare')->nullable();
            $table->boolean('Recertification')->nullable();
            $table->boolean('OtherFollowUp')->nullable();
            $table->boolean('InpatientFacility')->nullable();
            $table->boolean('InpatientFacility2')->nullable();
            $table->boolean('DeathAtHome')->nullable();
            $table->boolean('DischargeFromAgency')->nullable();
            $table->string('EpisodeTiming')->nullable();
            $table->string('Grooming')->nullable();
            $table->string('catdub')->nullable();
            $table->string('dress')->nullable();
            $table->string('Bathing')->nullable();
            $table->string('ToiletTransferring')->nullable();
            $table->string('Transferring')->nullable();
            $table->string('Ambulation')->nullable();
            $table->string('SelfCare')->nullable();
            $table->string('code_reason')->nullable();
            $table->boolean('Eating')->nullable();
            $table->boolean('OralHygiene')->nullable();
            $table->boolean('ToiletingHygiene')->nullable();
            $table->string('Mobility')->nullable();
            $table->string('Mobility_CS')->nullable();
            $table->boolean('RollLR')->nullable();
            $table->boolean('SitTolying')->nullable();
            $table->boolean('LyingToSitting')->nullable();
            $table->boolean('SitToStand')->nullable();
            $table->boolean('BedToChair')->nullable();
            $table->boolean('ToiletTransfer')->nullable();
            $table->boolean('Walk10Feet')->nullable();
            $table->boolean('Walk50Feet')->nullable();
            $table->boolean('Walk150Feet')->nullable();
            $table->boolean('Walking10Feet')->nullable();
            $table->boolean('Step1')->nullable();
            $table->boolean('Steps4')->nullable();
            $table->string('dpuws')->nullable();
            $table->boolean('Wheel50Feet')->nullable();

            $table->boolean('HistoryOfFalls')->nullable();
            $table->boolean('WeightLoss')->nullable();
            $table->boolean('hospitalizations')->nullable();
            $table->boolean('departmentVisits')->nullable();
            $table->boolean('Decline')->nullable();
            $table->boolean('observedHistory')->nullable();
            $table->boolean('medications')->nullable();
            $table->boolean('exhaustion')->nullable();
            $table->boolean('OtherRisk')->nullable();
            $table->boolean('None')->nullable();

            $table->string('uplas2oh')->nullable();
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
        Schema::dropIfExists('resumption_cares');
    }
};
