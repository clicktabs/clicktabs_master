<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IspDoc;
use App\Models\IspDocsService;
use App\Models\AnnualReport;
use App\Models\MOIReport;
use App\Models\HospitalizationReport;
use App\Models\UnapprovedBehavioralSupportMuiForm;
use App\Models\UnusualIncidentReport;
use App\Models\IncidentReport;
use App\Models\HpcTimeSheets;
use App\Models\SpecifiedispTimeSheet;
use App\Models\ActivityGoals;
use App\Models\ActivityGoalJobs;
use App\Models\MedicationAdministration;
use App\Models\MedicationsDetails;
use App\Models\MedsAsNeeded;
use App\Models\MedicationRecord;
use App\Models\MedicationCountSheet;
use App\Models\DrugDetail;
use App\Models\MileageLog;
use App\Models\MileageLogData;

class NonSkilledReportController extends Controller
{
    public function mileageLogReport()
    {
        $mileages = MileageLog::with('schedule.patient')->get();
        return view('patients.nonskillReport.mileageLogReport', compact('mileages'));
    }
    public function mileageLogReportView($id)
    {
        $mileage = MileageLog::where('id',$id)->first();
        $mileageLogDatas = MileageLogData::where('mileage_logs_id',$id)->get();
        return view('patients.nonskillReport.mileageLogReportView', compact('mileage','mileageLogDatas'));
    }


    public function medicationCountSheetReport()
    {
        $medicationCountSheets = MedicationCountSheet::with('schedule.patient')->get();
        return view('patients.nonskillReport.medicationCountSheetReport', compact('medicationCountSheets'));
    }
    public function medicationCountSheetReportView($id)
    {
        $medicationCountSheet = MedicationCountSheet::where('id',$id)->first();
        $drugDetails = DrugDetail::where('medication_count_sheet_id',$id)->get();
        return view('patients.nonskillReport.medicationCountSheetView', compact('medicationCountSheet','drugDetails'));
    }


    public function medicationAssNeedReport()
    {
        $medsAsNeededs = MedsAsNeeded::with('schedule.patient')->get();
        return view('patients.nonskillReport.medicationAssNeedReport', compact('medsAsNeededs'));
    }
    public function medicationAssNeedReportView($id)
    {
        $medsAsNeeded = MedsAsNeeded::where('id',$id)->first();
        $medicationRecords = MedicationRecord::where('meds_as_needed_id',$id)->get();
        return view('patients.nonskillReport.medicationAssNeedReportView', compact('medsAsNeeded','medicationRecords'));
    }

    public function medicationAdministrationReport()
    {
        $medicationAdministrations = MedicationAdministration::with('schedule.patient')->get();
        return view('patients.nonskillReport.medicationAdministrationReport', compact('medicationAdministrations'));
    }
    public function medicationAdministrationView($id)
    {
        $medicationAdministration = MedicationAdministration::where('id',$id)->first();
        $medicationsDetails = MedicationsDetails::where('medication_administration_id',$id)->get();
        return view('patients.nonskillReport.medicationAdministrationView', compact('medicationsDetails','medicationAdministration'));
    }

    public function activeGoalReport()
    {
        $activityGoals = ActivityGoals::with('schedule.patient')->get();
        return view('patients.nonskillReport.activeGoalReport', compact('activityGoals'));
    }
    public function activeGoalView($id)
    {
        $activityGoal = ActivityGoals::where('id',$id)->first();
        $activityGoalJobs = ActivityGoalJobs::where('activity_goals_id',$id)->get();
        return view('patients.nonskillReport.activeGoalView', compact('activityGoal','activityGoalJobs'));
    }

    public function ispdocsReport()
    {
        $ispDocs = IspDoc::with('schedule.patient')->get();
        return view('patients.nonskillReport.ispdocsReport', compact('ispDocs'));
    }
    public function ispdocsView($id)
    {
        $ispDocs = IspDoc::where('id',$id)->first();
        $ispDocsServices = IspDocsService::where('ispdoc_id',$id)->get();
        return view('patients.nonskillReport.ispdocsView', compact('ispDocs','ispDocsServices'));
    }

    public function agencyreportReport()
    {
        $annualReports = AnnualReport::with('schedule.patient')->get();

        return view('patients.nonskillReport.agencyreportReport', compact('annualReports'));
    }
    public function agencyreportView($id)
    {
        $annualReport = AnnualReport::where('id',$id)->first();

        return view('patients.nonskillReport.agencyreportView', compact('annualReport'));
    }

    public function MUIreportReport()
    {
        $muiReports = MOIReport::with('schedule.patient')->get();
        return view('patients.nonskillReport.MUIreportReport', compact('muiReports'));
    }
    public function MUIreportView($id)
    {
        $muiReport = MOIReport::where('id',$id)->first();
        // return $muiReport;
        return view('patients.nonskillReport.MUIreportView', compact('muiReport'));
    }

    public function hospitalizationReport()
    {
        $hospitalizations = HospitalizationReport::with('schedule.patient')->get();
        return view('patients.nonskillReport.hospitalizationReport', compact('hospitalizations'));
    }
    public function hospitalizationView($id)
    {
        $hospitalization = HospitalizationReport::where('id',$id)->first();
        return view('patients.nonskillReport.hospitalizationView', compact('hospitalization'));
    }

    public function unapprovedBehavioralReport()
    {
        $unapprovedBehaviorals = UnapprovedBehavioralSupportMuiForm::with('schedule.patient')->get();
        return view('patients.nonskillReport.unapprovedBehavioralReport', compact('unapprovedBehaviorals'));
    }
    public function unapprovedBehavioralView($id)
    {
        $unapprovedBehavioral = UnapprovedBehavioralSupportMuiForm::where('id',$id)->first();
        return view('patients.nonskillReport.unapprovedBehavioralView', compact('unapprovedBehavioral'));
    }

    public function unusalIncidentReportReport()
    {
        $unusualIncidentReports = UnusualIncidentReport::with('schedule.patient')->get();
        return view('patients.nonskillReport.unusalIncidentReportReport', compact('unusualIncidentReports'));
    }
    public function unusalIncidentReportView($id)
    {
        $unusualIncidentReport = UnusualIncidentReport::where('id',$id)->first();
        $incidentReports = IncidentReport::where('unusal_incident_report_id',$id)->get();
        return view('patients.nonskillReport.unusalIncidentReportView', compact('unusualIncidentReport','incidentReports'));
    }

    public function hpcTimeSheetReport()
    {
        $hpcTimeSheets = HpcTimeSheets::with('schedule.patient')->get();
        return view('patients.nonskillReport.hpcTimeSheetReport', compact('hpcTimeSheets'));
    }
    public function hpcTimeSheetView($id)
    {
        $hpcTimeSheet = HpcTimeSheets::where('id',$id)->first();
        $specifiedispTimeSheets = SpecifiedispTimeSheet::where('hpc_time_sheet_id',$id)->get();
        return view('patients.nonskillReport.hpcTimeSheetView', compact('hpcTimeSheet','specifiedispTimeSheets'));
    }


}
