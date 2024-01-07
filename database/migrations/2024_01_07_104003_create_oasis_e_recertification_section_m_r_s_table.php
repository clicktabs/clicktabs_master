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
        Schema::create('oasis_e_recertification_section_m_r_s', function (Blueprint $table) {
            $table->id();

            // RECERTIFICATION SUMMARY
            $table->text('CONFINED_TO_HOME', 5)->nullable();
            $table->boolean('adaptiveDevice')->nullable();
            $table->boolean('crutches')->nullable();
            $table->boolean('canes')->nullable();
            $table->boolean('walker_3')->nullable();
            $table->boolean('wheelchair')->nullable();
            $table->boolean('manual')->nullable();
            $table->boolean('motorized')->nullable();
            $table->boolean('prosthetic')->nullable();
            $table->boolean('scooter')->nullable();
            $table->boolean('helper')->nullable();
            $table->boolean('injuryOther')->nullable();
            $table->text('injuryOther_1', 55)->nullable();
            $table->boolean('specialTransportation')->nullable();
            $table->text('special_Transportation', 55)->nullable();
            $table->boolean('hysicalAssist')->nullable();
            $table->text('hysicalAssist_1', 55)->nullable();
            $table->boolean('medicallyContraindicated')->nullable();
            $table->text('edicallyContraindicated_other', 55)->nullable();
            $table->boolean('normalInability')->nullable();
            $table->text('ormalInabilityComment')->nullable();
            $table->boolean('leavingHome')->nullable();
            $table->text('leavingHomeComment')->nullable();
            $table->boolean('desiredFunctional')->nullable();
            $table->text('desiredFunctionalComment')->nullable();
            $table->boolean('functionaltaks')->nullable();
            $table->text('functionaltaksComment')->nullable();
            $table->boolean('expresses')->nullable();
            $table->text('expressesComment')->nullable();

            // SUMMARY CHECKLIST
            $table->integer('CarePlan')->nullable();
            $table->boolean('CareRevised')->nullable();
            $table->boolean('Care')->nullable();
            $table->boolean('CarePatient')->nullable();
            $table->boolean('CareCaregiver')->nullable();
            $table->boolean('Medication_regimen')->nullable();
            $table->text('Medication_regimenComments')->nullable();
            $table->boolean('certifyingPhysician')->nullable();
            $table->boolean('certifyingSN')->nullable();
            $table->boolean('certifyingPT')->nullable();
            $table->boolean('certifyingOT')->nullable();
            $table->boolean('certifyingSLP')->nullable();
            $table->boolean('certifyingMSW')->nullable();
            $table->boolean('certifyingAide')->nullable();
            $table->boolean('certifyingOther')->nullable();
            $table->text('certifyingOther_1', 55)->nullable();
            $table->boolean('communityResources')->nullable();
            $table->boolean('livingWill')->nullable();
            $table->boolean('counselingNeeds')->nullable();
            $table->boolean('unsafeEnvironment')->nullable();
            $table->boolean('unsafeEnvironment_1')->nullable();
            $table->text('unsafeEnvironment_com', 55)->nullable();
            $table->text('unsafeEnvironment_date', 55)->nullable();
            $table->text('CarePlan_2', 10)->nullable();
            $table->text('unsafeEnvironmentComments')->nullable();
            $table->text('REFERRAL', 55)->nullable();
            $table->text('reasonforReferral')->nullable();
            $table->date('reasonforReferral_date')->nullable();
            $table->text('planforNextvisit', 55)->nullable();
            $table->text('recertification', 5)->nullable();
            $table->text('necessityComments')->nullable();
            $table->text('VerbalOrder', 5)->nullable();
            $table->date('specify_date')->nullable();

            // REHABILITATION POTENTIAL FOR ANTICIPATED DISCHARGE PLANNING
            $table->boolean('independentLevel')->nullable();
            $table->boolean('residenceAssistance')->nullable();
            $table->boolean('primaryCaregiver')->nullable();
            $table->boolean('communitysupport')->nullable();
            $table->boolean('Restorative')->nullable();
            $table->boolean('dischargePlan')->nullable();
            $table->boolean('dischargePlanPatient')->nullable();
            $table->boolean('dischargePlanRepresentative')->nullable();
            $table->boolean('dischargePlanRepresentative_other')->nullable();
            $table->text('dischargePlanRepresentative_1', 55)->nullable();
            $table->text('lastassessmentComments')->nullable();
            $table->text('dischargestatusComments')->nullable();

            // CURRENT DME/MEDICAL SUPPLIES/HCBS
            $table->text('DMECompany', 55)->nullable();
            $table->text('DMECompany_Phone', 55)->nullable();
            $table->text('OxygenCompany', 55)->nullable();
            $table->text('OxygenCompany_Phone', 55)->nullable();
            $table->boolean('CommunityOrganizations')->nullable();
            $table->boolean('CommunityServices')->nullable();
            $table->text('CommunityComments')->nullable();
            $table->text('CommunityContact', 55)->nullable();
            $table->text('CommunityPhone', 55)->nullable();
            $table->text('CommunityComment')->nullable();
            $table->boolean('wound_1')->nullable();
            $table->boolean('wound_2')->nullable();
            $table->boolean('wound_3')->nullable();
            $table->boolean('wound_4')->nullable();
            $table->boolean('wound_5')->nullable();
            $table->boolean('wound_6')->nullable();
            $table->boolean('wound_7')->nullable();
            $table->boolean('wound_8')->nullable();
            $table->text('KerlixSize', 55)->nullable();
            $table->boolean('wound_9')->nullable();
            $table->boolean('wound_10')->nullable();
            $table->boolean('wound_11')->nullable();
            $table->boolean('wound_12')->nullable();
            $table->boolean('wound_13')->nullable();
            $table->boolean('wound_14')->nullable();
            $table->boolean('wound_15')->nullable();
            $table->text('woundcomment')->nullable();
            $table->boolean('alcoholSwabs')->nullable();
            $table->boolean('Angiocatheter')->nullable();
            $table->text('AngiocatheterValue', 55)->nullable();
            $table->boolean('Batteries')->nullable();
            $table->text('BatteriesValue', 55)->nullable();
            $table->boolean('Central')->nullable();
            $table->boolean('Extension')->nullable();
            $table->boolean('Infusion_pump')->nullable();
            $table->boolean('Injection_caps')->nullable();
            $table->boolean('IV_pole')->nullable();
            $table->boolean('IV_start')->nullable();
            $table->boolean('IV_tubing')->nullable();
            $table->boolean('Syringes')->nullable();
            $table->text('SyringesValue', 55)->nullable();
            $table->boolean('Tape')->nullable();
            $table->boolean('TapeOther')->nullable();
            $table->text('TapeComments')->nullable();
            $table->boolean('External_catheters')->nullable();
            $table->boolean('ostomyPouch')->nullable();
            $table->text('ostomyPouchValue', 55)->nullable();
            $table->boolean('ostomyWafer')->nullable();
            $table->text('ostomyWaferValue', 55)->nullable();
            $table->boolean('protectant')->nullable();
            $table->boolean('Stoma')->nullable();
            $table->boolean('Underpads')->nullable();
            $table->boolean('Urinary')->nullable();
            $table->boolean('Pouch')->nullable();
            $table->boolean('pouchOther')->nullable();
            $table->text('pouchComments')->nullable();
            $table->boolean('Aceticacid')->nullable();
            $table->boolean('catheterKit')->nullable();
            $table->text('catheterKitValue', 55)->nullable();
            $table->boolean('irrigationTray')->nullable();
            $table->boolean('catheterSaline')->nullable();
            $table->boolean('straightCatheter')->nullable();
            $table->boolean('straightCatheter_1')->nullable();
            $table->text('straightCatheterComments')->nullable();
            $table->boolean('diabeticchemstrips')->nullable();
            $table->boolean('diabeticSyringes')->nullable();
            $table->boolean('diabeticSyringes_1')->nullable();
            $table->text('diabeticSyringesComments')->nullable();
            $table->boolean('EnemaSupplies')->nullable();
            $table->boolean('Feeding_tube')->nullable();
            $table->text('feedingtubeType', 55)->nullable();
            $table->text('feedingtubeSize', 55)->nullable();
            $table->boolean('Gloves')->nullable();
            $table->boolean('Sterile_1')->nullable();
            $table->boolean('NonSterile')->nullable();
            $table->boolean('medBox')->nullable();
            $table->boolean('stapleremovalKit')->nullable();
            $table->boolean('steriStrips')->nullable();
            $table->boolean('sutureremovalKit')->nullable();
            $table->boolean('sutureremovalKit_other')->nullable();
            $table->text('sutureremovalKitcomments')->nullable();
            $table->boolean('alternative')->nullable();
            $table->text('alternativeComments')->nullable();
            $table->boolean('bathBench')->nullable();
            $table->boolean('Brace')->nullable();
            $table->boolean('Orthotics')->nullable();
            $table->text('suppliesComments')->nullable();
            $table->boolean('Cane_1')->nullable();
            $table->boolean('Commode')->nullable();
            $table->boolean('dressingAid')->nullable();
            $table->boolean('Eggcrate')->nullable();
            $table->boolean('enteralFeeding')->nullable();
            $table->boolean('grabBars')->nullable();
            $table->text('grabBarsComments')->nullable();
            $table->boolean('handheldShower')->nullable();
            $table->boolean('hospitalBed')->nullable();
            $table->boolean('semiElectric')->nullable();
            $table->boolean('hoyerLift')->nullable();
            $table->boolean('kneeScooter')->nullable();
            $table->boolean('medicalAlert')->nullable();
            $table->boolean('Nebulizer')->nullable();
            $table->boolean('oxygenConcentrator')->nullable();
            $table->boolean('relievingDevice')->nullable();
            $table->text('relievingDeviceValue', 55)->nullable();
            $table->boolean('Prosthesis')->nullable();
            $table->boolean('prosthesisRUE')->nullable();
            $table->boolean('prosthesisRLE')->nullable();
            $table->boolean('prosthesisLUE')->nullable();
            $table->boolean('prosthesisLLE')->nullable();
            $table->boolean('prosthesisOther')->nullable();
            $table->text('prosthesisComments')->nullable();
            $table->boolean('raiseToilet')->nullable();
            $table->boolean('Reacher')->nullable();
            $table->boolean('mattressOverlay')->nullable();
            $table->text('mattressOverlayValue', 55)->nullable();
            $table->boolean('suctionMachine')->nullable();
            $table->boolean('TENSunit')->nullable();
            $table->boolean('transferEquipment')->nullable();
            $table->boolean('Board')->nullable();
            $table->boolean('Lift')->nullable();
            $table->text('Ventilator')->nullable();
            $table->boolean('Walker_2')->nullable();
            $table->boolean('Wheelchair_2')->nullable();
            $table->boolean('OtherSupplies')->nullable();
            $table->text('OtherSuppliesComments')->nullable();

            // PHYSICIAN VERBAL ORDER
            $table->boolean('IfphysicainName')->nullable();
            $table->text('physicainName', 55)->nullable();
            $table->boolean('verbalOrder_2')->nullable();
            $table->text('Signature', 55)->nullable();
            $table->date('signatureDate')->nullable();
            $table->text('signatureTime', 15)->nullable();
            $table->text('physicianSignature', 55)->nullable();
            $table->date('physicianDate')->nullable();
            $table->text('physicianTime', 15)->nullable();

            // SIGNATURES/DATES
            $table->text('pfcr', 55)->nullable();
            $table->date('pfcr_date')->nullable();
            $table->text('pfcr_time', 15)->nullable();
            $table->text('pcf_signature', 55)->nullable();
            $table->date('pcf_date')->nullable();
            $table->text('pcf_time', 15)->nullable();
            $table->text('AgencyName', 55)->nullable();
            $table->text('AgencyPhone', 55)->nullable();
            
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
        Schema::dropIfExists('oasis_e_recertification_section_m_r_s');
    }
};
