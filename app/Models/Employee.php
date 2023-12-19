<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'ssn',
        'mi',
        'gender',
        'employee_id',
        'status',
        'photo',
        'type',
        'job_title',
        'credentials',
        'agency_branch',
        'address_line_1',
        'mobile_phone',
        'home_phone',
        'emergency',
        'city',
        'fax',
        'email',
        'state',
        'zip',
        'prefered_contact',
        'access_res',
        'earliest_login',
    ];



    public function attachments()
    {
        return $this->hasMany(EmployeeAttachment::class);
    }


    public function activities()
    {
        return $this->hasMany(EmployeeActivities::class);
    }

    public function expirations()
    {
        return $this->hasMany(EmployeeExpiration::class);
    }

    public function pays()
    {
        return $this->hasMany(EmployeePay::class);
    }

    public function bills()
    {
        return $this->hasMany(EmployeeBill::class);
    }
}
