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
        // Modify the 'physician_orders' table
        Schema::table('physician_orders', function (Blueprint $table) {
            $table->date('sent_date')->nullable()->after('updated_at');
            $table->string('sent_method', 255)->nullable()->after('sent_date');
            $table->date('receive_date')->nullable()->after('sent_method');
        });

        // Modify the 'c_m_s' table
        Schema::table('c_m_s', function (Blueprint $table) {
            $table->date('sent_date')->nullable()->after('updated_at');
            $table->string('sent_method', 255)->nullable()->after('sent_date');
            $table->date('receive_date')->nullable()->after('sent_method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Reverse the changes for 'physician_orders' table
        Schema::table('physician_orders', function (Blueprint $table) {
            $table->dropColumn(['sent_date', 'sent_method', 'receive_date']);
        });

        // Reverse the changes for 'c_m_s' table
        Schema::table('c_m_s', function (Blueprint $table) {
            $table->dropColumn(['sent_date', 'sent_method', 'receive_date']);
        });
    }
};
