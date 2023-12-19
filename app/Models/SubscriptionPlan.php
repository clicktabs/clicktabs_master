<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;
    protected $table = 'subscription_plans';

    protected $fillable = [
        'package_name',
        'max_patient',
        'min_patient',
        'type',
        'amount',
        'status',
    ];
}
