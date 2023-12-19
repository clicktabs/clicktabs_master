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
        Schema::create('organization_infos', function (Blueprint $table) {
            $table->id();
            $table->string('org_id');
            $table->string('national_provider_number');
            $table->string('tax_id');
            $table->string('tax_id_type')->nullable();
            $table->string('medicare_provider_number')->nullable();
            $table->string('medicaid_provider_number')->nullable();
            $table->string('medicaid_provider_identifier')->nullable();
            $table->string('unique_agency_oasis_id_code')->nullable();
            $table->string('dme_medicaid_provider_identifier')->nullable();
            $table->string('cahps_vendor_id')->nullable();
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
        Schema::dropIfExists('organization_infos');
    }
};
