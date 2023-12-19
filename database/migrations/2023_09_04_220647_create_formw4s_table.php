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
        Schema::create('formw4s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('w4_first_and_middle_name')->nullable();
            $table->string('w4_last_name')->nullable();
            $table->string('w4_social_number')->nullable();
            $table->string('w4_address')->nullable();
            $table->string('w4_city_town_state_zip')->nullable();
            $table->string('w4_single_or_married')->nullable();
            $table->string('w4_married_filing')->nullable();
            $table->string('w4_head_of_household')->nullable();
            $table->string('w4_under_age')->nullable();
            $table->string('w4_dependents')->nullable();
            $table->string('w4_total')->nullable();
            $table->string('w4_four_a')->nullable();
            $table->string('w4_four_b')->nullable();
            $table->string('w4_four_c')->nullable();
            $table->string('w4_employee_signature')->nullable();
            $table->string('w4_signature_date')->nullable();
            $table->string('w4_employersAddress')->nullable();
            $table->string('w4_employee_first_date')->nullable();
            $table->string('w4_employee_id_number')->nullable();
            $table->string('w4_marriedfilingjointly')->nullable();
            $table->string('w4_yourspousehavethreejobs')->nullable();
            $table->string('w4_ofthetwohighestpayingjobs')->nullable();
            $table->string('w4_Addtheamountsfromlines2a')->nullable();
            $table->string('w4_Enterthenumberofpayperiodsperyear')->nullable();
            $table->string('w4_theannualamountonline1orline2c')->nullable();
            $table->string('w4_2023itemizeddeductions')->nullable();
            $table->string('w4_qualifyingsurvivingspouse')->nullable();
            $table->string('w4_subtractline2fromline1')->nullable();
            $table->string('w4_studentloaninterest')->nullable();
            $table->string('w4_Entertheresulthere')->nullable();
            $table->string('w4_signature')->nullable();
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
        Schema::dropIfExists('formw4s');
    }
};
