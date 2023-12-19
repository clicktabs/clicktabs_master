<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentRiskAssessment extends Model
{
    use HasFactory;

    protected $table = 'accident_risk_assessments';

    protected $guarded = [];
}
