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
        Schema::create('oasis_e_recertification_section_m_m_s', function (Blueprint $table) {
            $table->id();

            // MEDICATIONS
            $table->boolean('drugRegimen')->nullable();
            $table->date('drugRegimenDate')->nullable();
            $table->text('DrugRegimen_2', 20)->nullable();
            $table->boolean('Potential')->nullable();
            $table->boolean('drugReactions')->nullable();
            $table->boolean('Ineffective')->nullable();
            $table->boolean('Significant')->nullable();
            $table->boolean('significantDrug')->nullable();
            $table->boolean('Duplicate')->nullable();
            $table->boolean('NonCompliance')->nullable();
            $table->boolean('highRisk')->nullable();
            $table->text('highriskcomment')->nullable();
            $table->boolean('medicationAllergies')->nullable();
            $table->boolean('Aspirin')->nullable();
            $table->boolean('Penicillin')->nullable();
            $table->boolean('Sulfa')->nullable();
            $table->boolean('medicationallergiesOther')->nullable();
            $table->text('medicationallergiesOther_1', 55)->nullable();
            $table->text('Psychotropic', 5)->nullable();
            $table->text('FinancialAbility', 5)->nullable();
            $table->boolean('FinancialAbility_1')->nullable();
            $table->text('MSWreferral', 5)->nullable();
            $table->text('MSWreferralComment')->nullable();
            $table->text('problemsAdministering', 5)->nullable();
            $table->text('administeringComments')->nullable();

            // INFUSION
            $table->boolean('infusion')->nullable();
            $table->text('patientIV', 5)->nullable();
            $table->text('patient_IV', 55)->nullable();
            $table->text('numberSite', 55)->nullable();
            $table->text('siteLocations', 55)->nullable();
            $table->integer('lumen')->nullable();
            $table->date('insertionDate')->nullable();
            $table->text('flushSolution', 55)->nullable();
            $table->text('LumenPatent', 5)->nullable();
            $table->text('LumenpatentComments', 55)->nullable();
            $table->boolean('notFlushed')->nullable();
            $table->text('injectionCap', 55)->nullable();
            $table->text('DressingChange', 5)->nullable();
            $table->text('changeFrequency', 55)->nullable();
            $table->boolean('flushed')->nullable();
            $table->boolean('Sterile')->nullable();
            $table->boolean('Clean')->nullable();
            $table->boolean('performedPatient')->nullable();
            $table->boolean('performedNurse')->nullable();
            $table->boolean('performedCaregiver')->nullable();
            $table->boolean('performedFamily')->nullable();
            $table->boolean('performedOther')->nullable();
            $table->text('performedOther_1', 55)->nullable();
            $table->text('skinCondition', 55)->nullable();
            $table->text('infusionSolution', 55)->nullable();
            $table->boolean('pumpType')->nullable();
            $table->text('pumpType_1', 55)->nullable();
            $table->boolean('administeredbyPatient')->nullable();
            $table->boolean('administeredbyNurse')->nullable();
            $table->boolean('administeredbyCaregiver')->nullable();
            $table->boolean('administeredbyFamily')->nullable();
            $table->boolean('administeredbyOther')->nullable();
            $table->text('administeredby_Other', 55)->nullable();
            $table->text('intravenous', 55)->nullable();
            $table->text('InfusionProvided', 5)->nullable();
            $table->text('infusion_Provided', 55)->nullable();

            // IMMUNIZATIONS
            $table->boolean('InfluenzaFlu')->nullable();
            $table->text('Influenza', 5)->nullable();
            $table->boolean('accordingPneumonia')->nullable();
            $table->boolean('accordingTetanus')->nullable();
            $table->boolean('accordingShingles')->nullable();
            $table->boolean('accordingHepatitis')->nullable();
            $table->boolean('otherHepatitis')->nullable();
            $table->text('immunizationGuidelines', 55)->nullable();
            $table->text('Needs', 55)->nullable();
            $table->boolean('Vaccination')->nullable();
            $table->boolean('Vaccination_1')->nullable();
            $table->text('vaccination_booster', 5)->nullable();
            $table->text('personalPreferences')->nullable();

            // REFUSED CARES
            $table->boolean('refusedPatient')->nullable();
            $table->boolean('refusedRepresentative')->nullable();
            $table->boolean('refusedOther')->nullable();
            $table->text('refusedOther1', 55)->nullable();
            $table->boolean('refuseCare')->nullable();
            $table->boolean('refuseService')->nullable();
            $table->text('ServiceYesNo', 5)->nullable();
            $table->text('serviceExplain')->nullable();
            $table->boolean('theCare')->nullable();
            $table->boolean('theServices')->nullable();
            $table->text('ServiceYesNo_1', 5)->nullable();
            $table->text('thecareExplain')->nullable();

            // PATIENT/CAREGIVER/REPRESENTATIVE/FAMILY EDUCATION AND TRAINING FOR CARE PLANNING
            $table->text('WoundCare_2', 5)->nullable();
            $table->boolean('woundCarePatient')->nullable();
            $table->boolean('woundCareCaregiver')->nullable();
            $table->boolean('woundCareRepresentative')->nullable();
            $table->boolean('woundCareFamily')->nullable();
            $table->boolean('diabeticFoot')->nullable();
            $table->boolean('diabeticCare')->nullable();
            $table->text('Diabetic', 5)->nullable();
            $table->boolean('diabeticPatient')->nullable();
            $table->boolean('diabeticCaregiver')->nullable();
            $table->boolean('diabeticRepresentative')->nullable();
            $table->boolean('diabeticFamily')->nullable();
            $table->text('InsulinAdministration', 5)->nullable();
            $table->boolean('insulinPatient')->nullable();
            $table->boolean('insulinCaregiver')->nullable();
            $table->boolean('insulinRepresentative')->nullable();
            $table->boolean('insulinFamily')->nullable();
            $table->text('GlucometerUse', 5)->nullable();
            $table->boolean('glucometer')->nullable();
            $table->boolean('glucometerPatient')->nullable();
            $table->boolean('glucometerRepresentative')->nullable();
            $table->boolean('glucometerFamily')->nullable();
            $table->text('NutritionalManagement', 5)->nullable();
            $table->boolean('nutritionalPatient')->nullable();
            $table->boolean('nutritionalCaregiver')->nullable();
            $table->boolean('nutritionalRepresentative')->nullable();
            $table->boolean('nutritionalFamily')->nullable();
            $table->boolean('Oral')->nullable();
            $table->boolean('Injected')->nullable();
            $table->boolean('Infused')->nullable();
            $table->boolean('Inhaled')->nullable();
            $table->boolean('Topical')->nullable();
            $table->text('MedicationAdministration', 5)->nullable();
            $table->boolean('MedicationAdministration_Patient')->nullable();
            $table->boolean('MedicationAdministration_Caregiver')->nullable();
            $table->boolean('MedicationAdministration_Representative')->nullable();
            $table->boolean('MedicationAdministration_Family')->nullable();
            $table->text('PainManagement', 5)->nullable();
            $table->boolean('painManagement_Patient')->nullable();
            $table->boolean('painManagement_Caregiver')->nullable();
            $table->boolean('painManagement_Representative')->nullable();
            $table->boolean('painManagement_Family')->nullable();
            $table->text('OxygenUse', 5)->nullable();
            $table->boolean('oxygenPatient')->nullable();
            $table->boolean('oxygenCaregiver')->nullable();
            $table->boolean('oxygenRepresentative')->nullable();
            $table->boolean('oxygenFamily')->nullable();
            $table->text('medicalDevices', 5)->nullable();
            $table->boolean('medicalPatient')->nullable();
            $table->boolean('medicalCaregiver')->nullable();
            $table->boolean('medicalRepresentative')->nullable();
            $table->boolean('medicalFamily')->nullable();
            $table->text('PressureReduction', 5)->nullable();
            $table->boolean('pressurePatient')->nullable();
            $table->boolean('pressureCaregiver')->nullable();
            $table->boolean('pressureRepresentative')->nullable();
            $table->boolean('pressureFamily')->nullable();
            $table->text('CatheterCare', 5)->nullable();
            $table->boolean('catheterPatient')->nullable();
            $table->boolean('catheterCaregiver')->nullable();
            $table->boolean('catheterRepresentative')->nullable();
            $table->boolean('catheterFamily')->nullable();
            $table->text('TrachCare', 5)->nullable();
            $table->boolean('trachPatient')->nullable();
            $table->boolean('trachCaregiver')->nullable();
            $table->boolean('trachRepresentative')->nullable();
            $table->boolean('trachFamily')->nullable();
            $table->text('OstomyCare', 5)->nullable();
            $table->boolean('ostomyPatient')->nullable();
            $table->boolean('ostomyCaregiver')->nullable();
            $table->boolean('ostomyRepresentative')->nullable();
            $table->boolean('ostomyFamily')->nullable();
            $table->text('PreparednessPlan', 5)->nullable();
            $table->boolean('emergencyPatient')->nullable();
            $table->boolean('emergencyCaregiver')->nullable();
            $table->boolean('emergencyRepresentative')->nullable();
            $table->boolean('emergencyFamily')->nullable();
            $table->text('InfectionControl', 5)->nullable();
            $table->boolean('infectioncontrolPatient')->nullable();
            $table->boolean('infectioncontrolCaregiver')->nullable();
            $table->boolean('infectioncontrolRepresentative')->nullable();
            $table->boolean('infectioncontrolFamily')->nullable();
            $table->text('ReportToAgency', 5)->nullable();
            $table->boolean('agencyPatient')->nullable();
            $table->boolean('agencyCaregiver')->nullable();
            $table->boolean('agencyRepresentative')->nullable();
            $table->boolean('agencyFamily')->nullable();
            $table->text('PatientRights', 5)->nullable();
            $table->boolean('rightsPatient')->nullable();
            $table->boolean('rightsCaregiver')->nullable();
            $table->boolean('rightsRepresentative')->nullable();
            $table->boolean('rightsFamily')->nullable();
            $table->text('rightsComments')->nullable();
            $table->boolean('methodEducate')->nullable();
            $table->boolean('methodTrain')->nullable();
            $table->boolean('methodPatient')->nullable();
            $table->boolean('methodCaregiver')->nullable();
            $table->boolean('methodRepresentative')->nullable();
            $table->boolean('methodFamily')->nullable();
            $table->boolean('methodusedPatient')->nullable();
            $table->boolean('methodusedCaregiver')->nullable();
            $table->boolean('methodusedRepresentative')->nullable();
            $table->boolean('methodusedFamilyeducated')->nullable();
            $table->text('methodusedFamilyeducated_other', 55)->nullable();
            $table->boolean('teachPatient')->nullable();
            $table->boolean('teachCaregiver')->nullable();
            $table->boolean('teachRepresentative')->nullable();
            $table->boolean('teachFamily')->nullable();
            $table->boolean('teachEducation')->nullable();
            $table->boolean('teachTraining')->nullable();
            $table->boolean('usedteachPatient')->nullable();
            $table->boolean('usedteachCaregiver')->nullable();
            $table->boolean('usedteachRepresentative')->nullable();
            $table->boolean('usedteachFamily')->nullable();
            $table->text('actionPlan', 5)->nullable();

            // NURSING INTERVENTIONS/INSTRUCTIONS
            $table->boolean('skilledObservation')->nullable();
            $table->boolean('foleyCare')->nullable();
            $table->boolean('Wound_care')->nullable();
            $table->boolean('Wound_dressing')->nullable();
            $table->boolean('Pressure_ulcer')->nullable();
            $table->boolean('Venipuncture')->nullable();
            $table->boolean('ngchange')->nullable();
            $table->boolean('NG_tube')->nullable();
            $table->boolean('G_tube')->nullable();
            $table->boolean('Adminofvitamin')->nullable();
            $table->boolean('Prep')->nullable();
            $table->boolean('adminInsulin')->nullable();
            $table->boolean('Teach_admin')->nullable();
            $table->boolean('admin_teach')->nullable();
            $table->boolean('ivs')->nullable();
            $table->boolean('Clysis')->nullable();
            $table->boolean('Teach_ostomy')->nullable();
            $table->boolean('conduit_care')->nullable();
            $table->boolean('Teaching')->nullable();
            $table->boolean('tube_feedings')->nullable();
            $table->boolean('teaching_1')->nullable();
            $table->boolean('careofTrach')->nullable();
            $table->boolean('terminally')->nullable();
            $table->boolean('IM_injection')->nullable();
            $table->boolean('SQ_injection')->nullable();
            $table->boolean('Psych_intervention')->nullable();
            $table->boolean('SS_infection')->nullable();
            $table->boolean('Diabetic_observation')->nullable();
            $table->boolean('diabetic_care')->nullable();
            $table->boolean('Observe')->nullable();
            $table->boolean('Teach_medication')->nullable();
            $table->boolean('effects')->nullable();
            $table->boolean('side_effects')->nullable();
            $table->boolean('Physiology_Disease')->nullable();
            $table->boolean('Diet_teaching')->nullable();
            $table->boolean('Safety_factors')->nullable();
            $table->boolean('Prenatal_assessment')->nullable();
            $table->boolean('Post_partum')->nullable();
            $table->boolean('Teachcareof')->nullable();
            $table->boolean('infant')->nullable();
            $table->boolean('child')->nullable();
            $table->boolean('Pain_management')->nullable();
            $table->boolean('Fall_safety')->nullable();
            $table->boolean('Fall_safetyOther')->nullable();
            $table->text('Fall_safetyOtherExplain')->nullable();
            $table->text('SUPERVISORY_VISIT', 5)->nullable();
            $table->text('SUPERVISORY_VISIT_SU', 5)->nullable();
            $table->text('CARE_PLAN_UPDATED', 5)->nullable();
            $table->text('CARE_PLAN_FOLLOWED', 5)->nullable();
            $table->text('CARE_PLAN_FOLLOWED_1')->nullable();
            $table->text('STAFF', 15)->nullable();
            $table->boolean('AIDE')->nullable();
            $table->boolean('LPN_LVN')->nullable();
            $table->text('nextScheduled', 55)->nullable();
            $table->text('PFR_SATISFIED', 20)->nullable();
            $table->text('IScomment')->nullable();
            $table->text('OBSERVATIONcomment')->nullable();
            $table->text('EDUCATIONcomment')->nullable();
            
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
        Schema::dropIfExists('oasis_e_recertification_section_m_m_s');
    }
};
