<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralDiagnosis extends Model
{
    use HasFactory;

    protected $table = 'referral_diagnoses';
    protected $guarded = [];
}
