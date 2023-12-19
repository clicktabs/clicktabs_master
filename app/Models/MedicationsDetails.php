<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicationsDetails extends Model
{
    use HasFactory;

    protected $table = 'medications_details'; // Specify the table name

    protected $guarded = [];
}
