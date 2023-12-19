@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="col-md-6 mb-1 text-end">
            <a href="{{ route('clock-in-out') }}" class="btn btn-outline-primary btn-sm" target="_blank">
                <i class="fas fa-clock"></i><span class="button-with-icon">{{ __('Web Clock') }}</span>
            </a>
        </div>

        <div class="d-flex">
            <div>
                Minimum date:<input type="text" id="min" name="min">
            </div>
            <div>
                Maximum date::<input type="text" id="max" name="max">
            </div>
        </div>
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
        <table class="ux ou display nowrap w-100" id="employeeAttendance">
            <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                <tr>
                    <th>Date</th>
                    <th>Clock In</th>
                    <th>Clock Out</th>
                    <th>Total Hours</th>
                    {{-- <th>Status</th> --}}
                </tr>
            </thead>
            <tbody>
                @if ($employeeAttendanceData)
                    @foreach ($employeeAttendanceData as $employee)
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($employee->date)) }}</td>
                            <td> @php
                                if ($employee->timein !== null) {
                                    if ($time_format == 12) {
                                        echo e(date('h:i:s A', strtotime($employee->timein)));
                                    } else {
                                        echo e(date('H:i:s', strtotime($employee->timein)));
                                    }
                                }
                            @endphp</td>
                            <td> @php
                                if ($employee->timeout !== null) {
                                    if ($time_format == 12) {
                                        echo e(date('h:i:s A', strtotime($employee->timeout)));
                                    } else {
                                        echo e(date('H:i:s', strtotime($employee->timeout)));
                                    }
                                }
                            @endphp</td>
                            <td>
                                @isset($employee->totalhours)
                                    @php
                                        if (stripos($employee->totalhours, '.') === false) {
                                            $h = $employee->totalhours;
                                        } else {
                                            $HM = explode('.', $employee->totalhours);
                                            $h = $HM[0];
                                            $m = $HM[1];
                                        }
                                    @endphp

                                    @if (stripos($employee->totalhours, '.') === false)
                                        {{ $h }} hr
                                    @else
                                        {{ $h }} hr {{ $m }} mins
                                    @endif
                                @endisset
                            </td>
                        </tr>
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
           var table= $('#employeeAttendance').DataTable({
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
