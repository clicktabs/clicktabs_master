<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pharmacy extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];


    public function changeStatus(string $pharmacyId): string
    {
        $pharmacy = self::where('id', $pharmacyId)->first();

        try {
            if ($pharmacy->active_status) {
                $pharmacy->active_status = false;
                $pharmacy->save();
                return "$pharmacy->name disabled successfully";
            } else {
                $pharmacy->active_status = true;
                $pharmacy->save();
                return "$pharmacy->name enabled successfully";
            }
        } catch (\Throwable $th) {
            return false;
        }

    }
}
