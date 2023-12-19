<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedsAsNeeded extends Model
{
    use HasFactory;

    protected $table = 'meds_as_needed'; // Specify the table name

    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
