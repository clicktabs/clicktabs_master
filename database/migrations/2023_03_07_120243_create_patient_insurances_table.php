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
        Schema::create('patient_insurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string("primary_payor");
            $table->string("secondary_payor")->nullable();
            $table->string("co_pay")->nullable();
            $table->string("private_pay")->nullable();
            $table->string("medicaid_id")->nullable();
            $table->string("medicare_id")->nullable();
            $table->string("nic_id")->nullable();
            $table->json("payment_source")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_insurances');
    }
};
