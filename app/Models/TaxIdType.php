<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxIdType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function changeStatus(string $jobTitle_id): string
    {
        $addon = self::where('id', $jobTitle_id)->first();

        try {
            if ($addon->active_status) {
                $addon->active_status = false;
                $addon->save();
                return "$addon->job_title disabled successfully";
            } else {
                $addon->active_status = true;
                $addon->save();
                return "$addon->job_title enabled successfully";
            }
        } catch (\Throwable $th) {
            return false;
        }

    }
}
