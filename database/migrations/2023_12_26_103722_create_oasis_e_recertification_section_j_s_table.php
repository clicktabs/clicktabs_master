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
        Schema::create('oasis_e_recertification_section_j_s', function (Blueprint $table) {
            $table->id();

            // Section J: Health Conditions
            $table->boolean('historyof_falls')->nullable();
            $table->boolean('Unintentional')->nullable();
            $table->boolean('Multiple')->nullable();
            $table->boolean('multipleEmergency')->nullable();
            $table->boolean('declineMental')->nullable();
            $table->boolean('observedHistory')->nullable();
            $table->boolean('currentlyTaking')->nullable();
            $table->boolean('reportsExhaustion')->nullable();
            $table->boolean('currentlyReports')->nullable();
            $table->boolean('noneAbove')->nullable();

            // RISK FACTORS/HOSPITAL ADMISSION/EMERGENCY ROOM
            $table->boolean('visits')->nullable();
            $table->boolean('Discussion')->nullable();
            $table->boolean('Education')->nullable();
            $table->boolean('Training')->nullable();
            $table->boolean('literaturePatient')->nullable();
            $table->boolean('literatureRepresentative')->nullable();
            $table->boolean('literatureCaregiver')->nullable();
            $table->boolean('literaturefamilyMember')->nullable();
            $table->boolean('literatureOther')->nullable();
            $table->text('literatureOther_1', 55)->nullable();
            $table->text('factorsUnplanned')->nullable();

            // PAIN
            $table->text('patient_experiencing', 10)->nullable();
            $table->boolean('Diaphoresis')->nullable();
            $table->boolean('Grimacing')->nullable();
            $table->boolean('Guarding')->nullable();
            $table->boolean('Moaning')->nullable();
            $table->boolean('Crying')->nullable();
            $table->boolean('Irritability')->nullable();
            $table->boolean('Anger')->nullable();
            $table->boolean('Tense')->nullable();
            $table->boolean('Restlessness')->nullable();
            $table->boolean('changeSigns')->nullable();
            $table->boolean('demonstratedOther')->nullable();
            $table->text('demonstratedOther_1', 55)->nullable();
            $table->boolean('self_assessment')->nullable();
            $table->boolean('implications')->nullable();
            $table->text('implicationsOther', 55)->nullable();
            $table->text('pplicableScore', 55)->nullable();
            $table->text('assessmentUse', 55)->nullable();
            $table->text('painAssessment', 15)->nullable();
            $table->integer('Location_1')->nullable();
            $table->integer('Location_2')->nullable();
            $table->integer('Location_3')->nullable();
            $table->integer('Present_1')->nullable();
            $table->integer('Present_2')->nullable();
            $table->integer('Present_3')->nullable();
            $table->integer('pain_1')->nullable();
            $table->integer('pain_2')->nullable();
            $table->integer('pain_3')->nullable();
            $table->integer('Best_1')->nullable();
            $table->integer('Best_2')->nullable();
            $table->integer('Best_3')->nullable();
            $table->integer('aching_1')->nullable();
            $table->integer('aching_2')->nullable();
            $table->integer('aching_3')->nullable();

            // Pain Assessment IN Advanced Dementia - PAINAD
            $table->integer('Independent_2')->nullable();
            $table->integer('Negative')->nullable();
            $table->integer('Expression')->nullable();
            $table->integer('Language')->nullable();
            $table->integer('Consolability')->nullable();
            $table->integer('TOTAL')->nullable();
            $table->boolean('functionalCognition')->nullable();
            $table->boolean('functionalTransfers')->nullable();
            $table->boolean('Hygiene')->nullable();
            $table->boolean('functionalAmbulation')->nullable();
            $table->boolean('Dressing')->nullable();
            $table->boolean('upper')->nullable();
            $table->boolean('Undressing')->nullable();
            $table->boolean('upper_2')->nullable();
            $table->boolean('lower')->nullable();
            $table->boolean('Stairs')->nullable();
            $table->boolean('ascend')->nullable();
            $table->boolean('descend')->nullable();
            $table->boolean('Eating_2')->nullable();
            $table->boolean('Toileting')->nullable();
            $table->boolean('Appetite')->nullable();
            $table->boolean('Positional')->nullable();
            $table->boolean('positionalOther')->nullable();
            $table->text('positionalOther_1', 55)->nullable();
            $table->text('painImpact', 5)->nullable();
            $table->text('abilityExplain')->nullable();
            $table->boolean('Movement')->nullable();
            $table->boolean('Ambulation_3')->nullable();
            $table->boolean('Immobility')->nullable();
            $table->boolean('immobilityOther')->nullable();
            $table->text('immobilityOther_1', 55)->nullable();
            $table->text('patternPain', 5)->nullable();
            $table->text('patternExplain')->nullable();
            $table->boolean('Heat')->nullable();
            $table->boolean('Ice')->nullable();
            $table->boolean('Massage')->nullable();
            $table->boolean('Repositioning')->nullable();
            $table->boolean('Rest_3')->nullable();
            $table->boolean('Relaxation')->nullable();
            $table->boolean('Medication')->nullable();
            $table->boolean('Diversion')->nullable();
            $table->boolean('diversionOther')->nullable();
            $table->text('diversionOther_1', 55)->nullable();
            $table->text('breakthroughMedication', 15)->nullable();
            $table->text('painRadiate', 15)->nullable();
            $table->text('medicationsAdequate', 5)->nullable();
            $table->boolean('Analgesics')->nullable();
            $table->boolean('Corticosteroid')->nullable();
            $table->boolean('Antianxiety')->nullable();
            $table->boolean('DMARD')->nullable();
            $table->boolean('Anticonvulsant')->nullable();
            $table->boolean('Localanesthetics')->nullable();
            $table->boolean('Antidepressant')->nullable();
            $table->boolean('Narcotic')->nullable();
            $table->boolean('Antimigraine')->nullable();
            $table->boolean('NSAIDs')->nullable();
            $table->boolean('Biologic')->nullable();
            $table->boolean('Salicylate')->nullable();
            $table->text('pharmacologicalComments')->nullable();

            // CARDIOPULMONARY
            $table->boolean('heartProblem')->nullable();
            $table->text('respiratorySystem')->nullable();
            $table->text('breathSounds')->nullable();
            $table->text('rightAnterior', 55)->nullable();
            $table->text('leftAnterior', 55)->nullable();
            $table->text('posteriorRight', 55)->nullable();
            $table->text('posteriorLeft', 55)->nullable();
            $table->text('posteriorLower_right', 55)->nullable();
            $table->text('posteriorLower_left', 55)->nullable();
            $table->boolean('LaboredBbreathing')->nullable();
            $table->text('patientSmoked', 15)->nullable();
            $table->date('lastSmoked')->nullable();
            $table->text('SmokerFrequency', 20)->nullable();
            $table->text('vaporized', 55)->nullable();
            $table->boolean('IfOxygen')->nullable();
            $table->text('Oxygen', 20)->nullable();
            $table->boolean('IfVentilator')->nullable();
            $table->text('Ventilator', 15)->nullable();
            $table->boolean('positiveAirway')->nullable();
            $table->boolean('continuousAirway')->nullable();
            $table->boolean('bi_level')->nullable();
            $table->text('bi_level_1', 55)->nullable();
            $table->boolean('cannula')->nullable();
            $table->boolean('mask')->nullable();
            $table->boolean('trach')->nullable();
            $table->text('saturation', 55)->nullable();
            $table->text('trachSize', 55)->nullable();
            $table->boolean('managesPatient')->nullable();
            $table->boolean('managesRN')->nullable();
            $table->boolean('managesCaregiver')->nullable();
            $table->boolean('managesFamily')->nullable();
            $table->text('IntermittentTreatments', 5)->nullable();
            $table->text('treatmentsExplain')->nullable();
            $table->boolean('IfCough')->nullable();
            $table->text('Cough', 20)->nullable();
            $table->text('coughExplain', 55)->nullable();
            $table->text('breathing', 5)->nullable();
            $table->text('breathingExplain', 55)->nullable();
            $table->text('heartSounds', 15)->nullable();
            $table->boolean('IfPacemaker')->nullable();
            $table->date('heartSounds_date')->nullable();
            $table->date('heartSounds_lasetchecked')->nullable();
            $table->text('colorNailbeds', 55)->nullable();
            $table->boolean('xxtremityCramp')->nullable();
            $table->boolean('painRest')->nullable();
            $table->boolean('painDependent')->nullable();
            $table->boolean('edemaPedal')->nullable();
            $table->boolean('edemaPedal_right_2')->nullable();
            $table->text('edemaPedal_right', 5)->nullable();
            $table->text('CapillaryRefill_right', 10)->nullable();
            $table->boolean('EdemaPedal_4')->nullable();
            $table->boolean('Pedalleft')->nullable();
            $table->text('edemaPedal_left', 5)->nullable();
            $table->text('CapillaryRefill_left', 10)->nullable();
            $table->boolean('edema_1')->nullable();
            $table->boolean('edem')->nullable();
            $table->text('edemaPedal_1', 5)->nullable();
            $table->text('CapillaryRefill_1', 10)->nullable();
            $table->boolean('edema_3')->nullable();
            $table->boolean('edema_4')->nullable();
            $table->text('edemaPedal_2', 5)->nullable();
            $table->text('CapillaryRefill_2', 10)->nullable();
            $table->boolean('Pitting_1')->nullable();
            $table->boolean('Pitting_2')->nullable();
            $table->text('edemaPedal_3', 5)->nullable();
            $table->text('CapillaryRefill_3', 10)->nullable();
            $table->text('sob', 15)->nullable();
            $table->text('Respiratory')->nullable();
            $table->text('respiratoryStatus', 10)->nullable();
            $table->text('dizzyExplain')->nullable();
            $table->boolean('IfdiseaseExplain')->nullable();
            $table->text('diseaseExplain')->nullable();

            // VITAL SIGNS
            $table->text('Temperature', 55)->nullable();
            $table->text('otrat', 20)->nullable();
            $table->boolean('IfApical')->nullable();
            $table->text('Apical', 55)->nullable();
            $table->boolean('IfBrachial')->nullable();
            $table->text('Brachial', 55)->nullable();
            $table->text('PulseRI', 15)->nullable();
            $table->boolean('IfRadial')->nullable();
            $table->text('Radial', 55)->nullable();
            $table->boolean('IfCarotid')->nullable();
            $table->text('Carotid', 55)->nullable();
            $table->text('pulseOximetry', 55)->nullable();
            $table->text('afterActivity', 55)->nullable();
            $table->text('specifyActivity', 55)->nullable();
            $table->text('atRest_5', 55)->nullable();
            $table->text('atRest_1', 55)->nullable();
            $table->text('atRest_2', 55)->nullable();
            $table->text('atRest_3', 55)->nullable();
            $table->text('withActivity', 55)->nullable();
            $table->text('withActivity_1', 55)->nullable();
            $table->text('withActivity_2', 55)->nullable();
            $table->text('withActivity_3', 55)->nullable();
            $table->text('postActivity', 55)->nullable();
            $table->text('postActivity_1', 55)->nullable();
            $table->text('postActivity_2', 55)->nullable();
            $table->text('postActivity_3', 55)->nullable();
            $table->text('Respirations_1', 55)->nullable();
            $table->text('RespirationsRI', 15)->nullable();
            $table->boolean('apneaPeriods')->nullable();
            $table->text('apneaPeriods_sec', 55)->nullable();
            $table->text('RespirationsOR', 15)->nullable();

            // HEIGHT AND WEIGHT
            $table->text('HeightA', 55)->nullable();
            $table->text('HeightAR', 15)->nullable();
            $table->text('Weight', 55)->nullable();
            $table->text('WeightAN', 15)->nullable();
            $table->text('WeightA', 55)->nullable();
            $table->boolean('weightChange')->nullable();
            $table->text('WeightChangeGL', 10)->nullable();
            $table->text('weightChange_lb', 55)->nullable();
            $table->text('weightChange_x', 55)->nullable();
            $table->text('WeightChangeWMY', 15)->nullable();

            // NUTRITIONAL STATUS
            $table->boolean('nutritionalStatus')->nullable();
            $table->boolean('General')->nullable();
            $table->boolean('NAS')->nullable();
            $table->boolean('NPO')->nullable();
            $table->boolean('Controlled')->nullable();
            $table->boolean('Renal')->nullable();
            $table->boolean('renalOther')->nullable();
            $table->text('otherNutritional', 55)->nullable();
            $table->text('nutritionalDiet', 55)->nullable();
            $table->text('IfFluids', 15)->nullable();
            $table->text('increaseFluids', 55)->nullable();
            $table->text('restrictFluids', 55)->nullable();
            $table->text('Appetite_2', 10)->nullable();
            $table->boolean('Nausea')->nullable();
            $table->boolean('Vomiting')->nullable();
            $table->text('frequencyAppetite', 55)->nullable();
            $table->text('appetiteAmount', 55)->nullable();
            $table->boolean('Heartburn')->nullable();
            $table->boolean('Heartburn_1')->nullable();
            $table->text('heartburnOther', 55)->nullable();
            $table->text('FoodAllergies', 15)->nullable();
            $table->text('otherAllergies', 55)->nullable();
            $table->text('AlcoholUse', 20)->nullable();
            $table->text('dailyAmount', 55)->nullable();
            $table->boolean('Parenteral')->nullable();
            $table->boolean('feedingTube')->nullable();
            $table->boolean('Mechanically')->nullable();
            $table->boolean('Mechanically_1')->nullable();
            $table->boolean('illness')->nullable();
            $table->boolean('mealsperDay')->nullable();
            $table->boolean('milkProducts')->nullable();
            $table->boolean('liquor')->nullable();
            $table->boolean('mouthProblems')->nullable();
            $table->boolean('foodNeeded')->nullable();
            $table->boolean('eatsAlone')->nullable();
            $table->boolean('drugs')->nullable();
            $table->boolean('gained')->nullable();
            $table->boolean('notAlways')->nullable();
            $table->boolean('IfRiskinterventionExplain')->nullable();
            $table->text('riskinterventionExplain')->nullable();
            $table->boolean('IfSafetyriskExplain')->nullable();
            $table->text('safetyriskExplain')->nullable();
            $table->boolean('independentlyPlan')->nullable();
            $table->boolean('cognitively')->nullable();
            $table->boolean('prepareLight')->nullable();
            $table->boolean('unablePrepare')->nullable();
            
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
        Schema::dropIfExists('oasis_e_recertification_section_j_s');
    }
};
