<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_conditions', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            
            $table->boolean('historyOfFalls')->nullable();
            $table->boolean('unintentional')->nullable();
            $table->boolean('multipleHospital')->nullable();
            $table->boolean('multipleEmergency')->nullable();
            $table->boolean('declineInMental')->nullable();
            $table->boolean('reportedOrObserved')->nullable();
            $table->boolean('currentlyTaking')->nullable();
            $table->boolean('currentlyReports')->nullable();
            $table->boolean('otherRisk')->nullable();
            $table->boolean('none')->nullable();
            $table->integer('painSleep')->nullable();
            $table->integer('rehabilitation')->nullable();
            $table->integer('dayDayActivities')->nullable();
            $table->integer('anyFalls')->nullable();            
            $table->integer('noInjury')->nullable();
            $table->integer('injurySkin')->nullable();
            $table->integer('majorInjury')->nullable();
            $table->integer('dyspneic')->nullable();

            $table->integer('modified_by')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('health_conditions');
    }
}
