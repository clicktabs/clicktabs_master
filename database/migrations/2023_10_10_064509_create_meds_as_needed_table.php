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
        Schema::create('meds_as_needed', function (Blueprint $table) {
            $table->id();
            $table->integer('schedule_id')->nullable();
            $table->string('individual_name')->nullable();
            $table->string('sex')->nullable();
            $table->timestamp('dob')->nullable();
            $table->string('mdate')->nullable();
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
        Schema::dropIfExists('meds_as_needed');
    }
};
