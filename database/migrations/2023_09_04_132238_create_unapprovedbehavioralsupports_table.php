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
        Schema::create('unapprovedbehavioralsupports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('IndividualsName')->nullable();
            $table->string('DateofUBS', 30)->nullable();
            $table->string('PersonCompletingForm', 30)->nullable();
            $table->string('Title', 30)->nullable();
            $table->string('ContactInformation', 30)->nullable();
            $table->string('DateFormCompleted', 30)->nullable();
            $table->string('MUINumber', 30)->nullable();
            $table->string('Provider', 30)->nullable();
            $table->string('whatledtoUBS', 30)->nullable();
            $table->string('behavioralsupport', 30)->nullable();
            $table->string('Baskethold', 30)->nullable();
            $table->string('MultiplePersonCarry', 30)->nullable();
            $table->string('MultiplePersonEscort', 30)->nullable();
            $table->string('OnePersonCarry', 30)->nullable();
            $table->string('OnePersonEscort', 30)->nullable();
            $table->string('OnePersonRestraint', 30)->nullable();
            $table->string('DownwithResistance', 30)->nullable();
            $table->string('Prone', 30)->nullable();
            $table->string('MultipleAppendages', 30)->nullable();
            $table->string('SeatedRestraint', 30)->nullable();
            $table->string('SideRestraint')->nullable();
            $table->string('StandingRestraint')->nullable();
            $table->string('Supine', 30)->nullable();
            $table->string('FullBody-papooseBoardWrap', 30)->nullable();
            $table->string('FullBody-seatedPosition', 30)->nullable();
            $table->string('FullBody-supinePosition', 30)->nullable();
            $table->string('GaitBelt', 30)->nullable();
            $table->string('Helmet', 30)->nullable();
            $table->string('LockedSeatBelt', 30)->nullable();
            $table->string('Mitts', 30)->nullable();
            $table->string('Splints', 30)->nullable();
            $table->string('Transportationlocked', 30)->nullable();
            $table->string('Wheelchaircontrolsdisabled', 30)->nullable();
            $table->string('Wheelchairforindividual')->nullable();
            $table->string('OtherMechanical', 30)->nullable();
            $table->string('injuries', 30)->nullable();
            $table->string('interventionsupport', 30)->nullable();
            $table->string('SupervisionNotMet')->nullable();
            $table->string('StaffRatioNotAppropriate', 30)->nullable();
            $table->string('DietNotFollowed', 30)->nullable();
            $table->string('AskedtoCompleteTask', 30)->nullable();
            $table->string('ChangeinRoutine', 30)->nullable();
            $table->string('ExcessiveNoise', 30)->nullable();
            $table->string('AttentionUnavailable', 30)->nullable();
            $table->string('PeerAggression', 30)->nullable();
            $table->string('OutingCancelled')->nullable();
            $table->string('ControlIssues', 30)->nullable();
            $table->string('MedicationChanges', 30)->nullable();
            $table->string('Illness', 30)->nullable();
            $table->string('PossibleHallucination', 30)->nullable();
            $table->string('LossImportantRelationship', 30)->nullable();
            $table->string('ISP_BSPNotFollowed', 30)->nullable();
            $table->string('Otherinterventionsupport', 30)->nullable();
            $table->string('environmentalchanges', 30)->nullable();
            $table->string('AgencyPolicy_SystemChange', 30)->nullable();
            $table->string('Stafftrainin', 30)->nullable();
            $table->string('Counseling', 30)->nullable();
            $table->string('addressISPchanges', 30)->nullable();
            $table->string('AppointmentMedicalcare', 30)->nullable();
            $table->string('Medicationchange', 30)->nullable();
            $table->string('appointmentscheduled', 30)->nullable();
            $table->string('PT_OT_Speechreferra', 30)->nullable();
            $table->string('Dietchangeordered')->nullable();
            $table->string('Homehealthcare', 30)->nullable();
            $table->string('OtherPREVENTION', 30)->nullable();
            $table->string('CommentsQuestions', 30)->nullable();
            $table->string('IANAME', 30)->nullable();
            $table->string('REVIEWCOMPLETEDDATE', 30)->nullable();
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
        Schema::dropIfExists('unapprovedbehavioralsupports');
    }
};
