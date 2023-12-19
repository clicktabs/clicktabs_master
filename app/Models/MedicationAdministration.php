<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationAdministration extends Model
{
    use HasFactory;


    protected $table = 'medication_administration';

    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
