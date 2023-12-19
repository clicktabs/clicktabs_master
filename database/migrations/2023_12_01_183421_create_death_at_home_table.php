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
        Schema::create('death_at_home', function (Blueprint $table) {
            $table->id();
            $table->date('dateofdeath')->nullable();
            $table->string('PlanOfCare')->nullable();
            $table->string('PlanOfCare_1')->nullable();
            $table->string('relationshiptoPatient')->nullable();
            $table->string('pptd')->nullable(); // Person(s) present at time of death
            $table->string('personName')->nullable();
            $table->string('Relationship')->nullable();
            $table->string('RelationName')->nullable();
            $table->string('RelationName_1')->nullable();
            $table->string('RelationName_2')->nullable();
            $table->string('RelationName_3')->nullable();
            // Checkbox inputs for team members notification
            $table->boolean('involvedSN')->default(false);
            $table->boolean('involvedPT')->default(false);
            $table->boolean('involvedOT')->default(false);
            $table->boolean('involvedST')->default(false);
            $table->boolean('involvedMSW')->default(false);
            $table->boolean('involvedAide')->default(false);
            $table->boolean('teamMembers')->default(false);
            $table->string('otherMembers')->nullable();
            // Representative
            $table->string('representative')->nullable();
            // Pharmaceutical
            $table->string('pharmaceutical')->nullable();
            $table->string('pharmaceutical_1')->nullable();
            // Medications
            $table->string('medications')->nullable();
            // Transfer or death summary
            $table->string('TransferDeath')->nullable();
            $table->text('TransferDeath_1')->nullable();
            // Summary options
            $table->boolean('malled')->default(false);
            $table->boolean('emalled')->default(false);
            $table->boolean('faxed')->default(false);
            $table->boolean('faxed_1')->default(false);
            $table->string('facilityName_1')->nullable();
            // Certifying Physician
            $table->boolean('certifyingPhysician_1')->default(false);
            $table->string('Othercertifying')->nullable();
            $table->date('Datecertifying')->nullable();
            // ... other similar fields
            $table->boolean('secondaryPhysician')->default(false);
            $table->string('secondaryPhysician_1')->nullable();
            $table->date('secondaryPhysician_date')->nullable();
            // ... more fields
            $table->boolean('primaryCare')->default(false);
            $table->date('primaryCare_date')->nullable();
            $table->boolean('anyRepresentative')->default(false);
            $table->date('anyRepresentative_date')->nullable();

            $table->string('personCompleting')->nullable();
            $table->text('personCompleting_date')->nullable();
            $table->date('personCompleting_time')->nullable();

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
        Schema::dropIfExists('death_at_home');
    }
};
