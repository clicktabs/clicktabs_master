<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugDetail extends Model
{
    use HasFactory;

    protected $table = 'drug_details'; // Specify the table name

    protected $fillable = [
        'medication_count_sheet_id',
        'drug_name',
        'rx',
        'total_amount',
        'controlled_med',
    ];
}
