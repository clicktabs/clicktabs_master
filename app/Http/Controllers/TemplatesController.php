<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\AddonSubCategories;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $templates = Template::all();

        if(Auth::user()->roles[0]["name"]   !==  "super-admin") {
            $templates = Template::where('organization_id', '=', $organization_id)->get();
        }

        return view('templates.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $organization_id = Auth::user()->organization_id;
        $new_goals_addons = Addon::where('name', 'like', 'New Goals%')->where('status', '1')->first();
        $new_goals = get_sub_addons($new_goals_addons, $organization_id);

        // $section_gg_functional_abilities = Addon::where('name', 'like', 'Section GG Functional Abilities and Goals%')->where('status', '1')->first();
        // $section_gg_functional_abilities = get_sub_addons($section_gg_functional_abilities, $organization_id);

        // $section_g_functional_status = Addon::where('name', 'like', 'Section G Functional Status%')->where('status', '1')->first();
        // $section_g_functional_status = get_sub_addons($section_g_functional_status, $organization_id);

        // $bims_summary_scores = Addon::where('name', 'like', 'C0500. BIMS Summary Score%')->where('status', '1')->first();
        // $bims_summary_scores = get_sub_addons($bims_summary_scores, $organization_id);

        $new_intervention_addons = Addon::where('name', 'like', 'New Interventions%')->where('status', '1')->first();
        $new_interventions = get_sub_addons($new_intervention_addons, $organization_id);

        return view('templates.create', compact('new_goals', 'new_interventions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $organization_id = Auth::user()->organization_id;

        $validated = $request->all();
        Template::create([
            'new_goals_templates' => json_encode($request->new_goals),
            'template_new_goals_content' => $request->new_goal_content,
            'template_new_intervention_content' => $request->new_intervention_content,
            'new_intervention_templates' => json_encode($request->new_interventions),

            // 'section_gg_functional_abilities_goals_content' => $validated['section_gg_functional_abilities_goals_content'],
            // 'section_gg_functional_abilities_goals_templates' => json_encode($validated['section_gg_functional_abilities_goals_templates']),

            // 'section_g_functional_status_content' => $validated['section_g_functional_status_content'],
            // 'section_g_functional_status_templates' => json_encode($validated['section_g_functional_status_templates']),

            // 'bims_summary_score_content' => $validated['bims_summary_score_content'],
            // 'bims_summary_score_templates' => json_encode($validated['bims_summary_score_templates']),
            'organization_id' => $organization_id
        ]);

        return redirect()->route('templates.index')->with('success', 'Template created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $organization_id = Auth::user()->organization_id;
        $new_goals_addons = Addon::where('name', 'like', 'New Goals%')->where('status', '1')->first();
        $new_goals = get_sub_addons($new_goals_addons, $organization_id);

        // $section_gg_functional_abilities = Addon::where('name', 'like', 'Section GG Functional Abilities and Goals%')->where('status', '1')->first();
        // $section_gg_functional_abilities = get_sub_addons($section_gg_functional_abilities, $organization_id);

//        dd($section_gg_functional_abilities);

        // $section_g_functional_status = Addon::where('name', 'like', 'Section G Functional Status%')->where('status', '1')->first();
        // $section_g_functional_status = get_sub_addons($section_g_functional_status, $organization_id);

        // $bims_summary_scores = Addon::where('name', 'like', 'C0500. BIMS Summary Score%')->where('status', '1')->first();
        // $bims_summary_scores = get_sub_addons($bims_summary_scores, $organization_id);

        $new_intervention_addons = Addon::where('name', 'like', 'New Interventions%')->where('status', '1')->first();
        $new_interventions = get_sub_addons($new_intervention_addons, $organization_id);

        $templates = Template::find($id);

        return view('templates.edit', compact('new_goals', 'new_interventions', 'templates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $organization_id = Auth::user()->organization_id;
        $validated = $request->all();
        $template = Template::find($id);
        $template->new_goals_templates = json_encode($validated['new_goals']);
        $template->template_new_goals_content = $validated['new_goal_content'];
        $template->template_new_intervention_content = $validated['new_intervention_content'];
        $template->new_intervention_templates = json_encode($validated['new_interventions']);

        // $template->section_gg_functional_abilities_goals_content = $validated['section_gg_functional_abilities_goals_content'];
        // $template->section_gg_functional_abilities_goals_templates = json_encode($validated['section_gg_functional_abilities_goals_templates']);

        // $template->section_g_functional_status_content = $validated['section_g_functional_status_content'];
        // $template->section_g_functional_status_templates = json_encode($validated['section_g_functional_status_templates']);

        // $template->bims_summary_score_content = $validated['bims_summary_score_content'];
        // $template->bims_summary_score_templates = json_encode($validated['bims_summary_score_templates']);
        $template->organization_id = $organization_id;
        $template->save();

        return redirect()->route('templates.index')->with('success', 'Template updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = Template::find($id);
        if($user) {
            $user->delete($id);
            return redirect()->route('templates.index')->with('success', 'Template was deleted successfully. ');
        } else {
            return redirect()->route('templates.index')->with('error', 'Template was not deleted successfully. ');
        }
    }
}
