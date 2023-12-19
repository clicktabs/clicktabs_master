<?php

namespace App\Http\Controllers;

use App\Models\AddonSubCategories;
use App\Models\Addon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddonSubCategoryRequest;

use Illuminate\Support\Facades\Log;

class AddonSubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $addon = Addon::where('id', $id)->first();

        return view('addonSubs.create', compact('addon'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddonSubCategoryRequest $request)
    {
        //
        try{
            Log::debug("===============>>>>>>>>>>>>>");
            Log::info($request);
            $addonSub = new AddonSubCategories();
            $addonSub->code = generate_random_token();
            $addonSub->name = request('name');
            $addonSub->description = request('description');
            $addonSub->addon_id = request('addon_id');
            $addonSub->user_id = Auth::id();

            Log::debug("===============>>>>>>>>>>>>>");
            Log::debug($addonSub);

            $saved = $addonSub->save();

            return redirect()->route('addons.index');

        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddonSubCategories  $addonSubCategories
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        //
        $addonSubs = AddonSubCategories::where('addon_id', $code)->get();
        $addon = Addon::where('id', $code)->first();
        Log::debug("===============>>>>>>>>>>>>>");
        Log::info($addonSubs);
        return view('addonSubs.show', compact('addonSubs','addon'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddonSubCategories  $addonSubCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(AddonSubCategories $addonSubCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddonSubCategories  $addonSubCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddonSubCategories $addonSubCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddonSubCategories  $addonSubCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddonSubCategories $addonSubCategories)
    {
        //
    }
}
