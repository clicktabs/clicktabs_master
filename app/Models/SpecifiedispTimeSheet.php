<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecifiedispTimeSheet extends Model
{
    use HasFactory;

    protected $table = 'specifiedisp_time_sheet';

    protected $fillable = [
        'Descriptionofservice_1',
        'service_1',
        'service_2',
        'service_3',
        'service_4',
        'service_5',
        'service_6',
        'service_7',
    ];
}
