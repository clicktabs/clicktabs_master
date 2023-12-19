<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysiciantTransfers extends Model
{
    use HasFactory;

    protected $table = 'physician_transfers';

    protected $guarded = [];
}
