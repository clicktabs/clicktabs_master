<?php

namespace App\Http\Controllers;

use App\Models\AnnualReportAgencyProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnualReportAgencyProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dodd-forms.annual-agency-report');
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
        // return $request->input();
        $request->validate([
            'agencyprovider_Name'=>'required',
            'agencyproviderMUI_Review'=>'required',
            'agencyproviderMUI_categories'=>'required',
            'agencyprovidertotalnumber_MUI'=>'required'
        ]);

        $query = DB::table('annual_report_agency_providers')->insert([
            'agencyprovider_Name'=>$request->input('agencyprovider_Name'),
            'agencyproviderMUI_Review'=>$request->input('agencyproviderMUI_Review'),
            'agencyproviderMUI_categories'=>$request->input('agencyproviderMUI_categories'),
            'agencyprovidertotalnumber_MUI'=>$request->input('agencyprovidertotalnumber_MUI'),
            'agencyprovidersameperiod_MUI'=>$request->input('agencyprovidersameperiod_MUI'),
            'annualReport_Attempted_suicide_1'=>$request->input('annualReport_Attempted_suicide_1'),
            'annualReport_Attempted_suicide_2'=>$request->input('annualReport_Attempted_suicide_2'),
            'annualReport_Attempted_suicide_3'=>$request->input('annualReport_Attempted_suicide_3'),
            'annualReport_Attempted_Death-Non-Accidental'=>$request->input('annualReport_Attempted_Death-Non-Accidental'),
            'annualReport_Attempted_Death-Non-Accidental_1'=>$request->input('annualReport_Attempted_Death-Non-Accidental_1'),
            'annualReport_Attempted_Death-Non-Accidental_2'=>$request->input('annualReport_Attempted_Death-Non-Accidental_2'),
            'annualReport_Attempted_Exploitation'=>$request->input('annualReport_Attempted_Exploitation'),
            'annualReport_Attempted_Exploitation_1'=>$request->input('annualReport_Attempted_Exploitation_1'),
            'annualReport_Attempted_Exploitation_2'=>$request->input('annualReport_Attempted_Exploitation_2'),
            'annualReport_Attempted_Failure'=>$request->input('annualReport_Attempted_Failure'),
            'annualReport_Attempted_Failure_1'=>$request->input('annualReport_Attempted_Failure_1'),
            'annualReport_Attempted_Failure_2'=>$request->input('annualReport_Attempted_Failure_2'),
            'annualReport_Attempted_Enforcement'=>$request->input('annualReport_Attempted_Enforcement'),
            'annualReport_Attempted_Enforcement_1'=>$request->input('annualReport_Attempted_Enforcement_1'),
            'annualReport_Attempted_Enforcement_2'=>$request->input('annualReport_Attempted_Enforcement_2'),
            'annualReport_Attempted_Medical_Emergency'=>$request->input('annualReport_Attempted_Medical_Emergency'),
            'annualReport_Attempted_Medical_Emergency_1'=>$request->input('annualReport_Attempted_Medical_Emergency_1'),
            'annualReport_Attempted_Medical_Emergency_2'=>$request->input('annualReport_Attempted_Medical_Emergency_2'),
            'annualReport_Attempted_Misappropriation'=>$request->input('annualReport_Attempted_Misappropriation'),
            'annualReport_Attempted_Misappropriation_1'=>$request->input('annualReport_Attempted_Misappropriation_1'),
            'annualReport_Attempted_Misappropriation_2'=>$request->input('annualReport_Attempted_Misappropriation_2'),
            'annualReport_Attempted_Missing_Individual'=>$request->input('annualReport_Attempted_Missing_Individual'),
            'annualReport_Attempted_Missing_Individual_1'=>$request->input('annualReport_Attempted_Missing_Individual_1'),
            'annualReport_Attempted_Missing_Individual_2'=>$request->input('annualReport_Attempted_Missing_Individual_2'),
            'annualReport_Attempted_Neglect'=>$request->input('annualReport_Attempted_Neglect'),
            'annualReport_Attempted_Neglect_1'=>$request->input('annualReport_Attempted_Neglect_1'),
            'annualReport_Attempted_Neglect_2'=>$request->input('annualReport_Attempted_Neglect_2'),
            'annualReport_Attempted_PeertoPeer'=>$request->input('annualReport_Attempted_PeertoPeer'),
            'annualReport_Attempted_PeertoPeer_1'=>$request->input('annualReport_Attempted_PeertoPeer_1'),
            'annualReport_Attempted_PeertoPeer_2'=>$request->input('annualReport_Attempted_PeertoPeer_2'),
            'annualReport_Attempted_Physical_Abuse'=>$request->input('annualReport_Attempted_Physical_Abuse'),
            'annualReport_Attempted_Physical_Abuse_1'=>$request->input('annualReport_Attempted_Physical_Abuse_1'),
            'annualReport_Attempted_Physical_Abuse_2'=>$request->input('annualReport_Attempted_Physical_Abuse_2'),
            'annualReport_Attempted_Prohibited'=>$request->input('annualReport_Attempted_Prohibited'),
            'annualReport_Attempted_Prohibited_1'=>$request->input('annualReport_Attempted_Prohibited_1'),
            'annualReport_Attempted_Prohibited_2'=>$request->input('annualReport_Attempted_Prohibited_2'),
            'annualReport_Rights_ Code_Violation'=>$request->input('annualReport_Rights_ Code_Violation'),
            'annualReport_Rights_ Code_Violation_1'=>$request->input('annualReport_Rights_ Code_Violation_1'),
            'annualReport_Rights_ Code_Violation_2'=>$request->input('annualReport_Rights_ Code_Violation_2'),
            'annualReport_Rights_Sexual_Abuse'=>$request->input('annualReport_Rights_Sexual_Abuse'),
            'annualReport_Rights_Sexual_Abuse_1'=>$request->input('annualReport_Rights_Sexual_Abuse_1'),
            // 'annualReport_Rights_Sexual_Abuse_2'=>$request->input('annualReport_Rights_Sexual_Abuse_2'),
            'annualReport_Rights_Significant_Injury'=>$request->input('annualReport_Rights_Significant_Injury'),
            'annualReport_Rights_Significant_Injury_1'=>$request->input('annualReport_Rights_Significant_Injury_1'),
            'annualReport_Rights_Significant_Injury_2'=>$request->input('annualReport_Rights_Significant_Injury_2'),
            'annualReport_Rights_Unapproved_Behavioral'=>$request->input('annualReport_Rights_Unapproved_Behavioral'),
            'annualReport_Rights_Unapproved_Behavioral_1'=>$request->input('annualReport_Rights_Unapproved_Behavioral_1'),
            'annualReport_Rights_Unapproved_Behavioral_2'=>$request->input('annualReport_Rights_Unapproved_Behavioral_2'),
            'annualReport_Rights_Unanticipated_Hospitalization'=>$request->input('annualReport_Rights_Unanticipated_Hospitalization'),
            'annualReport_Rights_Unanticipated_Hospitalization_1'=>$request->input('annualReport_Rights_Unanticipated_Hospitalization_1'),
            'annualReport_Rights_Unanticipated_Hospitalization_2'=>$request->input('annualReport_Rights_Unanticipated_Hospitalization_2'),
            'annualReport_Rights_Verbal_Abuse'=>$request->input('annualReport_Rights_Verbal_Abuse'),
            'annualReport_Rights_Verbal_Abuse_1'=>$request->input('annualReport_Rights_Verbal_Abuse_1'),
            'annualReport_Rights_Verbal_Abuse_2'=>$request->input('annualReport_Rights_Verbal_Abuse_2'),
            'annualReport_Rights_Explain'=>$request->input('annualReport_Rights_Explain'),
            'annualReport_Rights_AgencyTrends'=>$request->input('annualReport_Rights_AgencyTrends'),
            'annualReport_Rights_Description_action'=>$request->input('annualReport_Rights_Description_action'),
            'annualReport_Rights_previouse_year'=>$request->input('annualReport_Rights_previouse_year'),
            'annualReport_Rights_preventive'=>$request->input('annualReport_Rights_preventive'),
            'annualReport_Rights_individualswith5'=>$request->input('annualReport_Rights_individualswith5'),
            'annualReport_Rights_MUI_types'=>$request->input('annualReport_Rights_MUI_types'),
            'annualReport_Rights_actionplansPreventives'=>$request->input('annualReport_Rights_actionplansPreventives'),
            'annualReport_Rights_datatheAction'=>$request->input('annualReport_Rights_datatheAction'),
            'annualReport_Rights_Datereview'=>$request->input('annualReport_Rights_Datereview'),
            'annualReport_Rights_nameofpersonComplete'=>$request->input('annualReport_Rights_nameofpersonComplete'),
        ]);

        if($query){
            return back()->with('success', 'Data successfully inserted');
        }
        else{
            return back()->with('fail', 'something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnualReportAgencyProvider  $annualReportAgencyProvider
     * @return \Illuminate\Http\Response
     */
    public function show(AnnualReportAgencyProvider $annualReportAgencyProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnualReportAgencyProvider  $annualReportAgencyProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(AnnualReportAgencyProvider $annualReportAgencyProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnualReportAgencyProvider  $annualReportAgencyProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnnualReportAgencyProvider $annualReportAgencyProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnualReportAgencyProvider  $annualReportAgencyProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnnualReportAgencyProvider $annualReportAgencyProvider)
    {
        //
    }
}
