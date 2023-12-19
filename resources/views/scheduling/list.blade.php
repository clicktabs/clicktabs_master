@extends('layouts.app')
@section('extra_css')
    <link href="{{asset('assets/css/calendar/style.css')}}" rel="stylesheet" type="text/css"/>
    <style>
        .dataTables_wrapper .dataTables_length select {
            width: 120px;
        }

        #listEditModal {
            display: none;
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
        .dataTables_length {

        }
        .dataTables_length label {
            width: 220px;
            display: flex;
            align-items: center;
            margin: 0 auto;
        }
        .dataTables_length label select {
            margin: 0 20px;
        }
    </style>
@endsection
@section('content')
    <main class=" vs jj ttm vl ou uf na">
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
                            <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                        <g transform="rotate(44 61.546 392.623)">
                            <mask id="welcome-h" fill="#fff">
                                <use xlink:href="#welcome-g"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <!-- Content -->
            <div class="y">
                <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Schedules List</h1>
            </div>

        </div>
        <div class="bg-white bd rounded-sm border border-slate-200 container-fluid pt-[50px] pb-[80px]">
            <table class="client_table ux ou display nowrap" style="width:100%" id="schedulingList">
                <thead class="bg-[#4133BF] text-[#fff]">
                <tr>
                    <th>Employee Name</th>
                    <th>Patient Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Status</th>
                    <th class="action">Action</th>
                </tr>
            </thead>
            </table>
            <div class="modal fade !max-w-full" id="kt_modal_add_event_form" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog next_modal_content modal-dialog-centered relative">
                    <!--begin::Modal content-->
                    <div class="modal-content">
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
                        <form class="form" action="{{ route("schedule.save") }}" method="post" id="scheduleForm">
                            @csrf
                            @method('PUT')
                            <!--begin::Modal header-->
                            <input type="hidden" id="schadule_id" name="schadule_id" value="" />
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
                                        <label class="fs-6 fw-bold mb-2 required flex-shrink">Start Date: </label>
                                        <div class="d-flex items-center gap-4">
                                            <div class="fv-row mb-9">
                                                <input class="form-control form-control-solid" type="datetime-local" id="kt_calendar_datepicker_start_date" name="kt_calendar_datepicker_start_date">
                                            </div>
                                        </div>
                                        <label class="fs-6 fw-bold mb-2 required flex-shrink">End Date:</label>
                                        <div class="d-flex items-center gap-4 mb-2">
                                            <div class="fv-row w-full">
                                                <input class="form-control form-control-solid" type="datetime-local" id="kt_calendar_datepicker_end_date" name="kt_calendar_datepicker_end_date">
                                            </div>
                                        </div>
                                        <div class="flex gap-[20px] items-center">
                                            <div class="total_hrs flex items-center justify-center">
                                                00:00hrs
                                                <div class="hq_section">
                                                    <div>
                                                        <input type="checkbox" value="hq" name="hq" id="hq" />
                                                        <label for="hq">HQ</label>
                                                    </div>
                                                    <div>
                                                        <input id="u2" type="checkbox" value="u2" name="u2" />
                                                        <label for="u2">U2</label>
                                                    </div>
                                                    <div>
                                                        <input id="u3" type="checkbox" value="u3" name="u3" />
                                                        <label for="u3">U3</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="week_lists flex-wrap">
                                                <div>
                                                    <input type="checkbox" value="sun" name="sun" id="sun" />
                                                    <label for="sun">Sun</label>
                                                </div>
                                                <div>
                                                    <input id="mon" type="checkbox" value="mon" name="mon" />
                                                    <label for="mon">Mon</label>
                                                </div>
                                                <div>
                                                    <input id="tue" type="checkbox" value="tue" name="tue" />
                                                    <label for="tue">Tue</label>
                                                </div>
                                                <div>
                                                    <input id="wed" type="checkbox" value="wed" name="wed" />
                                                    <label for="wed">Wed</label>
                                                </div>
                                                <div>
                                                    <input id="thu" type="checkbox" value="thu" name="thu" />
                                                    <label for="thu" >Thu</label>
                                                </div>
                                                <div>
                                                    <input id="fri" type="checkbox" value="fri" name="fri" />
                                                    <label for="fri" >Fri</label>
                                                </div>
                                                <div>
                                                    <input id="sat" type="checkbox" value="sat" name="sat" />
                                                    <label for="sat">Sat</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_wrapper">
                                            <div>
                                                <label>Patient: </label>
                                                <select name="patient_id" required onchange="updateMiNo(this)" id="patient">
                                                    <option value="">Select patient</option>
                                                    @foreach($patients as $patient)
                                                        <option value="{{ $patient->id }}" data-mi_no="{{ $patient->mi_no }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <label>Caregiver: </label>
                                                <select name="employee_id" required id="employee">
                                                    <option value="">Select caregiver</option>
                                                    @foreach($employees as $employee)
                                                        <option value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <label>Task: </label>
                                                <select id="task" name="task" required>
                                                    @if($tasks)
                                                        @foreach($tasks as $task)
                                                            @php
                                                                var_dump($task);
                                                            @endphp
                                                            <option value="{{ $task->name }}">{{ $task->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="row row-cols-lg-1 g-10">
                                            <div class="select_wrapper">
                                                <div>
                                                    <label>Service: </label>
                                                    <select id="sc_sub_addon_id" name="sc_sub_addon_id" required>
                                                        <option value="">Select service</option>
                                                        @foreach($service_codes as $service_code)
                                                            <option value="{{ $service_code->id }}">{{ $service_code->name }}</option>
                                                        @endforeach
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
                                                    <select id="scheduling_status" name="scheduling_status" required>
                                                        <option value="">Select status</option>
                                                        <option value="scheduled">Scheduled</option>
                                                        <option value="started">Started</option>
                                                        <option value="open_shift">Open Shift</option>
                                                        <option value="missed_visit">Missed Visit</option>
                                                        <option value="on_hold">On Hold</option>
                                                        <option value="hospitalization">Hospitalization</option>
                                                        <option value="completed">Completed</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label>Primary Payer: </label>
                                                    <select id="payor_sub_addon_id" name="payor_sub_addon_id" required>
                                                        <option value="">Select Payer</option>
                                                        @foreach($payors as $payor)
                                                            <option value="{{ $payor->id }}">{{ $payor->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label>Note:</label>
                                                    <textarea class="form-control" id="scheduling_notes" name="scheduling_notes" cols="4" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12">
                                        <div class="next_modal_action_buttons">
                                            <button id="save_event_data" type="submit">Ok</button>
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
    </main>
@endsection
@section('extra_js')
    <script>
        $(document).ready(function () {
            function reset_modal_input() {
                $('#kt_calendar_datepicker_start_date, #kt_calendar_datepicker_end_date, #patient, #client_assess, #employee, #task, #sc_sub_addon_id, #bill_unit_type, #pay_unit_type, #scheduling_status, #payor_sub_addon_id, #scheduling_notes').val('');
                $('#mi_no_select').append();
                $('.total_hrs').text(`00 H : 00 M`);
            }
            function editWeeklySchedule(id){
                $.ajax({
                    url: "/schedule/get-edit-weekly-schedule",
                    type: "POST",
                    data: {id:id},
                    success: function(data){
                        if(data.schedule === null) {
                            return;
                        }
                        $('#schadule_id').val(data.schedule.id);
                        $('#save_event_data').empty();
                        $('#save_event_data').append('Update');
                        $('#patient').val(data.schedule.patient_id);
                        $('#mi_no_select').append($('<option>', {
                            value: data.schedule.mi_no,
                            text : data.schedule.mi_no
                        }));

                        $('#client_assess').val(data.schedule.client_assess);
                        $('#employee').val(data.schedule.employee_id);
                        $('#task').val(data.schedule.task);
                        $('#sc_sub_addon_id').val(data.schedule.sc_sub_addon_id);
                        $('#bill_unit_type').val(data.schedule.bill_unit_type);
                        $('#pay_unit_type').val(data.schedule.pay_unit_type);
                        $('#scheduling_status').val(data.schedule.scheduling_status);
                        $('#payor_sub_addon_id').val(data.schedule.payor_sub_addon_id);
                        $('#scheduling_notes').val(data.schedule.scheduling_notes);

                        let originalDateTimeStart = data.schedule.kt_calendar_datepicker_start_date+"T"+data.schedule.start_time;
                        let startLocalDate = moment(originalDateTimeStart, "MM-DD-YYYY HH:mm:ss").format("MM-DD-YYYY[T]HH:mm");

                        let originalDateTimeEnd = data.schedule.kt_calendar_datepicker_end_date+"T"+data.schedule.end_time;
                        let endLocalDate = moment(originalDateTimeEnd, "MM-DD-YYYY HH:mm:ss").format("MM-DD-YYYY[T]HH:mm");

                        let start_date = $('#kt_calendar_datepicker_start_date');
                        let end_date = $('#kt_calendar_datepicker_end_date');

                        start_date.val(originalDateTimeStart);
                        end_date.val(originalDateTimeEnd);

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
                    {
                        data: null,
                        orderable: true,
                        render: function (data, type, row) {
                            return row.first_name + ' ' + row.last_name;
                        }
                    },
                    {
                        data: null,
                        orderable: true,
                        render: function (data, type, row) {
                            return row.patient_first_name + ' ' + row.patient_last_name;
                        }
                    },
                    { data: 'kt_calendar_datepicker_start_date'},
                    { data: 'kt_calendar_datepicker_end_date'},
                    { data: 'start_time'},
                    { data: 'end_time'},
                    { data: 'scheduling_status',
                        orderable: false,
                        "mRender" : function ( data, type, row ) {
                            return `<div class="rounded-[5px] ${data === 'scheduled' ? 'scheduled' : data === 'started' ? 'started' : data === 'open_shift' ? 'open_shift' : data === 'missed_visit' ? 'missed_visit' : data === 'on_hold' ? 'on_hold' : data === 'hospitalization' ? 'hospitalization' : 'completed'}">
    <p class="text-white text-center py-[5px] px-[10px] border-none">${data === 'scheduled' ? 'Scheduled' : data === 'started' ? 'Started' : data === 'open_shift' ? 'Open Shift' : data === 'missed_visit' ? 'Missed Visit' : data === 'on_hold' ? 'On Hold' : data === 'hospitalization' ? 'Hospitalization' : 'Completed'}</p>
</div>`
                        }
                    },
                    {
                        data: 'id',
                        className: "dt-center editor-delete",
                        orderable: false,
                        "mRender" : function ( data, type, row ) {
                            console.log(data)
                            return `
                            <button class="btn btn-primary edit" data-eventId="${data}">Edit</button>
                            <button class="btn btn-danger delete" data-eventId="${data}">Delete</button>`
                        }
                    }
                ],
            });

            jQuery(document).on('submit', '#scheduleForm', function(e) {
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
                    data: {ids:data},
                    success: function(data) {
                        jQuery('#schedulingList').DataTable().ajax.reload();
                        jQuery('.loader_wrap').fadeOut();
                    }});
            })

            $('#kt_modal_add_event_close').click(function () {
                $('.jquery-modal.blocker.current').trigger('click')
            });
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

            $('.jquery-modal.blocker.current').click(function () {
                $('#kt_modal_add_event_form').modal('hide');
                $('.week_lists').fadeOut();
                reset_modal_input();
                $('#schadule_id').val('');
                $(this).hide();
            });
        });
    </script>

@endsection
