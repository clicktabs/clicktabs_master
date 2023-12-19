<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etransfer extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'resumption_of_care' => 'array',
        'reason_for_emergent_care' => 'array',
        'route_of_transmission' => 'array',
    ];
}
