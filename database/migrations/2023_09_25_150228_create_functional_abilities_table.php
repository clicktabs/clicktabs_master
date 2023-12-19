<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionalAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functional_abilities', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_history_id')->nullable();
            // page 13
            $table->integer('safeCare')->nullable();
            $table->integer('indoorMobility')->nullable();
            $table->integer('stairs')->nullable();
            $table->integer('functionalCognition')->nullable();
            $table->boolean('manualWheelchair')->nullable();
            $table->boolean('motorizedWheelchair')->nullable();
            $table->boolean('mechanicalLift')->nullable();
            $table->boolean('priorDeviceWalker')->nullable();
            $table->boolean('noneOfTheAbove')->nullable();

            $table->integer('eating1')->nullable();
            $table->integer('eating2')->nullable();
            $table->integer('oralHygiene1')->nullable();
            $table->integer('oralHygiene2')->nullable();
            $table->integer('toiletingHygiene1')->nullable();
            $table->integer('toiletoiletingHygiene2tingHygiene1')->nullable();
            $table->integer('batheself1')->nullable();
            $table->integer('batheself2')->nullable();

            $table->integer('bodyDressing1')->nullable();
            $table->integer('bodyDressing2')->nullable();
            $table->integer('lowerBodyDressing1')->nullable();
            $table->integer('lowerBodyDressing2')->nullable();
            $table->integer('footwear1')->nullable();
            $table->integer('footwear2')->nullable();

            // parent page
            $table->boolean('amputation')->nullable();
            $table->boolean('paralysis')->nullable();
            $table->boolean('legallyBlind')->nullable();
            $table->boolean('bowelBladder')->nullable();
            $table->boolean('endurance')->nullable();
            $table->boolean('minimalExertion')->nullable();
            $table->boolean('contracture')->nullable();
            $table->boolean('ambulation')->nullable();
            $table->text('functionalLimitationsOther')->nullable();
            $table->boolean('hearing')->nullable();
            $table->boolean('speech')->nullable();
            $table->text('speechOther')->nullable();
            $table->text('priorTransferAbility')->nullable();
            $table->text('priorSocialActivityLevel')->nullable();
            $table->boolean('noProblem')->nullable();
            $table->boolean('joints')->nullable();
            $table->boolean('muscles')->nullable();
            $table->boolean('bones')->nullable();
            $table->integer('hpapp')->nullable();
            $table->text('yesNote')->nullable();
            $table->text('treatmentReceived')->nullable();
            $table->text('hpapp2note')->nullable();

            $table->boolean('painJoints')->nullable();
            $table->boolean('painMuscles')->nullable();
            $table->boolean('painBones')->nullable();
            $table->boolean('tingling')->nullable();
            $table->boolean('numbness')->nullable();
            $table->boolean('swelling')->nullable();
            $table->boolean('contractures')->nullable();
            $table->boolean('ue')->nullable();
            $table->boolean('le')->nullable();
            $table->boolean('atrophy')->nullable();
            $table->boolean('rom')->nullable();
            $table->integer('motorChanges')->nullable();
            $table->boolean('motorChangeFine')->nullable();
            $table->boolean('motorChangeGross')->nullable();
            $table->integer('handGrips')->nullable();
            $table->boolean('strongR')->nullable();
            $table->boolean('strongL')->nullable();
            $table->boolean('weakR')->nullable();
            $table->boolean('weakL')->nullable();
            $table->integer('htpa')->nullable();
            $table->boolean('belowRight')->nullable();
            $table->boolean('belowLeft')->nullable();
            $table->boolean('aboveRight')->nullable();
            $table->boolean('aboveLeft')->nullable();
            $table->boolean('upperRight')->nullable();
            $table->boolean('upperLeft')->nullable();
            $table->text('upperOther')->nullable();
            $table->boolean('exaggeratedForward')->nullable();
            $table->boolean('upperBack')->nullable();
            $table->boolean('canTStand')->nullable();
            $table->integer('dtppl')->nullable();
            $table->text('abilitySafety')->nullable();
            $table->integer('age')->nullable();
            $table->integer('noDiagnosis')->nullable();
            $table->integer('priorHistory')->nullable();
            $table->integer('incontinence')->nullable();
            $table->integer('visualImpairment')->nullable();
            $table->integer('mobility')->nullable();
            $table->integer('hazards')->nullable();
            $table->integer('pharmacy')->nullable();
            $table->integer('affecting')->nullable();
            $table->integer('cognitive')->nullable();
            $table->integer('total')->nullable();

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
        Schema::dropIfExists('functional_abilities');
    }
}
