<?php

namespace App\Http\Controllers;

use App\Models\TaxIdType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TaxIdRequest;
use App\Models\Organization;

class TaxIdTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $companyId = '0';
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $companyId = Auth::user()->organization_id;
                $organizations = Auth::user()->organization_id;

        }
        $addonTaxes = TaxIdType::where('company_id', $companyId)->get();
        return view('addons.tax.dashboard', compact('addonTaxes', 'organizations'));

    }



    public function check_addons(Request $request){
        $companyId = "";
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = $request->organisation_id;

        }

        $addonTaxes = TaxIdType::where('company_id', $request->organisation_id)->get();
        $organization = Organization::where('id', $request->organisation_id)->get();
        $name = $organization[0]['name'];
        return view('addons.tax.sub_dashboard', compact('addonTaxes', 'organizations', 'name'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = Auth::user()->organization_id;
        }
        return view('addons.tax.create', compact('organizations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaxIdRequest $request)
    {
        $validated = $request->all();
        $validated['code'] = generate_random_token();
        $validated['user_id'] = Auth::id();
        $validated['company_id'] = $request->organisation_id;
        try{

            TaxIdType::create($validated);
            return redirect()->route('taxes.index')->with('success', 'Success. Tax ID - '. $validated['name'] . ' was created successfully. ');

        }catch (\Throwable $th){
            dd($th->getMessage());
            // return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaxIdType  $taxIdType
     * @return \Illuminate\Http\Response
     */
    public function show(TaxIdType $taxIdType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaxIdType  $taxIdType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $addon_id = decrypt($id);

        $addonTax = TaxIdType::where('id', $addon_id)->first();
        return view('addons.tax.edit', compact('addonTax'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaxIdType  $taxIdType
     * @return \Illuminate\Http\Response
     */
    public function update( TaxIdRequest $taxIdType)
    {
        //
        $addon_id = decrypt(request('id'));

        try {

            $addonTax = TaxIdType::where('id', $addon_id)->first();

            $addonTax->name = request('name');
            $addonTax->reference_code = request('reference_code');
            $addonTax->save();

            return redirect()->route('taxes.index');
        }catch (\Exception $th){
            // $this->showErrorAlert($th->getMessage());
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaxIdType  $taxIdType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaxIdType $taxIdType)
    {
        //
    }


    public function change_status(Request $req, TaxIdType $taxId)
    {
        $tax_id = decrypt($req->tax_id);

        $outcome = $taxId->changeStatus($tax_id);

        if ($outcome) {
            return redirect()->back()->with('success', "Success!!! $outcome" );
        } else {
            return redirect()->back()->with('error', "Error!!! Action Could not be performed. Report Issue to System Admin.");
        }
    }
}
