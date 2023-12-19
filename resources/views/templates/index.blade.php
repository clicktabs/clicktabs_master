@extends('layouts.app')

@section('extra_css')
    <style>
        .dataTables_length label {
            width: 250px;
        }

        .dataTables_length label select {
            width: 100px;
        }

        table.dataTable > tbody > tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        div.dataTables_wrapper {
            padding: 0 !important;
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
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Templates</h1>
                </div>

            </div>

            <div class="je jd jc rc">

                <!-- Right: Actions -->
                <div class="sn am jo az jp ft">

                    <!-- Add view button -->
                    <a type="button" href="{{ route('templates.create') }}" class="btn ho xi ye">
                        <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                            <path
                                d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                        </svg>
                        <span class="hidden trm nq">Add New Template</span>
                    </a>
                </div>
            </div>

            <div class="row mb-4">
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <!-- Table -->
                        <div class="lf">
                            <table class="ux ou display nowrap !p-0" style="width:100%" id="employeeTable">
                                <!-- Table header -->
                                <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                <tr>
                                    <th>Goals Templates</th>
                                    <th>Interventions Templates</th>
                                    {{-- <th>Section GG Functional Abilities and Goals</th>
                                    <th>Section G Functional Status</th>
                                    <th>C0500. BIMS Summary Score</th> --}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="text-sm gp le ln">
                                @if($templates)
                                    @foreach($templates as $single_template)
                                        @php
                                            $new_goals_arr = json_decode($single_template->new_goals_templates, true);
                                            $new_interventions_arr = json_decode($single_template->new_intervention_templates, true);
                                            $section_gg_functional_abilities_goals_arr = json_decode($single_template->section_gg_functional_abilities_goals_templates, true);
                                            $section_g_functional_status_templates_arr = json_decode($single_template->section_g_functional_status_templates, true);
                                            $bims_summary_score_templates = json_decode($single_template->bims_summary_score_templates, true);
                                        @endphp
                                        <tr>
                                            <td>
                                                @if($new_goals_arr)
                                                    @foreach($new_goals_arr as $key => $single_goal_temp)
                                                        {{$single_goal_temp}}
                                                        @if($key !== count($new_goals_arr) - 1)
                                                            ,<br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                @if($new_interventions_arr)
                                                    @foreach($new_interventions_arr as $key => $single_intervention_temp)
                                                        {{$single_intervention_temp}}
                                                        @if($key !== count($new_interventions_arr) - 1)
                                                            ,<br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                            {{-- <td>
                                                @if($section_gg_functional_abilities_goals_arr)
                                                    @foreach($section_gg_functional_abilities_goals_arr as $key => $single_section_gg_functional_abilities_goals_arr)
                                                        {{$single_section_gg_functional_abilities_goals_arr}}
                                                        @if($key !== count($section_gg_functional_abilities_goals_arr) - 1)
                                                            ,<br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td> --}}
                                            {{-- <td>
                                                @if($section_g_functional_status_templates_arr)
                                                    @foreach($section_g_functional_status_templates_arr as $key => $single_section_g_functional_status_templates)
                                                        {{$single_section_g_functional_status_templates}}
                                                        @if($key !== count($section_g_functional_status_templates_arr) - 1)
                                                            ,<br>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td> --}}
                                            {{-- <td>
                                                @if($bims_summary_score_templates)
                                                    @foreach($bims_summary_score_templates as $key => $single_bims_summary_score_templates)
                                                    {{$single_bims_summary_score_templates}}
                                                    @if($key !== count($bims_summary_score_templates) - 1)
                                                        ,<br>
                                                    @endif
                                                    @endforeach
                                                @endif
                                            </td> --}}
                                            <td>
                                                <div class="d-flex gap-[5px] items-center">
                                                    <a href="/templates/{{$single_template->id}}/edit" class="btn ho xi ye">Edit</a>
                                                    <form action="/templates/{{$single_template->id}}" method="POST" id="deleteTemplateForm">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger !bg-[#bb2d3b] ho xi ye delete" type="submit">Delete</button>
                                                    </form>
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
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script>
        let eId = '';
        $(document).ready(function () {
            $('#employeeTable').DataTable({
                order: [1, 'desc'],
                scrollX: true,
            });
        });
    </script>
@endsection
