<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MOIReport extends Model
{
    use HasFactory;
    protected $table = 'mui_reports';
    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
