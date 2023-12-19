<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nurse Visit Note</title>

    <style>
        @charset "UTF-8";

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            font-size: 14px;
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

        table td p, table th p {
            margin: 0 0 5px;
        }

        table td p:last-child, table th p:last-child {
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
    <table class="table table-bordered align-top">
        <tr>
            <td colspan="2">
                <p>Visit Date & Time &nbsp; DATE: <b>{{$nsf->visitDate}}</b>, TIME IN: <b>{{$nsf->timeIn}}</b>, TIME OUT: <b>{{$nsf->timeOut}}</b></p>
                <div style="margin-top: 10px">
                    <div><input type="checkbox" {{$nsf->q5001 ==1 ? 'checked' : '' }} name="q5001" class="form-check-input"> Q5001: Hospice or HH Care provided in patients home/residence</div>
                    <div><input type="checkbox" {{$nsf->q5002 ==1 ? 'checked' : '' }} name="q5002" class="form-check-input"> Q5002: Hospice or HH Care provided in Assisted Living Facility</div>
                    <div><input type="checkbox" {{$nsf->q5009 ==1 ? 'checked' : '' }} name="q5009" class="form-check-input"> Q5009: Hospice or HH Care provided in place not otherwise specified</div>
                    <div><input type="checkbox" {{$nsf->g0162 ==1 ? 'checked' : '' }} name="g0162" class="form-check-input"> G0162: Management/Evaluation</div>
                    <div><input type="checkbox" {{$nsf->g0299 ==1 ? 'checked' : '' }} name="g0299" class="form-check-input"> G0299: Direct Skill (RN) G0300: Direct Skill (LPN)</div>
                    <div><input type="checkbox" {{$nsf->g0493 ==1 ? 'checked' : '' }} name="g0493" class="form-check-input"> G0493: Observation/Assessment (RN)</div>
                    <div><input type="checkbox" {{$nsf->g0494 ==1 ? 'checked' : '' }} name="g0494" class="form-check-input"> G0494: Observation/Assessment (LPN)</div>
                    <div><input type="checkbox" {{$nsf->g0495 ==1 ? 'checked' : '' }} name="g0495" class="form-check-input"> G0495: Education/Training (RN)</div>
                    <div><input type="checkbox" {{$nsf->g0496 ==1 ? 'checked' : '' }} name="g0496" class="form-check-input"> G0496: Education/Training (LPN)</div>
                </div>
                <p style="margin-top: 10px">Diagnosis(es) related to need: {!! $nsf->diagnosis !!}</p>
                <p style="margin-top: 10px">Homebound reason: {!! $nsf->homeboundReason !!}</p>
            </td>
        </tr>

        <tr>
            <td style="vertical-align: top" colspan="2">
                <h3 style="margin-top: 0;margin-bottom:5px">VITAL SIGNS:</h3>
                <div>
                    <span>Temperature: <b>{{$nsf->temperature}}</b> F</span>
                    &nbsp; <label class="form-check-label" for="oral"><input type="radio" {{$nsf->temp==1 ? 'checked' : ''}} class="form-check-input"> Oral</label>
                    &nbsp; <label class="form-check-label" for="axillary"><input type="radio" {{$nsf->temp==2 ? 'checked' : ''}} class="form-check-input"> Axillary</label>
                    &nbsp; <label class="form-check-label" for="tympanic"><input type="radio" {{$nsf->temp==3 ? 'checked' : ''}} class="form-check-input"> Tympanic</label>
                    &nbsp; <label class="form-check-label" for="temporal"><input type="radio" {{$nsf->temp==4 ? 'checked' : ''}} class="form-check-input"> Temporal/Forehead</label>
                    &nbsp; <label class="form-check-label" for="rectal"><input type="radio" {{$nsf->temp==5 ? 'checked' : ''}} class="form-check-input"> Rectal</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Pulse: <b>{{$nsf->pulse}}</b></span>
                    &nbsp; <label class="form-check-label" for="radial"><input type="radio" {{$nsf->pul=="1" ? 'checked' : '' }} name="pul" value="1" id="radial" class="form-check-input"> Radial</label>
                    &nbsp; <label class="form-check-label" for="apical"><input type="radio" {{$nsf->pul=="2" ? 'checked' : '' }} name="pul" value="2" id="apical" class="form-check-input"> Apical</label>
                    &nbsp; <label class="form-check-label" for="brachial"><input type="radio" {{$nsf->pul=="3" ? 'checked' : '' }} name="pul" value="3" id="brachial" class="form-check-input"> Brachial</label>
                    &nbsp; <label class="form-check-label" for="carotid"><input type="radio" {{$nsf->pul=="4" ? 'checked' : '' }} name="pul" value="4" id="carotid" class="form-check-input"> Carotid</label>
                    &nbsp; <label class="form-check-label" for="p_regular"><input type="radio" {{$nsf->pul=="5" ? 'checked' : '' }} name="pul" value="5" id="p_regular" class="form-check-input"> Regular</label>
                    &nbsp; <label class="form-check-label" for="p_irregular"><input type="radio" {{$nsf->pul=="6" ? 'checked' : '' }} name="pul" value="6" id="p_irregular" class="form-check-input"> Irregular</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Respirations: <b>{{$nsf->respirations}}</b></span>
                    &nbsp; <label class="form-check-label" for="regular"><input type="radio" {{$nsf->irregularRespi=='regular' ? 'checked' : ''}} id="regular" value="regular" class="form-check-input"> Regular</label>
                    &nbsp; <label class="form-check-label" for="irregular"><input type="radio" {{$nsf->irregularRespi=='irregular' ? 'checked' : ''}} id="irregular" value="irregular" class="form-check-input"> Irregular</label>
                    &nbsp; &nbsp; <span>Weight: <b>{{$nsf->weight}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Apnea Periods: <b>{{$nsf->apneaPeriodsText}}</b> sec.</span>
                    &nbsp; &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->apneaPeriods=='Observed' ? 'checked' : ''}} name="apneaPeriods" value="Observed" class="form-check-input"> Observed</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->apneaPeriods=='reported' ? 'checked' : ''}} name="ApneaPeriods" value="reported" class="form-check-input"> Reported</label>

                    &nbsp; &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->apneaPeriods1=='Actual' ? 'checked' : ''}} name="apneaPeriods1" class="form-check-input"> Actual</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->apneaPeriods1=='reported' ? 'checked' : ''}} name="apneaPeriods1" class="form-check-input"> Reported</label>

                    &nbsp; &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->apneaPeriods2=='lying' ? 'checked' : ''}} name="apneaPeriods2" class="form-check-input"> Lying</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->apneaPeriods2=='standing' ? 'checked' : ''}} name="apneaPeriods2" class="form-check-input"> Standing</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->apneaPeriods2=='sitting' ? 'checked' : ''}} name="apneaPeriods2" class="form-check-input"> Sitting</label>
                </div>
                
            </td>
        </tr>

        <tr>
            <td style="vertical-align: top" colspan="2">
                <h3 style="margin-top: 0;margin-bottom:5px">PAIN:</h3>
                <div style="margin-top: 5px">
                    <b>Is patient experiencing pain?</b>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->patientExperiencing=='Yes' ? 'checked' : ''}} value="Yes" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->patientExperiencing=='No' ? 'checked' : ''}} value="No" class="form-check-input"> No</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->patientExperiencing=='unable to communicate' ? 'checked' : ''}} value="unable to communicate" class="form-check-input"> Unable to communicate</label>

                    &nbsp; &nbsp; <span>Origin: <b>{{$nsf->origin}}</b></span>
                    &nbsp; &nbsp; <span>Location(s): <b>{{$nsf->location}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Duration: <b>{{$nsf->duration}}</b></span>
                    &nbsp; &nbsp; <span>Intensity 0-10: <b>{{$nsf->intensity}}</b></span>
                    &nbsp; &nbsp; <span>Relief measures: <b>{{$nsf->reliefMeasures}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <b>Non-verbals demonstrated:</b>
                    &nbsp; <label class="form-check-label" for="demonstrated_diaphoresis"><input type="radio" {{$nsf->demonstrated=='diaphoresis' ? 'checked' : ''}} id="demonstrated_diaphoresis" value="diaphoresis" class="form-check-input"> Diaphoresis</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_grimacing"><input type="radio" {{$nsf->demonstrated=='grimacing' ? 'checked' : ''}} id="Grimacing" value="grimacing" class="form-check-input"> Grimacing</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_guarding"><input type="radio" {{$nsf->demonstrated=='Guarding' ? 'checked' : ''}} id="demonstrated_guarding" value="Guarding" class="form-check-input"> Guarding</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_moaning"><input type="radio" {{$nsf->demonstrated=='Moaning' ? 'checked' : ''}} id="demonstrated_moaning" value="Moaning" class="form-check-input"> Moaning</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_crying"><input type="radio" {{$nsf->demonstrated=='crying' ? 'checked' : ''}} id="demonstrated_crying" value="crying" class="form-check-input"> Crying</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_irritability"><input type="radio" {{$nsf->demonstrated=='irritability' ? 'checked' : ''}} id="demonstrated_irritability" value="irritability" class="form-check-input"> Irritability</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_anger"><input type="radio" {{$nsf->demonstrated=='anger' ? 'checked' : ''}} id="demonstrated_anger" value="anger" class="form-check-input"> Anger</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_tense"><input type="radio" {{$nsf->demonstrated=='tense' ? 'checked' : ''}} id="demonstrated_tense" value="tense" class="form-check-input"> Tense</label>
                    &nbsp; <label class="form-check-label" for="demonstrated_restlessness"><input type="radio" {{$nsf->demonstrated=='restlessness' ? 'checked' : ''}} id="demonstrated_restlessness" value="restlessness" class="form-check-input"> Restlessness</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for=""><input type="checkbox" {{$nsf->demonstrated ? 'checked' : ''}} name="changeVitalSig" value="1" class="form-check-input"> Change in Vital Sig</label>
                    &nbsp; &nbsp; <span>Other: <b>{{$nsf->pOther}}</b></span>
                    &nbsp; &nbsp; <span>Implications Care Plan:</span>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->implicationsCarePlan=='yes' ? 'checked' : ''}} value="yes" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->implicationsCarePlan=='no' ? 'checked' : ''}} value="no" class="form-check-input"> No</label>
                </div>

            </td>
            
        </tr>

        <tr>
            <td colspan="2"><h3 style="text-align: center;margin:0">CARDIOPULMONARY</h3></td>
        </tr>

        <tr>
            <td style="vertical-align: top">
                <h3 style="margin: 0">Lung Sounds</h3>
                <div>
                    <label class="form-check-label"><input type="radio" {{$nsf->lungSounds=='clear' ? 'checked' : ''}} id="cardiopulmonary_clear" value="clear" class="form-check-input"> Clear</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->lungSounds=='crackles' ? 'checked' : ''}} id="cardiopulmonary_crackles" value="crackles" class="form-check-input"> Crackles</label>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nsf->lungSounds=='rales' ? 'checked' : ''}} id="cardiopulmonary_rales" value="rales" class="form-check-input"> Rales</label>
                    &nbsp;  &nbsp; <span>Location: <b>{{$nsf->fLocation}}</b></span>
                </div>

                <div style="margin-top: 5px">
                   <span>Rhonchi/Wheeze Location: <b>{{$nsf->wheezeLocation}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="diminished"><input type="checkbox" {{$nsf->diminished ? 'checked' : ''}} name="diminished" id="diminished" value="1" class="form-check-input"> Diminished</label>
                    &nbsp; <label class="form-check-label" for="absent"><input type="checkbox" {{$nsf->absent ? 'checked' : ''}} name="absent" id="absent" value="1" class="form-check-input"> Absent</label>
                    &nbsp; &nbsp; <span>Other: <b>{{$nsf->absentOther}}</b></span>
                </div>

                <h3 style="margin: 0;margin-top:5px">Cough</h3>
                <div>
                    <label class="form-check-label" for="cough_none"><input type="radio" {{$nsf->cough=='none' ? 'checked' : ''}} name="cough" id="cough_none" value="none" class="form-check-input"> None</label>
                    &nbsp; <label class="form-check-label" for="cough_dry"><input type="radio" {{$nsf->cough=='dry' ? 'checked' : ''}} name="cough" id="cough_dry" value="dry" class="form-check-input"> Dry</label>
                    &nbsp; <label class="form-check-label" for="cough_acute"><input type="radio" {{$nsf->cough=='acute' ? 'checked' : ''}} name="cough" id="cough_acute" value="acute" class="form-check-input"> Acute</label>
                    &nbsp; <label class="form-check-label" for="cough_chronic"><input type="radio" {{$nsf->cough=='chronic' ? 'checked' : ''}} name="cough" id="cough_chronic" value="chronic" class="form-check-input"> Chronic</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="non_productive"><input type="radio" {{$nsf->productiveCough=='Non-productive' ? 'checked' : ''}} name="productiveCough" id="non_productive" value="Non-productive" class="form-check-input"> Non-productive</label>
                    &nbsp; <label class="form-check-label" for="productive"><input type="radio" {{$nsf->productiveCough=='productive' ? 'checked' : ''}} name="productiveCough" id="productive" value="productive" class="form-check-input"> Productive</label>

                    &nbsp; &nbsp; <span>Amt:</span>
                    &nbsp; <label class="form-check-label" for="amt_small"><input type="radio" {{$nsf->amtCough=='small' ? 'checked' : ''}} name="amtCough" id="amt_small" value="small" class="form-check-input"> Small</label>
                    &nbsp; <label class="form-check-label" for="amt_medium"><input type="radio" {{$nsf->amtCough=='medium' ? 'checked' : ''}} name="amtCough" id="amt_medium" value="medium" class="form-check-input"> Medium</label>
                    &nbsp; <label class="form-check-label" for="amt_large"><input type="radio" {{$nsf->amtCough=='large' ? 'checked' : ''}} name="amtCough" id="amt_large" value="large" class="form-check-input"> Large</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Hemoptysis frequency: <b>{{$nsf->hemoptysisFrequency}}</b></span>
                    &nbsp; &nbsp; <span>Amount: <b>{{$nsf->hemoptysisFrequencyAmount}}</b></span>
                </div>

                
                <div style="margin-top: 5px">
                    <label class="form-check-label" for="hemoptysis_frequency_able"><input type="radio" {{$nsf->coughAU=='able' ? 'checked' : ''}} name="coughAU" id="hemoptysis_frequency_able" value="able" class="form-check-input"> Able</label>
                    &nbsp; <label class="form-check-label" for="hemoptysis_frequency_unable"><input type="radio" {{$nsf->coughAU=='unable' ? 'checked' : ''}} name="coughAU" id="hemoptysis_frequency_unable" value="unable" class="form-check-input"> Unable to cough up secretions</label>

                    &nbsp;  &nbsp; <span>Suction:</span>
                    &nbsp; <label class="form-check-label" for="hemoptysis_frequency_yes"><input type="radio" {{$nsf->suction=='yes' ? 'checked' : ''}} name="suction" id="hemoptysis_frequency_yes" value="yes" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label" for="hemoptysis_frequency_no"><input type="radio" {{$nsf->suction=='no' ? 'checked' : ''}} name="suction" id="hemoptysis_frequency_no" value="no" class="form-check-input"> No</label>
                </div>

                <div style="margin-top: 5px">
                    <h3 style="margin: 0">Respiratory Status</h3>
                    <label class="form-check-label" for="accessory_muscles_used"><input type="radio" {{$nsf->respiratoryStatus=='muscles used' ? 'checked' : ''}} name="respiratoryStatus" id="accessory_muscles_used" value="muscles used" class="form-check-input"> Accessory muscles used</label>
                    &nbsp; <label class="form-check-label" for="orthopnea"><input type="radio" {{$nsf->respiratoryStatus=='orthopnea' ? 'checked' : ''}} name="respiratoryStatus" id="orthopnea" value="orthopnea" class="form-check-input"> Orthopnea</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Dyspnea:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="dyspnea_at_rest"><input type="radio" {{$nsf2->dyspnea=='rest' ? 'checked' : ''}} name="dyspnea" id="dyspnea" value="rest" class="form-check-input"> At rest</label>
                    &nbsp; <label class="form-check-label" for="dyspnea_with_exertion"><input type="radio" {{$nsf2->dyspnea=='exertion' ? 'checked' : ''}} name="dyspnea" id="dyspnea_with_exertion" value="exertion" class="form-check-input"> With exertion/activity</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Stridor/retractions</span>
                    &nbsp; &nbsp; <span>O<sub>2</sub> <b>{{$nsf2->stridorq}}</b> LPM</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="stridor_prn"><input type="radio" {{$nsf2->stridor1=='prn' ? 'checked' : ''}} name="stridor1" id="" value="prn" class="form-check-input"> PRN</label>
                    &nbsp; <label class="form-check-label" for="stridor_continuous"><input type="radio" {{$nsf2->stridor1=='continuous' ? 'checked' : ''}} name="stridor1" id="stridor_continuous" value="continuous" class="form-check-input"> Continuous</label>
                </div>
                <div style="margin-top: 5px">
                    <span>O<sub>2</sub> saturation <b>{{$nsf2->saturation}}</b> %</span>
                </div>

            </td>

            <td style="vertical-align: top">
                <div>
                    <span>Urine color: <b>{{$nsf3->urineColor}}</b></span>
                    &nbsp; <span>Odor: <b>{{$nsf3->urineOdor}}</b></span>
                    &nbsp; &nbsp; <label class="form-check-label" for="urineBurning"><input type="checkbox" {{$nsf3->urineBurning ? 'checked' : ''}} name="urineBurning" id="urineBurning" value="1" class="form-check-input"> Burning</label>
                    &nbsp; <label class="form-check-label" for="cardiopulmonary_urine_hesitancy"><input type="checkbox" {{$nsf3->urineHesitancy ? 'checked' : ''}} name="urineHesitancy" id="cardiopulmonary_urine_hesitancy" value="1" class="form-check-input"> Hesitancy</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="cardiopulmonary_urine_nocturia"><input type="checkbox" {{$nsf3->nocturia ? 'checked' : ''}} name="nocturia" id="nocturia" value="1" class="form-check-input"> Nocturia</label>
                    &nbsp; <label class="form-check-label" for="cardiopulmonary_urine_oliguria"><input type="checkbox" {{$nsf3->oliguria ? 'checked' : ''}} name="oliguria" id="oliguria" value="1" class="form-check-input"> Oliguria/anuria</label>
                    &nbsp; <label class="form-check-label" for="cardiopulmonary_urine_retention"><input type="checkbox" {{$nsf3->retention ? 'checked' : ''}} name="retention" id="retention" value="1" class="form-check-input"> Retention</label>

                    &nbsp; &nbsp; <span>Incontinence occurs <b>{{$nsf3->incontinenceOccurs}}</b></span>
                </div>

                <h3 style="margin-bottom: 0">Urinary Catheter</h3>
                <div style="margin-top: 5px">
                    <span>Type (specify) <b>{{$nsf3->cardiopulmonaryType}}</b></span>
                    &nbsp; &nbsp; <span>French <b>{{$nsf3->french}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Bulb inflated <b>{{$nsf3->bulbinflated}}</b> mL sterile water</span>
                    &nbsp; &nbsp; <span>Date changed <b>{{$nsf3->dateChange}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Irrigated with (specify) <b>{{$nsf3->irrigated}}</b> amt</span>
                    &nbsp; &nbsp; <span><b>{{$nsf3->lm}}</b> mL</span>
                </div>

                <div style="margin-top: 5px">
                    <span>Other: <b>{!!$nsf3->lmOther!!}</b></span>
                </div>

                <h3 style="text-align: center">ENDOCRINE</h3>
                <div>
                    <span>Blood sugar range <b>{{$nsf3->endocrineBlood}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Reported by:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="reported_by_patient"><input type="checkbox" {{$nsf3->patient ? 'checked' : ''}} name="patient" id="reported_by_patient" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="reported_by_caregiver"><input type="checkbox" {{$nsf3->caregiver ? 'checked' : ''}} name="caregiver" id="" value="1" class="form-check-input"> Family/Caregiver</label>
                    &nbsp; <label class="form-check-label" for="reported_by_nurse"><input type="checkbox" {{$nsf3->nurse ? 'checked' : ''}} name="nurse" id="" value="1" class="form-check-input"> Nurse</label>
                    &nbsp; &nbsp; <span>Other <b>{{$nsf3->reportedByOther}}</b></span>
                </div>
            </td>
        </tr>

        <tr>
            <td style="vertical-align: top">
                <div style="margin-top: 5px">
                    <h3 style="margin: 0">Respiratory Status</h3>
                    <label class="form-check-label" for="RespiratoryStatus_denies"><input type="radio" {{$nsf2->respiratoryStatus=='denies' ? 'checked' : ''}} name="respiratoryStatus" id="denies" value="denies" class="form-check-input"> Denies</label>
                    &nbsp; <label class="form-check-label" for="respiratoryStatus_anginal"><input type="radio" {{$nsf2->respiratoryStatus=='anginal' ? 'checked' : ''}} name="respiratoryStatus" id="anginal" value="anginal" class="form-check-input"> Anginal</label>
                     &nbsp; <label class="form-check-label" for="respiratoryStatus_postural"><input type="radio" {{$nsf2->respiratoryStatus=='postural' ? 'checked' : ''}} name="respiratoryStatus" id="postural" value="postural" class="form-check-input"> Postural</label>
                     &nbsp; <label class="form-check-label" for="respiratoryStatus_localized"><input type="radio" {{$nsf2->respiratoryStatus=='localized' ? 'checked' : ''}} name="respiratoryStatus" id="localized" value="localized" class="form-check-input"> Localized</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="respiratoryStatusSubsternal"><input type="checkbox" {{$nsf2->substernal ? 'checked' : ''}} name="substernal" id="substernal" value="1" class="form-check-input"> Substernal</label>
                     &nbsp; <label class="form-check-label" for="RespiratoryStatus_radiating"><input type="checkbox" {{$nsf2->radiating ? 'checked' : ''}} name="radiating" id="radiating" value="1" class="form-check-input"> Radiating</label>
                     &nbsp; <label class="form-check-label" for="RespiratoryStatus_dull"><input type="checkbox" {{$nsf2->dull ? 'checked' : ''}} name="dull" id="dull" value="1" class="form-check-input"> Dull</label>
                     &nbsp; <label class="form-check-label" for="RespiratoryStatus_aching"><input type="checkbox" {{$nsf2->aching ? 'checked' : ''}} name="aching" id="" value="1" class="form-check-input"> Aching</label>
                     &nbsp; <label class="form-check-label" for="RespiratoryStatus_sharp"><input type="checkbox" {{$nsf2->sharp ? 'checked' : ''}} name="sharp" id="RespiratoryStatus_sharp" value="1" class="form-check-input"> Sharp/stabbing</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="viselike"><input type="checkbox" {{$nsf2->viselike ? 'checked' : ''}} name="viselike" id="viselike" value="1" class="form-check-input"> Viselike</label>
                    &nbsp; &nbsp; <span>Other: <b>{!!$nsf2->viselikeOther!!}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Associated with:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="shortness_of_breath"><input type="checkbox" {{$nsf2->shortnessOfBreathh=='shortness of breath' ? 'checked' : ''}} name="shortnessOfBreathh" id="shortnessOfBreathh" value="shortness of breath" class="form-check-input"> Shortness of breath</label>
                    &nbsp; <label class="form-check-label" for="activity"><input type="checkbox" {{$nsf2->activity=='activity' ? 'checked' : ''}} name="activity" id="activity" value="activity" class="form-check-input"> Activity</label>
                    &nbsp; <label class="form-check-label" for="rest"><input type="checkbox" {{$nsf2->rest=='rest' ? 'checked' : ''}} name="rest" id="rest" value="rest" class="form-check-input"> Rest</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Frequency/duration <b>{{$nsf2->duration}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <h3 style="margin: 0">Heart Sounds</h3>
                    <label class="form-check-label" for="heart_sounds_normal"><input type="radio" {{$nsf2->heartSounds=='normal' ? 'checked' : ''}} name="heartSounds" id="heart_sounds_normal" value="normal" class="form-check-input"> Normal</label>
                     &nbsp; <label class="form-check-label" for="heart_sounds_rgular"><input type="radio" {{$nsf2->heartSounds=='regular' ? 'checked' : ''}} name="heartSounds" id="heart_sounds_rgular" value="regular" class="form-check-input"> Regular</label>
                     &nbsp; <label class="form-check-label" for="heart_sounds_inrregular"><input type="radio" {{$nsf2->heartSounds=='irregular' ? 'checked' : ''}} name="heartSounds" id="heart_sounds_inrregular" value="irregular" class="form-check-input"> Irregular</label>
                     &nbsp; <label class="form-check-label" for="heart_sounds_murmur"><input type="radio" {{$nsf2->heartSounds=='murmur' ? 'checked' : ''}} name="heartSounds" id="heart_sounds_murmur" value="murmur" class="form-check-input"> Murmur</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Abnormal (explain) <b>{{$nsf2->abnormal}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <h3 style="margin: 0">Other</h3>
                    <label class="form-check-label" for="other_fatigued"><input type="checkbox" {{$nsf2->fatigued=='fatigued' ? 'checked' : ''}} name="fatigued" id="fatigued" value="fatigued" class="form-check-input"> Fatigued</label>
                    &nbsp; <label class="form-check-label" for="other_edema"><input type="checkbox" {{$nsf2->edema=='edema' ? 'checked' : ''}} name="edema" id="edema" value="edema" class="form-check-input"> Edema</label>

                    &nbsp; &nbsp; <span>Pedal:</span>
                    &nbsp; <span>Right <b>{{$nsf2->pedalRight}}</b></span>
                    &nbsp; <span>Left <b>{{$nsf2->pedalLeft}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Pitting:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="pitting_plus_1"><input type="radio" {{$nsf2->pitting=='1' ? 'checked' : ''}} name="pitting" id="pitting_plus_1" value="1" class="form-check-input"> +1</label>
                     &nbsp; <label class="form-check-label" for="pitting_plus_2"><input type="radio" {{$nsf2->pitting=='2' ? 'checked' : ''}} name="pitting" id="pitting_plus_2" value="2" class="form-check-input"> +2</label>
                     &nbsp; <label class="form-check-label" for="pitting_plus_3"><input type="radio" {{$nsf2->pitting=='3' ? 'checked' : ''}} name="pitting" id="pitting_plus_3" value="3" class="form-check-input"> +3</label>
                     &nbsp; <label class="form-check-label" for="pitting_plus_4"><input type="radio" {{$nsf2->pitting=='4' ? 'checked' : ''}} name="pitting" id="pitting_plus_4" value="4" class="form-check-input"> +4</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Non-pitting site: <b>{{$nsf2->nonPittingSite}}</b></span>
                    &nbsp; &nbsp; <label class="form-check-label" for="cramps_claudication"><input type="checkbox" {{$nsf2->cramps ? 'checked' : ''}} name="cramps" id="cramps" value="1" class="form-check-input"> Cramps/claudication</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Capillary refill:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="capillary_greater"><input type="radio" {{$nsf2->capillaryRefill=='greater 3' ? 'checked' : ''}} name="capillaryRefill" id="capillary_greater" value="greater 3" class="form-check-input"> Greater than 3 seconds</label>
                    &nbsp; <label class="form-check-label" for="capillary_less"><input type="radio" {{$nsf2->capillaryRefill=='less 3' ? 'checked' : ''}} name="capillaryRefill" id="capillary_less" value="less 3" class="form-check-input"> Less than 3 seconds</label>
                </div>

                <h3 style="text-align: center">NEUROMUSCULAR</h3>
                <p style="margin: 0">Alert/oriented to person/place/time</p>
                <label class="form-check-label" for="disoriented"><input type="radio" {{$nsf2->alert=='disoriented' ? 'checked' : ''}} name="alert" id="" value="disoriented" class="form-check-input"> Disoriented</label>
                &nbsp; <label class="form-check-label" for="syncope"><input type="radio" {{$nsf2->alert=='syncope' ? 'checked' : ''}} name="alert" id="syncope" value="syncope" class="form-check-input"> Syncope</label>
                &nbsp; <label class="form-check-label" for="headache"><input type="radio" {{$nsf2->alert=='headache' ? 'checked' : ''}} name="alert" id="" value="headache" class="form-check-input"> Headache</label>

                <h3 style="margin-bottom: 0">Grasp</h3>
                <div style="margin-top: 5px">
                    <span>Right:</span>
                    &nbsp; <label class="form-check-label" for="right-equal"><input type="radio" {{$nsf2->rightGrasp=='equal' ? 'checked' : ''}} name="rightGrasp" id="right-equal" value="equal" class="form-check-input"> Equal</label>
                    &nbsp; <label class="form-check-label" for="right-unequal"><input type="radio" {{$nsf2->rightGrasp=='unequal' ? 'checked' : ''}} name="rightGrasp" id="right-unequal" value="unequal" class="form-check-input"> Unequal</label>
                    &nbsp; &nbsp; <span>Other <b>{{$nsf2->rightOther}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Left:</span>
                    &nbsp; <label class="form-check-label" for="left-equal"><input type="radio" {{$nsf2->leftGrasp=='equal' ? 'checked' : ''}} name="leftGrasp" id="left-equal" value="equal" class="form-check-input"> Equal</label>
                    &nbsp; <label class="form-check-label" for="left-unequal"><input type="radio" {{$nsf2->leftGrasp=='unequal' ? 'checked' : ''}} name="leftGrasp" id="" value="unequal" class="form-check-input"> Unequal</label>
                    &nbsp; &nbsp; <span>Other <b>{{$nsf2->leftOther}}</b></span>
                </div>

                <h3 style="margin-bottom: 0">Pupils</h3>
                <div style="margin-top: 5px">
                    <span>PERRLA:</span>
                    &nbsp; <label class="form-check-label" for="perral_equal"><input type="radio" {{$nsf2->pupils=='equal' ? 'checked' : ''}} name="pupils" id="perral_equal" value="equal" class="form-check-input"> Equal</label>
                    &nbsp; <label class="form-check-label" for="perral_unequal"><input type="radio" {{$nsf2->pupils=='unequal' ? 'checked' : ''}} name="pupils" id="perral_unequal" value="unequal" class="form-check-input"> Unequal</label>
                    &nbsp; &nbsp; <span>Other <b>{{$nsf2->otherPerral}}</b></span>
                </div>

                <h3 style="margin-bottom: 0">Impairment</h3>
                <div style="margin-top: 5px">
                    <label class="form-check-label" for="impairment_speech"><input type="radio" {{$nsf2->impairment=='speech' ? 'checked' : ''}} name="impairment" id="impairment_speech" value="speech" class="form-check-input"> Speech</label>
                     &nbsp; <label class="form-check-label" for="impairment_hearing"><input type="radio" {{$nsf2->impairment=='hearing' ? 'checked' : ''}} name="impairment" id="impairment_hearing" value="hearing" class="form-check-input"> Hearing</label>
                     &nbsp; <label class="form-check-label" for="impairment_visual"><input type="radio" {{$nsf2->impairment=='visual' ? 'checked' : ''}} name="impairment" id="impairment_visual" value="visual" class="form-check-input"> Visual</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="impairment_decreased_sensitivity"><input type="radio" {{$nsf2->impair=='sensitivity' ? 'checked' : ''}} name="impair" id="impairment_decreased_sensitivity" value="sensitivity" class="form-check-input"> Decreased sensitivity</label>
                    &nbsp; <label class="form-check-label" for="impairment_speech"><input type="radio" {{$nsf2->impair=='tremors' ? 'checked' : ''}} name="impair" id="impairment_tremors" value="tremors" class="form-check-input"> Tremors</label>
                    &nbsp; <label class="form-check-label" for="impairment_numbness"><input type="radio" {{$nsf2->impair=='numbness' ? 'checked' : ''}} name="impair" id="impairment_numbness" value="numbness" class="form-check-input"> Numbness</label>
                    &nbsp; <label class="form-check-label" for="impairment_tingling"><input type="radio" {{$nsf2->impair=='tingling' ? 'checked' : ''}} name="impair" id="impairment_tingling" value="tingling" class="form-check-input"> Tingling</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="impairment_vertigo"><input type="radio" {{$nsf2->impairmentVertigo=='vertigo' ? 'checked' : ''}} name="impairmentVertigo" id="impairment_vertigo" value="vertigo" class="form-check-input"> Vertigo</label>
                    &nbsp; <label class="form-check-label" for="impairment_ataxia"><input type="radio" {{$nsf2->impairmentVertigo=='ataxia' ? 'checked' : ''}} name="impairmentVertigo" id="impairment_ataxia" value="ataxia" class="form-check-input"> Ataxia</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Falls (explain): <b>{{$nsf2->impairmentFalls}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="impairment_balance"><input type="radio" {{$nsf2->impairmentBal=='balance' ? 'checked' : ''}} name="impairmentBal" id="impairment_balance" value="balance" class="form-check-input"> Balance WNL</label>
                    &nbsp; <label class="form-check-label" for="impairment_unsteady"><input type="radio" {{$nsf2->impairmentBal=='unsteady' ? 'checked' : ''}} name="impairmentBal" id="impairment_unsteady" value="unsteady" class="form-check-input"> Unsteady gait</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Weakness (describe) <b>{!!$nsf2->impairmentWeekness!!}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Change in ADL (explain) <b>{!!$nsf2->impairmentWeekness!!}</b></span>
                </div>

                <h3 style="text-align: center">GASTROINTESTINAL</h3>
                <b style="font-size: 1.3em">Appetite</b>
                &nbsp; &nbsp; &nbsp; <label class="form-check-label" for="gastrointestinal_good"><input type="checkbox" {{$nsf2->good ? 'checked' : ''}} name="good" id="gastrointestinal_good" value="1" class="form-check-input"> Good</label>
                &nbsp; <label class="form-check-label" for="gastrointestinal_fair"><input type="checkbox" {{$nsf2->fair ? 'checked' : ''}} name="fair" id="gastrointestinal_fair" value="1" class="form-check-input"> Fair</label>
                &nbsp; <label class="form-check-label" for="gastrointestinal_poor"><input type="checkbox" {{$nsf2->poor ? 'checked' : ''}} name="poor" id="gastrointestinal_poor" value="1" class="form-check-input"> Poor</label>
                &nbsp; <label class="form-check-label" for="gastrointestinal_npo"><input type="checkbox" {{$nsf2->npo ? 'checked' : ''}} name="npo" id="gastrointestinal_npo" value="1" class="form-check-input"> NPO</label>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for=""><input type="checkbox" {{$nsf2->difficultySwallowing ? 'checked' : ''}} name="difficultySwallowing" value="1" class="form-check-input"> Difficulty swallowing</label>
                    &nbsp; &nbsp; <span>Oral intake <b>{{$nsf2->oralIntake}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Tube feeding (specify) <b>{!!$nsf2->tubeFeeding!!}</b></span>
                    &nbsp; &nbsp; <label class="form-check-label" for="tube_feeding_cont"><input type="radio" {{$nsf2->tube=='cont' ? 'checked' : ''}} name="tube" id="tube_feeding_cont" value="cont" class="form-check-input"> Cont.</label>
                    &nbsp; <label class="form-check-label" for="tube_feeding_intermittent"><input type="radio" {{$nsf2->tube=='intermittent' ? 'checked' : ''}} name="tube" id="tube_feeding_intermittent" value="intermittent" class="form-check-input"> Intermittent</label>
                </div>
            </td>

            <td style="vertical-align: top">
                <div>
                    <span>Blood sugar this visit: <b>{{$nsf3->bloodSugarThisVisit}}</b></span>
                    &nbsp; &nbsp; <span>Check by: <b>{{$nsf3->checkByNurse}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Hyperglycemia:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="glycosuria"><input type="checkbox" {{$nsf3->glycosuria ? 'checked' : ''}} name="glycosuria" id="Hyperglycemia_glycosuria" value="1" class="form-check-input"> Glycosuria</label>
                    &nbsp; <label class="form-check-label" for="polyuria"><input type="checkbox" {{$nsf3->polyuria ? 'checked' : ''}} name="polyuria" id="polyuria" value="1" class="form-check-input"> Polyuria</label>
                    &nbsp; <label class="form-check-label" for="polydipsia"><input type="checkbox" {{$nsf3->polydipsia ? 'checked' : ''}} name="polydipsia" id="polydipsia" value="1" class="form-check-input"> Polydipsia</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Hypoglycemia:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="Hypoglycemia_sweats"><input type="checkbox" {{$nsf3->sweats ? 'checked' : ''}} name="sweats" id="" value="1" class="form-check-input"> Sweats</label>
                    &nbsp; <label class="form-check-label" for="Hypoglycemia_polyphagia"><input type="checkbox" {{$nsf3->polyphagia ? 'checked' : ''}} name="polyphagia" id="polyphagia" value="1" class="form-check-input"> Polyphagia</label>
                    &nbsp; <label class="form-check-label" for="Hypoglycemia_weak"><input type="checkbox" {{$nsf3->weak ? 'checked' : ''}} name="weak" id="weak" value="1" class="form-check-input"> Weak</label>
                    &nbsp; <label class="form-check-label" for="Hypoglycemia_faint"><input type="checkbox" {{$nsf3->faint ? 'checked' : ''}} name="faint" id="faint" value="1" class="form-check-input"> Faint</label>
                    &nbsp; <label class="form-check-label" for="Hypoglycemia_stupor"><input type="checkbox" {{$nsf3->stupor ? 'checked' : ''}} name="stupor" id="stupor" value="1" class="form-check-input"> Stupor</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Monitored by:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="Monitored_by_Patient"><input type="checkbox" {{$nsf3->byPatient ? 'checked' : ''}} name="byPatient" id="" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="Monitored_by_caregiver"><input type="checkbox" {{$nsf3->bycaregiver ? 'checked' : ''}} name="bycaregiver" id="" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="Monitored_by_Nurse"><input type="checkbox" {{$nsf3->byNurse ? 'checked' : ''}} name="byNurse" id="" value="1" class="form-check-input"> Nurse</label>
                    &nbsp; &nbsp; <span>Other <b>{{$nsf3->byOther}}</b></span>
                </div>

                <h3 style="text-align: center">MEDICATIONS</h3>
                <p>New or changed since last visit (Update Medication Profile)</p>
                <h3 style="margin-bottom: 0">Instructed on:</h3>
                <div style="margin-top: 5px">
                    <label class="form-check-label mt-2" for="Instructed_on_allergic"><input type="checkbox" {{$nsf4->onAllergic ? 'checked' : ''}} name="onAllergic" id="Instructed_on_allergic" value="1" class="form-check-input"> S/S allergic reaction</label>
                    &nbsp; &nbsp; <label class="form-check-label mt-2" for="onMedication"><input type="checkbox" {{$nsf4->onMedication ? 'checked' : ''}} name="onMedication" id="onMedication" value="1" class="form-check-input"> Medication(s) names</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label mt-2" for="onDrugInteraction"><input type="checkbox" {{$nsf4->onDrugInteraction ? 'checked' : ''}} name="onDrugInteraction" id="onDrugInteraction" value="1" class="form-check-input"> Drug/drug interactions</label>
                    &nbsp; &nbsp; <label class="form-check-label mt-2" for="onFoodInteractions"><input type="checkbox" {{$nsf4->onFoodInteractions ? 'checked' : ''}} name="onFoodInteractions" id="onFoodInteractions" value="1" class="form-check-input"> Drug/food interactions</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Rx refill by: <b>{{$nsf4->rxRfillBy}}</b></span>
                    &nbsp; &nbsp; <label class="form-check-label mt-2" for="Instructed_on_expiration_dates"><input type="checkbox" {{$nsf4->expirationDates ? 'checked' : ''}} name="expirationDates" id="Instructed_on_expiration_dates" value="1" class="form-check-input"> Expiration dates</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label mt-2" for="Instructed_on_contraindications"><input type="checkbox" {{$nsf4->onContraindications ? 'checked' : ''}} name="onContraindications" id="Instructed_on_contraindications" value="1" class="form-check-input"> S/E contraindications</label>
                    &nbsp; &nbsp; <span>Pill count (if applicable) <b>{{$nsf4->onPillCount}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label mt-2" for="pill_ample_supply"><input type="checkbox" {{$nsf4->ampleSupply ? 'checked' : ''}} name="ampleSupply" id="ample_supply" value="1" class="form-check-input"> Ample supply</label>
                    &nbsp; &nbsp; <label class="form-check-label mt-2" for="Proper_disposal_of_sharps"><input type="checkbox" {{$nsf4->disposalOfSharps ? 'checked' : ''}} name="disposalOfSharps" id="disposal_of_sharps" value="1" class="form-check-input"> Proper disposal of sharps</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Other: <b>{{$nsf4->disposalOfSharpsOther}}</b></span>
                    &nbsp; &nbsp; <label class="form-check-label mt-2" for="Duration_of_therapy"><input type="checkbox" {{$nsf4->durationOfTherapy ? 'checked' : ''}} name="durationOfTherapy" id="Duration_of_therapy" value="1" class="form-check-input"> Duration of therapy</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Missed doses/what to do: <b>{{$nsf4->missedDoses}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Administered by:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="administered_by_patient_1"><input type="checkbox" {{$nsf4->administeredPatient1 ? 'checked' : ''}} name="administeredPatient1" id="administered_by_patient_1" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="administered_by_caregiver_1"><input type="checkbox" {{$nsf4->byCaregiver2 ? 'checked' : ''}} name="byCaregiver2" id="administered_by_caregiver_1" value="1" class="form-check-input"> Family/Caregiver</label>
                    &nbsp; <label class="form-check-label" for="administered_by_nurse_1"><input type="checkbox" {{$nsf4->byNurse1 ? 'checked' : ''}} name="byNurse1" id="administered_by_nurse_1" value="1" class="form-check-input"> Nurse</label>
                    &nbsp; <span>Other <b>{{$nsf4->byOther1}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Medication administered this visit: <b>{{$nsf4->medicationThisVisit}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Type of line:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="typeOfLine"><input type="radio" {{$nsf4->typeOfLine=='peripheral' ? 'checked' : ''}} name="typeOfLine" id="typeOfLine" value="peripheral" class="form-check-input"> Peripheral</label>
                    &nbsp; <label class="form-check-label" for="Medication_visit_picc"><input type="radio" {{$nsf4->typeOfLine=='picc' ? 'checked' : ''}} name="typeOfLine" id="Medication_administered_this_visit_picc" value="picc" class="form-check-input"> PICC</label>
                    &nbsp; <span>Central (type) <b>{{$nsf4->central}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Implanted port Location (specify) <b>{{$nsf4->implantedPortLocation}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Catheter length <b>{{$nsf4->catheterLength}}</b> cm</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="no_evidence_of_infection"><input type="checkbox" {{$nsf4->evidenceOfInfection ? 'checked' : ''}} name="evidenceOfInfection" id="evidence_of_infection" value="1" class="form-check-input"> No evidence of infection</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Number of Lumens <b>{{$nsf4->numberOfLumens}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Dressing change <b>{{$nsf4->dressingChange}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Performed by:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="Performed_bypatient"><input type="checkbox" {{$nsf4->performedbypatient ? 'checked' : ''}} name="performedbypatient" id="Performed_bypatient" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="Performed_bycaregiver"><input type="checkbox" {{$nsf4->performedbycaregiver ? 'checked' : ''}} name="performedbycaregiver" id="Performed_bycaregiver" value="1" class="form-check-input"> Family/Caregiver</label>
                    &nbsp; <label class="form-check-label" for="Performed_bynurse"><input type="checkbox" {{$nsf4->performedbynurse ? 'checked' : ''}} name="performedbynurse" id="Performed_bynurse" value="1" class="form-check-input"> Nurse</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Other: <b>{{$nsf4->capchangeperformedbyother}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Extension/tubing changed by:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="tubing_changed_by_patient"><input type="checkbox" {{$nsf4->tubingByPatient ? 'checked' : ''}} name="tubingByPatient" id="ubing_by_patient" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="tubing_changed_by_caregiver"><input type="checkbox" {{$nsf4->tubingByCaregiver ? 'checked' : ''}} name="tubingByCaregiver" id="tubing_by_caregiver" value="1" class="form-check-input"> Family/Caregiver</label>
                    &nbsp; <label class="form-check-label" for="tubingByNurse"><input type="checkbox" {{$nsf4->tubingByNurse ? 'checked' : ''}} name="tubingByNurse" id="tubingByNurse" value="1" class="form-check-input"> Nurse</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Other: <b>{{$nsf4->tubingchangedByOther}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="flush"><input type="checkbox" {{$nsf4->flush ? 'checked' : ''}} name="flush" id="flush" value="1" class="form-check-input"> Flush</label>
                    &nbsp; <span>Saline <b>{{$nsf4->saline}}</b> mL</span>
                    &nbsp; <span>Heparin <b>{{$nsf4->heparin}}</b> unit/mL</span>
                </div>

                <div style="margin-top: 5px">
                    <span><b>{{$nsf4->ml1}}</b> mL</span>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="ml_instructed"><input type="checkbox" {{$nsf4->mlInstructed ? 'checked' : ''}} name="mlInstructed" id="mlInstructed" value="1" class="form-check-input"> Instructed</label>
                    &nbsp; <label class="form-check-label" for="ml_patient"><input type="checkbox" {{$nsf4->mlPatient ? 'checked' : ''}} name="mlPatient" id="ml_patient" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="ml_caregiver"><input type="checkbox" {{$nsf4->caregiverInfusion ? 'checked' : ''}} name="caregiverInfusion" id="" value="1" class="form-check-input"> Family/Caregiver on infusion therapy</label>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="management_of_infusion_patient"><input type="checkbox" {{$nsf4->managementInfusionPatient ? 'checked' : ''}} name="managementInfusionPatient" id="management_of_infusion_patient" value="1" class="form-check-input"> Patient</label>
                    &nbsp; <label class="form-check-label" for="management_of_infusion_caregiver"><input type="checkbox" {{$nsf4->managementInfusionCaregiver ? 'checked' : ''}} name="managementInfusionCaregiver" id="management_of_infusion_caregiver" value="1" class="form-check-input"> Family/Caregiver</label>
                    &nbsp; <label class="form-check-label" for="management_of_infusion_demonstrates"><input type="checkbox" {{$nsf4->managementInfusionDemonstrates ? 'checked' : ''}} name="managementInfusionDemonstrates" id="management_of_infusion_demonstrates" value="1" class="form-check-input"> Demonstrates</label>
                    &nbsp; <label class="form-check-label" for="management_of_infusion_verbalizes_proper"><input type="checkbox" {{$nsf4->managementInfusionVerbalizesProper ? 'checked' : ''}} name="managementInfusionVerbalizesProper" id="management_of_infusion_verbalizes_proper" value="1" class="form-check-input"> Verbalizes proper
                    management of infusion(s)</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Comments: <b>{!!$nsf4->comments!!}</b></span>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <h3 style="margin: 0;">Bowel Sounds</h3>
                <div style="margin-top: 5px">
                    <label class="form-check-label" for="bowel_sounds_active"><input type="radio" {{$nsf2->bowelSounds=='active' ? 'checked' : ''}} name="bowelSounds" id="bowel_sounds_active" value="active" class="form-check-input"> Active</label>
                    &nbsp; <label class="form-check-label" for="bowel_sounds_absent"><input type="radio" {{$nsf2->bowelSounds=='absent' ? 'checked' : ''}} name="bowelSounds" id="bowel_sounds_absent" value="absent" class="form-check-input"> Absent</label>
                    &nbsp; <label class="form-check-label" for="bowel_sounds_hypoactive"><input type="radio" {{$nsf2->bowelSounds=='hypoactive' ? 'checked' : ''}} name="bowelSounds" id="bowel_sounds_hypoactive" value="hypoactive" class="form-check-input"> Hypoactive</label>
                    &nbsp; <label class="form-check-label" for="bowel_sounds_hyperactive"><input type="radio" {{$nsf2->bowelSounds=='hyperactive' ? 'checked' : ''}} name="bowelSounds" id="bowel_sounds_hyperactive" value="hyperactive" class="form-check-input"> Hyperactive</label>
                </div>

                <div style="margin-top: 5px">
                    <span>x <b>{{$nsf2->quadrantsXquadrants}}</b> quadrants</span>

                    &nbsp; &nbsp; &nbsp; <span>Abdominal:</span>
                    &nbsp; <label class="form-check-label" for="abdominal_pain"><input type="radio" {{$nsf2->abdominal=='pain' ? 'checked' : ''}} name="abdominal" id="abdominal_pain" value="pain" class="form-check-input"> pain</label>
                    &nbsp; <label class="form-check-label" for="abdominal_distention"><input type="radio" {{$nsf2->abdominal=='distention' ? 'checked' : ''}} name="abdominal" id="" value="distention" class="form-check-input"> distention</label>
                    &nbsp; <label class="form-check-label" for="abdominal_flatulence"><input type="radio" {{$nsf2->abdominal=='flatulence' ? 'checked' : ''}} name="abdominal" id="" value="flatulence" class="form-check-input"> flatulence</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Last BM <b>{{$nsf3->lastBm}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <label class="form-check-label" for="last_bm_incontience"><input type="checkbox" {{$nsf3->incontience ? 'checked' : ''}} name="incontience" id="last_bm_incontience" value="1" class="form-check-input"> Incontinence</label>
                    &nbsp; <label class="form-check-label" for="last_bm_diarrhea"><input type="checkbox" {{$nsf3->diarrhea ? 'checked' : ''}} name="diarrhea" id="last_bm_diarrhea" value="1" class="form-check-input"> Diarrhea</label>
                    &nbsp; <label class="form-check-label" for="last_bm_constipation"><input type="checkbox" {{$nsf3->constipation ? 'checked' : ''}} name="constipation" id="last_bm_constipation" value="1" class="form-check-input"> Constipation</label>
                    &nbsp; <label class="form-check-label" for="last_bm_impaction"><input type="checkbox" {{$nsf3->impaction ? 'checked' : ''}} name="impaction" id="last_bm_impaction" value="1" class="form-check-input"> Impaction</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Enema administered (results) <b>{{$nsf3->administered}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Patient tolerated procedure well</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="patient_tolerated_yes"><input type="radio" {{$nsf3->tolerated=='yes' ? 'checked' : ''}} name="tolerated" id="patient_tolerated_yes" value="yes" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label" for="patient_tolerated_no"><input type="radio" {{$nsf3->tolerated=='no' ? 'checked' : ''}} name="tolerated" id="patient_tolerated_no" value="no" class="form-check-input"> No</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Other: <b>{{$nsf3->toleratedOther}}</b></span>
                </div>

                <h3 style="margin-bottom: 0;">EMOTIONAL STATUS</h3>
                <div style="margin-top: 5px">
                    <label class="form-check-label" for="angry"><input type="checkbox" {{$nss->angry ? 'checked' : ''}} name="angry" id="angry" value="1" class="form-check-input"> Angry</label>
                    &nbsp; <label class="form-check-label" for="agitated"><input type="checkbox" {{$nss->agitated ? 'checked' : ''}} name="agitated" id="agitated" value="1" class="form-check-input"> Agitated</label>
                    &nbsp; <label class="form-check-label" for="fearful"><input type="checkbox" {{$nss->fearful ? 'checked' : ''}} name="fearful" id="fearful" value="1" class="form-check-input"> Fearful</label>
                    &nbsp; <label class="form-check-label" for="sad"><input type="checkbox" {{$nss->sad ? 'checked' : ''}} name="sad" id="sad" value="1" class="form-check-input"> Sad</label>
                    &nbsp; <label class="form-check-label mt-2" for="iscourage"><input type="checkbox" {{$nss->discourage ? 'checked' : ''}} name="discourage" id="discourage" value="1" class="form-check-input"> Discouraged</label>
                    &nbsp; <label class="form-check-label mt-2" for="lonely"><input type="checkbox" {{$nss->lonely ? 'checked' : ''}} name="lonely" id="lonely" value="1" class="form-check-input"> Lonely</label>
                </div>
                <div>
                    <label class="form-check-label mt-2" for="depressed"><input type="checkbox" {{$nss->depressed ? 'checked' : ''}} name="depressed" id="depressed" value="1" class="form-check-input"> Depressed</label>
                    &nbsp; <label class="form-check-label mt-2" for="helpless"><input type="checkbox" {{$nss->helpless ? 'checked' : ''}} name="helpless" id="helpless" value="1" class="form-check-input"> Helpless</label>
                    &nbsp; <label class="form-check-label mt-2" for="forgetfull"><input type="checkbox" {{$nss->forgetfull ? 'checked' : ''}} name="forgetfull" id="orgetfull" value="1" class="form-check-input"> Forgetful</label>
                    &nbsp; <label class="form-check-label mt-2" for="confused"><input type="checkbox" {{$nss->confused ? 'checked' : ''}} name="confused" id="confused" value="1" class="form-check-input"> Confused</label>
                    &nbsp; <label class="form-check-label mt-2" for="content"><input type="checkbox" {{$nss->content ? 'checked' : ''}} name="content" id="content" value="1" class="form-check-input"> Content</label>
                </div>
                <div>
                    <label class="form-check-label mt-2" for="happy"><input type="checkbox" {{$nss->happy ? 'checked' : ''}} name="happy" id="happy" value="1" class="form-check-input"> Happy</label>
                    &nbsp; <label class="form-check-label mt-2" for="hopeful"><input type="checkbox" {{$nss->hopeful ? 'checked' : ''}} name="hopeful" id="hopeful" value="1" class="form-check-input"> Hopeful</label>
                    &nbsp; <label class="form-check-label mt-2" for="motivated"><input type="checkbox" {{$nss->motivated ? 'checked' : ''}} name="motivated" id="motivated" value="1" class="form-check-input"> Motivated</label>
                </div>
                <div style="margin-top: 5px;">
                    <span>Other: <b>{{$nss->statusOther}}</b></span>
                </div>
            </td>

            <td style="vertical-align: top">
                <h3 style="margin: 0;">EMOTIONAL STATUS</h3>
                <div style="margin-top: 5px">
                    <b>Soiled dressing:</b>
                    &nbsp; &nbsp; <label class="form-check-label"><input type="checkbox" {{$nss->soiledDressingRemoved ? 'checked' : ''}} name="soiledDressingRemoved" id="soiled_dressing_removed" value="1" class="form-check-input"> removed</label>
                    &nbsp; <label class="form-check-label" for="soiled_dressing_properly"><input type="checkbox" {{$nss2->soiledDressingProperly ? 'checked' : ''}} name="soiledDressingProperly" id="soiled_dressing_properly" value="1" class="form-check-input"> disposed of properly</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Wound cleaned (specify) <b>{{$nss2->woundCleaned}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Wound irrigated (specify) <b>{{$nss2->woundIrrigated}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Type of dressing(s) used <b>{{$nss2->woundDressingType}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <b>Drainage collection container emptied.</b> &nbsp; <span>Volume <b>{{$nss2->drainageVolume}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Vacuum assisted closure reset to <b>{{$nss2->vacuumReset}}</b> mm/Hg</span>
                </div>

                <div>
                    <b>Patient tolerated procedure well</b>
                    &nbsp; &nbsp; <label class="form-check-label" for="tolerated"><input type="radio" {{$nss2->tolerated=='yes' ? 'checked' : ''}} name="tolerated" id="tolerated" value="yes" class="form-check-input"> <b>Yes</b></label>
                    &nbsp; <label class="form-check-label" for="Patient_tolerated"><input type="radio" {{$nss2->tolerated=='no' ? 'checked' : ''}} name="tolerated" id="Patient_tolerated" value="no" class="form-check-input"> <b>No</b></label>
                </div>

                <div>
                    <label class="form-check-label" for="Medicated_woundcare"> <input type="checkbox" {{$nss2->medicatedWoundcare ? 'checked' : ''}} name="medicatedWoundcare" id="Medicated_woundcare" value="1" class="form-check-input"> Medicated prior to wound care</label>
                </div>

                <div>
                    <b>Wound care/dressing change performed by:</b>
                    &nbsp; &nbsp; <label class="form-check-label"><input type="checkbox" {{$nss2->dressingPerformedPatient ? 'checked' : ''}} name="dressingPerformedPatient" id="dressingByPatient" value="1" class="form-check-input"> Patient</label>
                </div>

                <div>
                    <label class="form-check-label mt-2" for="dressing_performed_by_nurse"><input type="checkbox" {{$nss2->dressingByNurse ? 'checked' : ''}} name="dressingByNurse" id="dressing_performed_by_nurse" value="1" class="form-check-input"> Nurse</label>
                    &nbsp; <label class="form-check-label mt-2" for="dressing_performed_by_caregiver"><input type="checkbox" {{$nss2->dressingByVaregiver ? 'checked' : ''}} name="dressingByVaregiver" id="dressing_performed_by_caregiver" value="1" class="form-check-input"> Family/Caregiver</label>
                    &nbsp; <span>Other: <b>{{$nss2->dressingOther}}</b></span>
                </div>

                <div>
                    <label class="form-check-label" for="Woundcare_patient"><input type="checkbox" {{$nss2->woundcarePatient ? 'checked' : ''}} name="woundcarePatient" id="Wound_care_patient" value="1" class="form-check-input"> Patient</label>
                    &nbsp; &nbsp; <span>Family/Caregiver instructed on:</span>
                    &nbsp; <label class="form-check-label"><input type="checkbox" {{$nss2->woundcareCaregiver ? 'checked' : ''}} name="woundcareCaregiver" id="Woundcare_caregiver" value="1" class="form-check-input"> Wound care</label>
                </div>

                <div>
                    <label class="form-check-label mt-2" for="soiled-disposal"><input type="checkbox" {{$nss2->soiledDisposal ? 'checked' : ''}} name="soiledDisposal" id="soiled-disposal" value="1" class="form-check-input"> Disposal of soiled dressing</label>
                    &nbsp; <label class="form-check-label mt-2" for="symptoms_report_to"><input type="checkbox" {{$nss2->symptomsReport ? 'checked' : ''}} name="symptomsReport" id="symptoms_report" value="1" class="form-check-input"> Signs &amp; Symptoms to report</label>
                </div>

                <div>
                    <label class="form-check-label" for="woundcare_performpatient"><input type="checkbox" {{$nss2->woundcarePerformpatient ? 'checked' : ''}} name="woundcarePerformpatient" id="woundcare_performpatient" value="1" class="form-check-input"> Patient</label>
                    &nbsp; &nbsp; <span>Family/Caregiver to perform:</span>
                    &nbsp; <label class="form-check-label" for="woundcare_performcaregiver"><input type="checkbox" {{$nss2->woundcarePerformcaregiver ? 'checked' : ''}} name="woundcarePerformcaregiver" id="woundcare_performcaregiver" value="1" class="form-check-input"> Wound care</label>
                </div>

                <div>
                    <label class="form-check-label mt-2" for="dressing_changeby_caregiver"><input type="checkbox" {{$nss2->dressingChangebyCaregiver ? 'checked' : ''}} name="dressingChangebyCaregiver" id="dressing_changeby_caregiver" value="1" class="form-check-input"> Dressing change</label>
                </div>
            </td>
        </tr>

        {{-- SKILLED INTERVENTIONS/INSTRUCTIONS --}}
        <tr>
            <td colspan="2" style="text-align: center"><h3 style="margin: 0">SKILLED INTERVENTIONS/INSTRUCTIONS</h3></td>
        </tr>
        <tr>
            <td>
                <div>
                    <label class="form-check-label" for="skilledObservationAssessment"><input type="checkbox" {{$nss2->skilledObservationAssessment ? 'checked' : ''}} name="skilledObservationAssessment" id="skilledObservationAssessment" value="1" class="form-check-input"> Skilled observation &amp; assessment</label>
                </div>

                <div>
                    <span>Foley:</span>
                    &nbsp; <label class="form-check-label" for="assessment_care"><input type="checkbox" {{$nss2->assessmentCare ? 'checked' : ''}} name="assessmentCare" id="assessment_care" value="1" class="form-check-input"> care</label>
                    &nbsp; <label class="form-check-label" for="assessmentChange"><input type="checkbox" {{$nss2->assessmentChange ? 'checked' : ''}} name="assessmentChange" id="assessmentChange" value="1" class="form-check-input"> change</label>
                </div>

                <div>
                    <label class="form-check-label" for="Skilled_observation_assessment_urine_testing"><input type="checkbox" {{$nss2->assessmentUrineTesting ? 'checked' : ''}} name="assessmentUrineTesting" id="assessment_urine_testing" value="1" class="form-check-input"> Urine testing</label>
                </div>

                <div>
                    <span>Wound:</span>
                    <label class="form-check-label" for="Skilled_observation_assessment_wound_care"><input type="checkbox" {{$nss2->skilledObservationAssessmentWoundCare ? 'checked' : ''}} name="skilledObservationAssessmentWoundCare" id="Skilled_observation_assessment_wound_care" value="1" class="form-check-input"> care</label>
                    <label class="form-check-label" for="assessment_wound_dressing"><input type="checkbox" {{$nss2->assessmentWoundDressing ? 'checked' : ''}} name="assessmentWoundDressing" id="assessment_wound_dressing" value="1" class="form-check-input"> dressing</label>
                </div>

                <div>
                    <label class="form-check-label" for="Observe signs_symptoms_of_infection"><input type="checkbox" {{$nss2->symptomsInfection ? 'checked' : ''}} name="symptomsInfection" id="symptoms_of_infection" value="1" class="form-check-input"> Observe signs &amp; symptoms of infection</label>
                </div>

                <h3 style="text-align: center">LAB WORK</h3>
                <div>
                    <span>Blood drawn From Left/Right arm: <b>{{$nss2->turgorColor2}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>For: <b>{{$nss2->turgorTemp2}}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Other: <b>{{$nss2->turgorColor3}}</b></span>
                    &nbsp; <span>Delivered to: <b>{{$nss2->turgorTemp3}}</b></span>
                </div>

                <div>
                    <label class="form-check-label" for="painmanagement">
                        <input type="checkbox" {{$nss2->painmanagement ? 'checked' : ''}} name="painmanagement" id="painmanagement" value="1" class="form-check-input"> Pain management</label>
                </div>

                <div>
                    <label class="form-check-label" for="Bowel_Bladder_training">
                        <input type="checkbox" {{$nss2->bowelBladderTraining ? 'checked' : ''}} name="bowelBladderTraining" id="Bowel_Bladder_training" value="1" class="form-check-input"> Bowel/Bladder training</label>
                </div>

                <div>
                    <label class="form-check-label" for="digital_removal_Enema">
                        <input type="checkbox" {{$nss2->digitalRemovalEnema ? 'checked' : ''}} name="digitalRemovalEnema" id="digital_removal_Enema" value="1" class="form-check-input"> Digital exam with manual removal/Enema</label>
                </div>

                <div>
                    <span>Change:</span>
                    <label class="form-check-label" for="change_ng"><input type="radio" {{$nss2->changeRadio=='ng' ? 'checked' : ''}} name="changeRadio" id="change_ng" value="ng" class="form-check-input"> NG</label>
                    <label class="form-check-label" for="change_g_tube"><input type="radio" {{$nss2->changeRadio=='gtube' ? 'checked' : ''}} name="changeRadio" id="change_g_tube" value="gtube" class="form-check-input"> G tube</label>
                </div>

                <div>
                    <span>Administer injection:</span>
                    <label class="form-check-label" for="administer_injection_sc">
                        <input type="radio" {{$nss2->injection=='sc' ? 'checked' : ''}} name="injection" id="administer_injection_sc" value="sc" class="form-check-input"> SC</label>
                    <label class="form-check-label" for="administer_injection_im">
                            <input type="radio" {{$nss2->injection=='im' ? 'checked' : ''}} name="injection" id="administer_injection_im" value="im" class="form-check-input"> IM</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Administer other medication: <b>{!! $nss2->administerMedication !!}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Analysis/Interventions/Instructions/Patient Response: <b>{!! $nss4->instructionsPatientResponse !!}</b></span>
                </div>
            </td>

            <td style="vertical-align: top">
                <div>
                    <label class="form-check-label" for="Insulin_prep"><input type="checkbox" {{$nss3->insulinPrep ? 'checked' : ''}} name="insulinPrep" id="Insulin_prep" value="1" class="form-check-input"> Insulin prep</label>
                    &nbsp; <label class="form-check-label" for="Insulin_administer"><input type="checkbox" {{$nss3->insulinAdminister ? 'checked' : ''}} name="insulinAdminister" id="Insulin_administer" value="1" class="form-check-input"> Insulin administer</label>
                </div>

                <div>
                    <label class="form-check-label" for="Diabetic_assessment"><input type="checkbox" {{$nss3->diabeticAssessment ? 'checked' : ''}} name="diabeticAssessment" id="Diabetic_assessment" value="1" class="form-check-input"> Diabetic observation and assessment</label>
                </div>

                <div>
                    <label class="form-check-label" for="Teach_diabetic_care"><input type="checkbox" {{$nss3->teachDiabeticCare ? 'checked' : ''}} name="teachDiabeticCare" id="Teach_diabetic_care" value="1" class="form-check-input"> Teach diabetic care</label>
                </div>

                <div>
                    <span>Teach:</span>
                    <label class="form-check-label" for="Teach_administer"><input type="checkbox" {{$nss3->teachAdminister ? 'checked' : ''}} name="teachAdminister" id="Teach_administer" value="1" class="form-check-input"> Administer</label>
                    &nbsp; <label class="form-check-label" for="Teach_ivs">
                        <input type="checkbox" {{$nss3->teachIvs ? 'checked' : ''}} name="teachIvs" id="Teach_ivs" value="1" class="form-check-input"> IVs</label>
                    &nbsp; <label class="form-check-label" for="Teach_clysis">
                            <input type="checkbox" {{$nss3->teachClysis ? 'checked' : ''}} name="teachClysis" id="Teach_clysis" value="" class="form-check-input"> Clysis</label>
                </div>

                <div>
                    <span>Teach:</span>
                    <label class="form-check-label" for="Ostomy_care">
                        <input type="checkbox" {{$nss3->ostomyCare ? 'checked' : ''}} name="ostomyCare" id="Ostomy_care" value="1" class="form-check-input"> Ostomy care</label>
                    &nbsp; <label class="form-check-label" for="conduit_care">
                            <input type="checkbox" {{$nss3->conduitCare ? 'checked' : ''}} name="conduitCare" id="conduit_care" value="1" class="form-check-input"> Ileal conduit care</label>
                </div>

                <div>
                    <label class="form-check-label" for="Teach_care">
                        <input type="checkbox" {{$nss3->teachCare2 ? 'checked' : ''}} name="teachCare2" id="Teach_care" value="1" class="form-check-input"> Teach care</label>
                    &nbsp; <label class="form-check-label" for="Administer_tube_feedings">
                            <input type="checkbox" {{$nss3->AdministerTubeFeedings ? 'checked' : ''}} name="AdministerTubeFeedings" id="Administer_tube_feedings" value="1" class="form-check-input"> Administer tube feedings</label>
                </div>

                <div>
                    <label class="form-check-label" for="Teachcare">
                        <input type="checkbox" {{$nss3->teachcare ? 'checked' : ''}} name="teachcare" id="Teachcare" value="1" class="form-check-input"> Teach care</label>
                    &nbsp; <label class="form-check-label" for="Administer_tracheostomy">
                            <input type="checkbox" {{$nss3->administerTracheostomy ? 'checked' : ''}} name="administerTracheostomy" id="Administer_tracheostomy" value="1" class="form-check-input"> Administer care of tracheostomy</label>
                </div>

                <div>
                    <label class="form-check-label" for="Teachcare_1">
                        <input type="checkbox" {{$nss3->tachcare1 ? 'checked' : ''}} name="tachcare1" id="Teachcare_1" value="1" class="form-check-input"> Teach care</label>
                    &nbsp; <label class="form-check-label" for="Administer_treatment">
                            <input type="checkbox" {{$nss3->administerTreatment ? 'checked' : ''}} name="administerTreatment" id="Administer_treatment" value="1" class="form-check-input"> Administer inhalation treatment</label>
                </div>

                <div>
                    <label class="form-check-label" for="Teach_care_terminally_ill">
                        <input type="checkbox" {{$nss3->teachTerminallyIll ? 'checked' : ''}} name="teachTerminallyIll" id="Teach_terminally_ill" value="1" class="form-check-input"> Teach care - terminally ill</label>
                </div>

                <div>
                    <label class="form-check-label" for="Observe_and_assess_medication">
                        <input type="checkbox" {{$nss3->observeAssessMedication ? 'checked' : ''}} name="observeAssessMedication" id="Observe_assess_medication" value="1" class="form-check-input"> Observe and assess medication
                        compliance/administration</label>
                </div>

                <div>
                    <span>Teach medication:</span>
                    <label class="form-check-label" for="Teach_medication_purpose">
                        <input type="checkbox" {{$nss3->teachMedicationPurpose ? 'checked' : ''}} name="teachMedicationPurpose" id="Teach_medication_purpose" value="1" class="form-check-input"> purpose</label>
                    &nbsp; <label class="form-check-label" for="Teach_medication_side_effect">
                            <input type="checkbox" {{$nss3->teachMedicationSideEffect ? 'checked' : ''}} name="teachMedicationSideEffect" id="Teach_medication_side_effect" value="1" class="form-check-input"> side effects</label>
                    &nbsp; <label class="form-check-label" for="Teach_medication_administration">
                                <input type="checkbox" {{$nss3->teachMedicationAdministration ? 'checked' : ''}} name="teachMedicationAdministration" id="Teach_medication_administration" value="1" class="form-check-input"> administration</label>
                </div>

                <div>
                    <span>Teach diease process: <b>{{$nss3->TeachDieaseProcess}}</b></span>
                </div>

                <div>
                    <span>Evaluate:</span>
                    &nbsp; <label class="form-check-label" for="Evaluate_diet">
                        <input type="checkbox" {{$nss3->evaluateDiet ? 'checked' : ''}} name="evaluateDiet" id="Evaluate_diet" value="1" class="form-check-input"> diet</label>
                    &nbsp; <label class="form-check-label" for="Evaluate_fluid_intake">
                            <input type="checkbox" {{$nss3->evaluateFluidIntake ? 'checked' : ''}} name="evaluateFluidIntake" id="Evaluate_fluid_intake" value="1" class="form-check-input"> fluid intake</label>
                </div>

                <div>
                    <label class="form-check-label" for="Diet_teaching">
                        <input type="checkbox" {{$nss3->dietTeaching ? 'checked' : ''}} name="dietTeaching" id="Diet_teaching" value="1" class="form-check-input"> Diet teaching</label>
                    &nbsp; <label class="form-check-label" for="Assess_ADLs_Functionality">
                            <input type="checkbox" {{$nss3->sssessAdlsFunctionality ? 'checked' : ''}} name="sssessAdlsFunctionality" id="Assess_ADLs_Functionality" value="1" class="form-check-input"> Assess ADLs/Functionality</label>
                </div>

                <div>
                    <label class="form-check-label" for="Teach_Safety_precautions">
                        <input type="checkbox" {{$nss3->teachSafetyPrecautions ? 'checked' : ''}} name="teachSafetyPrecautions" id="Teach_Safety_precautions" value="1" class="form-check-input"> Teach Safety precautions</label>
                </div>

                <div>
                    <label class="form-check-label" for="Teach_skin_care_pressure_injury">
                        <input type="checkbox" {{$nss3->teachSkinCarePressureInjury ? 'checked' : ''}} name="teachSkinCarePressureInjury" id="Teach_skin_care_pressure_injury" value="1" class="form-check-input"> Teach skin care/pressure injury
                        prevention</label>
                </div>

                <div>
                    <label class="form-check-label" for="Psychological_intervention">
                        <input type="checkbox" {{$nss3->psychologicalIntervention ? 'checked' : ''}} name="psychologicalIntervention" id="Psychological_intervention" value="1" class="form-check-input"> Psychological intervention</label>
                </div>

                <div>
                    <label class="form-check-label" for="Chest_physiotherapy_postural_drainage">
                        <input type="checkbox" {{$nss3->posturalDrainage ? 'checked' : ''}} name="posturalDrainage" id="postural_drainage" value="1" class="form-check-input"> Chest physiotherapy/postural drainage</label>
                    &nbsp; <label class="form-check-label" for="Prenatal_assessment">
                            <input type="checkbox" {{$nss3->prenatalAssessment ? 'checked' : ''}} name="prenatalAssessment" id="Prenatal_assessment" value="1" class="form-check-input"> Prenatal assessment</label>
                </div>

                <div>
                    <label class="form-check-label" for="Post_partum_assessment">
                        <input type="checkbox" {{$nss4->postPartumassessment ? 'checked' : ''}} name="postPartumassessment" id="Post_partum_assessment" value="1" class="form-check-input"> Post-partum assessment</label>
                    &nbsp; <label class="form-check-label" for="Teach_infant_child_care">
                            <input type="checkbox" {{$nss4->teachInfantChildCare ? 'checked' : ''}} name="teachInfantChildCare" id="Teach_infant_child_care" value="1" class="form-check-input"> Teach infant/child care</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Other: <b>{{$nss4->childCareOther}}</b></span>
                </div>
            </td>
        </tr>

        <tr>
            <td style="vertical-align: top">
                <h3 style="text-align: center;margin:0">SUMMARY CHECKLIST</h3>
                <div style="margin-top: 5px">
                    <span>Care Plan:</span>
                    <label class="form-check-label" for="Care_plan_reviewed"><input type="checkbox" {{$nss4->carePlanReviewed ? 'checked' : ''}} name="carePlanReviewed" id="Care_plan_reviewed" value="1" class="form-check-input"> Reviewed</label>
                    <label class="form-check-label" for="Care_patient_involvement"><input type="checkbox" {{$nss4->carePatientInvolvement ? 'checked' : ''}} name="carePatientInvolvement" id="Care_patient_involvement" value="1" class="form-check-input"> Revised with patient involvement</label>
                </div>
                <div>
                    <label class="form-check-label" for="Care_plan_outcome_achieved"><input type="checkbox" {{$nss4->carePlanOutcomeAchieved ? 'checked' : ''}} name="carePlanOutcomeAchieved" id="Care_plan_outcome_achieved" value="1" class="form-check-input"> Outcome achieved</label>
                    <label class="form-check-label" for="Care_plan_prn_order_obtained"><input type="checkbox" {{$nss4->carePlanPrnOrderObtained ? 'checked' : ''}} name="carePlanPrnOrderObtained" id="Care_plan_prn_order_obtained" value="1" class="form-check-input"> PRN order obtained</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Plan for Next Visit: <b>{!! $nss4->planForNextVisit !!}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Next Physician Visit: <b>{!! $nss4->nextPhysicianVisit !!}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Approximate Next Visit Date: <b>{!! $nss4->approximateNextVisitDate !!}</b></span>
                </div>

                <div>
                    <span>Discharge Planning Discussed:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="discharge_planning_discussed_yes">
                        <input type="radio" {{$nss4->dischargePlanning=='yes' ? 'checked' : ''}} name="dischargePlanning" id="discharge_planning_discussed_yes" value="yes" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label" for="discharge_planning_discussed_no"><input type="radio" {{$nss4->dischargePlanning=='no' ? 'checked' : ''}} name="dischargePlanning" id="discharge_planning_discussed_no" value="no" class="form-check-input"> No</label>
                    &nbsp; <label class="form-check-label" for="discharge_planning_discussed_long_term">
                            <input type="radio" {{$nss4->dischargePlanning=='long term' ? 'checked' : ''}} name="dischargePlanning" id="discharge_planning_discussed_long_term" value="long term" class="form-check-input"> Long Term</label>
                   &nbsp; <label class="form-check-label" for="discharge_planning_discussed_hospice"><input type="radio" {{$nss4->dischargePlanning=='hospice' ? 'checked' : ''}} name="dischargePlanning" id="discharge_planning_discussed_hospice" value="hospice" class="form-check-input"> Hospice</label>
                </div>

                <div>
                    <span>Discharge Plan:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="discharge_plan_verified"><input type="radio" {{$nss4->dischargePlan=='Verified' ? 'checked' : ''}} name="dischargePlan" id="discharge_plan_verified" value="" class="form-check-input"> Verified</label>
                    &nbsp; <label class="form-check-label" for="discharge_plan_revised"><input type="radio" {{$nss4->dischargePlan=='Revised' ? 'checked' : ''}} name="dischargePlan" id="discharge_plan_revised" value="" class="form-check-input"> Revised</label>
                </div>

                <div>
                    <span>Billable Supplies Recorded:</span>
                    &nbsp; &nbsp; <label class="form-check-label" for="Billable_supplies_recorded_yes"><input type="radio" {{$nss4->billableSuppliesRecorded=='Yes' ? 'checked' : ''}} name="billableSuppliesRecorded" id="Billable_supplies_recorded_yes" value="" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label" for="Billable_supplies_recorded_no"><input type="radio" {{$nss4->billableSuppliesRecorded=='No' ? 'checked' : ''}} name="billableSuppliesRecorded" id="Billable_supplies_recorded_no" value="" class="form-check-input"> No</label>
                </div>

                <div>
                    <span>Care Coordination:</span>
                    &nbsp; <label class="form-check-label" for="Care_coordination_physician_provider"><input type="checkbox" {{$nss4->physicianProvider ? 'checked' : ''}}  name="physicianProvider" id="physician_provider" value="" class="form-check-input"> Physician/Provider</label>
                    &nbsp; <label class="form-check-label" for="physicianPt"><input type="checkbox" {{$nss4->physicianPt ? 'checked' : ''}}  name="physicianPt" id="physicianPt" value="1" class="form-check-input"> PT</label>
                    &nbsp; <label class="form-check-label" for="Care_coordination_physician_ot"><input type="checkbox" {{$nss4->physicianOt ? 'checked' : ''}}  name="physicianOt" id="physician_ot" value="1" class="form-check-input"> OT</label>
                    &nbsp; <label class="form-check-label" for="Care_coordination_physician_st"><input type="checkbox" {{$nss4->physicianSt ? 'checked' : ''}}  name="physicianSt" id="physician_st" value="1" class="form-check-input"> ST</label>
                    &nbsp; <label class="form-check-label" for="Care_coordination_physician_sw"><input type="checkbox" {{$nss4->physicianSw ? 'checked' : ''}}  name="physicianSw" id="physician_sw" value="1" class="form-check-input"> MSW</label>
                    &nbsp; <label class="form-check-label" for="Care_coordination_physician_sn"><input type="checkbox" {{$nss4->physicianSn ? 'checked' : ''}}  name="physicianSn" id="physician_sn" value="1" class="form-check-input"> SN</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Other (specify) <b>{!! $nss4->careCoordinationPhysicianOther !!}</b></span>
                </div>
            </td>
            
            <td style="vertical-align: top">
                <h3 style="text-align: center;margin:0">AIDE SUPERVISORY VISIT</h3>
                <div style="margin-top: 5px">
                    <span>Aide:</span>
                    &nbsp; <label class="form-check-label" for="aide_supervisory_visit_aide"><input type="radio" {{$nss4->aide=='present' ? 'checked' : ''}} name="aide" id="aide_supervisory_visit_aide" value="present" class="form-check-input"> Present</label>
                    &nbsp; <label class="form-check-label" for="aide_supervisory_visit_present"><input type="radio" {{$nss4->aide=='not present' ? 'checked' : ''}} name="aide" id="aide_supervisory_visit_present" value="not present" class="form-check-input"> Not present</label>
                </div>

                <div>
                    <span>Supervisory Visit:</span>
                    &nbsp; <label class="form-checkSupervisory Visit-label" for="supervisory_visit_scheduled"><input type="radio" {{$nss4->supervisoryVisit=='scheduled' ? 'checked' : ''}} name="supervisoryVisit" id="supervisory_visit_scheduled" value="scheduled" class="form-check-input"> Scheduled</label>
                    &nbsp; <label class="form-check-label" for="not_supervisory_visit_scheduled"><input type="radio" {{$nss4->supervisoryVisit=='not scheduled' ? 'checked' : ''}} name="supervisoryVisit" id="not_supervisory_visit_scheduled" value="not scheduled" class="form-check-input"> Not Scheduled</label>
                </div>

                <div>
                    <span>Is Patient/ Family Satisfied:</span>
                     &nbsp; <label class="form-check-label" for="Is_patient_family_satisfied_yes"><input type="radio" {{$nss4->patientSatisfied=='yes' ? 'checked' : ''}} name="patientSatisfied" id="Is_patient_family_satisfied_yes" value="yes" class="form-check-input"> Yes</label>
                     &nbsp; <label class="form-check-label" for="Is_patient_family_satisfied_no"><input type="radio" {{$nss4->patientSatisfied=='no' ? 'checked' : ''}} name="patientSatisfied" id="Is_patient_family_satisfied_no" value="no" class="form-check-input"> No</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Explain: <b>{!! $nss4->explain !!}</b></span>
                </div>

                <div>
                    <span>Is Aide Following Care Plan:</span>
                    &nbsp; <label class="form-check-label"><input type="radio" {{$nss4->aideCarePlan=='yes' ? 'checked' : ''}} name="aideCarePlan" id="Is_aide_following_care_plan_yes" value="yes" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label" for="Is_aide_following_care_plan_no"><input type="radio" {{$nss4->aideCarePlan=='no' ? 'checked' : ''}} name="aideCarePlan" id="Is_aide_following_care_plan_no" value="no" class="form-check-input"> No</label>
                </div>

                <div>
                    <span>Aide Care Plan Updated:</span>
                    &nbsp; <label class="form-check-label" for="aide_care_plan_updated_yes"><input type="radio" {{$nss4->aideCarePlanUpdated=='yes' ? 'checked' : ''}} name="aideCarePlanUpdatedUpdated" id="aide_care_plan_updated_no" value="yes" class="form-check-input"> Yes</label>
                    &nbsp; <label class="form-check-label" for="aide_care_plan_updated_no"><input type="radio" {{$nss4->aideCarePlan=='no' ? 'checked' : ''}} name="aideCarePlanUpdated" id="aide_care_plan_updated_no" value="no" class="form-check-input"> No</label>
                </div>

                <div style="margin-top: 5px">
                    <span>Observation of: <b>{!! $nss4->observationOf !!}</b></span>
                </div>

                <div style="margin-top: 5px">
                    <span>Teaching/Training of: <b>{!! $nss4->teachingTrainingOf !!}</b></span>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="2" style="vertical-align: top">
                <p><b>SIGNATURE/DATE</b>–Complete <b>TIME OUT</b> (on front) prior to signing below.</p>
                <div style="margin-top: 10px">
                    <span>Nurse Signature/Title: <b>{{ $nss4->nurseSignatureTitle }}</b></span>
                </div>

                <div style="margin-top: 10px">
                    <span>Patient Signature (optional): <b>{{ $nss4->patientSignature }}</b></span>
                </div>

                <div style="margin-top: 10px">
                    <span>Date: <b>{{ $nss4->nurseSignatureDate }}</b></span>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>