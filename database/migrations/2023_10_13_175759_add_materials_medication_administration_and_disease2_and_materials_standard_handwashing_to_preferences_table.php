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
        Schema::table('preferences', function (Blueprint $table) {
            $table->boolean('materialsMedicationAdministration')->nullable()->after('materialsMedicationRegimen');
            $table->text('disease2')->nullable()->after('disease');
            $table->boolean('materialsStandardHandwashing')->nullable()->after('materialsStandardPrecautions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preferences', function (Blueprint $table) {
            //
        });
    }
};
