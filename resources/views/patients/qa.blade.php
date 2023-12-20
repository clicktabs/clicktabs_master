@extends('layouts.app')
@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.min.css') }}">
<style>
    table a {
        color: blue;
    }
    table a b {
        font-weight: 600;
    }
</style>
@endsection
@section('content')
    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="row mb-4">
                <h1 class="fs-2 mb-4 text-dark">Quality Assurance (QA) Center</h1>
                <div class="p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr >
                                <td style="max-width: 200px">
                                    <select class="form-select" aria-label="Location select">
                                        <option value="">Select Location</option>
                                        <option value="">Location 1</option>
                                        <option value="">Location 2</option>
                                        <option value="" selected>Location 3</option>
                                        <option value="">Location 4</option>
                                    </select>
                                </td>
                                <td style="max-width: 200px">
                                    <div id="daterange"  class="float-end" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; text-align:center;height: auto;border-radius: 4px;">
                                        <i style="margin-right: 5px;" class="fa-regular fa-calendar-days"></i><span></span><i class="fa-solid fa-angle-down" style="margin-left: 5px;"></i>
                                    </div>
                                </td>
                                <td style="max-width: 200px">
                                    <select id="task" class="form-select" aria-label="All Tasks select">
                                        <option value="">All Tasks</option>
                                        {{-- <option value="PT Plan of Care">Plan of Care</option> --}}
                                        {{-- <option value="Skilled Nurse Visit">Skilled Nurse Visit</option> --}}
                                        <option value="Plan Of Care">Plan Of Care (485)</option>
                                        {{-- <option value="Open Oasis">Open Oasis</option> --}}
                                        <option value="Orders Not Sent">Orders Not Sent</option>
                                        <option value="Pending Orders Signature">Pending Orders Signature</option>
                                        <option value="Assessment">Oasis-E-SOC-Assessment</option>
                                        <option value="Assessment">Oasis-E-Recertification-Assessment</option>
                                        <option value="Supervisor Visit<">Supervisor Visit</option>
                                    </select>
                                </td>
                                <td style="max-width: 200px">
                                    <select class="form-select" aria-label="All Tasks select">
                                        <option value="">Select Status</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Review">Review</option>
                                        <option value="Submitted">Submitted</option>
                                        <option value="Scheduled">Scheduled</option>
                                        <option value="Missed Visits">Missed Visits</option>
                                        <option value="Open Shift">Open Shift</option>
                                        <option value="Started">Started</option>
                                        <option value="On-hold">On-hold</option>
                                        <option value="Hospitalization">Hospitalization</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <table id="daterange_table" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Patient Name</th>
                            <th>MRN</th>
                            <th>Event Date</th>
                            <th></th>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Notes</th>
                            <th>Assigned To</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

@section('extra_js')
    <script src="{{ asset('assets/js/daterangepicker.min.js') }}"></script>

    <script type="text/javascript">
    $(function () {

        var start_date = moment().subtract(1, 'M');
        var end_date = moment();
        var dateRange = start_date.format('MM/DD/YYYY') + ' - ' + end_date.format('MM/DD/YYYY');

        let startDate = '', endDate = '';
        $('#daterange span').html(dateRange);

        $('#daterange').daterangepicker(function(start_date, end_date){
            $('#daterange span').html(dateRange);
        });
        $('#daterange').on('apply.daterangepicker', function(ev, picker) {
            startDate = picker.startDate.format('MM/DD/YYYY')
            endDate = picker.endDate.format('MM/DD/YYYY')

            table.draw();
        });

        var table = $('#daterange_table').DataTable({
            processing : true,
            serverSide : true,
            ajax : {
                url : "{{ route('patients.qa') }}",
                data : function(data){
                    if( startDate && endDate ) {
                        data.from_date = $('#daterange').data('daterangepicker').startDate.format('MM/DD/YYYY');
                        data.to_date = $('#daterange').data('daterangepicker').endDate.format('MM/DD/YYYY');
                    }
                }
            },
            columns : [
                {data : 'id', name : 'id'},
                {data : 'name', name : 'first_name', className: "details-control"},
                {data : 'mrn', name : 'mrn'},
                {data : 'event_date', name : 'event_date'},
                {data : 'type', name : 'type'},
                {data : 'task', name : 'task'},
                {data : 'status', name : 'status'},
                {data : 'notes', name : 'notes'},
                {data : 'assigned_to', name : 'assigned_to'},
            ]
        });

        function format ( d ) {
            return $(`<tr>
                            <td colspan="9">Patient: <b>DALTON, ANDY</b></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td style="display: none;"></td>
                        </tr>`).toArray();
}


        $('#daterange_table tbody').on('click', 'td.details-control', function () {
            var tr = $(this).parents('tr');
            var row = table.row( tr );

            console.log(row.child);

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row (the format() function would return the data to be shown)
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );

    });
    </script>
@endsection
