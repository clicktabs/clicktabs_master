@extends('layouts.app')
@section('extra_css')
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />--}}
    <style>
        .dataTables_length label{
            width: 250px;
        }
        .dataTables_length label select {
            width: 100px;
        }
        #orderTable {
            padding-top: 30px;
        }
        table.dataTable>tbody>tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .btn-primary {
            background: #6366f1 !important;
        }
        #orderModal {
            display: none;
            height: max-content;
        }
        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
        }
        .jquery-modal.blocker.current {
            z-index: 999;
        }
    </style>
@endsection
@section('content')
    <main>        <div class="vs jj ttm vl ou uf na">
        <div class="row mb-4">
            <!-- Table (Top Channels) -->
            <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                <div class="bg-[#4133BF] text-[#fff] p-1">
                    <h1 class="fw-bolder p-3 text-align: center">Export Oasis Section</h1>
                </div>
                <div class="dk mt-4">
                    <div class="row mb-[30px]">
                        <div class="col-md-4">
                            <div class="flex gap-[15px]">
                                    <h1>sear input</h1>
                            </div> 
                        </div>

                         </div>
                    <!-- Table -->
                    <div class="lf w-auto">
                        <table class="ux ou" id="orderTable">
                            <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">

                                    <tr>
                                        <th></th>
                                        <th class="dx">
                                            <div>Patient Name</div>
                                        </th>
                                        <th class="dx">
                                            <div>Patient MR#</div>
                                        </th>
                                        <th class="dx">
                                            <div>SSN</div>
                                        </th>
                                        <th class="dx">
                                            <div>DOB</div>
                                        </th>
                                        <th class="dx">
                                            <div>Oasis-SOC Date</div>
                                        </th>
                                         <th class="dx">
                                            <div>Action</div>
                                        </th>
                                    </tr>


                            </thead>
                            <!-- Table body -->
                            <tbody class="  text-sm gp le ln">
                                    <tr>
                                        <td></td>
                                        <td class="">
                                        
                                        </td>
                                        <td class="">
                                            <div></div>
                                        </td>
                                        <td class="">
                                            <div></div>
                                        </td>

                                        <td class="">
                                            <div></div>
                                        </td>
                                        <td class="">
                                            <div></div>
                                        </td>
                                         <td class=" flex flex-wrap gap-[10px] mt-2">
                                            <a href="#" class="btn ho xi ye">Generate Export</a>
                                        </td>
                                    </tr>
                            
                                    <tr>
                                        <td colspan="7">No data available</td>
                                    </tr>
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

@endsection
