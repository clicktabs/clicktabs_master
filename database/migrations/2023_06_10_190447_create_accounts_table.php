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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('company_name');
            $table->string('contact_person_firstname')->nullable();
            $table->string('contact_person_lastname')->nullable();
            $table->string('address_line')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('image')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('npi')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('secondary_tax')->nullable();
            $table->string('medicaid_p_n')->nullable();
            $table->string('medicare_p_n')->nullable();
            $table->string('provider_contract')->nullable();
            $table->string('caphs_vendor_id')->nullable();
            $table->string('unique_agency_oasis')->nullable();
            $table->string('dme_medicaid_p_i')->nullable();
            $table->string('signature')->nullable();
            $table->string('dd_contract')->nullable();
            $table->string('passport')->nullable();
            $table->string('pin')->nullable();
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
        Schema::dropIfExists('accounts');
    }
};
