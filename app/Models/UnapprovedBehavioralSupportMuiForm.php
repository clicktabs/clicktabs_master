<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnapprovedBehavioralSupportMuiForm extends Model
{
    use HasFactory;

    protected $table = 'unapproved_behavioral_support_mui_form';

    protected $guarded = [];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
