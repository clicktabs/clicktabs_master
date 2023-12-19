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
        Schema::create('hhavisitnote1s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('hhavisitnote1s_id')->nullable();
            $table->string('clean_dentures_1')->nullable();
            $table->string('shave')->nullable();
            $table->string('shave_1')->nullable();
            $table->string('comments_19')->nullable();
            $table->string('other')->nullable();
            $table->string('other_1')->nullable();
            $table->string('comments_20')->nullable();
            $table->string('perineal_care')->nullable();
            $table->string('perineal_care_1')->nullable();
            $table->string('comments_21')->nullable();
            $table->string('assist_with_elimination')->nullable();
            $table->string('assist_with_elimination_1')->nullable();
            $table->string('comments_22')->nullable();
            $table->string('catheter_care')->nullable();
            $table->string('catheter_care_1')->nullable();
            $table->string('comments_23')->nullable();
            $table->string('ostomy_care')->nullable();
            $table->string('ostomy_care_1')->nullable();
            $table->string('comments_24')->nullable();
            $table->string('Intake')->nullable();
            $table->string('Output')->nullable();
            $table->string('comments_25')->nullable();
            $table->string('inspect_reinforce_dressing')->nullable();
            $table->string('comments_26')->nullable();
            $table->string('refuse_7')->nullable();
            $table->string('medication_reminders')->nullable();
            $table->string('comments_27')->nullable();
            $table->string('refuse_8')->nullable();
            $table->string('medication_assistance')->nullable();
            $table->string('comments_28')->nullable();
            $table->string('refuse_9')->nullable();
            $table->string('other_303')->nullable();
            $table->string('comments_29')->nullable();
            $table->string('ambulation')->nullable();
            $table->string('w_c')->nullable();
            $table->string('walker')->nullable();
            $table->string('cane')->nullable();
            $table->string('refuse_11')->nullable();
            $table->string('gait_belt')->nullable();
            $table->string('chair')->nullable();
            $table->string('bed')->nullable();
            $table->string('dangle')->nullable();
            $table->string('commod')->nullable();
            $table->string('shower')->nullable();
            $table->string('tub')->nullable();
            $table->string('comments_31')->nullable();
            $table->string('ROM')->nullable();
            $table->string('Arm')->nullable();
            $table->string('Leg')->nullable();
            $table->string('comments_32')->nullable();
            $table->string('reposition')->nullable();
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
        Schema::dropIfExists('hhavisitnote1s');
    }
};
