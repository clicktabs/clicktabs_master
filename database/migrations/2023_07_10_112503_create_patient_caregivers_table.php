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
        Schema::create('patient_caregivers', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id')->nullable();
            $table->string('caregiver')->nullable();
            $table->string('matching_code')->nullable();
            $table->string('compatibility')->nullable();
            $table->date('visit_date')->nullable();
            $table->integer('hours_together')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('patient_caregivers');
    }
};
