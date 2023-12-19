<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfectionControl extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id')->select(['id', 'first_name', 'last_name']);
    }

    public function caseManager()
    {
        return $this->belongsTo(Employee::class, 'caseManager_id')
                    ->select(['id', 'first_name', 'last_name']);
    }

    public function infectionReportedBy()
    {
        return $this->belongsTo(Employee::class, 'infectionReportedBy_id')
                    ->select(['id', 'first_name', 'last_name']);
    }

    public function infectionReportedTo()
    {
        return $this->belongsTo(Employee::class, 'infectionReportedTo_id')
                    ->select(['id', 'first_name', 'last_name']);
    }

    public function followUpRequiredBy()
    {
        return $this->belongsTo(Employee::class, 'follow-UpRequired')
                    ->select(['id', 'first_name', 'last_name']);
    }


}
