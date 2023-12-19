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
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Pending QA</h1>
                </div>
            </div>

            <div class="row mb-4">

                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <!-- Table -->
                        <div class="lf">
                            <table class="ux ou display nowrap !pt-0" style="width:100%" id="patientTable">
                                <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                <tr>
                                    <th class="dx">
                                        <div class="gh gt">Patient</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">MRN</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Primary Insurance</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Date of Birth</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Telephone</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Referral date</div>
                                    </th>
                                    <th class="dx">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class=" text-center text-sm gp le ln">
                                @if($qalists)
                                    @foreach($qalists as $qalist)
                                        <tr>
                                            <td class="dx">
                                                <div class="flex items-center">
                                                    <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">
                                                        {{$qalist->patient->first_name . $qalist->patient->last_name}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                {{$qalist->patient->patient_code}}
                                            </td>

                                            <td class="">
                                                <div class="gn">{{$qalist->patient->insurance_type}}</div>
                                            </td>
                                            <td class="dx">
                                                @php
                                                    $date=date_create($qalist->patient->date_of_birth);
                                                @endphp
                                                <div class="gn">{{date_format($date,"m-d-Y")}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$qalist->patient->address->phone}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{date('m-d-Y', strtotime($qalist->patient->created_at))}}</div>
                                            </td>
                                            <td class="dx flex items-center gap-[10px] shrink-0">
                                                <a href="{{route('skilled-agency.get-oasis-e-start-of-care', $qalist->patient->id)}}" class="btn ho xi ye">Open</a>
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

@endsection
