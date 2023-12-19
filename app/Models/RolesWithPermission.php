<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class RolesWithPermission extends Model
{
    use HasFactory;

    public function getRoles()
    {
        return $this->belongsTo(AddonSubCategories::class,'addon_subcategory_id');
    }
    public function getPermissions()
    {
        return $this->belongsTo(Permission::class,'assigned_permission_id');
    }
}
