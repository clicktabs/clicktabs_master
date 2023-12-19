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
        Schema::create('medication_records', function (Blueprint $table) {
            $table->id();
            $table->integer('meds_as_needed_id')->nullable();
            $table->date('date')->nullable();
            $table->string('hours')->nullable();
            $table->string('initials')->nullable();
            $table->string('medication')->nullable();
            $table->string('reason')->nullable();
            $table->string('results')->nullable();
            $table->text('signature')->nullable();
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
        Schema::dropIfExists('medication_records');
    }
};
