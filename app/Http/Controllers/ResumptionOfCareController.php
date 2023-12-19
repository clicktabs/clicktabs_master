<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ResumptionCare;
use Illuminate\Http\Request;

class ResumptionOfCareController extends Controller
{
    public function index()
    {
        return view('Skilled-Agency.oasis-e-resumption-of-care');
    }

    public function store(Request $request)
    {
        $rc = new ResumptionCare();
        $rc->dopca = $request->dopca;
        $rc->month = $request->month;
        $rc->day = $request->day;
        $rc->year = $request->year;

        $rc->StartCare = $request->StartCare;
        $rc->ResumptionCare = $request->ResumptionCare;
        $rc->Recertification = $request->Recertification;
        $rc->OtherFollowUp = $request->OtherFollowUp;
        $rc->InpatientFacility = $request->InpatientFacility;
        $rc->InpatientFacility2 = $request->InpatientFacility2;
        $rc->DeathAtHome = $request->DeathAtHome;
        $rc->DischargeFromAgency = $request->DischargeFromAgency;

        $rc->EpisodeTiming = $request->EpisodeTiming;
        $rc->Grooming = $request->Grooming;
        $rc->catdub = $request->catdub;
        $rc->dress = $request->dress;
        $rc->Bathing = $request->Bathing;
        $rc->ToiletTransferring = $request->ToiletTransferring;
        $rc->Transferring = $request->Transferring;
        $rc->Ambulation = $request->Ambulation;
        $rc->SelfCare = $request->SelfCare;
        $rc->code_reason = $request->code_reason;
        $rc->Eating = $request->Eating;
        $rc->OralHygiene = $request->OralHygiene;
        $rc->ToiletingHygiene = $request->ToiletingHygiene;
        $rc->Mobility = $request->Mobility;
        $rc->Mobility_CS = $request->Mobility_CS;
        $rc->RollLR = $request->RollLR;
        $rc->SitTolying = $request->SitTolying;
        $rc->LyingToSitting = $request->LyingToSitting;
        $rc->SitToStand = $request->SitToStand;
        $rc->BedToChair = $request->BedToChair;
        $rc->ToiletTransfer = $request->ToiletTransfer;
        $rc->Walk10Feet = $request->Walk10Feet;
        $rc->Walk50Feet = $request->Walk50Feet;
        $rc->Walk150Feet = $request->Walk150Feet;
        $rc->Walking10Feet = $request->Walking10Feet;
        $rc->Step1 = $request->Step1;
        $rc->Steps4 = $request->Steps4;
        $rc->dpuws = $request->dpuws;
        $rc->Wheel50Feet = $request->Wheel50Feet;
        $rc->HistoryOfFalls = $request->HistoryOfFalls;
        $rc->WeightLoss = $request->WeightLoss;
        $rc->hospitalizations = $request->hospitalizations;
        $rc->departmentVisits = $request->departmentVisits;
        $rc->Decline = $request->Decline;
        $rc->observedHistory = $request->observedHistory;
        $rc->medications = $request->medications;
        $rc->exhaustion = $request->exhaustion;
        $rc->OtherRisk = $request->OtherRisk;
        $rc->None = $request->None;
        $rc->uplas2oh = $request->uplas2oh;

        $rc->save();

        return redirect()->back()->with('success', 'Assessment saved successfully.');
    }
}
