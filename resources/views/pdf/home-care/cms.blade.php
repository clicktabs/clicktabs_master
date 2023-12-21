<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oasis-e-start-of-care</title>
    <style>
        @charset "UTF-8";

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1320px;
            margin-right: auto;
            margin-left: auto;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
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

        .p-0 {padding: 0 !important;}
        .pb-0 {padding-bottom: 0 !important;}
        .pb-1 {padding-bottom: 5px !important;}
        .pb-2 {padding-bottom: 10px !important;}
        .pt-1 {padding-top: 5px !important;}
        .pt-2 {padding-top: 10px !important;}
        .pt-0 {padding-top: 0 !important;}

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

        .form-check-input[type=checkbox] {
            margin: 0;
            position: relative;
            top: 5px;
        }

        .d-md-flex {
            display: flex !important;
        }

        .bg-secondary-subtle {
            background-color: #e2e3e5 !important;
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
            padding: .5rem .5rem;
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

        .bg-secondary-subtle {
            background-color: #e2e3e5 !important;
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
            margin: 0 0 0 0;
        }

        
    /* body { counter-increment: page; counter-reset: pageplus1 1; } */
  </style>
</head>

<body style="padding: 50px;">
<div>
    {{-- HOME HEALTH CERTIFICATION AND PLAN OF CARE --}}
    <table class="table table-bordered m-0">
        <tr>
           <td class="bg-black" colspan="2">
              <h3 class="text-center m-0 text-white">HOME HEALTH CERTIFICATION AND PLAN OF CARE</h3>
           </td>
        </tr>
        <tr>
           <td>Patients HI Claim No. {{$cms->hiClaimNo}}</td>
           <td>Start Of Care Date {{$cms->startOfCareDate}}</td>
        </tr>
        <tr>
           <td>
              <label>Certification Period</label><br>
              From: {{$cms->certiPeriodFrom}} &nbsp;&nbsp; To: {{$cms->certiPeriodTo}}
           </td>
           <td>Medical Record No. {{$cms->medicalRecordNo}}</td>
        </tr>

        <tr>
           <td>
              Patients Name and Address<br>
              Name: {{$cms->name}}
              Address: {{$cms->address}}
           </td>
           <td>
              <span style="font-weight: 500">Gender:</span>
              &nbsp; <input style="position: relative;top:4px" {{$cms->gender ===1? 'checked' : ''}} type="radio"
              class="form-check-input"> Male
              &nbsp; <input style="position: relative;top:4px" {{$cms->gender ===1? 'checked' : ''}} type="radio"
              class="form-check-input"> Female
           </td>
        </tr>
        <tr>
           <td>Date of Birth: {{$cms->dateOfBirth}}</td>
           <td>Phone Number: {{$cms->phone}}</td>
        </tr>

        <tr>
           <td colspan="2">Patient Risk Profile<br>{!! $cms->riskProfile !!}</td>
        </tr>
     </table>

     {{-- Clinical Data --}}
     <table class="table table-borderless m-0">
        <tr>
            <td colspan="2" class="p-0">
                <table class="table table-bordered m-0">

                    {{-- Clinical Data --}}
                    <tr>
                        <td colspan="3"><b>Clinical Data</b></td>
                     </tr>
                     <tr>
                        <td>
                           Clinical Manager: {{ $cms->clinicalManager }}
                        </td>
                        <td rowspan="2">
                            Branch Name: {{ $cms->branchInfo }}
                            Branch Address: {{ $cms->branchAddress }}
                        </td>
                        <td>Phone Number: {{ $cms->clinicPhone }}</td>
                     </tr>
                     <tr>
                        <td>
                            Provider Number: {{ $cms->providerNumber }}<br>
                            Medicare Number: {{ $cms->medicare }}<br>
                        </td>
                        <td>Fax Number: {{ $cms->fax }}</td>
                     </tr>

                     {{-- Primary Diagnosis --}}
                     <tr>
                        <td colspan="3" class="bg-secondary-subtle"><b>Primary Diagnosis</b></td>
                     </tr>
                     <tr>
                        <td>
                            Code<br>{{ $cms->diagonsisCode }}
                        </td>
                        <td>
                            Description<br>{{ $cms->description }}
                        </td>
                        <td>Date: {{ $cms->date }}</td>
                     </tr>

                     {{-- Secondary/Other Diagnosis --}}
                     <tr>
                        <td colspan="3" class="bg-secondary-subtle"><b>Secondary/Other Diagnosis</b></td>
                     </tr>
                     <tr>
                        <td>
                            Code<br>{{ $cms->secDiagnosisCode }}
                        </td>
                        <td colspan="2">Description<br>{{ $cms->secDescription }}</td>
                     </tr>
                     <tr>
                        <td colspan="3">
                            Mental Status<br>{{ $cms->mentalStatus }}
                        </td>
                     </tr>

                     <tr>
                        <td colspan="3">
                            DME and Supplies<br>{{ $cms->supplies }}
                        </td>
                     </tr>

                     <tr>
                        <td colspan="3">
                            Prognosis<br>{{ $cms->prognosis }}
                        </td>
                     </tr>

                     <tr>
                        <td colspan="3">
                            Safety Measures<br>{{ $cms->safety }}
                        </td>
                     </tr>

                     <tr>
                        <td colspan="3">
                            Nutritional Requirements<br>{{ $cms->nutritional }}
                        </td>
                     </tr>

                     <tr>
                        <td colspan="3">
                            Functional Limitations<br>{{ $cms->limitations }}
                        </td>
                     </tr>

                     <tr>
                        <td colspan="3">
                            Other<br>{{ $cms->other }}
                        </td>
                     </tr>

                     <tr>
                        <td colspan="3">
                            Activities Permitted<br>{{ $cms->activities }}
                        </td>
                     </tr>
                </table>
            </td>
        </tr>
     </table>

     {{-- Treatments --}}
     <table class="table table-bordered m-0">
        <tr>
           <td colspan="2"><b>Treatments</b></td>
        </tr>
        <tr>
           <td colspan="2">Medications<br>{{$cms->medications}}</td>
        </tr>

        {{-- Allergies --}}
        <tr>
           <td colspan="2" class="bg-secondary-subtle"><b>Allergies</b></td>
        </tr>
        <tr>
           <td>Substance<br>NKA (Food/ Drug/ Latex/ Environmental)<br>{{$cms->substance}}</td>
           <td>Reaction<br>{{$cms->reaction}}</td>
        </tr>
        <tr>
           <td colspan="2">Orders and Treatments<br>{{$cms->treatments}}</td>
        </tr>
        <tr>
           <td>
              <p class="mt-0 mb-2"><b>Nurse Signature and Date of Verbal SOC Where Applicable</b></p>
              Digitally Signed by: {{$cms->nurseSign}}
           </td>
           <td class="align-middle">Date: {{$cms->signDate}}</td>
        </tr>
        <tr>
           <td>
                <input {{$cms->certify ? 'checked' : ''}} type="checkbox" class="form-check-input"> I certify/ recertify that this patient is confined to his/her home and needs intermittent skilled nursing care, physical therapy and/or speech therapy or continues to need occupational therapy. This patient is under my care, and I have authorized the services on this plan of care and I or another physician will periodically review this plan. I attest that a valid face-to-face encounter occurred (or will occur) within timeframe requirements and it is related to the primary reason the patient requires home health services.
           </td>
           <td>
                 <input  {{$cms->fine ? 'checked' : ''}} type="checkbox" class="form-check-input"> Anyone who misrepresents, falsifies, or conceals essential information required for payment of Federal funds may be subject to fine, imprisonment, or civil penalty under applicable Federal laws.
           </td>
        </tr>
     </table>
     <table class="table table-borderless m-0">
        <tr>
            <td colspan="2" class="p-0">
                <table class="table table-bordered m-0">
                    <tr>
                       <td>Primary Physician {{$cms->physician}}</td>
                       <td>Address<br>{{$cms->physicianAddress}}</td>
                       <td>Phone Number: {{$cms->physicianPhone}}</td>
                    </tr>
                    <tr>
                       <td colspan="2">NPI: {{$cms->npi}}</td>
                       <td>Fax Number: {{$cms->physicianFax}}</td>
                    </tr>
                    <tr>
                       <td colspan="2">Attending Physician's Signature and Date Signed<br>{{$cms->physicianSign}}</td>
                       <td>Date<br>{{$cms->physicianSignDate}}</td>
                    </tr>
                 </table>
            </td>
        </tr>
     </table>
</div>
    @include('pdf.home-care.pagecounter')
</body>

</html>
