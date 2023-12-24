<?php

namespace App\Http\Controllers;

use App\Models\Unapprovedbehavioralsupport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnapprovedbehavioralsupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dodd-forms.unapproved-behavioral-support-mui-form');
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
        // $request->validate([
     //     ''=>'required',
     //     ''=>'required',
     //     ''=>'required',
     //     ''=>'required'
     // ]);

     $query = DB::table('unapprovedbehavioralsupports')->insert([
         'IndividualsName'=>$request->input('IndividualsName'),
         'DateofUBS'=>$request->input('DateofUBS'),
         'PersonCompletingForm'=>$request->input('PersonCompletingForm'),
         'Title'=>$request->input('Title'),
         'ContactInformation'=>$request->input('ContactInformation'),
         'DateFormCompleted'=>$request->input('DateFormCompleted'),
         'MUINumber'=>$request->input('MUINumber'),
         'Provider'=>$request->input('Provider'),
         'whatledtoUBS'=>$request->input('whatledtoUBS'),
         'behavioralsupport'=>$request->input('behavioralsupport'),
         'Baskethold'=>$request->input('Baskethold'),
         'MultiplePersonCarry'=>$request->input('MultiplePersonCarry'),
         'MultiplePersonEscort'=>$request->input('MultiplePersonEscort'),
         'OnePersonCarry'=>$request->input('OnePersonCarry'),
         'OnePersonEscort'=>$request->input('OnePersonEscort'),
         'OnePersonRestraint'=>$request->input('OnePersonRestraint'),
         'DownwithResistance'=>$request->input('DownwithResistance'),
         'Prone'=>$request->input('Prone'),
         'MultipleAppendages'=>$request->input('MultipleAppendages'),
         'SeatedRestraint'=>$request->input('SeatedRestraint'),
         'SideRestraint'=>$request->input('SideRestraint'),
         'StandingRestraint'=>$request->input('StandingRestraint'),
         'Supine'=>$request->input('Supine'),
         'FullBody-papooseBoardWrap'=>$request->input('FullBody-papooseBoardWrap'),
         'FullBody-seatedPosition'=>$request->input('FullBody-seatedPosition'),
         'FullBody-supinePosition'=>$request->input('FullBody-supinePosition'),
         'GaitBelt'=>$request->input('GaitBelt'),
         'Helmet'=>$request->input('Helmet'),
         'LockedSeatBelt'=>$request->input('LockedSeatBelt'),
         'Mitts'=>$request->input('Mitts'),
         'Splints'=>$request->input('Splints'),
         'Transportationlocked'=>$request->input('Transportationlocked'),
         'Wheelchaircontrolsdisabled'=>$request->input('Wheelchaircontrolsdisabled'),
         'Wheelchairforindividual'=>$request->input('Wheelchairforindividual'),
         'OtherMechanical'=>$request->input('OtherMechanical'),
         'injuries'=>$request->input('injuries'),
         'interventionsupport'=>$request->input('interventionsupport'),
         'SupervisionNotMet'=>$request->input('SupervisionNotMet'),
         'StaffRatioNotAppropriate'=>$request->input('StaffRatioNotAppropriate'),
         'DietNotFollowed'=>$request->input('DietNotFollowed'),
         'AskedtoCompleteTask'=>$request->input('AskedtoCompleteTask'),
         'ChangeinRoutine'=>$request->input('ChangeinRoutine'),
         'ExcessiveNoise'=>$request->input('ExcessiveNoise'),
         'AttentionUnavailable'=>$request->input('AttentionUnavailable'),
         'PeerAggression'=>$request->input('PeerAggression'),
         'OutingCancelled'=>$request->input('OutingCancelled'),
         'ControlIssues'=>$request->input('ControlIssues'),
         'MedicationChanges'=>$request->input('MedicationChanges'),
         'Illness'=>$request->input('Illness'),
         'PossibleHallucination'=>$request->input('PossibleHallucination'),
         'LossImportantRelationship'=>$request->input('LossImportantRelationship'),
         'ISP_BSPNotFollowed'=>$request->input('ISP_BSPNotFollowed'),
         'Otherinterventionsupport'=>$request->input('Otherinterventionsupport'),
         'environmentalchanges'=>$request->input('environmentalchanges'),
         'AgencyPolicy_SystemChange'=>$request->input('AgencyPolicy_SystemChange'),
         'Stafftrainin'=>$request->input('Stafftrainin'),
         'Counseling'=>$request->input('Counseling'),
         'addressISPchanges'=>$request->input('addressISPchanges'),
         'AppointmentMedicalcare'=>$request->input('AppointmentMedicalcare'),
         'Medicationchange'=>$request->input('Medicationchange'),
         'appointmentscheduled'=>$request->input('appointmentscheduled'),
         'PT_OT_Speechreferra'=>$request->input('PT_OT_Speechreferra'),
         'Dietchangeordered'=>$request->input('Dietchangeordered'),
         'Homehealthcare'=>$request->input('Homehealthcare'),
         'OtherPREVENTION'=>$request->input('OtherPREVENTION'),
         'CommentsQuestions'=>$request->input('CommentsQuestions'),
         'IANAME'=>$request->input('IANAME'),
         'REVIEWCOMPLETEDDATE'=>$request->input('REVIEWCOMPLETEDDATE'),     
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
     * @param  \App\Models\Unapprovedbehavioralsupport  $unapprovedbehavioralsupport
     * @return \Illuminate\Http\Response
     */
    public function show(Unapprovedbehavioralsupport $unapprovedbehavioralsupport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unapprovedbehavioralsupport  $unapprovedbehavioralsupport
     * @return \Illuminate\Http\Response
     */
    public function edit(Unapprovedbehavioralsupport $unapprovedbehavioralsupport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unapprovedbehavioralsupport  $unapprovedbehavioralsupport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unapprovedbehavioralsupport $unapprovedbehavioralsupport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unapprovedbehavioralsupport  $unapprovedbehavioralsupport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unapprovedbehavioralsupport $unapprovedbehavioralsupport)
    {
        //
    }
}
