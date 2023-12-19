<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
    public function modified()
    {
        return $this->belongsTo(User::class, 'modified_by', 'id');
    }
}
