<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'image',
        'company_name',
        'contact_person_firstname',
        'contact_person_lastname',
        'last_name',
        'address_line',
        'city',
        'state',
        'zip',
        'phone',
        'fax',
        'email',
        'npi',
        'tax_id',
        'secondary_tax',
        'medicaid_p_n',
        'medicare_p_n',
        'caphs_vendor_id',
        'unique_agency_oasis',
        'dme_medicaid_p_i',
        'image',
        'signatureImage',
        'pin',
    ];

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
