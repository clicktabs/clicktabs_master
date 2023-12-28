<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            $table->integer('livesAlone')->nullable();
            $table->integer('livesWithOthers')->nullable();
            $table->integer('supervisionSafety')->nullable();
            $table->integer('adlAssistance')->nullable();
            $table->integer('medicationAdministration')->nullable();
            $table->integer('medicalProcedures')->nullable();
            $table->boolean('patient')->nullable();
            $table->boolean('representative')->nullable();
            $table->text('other')->nullable();
            $table->integer('ccptihhsp')->nullable();
            $table->boolean('communicationPatient')->nullable();
            $table->boolean('communicationRepresentative')->nullable();
            $table->text('preferences')->nullable();
            $table->text('communicationOther')->nullable();
            $table->integer('communicationStatus')->nullable();
            $table->boolean('personalGoalPatient')->nullable();
            $table->boolean('personalGoalRepresentative')->nullable();
            $table->text('otherDiscussed')->nullable();
            $table->integer('agreementStatus')->nullable();
            $table->boolean('goalWrittenByPatient')->nullable();
            $table->boolean('goalWrittenByRepresentative')->nullable();
            $table->text('otherGoalWritten')->nullable();

            $table->boolean('goalAgreementByPatient')->nullable();
            $table->boolean('goalAgreementByRepresentative')->nullable();
            $table->text('otherGoalAgreement')->nullable();
            $table->text('otherField1')->nullable();
            $table->text('otherField2')->nullable();
            $table->integer('resumptionofCare')->nullable();
            $table->text('discontinued')->nullable();


            $table->integer('platsp')->nullable();
            $table->text('platspExplain')->nullable();
            $table->integer('ifhha')->nullable();
            $table->integer('ifhhaOo')->nullable();
            $table->text('ifhhaExplain')->nullable();

            $table->boolean('bleedingPrecautions')->nullable();
            $table->boolean('siderailsUp')->nullable();
            $table->boolean('infectionControlMeasures')->nullable();
            $table->boolean('precautions')->nullable();
            $table->boolean('elevateHead')->nullable();
            $table->boolean('precautionsWalker')->nullable();
            $table->boolean('seizurePrecautions')->nullable();
            $table->boolean('hrSupervision')->nullable();
            $table->boolean('fallPrecautions')->nullable();
            $table->boolean('clearPathways')->nullable();
            $table->boolean('aspiration')->nullable();
            $table->boolean('precautionsLock')->nullable();
            $table->text('otherPrecaution')->nullable();
            $table->integer('itanffrp')->nullable();
            $table->integer('spi')->nullable();

            $table->boolean('materialsRights')->nullable();
            $table->boolean('materialsState')->nullable();
            $table->boolean('materialsAdvance')->nullable();
            $table->boolean('materialsDoNot')->nullable();
            $table->boolean('materialsHipaa')->nullable();
            $table->boolean('materialsOasis')->nullable();
            $table->boolean('materialsEmergency')->nullable();
            $table->boolean('materialsAgencyPhone')->nullable();
            $table->boolean('materialsContactPhysician')->nullable();
            $table->boolean('materialsStandardPrecautions')->nullable();
            $table->boolean('materialsBasicHome')->nullable();
            $table->boolean('materialsMedicationRegimen')->nullable();
            $table->boolean('materialsAdministratorContact')->nullable();
            $table->boolean('materialsCopyOfRights')->nullable();
            $table->text('otherMaterials')->nullable();
            $table->boolean('materialsRightsResponsibilities')->nullable();
            $table->boolean('materialsStateHotline')->nullable();
            $table->boolean('materialsAdvanceDirectives')->nullable();
            $table->boolean('materialsDoNotResuscitate')->nullable();
            $table->boolean('materialsHipaaNotice')->nullable();
            $table->boolean('materialsOasisPrivacy')->nullable();
            $table->boolean('materialsEmergencyPlanning')->nullable();
            $table->boolean('aterialsAgencyPhoneNumber')->nullable();
            $table->boolean('materialsWhenToContactPhysician')->nullable();
            $table->boolean('materialsStandardPrecautions2')->nullable();
            $table->boolean('materialsBasicHomeSafety')->nullable();
            $table->text('disease')->nullable();
            $table->boolean('materialsMedicationDiseaseRegimen')->nullable();
            $table->boolean('contactInformation')->nullable();
            $table->boolean('copyOfRightsResponsibilities')->nullable();
            $table->text('otherMaterialsInfo')->nullable();

            $table->integer('modified_by')->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('preferences');
    }
};
