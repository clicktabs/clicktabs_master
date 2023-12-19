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
        Schema::create('unanticipatedhospitalizationmuis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('IndividualsName')->nullable();
            $table->string('DateFormCompleted')->nullable();
            $table->string('DateofHospitalization', 25)->nullable();
            $table->string('NameofPersonCompletingForm')->nullable();
            $table->string('Title', 25)->nullable();
            $table->string('Provider',50)->nullable();
            $table->string('ContactInformation', 25)->nullable();
            $table->string('hospitalization',25)->nullable();
            $table->string('toh',25)->nullable();
            $table->string('daysindividualinthehospita',30)->nullable();
            $table->string('AbdominalPains', 25)->nullable();
            $table->string('AbnormalBlood', 25)->nullable();
            $table->string('AbsentPulse', 25)->nullable();
            $table->string('AllergicReaction', 25)->nullable();
            $table->string('AlteredState', 25)->nullable();
            $table->string('BaclofenPumpIssuesBlood', 25)->nullable();
            $table->string('Pressure', 25)->nullable();
            $table->string('BloodSugarLevels', 25)->nullable();
            $table->string('BodyTemperatureVariations', 25)->nullable();
            $table->string('BowelObstruction', 25)->nullable();
            $table->string('Cancer', 25)->nullable();
            $table->string('ChestPains', 25)->nullable();
            $table->string('DebucitusUlcer', 25)->nullable();
            $table->string('DehydrationVolumeDepletion', 25)->nullable();
            $table->string('Edema', 25)->nullable();
            $table->string('Emesis', 25)->nullable();
            $table->string('Gallbladder', 25)->nullable();
            $table->string('GeneralizedPain', 25)->nullable();
            $table->string('HeartProblems', 25)->nullable();
            $table->string('ImpairedRespiration', 25)->nullable();
            $table->string('form-check-input', 25)->nullable();
            $table->string('IngestionPICA', 25)->nullable();
            $table->string('Kidney', 25)->nullable();
            $table->string('MedicalError', 25)->nullable();
            $table->string('ObservationEvaluation', 25)->nullable();
            $table->string('PlacediteminOrifice', 25)->nullable();
            $table->string('PneumoniaandInfluenza', 25)->nullable();
            $table->string('Seizures', 25)->nullable();
            $table->string('Shunt', 25)->nullable();
            $table->string('Stroke', 25)->nullable();
            $table->string('SyncopeUncontrollable', 25)->nullable();
            $table->string('Bleeding', 25)->nullable();
            $table->string('otherREASON', 25)->nullable();
            $table->string('individualssymptoms', 25)->nullable();
            $table->string('individualsdiagnosis', 25)->nullable();
            $table->string('continuingneeds', 25)->nullable();
            $table->string('MedicationChange', 25)->nullable();
            $table->string('ChokedonFood', 25)->nullable();
            $table->string('MedicationError', 25)->nullable();
            $table->string('Environmental', 25)->nullable();
            $table->string('MobilityIssues', 25)->nullable();
            $table->string('ImproperDiet', 25)->nullable();
            $table->string('TimelyMedicalCare', 25)->nullable();
            $table->string('InputOutput', 25)->nullable();
            $table->string('EnvironmentalChange', 25)->nullable();
            $table->string('AgencyPolicy', 25)->nullable();
            $table->string('StaffTraining', 25)->nullable();
            $table->string('Counseling', 25)->nullable();
            $table->string('addressISPChanges', 25)->nullable();
            $table->string('MedicalCareProvider', 25)->nullable();
            $table->string('MedicationChanges', 25)->nullable();
            $table->string('AppointmentScheduled', 25)->nullable();
            $table->string('PTOTSpeechReferral', 25)->nullable();
            $table->string('DietChangeOrdered', 25)->nullable();
            $table->string('HomeHealthCare', 25)->nullable();
            $table->string('CommentsQuestions', 25)->nullable();
            $table->string('IA_NAME', 25)->nullable();
            $table->string('ReviewCompletedDate', 20)->nullable();
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
        Schema::dropIfExists('unanticipatedhospitalizationmuis');
    }
};
