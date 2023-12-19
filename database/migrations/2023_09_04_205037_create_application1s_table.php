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
        Schema::create('application1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->unsignedInteger('application1s_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('appl_proName2')->nullable();
            $table->string('appl_proAddress2')->nullable();
            $table->string('appl_proPhone2')->nullable();
            $table->string('appl_proRelationship2')->nullable();
            $table->string('appl_contact')->nullable();
            $table->string('appl_Job')->nullable();
            $table->string('appl_startDate')->nullable();
            $table->string('appl_endDate')->nullable();
            $table->string('appl_companyName')->nullable();
            $table->string('appl_supervisorsName')->nullable();
            $table->string('appl_supervisorsNumber')->nullable();
            $table->string('appl_employorCity')->nullable();
            $table->string('appl_employorState')->nullable();
            $table->string('appl_employorZip')->nullable();
            $table->string('appl_duties')->nullable();
            $table->string('appl_reasonforleaving')->nullable();
            $table->string('appl_startingSalary')->nullable();
            $table->string('appl_endinfSalary')->nullable();
            $table->string('appl_Job1')->nullable();
            $table->string('appl_startDate1')->nullable();
            $table->string('appl_endDate1')->nullable();
            $table->string('appl_companyName1')->nullable();
            $table->string('appl_supervisorsName1')->nullable();
            $table->string('appl_supervisorPhone')->nullable();
            $table->string('appl_City1')->nullable();
            $table->string('appl_State1')->nullable();
            $table->string('appl_Zip1')->nullable();
            $table->string('appl_duties1')->nullable();
            $table->string('appl_reasonforleaving1')->nullable();
            $table->string('appl_Startingsalary1')->nullable();
            $table->string('appl_endingSalary1')->nullable();
            $table->string('app-signature_10')->nullable();
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
        Schema::dropIfExists('application1s');
    }
};
