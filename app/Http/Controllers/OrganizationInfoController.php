<?php

namespace App\Http\Controllers;

use App\Models\OrganizationInfo;
use Illuminate\Http\Request;

class OrganizationInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:org-list');
        $this->middleware('permission:org-create', ['only' => ['create', 'store', 'edit', 'update', 'setOrganization']]);
    }

    public function update(Request $request)
    {
        $validated = $this->validate($request, [
            'national_provider_number' => 'string',
            'tax_id' => 'string',
            'tax_id_type' => 'integer',
            'medicare_provider_number' => 'string',
            'medicaid_provider_number' => 'string',
            'medicaid_provider_identifier' => 'string',
            'unique_agency_oasis_id_code' => 'string',
            'dme_medicaid_provider_identifier' => 'string',
            'cahps_vendor_id' => 'string',
        ]);

        try {
            $org = $this->setOrganization($request->org);
            $org->update($validated);

            return redirect()->back()->with('success', 'Success!!! Agency Information Updated Successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error!!! Agency Information Could Not Be Updated');
        }
    }

    private function setOrganization(string $org_id): OrganizationInfo
    {
        return OrganizationInfo::where('org_id', $org_id)->first();
    }
}
