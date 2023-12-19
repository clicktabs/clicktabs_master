<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\OrganizationAddress;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NonOasisDischargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
     
     $patient_code='3FE54FA8';
     $patient=Patient::where('patient_code',$patient_code)->first();

     // $orgaddress=OrganizationAddress::where('org_id',$patient->organization_id)->first();

      $orgaddress = Account::where('user_id', Auth::user()->id)->first();
     return view('automatic-assign-forms.home-care.non-oasis-discharge',compact('orgaddress','patient') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $employee = Patient::find($id);
        if($employee)
        {
            $employee->delete();
            return response()->json([
                'status'=>200,
                'message'=> 'Patient Deleted Successfully!',
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=> 'Patient not found!',
            ]);
        }
    }
}
