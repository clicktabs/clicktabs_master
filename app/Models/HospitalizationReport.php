<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalizationReport extends Model
{
    use HasFactory;
    protected $table = 'hospitalization_mui_form';
    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
