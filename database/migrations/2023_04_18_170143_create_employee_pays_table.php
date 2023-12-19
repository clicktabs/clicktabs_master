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
        Schema::create('employee_pays', function (Blueprint $table) {
            $table->id();
            $table->string('pay_rate_service_code');
            $table->date('pay_rate_start_date');
            $table->date('pay_rate_end_date');
            $table->string('pay_rate_pay_type');
            $table->decimal('pay_rate_amount', 10, 2);
            $table->string('pay_rate_billing_code');
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
        Schema::dropIfExists('employee_pays');
        $table->dropForeign('employee_id');
    }
};
