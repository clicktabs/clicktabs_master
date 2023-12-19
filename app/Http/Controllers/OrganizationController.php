<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationRequest;
use App\Models\Organization;
use App\Models\OrganizationAddress;
use App\Models\OrganizationContactPerson;
use App\Models\OrganizationInfo;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:org-list');
        $this->middleware('permission:org-create', ['only' => ['create', 'store', 'edit', 'update']]);
        $this->middleware('permission:org-delete', ['only' => ['destroy', 'delete']]);
        // $this->middleware('permission:org-view', ['only' => ['show']]);
    }

    public function index()
    {
        $organizations = Organization::orderByDesc('created_at')->get();
        return view('organization.index', compact('organizations'));
    }

    public function create()
    {
        return view('organization.create');
    }

    public function store(OrganizationRequest $req)
    {
        $validated = $req->all();
        $validated['org_id'] = generate_random_token();
        $validated['user_id'] = Auth::id();

        try {
            Organization::create($validated);
//            OrganizationInfo::create($validated);
//            OrganizationAddress::create($validated);
//            OrganizationContactPerson::create($validated);

            return redirect()->route('organizations.index')->with('success', 'Success. '. $validated['name'] . ' was created successfully. ');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error!!! Organization Record Could Not Be Created');
        }

    }

    public function show($organization)
    {
        $org = $this->setOrganization($organization);
        $patients = Patient::where('org_id', $organization)->with('extra_info', 'address')->orderByDesc('created_at')->paginate(50);
        return view('organization.show', compact('org', 'patients'));
    }

    public function edit($organization)
    {
        $org = $this->setOrganization($organization);
        return view('organization.edit', compact('org'));
    }

    public function update(Request $request)
    {
        /**
         * let the various controllers handle the updates so that you can update each of the functionalities
         *  independently rather than using this to update all fields.
         * EXAMPLE, UPDATE ONLY ORGANIZATION ADDRESS BUT NOT EVERYTHING yyt
         */

        $validated = $this->validate($request, [
            'name' => 'string|min:3',
            'phone' => 'string|min:12',
            'email' => 'email|string',
        ]);

        try {
            $org = $this->setOrganization($request->organization);
            $org->name = $validated['name'];
            $org->phone = $validated['phone'];
            $org->email = $validated['email'];
            $org->save();

            return redirect()->back()->with('success', 'Success!!! Basic Information Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error!!! Basic Information Could Not Be Updated');
        }

    }

    /**
     * Disable or Enable the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change_status(Request $req, Organization $org)
    {
        // ONLY SUPER ADMINS CAN DISABLE OR ENABLE ORGANIZATIONS
        $orgId = decrypt($req->organization);

        $outcome = $org->changeStatus($orgId);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }

    private function setOrganization(string $org_id): Organization
    {
        return Organization::where('org_id', $org_id)->first();
    }
}
