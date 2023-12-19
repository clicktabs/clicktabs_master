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
        Schema::table('tbscreenings', function (Blueprint $table) {
            $table->integer('org_id')->nullable()->after('id');
            $table->integer('tuberculosys')->nullable()->after('org_id');
            $table->integer('living')->nullable()->after('tuberculosys');
            $table->integer('skin')->nullable()->after('living');
            $table->string('skinExplain')->nullable()->after('skin');
            $table->integer('xray')->nullable()->after('skinExplain');
            $table->string('xrayExplain')->nullable()->after('xray');
            $table->integer('chronic')->nullable();
            $table->string('chronicExplain')->nullable();
            $table->integer('tuberculosys1')->nullable();
            $table->integer('tuberculosys2')->nullable();
            $table->integer('living0Yes')->nullable();
            $table->integer('living0No')->nullable(); 

            $table->integer('livingYes')->nullable();
            $table->integer('livingNo')->nullable();
            $table->integer('living1Yes')->nullable();
            $table->integer('living1No')->nullable();
            $table->integer('living2Yes')->nullable();
            $table->integer('living2No')->nullable();
            $table->integer('living3Yes')->nullable();
            $table->integer('living3No')->nullable();
            $table->integer('living4Yes')->nullable();
            $table->integer('living4No')->nullable();
            $table->integer('living5Yes')->nullable();
            $table->integer('living5No')->nullable();
            $table->integer('living6Yes')->nullable();
            $table->integer('living6No')->nullable();
            $table->integer('living7Yes')->nullable();
            $table->integer('living7No')->nullable();
            $table->integer('living8Yes')->nullable();
            $table->integer('living8No')->nullable();
            $table->integer('living9Yes')->nullable();
            $table->integer('living9No')->nullable();
            $table->string('explainScreen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbscreenings', function (Blueprint $table) {
            $table->dropColumn('org_id');
            $table->dropColumn('tuberculosys');
            $table->dropColumn('living');
            $table->dropColumn('skin');
            $table->dropColumn('skinExplain');
            $table->dropColumn('xray');
            $table->dropColumn('xrayExplain');
            $table->dropColumn('chronic');
            $table->dropColumn('chronicExplain');
            $table->dropColumn('tuberculosys1');
            $table->dropColumn('tuberculosys2');
            $table->dropColumn('living0Yes');
            $table->dropColumn('living0No'); 
            $table->dropColumn('livingYes');
            $table->dropColumn('livingNo');
            $table->dropColumn('living1Yes');
            $table->dropColumn('living1No');
            $table->dropColumn('living2Yes');
            $table->dropColumn('living2No');
            $table->dropColumn('living3Yes');
            $table->dropColumn('living3No');
            $table->dropColumn('living4Yes');
            $table->dropColumn('living4No');
            $table->dropColumn('living5Yes');
            $table->dropColumn('living5No');
            $table->dropColumn('living6Yes');
            $table->dropColumn('living6No');
            $table->dropColumn('living7Yes');
            $table->dropColumn('living7No');
            $table->dropColumn('living8Yes');
            $table->dropColumn('living8No');
            $table->dropColumn('living9Yes');
            $table->dropColumn('living9No');
            $table->dropColumn('explainScreen');
        });
    }
};
