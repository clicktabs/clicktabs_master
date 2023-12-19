<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Race extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function created_by(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'created_by', 'user_id');
    // }
    public function changeStatus(string $addon_Id): string
    {
        $addon = self::where('id', $addon_Id)->first();

        try {
            if ($addon->active_status) {
                $addon->active_status = false;
                $addon->save();
                return "$addon->race_type disabled successfully";
            } else {
                $addon->active_status = true;
                $addon->save();
                return "$addon->race_type enabled successfully";
            }
        } catch (\Throwable $th) {
            return false;
        }

    }
}
