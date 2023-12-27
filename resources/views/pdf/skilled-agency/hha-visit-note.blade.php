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
            padding: .3rem .5rem;
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
    <table class="table table-bordered">
        <tr>
            <td colspan="2">
                <span>Date: <b>{{$hhvn->date_1}}</b></span>
                &nbsp; <span>Time In: <b>{{$hhvn->time_in}}</b></span>
                &nbsp; &nbsp; <span>Date: <b>{{$hhvn->date_2}}</b></span>
                &nbsp; <span>Time Out: <b>{{$hhvn->time_out}}</b></span>
                <b style="float: right">HOME CARE AIDE VISIT RECORD</b>
            </td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="2">
                <b>Check each activity completed during visit, refer to Aide Care Plan.</b>
            </td>
        </tr>

        <tr>
            <td style="padding: 0;vertical-align:top;width:50%;">
                <table class="table">
                    <tr>
                        <td style="text-align: center"><b>ACTIVITIES</b></td>
                        <td style="text-align: center;width:50px"><b><small style="font-size: 12px">REFUSED</small></b></td>
                        <td style="text-align: center"><b>COMMENTS</b></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>VITALS/RESULTS</b></td>
                    </tr>
                    <tr>
                        <td><span><b>T</b> {{$hhvn->vitals_results}}</span> &nbsp; &nbsp; <span><b>P</b> {{$hhvn->vitals_results}}</span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->refused_1=='1' ? 'checked' : ''}} name="refused_1" id="refused_1" value=""></td>
                        <td>{{$hhvn->comments_1}}</td>
                    </tr>
                    <tr>
                        <td><span><b>R</b> {{$hhvn->vitals_R}}</span> <span><b>B/P</b> {{$hhvn->vitals_B_P}}</span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->refused_2=='1' ? 'checked' : ''}} name="refused_2" id="refused_2" value=""></td>
                        <td>{{$hhvn->comments_2}}</td>
                    </tr>
                    <tr>
                        <td><span><b>Weight</b> {{$hhvn->vitals_weight}}</span> <span><b>Pain rating</b> {{$hhvn->vitals_pain_rating}}</span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->refused_3=='1' ? 'checked' : ''}} name="refused_3" id="refused_3" value=""></td>
                        <td>{{$hhvn->comments_3}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>BATH</b></td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-check-label" for=""><input type="radio" {{$hhvn->bath=='1' ? 'checked' : ''}} name="bath" id="bath_1" value="1" class="form-check-input"> Tube</label>
                            &nbsp; <label class="form-check-label" for=""><input type="radio" {{$hhvn->bath=='1' ? 'checked' : ''}} name="bath" id="bath_2" value="1" class="form-check-input"> Shower</label>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->refused_4=='1' ? 'checked' : ''}} name="refused_4" id="refused_4" value=""></td>
                        <td>{{$hhvn->comments_4}}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>Bed Batch:</b>
                            &nbsp; &nbsp; <label class="form-check-label" for="bed_bath_1"><input type="radio" {{$hhvn->bed_bath=='1' ? 'checked' : ''}} name="bed_bath" id="bed_bath_1" value="" class="form-check-input"> Partial</label>
                            &nbsp; <label class="form-check-label" for="bed_bath_2"><input type="radio" {{$hhvn->bed_bath=='1' ? 'checked' : ''}} name="bed_bath" id="bed_bath_2" value="" class="form-check-input"> Complete</label>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->refused_5=='1' ? 'checked' : ''}} name="refused_5" id="refused_5" value=""></td>
                        <td>{{$hhvn->comments_5}}</td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-check-label" for="assis_bath_chair"><input type="radio" {{$hhvn->assis_bath_chair_1=='1' ? 'checked' : ''}} name="assis_bath_chair_1" id="assis_bath_chair" value="" class="form-check-input_1"> Assist Bath - Chair</label>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->assis_bath_chair_2=='1' ? 'checked' : ''}} name="assis_bath_chair_2" id="assis_bath_chair_2"></td>
                        <td>{{$hhvn->assis_bath_chair_3}}</td>
                    </tr>
                    <tr>
                        <td><span><b>Other (specify)</b> {{$hhvn->other_specify}}</span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->refused_6=='1' ? 'checked' : ''}} name="refused_6" id="refused_6" value=""></td>
                        <td>{{$hhvn->comments_6}}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>HYGIENE/GROOMING</b></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label" for="assist_bath_chair"><input type="checkbox" {{$hhvn->assist_bath_chair=='1' ? 'checked' : ''}} name="assist_bath_chair" id="assist_bath_chair" value="" class="form-check-input"> Personal Care</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->assist_bath_chair_1=='1' ? 'checked' : ''}} name="assist_bath_chair_1" id="assist_bath_chair_1" value=""></td>
                        <td>{{$hhvn->comments_7}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="assist_with_dressing"><input type="checkbox" {{$hhvn->assist_with_dressing=='1' ? 'checked' : ''}} name="assist_with_dressing" id="assist_with_dressing" value="" class="form-check-input"> Assist with Dressing</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->assist_with_dressing_1=='1' ? 'checked' : ''}} name="assist_with_dressing_1" id="assist_with_dressing_1" value=""></td>
                        <td>{{$hhvn->comments_8}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="hair_care"><input type="checkbox" {{$hhvn->hair_care=='1' ? 'checked' : ''}} name="hair_care" id="hair_care" value="" class="form-check-input"> Hair Care</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->hair_care_1=='1' ? 'checked' : ''}} name="hair_care_1" id="hair_care_1" value=""></td>
                        <td>{{$hhvn->comments_9}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="shampoo"><input type="checkbox" {{$hhvn->shampoo=='1' ? 'checked' : ''}} name="shampoo" id="shampoo" value="" class="form-check-input"> Shampoo</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->shampoo_1=='1' ? 'checked' : ''}} name="shampoo_1" id="shampoo_1" value=""></td>
                        <td>{{$hhvn->comments_11}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="skin_care"><input type="checkbox" {{$hhvn->skin_care=='1' ? 'checked' : ''}} name="skin_care" id="skin_care" value="" class="form-check-input"> Skin Care</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->skin_care_1=='1' ? 'checked' : ''}} name="skin_care_1" id="skin_care_1" value=""></td>
                        <td>{{$hhvn->comments_12}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="moisturizer"><input type="checkbox" {{$hhvn->moisturizer=='1' ? 'checked' : ''}} name="moisturizer" id="moisturizer" value="" class="form-check-input"> Moisturizer</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->moisturizer_1=='1' ? 'checked' : ''}} name="moisturizer_1" id="moisturizer_1" value=""></td>
                        <td>{{$hhvn->comments_13}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="foot_care"><input type="checkbox" {{$hhvn->foot_care=='1' ? 'checked' : ''}} name="foot_care" id="foot_care" value="" class="form-check-input"> Foot Care</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->foot_care_1=='1' ? 'checked' : ''}} name="foot_care_1" id="foot_care_1" value=""></td>
                        <td>{{$hhvn->comments_14}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="check_pressure_areas"><input type="checkbox" {{$hhvn->check_pressure_areas=='1' ? 'checked' : ''}} name="check_pressure_areas" id="check_pressure_areas" value="" class="form-check-input"> Check Pressure Areas</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->check_pressure_areas_1=='1' ? 'checked' : ''}} name="check_pressure_areas_1" id="check_pressure_areas_1" value=""></td>
                        <td>{{$hhvn->comments_15}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="nail_care"><input type="checkbox" {{$hhvn->nail_care=='1' ? 'checked' : ''}} name="nail_care" id="nail_care" value="" class="form-check-input"> Nail Care</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->nail_care_1=='1' ? 'checked' : ''}} name="nail_care_1" id="nail_care_1" value=""></td>
                        <td>{{$hhvn->comments_16}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="oral_care"><input type="checkbox" {{$hhvn->oral_care=='1' ? 'checked' : ''}} name="oral_care" id="oral_care" value="" class="form-check-input"> Oral Care</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->oral_care_1=='1' ? 'checked' : ''}} name="oral_care_1" id="oral_care_1" value=""></td>
                        <td>{{$hhvn->comments_17}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="clean_dentures"><input type="checkbox" {{$hhvn->clean_dentures=='1' ? 'checked' : ''}} name="clean_dentures" id="clean_dentures" value="" class="form-check-input"> Clean Dentures</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->clean_dentures_1=='1' ? 'checked' : ''}} name="clean_dentures_1" id="clean_dentures_1"></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="shave"><input type="checkbox" {{$hhvn->shave=='1' ? 'checked' : ''}} name="shave" id="shave" value="" class="form-check-input"> Shave</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->shave_1=='1' ? 'checked' : ''}} name="shave_1" id="shave_1" value=""></td>
                        <td>{{$hhvn->comments_19}}</td>
                    </tr>

                    <tr>
                        <td><span><b>Other (specify):</b> {{$hhvn->other}}</span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn->other_1=='1' ? 'checked' : ''}} name="other_1" id="other_1" value=""></td>
                        <td>{{$hhvn->comments_20}}</td>
                    </tr>
                </table>
            </td>

            <td style="padding: 0;vertical-align:top;width:50%;">
                <table class="table">
                    <tr>
                        <td style="text-align: center"><b>ACTIVITIES</b></td>
                        <td style="text-align: center;width:50px"><b><small style="font-size: 12px">REFUSED</small></b></td>
                        <td style="text-align: center"><b>COMMENTS</b></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>ACTIVITY</b></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Assist with:</b>
                            &nbsp; <label class="form-check-label" for="ambulation"><input type="checkbox" {{$hhvn1->ambulation=='ambulation' ? 'checked' : '' }} name="ambulation" id="ambulation" value="" class="form-check-input"> Ambulation</label>
                            &nbsp; <label class="form-check-label" for="w_c"><input type="checkbox" {{$hhvn1->w_c=='w_c' ? 'checked' : '' }} name="w_c" id="" value="w_c" class="form-check-input"> W/C</label>
                            <div>
                                <label class="form-check-label" for="walker"><input type="checkbox" {{$hhvn1->walker=='walker' ? 'checked' : '' }} name="walker" id="walker" value="" class="form-check-input"> Walker</label>
                                &nbsp; <label class="form-check-label" for="cane"><input type="checkbox" {{$hhvn1->cane=='cane' ? 'checked' : '' }} name="cane" id="" value="cane" class="form-check-input"> Cane</label>
                            </div>
                        </td>
                        <td style="text-align: center">
                            <input type="checkbox" class="form-check-input" {{$hhvn1->cane=='1' ? 'checked' : '' }} name="refuse_11" id="refuse_11" value="">
                        </td>
                        <td>{{$hhvn1->comments_30}}</td>
                    </tr>

                    <tr>
                        <td>
                            <div>
                                <b>Assist with Mobility:</b>
                                &nbsp; <label class="form-check-label" for="gait_belt"><input type="checkbox" {{$hhvn1->gait_belt=='1' ? 'checked' : '' }} name="gait_belt" id="gait_belt" value="" class="form-check-input"> Gait Belt</label>
                                &nbsp; <label class="form-check-label" for="chair"><input type="checkbox" {{$hhvn1->chair=='1' ? 'checked' : '' }} name="chair" id="" value="chair" class="form-check-input"> Chair</label>

                            </div>
                            <div>
                                <label class="form-check-label" for="bed"><input type="checkbox" {{$hhvn1->bed=='1' ? 'checked' : '' }} name="bed" id="bed" value="" class="form-check-input"> Bed</label>
                                &nbsp; <label class="form-check-label" for="dangle"><input type="checkbox" {{$hhvn1->dangle=='1' ? 'checked' : '' }} name="dangle" id="dangle" value="" class="form-check-input"> Dangle</label>
                                &nbsp; <label class="form-check-label" for="commod"><input type="checkbox" {{$hhvn1->commod=='1' ? 'checked' : '' }} name="commod" id="commod" value="" class="form-check-input"> Commode</label>
                                &nbsp; <label class="form-check-label" for="shower"><input type="checkbox" {{$hhvn1->shower=='1' ? 'checked' : '' }} name="shower" id="shower" value="" class="form-check-input"> Shower</label>
                                &nbsp; <label class="form-check-label" for="tub"><input type="checkbox" {{$hhvn1->tub=='1' ? 'checked' : '' }} name="tub" id="tub" value="" class="form-check-input"> Tub</label>
                            </div>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn1->refuse_13=='1' ? 'checked' : '' }} name="refuse_13" id="" value=""></td>
                        <td>{{$hhvn1->comments_31}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b>ROM:</b>
                            &nbsp; <label class="form-check-label" for="active"><input type="radio" {{$hhvn1->ROM=='active' ? 'checked' : '' }} name="ROM" class="form-check-input" id="active" value=""> Active</label>
                            &nbsp; <label class="form-check-label" for="passive"><input type="radio" {{$hhvn1->ROM=='passive' ? 'checked' : '' }} name="ROM" class="form-check-input" id="passive" value=""> Passive</label>
                            <div>
                                <b>Arm:</b>
                                <label class="form-check-label" for="arm_r"><input type="radio" {{$hhvn1->Arm=='r' ? 'checked' : '' }} name="Arm" class="form-check-input" id="arm_r" value=""> R</label>
                                <label class="form-check-label" for="arm_l"><input type="radio" {{$hhvn1->Arm=='l' ? 'checked' : '' }} name="Arm" class="form-check-input" id="arm_l" value=""> L</label>
                            </div>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn1->refused_14=='1' ? 'checked' : '' }} name="refused_14" id="refused_14" value=""></td>
                        <td>{{$hhvn1->comments_32}}</td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label" for="encourange_reposition"><input type="checkbox" {{$hhvn1->reposition=='1' ? 'checked' : '' }} name="reposition" id="encourange_reposition" value="" class="form-check-input"> Reposition</label>
                            &nbsp; <label class="form-check-label" for="encourange_reposition"><input type="checkbox" {{$hhvn1->reposition=='1' ? 'checked' : '' }} name="reposition" id="encourange_reposition" value="" class="form-check-input"> Encourage Position Change</label>
                            <div>
                                <span>Every <b>{{$hhvn2->every_hrs}}</b></span>
                            </div>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_15=='1' ? 'checked' : '' }} name="refused_15" id="refused_15" value=""></td>
                        <td>{{$hhvn2->comments_33}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b>Exercise - Per:</b>
                            &nbsp; <label class="form-check-label" for="exercise_pt"><input type="checkbox" {{$hhvn2->exercise_pt=='pt' ? 'checked' : '' }} name="exercise_pt" id="exercise_pt" value="pt" class="form-check-input"> PT</label>
                            &nbsp; <label class="form-check-label" for="exercise_ot"><input type="checkbox" {{$hhvn2->exercise_ot=='ot' ? 'checked' : '' }} name="exercise_ot" id="exercise_ot" value="" class="form-check-input"> OT</label>
                            &nbsp; <label class="form-check-label" for="exercise_slp"><input type="checkbox" {{$hhvn2->exercise_slp=='slp' ? 'checked' : '' }} name="exercise_slp" id="exercise_slp" value="" class="form-check-input"> SLP Care Plan</label>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_17=='1' ? 'checked' : '' }} name="refused_17" id="refused_17" value=""></td>
                        <td>{{$hhvn2->comments_34}}</td>
                    </tr>

                    <tr>
                        <td><span>Other (specify): <b>{{$hhvn2->other_408}}</b></span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_18=='1' ? 'checked' : '' }} name="refused_18" id="refused_18" value=""></td>
                        <td>{{$hhvn2->comments_36}}</td>
                    </tr>

                    <tr>
                        <td colspan="3"><b>NUTRITION</b></td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="meal_preparation"><input type="checkbox" {{$hhvn2->meal_preparation=='1' ? 'checked' : '' }} name="meal_preparation" id="meal_preparation" value="" class="form-check-input"> Meal Preparation</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" name="refused_19" id="refused_19" value=""></td>
                        <td>{{$hhvn2->comments_37}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for=""><input type="checkbox" {{$hhvn2->assist_feeding=='assist_feeding' ? 'checked' : '' }} name="assist_feeding" id="assist_feeding" value="assist_feeding" class="form-check-input"> Assist with Feeding</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_20=='1' ? 'checked' : '' }} name="refused_20" id="refused_20" value=""></td>
                        <td>{{$hhvn2->comments_38}}</td>
                    </tr>

                    <tr>
                        <td>
                            <label class="form-check-label" for="limit"><input type="radio" {{$hhvn2->radio_1=='1' ? 'checked' : '' }} name="radio_1" id="limit" value="" class="form-check-input"> Limit</label>
                            &nbsp; <label class="form-check-label" for="encourage_fluides"><input type="radio" {{$hhvn2->radio_1=='1' ? 'checked' : '' }} name="radio_1" id="encourage_fluides" value="" class="form-check-input"> Encourage Fluides</label>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_21=='1' ? 'checked' : '' }} name="refused_21" id="refused_21" value=""></td>
                        <td>{{$hhvn2->comments_39}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="grocery_shopping"><input type="checkbox" {{$hhvn2->grocery_shopping=='1' ? 'checked' : '' }} name="grocery_shopping" id="grocery_shopping" value="" class="form-check-input"> Grocery Shopping</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_22=='1' ? 'checked' : '' }} name="refused_22" id="refused_22" value=""></td>
                        <td>{{$hhvn2->comments_40}}</td>
                    </tr>

                    <tr>
                        <td><span>Other (specify): <b>{{$hhvn2->other_500}}</b></span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_23=='1' ? 'checked' : '' }} name="refused_23" id="refused_23" value=""></td>
                        <td>{{$hhvn2->comments_41}}</td>
                    </tr>

                    <tr>
                        <td colspan="3"><b>OTHER</b></td>
                    </tr>


                    <tr>
                        <td><label class="form-check-label" for="other_100"><input type="checkbox" {{$hhvn2->other_100=='1' ? 'checked' : '' }} name="other_100" id="other_100" value="" class="form-check-input"> Wash Clothes</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_24=='1' ? 'checked' : '' }} name="refused_24" id="refused_24" value=""></td>
                        <td>{{$hhvn2->comments_42}}</td>
                    </tr>

                    <tr>
                        <td>
                            <div>
                                <b>Light Housekeeping: </b>
                                &nbsp; <label class="form-check-label" for="bedroom"><input type="checkbox" {{$hhvn2->bedroom=='1' ? 'checked' : '' }} name="bedroom" id="bedroom" value="" class="form-check-input"> Bedroom</label>
                                &nbsp; <label class="form-check-label" for="bathroom"><input type="checkbox" {{$hhvn2->bathroom=='1' ? 'checked' : '' }} name="bathroom" id="bathroom" value="" class="form-check-input"> Bathroom</label>
                            </div>

                            <div>
                                <label class="form-check-label" for="kitchen"><input type="checkbox" {{$hhvn2->kitchen=='1' ? 'checked' : '' }} name="kitchen" id="kitchen" value="" class="form-check-input"> Kitchen</label>
                                &nbsp; <label class="form-check-label" for="change_bed_linen"><input type="checkbox" {{$hhvn2->change_bed_linen=='1' ? 'checked' : '' }} name="change_bed_linen" id="change_bed_linen" value="" class="form-check-input"> Change Bed Linen</label>
                            </div>
                        </td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_25=='1' ? 'checked' : '' }} name="refused_25" id="refused_25" value=""></td>
                        <td>{{$hhvn2->comments_43}}</td>
                    </tr>

                    <tr>
                        <td><label class="form-check-label" for="equipment_care"><input type="checkbox" {{$hhvn2->equipment_care=='1' ? 'checked' : '' }} name="equipment_care" id="equipment_care" value="" class="form-check-input"> Equipment Care</label></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_26=='1' ? 'checked' : '' }} name="refused_26" id="refused_26" value=""></td>
                        <td>{{$hhvn2->comments_44}}</td>
                    </tr>

                    <tr>
                        <td><span>Other (specify): <b>{{$hhvn2->other_50}}</b></span></td>
                        <td style="text-align: center"><input type="checkbox" class="form-check-input" {{$hhvn2->refused_27=='1' ? 'checked' : '' }} name="refused_27" id="refused_27" value=""></td>
                        <td>{{$hhvn2->comments_45}}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center">
                <b>Coordination of Care with:</b>
                &nbsp; <label class="form-check-label" for="sn"><input type="checkbox" {{$hhvn2->sn=='sn' ? 'checked' : '' }} name="sn" id="sn" value="" ame="" class="form-check-input"> SN</label>
                &nbsp; <label class="form-check-label" for="therapy"><input type="checkbox" {{$hhvn2->therapy=='therapy' ? 'checked' : '' }} name="therapy" id="therapy" value="" class="form-check-input"> Therapy</label>
                &nbsp; <label class="form-check-label" for="therapy"><input type="checkbox" {{$hhvn2->pt=='pt' ? 'checked' : '' }} name="pt" id="pt" value="" class="form-check-input"> PT</label>
                &nbsp; <label class="form-check-label" for="ot"><input type="checkbox" {{$hhvn2->ot=='ot' ? 'checked' : '' }} name="ot" id="ot" value="" class="form-check-input"> OT</label>
                &nbsp; <label class="form-check-label" for="slp"><input type="checkbox" {{$hhvn2->slp=='slp' ? 'checked' : '' }} name="slp" id="slp" value="" class="form-check-input"> SLP</label>
                &nbsp; <label class="form-check-label" for="family"><input type="checkbox" {{$hhvn2->family=='family' ? 'checked' : '' }} name="family" id="family" value="" class="form-check-input"> Family</label>
                &nbsp; <label class="form-check-label" for="patient"><input type="checkbox" {{$hhvn2->patient=='patient' ? 'checked' : '' }} name="patient" id="patient" value="" class="form-check-input"> Patient</label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>SIGNATURE/DATE</b><br>
                <div>
                    <b>Employee</b> {{$hhvn2->other_50}}
                    &nbsp; <b>Date</b> {{$hhvn2->date}}
                </div>
                <div>
                    <b>Patient</b> {{$hhvn2->patientsign}}
                    &nbsp; <b>Date</b> {{$hhvn2->patient_date}}
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
