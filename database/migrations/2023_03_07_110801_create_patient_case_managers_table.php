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
        Schema::create('patient_case_managers', function (Blueprint $table) {
            $table->id();
            $table->string("clinical_care_managers");
            $table->string("case_managers")->nullable();
            $table->string("oasis_assigned_to")->nullable();
            $table->string("ot_approved")->nullable();
            $table->string("st_approved")->nullable();
            $table->string("pt_approved")->nullable();
            $table->foreignId("patient_id")->nullable()->constrained();
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
        Schema::dropIfExists('patient_case_managers');
    }
};
