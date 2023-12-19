<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddonSubCategories extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function addon(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Addon::class);
    }
}
