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
        Schema::create('sixtydays_summary', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id')->nullable();
            // Demographics
            $table->string('clientName')->nullable();
            $table->string('carePeriod')->nullable();
            $table->string('mrn')->nullable();
            $table->string('physician')->nullable();
            $table->date('dob')->nullable();
            $table->string('no')->nullable();

            // Patient Condition
            $table->string('patientCondition')->nullable();

            // Services Provided
            $table->boolean('sn')->default(false);
            $table->boolean('pt')->default(false);
            $table->boolean('ot')->default(false);
            $table->boolean('st')->default(false);
            $table->boolean('msw')->default(false);
            $table->boolean('hha')->default(false);
            $table->string('otherService')->nullable();

            // Vital Sign Ranges
            $table->string('bpSysLowest')->nullable();
            $table->string('bpDiaLowest')->nullable();
            $table->string('hrLowest')->nullable();
            $table->string('respLowest')->nullable();
            $table->string('tempLowest')->nullable();
            $table->string('weightLowest')->nullable();
            $table->string('bsLowest')->nullable();
            $table->string('painLowest')->nullable();

            $table->string('bpSysHighest')->nullable();
            $table->string('bpDiaHighest')->nullable();
            $table->string('hrHighest')->nullable();
            $table->string('respHighest')->nullable();
            $table->string('tempHighest')->nullable();
            $table->string('weightHighest')->nullable();
            $table->string('bsHighest')->nullable();
            $table->string('painHighest')->nullable();

            // Summary of Care Provided and Goals
            $table->text('summaryOfCare')->nullable();
            $table->text('patientCurrentCondition')->nullable();
            $table->text('goals')->nullable();

            // Recommended Services
            $table->boolean('rec_sn')->default(false);
            $table->boolean('rec_pt')->default(false);
            $table->boolean('rec_ot')->default(false);
            $table->boolean('rec_st')->default(false);
            $table->boolean('rec_msw')->default(false);
            $table->boolean('rec_hha')->default(false);
            $table->string('rec_otherService')->nullable();

            // Notifications
            $table->date('dateSentToPhysician')->nullable();
            $table->string('signature1')->nullable();
            $table->date('date1')->nullable();
            $table->string('signature2')->nullable();
            $table->date('date2')->nullable();
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
        Schema::dropIfExists('sixtydays_summary');
    }
};
