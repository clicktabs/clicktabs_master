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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('applications_id')->nullable();
            $table->string('appl_position')->nullable();
            $table->string('appl_lastName')->nullable();
            $table->string('appl_firstName')->nullable();
            $table->string('appl_middleName')->nullable();
            $table->string('appl_address')->nullable();
            $table->string('application_address')->nullable();
            $table->string('appl_city')->nullable();
            $table->string('appl_state')->nullable();
            $table->string('appl_zip')->nullable();
            $table->string('appl_cellphone')->nullable();
            $table->string('appl_email')->nullable();
            $table->string('app_workstartdate')->nullable();
            $table->string('appl_salarydesire')->nullable();
            $table->string('appl_Dipolma')->nullable();
            $table->string('appl_Hours')->nullable();
            $table->string('app_workingdays')->nullable();
            $table->string('app_postion')->nullable();
            $table->string('appl_Status')->nullable();
            $table->string('appl_Workauthorization')->nullable();
            $table->string('appl_conviction')->nullable();
            $table->string('appl_jobFunctions')->nullable();
            $table->string('appl_jobEssential')->nullable();
            $table->string('appl_school_name')->nullable();
            $table->string('appl_school_degree')->nullable();
            $table->string('appl_school_address')->nullable();
            $table->string('appl_school_1')->nullable();
            $table->string('appl_school_2')->nullable();
            $table->string('appl_school_3')->nullable();
            $table->string('appl_other_1')->nullable();
            $table->string('appl_other_2')->nullable();
            $table->string('appl_other_3')->nullable();
            $table->string('appl_Example6')->nullable();
            $table->string('appl_proName')->nullable();
            $table->string('appl_proAddress')->nullable();
            $table->string('appl_proPhone')->nullable();
            $table->string('appl_proRelationship')->nullable();
            $table->string('appl_proName1')->nullable();
            $table->string('appl_proAddress1')->nullable();
            $table->string('appl_proPhone1')->nullable();
            $table->string('appl_proRelationship1')->nullable();
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
        Schema::dropIfExists('applications');
    }
};
