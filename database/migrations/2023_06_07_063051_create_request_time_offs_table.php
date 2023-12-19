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
        Schema::create('request_time_offs', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->nullable();
            $table->string('employee_name')->nullable();
            $table->text('intime')->nullable();
            $table->text('outime')->nullable();
            $table->date('datefrom')->nullable();
            $table->date('dateto')->nullable();
            $table->integer('hours')->nullable();
            $table->string('restday')->nullable();
            $table->string('status')->default('0')->comment('0:Pending,1:Approved,2:Declined');
            $table->integer('archive')->nullable();
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
        Schema::dropIfExists('request_time_offs');
    }
};
