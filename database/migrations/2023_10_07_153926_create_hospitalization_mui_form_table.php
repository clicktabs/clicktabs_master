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
        Schema::create('hospitalization_mui_form', function (Blueprint $table) {
            $table->id();
            $table->string('schedule_id')->nullable();
            $table->string('IndividualsName');
            $table->date('DateFormCompleted');
            $table->date('DateofHospitalization');
            $table->string('MUI_Number');
            $table->string('NameofPersonCompletingForm');
            $table->string('Title');
            $table->string('Provider');
            $table->string('ContactInformation');
            $table->text('hospitalization');
            $table->string('toh');
            $table->string('days_individual_in_the_hospital');
            $table->boolean('AbdominalPains')->nullable();
            $table->boolean('AbnormalBlood')->nullable();
            $table->boolean('AbsentPulse')->nullable();
            $table->boolean('AllergicReaction')->nullable();
            $table->boolean('AlteredState')->nullable();
            $table->boolean('BaclofenPumpIssuesBlood')->nullable();
            $table->boolean('Pressure')->nullable();
            $table->boolean('BloodSugarLevels')->nullable();
            $table->boolean('BodyTemperatureVariations')->nullable();
            $table->boolean('BowelObstruction')->nullable();
            $table->boolean('Cancer')->nullable();
            $table->boolean('ChestPains')->nullable();
            $table->boolean('DebucitusUlcer')->nullable();
            $table->boolean('DehydrationVolumeDepletion')->nullable();
            $table->boolean('Edema')->nullable();
            $table->boolean('Emesis')->nullable();
            $table->boolean('Gallbladder')->nullable();
            $table->boolean('GeneralizedPain')->nullable();
            $table->boolean('HeartProblems')->nullable();
            $table->boolean('ImpairedRespiration')->nullable();
            $table->boolean('Infection')->nullable();
            $table->boolean('IngestionPICA')->nullable();
            $table->boolean('Kidney')->nullable();
            $table->boolean('MedicalError')->nullable();
            $table->boolean('ObservationEvaluation')->nullable();
            $table->boolean('PlacediteminOrifice')->nullable();
            $table->boolean('PneumoniaandInfluenza')->nullable();
            $table->boolean('Seizures')->nullable();
            $table->boolean('Shunt')->nullable();
            $table->boolean('Stroke')->nullable();
            $table->boolean('SyncopeUncontrollable')->nullable();
            $table->boolean('Bleeding')->nullable();
            $table->string('otherREASON')->nullable();
            $table->text('individualssymptoms')->nullable();
            $table->text('individualsdiagnosis')->nullable();
            $table->text('continuingneeds')->nullable();
            $table->boolean('MedicationChange')->nullable();
            $table->boolean('ChokedonFood')->nullable();
            $table->boolean('MedicationError')->nullable();
            $table->boolean('FallDueToEnvironmentalFactors')->nullable();
            $table->boolean('FallDueToMobilityIssues')->nullable();
            $table->boolean('AspirationDueToImproperDietTexture')->nullable();
            $table->boolean('FailureToProvideTimelyMedicalCare')->nullable();
            $table->boolean('StaffDidNotMonitorInputOutputOfFluids')->nullable();
            $table->string('OtherFACTORS')->nullable();
            $table->boolean('PhysicalSocialEnvironmentalChange')->nullable();
            $table->boolean('AgencyPolicySystemChange')->nullable();
            $table->boolean('StaffTraining')->nullable();
            $table->boolean('Counseling')->nullable();
            $table->boolean('TeamMeetingToAddressISPChanges')->nullable();
            $table->boolean('AppointmentWithMedicalCareProvider')->nullable();
            $table->boolean('MedicationChanges')->nullable();
            $table->boolean('FollowUpAppointmentScheduled')->nullable();
            $table->boolean('PTOTSpeechReferral')->nullable();
            $table->boolean('DietChangeOrdered')->nullable();
            $table->boolean('HomeHealthCare')->nullable();
            $table->string('OtherPREVENTION')->nullable();
            $table->text('CommentsQuestions')->nullable();
            $table->string('IA_NAME')->nullable();
            $table->date('ReviewCompletedDate')->nullable();
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
        Schema::dropIfExists('hospitalization_mui_form');
    }
};
