<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubAddonRequest;
use App\Models\Addon;
use App\Traits\AlertUtils;
use Spatie\Permission\Models\Role;
use App\Models\AddonSubCategories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{

    use AlertUtils;

    public function __construct()
    {
        $this->middleware('permission:addons-list');
        $this->middleware('permission:addons-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:addons-delete', ['only' => ['destroy', 'delete']]);
    }

    public function index()
    {
        $subcategories = AddonSubCategories::all();
//        $subcategories = AddonSubCategories::where('addon_id', '=', $addon->id)->where('organization_id', '=', $organization_id)->get();

        return response()->json(['data' => $subcategories]);
    }

    public function store(SubAddonRequest $request)
    {
        $addon_id = remove_encrypt_data($request->addon_id);

        if (AddonSubCategories::where('addon_id', $addon_id)->where('name',$request->sub_addons_name)->exists()) {
            return response()->json(
                [
                    'data' => 400,
                    'message' => 'This '.$request->sub_addons_name.' sub addon already exist',
                ], 400);
        }
        $user = Auth::user();
        if (!$user->hasRole('super admin') && $request->sub_addons_name === 'Super admin') {
            return response()->json(
                [
                    'data' => 400,
                    'message' => "You don't have permission to create Super admin.",
                ], 400);
        }

        $organization_id = $user->organization_id;
        $subcategory = new AddonSubCategories();
        $subcategory->name = $request->sub_addons_name;
        $subcategory->code = $organization_id . '_' . $request->sub_addon_code;
        $subcategory->status = $request->sub_addon_status;
        $subcategory->organization_id = $organization_id;
        $subcategory->description = $request->sub_addon_description;
        $subcategory->addon_id = $addon_id;
        $subcategory->user_id = $user->id;
        $subcategory->save();
        if (Addon::where(['id' => $addon_id, 'name' => 'Roles'])->exists()) {
            Role::insert([
                'name' => $request->sub_addons_name,
                'organization_id' => $organization_id,
                'guard_name' => 'web',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d h:i:s'),
            ]);
        }

        $addon = Addon::find($addon_id);

        $all_subcats = AddonSubCategories::where(function ($query) use ($addon, $organization_id) {
            $query->where('addon_id', $addon->id)->where('organization_id', $organization_id);
        })->orWhere(function ($query) use ($addon) {
            $query->where('addon_id', $addon->id)->whereNull('organization_id');
        })->orderBy('created_at', 'DESC')->get();

        if ($user->hasRole('super-admin')) {
            $all_subcats = AddonSubCategories::where('addon_id', '=', $addon->id)->orderBy('created_at', 'DESC')->get();
        }

        return response()->json(
            [
                'data' => $all_subcats,
                'message' => 'New sub addon created successfully',
            ], 201);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $id = remove_encrypt_data($id);
        $subAddons = AddonSubCategories::find($id);
        return response()->json(['sub_addon' => $subAddons], 201);
    }


    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $id = remove_encrypt_data($id);
        $addon_id = remove_encrypt_data($request->addon_id);
        $organization_id = $user->organization_id;
        $subcategory = AddonSubCategories::find($id);
        if (Addon::where(['id' => $request->addon_id, 'name' => 'Roles'])->exists()) {
            Role::where('name', $subcategory->name)->update([
                'name' => $request->sub_addons_name,
                'organization_id' => $organization_id,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d h:i:s'),
            ]);
        }
        $subcategory->name = $request->sub_addons_name;
        $subcategory->code = $request->sub_addon_code;
        $subcategory->status = $request->sub_addon_status;
        $subcategory->organization_id = $organization_id;
        $subcategory->description = $request->sub_addon_description;
        $subcategory->addon_id = $addon_id;
        $subcategory->user_id = $user->id;
        $subcategory->save();

        $addon = Addon::find($addon_id);

        $all_subcats = AddonSubCategories::where(function ($query) use ($addon, $organization_id) {
            $query->where('addon_id', $addon->id)->where('organization_id', $organization_id);
        })->orWhere(function ($query) use ($addon) {
            $query->where('addon_id', $addon->id)->whereNull('organization_id');
        })->orderBy('created_at', 'DESC')->get();

        if ($user->hasRole('super-admin')) {
            $all_subcats = AddonSubCategories::where('addon_id', '=', $addon->id)->orderBy('created_at', 'DESC')->get();
        }

        return response()->json(
            [
                'sub_addon' => $all_subcats,
                'message' => 'Update successfully',
            ], 201);
    }


    public function destroy($id)
    {
        $id = remove_encrypt_data($id);
        $subcategory = AddonSubCategories::find($id);
        if (Addon::where(['id' => $subcategory->addon_id, 'name' => 'Roles'])->exists()) {
            Role::where('name', $subcategory->name)->delete();
        }

        $subcategory->delete();
        return response()->json([
            'message' => 'Sub addon deleted successfully.'
        ]);
    }

}
