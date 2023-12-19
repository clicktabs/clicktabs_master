<?php

namespace App\Http\Controllers;

use App\Traits\AlertUtils;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\AddonSubCategories;
use App\Models\Addon;
use App\Models\RolesWithPermission;

class RolesController extends Controller
{
    use AlertUtils;

    public function __construct()
    {
        $this->middleware('permission:role-list');
        $this->middleware('permission:role-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:role-delete', ['only' => ['destroy', 'delete']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */


    // public function index(Request $request)
    // {
    //      $subCategoryRoles = AddonSubCategories::all();
    //      $rolesId = RolesWithPermission::where('user_id',Auth()->user()->id)->pluck('addon_subcategory_id')->unique();
    //     return view('roles.index', compact('subCategoryRoles','rolesId'));
    // }
    public function index()
    {
        $user = Auth::user();
        $role = $user->getRoleNames();
        $organization_id = $user->organization_id;

        if ($role[0] === 'super-admin') {
            $roles = Role::all();
        } else {
            $roles = Role::where('organization_id', '=', $organization_id)->orWhere('organization_id', '=', Null)->get();
        }

        $rolePermissions = Permission::join('role_has_permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')->get();

        return view('roles.index', compact('roles', 'rolePermissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'SubCategoryId' => 'required',
            'permissionsId' => 'required'
        ],
            [
                'SubCategoryId' => 'Select Name To Assign Permission',
                'permissionsId' => 'Please Assign Permissions'
            ]
        );
        $role = Role::where('id', $request->SubCategoryId)->first();
        $role->syncPermissions(explode(",", $request->permissionsId[0]));
        $this->showSuccessToast('Role Assigned successfully');
        return redirect()->route('role-list');
    }
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required|unique:roles,name',
    //         'permission' => 'required',
    //     ]);

    //     $role = Role::create(['name' => $request->input('name')]);
    //     $role->syncPermissions($request->input('permission'));

//        $this->showSuccessToast('Role created successfully');
    //     $message = 'Success. '. $role->name . ' was created successfully.';

    //     return redirect()->route('roles.index')->with('success', $message);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    function create()
    {
        $permission = Permission::get();
        $roles = Role::all();
        $heading = 'Add Role Permissions';
        $url = route('insert-role');
        return view('roles.create', compact('permission', 'roles', 'heading', 'url'));
    }
    // public function create()
    // {
    //     $permission = Permission::get();
    //     return view('roles.create', compact('permission'));
    // }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return View
     */
    public function show(Role $role)
    {
        $rolePermissions = Permission::join('role_has_permissions', 'role_has_permissions.permission_id',
            '=', 'permissions.id')->where('role_has_permissions.role_id', $role->id)->get();

        return view('roles.show', compact('role', 'rolePermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return View
     */
    // public function edit(Request $request){
    //     $allPermissions= RolesWithPermission::where('addon_subcategory_id',$request->addon_subcategory_id)->with('getPermissions')->get('assigned_permission_id');
    //     $roleId=$request->addon_subcategory_id;
    //     foreach($allPermissions as $obj){
    //      $assignedPermissionsId[]=$obj->assigned_permission_id;
    //     }
    //     $permission = Permission::whereNotIn('id',$assignedPermissionsId)->get();
    //     $addonSubCategories = Addon::where('name','Roles')->with('addonSubCategories')->get();
    //     $url=route('update-role',['addon_subcategory_id'=>$request->addon_subcategory_id]);
    //     $heading='Update Role Permissions';
    //     return view('roles.create',compact('permission','addonSubCategories','allPermissions','roleId','heading','url'));
    //  }

    public function edit(Request $request)
    {
        $permission = Permission::get();
        $roles = Role::all();
        $heading = 'Edit Role Permissions';
        $url = route('update-role', ['addon_subcategory_id' => $request->addon_subcategory_id]);
        $userRole = Role::where('id', $request->addon_subcategory_id)->first();
        $rolehasPermissions = $userRole->getAllPermissions();
        $roleId = $userRole->id;
        return view('roles.edit', compact('roles', 'roleId', 'rolehasPermissions', 'permission', 'heading', 'url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Role $role
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'SubCategoryId' => 'required',
            'permissionsId' => 'required'
        ],
            [
                'SubCategoryId' => 'Select Name To Assign Permission',
                ' ' => 'Please Assign Permissions'
            ]
        );
        $role = Role::where('id', $request->SubCategoryId)->first();
        $role->syncPermissions(explode(",", $request->permissionsId[0]));
        $this->showSuccessToast('Permissions Assigned successfully');
        return redirect()->route('role-list');
    }
    // public function update(Request $request, Role $role)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'permission' => 'required',
    //     ]);

    //     $role->name = $request->input('name');
    //     $role->save();
    //     $role->syncPermissions($request->input('permission'));

    //     $this->showSuccessAlert('Role updated successfully');

    //     $message = 'Success. '. $role->name . ' was updated successfully.';

    //     return redirect()->route('roles.index')->with('success', $message);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return RedirectResponse
     */
    public function destroy(Role $role)
    {
        DB::table('roles')->where('id', $role->id)->delete();
//        $this->showSuccessAlert('Role removed successfully');
        $message = 'Success. ' . $role->name . ' was removed successfully.';
        return redirect()->route('roles.index')->with('success', $message);
    }
}
