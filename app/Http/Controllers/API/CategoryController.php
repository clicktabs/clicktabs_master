<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddonCategoryRequest;
use App\Models\Addon;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        $categories = Addon::where('user_id', '=', $user_id)->get();
        return response()->json(['data' => $categories]);
    }

    public function store(AddonCategoryRequest $request)
    {
        $category               = new Addon();
        $category->name         = $request->addons_name;
        $category->status       = $request->addon_status;
        $category->user_id      = Auth::user()->id;
        $category->save();
        $categories = Addon::orderBy('created_at', 'desc')->get();
        return response()->json([
            'message' => 'Addons Saved Successfully',
            'data' => $categories], 201);
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $id = remove_encrypt_data($id);
        $category = Addon::find($id);
        if($category)
        {
            return response()->json([
                'status'=>200,
                'addon'=> $category,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No addon found!',
            ]);
        }
    }


    public function update(AddonCategoryRequest $request, $id)
    {
        $id = remove_encrypt_data($id);
        $category                   = Addon::find($id);
        $category->name             = $request->addons_name;
        $category->status           = $request->addon_status;
        $category->user_id          = Auth::user()->id;
        $category->save();
        $categories = Addon::orderBy('created_at', 'desc')->get();
        return response()->json([
            'message' => 'Addons Update Successfully',
            'data' => $categories], 201);
    }


    public function destroy($id)
    {
        $id = remove_encrypt_data($id);
        $category = Addon::find($id);
        $category->delete();
        return response()->json([
            'message' => 'Addon deleted successfully.'
        ]);
    }
}
