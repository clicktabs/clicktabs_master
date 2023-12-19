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
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('reference_code')->nullable()->unique();
            $table->string('name');
            $table->string('address');
            $table->string('telephone');
            $table->string('fax');
            $table->string('org_id');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->boolean('active_status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('pharmacies');
    }
};
