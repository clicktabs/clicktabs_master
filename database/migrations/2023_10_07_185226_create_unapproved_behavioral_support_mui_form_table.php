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
        Schema::create('unapproved_behavioral_support_mui_form', function (Blueprint $table) {
            $table->id();
            $table->string('schedule_id')->nullable();
            $table->string('IndividualsName')->nullable();
            $table->date('DateofUBS')->nullable();
            $table->string('PersonCompletingForm')->nullable();
            $table->string('Title')->nullable();
            $table->string('ContactInformation')->nullable();
            $table->date('DateFormCompleted')->nullable();
            $table->string('MUINumber')->nullable();
            $table->string('Provider')->nullable();

            $table->text('whatledtoUBS')->nullable();

            // BEHAVIOR STRATEGIES
            $table->text('behavioralsupport')->nullable();

            // TYPE OF UBS (CHECKBOXES)
            $table->boolean('Baskethold')->nullable();
            $table->boolean('MultiplePersonCarry')->nullable();
            $table->boolean('MultiplePersonEscort')->nullable();
            $table->boolean('OnePersonCarry')->nullable();
            $table->boolean('OnePersonEscort')->nullable();
            $table->boolean('OnePersonRestraint')->nullable();
            $table->boolean('DownwithResistance')->nullable();
            $table->boolean('Prone')->nullable();
            $table->time('time')->nullable();
            $table->string('Other')->nullable();

            // MECHANICAL (CHECKBOXES)
            $table->boolean('FullBody-papooseBoardWrap')->nullable();
            $table->boolean('FullBody-seatedPosition')->nullable();
            $table->boolean('FullBody-supinePosition')->nullable();
            $table->boolean('GaitBelt')->nullable();
            $table->boolean('Helmet')->nullable();
            $table->boolean('LockedSeatBelt')->nullable();
            $table->boolean('Mitts')->nullable();
            $table->boolean('Splints')->nullable();
            $table->boolean('Transportationlocked')->nullable();
            $table->boolean('Wheelchaircontrolsdisabled')->nullable();
            $table->boolean('Wheelchairforindividual')->nullable();
            $table->string('OtherMechanical')->nullable();

            // INJURIES
            $table->text('injuries')->nullable();

            // DESCRIPTION
            $table->text('interventionsupport')->nullable();

            // CAUSE AND CONTRIBUTING FACTORS (CHECKBOXES)
            $table->boolean('SupervisionNotMet')->nullable();
            $table->boolean('StaffRatioNotAppropriate')->nullable();
            $table->boolean('DietNotFollowed')->nullable();
            $table->boolean('AskedtoCompleteTask')->nullable();
            $table->boolean('ChangeinRoutine')->nullable();
            $table->boolean('ExcessiveNoise')->nullable();
            $table->boolean('AttentionUnavailable')->nullable();
            $table->boolean('PeerAggression')->nullable();
            $table->boolean('OutingCancelled')->nullable();
            $table->boolean('ControlIssues')->nullable();
            $table->boolean('MedicationChanges')->nullable();
            $table->boolean('Illness')->nullable();
            $table->boolean('PossibleHallucination')->nullable();
            $table->boolean('LossImportantRelationship')->nullable();
            $table->boolean('ISP_BSPNotFollowed')->nullable();
            $table->string('Otherinterventionsupport')->nullable();

            // PREVENTION MEASURES (CHECKBOXES)
            $table->boolean('environmentalchanges')->nullable();
            $table->boolean('AgencyPolicy_SystemChange')->nullable();
            $table->boolean('Stafftraining')->nullable();
            $table->boolean('Counseling')->nullable();
            $table->boolean('addressISPchanges')->nullable();
            $table->boolean('AppointmentMedicalcare')->nullable();
            $table->boolean('Medicationchange')->nullable();
            $table->boolean('appointmentscheduled')->nullable();
            $table->boolean('PT_OT_Speechreferra')->nullable();
            $table->boolean('Dietchangeordered')->nullable();
            $table->boolean('Homehealthcare')->nullable();
            $table->string('OtherPREVENTION')->nullable();

            // INVESTIGATIVE AGENT REVIEW
            $table->text('CommentsQuestions')->nullable();
            $table->string('IANAME')->nullable();
            $table->date('REVIEWCOMPLETEDDATE')->nullable();
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
        Schema::dropIfExists('unapproved_behavioral_support_mui_form');
    }
};
