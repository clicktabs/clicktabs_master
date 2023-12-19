<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administratives', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            
            $table->text('nipNumber')->nullable();
            $table->text('ukUnknown')->nullable();
            $table->text('cmsNumber')->nullable();
            $table->text('branchState')->nullable();
            $table->text('branchId')->nullable();
            $table->text('patientIdNo')->nullable();
            $table->text('patientName')->nullable();
            $table->boolean('patientMi')->nullable();
            $table->text('lastName')->nullable();
            $table->text('middleName')->nullable();
            $table->text('state')->nullable();
            $table->text('zip')->nullable();
            $table->text('socialSecurityNumber')->nullable();
            $table->boolean('ssnUnknown')->nullable();
            $table->text('medicare')->nullable();
            $table->boolean('noMedicare')->nullable();
            $table->text('medicaid')->nullable();
            $table->boolean('noMedicaid')->nullable();
            $table->text('gender')->nullable();
            $table->date('dateofbirth');
          
            $table->boolean('primaryAllowValue0')->nullable();

            $table->integer('modified_by')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('administratives');
    }
}
