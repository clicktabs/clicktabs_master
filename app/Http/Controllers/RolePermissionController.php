<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\AddonSubCategories;
use App\Models\RolesWithPermission;
use Illuminate\Http\Request;
use App\Models\Addon;

class RolePermissionController extends Controller
{
    public function rolesListWithPermissions(Request $request)
    {
         $subCategoryRoles = AddonSubCategories::all();
         $rolesId = RolesWithPermission::pluck('addon_subcategory_id','id')->unique();
         return view('socialworker.roles-list-with-permissions', compact('subCategoryRoles','rolesId'));
    }
    public function createRoleWithPermissions()
    {
        $permission = Permission::get();
        $addonSubCategories = Addon::where('name','Roles')->with('addonSubCategories')->get();
        $heading='Add Role Permissions';
        $url=route('insert-role-permissions');
        return view('socialworker.create-role-with-permissions', compact('permission', 'addonSubCategories','heading','url'));
    }
    public function insertRolePermissions(Request $request)
    {
        // return $request;
        $request->validate([
        'SubCategoryId'=>'required',
        'permissionsId'=>'required'
        ],
        [
            'SubCategoryId'=>'Select Name To Assign Permission',
            'permissionsId'=>'Please Assign Permissions'
        ]
    );
    $allValues =  explode(",",$request->permissionsId[0]);
        foreach ( $allValues as $value) {
            RolesWithPermission::insert([
                'addon_subcategory_id' => $request->SubCategoryId,
                'user_id' => Auth()->user()->id,
                'assigned_permission_id' =>$value
            ]);
        }
        return redirect()->route('roles-list-with-permissions');
    }
    public function editRoleWithPermissions(Request $request)
    {
       $allPermissions= RolesWithPermission::where('addon_subcategory_id',$request->addon_subcategory_id)->with('getPermissions')->get('assigned_permission_id');
       $roleId=$request->addon_subcategory_id;
       foreach($allPermissions as $obj){
        $assignedPermissionsId[]=$obj->assigned_permission_id;
       }
       $permission = Permission::whereNotIn('id',$assignedPermissionsId)->get();
       $addonSubCategories = Addon::where('name','Roles')->with('addonSubCategories')->get();
       $url=route('update-role-with-permissions',['addon_subcategory_id'=>$request->addon_subcategory_id]);
       $heading='Update Role Permissions';
       return view('socialworker.create-role-with-permissions',compact('permission','addonSubCategories','allPermissions','roleId','heading','url'));
    }

    public function updateRoleWithPermissions(Request $request){
        $request->validate([
            'SubCategoryId'=>'required',
            'permissionsId'=>'required'
            ],
            [
                'SubCategoryId'=>'Select Name To Assign Permission',
                'permissionsId'=>'Please Assign Permissions'
            ]
        );
        $allValues =  explode(",",$request->permissionsId[0]);
         $roleWithAssignedPermissions=RolesWithPermission::where('addon_subcategory_id',$request->SubCategoryId)->delete();
                foreach ($allValues as $value) {
                    RolesWithPermission::insert([
                        'addon_subcategory_id' => $request->SubCategoryId,
                        'user_id' => Auth()->user()->id,
                        'assigned_permission_id' => $value
                    ]);
            }
            return redirect()->route('roles-list-with-permissions');
    }
}
