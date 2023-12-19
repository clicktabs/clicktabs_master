@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
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
        .dataTables_scroll {
            padding-top: 30px;
        }
    </style>
@endsection
@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <!-- Dashboard actions -->
            <div class="row mb-4">

                <div class="bg-white bd rounded-sm border border-slate-200">
                    <div class="dk">
                        <form class="mb-[30px]">
                        <div class="row mb-[15px]">
                            <div class="col-md-3">
                                <label for="selectBox" class="shrink-0 mr-[15px] block">Client:</label>
                                <input type="text" class="form-control" name="client_name" placeholder="Enter client" />
                            </div>
                            <div class="col-md-3">
                                <label for="selectBox" class="block">Medicaid ID</label>
                                <input type="text" class="form-control" name="medicaid_id" placehoder="Enter Medicaid ID" />
                            </div>
                            <div class="col-md-3">
                                <label for="selectBox" class="shrink-0 mr-[15px] block">Employee:</label>
                                <input type="text" class="form-control" name="employee" placehoder="Enter Employee" />
                            </div>
                            <div class="col-md-3">
                                <label for="selectBox" class="shrink-0 mr-[15px] block">Employee SSN 000-00-0000:</label>
                                <input type="text" class="form-control" name="employee_ssn" placehoder="Enter Employee SSN" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="selectBox" class="block">From Date:</label>
                                <input type="date" class="form-control" name="filter_start_date" />
                            </div>
                            <div class="col-md-3">
                                <label for="selectBox" class="block">To Date:</label>
                                <input type="date" name="filter_end_date" class="form-control" />
                            </div>
                            <div class="col-md-3">
                                <label for="selectBox" class="block">Visit Status:</label>
                                <select class="form-control">
                                    <option value="all">All</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="selectBox" class="block">Filter Visit By:</label>
                                <select class="form-control">
                                    <option value="all">All exceptions</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" style="background-color: #0b5ed7;border-color: #0a58ca;">Search</button>
                        </form>
                        <table id="evvResolutionCenter" class="ux ou display nowrap" style="width:100%">
                            <thead class="bg-[#4133BF] from-sky-300">
                            <tr>
                                <th></th>
                                <th class="text-[#fff]">Client Name</th>
                                <th class="text-[#fff]">Employee Name</th>
                                <th class="text-[#fff]">Service</th>
                                <th class="text-[#fff]">Visit Date</th>
                                <th class="text-[#fff]">Call In</th>
                                <th class="text-[#fff]">Call Out</th>
                                <th class="text-[#fff]">Call Hours</th>
                                <th class="text-[#fff]">Adjusted In</th>
                                <th class="text-[#fff]">Adjusted Out</th>
                                <th class="text-[#fff]">Bill Hours</th>
                                <th class="text-[#fff]">Visit Status</th>
                                <th class="text-[#fff]">Do Not Bill</th>
                                <th class="text-[#fff]">Approved</th>
                                <th class="text-[#fff]">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>(614)743-1164</td>
                                <td>Meredith Michelle</td>
                                <td>Service</td>
                                <td>3/12/2022</td>
                                <td> 7:37 PM</td>
                                <td> 7:37 AM</td>
                                <td>12 Hours</td>
                                <td>09:00AM</td>
                                <td>Adjusted Out</td>
                                <td>Bill Hours</td>
                                <td>In process</td>
                                <td>
                                    <input type="checkbox" class="form-control" />
                                </td>
                                <td>
                                    <input type="checkbox" class="form-control" />
                                </td>
                                <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('extra_js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function () {
            let dataTable = $('#evvResolutionCenter').DataTable({
                scrollX: true,
                order: [ 1, 'asc' ]
            });
        });
    </script>
@endsection
