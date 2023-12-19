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
        Schema::create('physician_transfers', function (Blueprint $table) {
            $table->id();
            
            $table->date('admissionDate')->nullable();
            $table->date('admissiontransferDate')->nullable();
            $table->string('TransferPlanned')->nullable();
            $table->string('reasonforAdmission')->nullable();
            $table->string('TransferReason')->nullable();
            $table->text('TransferReason_1')->nullable();
            // Disciplines checkboxes
            $table->boolean('HHAdisciplines')->default(false);
            $table->boolean('SNdisciplines')->default(false);
            $table->boolean('PTdisciplines')->default(false);
            $table->boolean('OTdisciplines')->default(false);
            $table->boolean('STdisciplines')->default(false);
            $table->boolean('MSWdisciplines')->default(false);
            $table->boolean('Aidedisciplines')->default(false);
            $table->string('Otherdisciplines')->nullable();
            // Team members notified checkboxes
            $table->boolean('SNtransfer')->default(false);
            $table->boolean('PTtransfer')->default(false);
            $table->boolean('OTtransfer')->default(false);
            $table->boolean('STtransfer')->default(false);
            $table->boolean('MSWtransfer')->default(false);
            $table->boolean('Aidetransfer')->default(false);
            $table->string('Othertransfer')->nullable();
            $table->boolean('agencyPolicy')->default(false);
            $table->boolean('Representative')->default(false);
            $table->string('explain')->nullable();
            $table->boolean('documentation')->default(false);
            $table->boolean('currentPlan')->default(false);
            $table->tinyInteger('currentPlanOfCare')->nullable();
            $table->boolean('copyOrder')->default(false);
            $table->boolean('copyOther_1')->default(false);
            $table->string('copyOther_2')->nullable();

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
        Schema::dropIfExists('physician_transfers');
    }
};
