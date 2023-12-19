@extends('layouts.app')
@section('extra_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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

    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="row mb-4">
                <!-- Table (Top Channels) -->
               
                
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <h1 class=" mb-4 ext-center fw-bolder">Hospilazation Report</h1>
                        <div class="row mb-[30px]">
                            <div class="col-md-4">
                                <div class="flex gap-[15px]">
                                    <label for="branch">Branch</label>
                                    <select name="branch" class="form-control">
                                        <option>Branch 1</option>
                                        <option>Branch 2</option>
                                        <option>Branch 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="y">
                                    <input class="datepicker s me text-slate-500 hover--text-slate-600 gp xq ol" placeholder="Select dates" data-class="flatpickr-right">
                                    <div class="g w j flex items-center pointer-events-none">
                                        <svg class="oo sl du text-slate-500 ml-3" viewBox="0 0 16 16">
                                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="y flex flex-wrap shrink-0 gap-[15px] justify-end">
                                    <button class="btn btn-primary bg-[#6366f1]" type="button">Generate</button>
                                    <button class="btn btn-primary bg-[#6366f1]" type="button">Export Excel</button>
                                </div>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="col-md-12">
                            <table class="ux ou" id="hospitalazation">
                                <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                <tr>
                                    <th></th>
                                    <th class="dx">
                                        <div class="gh gt">Patient Name</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Facility</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Phone</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Transfer Date</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Certification Ends</div>
                                    </th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="text-sm gp le ln">
                                <tr>
                                    <td></td>
                                    <td class="">
                                        25410021
                                    </td>
                                    <td class="">
                                        SIFU, MASTER
                                    </td>
                                   <td class="">
                                        Kangaroo, Captain
                                    </td>
                                    <td class="">
                                        No
                                    </td>
                                    <td class="">
                                        05/04/23
                                    </td>
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script>
        $(document).ready(function () {
            let dataTable = $('#orderTable').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [ {
                    className: 'dtr-control',
                    orderable: false,
                    targets:   0
                } ],
                order: [ 1, 'asc' ],
            });

            $('.edit').click(function () {
                $('#orderModal').modal({
                    fadeDuration: 100
                });
            });
        });
    </script>
@endsection
