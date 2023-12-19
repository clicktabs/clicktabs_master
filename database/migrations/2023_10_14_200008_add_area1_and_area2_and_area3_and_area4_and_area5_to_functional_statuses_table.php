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
        Schema::table('functional_statuses', function (Blueprint $table) {
            $table->text('area1')->nullable();
            $table->text('area2')->nullable();
            $table->text('area3')->nullable();
            $table->text('area4')->nullable();
            $table->text('area5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('functional_statuses', function (Blueprint $table) {
            //
        });
    }
};
