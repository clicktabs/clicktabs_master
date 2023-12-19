<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IspDoc extends Model
{
    use HasFactory;
    protected $table = 'isp_docs';
    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

}
