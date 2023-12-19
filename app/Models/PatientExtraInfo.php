<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientExtraInfo extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    
    public function physician()
    {
        return $this->belongsTo(Physician::class, 'physician_id');
    }

    public function referring_physician()
    {
        return $this->belongsTo(Physician::class, 'referring_physician_id');
    }

    public function patient_physician() {
        return $this->belongsTo(Physician::class, 'physician_id');
    }
}
