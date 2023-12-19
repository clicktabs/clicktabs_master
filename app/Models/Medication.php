<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function physicianInfo()
    {
        return $this->belongsTo(Physician::class, 'physician','id');
    }

}
