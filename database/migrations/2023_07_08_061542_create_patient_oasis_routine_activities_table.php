<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientOasisRoutineActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_oasis_routine_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('patient_oasis_id')->nullable();
            $table->text('livesAlone')->nullable();
            $table->text('measurable_goal_writer')->nullable();
            $table->text('measurable_goal_writer_text')->nullable();
            $table->text('ccptihhsp')->nullable();
            $table->text('personal_goal_communication')->nullable();
            $table->text('patient_goal_communication_status')->nullable();
            $table->text('patient_goal_communication_text')->nullable();
            $table->text('personal_goal_discussed')->nullable();
            $table->text('goal_written_by')->nullable();
            $table->text('other_goal_written_by')->nullable();
            $table->text('goal_agreement_by')->nullable();
            $table->text('goal_agreement_status')->nullable();
            $table->text('other_goal_agreement_by')->nullable();
            $table->text('other_field_1')->nullable();
            $table->text('other_field_2')->nullable();
            $table->text('ResumptionofCare')->nullable();
            $table->text('platsp')->nullable();
            $table->text('ifhha')->nullable();
            $table->text('ifhha_oo')->nullable();
            $table->text('precautions')->nullable();
            $table->text('other_precaution')->nullable();
            $table->text('itanffrp')->nullable();
            $table->text('spi')->nullable();
            $table->text('commants')->nullable();
            $table->text('materials')->nullable();
            $table->text('other_materials')->nullable();
            $table->text('toileting_hygiene')->nullable();
            $table->text('dressing_lower')->nullable();
            $table->text('dressing_upper')->nullable();
            $table->text('grooming')->nullable();
            $table->text('livesWithOthers')->nullable();
            $table->text('supervisionAndSafety')->nullable();
            $table->text('adlAssistance')->nullable();
            $table->text('medicationAdministration')->nullable();
            $table->text('medicalProcedures')->nullable();
            $table->text('bathing')->nullable();
            $table->text('toiletTransferring')->nullable();
            $table->text('toiletingHygiene')->nullable();
            $table->text('transferring')->nullable();
            $table->text('ambulation')->nullable();
            $table->text('safeCare')->nullable();
            $table->text('indoorMobility')->nullable();
            $table->text('stairs')->nullable();
            $table->text('functionalCognition')->nullable();
            $table->text('priorDevice')->nullable();
            $table->text('eating1')->nullable();
            $table->text('eating2')->nullable();
            $table->text('oralHygiene1')->nullable();
            $table->text('oralHygiene2')->nullable();
            $table->text('toiletingHygiene1')->nullable();
            $table->text('toiletingHygiene2')->nullable();
            $table->text('batheself1')->nullable();
            $table->text('batheself2')->nullable();
            $table->text('bodyDressing1')->nullable();
            $table->text('bodyDressing2')->nullable();
            $table->text('lowerBodyDressing1')->nullable();
            $table->text('lowerBodyDressing2')->nullable();
            $table->text('footwear1')->nullable();
            $table->text('footwear2')->nullable();
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
        Schema::dropIfExists('patient_oasis_routine_activities');
    }
}
