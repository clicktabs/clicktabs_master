<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedule';

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
