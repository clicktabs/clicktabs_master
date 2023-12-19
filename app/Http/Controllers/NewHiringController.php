<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Application;
use App\Models\Application1;
use App\Models\Formi9;
use App\Models\Formi91;
use App\Models\Formit4;
use App\Models\Tbscreening;
use App\Models\Formw4;
use App\Models\Ethic;
use App\Models\Addendum;
use App\Models\Confidentially;
use App\Models\Covid19;
use App\Models\Health;
use App\Models\Hepatitis;
use App\Models\NonCompete;
use App\Models\Upload;
use App\Traits\ApiService;
use Dompdf\Dompdf;

class NewHiringController extends Controller
{
    use ApiService;

    public function index()
    {


    }

    public function create(Request $request)
    {
        return view('hiring.create');
    }

    public function application(){
        $Application = DB::table('Applications')
        ->join('Application1s', 'Application1s.id', '=', 'Applications.pplication1s.id')
        ->get();

        $Application1 = DB::table('Application1s')
        ->get();
        return view('home-healthcare/hha-visit-note', ['Applications' => $Application , 'Application1s' => $Application1 ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeApplication(Request $req)
    {

        Application::create([
            'appl_position' => $req->appl_position,
            'appl_lastName' => $req->appl_lastName,
            'appl_firstName' => $req->appl_firstName,
            'appl_middleName' => $req->appl_middleName,
            'appl_address' => $req->appl_address,
            'application_address' => $req->application_address,
            'appl_city' => $req->appl_city,
            'appl_state' => $req->appl_state,
            'appl_zip' => $req->appl_zip,
            'appl_cellphone' => $req->appl_cellphone,
            'appl_email' => $req->appl_email,
            'app_workstartdate' => $req->app_workstartdate,
            'appl_salarydesire' => $req->appl_salarydesire,
            'appl_Dipolma' => $req->appl_Dipolma,
            'appl_Hours' => $req->appl_Hours,
            'app_workingdays' => $req->app_workingdays,
            'app_postion' => $req->app_postion,
            'appl_Status' => $req->appl_Status,
            'appl_Workauthorization' => $req->appl_Workauthorization,
            'appl_conviction' => $req->appl_conviction,
            'appl_jobFunctions' => $req->appl_jobFunctions,
            'appl_jobEssential' => $req->appl_jobEssential,
            'appl_school_name' => $req->appl_school_name,
            'appl_school_degree' => $req->appl_school_degree,
            'appl_school_address' => $req->appl_school_address,
            'appl_school_1' => $req->appl_school_1,
            'appl_school_2' => $req->appl_school_2,
            'appl_school_3' => $req->appl_school_3,
            'appl_other_1' => $req->appl_other_1,
            'appl_other_2' => $req->appl_other_2,
            'appl_other_3' => $req->appl_other_3,
            'appl_Example6' => $req->appl_Example6,
            'appl_proName' => $req->appl_proName,
            'appl_proAddress' => $req->appl_proAddress,
            'appl_proPhone' => $req->appl_proPhone,
            'appl_proRelationship' => $req->appl_proRelationship,
            'appl_proName1' => $req->appl_proName1,
            'appl_proAddress1' => $req->appl_proAddress1,
            'appl_proPhone1' => $req->appl_proPhone1,
            'appl_proRelationship1' => $req->appl_proRelationship1,
        ]);

        Application1::create([
            'appl_proName2' => $req->appl_proName2,
            'appl_proAddress2' => $req->appl_proAddress2,
            'appl_proPhone2' => $req->appl_proPhone2,
            'appl_proRelationship2' => $req->appl_proRelationship2,
            'appl_contact' => $req->appl_contact,
            'appl_Job' => $req->appl_Job,
            'appl_startDate' => $req->appl_startDate,
            'appl_endDate' => $req->appl_endDate,
            'appl_companyName' => $req->appl_companyName,
            'appl_supervisorsName' => $req->appl_supervisorsName,
            'appl_supervisorsNumber' => $req->appl_supervisorsNumber,
            'appl_employorCity' => $req->appl_employorCity,
            'appl_employorState' => $req->appl_employorState,
            'appl_employorZip' => $req->appl_employorZip,
            'appl_duties' => $req->appl_duties,
            'appl_reasonforleaving' => $req->appl_reasonforleaving,
            'appl_startingSalary' => $req->appl_startingSalary,
            'appl_endinfSalary' => $req->appl_endinfSalary,
            'appl_Job1' => $req->appl_Job1,
            'appl_startDate1' => $req->appl_startDate1,
            'appl_endDate1' => $req->appl_endDate1,
            'appl_companyName1' => $req->appl_companyName1,
            'appl_supervisorsName1' => $req->appl_supervisorsName1,
            'appl_supervisorPhone' => $req->appl_supervisorPhone,
            'appl_City1' => $req->appl_City1,
            'appl_State1' => $req->appl_State1,
            'appl_Zip1' => $req->appl_Zip1,
            'appl_duties1' => $req->appl_duties1,
            'appl_reasonforleaving1' => $req->appl_reasonforleaving1,
            'appl_Startingsalary1' => $req->appl_Startingsalary1,
            'appl_endingSalary1' => $req->appl_endingSalary1,
            'app-signature_10' => $req->app_signature_10
        ]);

// $exception = $req->all();
// dd($exception);
        return redirect()->back()->with('success', ' Application Record Created Successfully');

        // $exception = $req->all();
        // $exception['exception_code'] = generate_random_token('u');

        // try {
        //     DB::transaction(function() use ($exception) {
        //         Application::create($exception);
        //         Application1::create($exception);
        //     });

        //     return redirect()->with('success', ' Application Record Created Successfully');
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Error! Application Record Could Not Be Created.');
        // }
    }

            //Formi9
    public function formi9(){
        $Formi9 = DB::table('Formi9s')
        ->join('Formi91s', 'Formi91s.id', '=', 'Formi9s.Formi91s.id')
        ->get();
        
        $Formi91 = DB::table('Formi91s')
        ->get();
        return view('home-healthcare/hha-visit-note', ['Formi9s' => $Formi9 , 'Formi91s' => $Formi91 ]);
    }
    public function storeformi9(Request $req)
    {
        Formi9::create([
            'formi9_lName' => $req->formi9_lName,
            'formi9_fName' => $req->formi9_fName,
            'formi9_mName' => $req->formi9_mName,
            'formi9_oLastName' => $req->formi9_oLastName,
            'formi9_address' => $req->formi9_address,
            'formi9_aptNumber' => $req->formi9_aptNumber,
            'formi9_city' => $req->formi9_city,
            'formi9_state' => $req->formi9_state,
            'formi9_zip' => $req->formi9_zip,
            'formi9_dob' => $req->formi9_dob,
            'formi9_ssn' => $req->formi9_ssn,
            'formi9_email' => $req->formi9_email,
            'formi9_employeePhone' => $req->formi9_employeePhone,
            'formi9_ctizen' => $req->formi9_ctizen,
            'formi9_permtDate' => $req->formi9_permtDate,
            'formi9_lawful' => $req->formi9_lawful,
            'formi9_lawful_1' => $req->formi9_lawful_1,
            'formi9_alien' => $req->formi9_alien,
            'formi9_alien_1' => $req->formi9_alien_1,
            'formi9_alienNumber' => $req->formi9_alienNumber,
            'formi9_admissionNo' => $req->formi9_admissionNo,
            'formi9_PassportNo' => $req->formi9_PassportNo,
            'formi9_cuntry' => $req->formi9_cuntry,
            'formi9_signature_1' => $req->formi9_signature_1,
            'formi9_signatur_2' => $req->formi9_signatur_2,
            'formi9_translator' => $req->formi9_translator,
            'formi9_preparer' => $req->formi9_preparer,
            'formi9_signature_3' => $req->formi9_signature_3,
            'formi9_signature_4' => $req->formi9_signature_4,
            'formi9_LName_1' => $req->formi9_LName_1,
            'formi9_FName_1' => $req->formi9_FName_1,
            'formi9_Address_1' => $req->formi9_Address_1,
            'formi9_City_1' => $req->formi9_City_1,
            'formi9_State_1' => $req->formi9_State_1,
            'formi9_Zip_1' => $req->formi9_Zip_1,
            'formi9_employor_auth' => $req->formi9_employor_auth,
            'formi9_employorLname' => $req->formi9_employorLname,
            'formi9_employorFname' => $req->formi9_employorFname,
            'formi9_employorMI' => $req->formi9_employorMI,
        ]);

        Formi91::create([
            'formi9_citizenship' => $req->formi9_citizenship,
            'formi9_docTitle1' => $req->formi9_docTitle1,
            'formi9_docTitle2' => $req->formi9_docTitle2,
            'formi9_docTitle3' => $req->formi9_docTitle3,
            'formi9_issuing_1' => $req->formi9_issuing_1,
            'formi9_issuing_2' => $req->formi9_issuing_2,
            'formi9_issuing_3' => $req->formi9_issuing_3,
            'formi9_docNumber_1' => $req->formi9_docNumber_1,
            'formi9_docNumber_2' => $req->formi9_docNumber_2,
            'formi9_docNumber_3' => $req->formi9_docNumber_3,
            'formi9_expir_1' => $req->formi9_expir_1,
            'formi9_expir_2' => $req->formi9_expir_2,
            'formi9_expir_3' => $req->formi9_expir_3,
            'formi9_docTitle1_4' => $req->formi9_docTitle1_4,
            'formi9_additional' => $req->formi9_additional,
            'formi9_Issuing_4' => $req->formi9_Issuing_4,
            'formi9_docNumber_4' => $req->formi9_docNumber_4,
            'formi9_expir_4' => $req->formi9_expir_4,
            'formi9_docTitle_5' => $req->formi9_docTitle_5,
            'formi9_issuin_5' => $req->formi9_issuin_5,
            'formi9_docNumber_5' => $req->formi9_docNumber_5,
            'formi9_expir_5' => $req->formi9_expir_5,
            'formi9_firstDay' => $req->formi9_firstDay,
            'formi9_Employer_authLnam' => $req->formi9_Employer_authLnam,
            'formi9_Employer_authFnam' => $req->formi9_Employer_authFnam,
            'formi9_employerOrg' => $req->formi9_employerOrg,
            'formi9_oemployerorgAddress' => $req->formi9_oemployerorgAddress,
            'formi9_employercity' => $req->formi9_employercity,
            'formi9_employororgState' => $req->formi9_employororgState,
            'formi9_employororgZip' => $req->formi9_employororgZip,
            'formi9_LName_3' => $req->formi9_LName_3,
            'formi9_FName_3' => $req->formi9_FName_3,
            'formi9_MName_3' => $req->formi9_MName_3,
            'formi9_Date' => $req->formi9_Date,
            'formi9_DocumentTitle_5' => $req->formi9_DocumentTitle_5,
            'formi9_DocumentNumber' => $req->formi9_DocumentNumber,
            'formi9_expir_6' => $req->formi9_expir_6,
            'formi9_signature_5' => $req->formi9_signature_5,
            'formi9_Authorized_4' => $req->formi9_Authorized_4,
        ]);

        return redirect()->back()->with('success', ' FormI9 Record Created Successfully');

                // $exception = $req->all();
                // $exception['exception_code'] = generate_random_token('u');
        
                // try {
                //     DB::transaction(function() use ($exception) {
                //         Formi9::create($exception);
                //         Formi91::create($exception);
                //     });
        
                //     return redirect()->with('success', ' FormI9 Record Created Successfully');
                // } catch (\Throwable $th) {
                //     return redirect()->back()->with('error', 'Error! FormI9 Record Could Not Be Created.');
                // }
    }   
                        //form w4
    public function formw4(Request $req)
    {
        Formw4::create([
            'w4_first_and_middle_name' => $req->w4_first_and_middle_name,
            'w4_last_name' => $req->w4_last_name,
            'w4_social_number' => $req->w4_social_number,
            'w4_address' => $req->w4_address,
            'w4_city_town_state_zip' => $req->w4_city_town_state_zip,
            'w4_single_or_married' => $req->w4_single_or_married,
            'w4_married_filing' => $req->w4_married_filing,
            'w4_head_of_household' => $req->w4_head_of_household,
            'w4_under_age' => $req->w4_under_age,
            'w4_dependents' => $req->w4_dependents,
            'w4_total' => $req->w4_total,
            'w4_four_a' => $req->w4_four_a,
            'w4_four_b' => $req->w4_four_b,
            'w4_four_c' => $req->w4_four_c,
            'w4_employee_signature' => $req->w4_employee_signature,
            'w4_signature_date' => $req->w4_signature_date,
            'w4_employersAddress' => $req->w4_employersAddress,
            'w4_employee_first_date' => $req->w4_employee_first_date,
            'w4_employee_id_number' => $req->w4_employee_id_number,
            'w4_marriedfilingjointly' => $req->w4_marriedfilingjointly,
            'w4_yourspousehavethreejobs' => $req->w4_yourspousehavethreejobs,
            'w4_ofthetwohighestpayingjobs' => $req->w4_ofthetwohighestpayingjobs,
            'w4_Addtheamountsfromlines2a' => $req->w4_Addtheamountsfromlines2a,
            'w4_Enterthenumberofpayperiodsperyear' => $req->w4_Enterthenumberofpayperiodsperyear,
            'w4_theannualamountonline1orline2c' => $req->w4_theannualamountonline1orline2c,
            'w4_2023itemizeddeductions' => $req->w4_2023itemizeddeductions,
            'w4_qualifyingsurvivingspouse' => $req->w4_qualifyingsurvivingspouse,
            'w4_subtractline2fromline1' => $req->w4_subtractline2fromline1,
            'w4_studentloaninterest' => $req->w4_studentloaninterest,
            'w4_Entertheresulthere' => $req->w4_Entertheresulthere,
            'w4_signature' => $req->w4_signature,
        ]);

        return redirect()->back()->with('success', ' Form W4 Record Created Successfully');

                // $exception = $req->all();
                // $exception['exception_code'] = generate_random_token('u');
        
                // try {
                //     DB::transaction(function() use ($exception) {
                //         Formw4::create($exception);
                //   });
        
                //     return redirect()->with('success', ' Form W4 Record Created Successfully');
                // } catch (\Throwable $th) {
                //     return redirect()->back()->with('error', 'Error! Form W4 Record Could Not Be Created.');
                // }
    }

            //form IT4
    public function formit4(Request $req)
    {

        Formit4::create([
            'formit4_fullname' => $req->formit4_fullname,
            'formit4_ssn' => $req->formit4_ssn,
            'formit4_ZipCode' => $req->formit4_ZipCode,
            'formit4_schoolDistrict' => $req->formit4_schoolDistrict,
            'formit4_schoolDistrictNo' => $req->formit4_schoolDistrictNo,
            'formit4_personalExemption' => $req->formit4_personalExemption,
            'formit4_marriedPersonalExemption' => $req->formit4_marriedPersonalExemption,
            'formit4_exemptionsDepndents' => $req->formit4_exemptionsDepndents,
            'formit4_exemptionsTotal' => $req->formit4_exemptionsTotal,
            'formit4_additionalWithholding' => $req->formit4_additionalWithholding,
            'formit4_signature1' => $req->formit4_signature1,
        ]);

        return redirect()->back()->with('success', ' Form IT4 Record Created Successfully');

        // $exception = $req->all();
        // $exception['exception_code'] = generate_random_token('u');

        // try {
        //     DB::transaction(function() use ($exception) {
        //         Formit4::create($exception);
        //     });

        //     return redirect()->with('success', ' Form IT4 Record Created Successfully');
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Error! Form IT4 Record Could Not Be Created.');
        // }    

    }   

                //form Ethics
    public function ethics(Request $req)
    {
        Ethic::create([
            'signature' => $req->signature,
        ]);

        return redirect()->back()->with('success', ' Ethics Record Created Successfully');

        // $exception = $req->all();
        // $exception['exception_code'] = generate_random_token('u');

        // try {
        //     DB::transaction(function() use ($exception) {
        //         Formit4::Ethic($exception);
        //     });

        //     return redirect()->with('success', ' Ethics Record Created Successfully');
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Error! Ethics Record Could Not Be Created.');
        // } 
    }  

    public function addendum(Request $req)
    {

        $adden=new Addendum;
        $adden->fullName = $req->fullName;
        $adden->signature = $req->signature;
        $adden->save();
        return redirect()->back()->with('success', ' Addendum Record Created Successfully');

    }

    public function storeConfidentially(Request $req)
    {        
        $confi=new Confidentially;
        $confi->printName = $req->printName;
        $confi->signature = $req->signature;
        $confi->save();        
        return redirect()->back()->with('success', ' Confidentially Record Created Successfully');

    }
    public function storecovid19(Request $req)
    {
        $covid=new Covid19;
        $covid->patientName = $req->patientName;
        $covid->signature = $req->signature;
        $covid->save();        
        return redirect()->back()->with('success', ' Covid 19 Record Created Successfully');

    }

    public function storenoncompete(Request $req)
    {
        $noncom=new NonCompete;
        $noncom->employeeName = $req->employeeName;
        $noncom->signature = $req->signature;
        $noncom->save();        
        return redirect()->back()->with('success', ' NON-COMPETE Record Created Successfully');
    }

    public function storeReference(Request $req)
    {

    }

    public function storeHealth(Request $req)
    {
        $health=new Health;
        $health->applicantName = $req->applicantName;
        $health->date = date('Y-m-d',strtotime($req->date));
        $health->fullName = $req->fullName;
        $health->save();        
        return redirect()->back()->with('success', ' Health Record Created Successfully');
    }

    public function storehepatitis(Request $req)
    {        
        $hepatitis=new Hepatitis;
        $hepatitis->printName = $req->printName;
        $hepatitis->signature = $req->signature;
        $hepatitis->save();        
        return redirect()->back()->with('success', ' Hepatitis Record Created Successfully');
    }

    public function storeCoronavirus(Request $req)
    {

    }

    public function storeMemo(Request $req)
    {

    }

    public function storetb(Request $req)
    {

        $tbs=new Tbscreening;;        
        $tbs->tuberculosys=$req->tuberculosys;
        $tbs->living=$req->living;
        $tbs->skin=$req->skin;
        $tbs->skinExplain=$req->skinExplain;
        $tbs->xray=$req->xray;
        $tbs->xrayExplain=$req->xrayExplain;
        $tbs->chronic=$req->chronic;
        $tbs->chronicExplain=$req->chronicExplain;
        $tbs->tuberculosys1=$req->tuberculosys1;
        $tbs->tuberculosys2=$req->tuberculosys2;
        $tbs->livingYes=$req->livingYes;
        $tbs->livingNo=$req->livingNo;
        $tbs->living1Yes=$req->living1Yes;
        $tbs->living1No=$req->living1No;
        $tbs->living2Yes=$req->living2Yes;
        $tbs->living2No=$req->living2No;
        $tbs->living3Yes=$req->living3Yes;
        $tbs->living3No=$req->living3No;
        $tbs->living4Yes=$req->living4Yes;
        $tbs->living4No=$req->living4No;
        $tbs->living5Yes=$req->living5Yes;
        $tbs->living5No=$req->living5No;
        $tbs->living6Yes=$req->living6Yes;
        $tbs->living6No=$req->living6No;
        $tbs->living7Yes=$req->living7Yes;
        $tbs->living7No=$req->living7No;
        $tbs->living8Yes=$req->living8Yes;
        $tbs->living8No=$req->living8No;
        $tbs->living9Yes=$req->living9Yes;
        $tbs->living9No=$req->living9No;
        $tbs->explainScreen=$req->explainScreen;
        $tbs->save();
        return redirect()->back()->with('success', ' TB Screening Record Created Successfully');


    }

    public function storeuploads(Request $req)
    {

    }
    public function storerequired(Request $req)
    {

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewHiringController  $NewHiringController
     * @return \Illuminate\Http\Response
     */
    public function show(NewHiringController $NewHiringController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Possiblemui  $NewHiringController
     * @return \Illuminate\Http\Response
     */
    public function edit(NewHiringController $NewHiringController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewHiringController  $NewHiringController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewHiringController $NewHiringController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Possiblemui  $NewHiringController
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewHiringController $NewHiringController)
    {
        //
    }

}