<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    use HasFactory;

    public function addonSubCategories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AddonSubCategories::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
