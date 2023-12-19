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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_visit');
            $table->string('service_req_name_address');
            $table->date('date_of_request');
            $table->string('reply_name_dept');
            $table->string('telephone_ext');
            $table->date('phy_order_soc_date');
            $table->string('na_no_specidic_soc')->nullable();
            $table->date('updated_reff_date')->nullable();
            $table->string('patient_full_name')->nullable();
            $table->date('patient_dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('patient_full_address')->nullable();
            $table->string('apt_no')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('patient_visite_address');
            $table->string('patient_visite_apt')->nullable();
            $table->string('patient_visite_phone')->nullable();
            $table->string('medicare_no')->nullable();
            $table->string('medicare_od_dss')->nullable();
            $table->string('authorization_required');
            $table->string('authorization_received');
            $table->string('other_ins')->nullable();
            $table->string('policy_no')->nullable();
            $table->string('type_of_coverage')->nullable();
            $table->date('hospital_or_pac_add_date')->nullable();
            $table->date('hospital_or_pac_diss_date')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
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
        Schema::dropIfExists('referrals');
    }
};
