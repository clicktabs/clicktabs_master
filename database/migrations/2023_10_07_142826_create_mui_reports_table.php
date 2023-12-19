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
        Schema::create('mui_reports', function (Blueprint $table) {
            $table->id();
            $table->string('schedule_id')->nullable();
            $table->string('ProviderNameAddress')->nullable();
            $table->string('IndividualsName')->nullable();
            $table->date('dob')->nullable();
            $table->string('Address')->nullable();
            $table->string('city')->nullable();
            $table->date('DateofIncident')->nullable();
            $table->time('TimeofIncident')->nullable();
            $table->string('ampm')->nullable();
            $table->text('LocationofIncident')->nullable();
            $table->text('DescriptionofIncident')->nullable();
            $table->text('InjuryDescribe')->nullable();
            $table->text('ImmediateAction')->nullable();
            $table->text('NameofPPI')->nullable();
            $table->text('RelationshiptoIndividual')->nullable();
            $table->text('Witnesses')->nullable();
            $table->text('OthersInvolved')->nullable();
            $table->string('NameTitle')->nullable();
            $table->datetime('DateTime')->nullable();
            $table->string('ssa')->nullable();
            $table->datetime('DateTime_1')->nullable();
            $table->string('CertifiedProvider')->nullable();
            $table->datetime('DateTime_2')->nullable();
            $table->string('StafforFamily')->nullable();
            $table->datetime('DateTime_3')->nullable();
            $table->string('NameBadgeNumber')->nullable();
            $table->datetime('DateTime_4')->nullable();
            $table->string('ChildrenServices')->nullable();
            $table->datetime('DateTime_5')->nullable();
            $table->string('CountyBoard')->nullable();
            $table->datetime('DateTime_6')->nullable();
            $table->string('Administrator')->nullable();
            $table->datetime('DateTime_7')->nullable();
            $table->string('SeniorManagement')->nullable();
            $table->datetime('DateTime_8')->nullable();
            $table->string('OtherProvidersofService')->nullable();
            $table->datetime('DateTime_9')->nullable();
            $table->text('FurtherMedicalFollow-up')->nullable();
            $table->text('AdministrativeAction')->nullable();
            $table->string('PrintedName')->nullable();
            $table->string('Signature')->nullable();
            $table->string('Title')->nullable();
            $table->date('Date')->nullable();
            $table->text('HeadFace')->nullable();
            $table->text('MouthTeeth')->nullable();
            $table->text('HandsArms')->nullable();
            $table->text('FeetLegs')->nullable();
            $table->text('NeckChest')->nullable();
            $table->text('Abdomen')->nullable();
            $table->text('BackButtocks')->nullable();
            $table->text('Genitals')->nullable();
            $table->text('Detaileddescription')->nullable();
            $table->text('ContributingFactors')->nullable();
            $table->text('Preventivemeasures')->nullable();
            $table->string('AdministratorReview')->nullable();
            $table->date('Dated')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('mui_reports');
    }
};
