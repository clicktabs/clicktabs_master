<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Referral extends Model
{
    use SoftDeletes, HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function diagnosis()
    {
        return $this->belongsTo(ReferralDiagnosis::class, 'id', 'referral_id');
    }

    public function referral()
    {
        return $this->belongsTo(ReferralSource::class, 'id', 'referral_id');
    }

}
