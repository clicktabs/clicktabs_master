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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained();
            $table->string('patient_code', 20);
            $table->string('photo')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('referral_date');
            $table->string('gender');
            $table->string('marital_status');
            $table->date('date_of_birth');
            $table->string('mi_no')->nullable();
            $table->string('p_h_lat')->nullable();
            $table->string('p_h_lon')->nullable();
            $table->string('p_s_lat')->nullable();
            $table->string('p_s_lon')->nullable();
            $table->string('social_security_no');
            $table->string('insurance_type');
            $table->string('status');
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('patients');
    }
};
