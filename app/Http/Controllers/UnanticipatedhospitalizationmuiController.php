<?php

namespace App\Http\Controllers;

use App\Models\unanticipatedhospitalizationmui;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnanticipatedhospitalizationmuiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dodd-forms.unanticipatedhospitalization-mui-form');
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

        $query = DB::table('unanticipatedhospitalizationmuis')->insert([
            'IndividualsName'=>$request->input('IndividualsName'),
            'DateFormCompleted'=>$request->input('DateFormCompleted'),
            'DateofHospitalization'=>$request->input('DateofHospitalization'),
            'NameofPersonCompletingForm'=>$request->input('NameofPersonCompletingForm'),
            'Title'=>$request->input('Title'),
            'Provider'=>$request->input('Provider'),
            'ContactInformation'=>$request->input('ContactInformation'),
            'hospitalization'=>$request->input('hospitalization'),
            'toh'=>$request->input('toh'),
            'daysindividualinthehospita'=>$request->input('daysindividualinthehospita'),
            'AbdominalPains'=>$request->input('AbdominalPains'),
            'AbnormalBlood'=>$request->input('AbnormalBlood'),
            'AbsentPulse'=>$request->input('AbsentPulse'),
            'AllergicReaction'=>$request->input('AllergicReaction'),
            'AlteredState'=>$request->input('AlteredState'),
            'BaclofenPumpIssuesBlood'=>$request->input('BaclofenPumpIssuesBlood'),
            'Pressure'=>$request->input('Pressure'),
            'BloodSugarLevels'=>$request->input('BloodSugarLevels'),
            'BodyTemperatureVariations'=>$request->input('BodyTemperatureVariations'),
            'BowelObstruction'=>$request->input('BowelObstruction'),
            'Cancer'=>$request->input('Cancer'),
            'ChestPains'=>$request->input('ChestPains'),
            'DebucitusUlcer'=>$request->input('DebucitusUlcer'),
            'DehydrationVolumeDepletion'=>$request->input('DehydrationVolumeDepletion'),
            'Edema'=>$request->input('Edema'),
            'Emesis'=>$request->input('Emesis'),
            'Gallbladder'=>$request->input('Gallbladder'),
            'GeneralizedPain'=>$request->input('GeneralizedPain'),
            'HeartProblems'=>$request->input('HeartProblems'),
            'ImpairedRespiration'=>$request->input('ImpairedRespiration'),
            'form-check-input'=>$request->input('form-check-input'),
            'IngestionPICA'=>$request->input('IngestionPICA'),
            'Kidney'=>$request->input('Kidney'),
            'MedicalError'=>$request->input('MedicalError'),
            'ObservationEvaluation'=>$request->input('ObservationEvaluation'),
            'PlacediteminOrifice'=>$request->input('PlacediteminOrifice'),
            'PneumoniaandInfluenza'=>$request->input('PneumoniaandInfluenza'),
            'Seizures'=>$request->input('Seizures'),
            'Shunt'=>$request->input('Shunt'),
            'Stroke'=>$request->input('Stroke'),
            'SyncopeUncontrollable'=>$request->input('SyncopeUncontrollable'),
            'Bleeding'=>$request->input('Bleeding'),
            'otherREASON'=>$request->input('otherREASON'),
            'individualssymptoms'=>$request->input('individualssymptoms'),
            'individualsdiagnosis'=>$request->input('individualsdiagnosis'),
            'continuingneeds'=>$request->input('continuingneeds'),
            'MedicationChange'=>$request->input('MedicationChange'),
            'ChokedonFood'=>$request->input('ChokedonFood'),
            'MedicationError'=>$request->input('MedicationError'),
            'Environmental'=>$request->input('Environmental'),
            'MobilityIssues'=>$request->input('MobilityIssues'),
            'ImproperDiet'=>$request->input('ImproperDiet'),
            'TimelyMedicalCare'=>$request->input('TimelyMedicalCare'),
            'InputOutput'=>$request->input('InputOutput'),
            'EnvironmentalChange'=>$request->input('EnvironmentalChange'),
            'AgencyPolicy'=>$request->input('AgencyPolicy'),
            'StaffTraining'=>$request->input('StaffTraining'),
            'Counseling'=>$request->input('Counseling'),
            'addressISPChanges'=>$request->input('addressISPChanges'),
            'MedicalCareProvider'=>$request->input('MedicalCareProvider'),
            'MedicationChanges'=>$request->input('MedicationChanges'),
            'AppointmentScheduled'=>$request->input('AppointmentScheduled'),
            'PTOTSpeechReferral'=>$request->input('PTOTSpeechReferral'),
            'DietChangeOrdered'=>$request->input('DietChangeOrdered'),
            'HomeHealthCare'=>$request->input('HomeHealthCare'),
            'CommentsQuestions'=>$request->input('CommentsQuestions'),
            'IA_NAME'=>$request->input('IA_NAME'),
            'ReviewCompletedDate'=>$request->input('ReviewCompletedDate'),
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
     * @param  \App\Models\unanticipatedhospitalizationmui  $unanticipatedhospitalizationmui
     * @return \Illuminate\Http\Response
     */
    public function show(unanticipatedhospitalizationmui $unanticipatedhospitalizationmui)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unanticipatedhospitalizationmui  $unanticipatedhospitalizationmui
     * @return \Illuminate\Http\Response
     */
    public function edit(unanticipatedhospitalizationmui $unanticipatedhospitalizationmui)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\unanticipatedhospitalizationmui  $unanticipatedhospitalizationmui
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, unanticipatedhospitalizationmui $unanticipatedhospitalizationmui)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unanticipatedhospitalizationmui  $unanticipatedhospitalizationmui
     * @return \Illuminate\Http\Response
     */
    public function destroy(unanticipatedhospitalizationmui $unanticipatedhospitalizationmui)
    {
        //
    }
}
