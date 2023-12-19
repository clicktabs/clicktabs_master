@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        {{-- <div class="d-flex">
            <div>
                Minimum date:<input type="text" id="min" name="min">
            </div>
            <div>
                Maximum date::<input type="text" id="max" name="max">
            </div>
        </div> --}}
        {{-- <table border="0" cellspacing="5" cellpadding="5">
            <tbody><tr>
                <td></td>
                <td><input type="text" id="min" name="min"></td>
            </tr>
            <tr>
                <td>Maximum date:</td>
                <td><input type="text" id="max" name="max"></td>
            </tr>
        </tbody></table> --}}
        <table class="ux ou display nowrap w-100" id="timeOffEmployeesLists">
            <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                <tr>
                    <th>Employee</th>
                    <th>Start/Off Time</th>
                    <th>Total Hours</th>
                    <th>Rest Days</th>
                    <th>From</th>
                    <th>Until</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($timeOffEmployeesLists)
                    @foreach ($timeOffEmployeesLists as $timeOffEmployeesList)
                        <tr>
                            <td>{{$timeOffEmployeesList->employee_name}}</td>
                            <td>{{date('h:i A', strtotime($timeOffEmployeesList->intime)).'-'.date('h:i A', strtotime($timeOffEmployeesList->outime))}}</td>
                            <td>{{$timeOffEmployeesList->hours .' hr'}}</td>
                            <td>{{$timeOffEmployeesList->restday}}</td>
                            <td>{{date('M d, Y', strtotime($timeOffEmployeesList->datefrom))}}</td>
                            <td>{{date('M d, Y', strtotime($timeOffEmployeesList->dateto))}}</td>
                            <td class=" @if($timeOffEmployeesList->status==0) text-warning @elseif($timeOffEmployeesList->status==1)text-success @else text-danger @endif">@if($timeOffEmployeesList->status==0) Pending
                              @elseif($timeOffEmployeesList->status==1) Approved
                              @else Declined
                              @endif
                          </td>
                            <td><a href="{{route('edit-request-time-off',['timeOffId'=>$timeOffEmployeesList->id])}}" class="btn btn-primary">Edit</a> <a href="{{route('delete-request-time-off',['timeOffId'=>$timeOffEmployeesList->id])}}" class="btn btn-danger">Delete</a></td>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.4.1/css/dataTables.dateTime.min.css">
@endsection
@section('extra_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.4.1/js/dataTables.dateTime.min.js"></script>
    <script>
        let eId = '';
        $(document).ready(function() {
           var table= $('#timeOffEmployeesLists').DataTable({
                order: [1, 'desc'],
                scrollX: true,
            });

            var minDate, maxDate;
            // Custom filtering function which will search data in column four between two values
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var min = minDate.val();
                    var max = maxDate.val();
                    var date = new Date(data[4]);

                    if (
                        (min === null && max === null) ||
                        (min === null && date <= max) ||
                        (min <= date && max === null) ||
                        (min <= date && date <= max)
                    ) {
                        return true;
                    }
                    return false;
                }
            );


            // Create date inputs
            minDate = new DateTime($('#min'), {
                format: 'MMMM Do YYYY'
            });
            maxDate = new DateTime($('#max'), {
                format: 'MMMM Do YYYY'
            });

            // Refilter the table
            $('#min, #max').on('change', function() {
                table.draw();
            });

        });
    </script>
@endsection
