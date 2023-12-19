<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhysicianRequest;
use App\Models\Organization;
use App\Models\Physician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhysicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $organization_id = Auth::user()->organization_id;
        $physicians = Physician::where('org_id', '=', $organization_id)->get();
        return response()->json(['data' => $physicians]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        switch(Auth::user()->organization_id) {
            case(null):
                $organizations = Organization::orderByDesc('created_at')->get();
                break;

            default:
                $organizations = Auth::user()->organization_id;
        }
        return response()->json(['data' => $organizations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PhysicianRequest $request)
    {
        $org_id = Auth::user()->organization_id;

        $physician = new Physician();
        $physician->code = generate_random_token();
        $physician->first_name = $request->first_name;
        $physician->last_name = $request->physician_last_name;
        $physician->mi = $request->mi;
        $physician->credentials = $request->credentials;
        $physician->npi_number = $request->npi_number;
        $physician->speciality = $request->speciality;
        $physician->email = $request->email;
        $physician->address_line_1 = $request->address_line_1;
        $physician->address_line_2 = $request->address_line_2;
        $physician->state = $request->state;
        $physician->city = $request->city;
        $physician->zip = $request->zip;
        $physician->primary_phone = $request->primary_phone;
        $physician->alternate_phone = $request->alternate_phone;
        $physician->fax = $request->fax;
        $physician->org_id = $org_id;
        $physician->pecos_verification = false;
        $physician->user_id = Auth::user()->id;
        $physician->save();
        return response()->json(['data' => $physician]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $physicianId = decrypt($id);

        $physician = Physician::where('id', $physicianId)->first();
        return response()->json(['data' => $physician]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PhysicianRequest $request, $id)
    {
        //
        $physicianId = decrypt(request('id'));

        $physician = Physician::where('id', $physicianId)->first();

        $physician->first_name = request('first_name');
        $physician->last_name = request('last_name');
        $physician->mi = request('mi');
        $physician->credentials = request('credentials');
        $physician->npi_number = request('npi_number');
        $physician->speciality = request('speciality');
        $physician->email = request('email');
        $physician->address_line_1 = request('address_line_1');
        $physician->address_line_2 = request('address_line_2');
        $physician->state = request('state');
        $physician->city = request('city');
        $physician->zip = request('zip');
        $physician->primary_phone = request('primary_phone');
        $physician->alternate_phone = request('alternate_phone');
        $physician->fax = request('fax');
        switch(request('verification_pecos')) {
            case("false"):
                $physician->pecos_verification = false;
                break;

            default:
                $physician->pecos_verification = true;
        }

        $physician->save();
        return response()->json(['data' => $physician]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $physician = Physician::find($id);
        $physician->delete();
        return response()->json([
            'message' => 'Physician deleted successfully.'
        ]);
    }
}
