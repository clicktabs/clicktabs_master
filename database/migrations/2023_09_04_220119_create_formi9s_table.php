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
        Schema::create('formi9s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('formi9s_id')->nullable();
            $table->string('formi9_lName')->nullable();
            $table->string('formi9_fName')->nullable();
            $table->string('formi9_mName')->nullable();
            $table->string('formi9_oLastName')->nullable();
            $table->string('formi9_address')->nullable();
            $table->string('formi9_aptNumber')->nullable();
            $table->string('formi9_city')->nullable();
            $table->string('formi9_state')->nullable();
            $table->string('formi9_zip')->nullable();
            $table->string('formi9_dob')->nullable();
            $table->string('formi9_ssn')->nullable();
            $table->string('formi9_email')->nullable();
            $table->string('formi9_employeePhone')->nullable();
            $table->string('formi9_ctizen')->nullable();
            $table->string('formi9_permtDate')->nullable();
            $table->string('formi9_lawful')->nullable();
            $table->string('formi9_lawful_1')->nullable();
            $table->string('formi9_alien')->nullable();
            $table->string('formi9_alien_1')->nullable();
            $table->string('formi9_alienNumber')->nullable();
            $table->string('formi9_admissionNo')->nullable();
            $table->string('formi9_PassportNo')->nullable();
            $table->string('formi9_cuntry')->nullable();
            $table->string('formi9_signature_1')->nullable();
            $table->string('formi9_signatur_2')->nullable();
            $table->string('formi9_translator')->nullable();
            $table->string('formi9_preparer')->nullable();
            $table->string('formi9_signature_3')->nullable();
            $table->string('formi9_signature_4')->nullable();
            $table->string('formi9_LName_1')->nullable();
            $table->string('formi9_FName_1')->nullable();
            $table->string('formi9_Address_1')->nullable();
            $table->string('formi9_City_1')->nullable();
            $table->string('formi9_State_1')->nullable();
            $table->string('formi9_Zip_1')->nullable();
            $table->string('formi9_employor_auth')->nullable();
            $table->string('formi9_employorLname')->nullable();
            $table->string('formi9_employorFname')->nullable();
            $table->string('formi9_employorMI')->nullable();
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
        Schema::dropIfExists('formi9s');
    }
};
