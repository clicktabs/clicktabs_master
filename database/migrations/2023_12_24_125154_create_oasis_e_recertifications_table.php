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
        Schema::create('oasis_e_recertifications', function (Blueprint $table) {
            $table->id();

            // Section A: Administrative Information
            $table->text('dopca', 55)->nullable();
            $table->text('monthAssessment', 55)->nullable();
            $table->text('dayAssessment', 55)->nullable();
            $table->text('yearAssessment', 55)->nullable();
            $table->text('TypeOfVisit', 55)->nullable();
            $table->text('OtherTypeOfVisit', 55)->nullable();
            $table->boolean('Recertification')->nullable();
            $table->boolean('Other_followup')->nullable();
            $table->text('M0100_explain')->nullable();
            $table->text('EpisodeTiming', 55)->nullable();

            // PATIENT CONTACTS/CAREGIVERS
            $table->boolean('Patient')->nullable();
            $table->boolean('Caregiver')->nullable();
            $table->boolean('Family_member')->nullable();
            $table->boolean('Representative')->nullable();
            $table->boolean('familyCaregiver')->nullable();
            $table->boolean('caregiver_other')->nullable();
            $table->text('caregiver_other_1', 55)->nullable();
            $table->text('patientRepresentative', 20)->nullable();
            $table->text('representativePerson', 55)->nullable();
            $table->text('representativePerson_1', 55)->nullable();
            $table->text('relationship', 55)->nullable();
            $table->text('relationship_other_1', 55)->nullable();
            $table->text('address')->nullable();
            $table->text('city', 55)->nullable();
            $table->text('state', 55)->nullable();
            $table->text('zip', 55)->nullable();
            $table->text('phone', 55)->nullable();
            $table->text('email', 55)->nullable();
            $table->text('patient_1', 55)->nullable();
            $table->text('patientrepresentative_1', 55)->nullable();
            $table->text('caregiverName', 55)->nullable();
            $table->text('relationship_1', 55)->nullable();
            $table->text('caregiverName_1', 55)->nullable();
            $table->text('address_1')->nullable();
            $table->text('city_1', 55)->nullable();
            $table->text('state_1', 55)->nullable();
            $table->text('zip_1', 55)->nullable();
            $table->text('phone_1', 55)->nullable();
            $table->text('email_1', 55)->nullable();
            $table->text('PaidService', 10)->nullable();
            $table->text('companyName', 55)->nullable();
            $table->text('phoneNumber', 20)->nullable();
            $table->text('contactName', 55)->nullable();
            $table->text('PRIORITY', 55)->nullable();
            $table->text('EmergencyContact', 55)->nullable();
            $table->text('EmergencyContact_1', 55)->nullable();
            $table->text('relationship_2', 20)->nullable();
            $table->text('relationship_2_other', 55)->nullable();
            $table->text('address_2')->nullable();
            $table->text('city_2', 55)->nullable();
            $table->text('state_2', 55)->nullable();
            $table->text('zip_2', 55)->nullable();
            $table->text('phone_2', 55)->nullable();
            $table->text('email_2', 55)->nullable();
            $table->text('caregiver_2', 55)->nullable();
            $table->text('relationship_3', 20)->nullable();
            $table->text('relationship_3_other', 55)->nullable();
            $table->text('address_3')->nullable();
            $table->text('city_3', 55)->nullable();
            $table->text('state_3', 55)->nullable();
            $table->text('zip_3', 55)->nullable();
            $table->text('phone_3', 55)->nullable();
            $table->text('email_3', 55)->nullable();
            $table->text('criticalSituation', 10)->nullable();
            $table->text('name_4', 55)->nullable();
            $table->text('phoneNumber_4', 20)->nullable();
            $table->text('patientLast', 55)->nullable();
            $table->text('patientFirst', 55)->nullable();
            $table->text('patientInitial', 55)->nullable();
            $table->text('pid', 55)->nullable();
            $table->text('patientName_5', 55)->nullable();
            $table->text('patientID', 55)->nullable();

            // SUPPORTIVE ASSISTANCE/CARE PREFERENCES SUMMARY
            $table->boolean('OASISassessment')->nullable();
            $table->text('IADLs', 10)->nullable();
            $table->text('IADLsIfYes', 55)->nullable();
            $table->boolean('No_assistance')->nullable();
            $table->boolean('Meals')->nullable();
            $table->boolean('ADLs_ADLs')->nullable();
            $table->boolean('Transportation')->nullable();
            $table->boolean('SupervisionSupport')->nullable();
            $table->boolean('Medications')->nullable();
            $table->boolean('Home_maintenance')->nullable();
            $table->boolean('OtherAssistance')->nullable();
            $table->text('Home_maintenance_1', 55)->nullable();
            $table->text('WillingToAssist', 15)->nullable();
            $table->text('unknowntextarea')->nullable();
            $table->text('AssistThePatient', 15)->nullable();
            $table->text('unknowntextarea_1')->nullable();
            $table->boolean('noAssistance')->nullable();
            $table->text('sundayAm', 15)->nullable();
            $table->text('mondayAm', 15)->nullable();
            $table->text('tuesdayAM', 15)->nullable();
            $table->text('wednesdayAM', 15)->nullable();
            $table->text('thursdayAM', 15)->nullable();
            $table->text('fridayAM', 15)->nullable();
            $table->text('saturdayAM', 15)->nullable();
            $table->text('sundayPm', 15)->nullable();
            $table->text('mondayPm', 15)->nullable();
            $table->text('tuesdayPm', 15)->nullable();
            $table->text('wednesdayPm', 15)->nullable();
            $table->text('thursdayPm', 15)->nullable();
            $table->text('fridayPm', 15)->nullable();
            $table->text('saturdayPm', 15)->nullable();
            $table->text('sundayNights', 15)->nullable();
            $table->text('mondayNights', 15)->nullable();
            $table->text('tuesdayNights', 15)->nullable();
            $table->text('wednesdayNights', 15)->nullable();
            $table->text('thursdayNights', 15)->nullable();
            $table->text('fridayNights', 15)->nullable();
            $table->text('saturdayNights', 15)->nullable();

            // ADVANCE DIRECTIVES
            $table->text('DirectivesOrder', 15)->nullable();
            $table->integer('OASISassessment_2')->nullable();
            $table->boolean('advanceDirectives')->nullable();
            $table->boolean('livingWill')->nullable();
            $table->boolean('doCardiopulmonary')->nullable();
            $table->boolean('donotResuscitate')->nullable();
            $table->boolean('donotIntubate')->nullable();
            $table->boolean('noArtificial')->nullable();
            $table->boolean('powerofAttorney')->nullable();
            $table->text('powerofAttorney_1', 55)->nullable();
            $table->text('powerPhone', 20)->nullable();
            $table->boolean('FinancialPower')->nullable();
            $table->text('financialPowerName', 55)->nullable();
            $table->text('phonefinancialPower', 20)->nullable();
            $table->boolean('stateSpecificform')->nullable();
            $table->text('stateSpecificform_1', 55)->nullable();
            $table->boolean('copiesonFile')->nullable();
            $table->boolean('pcp')->nullable();
            $table->boolean('copiesonFile_other')->nullable();
            $table->text('copiesonFile_other_1', 55)->nullable();
            $table->text('Comments')->nullable();

            // SENSORY STATUS
            $table->boolean('patientWears')->nullable();
            $table->boolean('Contacts')->nullable();
            $table->boolean('Contacts_1')->nullable();
            $table->boolean('prosthesis_R')->nullable();
            $table->boolean('prosthesis_L')->nullable();
            $table->boolean('hearingaid_R')->nullable();
            $table->boolean('hearingaid_L')->nullable();
            $table->text('hearingaid_Other', 55)->nullable();
            $table->boolean('Eyes')->nullable();
            $table->boolean('Ears')->nullable();
            $table->boolean('Nose')->nullable();
            $table->boolean('Mouth')->nullable();
            $table->boolean('Throat')->nullable();
            $table->boolean('Sight')->nullable();
            $table->boolean('Hearing')->nullable();
            $table->boolean('Smell')->nullable();
            $table->boolean('Taste')->nullable();
            $table->boolean('Throat_2')->nullable();
            $table->text('activityLimitation')->nullable();
            $table->text('therapist')->nullable();

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
        Schema::dropIfExists('oasis_e_recertifications');
    }
};
