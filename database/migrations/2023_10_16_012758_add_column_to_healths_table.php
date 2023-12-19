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
        Schema::table('healths', function (Blueprint $table) {
            $table->integer('org_id')->nullable()->after('id');
            $table->string('applicantName')->nullable()->after('org_id'); 
            $table->date('date')->nullable()->after('applicantName');
            $table->string('fullName')->nullable()->after('date');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('healths', function (Blueprint $table) {
            $table->dropColumn('org_id');
            $table->dropColumn('applicantName');
            $table->dropColumn('date');
            $table->dropColumn('fullName');
        });
    }
};
