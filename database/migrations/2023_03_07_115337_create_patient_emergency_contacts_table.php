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
        Schema::create('patient_emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId('patient_id')->constrained();
            $table->string("relationship_to_patient");
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("zip");
            $table->string("phone");
            $table->string("alternate_phone");
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
        Schema::dropIfExists('patient_emergency_contacts');
    }
};
