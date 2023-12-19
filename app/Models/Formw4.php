<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class formw4 extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public function formw4()
    {
        return $this->belongsTo(Formw4::class, 'formw4_id');
    }
}
