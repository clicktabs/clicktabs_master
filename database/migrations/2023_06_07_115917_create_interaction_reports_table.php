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
        Schema::create('interaction_reports', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->date('date_of_birth');
            $table->string('created_by');
            $table->timestamp('created_on')->useCurrent();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interaction_reports');
    }
};
