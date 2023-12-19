<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SixtyDaysSummary extends Model
{
    use HasFactory;
    protected $table = 'sixtydays_summary';

    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
