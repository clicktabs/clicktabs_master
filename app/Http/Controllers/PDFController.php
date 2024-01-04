<?php

namespace App\Http\Controllers;

use App\Models\ActiveDiagnosis;
use App\Models\Administrative;
use App\Models\AideSupervisoryVisit;
use App\Models\Allergy;
use App\Models\BladderBowel;
use App\Models\CMS;
use App\Models\CognitiveMoodBehavior;
use App\Models\Demographic;
use App\Models\Employee;
use App\Models\FunctionalAbilitie;
use App\Models\FunctionalStatus;
use App\Models\HealthCondition;
use App\Models\HearingVision;
use App\Models\hhavisitnote;
use App\Models\hhavisitnote1;
use App\Models\hhavisitnote2;
use App\Models\Medication;
use App\Models\NurseSectionFirst;
use App\Models\NurseSectionFirstFour;
use App\Models\NurseSectionFirstThree;
use App\Models\NurseSectionFirstTwo;
use App\Models\NurseSectionSecond;
use App\Models\NurseSectionSecondFour;
use App\Models\NurseSectionSecondThree;
use App\Models\NurseSectionSecondTwo;
use App\Models\OasisEDeath;
use App\Models\Patient;
use App\Models\pdf;
use App\Models\PhysicianOrders;
use App\Models\Preference;
use App\Models\SkinCondition;
use App\Models\SpecialTreatment;
use App\Models\SwallowingNutritional;
use App\Models\PdfManage;
use App\Models\ResumptionCare;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{
    public function generatePDF(Request $request, $id)
    {
        $administrative = Administrative::where('patient_history_id', $id)->first();
        $demographic = Demographic::where('patient_history_id', $id)->first();
        $hearingVision = HearingVision::where('patient_history_id', $id)->first();
        $cognitiveMoodBehavior = CognitiveMoodBehavior::where('patient_history_id', $id)->first();
        $preference = Preference::where('patient_history_id', $id)->first();
        $functionalSts = FunctionalStatus::where('patient_history_id', $id)->first();
        $functionalAbl = FunctionalAbilitie::where('patient_history_id', $id)->first();
        $bladderBowel = BladderBowel::where('patient_history_id', $id)->first();
        $actDiagnosis = ActiveDiagnosis::where('patient_history_id', $id)->first();
        $healthCon = HealthCondition::where('patient_history_id', $id)->first();
        $swallNutritional = SwallowingNutritional::where('patient_history_id', $id)->first();
        $skinCondition = SkinCondition::where('patient_history_id', $id)->first();
        $medication = Medication::where('patient_history_id', $id)->first();
        $specialTrmnt = SpecialTreatment::where('patient_history_id', $id)->first();

        // $html = View::make('pdf.home-care.aide-supervisory', compact('request'))->render();
        $html = View::make('pdf.home-care.oasis-e-start-of-care', compact('request','administrative','demographic','hearingVision','cognitiveMoodBehavior','preference','functionalSts','functionalAbl','bladderBowel','actDiagnosis','healthCon','swallNutritional','skinCondition','medication','specialTrmnt'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $filename = 'pdf_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        // $all_pdf = pdf::get()->count();

        // $pdf = new pdf();
        //     if (empty($pdf->task_id)) {
        //         $pdf->task_id = $all_pdf+1;
        //     }
        // $pdf->url = '/pdfs/' . $filename;
        // $pdf->save();

        $pdfManage = new PdfManage();
        $pdfManage->path = '/pdfs/' . $filename;
        $pdfManage->patient_id = $id;
        $pdfManage->type = 1;
        $pdfManage->save();

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }
    public function generateCmsPDF(Request $request, $id)
    {
        $cms = CMS::where('patient_history_id', $id)->first();
        $html2 = View::make('pdf.home-care.cms', compact('cms'))->render();
        $dompdf2 = new Dompdf();
        $dompdf2->loadHtml($html2);
        $dompdf2->setPaper('A4', 'portrait');
        $dompdf2->render();
        $filename2 = 'pdf_' . time() . '_cms.pdf';
        $filePath = 'pdfs/cms/' . $filename2;
        Storage::put($filePath, $dompdf2->output());

        $pdfManage2 = new PdfManage();
        $pdfManage2->path = '/pdfs/cms/' . $filename2;
        $pdfManage2->patient_id = $id;
        $pdfManage2->type = 2;
        $pdfManage2->save();

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function generatePhysicianPDF(Request $request, $id)
    {
        $physicianOrder = PhysicianOrders::where('patient_history_id', $id)->first();
        $html3 = View::make('pdf.home-care.physician', compact('physicianOrder'))->render();
        $dompdf3 = new Dompdf();
        $dompdf3->loadHtml($html3);
        $dompdf3->setPaper('A4', 'portrait');
        $dompdf3->render();

        $filename3 = 'pdf_' . time() . '_physician.pdf';
        $filePath = 'pdfs/physician/' . $filename3;

        Storage::put($filePath, $dompdf3->output());

        $pdfManage3 = new PdfManage();
        $pdfManage3->path = '/' . $filePath; // Save the full path
        $pdfManage3->patient_id = $id;
        $pdfManage3->type = 3;
        $pdfManage3->save();

        // Open the PDF in a new tab
        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function censorsReport() {
        $html = View::make('pdf.censors-report')->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_censors-report_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function nurseVisitNote() {
        $nsf = NurseSectionFirst::where('id', 1)->first();
        $nsf2 = NurseSectionFirstTwo::where('id', 1)->first();
        $nsf3 = NurseSectionFirstThree::where('id', 1)->first();
        $nsf4 = NurseSectionFirstFour::where('id', 1)->first();
        $nss = NurseSectionSecond::where('id', 1)->first();
        $nss2 = NurseSectionSecondTwo::where('id', 1)->first();
        $nss3 = NurseSectionSecondThree::where('id', 1)->first();
        $nss4 = NurseSectionSecondFour::where('id', 1)->first();
        $html = View::make('pdf.skilled-agency.nurse-visit-note', compact('nsf','nsf2','nsf3','nsf4','nss','nss2','nss3','nss4'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_nurse-visit-note_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function hhaVisitNote() {
        $hhvn = hhavisitnote::where('id', 1)->first();
        $hhvn1 = hhavisitnote1::where('id', 1)->first();
        $hhvn2 = hhavisitnote2::where('id', 1)->first();
        $html = View::make('pdf.skilled-agency.hha-visit-note', compact('hhvn','hhvn1','hhvn2'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_hha-visit-note_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function AideSupervisoryVisit() {
        $asv = AideSupervisoryVisit::where('id', 1)->first();
        $html = View::make('pdf.skilled-agency.aide-supervisory-visit', compact('asv'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_aide-supervisory-visit_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function ResumptionOfCare() {
        $rc = ResumptionCare::where('id', 1)->first();
        $html = View::make('pdf.skilled-agency.oasis-e-resumption-of-care', compact('rc'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_resumption-of-care_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function oasisEdeath() {
        $oed = OasisEDeath::where('id', 1)->first();
        $html = View::make('pdf.skilled-agency.oasis-e-death', compact('oed'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_oasis-e-death_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function medicationProfile(Request $request, $id) {
        $hiddenData = $request->all();

        $medications = Medication::with('physicianInfo')->where('patient_id',$id)->latest()->get();
        $allergies = Allergy::wherePatientId($id)->latest()->get();
        $html = View::make('pdf.patients.medication-pdf', compact('hiddenData', 'medications', 'allergies'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_medication_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function PatientRoster(Request $request) {
        $patients = Patient::findMany( $request->patient_ids );
        $reportType = $request->reportType;

        $html = View::make('pdf.patients.patient-roster-pdf', compact('patients', 'reportType'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_patient-roster_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }

    public function EmployeeRoster(Request $request) {
        $employees = Employee::findMany( $request->employee_ids );
        $reportType = $request->reportType;

        $html = View::make('pdf.employee.employee-roster-pdf', compact('employees', 'reportType'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $filename = 'pdf_employee-roster_' . time() . '.pdf';
        $filePath = 'pdfs/' . $filename;
        Storage::put($filePath, $dompdf->output());

        return response()->file(storage_path('app/' . $filePath))->deleteFileAfterSend(false);
    }


}