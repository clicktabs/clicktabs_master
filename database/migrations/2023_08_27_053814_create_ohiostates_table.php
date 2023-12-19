<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\ohiostate;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ohiostates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->index(['organization_id'])->nullable();
            $table->string('Last_Name');
            $table->string('First_Name');
            $table->string('Middle_Initial');
            $table->string('Other_Last_Names_Used');
            $table->string('Address_2');
            $table->string('Apt_Number');
            $table->string('Employee_City_or_Town');
            $table->string('State_1');
            $table->string('_2');
            $table->date('Date_of_Birth');
            $table->string('Social_Security_Number');
            $table->string('Employees_E_mail');
            $table->string('Employees_Telephone_Number');
            $table->string('A_citizen_of_the_United_States');
            $table->string('A_noncitizen_national_of_the_United_States');
            $table->string('A_lawful_permanent_resident');
            $table->string('An_alien_authorized_to_work_until');
            $table->string('Alien_Registration_Number_USCIS_Number');
            $table->string('Form_1_94_Admission_Number');
            $table->string('Foreign_Passport_Number');
            $table->string('Country_of_Issurance');
            $table->string('preparer');
            $table->string('translator');
            $table->string('Preparer_Last_Name');
            $table->string('Preparer_First_Name');
            $table->string('Address_1');
            $table->string('Preparer_City_or_Town');
            $table->string('State_2');
            $table->string('ZIP_Code_3');
            $table->string('employee_last_Name');
            $table->string('employee_First_Name');
            $table->string('M_I');
            $table->string('Citizenship_immigration_Status');
            $table->string('Document_Title_1');
            $table->string('Document_Title_2');
            $table->string('Document_Title_3');
            $table->string('Issuing_Authority_1');
            $table->string('Issuing_Authority_2');
            $table->string('Issuing_Authority_3');
            $table->string('Document_Number_1');
            $table->string('Document_Number_2');
            $table->string('Document_Number_3');
            $table->date('Expiration_Date_1');
            $table->date('Expiration_Date_2');
            $table->date('Expiration_Date_3');
            $table->string('Document_Title_4');
            $table->string('Additional_Information');
            $table->string('Issuing_Authority_4');
            $table->string('Document_Number_4');
            $table->date('Expiration_Date_4');
            $table->string('Document_Title_6');
            $table->string('Issuing_Authority_5');
            $table->string('Document_Number_5');
            $table->date('Expiration_Date_5');
            $table->string('employees_first_day_of_employment');
            $table->string('Title_of_Employer');
            $table->string('Last_Name_of_Employer');
            $table->string('First Name_Employer');
            $table->string('Employers_Business_or_Organization_Name');
            $table->string('Employers Business_or_Organization_Address');
            $table->string('Employers_City_or_Town');
            $table->string('State_3');
            $table->string('ZIP_Code_1');
            $table->string('Reverification_and_Rehires');
            $table->string('last_Name_Employer');
            $table->string('First_Name_Employer');
            $table->string('Middle_Initial_employee');
            $table->date('Date');
            $table->string('Document_Title');
            $table->string('Document_Number');
            $table->string('Title_of_Employer_or_Authorized_Representative');
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
        Schema::dropIfExists('ohiostates');
    }
};
