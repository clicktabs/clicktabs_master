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
        Schema::create('patient_admissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained();
            $table->string('patient_code', 20);
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('gender');
            $table->string('marital_status');
            $table->date('date_of_birth');
            $table->string('mi_no');
            $table->string('social_security_no');
            $table->string('insurance_type');
            $table->string('status');
            $table->boolean('active');
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->integer('country');
            $table->string('state')->nullable();
            $table->string('zip', 30)->nullable();
            $table->string('county')->nullable();
            $table->string('phone')->nullable();
            $table->string('alternate_phone')->nullable();
            $table->string('patient_language_spoken')->nullable();
            $table->boolean('use_of_interpreter');
            $table->json('race_ethnicity');
            $table->json('source_of_admission');
            $table->json('services_requested');
            $table->string('primary_physician_id');
            $table->string('referring_physician_id');
            $table->json('face_to_face_evaluation')->nullable();
            $table->foreignId('pharmacy_id')->nullable()->constrained();
            $table->json('advance_directives')->nullable();
            $table->json('emergency_preparedness')->nullable();
            $table->json('coordination_of_care')->nullable();
            $table->foreignId('physician_id')->constrained();
            $table->unsignedBigInteger('refer_physician_id');
            $table->string("clinical_care_managers");
            $table->string("case_managers");
            $table->string("oasis_assigned_to");
            $table->string("ot_assigned_to");
            $table->string("pt_assigned_to");
            $table->string("st_assigned_to");
            $table->foreignId("patient_id")->nullable()->constrained();
            $table->string("name");
            $table->string("relationship_to_patient");
            $table->string("e_address");
            $table->string("e_city");
            $table->string("e_state");
            $table->string("e_zip");
            $table->string("e_phone");
            $table->string("e_alternate_phone");
            $table->string("primary_payor");
            $table->string("secondary_payor");
            $table->string("co_pay");
            $table->string("private_pay");
            $table->string("medicaid_id");
            $table->string("medicare_id");
            $table->string("nic_id");
            $table->string("payment_source");
            $table->json("oasis_start_care");
            $table->json("schedule_therapy");
            $table->json("non_oasis_start_care");
            $table->json("initial_oasis_recert");
            $table->json("initial_non_oasis_recert");
            $table->date("start_care_date");
            $table->date("episode_start_date");
            $table->json("health_payment_episode");
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
        Schema::dropIfExists('patient_admissions');
    }
};
