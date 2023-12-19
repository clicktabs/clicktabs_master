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
        Schema::create('formi91s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->unsignedInteger('formi91s_id')->nullable();
            $table->string('formi9_citizenship')->nullable();
            $table->string('formi9_docTitle1')->nullable();
            $table->string('formi9_docTitle2')->nullable();
            $table->string('formi9_docTitle3')->nullable();
            $table->string('formi9_issuing_1')->nullable();
            $table->string('formi9_issuing_2')->nullable();
            $table->string('formi9_issuing_3')->nullable();
            $table->string('formi9_docNumber_1')->nullable();
            $table->string('formi9_docNumber_2')->nullable();
            $table->string('formi9_docNumber_3')->nullable();
            $table->string('formi9_expir_1')->nullable();
            $table->string('formi9_expir_2')->nullable();
            $table->string('formi9_expir_3')->nullable();
            $table->string('formi9_docTitle1_4')->nullable();
            $table->string('formi9_additional')->nullable();
            $table->string('formi9_Issuing_4')->nullable();
            $table->string('formi9_docNumber_4')->nullable();
            $table->string('formi9_expir_4')->nullable();
            $table->string('formi9_docTitle_5')->nullable();
            $table->string('formi9_issuin_5')->nullable();
            $table->string('formi9_docNumber_5')->nullable();
            $table->string('formi9_expir_5')->nullable();
            $table->string('formi9_firstDay')->nullable();
            $table->string('formi9_Employer_authLnam')->nullable();
            $table->string('formi9_Employer_authFnam')->nullable();
            $table->string('formi9_employerOrg')->nullable();
            $table->string('formi9_oemployerorgAddress')->nullable();
            $table->string('formi9_employercity')->nullable();
            $table->string('formi9_employororgState')->nullable();
            $table->string('formi9_employororgZip')->nullable();
            $table->string('formi9_LName_3')->nullable();  
            $table->string('formi9_FName_3')->nullable();
            $table->string('formi9_MName_3')->nullable();
            $table->string('formi9_Date')->nullable();
            $table->string('formi9_DocumentTitle_5')->nullable();
            $table->string('formi9_DocumentNumber')->nullable();
            $table->string('formi9_expir_6')->nullable();
            $table->string('formi9_signature_5')->nullable();
            $table->string('formi9_Authorized_4')->nullable();
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
        Schema::dropIfExists('formi91s');
    }
};
