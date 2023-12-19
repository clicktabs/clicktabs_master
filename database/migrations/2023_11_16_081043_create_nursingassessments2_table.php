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
        Schema::create('nursingassessments2', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nursingassessments_id')->nullable();
            $table->string('HistoryOfTuberculosis')->nullable();
            $table->string('extraPulmonary')->nullable();
            $table->string('patientCompleteTherapy')->nullable();
            $table->string('patientTuberculosis')->nullable();
            $table->boolean('Pulmonary')->nullable();
            $table->boolean('extrapulmonary2')->nullable();
            $table->string('HxProphylaxis')->nullable();
            $table->string('result')->nullable();
            $table->string('available')->nullable();
            $table->string('afb')->nullable();
            $table->string('chestXray')->nullable();
            $table->boolean('Oriented_1')->nullable();
            $table->boolean('Oriented_2')->nullable();
            $table->boolean('Oriented_3')->nullable();
            $table->boolean('Anxiety_1')->nullable();
            $table->boolean('Anxiety_2')->nullable();
            $table->boolean('Anxiety_3')->nullable();
            $table->boolean('Agitated_1')->nullable();
            $table->boolean('Agitated_2')->nullable();
            $table->boolean('Agitated_3')->nullable();
            $table->boolean('Short_1')->nullable();
            $table->boolean('Short_2')->nullable();
            $table->boolean('Short_3')->nullable();
            $table->boolean('Wanders_1')->nullable();
            $table->boolean('Wanders_2')->nullable();
            $table->boolean('Wanders_3')->nullable();
            $table->boolean('Depression_1')->nullable();
            $table->boolean('Depression_2')->nullable();
            $table->boolean('Depression_3')->nullable();
            $table->boolean('Impaired_1')->nullable();
            $table->boolean('Impaired_2')->nullable();
            $table->boolean('Impaired_3')->nullable();
            $table->boolean('Danger_1')->nullable();
            $table->boolean('Danger_2')->nullable();
            $table->boolean('Danger_3')->nullable();
            $table->boolean('Articulates_1')->nullable();
            $table->boolean('Articulates_2')->nullable();
            $table->boolean('Articulates_3')->nullable();
            $table->boolean('disorder_1')->nullable();
            $table->boolean('disorder_2')->nullable();
            $table->boolean('disorder_3')->nullable();
            $table->boolean('Abusive_1')->nullable();
            $table->boolean('Abusive_2')->nullable();
            $table->boolean('Abusive_3')->nullable();
            $table->boolean('Mental_1')->nullable();
            $table->boolean('Mental_2')->nullable();
            $table->boolean('Mental_3')->nullable();
            $table->boolean('independent_1')->nullable();
            $table->boolean('independent_2')->nullable();
            $table->boolean('independent_3')->nullable();
            $table->boolean('reminding_1')->nullable();
            $table->boolean('reminding_2')->nullable();
            $table->boolean('reminding_3')->nullable();
            $table->boolean('compliant_1')->nullable();
            $table->boolean('compliant_2')->nullable();
            $table->boolean('compliant_3')->nullable();
            $table->boolean('preparing_1')->nullable();
            $table->boolean('preparing_2')->nullable();
            $table->boolean('preparing_3')->nullable();
            $table->boolean('administration_1')->nullable();
            $table->boolean('administration_2')->nullable();
            $table->boolean('administration_3')->nullable();
            $table->string('TaughtToAdminister')->nullable();
            $table->string('explain')->nullable();
            $table->string('centralLine')->nullable();
            $table->string('peripheralLine')->nullable();
            $table->string('requiresHome')->nullable();
            $table->string('Injections')->nullable();
            $table->string('bloodWork')->nullable();
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
        Schema::dropIfExists('nursingassessments2');
    }
};
