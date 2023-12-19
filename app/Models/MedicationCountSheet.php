<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationCountSheet extends Model
{
    use HasFactory;

    protected $table = 'medication_count_sheet'; // Specify the table name

    protected $fillable = [
        'id',
        'patient_id',
        'individual_name',
        'staff_name',
    ];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
