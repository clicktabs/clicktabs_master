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
        Schema::create('reportmuis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('ProviderNameAddress')->nullable();
            $table->string('IndividualsName')->nullable();
            $table->string('dob')->nullable();
            $table->string('Address')->nullable();
            $table->string('city')->nullable();
            $table->string('DateofIncident')->nullable();
            $table->string('TimeofIncident')->nullable();
            $table->string('ampm')->nullable();
            $table->string('LocationofIncident')->nullable();
            $table->string('DescriptionofIncident')->nullable();
            $table->string('InjuryDescribe')->nullable();
            $table->string('ImmediateAction')->nullable();
            $table->string('NameofPPI')->nullable();
            $table->string('RelationshiptoIndividual')->nullable();
            $table->string('Witnesses')->nullable();
            $table->string('OthersInvolved')->nullable();
            $table->string('NameTitle')->nullable();
            $table->string('DateTime')->nullable();
            $table->string('ssa')->nullable();
            $table->string('DateTime_1')->nullable();
            $table->string('CertifiedProvider')->nullable();
            $table->string('DateTime_2')->nullable();
            $table->string('NameBadgeNumber')->nullable();
            $table->string('DateTime_4')->nullable();
            $table->string('ChildrenServices')->nullable();
            $table->string('DateTime_5')->nullable();
            $table->string('CountyBoard')->nullable();
            $table->string('DateTime_6')->nullable();
            $table->string('SeniorManagement')->nullable();
            $table->string('DateTime_8')->nullable();
            $table->string('OtherProvidersofService')->nullable();
            $table->string('DateTime_9')->nullable();
            $table->string('FurtherMedicalFollow-up')->nullable();
            $table->string('AdministrativeAction')->nullable();
            $table->string('PrintedName')->nullable();
            $table->string('Signature')->nullable();
            $table->string('Title')->nullable();
            $table->string('Date')->nullable();
            $table->string('HeadFace')->nullable();
            $table->string('MouthTeeth')->nullable();
            $table->string('HandsArms')->nullable();
            $table->string('FeetLegs')->nullable();
            $table->string('NeckChest')->nullable();
            $table->string('Abdomen')->nullable();
            $table->string('BackButtocks')->nullable();
            $table->string('Genitals')->nullable();
            $table->string('Detaileddescription')->nullable();
            $table->string('ContributingFactors')->nullable();
            $table->string('Preventivemeasures')->nullable();
            $table->string('AdministratorReview')->nullable();
            $table->string('Dated')->nullable();
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
        Schema::dropIfExists('reportmuis');
    }
};
