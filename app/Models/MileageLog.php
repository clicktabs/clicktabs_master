<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MileageLog extends Model
{
    use HasFactory;

    protected $table = 'mileage_logs';
    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
    public function MileageLogData() {
        return $this->belongsTo(MileageLogData::class);
    }


}
