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
        Schema::create('oasis_e_recertification_section_g_s', function (Blueprint $table) {
            $table->id();
            // Section G: Functional Status
            $table->integer('Grooming')->nullable();
            $table->integer('catdub')->nullable();
            $table->integer('Groom')->nullable();
            $table->integer('Bathing')->nullable();
            $table->integer('ToiletTransferring')->nullable();
            $table->integer('Transferring')->nullable();
            $table->integer('Ambulation')->nullable();
            $table->text('ifhha', 15)->nullable();
            $table->text('reasonforNeed')->nullable();
            $table->text('OccupationalTherapy', 15)->nullable();
            $table->text('OccupationalTherapyO', 5)->nullable();
            $table->text('Indications')->nullable();

            // ACTIVITIES PERMITTED
            $table->boolean('No_Restrictions')->nullable();
            $table->boolean('Complete_bedrest')->nullable();
            $table->boolean('Bathroomprivileges')->nullable();
            $table->boolean('tolerated')->nullable();
            $table->boolean('transfer_bedchair')->nullable();
            $table->boolean('exercisespPprescribed')->nullable();
            $table->boolean('partialWeight')->nullable();
            $table->boolean('Independent')->nullable();
            $table->boolean('Crutches')->nullable();
            $table->boolean('Cane')->nullable();
            $table->boolean('Wheelchair')->nullable();
            $table->boolean('Walker_2')->nullable();
            $table->text('activities_1')->nullable();
            $table->text('activities_2')->nullable();
            $table->text('commentsRegarding')->nullable();

            // FUNCTIONAL LIMITATIONS
            $table->boolean('Amputation')->nullable();
            $table->boolean('Paralysis')->nullable();
            $table->boolean('legallyBlind')->nullable();
            $table->boolean('Bowel')->nullable();
            $table->boolean('Endurance')->nullable();
            $table->boolean('Dyspnea')->nullable();
            $table->boolean('Contracture')->nullable();
            $table->boolean('Ambulation_2')->nullable();
            $table->text('limitationOther', 55)->nullable();
            $table->boolean('Hearing_2')->nullable();
            $table->boolean('Speech')->nullable();
            $table->text('hearingOther', 55)->nullable();

            // Section GG: Functional Abilities and Goals
            $table->integer('SelfCare')->nullable();
            $table->integer('code_reason')->nullable();
            $table->boolean('Eating')->nullable();
            $table->boolean('oralHygiene')->nullable();
            $table->boolean('toiletingHygiene')->nullable();

            // ADDITIONAL COMMENTS
            $table->text('additionalComment')->nullable();
            $table->integer('Mobility')->nullable();
            $table->integer('Mobility_CS')->nullable();
            $table->boolean('rollLeft')->nullable();
            $table->boolean('sitLying')->nullable();
            $table->boolean('Lying')->nullable();
            $table->boolean('Sit')->nullable();
            $table->boolean('Chair')->nullable();
            $table->boolean('Toilet')->nullable();
            $table->boolean('Walk')->nullable();
            $table->boolean('WalkFeet')->nullable();
            $table->boolean('WalkOnce')->nullable();
            $table->boolean('WalkUneven')->nullable();
            $table->boolean('Walkstep')->nullable();
            $table->boolean('WalkAbility')->nullable();
            $table->text('dpuws', 10)->nullable();
            $table->boolean('wheelTurns')->nullable();

            // MUSCULOSKELETAL
            $table->boolean('musculoskeletal_np')->nullable();
            $table->text('musculoskeletalSystem')->nullable();
            $table->boolean('FractureLocation')->nullable();
            $table->text('Fracture', 55)->nullable();
            $table->boolean('spj')->nullable();
            $table->text('Swollen', 55)->nullable();
            $table->text('Contracture_2', 55)->nullable();
            $table->text('contractureLocation', 55)->nullable();
            $table->text('Hand_grips', 15)->nullable();
            $table->boolean('strongL')->nullable();
            $table->boolean('strongR')->nullable();
            $table->boolean('weakR')->nullable();
            $table->boolean('weakL')->nullable();
            $table->boolean('motorChanges')->nullable();
            $table->boolean('Fine')->nullable();
            $table->boolean('Gross')->nullable();
            $table->text('Gross_1', 55)->nullable();
            $table->boolean('Weakness')->nullable();
            $table->boolean('UE')->nullable();
            $table->boolean('LE')->nullable();
            $table->text('WeaknessOther', 55)->nullable();
            $table->boolean('AtrophyYes')->nullable();
            $table->text('Atrophy', 55)->nullable();
            $table->boolean('DecreasedYes')->nullable();
            $table->text('decreasedROM', 55)->nullable();
            $table->boolean('Shuffling')->nullable();
            $table->boolean('Widebased')->nullable();
            $table->boolean('Amputations')->nullable();
            $table->boolean('BK')->nullable();
            $table->boolean('AK')->nullable();
            $table->boolean('UE_2')->nullable();
            $table->boolean('R')->nullable();
            $table->boolean('L')->nullable();
            $table->text('shufflingOther', 55)->nullable();
            $table->boolean('shufflingOther_yes')->nullable();
            $table->text('shufflingOther_1', 55)->nullable();
            $table->text('PatientFunctionalAbility', 10)->nullable();
            $table->text('PatientFunctionalAbilityExplain')->nullable();

            // FALL RISK ASSESSMENT
            $table->text('fallsReported', 10)->nullable();
            $table->text('describeFall')->nullable();
            $table->text('fallsReported_2', 10)->nullable();
            $table->text('describeFactors')->nullable();
            $table->integer('age')->nullable();
            $table->integer('diagnosisMore')->nullable();
            $table->integer('priorHistory')->nullable();
            $table->integer('Incontinence')->nullable();
            $table->integer('visualImpairment')->nullable();
            $table->integer('impairedFunctional')->nullable();
            $table->integer('Environmental')->nullable();
            $table->integer('polyPharmacy')->nullable();
            $table->integer('polyAffecting')->nullable();
            $table->integer('cognitiveImpairment')->nullable();
            $table->integer('missouriAlliance')->nullable();
            $table->text('commentsFallrisk')->nullable();

            // URINARY ELIMINATION
            $table->boolean('noUEProblem')->nullable();
            $table->text('diagnosedDisorder')->nullable();
            $table->boolean('Observed')->nullable();
            $table->boolean('Reported')->nullable();
            $table->boolean('Urgency')->nullable();
            $table->boolean('Frequency')->nullable();
            $table->boolean('Burning')->nullable();
            $table->boolean('Hesitancy')->nullable();
            $table->boolean('increasedUrination')->nullable();
            $table->boolean('decreasedUrination')->nullable();
            $table->text('UColor', 15)->nullable();
            $table->text('colorOther', 20)->nullable();
            $table->boolean('Clear')->nullable();
            $table->boolean('Cloudy')->nullable();
            $table->boolean('Sediment')->nullable();
            $table->boolean('Mucous')->nullable();
            $table->text('UOdor', 10)->nullable();
            $table->text('phiwuio', 15)->nullable();
            $table->text('otherIncontinence')->nullable();
            $table->boolean('urinaryCatheter')->nullable();
            $table->text('urinaryCatheterType', 55)->nullable();
            $table->date('dateLastChanged')->nullable();
            $table->boolean('indwellingCatheter')->nullable();
            $table->text('indwellingChange_size', 20)->nullable();
            $table->boolean('indwellingCatheter_1')->nullable();
            $table->text('indwellingInserted_size', 20)->nullable();
            $table->text('balloon', 15)->nullable();
            $table->boolean('balloonInflated')->nullable();
            $table->text('singleAnchor_ml', 20)->nullable();
            $table->boolean('balloon_2')->nullable();
            $table->text('secondTip_ml', 20)->nullable();
            $table->text('difficulty', 15)->nullable();
            $table->text('withdifficultyExplain')->nullable();
            $table->text('irrigationSolution', 55)->nullable();
            $table->text('Amount_ml', 55)->nullable();
            $table->text('irrigationFrequency', 55)->nullable();
            $table->text('returnsFrequency', 55)->nullable();
            $table->text('ptpw', 5)->nullable();
            $table->boolean('suprapubic')->nullable();
            $table->boolean('Urostomy')->nullable();
            $table->text('urostomyDescribe')->nullable();
            $table->boolean('OstomyPatient')->nullable();
            $table->boolean('OstomyCaregiver')->nullable();
            $table->boolean('OstomyFamily')->nullable();
            $table->boolean('OstomyNurse')->nullable();

            // BOWEL ELIMINATION
            $table->boolean('bowelElimination')->nullable();
            $table->text('GIsystem')->nullable();
            $table->boolean('Constipation')->nullable();
            $table->boolean('Diarrhea')->nullable();
            $table->boolean('Hemorrhoids')->nullable();
            $table->boolean('lasBM')->nullable();
            $table->text('lasBM_1', 55)->nullable();
            $table->boolean('bowelSounds')->nullable();
            $table->text('active', 55)->nullable();
            $table->text('absent', 55)->nullable();
            $table->text('hypoactive', 55)->nullable();
            $table->text('hyperactive', 55)->nullable();
            $table->boolean('noProblem')->nullable();
            $table->boolean('Tenderness')->nullable();
            $table->boolean('Pain')->nullable();
            $table->boolean('Distention')->nullable();
            $table->text('HardSoft', 10)->nullable();
            $table->boolean('abdominalGirth')->nullable();
            $table->text('abdominalGirth_1', 55)->nullable();
            $table->boolean('abdominalOther')->nullable();
            $table->text('abdominalOther_1', 55)->nullable();
            $table->boolean('girthOther')->nullable();
            $table->text('bowelRregimen')->nullable();
            $table->boolean('Laxative')->nullable();
            $table->boolean('Enema')->nullable();
            $table->text('enemauseFrequency', 55)->nullable();
            $table->boolean('ifInvoluntaryIncontinence')->nullable();
            $table->text('involuntaryIncontinence')->nullable();
            $table->boolean('ifIncontinenceProducts')->nullable();
            $table->text('incontinenceProducts')->nullable();
            $table->boolean('Ileostomy')->nullable();
            $table->boolean('colostomySite')->nullable();
            $table->text('Colostomy_site')->nullable();
            $table->boolean('managedPatient')->nullable();
            $table->boolean('managedCaregiver')->nullable();
            $table->boolean('managedFamily')->nullable();
            $table->boolean('managedNurse')->nullable();
            $table->boolean('ifOstomy_other')->nullable();
            $table->text('Ostomy_other', 55)->nullable();
            $table->boolean('bowelElimination_3')->nullable();
            $table->boolean('bladderElimination_4')->nullable();
            $table->text('eliminationNoYes', 5)->nullable();
            $table->text('theElimination')->nullable();

            // GENITALIA
            $table->boolean('genitalia')->nullable();
            $table->boolean('notAssessed')->nullable();
            $table->boolean('dischargeDrainage')->nullable();
            $table->text('Otherdischargedrainage', 55)->nullable();
            $table->boolean('Lesions')->nullable();
            $table->boolean('Blisters')->nullable();
            $table->boolean('Masses')->nullable();
            $table->boolean('Cysts')->nullable();
            $table->boolean('Inflammation')->nullable();
            $table->boolean('surgicalAlteration')->nullable();
            $table->text('MaleFemale', 10)->nullable();
            $table->boolean('surgicalalterationOther')->nullable();
            $table->text('surgicalalterationOther_1', 55)->nullable();
            $table->boolean('prostateProblem')->nullable();
            $table->boolean('BPH')->nullable();
            $table->boolean('TURP')->nullable();
            $table->boolean('TURP_1')->nullable();
            $table->date('prostateProblem_date')->nullable();
            $table->boolean('SelfTesticular')->nullable();
            $table->text('selftesticularFrequency', 55)->nullable();
            $table->date('lastExam')->nullable();
            $table->boolean('Menopause')->nullable();
            $table->boolean('Hysterectomy')->nullable();
            $table->date('HysterectomyDate')->nullable();
            $table->date('datelastPAP')->nullable();
            $table->text('Result', 55)->nullable();
            $table->boolean('BreastselfExam')->nullable();
            $table->text('BreastselfExam_Frequency', 55)->nullable();
            $table->date('BreastselfExam_date')->nullable();
            $table->boolean('nippleDischarge')->nullable();
            $table->boolean('nippleDischarge_R')->nullable();
            $table->date('nippleDischarge_R_date')->nullable();
            $table->boolean('nippleDischarge_L')->nullable();
            $table->date('nippleDischarge_L_date')->nullable();

            // ENDOCRINE
            $table->boolean('endocrineNoproblem')->nullable();
            $table->boolean('endocrineDiabetes')->nullable();
            $table->text('DiabetesType', 20)->nullable();
            $table->text('Otherdiabetes', 55)->nullable();
            $table->text('dateOnset', 55)->nullable();
            $table->boolean('diabeticDiet')->nullable();
            $table->boolean('oralMedication')->nullable();
            $table->boolean('injectableMedication')->nullable();
            $table->text('diabeticMedicatio', 5)->nullable();
            $table->text('diabeticMedication', 55)->nullable();
            $table->boolean('patientAdministered')->nullable();
            $table->boolean('caregiverAdministered')->nullable();
            $table->boolean('nurseAdministered')->nullable();
            $table->boolean('familyAdministered')->nullable();
            $table->boolean('Otheradministered')->nullable();
            $table->text('OtheradministeredBy', 55)->nullable();
            $table->text('ReportsSymptoms', 20)->nullable();
            $table->boolean('increasedUrination_2')->nullable();
            $table->boolean('increasedThirst')->nullable();
            $table->boolean('Sweats')->nullable();
            $table->boolean('increasedHunger')->nullable();
            $table->boolean('Weak')->nullable();
            $table->boolean('Faint')->nullable();
            $table->boolean('Stupor')->nullable();
            $table->text('A1C', 55)->nullable();
            $table->boolean('patientReported')->nullable();
            $table->boolean('labSlip')->nullable();
            $table->date('labSlip_date')->nullable();
            $table->text('BS', 55)->nullable();
            $table->date('BS_date')->nullable();
            $table->text('BS_time', 15)->nullable();
            $table->boolean('FBS')->nullable();
            $table->boolean('beforeMeal')->nullable();
            $table->boolean('afterMeal')->nullable();
            $table->boolean('Random')->nullable();
            $table->boolean('HS')->nullable();
            $table->boolean('bloodSugar')->nullable();
            $table->text('bloodsugarRanges', 55)->nullable();
            $table->boolean('Patient_reported')->nullable();
            $table->boolean('Caregiver_reported')->nullable();
            $table->boolean('Family_reported')->nullable();
            $table->boolean('patientMonitor')->nullable();
            $table->boolean('caregiverMonitor')->nullable();
            $table->boolean('familyMonitor')->nullable();
            $table->boolean('nurseMonitor')->nullable();
            $table->boolean('othernurseMonitor')->nullable();
            $table->text('otherMonitor', 55)->nullable();
            $table->boolean('frequencyofMmonitoring')->nullable();
            $table->text('frequencyofMmonitoring_1', 55)->nullable();
            $table->boolean('Competency')->nullable();
            $table->text('competencyGlucometer', 55)->nullable();
            $table->boolean('diseaseManagement')->nullable();
            $table->text('diseaseManagementExplain')->nullable();
            $table->boolean('diseaseEndocrine')->nullable();
            $table->text('diseaseHematology')->nullable();
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
        Schema::dropIfExists('oasis_e_recertification_section_g_s');
    }
};
