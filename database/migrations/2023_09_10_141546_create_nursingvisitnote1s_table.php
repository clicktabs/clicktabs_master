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
        Schema::create('nursingvisitnote1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('nursingvisitnote1s_id')->nullable();
            $table->string('hemoptysis_frequency')->nullable();
            $table->string('hemoptysis_frequency_amount')->nullable();
            $table->string('RespiratoryStatus')->nullable();
            $table->string('dyspnea')->nullable();
            $table->string('stridorq')->nullable();
            $table->string('stridor')->nullable();
            $table->string('saturation')->nullable();
            $table->string('denies')->nullable();
            $table->string('anginal')->nullable();
            $table->string('postural')->nullable();
            $table->string('localized')->nullable();
            $table->string('substernal')->nullable();
            $table->string('radiating')->nullable();
            $table->string('dull')->nullable();
            $table->string('aching')->nullable();
            $table->string('sharp')->nullable();
            $table->string('viselike')->nullable();
            $table->string('viselike_other')->nullable();
            $table->string('shortness_of_breath')->nullable();
            $table->string('activity')->nullable();
            $table->string('rest')->nullable();
            $table->string('duration')->nullable();
            $table->string('HeartSounds')->nullable();
            $table->string('abnormal')->nullable();
            $table->string('fatigued')->nullable();
            $table->string('edema')->nullable();
            $table->string('pedal_right')->nullable();
            $table->string('pedal_left')->nullable();
            $table->string('pitting')->nullable();
            $table->string('cramps')->nullable();
            $table->string('capillary_refill')->nullable();
            $table->string('alert')->nullable();
            $table->string('right_grasp')->nullable();
            $table->string('right-other')->nullable();
            $table->string('left_grasp')->nullable();
            $table->string('left_other')->nullable();
            $table->string('pupils')->nullable();
            $table->string('other_perral')->nullable();
            $table->string('impairment')->nullable();
            $table->string('impair')->nullable();
            $table->string('impairment_vertigo')->nullable();
            $table->string('impairment_falls')->nullable();
            $table->string('impairment_bal')->nullable();
            $table->string('impairment_weekness')->nullable();
            $table->string('change_in_adl')->nullable();
            $table->string('good')->nullable();
            $table->string('fair')->nullable();
            $table->string('poor')->nullable();
            $table->string('npo')->nullable();
            $table->string('oral_intake')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('nursingvisitnote1s');
    }
};
