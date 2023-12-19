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
        Schema::create('medication_administration', function (Blueprint $table) {
            $table->id();
            $table->integer('schedule_id')->nullable();
            $table->string('individual_name')->nullable();
            $table->string('sex')->nullable();
            $table->timestamp('dob')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('diet')->nullable();
            $table->string('sd_instruction')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('pysician_name')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('provider_name')->nullable();
            $table->text('comment_section')->nullable();
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
        Schema::dropIfExists('medication_administration');
    }
};
