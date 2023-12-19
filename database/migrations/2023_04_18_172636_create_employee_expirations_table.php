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
        Schema::create('employee_expirations', function (Blueprint $table) {
            $table->id();
            $table->string('expirations_doc_type')->nullable();
            $table->date('expirations_date')->nullable();
            $table->text('expiration_notes')->nullable();
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
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
        Schema::table('employee_expirations', function (Blueprint $table) {
            $table->dropForeign(['employee_id']);
        });
    
        Schema::dropIfExists('employee_expirations');
    }
};
