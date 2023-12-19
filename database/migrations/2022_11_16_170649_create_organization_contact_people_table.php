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
        Schema::create('organization_contact_people', function (Blueprint $table) {
            $table->id();
            $table->string('org_id');
            $table->string('contact_person_first_name');
            $table->string('contact_person_last_name');
            $table->string('contact_person_email');
            $table->string('contact_person_phone');
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
        Schema::dropIfExists('organization_contact_people');
    }
};
