<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnusualIncidentReport extends Model
{
    use HasFactory;
    protected $table = 'unusal_incident_report';

    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
