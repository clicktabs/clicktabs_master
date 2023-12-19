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
        Schema::create('physicians', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mi')->nullable();
            $table->string('credentials')->nullable();
            $table->string('npi_number');
            $table->string('speciality');
            $table->string('email')->nullable();
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('primary_phone');
            $table->string('alternate_phone')->nullable();
            $table->string('fax')->nullable();
            $table->boolean('pecos_verification');
            $table->string('org_id');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->boolean('active_status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('physicians');
    }
};
