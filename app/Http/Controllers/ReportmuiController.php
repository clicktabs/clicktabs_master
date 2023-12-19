<?php

namespace App\Http\Controllers;

use App\Models\Reportmui;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportmuiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dodd-forms.possible-mui-report-form');
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
        {
            // $request->validate([
               //     ''=>'required',
               //     ''=>'required',
               //     ''=>'required',
               //     ''=>'required'
               // ]);
       
               $query = DB::table('reportmuis')->insert([
                   'ProviderNameAddress'=>$request->input('ProviderNameAddress'),
                   'IndividualsName'=>$request->input('IndividualsName'),
                   'dob'=>$request->input('dob'),
                   'Address'=>$request->input('Address'),
                   'city'=>$request->input('city'),
                   'DateofIncident'=>$request->input('DateofIncident'),
                   'TimeofIncident'=>$request->input('TimeofIncident'),
                   'ampm'=>$request->input('ampm'),
                   'LocationofIncident'=>$request->input('LocationofIncident'),
                   'DescriptionofIncident'=>$request->input('DescriptionofIncident'),
                   'InjuryDescribe'=>$request->input('InjuryDescribe'),
                   'ImmediateAction'=>$request->input('ImmediateAction'),
                   'NameofPPI'=>$request->input('NameofPPI'),
                   'RelationshiptoIndividual'=>$request->input('RelationshiptoIndividual'),
                   'Witnesses'=>$request->input('Witnesses'),
                   'OthersInvolved'=>$request->input('OthersInvolved'),
                   'NameTitle'=>$request->input('NameTitle'),
                   'DateTime'=>$request->input('DateTime'),
                   'ssa'=>$request->input('ssa'),
                   'DateTime_1'=>$request->input('DateTime_1'),
                   'CertifiedProvider'=>$request->input('CertifiedProvider'),
                   'DateTime_2'=>$request->input('DateTime_2'),
                   'NameBadgeNumber'=>$request->input('NameBadgeNumber'),
                   'DateTime_4'=>$request->input('DateTime_4'),
                   'ChildrenServices'=>$request->input('ChildrenServices'),
                   'DateTime_5'=>$request->input('DateTime_5'),
                   'CountyBoard'=>$request->input('CountyBoard'),
                   'DateTime_6'=>$request->input('DateTime_6'),
                   'SeniorManagement'=>$request->input('SeniorManagement'),
                   'DateTime_8'=>$request->input('DateTime_8'),
                   'OtherProvidersofService'=>$request->input('OtherProvidersofService'),
                   'DateTime_9'=>$request->input('DateTime_9'),
                   'FurtherMedicalFollow-up'=>$request->input('FurtherMedicalFollow-up'),
                   'AdministrativeAction'=>$request->input('AdministrativeAction'),
                   'PrintedName'=>$request->input('PrintedName'),
                   'Signature'=>$request->input('Signature'),
                   'Title'=>$request->input('Title'),
                   'Date'=>$request->input('Date'),
                   'HeadFace'=>$request->input('HeadFace'),
                   'MouthTeeth'=>$request->input('MouthTeeth'),
                   'HandsArms'=>$request->input('HandsArms'),
                   'FeetLegs'=>$request->input('FeetLegs'),
                   'NeckChest'=>$request->input('NeckChest'),
                   'Abdomen'=>$request->input('Abdomen'),
                   'BackButtocks'=>$request->input('BackButtocks'),
                   'Genitals'=>$request->input('Genitals'),
                   'Detaileddescription'=>$request->input('Detaileddescription'),
                   'ContributingFactors'=>$request->input('ContributingFactors'),
                   'Preventivemeasures'=>$request->input('Preventivemeasures'),
                   'AdministratorReview'=>$request->input('AdministratorReview'),
                   'Dated'=>$request->input('Dated'),
                ]);

                if($query){
                    return back()->with('success', 'Data successfully inserted');
                }
                else{
                    return back()->with('fail', 'something went wrong');
                }
                  }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reportmui  $reportmui
     * @return \Illuminate\Http\Response
     */
    public function show(Reportmui $reportmui)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reportmui  $reportmui
     * @return \Illuminate\Http\Response
     */
    public function edit(Reportmui $reportmui)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reportmui  $reportmui
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reportmui $reportmui)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reportmui  $reportmui
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reportmui $reportmui)
    {
        //
    }
}
