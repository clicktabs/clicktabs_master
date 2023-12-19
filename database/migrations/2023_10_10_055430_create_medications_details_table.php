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
        Schema::create('medications_details', function (Blueprint $table) {
            $table->id();
            $table->integer('medication_administration_id')->nullable();
            $table->text('medication')->nullable();
            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('f8')->nullable();
            $table->string('f9')->nullable();
            $table->string('f10')->nullable();
            $table->string('f11')->nullable();
            $table->string('f12')->nullable();
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
        Schema::dropIfExists('medications_details');
    }
};
