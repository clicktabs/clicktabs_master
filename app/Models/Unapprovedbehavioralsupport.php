<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unapprovedbehavioralsupport extends Model
{
    use HasFactory;
    protected $table = 'unapprovedbehavioralsupports';

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
