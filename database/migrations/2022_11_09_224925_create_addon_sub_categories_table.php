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
        Schema::create('addon_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('user_id');
            $table->boolean('status')->default(true);
            $table->string('description')->nullable();
            $table->foreignId('addon_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('addon_sub_categories');
    }
};
