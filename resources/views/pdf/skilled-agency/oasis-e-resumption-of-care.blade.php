<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aide Supervisory Visit</title>

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
            <td class="bg-secondary-subtle">
               <b>M0080. Discipline of Person Completing Assessment</b>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="radio" {{$rc->dopca=='rn' ? 'checked' : ''}} name="dopca" value="rn" class="form-check-input"> 1. <b>RN</b></label>
               &nbsp; <label class="form-check-label"><input type="radio" {{$rc->dopca=='pt' ? 'checked' : ''}} name="dopca" value="pt" class="form-check-input"> 2. <b>PT</b></label>
               &nbsp; <label class="form-check-label"><input type="radio" {{$rc->dopca=='slp' ? 'checked' : ''}} name="dopca" value="slp" class="form-check-input"> 3. <b>SLP/ST</b></label>
               &nbsp; <label class="form-check-label"><input type="radio" {{$rc->dopca=='ot' ? 'checked' : ''}} name="dopca" value="ot" class="form-check-input"> 4. <b>OT</b></label>
            </td>
         </tr>
         <tr>
            <td>
                <span>Month: <b>{{$rc->month}}</b></span>
                &nbsp; <span>Day: <b>{{$rc->day}}</b></span>
                &nbsp; <span>Year: <b>{{$rc->year}}</b></span>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M0100. This Assessment is Currently Being Completed for the Following Reason</b>
            </td>
         </tr>
         <tr>
            <td>
               <p class="mb-1"><b>Start/Resumption of Care</b></p>
               <div class="ps-3 mb-1">
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->StartCare ? 'checked' : ''}} name="StartCare" value="1" class="form-check-input"> 1. <b>Start of care -</b> further visits planned</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->ResumptionCare ? 'checked' : ''}} name="ResumptionCare" value="1" class="form-check-input"> 3. <b>Resumption of care</b> (after inpatient stay)</label></div>
               </div>

               <p class="mb-1"><b>Follow-Up</b></p>
               <div class="ps-3 mb-1">
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->Recertification ? 'checked' : ''}} name="Recertification" value="1" class="form-check-input"> 4. <b>Recertification (follow-up) reassessment</b></label></div>
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->OtherFollowUp ? 'checked' : ''}} name="OtherFollowUp" value="1" class="form-check-input"> 5. <b>Other follow-up</b></label></div>
               </div>

               <p class="mb-1"><b>Transfer to an Inpatient Facility</b></p>
               <div class="ps-3 mb-1">
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->InpatientFacility ? 'checked' : ''}} name="InpatientFacility" value="1" class="form-check-input"> 6. <b>Transferred to an inpatient facility –</b> patient not discharged from agency</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->InpatientFacility2 ? 'checked' : ''}} name="InpatientFacility2" value="1" class="form-check-input"> 7. <b>Transferred to an inpatient facility –</b> patient discharged from agency</label></div>
               </div>

               <p class="mb-1"><b>Discharge from Agency – Not to an Inpatient Facility</b></p>
               <div class="ps-3">
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->DeathAtHome ? 'checked' : ''}} name="DeathAtHome" value="1" class="form-check-input"> 8. <b>Death at home</b></label></div>
                  <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->DischargeFromAgency ? 'checked' : ''}} name="DischargeFromAgency" value="1" class="form-check-input"> 9. <b>Discharge from agency</b></label></div>
               </div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M0110. Episode Timing</b>
               <p>Is the Medicare home health payment episode, for which this assessment will define a case mix group, an “early” episode or a “later” episode in the patient’s current sequence of adjacent Medicare home health payment episodes?</p>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="radio" {{$rc->EpisodeTiming=='Early' ? 'checked' : ''}} name="EpisodeTiming" value="Early" class="form-check-input"> 1. <b>Early</b></label>
               &nbsp; <label class="form-check-label"><input type="radio" {{$rc->EpisodeTiming=='Later' ? 'checked' : ''}} name="EpisodeTiming" value="Later" class="form-check-input"> 2. <b>Later</b></label>
               &nbsp; <label class="form-check-label"><input type="radio" {{$rc->EpisodeTiming=='Unknown' ? 'checked' : ''}} name="EpisodeTiming" value="Unknown" class="form-check-input"> UK. <b>Unknown</b></label>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->EpisodeTiming=='NA' ? 'checked' : ''}} name="EpisodeTiming" value="NA" class="form-check-input"> NA. <b>Not Applicable:</b> No Medicare case mix group to be defined by this assessment.</label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1800. Grooming</b>
               <p>Current ability to tend safely to personal hygiene needs (specifically: washing face and hands, hair care, shaving or make up, teeth or denture care, or fingernail care).</p>
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Grooming=='0' ? 'checked' : ''}} name="Grooming" value="0" class="form-check-input"> 0. <b>Able to groom self unaided, with or without the use of assistive devices or adapted methods.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Grooming=='1' ? 'checked' : ''}} name="Grooming" value="1" class="form-check-input"> 1. <b>Grooming utensils must be placed within reach before able to complete grooming activities.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Grooming=='2' ? 'checked' : ''}} name="Grooming" value="2" class="form-check-input"> 2. <b>Someone must assist the patient to groom self.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Grooming=='3' ? 'checked' : ''}} name="Grooming" value="3" class="form-check-input"> 3. <b>Patient depends entirely upon someone else for grooming needs.</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1810. Current Ability to Dress <u>Upper</u> Body</b>
               safely (with or without dressing aids) including undergarments, pullovers, front-opening shirts and blouses, managing zippers, buttons, and snaps.
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->catdub=='0' ? 'checked' : ''}} name="catdub" value="0" class="form-check-input"> 0. <b>Able to get clothes out of closets and drawers, put them on and remove them from the upper body without assistance.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->catdub=='1' ? 'checked' : ''}} name="catdub" value="1" class="form-check-input"> 1. <b>Able to dress upper body without assistance if clothing is laid out or handed to the patient.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->catdub=='2' ? 'checked' : ''}} name="catdub" value="2" class="form-check-input"> 2. <b>Someone must help the patient put on upper body clothing.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->catdub=='3' ? 'checked' : ''}} name="catdub" value="3" class="form-check-input"> 3. <b>Patient depends entirely upon another person to dress the upper body.</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1820. Current Ability to Dress <u>Lower</u> Body</b>
               safely (with or without dressing aids) including undergarments, slacks, socks or nylons, shoes.
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->dress=='0' ? 'checked' : ''}} name="dress" value="0" class="form-check-input"> 0. <b>Able to obtain, put on, and remove clothing and shoes without assistance.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->dress=='1' ? 'checked' : ''}} name="dress" value="1" class="form-check-input"> 1. <b>Able to dress lower body without assistance if clothing and shoes are laid out or handed to the patient.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->dress=='2' ? 'checked' : ''}} name="dress" value="2" class="form-check-input"> 2. <b>Someone must help the patient put on undergarments, slacks, socks or nylons, and shoes.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->dress=='3' ? 'checked' : ''}} name="dress" value="3" class="form-check-input"> 3. <b>Patient depends entirely upon another person to dress lower body.</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1830. Bathing</b>
               <p>Current ability to wash entire body safely. <u>Excludes</u> grooming (washing face, washing hands, and shampooing hair).</p>
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Bathing=='0' ? 'checked' : ''}} name="Bathing" value="0" class="form-check-input"> 0. <b>Able to bathe self in <u>shower or tub</u> independently, including getting in and out of tub/shower.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Bathing=='1' ? 'checked' : ''}} name="Bathing" value="1" class="form-check-input"> 1. <b>With the use of devices, is able to bathe self in shower or tub independently, including getting in and out of the tub/shower.</b></label></div>
               <div class="d-block">
                  <label class="form-check-label"><input type="radio" {{$rc->Bathing=='2' ? 'checked' : ''}} name="Bathing" value="2" class="form-check-input"> 2. <b>Able to bathe in shower or tub with the intermittent assistance of another person:</b></label>
                  <div class="ms-3">
                     <p class="mb-0">a. <b>for intermittent supervision or encouragement or reminders, <u>OR</u></b></p>
                     <p class="mb-0">b. <b>to get in and out of the shower or tub, <u>OR</u></b></p>
                     <p class="mb-0">c. <b>for washing difficult to reach areas.</b></p>
                  </div>
               </div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Bathing=='3' ? 'checked' : ''}} name="Bathing" value="3" class="form-check-input"> 3. <b>Able to participate in bathing self in shower or tub, but requires presence of another person throughout the bath for assistance or supervision.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Bathing=='4' ? 'checked' : ''}} name="Bathing" value="4" class="form-check-input"> 4. <b>Unable to use the shower or tub, but able to bathe self independently with or without the use of devices at the sink, in chair, or on commode.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Bathing=='5' ? 'checked' : ''}} name="Bathing" value="5" class="form-check-input"> 5. <b>Unable to use the shower or tub, but able to participate in bathing self in bed, at the sink, in bedside chair, or on commode, with the assistance or supervision of another person.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Bathing=='6' ? 'checked' : ''}} name="Bathing" value="6" class="form-check-input"> 6. <b>Unable to participate effectively in bathing and is bathed totally by another person.</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1840. Toilet Transferring</b>
               <p>Current ability to get to and from the toilet or bedside commode safely and transfer on and off toilet/commode.</p>
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->ToiletTransferring=='0' ? 'checked' : ''}} name="ToiletTransferring" value="0" class="form-check-input"> 0. <b>Able to get to and from the toilet and transfer independently with or without a device.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->ToiletTransferring=='1' ? 'checked' : ''}} name="ToiletTransferring" value="1" class="form-check-input"> 1. <b>When reminded, assisted, or supervised by another person, able to get to and from the toilet and transfer.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->ToiletTransferring=='2' ? 'checked' : ''}} name="ToiletTransferring" value="2" class="form-check-input"> 2. <b><u>Unable</u> to get to and from the toilet but is able to use a bedside commode (with or without assistance).</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->ToiletTransferring=='3' ? 'checked' : ''}} name="ToiletTransferring" value="3" class="form-check-input"> 3. <b><u>Unable</u> to get to and from the toilet or bedside commode but is able to use a bedpan/urinal independently.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->ToiletTransferring=='4' ? 'checked' : ''}} name="ToiletTransferring" value="4" class="form-check-input"> 4. <b>Is totally dependent in toileting.</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1850. Transferring</b>
               <p>Current ability to move safely from bed to chair, or ability to turn and position self in bed if patient is bedfast.</p>
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Transferring=='0' ? 'checked' : ''}} name="Transferring" value="0" class="form-check-input"> 0. <b>Able to independently transfer.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Transferring=='1' ? 'checked' : ''}} name="Transferring" value="1" class="form-check-input"> 1. <b>Able to transfer with minimal human assistance or with use of an assistive device.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Transferring=='2' ? 'checked' : ''}} name="Transferring" value="2" class="form-check-input"> 2. <b>Able to bear weight and pivot during the transfer process but unable to transfer self.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Transferring=='3' ? 'checked' : ''}} name="Transferring" value="3" class="form-check-input"> 3. <b>Unable to transfer self and is unable to bear weight or pivot when transferred by another person.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Transferring=='4' ? 'checked' : ''}} name="Transferring" value="4" class="form-check-input"> 4. <b>Bedfast, unable to transfer but is able to turn and position self in bed.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Transferring=='5' ? 'checked' : ''}} name="Transferring" value="5" class="form-check-input"> 5. <b>Bedfast, unable to transfer and is unable to turn and position self.</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1860. Ambulation/Locomotion</b>
               <p>Current ability to walk safely, once in a standing position, or use a wheelchair, once in a seated position, on a variety of surfaces.</p>
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Ambulation=='0' ? 'checked' : ''}} name="Ambulation" value="0" class="form-check-input"> 0. <b>Able to independently walk on even and uneven surfaces and negotiate stairs with or without railings (specifically: needs no human assistance or assistive device).</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Ambulation=='1' ? 'checked' : ''}} name="Ambulation" value="1" class="form-check-input"> 1. <b>With the use of a one-handed device (for example, cane, single crutch, hemi-walker), able to independently walk on even and uneven surfaces and negotiate stairs with or without railings.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Ambulation=='2' ? 'checked' : ''}} name="Ambulation" value="2" class="form-check-input"> 2. <b>Requires use of a two-handed device (for example, walker or crutches) to walk alone on a level surface and/or requires human supervision or assistance to negotiate stairs or steps or uneven surfaces.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Ambulation=='3' ? 'checked' : ''}} name="Ambulation" value="3" class="form-check-input"> 3. <b>Able to walk only with the supervision or assistance of another person at all times.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Ambulation=='4' ? 'checked' : ''}} name="Ambulation" value="4" class="form-check-input"> 4. <b>Chairfast, <u>unable</u> to ambulate but is able to wheel self independently.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Ambulation=='5' ? 'checked' : ''}} name="Ambulation" value="5" class="form-check-input"> 5. <b>Chairfast, <u>unable</u> to ambulate and is unable to wheel self.</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Ambulation=='6' ? 'checked' : ''}} name="Ambulation" value="6" class="form-check-input"> 6. <b>Bedfast, unable to ambulate or be up in a chair.</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>0130. Self-Care</b>
               <p>Code the patient’s usual performance at Follow-Up for each activity using the 6-point scale. If activity was not attempted at Follow-Up, code the reason.</p>
            </td>
         </tr>
         <tr>
            <td>
               <p class="mb-1">
                  <b>Coding:</b><br>
                  <b>Safety</b> and <b>Quality of Performance</b> – If helper assistance is required because patient’s performance is unsafe or of poor quality, score according to amount of assistance provided.<br>
                  <i>Activities may be completed with or without assistive devices.</i>
               </p>
               <div class="ms-2 mb-2">
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='6' ? 'checked' : ''}} name="SelfCare" value="6" class="form-check-input"> 06. <b>Independent –</b> Patient completes the activity by themself with no assistance from a helper.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='5' ? 'checked' : ''}} name="SelfCare" value="5" class="form-check-input"> 05. <b>Setup or clean-up assistance –</b> Helper sets up or cleans up; patient completes activity. Helper assists only prior to or following the activity.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='4' ? 'checked' : ''}} name="SelfCare" value="4" class="form-check-input"> 04. <b>Supervision or touching assistance –</b> Helper provides verbal cues and/or touching/steadying and/or contact guard assistance as patient completes activity. Assistance may be provided throughout the activity or intermittently.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='3' ? 'checked' : ''}} name="SelfCare" value="3" class="form-check-input"> 03. <b>Partial/moderate assistance –</b> Helper does LESS THAN HALF the effort. Helper lifts, holds or supports trunk or limbs, but provides less than half the effort.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='2' ? 'checked' : ''}} name="SelfCare" value="2" class="form-check-input"> 02. <b>Substantial/maximal assistance –</b> Helper does MORE THAN HALF the effort. Helper lifts or holds trunk or limbs and provides more than half the effort.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='1' ? 'checked' : ''}} name="SelfCare" value="1" class="form-check-input"> 01. <b>Dependent –</b> Helper does ALL of the effort. Patient does none of the effort to complete the activity. Or, the assistance of 2 or more helpers is required for the patient to complete the activity.</label></div>
               </div>
               <p class="mb-1"><b>If activity was not attempted, code reason:</b></p>
               <div class="ms-2">
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='7' ? 'checked' : ''}} name="code_reason" value="7" class="form-check-input"> 07. <b>Patient refused</b></label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='9' ? 'checked' : ''}} name="code_reason" value="9" class="form-check-input"> 09. <b>Not applicable –</b> Not attempted and the patient did not perform this activity prior to the current illness, exacerbation or injury.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='10' ? 'checked' : ''}} name="code_reason" value="10" class="form-check-input"> 10. <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather constraints)</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->SelfCare=='88' ? 'checked' : ''}} name="code_reason" value="88" class="form-check-input"> 88. <b>Not attempted due to medical condition or safety concerns</b></label></div>
               </div>
            </td>
         </tr>

         <tr>
            <td><b>4. Follow-up Performance</b></td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Eating ? 'checked' : ''}} name="Eating" value="1" class="form-check-input"> <b>Eating</b>: The ability to use suitable utensils to bring food and/or liquid to the mouth and swallow food and/or liquid once the meal is placed before the patient</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->OralHygiene ? 'checked' : ''}} name="OralHygiene" value="1" class="form-check-input"> B. <b>Oral Hygiene:</b> The ability to use suitable items to clean teeth. Dentures (if applicable): The ability to insert and remove dentures into and from mouth, and manage denture soaking and rinsing with use of equipment.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->ToiletingHygiene ? 'checked' : ''}} name="ToiletingHygiene" value="1" class="form-check-input"> C. <b>Toileting Hygiene:</b> The ability to maintain perineal hygiene, adjust clothes before and after voiding or having a bowel movement. If managing an ostomy, include wiping the opening but not managing equipment.</label>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>GG0170. Mobility</b>
               <p>Code the patient’s usual performance at Follow-Up for each activity using the 6-point scale. If activity was not attempted at Follow-Up code the reason.</p>
            </td>
         </tr>
         <tr>
            <td>
               <p class="mb-1">
                  <b>Coding:</b><br>
                  <b>Safety</b> and <b>Quality of Performance –</b> If helper assistance is required because patient’s performance is unsafe or of poor quality, score according to amount of assistance provided.<br>
                  <i>Activities may be completed with or without assistive devices.</i>
               </p>
               <div class="ms-2 mb-2">
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility=='6' ? 'checked' : ''}} name="Mobility" value="6" class="form-check-input"> 06. <b>Independent –</b> Patient completes the activity by themself with no assistance from a helper.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility=='5' ? 'checked' : ''}} name="Mobility" value="5" class="form-check-input"> 05. <b>Setup or clean-up assistance –</b> Helper sets up or cleans up; patient completes activity. Helper assists only prior to or following the activity.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility=='4' ? 'checked' : ''}} name="Mobility" value="4" class="form-check-input"> 04. <b>Supervision or touching assistance –</b> Helper provides verbal cues and/or touching/steadying and/or contact guard assistance as patient completes activity. Assistance may be provided throughout the activity or intermittently.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility=='3' ? 'checked' : ''}} name="Mobility" value="3" class="form-check-input"> 03. <b>Partial/moderate assistance –</b> Helper does LESS THAN HALF the effort. Helper lifts, holds or supports trunk or limbs, but provides less than half the effort.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility=='2' ? 'checked' : ''}} name="Mobility" value="2" class="form-check-input"> 02. <b>Substantial/maximal assistance –</b> Helper does MORE THAN HALF the effort. Helper lifts or holds trunk or limbs and provides more than half the effort.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility=='1' ? 'checked' : ''}} name="Mobility" value="1" class="form-check-input"> 01. <b>Dependent –</b> Helper does ALL of the effort. Patient does none of the effort to complete the activity. Or, the assistance of 2 or more helpers is required for the patient to complete the activity.</label></div>
               </div>

               <p class="mb-1"><b>If activity was not attempted, code reason:</b></p>
               <div class="ms-2">
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility_CS=='7' ? 'checked' : ''}} name="Mobility_CS" value="7" class="form-check-input"> 07. <b>Patient refused</b></label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility_CS=='9' ? 'checked' : ''}} name="Mobility_CS" value="9" class="form-check-input"> 09. <b>Not applicable –</b> Not attempted and the patient did not perform this activity prior to the current illness, exacerbation or injury.</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility_CS=='10' ? 'checked' : ''}} name="Mobility_CS" value="10" class="form-check-input"> 10. <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather constraints)</label></div>
                  <div class="d-block"><label class="form-check-label"><input type="radio" {{$rc->Mobility_CS=='88' ? 'checked' : ''}} name="Mobility_CS" value="88" class="form-check-input"> 88. <b>Not attempted due to medical condition or safety concerns</b></label></div>
               </div>
            </td>
         </tr>

         <tr>
            <td><b>4. Follow-up Performance Mobility</b></td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->RollLR ? 'checked' : ''}} name="RollLR" value="1" class="form-check-input"> A. <b>Roll left and right:</b> The ability to roll from lying on back to left and right side, and return to lying on back on the bed.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->SitTolying ? 'checked' : ''}} name="SitTolying" value="1" class="form-check-input"> B. <b>Sit to lying:</b> The ability to move from sitting on side of bed to lying flat on the bed.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->LyingToSitting ? 'checked' : ''}} name="LyingToSitting" value="1" class="form-check-input"> C. <b>Lying to sitting on side of bed:</b> The ability to move from lying on the back to sitting on the side of the bed with no back support.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->SitToStand ? 'checked' : ''}} name="SitToStand" value="1" class="form-check-input"> D. <b>Sit to stand:</b> The ability to come to a standing position from sitting in a chair, wheelchair, or on the side of the bed.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->BedToChair ? 'checked' : ''}} name="BedToChair" value="1" class="form-check-input"> E. <b>Chair/bed-to-chair transfer:</b> The ability to transfer to and from a bed to a chair (or wheelchair).</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->ToiletTransfer ? 'checked' : ''}} name="ToiletTransfer" value="1" class="form-check-input"> F. <b>Toilet transfer:</b> The ability to get on and off a toilet or commode.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Walk10Feet ? 'checked' : ''}} name="Walk10Feet" value="1" class="form-check-input"> I. <b>Walk 10 feet:</b> Once standing, the ability to walk at least 10 feet in a room, corridor, or similar space.<br><i>If Follow-Up performance is coded 07, 09, 10 or 88 ➔Skip to GG0170M, 1 step (curb).</i></label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Walk50Feet ? 'checked' : ''}} name="Walk50Feet" value="1" class="form-check-input"> J. <b>Walk 50 feet with two turns:</b> Once standing, the ability to walk 50 feet and make two turns.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Walk150Feet ? 'checked' : ''}} name="Walk150Feet" value="1" class="form-check-input"> K. <b>Walk 150 feet:</b> Once standing, the ability to walk at least 150 feet in a corridor or similar space.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Walking10Feet ? 'checked' : ''}} name="Walking10Feet" value="1" class="form-check-input"> L. <b>Walking 10 feet on uneven surfaces:</b> The ability to walk 10 feet on uneven or sloping surfaces (indoor or outdoor), such as turf or gravel.</label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Step1 ? 'checked' : ''}} name="Step1" value="1" class="form-check-input"> M. <b>1 step (curb):</b> The ability to go up and down a curb or up and down one step.<br><i>If Follow-up performance is coded 07, 09, 10 or 88, ➔ Skip to GG0170Q, Does patient use wheelchair and/or scooter?</i></label>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Steps4 ? 'checked' : ''}} name="Steps4" value="1" class="form-check-input"> N. <b>4 steps:</b> The ability to go up and down four steps with or without a rail.</label>
            </td>
         </tr>
         <tr>
            <td>
               <p class="mb-1"><b>Q. Does patient use wheelchair and/or scooter?</b></p>
               <div class="ms-2">
                  <label class="form-check-label"><input type="radio" {{$rc->dpuws=='no' ? 'checked' : ''}} name="dpuws" value="no" class="form-check-input"> <b>0. No</b></label>
                  &nbsp; <label class="form-check-label"><input type="radio" {{$rc->dpuws=='yes' ? 'checked' : ''}} name="dpuws" value="yes" class="form-check-input"> <b>1. Yes</b></label>
               </div>
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="checkbox" {{$rc->Wheel50Feet ? 'checked' : ''}} name="Wheel50Feet" value="1" class="form-check-input"> R. <b>Wheel 50 feet with two turns:</b> Once seated in wheelchair/scooter, the ability to wheel at least 50 feet and make two turns.</label>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>JM1033. Risk for Hospitalization</b>
               <p>Which of the following signs or symptoms characterize this patient as at risk for hospitalization?</p>
            </td>
         </tr>
         <tr>
            <td>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->HistoryOfFalls ? 'checked' : ''}} name="HistoryOfFalls" value="1" class="form-check-input"> 1. <b>History of falls (2 or more falls – or any fall with an injury – in the past 12 months)</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->WeightLoss ? 'checked' : ''}} name="WeightLoss" value="1" class="form-check-input"> 2. <b>Unintentional weight loss of a total of 10 pounds or more in the past 12 months</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->hospitalizations ? 'checked' : ''}} name="hospitalizations" value="1" class="form-check-input"> 3. <b>Multiple hospitalizations (2 or more) in the past 6 months</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->departmentVisits ? 'checked' : ''}} name="departmentVisits" value="1" class="form-check-input"> 4. <b>Multiple emergency department visits (2 or more) in the past 6 months</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->Decline ? 'checked' : ''}} name="Decline" value="1" class="form-check-input"> 5. <b>Decline in mental, emotional, or behavioral status in the past 3 months</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->observedHistory ? 'checked' : ''}} name="observedHistory" value="1" class="form-check-input"> 6. <b>Reported or observed history of difficulty complying with any medical instructions (for example, medications, diet, exercise) in the past 3 months</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->medications ? 'checked' : ''}} name="medications" value="1" class="form-check-input"> 7. <b>Currently taking 5 or more medications</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->exhaustion ? 'checked' : ''}} name="exhaustion" value="1" class="form-check-input"> 8. <b>Currently reports exhaustion</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->OtherRisk ? 'checked' : ''}} name="OtherRisk" value="1" class="form-check-input"> 9. <b>Other risk(s) not listed in 1-8</b></label></div>
               <div class="d-block"><label class="form-check-label"><input type="checkbox" {{$rc->None ? 'checked' : ''}} name="None" value="1" class="form-check-input"> 10. <b>None of the above</b></label></div>
            </td>
         </tr>

         <tr>
            <td class="bg-secondary-subtle">
               <b>M1306</b>. Does this patient have at least one <b>Unhealed Pressure Ulcer/Injury at Stage 2 or Higher</b> or designated as Unstageable? (Excludes Stage 1 pressure injuries and all healed pressure ulcers/injuries)
            </td>
         </tr>
         <tr>
            <td>
               <label class="form-check-label"><input type="radio" {{$rc->uplas2oh=='no' ? 'checked' : ''}} name="uplas2oh" value="no" class="form-check-input"> 0. <b>No</b></label>
               &nbsp; <label class="form-check-label"><input type="radio" {{$rc->uplas2oh=='yes' ? 'checked' : ''}} name="uplas2oh" value="yes" class="form-check-input"> 1. <b>Yes</b></label>
            </td>
         </tr>
     </table>
</body>
</html>