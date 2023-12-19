@extends('layouts.app')

@section('extra_css')
    <style>
        .dataTables_length label{
            width: 250px;
        }
        .dataTables_length label select {
            width: 100px;
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
        .editEmployeeModal {
            display: none;
        }
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }
        .avatar-upload .avatar-edit input {
            display: none;
        }
        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }
        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }
        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
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
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Admissions</h1>
                </div>

            </div>

            <div class="row mb-4">
                <div class="tz tni vt bd rounded-sm border border-slate-200 col-md-12">

                    <div class="dk">
                        <!-- Table -->
                        <div class="lf p-2">
                            <div class="col mb-5 ml-3 mt-3">
                                    <!-- Add view button -->
                                    <a type="button" href="{{ route('patients.create') }}" class="btn ho xi ye">
                                    <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                                    </svg>
                                    <span class="hidden trm nq">Add New Patient</span>
                                </a>
                            </div>
                            <table class="ux ou display nowrap" style="width:100%" id="employeeTable">
                                <!-- Table header -->
                                <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                <tr>
                                    <th>MRN</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Birth Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-sm gp le ln">
                                @if($patients)
                                    @foreach($patients as $patient)
                                        <tr class="active cursor-pointer " data-id="{{$patient->id}}">
                                            @php
                                                $date=date_create($patient->date_of_birth);
                                            @endphp
                                            <td><a href="{{route('patients.show', $patient->id)}}">{{$patient->patient_code}}</a></td>
                                            <td><a href="{{route('patients.show', $patient->id)}}">{{$patient->first_name}}</a></td>
                                            <td><a href="{{route('patients.show', $patient->id)}}">{{$patient->last_name}}</a></td>
                                            <td><a href="{{route('patients.show', $patient->id)}}">{{date_format($date,"m-d-Y")}}</a></td>
                                            <td>
                                                <div class="flex flex-wrap gap-[5px]">
                                                    <a class="btn btn-info" href="{{route('patients.show', $patient->id)}}">View</a>
                                                    <a href="/patients/{{$patient->id}}/edit" class="btn btn-primary !bg-[#0b5ed7]" >Edit</a>
                                                    <button type="button" class="btn btn-danger !bg-[#bb2d3b] ho xi ye delete" data-id="{{$patient->id}}">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('extra_js')
    <script>
        let eId = '';
        $(document).ready(function () {
            $('#employeeTable').DataTable({
                order: [ 1, 'desc' ],
                scrollX: true,
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
