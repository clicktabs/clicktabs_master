<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    // use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function schedule()
    {
        return $this->hasOne(Schedule::class, 'patient_id');
    }
    public function extra_info()
    {
        return $this->hasOne(PatientExtraInfo::class, 'patient_id');
    }

    public function address()
    {
        return $this->hasOne(PatientAddressInfo::class, 'patient_id');
    }

    public function insurance()
    {
        return $this->hasOne(PatientInsurance::class, 'patient_id');
    }


    public function caseManage()
    {
        return $this->hasOne(PatientCaseManager::class, 'patient_id');
    }


    public function emergency()
    {
        return $this->hasOne(PatientEmergencyAlternateAddress::class, 'patient_id');
    }


    public function diagnosis()
    {
        return $this->hasOne(PatientClinicalDiagnosis::class, 'patient_id');
    }

    public function emergencyContact()
    {
        return $this->hasOne(PatientEmergencyContact::class, 'patient_id');
    }


    public function episode()
    {
        return $this->hasOne(PatientEpisodeTiming::class, 'patient_id');
    }


    public function service()
    {
        return $this->hasOne(PatientServiceAddress::class, 'patient_id');
    }

    public function reason()
    {
        return $this->hasOne(PatientNonAdmitReason::class, 'patient_id');
    }

    public function extra_info_physician()
    {
        return $this->belongsTo(PatientExtraInfo::class, 'physician_id');
    }

    public function discharge()
    {
        return $this->hasOne(PatientDischarge::class, 'patient_id');
    }

    public function admission()
    {
        return $this->hasOne(PatientAdmission::class, 'patient_id');
    }

    public function ethincity()
    {
        return $this->hasOne(PatientEthincity::class, 'patient_id');
    }
    public function transportation()
    {
        return $this->hasOne(PatientTransportation::class, 'patient_id');
    }
    public function allergy()
    {
        return $this->hasOne(Allergy::class, 'patient_id');
    }

    public function cms()
    {
        return $this->hasOne(CMS::class, 'patient_history_id');
    }
    public function physician()
    {
        return $this->belongsTo(PhysicianOrders::class, 'id', 'patient_history_id');
    }

    public function functionalAbilitie()
    {
        return $this->belongsTo(FunctionalAbilitie::class, 'id','patient_history_id');
    }
}
