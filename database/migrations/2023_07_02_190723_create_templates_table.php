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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->longText('new_goals_templates')->nullable();
            $table->longText('new_intervention_templates')->nullable();
            $table->longText('section_gg_functional_abilities_goals_templates')->nullable();
            $table->longText('section_g_functional_status_templates')->nullable();
            $table->longText('bims_summary_score_templates')->nullable();
            $table->longText('template_new_goals_content')->nullable();
            $table->longText('template_new_intervention_content')->nullable();
            $table->longText('section_gg_functional_abilities_goals_content')->nullable();
            $table->longText('section_g_functional_status_content')->nullable();
            $table->longText('bims_summary_score_content')->nullable();
            $table->string('organization_id')->nullable();
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
        Schema::dropIfExists('templates');
    }
};
