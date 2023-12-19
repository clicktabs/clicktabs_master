<div id="tabs-1">
    <form class="form" action="{{ url("/schedule/edit-weekly-schedule") }}" method="post" id="kt_modal_add_event_form">
        @csrf
{{--        <input type="hidden" name="schedule_id" value="{{$schedule->id}}">--}}
        <!--begin::Modal header-->
        <div class="modal-header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder" data-kt-calendar="title">Edit Schedule to Calendar</h2>
            <!--end::Modal title-->
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
                            @php
                                $start_date_time = $schedule->kt_calendar_datepicker_start_date . ' ' . $schedule->start_time;
                                $start_date_time_local = date("m-d-y\TH:i", strtotime($start_date_time));
                            @endphp
                            <input class="form-control form-control-solid" id="edit_start_date" type="datetime-local"
                                   name="kt_calendar_datepicker_start_date" value="{{$start_date_time_local}}"/>
                        </div>
                    </div>
                    <label class="fs-6 fw-bold mb-2 required flex-shrink">End Date:</label>
                    <div class="d-flex items-center gap-4 mb-2">
                        <div class="fv-row w-full">
                            @php
                                $end_date_time = $schedule->kt_calendar_datepicker_end_date . ' ' . $schedule->end_time;
                                $end_date_time_local = date("Y-m-d\TH:i", strtotime($end_date_time));
                            @endphp
                            <input class="form-control form-control-solid" id="edit_end_date" type="datetime-local"
                                   value="{{$end_date_time_local}}" name="kt_calendar_datepicker_end_date">
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
                        {{--                        <div class="week_lists flex-wrap">--}}
                        {{--                            <div>--}}
                        {{--                                <input type="checkbox" value="sun" name="sun" id="sun" />--}}
                        {{--                                <label for="sun">Sun</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input id="mon" type="checkbox" value="mon" name="mon" />--}}
                        {{--                                <label for="mon">Mon</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input id="tue" type="checkbox" value="tue" name="tue" />--}}
                        {{--                                <label for="tue">Tue</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input id="wed" type="checkbox" value="wed" name="wed" />--}}
                        {{--                                <label for="wed">Wed</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input id="thu" type="checkbox" value="thu" name="thu" />--}}
                        {{--                                <label for="thu" >Thu</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input id="fri" type="checkbox" value="fri" name="fri" />--}}
                        {{--                                <label for="fri" >Fri</label>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input id="sat" type="checkbox" value="sat" name="sat" />--}}
                        {{--                                <label for="sat">Sat</label>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="select_wrapper">
                        <div>
                            <label>Patient: </label>
                            <select name="patient_id" required onchange="updateMiNo(this)" id="patient">
                                <option value="">Select patient</option>
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}"
                                            data-mi_no="{{ $patient->mi_no }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>MR No: </label>
                            <div class="select_group">
                                <select name="mi_no" id="mi_no_select">
                                </select>
                                <select name="client_assess" required>
                                    <option value="">Select client assess</option>
                                    <option value="ACCIDENT RISK ASSESSMENT">ACCIDENT RISK ASSESSMENT</option>
                                    <option value="Change of physician">Change of physician</option>
                                    <option value="HHA SUPERVISORY VISIT">HHA SUPERVISORY VISIT</option>
                                    <option value="PATIENT RECERTIFICATION CHECKLIST">PATIENT RECERTIFICATION
                                        CHECKLIST
                                    </option>
                                    <option value="Physician order">Physician order</option>
                                    <option value="POST FALL EVALUATION">POST FALL EVALUATION</option>
                                    <option value="REFERRAL INTAKE FORM">REFERRAL INTAKE FORM</option>
                                </select>
                            </div>
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
                            <select name="task" required>
                                <option value="">Select Visit</option>
                                <option value="sixty_day_summary">60 Day Summary</option>
                                <option value="communication_note">Communication note</option>
                                <option value="hha">HHA</option>
                                <option value="coordination_care">Coordination of Care</option>
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
                                <select name="sc_sub_addon_id" required>
                                    <option value="">Select service</option>
                                    @foreach($service_codes as $service_code)
                                        <option value="{{ $service_code->id }}">{{ $service_code->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>Bill Unit Type: </label>
                                <select name="bill_unit_type" required>
                                    <option value="15">15 Minutes</option>
                                    <option value="1">1 Hour</option>
                                </select>
                            </div>
                            <div>
                                <label>Pay Unit Type: </label>
                                <select name="pay_unit_type" required>
                                    <option value="15">15 Minutes</option>
                                    <option value="1">1 Hour</option>
                                </select>
                            </div>
                            <div>
                                <label>Status: </label>
                                <select name="scheduling_status" required>
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
                                <select name="payor_sub_addon_id" required>
                                    <option value="">Select Payer</option>
                                    @foreach($payors as $payor)
                                        <option value="{{ $payor->id }}">{{ $payor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label>Note:</label>
                                <textarea class="form-control" name="scheduling_notes" cols="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12">
                    <div class="next_modal_action_buttons">
                        <button id="save_event_data" type="submit">Update</button>
                        <button id="cancel_event_data" type="button">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal body-->
    </form>
</div>
@section('extra_js')
    <script src="{{asset('assets/js/plugins/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scripts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/plugins/fullcalendar/fullcalendar.bundle.js')}}"></script>
    <script src="{{asset('assets/js/calendar/calendar.js')}}"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    <script>
        $('#edit_start_date').on('change', function () {
            console.log('Hello')
            let endDate = $('#edit_end_date').val();
            let startDate = $(this).val();
            if(startDate && endDate) {
                checkDateChange(startDate, endDate);
            }
        });

        $('#edit_end_date').on('change', function () {
            let startDate = $('#edit_start_date').val();
            let endDate = $(this).val();
            if(startDate && endDate) {
                checkDateChange(startDate, endDate);
            }
        });

        function checkDateChange(startDate = null, endDate = null) {
            if(startDate && endDate) {
                if(!checkDate(startDate, endDate)) {
                    alert('Date is not valid');
                    return;
                }
                let m1 = moment(startDate, 'MM-DD-YYYY HH:mm');
                let m2 = moment(endDate, 'MM-DD-YYYY HH:mm');
                let duration = moment.duration(m1.diff(m2));
                let hours = duration.hours();
                let minutes = duration.minutes();
                $('.total_hrs').text(`${Math.abs(hours)} H : ${Math.abs(minutes)} M`);
            }else {
                alert('Please select start date and end date');
                return;
            }
        }

        function checkDate(start, end){
            let mStart = moment(start);
            let mEnd = moment(end);
            return mStart.isBefore(mEnd);
        }
    </script>
@endsection
<script>
    const datepickerInput = document.getElementById("kt_calendar_datepicker_start_date");

    // Create a new Date object for the desired date
    const desiredDate = new Date("2023-05-29"); // Replace with your desired date

    // Format the desired date as a string in the format expected by the datepicker
    const formattedDate = desiredDate.toISOString().split("T")[0];

    // Set the value of the datepicker input field to the desired date
    datepickerInput.value = formattedDate;
</script>
