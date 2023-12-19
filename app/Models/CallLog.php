<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CallLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_time',
        'received_by',
        'caller_name',
        'caller_patient_name',
        'topic_reason',
        'intervention',
        'referred',
        'care_coordination',
        'outcome',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'caller_patient_name', 'id');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'received_by', 'id');
    }
}
