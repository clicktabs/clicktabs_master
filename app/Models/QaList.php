<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QaList extends Model
{
    use HasFactory;
    protected $table = 'qa_lists';

    protected $guarded = [];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class, 'patient_id', 'schedule_id');
    }
}
