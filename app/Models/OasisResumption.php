<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OasisResumption extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'assessment_reason' => 'json',
        'follow_up_performance' => 'json',
        'follow_up_performance_mobility' => 'json',
        'risk_for_hospitalization' => 'json',
    ];
}
