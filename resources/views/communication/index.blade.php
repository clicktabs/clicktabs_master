@extends('layouts.app')
@section('extra_css')
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
            width: 100px;
        }

        .ui-widget-header li a {
            padding: 5px 15px;
            color: #fff;
        }

        .ui-widget-header li.ui-tabs-active a {
            background: #0d6efd;
            border-radius: 5px;
            color: #fff;
        }

        #details p::first-letter {
            font-size: 250%;
            color: #8A2BE2;
        }
    </style>
    <style>
        .attachment {
            padding: 20px;
        }

        .patient-communication-bg {
            background-color: #d6ddf0;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .attachment form {
            border: 2px solid #888;
            padding: 20px;
            border-radius: 5px;
        }

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

        .communication-text textarea {
            width: 100%;
            border: 2px solid #888;
            border-radius: 8px;
            margin-bottom: 26px;
        }

        .add-communication-btn {
            text-align: right;
            background-color: #dbdbdb;
            padding: 15px;
            border-radius: 6px;
        }

        .add-communication-btn a {
            border: 2px solid #000;
            padding: 4px;
            border-radius: 4px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <main>
        <div class="vs jj ttm vl ou uf na">
            @php
                $agency_branch = App\Models\AgencyBranch::select('id', 'name')
                    ->orderBY('id', 'DESC')
                    ->get();
                $employes = App\Models\Employee::select('id', 'first_name', 'last_name')
                    ->orderBY('id', 'DESC')
                    ->get();
            @endphp

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
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Communication List</h1>
                    {{-- <p>Here is what’s happening with your projects today:</p> --}}
                </div>

            </div>


            <div class="bg-white bd rounded-sm border border-slate-200 mt-2">
                <div class="dk">
                    <table id="example" class="display border mt-[100px]" style="width:100%">
                        <thead class="bg-[#4133BF] from-sky-300">
                            <tr>
                                <th class="text-[#fff]">Patient Name</th>
                                <th class="text-[#fff]">Phone</th>
                                <th class="text-[#fff]">Date</th>
                                <th class="text-[#fff]">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($communications as $communication)
                            <tr>
                                <td>{{$communication->patient->first_name}} {{$communication->patient->middle_name}} {{$communication->patient->last_name}}</td>
                                <td>{{$communication->phone}} </td>
                                <td>{{$communication->date}} </td>
                                <td>{{$communication->message}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('extra_js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $("#tabs").tabs();
            let dataTable = $('#example').DataTable();
            $(".filter-checkbox").on("change", function(e) {
                var searchTerms = [];
                $.each($(".filter-checkbox"), function(i, elem) {
                    if ($(elem).prop("checked")) {
                        if ($(this).val() != "all") {
                            searchTerms.push("^" + $(this).val() + "$");
                        }
                    }
                });
                dataTable.column(1).search(searchTerms.join("|"), true, false, true).draw();
            });
        });
    </script>
@endsection
