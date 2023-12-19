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
        Schema::create('patient_extra_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->json('race_ethnicity')->nullable();
            $table->json('source_of_admission')->nullable();
            $table->string('source_of_admission_other')->nullable();
            $table->json('services_requested')->nullable();
            $table->boolean('attending_physician')->nullable();
            $table->unsignedBigInteger('physician_id')->nullable();
            $table->foreign('physician_id')->references('id')->on('physicians');
            $table->unsignedBigInteger('referring_physician_id')->nullable();
            $table->foreign('referring_physician_id')->references('id')->on('physicians');
            $table->json('face_to_face_evaluation')->nullable();
            $table->foreignId('pharmacy_id')->nullable()->constrained();
            $table->json('advance_directives')->nullable();
            $table->json('emergency_preparedness')->nullable();
            $table->json('coordination_of_care')->nullable();
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
        Schema::dropIfExists('patient_extra_infos');
    }
};
