@extends('layouts.app')
@section('extra_css')
    <style>
        .dataTables_length label{
            width: 250px;
        }
        .dataTables_length label select {
            width: 100px;
        }
        #patientTable {
            padding-top: 30px;
        }
        table.dataTable>tbody>tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .blocker.jquery-modal {
            z-index: 99;
        }
        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
        }
        #nonAdmittedPatients {
            display: none;
        }
        #nonAdmittedPatients .dataTables_wrapper .dataTables_scroll {
            clear: both;
            padding-top: 30px;
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
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]"> Patients</h1>
                    <p class="!text-[#fff]">Patients under organization</p>
                </div>

            </div>

            <!-- Dashboard actions -->
            <div class="je jd jc rc">

                <!-- Right: Actions -->
                <div class="sn am jo az jp ft">

                    <!-- Add view button -->
                    <a type="button" href="{{ route('patients.create') }}" class="btn ho xi ye">
                        <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                        </svg>
                        <span class="hidden trm nq">Add New Patient</span>
                    </a>
                    <a type="button" href="{{ route('patients.create') }}" class="btn ho xi ye">
                        <span class="hidden trm nq">Export to Excel</span>
                    </a>
                </div>

            </div>

            <div class="row mb-4">

                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <!-- Table -->
                        <div class="lf">
                            @include('patients.components.patients_table')
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
    {{-- Non Admitted Patients modal --}}
    <div id="nonAdmittedPatients" class="!max-w-[1110px] pt-[60px] !h-fit">
        <div class="vs">
            <div class="row mb-4">
                <form name="nonAdmitPatient" id="nonAdmitPatient">
                    @csrf
                    <div class="row mb-[20px]">
                        <div class="col-4">
                            <label for="nnon_admit_date">Date:</label>
                            <input type="date" id="non_admit_date" name="non_admit_date" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <label for="reason-not-admitted">Reason Not Admitted:</label>

                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="non_admit_reason" class="form-control" value="Inappropriate For Home" />
                            <label class="font-normal" for="non_admit_reason" >Inappropriate For Home</label>
                        </div>
                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="patient_refused" class="form-control" value="Patient Refused Service" />
                            <label class="font-normal" for="patient_refused" >Patient Refused Service</label>
                        </div>
                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="out_of_service_area" class="form-control" value="Out of Service Area" />
                            <label class="font-normal" for="out_of_service_area" >Out of Service Area</label>
                        </div>

                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="on_service_with_another_agency" class="form-control" value="On Service With another agency" />
                            <label class="font-normal" for="on_service_with_another_agency" >On Service With another agency</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="not_a_provider" class="form-control" value="Not a Provider" />
                            <label class="font-normal" for="not_a_provider" >Not a Provider</label>
                        </div>
                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="not_homebound" class="form-control" value="Not Homebound" />
                            <label class="font-normal" for="not_homebound" >Not Homebound</label>
                        </div>
                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="redirected_to_alternate_facility" class="form-control" value="Redirected to alternate care facility" />
                            <label class="font-normal" for="redirected_to_alternate_facility" >Redirected to alternate care facility</label>
                        </div>

                        <div class="col-md-3 flex items-center gap-[10px]">
                            <input type="checkbox" name="non_admit_reason[]" id="other_specify_comments" class="form-control" value="specify in comments" />
                            <label class="font-normal" for="other_specify_comments" >Other (specify in comments )</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="font-medium" for="non_admit_reason_comment">Comments</label>
                            <textarea class="form-control" name="comments" id="non_admit_reason_comment"></textarea>
                        </div>
                    </div>
                    <input type="text" class="hidden" id="patient_id" name="patient_id" />
                    <div class="flex items-center justify-center mt-[20px]">
                        <button type="submit" class="btn ho xi ye">Save</button>
                        <button type="button" class="btn ho xi ye ml-[20px] cancel">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End non admitted patients modal --}}

@endsection
@section('extra_js')
    <script>
        $(document).ready(function () {
            let patient_id;
            $('.non_admit').click(function () {
                $('#nonAdmittedPatients').modal({fadeDuration: 100});
                patient_id = $(this).data('id');
                $('#patient_id').val(patient_id);
            });

            jQuery('#patientTable').DataTable({
                scrollX: true,
                order: [ 1, 'desc' ]
            });

            $('.cancel').click(function () {
                jQuery('.close-modal').trigger('click');
            });

            jQuery(document).on('submit', '#nonAdmitPatient', function(e) {
                e.preventDefault();
                let validator = jQuery('#nonAdmitPatient').validate({
                    rules: {
                        non_admit_date: "required"
                    }
                });
                if(validator.valid()) {
                    jQuery('.loader_wrap').fadeIn();
                    let data = new FormData(this);
                    data.append('patient_id', patient_id);
                    jQuery.ajax({
                        url: "{{ route('patient-non-admit.store') }}",
                        method: 'POST',
                        data: data,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            window.location.reload();
                            $('#nonAdmitPatient').trigger("reset");
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                            toastr.success(data.message)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;

                            window.location.reload();
                        },
                        error: function (data) {
                            let errors = data.responseJSON;
                            for (const key of Object.keys(errors.errors)) {
                                let input = $('#'+key);
                                input.addClass('error');
                                input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                            }
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                        }
                    });
                }
            });

            jQuery(document).on('submit', '#patientAdmitForm', function(e) {
                e.preventDefault();
                    jQuery('.loader_wrap').fadeIn();
                    jQuery.ajax({
                        url: "{{ route('patient-admit.store') }}",
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            window.location.reload();
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                            toastr.success(data.message)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;

                            window.location.reload();
                        },
                        error: function (data) {
                            let errors = data.responseJSON;
                            for (const key of Object.keys(errors.errors)) {
                                let input = $('#'+key);
                                input.addClass('error');
                                input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                            }
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                        }
                    });
            });
            jQuery(document).on('click', '.delete', function(e) {
                e.preventDefault();
                jQuery('.loader_wrap').fadeIn();
                let id = $(this).data('id');
                jQuery.ajax({
                    url: "/api/patient/"+id,
                    method: 'DELETE',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        window.location.reload();
                        jQuery('.loader_wrap').fadeOut();
                        toastr.success(data.message)
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 300;
                        toastr.options.closeEasing = 'swing';
                        toastr.options.progressBar = true;

                        window.location.reload();
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#'+key);
                            input.addClass('error');
                            input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                        jQuery('.close-modal').trigger('click');
                    }
                });
            });
        });
    </script>
@endsection
