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
        Schema::create('referral_intakes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('Patient')->nullable();
            $table->string('Medicare')->nullable();
            $table->string('Address')->nullable();
            $table->string('Medicaid')->nullable();
            $table->string('cityState')->nullable();
            $table->string('Workers')->nullable();
            $table->string('Phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('Race')->nullable();
            $table->string('MaritalStatus')->nullable();
            $table->string('referralSource')->nullable();
            $table->string('Hospital')->nullable();
            $table->date('startofCare')->nullable();
            $table->boolean('suppliesOrdered')->default(false);
            $table->boolean('needed')->default(false);
            $table->string('Principal')->nullable();
            $table->date('dateOe')->nullable();
            $table->string('secondaryDx')->nullable();
            $table->date('dateOf')->nullable();
            $table->string('surgicalProcedure')->nullable();
            $table->date('surgicalDate')->nullable();

            $table->boolean('Amputation')->default(false);
            $table->boolean('Paralysis')->default(false);
            $table->boolean('Hearing')->default(false);
            $table->boolean('Contracture')->default(false);
            $table->boolean('Vision')->default(false);
            $table->string('ExtremityInvolved')->nullable();

            $table->boolean('bedRrest')->default(false);
            $table->boolean('oOB')->default(false);
            $table->boolean('bRp')->default(false);
            $table->boolean('aMb')->default(false);
            $table->boolean('trans')->default(false);

            $table->string('WTBearing')->nullable();
            $table->string('AssistiveDevice')->nullable();

            $table->text('diet')->nullable();
            $table->text('allergies')->nullable();

            $table->string('FoleyCath')->nullable();
            $table->date('insertedDate')->nullable();
            $table->string('size')->nullable();

            // Fields for services requested
            $table->boolean('sN')->default(false);
            $table->string('sNfreq')->nullable();
            $table->string('sN_text')->nullable();
            $table->boolean('hha')->default(false);
            $table->string('hhaFreq')->nullable();
            $table->string('hha_text')->nullable();
            $table->boolean('pt')->default(false);
            $table->string('ptFreq')->nullable();
            $table->string('pt_text')->nullable();
            $table->boolean('ot')->default(false);
            $table->string('otFreq')->nullable();
            $table->string('ot_text')->nullable();
            $table->boolean('st')->default(false);
            $table->string('stFreq')->nullable();
            $table->string('st_text')->nullable();
            $table->boolean('msw')->default(false);
            $table->string('mswFreq')->nullable();
            $table->string('msw_text')->nullable();
            $table->boolean('msw1')->default(false);
            $table->string('msw1Freq')->nullable();
            $table->string('msw1_text')->nullable();
            $table->boolean('ancillaryServices')->default(false);
            $table->boolean('referrals')->default(false);

            $table->string('medications')->nullable();

            $table->string('primaryCaregiver')->nullable();
            $table->string('emergencyContact')->nullable();

            $table->string('Physician')->nullable();
            $table->string('physicianAddress')->nullable();
            $table->text('physicianOrders')->nullable();

            $table->string('intakeRN')->nullable();
            $table->date('intakeDate')->nullable();
            $table->time('intakeTime')->nullable();
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
        Schema::dropIfExists('referral_intakes');
    }
};
