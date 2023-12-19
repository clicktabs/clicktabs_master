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
        Schema::create('hhavisitnote2s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('hhavisitnote2s_id')->nullable();
            $table->string('encourange_reposition')->nullable();
            $table->string('every_hrs')->nullable();
            $table->string('comments_33')->nullable();
            $table->string('exercise_pt')->nullable();
            $table->string('exercise_ot')->nullable();
            $table->string('exercise_slp')->nullable();
            $table->string('refused_17')->nullable();
            $table->string('comments_35')->nullable();
            $table->string('other_408')->nullable();
            $table->string('refused_18')->nullable();
            $table->string('comments_36')->nullable();
            $table->string('meal_preparation')->nullable();
            $table->string('refused_19')->nullable();
            $table->string('comments_37')->nullable();
            $table->string('assist_feeding')->nullable();
            $table->string('refused_20')->nullable();
            $table->string('comments_38')->nullable();
            $table->string('radio_1')->nullable();
            $table->string('refused_21')->nullable();
            $table->string('comments_39')->nullable();
            $table->string('grocery_shopping')->nullable();
            $table->string('refused_22')->nullable();
            $table->string('comments_40')->nullable();
            $table->string('other_500')->nullable();
            $table->string('refused_23')->nullable();
            $table->string('comments_41')->nullable();
            $table->string('other_100')->nullable();
            $table->string('refused_24')->nullable();
            $table->string('comments_42')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('kitchen')->nullable();
            $table->string('change_bed_linen')->nullable();
            $table->string('refused_25')->nullable();
            $table->string('comments_43')->nullable();
            $table->string('equipment_care')->nullable();
            $table->string('refused_26')->nullable();
            $table->string('comments_44')->nullable();
            $table->string('other_50')->nullable();
            $table->string('comments_45')->nullable();
            $table->string('CommentsNotes')->nullable();
            $table->string('sn')->nullable();
            $table->string('therapy')->nullable();
            $table->string('ot')->nullable();
            $table->string('slp')->nullable();
            $table->string('family')->nullable();
            $table->string('patient')->nullable();
            $table->string('signature_date')->nullable();
            $table->string('date')->nullable();
            $table->string('patientsign')->nullable();
            $table->string('patient_date')->nullable();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hhavisitnote2s');
    }
};
