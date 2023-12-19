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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable()->nullable();
            $table->string('mi')->nullable();
            $table->date('dob')->nullable()->nullable();
            $table->date('doh')->nullable();
            $table->date('dot')->nullable();
            $table->string('ssn')->nullable();
            $table->string('photo')->nullable();
            $table->string('gender')->nullable();
            $table->integer('employee_id')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('job_title')->nullable();
            $table->string('credentials')->nullable();
            $table->string('agency_branch')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('emergency')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('prefered_contact')->nullable();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
//            $table->string('access_res')->nullable();
//            $table->time('earliest_login')->nullable();
//            $table->time('automatic_logout');
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
        Schema::dropIfExists('employees');
    }
};
