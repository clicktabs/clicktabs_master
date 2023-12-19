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
        Schema::create('nursingvisitnote2s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('nursingvisitnote2s_id')->nullable();
            $table->string('tube_feeding')->nullable();
            $table->string('tube_feeding_cont')->nullable();
            $table->string('BowelSounds')->nullable();
            $table->string('abdominal')->nullable();
            $table->string('last_bm')->nullable();
            $table->string('incontience')->nullable();
            $table->string('diarrhea')->nullable();
            $table->string('constipation')->nullable();
            $table->string('impaction')->nullable();
            $table->string('administered')->nullable();
            $table->string('tolerated')->nullable();
            $table->string('urine_color')->nullable();
            $table->string('urine_odor')->nullable();
            $table->string('urine_burning')->nullable();
            $table->string('urine_hesitancy')->nullable();
            $table->string('nocturia')->nullable();
            $table->string('oliguria')->nullable();
            $table->string('retention')->nullable();
            $table->string('incontinence_occurs')->nullable();
            $table->string('cardiopulmonary_type')->nullable();
            $table->string('french')->nullable();
            $table->string('Bulbinflated')->nullable();
            $table->string('date_change')->nullable();
            $table->string('irrigated')->nullable();
            $table->string('lm')->nullable();
            $table->string('endocrine_blood')->nullable();
            $table->string('patient')->nullable();
            $table->string('caregiver')->nullable();
            $table->string('nurse')->nullable();
            $table->string('reported_by_other')->nullable();
            $table->string('blood_sugar_this_visit')->nullable();
            $table->string('check_by_nurse')->nullable();
            $table->string('glycosuria')->nullable();
            $table->string('polyuria')->nullable();
            $table->string('polydipsia')->nullable();
            $table->string('Sweats')->nullable();
            $table->string('polyphagia')->nullable();
            $table->string('faint')->nullable();
            $table->string('stupor')->nullable();
            $table->string('by_Patient')->nullable();
            $table->string('by_caregiver')->nullable();
            $table->string('by_Nurse')->nullable();
            $table->string('Monitored_by_other')->nullable();
            $table->string('new_or_changed')->nullable();
            $table->string('new_at_drug')->nullable();
            $table->string('dosage_frequency')->nullable();
            $table->string('effective')->nullable();
            $table->string('effective_other')->nullable();
            $table->string('orders_obtain')->nullable();
            $table->string('on_allergic')->nullable();
            $table->string('on_medication')->nullable();
            $table->string('on_food_interactions')->nullable();
            $table->string('Rx_refill_by')->nullable();
            $table->string('pill_count')->nullable();
            $table->string('ample_supply')->nullable();    
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
        Schema::dropIfExists('nursingvisitnote2s');
    }
};
