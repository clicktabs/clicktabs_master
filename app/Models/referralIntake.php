<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class referralIntake extends Model
{
    use HasFactory;

    protected $table = 'referral_intakes';

    protected $guarded = [];
}
