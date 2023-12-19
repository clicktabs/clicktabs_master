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
        Schema::table('employee_leaves', function (Blueprint $table) {
            $table->foreignId('supervisor_id')->after('id')->nullable()->constrained('users')->nullOnDelete();
            $table->integer('status')->after('reason')->default(0)->comment('0:Pending,1:Approved,2:Declined');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_leaves', function (Blueprint $table) {
            $table->dropForeign(['supervisor_id']);
            $table->dropColumn(['supervisor_id','status']);
        });
    }
};
