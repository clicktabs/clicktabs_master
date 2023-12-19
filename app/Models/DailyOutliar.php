<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyOutliar extends Model
{
    use HasFactory;
    protected $table = 'daily_outliar';
    protected $guarded = [];
}
