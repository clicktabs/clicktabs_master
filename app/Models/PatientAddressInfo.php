<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientAddressInfo extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
