<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'new_goals_templates', 'template_new_goals_content', 'template_new_intervention_content', 'new_intervention_templates', 'section_gg_functional_abilities_goals_content', 'section_gg_functional_abilities_goals_templates', 'section_g_functional_status_content', 'section_g_functional_status_templates', 'bims_summary_score_content', 'bims_summary_score_templates'
    ];


    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function new_goals_templates(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function new_intervention_templates(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }
}
