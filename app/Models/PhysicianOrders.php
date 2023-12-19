<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhysicianOrders extends Model
{
    use HasFactory;
    protected $table = 'physician_orders';
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_history_id');
    }
}
