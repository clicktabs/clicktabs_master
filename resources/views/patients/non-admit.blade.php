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
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Non Admitted Patients</h1>
                </div>

            </div>

            <!-- Dashboard actions -->
            <div class="row mb-4">
                <!-- Table (Top Channels) -->
             <div class="tz tni vt bd rounded-sm border border-slate-200 col-md-12">
                    <div class="col p-3">
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
                    <div class="dk">
                        <!-- Table -->
                        <div class="lf p-2">
                            @include('patients.components.non-admitted-patients')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('extra_js')
    <script>
        $(document).ready(function () {
            $('#nonPatientTable').DataTable({
                "scrollX": true,
                order: [ 1, 'asc' ]
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
