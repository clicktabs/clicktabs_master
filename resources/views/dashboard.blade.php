@extends('layouts.app')
@section('extra_css')
<link href="{{asset('assets/css/calendar/style.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{asset('assets/css/patients-admission.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/patient/communication/style.css')}}"/>
<style>
.form_placeholder .card.mb-2 {
border: none;
}

.form_placeholder .card-body.row {
display: block;
padding: 0;
border: none !important;
}

.form_placeholder .row.mt-3 {
margin-right: 0;
width: 100%;
display: block !important;
--bs-gutter-x: 0 !important;
}

.form_placeholder .save_btn {
display: none;
}

.dataTables_length label {
width: 250px;
}

.dataTables_length label select {
width: 100px !important;
display: inline-block;
}

.ui-widget-header li a {
padding: 5px 15px;
color: #fff;
}

/* .ui-widget-header li.ui-tabs-active a { */
background: #0d6efd;
border-radius: 5px;
color: #fff;
}
.nav {
background: #0d6efd;
border-radius: 5px;
color: #fff;
}

#details p::first-letter {
font-size: 250%;
color: #8A2BE2;
}


.attachment {
padding: 20px;
}

.patient-communication-bg {
background-color: #4133bf;
margin-bottom: 20px;
border-radius: 5px;
color: #fff;
}

/*.attachment form {*/
/*    border: 2px solid #888;*/
/*    padding: 20px;*/
/*    border-radius: 5px;*/
/*}*/

.attachment h1 {
font-weight: 600;
font-size: 25px;
margin-bottom: 20px;
}

.form-content-left p {
line-height: 40px;
}

.form-content-right input,
select {
width: 100%;
margin-bottom: 10px;
border-radius: 5px;
color: #000;
}

.attachment-form-left-area,
.attachment-form-right-area {
padding: 15px;
}

.communication-text span {
font-weight: 500;
}

.communication-text select {
display: inline-block;
width: 100px !important;
padding: 2px 12px;
border-radius: 4px;
border: 2px solid #888;
}

/*.communication-text textarea {*/
/*    width: 100%;*/
/*    border: 2px solid #888;*/
/*    border-radius: 8px;*/
/*    margin-bottom: 26px;*/
/*}*/

table.call_log_table {
border-collapse: collapse;
margin: 0;
padding: 0;
width: 100%;
table-layout: fixed;
}

table.call_log_table caption {
font-size: 1.5em;
margin: .5em 0 .75em;
}

table.call_log_table tr {
padding: .35em;
}

table.call_log_table th,
table.call_log_table td {
padding: .625em;
}

table.call_log_table th {
font-size: .85em;
letter-spacing: .1em;
text-transform: uppercase;
}

@media screen and (max-width: 768px) {
table.call_log_table {
border: 0;
}

table.call_log_table caption {
font-size: 1.3em;
}

table.call_log_table thead {
border: none;
clip: rect(0 0 0 0);
height: 1px;
margin: -1px;
overflow: hidden;
padding: 0;
position: absolute;
width: 1px;
}

table.call_log_table tr {
display: block;
margin-bottom: .625em;
}

table.call_log_table td {
display: block;
font-size: .8em !important;
text-align: left;
}

table.call_log_table td label {
font-size: 1em !important;
}

table.call_log_table td::before {
/*
* aria-label has no advantage, it won't be read inside a table
content: attr(aria-label);
*/
content: attr(data-label);
font-weight: bold;
text-transform: uppercase;
font-size: 16px;
}

table.call_log_table td:last-child {
border-bottom: 0;
}
}

.dataTables_wrapper .dataTables_length select {
margin-bottom: 0 !important;
}

.jquery-modal.blocker.current {
z-index: 999;
}

.jquery-modal .modal a.close-modal {
top: 15px;
right: 5px;
display: none;
}

.modal {
max-width: 100% !important;
background: transparent;
}

.modal.fade .modal-dialog {
transform: translate(0, 0) !important;
}

.action .btn {
padding: 5px 15px !important;
}
#employee_patient_table_wrapper, #visit_note_table_wrapper, #employee_task_table_wrapper {
padding: 0;
}
#employee_info_tabs .dataTables_filter {
margin-bottom: 20px;
display: none;
}
.container-full{
margin-top: -30px;
}
.double_underline{
width: 100px;
border-bottom: 3px double;
}

    #employee_info_tabs ul  li a {
    color: #fff;
    font-weight: 500;
    text-align: center;
    padding: 10px 20px;
    border-right: 2px solid #f5f5f5;
    text-decoration: none;

}
.dataTables_scrollHead .dataTables_scrollHeadInner,
.dataTables_scrollHead .dataTables_scrollHeadInner table {
    width: 100% !important;
}
</style>
@endsection
@section('content')
<main>
<div class="vs jj ttm vl ou uf na">
<!-- Welcome banner -->
<div class="y pr dw jk rounded-sm la rc !bg-[#4133BF]">
<!-- Background illustration -->
<div class="g q k ip id pointer-events-none hidden tnh" aria-hidden="true">
<svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
<path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
<path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
<linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
<stop stop-color="#A5B4FC" offset="0%"></stop>
<stop stop-color="#818CF8" offset="100%"></stop>
</linearGradient>
<linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
<stop stop-color="#4338CA" offset="0%"></stop>
<stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
</linearGradient>
</defs>
<g fill="none" fill-rule="evenodd">
<g transform="rotate(64 36.592 105.604)">
<mask id="welcome-d" fill="#fff">
    <use xlink:href="#welcome-a"></use>
</mask>
<use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
<path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
</g>
<g transform="rotate(-51 91.324 -105.372)">
<mask id="welcome-f" fill="#fff">
    <use xlink:href="#welcome-e"></use>
</mask>
<use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
<path fill="url(#welcome-c)" mask="url(#welcome-f)"
      d="M40.333-15.147h50v95h-50z"></path>
</g>
<g transform="rotate(44 61.546 392.623)">
<mask id="welcome-h" fill="#fff">
    <use xlink:href="#welcome-g"></use>
</mask>
<use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
<path fill="url(#welcome-c)" mask="url(#welcome-h)"
      d="M40.333-15.147h50v95h-50z"></path>
</g>
</g>
</svg>
</div>

<!-- Content -->
    <div class="y">
        <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]"> {{ $greatings ?? 'Good Day' }} {{$user->full_name}}
        , Welcome Back. 👋</h1>
    </div>
</div>
<div class="container-full">
    <div class="row">
        <div class="col-lg-12">  
            @if($user->hasRole('super-admin'))
            @else
            @can('employee-dashboard')
            @endcan
            @can('admin-dashboard')
            {{-- @can('employee-dashboard') --}}
            @endcan
            @endif
            @if ($user->hasRole('Employee'))
            @else
            <div class="main_content">
                <div id="tabs">
                    <div id="main">
                        <div class="patient_info">
                            <div class="patient_info_wrapper" style="border: 0px !important;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2">
                                        <div class="patient_image">
                                                @if($current_user && isset($current_user->photo) && file_exists(public_path('employee/' . $current_user->photo)))
                                                    <img
                                                        src="{{ asset('employee/'.$current_user->photo) }}">
                                                @else
                                                    <img src="{{ asset('employee/avatar.svg') }}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row h-full">
                                                <div class="col-lg-6">
                                                    <div class="patient_info_content">
                                                        <div
                                                            class="patient_info_content_header d-flex align-items-center">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="patient_info_table table-responsive fw-bolder" style="margin-top: -2px;">
                                                            <span class="double_underline">My Information</span>
                                                            <table>
                                                                <tbody>
                                                                <tr>
                                                                    <td>Birthday:</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Phone Number:</td>
                                                                    <td>{{!empty($accountInfo->phone) ? $accountInfo->phone: ''}}</td>
                                                                    Skilled Nursing                                    </tr>
                                                                <tr>
                                                                    <td>Status:</td>
                                                                    <td> {{Auth::user()->status == 1 ? 'Active' :'Inactive'}} </td>
                                                                </tr>
                                                                    <td>Zip Code:</td>
                                                                    <td>{{!empty($accountInfo->zip)?$accountInfo->zip:''}}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($user->hasRole('super-admin'))
                        @else
                        @endif
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@php

@endphp
@if(!$user->hasRole('super-admin') && $current_user)
    @can('employee-dashboard')
        <div class="patient_info mt-[20px]">
            <div class="patient_info_wrapper">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="patient_image">
                                @if($current_user && isset($current_user->photo) && file_exists(public_path('employee/' . $current_user->photo)))
                                    <img
                                        src="{{ asset('employee/'.$current_user->photo) }}">
                                @else
                                    <img src="{{ asset('employee/avatar.svg') }}">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10">
                            <div class="row h-full">
                                <div class="col-lg-6">
                                    <div class="patient_info_content">
                                        <div
                                            class="patient_info_content_header d-flex align-items-center">
                                            <h1>{{$current_user->first_name}}
                                                , {{$current_user->last_name}}</h1>
                                        </div>
                                        <div
                                            class="patient_info_table table-responsive">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td>Employee ID:</td>
                                                    <td>{{$current_user->employee_id}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Birthday:</td>
                                                    <td>{{ \Carbon\Carbon::parse($current_user->dob)->format('M d, Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Hire Date:</td>
                                                    <td>{{ \Carbon\Carbon::parse($current_user->doh)->format('M d, Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Employment Status:</td>
                                                    <td>@if($current_user->status == 1)
                                                            employee
                                                        @else
                                                            ex employee
                                                        @endif
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       @endcan
        @endif
        @canany(['admin-dashboard','employee-dashboard'])
    <div id="employee_info_tabs" class="mt-[0px] bg-[#fff] p-[0px]">
        <ul class="d-flex flex-nowrap align-items-center gap-3  py-[10px] px-[20px] mb-[30px] bg-[#4133BF] " >
            <li class="flex-shrink-0">
                <a href="#employee_patient">My patients</a>
            </li>

            <li class="flex-shrink-0">
                <a href="#mytask">My Tasks</a>
            </li>

            <li class="flex-shrink-0">
                <a href="#visit_note">Miss visit note</a>
            </li>
            <li class="flex-shrink-0">
                <a href="#updatePassword">Update password</a>
            </li>
        </ul>

              <div id="employee_patient">
            <div class="bg-white bd rounded-sm border border-slate-200 mt-2">
                <div class="dk">
                    <table class="client_table ux ou display nowrap" style="width:100%" id="schedulingList">
                        <thead class="bg-[#4133BF] text-[#fff]">
                            <tr>
                                <th>Patient Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>

                    <div class="modal fade !max-w-full" id="kt_modal_add_event_form" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog next_modal_content modal-dialog-centered relative">
                            <div class="modal-content">
                                <div class="btn btn-icon btn-sm btn-active-icon-primary absolute right-0"
                                    id="kt_modal_add_event_close">
                                </div>
                                <form class="form" id="scheduleForm" method="post">
                                    @csrf
                                    @method('PUT')
                                    <!--begin::Modal header-->
                                    <input type="hidden" id="schadule_id" name="schadule_id" value=""/>
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder" data-kt-calendar="title">Update Schedule to Calendar</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->

                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body py-10 px-lg-17">
                                        <!--begin::Input group-->
                                        <div class="row row-cols-lg-1 g-10">
                                            <div class="col-lg-5 col-md-6">
                                                <label class="fs-6 fw-bold mb-2 required flex-shrink">Start
                                                    Date: </label>
                                                <div class="d-flex items-center gap-4">
                                                    <div class="fv-row mb-9">
                                                        <input class="form-control form-control-solid"
                                                            type="datetime-local"
                                                            id="kt_calendar_datepicker_start_date"
                                                            name="kt_calendar_datepicker_start_date">
                                                    </div>
                                                </div>
                                                <label class="fs-6 fw-bold mb-2 required flex-shrink">End Date:</label>
                                                <div class="d-flex items-center gap-4 mb-2">
                                                    <div class="fv-row w-full">
                                                        <input class="form-control form-control-solid"
                                                            type="datetime-local"
                                                            id="kt_calendar_datepicker_end_date"
                                                            name="kt_calendar_datepicker_end_date">
                                                    </div>
                                                </div>
                                                <div class="flex gap-[20px] items-center">
                                                    <div class="total_hrs flex items-center justify-center">
                                                        00:00hrs
                                                        <div class="hq_section">
                                                            <div>
                                                                <input type="checkbox" value="hq" name="hq" id="hq"/>
                                                                <label for="hq">HQ</label>
                                                            </div>
                                                            <div>
                                                                <input id="u2" type="checkbox" value="u2" name="u2"/>
                                                                <label for="u2">U2</label>
                                                            </div>
                                                            <div>
                                                                <input id="u3" type="checkbox" value="u3" name="u3"/>
                                                                <label for="u3">U3</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="week_lists flex-wrap">
                                                        <div>
                                                            <input type="checkbox" value="sun" name="sun" id="sun"/>
                                                            <label for="sun">Sun</label>
                                                        </div>
                                                        <div>
                                                            <input id="mon" type="checkbox" value="mon" name="mon"/>
                                                            <label for="mon">Mon</label>
                                                        </div>
                                                        <div>
                                                            <input id="tue" type="checkbox" value="tue" name="tue"/>
                                                            <label for="tue">Tue</label>
                                                        </div>
                                                        <div>
                                                            <input id="wed" type="checkbox" value="wed" name="wed"/>
                                                            <label for="wed">Wed</label>
                                                        </div>
                                                        <div>
                                                            <input id="thu" type="checkbox" value="thu" name="thu"/>
                                                            <label for="thu">Thu</label>
                                                        </div>
                                                        <div>
                                                            <input id="fri" type="checkbox" value="fri" name="fri"/>
                                                            <label for="fri">Fri</label>
                                                        </div>
                                                        <div>
                                                            <input id="sat" type="checkbox" value="sat" name="sat"/>
                                                            <label for="sat">Sat</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="select_wrapper">
                                                    <div>
                                                        <label>Patient: </label>
                                                        <select name="patient_id" required id="patient_id" required>
                                                            <option value="">Select patient</option>
                                                            @foreach($patients as $patient)
                                                                <option value="{{ $patient->id }}"
                                                                        data-mi_no="{{ $patient->mi_no }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div>
                                                        <label>Caregiver: </label>
                                                        <select name="employee_id" required id="employee">
                                                            <option value="">Select caregiver</option>
                                                            @foreach($employees as $employee)
                                                                <option
                                                                    value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label>Task: </label>
                                                        <select id="task" name="task" required>
                                                            <option value="">Select Visit</option>
                                                            <option value="sixty_day_summary">60 Day Summary</option>
                                                            <option value="communication_note">Communication note
                                                            </option>
                                                            <option value="hha">HHA</option>
                                                            <option value="coordination_care">Coordination of Care
                                                            </option>
                                                            <option value="hha_care_plane">HHA Care Plane</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6">
                                                <div class="row row-cols-lg-1 g-10">
                                                    <div class="select_wrapper">
                                                        <div>
                                                            <label>Service: </label>
                                                            <select id="sc_sub_addon_id" name="sc_sub_addon_id"
                                                                    required>
                                                                <option value="">Select service</option>
                                                                {{-- @foreach($service_codes as $service_code)
                                                                    <option
                                                                        value="{{ $service_code->id }}">{{ $service_code->name }}</option>
                                                                @endforeach --}}
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Bill Unit Type: </label>
                                                            <select id="bill_unit_type" name="bill_unit_type" required>
                                                                <option value="15">15 Minutes</option>
                                                                <option value="1">1 Hour</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Pay Unit Type: </label>
                                                            <select id="pay_unit_type" name="pay_unit_type" required>
                                                                <option value="15">15 Minutes</option>
                                                                <option value="1">1 Hour</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Status: </label>
                                                            <select id="scheduling_status" name="scheduling_status"
                                                                    required>
                                                                <option value="">Select status</option>
                                                                <option value="scheduled">Scheduled</option>
                                                                <option value="started">Started</option>
                                                                <option value="open_shift">Open Shift</option>
                                                                <option value="no_show">No Show</option>
                                                                <option value="on_hold">On Hold</option>
                                                                <option value="hospitalization">Hospitalization</option>
                                                                <option value="completed">Completed</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Primary Payer: </label>
                                                            <select id="payor_sub_addon_id" name="payor_sub_addon_id"
                                                                    required>
                                                                <option value="">Select Payer</option>
                                                                {{-- @foreach($payors as $payor)
                                                                    <option
                                                                        value="{{ $payor->id }}">{{ $payor->name }}</option>
                                                                @endforeach --}}
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Note:</label>
                                                            <textarea class="form-control" id="scheduling_notes"
                                                                    name="scheduling_notes" cols="4"
                                                                    required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-12">
                                                <div class="next_modal_action_buttons">
                                                    <button id="save_event_data" type="submit">Update</button>
                                                    <button id="cancel_event_data" type="button">Cancel</button>
                                                    <button id="rec_event_data" type="button">Repeat</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal body-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mytask">
            <div class="bg-white bd rounded-sm border border-slate-200 mt-2">
                <div class="dk">
                    <table class="client_table ux ou display nowrap" style="width:100%" id="schedulingList2">
                        <thead class="bg-[#4133BF] text-[#fff]">
                            <tr>
                                <th>Patient Name</th>
                                <th>Task</th>
                                <th>Schedule Date</th>
                                <th>Assigned To</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div id="updatePassword">
            <div class="bg-white bd rounded-sm border border-slate-200 mt-2">
                <div class="dk">
                    @include('auth.update-password')
                </div>
            </div>
        </div>

        <div id="visit_note">
            <form method="post" action="{{ route('visit-note.store') }}">
            @csrf
                <div class="flex items-center gap-[40px]">
                    <div class="flex items-center gap-[15px]">
                        <label for="p_communication_date">Date: </label>
                        <input type="date" id="p_communication_date" name="p_communication_date" value="{{ old('p_communication_date') }}" />
                    </div>
                    <div>
                        <div class="flex items-center gap-[15px]">
                            <label for="p_communication_phy">Physician: </label>
                            <select class="m-[0] w-[200px] border-[1px] border-[#dfdede]" id="p_communication_phy" name="p_communication_phy">
                                <option value="">Select physician</option>
                                @if($physicians)
                                    @foreach($physicians as $single_physician)
                                        <option value="{{ $single_physician->id }}">{{ $single_physician->first_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-[15px]">
                            <label for="p_communication_patient">Patient: </label>
                            <select class="m-[0] w-[200px] border-[1px] border-[#dfdede]" id="p_communication_patient" name="p_communication_patient">
                                <option value="">Select patient</option>
                                @if($patients)
                                    @foreach($patients as $single_patient)
                                        <option value="{{ $single_patient->id }}" >{{ $single_patient->first_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-[20px]">
                    <textarea name="p_communication_text" class="py-[10px] px-[10px] border-[1px] border-[#dfdede] w-full h-[250px]">{{ old('p_communication_text') }}</textarea>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>

    </div>
@endcan


@if($user->hasRole('super-admin'))
@php
$subscriptionPlans = \App\Models\SubscriptionPlan::all();
@endphp
<div class="row mb-4 mt-4">
<div class="col-lg-12">
<div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
<header class="vc vu cs ch">
<!-- Content -->
<div class="y">
    <h1 class="gu teu text-slate-800 font-bold rt">Subscription Plans</h1>
</div>
</header>
<div class="dk">
<div class="">

    @include('subscription.components.table')

</div>
</div>
</div>
</div>
</div>
@endif
</div><!-- Card report-2 -->
</main>
@endsection

@section('extra_js')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="{{asset('assets/js/leaflet.js')}}"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
<link href="{{asset('assets/css/maplibre-gl.css')}}" rel='stylesheet'/>
<script src="{{asset('assets/js/maplibre-gl.js')}}"></script>
<script src="{{asset('assets/js/leaflet-maplibre-gl.js')}}"></script>
<script>
$(document).ready(function () {
$("#tabs").tabs();
let dataTable = $('#example').DataTable();

function reset_modal_input() {
$('#kt_calendar_datepicker_start_date, #kt_calendar_datepicker_end_date, #patient, #client_assess, #employee, #task, #sc_sub_addon_id, #bill_unit_type, #pay_unit_type, #scheduling_status, #payor_sub_addon_id, #scheduling_notes').val('');
$('#mi_no_select').append();
$('.total_hrs').text(`00 H : 00 M`);
}

function updateMiNo(selectElement) {
// Get the selected option element
let selectedOption = selectElement.options[selectElement.selectedIndex];
let miNo = selectedOption.getAttribute('data-mi_no');
// Set the MR No value to the blank option in the mi_no select element
let miNoSelect = document.getElementById('mi_no_select');

// Create the blank option if it doesn't exist
let blankOption = miNoSelect.querySelector('option[value=""]');
if (!blankOption) {
blankOption = document.createElement('option');
blankOption.value = "";
miNoSelect.appendChild(blankOption);
}

// Set the value and text of the blank option
blankOption.value = miNo;
blankOption.text = miNo;
miNoSelect.value = miNo;
}

$('#patient_id').change(function () {
let mi_no = $(this).find(':selected').attr('data-mi_no')
$('#mi_no_select').empty();
$('#mi_no_select').append($('<option>', {
value: mi_no,
text: mi_no
}));
});

function editWeeklySchedule(id) {
$.ajax({
url: "/schedule/get-edit-weekly-schedule",
type: "POST",
data: {id: id},
success: function (data) {
if (data.schedule === null) {
return;
}
console.log(data.schedule.patient_id)
$('#schadule_id').val(data.schedule.id);
$('#patient_id').val(data.schedule.patient_id);
$('#mi_no_select').append($('<option>', {
value: data.schedule.mi_no,
text: data.schedule.mi_no
}));

$('#employee').val(data.schedule.employee_id);
$('#task').val(data.schedule.task);
$('#sc_sub_addon_id').val(data.schedule.sc_sub_addon_id);
$('#bill_unit_type').val(data.schedule.bill_unit_type);
$('#pay_unit_type').val(data.schedule.pay_unit_type);
$('#scheduling_status').val(data.schedule.scheduling_status);
$('#payor_sub_addon_id').val(data.schedule.payor_sub_addon_id);
$('#scheduling_notes').val(data.schedule.scheduling_notes);
$('#mileage_rate').val(data.schedule.mileage_rate);
$('#user_rate').val(data.schedule.user_rate);

let originalDateTimeStart = data.schedule.kt_calendar_datepicker_start_date + " " + data.schedule.start_time;
let startLocalDate = moment(originalDateTimeStart, "MM-DD-YYYY HH:mm:ss").format("MM-DD-YYYY[T]HH:mm");

let originalDateTimeEnd = data.schedule.kt_calendar_datepicker_end_date + " " + data.schedule.end_time;
let endLocalDate = moment(originalDateTimeEnd, "MM-DD-YYYY HH:mm:ss").format("MM-DD-YYYY[T]HH:mm");

let start_date = $('#kt_calendar_datepicker_start_date');
let end_date = $('#kt_calendar_datepicker_end_date');

start_date.val(startLocalDate);
end_date.val(endLocalDate);

let m1 = moment(startLocalDate, 'MM-DD-YYYY HH:mm');
let m2 = moment(endLocalDate, 'MM-DD-YYYY HH:mm');
let duration = moment.duration(m1.diff(m2));
let hours = duration.hours();
let minutes = duration.minutes();
$('.total_hrs').text(`${Math.abs(hours)} H : ${Math.abs(minutes)} M`);
}
});
}

$('#rec_event_data').click(function () {
$('.week_lists').css("display", "flex").fadeIn();
});
$('#schedulingList').DataTable({
    scrollX: true,
    ajax: {
        url: "/schedule/get-schedule",
    },
    columns: [
        { data: 'patient_first_name', title: 'Patient Name' },
        { data: 'kt_calendar_datepicker_start_date', title: 'Start Date' },
        { data: 'kt_calendar_datepicker_end_date', title: 'End Date' },
        { data: 'start_time', title: 'Start Time' },
        { data: 'end_time', title: 'End Time' },
        {
            data: 'scheduling_status',
            title: 'Scheduling Status',
            orderable: false,
            render: function (data, type, row) {
                return `<div class="rounded-[5px] ${data === 'scheduled' ? 'scheduled' : data === 'started' ? 'started' : data === 'open_shift' ? 'open_shift' : data === 'no_show' ? 'no_show' : data === 'on_hold' ? 'on_hold' : data === 'hospitalization' ? 'hospitalization' : 'completed'}">
                    <span class="text-white block text-center py-[5px] px-[10px] border-none">${data === 'scheduled' ? 'Scheduled' : data === 'started' ? 'Started' : data === 'open_shift' ? 'Open Shift' : data === 'no_show' ? 'No Show' : data === 'on_hold' ? 'On Hold' : data === 'hospitalization' ? 'Hospitalization' : 'Completed'}</span>
                </div>`;
            }
        },
        {
            data: 'id',
            title: 'Actions',
            className: "dt-center editor-delete",
            orderable: false,
            render: function (data, type, row) {
                let subscriptionPlanType = "{{$subscriptionPlanType}}" || "DefaultPlan";

                let buttonsHtml = '';

                if (subscriptionPlanType === 'DOODD and home healthcare') {
                    buttonsHtml += `<a href="/patients/non-skilled-dashboard/${data}" class="btn btn-primary" target="_blank">DODD</a>`;
                } else if (subscriptionPlanType === 'Private Care') {
                    buttonsHtml += `<a href="/patients/non-skilled-passport-dashboard/${data}" class="btn btn-primary" target="_blank">Passport</a>`;
                } else if (subscriptionPlanType === 'Home healthcare') {
                    buttonsHtml += `<a href="/patients/${row.patient_id}" class="btn btn-primary" target="_blank">Skilled</a>`;
                } else if (subscriptionPlanType === 'Combo') {
                    buttonsHtml += `<a href="/patients/non-skilled-dashboard/${data}" class="btn btn-primary mr-1" target="_blank">DODD</a>`;
                    buttonsHtml += `<a href="/patients/non-skilled-passport-dashboard/${data}" class="btn btn-primary mr-1" target="_blank">Non-skilled</a>`;
                    buttonsHtml += `<a href="/patients/${row.patient_id}" class="btn btn-primary" target="_blank">Skilled</a>`;
                } else {
                    buttonsHtml = 'No permission';
                }

                return buttonsHtml;
            }
        },
    ],
});



// Employee dashboard table js

$("#employee_info_tabs").tabs();

$('#employee_patient_table, #employee_task_table, #visit_note_table').DataTable();
// End employee dashboard table js

jQuery(document).on('submit', '#scheduleForm', function (e) {
e.preventDefault();
jQuery('.loader_wrap').fadeIn();
let data = new FormData(this);
data.append("_method", "PUT");

jQuery.ajax({
url: "/schedule-update/api",
method: 'POST',
data: data,
dataType: 'JSON',
contentType: false,
cache: false,
processData: false,
success: function (data) {
jQuery('#schedulingList').DataTable().ajax.reload();
$('.jquery-modal.blocker.current').trigger('click');
jQuery('.loader_wrap').fadeOut();
}
});
})

$('body').on('click', '.edit', function () {
$('#kt_modal_add_event_form').modal({
fadeDuration: 100
});
let event_id = $(this).data('eventid');
editWeeklySchedule(event_id);
});

$('#cancel_event_data').click(function () {
$('.jquery-modal.blocker.current').trigger('click');
});

$('body').on('click', '.delete', function () {
jQuery('.loader_wrap').fadeIn();
let event_id = $(this).data('eventid');
let data = [event_id];
$.ajax({
url: "/schedule/delete-schedule",
type: "POST",
data: {ids: data},
success: function (data) {
jQuery('#schedulingList').DataTable().ajax.reload();
jQuery('.loader_wrap').fadeOut();
}
});
})

$('#kt_modal_add_event_close').click(function () {
$('.jquery-modal.blocker.current').trigger('click')
});

$('.jquery-modal.blocker.current').click(function () {
$('#kt_modal_add_event_form').modal('hide');
$('.week_lists').fadeOut();
reset_modal_input();
$('#schadule_id').val('');
$(this).hide();
});
// new SimpleBar(document.getElementById('scrollbar'))

});

<?php if($user->hasPermissionTo('employee-dashboard')): ?>
let startlat = <?php echo $current_user && $current_user->lat ? $current_user->lat : '40.7128'; ?>;
let startlon = <?php echo $current_user && $current_user->lon ? $current_user->lon : '74.0060'; ?>;

let options = {
center: [startlat, startlon],
zoom: 12
}

let map = L.map('map', options);
let nzoom = 12;


L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(map);

let myMarker = L.marker([startlat, startlon], {
title: "Coordinates",
alt: "Coordinates",
draggable: true
}).addTo(map).on('dragend', function () {
let lat = myMarker.getLatLng().lat.toFixed(8);
let lon = myMarker.getLatLng().lng.toFixed(8);
let czoom = map.getZoom();
if (czoom < 18) {
nzoom = czoom + 2;
}
if (nzoom > 18) {
nzoom = 18;
}
if (czoom != 18) {
map.setView([lat, lon], nzoom);
} else {
map.setView([lat, lon]);
}
document.getElementById('lat').value = lat;
document.getElementById('lon').value = lon;
});
<?php endif; ?>
</script>

<script>
    $(document).ready(function() {
        // Fetch the schedule data from the server
        $.ajax({
            url: "/schedule/user/get-schedule",
            success: function (result) {
                $('#schedulingList2').DataTable({
                    scrollX: true,
                    data: result.data,
                    columns: [
                        { data: 'patient_first_name', title: 'Patient First Name' },
                        { data: 'task', title: 'Task' },
                        { data: 'kt_calendar_datepicker_start_date', title: 'Schedule Date' },
                        {
                            data: null,
                            title: 'Assigned To',
                            render: function (data, type, row) {
                                return row.first_name + ' ' + row.last_name;
                            }
                        },
                        {
                            data: 'scheduling_status',
                            title: 'Scheduling Status',
                            orderable: false,
                            render: function (data, type, row) {
                                var statusClasses = {
                                    'scheduled': 'scheduled',
                                    'started': 'started',
                                    'open_shift': 'open_shift',
                                    'no_show': 'no_show',
                                    'on_hold': 'on_hold',
                                    'hospitalization': 'hospitalization',
                                    'completed': 'completed'
                                };
                                var statusClass = statusClasses[data] || 'default-status';
                                return `<div class="rounded-[5px] ${statusClass}">
                                    <span class="text-white block text-center py-[5px] px-[10px] border-none">${data.charAt(0).toUpperCase() + data.slice(1)}</span>
                                </div>`;
                            }
                        },
                        {
                            data: 'id',
                            title: 'Actions',
                            className: "dt-center editor-delete",
                            orderable: false,
                            render: function (data, type, row) {
                                let subscriptionPlanType = "DefaultPlan"; // Default plan type or fetch from row data
                                let buttonsHtml = '';
                                // Add your button logic here
                                // Example:
                                buttonsHtml += `<a href="/task-form/${data}" class="btn btn-primary" target="_blank">Open</a>`;
                                // ...
                                return buttonsHtml;
                            }
                        },
                    ]
                });
            },
            error: function (xhr, status, error) {
                // Handle any errors that occur during the request
                console.error("Error occurred: " + status, error);
            }
        });
    });
</script>

@endsection
