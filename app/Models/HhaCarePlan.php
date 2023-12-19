<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HhaCarePlan extends Model
{
    use HasFactory;

    protected $table = 'hha_care_plan';
    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
