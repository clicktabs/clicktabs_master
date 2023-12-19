<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBladderBowelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bladder_bowels', function (Blueprint $table) {
          $table->id();
          $table->integer('patient_history_id')->nullable();
          $table->text('tractInfection')->nullable();
          $table->text('catheterPresence')->nullable();
          $table->text('incontinenceFrequency')->nullable();
          $table->text('bowelElimination')->nullable();          
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
        Schema::dropIfExists('bladder_bowels');
    }
}
