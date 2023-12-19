<div class="">
    <div class="patient_info bg-[#efefef]">
        <div class="patient_info_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="patient_image">
                            <img
                                src="{{ asset($patient->photo ? 'patients/'.$patient->photo : 'employee/avatar.svg') }}"/>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <div class="row h-full">
                            <div class="col-lg-6">
                                <div class="patient_info_content">
                                    <div
                                        class="patient_info_table table-responsive">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>MR #:</td>
                                                <td>{{ $patient->patient_code }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Birthday:</td>
                                                <td>{{ date_format(date_create($patient->date_of_birth),"m-d-Y")}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Start of Care Date:</td>
                                                <td>{{ date_format(date_create($patient->episode->start_care_date),"m-d-Y") }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Physician Phone:</td>
                                                <td>{{ $patient->extra_info->physician->primary_phone }}
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="map_wrapper">
                                    <div id="map"></div>
                                </div>
                                <div
                                    class=" more_buttons d-flex align-items-center">
                                    <ul class="d-flex align-items-center">
                                        <!-- <li><a href="#">[ Edit ]</a></li>
                                                        <li><a href="#">[ More ]</a></li> -->
                                        {{--                                                                                    <li><a href="#">[ Directions ]</a> --}}
                                        {{--                                                                                    </li> --}}
                                        <!-- <li><a href="#">[ Admission Periods ]</a></li> -->
                                    </ul>
                                </div>

                                <!-- <p><a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a></p>                                                           -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tub">
        <div class="main_content_nav mt-[-30px]">
            <ul>
                <li>
                    <a class="add_patient_status" tabindex="0"
                       aria-controls="matching_table" type="button"><span>Patient Status</span></a>
                </li>
                <li><a href="#tub-scheduledTask">Scheduled Task</a></li>
                <li><a href="#tub-matching">Matching</a></li>
                <li><a href="#tub-assessment">Oasis Assessments</a></li>
                <li><a href="#tub-new-episode">Add New Episode</a></li>
                <li><a href="#tub-oasis">OASIS</a></li>
                <li><a href="#tub-epidode-manager">Episode Manager</a></li>
                <li><a href="#tub-physician-order">Physician Orders</a></li>
                <li><a href="#tub-plane-of-care">Plan Of Care</a></li>
                <li><a href="#tub-cahps">CAHPS</a></li>
            </ul>
        </div>
        <div id="patient_status_Modal" class="modal" style="height: auto;">
            <form name="patientStatusForm" id="patientStatusForm"
                  method="post" action="#">
                @csrf
                <div class="medication-content">
                    <input type="text" name="patient_id"
                           value="{{ $patient->id }}" class="hidden"/>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="patient_status" class="py-1">Status:
                                <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <select name="patient_status"
                                    id="patient_status"
                                    class="form-control s ou  p-3">
                                <option value="">Select patient status
                                </option>
                                <option value="discharge">Discharge</option>
                                <option value="pending">Pending</option>
                                <option value="non-admit">Non-Admit</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pt-[30px]">
                        <div class="col">
                            <h4 class="font-medium text-[20px]">Discharge
                                information</h4>
                        </div>
                    </div>
                    <div class="row pt-[15px]">
                        <div class="col-md-6">
                            <label for="discharge_date"
                                   class="py-1">Discharge
                                date <span class="text-red">*</span></label>
                            <input id="discharge_date" name="discharge_date"
                                   type="date" placeholder=""
                                   class="form-control s ou  p-3">
                        </div>
                        <div class="col-md-6">
                            <label for="discharge_reason"
                                   class="pb-[8px]">Discharge
                                Reason:</label>
                            <select name="discharge_reason"
                                    id="discharge_reason"
                                    class="form-control s ou  p-3">
                                <option value="">Select discharge reason
                                </option>
                                <option value="discharge_reason_1">Discharge
                                    reason 1
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="discharge_comment" class="py-1">
                                Comments: </label>
                            <textarea class="form-control"
                                      name="discharge_comment"
                                      id="discharge_comment"
                                      rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <span
                                class="block pt-[20px] font-medium text-[18px]">
                                This patient will be moved to discharge list,
                                for re-admission click on re-admit in discharge
                                list</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div
                                class="flex items-center justify-center flex-wrap gap-[15px]">
                                <button type="submit"
                                        class="!w-auto form-control btn btn-primary accident_risk_assessment">
                                    Update
                                </button>
                                <button type="button"
                                        class="!w-auto form-control cancelDischarge btn btn-danger">
                                    No Exit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- Task Schedule --}}
        <div id="tub-scheduledTask" class=" mt-[20px]">
            <div class=" d-flex align-items-center !bg-[#4133BF]">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" href="javascript:void()"
                                aria-selected="false" type="button"
                                role="tab"
                                onclick="$('.extra-option').removeClass('text-dark');$(this).addClass('text-dark');$('.extra-div').addClass('d-none').addClass(' active');$('#nursing-div').removeClass('d-none');">
                            Nursing
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" href="javascript:void()"
                                aria-selected="false" type="button"
                                role="tab"
                                aria-selected="true"
                                onclick="$('.extra-option').removeClass('text-dark');$(this).addClass('text-dark');$('.extra-div').addClass('d-none').addClass(' active');$('#hha-div').removeClass('d-none');">
                            HHA
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" href="javascript:void()"
                                aria-selected="false" type="button"
                                role="tab"
                                aria-selected="true"
                                onclick="$('.extra-option').removeClass('text-dark');$(this).addClass('text-dark');$('.extra-div').addClass('d-none').addClass(' active');$('#msw-div').removeClass('d-none');">
                            MSW/Other
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" href="javascript:void()"
                                aria-selected="false" type="button"
                                role="tab"
                                aria-selected="true"
                                onclick="$('.extra-option').removeClass('text-dark');$(this).addClass('text-dark');$('.extra-div').addClass('d-none').addClass(' active');$('#therapy-div').removeClass('d-none');">
                            Therapy
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" href="javascript:void()"
                                aria-selected="false" type="button"
                                role="tab"
                                aria-selected="true"
                                onclick="$('.extra-option').removeClass('text-dark');$(this).addClass('text-dark');$('.extra-div').addClass('d-none').addClass(' active');$('#dietitian-div').removeClass('d-none');">
                            Dietitian
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" href="javascript:void()"
                                aria-selected="false" type="button"
                                role="tab"
                                aria-selected="true"
                                onclick="$('.extra-option').removeClass('text-dark');$(this).addClass('text-dark');$('.extra-div').addClass('d-none').addClass(' active');$('#care-div').removeClass('d-none');">
                            Orders/Care
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" href="javascript:void()"
                                aria-selected="false" type="button"
                                role="tab"
                                aria-selected="true"
                                onclick="$('.extra-option').removeClass('text-dark');$(this).addClass('text-dark');$('.extra-div').addClass('d-none').addClass(' active');$('#outlier-div').removeClass('d-none');">
                            Daily/Outlier
                        </button>
                    </li>
                </ul>
            </div>

            <div id="nursing-div" class="extra-div d-none">
                @include('patients.components.scheduleTask.nursign')
            </div>

            <div id="hha-div" class="extra-div d-none">
                @include('patients.components.scheduleTask.hha')
            </div>

            <div id="msw-div" class="extra-div d-none">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-[#4133BF] text-[#fff] text-center">
                            <tr style="border: 1px solid;">
                                <th>Task</th>
                                <th>Schedule Date</th>
                                <th>Assigned To</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($schedules as $mws_other)
                                @if($mws_other->task === 'mws-other')
                                    <tr>
                                        <td>{{ is_string($mws_other->client_assess) ? strtoupper(str_replace("-", " ", $mws_other->client_assess)) : '' }}</td>
                                        <td>{{ $mws_other->kt_calendar_datepicker_start_date }}</td>
                                        <td>{{ $mws_other->last_name }}</td>
                                        <td>{{ $mws_other->scheduling_status }}</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="{{ route('nursing_tasks.edit', $mws_other->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="therapy-div" class="extra-div d-none">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-[#4133BF] text-[#fff] text-center">
                        <tr style="border: 1px solid;">
                            <th>Task</th>
                            <th>Schedule Date</th>
                            <th>Assigned To</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($schedules as $therapy)
                            @if($therapy->task === 'theraphy')
                                <tr>
                                    <td>{{ strtoupper(str_replace("-", " ", $therapy->client_assess)) }}</td>
                                    <td>{{ $therapy->kt_calendar_datepicker_start_date }}</td>
                                    <td>{{ $therapy->last_name }}</td>
                                    <td>{{ $therapy->scheduling_status }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('nursing_tasks.edit', $therapy->id) }}"
                                           class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="dietitian-div" class="extra-div d-none">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-[#4133BF] text-[#fff] text-center">
                        <tr style="border: 1px solid;">
                            <th>Task</th>
                            <th>Schedule Date</th>
                            <th>Assigned To</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($schedules as $dietitian)
                            @if($dietitian->task === 'dietitian')
                                <tr>
                                    <td>{{ strtoupper(str_replace("-", " ", $dietitian->client_assess)) }}</td>
                                    <td>{{ $dietitian->kt_calendar_datepicker_start_date }}</td>
                                    <td>{{ $dietitian->last_name }}</td>
                                    <td>{{ $dietitian->scheduling_status }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('nursing_tasks.edit', $dietitian->id) }}"
                                           class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="care-div" class="extra-div d-none">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-[#4133BF] text-[#fff] text-center">
                        <tr style="border: 1px solid;">
                            <th>Task</th>
                            <th>Schedule Date</th>
                            <th>Assigned To</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($schedules as $care_of_order)
                            @if($care_of_order->task === 'orders-care')
                                <tr>
                                    <td>{{ strtoupper(str_replace("-", " ", $care_of_order->client_assess)) }}</td>
                                    <td>{{ $care_of_order->kt_calendar_datepicker_start_date }}</td>
                                    <td>{{ $care_of_order->last_name }}</td>
                                    <td>{{ $care_of_order->scheduling_status }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('nursing_tasks.edit', $care_of_order->id) }}"
                                           class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="outlier-div" class="extra-div d-none">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-[#4133BF] text-[#fff] text-center">
                        <tr style="border: 1px solid;">
                            <th>Task</th>
                            <th>Schedule Date</th>
                            <th>Assigned To</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($schedules as $daily_outlier)
                            @if($daily_outlier->task === 'daily-outlier')
                                <tr>
                                    <td>{{ strtoupper(str_replace("-", " ", $daily_outlier->client_assess)) }}</td>
                                    <td>{{ $daily_outlier->kt_calendar_datepicker_start_date }}</td>
                                    <td>{{ $daily_outlier->last_name }}</td>
                                    <td>{{ $daily_outlier->scheduling_status }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('nursing_tasks.edit', $daily_outlier->id) }}"
                                           class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        {{-- New Authorization --}}
        <div id="tub-matching" class="px-[15px]">
            <div class="">
                @include('patients.components.matching')
            </div>
        </div>
        <div id="tub-new-episode" class="px-[15px]">
            <div class="">
                @include('patients.components.episode')
            </div>
        </div>
        <div id="tub-oasis" class="px-[15px]">
            <div class="">
                @include('patients.components.oasis-manager')
            </div>
        </div>
        <div id="tub-epidode-manager" class="px-[15px]">
            <div class="">
                @include('patients.components.episode-manager')
            </div>
        </div>
        <div id="tub-cahps" class="px-[15px]">
            <div class="">
                @include('patients.components.cahps')
            </div>
        </div>
        <div id="tub-plane-of-care" class="px-[15px]">
            <div class="">
                @include('patients.components.plan-of-care')
            </div>
        </div>
        <div id="tub-assessment" class="px-[15px]">
            <div class="">
                @include('patients.components.assessment')
            </div>
        </div>
        <div id="tub-physician-order" class="px-[15px]">
            <div class="">
                @include('patients.components.physician-order')
            </div>
        </div>

        <div class="modal fade !max-w-full" id="kt_modal_add_event_form"
             tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div
                class="modal-dialog next_modal_content modal-dialog-centered relative">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <div
                        class="btn btn-icon btn-sm btn-active-icon-primary absolute right-0"
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
                    </div>
                    <form class="form" id="scheduleForm" method="post">
                        @csrf
                        @method('PUT')
                        <!--begin::Modal header-->
                        <input type="hidden" id="schadule_id"
                                name="schadule_id" value=""/>
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Input group-->
                            <div class="row row-cols-lg-1 g-10">
                                <div class="col-lg-5 col-md-6">
                                    <label
                                        class="fs-6 fw-bold mb-2 required flex-shrink">Start
                                        Date: </label>
                                    <div class="d-flex items-center gap-4">
                                        <div class="fv-row mb-9">
                                            <input
                                                class="form-control form-control-solid"
                                                type="datetime-local"
                                                id="kt_calendar_datepicker_start_date"
                                                name="kt_calendar_datepicker_start_date">
                                        </div>
                                    </div>
                                    <label
                                        class="fs-6 fw-bold mb-2 required flex-shrink">End
                                        Date:</label>
                                    <div
                                        class="d-flex items-center gap-4 mb-2">
                                        <div class="fv-row w-full">
                                            <input
                                                class="form-control form-control-solid"
                                                type="datetime-local"
                                                id="kt_calendar_datepicker_end_date"
                                                name="kt_calendar_datepicker_end_date">
                                        </div>
                                    </div>
                                    <div
                                        class="flex gap-[20px] items-center">
                                        <div
                                            class="total_hrs flex items-center justify-center">
                                            00:00hrs
                                            <div class="hq_section">
                                                <div>
                                                    <input type="checkbox"
                                                            value="hq"
                                                            name="hq"
                                                            id="hq"/>
                                                    <label
                                                        for="hq">HQ</label>
                                                </div>
                                                <div>
                                                    <input id="u2"
                                                            type="checkbox"
                                                            value="u2"
                                                            name="u2"/>
                                                    <label
                                                        for="u2">U2</label>
                                                </div>
                                                <div>
                                                    <input id="u3"
                                                            type="checkbox"
                                                            value="u3"
                                                            name="u3"/>
                                                    <label
                                                        for="u3">U3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="week_lists flex-wrap">
                                            <div>
                                                <input type="checkbox"
                                                        value="sun"
                                                        name="sun" id="sun"/>
                                                <label for="sun">Sun</label>
                                            </div>
                                            <div>
                                                <input id="mon"
                                                        type="checkbox"
                                                        value="mon"
                                                        name="mon"/>
                                                <label for="mon">Mon</label>
                                            </div>
                                            <div>
                                                <input id="tue"
                                                        type="checkbox"
                                                        value="tue"
                                                        name="tue"/>
                                                <label for="tue">Tue</label>
                                            </div>
                                            <div>
                                                <input id="wed"
                                                        type="checkbox"
                                                        value="wed"
                                                        name="wed"/>
                                                <label for="wed">Wed</label>
                                            </div>
                                            <div>
                                                <input id="thu"
                                                        type="checkbox"
                                                        value="thu"
                                                        name="thu"/>
                                                <label for="thu">Thu</label>
                                            </div>
                                            <div>
                                                <input id="fri"
                                                        type="checkbox"
                                                        value="fri"
                                                        name="fri"/>
                                                <label for="fri">Fri</label>
                                            </div>
                                            <div>
                                                <input id="sat"
                                                        type="checkbox"
                                                        value="sat"
                                                        name="sat"/>
                                                <label for="sat">Sat</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="!mt-[20px]">
                                        <div>
                                            <label>Patient: </label>
                                            <select name="patient_id"
                                                    required id="patient_id"
                                                    required>
                                                <option value="">Select
                                                    patient
                                                </option>
                                                @foreach($patients as $patient)
                                                    <option
                                                        value="{{ $patient->id }}"
                                                        data-mi_no="{{ $patient->mi_no }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mt-[20px]">
                                            <label>MR No: </label>
                                            <div class="select_group">
                                                <select name="mi_no"
                                                        id="mi_no_select">
                                                </select>
                                                <select id="client_assess"
                                                        name="client_assess"
                                                        required>
                                                    <option value="">Select
                                                        client assess
                                                    </option>
                                                    <option
                                                        value="ACCIDENT RISK ASSESSMENT">
                                                        ACCIDENT RISK
                                                        ASSESSMENT
                                                    </option>
                                                    <option
                                                        value="Change of physician">
                                                        Change of physician
                                                    </option>
                                                    <option
                                                        value="HHA SUPERVISORY VISIT">
                                                        HHA SUPERVISORY
                                                        VISIT
                                                    </option>
                                                    <option
                                                        value="PATIENT RECERTIFICATION CHECKLIST">
                                                        PATIENT
                                                        RECERTIFICATION
                                                        CHECKLIST
                                                    </option>
                                                    <option
                                                        value="Physician order">
                                                        Physician order
                                                    </option>
                                                    <option
                                                        value="POST FALL EVALUATION">
                                                        POST FALL EVALUATION
                                                    </option>
                                                    <option
                                                        value="REFERRAL INTAKE FORM">
                                                        REFERRAL INTAKE FORM
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-[20px]">
                                            <label>Caregiver: </label>
                                            <select name="employee_id"
                                                    required id="employee">
                                                <option value="">Select
                                                    caregiver
                                                </option>
                                                @foreach($employees as $employee)
                                                    <option
                                                        value="{{ $employee->id }}">{{ $employee->first_name }} {{ $employee->last_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mt-[20px]">
                                            <label>Task: </label>
                                            <select id="task" name="task"
                                                    required>
                                                <option value="">Select
                                                    Visit
                                                </option>
                                                <option
                                                    value="sixty_day_summary">
                                                    60 Day Summary
                                                </option>
                                                <option
                                                    value="communication_note">
                                                    Communication note
                                                </option>
                                                <option value="hha">HHA
                                                </option>
                                                <option
                                                    value="coordination_care">
                                                    Coordination of Care
                                                </option>
                                                <option
                                                    value="hha_care_plane">
                                                    HHA Care Plane
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="row row-cols-lg-1 g-10">
                                        <div class="select_wrapper">
                                            <div>
                                                <label>Service: </label>
                                                <select id="sc_sub_addon_id"
                                                        name="sc_sub_addon_id"
                                                        required>
                                                    <option value="">Select
                                                        service
                                                    </option>
                                                    @foreach($service_codes as $service_code)
                                                        <option
                                                            value="{{ $service_code->id }}">{{ $service_code->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        <div>
                                            <label>Bill Unit
                                                Type: </label>
                                            <select id="bill_unit_type"
                                                    name="bill_unit_type"
                                                    required>
                                                <option value="15">15
                                                    Minutes
                                                </option>
                                                <option value="1">1
                                                    Hour
                                                </option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Pay Unit
                                                Type: </label>
                                            <select id="pay_unit_type"
                                                    name="pay_unit_type"
                                                    required>
                                                <option value="15">15
                                                    Minutes
                                                </option>
                                                <option value="1">1
                                                    Hour
                                                </option>
                                            </select>
                                        </div>
                                        <div>
                                            <label>Status: </label>
                                            <select
                                                id="scheduling_status"
                                                name="scheduling_status"
                                                required>
                                                <option value="">Select
                                                    status
                                                </option>
                                                <option
                                                    value="scheduled">
                                                    Scheduled
                                                </option>
                                                <option value="started">
                                                    Started
                                                </option>
                                                <option
                                                    value="open_shift">
                                                    Open Shift
                                                </option>
                                                <option value="no_show">
                                                    No Show
                                                </option>
                                                <option value="on_hold">
                                                    On Hold
                                                </option>
                                                <option
                                                    value="hospitalization">
                                                    Hospitalization
                                                </option>
                                                <option
                                                    value="completed">
                                                    Completed
                                                </option>
                                            </select>
                                        </div>
                                    <div>
                                        <label>Primary
                                            Payer: </label>
                                        <select
                                            id="payor_sub_addon_id"
                                            name="payor_sub_addon_id"
                                            required>
                                            <option value="">Select
                                                Payer
                                            </option>
                                            @foreach($payors as $payor)
                                                <option
                                                    value="{{ $payor->id }}">{{ $payor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label>Note:</label>
                                        <textarea
                                            class="form-control"
                                            id="scheduling_notes"
                                            name="scheduling_notes"
                                            cols="4"
                                            required></textarea>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <div class="next_modal_action_buttons">
                                        <button id="save_event_data"
                                                type="submit">Update
                                        </button>
                                        <button id="cancel_event_data"
                                                type="button">Cancel
                                        </button>
                                        <button id="rec_event_data"
                                                type="button">Repeat
                                        </button>
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
