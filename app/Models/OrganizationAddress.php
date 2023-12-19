<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrganizationAddress extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];
  
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'org_id', 'org_id');
    } 

    public function OrganizationInfo(): BelongsTo
    {
        return $this->belongsTo(Organization::class, 'org_id');
    }
}
