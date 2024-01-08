@extends('layouts.app')
@section('extra_css')
    <link href="{{asset('assets/css/calendar/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/css/calendar/plugin.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/calendar/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/tabs.css')}}" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {{-- <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">  --}}
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endsection
@section('content')
    <style type="text/css">

        .table-top-content-item a {
            background-color: #56aaaf;
            color: #fff;
            padding: 8px 15px;
            border-radius: 10px;
            font-weight: 600;
        }

        .table-top-content {
            margin: 30px 0px;
        }

        .table-top-content-item {
            margin-bottom: 30px;
            text-align: center;
        }

        .user-print-details h2 {
            font-size: 20px;
            font-weight: 800;
        }

        .user-print-details h2 span {
            color: #888;
            font-size: 18px;
            font-weight: 500;
        }

        .table-top-content-item a {
            margin-bottom: 13px;
            display: inline-block;
        }

        tbody, td, tfoot, th, thead, tr {
            border: 1px solid #000;
            padding: 25px 45px;
        }

        .responsive-table thead {
            background-color: #56aaaf;
            color: #fff;
        }

        .responsive-table {
            margin-top: 20px;
        }

        .modal {
            position: fixed !important;
            width: 100% !important;
            background: #00000085 !important;
            box-shadow: none !important;
            max-width: 100% !important;
        }

        #kt_content_container {
            width: 100% !important;
            max-width: 100% !important;
            padding: 20px !important;
        }

        /* invoce section */


        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig canvas {
            width: 100% !important;
            height: auto;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .custom-button {
            display: none; /* Hide the actual radio buttons */
        }

        .custom-label {
            flex: 1;
            padding: 15px;
            cursor: pointer;
            border: 1px solid #3498db;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            text-align: center;
            margin-right: 20px;
        }

        .custom-label.checked {
            background-color: #27ae60;
        }
    </style>
    <main>
        <div class="">
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Card-->
                    <div class="vt card fw-bolder">
                        <!--begin::Card body-->
                        <div class="card-body">
                            <div class="flex items-center flex-wrap gap-[20px] mb-[25px]">
                                <div class=" py-[5px] px-[10px] rounded-[8px] shadow-[0px_0px_10px_#e3e1e1]"><p
                                        class="border-l-[3px] border-[#0000FF] pl-[8px]">Acme Inc</p></div>
                                <div class=" py-[5px] px-[10px] rounded-[8px] shadow-[0px_0px_10px_#e3e1e1]"><p
                                        class="border-l-[3px] border-[#0000FF] pl-[8px]">Acme Inc</p></div>
                                <div class=" py-[5px] px-[10px] rounded-[8px] shadow-[0px_0px_10px_#e3e1e1]"><p
                                        class="border-l-[3px] border-[#0000FF] pl-[8px]">Acme Inc</p></div>
                                <div class=" py-[5px] px-[10px] rounded-[8px] shadow-[0px_0px_10px_#e3e1e1]"><p
                                        class="border-l-[3px] border-[#0000FF] pl-[8px]">Acme Inc</p></div>
                                <div class=" py-[5px] px-[10px] rounded-[8px] shadow-[0px_0px_10px_#e3e1e1]"><p
                                        class="border-l-[3px] border-[#0000FF] pl-[8px]">Acme Inc</p></div>
                            </div>
                            <!--begin::Calendar-->
                            <div id="kt_calendar_app"></div>
                            <!--end::Calendar-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Modals-->
                    <!--begin::Modal - New Product-->
                    <div class="modal fade !max-w-full" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                        <!--begin::Modal dialog-->
                        <div class="modal-dialog next_modal_content modal-dialog-centered mw-650px">
                            <!--begin::Modal content-->
                            <div class="modal-content !mx-auto">
                                <div class="btn btn-icon btn-sm btn-active-icon-primary absolute right-0"
                                     id="kt_modal_add_event_close">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                  transform="rotate(-45 6 17.3137)" fill="black"/>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                  transform="rotate(45 7.41422 6)" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <div id="tabs" class="vt pt-1 fw-bolder">
                                    <ul class=" ">
                                        <li><a href="#main">Main</a></li>
                                        {{-- <li><a href="#invoice">Invoice</a></li>
                                        <li><a href="#tabs-3">Bill Info</a></li>
                                        <li><a href="#tabs-4">Pay Info</a></li>
                                        <li><a href="#tabs-5">Maliage</a></li>
                                        <li><a href="#tabs-6">Payers</a></li>
                                        <li><a href="#tabs-7">Schedule Info</a></li>
                                        <li><a href="#tabs-8">Signatures</a></li> --}}
                                    </ul>
                                    <div id="main">
                                        <form class="form" action="{{ route("schedule.save") }}" method="post"
                                              id="kt_modal_add_event_form">
                                            @csrf
                                            <!--begin::Modal header-->
                                            <input type="hidden" id="schadule_id" name="schadule_id" value=""/>
                                            <div class="modal-header">
                                                <!--begin::Modal title-->
                                                <h2 class="fw-bolder" data-kt-calendar="title">Add Schedule to
                                                    Calendar</h2>
                                                <!--end::Modal title-->
                                                <!--begin::Close-->

                                                <!--end::Close-->
                                            </div>

                                            <div class="container-full mt-2 px-10">
                                                <div class="row">
                                                    <div class="buttons-group !p-0 !w-[430px] flex !items-center !justify-content-between !mx-auto gap-[15px]">
                                                        <button class="btn btn-primary !bg-[#0b5ed7]" type="button"
                                                                id="previousButton">Previous
                                                        </button>
                                                        <input type="radio" name="episode_id" id="current"
                                                               value="current" class="custom-button zw-[120px]" checked>
                                                        <label for="current" class="custom-label checked m-0"
                                                               id="label-current"
                                                               onclick="selectCustomButton('current')">
                                                            <!-- Placeholder for current date range -->
                                                        </label>
                                                        <button class="btn btn-primary !bg-[#0b5ed7]" type="button"
                                                                id="nextButton">Next
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body py-10 px-lg-17">
                                                <!--begin::Input group-->
                                                <div class="row row-cols-lg-1 g-10">
                                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                                        <label class="fs-6 fw-bold mb-2 required flex-shrink">Start
                                                            Date: </label>
                                                        <div class="">
                                                            <div class="fv-row mb-[20px]">
                                                                <input class="form-control form-control-solid"
                                                                       type="datetime-local"
                                                                       id="kt_calendar_datepicker_start_date"
                                                                       name="kt_calendar_datepicker_start_date">
                                                            </div>
                                                        </div>
                                                        <label class="fs-6 fw-bold mb-2 required flex-shrink">End
                                                            Date:</label>
                                                        <div class="">
                                                            <div class="fv-row w-full">
                                                                <input class="form-control form-control-solid"
                                                                       type="datetime-local"
                                                                       id="kt_calendar_datepicker_end_date"
                                                                       name="kt_calendar_datepicker_end_date">
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col gap-[20px] items-start">
                                                            <div class="total_hrs flex items-center justify-center">
                                                                00:00hrs
                                                                <div class="hq_section">
                                                                    <div>
                                                                        <input type="checkbox" value="hq" name="hq"
                                                                               id="hq"/>
                                                                        <label for="hq">HQ</label>
                                                                    </div>
                                                                    <div>
                                                                        <input id="u2" type="checkbox" value="u2"
                                                                               name="u2"/>
                                                                        <label for="u2">U2</label>
                                                                    </div>
                                                                    <div>
                                                                        <input id="u3" type="checkbox" value="u3"
                                                                               name="u3"/>
                                                                        <label for="u3">U3</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="week_lists flex-wrap">
                                                                <div>
                                                                    <input type="checkbox" value="sun" name="sun"
                                                                           id="sun"/>
                                                                    <label for="sun">Sun</label>
                                                                </div>
                                                                <div>
                                                                    <input id="mon" type="checkbox" value="mon"
                                                                           name="mon"/>
                                                                    <label for="mon">Mon</label>
                                                                </div>
                                                                <div>
                                                                    <input id="tue" type="checkbox" value="tue"
                                                                           name="tue"/>
                                                                    <label for="tue">Tue</label>
                                                                </div>
                                                                <div>
                                                                    <input id="wed" type="checkbox" value="wed"
                                                                           name="wed"/>
                                                                    <label for="wed">Wed</label>
                                                                </div>
                                                                <div>
                                                                    <input id="thu" type="checkbox" value="thu"
                                                                           name="thu"/>
                                                                    <label for="thu">Thu</label>
                                                                </div>
                                                                <div>
                                                                    <input id="fri" type="checkbox" value="fri"
                                                                           name="fri"/>
                                                                    <label for="fri">Fri</label>
                                                                </div>
                                                                <div>
                                                                    <input id="sat" type="checkbox" value="sat"
                                                                           name="sat"/>
                                                                    <label for="sat">Sat</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="select_wrapper">
                                                            <div>
                                                                <label>Patient: </label>
                                                                <select name="patient_id" required
                                                                        onchange="updateMiNo(this)" id="patient">
                                                                    <option value="">Select patient</option>
                                                                    @foreach($patients as $patient)
                                                                        <option value="{{ $patient->id }}"
                                                                                data-mi_no="{{ $patient->mi_no }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            {{--                                                            <div class="">--}}
                                                            {{--                                                                <label>MR No: </label>--}}
                                                            {{--                                                                <div class="select_group">--}}
                                                            {{--                                                                    <select name="mi_no" id="mi_no_select"></select>--}}
                                                            {{--                                                                    <select id="client_assess" name="client_assess" required>--}}
                                                            {{--                                                                        <option value="">Select client assess</option>--}}
                                                            {{--                                                                        <option value="hha-visit-note">HHA Visit Note</option>--}}
                                                            {{--                                                                        <option value="oasis-e-discharge">OASIS-E Discharge</option>--}}
                                                            {{--                                                                        <option value="oasis-e-recertification">OASIS-E Recertification</option>--}}
                                                            {{--                                                                        <option value="oasis-e-resumption-of-care">OASIS-E Resumption OF Care</option>--}}
                                                            {{--                                                                        <option value="oasis-e-start-of-care">OASIS-E Start of Care</option>--}}
                                                            {{--                                                                        <option value="non-oasis-soc">NON Oasis SOC</option>--}}
                                                            {{--                                                                        <option value="nursing-visit-note">Nursing Visit Note</option>--}}
                                                            {{--                                                                        <option value="otdischarge-summary">OT Discharge Summary</option>--}}
                                                            {{--                                                                        <option value="patient-recertification">Patient Recertification</option>--}}
                                                            {{--                                                                        <option value="physician-order">Physician order</option>--}}
                                                            {{--                                                                        <option value="plan-of-care">Plan Of Care</option>--}}
                                                            {{--                                                                        <option value="post-fall-evaluation">Post Fall Evaluation</option>--}}
                                                            {{--                                                                        <option value="referral-intake">Referral Intake</option>--}}
                                                            {{--                                                                    </select>--}}
                                                            {{--                                                                </div>--}}
                                                            {{--                                                            </div>--}}
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
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                                        <div class="row row-cols-lg-1 g-10">
                                                            <div>
                                                                <label>Task: </label>
                                                                <select id="task" name="task" required>
                                                                    {{--                                                                        <option value="">Select task</option>--}}
                                                                    {{--                                                                        <option value="hha-visit-note">HHA Visit Note</option>--}}
                                                                    {{--                                                                        <option value="oasis-e-discharge">OASIS-E Discharge</option>--}}
                                                                    {{--                                                                        <option value="oasis-e-recertification">OASIS-E Recertification</option>--}}
                                                                    {{--                                                                        <option value="oasis-e-resumption-of-care">OASIS-E Resumption OF Care</option>--}}
                                                                    {{--                                                                        <option value="oasis-e-start-of-care">OASIS-E Start of Care</option>--}}
                                                                    {{--                                                                        <option value="non-oasis-soc">NON Oasis SOC</option>--}}
                                                                    {{--                                                                        <option value="nursing-visit-note">Nursing Visit Note</option>--}}
                                                                    {{--                                                                        <option value="otdischarge-summary">OT Discharge Summary</option>--}}
                                                                    {{--                                                                        <option value="patient-recertification">Patient Recertification</option>--}}
                                                                    {{--                                                                        <option value="physician-order">Physician order</option>--}}
                                                                    {{--                                                                        <option value="plan-of-care">Plan Of Care</option>--}}
                                                                    {{--                                                                        <option value="post-fall-evaluation">Post Fall Evaluation</option>--}}
                                                                    {{--                                                                        <option value="referral-intake">Referral Intake</option>--}}
                                                                    @if($tasks)
                                                                        @foreach($tasks as $task)
                                                                            @php
                                                                                var_dump($task);
                                                                            @endphp
                                                                            <option
                                                                                value="{{ $task->name }}">{{ $task->name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label>Service: </label>
                                                                <select id="sc_sub_addon_id" name="sc_sub_addon_id"
                                                                        required>
                                                                    <option value="">Select service</option>
                                                                    @foreach($service_codes as $service_code)
                                                                        <option
                                                                            value="{{ $service_code->id }}">{{ $service_code->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="">
                                                                <div>
                                                                    <label>Rate Type: </label>
                                                                    <select id="bill_unit_type" name="bill_unit_type"
                                                                            required>
                                                                        <option value="15">Units</option>
                                                                        <option value="1">Hourly</option>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <label>User Rate: </label>
                                                                    <input class="form-control" id="user_rate"
                                                                           name="user_rate" type="number" min="0"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                                        <div>
                                                            <label>Mileage Rate: </label>
                                                            <input class="form-control" id="mileage_rate"
                                                                   name="mileage_rate" type="number" min="0"/>
                                                        </div>
                                                        <div class="mt-[20px]">
                                                            <label>Pay Unit Type: </label>
                                                            <select id="pay_unit_type" name="pay_unit_type"
                                                                    required>
                                                                <option value="15">Units</option>
                                                                <option value="1">Hourly</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Status: </label>
                                                            <select id="scheduling_status"
                                                                    name="scheduling_status" required>
                                                                <option value="">Select status</option>
                                                                <option value="scheduled">Scheduled</option>
                                                                <option value="started">Started</option>
                                                                <option value="open_shift">Open Shift</option>
                                                                <option value="no_show">Missed Visit</option>
                                                                <option value="on_hold">On Hold</option>
                                                                <option value="hospitalization">
                                                                    Hospitalization
                                                                </option>
                                                                <option value="completed">Completed</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Primary Payer: </label>
                                                            <select id="payor_sub_addon_id"
                                                                    name="payor_sub_addon_id" required>
                                                                <option value="">Select Payer</option>
                                                                @foreach($payors as $payor)
                                                                    <option
                                                                        value="{{ $payor->id }}">{{ $payor->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label>Note:</label>
                                                            <textarea class="form-control" id="scheduling_notes"
                                                                      name="scheduling_notes" cols="4"
                                                                      required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                                        <div class="next_modal_action_buttons">
                                                            <button id="save_event_data" type="button">Ok</button>
                                                            <button id="cancel_event_data" type="button">Cancel</button>
                                                            <button id="rec_event_data" type="button">Repeat</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Modal body-->
                                        </form>
                                    </div>
                                    <div id="invoice">
                                        
                                    </div>
                                </div><!----Invoice Ends---->

                                {{-- <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3 mt-5">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Signature pad</h5>
                                                </div>
                                                <div class="card-body">
                                                     @if ($message = Session::get('success'))
                                                         <div class="alert alert-success  alert-dismissible">
                                                             <button type="button" class="close" data-dismiss="alert">×</button>
                                                             <strong>{{ $message }}</strong>
                                                         </div>
                                                     @endif
                                                     <form method="POST" action="{{ route('signaturepad.upload') }}">
                                                         @csrf
                                                         <div class="col-md-12">
                                                             <label class="" for="">Sign Here:</label>
                                                             <br/>
                                                             <div id="sig" ></div>
                                                             <br/>
                                                             <button id="clear" class="btn btn-danger btn-sm mt-3">Clear Signature</button>
                                                             <textarea id="signature64" name="signed" style="display: none"></textarea>
                                                         </div>
                                                         <br/>
                                                         <button class="btn btn-success">Save</button>
                                                     </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div> <!----Signature Ends----> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <button id="open_kt_modal_add_new_event" class="goto_mongol">Opne modal</button>
                <div class="modal fade" id="kt_modal_add_event_prev" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content vt">
                            <h2 class="font-[500] text-center text-[25px]">Add Schedule to Calendar</h2>
                            <div class="modal-body py-10 px-lg-17">
                                <div class="prev_modal">
                                    <div class="select_box">
                                        <div>
                                            <label class="text-[18px] font-[400]">Patient: </label>
                                            <select data-kt-calendar="type">
                                                <option value="type">Client</option>
                                                @foreach($patients as $patient)
                                                    <option value="{{ $patient->id }}"
                                                            data-mi_no="{{ $patient->mi_no }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <label class="text-[18px] font-[400]">Employee: </label>
                                            <select data-kt-calendar="name">
                                                <option value="name">Employee</option>
                                                @foreach($employees as $employee)
                                                    <option
                                                        value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="button_wrapper">
                                        <button type="button" id="submit_button"
                                                class="submit_to_next_modal text-[18px] h-[56px]">Ok
                                        </button>
                                        <button type="button" class="cancle_prev_modal text-[18px] h-[56px]">Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--end::Modal - New Product-->
                <!--begin::Modal - New Product-->
                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centeon-holdred mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header border-0 justify-content-end">
                                          <!--begin::recycle-->
                                          <div class=" btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                          data-bs-toggle="tooltip" data-bs-dismiss="click" title="recycle Event"
                                          id="kt_modal_view_event_recycle" onclick="recycleWeeklySchedule()">
                                         <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                         <span class="svg-icon svg-icon-2">
                                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                              viewBox="0 0 24 24" fill="none">
                                                             <path opacity="0.3"
                                                                   d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                   fill="black"/>
                                                             <path
                                                                 d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                 fill="black"/>
                                                         </svg>
                                                     </span>
                                         <!--end::Svg Icon-->
                                     </div>
                                <!--begin::Edit-->
                                <div class=" btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                     data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event"
                                     id="kt_modal_view_event_edit" onclick="editWeeklySchedule()">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                              d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                              fill="black"/>
                                                        <path
                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                            fill="black"/>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Edit-->
                                <div
                                    class="deleteEvent btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event"
                                    id="kt_modal_view_event_delete">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                            fill="black"/>
                                                        <path opacity="0.5"
                                                              d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                              fill="black"/>
                                                        <path opacity="0.5"
                                                              d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                              fill="black"/>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Edit-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
                                     data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                              rx="1"
                                                              transform="rotate(-45 6 17.3137)" fill="black"/>
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                              transform="rotate(45 7.41422 6)" fill="black"/>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                <!--begin::Row-->
                                <div class="d-flex items-center mb-[20px]">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                              d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                              fill="black"/>
                                                        <path
                                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                            fill="black"/>
                                                        <path
                                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                            fill="black"/>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <div>
                                        <!--begin::Event name-->
                                        <input type="hidden" name="event_id" id="event_id" value="">
                                        <div class="d-flex align-items-center">
                                                <span class="fs-3 me-3 text-[14px] font-[700]"
                                                      data-kt-calendar="event_name"></span>
                                        </div>
                                        <!--end::Event name-->
                                        <!--begin::Event description-->
                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                        <!--end::Event description-->
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                         viewBox="0 0 24 24" version="1.1">
                                                        <circle fill="#000000" cx="12" cy="12" r="8"/>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event start date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Starts</span>
                                        <span data-kt-calendar="event_start_date"></span>
                                    </div>
                                    <!--end::Event start date/time-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="d-flex align-items-center mb-9">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                         viewBox="0 0 24 24" version="1.1">
                                                        <circle fill="#000000" cx="12" cy="12" r="8"/>
                                                    </svg>
                                                </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Event end date/time-->
                                    <div class="fs-6">
                                        <span class="fw-bolder">Ends</span>
                                        <span data-kt-calendar="event_end_date"></span>
                                    </div>
                                    <!--end::Event end date/time-->
                                </div>
                                <!--end::Row-->
                                {{--                                    <!--begin::Row-->--}}
                                {{--                                    <div class="d-flex align-items-center">--}}
                                {{--                                        <!--begin::Icon-->--}}
                                {{--                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->--}}
                                {{--                                        <span class="svg-icon svg-icon-1 svg-icon-muted me-5">--}}
                                {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
                                {{--                                                         viewBox="0 0 24 24" fill="none">--}}
                                {{--                                                        <path opacity="0.3"--}}
                                {{--                                                              d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"--}}
                                {{--                                                              fill="black"/>--}}
                                {{--                                                        <path--}}
                                {{--                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"--}}
                                {{--                                                            fill="black"/>--}}
                                {{--                                                    </svg>--}}
                                {{--                                                </span>--}}
                                {{--                                        <!--end::Svg Icon-->--}}
                                {{--                                        <!--end::Icon-->--}}
                                {{--                                        <!--begin::Event location-->--}}
                                {{--                                        <div class="fs-6" data-kt-calendar="event_location"></div>--}}
                                {{--                                        <!--end::Event location-->--}}
                                {{--                                    </div>--}}
                                <!--end::Row-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - New Product-->
                <button id="open_kt_modal_view_event" class="goto_mongol">Opne modal</button>
                <!--end::Modals-->
                <div class="modal fade" id="kt_modal_delete">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <h2 class="fw-bolder">Select Event To Delete Events</h2>
                            <div id="event_lists"></div>
                            <button class="btn btn-danger delete_submit" id="delete_submit">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        </div>
    </main>
@endsection

@section('extra_js')
    <script src="{{asset('assets/js/plugins/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scripts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/plugins/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <script src="{{asset('assets/js/calendar/calendar.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    {{--    <script>--}}
    {{--        function selectCustomButton(id) {--}}
    {{--            // Uncheck all buttons--}}
    {{--            document.querySelectorAll('.custom-button').forEach(btn => {--}}
    {{--                btn.checked = false;--}}
    {{--            });--}}

    {{--            // Check the clicked button--}}
    {{--            document.getElementById(id).checked = true;--}}

    {{--            // Update the styling--}}
    {{--            document.querySelectorAll('.custom-label').forEach(label => {--}}
    {{--                label.classList.remove('checked');--}}
    {{--            });--}}

    {{--            document.querySelector(`[for="${id}"]`).classList.add('checked');--}}
    {{--        }--}}
    {{--    </script>--}}

    <script>
        let patientEpisodeDates = '';

        function reset_modal_input() {
            $('#kt_calendar_datepicker_start_date, #kt_calendar_datepicker_end_date, #patient, #employee, #task, #sc_sub_addon_id, #bill_unit_type, #pay_unit_type, #scheduling_status, #payor_sub_addon_id, #scheduling_notes').val('');
            $('#mi_no_select').append();
            $('.total_hrs').text(`00 H : 00 M`);
        }

        //edit schedule functionality
        function editWeeklySchedule(id) {
            $.ajax({
                url: "/schedule/get-edit-weekly-schedule",
                type: "POST",
                data: {id: id},
                success: function (data) {
                    if (data.schedule === null) {
                        return;
                    }
                    $('#schadule_id').val(data.schedule.id);
                    $('#save_event_data').empty();
                    $('#save_event_data').append('Update');
                    $('#patient').val(data.schedule.patient_id);

                    // $('#client_assess').val(data.schedule.client_assess);
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

                    let originalDateTimeStart = data.schedule.kt_calendar_datepicker_start_date + "T" + data.schedule.start_time;
                    let originalDateTimeEnd = data.schedule.kt_calendar_datepicker_end_date + "T" + data.schedule.end_time;


                    if(data.schedule.kt_calendar_datepicker_start_date !== '') {
                        const inputStartDate = data.schedule.kt_calendar_datepicker_start_date;
                        const formattedStartDate = moment(inputStartDate).format('MM/DD/YYYY');

                        const inputEndDate = data.schedule.kt_calendar_datepicker_end_date;
                        const formattedEndDate = moment(inputEndDate).format('MM/DD/YYYY');

                        patientEpisodeDates = {
                            currentDate: {
                                end: formattedEndDate,
                                start: formattedStartDate
                            },
                            nextDate: {
                                end: '',
                                start: '',
                            },
                            previousDate: {
                                end: '',
                                start: '',
                            }
                        };

                        updateDateLabels(patientEpisodeDates);
                    }

                    let start_date = $('#kt_calendar_datepicker_start_date');
                    let end_date = $('#kt_calendar_datepicker_end_date');
                    start_date.val(originalDateTimeStart);
                    end_date.val(originalDateTimeEnd);

                    let m1 = moment(originalDateTimeStart);
                    let m2 = moment(originalDateTimeEnd);

                    let duration = moment.duration(m1.diff(m2));
                    let hours = duration.hours();
                    let minutes = duration.minutes();
                    $('.total_hrs').text(`${Math.abs(hours)} H : ${Math.abs(minutes)} M`);
                }
            });
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

        $(document).ready(function () {
            $('#submit_button').click(function () {
                var selectedPatientId = $('[data-kt-calendar="type"]').val();
                var selectedEmployeeId = $('[data-kt-calendar="name"]').val();

                if (selectedPatientId !== 'type' && selectedEmployeeId !== 'name') {
                    $('#patient').val(selectedPatientId);
                    updateMiNo($('#patient')[0]); // Trigger the change event to update mi_no_select
                    $('#employee').val(selectedEmployeeId);
                } else if (selectedPatientId !== 'type') {
                    $('#patient').val(selectedPatientId);
                    updateMiNo($('#patient')[0]); // Trigger the change event to update mi_no_select
                    $('#employee').val('');
                } else if (selectedEmployeeId !== 'name') {
                    $('#employee').val(selectedEmployeeId);
                    $('#patient').val('');
                    $('#mi_no_select').val('');
                } else {
                    $('#patient').val('');
                    $('#employee').val('');
                    $('#mi_no_select').empty(); // Empty mi_no_select options
                }
            });

            $('#nextButton').click(function () {
                const givenDate = moment(patientEpisodeDates.currentDate.end, 'MM/DD/YYYY');
                const addedDate = givenDate.add(60, 'days');
                if (addedDate.format('MM/DD/YYYY') !== 'invalid date') {
                    patientEpisodeDates = {
                        currentDate: {
                            end: addedDate.format('MM/DD/YYYY'),
                            start: patientEpisodeDates.currentDate.end
                        },
                        nextDate: {
                            end: '',
                            start: '',
                        },
                        previousDate: {
                            end: '',
                            start: '',
                        }
                    };
                    updateDateLabels(patientEpisodeDates);
                }
            });

            $('#previousButton').click(function () {
                const givenDate = moment(patientEpisodeDates.currentDate.start, 'MM/DD/YYYY');
                const addedDate = givenDate.subtract(60, 'days');
                if (addedDate.format('MM/DD/YYYY') !== 'invalid date') {
                    patientEpisodeDates = {
                        currentDate: {
                            end: patientEpisodeDates.currentDate.start,
                            start: addedDate.format('MM/DD/YYYY')
                        },
                        nextDate: {
                            end: '',
                            start: '',
                        },
                        previousDate: {
                            end: '',
                            start: '',
                        }
                    };
                    updateDateLabels(patientEpisodeDates);
                }
            });
        });

        function updateMiNo(select) {
            var miNoSelect = $('#mi_no_select');
            miNoSelect.empty(); // Empty mi_no_select options

            var selectedPatientId = $(select).val();
            var selectedMiNo = $(select).find('option:selected').data('mi_no');

            if (selectedPatientId !== '') {
                // If a patient is selected, update mi_no_select with the corresponding options
                miNoSelect.append('<option value="' + selectedMiNo + '">' + selectedMiNo + '</option>');
                miNoSelect.val(selectedMiNo); // Select the updated option
            }
        }


        $(function () {
            $("#tabs").tabs();

            $('.submit_to_next_modal').click(function () {
                $('#kt_modal_add_event_prev').modal('hide');
                reset_modal_input();
                $('#kt_modal_add_event').modal('show');
            });

            $('.cancle_prev_modal').click(function () {
                $('#kt_modal_add_event_prev').modal('hide');
                $('#schadule_id').val('');
            })

            $('#open_kt_modal_view_event').click(function () {
                $('#kt_modal_view_event').modal('show')
            });

            $('#open_kt_modal_add_new_event').click(function () {
                $('#kt_modal_add_event_prev').modal('show');
                reset_modal_input();
                $('#schadule_id').val('');
            });

            $('.deleteEvent').click(function () {
                $('#kt_modal_view_event').modal('hide')
                $('#kt_modal_delete').modal('show');
            });

            $('#kt_modal_add_event_close').click(function () {
                $('#kt_modal_add_event').modal('hide');
                $('.week_lists').fadeOut();
                reset_modal_input();
                $('#schadule_id').val('');
            });
            $('#kt_modal_view_event_recycle').click(function () {
                $('#kt_modal_view_event').modal('hide');
                $('#kt_modal_add_event').modal('show');
                const id = $("#events_id").val();
                recycleSchedule(id);
                reset_modal_input();
                $('#schadule_id').val('');
            });


            $('#kt_modal_view_event_edit').click(function () {
                $('#kt_modal_view_event').modal('hide');
                $('#kt_modal_add_event').modal('show');
                const id = $("#event_id").val();
                editWeeklySchedule(id);
                reset_modal_input();
                $('#schadule_id').val('');
            });

            $('#cancel_event_data').click(function () {
                $('#kt_modal_add_event').modal('hide');
                $('.week_lists').fadeOut();
                reset_modal_input();
                $('#schadule_id').val('');
            });

            $('#rec_event_data').click(function () {
                $('.week_lists').css("display", "flex").fadeIn();
            });
        });

        // kt_calendar_datepicker_start_date
        $(document).ready(function () {

            let dtToday = new Date();
            let month = dtToday.getMonth() + 1;
            let day = dtToday.getDate();
            let year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();
            let maxDate = month + '-' + day + '-' + year;
            $('#kt_calendar_datepicker_start_date').attr('min', maxDate);

            // End date

            let endDatedtToday = new Date();
            let endDateMonth = endDatedtToday.getMonth() + 1;
            let endDateDay = endDatedtToday.getDate();
            let endDateYear = endDatedtToday.getFullYear();
            if (endDateMonth < 10)
                endDateMonth = '0' + endDateMonth.toString();
            if (endDateDay < 10)
                endDateDay = '0' + endDateDay.toString();
            let endDateMaxDate = endDateYear + '-' + endDateMonth + '-' + endDateDay;
            $('#kt_calendar_datepicker_end_date').attr('min', endDateMaxDate);

            $('#kt_calendar_datepicker_start_date').on('change', function () {
                let endDate = $('#kt_calendar_datepicker_end_date').val();
                let startDate = $(this).val();
                if (startDate && endDate) {
                    checkDateChange(startDate, endDate);
                }
            });

            function checkDateRangeValid(startDate, endDate, findingDate) {
                // Define the date range
                const givenStartDate = moment(startDate, 'MM/DD/YYYY');
                const givenEndDate = moment(endDate, 'MM/DD/YYYY');

                // Define the date to check
                const checkDate = moment(findingDate, 'MM/DD/YYYY');

                // Check if the date is within the range
                if(checkDate.isSameOrBefore(givenEndDate) && checkDate.isSameOrAfter(givenStartDate)) {
                    return true;
                }

                return checkDate.isBetween(givenStartDate, givenEndDate);
            }

            $("#save_event_data").click(function () {
                let startDate = $('#kt_calendar_datepicker_start_date').val();
                let endDate = $('#kt_calendar_datepicker_end_date').val();

                // console.log(startDate)
                const formattedStartDate = moment(startDate).format("MM/DD/YYYY");
                const formattedEndDate = moment(endDate).format("MM/DD/YYYY");

                let currentStartDate = patientEpisodeDates.currentDate.start;
                let endCurrentDate = patientEpisodeDates.currentDate.end;

                if(checkDateChange(startDate, endDate) && (checkDateRangeValid(currentStartDate, endCurrentDate, formattedStartDate) && checkDateRangeValid(currentStartDate, endCurrentDate, formattedEndDate))) {
                    $("#kt_modal_add_event_form").submit(); // Submit the form
                } else {
                    Swal.fire({
                        title: 'Date is not valid',
                        text: "Please set date between " + currentStartDate + " to " + endCurrentDate,
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });

            $('#kt_calendar_datepicker_end_date').on('change', function () {
                let startDate = $('#kt_calendar_datepicker_start_date').val();
                let endDate = $(this).val();
                if (startDate && endDate) {
                    checkDateChange(startDate, endDate);
                }
            });

            function checkDateChange(startDate = null, endDate = null) {
                if (startDate && endDate) {
                    if (!checkDate(startDate, endDate)) {
                        Swal.fire({
                            title: 'Date is not valid',
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                        return false;
                    }
                    const startNewDate = new Date(startDate);
                    const endNewDate = new Date(endDate);

                    // Calculate the difference in milliseconds
                    const timeDiff = endNewDate - startNewDate;

                    // Calculate total hours
                    const totalHours = Math.floor(timeDiff / (1000 * 60 * 60));

                    // Calculate the remaining minutes after calculating the hours
                    const remainingMinutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));

                    $('.total_hrs').text(`${Math.abs(totalHours)} H : ${Math.abs(remainingMinutes)} M`);

                    return true;
                } else {
                    alert('Please select start date and end date');
                    return false;
                }
            }

            function checkDate(start, end) {
                let mStart = moment(start);
                let mEnd = moment(end);
                return mStart.isBefore(mEnd);
            }
        });
    </script>

    <script>
        document.getElementById('patient').addEventListener('change', function () {
            var patientId = this.value;
            // Make sure this URL is correct and points to your Laravel application route
            var url = '/get-dates/' + patientId;
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    patientEpisodeDates = data;
                    updateDateLabels(data);
                })
                .catch(error => {
                    console.error('Error fetching dates:', error);
                });
        });

        function updateDateLabels(dates) {
            // document.getElementById('label-previous').textContent = formatDateRange(dates.previousDate);
            document.getElementById('label-current').textContent = formatDateRange(dates.currentDate);
            // document.getElementById('label-future').textContent = formatDateRange(dates.nextDate);
        }

        function formatDateRange(dateRange) {
            return dateRange.start && dateRange.end ? `${dateRange.start} to ${dateRange.end}` : '';
        }

    </script>

@endsection