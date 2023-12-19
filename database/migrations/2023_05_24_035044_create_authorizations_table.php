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
        Schema::create('authorizations', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->nullable();
            $table->string('authorization_number')->nullable();
            $table->string('payer')->nullable();
            $table->string('startofcare')->nullable();
            $table->date('eoc_date')->nullable();
            $table->string('service_code')->nullable();
            $table->string('authorized_units')->nullable();
            // $table->string('used')->nullable();
            // $table->string('unused')->nullable();
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
        Schema::dropIfExists('authorizations');
    }
};
