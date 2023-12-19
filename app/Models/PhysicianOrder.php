<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicianOrder extends Model
{
    use HasFactory;
    protected $table = 'physician_order';
    protected $guarded = [];

}
