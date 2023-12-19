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
        Schema::create('patient_service_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->nullable()->constrained();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('city');
            $table->string('country');
            $table->string('state')->nullable();
            $table->string('zip', 30)->nullable();
            $table->string('county')->nullable();
            $table->string('phone')->nullable();
            $table->string('alternate_phone')->nullable();
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
        Schema::dropIfExists('patient_service_addresses');
    }
};
