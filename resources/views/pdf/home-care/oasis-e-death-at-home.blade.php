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
    </style>
</head>

<body style="padding: 50px;">

    {{-- Section A Administrative Information --}}
    <table class="table table-bordered align-middle mb-2">
        <tr>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Section A</b></td>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Administrative Information</b></td>
        </tr>
    </table>   

    {{-- Administrative --}}
    <table class="table table-bordered align-middle m-0">
        <tr>
            <td class="bg-black">
                <h3 class="text-center m-0 text-white">Administrative</h3>
            </td>
        </tr>
        <tr>
            {{-- <td>
                <h4 class="m-0">M0018. National Provider Identifier (NPI) for the attending physician who has signed
                    the plan of care</h4>
                <div style="margin: 0 -7px;">
                    <table class="table table-borderless">
                        <tr>
                            <td>{{ $administrative->nipNumber }}</td>
                            <td>
                                @if ($administrative->ukUnknown)
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"
                                            checked> UK - Unknown or Available</label>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>

                <div>
                    <h4 class="m-0">M0010. CMS Certification Number</h4>
                    {{ $administrative->cmsNumber }}
                </div>

                <div style="margin: 0 -7px;">
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <h4 class="m-0">M0014. Branch State</h4>
                                {{ $administrative->branchState }}
                            </td>
                            <td>
                                <h4 class="m-0">M0016. Branch ID Number</h4>
                                {{ $administrative->branchId }}
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="mt-2">
                    <h4 class="m-0">M0020. Patient ID Number</h4>
                    {{ $administrative->patientIdNo }}
                </div>

                <div style="margin: 0 -7px;">
                    <table class="table table-borderless" style="vertical-align: top">
                        <tr>
                            <td colspan="4" style="padding-bottom: 0">
                                <h4 class="m-0">M0040. Patient Name</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                (First)<br>
                                {{ $administrative->patientName }}
                            </td>
                            <td>
                                (MI)<br>
                                {{ $administrative->patientMi ? $administrative->patientMi : '' }}
                            </td>
                            <td>
                                (Last)<br>
                                {{ $administrative->lastName }}
                            </td>
                            <td>
                                (Suffix)<br>
                                {{ $administrative->middleName }}
                            </td>
                        </tr>
                    </table>
                </div>

                <div style="margin: 0 -7px;">
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <h4 class="m-0">M0050. Patient State of Residence</h4>
                                {{ $administrative->state }}
                            </td>
                            <td>
                                <h4 class="m-0">M0060. Patient ZIP Code</h4>
                                {{ $administrative->zip }}
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="mt-2">
                    <h4 class="m-0">M0064. Social Security Number</h4>
                    {{ $administrative->socialSecurityNumber }}

                    @if ($administrative->ssnUnknown)
                        <label class="form-check-label"><input type="checkbox" class="form-check-input" checked> UK -
                            Unknown or Not Available</label>
                    @endif
                </div>

                <div style="margin: 0 -7px;">
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <h4 class="m-0">M0063. Medicare Number</h4>
                                {{ $administrative->medicare }}
                                @if ($administrative->noMedicare)
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"
                                            checked> NA - No Medicare</label>
                                @endif
                            </td>
                            <td>
                                <h4 class="m-0">M0065. Medicaid Number</h4>
                                {{ $administrative->medicaid }}
                                @if ($administrative->noMedicaid)
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"
                                            checked> NA - No Medicaid</label>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>

                <div style="margin: 0 -7px;">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td>
                                <h4 class="m-0">M0069. Gender</h4>
                                @if ($administrative->gender == '1')
                                    <label class="form-check-label"> <input type="radio" class="form-check-input"
                                            style="position: relative;top: 3px" checked> 1. Male</label>
                                @endif

                                @if ($administrative->gender == '0')
                                    <label class="form-check-label"> <input type="radio" class="form-check-input"
                                            style="position: relative;top: 3px" checked> 2. Female</label>
                                @endif
                            </td>
                            <td>
                                <h4 class="m-0">M0066. Birth Date</h4>
                                {{ date('Y-d-m', strtotime($administrative->dateofbirth)) }}
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>

    {{-- Demographics --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Demographics</h3></td>
            </tr>

            {{-- A1005. Ethnicity --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A1005. Ethnicity</h4>
                    <p class="m-0" style="font-size: 13px;">Are you of Hispanic, Latino/a, or Spanish origin?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0;">
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <label class="form-check-label"><input {{ $demographic->hispanic ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> B. Yes, Mexican, Mexican American,
                                    Chicano/a</label><br>
                                <label class="form-check-label"><input {{ $demographic->mexican ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> A. No, not of Hispanic, Latino/a, or
                                    Spanish origin</label><br>
                                <label class="form-check-label"><input {{ $demographic->rican ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> C. Yes, Puerto Rican</label>
                            </td>
                            <td>
                                <label class="form-check-label"><input {{ $demographic->cuban ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> D. Yes, Cuban</label><br>
                                <label class="form-check-label"><input
                                        {{ $demographic->anotherHispanic ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> E. Yes, another Hispanic, Latino, or Spanish
                                    origin</label><br>
                                <label class="form-check-label"><input
                                        {{ $demographic->unableRespond ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> X. Patient unable to respond</label><br>
                                <label class="form-check-label"><input {{ $demographic->declines ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> Y. Patient declines to respond</label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- A1010. Race --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A1010. Race</h4>
                    <p class="m-0" style="font-size: 13px;">What is your race?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0;">
                    <table class="table table-borderless">
                        <tr>
                            <td>
                                <label class="form-check-label"><input {{ $demographic->white ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> A. White</label><br>
                                <label class="form-check-label"><input {{ $demographic->black ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> B. Black or African
                                    American</label><br>
                                <label class="form-check-label"><input
                                        {{ $demographic->americanIndian ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> C. American Indian or Alaska Native</label><br>
                                <label class="form-check-label"><input
                                        {{ $demographic->asianIndian ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> D. Asian Indian</label><br>
                                <label class="form-check-label"><input {{ $demographic->chines ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> E. Chinese</label>
                            </td>
                            <td>
                                <label class="form-check-label"><input {{ $demographic->fillipino ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> F. Filipino</label><br>
                                <label class="form-check-label"><input {{ $demographic->japanes ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> G. Japanese</label><br>
                                <label class="form-check-label"><input {{ $demographic->korean ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> H. Korean</label><br>
                                <label class="form-check-label"><input {{ $demographic->vietnamese ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> I. Vietnamese</label><br>
                                <label class="form-check-label"><input {{ $demographic->otherAsian ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> J. Other Asian</label>
                            </td>
                            <td>
                                <label class="form-check-label"><input
                                        {{ $demographic->nativeHawaiian ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> K. Native Hawaiian</label><br>
                                <label class="form-check-label"><input {{ $demographic->guamanian ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> L. Guamanian or Chamorro</label><br>
                                <label class="form-check-label"><input {{ $demographic->samoa ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> M. Samoan</label><br>
                                <label class="form-check-label"><input
                                        {{ $demographic->otherIsland ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> N. Other Pacific Islander</label><br>
                                <label class="form-check-label"><input {{ $demographic->noa ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> Z. None of the above</label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M0150. Current Payment Sources for Home Care --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M0150. Current Payment Sources for Home Care</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0;">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td>
                                <label class="form-check-label"><input {{ $demographic->nocharge ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 0. None; no charge for current
                                    services</label><br>
                                <label class="form-check-label"><input
                                        {{ $demographic->traditional ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> 1. Medicare (traditional fee-for-service)</label><br>
                                <label class="form-check-label"><input {{ $demographic->hmo ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 2. Medicare (HMO/managed
                                    care/Advantage plan)</label>
                            </td>
                            <td>
                                <label class="form-check-label"><input
                                        {{ $demographic->compensation ? 'checked' : '' }} type="checkbox"
                                        class="form-check-input"> 5. Workers' compensation</label><br>
                                <label class="form-check-label"><input {{ $demographic->programs ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 6. Title programs (for example,
                                    Title III, V, or XX)</label><br>
                                <label class="form-check-label"><input {{ $demographic->government ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 7. Other government (for example,
                                    TriCare, VA)</label><br>
                                <label class="form-check-label"><input {{ $demographic->insurance ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 8. Private insurance</label>
                            </td>
                            <td>
                                <label class="form-check-label"><input {{ $demographic->privateHmo ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 9. Private HMO/managed
                                    care</label><br>
                                <label class="form-check-label"><input {{ $demographic->selfpay ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 10. Self-pay</label><br>
                                <label class="form-check-label"><input {{ $demographic->other ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> 11. Other (specify)</label><br>
                                <label class="form-check-label"><input {{ $demographic->unknown ? 'checked' : '' }}
                                        type="checkbox" class="form-check-input"> UK. Unknown</label><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- A1110. Language --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A1110. Language</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h4 class="m-0">A. What is your preferred language?</h4>
                    {{ $demographic->preferred }}
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 0;">
                    <h4 class="m-0">Do you need or want an interpreter to communicate with a doctor or health care
                        staff?</h4>
                    <label class="form-check-label" style="margin-right: 10px"> <input
                            {{ $demographic->interpater == 0 ? 'checked' : '' }} type="radio" class="form-check-input"
                            style="position: relative;top: 3px"> 0. No</label>
                    <label class="form-check-label" style="margin-right: 10px"> <input
                            {{ $demographic->interpater == 1 ? 'checked' : '' }} type="radio" class="form-check-input"
                            style="position: relative;top: 3px"> 1. Yes</label>
                    <label class="form-check-label"> <input {{ $demographic->interpater == 9 ? 'checked' : '' }}
                            type="radio" class="form-check-input" style="position: relative;top: 3px"> 9. Unable to
                        determine</label>
                </td>
            </tr>

            {{-- Start & Resumption Care Date --}}
            <tr>
                <td class="bg-secondary-subtle"><b>M0030. Start of Care Date</b></td>
                <td class="bg-secondary-subtle"><b>M0032. Resumption of Care Date</b></td>
            </tr>
            <tr>
                <td>{{ $demographic->startCareDate }}</td>
                <td>{{ $demographic->resumptionDate }}</td>
            </tr> --}}

            {{-- M0080. Discipline of Person Completing Assessment --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M0080. Discipline of Person Completing Assessment</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label class="form-check-label" style="margin-right: 8px"><input
                        {{ $demographic->rn ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1.
                    RN</label>
                <label class="form-check-label" style="margin-right: 8px"><input
                        {{ $demographic->pt ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2.
                    PT</label>
                <label class="form-check-label" style="margin-right: 8px"><input
                        {{ $demographic->slpSt ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3.
                    SLP/ST</label>
                <label class="form-check-label" style="margin-right: 8px"><input
                        {{ $demographic->ot ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4.
                    OT</label>
                </td>
            </tr>

            {{-- M0090. Date Assessment Completed --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M0090. Date Assessment Completed</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">{{ $demographic->assessmentDate }}</td>
            </tr>

            {{-- M0100. This Assessment is Currently Being Completed for the Following Reason --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M0100. This Assessment is Currently Being Completed for the Following Reason</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0;">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td>
                                <div>
                                    <b>Start/Resumption of Care</b><br>
                                    <label class="form-check-label"><input
                                            {{ $demographic->startofcare ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 1. <b>Start of care</b> – further visits
                                        planned</label><br>
                                    <label class="form-check-label"><input
                                            {{ $demographic->resumption ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 3. <b>Resumption of care</b> (after inpatient
                                        stay)</label>
                                </div>
                                <div class="mt-2">
                                    <b>Follow-Up</b><br>
                                    <label class="form-check-label"><input
                                            {{ $demographic->recertification ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 4. <b>Recertification (follow-up)
                                            reassessment</b></label><br>
                                    <label class="form-check-label"><input
                                            {{ $demographic->otherFollow ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 5. <b>Other follow-up</b></label>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <b>Transfer to an Inpatient Facility</b><br>
                                    <label class="form-check-label"><input
                                            {{ $demographic->nocharge ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 6. <b>Transferred to an inpatient facility</b> -
                                        patient not discharged from agency</label><br>
                                    <label class="form-check-label"><input
                                            {{ $demographic->traditional ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 7. <b>Transferred to an inpatient facility</b> -
                                        patient discharged from agency</label>
                                </div>
                                <div class="mt-2">
                                    <b>– Not to an Inpatient Facility</b><br>
                                    <label class="form-check-label">Discharge from Agency <input
                                            {{ $demographic->nocharge ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 8. <b>Death at home</b></label><br>
                                    <label class="form-check-label"><input
                                            {{ $demographic->traditional ? 'checked' : '' }} type="checkbox"
                                            class="form-check-input"> 9. <b>Discharge from agency</b></label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M0906 & M0102 --}}
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td class="bg-secondary-subtle" style="padding: 5px 10px">
                                <b>M0906. Discharge/Transfer/Death Date</b>
                                <p class="m-0" style="font-size: 13px;">Enter the date of the discharge, transfer, or death (at home) of the patient.</p>
                            </td>
                            <td class="bg-secondary-subtle" style="padding: 5px 10px">
                                <b>M0102. Date of Physician-ordered Start of Care (Resumption of Care)</b>
                                <p class="m-0" style="font-size: 13px;">Enter the date of the discharge, transfer, or death (at home) of the patient.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{ $demographic->dischargedDate }}
                            </td>
                            <td>
                                {{ $demographic->orderedDate }}
                                @if ($demographic->episodeDate)
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" checked> NA - No specific SOC/ROC date ordered by physician</label>
                                @endif
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M0104 & M0110 --}}
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td class="bg-secondary-subtle" style="padding: 5px 10px">
                                <b>M0104. Date of Referral</b>
                                <p class="m-0" style="font-size: 13px;">Indicate the date that the written or verbal referral for initiation or resumption of care was received by the HHA.</p>
                            </td>
                            <td class="bg-secondary-subtle" style="padding: 5px 10px">
                                <b>M0110. Episode Timing</b>
                                <p class="m-0" style="font-size: 13px;">Is the Medicare home health payment episode, for which this assessment will define a case mix group, an “early” episode or a “later” episode in the patient’s current sequence of adjacent Medicare home health payment episodes?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{ $demographic->referralDate }}
                            </td>
                            <td>
                                <label class="form-check-label" style="margin-right: 10px"> <input {{ $demographic->episodeTiming == 'Early' ? 'checked' : '' }} type="radio" class="form-check-input" style="position: relative;top: 3px"> 1. Early</label>
                                <label class="form-check-label" style="margin-right: 10px"> <input {{ $demographic->episodeTiming == 'Later' ? 'checked' : '' }} type="radio" class="form-check-input" style="position: relative;top: 3px"> 2. Later</label>
                                <label class="form-check-label"> <input {{ $demographic->episodeTiming == 'UK' ? 'checked' : '' }} type="radio" class="form-check-input" style="position: relative;top: 3px"> UK  Unknown</label>

                                @if ($demographic->episodeTiming == 'NA')
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" checked> NA Not Applicable: No Medicare case mix group to be defined by this assessment.</label>
                                @endif
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- A1250. Transportation (NACHC ©) --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A1250. Transportation (NACHC ©)</h4>
                    <p class="m-0" style="font-size: 13px">Has lack of transportation kept you from medical appointments, meetings, work, or from getting things needed for daily living?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td style="width: 60%;">
                                <div><input style="position: relative;" {{ $demographic->transportationA ? 'checked' : '' }} type="checkbox" class="form-check-input"> A. Yes, it has kept me from medical appointments or from getting my medications</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->transportationB ? 'checked' : '' }} type="checkbox"> B. Yes, it has kept me from non-medical meetings, appointments, work, or from getting things that I need</div>
                            </td>
                            <td>
                                <div><input style="position: relative;" {{ $demographic->transportationC ? 'checked' : '' }} type="checkbox" class="form-check-input"> C. No</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->transportationX ? 'checked' : '' }} type="checkbox"> X. Patient unable to respond</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->transportationY ? 'checked' : '' }} type="checkbox"> Y. Patient declines to respond</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M1000. From which of the following Inpatient... --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1000. From which of the following Inpatient Facilities was the patient discharged within the past 14 days?</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td>
                                <div><input style="position: relative;top:4px;" {{ $demographic->longTerm ? 'checked' : '' }} type="checkbox"> 1. Long-term nursing facility (NF)</div>
                                <div><input style="position: relative;top:4px;" {{ $demographic->skilled ? 'checked' : '' }} type="checkbox"> 2. Skilled nursing facility (SNF/TCU)</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->shortstay ? 'checked' : '' }} type="checkbox"> 3. Short-stay acute hospital (IPPS)</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->careHospital ? 'checked' : '' }} type="checkbox"> 4. Long-term care hospital (LTCH)</div>
                            </td>
                            <td>
                                <div><input style="position: relative;" {{ $demographic->inpatient ? 'checked' : '' }} type="checkbox" class="form-check-input"> 5. Inpatient rehabilitation hospital or unit (IRF)</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->psychiatric ? 'checked' : '' }} type="checkbox"> 6. Psychiatric hospital or unit</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->otherDischarge ? 'checked' : '' }} type="checkbox"> 7. Other (specify)</div>
                                <div><input style="position: relative;top:3px;" {{ $demographic->noapply ? 'checked' : '' }} type="checkbox"> NA <b>Patient was not discharged from an inpatient facility</b></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M1005. Inpatient Discharge Date --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1005. Inpatient Discharge Date <span style="font-weight: normal;">(most recent)</span></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {{ $demographic->dischargeDate }}
                    @if ($demographic->ukUnknown)
                    <label><input style="position: relative;top:4px;" type="checkbox" checked> UK - Unknow or Not Available</label>
                    @endif
                </td>
            </tr>

            {{-- M2301. Emergent Care --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M2301. Emergent Care</h4>
                    <p class="m-0" style="font-size: 13px;">At the time of or at any time since the most recent SOC/ROC assessment has the patient utilized a hospital emergency department (includes holding/observation status)?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{ $demographic->emergentCareNo ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0. <b>No</b></label></div>
                    <div><input {{ $demographic->emergentCareYes ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Yes, used hospital emergency department WITHOUT hospital admission</b></label></div>
                    <div><input {{ $demographic->emergentCareUsedHospital ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Yes, used hospital emergency department WITH hospital admission</b></label></div>
                    <div><input {{ $demographic->emergentCareUnknown ? 'checked' : '' }} type="checkbox" class="form-check-input"> UK <b>Unknown</b></label></div>
                </td>
            </tr>

            {{-- M2310. Reason for Emergent Care --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M2310. Reason for Emergent Care</h4>
                    <p class="m-0" style="font-size: 13px;">For what reason(s) did the patient seek and/or receive emergent care (with or without hospitalization)?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{ $demographic->emergentCareImproper ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Improper medication administration, adverse drug reactions, medication side effects, toxicity, anaphylaxis</b></label></div>
                    <div><input {{ $demographic->emergentCareHypo ? 'checked' : '' }} type="checkbox" class="form-check-input"> 10. <b>Hypo/Hyperglycemia, diabetes out of control</b></label></div>
                    <div><input {{ $demographic->emergentCareOther ? 'checked' : '' }} type="checkbox" class="form-check-input"> 19. <b>Other than above reasons</b></label></div>
                    <div><input {{ $demographic->emergentCareunknown ? 'checked' : '' }} type="checkbox" class="form-check-input"> UK <b>Reason unknown</b></label></div>
                </td>
            </tr>

            {{-- M2410 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <b>M2410.</b> To which <b>Inpatient Facility</b> has the patient been admitted?
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless align-top">
                        <tr>
                            <td style="padding-bottom: 0;"><input class="form-check-input" {{ $demographic->hospital ? 'checked' : '' }} type="checkbox"> 1. <b>Hospital</b></td>
                            <td style="padding-bottom: 0;"><input class="form-check-input" {{ $demographic->rehabilitation ? 'checked' : '' }} type="checkbox"> 2. <b>Rehabilitation facility</b></td>
                            <td style="padding-bottom: 0;"><input class="form-check-input" {{ $demographic->nursing ? 'checked' : '' }} type="checkbox"> 3. <b>Nursing home</b></td>
                            <td style="padding-bottom: 0;"><input class="form-check-input" {{ $demographic->hospice ? 'checked' : '' }} type="checkbox"> 4. <b>Hospice</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="padding-top: 0;">
                                <input style="position: relative;top:6px;" {{ $demographic->inpatient ? 'checked' : '' }} type="checkbox"> NA <b>No inpatient facility admission</b>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M2420. Discharge Disposition --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M2420. Discharge Disposition</h4>
                    <p class="m-0" style="font-size: 13px;">Where is the patient after discharge from your agency? (Choose only one answer.)</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input type="checkbox" {{ $demographic->remained ? 'checked' : '' }} class="form-check-input"> 1. <b>Patient remained in the community (without formal assistive services)</b></div>
                    <div><input type="checkbox" {{ $demographic->community ? 'checked' : '' }} class="form-check-input"> 2. <b>Patient remained in the community (with formal assistive services)</b></div>
                    <div><input type="checkbox" {{ $demographic->institutional ? 'checked' : '' }} class="form-check-input"> 3. <b>Patient transferred to a non-institutional hospice</b></div>
                    <div><input type="checkbox" {{ $demographic->patientMoved ? 'checked' : '' }} class="form-check-input"> 4. <b>Unknown because patient moved to a geographic location not served by this agency</b></div>
                    <div><input type="checkbox" {{ $demographic->otherUnknown ? 'checked' : '' }} class="form-check-input"> UK <b>Other unknown</b></div>
                </td>
            </tr>

            {{-- A2120 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A2120. Provision of Current Reconciled Medication List to Subsequent Provider at Transfer</h4>
                    <p class="m-0" style="font-size: 13px;">At the time of transfer to another provider, did your agency provide the patient’s current reconciled medication list to the subsequent provider?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input type="checkbox" {{ $demographic->reconciledNo ? 'checked' : '' }} class="form-check-input"> 0. <b>No – Current reconciled medication list not provided to the subsequent provider</b></div>
                    <div><input type="checkbox" {{ $demographic->reconciledYes ? 'checked' : '' }} class="form-check-input"> 1. <b>Yes – Current reconciled medication list provided to the subsequent provider</b></div>
                    <div><input type="checkbox" {{ $demographic->reconciledNa ? 'checked' : '' }} class="form-check-input"> 2. <b>NA –</b> The agency was not made aware of this transfer timely</div>
                </td>
            </tr>

            {{-- A2121 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A2121. Provision of Current Reconciled Medication List to Subsequent Provider at Discharge</h4>
                    <p class="m-0" style="font-size: 13px;">At the time of discharge to another provider, did your agency provide the patient’s current reconciled medication list to the subsequent provider?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input type="checkbox" {{ $demographic->subsequentProvider ? 'checked' : '' }} class="form-check-input"> 0. <b>No – Current reconciled medication list not provided to the subsequent provider</b></div>
                    <div><input type="checkbox" {{ $demographic->providerSubsequent ? 'checked' : '' }} class="form-check-input"> 1. <b>Yes – Current reconciled medication list provided to the subsequent provider</b></div>
                </td>
            </tr>

            {{-- A2122 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A2122 Route of Current Reconciled Medication List Transmission to Subsequent Provider</h4>
                    <p class="m-0" style="font-size: 13px;">Indicate the route(s) of transmission of the current reconciled medication list to the subsequent provider.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input type="checkbox" {{ $demographic->electronicHealth ? 'checked' : '' }} class="form-check-input"> <b>A. Electronic Health Record</b></div>
                    <div><input type="checkbox" {{ $demographic->healthInformation ? 'checked' : '' }} class="form-check-input"> <b>B. Health Information Exchange</b></div>
                    <div><input type="checkbox" {{ $demographic->inPerson ? 'checked' : '' }} class="form-check-input"> <b>C. Verbal (e.g., in-person, telephone, video conferencing)</b></div>
                    <div><input type="checkbox" {{ $demographic->paperBased ? 'checked' : '' }} class="form-check-input"> <b>D. Paper-based (e.g., fax, copies, printouts)</b></div>
                    <div><input type="checkbox" {{ $demographic->otherMethods ? 'checked' : '' }} class="form-check-input"> <b>E. Other Methods (e.g., texting, email, CDs)</b></div>
                </td>
            </tr>

            {{-- A2123 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A2123. Provision of Current Reconciled Medication List to Patient at Discharge</h4>
                    <p class="m-0" style="font-size: 13px;">At the time of discharge, did your agency provide the patient’s current reconciled medication list to the patient, family and/or caregiver?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input style="position: relative;top:3px;" type="radio" {{ $demographic->reconciledMedication===0 ? 'checked' : '' }} class="form-check-input"> 0. <b>No – Current reconciled medication list not provided to the patient, family, and/or caregiver</b></div>
                    <div><input style="position: relative;top:3px;" type="radio" {{ $demographic->reconciledMedication===1 ? 'checked' : '' }} class="form-check-input"> 1. <b>Yes – Current reconciled medication list provided to the patient, family, and/or caregiver</b></div>
                </td>
            </tr>

            {{-- A2124 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">A2124. Route of Current Reconciled Medication List Transmission to Patient</h4>
                    <p class="m-0" style="font-size: 13px;">Indicate the route(s) of transmission of the current reconciled medication list to the patient, family, and/or caregiver.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input type="checkbox" {{ $demographic->record ? 'checked' : '' }} class="form-check-input"> <b>A. Electronic Health Record</b></div>
                    <div><input type="checkbox" {{ $demographic->exchange ? 'checked' : '' }} class="form-check-input"> <b>B. Health Information Exchange</b></div>
                    <div><input type="checkbox" {{ $demographic->verbal ? 'checked' : '' }} class="form-check-input"> <b>C. Verbal</b> (e.g., in-person, telephone, video conferencing)</div>
                    <div><input type="checkbox" {{ $demographic->routePaperBased ? 'checked' : '' }} class="form-check-input"> <b>D. Paper-based</b> (e.g., fax, copies, printouts)</div>
                    <div><input type="checkbox" {{ $demographic->routeOther ? 'checked' : '' }} class="form-check-input"> <b>E. Other Methods</b> (e.g., texting, email, CDs)</div>
                </td>
            </tr>
        </table>
    </div>

    {{-- Hearing, Speech, and Vision --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Hearing, Speech, and Vision</h3></td>
            </tr>

            {{-- B0200. Hearing --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">B0200. Hearing</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p style="margin:0;margin-bottom: 10px;"><strong>Ability to hear</strong> (with hearing aid or hearing appliances if normally used)</p>
                    <div><input {{ $hearingVision->hearingAdequate===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0. <b>Adequate</b> – no difficulty in normal conversation, social interaction, listening to TV</div>
                    <div><input {{ $hearingVision->hearingMinimal===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Minimal difficulty</b> – difficulty in some environments (e.g., when person speaks softly, or setting is noisy)</div>
                    <div><input {{ $hearingVision->hearingModerate===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Moderate difficulty</b> – speaker has to increase volume and speak distinctly</div>
                    <div><input {{ $hearingVision->hearingHighlyImpaired===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>Highly impaired</b> – absence of useful hearing</div>
                </td>
            </tr>

            {{-- B1000. Vision --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">B1000. Vision</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p style="margin:0;margin-bottom: 10px;"><strong>Ability to see in adequate light</strong> (with glasses or other visual appliances)</p>
                    <div><input {{ $hearingVision->visionAdequate===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0. <b>Adequate</b> – sees fine detail, such as regular print in newspapers/books</div>
                    <div><input {{ $hearingVision->visionImpaired===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Impaired</b> – sees large print, but not regular print in newspapers/books</div>
                    <div><input {{ $hearingVision->visionModerate===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Moderate impaired</b> – limited vision; not able to see newspaper headlines but can identify objects</div>
                    <div><input {{ $hearingVision->visionHighlyImpaired===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>Highly impaired</b> – object identification in question, but eyes appear to follow objects</div>
                    <div><input {{ $hearingVision->visionSeverelyImpaired===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4. <b>4. Severely impaired</b> – no vision or sees only light, colors or shapes; eyes do not appear to follow objects</div>
                </td>
            </tr>

            {{-- B1300. Health Literacy --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">B1300. Health Literacy (From Creative Commons ©)</h4>
                    <p class="m-0" style="font-size: 13px;">How often do you need to have someone help you when you read instructions, pamphlets, or other written material from your doctor or pharmacy?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td colspan="3" style="padding-bottom: 0;"><b>Ability to see in adequate light</b> (with glasses or other visual appliances)</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 5px;">
                                <div><input {{ $hearingVision->healthLiteracyNever===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0. <b>Never</b></div>
                                <div><input {{ $hearingVision->healthLiteracyRarely===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Rarely</b></div>
                                <div><input {{ $hearingVision->healthLiteracySometimes===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Sometimes</b></div>
                            </td>
                            <td style="padding-top: 5px;">
                                <div><input {{ $hearingVision->healthLiteracyOften===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>Often</b></div>
                                <div><input {{ $hearingVision->healthLiteracyAlways===4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4. <b>Always</b></div>
                            </td>
                            <td style="padding-top: 5px;">
                                <div><input {{ $hearingVision->healthLiteracyPatient===7 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 7. <b>Patient declines to respond</b></div>
                                <div><input {{ $hearingVision->healthLiteracyPatientUnable===8 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 8. <b>Patient unable to respond</b></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- Cognitive, Mood, and Behavior --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Cognitive, Mood, and Behavior</h3></td>
            </tr>

            {{-- C0100 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">C0100. Should Brief Interview for Mental Status (C0200-C0500) be Conducted?</h4>
                    <p class="m-0" style="font-size: 13px;">Attempt to conduct interview with all patients.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td style="padding-top: 5px;">
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->mentalStatus===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No</b> (patient is rarely/never understood)</div>
                            </td>
                            <td style="padding-top: 5px;">
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->mentalStatus===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Yes</b></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- Brief Interview for Mental Status --}}
            <tr style="margin: 10px 0;">
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">Brief Interview for Mental Status (BIMS)</h4>
                </td>
            </tr>
            <tr><td colspan="2" style="padding: 5px;"></td></tr>

            {{-- C0200. Repetition of Three Words --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">C0200. Repetition of Three Words</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td colspan="4" style="padding-bottom: 0;">
                                Ask patient: “I am going to say three words for you to remember. Please repeat the words after I have said all three. The words are: sock, blue, and bed. Now tell me the three words.”<br>
                                <b>Number of words repeated after first attempt</b>
                            </td>
                        </tr>
                        <tr>
                            <td><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->repetition===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>None</b></td>
                            <td><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->repetition===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>One</b></td>
                            <td><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->repetition===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Two</b></td>
                            <td><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->repetition===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Three</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="padding-top: 0">After the patient's first attempt, repeat the words using cues ("sock, something to wear; blue, a color; bed, a piece offurniture"). You may repeat the words up to two more times.</td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- C0300. Temporal Orientation --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">C0300. Temporal Orientation <span style="font-weight:400;">(Orientation to year, month, and day)</span></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td colspan="4" style="padding-bottom: 0;">
                                Ask patient: "Please tell me what year it is right now."<br>
                                A. <b>Able to report correct year</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->temporal===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Missed by > 5 years</b> or no answer</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->temporal===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Missed by 2-5 years</b></td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->temporal===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Missed by 1 year</b></td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->temporal===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Correct</b></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="padding-top: 0">After the patient's first attempt, repeat the words using cues ("sock, something to wear; blue, a color; bed, a piece offurniture"). You may repeat the words up to two more times.</td>
                        </tr>

                        <tr>
                            <td colspan="4" style="padding-bottom: 0;border-top: 1px solid #000;">
                                Ask patient: "What month are we in right now?"<br>
                                B. <b>Able to report correct month</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->month===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Missed by > 1 month</b> or no answer</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->month===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Missed by 6 days to 1 month</b></td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->month===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Accurate within 5 days</b></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td colspan="4" style="padding-bottom: 0;border-top: 1px solid #000;">
                                Ask patient: "What day of the week is today?"<br>
                                C. <b>Able to report correct day of the week</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->day===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Incorrect</b> or no answer</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->day===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Correct</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- C0400. Recall --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">C0400. Recall</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td colspan="3" style="padding-bottom: 0;">
                                Ask patient: "Let's go back to an earlier question. What were those three words that I asked you to repeat?" If unable to remember a word, give cue (something to wear; a color; a piece of furniture) for that word.<br>
                                A. <b>Able to recall “sock”</b>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recall===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No</b> could not recall</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recall===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Yes, after cueing</b> ("something to wear")</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recall===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Yes, no cue required</b></td>
                        </tr>

                        <tr>
                            <td colspan="3" style="padding-bottom: 0;border-top: 1px solid #000;">A. <b>Able to recall “blue”</b></td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recallBlue===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No</b> - could not recall</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recallBlue===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Yes, after cueing</b> ("a color")</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recallBlue===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Yes, no cue required</b></td>
                        </tr>

                        <tr>
                            <td colspan="3" style="padding-bottom: 0;border-top: 1px solid #000;">A. <b>Able to recall “bed”</b></td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recallBed===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No</b> - could not recall</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recallBed===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Yes, after cueing</b> ("a piece of furniture")</td>
                            <td style="vertical-align: top;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->recallBed===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Yes, no cue required</b></td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- C0500. BIMS Summary Score --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">C0500. BIMS Summary Score</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="m-0" style="margin-bottom:10px;"><b>Add scores</b> for questions C0200-C0400 and fill in total score (00-15)<br><b>Enter 99 if the patient was unable to complete the interview</b></p>
                    {{$cognitiveMoodBehavior->addScore}}
                </td>
            </tr>

            {{-- C1310. Signs and Symptoms of Delirium --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">C1310. Signs and Symptoms of Delirium (from CAM©)</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>Code after completing</b> Brief Interview for Mental Status and reviewing medical record.</td>
            </tr>
            <tr>
                <td colspan="2" style="border-top: 1px solid #000;padding-bottom:0;">
                    A. <b>Acute Onset of Mental Status Change</b><br>
                    <b>Is there evidence of an acute change in mental status</b> from the patient's baseline?
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->acute===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No</b></td>
                            <td><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->acute===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Yes</b></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
                    <h4 class="m-0">Coding:</h4>
                    <ul style="margin: 0;padding-left:30px;">
                        <li>0. <b>Behavior not present</b></li>
                        <li>1. <b>Behavior continuously present, does not fluctuate</b></li>
                        <li>2. <b>Behavior present, fluctuates</b> (comes and goes, changes in severity)</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td style="width: 50px;vertical-align:top;">{{ $cognitiveMoodBehavior->inattention }}</td>
                            <td>B. <b>Inattention</b> – Did the patient have difficulty focusing attention, for example, being easily distractible or having difficulty keeping track of what was being said?</td>
                        </tr>
                        <tr>
                            <td style="width: 50px;vertical-align:top;">{{ $cognitiveMoodBehavior->disorganized }}</td>
                            <td>C. <b>Disorganized thinking</b> – Was the patient's thinking disorganized or incoherent (rambling or irrelevant conversation, unclear or illogical flow of ideas, or unpredictable switching from subject to subject)?</td>
                        </tr>
                        <tr>
                            <td style="width: 50px;vertical-align:top;">{{ $cognitiveMoodBehavior->altered }}</td>
                            <td>
                                D. <b>Altered level of consciousness</b> – Did the patient have altered level of consciousness, as indicated by any of the following criteria?
                                <ul style="list-style-type:square;margin:0;margin-top:10px;padding-left:30px;">
                                    <li><b>vigilant</b> – startled easily to any sound or touch</li>
                                    <li><b>lethargic</b> – repeatedly dozed off when being asked questions, but responded to voice or touch</li>
                                    <li><b>stuporous</b> – very difficult to arouse and keep aroused for the interview</li>
                                    <li><b>comatose</b> – could not be aroused</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M1700. Cognitive Functioning --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1700. Cognitive Functioning</h4>
                    <p class="m-0" style="font-size: 13px;">Patient's current (day of assessment) level of alertness, orientation, comprehension, concentration, and immediate memory for simple commands.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{ $cognitiveMoodBehavior->alert===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0. <b>Alert/oriented, able to focus and shift attention, comprehends and recalls task directions independently.</b></div>
                    <div><input {{ $cognitiveMoodBehavior->prompting===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Requires prompting (cueing, repetition, reminders) only under stressful or unfamiliar conditions.</b></div>
                    <div><input {{ $cognitiveMoodBehavior->assistance===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Requires assistance and some direction in specific situations (for example, on all tasks involving shifting of attention) or consistently requires low stimulus environment due to distractibility.</b></div>
                    <div><input {{ $cognitiveMoodBehavior->considerable===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>Requires considerable assistance in routine situations. Is not alert and oriented or is unable to shift attention and recall directions more than half the time.</b></div>
                    <div><input {{ $cognitiveMoodBehavior->dependent===4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4. <b>Totally dependent due to disturbances such as constant disorientation, coma, persistent vegetative state, or delirium.</b></div>
                </td>
            </tr>

            {{-- M1710. When Confused --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1710. When Confused</h4>
                    <p class="m-0" style="font-size: 13px;">(Reported or Observed Within the Last 14 Days):</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenConfused===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Never</b></div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenConfused===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>In new or complex situations only</b></div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenConfused===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>On awakening or at night only</b></div>
                            </td>
                            <td>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenConfused===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>During the day and evening, but not constantly</b></div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenConfused===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Constantly</b></div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenConfused===5 ? 'checked' : '' }} type="radio" class="form-check-input"> NA <b>Patient nonresponsive</b></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M1720. When Anxious --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1720. When Anxious</h4>
                    <p class="m-0" style="font-size: 13px;">(Reported or <u>O</u>bserved <u>W</u>ithin the <u>L</u>ast 14 <u>D</u>ays):</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td style="vertical-align: top;">
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenAnxious===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>None of the time</b></div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenAnxious===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Less often than daily</b></div>
                            </td>
                            <td style="vertical-align: top;">
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenAnxious===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Daily, but not constantly</b></div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenAnxious===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>All of the time</b></div>
                            </td>
                            <td style="vertical-align: top;">
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->whenAnxious===4 ? 'checked' : '' }} type="radio" class="form-check-input"> NA. <b>Patient nonresponsive</b></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- D0150. Patient Mood Interview --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">D0150. Patient Mood Interview (PHQ-2 to 9)</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <b>Say to patient: <i>"Over the last 2 weeks, have you been bothered by any of the following problems?"</i></b>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-top: 1px solid #000;border-bottom: 1px solid #000;">
                    If symptom is present, enter 1 (yes) in column 1, Symptom Presence.<br>
                    If yes in column 1, then ask the patient: "About how often have you been bothered by this?"<br>
                    Read and show the patient a card with the symptom frequency choices. Indicate response in column 2, Symptom Frequency.
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td style="vertical-align: top;">
                                <h4 class="m-0" style="margin-bottom: 8px;">1. Symptom Presence</h4>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->symptom===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No</b> (enter 0 in column 2)</div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->symptom===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Yes</b> (enter 0-3 in column 2)</div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->symptom===9 ? 'checked' : '' }} type="radio" class="form-check-input"> 9. <b>No response</b> (leave column 2 blank)</div>
                            </td>
                            <td style="vertical-align: top;">
                                <h4 class="m-0" style="margin-bottom: 8px;">2. Symptom Frequency</h4>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->frequency===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Never or 1 day</b></div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->frequency===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>2-6 days</b> (several days)</div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->frequency===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>7-11 days</b> (half or more of the days)</div>
                                <div><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->frequency===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>12-14 days</b> (nearly every day)</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0" style="border-top: 1px solid #000;">
                        <tr>
                            <td><div><input {{ $cognitiveMoodBehavior->interest===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> A. <b>Little interest or pleasure in doing things</b></div></td>
                            <td><div><input {{ $cognitiveMoodBehavior->hopeless===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> B. <b>Feeling down, depressed, or hopeless</b></div></td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- either D0150A2 or D0150B2 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    If either D0150A2 or D0150B2 is coded 2 or 3, CONTINUE asking the questions below. If not, END the PHQ interview.
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{ $cognitiveMoodBehavior->trouble ? 'checked' : '' }} type="checkbox" class="form-check-input"> C. <b>Trouble falling or staying asleep, or sleeping too much</b></div>
                    <div><input {{ $cognitiveMoodBehavior->tired ? 'checked' : '' }} type="checkbox" class="form-check-input"> D. <b>Feeling tired or having little energy</b></div>
                    <div><input {{ $cognitiveMoodBehavior->appetite ? 'checked' : '' }} type="checkbox" class="form-check-input"> E. <b>Poor appetite or overeating</b></div>
                    <div><input {{ $cognitiveMoodBehavior->bad ? 'checked' : '' }} type="checkbox" class="form-check-input"> F. <b>Feeling bad about yourself – or that you are a failure or have let yourself or your family down</b></div>
                    <div><input {{ $cognitiveMoodBehavior->concentrating ? 'checked' : '' }} type="checkbox" class="form-check-input"> G. <b>Trouble concentrating on things, such as reading the newspaper or watching television</b></div>
                    <div><input {{ $cognitiveMoodBehavior->speaking ? 'checked' : '' }} type="checkbox" class="form-check-input"> H. <b>Moving or speaking so slowly that other people could have noticed. Or the opposite – being so fidgety or restless that you have been moving around a lot more than usual</b></div>
                    <div><input {{ $cognitiveMoodBehavior->thoughts ? 'checked' : '' }} type="checkbox" class="form-check-input"> I. <b>Thoughts that you would be better off dead, or of hurting yourself in some way</b></div>
                </td>
            </tr>

            {{-- D0160. Total Severity Score --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">D0160. Total Severity Score</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td style="width: 40px;">{{ $cognitiveMoodBehavior->totalScore }}</td>
                            <td><b>Add scores for all frequency responses in Column 2</b>, Symptom Frequency. Total score must be between 00 and 27. Enter 99 if unable to complete interview (i.e., Symptom Frequency is blank for 3 or more required items)</td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- D0160. Total Severity Score --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">D0700. Social Isolation</h4>
                    <p class="m-0" style="font-size: 13px;">How often do you feel lonely or isolated from those around you?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td style="padding-bottom: 0;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->socialIsolation===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Never</b></td>
                            <td style="padding-bottom: 0;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->socialIsolation===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Rarely</b></td>
                            <td style="padding-bottom: 0;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->socialIsolation===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Sometimes</b></td>
                            <td style="padding-bottom: 0;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->socialIsolation===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Often</b></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 0;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->socialIsolation===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Always</b></td>
                            <td style="padding-top: 0;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->socialIsolation===7 ? 'checked' : '' }} type="radio" class="form-check-input"> 7. <b>Patient declines to respond</b></td>
                            <td style="padding-top: 0;"><input style="position: relative;top:3px;" {{ $cognitiveMoodBehavior->socialIsolation===8 ? 'checked' : '' }} type="radio" class="form-check-input"> 8. <b>Patient unable to respond</b></td>
                            <td style="padding-top: 0;"></td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- M1740. Cognitive, Behavioral, and Psychiatric --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1740. Cognitive, Behavioral, and Psychiatric Symptoms <span style="font-weight: 400;">that are demonstrated at least once a week (Reported or Observed):</span></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{ $cognitiveMoodBehavior->memoryDeficit===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Memory deficit:</b> failure to recognize familiar persons/places, inability to recall events of past 24 hours,significant memory loss so that supervision is required</div>
                    <div><input {{ $cognitiveMoodBehavior->impaired===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Impaired decision-making:</b> failure to perform usual ADLs or IADLs, inability to appropriately stop activities,jeopardizes safety through actions</div>
                    <div><input {{ $cognitiveMoodBehavior->disruption===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>Verbal disruption:</b> yelling, threatening, excessive profanity, sexual references, etc.</div>
                    <div><input {{ $cognitiveMoodBehavior->aggression===4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4. <b>Physical aggression:</b>: aggressive or combative to self and others (for example, hits self, throws objects, punches,dangerous maneuvers with wheelchair or other objects)</div>
                    <div><input {{ $cognitiveMoodBehavior->infantile===5 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 5. <b>Disruptive, infantile, or socially inappropriate behavior</b> (excludes verbal actions)</div>
                    <div><input {{ $cognitiveMoodBehavior->delusional===6 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 6. <b>Delusional, hallucinatory, or paranoid behavior</b></div>
                    <div><input {{ $cognitiveMoodBehavior->noa===7 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 7. <b>None of the above behaviors demonstrated</b></div>
                </td>
            </tr>

            {{-- M1745. Frequency of Disruptive Behavior Symptoms --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1745. Frequency of Disruptive Behavior Symptoms <span style="font-weight: 400;">(Reported or Observed):</span></h4>
                    <p class="m-0" style="font-size:13px;">Any physical, verbal, or other disruptive/dangerous symptoms that are injurious to self or others or jeopardize personal safety.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td style="padding-bottom: 0;"><input {{ $cognitiveMoodBehavior->never===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0. <b>Never</b></td>
                            <td style="padding-bottom: 0;"><input {{ $cognitiveMoodBehavior->lessMonth===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Less than once a month</b></td>
                            <td style="padding-bottom: 0;"><input {{ $cognitiveMoodBehavior->onesMonth===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Once a month</b></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 0;"><input {{ $cognitiveMoodBehavior->severalTimes===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>Several times each month</b></td>
                            <td style="padding-top: 0;"><input {{ $cognitiveMoodBehavior->severalWeek===4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4. <b>Several times a week</b></td>
                            <td style="padding-top: 0;"><input {{ $cognitiveMoodBehavior->daily===5 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 5. <b>At least daily</b></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- NEUROLOGICAL STATUS --}}
    {{-- <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">NEUROLOGICAL STATUS</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="m-0"><b>No Problem</b></p>
                    <p class="m-0">Diagnosed disorder(s) of neurological system (type):</p>
                    {{$cognitiveMoodBehavior->diagnosed_disorder_neurological_system}}
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0;">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td>
                                <div><input {{ $cognitiveMoodBehavior->onesMonth===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> History of a traumatic brain injury</div>
                            </td>
                            <td><b>Date of injury:</b></td>
                            <td>
                                <label class="input-group clean-input-group">
                                    <span class="input-group-text fw-medium">(Type):</span>
                                    <input type="text" id="" name="injury_type" class="form-control">
                                </label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div> --}}

    {{-- Preferences for Customary Routine Activities --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Preferences for Customary Routine Activities</h3></td>
            </tr>

            {{-- M1100. Patient Living Situation --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1100. Patient Living Situation</h4>
                    <p class="m-0" style="font-size:13px;">Which of the following best describes the patient's residential circumstance and availability of assistance?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 5px;">
                    <table class="table table-bordered align-middle default-td m-0">
                        <thead>
                        <tr>
                        <td rowspan="2"><b>Living Arrangement</b></td>
                        <td colspan="5" class="text-center"><b>Availability of Assistance</b></td>
                        </tr>
                        
                        <tr>
                        <td><b>Around the Clock</b></td>
                        <td><b>Regular Daytime</b></td>
                        <td><b>Regular Nighttime</b></td>
                        <td><b>Occasional/ Short-Term Assistance</b></td>
                        <td><b>No Assistance Available</b></td>
                        </tr>
                        </thead>
                        
                        <tbody>
                        <tr>
                        <td>A. <b>Patient lives alone</b></td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesAlone===1 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 01</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesAlone===2 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio"class="form-check-input"> 02</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesAlone===3 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 03</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesAlone===4 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 04</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesAlone===5 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 05</label>
                        </td>
                        </tr>
                        
                        
                        <tr>
                        <td>B. <b>Patient lives with other person(s) in the home</b></td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesWithOthers===6 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 06</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesWithOthers===7 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 07</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesWithOthers===8 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio"class="form-check-input"> 08</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesWithOthers===9 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 09</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesWithOthers===10 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 10</label>
                        </td>
                        </tr>
                        <tr>
                        <td>C. <b>Patient lives in congregate situation</b> (for example, assisted living, residential care home)</td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesInCongregate===11 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 11</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesInCongregate===12 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 12</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesInCongregate===13 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 13</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesInCongregate===14 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 14</label>
                        </td>
                        <td>
                        <label class="form-check-label"><input {{ $preference->livesInCongregate===15 ? 'checked' : '' }} style="position: relative;top:3px;" type="radio" class="form-check-input"> 15</label>
                        </td>
                        </tr>
                        
                        </tbody>
                        </table>
                </td>
            </tr>

            {{-- SOC/ROC --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">SOC/ROC</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="bg-secondary-subtle" style="border-top: 1px solid #000;">
                    <h4 class="m-0">M2102. Types and Sources of Assistance</h4>
                    <p class="m-0" style="font-size: 13px">Determine the ability and willingness of non-agency caregivers (such as family members, friends, or privately paid caregivers) to provide assistance for the following activities, if assistance is needed. Excludes all care by your agency staff.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="m-0" style="margin-bottom: 10px;">f. <b>Supervision and safety</b> (due to cognitive impairment)</p>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->supervisionSafety===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No assistance
                    needed – patient is independent or does not have needs in this area</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->supervisionSafety===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Non-agency
                    caregiver(s) currently provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->supervisionSafety===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Non-agency
                    caregiver(s) need training/supportive services to provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->supervisionSafety===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Non-agency
                    caregiver(s) are not likely to provide assistance OR it is unclear if they will provide
                    assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->supervisionSafety===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Assistance
                    needed, but no non-agency caregiver(s) available</b></label></div>
                </td>
            </tr>

             {{-- Discharge --}}
             <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">Discharge</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="bg-secondary-subtle" style="border-top: 1px solid #000;">
                    <h4 class="m-0">M2102. Types and Sources of Assistance</h4>
                    <p class="m-0" style="font-size: 13px">Determine the ability and willingness of non-agency caregivers (such as family members, friends, or privately paid caregivers) to provide assistance for the following activities, if assistance is needed. Excludes all care by your agency staff.</p>
                </td>
            </tr>
            {{-- a. ADL assistance --}}
            <tr>
                <td colspan="2">
                    <p class="mt-0 mb-2">a. <b>ADL assistance</b> (for example, transfer/ambulation, bathing, dressing, toileting, eating/feeding)</p>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->adlAssistance===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No assistance
                    needed – patient is independent or does not have needs in this area</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->adlAssistance===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Non-agency
                    caregiver(s) currently provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->adlAssistance===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Non-agency
                    caregiver(s) need training/supportive services to provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->adlAssistance===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Non-agency
                    caregiver(s) are not likely to provide assistance OR it is unclear if they will provide
                    assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->adlAssistance===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Assistance
                    needed, but no non-agency caregiver(s) available</b></label></div>
                </td>
            </tr>
            {{-- c. Medication administration --}}
            <tr>
                <td colspan="2" style="border-top:1px solid #000;">
                    <p class="mt-0 mb-2">c. <b>Medication administration</b> (for example, oral, inhaled, or injectable)</p>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicationAdministration===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No assistance
                    needed – patient is independent or does not have needs in this area</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicationAdministration===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Non-agency
                    caregiver(s) currently provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicationAdministration===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Non-agency
                    caregiver(s) need training/supportive services to provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicationAdministration===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Non-agency
                    caregiver(s) are not likely to provide assistance OR it is unclear if they will provide
                    assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicationAdministration===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Assistance
                    needed, but no non-agency caregiver(s) available</b></label></div>
                </td>
            </tr>
            {{-- d. Medical procedures/treatments --}}
            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <p class="mt-0 mb-2">d. <b>Medical procedures/treatments</b> (for example, changing wound dressing, home exercise program)</p>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicalProcedures===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No assistance
                    needed – patient is independent or does not have needs in this area</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicalProcedures===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Non-agency
                    caregiver(s) currently provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicalProcedures===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Non-agency
                    caregiver(s) need training/supportive services to provide assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicalProcedures===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Non-agency
                    caregiver(s) are not likely to provide assistance OR it is unclear if they will provide
                    assistance</b></label></div>
                    <div><label><input style="position: relative;top:3px;" {{ $preference->medicalProcedures===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Assistance
                    needed, but no non-agency caregiver(s) available</b></label></div>
                </td>
            </tr>
            {{-- f. Supervision and safety --}}
            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <p class="mt-0 mb-2">f. <b>Supervision and safety</b> (for example, due to cognitive impairment)</p>
                    <div><label>
                    <input style="position: relative;top:3px;" {{ $preference->supervisionSafety===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No assistance
                    needed – patient is independent or does not have needs in this area</b>
                    </label>
                    </div>
                    <div><label>
                    <input style="position: relative;top:3px;" {{ $preference->supervisionSafety===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Non-agency
                    caregiver(s) currently provide assistance</b>
                    </label>
                    </div>
                    <div><label>
                    <input style="position: relative;top:3px;" {{ $preference->supervisionSafety===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Non-agency
                    caregiver(s) need training/supportive services to provide assistance</b>
                    </label>
                    </div>
                    <div><label>
                    <input style="position: relative;top:3px;" {{ $preference->supervisionSafety===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Non-agency
                    caregiver(s) are not likely to provide assistance OR it is unclear if they will provide
                    assistance</b>
                    </label>
                    </div>
                    <div><label>
                    <input style="position: relative;top:3px;" {{ $preference->supervisionSafety===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Assistance
                    needed, but no non-agency caregiver(s) available</b>
                    </label>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- CARE PREFERENCES/PATIENT'S PERSONAL GOALS --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">CARE PREFERENCES/PATIENT'S PERSONAL GOALS</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    Did the @if ($preference->patient) Patient @endif
                    @if ($preference->representative) Representative @endif
                    @if ($preference->other) {{ $preference->other }} @endif
                    <span style="font-weight: 500;">communicate care preferences that involve the home health services provided? For example, preferred visit times or days, etc.</span>
                    <label><input style="position: relative;top:3px;" {{ $preference->supervisionSafety===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                    <label><input style="position: relative;top:3px;" {{ $preference->supervisionSafety===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                    <label>If yes, list preferences:</label>
                    <div>{!! $preference->preferences !!}</div>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    Did the @if ($preference->communicationPatient) Patient @endif
                    @if ($preference->communicationRepresentative) Representative @endif
                    @if ($preference->communicationOther) {{ $preference->communicationOther }} @endif

                    <span style="font-weight: 500;">communicate any specific <u>personal goal(s)</u> the patient would like to achieve from this home health admission? For example, in the future they would like to shop at the mall, shop for their own food or go to a family wedding etc.</span>
                    <label><input style="position: relative;top:3px;" {{ $preference->communicationStatus===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                    <label><input style="position: relative;top:3px;" {{ $preference->communicationStatus===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                    <div>
                        <span style="font-weight: 500;">If yes, the</span>
                        @if ($preference->personalGoalPatient) Patient @endif
                        @if ($preference->personalGoalRepresentative) Representative @endif
                        @if ($preference->otherDiscussed) {{ $preference->otherDiscussed }} @endif
                        <span style="font-weight: 500;">discussed/communicated about the goal(s) with the assessing clinician and:</span>
                        <div><label><input style="position: relative;top:3px;" {{ $preference->agreementStatus===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Agreed their personal goal(s) was realistic based on the patient's health status.</label></div>
                        <div><label><input style="position: relative;top:3px;" {{ $preference->agreementStatus===2 ? 'checked' : '' }} type="radio" class="form-check-input"> Agreed their personal goal(s) needed to be modified based on the patient's health status.</label></div>
                        <div><label><input style="position: relative;top:3px;" {{ $preference->agreementStatus===3 ? 'checked' : '' }} type="radio" class="form-check-input"> Agreed to and identified actions/interventions the patient is willing to safely implement, so the patient will be able to meet their goal(s) by the anticipated discharge date.</label></div>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <span style="font-weight: 500;">The</span> @if ($preference->goalWrittenByPatient) Patient @endif
                    @if ($preference->goalWrittenByRepresentative) Representative @endif
                    @if ($preference->otherGoalWritten) {{ $preference->otherGoalWritten }} @endif
                    <span style="font-weight: 500;">helped write a measurable goal(s), understandable to all stakeholders.</span>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <span style="font-weight: 500;">The</span> @if ($preference->goalAgreementByPatient) Patient @endif
                    @if ($preference->goalAgreementByRepresentative) Representative @endif
                    @if ($preference->otherGoalAgreement) {{ $preference->otherGoalAgreement }} @endif
                    <span style="font-weight: 500;">was informed, appeared to understand and agreed the personal goal(s) would be added to the patient's individualized plan of care and submitted to the physician responsible for reviewing and signing the plan of care.</span>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;padding:0;">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td><span style="font-weight: 500;">Other 1</span> {{$preference->otherField1}}</td>
                            <td><span style="font-weight: 500;">Other 2</span> {{$preference->otherField2}}</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <b>Resumption of Care:</b>
                    <label><input style="position: relative;top:3px;" {{ $preference->resumptionofCare===1 ? 'checked' : '' }} type="radio" class="form-check-input"> No change(s)</label>
                    <label><input style="position: relative;top:3px;" {{ $preference->resumptionofCare===2 ? 'checked' : '' }} type="radio" class="form-check-input"> Goal(s) changed</label>
                    <br>
                    <label>List all the patient's goal(s) and indicate if <b>E</b>-Existing, <b>N</b>-New, <b>M</b>-Modified existing or <b>D</b>-Discontinued</label>
                    <br>
                    {!! $preference->discontinued !!}
                </td>
            </tr>
        </table>
    </div>

    {{-- STRENGTHS/LIMITATIONS (Continued) --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">STRENGTHS/LIMITATIONS (Continued)</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <span style="font-weight: 500;">Does the patient's limitation(s) affect their safety and/or progress?</span>
                    <label><input style="position: relative;top:3px;" {{ $preference->platsp===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                    <label><input style="position: relative;top:3px;" {{ $preference->platsp===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                    <span style="font-weight: 500;">If yes, explain:</span><br>
                    {!! $preference->platspExplain !!}                    
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <span style="font-weight: 500;">Indications for Home Health Aides:</span>
                    <label><input style="position: relative;top:3px;" {{ $preference->ifhha===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                    <label><input style="position: relative;top:3px;" {{ $preference->ifhha===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                    <label><input style="position: relative;top:3px;" {{ $preference->ifhha===3 ? 'checked' : '' }} type="radio" class="form-check-input"> Refused</label>
                    <span style="font-weight: 500;">Order obtained:</span>
                    <label><input style="position: relative;top:3px;" {{ $preference->ifhhaOo===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                    <label><input style="position: relative;top:3px;" {{ $preference->ifhhaOo===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                    <span style="font-weight: 500;">Reason for need:</span><br>
                    {!! $preference->ifhhaExplain !!}                    
                </td>
            </tr>
        </table>
    </div>

    {{-- LIVING ARRANGEMENTS/SUPPORTIVE ASSISTANCE --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">LIVING ARRANGEMENTS/SUPPORTIVE ASSISTANCE</h3></td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 0;">
                    <table class="table table-borderless align-middle m-0">
                        <tr><td colspan="4" style="padding-bottom: 0"><b>Safety Measures:</b></td></tr>
                        <tr>
                            <td style="padding-top: 0;padding-bottom: 0;">
                                <div><input {{ $preference->bleedingPrecautions ? 'checked' : '' }} type="checkbox" class="form-check-input"> Bleeding precautions</div>
                                <div><input {{ $preference->siderailsUp ? 'checked' : '' }} type="checkbox" class="form-check-input"> Siderails up</div>
                                <div><input {{ $preference->infectionControlMeasures ? 'checked' : '' }} type="checkbox" class="form-check-input"> Infection control measures</div>
                            </td>
                            <td style="padding-top: 0;padding-bottom: 0;">
                                <div><input {{ $preference->precautions ? 'checked' : '' }} type="checkbox" class="form-check-input"> O<sub>2</sub>, precautions</div>
                                <div><input {{ $preference->elevateHead ? 'checked' : '' }} type="checkbox" class="form-check-input"> Elevate head of bed</div>
                                <div><input {{ $preference->precautionsWalker ? 'checked' : '' }} type="checkbox" class="form-check-input"> Walker/cane</div>
                            </td>
                            <td style="padding-top: 0;padding-bottom: 0;">
                                <div><input {{ $preference->seizurePrecautions ? 'checked' : '' }} type="checkbox" class="form-check-input"> Seizure precautions</div>
                                <div><input {{ $preference->hrSupervision ? 'checked' : '' }} type="checkbox" class="form-check-input"> 24 hr. supervision</div>
                                <div><input {{ $preference->fallPrecautions ? 'checked' : '' }} type="checkbox" class="form-check-input"> Fall precautions</div>
                            </td>
                            <td style="padding-top: 0;padding-bottom: 0;">
                                <div><input {{ $preference->clearPathways ? 'checked' : '' }} type="checkbox" class="form-check-input"> Clear pathways</div>
                                <div><input {{ $preference->aspiration ? 'checked' : '' }} type="checkbox" class="form-check-input"> Aspiration precautions</div>
                                <div><input {{ $preference->precautionsLock ? 'checked' : '' }} type="checkbox" class="form-check-input"> Lock w/c with transfers</div>
                            </td>
                        </tr>
                        <tr><td colspan="4" style="padding-top: 0"><span style="font-weight: 500;">Other</span> {{ $preference->otherPrecaution }}</td></tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <div>
                        <b>Is there a need for a Fall Risk Plan?</b>
                        <label><input style="position: relative;top:3px;" {{ $preference->itanffrp===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                        <label><input style="position: relative;top:3px;" {{ $preference->itanffrp===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                        <b style="margin-left: 15px;">Safety plan(s) indicated?</b>
                        <label><input style="position: relative;top:3px;" {{ $preference->spi===1 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                        <label><input style="position: relative;top:3px;" {{ $preference->spi===2 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                    </div>
                    
                    <div>
                        <span style="font-weight: 500">Comments:</span><br>
                        {!! $preference->spiComments !!}
                    </div>
                </td>
            </tr>

            {{-- Instructions/Materials Provided --}}
            <tr>
                <td colspan="2" style="padding: 0;border-top: 1px solid #000">
                    <table class="table table-borderless align-middle table-nopadding">
                        <tr><td colspan="4" class="pb-0"><b>Instructions/Materials Provided</b></td></tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsRights ? 'checked' : '' }} type="checkbox" class="form-check-input"> Rights and Responsibilities</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsState ? 'checked' : '' }} type="checkbox" class="form-check-input"> State hotline number</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsAdvance ? 'checked' : '' }} type="checkbox" class="form-check-input"> Advance directives</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsDoNot ? 'checked' : '' }} type="checkbox" class="form-check-input"> Do not resuscitate (DNR)</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsHipaa ? 'checked' : '' }} type="checkbox" class="form-check-input"> HIPAA Notice of Privacy Practices</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsOasis ? 'checked' : '' }} type="checkbox" class="form-check-input"> OASIS Privacy Notice</label></td>
                            <td class="pb-0 pt-0" colspan="2"><label><input {{ $preference->materialsEmergency ? 'checked' : '' }} type="checkbox" class="form-check-input"> Emergency planning in the event service is disrupted</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsAgencyPhone ? 'checked' : '' }} type="checkbox" class="form-check-input"> Agency phone number/after-hours number</label></td>
                            <td class="pb-0 pt-0" colspan="2"><label><input {{ $preference->materialsContactPhysician ? 'checked' : '' }} type="checkbox" class="form-check-input"> When to contact physician and/or agency</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsStandardPrecautions ? 'checked' : '' }} type="checkbox" class="form-check-input"> Standard precautions/handwashing</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsBasicHome ? 'checked' : '' }} type="checkbox" class="form-check-input"> Basic home safety</label></td>
                            <td class="pb-0 pt-0" colspan="3">
                                <span style="font-weight: 500;">Disease (specify):</span>
                                {{ $preference->disease }}
                            </td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsMedicationAdministration ? 'checked' : '' }} type="checkbox" class="form-check-input"> Medication regimen/administration</label></td>
                            <td class="pb-0 pt-0" colspan="3"><label><input {{ $preference->materialsAdministratorContact ? 'checked' : '' }} type="checkbox" class="form-check-input"> Administrator's contact information</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0" colspan="4"><label><input {{ $preference->materialsCopyOfRights ? 'checked' : '' }} type="checkbox" class="form-check-input"> Copy of Rights &amp; Responsibilities and transfer/discharge policies to Representative (HHA has 4 business days)</label></td>
                        </tr>
                        <tr>
                            <td class="pt-0" colspan="4">
                                <span style="font-weight: 500">Other:</span>
                                {{ $preference->otherMaterials }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- EMERGENCY PREPAREDNESS CARE PLANNING --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">EMERGENCY PREPAREDNESS CARE PLANNING</h3></td>
            </tr>

            <tr>
                <td colspan="2" style="padding: 0;">
                    <table class="table table-borderless align-middle table-nopadding">
                        <tr><td colspan="4" class="pb-0"><b>Instructions/Materials Provided</b></td></tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsRightsResponsibilities ? 'checked' : '' }} type="checkbox" class="form-check-input"> Rights and Responsibilities</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsStateHotline ? 'checked' : '' }} type="checkbox" class="form-check-input"> State hotline number</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsAdvanceDirectives ? 'checked' : '' }} type="checkbox" class="form-check-input"> Advance directives</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsDoNotResuscitate ? 'checked' : '' }} type="checkbox" class="form-check-input"> Do not resuscitate (DNR)</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsHipaaNotice ? 'checked' : '' }} type="checkbox" class="form-check-input"> HIPAA Notice of Privacy Practices</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsOasisPrivacy ? 'checked' : '' }} type="checkbox" class="form-check-input"> OASIS Privacy Notice</label></td>
                            <td class="pb-0 pt-0" colspan="2"><label><input {{ $preference->materialsEmergencyPlanning ? 'checked' : '' }} type="checkbox" class="form-check-input"> Emergency planning in the event service is disrupted</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->aterialsAgencyPhoneNumber ? 'checked' : '' }} type="checkbox" class="form-check-input"> Agency phone number/after-hours number</label></td>
                            <td class="pb-0 pt-0" colspan="2"><label><input {{ $preference->materialsWhenToContactPhysician ? 'checked' : '' }} type="checkbox" class="form-check-input"> When to contact physician and/or agency</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsStandardHandwashing ? 'checked' : '' }} type="checkbox" class="form-check-input"> Standard precautions/handwashing</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsBasicHomeSafety ? 'checked' : '' }} type="checkbox" class="form-check-input"> Basic home safety</label></td>
                            <td class="pb-0 pt-0" colspan="3">
                                <span style="font-weight: 500;">Disease (specify):</span>
                                {{ $preference->disease2 }}
                            </td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $preference->materialsMedicationRegimen ? 'checked' : '' }} type="checkbox" class="form-check-input"> Medication regimen/administration</label></td>
                            <td class="pb-0 pt-0" colspan="3"><label><input {{ $preference->contactInformation ? 'checked' : '' }} type="checkbox" class="form-check-input"> Administrator's contact information</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0" colspan="4"><label><input {{ $preference->copyOfRightsResponsibilities ? 'checked' : '' }} type="checkbox" class="form-check-input"> Copy of Rights &amp; Responsibilities and transfer/discharge policies to Representative (HHA has 4 business days)</label></td>
                        </tr>
                        <tr>
                            <td class="pt-0" colspan="4">
                                <span style="font-weight: 500">Other:</span>
                                {{ $preference->otherMaterialsInfo }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- Functional Status (ACTIVITIES PERMITTED) --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">ACTIVITIES PERMITTED</h3></td>
            </tr>

            {{-- M1800. Grooming --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1800. Grooming</h4>
                    <p class="m-0" style="font-size:13px;">Current ability to tend safely to personal hygiene needs (specifically: washing face and hands, hair care, shaving or make up, teeth or denture care, or fingernail care).</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                  <div><input style="position: relative;top:3px;" {{$functionalSts->grooming===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>Able to groom self unaided, with or without the use of assistive devices or adapted methods.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->grooming===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>Grooming utensils must be placed within reach before able to complete grooming activities.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->grooming===2?'checked':''}} type="radio" class="form-check-input"> 2. <b>Someone must assist the patient to groom self.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->grooming===3?'checked':''}} type="radio" class="form-check-input"> 3. <b>Patient depends entirely upon someone else for grooming needs.</b></div>
                </td>
            </tr>

            {{-- M1810. Current Ability to Dress Upper Body --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1810. Current Ability to Dress <u>Upper</u> Body <span style="font-weight: 400">safely (with or without dressing aids) including undergarments, pullovers, front-opening shirts and blouses, managing zippers, buttons, and snaps.</span></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingUpper===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>Able to get clothes out of closets and drawers, put them on and remove them from the upper body without assistance.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingUpper===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>Able to dress upper body without assistance if clothing is laid out or handed to the patient.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingUpper===2?'checked':''}} type="radio" class="form-check-input"> 2. <b>Someone must help the patient put on upper body clothing.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingUpper===3?'checked':''}} type="radio" class="form-check-input"> 3. <b>Patient depends entirely upon another person to dress the upper body.</b></div>
                </td>
            </tr>

            {{-- M1820. Current Ability to Dress Lower Body --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1820. Current Ability to Dress <u>Lower</u> Body <span style="font-weight: 400">safely (with or without dressing aids) including undergarments, slacks, socks or nylons, shoes.</span></h4>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingLower===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>Able to obtain, put on, and remove clothing and shoes without assistance.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingLower===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>Able to dress lower body without assistance if clothing and shoes are laid out or handed to the patient.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingLower===2?'checked':''}} type="radio" class="form-check-input"> 2. <b>Someone must help the patient put on undergarments, slacks, socks or nylons, and shoes.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->dressingLower===3?'checked':''}} type="radio" class="form-check-input"> 3. <b>Patient depends entirely upon another person to dress lower body.</b></div>
                </td>
            </tr>

            {{-- M1830. Bathing --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1830. Bathing</h4>
                    <p class="m-0" style="font-size: 13px">Current ability to wash entire body safely. Excludes grooming (washing face, washing hands, and shampooing hair).</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                  <div><input style="position: relative;top:3px;" {{$functionalSts->bathing===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>Able to bathe self in shower or tub independently, including getting in and out of tub/shower.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->bathing===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>With the use of devices, is able to bathe self in shower or tub independently, including getting in and out of the tub/shower.</b></div>
                  <div>
                    <input style="position: relative;top:3px;" {{$functionalSts->bathing===2?'checked':''}} type="radio" class="form-check-input"> 2. <b>Able to bathe in shower or tub with the intermittent assistance of another person:</b>
                    <ol type="a" class="m-0" start="padding-left:30px;">
                        <li><b>for intermittent supervision or encouragement or reminders, <u>OR</u></b></li>
                        <li><b>to get in and out of the shower or tub, <u>OR</u></b></li>
                        <li><b>for washing difficult to reach areas.</b></li>
                    </ol>
                  </div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->bathing===3?'checked':''}} type="radio" class="form-check-input"> 3. <b>Able to participate in bathing self in shower or tub, but requires presence of another person throughout the bath for assistance or supervision.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->bathing===4?'checked':''}} type="radio" class="form-check-input"> 4. <b>Unable to use the shower or tub, but able to bathe self independently with or without the use of devices at the sink, in chair, or on commode.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->bathing===5?'checked':''}} type="radio" class="form-check-input"> 5. <b>Unable to use the shower or tub, but able to participate in bathing self in bed, at the sink, in bedside chair, or on commode, with the assistance or supervision of another person.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->bathing===6?'checked':''}} type="radio" class="form-check-input"> 6. <b>Unable to participate effectively in bathing and is bathed totally by another person.</b></div>
                </td>
            </tr>

            {{-- M1840. Toilet Transferring --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1840. Toilet Transferring</h4>
                    <p class="m-0" style="font-size: 13px">Current ability to get to and from the toilet or bedside commode safely and transfer on and off toilet/commode.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletTransferring===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>Able to get to and from the toilet and transfer independently with or without a device.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletTransferring===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>When reminded, assisted, or supervised by another person, able to get to and from the toilet and transfer.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletTransferring===2?'checked':''}} type="radio" class="form-check-input"> 2. <b><u>Unable</u> to get to and from the toilet but is able to use a bedside commode (with or without assistance).</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletTransferring===3?'checked':''}} type="radio" class="form-check-input"> 3. <b><u>Unable</u> to get to and from the toilet or bedside commode but is able to use a bedpan/urinal independently.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletTransferring===4?'checked':''}} type="radio" class="form-check-input"> 4. <b>Is totally dependent in toileting.</b></div>
                </td>
            </tr>

            {{-- M1845. Toileting Hygiene --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1845. Toileting Hygiene</h4>
                    <p class="m-0" style="font-size: 13px">Current ability to maintain perineal hygiene safely, adjust clothes and/or incontinence pads before and after using toilet, commode, bedpan, urinal. If managing ostomy, includes cleaning area around stoma, but not managing equipment.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletingHygiene===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>Able to manage toileting hygiene and clothing management without assistance.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletingHygiene===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>Able to manage toileting hygiene and clothing management without assistance if supplies/implements are laid out for the patient.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletingHygiene===2?'checked':''}} type="radio" class="form-check-input"> 2. <b>Someone must help the patient to maintain toileting hygiene and/or adjust clothing.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->toiletingHygiene===3?'checked':''}} type="radio" class="form-check-input"> 3. <b>Patient depends entirely upon another person to maintain toileting hygiene.</b></div>
                </td>
            </tr>

            {{-- M1850. Transferring --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1850. Transferring</h4>
                    <p class="m-0" style="font-size: 13px">Current ability to move safely from bed to chair, or ability to turn and position self in bed if patient is bedfast.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                  <div><input style="position: relative;top:3px;" {{$functionalSts->transferring===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>Able to independently transfer.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->transferring===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>Able to transfer with minimal human assistance or with the use of an assistive device.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->transferring===2?'checked':''}} type="radio" class="form-check-input"> 2. <b>Able to bear weight and pivot during the transfer process but unable to transfer self.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->transferring===3?'checked':''}} type="radio" class="form-check-input"> 3. <b>Unable to transfer self and is unable to bear weight or pivot when transferred by another person.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->transferring===4?'checked':''}} type="radio" class="form-check-input"> 4. <b>Bedfast, unable to transfer but able to turn and position self in bed.</b></div>
                  <div><input style="position: relative;top:3px;" {{$functionalSts->transferring===5?'checked':''}} type="radio" class="form-check-input"> 5. <b>Bedfast, unable to transfer and is unable to turn and position self.</b></div>
                </td>
            </tr>
        </table>
    </div>

    {{-- Section G Functional Status (Continued) --}}
    <table class="table table-bordered align-middle mb-2 mt-2">
        <tr>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Section G</b></td>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Functional Status</b> (Continued)</td>
        </tr>
    </table>

    {{-- M1860. Ambulation/Locomotion --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">M1860. Ambulation/Locomotion</h4>
                    <p class="m-0" style="font-size:13px;">Current ability to walk safely, once in a standing position, or use a wheelchair, once in a seated position, on a variety of surfaces.</p>
                </td>
            </tr>
            <tr>
                <td style="width: 20px;">{{$functionalSts->code}}</td>
                <td>
                    <ol class="m-0" start="padding-left:0">
                        <li><b>Able to independently walk on even and uneven surfaces and negotiate stairs with or without railings (specifically: needs no human assistance or assistive device).</b></li>
                        <li>With the use of a one-handed device (for example, cane, single crutch, hemi-walker), able to independently walk on even and uneven surfaces and negotiate stairs with or without railings.</li>
                    </ol>
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <div>
                        <b>Indications for Home Health Aides:</b>
                        <label><input style="position: relative;top:3px;" {{ $functionalSts->ifha===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                        <label><input style="position: relative;top:3px;" {{ $functionalSts->ifha===2 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                        <label><input style="position: relative;top:3px;" {{ $functionalSts->ifha===3 ? 'checked' : '' }} type="radio" class="form-check-input"> Refused</label>
                        <b style="margin-left: 15px;">Order obtained:</b>
                        <label><input style="position: relative;top:3px;" {{ $functionalSts->Orderobtained===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                        <label><input style="position: relative;top:3px;" {{ $functionalSts->Orderobtained===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                    </div>
                    
                    <div class="mt-1">
                        <span style="font-weight: 500">Reason for need:</span><br>
                        {!! $functionalSts->reasonforNeed !!}
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- ADL/IADLs --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">ADL/IADLs</h3></td>
            </tr>

            <tr>
                <td colspan="2">
                    <p class="mt-0 mb-1"><b>Adaptive Device(s):</b></p>
                    <div>
                        <label><input {{ $functionalSts->reacher ? 'checked' : '' }} type="checkbox" class="form-check-input"> Reacher</label>
                        <label style="margin-left:10px;"><input {{ $functionalSts->splints ? 'checked' : '' }} type="checkbox" class="form-check-input"> Splints</label>
                        <label style="margin-left:10px;"><input {{ $functionalSts->sockDonner ? 'checked' : '' }} type="checkbox" class="form-check-input"> Sock Donner</label>
                        <label style="margin-left:10px;"><input {{ $functionalSts->sowerBench ? 'checked' : '' }} type="checkbox" class="form-check-input"> Tub/Shower Bench</label>
                        <label style="margin-left:10px;"><input {{ $functionalSts->showerChair ? 'checked' : '' }} type="checkbox" class="form-check-input"> Shower Chair</label>
                        <label style="margin-left:10px;"><input {{ $functionalSts->dressingStick ? 'checked' : '' }} type="checkbox" class="form-check-input"> Dressing Stick</label>
                    </div>
                    <div>
                        <label><input {{ $functionalSts->raised ? 'checked' : '' }} type="checkbox" class="form-check-input"> Raised Toilet Seat</label>
                        <label style="margin-left:10px;"><input {{ $functionalSts->handled ? 'checked' : '' }} type="checkbox" class="form-check-input"> Long Handled Sponge</label>
                        <label style="margin-left:10px;"><input {{ $functionalSts->lognHandeOther ? 'checked' : '' }} type="checkbox" class="form-check-input"> Other: {{ $functionalSts->adaptOther }}</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td style="width: 20px;" class="align-top"><b>KEY:</b></td>
                <td>
                    <div>
                        <b>I - Independent</b>
                        <b style="margin-left: 10px">VC/SBA - Verbal Cues/Stand-by Assist</b>
                        <b style="margin-left: 10px">MIN - Minimum Assist</b>
                        <b style="margin-left: 10px">MOD - Moderate Assist</b>
                    </div>
                    <div>
                        <b>MAX - Maximum Assist</b>
                        <b style="margin-left: 10px">D - Totally Dependent</b>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="padding: 4px;border-top:1px solid #000">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>VC/SBA</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>D</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Assistive Device</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Comb Hair</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <p class="mt-0 mb-1">Specify/Comment:</p>
                                {!! $functionalSts->appropriateComment !!}
                            </td>
                        </tr>
                    </table>
    
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>VC/SBA</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>D</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Assistive Device</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue2 ? 'checked' : '' }} type="checkbox" class="form-check-input" value="1"></td>
                            <td class="text-center"><input {{ $functionalSts->vc2 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min2 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod2 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max2 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval2 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Shaving/Make-up</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice2===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice2===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <p class="mt-0 mb-1">Specify/Comment:</p>
                                {!! $functionalSts->specifyComment2 !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="padding: 4px;border-top:1px solid #000">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>VC/SBA</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>D</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Assistive Device</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue3 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc3 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min3 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod3 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max3 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval3 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Fingernail Care</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice3===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice3===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <p class="mt-0 mb-1">Specify/Comment:</p>
                                {!! $functionalSts->specifyComment3 !!}
                            </td>
                        </tr>
                    </table>
    
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>VC/SBA</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>D</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Assistive Device</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue4 ? 'checked' : '' }} type="checkbox" class="form-check-input" value="1"></td>
                            <td class="text-center"><input {{ $functionalSts->vc4 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min4 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod4 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max4 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval4 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Wash Face/Hands</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice4===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice4===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <p class="mt-0 mb-1">Specify/Comment:</p>
                                {!! $functionalSts->specifyComment4 !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="padding: 4px;border-top:1px solid #000">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>VC/SBA</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>D</b></td>
                            <td class="bg-light text-center" style="min-width: 250px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="width: 100px;"><b>Assistive Device</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue5 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc5 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min5 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod5 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max5 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval5 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>
                                <span style="font-weight: 500;">Oral Hygiene:</span>
                                <label style="margin-left: 10px;"><input {{ $functionalSts->oralHygieneTeeth ? 'checked' : '' }} type="checkbox" class="form-check-input"> Teeth</label>
                                <label style="margin-left: 10px;"><input {{ $functionalSts->oralHygieneDentures ? 'checked' : '' }} type="checkbox" class="form-check-input"> Dentures:</label>
                                <label style="margin-left: 10px;"><input {{ $functionalSts->oralHygieneUpper ? 'checked' : '' }} type="checkbox" class="form-check-input"> Upper</label>
                                <label style="margin-left: 10px;"><input {{ $functionalSts->oralHygieneLower ? 'checked' : '' }} type="checkbox" class="form-check-input"> Lower</label>
                                <label style="margin-left: 10px;"><input {{ $functionalSts->oralHygienePartial ? 'checked' : '' }} type="checkbox" class="form-check-input"> Partial</label>
                            </td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice5===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice5===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <p class="mt-0 mb-1">Specify/Comment:</p>
                                {!! $functionalSts->specifyComment5 !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border-top: 1px solid #000;">
                    <span style="font-weight: 500">For testing Patient:</span>
                    <label><input {{ $functionalSts->testingStanding ? 'checked' : '' }} type="checkbox" class="form-check-input"> Standing</label>
                    <label><input {{ $functionalSts->testingSitting ? 'checked' : '' }} type="checkbox" class="form-check-input"> Sitting, surfaces</label>
                    @if ($functionalSts->sittingSurfaceDesc)
                        <u>{{ $functionalSts->sittingSurfaceDesc }}</u>
                    @endif
                </td>
            </tr>
        </table>
    </div>

    {{-- FUNCTIONAL INDEPENDENCE/BALANCE EVAL --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" style="padding: 4px;">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td colspan="4" class="bg-black text-white text-center"><h3 class="m-0">FUNCTIONAL INDEPENDENCE/BALANCE EVAL</h3></td>
                        </tr>
                        <!-- BED MOBILITY -->
                        <tr>
                            <td class="text-center bg-black text-white" rowspan="4" style="width: 30px;"><span style="font-size: 11px">BED MOBILITY</span></td>
                            <td class="bg-light text-center"><b>TASK</b></td>
                            <td class="bg-light text-center" style="width: 80px;"><b>ASSIST SCORE</b></td>
                            <td class="bg-light text-center"><b>ASSISTIVE DEVICES/ COMMENTS</b></td>
                        </tr>
                        <tr>
                            <td>Roll/Turn</td>
                            <td>{{ $functionalSts->roll }}</td>
                            <td rowspan="3">{!! $functionalSts->assistiveComment !!}</td>
                        </tr>
                        <tr>
                            <td>Sit/Supine</td>
                            <td>{{ $functionalSts->sit }}</td>
                        </tr>
                        <tr>
                            <td>Scoot/Bridge</td>
                            <td>{{ $functionalSts->scoot }}</td>
                        </tr>
    
                        <!-- TRANSFERS -->
                        <tr>
                            <td class="text-center bg-black text-white" rowspan="5" style="width: 30px;"><span style="font-size: 11px">TRANSFERS</span></td>
                            <td>Sit/Stand</td>
                            <td>{{ $functionalSts->sit2 }}</td>
                            <td rowspan="5">{!! $functionalSts->sitcomment2 !!}</td>
                        </tr>
                        <tr>
                            <td>Bed/Wheelchair</td>
                            <td>{{ $functionalSts->bed }}</td>
                        </tr>
                        <tr>
                            <td>Toilet</td>
                            <td>{{ $functionalSts->toilet }}</td>
                        </tr>
                        <tr>
                            <td>Floor</td>
                            <td>{{ $functionalSts->floor }}</td>
                        </tr>
                        <tr>
                            <td>Auto</td>
                            <td>{{ $functionalSts->auto }}</td>
                        </tr>
    
                        <!-- STAIRS -->
                        <tr>
                            <td class="text-center bg-black text-white" rowspan="4" style="width: 30px;"><span style="font-size: 11px">STAIRS</span></td>
                            <td>Indoors</td>
                            <td>{{ $functionalSts->indoors }}</td>
                            <td rowspan="2" class="align-top">
                                <span  style="font-weight: 500">Railings:</span>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->indoorsRailings===1?'checked':''}} type="radio" class="form-check-input"> Left</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->indoorsRailings===2?'checked':''}} type="radio" class="form-check-input"> Right</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td class="bg-secondary">{{ $functionalSts->quality }}</td>
                        </tr>
                        <tr>
                            <td>Outdoors</td>
                            <td>{{ $functionalSts->outdoor2 }}</td>
                            <td rowspan="2" class="align-top">
                                <span style="font-weight: 500">Railings:</span>
                                <label style="margin-left: 10px"><input style="position: relative;top:4px;" {{ $functionalSts->outdoorsRailings===1?'checked':''}} type="radio" class="form-check-input"> Left</label>
                                <label style="margin-left: 10px"><input style="position: relative;top:4px;" {{ $functionalSts->outdoorsRailings===2?'checked':''}} type="radio" class="form-check-input"> Right</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td class="bg-secondary">{{ $functionalSts->quality2 }}</td>
                        </tr>
    
                        <!-- W/C/ SKILLS -->
                        <tr>
                            <td class="text-center bg-black text-white" rowspan="4" style="width: 30px;"><span  style="font-size: 11px">W/C/ SKILLS</span></td>
                            <td>Propulsion</td>
                            <td>{{ $functionalSts->propulsion }}</td>
                            <td rowspan="4">{!! $functionalSts->propulsionComment !!}</td>
                        </tr>
                        <tr>
                            <td>Pressure Relief</td>
                            <td>{{ $functionalSts->pressureRelief }}</td>
                        </tr>
                        <tr>
                            <td>Foot Rests</td>
                            <td>{{ $functionalSts->footRests }}</td>
                        </tr>
                        <tr>
                            <td>Locks</td>
                            <td>{{ $functionalSts->locks }}</td>
                        </tr>
    
                        <!-- COMMUNITY MOBILITY -->
                        <tr>
                            <td class="text-center bg-black text-white" rowspan="2" style="width: 30px;"><span class="text-center" style="font-size: 10px;line-height: 12px;top: 30px;">COMMUNITY<br>MOBILITY</span></td>
                            <td>Level Surface</td>
                            <td>{{ $functionalSts->levelSurface }}</td>
                            <td rowspan="2">{!! $functionalSts->levelSurfaceComment !!}</td>
                        </tr>
                        <tr>
                            <td>Uneven Surface</td>
                            <td>{{ $functionalSts->uneven }}</td>
                        </tr>
    
                        <tr>
                            <td colspan="4">
                                <p class="mt-0 mb-1">Plan/Comments re: independence and balance:</p>
                                {!! $functionalSts->planComments !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- FUNCTIONAL INDEPENDENCE SCALE --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless align-middle m-0">
            <tr>
                <td colspan="2" style="padding: 4px;">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td colspan="4" class="bg-secondary-subtle text-center">
                                <h5 class="mt-0 mb-1">FUNCTIONAL INDEPENDENCE SCALE</h5>
                                <p class="m-0">(For Balance/Mobility, Self Care/ADL Skills, IADL Skills)</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" style="width: 80px;"><b>GRADE</b></td>
                            <td class="text-center" colspan="3"><b>DESCRIPTION</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>7</b></td>
                            <td colspan="3">Independent</td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>6</b></td>
                            <td colspan="3">Modified independent - verbal cues, extra time</td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>5</b></td>
                            <td colspan="3">Stand-by assist (SBA) - 100% effort w/supervision</td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>4</b></td>
                            <td colspan="3">Minimal assist - 75% effort</td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>3</b></td>
                            <td colspan="3">Moderate assist - 25-50% effort</td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>2</b></td>
                            <td colspan="3">Maximum assist - 25% effort</td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>1</b></td>
                            <td colspan="3">Dependent/unable to do task &lt;25% effort</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style="width: 20px;" class="align-top"><b>KEY:</b></td>
                <td>
                    <b>I - Independent</b>
                    <b style="margin-left: 10px">VC/SBA - Verbal Cues/Stand-by Assist</b>
                    <b style="margin-left: 10px">MIN - Minimum Assist</b>
                    <b style="margin-left: 10px">MOD - Moderate Assist</b>
                    <b style="margin-left: 10px">MAX - Maximum Assist</b>
                    <b style="margin-left: 10px">D - Totally Dependent</b>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 4px;border-top:1px solid #000">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>VC/SBA</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>D</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Assistive Device</b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Clothing Management</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue6 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc6 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min6 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod6 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max6 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval6 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Dressing: Upper body</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice6===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice6===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue7 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc7 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min7 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod7 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max7 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval7 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Lower body</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice7===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice7===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue8 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc8 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min8 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod8 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max8 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval8 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Manipulation of fasteners</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice8===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice8===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue9 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc9 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min9 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod9 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max9 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval9 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Socks</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice9===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice9===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue10 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->vc10 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min10 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod10 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max10 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval10 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Footwear</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice10===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->assistiveDevice10===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <p class="mt-0 mb-1">Specify/Comment:</p>
                                {!! $functionalSts->specifyComment10 !!}
                            </td>
                        </tr>
                    </table>
    
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>VC/SBA</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>D</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Assistive Device</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue11 ? 'checked' : '' }} type="checkbox" class="form-check-input" value="1"></td>
                            <td class="text-center"><input {{ $functionalSts->vc11 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min11 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod11 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max11 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval11 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Toilet Hygiene</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->toiletHygieneAd===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->toiletHygieneAd===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <p class="mt-0 mb-1">Specify/Comment:</p>
                                {!! $functionalSts->specifyComment11 !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style="width: 20px;" class="align-top"><b>KEY:</b></td>
                <td>
                    <b>I - Intact</b>
                    <b style="margin-left: 10px">MIN - Minimum Impairment</b>
                    <b style="margin-left: 10px">MOD - Moderate Impairment</b>
                    <b style="margin-left: 10px">MAX - Maximum Impairment</b>
                    <b style="margin-left: 10px">U - Untested</b>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 4px;border-top:1px solid #000">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>I</b></td>
                            <td class="bg-light text-center"><b>MIN</b></td>
                            <td class="bg-light text-center"><b>MOD</b></td>
                            <td class="bg-light text-center"><b>MAX</b></td>
                            <td class="bg-light text-center"><b>U</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="min-width: 160px;"><b>Comments/Assist Device</b></td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue12 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min12 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod12 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max12 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->uval12 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Lip Closure</td>
                            <td>{!! $functionalSts->lipClosure !!}</td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue13 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min13 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod13 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max13 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->uval13 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Ability to swallow</td>
                            <td class="text-center">
                                <label><input style="position: relative;top:4px;" {{ $functionalSts->abilityToSwallow===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Evaluate further</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><input {{ $functionalSts->ivalue14 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min14 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod14 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max14 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->dval14 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>Manipulation of fasteners</td>
                            <td class="text-center">
                                <label><b>Adaptive</b> <input style="position: relative;top:4px;" {{ $functionalSts->atbftm===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Used</label>
                                <label><b>devices:</b> <input style="position: relative;top:4px;" {{ $functionalSts->atbftm===0 ? 'checked' : '' }} type="radio" class="form-check-input"> Not used</label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- CURRENT FINDINGS/GAIT EVALUATION --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">CURRENT FINDINGS/GAIT EVALUATION</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="input-group clean-input-group">
                        <b>Muscle Tone:</b> {{ $functionalSts->muscleTone }}
                    </div>
                    <div class="input-group clean-input-group">
                        <b>Posture:</b> {{ $functionalSts->posture }}
                    </div>

                    <p class="mb-1 mt-1">When standing does patient appear to have:</p>
                        
                    <div><input type="checkbox" {{ $functionalSts->standingna ? 'checked' : '' }} class="form-check-input"> <b>N/A</b> patient can’t stand</div>
                    <div><input type="checkbox" {{ $functionalSts->exaggerated ? 'checked' : '' }} class="form-check-input"> Exaggerated forward curve of lumbar region</div>
                    <div>
                        <label><input type="checkbox" {{ $functionalSts->roundedUpperBack ? 'checked' : '' }} class="form-check-input"> Rounded upper back</label>
                        <label style="margin-left: 10px;"><input type="checkbox" {{ $functionalSts->sshaped ? 'checked' : '' }} class="form-check-input"> S shaped spine</label>
                    </div>

                    <div class="d-flex gap-3">
                        <span>Does the patient’s posture limit their activities?</span>
                        <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalSts->dtpplta===1 ? 'checked' : '' }} type="radio" class="form-check-input">Yes</label>
                        <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalSts->dtpplta===0 ? 'checked' : '' }} type="radio" class="form-check-input">No</label>
                    </div>

                    <div class="input-group clean-input-group">
                        <b>Endurance:</b> {{ $functionalSts->endurance }}
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center"><b>Gait Assessment:</b></td>
                            <td class="bg-light text-center"><b>Level</b><br>Surfaces</td>
                            <td class="bg-light text-center"><b>Uneven</b><br>Surfaces</td>
                            <td class="bg-light text-center">Other</td>
                        </tr>
                        <tr>
                            <td>Distance</td>
                            <td>{{ $functionalSts->distance1 }}</td>
                            <td>{{ $functionalSts->distance2 }}</td>
                            <td>{{ $functionalSts->distance3 }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p class="mt-0 mb-1">Distance limited due to:</p>
                                {!! $functionalSts->distanceLimit !!}
                            </td>
                        </tr>
                        <tr>
                            <td>Distance</td>
                            <td>{{ $functionalSts->distance4 }}</td>
                            <td>{{ $functionalSts->distance5 }}</td>
                            <td>{{ $functionalSts->distance6 }}</td>
                        </tr>
                        <tr>
                            <td>Assistive Device</td>
                            <td>{{ $functionalSts->assistive1 }}</td>
                            <td>{{ $functionalSts->assistive2 }}</td>
                            <td>{{ $functionalSts->assistive3 }}</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p class="mt-0 mb-1">Quality/Deviations:</p>
                                {!! $functionalSts->qualityDeviations !!}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <p class="mt-0 mb-2"><b>Weight Bearing Status:</b> (specify extremities)</p>
                                <div>
                                    <label><input {{ $functionalSts->weight2?'checked':'' }} type="checkbox" class="form-check-input"> FWB</label>
                                    <label style="margin-left: 10px;"><input {{ $functionalSts->wbat?'checked':'' }} type="checkbox" class="form-check-input"> WBAT</label>
                                    <label style="margin-left: 10px;"><input {{ $functionalSts->pwb?'checked':'' }} type="checkbox" class="form-check-input"> PWB</label>
                                    <label style="margin-left: 10px;"><input {{ $functionalSts->tdwb?'checked':'' }} type="checkbox" class="form-check-input"> TDWB</label>
                                    <label style="margin-left: 10px;"><input {{ $functionalSts->nwb?'checked':'' }} type="checkbox" class="form-check-input"> NWB</label>
                                </div>
                                <p class="mb-1 mt-1">Comments:</p>
                                {!! $functionalSts->nwbcomment !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- FUNCTIONAL MOBILITY ASSESSMENT --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">FUNCTIONAL MOBILITY ASSESSMENT</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p class="mt-0 mb-1">Other Tests Used for Assessment:</p>
                    {!! $functionalSts->otherTests !!}
                </td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td class="pb-0 pt-0">Test scores: {{ $functionalSts->testScores }}</td>
                            <td class="pb-0 pt-0">What score implies: {{ $functionalSts->whatSchoreImplies }}</td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><input {{ $functionalSts->rpeTestScore?'checked':'' }} type="checkbox" class="form-check-input"> RPE Test score: {{ $functionalSts->rpeTestScoreComment }}</td>
                            <td class="pb-0 pt-0">What score implies: {{ $functionalSts->scoreImplise2 }}</td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><input {{ $functionalSts->barthelIndex?'checked':'' }} type="checkbox" class="form-check-input"> Barthel Index: {{ $functionalSts->barthelIndexComment }}</td>
                            <td class="pb-0 pt-0">What score implies: {{ $functionalSts->whatSchoreImplies2 }}</td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><input {{ $functionalSts->katz?'checked':'' }} type="checkbox" class="form-check-input"> Katz: {{ $functionalSts->katzComment }}</td>
                            <td class="pb-0 pt-0">What score implies: {{ $functionalSts->whatSchoreImplies3 }}</td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><input {{ $functionalSts->katz?'checked':'' }} type="checkbox" class="form-check-input"> Lawton IADL Test score: {{ $functionalSts->lawtonComment }}</td>
                            <td class="pb-0 pt-0">What score implies: {{ $functionalSts->whatSchoreImplies4 }}</td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><input {{ $functionalSts->tinettiScore?'checked':'' }} type="checkbox" class="form-check-input"> Tinetti score: {{ $functionalSts->tinettiScoreCcomment }}</td>
                            <td class="pb-0 pt-0">What score implies: {{ $functionalSts->whatSchoreImplies5 }}</td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><input {{ $functionalSts->tugtestScore?'checked':'' }} type="checkbox" class="form-check-input"> TUG Test score: {{ $functionalSts->tugtestScoreComment }}</td>
                            <td class="pb-0 pt-0">What score implies: {{ $functionalSts->whatSchoreImplies6 }}</td>
                        </tr>
                        <tr>
                            <td class="pt-0"><input {{ $functionalSts->bergTest?'checked':'' }} type="checkbox" class="form-check-input"> Berg Test score: {{ $functionalSts->bergTestScore }}</td>
                            <td class="pt-0">What score implies: {{ $functionalSts->whatSchoreImplies7 }}</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <div>
                        <input {{ $functionalSts->functionreachtest ? 'checked' : '' }} type="checkbox" class="form-check-input">Functional Reach Test score: {{ $functionalSts->functionreachtestComment }}
                    </div>
                    <div>
                        What score implies: {{ $functionalSts->whatSchoreImplies8 }}
                    </div>
                    <div>
                        <input {{ $functionalSts->activitiesSpecific ? 'checked' : '' }} type="checkbox" class="form-check-input">Activities Specific Balance Confidence Test score: {{ $functionalSts->activitiesSpecificComment }}
                    </div>
                    <div>
                        What score implies: {{ $functionalSts->whatSchoreImplies9 }}
                    </div>

                    <p class="mt-2 mb-1">Functional impact of deficits:</p>
                    {!! $functionalSts->functionalImpact !!}
                </td>
            </tr>
        </table>
    </div>

    {{-- ACTIVITIES PERMITTED --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">ACTIVITIES PERMITTED</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>
                        <label><input {{ $functionalSts->noRestrictions2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> <b>No Restrictions</b></label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->completeBedrest ? 'checked' : '' }} type="checkbox" class="form-check-input"> Complete bedrest</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->bathroomPrevileges ? 'checked' : '' }} type="checkbox" class="form-check-input"> Bathroom privileges</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->upAsTolerated2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> Up as tolerated</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->transferbed ? 'checked' : '' }} type="checkbox" class="form-check-input"> Transfer bed/ chair</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->excercisePre ? 'checked' : '' }} type="checkbox" class="form-check-input"> Exercises prescribed</label>
                    </div>
                    <div>
                        <label><input {{ $functionalSts->partialWeight ? 'checked' : '' }} type="checkbox" class="form-check-input"> Partial weight bearing</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->independet ? 'checked' : '' }} type="checkbox" class="form-check-input"> Independent in home</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->crutches ? 'checked' : '' }} type="checkbox" class="form-check-input"> Crutches</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->cane ? 'checked' : '' }} type="checkbox" class="form-check-input"> Cane</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->wheelchair ? 'checked' : '' }} type="checkbox" class="form-check-input"> Wheelchair</label>
                        <label style="margin-left: 10px"><input {{ $functionalSts->walker ? 'checked' : '' }} type="checkbox" class="form-check-input"> Walker</label>
                    </div>
                    <div>
                        <label><input {{ $functionalSts->otherSpecify10 ? 'checked' : '' }} type="checkbox" class="form-check-input"> Other (specify):</label>
                        {!! $functionalSts->otherSpecify4 !!}
                    </div>
                    <div>
                        <label><input {{ $functionalSts->otherSpecify5 ? 'checked' : '' }} type="checkbox" class="form-check-input"> Other (specify):</label>
                        {!! $functionalSts->otherSpecify6 !!}
                    </div>
                    <div>
                        <label><input {{ $functionalSts->otherSpecify7 ? 'checked' : '' }} type="checkbox" class="form-check-input"> Other (specify):</label>
                        {!! $functionalSts->otherSpecify8 !!}
                    </div>
                    <div>
                        <p class="mt-1 mb-1">Plan/Comments regarding ADLs:</p>
                        {!! $functionalSts->planComments8 !!}
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- INSTRUMENTAL ADLs --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">INSTRUMENTAL ADLs</h3></td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-bordered m-0">
                        ><tr>
                            <td class="bg-light text-center" style="width: 150px;"><b>Task</b></td>
                            <td class="bg-light text-center" style="width: 30px;"><b>I</b></td>
                            <td class="bg-light text-center" style="width: 60px;"><b>VC/SBA</b></td>
                            <td class="bg-light text-center" style="width: 40px;"><b>MIN</b></td>
                            <td class="bg-light text-center" style="width: 40px;"><b>MOD</b></td>
                            <td class="bg-light text-center" style="width: 40px;"><b>MAX</b></td>
                            <td class="bg-light text-center" style="width: 100px;"><b>Assistance Needed Due To</b></td>
                        </tr>
                        <tr>
                            <td>Light Housekeeping</td>
                            <td class="text-center"><input {{ $functionalSts->task15 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->ivalue15 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min15 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod15 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max15 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->assistance3 !!}</td>
                        </tr>
                        <tr>
                            <td>Light Meal Prep</td>
                            <td class="text-center"><input {{ $functionalSts->task16 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->ivalue16 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min16 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod16 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max16 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->lightComment !!}</td>
                        </tr>
                        <tr>
                            <td>Clothing Care</td>
                            <td class="text-center"><input {{ $functionalSts->task17 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->ivalue17 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max17 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod17 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max17===17 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->clothingCareComment !!}</td>
                        </tr>
                        <tr>
                            <td>Money Management</td>
                            <td class="text-center"><input {{ $functionalSts->task18 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->ivalue18 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min18 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod18 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max18 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->moneyManagmentComment !!}</td>
                        </tr>
                        <tr>
                            <td>Medication Management</td>
                            <td class="text-center"><input {{ $functionalSts->task19 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->ivalue19 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min19 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod19 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max19 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->medicationComment !!}</td>
                        </tr>
                        <tr>
                            <td>Home Safety Awareness</td>
                            <td class="text-center"><input {{ $functionalSts->task20 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->ivalue20 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min20 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod20 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max20 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->homeSaftyComment !!}</td>
                        </tr>
                    </table>
                </td>             
            </tr>
        </table>
    </div>

    {{-- MOTOR COMPONENTS --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">MOTOR COMPONENTS</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="d-flex gap-3">
                        <span style="font-weight: 500">Tonicity:</span>
                        <label style="margin-left:10px"><input {{ $functionalSts->tonicity ? 'checked' : '' }} type="checkbox" class="form-check-input"> WNL</label>
                        <label style="margin-left:10px"><input {{ $functionalSts->hypertonic ? 'checked' : '' }} type="checkbox" class="form-check-input"> Hypertonic</label>
                        <label style="margin-left:10px"><input {{ $functionalSts->hypotonic ? 'checked' : '' }} type="checkbox" class="form-check-input"> Hypotonic</label>
                        <label style="margin-left:10px"><input {{ $functionalSts->isDescribe ? 'checked' : '' }} type="checkbox" class="form-check-input"> Describe: {{ $functionalSts->tonicityDescribe }}</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light text-center" style="width: 150px;"><b>MOTOR COORDINATION</b></td>
                            <td class="bg-light text-center" style="width: 40px;"><b>I</b></td>
                            <td class="bg-light text-center" style="width: 50px;"><b>MIN</b></td>
                            <td class="bg-light text-center" style="width: 50px;"><b>MOD</b></td>
                            <td class="bg-light text-center" style="width: 50px;"><b>MAX</b></td>
                            <td class="bg-light text-center" style="width: 40px;"><b>U</b></td>
                            <td class="bg-light text-center" style="width: 150px;"><b>Comments</b></td>
                        </tr>
                        <tr>
                            <td><b>Fine Motor</b> - Left</td>
                            <td class="text-center"><input {{ $functionalSts->ivalue21 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min21 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod21 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max21 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->uval21 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->commants21 !!}</td>
                        </tr>
                        <tr>
                            <td><b>Fine Motor</b> - Right</td>
                            <td class="text-center"><input {{ $functionalSts->ivalue22 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min22 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod22 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max22 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->uval22 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->comments22 !!}</td>
                        </tr>
                        <tr><td colspan="7" class="p-0"></td></tr>
                        <tr>
                            <td><b>Gross Motor</b> - Left</td>
                            <td class="text-center"><input {{ $functionalSts->ivalue23 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min23 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod23 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max23 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->uval23 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->commants23 !!}</td>
                        </tr>
                        <tr>
                            <td><b>Gross Motor</b> - Right</td>
                            <td class="text-center"><input {{ $functionalSts->ivalue24 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->min24 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->mod24 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->max24 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td class="text-center"><input {{ $functionalSts->uval24 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                            <td>{!! $functionalSts->commants24 !!}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- SENSORY/PERCEPTUAL MOTOR SKILLS --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">SENSORY/PERCEPTUAL MOTOR SKILLS</h3></td>
            </tr>
            <tr>
                <td class="p-0" colspan="2">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="bg-light" colspan="5">KEY: I - Intact, MIN - Minimal Impairment, MOD - Moderate Impairment, MAX - Maximum Impairment, U - Untested</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="bg-light text-center" style="width: 30%;"><b>Area</b></td>
                            <td colspan="2" class="text-center"><b>Sensory Testing</b></td>
                            <td colspan="2" class="text-center"><b>Perceptual Testing</b></td>
                        </tr>
                        <tr>
                            <td class="bg-black text-center text-white"><b>RIGHT</b></td>
                            <td class="bg-black text-center text-white"><b>LEFT</b></td>
                            <td class="bg-black text-center text-white"><b>RIGHT</b></td>
                            <td class="bg-black text-center text-white"><b>LEFT</b></td>
                        </tr>
                        <tr>
                            <td>{{ $functionalSts->area1 }}</td>
                            <td>{{ $functionalSts->right1 }}</td>
                            <td>{{ $functionalSts->left1 }}</td>
                            <td>{{ $functionalSts->right2 }}</td>
                            <td>{{ $functionalSts->left2 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $functionalSts->area2 }}</td>
                            <td>{{ $functionalSts->right3 }}</td>
                            <td>{{ $functionalSts->left3 }}</td>
                            <td>{{ $functionalSts->right4 }}</td>
                            <td>{{ $functionalSts->left4 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $functionalSts->area3 }}</td>
                            <td>{{ $functionalSts->right5 }}</td>
                            <td>{{ $functionalSts->left5 }}</td>
                            <td>{{ $functionalSts->right6 }}</td>
                            <td>{{ $functionalSts->left6 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $functionalSts->area4 }}</td>
                            <td>{{ $functionalSts->right7 }}</td>
                            <td>{{ $functionalSts->left7 }}</td>
                            <td>{{ $functionalSts->right8 }}</td>
                            <td>{{ $functionalSts->left8 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $functionalSts->area5 }}</td>
                            <td>{{ $functionalSts->right9 }}</td>
                            <td>{{ $functionalSts->left9 }}</td>
                            <td>{{ $functionalSts->right10 }}</td>
                            <td>{{ $functionalSts->left10 }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="align-top" colspan="2" style="border-bottom: 1px solid #000;">
                    <div class="input-group clean-input-group my-1">
                        <b>Visual Tracking:</b> {{ $functionalSts->visualTracking }}
                    </div>
                    <div class="input-group clean-input-group my-1">
                        <b>R/L Discrimination:</b> {{ $functionalSts->discrimination }}
                    </div>
                    <div class="input-group clean-input-group my-1">
                        <b>Motor Planning Praxis:</b> {{ $functionalSts->motorPlanning }}
                    </div>
                    <div class="d-flex gap-3 my-1">
                        <span>Do sensory/perceptual impairments affect safety?</span>
                        <label style="margin-left: 10px"><input style="position: relative;top:4px" {{ $functionalSts->dspias===1 ? 'checked' : '' }} type="radio" class="form-check-input"> Yes</label>
                        <label style="margin-left: 10px"><input style="position: relative;top:4px" {{ $functionalSts->dspias===0 ? 'checked' : '' }} type="radio" class="form-check-input"> No</label>
                    </div>
                    <div class="ms-3">
                        <p class="mt-0 mb-1">If Yes, recommendations:</p>
                        {!! $functionalSts->yesRecommendations !!}
                    </div>
    
                    <div class="mt-3">
                        <p class="mt-0 mb-1">Comments/Other Impairments Noted:</p>
                        {!! $functionalSts->imparirmentsNotes !!}
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- Section GG | Functional Abilities and Goals --}}
    <table class="table table-bordered align-middle mt-2 mb-2">
        <tr>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Section GG</b></td>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Functional Abilities and Goals</b></td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <td colspan="2">
                <p class="mt-0 mb-2">NOTE: Code the GG tasks based on the amount of assistance needed by a helper to complete the task safely, based on the patient’s innate ability
                    and environment – NOT based on preferences or current caregiver circumstance.</p>
                <p class="mt-2 mb-0">Score 06-01 whenever it is possible for the task to be completed, even if the helper must complete the entire task, which would be coded as a “01”.
                    When a ta codes”.</p>
            </td>
        </tr>
    </table>

    {{-- GG0130. Self-Care --}}
    <table class="table table-bordered m-0">
        <tr>
            <td colspan="2" class="bg-secondary-subtle">
                <h4 class="m-0">GG0130. Self-Care</h4>
                <p class="m-0" style="font-size: 13px">Code the patient’s usual performance at Follow-Up for each activity using the 6-point scale. If activity was not attempted at Follow-Up, code the reason.</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p class="mb-1 mt-0"><b>Coding:</b></p>
                <p class="m-0"><b>Safety</b> and <b>Quality of Performance</b> – If helper assistance is required because patient’s performance is unsafe or of poor quality, score according to amount of assistance provided.</p>

                <p class="mb-2 mt-0"><i>Activities may be completed with or without assistive devices.</i></p>
                <div style="margin-left: 15px">
                    <p class="mt-0 mb-1">06. &nbsp; <b>Independent</b> – Patient completes the activity by themself with no assistance from a helper.</p>
                    <p class="mt-0 mb-1">05. &nbsp; <b>Setup or clean-up assistance</b> – Helper sets up or cleans up; patient completes activity. Helper assists only prior to or following the activity.</p>
                    <p class="mt-0 mb-1">04. &nbsp; <b>Supervision or touching assistance</b> – Helper provides verbal cues and/or touching/steadying and/or contact guard assistance as patient completes activity. Assistance may be provided throughout the activity or intermittently.</p>
                    <p class="mt-0 mb-1">03. &nbsp; <b>Partial/moderate assistance</b> – does LESS THAN HALF the effort. Helper lifts, holds or supports trunk or limbs, but provides less than half the effort.</p>
                    <p class="mt-0 mb-1">02. &nbsp; <b>Substantial/maximal assistance</b> – does MORE THAN HALF the effort. Helper lifts or holds trunk or limbs and provides more than half the effort.</p>
                    <p class="mt-0 mb-1">01. &nbsp; <b>Dependent</b> – Helper does ALL of the effort. Patient does none of the effort to complete the activity. Or, the assistance of 2 or more helpers is required for the patient to complete the activity.</p>
                </div>

                <p class="mb-2 mt-2"><b>If activity was not attempted, code reason:</b></p>
                <div style="margin-left: 15px">
                    <p class="mt-0 mb-1">07. &nbsp; <b>Patient refused</b></p>
                    <p class="mt-0 mb-1">09. &nbsp; <b>Not applicable</b> – Not attempted and the patient did not perform this activity prior to the current illness, exacerbation or injury.</p>
                    <p class="mt-0 mb-1">10. &nbsp; <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather constraints)</p>
                    <p class="mt-0 mb-1">88. &nbsp; <b>Not attempted due to medical condition or safety concerns</b></p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle text-center" style="width: 90px;"><b>4.<br> Follow-Up<br> Performance</b></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle text-center">{{ $functionalSts->eating2 }}</td>
            <td>A. <b>Eating:</b> The ability to use suitable utensils to bring food and/or liquid to the mouth and swallow food and/or liquid once the meal is placed before the patient.</td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle text-center">{{ $functionalSts->oralHygiene }}</td>
            <td>B. <b>Oral Hygiene:</b> The ability to use suitable items to clean teeth. Dentures (if applicable): The ability to insert and remove dentures into and from mouth, and manage denture soaking and rinsing with use of equipment.</td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle text-center">{{ $functionalSts->toiletingHygieneDetails }}</td>
            <td>C. <b>Toileting Hygiene:</b> The ability to maintain perineal hygiene, adjust clothes before and after voiding or having a bowel movement. If managing an ostomy, include wiping the opening but not managing equipment.</td>
        </tr>

        <tr>
            <td colspan="2" class="p-0">
                <div style="padding-right:0.5pt;">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td><input {{ $functionalSts->restrictions ? 'checked' : '' }} type="checkbox" class="form-check-input"> No
                                    Restrictions
                                </td>
                            <td><input {{ $functionalSts->bedrest ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Complete bedrest
                                </td>
                            <td><input {{ $functionalSts->privileges ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Bathroom privileges
                                </td>
                            <td><input {{ $functionalSts->tolerated ? 'checked' : '' }} type="checkbox" class="form-check-input"> Up
                                    as tolerated
                                </td>
                            <td><input {{ $functionalSts->transfer ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Transfer bed/chair
                                </td>
                            <td><input {{ $functionalSts->exercises ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Exercises prescribed
                                </td>
                        </tr>
                        <tr>
                            <td><input {{ $functionalSts->partial ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Partial weight bearing</td>
                            <td><input {{ $functionalSts->independent ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Independent in home</td>
                            <td><input {{ $functionalSts->crutches2 ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Crutches</td>
                            <td><input {{ $functionalSts->cane2 ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Cane</td>
                            <td><input {{ $functionalSts->wheelchair2 ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Wheelchair</td>
                            <td><input {{ $functionalSts->walker2 ? 'checked' : '' }} type="checkbox" class="form-check-input">
                                    Walker</td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <p class="mt-0 mb-1" style="font-weight: 500">Other (specify):</p>
                                {!! $functionalSts->otherSpecify1 !!}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <p class="mt-0 mb-1" style="font-weight: 500">Other (specify):</p>
                                {!! $functionalSts->otherSpecify2 !!}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <p class="mt-0 mb-1" style="font-weight: 500">Plan/Comments regarding ADLs:</p>
                                {!! $functionalSts->otherSpecify3 !!}
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>

    {{-- Functional Abilities and Goals --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Functional Abilities and Goals</h3></td>
            </tr>
            {{-- GG0100. Prior Functioning: Everyday Activities --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">GG0100. Prior Functioning: Everyday Activities</h4>
                    <p class="m-0" style="font-size: 13px">Indicate the patient’s usual ability with everyday activities prior to the current illness, exacerbation, or injury.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-bordered m-0">
                        <tr>
                            <td class="border-right-0">
                                <h4 class="m-0">Coding:</h4>
                                <ul style="list-style: none;padding-left:20px;" class="m-0">
                                    <li>
                                        3. <b>Independent</b> – Patient completed all theactivities by themself, with or without an
                                        assistive device, with no assistance from ahelper.
                                    </li>
                                    <li>
                                        2. <b>Needed Some Help</b> – Patient needed partialassistance from another person to
                                        completeany activities.
                                    </li>
                                    <li>
                                        1. <b>Dependent</b> – A helper completed all the activities for the patient.
                                    </li>
                                    <li>8. <b>Unknown</b></li>
                                    <li>9. <b>Not Applicable</b></li>
                                </ul>
                            </td>
                            <td class="p-0 border-0 overflow-hidden">
                                <table class="table table-bordered align-middle nmt-lg-1 nmb-1">
                                    <tr>
                                        <td>{{ $functionalAbl->safeCare }}</td>
                                        <td><label for="">A. <b>Self Care:</b> Code the patient’s need for assistance with bathing,
                                                dressing,using the toilet, and eating prior to the current illness, exacerbation,
                                                orinjury.</label></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $functionalAbl->indoorMobility }}</td>
                                        <td><label for="">B. <b>Indoor Mobility (Ambulation)</b>: Code the patient’s need for
                                                assistancewith walking from room to room (with or without a device such as cane,crutch
                                                or walker) prior to the current illness, exacerbation, or injury.</label></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $functionalAbl->stairs }}</td>
                                        <td><label for="">C. <b>Stairs</b>: Code the patient’s need for assistance with internal or
                                                externalstairs (with or without a device such as cane, crutch, or walker) prior tothe
                                                current illness, exacerbation, or injury.</label></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $functionalAbl->functionalCognition }}</td>
                                        <td><label for="">D. <b>Functional Cognition</b>: Code the patient’s need for assistance with
                                                planning regular tasks, such as shopping or remembering to takemedication prior to the
                                                current illness, exacerbation, or injury.</label></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                   </table>
                </td>
            </tr>

            {{-- GG0110. Prior Device Use --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">GG0110. Prior Device Use</h4>
                    <p class="m-0" style="font-size: 13px">Indicate devices and aids used by the patient prior to the current illness, exacerbation, or injury.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{ $functionalAbl->manualWheelchair?'checked':'' }} type="checkbox" class="form-check-input"> A. <b>Manual wheelchair</b></div>
                    <div><input {{ $functionalAbl->motorizedWheelchair?'checked':'' }} type="checkbox" class="form-check-input"> B. <b>Motorized wheelchair and/or scooter</b></div>
                    <div><input {{ $functionalAbl->mechanicalLift?'checked':'' }} type="checkbox" class="form-check-input"> C. <b>Mechanical lift</b></div>
                    <div><input {{ $functionalAbl->priorDeviceWalker?'checked':'' }} type="checkbox" class="form-check-input"> D. <b>Walker</b></div>
                    <div><input {{ $functionalAbl->priorDeviceOrthotics?'checked':'' }} type="checkbox" class="form-check-input"> E. <b>Orthotics/Prosthetics</b></div>
                    <div><input {{ $functionalAbl->noneOfTheAbove?'checked':'' }} type="checkbox" class="form-check-input"> Z. <b>None of the above</b></div>
                </td>
            </tr>

            {{-- SOC/ROC --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <h4 class="m-0">SOC/ROC</h4>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="bg-secondary-subtle" style="border-top: 1px solid #000;">
                    <h4 class="m-0">GG0130. Self-Care</h4>
                    <p class="m-0" style="font-size: 13px">Code the patient’s usual performance at SOC/ROC for each activity using the 6-point scale. If activity was not attempted at SOC/ROC, code the reason. Code the patient’s discharge goal(s) using the 6-point scale. Use of codes 07, 09, 10 or 88 is permissible to code discharge goal(s).</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h4 class="m-0">Coding:</h4>
                    <p class="mt-1 mb-1"><b>Safety</b> and <b>Quality of Performance</b> – If helper assistance is required because
                        patient’s performance is unsafe or of poor quality, score according to amount of assistance
                        provided.</p>
                    <p class="mt-1 mb-1"><i>Activities may be completed with or without assistive devices.</i></p>
                    <ul style="list-style: none;padding-left:20px;">
                        <li>
                            06. <b>Independent</b> – Patient completes the activity by themself with no assistance from a
                            helper.
                        </li>
                        <li>
                            05. <b>Setup or clean-up assistance</b> – Helper sets up or cleans up; patient completes
                            activity. Helper assists only prior to or following the activity.
                        </li>
                        <li>
                            04. <b>Supervision or touching assistance</b> – Helper provides verbal cues and/or
                            touching/steadying and/or contact guard assistance as patientcompletes activity. Assistance
                            may be provided throughout the activity or intermittently.
                        </li>
                        <li>
                            03. <b>Partial/moderate assistance</b> – Helper does LESS THAN HALF the effort. Helper lifts,
                            holds or supports trunk or limbs, but provides lessthan half the effort.
                        </li>
                        <li>
                            02. <b>Substantial/maximal assistance</b> – Helper does MORE THAN HALF the effort. Helper
                            lifts or holds trunk or limbs and provides more than half the effort.
                        </li>
                        <li>
                            01. <b>Dependent</b> – Helper does ALL of the effort. Patient does none of the effort to
                            complete the activity. Or, the assistance of 2 or morehelpers is required for the patient to
                            complete the activity.
                        </li>
                    </ul>
                    <p class="mt-1 mb-1"><b>If activity was not attempted, code reason:</b></p>
                    <ul style="list-style: none;padding-left:20px;">
                        <li>07. <b>Patient refused</b></li>
                        <li>
                            09. <b>Not applicable</b> – Not attempted and the patient did not perform this activity prior
                            to the current illness, exacerbation or injury.
                        </li>
                        <li>
                            10. <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather
                            constraints)
                        </li>
                        <li>88. <b>Not attempted due to medical condition or safety concerns</b></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="border-0 p-0">
                        <table class="table table-bordered m-0">
                            <tr>
                                <td class="bg-secondary-subtle text-center" style="max-width: 120px;"><b>1.<br>SOC/ROC
                                        Performance</b></td>
                                <td class="bg-secondary-subtle text-center" style="max-width: 120px;"><b>2.<br>Discharge
                                        Goal</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>{{ $functionalAbl->eating1 }}</td>
                                <td>{{ $functionalAbl->eating2 }}</td>
                                <td><label for="">A. <b>Eating</b>: The ability to use suitable utensils to bring food
                                        and/or liquid to the mouth and swallow food and/or liquid once the meal is placed
                                        before the patient.</label></td>
                            </tr>
                            <tr>
                                <td>{{ $functionalAbl->oralHygiene1 }}</td>
                                <td>{{ $functionalAbl->oralHygiene2 }}</td>
                                <td><label for="">B. <b>Oral Hygiene</b>: The ability to use suitable items to clean
                                        teeth. Dentures (if applicable): The ability to insertand remove dentures into and
                                        from mouth, and manage denture soaking and rinsing with use ofequipment.</label>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $functionalAbl->toiletingHygiene1 }}</td>
                                <td>{{ $functionalAbl->toiletoiletingHygiene2tingHygiene1 }}</td>
                                <td><label for="">C. <b>Toileting Hygiene</b>: The ability to maintain perineal hygiene,
                                        adjust clothes before and after voiding orhaving a bowel movement. If managing an
                                        ostomy, include wiping the opening but not managing equipment.</label></td>
                            </tr>
                            <tr>
                                <td>{{ $functionalAbl->batheself1 }}</td>
                                <td>{{ $functionalAbl->batheself2 }}</td>
                                <td><label for="">E. <b>Shower/bathe self</b>: The ability to bathe self, including
                                        washing, rinsing, and drying self (excludes washingof back and hair). Does not
                                        include transferring in/out of tub/shower.</label></td>
                            </tr>
                            <tr>
                                <td>{{ $functionalAbl->bodyDressing1 }}</td>
                                <td>{{ $functionalAbl->bodyDressing2 }}</td>
                                <td><label for="">F. <b>Upper body dressing</b>: The ability to dress and undress above
                                        the waist; including fasteners, if applicable.</label></td>
                            </tr>
                            <tr>
                                <td>{{ $functionalAbl->lowerBodyDressing1 }}</td>
                                <td>{{ $functionalAbl->lowerBodyDressing2 }}</td>
                                <td><label for="">G. <b>Lower body dressing</b>: The ability to dress and undress below
                                        the waist, including fasteners; doesnotinclude footwear.</label></td>
                            </tr>
                            <tr>
                                <td>{{ $functionalAbl->footwear1 }}</td>
                                <td>{{ $functionalAbl->footwear2 }}</td>
                                <td><label for="">H. <b>Putting on/taking off footwear</b>: The ability to put on and take
                                        off socks and shoes or other footwear that isappropriate for safe mobility;
                                        including fasteners, if applicable.</label></td>
                            </tr>
                        </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- FUNCTIONAL LIMITATIONS --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">FUNCTIONAL LIMITATIONS</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td class="pb-0"><label><input {{ $functionalAbl->amputation?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Amputation</label></td>
                            <td class="pb-0"><label><input {{ $functionalAbl->paralysis?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Paralysis</label></td>
                            <td class="pb-0"><label><input {{ $functionalAbl->legallyBlind?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Legally blind</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $functionalAbl->bowelBladder?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Bowel/Bladder (Incontinence)</label></td>
            
            
                            <td class="pb-0 pt-0"><label><input {{ $functionalAbl->endurance?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Endurance</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $functionalAbl->minimalExertion?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Dyspnea with minimal exertion</label></td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $functionalAbl->contracture?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Contracture</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $functionalAbl->ambulation?'checked':'' }} type="checkbox"
                                        class="form-check-input">
                                    Ambulation</label></td>
                            <td class="pb-0 pt-0">
                                <label style="font-weight: 500">Other (specify):</label> {{ $functionalAbl->functionalLimitationsOther }}
                            </td>
                        </tr>
                        <tr>
                            <td class="pb-0 pt-0"><label><input {{ $functionalAbl->eating1?'hearing':'' }} type="checkbox"
                                        class="form-check-input">
                                    Hearing</label></td>
                            <td class="pb-0 pt-0"><label><input {{ $functionalAbl->eating1?'speech':'' }} type="checkbox" class="form-check-input"> Speech</label></td>
                            <td class="pb-0 pt-0">
                                <label style="font-weight: 500">Other (specify):</label> {{ $functionalAbl->speechOther }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-0">
                                <label style="font-weight: 500">Prior transfer ability:</label><br>
                                {!! $functionalAbl->priorTransferAbility !!}
                            </td>
                            <td class="pt-0">
                                <label style="font-weight: 500">Prior social activity level:</label><br>
                                {!! $functionalAbl->priorSocialActivityLevel !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- MUSCULOSKELETAL --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;padding-bottom:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">MUSCULOSKELETAL</h3></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div><input {{ $functionalAbl->noProblem?'checked':'' }} type="checkbox" name="noProblem" class="form-check-input"> No Problem</div>
                                <span style="font-weight: 500">Has patient had any past problems or injuries to:</span>
                                <label style="margin-left: 10px;"><input {{ $functionalAbl->joints?'checked':'' }} type="checkbox" name="joints" class="form-check-input">
                                    joints</label>
                                <label style="margin-left: 10px;"><input {{ $functionalAbl->muscles?'checked':'' }} type="checkbox" name="muscles" class="form-check-input">
                                    muscles</label>
                                <label style="margin-left: 10px;"><input {{ $functionalAbl->bones?'checked':'' }} type="checkbox" name="bones" class="form-check-input">
                                    bones?</label>
                                <br>
                                <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->hpapp===0?'checked':'' }} type="radio" name="hpapp" class="form-check-input" value="0"> No</label>
                                <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->hpapp===1?'checked':'' }} type="radio" name="hpapp" class="form-check-input" value="1"> Yes (note a
                                    problem could be a disease process, for example: osteoporosis, tetanus or cancer) If yes, what
                                    happened:</label><br>
                                    {!! $functionalAbl->yesNote !!}
                            
                                <p style="font-weight: 500" class="mb-0">Treatment received:</p>
                                {!! $functionalAbl->treatmentReceived !!}
                            
                                <div class="d-block mt-2">
                                    <span style="font-weight: 500">Did the patient have any after effects/residual problems from the problem or injury reported?</span><br>
                                    <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->hparp===2?'checked':'' }} type="radio" value="2" name="hpapp" class="form-check-input">
                                        No</label>
                                    <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->hparp===3?'checked':'' }} type="radio" name="hpapp" class="form-check-input" value="3"> Yes If
                                        yes, what happened:</label><br>
                                    {!! $functionalAbl->hpapp2note !!}
                                </div>
                            
                                <div class="d-block mt-2">
                                    <p style="font-weight: 500" class="mb-1 mt-0">Patient has pain associated with:</p>
                                    <div class="ms-2">
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->painJoints?'checked':'' }} type="checkbox" name="painJoints" class="form-check-input">joints</label>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->painMuscles?'checked':'' }} type="checkbox" name="painMuscles" class="form-check-input">muscles</label>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->painBones?'checked':'' }} type="checkbox" name="painBones" class="form-check-input">bones?</label>
                                    </div>
                                </div>
                            
                                <div class="d-block mt-2">
                                    <span style="font-weight: 500">Patient has:</span>
                                    <label style="margin-left: 10px;">
                                        <input {{ $functionalAbl->tingling?'checked':'' }} type="checkbox" name="tingling" class="form-check-input">tingling</label>
                                    <label style="margin-left: 10px;">
                                        <input {{ $functionalAbl->numbness?'checked':'' }} type="checkbox" name="numbness" class="form-check-input">numbness</label>
                                    <div class="ms-2">
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->swelling?'checked':'' }} type="checkbox" name="swelling" class="form-check-input">swelling</label>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->contractures?'checked':'' }} type="checkbox" name="contractures" class="form-check-input">contracture(s)</label>
                                        <span style="font-weight: 500">weakness of: </span>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->ue?'checked':'' }} type="checkbox" name="ue" class="form-check-input">UE</label>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->le?'checked':'' }} type="checkbox" name="le" class="form-check-input">LE</label>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->atrophy?'checked':'' }} type="checkbox" name="atrophy" class="form-check-input">atrophy</label>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->rom?'checked':'' }} type="checkbox" name="rom" class="form-check-input">decreased
                                            ROM</label>
                                    </div>
                                </div>
                            
                                <div class="d-block mt-2">
                                    <span style="font-weight: 500">Motor changes:</span>
                                    <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->motorChanges===0?'checked':'' }} type="radio" name="motorChanges" class="form-check-input"
                                            value="0">No</label>
                                    <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->motorChanges===1?'checked':'' }} type="radio" name="motorChanges" class="form-check-input"
                                            value="1">Yes</label>
                                    <span class="fw-medium me-2 ms-2">If yes:</span>
                                    <label style="margin-left: 10px;">
                                        <input {{ $functionalAbl->motorChangeFine?'checked':'' }} type="checkbox" name="motorChangeFine" class="form-check-input">fine</label>
                                    <label style="margin-left: 10px;">
                                        <input {{ $functionalAbl->motorChangeGross?'checked':'' }} type="checkbox" name="motorChangeGross" class="form-check-input">gross</label>
                                </div>
                            
                                <div class="d-block mt-2">
                                    <span style="font-weight: 500">Hand grips:</span>
                                    <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->handGrips===1?'checked':'' }}  style="position: relative;top:4px"" name="handGrips" value="1"
                                            class="form-check-input">equal</label>
                                    <label style="margin-left: 10px;"><input style="position: relative;top:4px" {{ $functionalAbl->handGrips===2?'checked':'' }} type="radio" name="handGrips" value="2"
                                            class="form-check-input">unequal</label>
                                    <div class="ms-2">
                                        <span style="font-weight: 500">strong:</span>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->strongR?'checked':'' }} type="checkbox" name="strongR" class="form-check-input">R</label>
                                        <label style="margin-left: 10px;"><input {{ $functionalAbl->strongL?'checked':'' }} type="checkbox" name="strongL"
                                                class="form-check-input">L</label>
                                        <span class="fw-medium me-2 ms-2">weak:</span>
                                        <label style="margin-left: 10px;">
                                            <input {{ $functionalAbl->weakR?'checked':'' }} type="checkbox" name="weakR" class="form-check-input">R</label>
                                        <label style="margin-left: 10px;"><input {{ $functionalAbl->weakL?'checked':'' }} type="checkbox" name="weakL"
                                                class="form-check-input">L</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-top" colspan="2">
                                <span style="font-weight:500">Has the patient had an amputation?</span>
                                <label style="margin-left:10px"><input style="position: relative;top:4px" {{ $functionalAbl->htpa===0?'checked':'' }} type="radio" name="htpa" value="0" class="form-check-input"> No</label>
                                <label style="margin-left:10px"><input style="position: relative;top:4px" {{ $functionalAbl->htpa===1?'checked':'' }} type="radio" name="htpa" value="1" class="form-check-input"> Yes If
                                yes,</label>
                                <div class="ms-2">
                                    <span style="font-weight:500">below knee:</span>
                                    <label style="margin-left:10px"><input {{ $functionalAbl->noProblem?'checked':'' }} type="checkbox" name="belowRight" class="form-check-input">
                                    right</label>
                                    <label style="margin-left:10px"><input {{ $functionalAbl->belowLeft?'checked':'' }} type="checkbox" name="belowLeft" class="form-check-input">
                                    left</label>
                                    <span style="font-weight:500">above knee:</span>
                                    <label style="margin-left:10px">
                                    <input {{ $functionalAbl->aboveRight?'checked':'' }} type="checkbox" name="aboveRight" class="form-check-input">
                                    right</label>
                                    <label style="margin-left:10px">
                                    <input {{ $functionalAbl->aboveLeft?'checked':'' }} type="checkbox" name="aboveLeft" class="form-check-input">
                                    left</label>
                                    <br>
                                    <span style="font-weight:500">upper extremity:</span>
                                    <label style="margin-left:10px"><input {{ $functionalAbl->upperRight?'checked':'' }} type="checkbox" name="upperRight" class="form-check-input">
                                    right</label>
                                    <label style="margin-left:10px"><input {{ $functionalAbl->upperLeft?'checked':'' }} type="checkbox" name="upperLeft" class="form-check-input">
                                    left</label>
                                    <div><label style="font-weight: 500">Other:</label> {{ $functionalAbl->upperOther }}</div>
                                </div>
            
                                <p class="mb-0 mt-2" style="font-weight: 500">When standing does the patient appear to have:</p>
                                <div><label>
                                    <input {{ $functionalAbl->exaggeratedForward?'checked':'' }} type="checkbox" name="exaggeratedForward" class="form-check-input">Exaggerated forward
                                curve of lumbar region</label></div>
                                <div><label><input {{ $functionalAbl->upperBack?'checked':'' }} type="checkbox" name="upperBack" class="form-check-input">Rounded upper back
                                S shaped spine</label></div>
                                <div><label><input {{ $functionalAbl->canTStand?'checked':'' }} type="checkbox" name="canTStand" class="form-check-input">N/A patient can't
                                stand</label></div>
            
                                <div class="d-block mt-2">
                                    <span style="font-weight:500">Does the patient's posture limit their activities?</span>
                                    <label style="margin-left:10px"><input style="position: relative;top:4px" {{ $functionalAbl->dtppl===0?'checked':'' }} type="radio" value="0" name="dtppl" class="form-check-input">No</label>
                                    <label style="margin-left:10px"><input style="position: relative;top:4px" {{ $functionalAbl->dtppl===1?'checked':'' }} type="radio" value="1" name="dtppl" class="form-check-input">Yes</label>
                                    <br>
                                    <label class="mb-1 mt-2" style="font-weight: 500">If the patient has any of these conditions, specify
                                     what and how it affects their functional ability and/or safety:</label><br>
                                     {!! $functionalAbl->abilitySafety !!}
                                 </div>
                             </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- FALL RISK ASSESSMENT --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;padding-bottom:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">FALL RISK ASSESSMENT</h3></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="border-bottom: 1px solid #000">
                                <h3 class="text-center m-0">MAHC 10-FALL RISK ASSESSMENT TOOL</h3>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="p-0">
                                <table class="table table-bordered m-0">
                                    <tr>
                                        <td class="text-center" style="width: auto !important;">
                                            <p><b>REQUIRED CORE ELEMENTS - Assess one point for each core element "yes".</b>
                                                <br>
                                                <i class="fw-medium">Information may be gathered from medical record, assessment and if
                                                    applicable, the patient/caregiver. Beyond protocols listed below, scoring should be based on
                                                your clinical judgment.</i></p>
                                            </td>
                                            <td class="text-center"><b>POINTS</b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Age 65+</b></td>
                                            <td>{{ $functionalAbl->age }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Diagnosis (3 or more co-existing)</b><br>
                                                <p class="m-0" style="font-size: 14px">Includes only documented medical diagnosis.</p>
                                            </td>
                                            <td>{{ $functionalAbl->noDiagnosis }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Prior history of falls within 3 months</b><br>
                                                <p class="m-0" style="font-size: 14px">An unintentional change in position resulting in coming to rest on the ground or at a lower level.</p>
                                            </td>
                                            <td>{{ $functionalAbl->priorHistory }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Incontinence</b><br>
                                                <p class="m-0" style="font-size: 14px">Inability to make it to the bathroom or commode in timely manner. Includes frequency, urgency,
                                                and/or nocturia.</p>
                                            </td>
                                            <td>{{ $functionalAbl->incontinence }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Visual impairment</b><br>
                                                <p class="m-0" style="font-size: 14px">Includes but not limited to, macular degeneration, diabetic retinopathies, visual field loss, age
                                                related changes, decline in visual acuity, accommodation, glare tolerance, depth perception, and
                                                night vision or not wearing prescribed glasses or having the correct prescription.</p>
                                            </td>
                                            <td>{{ $functionalAbl->visualImpairment }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Impaired functional mobility</b><br>
                                                <p class="m-0" style="font-size: 14px">May include patients who need help with IADLs or ADLs or have gait or transfer problems, arthritis,
                                                pain, fear of falling, foot problems, impaired sensation, impaired coordination or improper use of
                                                assistive devices.</p>
                                            </td>
                                            <td>{{ $functionalAbl->mobility }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Environmental hazards</b><br>
                                                <p class="m-0" style="font-size: 14px">May include but not limited to, poor illumination, equipment tubing, inapprop footwear, pets, hard
                                                to reach items, floor surfaces that are uneven or cluttered, or outdoor entry and exits.</p>
                                            </td>
                                            <td>{{ $functionalAbl->hazards }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Poly Pharmacy (4 or more prescriptions - any type)</b><br>
                                                <p class="m-0" style="font-size: 14px">All PRESCRIPTIONS including prescriptions for OTC meds. Drugs! associated with fall risk include but
                                                not limited to, sedatives, anti-depressants, tranquilizers, narcotics, antihypertensives, cardiac
                                                meds, corticosteroids, anti-anxiety drugs, anticholinergic drugs, and hypoglycemic drugs.</p>
                                            </td>
                                            <td>{{ $functionalAbl->pharmacy }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Pain affecting level of function</b><br>
                                                <p class="m-0" style="font-size: 14px">Pain often affects an individual's desire or ability to move or pain can be a factor in depression
                                                or compliance with safety recommendations.</p>
                                            </td>
                                            <td>{{ $functionalAbl->affecting }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Cognitive impairment</b><br>
                                                <p class="m-0" style="font-size: 14px">Could include patients with dementia, Alzheimer's or stroke patients or patients who are confused,
                                                use poor judgment, have decreased comprehension, impulsivity, memory deficits. Consider patient's
                                                ability to adhere to the plan of care.</p>
                                            </td>
                                            <td>{{ $functionalAbl->cognitive }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-secondary-subtle">
                                                <p class="d-flex justify-content-between">
                                                    <span><b>A score of 4 or more is considered at risk for falling</b></span>
                                                    <span><b>TOTAL</b></span>
                                                </p>
                                            </td>
                                            <td>{{ $functionalAbl->total }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">MAHC 10 reprinted with permission from <b><i>Missouri Alliance for</i> HOME CARE</b>
                                            </td>
                                        </tr>
                                    </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- FALL RISK ASSESSMENT --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;padding-bottom:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Section H | Bladder and Bowel</h3></td>
            </tr>

            {{-- M1600 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <b>M1600</b>. Has this patient been treated for a <b>Urinary Tract Infection</b> in the past 14 days?
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->tractInfection==='0'?'checked':''}} type="radio" class="form-check-input"> 0. <b>No</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->tractInfection==='1'?'checked':''}} type="radio" class="form-check-input"> 1. <b>Yes</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->tractInfection==='2'?'checked':''}} type="radio" class="form-check-input"> NA <b>Patient on prophylactic treatment</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->tractInfection==='3'?'checked':''}} type="radio" class="form-check-input"> UK <b>Unknown</b> [Omit “UK�? option on DC]</label>
                    </div>
                </td>
            </tr>

            {{-- M1610 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <b>M1610. Urinary Incontinence or Urinary Catheter Presence</b>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><label>
                            <input style="position: relative;top:4px" {{$bladderBowel->catheterPresence==='0'?'checked':''}} type="radio" class="form-check-input"> 0. <b>No incontinence or catheter</b> (includes anuria or ostomy for urinary drainage)</label>
                    </div>
                    <div>
                        <label><input style="position: relative;top:4px" {{$bladderBowel->catheterPresence==='1'?'checked':''}} type="radio" class="form-check-input"> 1. <b>Patient is incontinent</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->catheterPresence==='2'?'checked':''}} type="radio" class="form-check-input"> 2. <b>Patient requires a urinary catheter</b> (specifically: external, indwelling, intermittent, or suprapubic)</label>
                    </div>
                </td>
            </tr>

            {{-- M1620 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <b>M1620. Bowel Incontinence Frequency</b>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='0'?'checked':''}} type="radio" class="form-check-input" value="0"> 0. <b>Very rarely or never has bowel incontinence</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='1'?'checked':''}} type="radio" value="1" class="form-check-input"> 1. <b>Less than once weekly</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='2'?'checked':''}} type="radio" value="2" class="form-check-input"> 2. <b>One to three times weekly</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='3'?'checked':''}} type="radio" value="3" class="form-check-input"> 3. <b>Four to six times weekly</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='4'?'checked':''}} type="radio" class="form-check-input" value="4"> 4. <b>On a daily basis</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='5'?'checked':''}} type="radio" class="form-check-input" value="5"> 5. <b>More often than once daily</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='6'?'checked':''}} type="radio" value="6" class="form-check-input"> NA. <b>Patient has ostomy for bowel elimination</b></label>
                    </div>
                    <div><label>
                        <input style="position: relative;top:4px" {{$bladderBowel->incontinenceFrequency==='7'?'checked':''}} type="radio" class="form-check-input" value="7"> UK. <b>Unknown</b> [Omit “UK�? option on DC]</label>
                    </div>
                </td>
            </tr>

            {{-- M1630 --}}
            <tr>
                <td colspan="2" class="bg-secondary-subtle">
                    <b>M1630. Ostomy for Bowel Elimination</b>
                    <p class="m-0" style="font-size: 13px">Does this patient have an ostomy for bowel elimination that (within the last 14 days): a) was related to an inpatient facility stay; or b) necessitated a change in medical or treatment regimen?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><label>
                        <input  style="position: relative;top:4px" {{$bladderBowel->bowelElimination==='0'?'checked':''}} type="radio" class="form-check-input"> 0. <b>Patient does <u>not</u> have an ostomy for bowel elimination.</b></label>
                    </div>
                    <div><label>
                        <input  style="position: relative;top:4px" {{$bladderBowel->bowelElimination==='1'?'checked':''}} type="radio" class="form-check-input"> 1. <b>Patient's ostomy was not related to an inpatient stay and did <u>not</u> necessitate change in medical or treatment regimen.</b></label>
                    </div>
                    <div><label>
                        <input  style="position: relative;top:4px" {{$bladderBowel->bowelElimination==='2'?'checked':''}} type="radio" class="form-check-input"> 2. <b>The ostomy <u>was</u> related to an inpatient stay or <u>did</u> necessitate change in medical or treatment regimen.</b></label>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- Active Diagnoses --}}
    <table class="table table-borderless m-0">
        <tr>
            <td colspan="2" class="p-0">
                <table class="table table-bordered m-0">
                    <tr>
                        <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Active Diagnoses</h3></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bg-secondary-subtle">
                           <b>M1021. Primary Diagnosis &amp; M1023. Other Diagnoses</b>
                        </td>
                     </tr>
                    <tr>
                        <td class="text-center"><b>Column 1</b></td>
                        <td class="text-center"><b>Column 2</b></td>
                     </tr>
                     <tr>
                        <td>Diagnoses (Sequencing of diagnoses should reflect the seriousness of each condition and support the disciplines and services provided)</td>
                        <td>ICD-10-CM and symptom control rating for each condition. Note that the sequencing of these ratings may not match the sequencing of the diagnoses</td>
                     </tr>

                     {{-- M1021. Primary Diagnosis --}}
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1021. Primary Diagnosis</b>
                        </td>
                     </tr>
                     <tr>
                        <td>a. {{ $actDiagnosis->parimaryOne }}</td>
                        <td>
                           <p class="mt-0 mb-1">V, W, X, Y Not allowed</p>
                           <label style="margin-right: 10px;">a. {{ $actDiagnosis->primaryAllow }}</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->primaryAllowValue0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->primaryAllowValue1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->primaryAllowValue2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->primaryAllowValue3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->primaryAllowValue4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4</label>
                        </td>
                     </tr>

                     {{-- M1023. Other Diagnoses --}}
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1023. Other Diagnoses</b>
                        </td>
                     </tr>
                     <tr>
                        <td>b. {{ $actDiagnosis->otherdig }}</td>
                        <td>
                           <p class="mt-0 mb-0">V, W, X, Y Not allowed</p>
                           <label style="margin-right: 10px;">b. {{ $actDiagnosis->otherDiagnosisb }}</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisb0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisb1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisb2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisb3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisb4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4</label>
                        </td>
                     </tr>
                     <tr>
                        <td>c. {{ $actDiagnosis->otherDiagnosisCHeading }}</td>
                        <td>
                           <p class="mt-0 mb-0">V, W, X, Y Not allowed</p>
                           <label style="margin-right: 10px;">c. {{ $actDiagnosis->otherDiagnosisc }}</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisc0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisc1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisc2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisc3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisc4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4</label>
                        </td>
                     </tr>
                     <tr>
                        <td>d. {{ $actDiagnosis->otherDiagnosisDHeding }}</td>
                        <td>
                           <p class="mt-0 mb-0">V, W, X, Y Not allowed</p>
                           <label style="margin-right: 10px;">d. {{ $actDiagnosis->otherDiagnosisd }}</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisd0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisd1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisd2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisd3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisd4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4</label>
                        </td>
                     </tr>
                     <tr>
                        <td>e. {{ $actDiagnosis->otherDiagnosisEHeading }}</td>
                        <td>
                           <p class="mt-0 mb-0">V, W, X, Y Not allowed</p>
                           <label style="margin-right: 10px;">e. {{ $actDiagnosis->otherDiagnosise }}</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosise0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosise1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosise2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosise3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosise4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4</label>
                        </td>
                     </tr>
                     <tr>
                        <td>f. {{ $actDiagnosis->otherDiagnosisFHeading }}</td>
                        <td>
                           <p class="mt-0 mb-0">V, W, X, Y Not allowed</p>
                           <label style="margin-right: 10px;">f. {{ $actDiagnosis->otherDiagnosisf }}</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisf0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisf1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisf2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisf3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3</label>
                           <label style="margin-left: 10px;"><input {{ $actDiagnosis->otherDiagnosisf4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4</label>
                        </td>
                     </tr>

                     {{-- M1028 --}}
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <strong>M1028. Active Diagnoses – Comorbidities and Co-existing Conditions</strong>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2">
                            <div><input {{ $actDiagnosis->activeDiogonisis ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Peripheral Vascular Disease (PVD) or Peripheral Arterial Disease (PAD)</b></div>
                            <div><input {{ $actDiagnosis->diabetesMellitus ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b>Diabetes Mellitus (DM)</b></div>
                            <div><input {{ $actDiagnosis->diogonisisNoa ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>None of the above</b></div>
                        </td>
                     </tr>
                </table>
            </td>
        </tr>
    </table>

    {{-- Health Conditions --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;padding-bottom:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td class="bg-black text-white text-center"><h3 class="m-0">Health Conditions</h3></td>
                        </tr>

                        {{-- M1033. Risk for Hospitalization --}}
                        <tr>
                            <td class="bg-secondary-subtle">
                                <b>M1033. Risk for Hospitalization</b>
                                <p class="m-0" style="font-size: 13px">Which of the following signs or symptoms characterize this patient as at risk for hospitalization?</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><input {{$healthCon->historyOfFalls===0 ? 'checked' : '' }} type="checkbox" name="historyOfFalls" value="0" class="form-check-input"> 1. <b>History of falls (2
                                    or more falls – or any fall with an injury – in the past 12 months)</b></div>
                                <div><input {{$healthCon->unintentional===1 ? 'checked' : '' }} type="checkbox" name="unintentional" value="1" class="form-check-input"> 2. <b>Unintentional weight
                                        loss of a total of 10 pounds or more in the past 12 months</b></div>
                                <div><input {{$healthCon->multipleHospital===2 ? 'checked' : '' }} type="checkbox" name="multipleHospital" value="2" class="form-check-input"> 3. <b>Multiple hospitalizations (2 or more)
                                            in the past 6 months</b></div>
                                <div><input {{$healthCon->multipleEmergency===3 ? 'checked' : '' }} type="checkbox" name="multipleEmergency" value="3" class="form-check-input"> 4. <b>Multiple emergency department visits
                                                (2 or more) in the past 6 months</b></div>
                                <div><input {{$healthCon->declineInMental===4 ? 'checked' : '' }} type="checkbox" name="declineInMental" value="4" class="form-check-input"> 5. <b>, emotional, or
                                                    behavioral status in the past 3 months</b></div>
                                <div><input {{$healthCon->reportedOrObserved===5 ? 'checked' : '' }} type="checkbox" name="reportedOrObserved" value="5" class="form-check-input"> 6. <b>Reported or observed history of
                                                        difficulty complying with any medical instructions (for example, medications,diet, exercise) in the
                                                    past 3 months</b></div>
                                <div><input {{$healthCon->currentlyTaking===6 ? 'checked' : '' }} type="checkbox" name="currentlyTaking" value="6" class="form-check-input"> 7. <b>Currently taking 5 or more
                                                        medications</b></div>
                                <div><input {{$healthCon->currentlyReports===7 ? 'checked' : '' }} type="checkbox" name="currentlyReports" value="7" class="form-check-input"> 8. <b>Currently reports
                                                            exhaustion</b></div>
                                <div><input {{$healthCon->otherRisk===8 ? 'checked' : '' }} type="checkbox" name="otherRisk" value="8" class="form-check-input"> 9. <b>Other risk(s) not listed in
                                                                1-8</b></div>
                                <div><input {{$healthCon->none===0 ? 'checked' : '' }} type="checkbox" name="none" value="0" class="form-check-input"> 10. <b>None of the above</b></div>
                            </td>
                        </tr>

                        {{-- J0510. Pain Effect on Sleep --}}
                        <tr>
                            <td class="bg-secondary-subtle">
                                <b>J0510. Pain Effect on Sleep</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0">
                                <table class="table table-borderless m-0">
                                    <tr>
                                        <td colspan="3" class="pb-1"><i>Ask patient: "Over the past 5 days, <b>how much of the time has pain made it hard for you to sleep at night</b>"</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="pb-0 pt-0"><input style="position: relative;top:4px;" {{$healthCon->painSleep===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Does not apply – I have not had any pain or hurting in the past 5 days</b></td>
                                    </tr>
                                    <tr>
                                        <td class="pt-0 pb-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->painSleep===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Rarely or not at all</b></td>
                                        <td class="pt-0 pb-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->painSleep===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Occasionally</b></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->painSleep===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Frequently</b></td>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->painSleep===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Almost constantly</b></td>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->painSleep===5 ? 'checked' : '' }} type="radio" class="form-check-input"> 5. <b>Unable to answer</b></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        {{-- J0520. Pain Interference with Therapy Activities --}}
                        <tr>
                            <td class="bg-secondary-subtle">
                                <b>J0520. Pain Interference with Therapy Activities</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0">
                                <table class="table table-borderless m-0">
                                    <tr>
                                        <td colspan="3" class="pb-1"><i>Ask patient: "Over the past 5 days, <b>how often have you limited your participation in rehabilitation therapy sessions due to pain?</b>"</i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="pb-0 pt-0"><input style="position: relative;top:4px;" {{$healthCon->rehabilitation===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>Does not apply – I have not received rehabilitation therapy in the past 5 days</b></td>
                                    </tr>
                                    <tr>
                                        <td class="pt-0 pb-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->rehabilitation===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Rarely or not at all</b></td>
                                        <td class="pt-0 pb-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->rehabilitation===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Occasionally</b></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->rehabilitation===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Frequently</b></td>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->rehabilitation===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Almost constantly</b></td>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->rehabilitation===5 ? 'checked' : '' }} type="radio" class="form-check-input"> 5. <b>Unable to answer</b></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        {{-- J0530. Pain Interference with Day-to-Day Activities --}}
                        <tr>
                            <td class="bg-secondary-subtle">
                                <b>J0530. Pain Interference with Day-to-Day Activities</b>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0">
                                <table class="table table-borderless m-0">
                                    <tr>
                                        <td colspan="3" class="pb-1"><i>Ask patient: "Over the past 5 days, <b>how often have you limited your day-to-day activities (excluding rehabilitation therapy sessions) because of pain?</b>"</i></td>
                                    </tr>
                                    <tr>
                                        <td class="pt-0 pb-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->dayDayActivities===1 ? 'checked' : '' }} type="radio" class="form-check-input"> 1. <b>Rarely or not at all</b></td>
                                        <td class="pt-0 pb-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->dayDayActivities===2 ? 'checked' : '' }} type="radio" class="form-check-input"> 2. <b>Occasionally</b></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->dayDayActivities===3 ? 'checked' : '' }} type="radio" class="form-check-input"> 3. <b>Frequently</b></td>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->dayDayActivities===4 ? 'checked' : '' }} type="radio" class="form-check-input"> 4. <b>Almost constantly</b></td>
                                        <td class="pt-0 align-top"><input style="position: relative;top:4px;" {{$healthCon->dayDayActivities===8 ? 'checked' : '' }} type="radio" class="form-check-input"> 8. <b>Unable to answer</b></td>
                                    </tr>
                                </table>
                                
                            </td>
                        </tr>

                        {{-- J0530. Pain Interference with Day-to-Day Activities --}}
                        <tr>
                            <td class="bg-secondary-subtle">
                                <b>J1800. Any Falls Since SOC/ROC,</b> whichever is more recent
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mt-0 mb-0">Has the patient <b>had any falls since SOC/ROC</b>, whichever is more recent?</p>
                                <div><input style="position: relative;top:4px;" {{$healthCon->anyFalls===0 ? 'checked' : '' }} type="radio" class="form-check-input"> 0. <b>No</b></div>
                            </td>
                        </tr>

                        {{-- J1900. Number of Falls Since SOC/ROC --}}
                        <tr>
                            <td class="bg-secondary-subtle">
                                <b>J1900. Number of Falls Since SOC/ROC</b>, whichever is more recent
                            </td>
                        </tr>
                        <tr>
                            <td class="p-0">
                                <table class="table table-bordered m-0">
                                    <tr>
                                        <td class="border-right-0">
                                            <h4>Coding:</h4>
                                            <ul style="list-style: none;padding-left:10px" class="m-0">
                                                <li>0. <b>None</b></li>
                                                <li>1. <b>One</b></li>
                                                <li>2. <b>Two or more</b></li>
                                            </ul>
                                        </td>
                                        <td class="p-0 border-0 overflow-hidden">
                                            <table class="table table-bordered m-0">
                                                <tr>
                                                  <td>{{$healthCon->noInjury }}</td>
                                                  <td><label for="">A. <b>No injury:</b> No evidence of any injury is noted on physical assessment by the nurse or primary care clinician; no complaints of pain or injury by the patient; no change in the patient's behavior is noted after the fall</label></td>
                                              </tr>
                                              <tr>
                                                  <td>{{$healthCon->injurySkin }}</td>
                                                  <td><label for="">B. <b>Injury (except major):</b> Skin tears, abrasions, lacerations, superficial bruises, hematomas, and sprains; or any fall-related injury that causes the patient to complain of pain</label></td>
                                              </tr>
                                              <tr>
                                                  <td>{{$healthCon->majorInjury }}</td>
                                                  <td><label for="">C. <b>Major injury:</b> Bone fractures, joint dislocations, closed head injuries with altered consciousness, subdural hematoma</label></td>
                                              </tr>
                                          </table>
                                      </td>
                                  </tr>
                              </table>
                            </td>
                        </tr>

                        {{-- M1400 --}}
                        <tr>
                            <td class="bg-secondary-subtle">
                                <b>M1400</b>. When is the patient dyspneic or noticeably <b>Short of Breath</b>?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><input style="position: relative;top:4px;" {{$healthCon->dyspneic===0 ? 'checked' : '' }}  type="radio" class="form-check-input"> 0. <b>Patient is not short of breath</b></div>
                                <div><input style="position: relative;top:4px;" {{$healthCon->dyspneic===1 ? 'checked' : '' }}  type="radio" class="form-check-input"> 1. <b>When walking more than 20 feet, climbing stairs</b></div>
                                <div><input style="position: relative;top:4px;" {{$healthCon->dyspneic===2 ? 'checked' : '' }}  type="radio" class="form-check-input"> 2. <b>With moderate exertion</b> (for example, while dressing, using commode or bedpan, walking distances less than 20 feet)</div>
                                <div><input style="position: relative;top:4px;" {{$healthCon->dyspneic===3 ? 'checked' : '' }}  type="radio" class="form-check-input"> 3. <b>With minimal exertion</b> (for example, while eating, talking, or performing other ADLs) or with agitation</div>
                                <div><input style="position: relative;top:4px;" {{$healthCon->dyspneic===4 ? 'checked' : '' }}  type="radio" class="form-check-input"> 4. <b>At rest</b> (during day or night)</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    {{-- Swallowing/Nutritional Status --}}
    <table class="table table-bordered m-0">
        <tr>
            <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Swallowing/Nutritional Status</h3></td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle" colspan="2">
                <b>M1060. Height and Weight –</b> While measuring, if the number is X.1-X.4 round down; X.5 or greater round up.
            </td>
        </tr>
        <tr>
            <td>{{ $swallNutritional->height }} <b class="d-block text-center">inches</b></td>
            <td><label for="">A. <b>Height</b> (in inches). Record most recent height measure since the most recent SOC/ROC</label></td>
        </tr>
        <tr>
            <td>{{ $swallNutritional->weight }} <b class="d-block text-center">pounds</b></td>
            <td><label for="">A. <b>Weight</b> (in pounds). Base weight on most recent measure in last 30 days; measure weight consistently, according tostandard agency practice (for example, in a.m. after voiding, before meal, with shoes off, etc.)</label></td>
        </tr>
    </table>

    {{-- SOC/ROC --}}
    <table class="table table-bordered mt-1">
        <tr>
            <td class="bg-secondary-subtle" colspan="2">
                <b>SOC/ROC</b>
            </td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle" colspan="2">
                <b>K0520. Nutritional Approaches</b>
            </td>
        </tr>
        <tr>
            <td>1. <b>On Admission</b></td>
            <td class="bg-secondary-subtle text-center"><b>1.<br>On Admission</b></td>
        </tr>
        <tr>
            <td>A. <b>Parenteral/IV feeding</b></td>
            <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->parenteral===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->feeding===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
            <td>B. <b>Feeding tube</b> (e.g., nasogastric or abdominal (PEG))</td>
        </tr>
        <tr>
            <td>C. <b>Mechanically altered diet</b> – require change in texture of food or liquids(e.g., pureed food, thickened liquids)</td>
            <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->mechanically===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
        </tr>
        <tr>
            <td>D. <b>Therapeutic diet</b> (e.g., low salt, diabetic, low cholesterol)</td>
            <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->therapeutic===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
        </tr>
        <tr>
            <td>Z. <b>None of the above</b></td>
            <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->noa===4 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
        </tr>
    </table>

    {{-- Discharge --}}
    <table class="table table-borderless mt-1">
        <tr>
            <td colspan="2" class="p-0">
                <table class="table table-bordered m-0">
                    <tr>
                        <td class="bg-secondary-subtle" colspan="3">
                            <b>Discharge</b>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-secondary-subtle" colspan="3">
                            <b>K0520. Nutritional Approaches</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>4. <b>Last 7 days</b>
                                <span class="ms-3 d-block">Check all of the nutritional approaches that were received in the last 7 days</span>
                            </p>
                            <p>5. <b>At discharge</b>
                                <span class="ms-3 d-block">Check all of the nutritional approaches that were being received at discharge</span>
                            </p>
                        </td>
                        <td class="bg-secondary-subtle text-center"><b>4.<br>Last 7 days</b></td>
                        <td class="bg-secondary-subtle text-center"><b>5.<br>At discharge</b></td>
                    </tr>
                    <tr>
                        <td>A. <b>Parenteral/IV feeding</b></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{ $swallNutritional->parenteralNo===0 ? 'checked' : '' }} type="checkbox" class="form-check-input">
                        </td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{ $swallNutritional->parenteralYes===1 ? 'checked' : '' }} type="checkbox" class="form-check-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-secondary-subtle text-center"></td>
                        <td>B. <b>Feeding tube</b> (e.g., nasogastric or abdominal (PEG))</td>
                        <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->feedingTubeYes===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>C. <b>Mechanically altered diet</b> – require change in texture of food or liquids(e.g., pureed food, thickened liquids)</td>
                        <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->mechanicallyAlteredNo===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->mechanicallyAlteredYes===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>D. <b>Therapeutic diet</b> (e.g., low salt, diabetic, low cholesterol)</td>
                        <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->therapeuticDietNo===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->therapeuticDietYes===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>Z. <b>None of the above</b></td>
                        <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->noneofAbobeNo===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center"><input {{ $swallNutritional->noneofAbobeYes===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    {{-- M1870. Feeding or Eating --}}
    <table class="table table-bordered mt-1">
        <tr>
            <td class="bg-secondary-subtle" colspan="2">
                <b>M1870. Feeding or Eating</b>
                <p class="m-0" style="font-size: 13px">Current ability to feed self meals and snacks safely. Note: This refers only to the process of <u>eating</u>, <u>chewing</u>, and <u>swallowing</u>, <u>not</u> <u>preparing</u> the food to be eaten.</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div><input {{ $swallNutritional->feedingEatingNo===0 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 0. <b>Able to independently feed self.</b></div>
                <div>
                    <input {{ $swallNutritional->feedingEatingYes===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 1. <b>Able to feed self independently but requires:</b>
                    <p class="mt-0" style="margin-left: 20px;">
                        a. <b>meal set-up; <u>OR</u></b><br>
                        b. <b>intermittent assistance or supervision from another person; <u>OR</u></b><br>
                        c. <b>a liquid, pureed, or ground meat diet.</b>
                    </p>
                </div>
                <div><input {{ $swallNutritional->feedingEatingUnable===1 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 2. <b><u>Unable</u> to feed self and must be assisted or supervised throughout the meal/snack.</b></div>
                <div><input {{ $swallNutritional->feedingEatingAble===2 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 3. <b>Able to take in nutrients orally and receives supplemental nutrients through a nasogastric tube or gastrostomy.</b></div>
                <div><input {{ $swallNutritional->feedingEatingUnableGastrostomy===3 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 4. <b><u>Unable</u> to take in nutrients orally and is fed nutrients through a nasogastric tube or gastrostomy.</b></div>
                <div><input {{ $swallNutritional->feedingEatingUnableNutrients===4 ? 'checked' : '' }} type="checkbox" class="form-check-input"> 5. <b>Unable to take in nutrients orally or by tube feeding.</b></div>
            </td>
        </tr>
    </table>
    
    {{-- Skin Conditions --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:0.5pt;padding-bottom:0.5pt;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Skin Conditions</h3></td>
            </tr>

            {{-- M1306 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1306.</b> Does this patient have at least one <b>Unhealed Pressure Ulcer/Injury at Stage 2 or Higher</b> or designated as Unstageable? (Excludes Stage 1 pressure injuries and all healed pressure ulcers/injuries)
                </td>
             </tr>
             <tr>
                <td colspan="2">
                   <span><input style="position: relative;top:4px" {{$skinCondition->patientUnhealedPressureUlcer===0?'checked':''}} type="radio" class="form-check-input"> 0. <b>No</b></span>
                   <span style="margin-left:30px"><input style="position: relative;top:4px" {{$skinCondition->patientUnhealedPressureUlcer===1?'checked':''}} type="radio" class="form-check-input"> 1. <b>Yes</b></span>
                </td>
             </tr>

             {{-- M1307 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1307. The Oldest Stage 2 Pressure Ulcer</b> that is present at discharge: (Excludes healed Stage 2 pressure ulcers)
                </td>
             </tr>
             <tr>
                <td colspan="2">
                   <div><input {{$skinCondition->recentSocAssessment===0?'checked':''}} type="checkbox" class="form-check-input"> 1. <b>Was present at the most recent SOC/ROC assessment</b></div>
                   <div>
                      2. <b>Developed since the most recent SOC/ROC assessment.</b> Record date pressure ulcer first identified:
                      <div>
                        <span>Month<br><b>{{$skinCondition->socmonth}}</b></span>
                        <span style="margin-left: 20px">Day<br><b>{{$skinCondition->socday}}</b></span>
                        <span style="margin-left: 20px">Year<br><b>{{$skinCondition->socyear}}</b></span>
                      </div>
                   </div>
                   <div><input {{$skinCondition->dischargeStage2===1?'checked':''}} type="checkbox" class="form-check-input"> NA <b>No Stage 2 pressure ulcers are present at discharge</b></div>
                </td>
             </tr>
        </table>
    </div>

    {{-- SOC/ROC --}}
    <table class="table table-bordered mt-1">
        <tr>
           <td class="bg-secondary-subtle" colspan="2">
              <b>SOC/ROC</b>
           </td>
        </tr>
        <tr>
           <td class="bg-secondary-subtle" colspan="2">
              <b>M1311. Current Number of Unhealed Pressure Ulcers/Injuries at Each Stage</b>
           </td>
        </tr>
        <tr>
           <td>{{$skinCondition->socstagea1}}</td>
           <td><label for="">A1. <b>Stage 2:</b> Partial thickness loss of dermis presenting as a shallow open ulcer with a red or pink wound bed, without slough. May also present as an intact or open/ruptured blister.<br><b>Number of Stage 2 pressure ulcers</b></label></td>
        </tr>
        <tr>
           <td>{{$skinCondition->socstageb1}}</td>
           <td><label for="">B1. <b>Stage 3:</b> Full thickness tissue loss. Subcutaneous fat may be visible but bone, tendon, or muscle is not exposed. Slough may be present but does not obscure the depth of tissue loss. May include undermining and tunneling.<br><b>Number of Stage 3 pressure ulcers</b></label></td>
        </tr>
        <tr>
           <td>{{$skinCondition->socstagec1}}</td>
           <td><label for="">C1. <b>Stage 4:</b> Full thickness tissue loss with exposed bone, tendon, or muscle. Slough or eschar may be present on some parts of the wound bed. Often includes undermining and tunneling.<br><b>Number of Stage 4 pressure ulcers</b></label></td>
        </tr>
        <tr>
           <td>{{$skinCondition->unstageable}}</td>
           <td><label for="">D1. <b>Unstageable: Non-removable dressing/device:</b> Known but not stageable due to non-removable dressing/device<br><b>Number of unstageable pressure ulcers/injuries due to non-removable dressing/device</b></label></td>
        </tr>
        <tr>
           <td>{{$skinCondition->sloughEschar}}</td>
           <td><label for="">E1. <b>Unstageable: Slough and/or eschar:</b> Known but not stageable due to coverage of wound bed by slough and/or eschar<br><b>Number of unstageable pressure ulcers due to coverage of wound bed by slough and/or eschar</b></label></td>
        </tr>
        <tr>
           <td>{{$skinCondition->unstageablef1}}</td>
           <td><label for="">F1. <b>Unstageable: Deep tissue injury:</b><br><b>Number of unstageable pressure injuries presenting as deep tissue injury</b></label></td>
        </tr>
    </table>

    {{-- Discharge --}}
    <div style="padding-right: 1px;" class="mt-1">
        <table class="table table-bordered">
            <tr>
               <td class="bg-secondary-subtle" colspan="2">
                  <b>Discharge</b>
               </td>
            </tr>

            {{-- M1311. --}}
            <tr>
               <td class="bg-secondary-subtle" colspan="2">
                  <b>M1311. Current Number of Unhealed Pressure Ulcers/Injuries at Each Stage</b>
               </td>
            </tr>
            <tr>
               <td colspan="2" class="p-0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td>{{$skinCondition->unstageablea1}}</td>
                            <td>
                                A1. <b>Stage 2:</b> Partial thickness loss of dermis presenting as a shallow open ulcer with a red or pink wound bed, without slough. May also present as an intact or open/ruptured blister.<br>
                                <b>Number of Stage 2 pressure ulcers</b>
                            </td>
                        </tr>
                    </table>
                    <table class="table table-borderless m-0">
                        <tr>
                            <td>{{$skinCondition->unstageablea2}}</td>
                            <td>
                                A2. <b>Number of <u>these</u> Stage 2 pressure ulcers that were present at most recent SOC/ROC</b><br> – enter how many were noted at the time of most recent SOC/ROC
                            </td>
                        </tr>
                    </table>
               </td>
            </tr>
            <tr>
               <td colspan="2" class="p-0">
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageableb1}}</td>
                        <td>
                            B1. <b>Stage 3:</b> Full thickness tissue loss. Subcutaneous fat may be visible but bone, tendon, or muscle is not exposed. Slough may be present but does not obscure the depth of tissue loss. May include undermining and tunneling.<br>
                           <b>Number of Stage 3 pressure ulcers</b>
                        </td>
                    </tr>
                </table>
    
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageableb2}}</td>
                        <td>
                            B2. <b>Number of <u>these</u> Stage 3 pressure ulcers that were present at most recent SOC/ROC</b><br> – enter how many were noted at the time of most recent SOC/ROC
                        </td>
                    </tr>
                </table>
               </td>
            </tr>
            <tr>
               <td colspan="2" class="p-0">
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageableac1}}</td>
                        <td>
                            C1. <b>Stage 4:</b> Full thickness tissue loss with exposed bone, tendon, or muscle. Slough or eschar may be present on some parts of the wound bed. Often includes undermining and tunneling.<br>
                           <b>Number of Stage 4 pressure ulcers</b>
                        </td>
                    </tr>
                </table>
    
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageablec2}}</td>
                        <td>
                            C2. <b>Number of <u>these</u> Stage 4 pressure ulcers that were present at most recent SOC/ROC</b><br> – enter how many were noted at the time of most recent SOC/ROC
                        </td>
                    </tr>
                </table>
               </td>
            </tr>
            <tr>
               <td colspan="2" class="p-0">
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageabled1}}</td>
                        <td>
                            D1. <b>Unstageable: Non-removable dressing/device:</b> Known but not stageable due to non-removable dressing/device<br>
                           <b>Number of unstageable pressure ulcers/injuries due to non-removable dressing/device</b>
                        </td>
                    </tr>
                </table>
    
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageabled2}}</td>
                        <td>
                            D2. <b>Number of <u>these</u> unstageable pressure ulcers/injuries that were present at most recent SOC/ROC</b><br> – enter how many were noted at the time of most recent SOC/ROC
                        </td>
                    </tr>
                </table>
               </td>
            </tr>
            <tr>
               <td colspan="2" class="p-0">
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageable1}}</td>
                        <td>
                            E1. <b>Unstageable: Slough and/or eschar:</b> Known but not stageable due to coverage of wound bed by slough and/or eschar<br>
                           <b>Number of unstageable pressure ulcers due to coverage of wound bed by slough and/or eschar</b>
                        </td>
                    </tr>
                </table>
    
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageablee2}}</td>
                        <td>
                            E2. <b>Number of <u>these</u> unstageable pressure ulcers that were present at most recent SOC/ROC</b><br> – enter how many were noted at the time of most recent SOC/ROC
                        </td>
                    </tr>
                </table>
               </td>
            </tr>
            <tr>
               <td colspan="2" class="p-0">
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageablef1Injury}}</td>
                        <td>
                            F1. <b>Unstageable: Deep tissue injury</b><br>
                           <b>Number of unstageable pressure injuries presenting as deep tissue injury</b>
                        </td>
                    </tr>
                </table>
       
                <table class="table table-borderless m-0">
                    <tr>
                        <td>{{$skinCondition->unstageablef2Injury}}</td>
                        <td>
                            F2. <b>Number of <u>these</u> unstageable pressure injuries that were present at most recent SOC/ROC</b><br> – enter how many were noted at the time of most recent SOC/ROC
                        </td>
                    </tr>
                </table>
               </td>
            </tr>

            {{-- M1322 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1322. Current Number of Stage 1 Pressure Injuries</b>
                   <p class="m-0" style="font-size: 13px">Intact skin with non-blanchable redness of a localized area usually over a bony prominence. Darkly pigmented skin may not have a visible blanching; in dark skin tones only, it may appear with persistent blue or purple hues.</p>
                </td>
             </tr>
             <tr>
                <td style="width: 120px;">{{$skinCondition->pressureInjuries}}</td>
                <td>
                   <label><b>0</b></label>,
                   <label style="margin-left: 10px;"><b>1</b></label>,
                   <label style="margin-left: 10px;"><b>2</b></label>,
                   <label style="margin-left: 10px;"><b>3</b></label>,
                   <label style="margin-left: 10px;"><b>4 or more</b></label>
                </td>
             </tr>

             {{-- M1324 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1324. Stage of Most Problematic Unhealed Pressure Ulcer/Injury that is Stageable</b>
                   <p class="m-0" style="font-size: 13px">Excludes pressure ulcer/injury that cannot be staged due to a non-removable dressing/device, coverage of wound bed by slough and/or eschar, or deep tissue injury.</p>
                </td>
             </tr>
             <tr>
                <td colspan="2" class="p-0">
                    <table class="table table-borderless m-0">
                        <tr>
                            <td class="pb-0"><input style="position: relative;top:4px" {{$skinCondition->stageofUnhealedPressure===0 ? 'checked' : ''}} type="radio" class="form-check-input"> 1. <b>Stage 1</b></td>
                            <td class="pb-0"><input style="position: relative;top:4px" {{$skinCondition->stageofUnhealedPressure===1 ? 'checked' : ''}} type="radio" class="form-check-input"> 2. <b>Stage 2</b></td>
                            <td class="pb-0"><input style="position: relative;top:4px" {{$skinCondition->stageofUnhealedPressure===2 ? 'checked' : ''}} type="radio" class="form-check-input"> 3. <b>Stage 3</b></td>
                            <td class="pb-0"><input style="position: relative;top:4px" {{$skinCondition->stageofUnhealedPressure===3 ? 'checked' : ''}} type="radio" class="form-check-input"> 4. <b>Stage 4</b></td>
                        </tr>
                        <tr>
                            <td class="pt-0" colspan="4">
                                <input style="position: relative;top:4px" {{$skinCondition->stageofUnhealedPressure===4 ? 'checked' : ''}} type="radio" class="form-check-input"> NA <b>Patient has no pressure ulcers/injuries or no stageable pressure ulcers/injuries</b>
                            </td>
                        </tr>
                    </table>
                </td>
             </tr>

             {{-- M1330 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1330</b>. Does this patient have a <b>Stasis Ulcer</b>?
                </td>
             </tr>
             <tr>
                <td colspan="2">
                   <div><label><input style="position: relative;top:4px" {{$skinCondition->patientStasisUlcer===0 ? 'checked' : ''}} type="radio" class="form-check-input"> 0. <b>No</b></label></div>
                   <div><label><input style="position: relative;top:4px" {{$skinCondition->patientStasisUlcer===1 ? 'checked' : ''}} type="radio" class="form-check-input"> 1. <b>Yes, patient has BOTH observable and unobservable stasis ulcers</b></label></div>
                   <div><label><input style="position: relative;top:4px" {{$skinCondition->patientStasisUlcer===2 ? 'checked' : ''}} type="radio" class="form-check-input"> 2. <b>Yes, patient has observable stasis ulcers ONLY</b></label></div>
                   <div><label><input style="position: relative;top:4px" {{$skinCondition->patientStasisUlcer===3 ? 'checked' : ''}} type="radio" class="form-check-input"> 3. <b>Yes, patient has unobservable stasis ulcers ONLY</b> (known but not observable due to non-removable dressing/device)</label></div>
                </td>
             </tr>

             {{-- M1332 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1332. Current Number of Stasis Ulcer(s) that are Observable</b>
                </td>
             </tr>
             <tr>
                <td style="width: 120px;">{{$skinCondition->stasisUlcer}}</td>
                <td>
                   <span>1. <b>One</b></span>
                   <span style="margin-left: 10px;">2. <b>Two</b></span>
                   <span style="margin-left: 10px;">3. <b>Three</b></span>
                   <span style="margin-left: 10px;">4. <b>Four or more</b></span>
                </td>
             </tr>

             {{-- M1334 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1334. Status of Most Problematic Stasis Ulcer that is Observable</b>
                </td>
             </tr>
             <tr>
                <td colspan="2" class="p-0">
                   <table class="table table-borderless m-0">
                    <tr>
                        <td><input style="position: relative;top:4px" {{$skinCondition->statusofStasisUlcer===0 ? 'checked' : ''}} type="radio" class="form-check-input"> 1. <b>Fully granulating</b></td>
                        <td><input style="position: relative;top:4px" {{$skinCondition->statusofStasisUlcer===1 ? 'checked' : ''}} type="radio" class="form-check-input"> 2. <b>Early/partial granulation</b></td>
                        <td><input style="position: relative;top:4px" {{$skinCondition->statusofStasisUlcer===2 ? 'checked' : ''}} type="radio" class="form-check-input"> 3. <b>Not healing</b></td>
                    </tr>
                   </table>
                </td>
             </tr>

             {{-- M1340 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1340.</b> Does this patient have a <b>Surgical Wound</b>?
                </td>
             </tr>
             <tr>
                <td colspan="2">
                   <div><input style="position: relative;top:4px" {{$skinCondition->patientSurgicalWound===0 ? 'checked' : ''}} type="radio" class="form-check-input"> 0. <b>No</b></div>
                   <div><input style="position: relative;top:4px" {{$skinCondition->patientSurgicalWound===1 ? 'checked' : ''}} type="radio" class="form-check-input"> 1. <b>Yes, patient has at least one observable surgical wound</b></div>
                   <div><input style="position: relative;top:4px" {{$skinCondition->patientSurgicalWound===2 ? 'checked' : ''}} type="radio" class="form-check-input"> 2. <b>Surgical wound known but not observable due to non-removable dressing/device</b></div>
                </td>
             </tr>

             {{-- M1342 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1342. Status of Most Problematic Surgical Wound that is Observable</b>
                </td>
             </tr>
             <tr>
                <td class="p-0" colspan="2">
                   <table class="table table-borderless m-0">
                    <tr>
                        <td><input style="position: relative;top:4px" {{$skinCondition->statusSurgicalWound===0 ? 'checked' : ''}} type="radio" class="form-check-input"> 0. <b>Newly epithelialized</b></td>
                        <td><input style="position: relative;top:4px" {{$skinCondition->statusSurgicalWound===1 ? 'checked' : ''}} type="radio" class="form-check-input"> 1. <b>Fully granulating</b></td>
                        <td><input style="position: relative;top:4px" {{$skinCondition->statusSurgicalWound===2 ? 'checked' : ''}} type="radio" class="form-check-input"> 2. <b>Early/partial granulation</b></td>
                        <td><input style="position: relative;top:4px" {{$skinCondition->statusSurgicalWound===3 ? 'checked' : ''}} type="radio" class="form-check-input"> 3. <b>Not healing</b></td>
                    </tr>
                   </table>
                </td>
             </tr>
         </table>
    </div>

    {{-- Medications --}}
    <table class="table table-borderless mt-1">
        <tr>
            <td colspan="2" class="p-0">
                <table class="table table-bordered m-0">
                    <tr>
                        <td class="bg-black" colspan="3">
                            <h3 class="text-center m-0 text-white">Medications</h3>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-secondary-subtle" colspan="3">
                            <b>SOC/ROC and Discharge</b>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-secondary-subtle" colspan="3">
                            <b>N0415. High-Risk Drug Classes: Use and Indication</b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mt-0">1. <b>Is taking</b><br>
                                <span>Check if the patient is taking any medications by pharmacologicalclassification, not how it is used, in the following classes</span>
                            </p>
                            <p class="m-0">2. <b>Indication noted</b><br>
                                <span>If Column 1 is checked, check if there is an indication noted for allmedications in the drug class</span>
                            </p>
                        </td>
                        <td class="bg-secondary-subtle text-center"><b>1.<br>Is Taking</b></td>
                        <td class="bg-secondary-subtle text-center"><b>2.<br>Indication Noted</b></td>
                    </tr>
                    <tr>
                        <td>A. <b>Antipsychotic</b></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->antipsychoticNo===0 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->antipsychoticYes===1 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>E. <b>Anticoagulant</b></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->anticoagulantNo===0 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->anticoagulantYes===1 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>F. <b>Antibiotic</b></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->antibioticNo===0 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->antibioticYes===1 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>H. <b>Opioid</b></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->opioidNo===0 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->opioidYes===1 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>I. <b>Antiplatelet</b></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->antiplateletNo===0 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->antiplateletYes===1 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>J. <b>Hypoglycemic</b> (including insulin)</td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->hypoglycemicNo===0 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->hypoglycemicYes===1 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                    </tr>
                    <tr>
                        <td>Z. <b>None of the Above</b></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->noneofAbobeNo===0 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                        <td class="bg-secondary-subtle text-center">
                            <input {{$medication->noneofAbobeYes===1 ? 'checked' : ''}} type="checkbox" class="form-check-input"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="mt-1" style="border: 1px solid #000;padding-right:1px;padding-bottom:1px;">
        <table class="table table-borderless m-0">
            {{-- M2001 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>M2001. Drug Regimen Review</b>
                    <p class="p-0" style="font-size:13px;">Did a complete drug regimen review identify potential clinically significant medication issues?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input style="position: relative;top:4px" {{$medication->drugReview===0 ? 'checked': ''}} type="radio" class="form-check-input"> 0. <b>No – No issues found during review</b></div>
                    <div><input style="position: relative;top:4px" {{$medication->drugReview===0 ? 'checked': ''}} type="radio" class="form-check-input"> 1. <b>Yes – Issues found during review</b></div>
                    <div><input style="position: relative;top:4px" {{$medication->drugReview===0 ? 'checked': ''}} type="radio" class="form-check-input"> 9. <b>NA – Patient is not taking any medications</b></div>
                </td>
            </tr>

            {{-- M2003 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>M2003. Medication Follow-up</b>
                    <p class="p-0" style="font-size:13px;">Did the agency contact a physician (or physician-designee) by midnight of the next calendar day and complete prescribed/recommended actions in response to the identified potential clinically significant medication issues?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><input style="position: relative;top:4px" {{$medication->agencyPhysician===0 ? 'checked': ''}} type="radio" class="form-check-input"> 0. <b>No</b></span>
                    &nbsp; &nbsp;<span><input style="position: relative;top:4px" {{$medication->agencyPhysician===1 ? 'checked': ''}} type="radio" class="form-check-input"> 1. <b>Yes</b></span>
                </td>
            </tr>

            {{-- M2005 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>M2005. Medication Intervention</b>
                    <p class="m-0" style="font-size:13px;">Did the agency contact and complete physician (or physician-designee) prescribed/recommended actions by midnight of the next calendar day each time potential clinically significant medication issues were identified since the SOC/ROC?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><input style="position: relative;top:4px" {{$medication->agencyCompletePhysician===0 ? 'checked': ''}} type="radio" class="form-check-input"> 0. <b>No</b></span>
                    &nbsp; &nbsp;<span><input style="position: relative;top:4px" {{$medication->agencyCompletePhysician===1 ? 'checked': ''}} type="radio" class="form-check-input"> 1. <b>Yes</b></span>
                    <br>
                    <input style="position: relative;top:4px" {{$medication->agencyCompletePhysician===2 ? 'checked': ''}} type="radio" class="form-check-input"> 9. <b>NA –</b> There were no potential clinically significant medication issues identified since SOC/ROC or patient is not taking anymedications
                </td>
            </tr>

            {{-- M2010 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>M2010. Patient/Caregiver High-Risk Drug Education</b>
                    <p class="m-0" style="font-size:13px;">Has the patient/caregiver received instruction on special precautions for all high-risk medications (such as hypoglycemics, anticoagulants, etc.) and how and when to report problems that may occur?</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <span><input style="position: relative;top:4px" {{$medication->instructionSpecial===0 ? 'checked': ''}} type="radio" class="form-check-input"> 0. <b>No</b></span>
                    &nbsp; &nbsp;<span><input style="position: relative;top:4px" {{$medication->instructionSpecial===1 ? 'checked': ''}} type="radio" class="form-check-input"> 1. <b>Yes</b></span>
                    <br>
                    <input style="position: relative;top:4px" {{$medication->instructionSpecial===2 ? 'checked': ''}} type="radio" class="form-check-input"> 9. <b>NA –</b> Patient not taking any high-risk drugs OR patient/caregiver fully knowledgeable about special precautions associatedwith all high-risk medications
                </td>
            </tr>

            {{-- M2020 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>M2020. Management of Oral Medications</b>
                    <p class="m-0" style="font-size:13px;"><u>Patient's current ability</u> to prepare and take all oral medications reliably and safely, including administration of the correct dosage at the appropriate times/intervals. <u>Excludes</u> injectable and IV medications. (NOTE: This refers to ability, not compliance or willingness.)</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{$medication->independently===0 ? 'checked': ''}} type="checkbox" class="form-check-input"> 0. <b>Able to independently take the correct oral medication(s) and proper dosage(s) at the correct times.</b></div>

                    <div><input {{$medication->medication===1 ? 'checked': ''}} type="checkbox" class="form-check-input"> 1. <b>Able to take medication(s) at the correct times if:</b>
                        <p class="mt-0" style="margin-left: 15px;">a. <b>individual dosages are prepared in advance by another person; <u>OR</u></b><br>
                            b. <b>another person develops a drug diary or chart.</b>
                        </p>
                    </div>

                    <div><input {{$medication->correctTimes===2 ? 'checked': ''}} type="checkbox" class="form-check-input"> 2. <b>Able to take medication(s) at the correct times if given reminders by another person at the appropriate times</b></div>

                    <div><input {{$medication->administered===3 ? 'checked': ''}} type="checkbox" class="form-check-input"> 3. <b><u>Unable</u> to take medication unless administered by another person.</b></div>
                    <div><input {{$medication->prescribed===4 ? 'checked': ''}} type="checkbox" class="form-check-input"> NA <b>No oral medications prescribed.</b></div>
                </td>
            </tr>

            {{-- M2030 --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>M2030. Management of Injectable Medications</b>
                    <p class="m-0" style="font-size:13px;"><u>Patient's current ability</u> to prepare and take <u>all</u> prescribed injectable medications reliably and safely, including administration of correct dosage at the appropriate times/intervals. <u>Excludes</u> IV medications.</p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{$medication->managIndependently===0 ? 'checked': ''}} type="checkbox" class="form-check-input"> 0. <b>Able to independently take the correct medication(s) and proper dosage(s) at the correct times.</b></div>

                    <div><input {{$medication->managInjectable===1 ? 'checked': ''}} type="checkbox" class="form-check-input"> 1. <b>Able to take injectable medication(s) at the correct times if:</b>
                        <p class="mt-0" style="margin-left: 15px;">a. <b>individual syringes are prepared in advance by another person; <u>OR</u></b><br>
                            b. <b>another person develops a drug diary or chart.</b>
                        </p>
                    </div>

                    <div><input {{$medication->managCorrectTimes===2 ? 'checked': ''}} type="checkbox" class="form-check-input"> 2. <b>Able to take medication(s) at the correct times if given reminders by another person based on the frequency of theinjection</b></div>

                    <div><input {{$medication->managAdministered===3 ? 'checked': ''}} type="checkbox" class="form-check-input"> 3. <b><u>Unable</u> to take injectable medication unless administered by another person.</b></div>
                    <div><input {{$medication->managNa===4 ? 'checked': ''}} type="checkbox" class="form-check-input"> NA <b>No injectable medications prescribed.</b></div>
                </td>
            </tr>
        </table>
    </div>

    {{-- Special Treatment, Procedures, and Programs --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:1px;padding-bottom:1px;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">Special Treatment, Procedures, and Programs</h3></td>
            </tr>

            {{-- SOC/ROC --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>SOC/ROC</b>
                </td>
             </tr>

             {{-- O0110 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2" style="border-top: 1px solid #000;">
                   <b>O0110. Special Treatments, Procedures, and Programs</b>
                   <p class="m-0" style="font-size: 13px">Check all of the following treatments, procedures, and programs that apply on admission.</p>
                </td>
             </tr>
             <tr>
                <td colspan="2">
                   <b>a. On Admission</b>
                </td>
             </tr>

             {{-- Cancer Treatments --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2"><b>Cancer Treatments</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{$specialTrmnt->chemotherapy===0 ? 'checked': ''}} type="checkbox" name="chemotherapy" value="0" class="form-check-input"> <b>A1. Chemotherapy</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->iv===1 ? 'checked': ''}} type="checkbox" name="iv" value="1" class="form-check-input"> <b>A2. IV</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->oral===1 ? 'checked': ''}} type="checkbox" name="oral" value="1" class="form-check-input"> <b>A3. Oral</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->rocOther===1 ? 'checked': ''}} type="checkbox" name="rocOther" value="1" class="form-check-input"> <b>A10. Other</b>
                    </div>
                    <div><input {{$specialTrmnt->radiation===1 ? 'checked': ''}} type="checkbox" name="radiation" value="1" class="form-check-input"> <b>B1. Radiation</b></div>
                </td>
            </tr>
            
            {{-- Respiratory Therapies --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>Respiratory Therapies</b>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{$specialTrmnt->oxygenTherapy===0 ? 'checked': ''}} type="checkbox" name="oxygenTherapy" value="0" class="form-check-input"> <b>C1. Oxygen Therapy</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->continuous===1 ? 'checked': ''}} type="checkbox" name="continuous" value="1" class="form-check-input"> <b>C2. Continuous</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->intermittent===1 ? 'checked': ''}} type="checkbox" name="intermittent" value="1" class="form-check-input"> <b>C3. Intermittent</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->concentration===1 ? 'checked': ''}} type="checkbox" name="concentration" value="1" class="form-check-input"> <b>C4. High-concentration</b>
                    </div>

                    <div><input {{$specialTrmnt->suctioning===1 ? 'checked': ''}} type="checkbox" name="suctioning" value="1" class="form-check-input"> <b>D1. Suctioning</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->scheduled===1 ? 'checked': ''}} type="checkbox" name="scheduled" value="1" class="form-check-input"> <b>D2. Scheduled</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->needed===1 ? 'checked': ''}} type="checkbox" name="needed" value="1" class="form-check-input"> <b>D3. As Needed</b>
                    </div>
                    <div><input {{$specialTrmnt->tracheostomy===1 ? 'checked': ''}} type="checkbox" name="tracheostomy" value="1" class="form-check-input"> <b>E1. Tracheostomy care</b></div>
                    <div><input {{$specialTrmnt->invasive===1 ? 'checked': ''}} type="checkbox" name="invasive" value="1" class="form-check-input"> <b>F1. Invasive Mechanical Ventilator</b> (ventilator or respirator)</div>
                    <div><input {{$specialTrmnt->nonInvasive===1 ? 'checked': ''}} type="checkbox" name="nonInvasive" value="1" class="form-check-input"> <b>G1. Non-invasive Mechanical Ventilator</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->bipap===1 ? 'checked': ''}} type="checkbox" name="bipap" value="1" class="form-check-input"> <b>G2. BiPAP</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->cpap===1 ? 'checked': ''}} type="checkbox" name="cpap" value="1" class="form-check-input"> <b>G3. CPAP</b>
                    </div>
                </td>
            </tr>


            {{-- Other --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2"><b>Other</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input type="checkbox" {{$specialTrmnt->medications===1 ? 'checked': ''}} name="vasMedications" class="form-check-input"> <b>H1. IV Medications</b></div>
                    <div style="margin-left: 10px">
                        <input type="checkbox" {{$specialTrmnt->vasMedications===1 ? 'checked': ''}} name="vasMedications" class="form-check-input"> <b>H2. Vasoactive medications</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->antibiotics===1 ? 'checked': ''}} name="antibiotics" class="form-check-input"> <b>H3. Antibiotics</b>
                        <br>
                        <input type="checkbox" {{$specialTrmnt->anticoagulation===1 ? 'checked': ''}} name="anticoagulation" class="form-check-input"> <b>H4. Anticoagulation</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->Otherh10===1 ? 'checked': ''}} name="Otherh10" class="form-check-input"> <b>H10. Other</b>
                    </div>
                    <div><input type="checkbox" {{$specialTrmnt->transfusions===1 ? 'checked': ''}} name="transfusions" class="form-check-input"> <b>I1. Transfusions</b></div>
                    <div><input type="checkbox" {{$specialTrmnt->dialysis===6 ? 'checked': ''}} name="dialysis" class="form-check-input"> <b>J1. Dialysis</b></div>
                    <div style="margin-left: 10px">
                        <input type="checkbox" {{$specialTrmnt->hemodialysis===1 ? 'checked': ''}} name="hemodialysis" class="form-check-input"> <b>J2. Hemodialysis</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->peritonealDialysis===1 ? 'checked': ''}} name="peritonealDialysis" class="form-check-input"> <b>J3. Peritoneal dialysis</b>
                    </div>
                    <div><input type="checkbox" {{$specialTrmnt->otherIvAccess===1 ? 'checked': ''}} name="otherIvAccess" class="form-check-input"> <b>O1. IV Access</b></div>
                    <div style="margin-left: 10px">
                        <input type="checkbox" {{$specialTrmnt->otherPeripheral===1 ? 'checked': ''}} name="otherPeripheral" class="form-check-input"> <b>O2. Peripheral</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->midLine===1 ? 'checked': ''}} name="midLine" class="form-check-input"> <b>O3. Mid-line</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->central===1 ? 'checked': ''}} name="central" class="form-check-input"> <b>O4. Central</b> (e.g., PICC, tunneled, port)
                    </div>
                </td>
            </tr>

            {{-- None of the Above --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2"><b>None of the Above</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label class="form-check-label"><input {{$specialTrmnt->noa===1 ? 'checked': ''}}  type="checkbox" class="form-check-input"> <b>Z1. None of the Above</b></label>
                </td>
            </tr>

            {{-- Discharge --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>Discharge</b>
                </td>
             </tr>

             {{-- O0110 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2" style="border-top: 1px solid #000;">
                   <b>O0110. Special Treatments, Procedures, and Programs</b>
                   <p class="m-0" style="font-size:13px">Check all of the following treatments, procedures, and programs that apply at discharge.</p>
                </td>
             </tr>

             <tr>
                <td colspan="2">
                   <b>c. At Discharge</b>
                </td>
             </tr>

             {{-- Cancer Treatments --}}
             <tr>
                <td colspan="2">
                    <div><input {{$specialTrmnt->treatmentsChemotherapy===1 ? 'checked': ''}} type="checkbox" name="chemotherapy" value="0" class="form-check-input"> <b>A1. Chemotherapy</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->treatmentsIv===1 ? 'checked': ''}} type="checkbox" name="iv" value="1" class="form-check-input"> <b>A2. IV</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->cancerTreatmentsIral===1 ? 'checked': ''}} type="checkbox" name="oral" value="1" class="form-check-input"> <b>A3. Oral</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->cancerTreatmentsOther===1 ? 'checked': ''}} type="checkbox" name="rocOther" value="1" class="form-check-input"> <b>A10. Other</b>
                    </div>
                    <div><input {{$specialTrmnt->cancerTreatmentscRadiation===1 ? 'checked': ''}} type="checkbox" name="radiation" value="1" class="form-check-input"> <b>B1. Radiation</b></div>
                </td>
            </tr>

            {{-- Respiratory Therapies --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2">
                    <b>Respiratory Therapies</b>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input {{$specialTrmnt->respiratoryOxygen===1 ? 'checked': ''}} type="checkbox" name="oxygenTherapy" value="0" class="form-check-input"> <b>C1. Oxygen Therapy</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->respiratoryContinuous===1 ? 'checked': ''}} type="checkbox" name="continuous" value="1" class="form-check-input"> <b>C2. Continuous</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->respiratoryIntermittent===1 ? 'checked': ''}} type="checkbox" name="intermittent" value="1" class="form-check-input"> <b>C3. Intermittent</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->respiratoryConcentration===1 ? 'checked': ''}} type="checkbox" name="concentration" value="1" class="form-check-input"> <b>C4. High-concentration</b>
                    </div>

                    <div><input {{$specialTrmnt->respiratorySuctioning===1 ? 'checked': ''}} type="checkbox" name="suctioning" value="1" class="form-check-input"> <b>D1. Suctioning</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->respiratoryScheduled===5 ? 'checked': ''}} type="checkbox" name="scheduled" value="1" class="form-check-input"> <b>D2. Scheduled</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->respiratoryNeeded===1 ? 'checked': ''}} type="checkbox" name="needed" value="1" class="form-check-input"> <b>D3. As Needed</b>
                    </div>
                    <div><input {{$specialTrmnt->respiratoryTracheostomy===1 ? 'checked': ''}} type="checkbox" name="tracheostomy" value="1" class="form-check-input"> <b>E1. Tracheostomy care</b></div>
                    <div><input {{$specialTrmnt->respiratoryInvasive===1 ? 'checked': ''}} type="checkbox" name="invasive" value="1" class="form-check-input"> <b>F1. Invasive Mechanical Ventilator</b> (ventilator or respirator)</div>
                    <div><input {{$specialTrmnt->respiratoryNonInvasive===1 ? 'checked': ''}} type="checkbox" name="nonInvasive" value="1" class="form-check-input"> <b>G1. Non-invasive Mechanical Ventilator</b></div>
                    <div style="margin-left: 10px">
                        <input {{$specialTrmnt->respiratoryBipap===1 ? 'checked': ''}} type="checkbox" name="bipap" value="1" class="form-check-input"> <b>G2. BiPAP</b>
                        &nbsp; &nbsp;<input {{$specialTrmnt->respiratoryCpap===1 ? 'checked': ''}} type="checkbox" name="cpap" value="1" class="form-check-input"> <b>G3. CPAP</b>
                    </div>
                </td>
            </tr>

            {{-- Other --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2"><b>Other</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div><input type="checkbox" {{$specialTrmnt->respiratoryIvMedications===1 ? 'checked': ''}} name="vasMedications" class="form-check-input"> <b>H1. IV Medications</b></div>
                    <div style="margin-left: 10px">
                        <input type="checkbox" {{$specialTrmnt->respiratoryVasoactive===1 ? 'checked': ''}} name="vasMedications" class="form-check-input"> <b>H2. Vasoactive medications</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->respiratoryAntibiotics===1 ? 'checked': ''}} name="antibiotics" class="form-check-input"> <b>H3. Antibiotics</b>
                        <br>
                        <input type="checkbox" {{$specialTrmnt->respiratoryAnticoagulation===1 ? 'checked': ''}} name="anticoagulation" class="form-check-input"> <b>H4. Anticoagulation</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->respiratoryOther===1 ? 'checked': ''}} name="Otherh10" class="form-check-input"> <b>H10. Other</b>
                    </div>
                    <div><input type="checkbox" {{$specialTrmnt->respiratoryTransfusions===1 ? 'checked': ''}} name="transfusions" class="form-check-input"> <b>I1. Transfusions</b></div>
                    <div><input type="checkbox" {{$specialTrmnt->respiratoryDialysis===1 ? 'checked': ''}} name="dialysis" class="form-check-input"> <b>J1. Dialysis</b></div>
                    <div style="margin-left: 10px">
                        <input type="checkbox" {{$specialTrmnt->respiratoryHemodialysis===1 ? 'checked': ''}} name="hemodialysis" class="form-check-input"> <b>J2. Hemodialysis</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->respiratoryPeritoneal===1 ? 'checked': ''}} name="peritonealDialysis" class="form-check-input"> <b>J3. Peritoneal dialysis</b>
                    </div>
                    <div><input type="checkbox" {{$specialTrmnt->respiratoryIVAccess===1 ? 'checked': ''}} name="otherIvAccess" class="form-check-input"> <b>O1. IV Access</b></div>
                    <div style="margin-left: 10px">
                        <input type="checkbox" {{$specialTrmnt->respiratoryPeripheral===1 ? 'checked': ''}} name="otherPeripheral" class="form-check-input"> <b>O2. Peripheral</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->respiratoryMidline===1 ? 'checked': ''}} name="midLine" class="form-check-input"> <b>O3. Mid-line</b>
                        &nbsp; &nbsp;<input type="checkbox" {{$specialTrmnt->respiratoryCentral===1 ? 'checked': ''}} name="central" class="form-check-input"> <b>O4. Central</b> (e.g., PICC, tunneled, port)
                    </div>
                </td>
            </tr>

            {{-- None of the Above --}}
            <tr>
                <td class="bg-secondary-subtle" colspan="2"><b>None of the Above</b></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label class="form-check-label"><input {{$specialTrmnt->respiratoryNoa===1 ? 'checked': ''}} type="checkbox" class="form-check-input"> <b>Z1. None of the Above</b></label>
                </td>
            </tr>

            {{-- M1041 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1041. Influenza Vaccine Data Collection Period</b>
                   <p class=",-0" style="font-size: 13px">Does this episode of care (SOC/ROC to Transfer/Discharge) include any dates on or between October 1 and March 31?</p>
                </td>
             </tr>
             <tr>
                <td>
                   <span><input style="position: relative;top:4px;" {{$specialTrmnt->includeDates===0 ? 'checked': ''}} type="radio" class="form-check-input"> 0. <b>No</b></span>
                   &nbsp; &nbsp;<span><input style="position: relative;top:4px;" {{$specialTrmnt->includeDates===1 ? 'checked': ''}} type="radio" class="form-check-input"> 1. <b>Yes</b></span>
                </td>
             </tr>
                  
             {{-- M1046 --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M1046. Influenza Vaccine Received</b>
                   <p class="m-0" style="font-size: 13px">Did the patient receive the influenza vaccine for this year’s flu season?</p>
                </td>
             </tr>
             <tr>
                <td>
                   <div><input {{$specialTrmnt->influenzaNo ? 'checked': ''}} type="checkbox" name="influenzaNo" class="form-check-input"> 1. <b>Yes;</b> received from your agency during this episode of care (SOC/ROC to Transfer/Discharge)</div>
                   <div><input {{$specialTrmnt->influenzaYes ? 'checked': ''}} type="checkbox" name="influenzaYes" class="form-check-input"> 2. <b>Yes;</b> received from your agency during a prior episode of care (SOC/ROC to Transfer/Discharge)</div>
                   <div><input {{$specialTrmnt->influenzaYesReceived ? 'checked': ''}} type="checkbox" name="influenzaYesReceived" class="form-check-input"> 3. <b>Yes;</b> received from another health care provider (for example, physician, pharmacist)</div>
                   <div><input {{$specialTrmnt->influenzaOffered ? 'checked': ''}} type="checkbox" name="influenzaOffered" class="form-check-input"> 4. <b>No;</b> patient offered and declined</div>
                   <div><input {{$specialTrmnt->influenzaAssessed ? 'checked': ''}} type="checkbox" name="influenzaAssessed" class="form-check-input"> 5. <b>No;</b> patient assessed and determined to have medical contraindication(s)</div>
                   <div><input {{$specialTrmnt->influenzaIndicated ? 'checked': ''}} type="checkbox" name="influenzaIndicated" class="form-check-input"> 6. <b>No;</b> not indicated – patient does not meet age/condition guidelines for influenza vaccine</div>
                   <div><input {{$specialTrmnt->influenzaInability ? 'checked': ''}} type="checkbox" name="influenzaInability" class="form-check-input"> 7. <b>No;</b> inability to obtain vaccine due to declared shortage</div>
                   <div><input {{$specialTrmnt->influenzaNotReceive ? 'checked': ''}} type="checkbox" name="influenzaNotReceive" class="form-check-input"> 8. <b>No;</b> patient did not receive the vaccine due to reasons other than those listed in responses 4-7.</div>
                </td>
             </tr>

             {{-- M2200. Therapy Need --}}
             <tr>
                <td class="bg-secondary-subtle" colspan="2">
                   <b>M2200. Therapy Need</b>
                   <p class="m-0" style="font-size: 13px">In the home health plan of care for the Medicare payment episode for which this assessment will define a case mix group, what is the indicated need for therapy visits (total of reasonable and necessary physical, occupational, and speech-language pathology visits combined)? (Enter zero [“000”] if no therapy visits indicated.)</p>
                </td>
             </tr>
             <tr>
                <td colspan="2">
                   <div>{{$specialTrmnt->numberOfTherapy}} <b>Number of therapy visits indicated</b> (total of physical, occupational and speech-language pathology combined).</div>
                   <div><input {{$specialTrmnt->notappli ? 'checked': ''}} type="checkbox" class="form-check-input"> <b>NA</b> Not Applicable: No case mix group defined by this assessment.</div>
                </td>
             </tr>
        </table>
    </div>

    {{-- Section O Special Treatment, Procedures, and Programs (Continued) --}}
    <table class="table table-bordered align-middle mt-1 mb-1">
        <tr>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Section O</b></td>
            <td class="bg-secondary-subtle" style="font-size: 20pt;"><b>Special Treatment, Procedures, and Programs (Continued)</b></td>
        </tr>
    </table>

    {{-- CARE COORDINATION (Continued) --}}
    <div style="padding-right: 1px">
        <table class="table table-bordered align-middle m-0">
            <tr>
                <td class="bg-black" colspan="2">
                <h3 class="text-center m-0 text-white">CARE COORDINATION (Continued)</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <span style="font-weight: 500">Comments</span><br>
                {!! $specialTrmnt->chemotherapy !!}
                </td>
            </tr>

            {{-- CURRENT DME/MEDICAL SUPPLIES --}}
            <tr>
                <td class="bg-black" colspan="2">
                <h3 class="text-center m-0 text-white">CURRENT DME/MEDICAL SUPPLIES</h3>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                <table class="table table-borderless m-0">
                    <tr>
                        <td><span style="font-weight: 500">DME Company:</span> {{ $specialTrmnt->dmeCompanyName }}</td>
                        <td><span style="font-weight: 500">Phone:</span> {{ $specialTrmnt->companyPhn }}</td>
                    </tr>
                    <tr>
                        <td><span style="font-weight: 500">Oxygen Company:</span> {{ $specialTrmnt->companyOxygen }}</td>
                        <td><span style="font-weight: 500">Phone:</span> {{ $specialTrmnt->companyOxygenPhn }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label><input {{ $specialTrmnt->communityOrganizations ? 'checked' : '' }} type="checkbox" class="form-check-input">Community Organizations</label>
                            &nbsp; &nbsp;<label><input {{ $specialTrmnt->companyServices ? 'checked' : '' }} type="checkbox" class="form-check-input">Services:</label>
                            <br>
                            {!! $specialTrmnt->comOrgComment !!}
                        </td>
                    </tr>
                    <tr>
                        <td><span style="font-weight: 500">Contact:</span> {{ $specialTrmnt->companyComContact }}</td>
                        <td><span style="font-weight: 500">Phone:</span> {{ $specialTrmnt->companyComPhn }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <span style="font-weight: 500">Comments</span>
                            <br>
                            {!! $specialTrmnt->companyComComment !!}
                        </td>
                    </tr>
                </table>
                </td>
            </tr>

            {{-- NONE USED WOUND CARE: --}}
            <tr>
                <td colspan="2">
                    <div><input {{ $specialTrmnt->usedWound ? 'checked' : '' }} type="checkbox" class="form-check-input"> <b>NONE USED WOUND CARE:</b></div>
                    <label><input {{ $specialTrmnt->twointotwo ? 'checked' : '' }} type="checkbox" name="twointotwo" value="1" class="form-check-input"> 2x2's</label>
                    &nbsp; <label><input {{ $specialTrmnt->fourintofour ? 'checked' : '' }} type="checkbox" value="1" name="fourintofour" class="form-check-input"> 4x4's</label>
                    &nbsp; <label><input {{ $specialTrmnt->abds ? 'checked' : '' }} type="checkbox" value="1" name="abds" class="form-check-input"> ABD's</label>
                    &nbsp; <label><input {{ $specialTrmnt->cottonTipped ? 'checked' : '' }} type="checkbox" value="1" name="cottonTipped" class="form-check-input"> Cotton tipped applicators</label>
                    &nbsp; <label><input {{ $specialTrmnt->drainSponges ? 'checked' : '' }} type="checkbox" value="1" name="drainSponges" class="form-check-input"> Drain sponges</label>
                    &nbsp; <label><input {{ $specialTrmnt->hydrocolloids ? 'checked' : '' }} type="checkbox" value="1" name="hydrocolloids" class="form-check-input"> Hydrocolloids</label><br>
                   <label><input {{ $specialTrmnt->kerlixSize ? 'checked' : '' }} type="checkbox" name="kerlixSize" value="1" class="form-check-input"> Kerlix size</label> {{ $specialTrmnt->kerlixSizeVal }} 
                    &nbsp; <label><input {{ $specialTrmnt->nuGauze ? 'checked' : '' }} type="checkbox" value="1" name="" class="form-check-input"> Nu-gauze</label>
                    &nbsp; <label><input {{ $specialTrmnt->saline ? 'checked' : '' }} type="checkbox" value="1" name="saline" class="form-check-input"> Saline</label>
                    &nbsp; <label><input {{ $specialTrmnt->tape ? 'checked' : '' }} type="checkbox" value="1" name="tape" class="form-check-input"> Таре</label>
                    &nbsp; <label><input {{ $specialTrmnt->transparentDressings ? 'checked' : '' }} type="checkbox" value="1" name="transparentDressings" class="form-check-input"> Transparent dressings</label>
                    &nbsp; <label><input {{ $specialTrmnt->woundCleanser ? 'checked' : '' }} type="checkbox" name="woundCleanser" value="1" class="form-check-input"> Wound cleanser</label><br>
                   <label><input {{ $specialTrmnt->woundGel ? 'checked' : '' }} type="checkbox" value="1" name="woundGel" class="form-check-input"> Wound gel</label>
                    &nbsp; <label><input {{ $specialTrmnt->nonusesOther ? 'checked' : '' }} type="checkbox" value="1" name="nonusesOther" class="form-check-input"> Other</label> <u>{!! $specialTrmnt->nonUsedOtherNote !!}</u>
                </td>
            </tr>

            {{-- IV SUPPLIES: --}}
            <tr>
                <td colspan="2">
                    <div><b>IV SUPPLIES:</b></div>
                    <label><input {{ $specialTrmnt->alcoholSwabs ? 'checked' : '' }} type="checkbox" value="1" name="alcoholSwabs" class="form-check-input">Alcohol swabs</label>
                    &nbsp; <label><input {{ $specialTrmnt->angiocatheterSize ? 'checked' : '' }} type="checkbox" name="angiocatheterSize" class="form-check-input">Angiocatheter size</label> {{ $specialTrmnt->notessize }}
                    &nbsp; <label><input {{ $specialTrmnt->batteriesSize ? 'checked' : '' }} type="checkbox" name="batteriesSize" value="1" class="form-check-input">Batteries size</label>  {{ $specialTrmnt->batteriesSizeNote }}
                    &nbsp; <label><input {{ $specialTrmnt->centralLineDressing ? 'checked' : '' }} type="checkbox" value="1" name="centralLineDressing" class="form-check-input">Central line dressing</label><br>
                    <label><input {{ $specialTrmnt->extensionTubings ? 'checked' : '' }} type="checkbox" value="1" name="extensionTubings" class="form-check-input">Extension tubings</label>
                    &nbsp; <label><input {{ $specialTrmnt->infusionPump ? 'checked' : '' }} type="checkbox" value="1" name="infusionPump" class="form-check-input">Infusion pump</label>
                    &nbsp; <label><input {{ $specialTrmnt->injectionCaps ? 'checked' : '' }} type="checkbox" value="1" name="injectionCaps" class="form-check-input">Injection caps</label>
                    <label><input {{ $specialTrmnt->ivPole ? 'checked' : '' }} type="checkbox" value="1" name="ivPole" class="form-check-input">IV pole</label>
                    &nbsp; <label><input {{ $specialTrmnt->ivStartKit ? 'checked' : '' }} type="checkbox" value="1" name="ivStartKit" class="form-check-input">IV start kit</label>
                    &nbsp; <label><input {{ $specialTrmnt->ivTubing ? 'checked' : '' }} type="checkbox" value="1" name="ivTubing" class="form-check-input">IV tubing</label><br>
                    <label><input {{ $specialTrmnt->syringesSize ? 'checked' : '' }} type="checkbox" value="1" name="syringesSize" class="form-check-input">Syringes size</label> {{ $specialTrmnt->syringesSizeNote }}
                    &nbsp; <label><input {{ $specialTrmnt->tape ? 'checked' : '' }} type="checkbox" value="1" name="tape" class="form-check-input">Tape</label>
                    &nbsp; <label><input {{ $specialTrmnt->tapeOther ? 'checked' : '' }} type="checkbox" name="tapeOther" value="1" class="form-check-input">Other</label> <u>{!! $specialTrmnt->tapeNote !!}</u>
                </td>
            </tr>

            {{-- URINARY/OSTOMY: --}}
            <tr>
                <td colspan="2">
                    <div><b>URINARY/OSTOMY:</b></div>
                    <label><input {{ $specialTrmnt->externalCatheters ? 'checked' : '' }} type="checkbox" value="1" name="externalCatheters" class="form-check-input">External catheters</label>
                    &nbsp; <label><input {{ $specialTrmnt->externalCatheters ? 'checked' : '' }} type="checkbox" value="1" name="externalCatheters" class="form-check-input">External catheters</label>
                    &nbsp; <label><input {{ $specialTrmnt->ostomyPouch ? 'checked' : '' }} type="checkbox" name="ostomyPouch" value="1" class="form-check-input">Ostomy pouch (brand, size)</label> {{ $specialTrmnt->ostomyPouchNote }}
                    &nbsp; <label><input {{ $specialTrmnt->ostomyWafer ? 'checked' : '' }} type="checkbox" value="1" name="ostomyWafer" class="form-check-input">Ostomy wafer (brand, size)</label> {{ $specialTrmnt->ostomyWaferNote }}
                    &nbsp; <label><input {{ $specialTrmnt->skinProtectant ? 'checked' : '' }} type="checkbox" value="1" name="skinProtectant" class="form-check-input">Skin protectant</label>
                    &nbsp; <label><input {{ $specialTrmnt->stomaAdhesive ? 'checked' : '' }} type="checkbox" name="stomaAdhesive" value="1" class="form-check-input">Stoma adhesive tape</label>
                    &nbsp; <label><input {{ $specialTrmnt->underpads ? 'checked' : '' }} type="checkbox" value="1" name="underpads" class="form-check-input">Underpads</label>
                    &nbsp; <label><input {{ $specialTrmnt->urinaryBag ? 'checked' : '' }} type="checkbox" value="1" name="urinaryBag" class="form-check-input">Urinary bag</label>
                    &nbsp; <label><input {{ $specialTrmnt->pouch ? 'checked' : '' }} type="checkbox" value="1" name="pouch" class="form-check-input">Pouch</label><br>
                    <label><input {{ $specialTrmnt->pouchOther ? 'checked' : '' }} type="checkbox" value="1" name="pouchOther" class="form-check-input">Other</label> <u>{!! $specialTrmnt->pouchNote !!}</u>
                </td>
            </tr>

            {{-- CATHETER SUPPLIES --}}
            <tr>
                <td colspan="2">
                    <div><b>CATHETER SUPPLIES:</b></div>
                    <label><input {{ $specialTrmnt->aceticAcid ? 'checked' : '' }} type="checkbox" value="1" name="aceticAcid" class="form-check-input">Acetic acid</label>
                    &nbsp; <label><input {{ $specialTrmnt->aceticAcidStatus ? 'checked' : '' }} type="checkbox" name="aceticAcidStatus" value="1" class="form-check-input"> {{ $specialTrmnt->aceticAcidNote }} Fr catheter kit (tray, bag, foley)</label>
                    &nbsp; <label><input {{ $specialTrmnt->irrigationTray ? 'checked' : '' }} type="checkbox" value="1" name="irrigationTray" class="form-check-input">Irrigation Tray</label>
                    &nbsp; <label><input {{ $specialTrmnt->saline ? 'checked' : '' }} type="checkbox" value="1" name="saline" class="form-check-input">Saline</label>
                    &nbsp; <label><input {{ $specialTrmnt->straightCatheter ? 'checked' : '' }} type="checkbox" value="" name="straightCatheter" class="form-check-input">Straight catheter</label>
                    <label><input {{ $specialTrmnt->straightCatheterOther ? 'checked' : '' }} type="checkbox" value="1" name=" straightCatheterOther" class="form-check-input">Other</label> <u>{!! $specialTrmnt->straightCatheterOtherNote !!}</u>
                </td>
            </tr>

            {{-- DIABETIC --}}
            <tr>
                <td colspan="2">
                    <div><b>DIABETIC:</b></div>
                    <label><input {{ $specialTrmnt->chemstrips ? 'checked' : '' }} type="checkbox" name="chemstrips" value="1" class="form-check-input">Chemstrips</label>
                     &nbsp; <label><input {{ $specialTrmnt->syringes ? 'checked' : '' }} type="checkbox" name="syringes" value="1" class="form-check-input">Syringes</label>
                     &nbsp; <label><input {{ $specialTrmnt->syringesOther ? 'checked' : '' }} type="checkbox" name="syringesOther" value="1" class="form-check-input">Other</label> <u>{!! $specialTrmnt->syringesOtherNote !!}</u>
                 </td>
            </tr>

            {{-- MISCELLANEOUS --}}
            <tr>
                <td colspan="2">
                    <div><b>MISCELLANEOUS:</b></div>
                    <label><input {{ $specialTrmnt->aceticAcid ? 'checked' : '' }} type="checkbox" value="1" name="" class="form-check-input">Enema supplies</label>
                     &nbsp; <label><input {{ $specialTrmnt->feedingTube ? 'checked' : '' }} type="checkbox" name="feedingTube" value="1" class="form-check-input">Feeding tube:</label>
                     &nbsp; <label><span style="font-weight: 500">type</span> {{ $specialTrmnt->feedingTubeType }}</label>
                     &nbsp; <label><span style="font-weight: 500">size</span> {{ $specialTrmnt->feedingTubeTypeSize }}</label>
                     &nbsp; <label><input {{ $specialTrmnt->aceticAcid ? 'checked' : '' }} type="checkbox" name="" value="1" class="form-check-input">Gloves:</label>
                     &nbsp; <label><input {{ $specialTrmnt->sterile ? 'checked' : '' }} type="checkbox" name="sterile" value="1" class="form-check-input">Sterile</label>
                     &nbsp; <label><input {{ $specialTrmnt->nonSterile ? 'checked' : '' }} type="checkbox" value="1" name="nonSterile" class="form-check-input">Non-sterile</label>
                     &nbsp; <label><input {{ $specialTrmnt->medBox ? 'checked' : '' }} type="checkbox" name="medBox" value="1" class="form-check-input">Med Box</label>
                     &nbsp; <label><input {{ $specialTrmnt->stapleRemoval ? 'checked' : '' }} type="checkbox" name="stapleRemoval" value="1" class="form-check-input">Staple removal kit</label>
                     &nbsp; <label><input {{ $specialTrmnt->steriStrips ? 'checked' : '' }} type="checkbox" value="1" name="steriStrips" class="form-check-input">Steri strips</label>
                     &nbsp; <label><input {{ $specialTrmnt->sutureRemovalKit ? 'checked' : '' }} type="checkbox" name="sutureRemovalKit" value="1" class="form-check-input">Suture removal kit</label>
                     &nbsp; <label><input {{ $specialTrmnt->sutureRemovalKitOther ? 'checked' : '' }} type="checkbox" value="1" name="sutureRemovalKitOther" class="form-check-input">Other</label> <u>{!! $specialTrmnt->SutureRemovalKitNote !!}</u>
                </td>
            </tr>

            {{-- SUPPLIES/EQUIPMENT --}}
            <tr>
                <td colspan="2">
                    <div><b>SUPPLIES/EQUIPMENT:</b></div>
                    
                    <label><input {{ $specialTrmnt->augmentative ? 'checked' : '' }} type="checkbox" value="1" name="augmentative" class="form-check-input">Augmentative and alternative communication device(s) (type)</label> <u>{!! $specialTrmnt->augmentativeNote !!}</u>
                    &nbsp; <label><input {{ $specialTrmnt->bathBench ? 'checked' : '' }} type="checkbox" value="1" name="bathBench" class="form-check-input">Bath bench</label>
                    &nbsp; <label><input {{ $specialTrmnt->brace ? 'checked' : '' }} type="checkbox" value="1" name="brace" class="form-check-input">Brace</label>
                    &nbsp; <label><input {{ $specialTrmnt->orthotics ? 'checked' : '' }} type="checkbox" value="1" name="orthotics" class="form-check-input">Orthotics (specify):</label> <u>{!! $specialTrmnt->orthoticsNote !!}</u>
                    &nbsp; <label><input {{ $specialTrmnt->cane ? 'checked' : '' }} type="checkbox" value="1" name="cane" class="form-check-input">Cane</label>
                    &nbsp; <label><input {{ $specialTrmnt->commode ? 'checked' : '' }} type="checkbox" value="1" name="commode" class="form-check-input">Commode</label><br>
                   <label><input {{ $specialTrmnt->dressing ? 'checked' : '' }} type="checkbox" value="1" name="dressing" class="form-check-input">Dressing Aid Kit/Hip Kit <small style="font-weight: normal;line-height: normal;">(e.g.reacher, long handle sponge, long handle shoe horn, etc.)</small></label>
                    <label><input {{ $specialTrmnt->eggcrate ? 'checked' : '' }} type="checkbox" value="1" name="eggcrate" class="form-check-input">Eggcrate</label><br>
                    <label><input {{ $specialTrmnt->enteral ? 'checked' : '' }} type="checkbox" value="1" name="enteral" class="form-check-input">Enteral feeding pump</label>
                    &nbsp; <label><input {{ $specialTrmnt->grab ? 'checked' : '' }} type="checkbox" name="grab" value="1" class="form-check-input">Grab bars: Bathroom/Other</label> <u>{!! $specialTrmnt->grabNote !!}</u><br>
                   <label><input {{ $specialTrmnt->handheldShower ? 'checked' : '' }} type="checkbox" value="1" name="handheldShower" class="form-check-input">Handheld shower</label>
                    &nbsp; <label><input {{ $specialTrmnt->hospitalBed ? 'checked' : '' }} type="checkbox" name="hospitalBed" class="form-check-input">Hospital bed:</label>
                    &nbsp; <label><input {{ $specialTrmnt->semiElectric ? 'checked' : '' }} type="checkbox" name="semiElectric" class="form-check-input">Semi-electric</label>
                    &nbsp; <label><input {{ $specialTrmnt->hoyerLift ? 'checked' : '' }} type="checkbox" value="1" name="hoyerLift" class="form-check-input">Hoyer lift</label>
                    &nbsp; <label><input {{ $specialTrmnt->kneeScooter ? 'checked' : '' }} type="checkbox" value="1" name="kneeScooter" class="form-check-input">Knee scooter</label>
                    &nbsp; <label><input {{ $specialTrmnt->medicalAlert ? 'checked' : '' }} type="checkbox" name="medicalAlert" value="1" class="form-check-input">Medical alert</label><br>
                    <label><input {{ $specialTrmnt->nebulizer ? 'checked' : '' }} type="checkbox" value="1" name="nebulizer" class="form-check-input">Nebulizer</label>
                    &nbsp; <label><input {{ $specialTrmnt->oxygenConcentrator ? 'checked' : '' }} type="checkbox" value="1" name="oxygenConcentrator" class="form-check-input">Oxygen concentrator</label>
                    &nbsp; <label><input {{ $specialTrmnt->pressureRelieving ? 'checked' : '' }} type="checkbox" name="pressureRelieving" value="1" class="form-check-input">Pressure relieving device</label> {{ $specialTrmnt->specialMattressNote }}
                    &nbsp; <label><input {{ $specialTrmnt->prosthesis ? 'checked' : '' }}  type="checkbox" name="prosthesis" class="form-check-input">Prosthesis:</label>
                    &nbsp; <label><input {{ $specialTrmnt->rue ? 'checked' : '' }} type="checkbox" name="rue" class="form-check-input">RUE</label><br>
                    <label><input {{ $specialTrmnt->rle ? 'checked' : '' }} type="checkbox" name="rle" class="form-check-input">RLE</label>
                    &nbsp; <label><input {{ $specialTrmnt->lue ? 'checked' : '' }}  type="checkbox" name="lue" class="form-check-input">LUE</label>
                    &nbsp; <label><input {{ $specialTrmnt->lle ? 'checked' : '' }}  type="checkbox" name="lle" class="form-check-input">LLE</label>
                    &nbsp; <label><input {{ $specialTrmnt->other ? 'checked' : '' }}  type="checkbox" name="other" class="form-check-input">Other</label> <u>{!! $specialTrmnt->otherNote !!}</u>
                    &nbsp; <label><input {{ $specialTrmnt->raisedToilet ? 'checked' : '' }} type="checkbox" name="raisedToilet" class="form-check-input">Raised toilet seat</label>
                    &nbsp; <label><input {{ $specialTrmnt->reacher ? 'checked' : '' }} type="checkbox" name="reacher" class="form-check-input">Reacher</label>
                    &nbsp; <label><input {{ $specialTrmnt->specialMattress ? 'checked' : '' }}  type="checkbox" name="specialMattress" class="form-check-input">Special mattress overlay</label> {{ $specialTrmnt->specialMattressNote }}
                    &nbsp; <label><input {{ $specialTrmnt->suctionMachine ? 'checked' : '' }} type="checkbox" name="suctionMachine" class="form-check-input">Suction machine</label>
                    &nbsp; <label><input {{ $specialTrmnt->tensUnit ? 'checked' : '' }} type="checkbox" name="tensUnit" class="form-check-input">TENS unit</label>
                    &nbsp; <label><input {{ $specialTrmnt->transferEquipment ? 'checked' : '' }}  type="checkbox" name="transferEquipment" class="form-check-input">Transfer equipment:</label>
                    &nbsp; <label><input {{ $specialTrmnt->board ? 'checked' : '' }}  type="checkbox" name="board" class="form-check-input">Board</label>
                    &nbsp; <label><input {{ $specialTrmnt->lift ? 'checked' : '' }} type="checkbox" name="lift" class="form-check-input">Lift</label><br>
                    <label><input {{ $specialTrmnt->ventilator ? 'checked' : '' }} type="checkbox" name="ventilator" class="form-check-input">Ventilator</label>
                    &nbsp; <label><input {{ $specialTrmnt->walker ? 'checked' : '' }} type="checkbox" name="walker" class="form-check-input">Walker</label>
                    &nbsp; <label><input {{ $specialTrmnt->wheelchair ? 'checked' : '' }} type="checkbox" name="wheelchair" class="form-check-input">Wheelchair</label>
                    &nbsp; <label><input {{ $specialTrmnt->otherSupplies ? 'checked' : '' }} type="checkbox" name="otherSupplies " class="form-check-input">Other Supplies Needed</label> <u>{!! $specialTrmnt->otherSuppliesNote !!}</u>
                 </td>
            </tr>
        </table>
    </div>

    {{-- HOMEBOUND AND ASSESSMENT SUMMARY --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:1px;padding-bottom:1px;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">HOMEBOUND AND ASSESSMENT SUMMARY (Include skilled care provided this visit and analysis of findings)</h3></td>
            </tr>
            <tr>
                <td colspan="2">
                   <b>CONFINED TO HOME (homebound):</b>
                   &nbsp; <label><input style="position:relative;top:4px" {{$specialTrmnt->cth===0?'checked':''}} type="radio" class="form-check-input"> No</label>
                   &nbsp; <label><input style="position:relative;top:4px" {{$specialTrmnt->cth===0?'checked':''}} type="radio" class="form-check-input"> Yes, and the patient either</label>

                   {{-- Criteria One --}}
                   <div>
                      <p class="m-0"><b>1. Criteria One:</b> because of illness or injury:</p>
                      <div>
                         <label><input {{$specialTrmnt->dependentUpon ? 'checked':''}} type="checkbox" value="1" name="dependentUpon" class="form-check-input"> Dependent upon adaptive device(s)</label>
                      </div>
                      <div>
                         <label><input {{$specialTrmnt->crutches ? 'checked':''}} type="checkbox" value="1" name="crutches" class="form-check-input"> crutches</label>
                         &nbsp; <label><input {{$specialTrmnt->canes ? 'checked':''}} type="checkbox" value="1" name="canes" class="form-check-input"> canes</label>
                         &nbsp; <label><input {{$specialTrmnt->dependentWalker ? 'checked':''}} type="checkbox" value="1" name="dependentWalker" class="form-check-input"> walker</label>
                         &nbsp; <label><input {{$specialTrmnt->wheelchairAdapet ? 'checked':''}} type="checkbox" value="1" name="wheelchairAdapet" class="form-check-input"> wheelchair:</label>
                         &nbsp; <label><input style="position:relative;top:4px" {{$specialTrmnt->chemotherapy===0?'checked':''}} type="radio" name="manual" class="form-check-input" value="1"> manual</label>
                         &nbsp; <label><input style="position:relative;top:4px" {{$specialTrmnt->chemotherapy===0?'checked':''}} type="radio" value="1" name="motorized" class="form-check-input"> motorized</label>
                         &nbsp; <label><input {{$specialTrmnt->prostheticLimb ? 'checked':''}} type="checkbox" value="1" name="prostheticLimb" class="form-check-input"> prosthetic limb</label><br>
                         <label><input {{$specialTrmnt->scooter ? 'checked':''}} type="checkbox" value="1" name="scooter" class="form-check-input"> scooter</label>
                         &nbsp; <label><input {{$specialTrmnt->ahelper ? 'checked':''}} type="checkbox" value="1" name="ahelper" class="form-check-input"> a helper</label>
                         &nbsp;<label><span style="font-weight: 500">Other:</span> {{$specialTrmnt->dependentOther}}</label>
                      </div>
                      <div>
                         <label><span style="font-weight: 500">Needs special transportation as indicated by:</span> {{$specialTrmnt->specialTransportation}}</label>
                      </div>
                      <div>
                         <label><span style="font-weight: 500">Needs physical assist to leave as indicated by:</span> {{$specialTrmnt->physicalAssist}}</label>
                      </div>
                      <p class="mt-1 mb-1"><b>AND/OR</b></p>
                      <div>
                         <label><span style="font-weight: 500">Leaving home is medically contraindicated due to:</span> {{$specialTrmnt->leavingHome}}</label>
                      </div>

                      {{-- 2. Criteria Two: --}}
                      <p class="m-0"><b>2. Criteria Two:</b></p>
                      <div>
                         <label><input {{$specialTrmnt->normalInability ? 'checked':''}} type="checkbox" value="1" name="normalInability" class="form-check-input"> There exists a normal inability to leave the home as indicated by infrequent outings, consisting of:</label><br>
                         {!! $specialTrmnt->leavingHome !!}
                      </div>
                      <p class="mt-1 mb-1"><b>AND</b></p>
                      <div>
                         <label><span style="font-weight: 500">Leaving home requires a considerable and taxing effort due to functional impairment caused by diagnosis, as indicated by effort such as:</span> {{$specialTrmnt->leavingHomeRequires}}</label>
                      </div>
                      <div>
                         <span style="font-weight: 500">Skilled care provided?</span>
                         &nbsp; <label><input style="position:relative;top:4px" {{$specialTrmnt->chemotherapy===0?'checked':''}} type="radio" name="cth" class="form-check-input" value="0"> No</label>
                         &nbsp; <label><input style="position:relative;top:4px" {{$specialTrmnt->chemotherapy===0?'checked':''}} type="radio" name="cth" class="form-check-input" value="1"> Yes &nbsp; If yes, explain care provided and patient response:</label><br>
                         {!! $specialTrmnt->cthNote !!}
                      </div>

                      <div class="mt-2">
                         <label style="font-weight: 500">Plan for next visit:</label><br>
                         {!! $specialTrmnt->nextVisit !!}
                      </div>

                      <div class="mt-2">
                         <label style="font-weight: 500">Comments</label><br>
                         {!! $specialTrmnt->visitComments !!}
                      </div>
                   </div>
                </td>
             </tr>
        </table>
    </div>

    {{-- PHYSICIAN VERBAL ORDER --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:1px;padding-bottom:1px;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">PHYSICIAN VERBAL ORDER (Complete if applicable per agency policy)</h3></td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                   <table class="table table-borderless m-0">
                        <tr>
                            <td colspan="3">
                                <div><input {{$specialTrmnt->physician ? 'checked' : ''}} type="checkbox" value="1" name="physician" class="form-check-input">Physician (name) {{$specialTrmnt->physician }} called to report comprehensive assessment findings (including medical, nursing, rehabilitative, social and discharge planning needs).</div>
                                <div>
                                    <input {{$specialTrmnt->verbalOrder ? 'checked' : ''}} type="checkbox" class="form-check-input"> Verbal order received for home health (reasonable and necessary) skilled services. See Plan of Care or Verbal Orders.
                                </div>
                            </td>
                        </tr>
                      <tr>
                         <td>
                            {{$specialTrmnt->signature}}<br>
                            <i><small>Signature/Title of Person Who Received Verbal Order</small></i>
                         </td>
                         <td>
                            {{$specialTrmnt->signatureDate}}<br>
                            <i class="d-block"><small>Date</small></i>
                         </td>
                         <td>
                            {{$specialTrmnt->signatureTime}}<br>
                            <i class="d-block"><small>Time</small></i>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            {{$specialTrmnt->physicianSignature}}<br>
                            <i><small>Physician Signature for Verbal Order or see Plan of Care/Verbal Orders</small></i>
                         </td>
                         <td>
                            {{$specialTrmnt->physicianSignatureDate}}<br>
                            <i class="d-block"><small>Date</small></i>
                         </td>
                         <td>
                            {{$specialTrmnt->physicianSignatureTime}}<br>
                            <i class="d-block"><small>Time</small></i>
                         </td>
                      </tr>
                   </table>
                </td>
             </tr>
        </table>
    </div>

    {{-- SIGNATURES/DATES --}}
    <div class="mt-0" style="border: 1px solid #000;padding-right:1px;padding-bottom:1px;">
        <table class="table table-borderless m-0">
            <tr>
                <td colspan="2" class="bg-black text-white text-center"><h3 class="m-0">PHYSICIAN VERBAL ORDER (Complete if applicable per agency policy)</h3></td>
            </tr>
            <tr>
                <td colspan="2" class="p-0">
                   <table class="table table-borderless m-0">
                    <tr>
                        <td>
                           {{$specialTrmnt->familyMember}}<br>
                           <i><small>Patient/Family Member/Caregiver/Representative (if applicable)</small></i>
                        </td>
                        <td>
                           {{$specialTrmnt->familyMemberDate}}<br>
                           <i class="d-block"><small>Date</small></i>
                        </td>
                        <td>
                           {{$specialTrmnt->familyMemberTime}}<br>
                           <i class="d-block"><small>Time</small></i>
                        </td>
                     </tr>
                      <tr>
                         <td>
                            {{$specialTrmnt->personCompleting}}<br>
                            <i><small>Person Completing This Form (signature/title)</small></i>
                         </td>
                         <td>
                            {{$specialTrmnt->personCompletingDate}}<br>
                            <i class="d-block"><small>Date</small></i>
                         </td>
                         <td>
                            {{$specialTrmnt->personCompletingTime}}<br>
                            <i class="d-block"><small>Time</small></i>
                         </td>
                      </tr>
                      <tr>
                         <td>
                            {{$specialTrmnt->agencyName}}<br>
                            <i><small>Agency Name</small></i>
                         </td>
                         <td>
                            {{$specialTrmnt->agencyPhone}}<br>
                            <i class="d-block"><small>Phone Number</small></i>
                         </td>
                         <td></td>
                      </tr>
                   </table>
                </td>
             </tr>
        </table>
    </div>

    {{-- Physician Orders --}}
    <table class="table table-bordered m-0">
        <tr>
            <td class="bg-black" colspan="2">
                <h3 class="text-center m-0 text-white">Physician Orders</h3>
            </td>
        </tr>
        <tr>
            <td><b>Physician's Name:</b> {{$physicianOrder->physicianName}}</td>
            <td><b>Patient Name:</b> {{$physicianOrder->patientName}}</td>
        </tr>
        <tr>
            <td><b>Address:</b> {{$physicianOrder->physicianAddress}}</td>
            <td><b>Address:</b> {{$physicianOrder->physicianAddress2}}</td>
        </tr>
        <tr>
            <td><b>Tel, #:</b> {{$physicianOrder->physicianPrimaryPhone}}</td>
            <td><b>Fax #:</b> {{$physicianOrder->physicianFax}}</td>
        </tr>
        <tr>
            <td><b>Tel, #:</b> {{$physicianOrder->physicianAlternatePhone}}</td>
            <td><b>SSS #:</b> {{$physicianOrder->physicianSpeciality}}</td>
        </tr>
        <tr>
            <td><b>Patient's Date of Birth:</b> {{$physicianOrder->physicianDateOfBirth}}</td>
            <td><b>NPI #:</b> {{$physicianOrder->physicianSsn}}</td>
        </tr>
        <tr>
            <td><b>Current Date:</b> {{$physicianOrder->physicianCurrentDate}}</td>
            <td><b>Gender:</b> {{$physicianOrder->physicianGender}}</td>
        </tr>
        <tr>
            <td colspan="2">
                <p class="mt-0 mb-1"><b>RN to Evaluate for Home Health Care Service</b></p>
                {{$physicianOrder->physicianCurrentDate}}
                <div>
                    <label><input {{$physicianOrder->phsicianSkilled===0 ? 'checked' : ''}} type="checkbox"
                        class="form-check-input"> Skilled Nursing</label>
                    &nbsp; <label><input {{$physicianOrder->phsicianHealthAide===1 ? 'checked' : ''}} type="checkbox"
                        class="form-check-input"> Home Health Aide</label>
                    &nbsp; <label><input {{$physicianOrder->phsicianTherapy===2 ? 'checked' : ''}} type="checkbox"
                        class="form-check-input"> Therapy (OT/PT/ST)</label>
                    &nbsp; <label><input {{$physicianOrder->phsicianOther===3 ? 'checked' : ''}} type="checkbox"
                        class="form-check-input"> Other</label>
                </div>
            </td>
        </tr>
        <tr>
            <td><b>Primary Diagnosis:</b> {{$physicianOrder->primaryDiagnosis}}</td>
            <td><b>ICD9:</b> {{$physicianOrder->icd9}}</td>
        </tr>
    
        <tr>
            <td><b>Other Diagnosis:</b> {{$physicianOrder->otherDiagnosis1}}</td>
            <td><b>ICD10:</b> {{$physicianOrder->icd101}}</td>
        </tr>
        <tr>
            <td>{{$physicianOrder->otherDiagnosis2}}</td>
            <td><b>ICD10:</b> {{$physicianOrder->icd102}}</td>
        </tr>
        <tr>
            <td>{{$physicianOrder->otherDiagnosis3}}</td>
            <td><b>ICD10:</b> {{$physicianOrder->icd103}}</td>
        </tr>
        <tr>
            <td>{{$physicianOrder->otherDiagnosis4}}</td>
            <td><b>ICD10:</b> {{$physicianOrder->icd104}}</td>
        </tr>
        <tr>
            <td>{{$physicianOrder->otherDiagnosis5}}</td>
            <td><b>ICD10:</b> {{$physicianOrder->icd105}}</td>
        </tr>
    
        <tr>
            <td><b>New Medication Date:</b> {{$physicianOrder->newMedicationDate}}</td>
            <td><b>Old Medications and Start Date:</b> {{$physicianOrder->oldMedicationsDate}}</td>
        </tr>
        <tr>
            <td colspan="2"><b>Change in Medications and Date:</b> {{$physicianOrder->changeMedicationDate}}</td>
        </tr>
    
        <tr>
            <td colspan="2">
                <b>M.D.:</b> {{$physicianOrder->mdSignature}}
                <br>
                {{$physicianOrder->mdSignatureDate}}
            </td>
        </tr>
    
        <tr>
            <td colspan="2">
                <b>Nurse's Signature:</b> {{$physicianOrder->nurseSignature}}
                <br>
                {{$physicianOrder->nurseSignatureDate}}
            </td>
        </tr>
    </table>

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
</body>

</html>
