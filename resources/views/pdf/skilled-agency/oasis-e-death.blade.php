<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oasis E Death</title>

    <style>
        @charset "UTF-8";

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            font-size: 15px;
            line-height: 1;
        }

        a {
            color: #000;
        }

        .m-0 {
            margin: 0 !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 5px !important;
        }

        .mt-2 {
            margin-top: 10px !important;
        }

        .mb-1 {
            margin-bottom: .25rem !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-2 {
            margin-bottom: 10px !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .pb-1 {
            padding-bottom: 5px !important;
        }

        .pb-2 {
            padding-bottom: 10px !important;
        }

        .pt-1 {
            padding-top: 5px !important;
        }

        .pt-2 {
            padding-top: 10px !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .bg-black {
            background-color: #000 !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-center {
            text-align: center !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .input-group {
            position: relative;
            display: table;
            vertical-align: middle !important;
        }

        .input-group-text {
            display: table-cell;
            padding: 0 10px;
            font-size: 0.9rem;
            font-weight: 400;
            color: #212529;
            text-align: center;
            white-space: nowrap;
            background-color: #f8f9fa;
            border: 1px solid #999;
            border-radius: 0.375rem 0 0 0.375rem;
            height: 24px;
            line-height: 22px;
        }

        .input-group>.form-control,
        .input-group>.form-floating,
        .input-group>.form-select {
            display: table-cell;
            width: 150px;
            min-width: 0;
            border-radius: 0;
            height: 24px;
        }

        .form-control {
            display: block;
            width: 100%;
            min-height: 24px;
            padding: 0;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #999;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.375rem;
        }

        label .form-check-input[type=checkbox] {
            margin: 0;
            position: relative;
            top: 5px;
        }

        .d-md-flex {
            display: flex !important;
        }

        .border {
            border: 1px solid #999 !important;
        }

        .section-heading>span {
            padding: 5px 15px;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            vertical-align: top;
            border-color: #999;
        }

        .table table {
            margin-bottom: -1px;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 1px;
        }

        .table>tbody {
            vertical-align: inherit;
        }

        .table td,
        .table th {
            padding: .4rem .5rem;
            color: initial;
            background-color: #fff;
            border-bottom-width: 1px;
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 9999px inset;
            vertical-align: middle;
        }

        .table-borderless tbody,
        .table-borderless td,
        .table-borderless th,
        .table-borderless thead,
        .table-borderless tr {
            border-width: 0;
        }

        .table-borderless td .table-bordered tbody,
        .table-borderless td .table-bordered td,
        .table-borderless td .table-bordered th,
        .table-borderless td .table-bordered thead,
        .table-borderless td .table-bordered tr {
            border-width: 1px;
        }

        table td p,
        table th p {
            margin: 0 0 5px;
        }

        table td p:last-child,
        table th p:last-child {
            margin-bottom: 0
        }

        .bg-secondary-subtle {
            background-color: #f0f0f0 !important;
        }

        nav {
            display: none;
        }

        .h1,
        h1 {
            font-size: 1.9rem;
        }

        .h2,
        h2 {
            font-size: 1.5rem;
        }

        body {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        h2.d-md-flex {
            display: flex !important;
        }

        h2>.border-md-end-1 {
            border-right: 1px solid #999 !important;
        }

        .row>.col-auto>.input-group>.form-control {
            max-width: 130px;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
            column-gap: 20px;
        }

        body {
            background-color: #fff;
        }

        .nm-3 {
            margin-left: -15px !important;
            margin-right: -15px !important;
        }

        .nmt-1 {
            margin-top: -1px !important;
        }

        .nmb-1 {
            margin-bottom: -1px !important;
        }

        @media (min-width: 992px) {
            .nmt-lg-1 {
                margin-top: -1px !important;
            }
        }

        .labels-mt-1 label {
            margin-top: 5px;
        }

        .clean-input-group {
            align-items: flex-end;
            column-gap: 10px;
        }

        .clean-input-group .input-group-text,
        .clean-input-group .form-control {
            border-radius: 0;
            border: 0 none;
            padding: 0;
        }

        .clean-input-group .form-control {
            border-bottom: 1px solid #999;
        }

        .clean-input-group .form-control:focus {
            border-color: transparent;
            box-shadow: none;
            border-bottom: 1px solid #000;
        }

        img {
            max-width: 100%;
        }

        input[type="radio"] {
            position: relative;
            top: 4px;
        }

        @media (max-width: 991px) {
            .mt-md-2 {
                margin-top: 10px !important;
            }
        }

        @media (min-width: 992px) {
            .border-lg-end-2 {
                border-right: 2px solid #999 !important;
            }
        }

        @media (min-width: 768px) {
            .border-md-end-2 {
                border-right: 2px solid #999 !important;
            }

            .border-md-end-1 {
                border-right: 1px solid #999 !important;
            }
        }

        .form-holder h2>span {
            padding: 5px 15px;
        }

        @media (max-width: 767px) {
            .form-holder h2>span {
                display: block;
            }
        }

        @media (max-width: 767px) {
            #oasis-e-form .table-responsive {
                max-width: calc(540px - var(--bs-gutter-x));
            }
        }

        @media (max-width: 575px) {
            #oasis-e-form .table-responsive {
                max-width: calc(100vw - var(--bs-gutter-x));
            }
        }

        @page {
            margin: 60px;
            size: 300mm;
        }
    </style>
</head>

<body>

    <div class="form-holder">

        <!-- SectionA -->
        <table class="table table-bordered align-middle not-responsive default-td">
                <tbody>
            <!-- M0080 -->
            <tr>
                <td><h3 style="margin: 5px 0"><span>Section A</span> &nbsp; | &nbsp; <span>Administrative Information</span></h3></td>
            </tr>
            <tr>
                <td class="bg-secondary-subtle">
                    <b>M0080. Discipline of Person Completing Assessment</b>
                </td>
                </tr>
                <tr>
                <td>
                    <label class="form-check-label"><input type="radio" {{$oed->dopca=="RNAssessment"?"checked":""}} name="dopca" value="RNAssessment" class="form-check-input"> 1. <b>RN</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->dopca=="PTAssessment"?"checked":""}} name="dopca" value="PTAssessment" class="form-check-input"> 2. <b>PT</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->dopca=="SLP/STAssessment"?"checked":""}} name="dopca" value="SLP/STAssessment" class="form-check-input"> 3. <b>SLP/ST</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->dopca=="OTAssessment"?"checked":""}} name="dopca" value="OTAssessment" class="form-check-input"> 4. <b>OT</b></label>
                </td>
                </tr>

                <!-- M0090 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M0090. Date Assessment Completed</b>
                </td>
                </tr>
                <tr>
                <td>
                    <span>Month <b>{{$oed->assessmentCompleted_Month}}</b></span>
                    &nbsp; &nbsp; <span>Day <b>{{$oed->assessmentCompleted_Day}}</b></span>
                    &nbsp; &nbsp; <span>Year <b>{{$oed->assessmentCompleted_Year}}</b></span>
                </td>
                </tr>
                <tr><td class="py-1">Complete M0090 using the date of the day information was last collected.</td></tr>

                <!-- M0100 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M0100. This Assessment is Currently Being Completed for the Following Reason</b>
                </td>
                </tr>
                <tr>
                <td>
                    <p class="mb-1"><b>Transfer to an Inpatient Facility</b></p>
                    <div class="ps-3 mb-1">
                        <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$oed->inpatientFacility?"checked":""}} name="inpatientFacility" value="1" class="form-check-input"> 6. <b>Transferred to an inpatient facility –</b> patient not discharged from agency</label></div>
                        <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$oed->inpatientFacility_1?"checked":""}} name="inpatientFacility_1" value="1" class="form-check-input"> 7. <b>Transferred to an inpatient facility –</b> patient discharged from agency</label></div>
                    </div>

                    <p class="mb-1"><b>Discharge from Agency – Not to an Inpatient Facility</b></p>
                    <div class="ps-3">
                        <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$oed->Discharge?"checked":""}} name="Discharge" class="form-check-input" value="1"> 8. <b>Death at home</b></label></div>
                    </div>
                </td>
                </tr>

                <tr>
                <td>
                    <label for="" class="form-label"><b>Certifying Physician's Prognosis:</b></label> {!! $oed->certifyingPhysician !!}
                </td>
                </tr>

                <!-- M0906 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M0906. Discharge/Transfer/Death Date</b>
                    <p>Enter the date of the discharge, transfer, or death (at home) of the patient.</p>
                </td>
                </tr>
                <tr>
                <td>
                    <span>Month <b>{{$oed->dischargeMonth}}</b></span>
                    &nbsp; &nbsp; <span>Day <b>{{$oed->dischargeDay}}</b></span>
                    &nbsp; &nbsp; <span>Year <b>{{$oed->dischargeYear}}</b></span>
                </td>
                </tr>

                <!-- M2301 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M2301. Emergent Care</b>
                    <p>At the time of or at any time since the most recent SOC/ROC assessment has the patient utilized a hospital emergency department (includes holding/observation status)?</p>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="d-block"><label class="form-check-label"><input type="radio" {{$oed->EmergentCare=="Inpatient"?"checked":""}} name="EmergentCare" value="Inpatient" class="form-check-input"> 0. <b>No</b></label></div>
                    <div class="d-block"><label class="form-check-label"><input type="radio" {{$oed->EmergentCare=="emergency"?"checked":""}} name="EmergentCare" value="emergency" class="form-check-input"> 1. <b>Yes, used hospital emergency department WITHOUT hospital admission</b></label></div>
                    <div class="d-block"><label class="form-check-label"><input type="radio" {{$oed->EmergentCare=="UnknownInpatient"?"checked":""}} name="EmergentCare" value="UnknownInpatient" class="form-check-input"> UK. <b>Unknown</b></label></div>
                </td>
                </tr>

                <!-- M2310 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M2310. Reason for Emergent Care</b>
                    <p>For what reason(s) did the patient seek and/or receive emergent care (with or without hospitalization)?</p>
                </td>
                </tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->improperMedication?"checked":""}} name="improperMedication" value="1" class="form-check-input"> 1. <b>Improper medication administration, adverse drug reactions, medication side effects, toxicity, anaphylaxis</b></label></td></tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->Hyperglycemia?"checked":""}} name="Hyperglycemia" value="1" class="form-check-input"> 10. <b>Hypo/Hyperglycemia, diabetes out of control</b></label></td></tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->aboveReasons?"checked":""}} name="aboveReasons" value="1" class="form-check-input"> 19. <b>Other than above reasons</b></label></td></tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->reasonUnknown?"checked":""}} name="reasonUnknown" value="1" class="form-check-input"> UK. <b>Reason unknown</b></label></td></tr>

                <!-- M2410 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M2410. To which Inpatient Facility has the patient been admitted?</b>
                </td>
                </tr>
                <tr>
                <td>
                    <label class="form-check-label"><input type="radio" {{$oed->wifpa=="Hospital"?"checked":""}} name="wifpa" value="Hospital" class="form-check-input"> 1. <b>Hospital</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->wifpa=="facility"?"checked":""}} name="wifpa" value="facility"  class="form-check-input"> 2. <b>Rehabilitation facility</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->wifpa=="Nursing_home"?"checked":""}} name="wifpa" value="Nursing_home"  class="form-check-input"> 3. <b>Nursing home</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->wifpa=="Hospice"?"checked":""}} name="wifpa" value="Hospice"  class="form-check-input"> 4. <b>Hospice</b></label>
                </td>
                </tr>
                <tr>
                <td>
                    <label for="" class="form-label"><b>Reason for Admission</b></label>
                    {!! $oed->admissionReason !!}
                </td>
                </tr>

                <!-- Name of facility -->
                <tr>
                <td>
                    <span>Name of facility <b>{{$oed->facilityName_1}}</b></span>
                </td>
                </tr>

                <!-- Patient Name -->
                <tr>
                <td>
                    <p style="margin-bottom:10px">Patient Name - Last, First, Middle Initial</p>
                    <span>Last <b>{{$oed->patientLast}}</b></span>
                    &nbsp; &nbsp; <span>First <b>{{$oed->patientFirst}}</b></span>
                    &nbsp; &nbsp; <span>Middle <b>{{$oed->patientMiddle}}</b></span>
                    &nbsp; &nbsp; <span>ID # <b>{{$oed->patientID}}</b></span>
                </td>
                </tr>

                <!-- A2120 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>A2120. Provision of Current Reconciled Medication List to Subsequent Provider at Transfer</b>
                    <p>At the time of transfer to another provider, did your agency provide the patient’s current reconciled medication list to the subsequent provider?</p>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="d-block"><label class="form-check-label"><input type="radio" {{$oed->pcrmltsp=="reconciled" ? "checked" : ""}} name="pcrmltsp" value="reconciled" class="form-check-input"> 0. <b>No – Current reconciled medication list not provided to the subsequent provider</b></label></div>
                    <div class="d-block"><label class="form-check-label"><input type="radio" {{$oed->pcrmltsp=="provided" ? "checked" : ""}} name="pcrmltsp" value="provided"  class="form-check-input"> 1. <b>Yes – Current reconciled medication list provided to the subsequent provider</b></label></div>
                    <div class="d-block"><label class="form-check-label"><input type="radio" {{$oed->pcrmltsp=="timelyAgency" ? "checked" : ""}} name="pcrmltsp" value="timelyAgency"  class="form-check-input"> 2. <b>NA –</b> The agency was not made aware of this transfer timely</label></div>
                </td>
                </tr>
                
                <!-- A2122 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>A2122. Route of Current Reconciled Medication List Transmission to Subsequent Provider</b>
                    <p>Indicate the route(s) of transmission of the current reconciled medication list to the subsequent provider.</p>
                </td>
                </tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->electronicHealth ? "checked" : ""}} name="electronicHealth" value="1" class="form-check-input"> <b>A. Electronic Health Record</b></label></td></tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->healthInformation ? "checked" : ""}} name="healthInformation" value="1" class="form-check-input"> <b>B. Health Information Exchange</b></label></td></tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->Verbal ? "checked" : ""}} name="Verbal" value="1" class="form-check-input"> <b>C. Verbal</b> (e.g., in-person, telephone, video conferencing)</label></td></tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->paperBased ? "checked" : ""}} name="paperBased" value="1" class="form-check-input"> <b>D. Paper-based</b> (e.g., fax, copies, printouts)</label></td></tr>
                <tr><td><label class="form-check-label"><input type="checkbox" {{$oed->otherMethods ? "checked" : ""}} name="otherMethods" value="1" class="form-check-input"> <b>E. Other Methods</b> (e.g., texting, email, CDs)</label></td></tr>
            </tbody>
        </table>
        <!--/ SectionA -->

        <!-- SectionJ -->
        <table class="table table-bordered align-middle not-responsive default-td">
                <tbody>
                    <tr>
                        <td><h3 style="margin: 5px 0"><span>Section J</span> &nbsp; | &nbsp; <span>Health Conditions</span></h3></td>
                    </tr>
                <tr>
                <td class="bg-secondary-subtle">
                    <b>J1800. Any Falls Since SOC/ROC,</b> whichever is more recent
                </td>
                </tr>
                <tr>
                <td>
                    <p class="mb-1">Has the patient <b>had any falls since SOC/ROC</b>, whichever is more recent?</p>
                    <label class="form-check-label"><input type="radio" {{$oed->pfsrwmr=="Skip"?"checked":""}} name="pfsrwmr" value="Skip" class="form-check-input"> 0. <b>No</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->pfsrwmr=="Continue"?"checked":""}} name="pfsrwmr" value="Continue" class="form-check-input"> 1. <b>Yes</b></label>
                </td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered align-middle not-responsive default-td">
                <tbody>
                <!-- J1900 -->
                <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>J1900. Number of Falls Since SOC/ROC, whichever is more recent</b>
                </td>
                </tr>
                <tr>
                <td style="min-width: 160px;">
                    <p class="mb-1"><b>Coding:</b></p>
                    <div class="ms-2">
                        <div class="d-block">0. <b>None</b></div>
                        <div class="d-block">1. <b>One</b></div>
                        <div class="d-block">2. <b>Two or more</b></div>
                    </div>
                </td>
                <td class="border-0 p-0">
                    <table class="table table-bordered align-middle not-responsive default-td">
                        <tbody>
                        <tr>
                            <td class="bg-secondary-subtle p-1">{{$oed->Boxes}}</td>
                            <td>
                            <label class="form-label"> A. <b>No injury:</b> No evidence of any injury is noted on physical assessment by the nurse or primary care clinician; no complaints of pain or injury by the patient; no change in the patient's behavior is noted after the fall</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-secondary-subtle p-1">{{$oed->exceptMajor}}</td>
                            <td>
                            <label class="form-label"> B. <b>Injury (except major):</b> Skin tears, abrasions, lacerations, superficial bruises, hematomas, and sprains; or any fall-related injury that causes the patient to complain of pain</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-secondary-subtle p-1">{{$oed->jointDislocations}}</td>
                            <td>
                            <label class="form-label"> C. <b>Major injury:</b> Bone fractures, joint dislocations, closed head injuries with altered consciousness, subdural hematoma</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </td>
                </tr>

                <tr>
                <td colspan="2">
                    <p style="margin-bottom: 8px">Was Transfer related to a fall with injury? <label for="" class="form-check-label ms-2"><input type="radio" {{$oed->fallWithInjury=="no"?"checked":""}} name="fallWithInjury" class="form-check-input"> No</label> &nbsp; <label for="" class="form-check-label"><input type="radio" {{$oed->fallWithInjury=="yes"?"checked":""}} name="fallWithInjury" class="form-check-input ms-2"> Yes</label> &nbsp; If yes, document details of injury and circumstances surrounding injury:</p>
                    {!! $oed->fallInjury !!}
                </td>
                </tr>
            </tbody>
        </table>
        <!--/ SectionJ -->

        <!-- SectionN -->
        <table class="table table-bordered align-middle not-responsive default-td">
                <tbody>
                    <tr>
                        <td><h3 style="margin: 5px 0"><span>Section N</span> &nbsp; | &nbsp; <span>Medications</span></h3></td>
                    </tr>
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M2005. Medication Intervention</b>
                    <p>Did the agency contact and complete physician (or physician-designee) prescribed/recommended actions by midnight of the next calendar day each time potential clinically significant medication issues were identified since the SOC/ROC?</p>
                </td>
                </tr>
                <tr>
                <td>
                    <label class="form-check-label"><input type="radio" {{$oed->MedicationIntervention=="medication"?"checked":""}} name="MedicationIntervention" value="medication" class="form-check-input">0. <b>No</b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->MedicationIntervention=="clinically"?"checked":""}} name="MedicationIntervention" value="clinically" class="form-check-input">1. <b>Yes</b></label>
                    &nbsp;<label class="form-check-label"><input type="radio" {{$oed->MedicationIntervention=="significant"?"checked":""}} name="MedicationIntervention" value="significant" class="form-check-input">9. <b>NA –</b> There were no potential clinically significant medication issues identified since SOC/ROC or patient is not taking any medications</label>
                </td>
                </tr>
            </tbody>
        </table>
        <!--/ SectionN -->

        <!-- SectionO -->
        <table class="table table-bordered align-middle not-responsive default-td">
            <tbody>
                <tr>
                    <td><h3 style="margin: 5px 0"><span>Section O</span> &nbsp; | &nbsp; <span>Special Treatment, Procedures, and Programs</span></h3></td>
                </tr>
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M1041. Influenza Vaccine Data Collection Period</b>
                    <p>Does this episode of care (SOC/ROC to Transfer/Discharge) include any dates on or between October 1 and March 31?</p>
                </td>
                </tr>
                <tr>
                <td>
                    <label class="form-check-label"><input type="radio" {{$oed->Influenza=="Intervention"?"checked":""}} name="Influenza" value="Intervention" class="form-check-input"> 0. <b>No </b></label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$oed->Influenza=="Influenza"?"checked":""}} name="Influenza" value="Influenza" class="form-check-input"> 1. <b>Yes</b></label>
                </td>
                </tr>

                <!-- M1046 -->
                <tr>
                <td class="bg-secondary-subtle">
                    <b>M1046. Influenza Vaccine Received</b>
                    <p>Did the patient receive the influenza vaccine for this year’s flu season?</p>
                </td>
                </tr>
                <tr>
                <td>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="received"?"checked":""}} name="fluseason" value="received" class="form-check-input"> 1. <b>Yes;</b> received from your agency during this episode of care (SOC/ROC to Transfer/Discharge)</label></div>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="anotherhealth"?"checked":""}} name="fluseason" value="anotherhealth" class="form-check-input"> 2. <b>Yes;</b> received from your agency during a prior episode of care (SOC/ROC to Transfer/Discharge)</label></div>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="patientoffered"?"checked":""}} name="fluseason" value="patientoffered" class="form-check-input"> 3. <b>Yes;</b> received from another health care provider (for example, physician, pharmacist)</label></div>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="patientassessed"?"checked":""}} name="fluseason" value="patientassessed" class="form-check-input"> 4. <b>No;</b> patient offered and declined</label></div>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="notindicated"?"checked":""}} name="fluseason" value="notindicated" class="form-check-input"> 5. <b>No;</b> patient assessed and determined to have medical contraindication(s)</label></div>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="inability"?"checked":""}} name="fluseason" value="inability" class="form-check-input"> 6. <b>No;</b> not indicated – patient does not meet age/condition guidelines for fluseason vaccine</label></div>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="vaccine"?"checked":""}} name="fluseason" value="vaccine" class="form-check-input"> 7. <b>No;</b> inability to obtain vaccine due to declared shortage</label></div>
                    <div><label class="form-check-label"><input type="radio" {{$oed->fluseason=="vaccinedue"?"checked":""}} name="fluseason" value="vaccinedue" class="form-check-input"> 8. <b>No;</b> patient did not receive the vaccine due to reasons other than those listed in responses 4-7.</label></div>
                </td>
                </tr>
                <tr>
                <td>
                    <label for="" class="form-label mb-1">If answer is 8., if known, specify reason(s):</label><br>
                    {!! $oed->fluseason=="fluseason_specify" !!}
                </td>
                </tr>
            </tbody>
        </table>
        <!--/ SectionO -->

        <!-- SectionQ -->
        <table class="table table-bordered align-middle not-responsive default-td">
            <tbody>
                <!-- M2401 -->
                <tr>
                    <td colspan="5"><h3 style="margin: 5px 0"><span>Section Q</span> &nbsp; | &nbsp; <span>Participation in Assessment and Goal Setting</span></h3></td>
                </tr>
            <tr>
                <td class="bg-secondary-subtle" colspan="5">
                    <b>M2401. Intervention Synopsis</b>
                    <p>At the time of or at any time since the most recent SOC/ROC assessment, were the following interventions BOTH included in the physician-ordered plan of care AND implemented? (Mark only one box in each row.)</p>
                </td>
                </tr>
                <tr>
                <td class="bg-secondary-subtle text-center"><b>Plan/Intervention</b></td>
                <td class="bg-secondary-subtle text-center"><b>No</b></td>
                <td class="bg-secondary-subtle text-center"><b>Yes</b></td>
                <td class="bg-secondary-subtle text-center" colspan="2"><b>Not Applicable</b></td>
                </tr>
                <tr>
                <td></td>
                <td colspan="4"><b>↓ Check only one box in each row ↓</b></td>
                </tr>
                <tr>
                <td>b. Falls prevention interventions</td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->fpi=="riskfall"?"checked":""}} name="fpi" value="riskfall" class="form-check-input"> 0</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->fpi=="most"?"checked":""}} name="fpi" value="most" class="form-check-input"> 1</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" {{$oed->fpi=="falls"?"checked":""}} name="fpi" value="falls" class="form-check-input"> NA</label></td>
                <td>Every standardized, validated multi-factor fall risk assessment conducted at or since the most recent SOC/ROC assessment indicates the patient has no risk for falls.</td>
                </tr>
                <tr>
                <td>c. Depression intervention(s) such as medication, referral for other treatment, or a monitoring plan for current treatment</td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->dimrtmp=="monitoring"?"checked":""}} name="dimrtmp" value="monitoring" class="form-check-input"> 0</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->dimrtmp=="treatment"?"checked":""}} name="dimrtmp" value="treatment" class="form-check-input"> 1</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" {{$oed->dimrtmp=="conducted"?"checked":""}} name="dimrtmp" value="conducted" class="form-check-input"> NA</label></td>
                <td>Patient has no diagnosis of depression AND every standardized, validated depression screening conducted at or since the most recent SOC/ROC assessment indicates the patient has: 1) no symptoms of depression; or 2) has some symptoms of depression but does not meet criteria for further evaluation of depression based on screening tool used.</td>
                </tr>
                <tr>
                <td>d. Intervention(s) to monitor and mitigate pain</td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->itmamp=="most"?"checked":""}} name="itmamp" value="most" class="form-check-input"> 0</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->itmamp=="recent"?"checked":""}} name="itmamp" value="recent" class="form-check-input"> 1</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" {{$oed->itmamp=="pain"?"checked":""}} name="itmamp" value="pain" class="form-check-input"> NA</label></td>
                <td>Every standardized, validated pain assessment conducted at or since the most recent SOC/ROC assessment indicates the patient has no pain.</td>
                </tr>
                <tr>
                <td>e. Intervention(s) to prevent pressure ulcers</td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->itppu=="developing"?"checked":""}} name="itppu" value="developing" class="form-check-input"> 0</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->itppu=="risk"?"checked":""}} name="itppu" value="risk " class="form-check-input"> 1</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" {{$oed->itppu=="indicates"?"checked":""}} name="itppu" value="indicates" class="form-check-input"> NA</label></td>
                <td>Every standardized, validated pressure ulcer risk assessment conducted at or since the most recent SOC/ROC assessment indicates the patient is not at risk of developing pressure ulcers.</td>
                </tr>
                <tr>
                <td>f. Pressure ulcer treatment based on principles of moist wound healing</td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->putpmwh=="healing"?"checked":""}} name="putpmwh" value="healing" class="form-check-input"> 0</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" {{$oed->putpmwh=="wound"?"checked":""}} name="putpmwh" value="wound" class="form-check-input"> 1</label></td>
                <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" {{$oed->putpmwh=="moist"?"checked":""}} name="putpmwh" value="moist" class="form-check-input"> NA</label></td>
                <td>Patient has no pressure ulcers OR has no pressure ulcers for which moist wound healing is indicated.</td>
                </tr>
            </tbody>
        </table>
        <!--/ SectionQ -->

        <!-- PHYSICIAN TRANSFER/DEATH AT HOME SUMMARY -->
        <table class="table table-bordered align-middle not-responsive default-td">
            <tr>
                <td><h3 style="text-align: center;margin:5px 0"><span>PHYSICIAN TRANSFER/DEATH AT HOME SUMMARY</span></h3></td>
            </tr>
            <tr>
                <td>
                    <div>
                        <span>Admission Date: <b>{{$oed->admissionDate}}</b></span>
                        <span>Transfer Date: <b>{{$oed->admissiontransferDate}}</b></span>
                    </div>
                    <div>
                        Transfer was planned: <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->TransferPlanned=="Transfer"?"checked":""}} name="TransferPlanned" value="Transfer"> Yes</label> 
                        <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->TransferPlanned=="Planned"?"checked":""}} name="TransferPlanned" value="Planned"> No</label>
                    </div>
                    <div>
                        <span>Reason for admission: <b>{{$oed->reasonforAdmission}}</b></span>
                    </div>

                    <div style="margin-top: 5px">
                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" {{$oed->TransferReason=="N/A"?"checked":""}} name="TransferReason" value="N/A"> N/A</label> <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->TransferReason=="reasonforTransfer"?"checked":""}} name="TransferReason" value="reasonforTransfer"> Reason for transfer</label>
                        <div>
                            <span>(reference reason given on page 1): <b>{{$oed->reference_reason}}</b></span>
                        </div>
                    </div>

                    <div class="mt-2">
                        <label for="" class="form-check-label"><input type="radio" class="form-check-input" {{$oed->TransferredTo=="N/A"?"checked":""}} name="TransferredTo"> N/A</label> <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->TransferredTo=="N/A"?"checked":""}} name="TransferredTo"> Transferred to (facility name and address):</label><br>
                        {!! $oed->TransferReason_1 !!}
                    </div>

                    <div class="mt-2">
                        <label for="" class="form-check-label"><input type="checkbox" class="form-check-input" value="1" {{$oed->HHAdisciplines?"checked":""}} name="HHAdisciplines"> HHA disciplines involved:</label>
                        &nbsp; <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->SNdisciplines?"checked":""}} name="SNdisciplines"> SN</label>
                        &nbsp; <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->PTdisciplines?"checked":""}} name="PTdisciplines"> PT</label>
                        &nbsp; <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->OTdisciplines?"checked":""}} name="OTdisciplines"> OT</label>
                        &nbsp; <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->STdisciplines?"checked":""}} name="STdisciplines"> ST</label>
                        &nbsp; <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->MSWdisciplines?"checked":""}} name="MSWdisciplines"> MSW</label>
                        &nbsp; <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->Aidedisciplines?"checked":""}} name="Aidedisciplines"> Aide</label>
                        &nbsp; <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->Otherdisciplines?"checked":""}} name="Otherdisciplines"> Other:</label>
                        <br>
                        {{$oed->OtherHHAdisciplines}}
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div>
                        <span>All involved team members notified of transfer:</span>
                        <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->SNtransfer?"checked":""}} name="SNtransfer" value="notifiedSN"> SN</label>
                        <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->PTtransfer?"checked":""}} name="PTtransfer" value="notifiedPT"> PT</label>
                        <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->OTtransfer?"checked":""}} name="OTtransfer"value="notifiedOT"> OT</label>
                        <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->STtransfer?"checked":""}} name="STtransfer"value="notifiedST"> ST</label>
                        <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->MSWtransfer?"checked":""}} name="MSWtransfer"value="notifiedMSW"> MSW</label>
                        <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->Aidetransfer?"checked":""}} name="Aidetransfer" value="notifiedAide"> Aide</label>
                        <label for="" class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" {{$oed->Othertransfer?"checked":""}} name="Othertransfer" value="notifiedOther"> Other:</label>
                        <br>
                        {{$oed->OtherTeamMembers}}
                    </div>

                    <div class="mt-1 ms-3">
                        <label class="form-check-label"><input type="checkbox" class="form-check-input" {{$oed->agencyPolicy?"checked":""}} name="agencyPolicy"> Appropriate physician(s) per agency policy</label>
                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->RepresentativePP?"checked":""}} name="RepresentativePP"> Representative (if any) per agency policy/procedure</label>
                        <br>
                        <span>if not, explain: <b>{{$oed->explain}}</b></span>
                    </div>

                    <div class="mt-2">
                        <label class="form-check-label"><input type="checkbox" class="form-check-input" {{$oed->documentation?"checked":""}} name="documentation" value=""> Additional documentation provided per agency policy/process, and/or requested by receiving provider.</label>
                        <div class="ms-3">
                            <label class="form-check-label d-block"><input type="checkbox" class="form-check-input" {{$oed->currentPlan?"checked":""}} name="currentPlan" value=""> Copy of current plan of care</label>
                            <div>
                                <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->currentPlanOfCare=="1"?"checked":""}} name="currentPlanOfCare" value="1"> Current drug profile</label>
                                <label class="form-check-label ms-3"><input type="radio" class="form-check-input" {{$oed->currentPlanOfCare=="2"?"checked":""}} name="currentPlanOfCare" value="2"> N/A, patient was not taking any medications</label>
                            </div>
                            <div>
                                <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->currentPlanOfCare=='3'?"checked":""}} name="currentPlanOfCare" value="3"> Copy of advance directives</label>
                                <label class="form-check-label ms-3"><input type="radio" class="form-check-input" {{$oed->currentPlanOfCare=='4'?"checked":""}} name="currentPlanOfCare" value="4"> N/A, no advance directives</label>
                            </div>
                            <label class="form-check-label d-block"><input type="checkbox" class="form-check-input" {{$oed->copyOrder?"checked":""}} name="copyOrder"> Copy of transfer order</label>

                            <label for="" class="form-check-label"><input type="checkbox" class="form-check-input" {{$oed->copyOther_1?"checked":""}} name="copyOther_1"> Other:</label>
                            <br>
                            {{$oed->copyOther_2}}
                        </div>
                    </div>
                </td>
            </tr>

            <!-- COMPLETE FOR DEATH AT HOME ONLY -->
            <tr>
                <td class="p-0 align-middle">
                    <table class="table table-borderless">
                        <tr>
                            <td class="pb-1">
                                Date of death: <b>{{$oed->dateofdeath}}</b>
                            </td>
                            <td class="align-middle pb-1">
                                <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->PlanOfCare=='Observed'?"checked":""}} name="PlanOfCare" value="Observed"> Observed by clinician</label>
                            </td>
                            <td class="align-middle pb-1">
                                <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->PlanOfCare=='Reported'?"checked":""}} name="PlanOfCare" value="Reported"> Reported by:</label>
                                <b>{{$oed->PlanOfCare_1}}</b>
                            </td>
                            <td class="align-middle pb-1">
                                Relationship to patient <b>{{$oed->relationshiptoPatient}}</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span style="font-weight: 500;">Person(s) present at time of death:</span>
                                &nbsp; <label class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->pptd=='Unknown'?"checked":""}} name="pptd" value="Unknown"> Unknown</label>
                                &nbsp; <label class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->pptd=='Patient'?"checked":""}} name="pptd" value="Patient"> Patient was alone</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="pt-1 pb-1">
                                Name: <b>{{$oed->personName}}</b>
                            </td>
                            <td colspan="1" class="pt-1 pb-1">
                                Relationship: <b>{{$oed->Relationship}}</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="pt-1 pb-1">
                                Name: <b>{{$oed->RelationName}}</b>
                            </td>
                            <td colspan="1" class="pt-1 pb-1">
                                Relationship: <b>{{$oed->RelationName_1}}</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="pt-1">
                                Name: <b>{{$oed->RelationName_2}}</b>
                            </td>
                            <td colspan="1" class="pt-1">
                                Relationship: <b>{{$oed->RelationName_3}}</b>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <span>All involved team members notified of transfer:</span>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->involvedSN?"checked":""}} name="involvedSN" value="1"> SN</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->involvedPT?"checked":""}} name="involvedPT" value="1"> PT</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->involvedOT?"checked":""}} name="involvedOT" value="1"> OT</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->involvedST?"checked":""}} name="involvedST" value="1"> ST</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->involvedMSW?"checked":""}} name="involvedMSW" value="1"> MSW</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->involvedAide?"checked":""}} name="involvedAide" value="1"> Aide</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->teamMembers?"checked":""}} name="teamMembers" value="1"> All involved team members</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->otherMembers?"checked":""}} name="otherMembers" value="1"> Other:</label>
                        <br>
                        {!! $oed->otherMembers_1 !!}
                    </div>

                    <div class="mt-1">
                        <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->representative="agency"?"checked":""}} name="representative" value="agency"> Representative (if any) per agency policy/procedure</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->representative="agency_1"?"checked":""}} name="representative" value="agency_1"> N/A no representative</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->representative="agency_2"?"checked":""}} name="representative" value="agency_2"> N/A representative already aware</label>
                    </div>

                    <div class="mt-1">
                        <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->pharmaceutical="1"?"checked":""}} name="pharmaceutical" value="1"> if applicable, all hazardous waste pharmaceuticals were disposed of</label>
                        <br>
                        {!! $oed->pharmaceutical_1 !!}
                    </div>
                    <div>
                        <span style="font-weight: 500;">per agency policy in compliance with EPA guidelines</span>
                        <label class="form-check-label ms-3"><input type="radio" class="form-check-input" {{$oed->pharmaceutical="compliance"?"checked":""}} name="pharmaceutical" value="compliance"> N/A patient had no hazardous waste pharmaceutical</label>
                    </div>

                    <div class="mt-1">
                        <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->medications="compliance_1"?"checked":""}} name="medications" value="compliance_1"> List of drug profile provided with physician summary (per agency policy/process)</label>
                        &nbsp; <label class="form-check-label ms-2"><input type="radio" class="form-check-input" {{$oed->medications="compliance_2"?"checked":""}} name="medications" value="compliance_2"> N/A patient was not taking any medications</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->TransferDeath="brief"?"checked":""}} name="TransferDeath" value="brief"> <b>TRANSFER:</b> Give a brief description of the patient's care (e.g., education/training provided, care preferences, treatments, referrals, infections, wounds, unplanned ED visit or hospital admission, falls/injuries, assistive devices/equipment used etc.). Describe the patient's clinical, mental, psychosocial, cognitive, and functional status at SOC and at end of care. <b>(Always attach medication list.)</b></label>
                    </div>
                    <div class="mt-2">
                        <label class="form-check-label"><input type="radio" class="form-check-input" {{$oed->TransferDeath="brie"?"checked":""}} name="TransferDeath" value="brie"> <b>DEATH AT HOME:</b> Summary of services provided. Explain how the agency became aware of the patient's expiration. If a visit was made, explain services provided (e.g., calling agency to cancel services). If home visit was not made, explain circumstances:</label>
                        <br>
                        {!! $oed->TransferDeath_1 !!}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <b>Copy of summary:</b>
                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->malled?"checked":""}} name="malled" value="1"> <b>malled</b></label>
                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->emalled?"checked":""}} name="emalled" value="1"> <b>emalled</b></label>
                        <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" {{$oed->faxed?"checked":""}} name="faxed" value="1"> <b>faxed</b></label>
                        <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" class="form-check-input" {{$oed->faxed_1=="facility"?"checked":""}} name="faxed_1" value="facility"> Facility Name</label>
                        <br>
                        {!! $oed->facilityName_1 !!}
                    </div>

                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 50px;" class="pt-4">To:</td>
                            <td>
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="pb-1">
                                            <div class="d-flex">
                                                <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" class="form-check-input" {{$oed->certifyingPhysician_1=="certifying"?"checked":""}} name="certifyingPhysician_1" value="certifying"> Certifying Physician:</label>
                                                <b>{{ $oed->Othercertifying }}</b>
                                            </div>
                                        </td>
                                        <td class="pb-1">
                                            <span>Date: <b>{{ $oed->Datecertifying }}</b></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-1 pb-1">
                                            <div class="d-flex">
                                                <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" class="form-check-input" {{$oed->secondaryPhysician=="secondary"?"checked":""}} name="secondaryPhysician" value="secondary"> Secondary Physician:</label>
                                                <b>{{ $oed->secondaryPhysician_1 }}</b>
                                            </div>
                                        </td>
                                        <td class="pt-1 pb-1">
                                            <span>Date: <b>{{ $oed->secondaryPhysician_date }}</b></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-1 pt-1">
                                            <div class="d-flex">
                                                <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" class="form-check-input" {{$oed->faxed?"primaryCareProvider":""}} name="primaryCareProvider"> Primary Care Provider Post-transfer/DAH:</label>
                                                <b>{{ $oed->primaryCare }}</b>
                                            </div>
                                        </td>
                                        <td class="pb-1 pt-1">
                                            <span>Date: <b>{{ $oed->primaryCare_date }}</b></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pt-1">
                                            <div class="d-flex">
                                                <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" class="form-check-input" {{$oed->RepresentativeIfAny?"checked":""}} name="RepresentativeIfAny"> Representative (if any):</label>
                                                <b>{{ $oed->anyRepresentative }}</b>
                                            </div>
                                        </td>
                                        <td class="pt-1">
                                            <span>Date: <b>{{ $oed->anyRepresentative_date }}</b></span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- SIGNATURE/DATE -->
            <tr>
                <td class="text-center"><h4 style="margin: 5px 0">SIGNATURE/DATE</h4></td>
            </tr>
            <tr>
                <td class="p-0">
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                {{ $oed->personCompleting }}<br>
                                <label for=""><i>Person Completing This Form (signature)</i></label>
                            </td>
                            <td>
                                {{ $oed->personCompleting_date }}<br>
                                <label for=""><i>Date</i></label>
                            </td>
                            <td>
                                {{ $oed->personCompleting_time }}<br>
                                <label for=""><i>Time</i></label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>

</body>

</html>
