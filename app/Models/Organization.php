<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
     
    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'user_id');
    }

    public function agency_info(): HasOne
    {
        return $this->hasOne(OrganizationInfo::class, 'org_id', 'org_id');
    }

    public function address(): HasOne
    {
        return $this->hasOne(OrganizationAddress::class, 'org_id', 'org_id');
    }

    public function contact_person(): HasOne
    {
        return $this->hasOne(OrganizationContactPerson::class, 'org_id', 'org_id');
    }

    public static function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function changeStatus(string $org_id): string
    {
        $org = self::where('org_id', $org_id)->first();

        try {
            if ($org->status) {
                $org->status = false;
                $org->save();
                return "$org->name disabled successfully";
            } else {
                $org->status = true;
                $org->save();
                return "$org->name enabled successfully";
            }
        } catch (\Throwable $th) {
            return false;
        }

    }


}
