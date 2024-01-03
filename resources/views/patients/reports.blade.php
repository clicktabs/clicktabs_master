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
                <h1 class="fs-2 mb-4 text-dark">Report Center</h1>
                <div class="p-2">
                    <table class="table table-borderless">
                        <tbody>
                            <tr> 
                                <td>
                                    <select class="form-select" aria-label="Location select">
                                        <option value="">Select Location</option>
                                        <option value="">Location 1</option>
                                        <option value="">Location 2</option>
                                        <option value="" selected>Location 3</option>
                                        <option value="">Location 4</option>
                                    </select>
                                </td> 
                                <td style="max-width: 200px">
                                    <select class="form-select" aria-label="Location select" id="switch_table_data">
                                        <option value="">Select Report Item</option>
                                        <option value="Patient Roster">Patient Roster</option>
                                        <option value="Patient Emergency Contact List">Patient Emergency Contact List</option>
                                        <option value="Patient physician List">Patient physician List</option>
                                        <option value="Patient Start of Care List">Patient Start of Care List</option>
                                        <option value="Patient Internal Case Manager List">Patient Internal Case Manager List</option>
                                        <option value="Patient External Case Manager List">Patient External Case Manager List</option>
                                        <option value="Patient Authorisation">Patient Authorisation</option>
                                        <option value="Survey Census">Survey Census</option>
                                        <option value="Drug Interaction">Drug Interaction</option>
                                        <option value="Plan of Care History">Plan of Care History</option>
                                        <option value="Patient Discharge List">Patient Discharge List</option> 
                                        <option value="Patient Infection List">Patient Infection List</option> 
                                        <option value="hysician Order History by Patient">Physician Order History by Patient</option> 
                                        <option value="Employee Roster">Employee Roster</option>
                                        <option value="Expiring Documents">Expiring Documents</option>  
                                        <option value=""></option>  
                                        <option value=""></option>                      
                                    </select>
                                </td>
                                <td><button type="submit" class="btn btn-success hd xu ye print-selected-items" id="generateButton" form="">Generate</button></td>
                                <td style="max-width: 200px">
                                    <div id="daterange"  class="float-end" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; text-align:center;height: auto;border-radius: 4px;">
                                        <i style="margin-right: 5px;" class="fa-regular fa-calendar-days"></i><span></span><i class="fa-solid fa-angle-down" style="margin-left: 5px;"></i>
                                    </div>
                                </td>
                                {{-- <td>
                                    <select id="task" class="form-select" aria-label="All Tasks select">
                                        <option value="">All Tasks</option>
                                        <option value="PT Plan of Care">PT Plan of Care</option>
                                        <option value="Skilled Nurse Visit">Skilled Nurse Visit</option>
                                        <option value="Plan Of Care">Plan Of Care</option>
                                        <option value="Plan Of Care">Plan Of Care</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" aria-label="All Tasks select">
                                        <option value="">Select Status</option>
                                        <option value="" selected>Pending</option>
                                        <option value="">Review</option>
                                        <option value="">Submitted</option>
                                    </select>
                                </td> --}}
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

                {{-- Patient Roster Form --}}
                <form action="{{route('patient.roster.print')}}" method="POST" id="PatientRosterForm" style="display: none;" target="_blank">
                    @csrf
                
                    <table id="PatientRosterTable" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Patient Name</th>
                                <th>MRN</th>
                                <th>Date of Birth</th>
                                <th>Address</th>
                                <th>Physician</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <input type="hidden" class="report-type" name="reportType" value="">
                </form>

                {{-- Employee Roster Form --}}
                <form action="{{route('employee.roster.print')}}" method="POST" id="EmployeeRosterForm" style="display: none;" target="_blank">
                    @csrf
                
                    <table id="EmployeeRosterTable" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Employee Name</th>
                                <th>Employee ID</th>
                                <th>Date of Birth</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <input type="hidden" class="report-type" name="reportType" value="">
                </form>
            </div>

              {{-- Patient Emergency Contact List --}}
              <form action="" method="POST" id="PatientEmergencyContact" style="display: none;" target="_blank">
                @csrf
            
                <table id="PatientEmergencyContactTable" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Employee Name</th>
                            <th>Employee ID</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <input type="hidden" class="report-type" name="reportType" value="">
            </form>
            {{-- Patient physician List --}}
            <form action="" method="POST" id="PatientphysicianList" style="display: none;" target="_blank">
                @csrf
            
                <table id="PatientphysicianListTable" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Patient Name</th>
                            <th>Patient Physician Name</th>
                            <th>Physician NPI</th>
                            <th>Physician Address</th>
                            <th>Physician Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <input type="hidden" class="report-type" name="reportType" value="">
            </form>
            {{--Patient Start of Care List  --}}
            <form action="" method="POST" id="PatientStartofCareList" style="display: none;" target="_blank">
                @csrf
            
                <table id="PatientStartofCareListTable" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>MRN#</th>
                            <th>SSN</th>
                            <th>DOB</th>
                            <th>SOC Date</th>
                            <th>EOC Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <input type="hidden" class="report-type" name="reportType" value="">
            </form>
            {{--Patient Internal Case Manager List  --}}
            <form action="" method="POST" id="InternalCaseManagerListList" style="display: none;" target="_blank">
                @csrf
            
                <table id="InternalCaseManagerListListTable" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>MRN#</th>
                            <th>Internal Case Manager</th>
                            <th>Phone Number</th>
                            <th>Fax Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <input type="hidden" class="report-type" name="reportType" value="">
            </form>
            {{--Patient External Case Manager List  --}}
            <form action="" method="POST" id="ExternalCaseManagerListList" style="display: none;" target="_blank">
                @csrf
            
                <table id="ExternalCaseManagerListListTable" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>MRN#</th>
                            <th>External Case Manager</th>
                            <th>Phone Number</th>
                            <th>Fax Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <input type="hidden" class="report-type" name="reportType" value="">
            </form>
            {{--Patient Authorisation --}}
            <form action="" method="POST" id="PatientAuthorisation" style="display: none;" target="_blank">
                @csrf
            
                <table id="PatientAuthorisationTable" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Patient Name</th>
                            <th>MRN</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Physician</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                <input type="hidden" class="report-type" name="reportType" value="">
            </form>
                 {{--Patient Authorisation --}}
                 <form action="" method="POST" id="SurveyCensus" style="display: none;" target="_blank">
                    @csrf
                
                    <table id="SurveyCensusTable" class="table table-striped" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>MRN#</th>
                                <th>Authorisation Number</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Units Used</th>
                                <th>Units Remaining</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <input type="hidden" class="report-type" name="reportType" value="">
                </form>
        {{--Drug Interaction --}}
        <form action="" method="POST" id="DrugInteraction" style="display: none;" target="_blank">
            @csrf
        
            <table id="DrugInteractionTable" class="table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>MRN#</th>
                        <th>DOB</th>
                        <th>Drug Name</th>
                        <th>Drug Interaction</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <input type="hidden" class="report-type" name="reportType" value="">
        </form>
        {{--Plan of Care History --}}
        <form action="" method="POST" id="PlanofCareHistory" style="display: none;" target="_blank">
            @csrf
        
            <table id="PlanofCareHistoryTable" class="table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>MRN#</th>
                        <th>DOB</th>
                        <th>Plan of Care Date</th>
                        <th>Physician Name</th>
                        <th>Physician NPI</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <input type="hidden" class="report-type" name="reportType" value="">
        </form>
        {{--Patient 60 day Summary--}}
        <form action="" method="POST" id="PatientSummary" style="display: none;" target="_blank">
            @csrf
        
            <table id="PatientSummaryTable" class="table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>MRN#</th>
                        <th>DOB</th>
                        <th>60 day Summary</th>
                        <th>Physician Name</th>
                        <th>Physician NPI</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <input type="hidden" class="report-type" name="reportType" value="">
        </form>

         {{--Patient Orders History --}}
         <form action="" method="POST" id="PatientOrdersHistory " style="display: none;" target="_blank">
            @csrf
        
            <table id="PatientOrdersHistoryTable" class="table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>MRN#</th>
                        <th>DOB</th>
                        <th>Orders</th>
                        <th>Physician Name</th>
                        <th>Physician NPI</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <input type="hidden" class="report-type" name="reportType" value="">
        </form>

         {{--Patient Discharge List  --}}
         <form action="" method="POST" id="DischargeList " style="display: none;" target="_blank">
            @csrf
        
            <table id="DischargeListTable" class="table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>MRN#</th>
                        <th>DOB</th>
                        <th>Insurance</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Discharge Date</th>
                        <th>Physician NPI</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <input type="hidden" class="report-type" name="reportType" value="">
        </form>

        {{--Patient Infection List   --}}
        <form action="" method="POST" id="PatientInfectionList" style="display: none;" target="_blank">
        @csrf
    
        <table id="PatientInfectionTable" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>MRN#</th>
                    <th>DOB</th>
                    <th>Insurance</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Discharge Date</th>
                    <th>Physician NPI</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <input type="hidden" class="report-type" name="reportType" value="">
    </form>

    {{--Expiring Documents --}}
    <form action="" method="POST" id="ExpiringDocuments" style="display: none;" target="_blank">
        @csrf

        <table id="ExpiringDocumentsTable" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>MRN#</th>
                    <th>DOB</th>
                    <th>Insurance</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Discharge Date</th>
                    <th>Physician NPI</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <input type="hidden" class="report-type" name="reportType" value="">
    </form>
        
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
    
        /* 
         * Swith Table Data from Report type selection
        */

        // Patient Roster
        function patientRosterTable() {
            var patientRosterTable = $('#PatientRosterTable').show().DataTable({
                processing : true,
                serverSide : true,
                destroy: true,
                ajax : {
                    url : "{{ route('patients.pull.ajax') }}",
                    /* data : function(data){
                        if( startDate && endDate ) {
                            data.from_date = $('#daterange').data('daterangepicker').startDate.format('MM/DD/YYYY');
                            data.to_date = $('#daterange').data('daterangepicker').endDate.format('MM/DD/YYYY');
                        }
                    } */
                },
                columns : [
                    {data : 'id', name : 'id'},
                    {data : 'name', name : 'first_name', className: "details-control"},
                    {data : 'mrn', name : 'mrn'},
                    {data : 'dob', name : 'date_of_birth'},
                    {data : 'address', name : 'address'},
                    {data : 'physician', name : 'physician'},
                ]
            });

        }

        // Employee Roster
        function employeeRosterTable() {    
            var employeeRosterTable = $('#EmployeeRosterTable').show().DataTable({
                processing : true,
                serverSide : true,
                destroy: true,
                ajax : {
                    url : "{{ route('employees.pull.ajax') }}",
                    /* data : function(data){
                        if( startDate && endDate ) {
                            data.from_date = $('#daterange').data('daterangepicker').startDate.format('MM/DD/YYYY');
                            data.to_date = $('#daterange').data('daterangepicker').endDate.format('MM/DD/YYYY');
                        }
                    } */
                },
                columns : [
                    {data : 'id', name : 'id'},
                    {data : 'name', name : 'first_name', className: "details-control"},
                    {data : 'employee_id', name : 'employee_id'},
                    {data : 'dob', name : 'date_of_birth'},
                    {data : 'address', name : 'address'},
                ]
            });
        }

        $('#switch_table_data').on('change', function() {

            if( !$(this).val() ) {
                location.reload();
                return;
            }

            // Hide other tables
            $('#daterange_table_wrapper').hide();
            $('form').hide();

            let getType = $(this).val();
            let formId = getType.replace(" ", "") + 'Form';
            let generateButton = $('#generateButton');
            generateButton.attr('form', formId);

            // Get Type of Report from Selection
            $('#'+formId).find('.report-type').val(getType);

            // Show the form
            $('#'+formId).show();
            
            switch(getType) {
                case 'Patient Roster':
                    patientRosterTable();
                    // $("#PatientRosterTable").dataTable().destroy();
                    break;

                case 'Employee Roster':
                    employeeRosterTable();
                    break;

                default:
                    table.draw();
            }

        });

        $(document).on('click', '.print-selected-items', function (e) {
            var ids = [];
            $("input[type=checkbox]").each(function () {
                var self = $(this);
                if (self.is(':checked')) {
                    ids.push(self.attr("value"));
                }
            });

            if( ids.length === 0 ) {
                e.preventDefault();
            }
            
        }); 
    });
    </script>
@endsection