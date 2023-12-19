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
        Schema::create('formit4s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('formit4_fullname')->nullable();
            $table->string('formit4_ssn')->nullable();
            $table->string('formit4_ZipCode')->nullable();
            $table->string('formit4_schoolDistrict')->nullable();
            $table->string('formit4_schoolDistrictNo')->nullable();
            $table->string('formit4_personalExemption')->nullable();
            $table->string('formit4_marriedPersonalExemption')->nullable();
            $table->string('formit4_exemptionsDepndents')->nullable();
            $table->string('formit4_exemptionsTotal')->nullable();
            $table->string('formit4_additionalWithholding')->nullable();
            $table->string('formit4_signature1')->nullable();
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
        Schema::dropIfExists('formit4s');
    }
};
