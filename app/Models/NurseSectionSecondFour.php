<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class NurseSectionSecondFour extends Model
{
    // use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

   
}
