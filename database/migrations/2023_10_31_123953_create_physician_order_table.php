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
        Schema::create('physician_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('PhysicianName');
            $table->string('ClientName');
            $table->string('Address_1');
            $table->string('Address_2')->nullable();
            $table->string('Tel_1')->nullable();
            $table->string('Fax')->nullable();
            $table->string('Tel_2')->nullable();
            $table->string('SSN')->nullable();
            $table->string('NPI')->nullable();
            $table->date('ClientDateOfBirth')->nullable();
            $table->date('Date')->nullable();
            $table->string('Sex')->nullable();
            $table->boolean('skilled_nursing')->nullable();
            $table->boolean('home_health_aide')->nullable();
            $table->boolean('therapy')->nullable();
            $table->boolean('evaluate_other')->nullable();
            $table->text('PrimaryDiagnosis')->nullable();
            $table->text('NewMedicationDate')->nullable();
            $table->text('OldMedicationsDate')->nullable();
            $table->string('MdSignature')->nullable();
            $table->string('MdSignatureDate')->nullable();
            $table->string('NurseSignature')->nullable();
            $table->date('NurseSignatureDate')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('physician_order');
    }
};
