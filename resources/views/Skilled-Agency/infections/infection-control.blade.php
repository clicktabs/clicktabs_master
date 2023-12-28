@extends('layouts.app')
@section('extra_css')
<style>.table>:not(caption)>*>*{padding-left:.8rem;padding-right:.81rem}.clean-input-group{align-items:flex-end;column-gap:10px}.clean-input-group .form-control,.clean-input-group .input-group-text{border-radius:0;border:0;padding:0;background:0 0}.clean-input-group .form-control{border-bottom:var(--bs-border-width) solid var(--bs-border-color)}.clean-input-group .form-control:focus{border-color:transparent;box-shadow:none;border-bottom:var(--bs-border-width) solid #000}.table.bg-transparent>:not(caption)>*>*{background-color:transparent}.has-search{position:relative}.has-search .form-control{padding-right:2.375rem}.has-search .icon-search{position:absolute;top:50%;right:10px;z-index:2;display:block;width:1.2rem;height:1.2rem;line-height:1.2rem;text-align:center;pointer-events:none;color:#aaa;margin-top:-12px}.has-search .icon-search svg{fill:#aaa}.dataTables_paginate{display:flex;justify-content:end}.dataTables_filter label,.dataTables_length label{display:flex;align-items:center;column-gap:10px;font-weight:500}.dataTables_length label select{width:50px}.dataTables_filter label{justify-content:end}.dataTables_filter input.form-control{max-width:200px}@media print{body{-webkit-print-color-adjust:exact;print-color-adjust:exact}.d-flex,.d-lg-flex,.d-md-flex{display:flex!important}.form-select{width:100%!important;min-width:100%!important}}.modal-dialog{max-width: 100%;}.bg-primary-subtle{background-color:#cfe2ff!important;}.bg-body-secondary{background-color:rgba(233,236,239)!important;}.border{border: 1px solid #a9a9a9!important;}.btn-primary{background-color: #0d6efd!important;border-color:#0d6efd!important;}.btn-primary:hover{background-color:#0b5ed7!important;border-color:#0a58ca!important;}.btn-close{background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat!important;}.form-check-input{margin-top: -4px;}.dataTables_wrapper .dataTables_paginate .paginate_button{padding: 0;}.dataTables_wrapper .dataTables_paginate .paginate_button:hover{border: 1px solid transparent;background: none;}</style>
@endsection
@section('content')
    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="row mb-4">
                <h1 class="fw-bold fs-2">Infection Control</h1>
                <p>Log New Patient Infection</p>

                <div class="border p-3">
                    <!-- New Infection Log -->
                    <form action="" method="post">
                       <div class="new-infection mt-4">
                          <div class="text-end mb-2">
                             <button type="button" class="btn btn-primary open_infection_log_modal">
                                <svg style="width: 14px;fill:#ffffff;top:-2px;position:relative" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path></svg>
                                New Infection Log
                             </button>
                          </div>

                          <div class="bg-primary-subtle border border-primary rounded-1 p-3">
                             <div class="row g-2">
                          
                                   <div class="col">
                                      <div class=""><label for="" class="fw-medium">Branch:</label></div>
                                      <div>
                                         <select class="form-select" name="Branch" aria-label="">
                                            <option>Select</option>
                                            <option value="" selected>Precedence Home Healthcare</option>
                                         </select>
                                      </div>
                                   </div>
                
                                   <div class="col">
                                      <div class=""><label for="" class="fw-medium">Date Range From:</label></div>
                                      <div><input type="date" name="dateRange" class="form-control"></div>
                                    </div>
                                 
                                    <div class="col">
                                       <div class=""><label for="" class="fw-medium">Date Range To:</label></div>
                                       <div><input type="date" name="to" class="form-control"></div>
                                    </div>
                                 </div>
                              </div>

                          <p>No Items Selected</p>

                          <div class="log-table mt-4">
                            <table id="table-logs" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th><label class="form-check-label me-2 fw-medium"><input type="checkbox" name="patient" class="form-check-input"> Patient</label></th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Reported</th>
                                        <th>Follow Up Due</th>
                                        <th>Assigned To</th>
                                        <th>Case Manager</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table rows will be dynamically populated here -->
                                </tbody>
                            </table>
                            <p class="text-body-secondary text-center" style="display: none;">No infections match filter criteria.</p>
                        </div>
                       </div>
                    </form>
                  </div>
            </div>
        </div>
    </main>
@endsection

@section('outer_html')
   <!-- Modal -->
   <div id="infectionLogModal" style="max-width: 70%;" class="max-w-[450px] bg-white p-[15px] hidden !h-fit z-[999]">
         @include('skilled-agency.infections.infection-modal')
    </div>
</div>
@endsection

@section('extra_js')
    <script src="{{asset('assets/js/script.js')}}"></script>

    <script>
        $(document).ready(function() {
            function populateTable(infections) {
                let tableBody = $('#table-logs tbody');
                tableBody.empty();

                infections.forEach(function(infection) {
                    // Check for missing or empty fields and handle accordingly
                    let fullName = 'N/A';
                    if (infection.patient) {
                        let firstName = infection.patient.first_name || '';
                        let lastName = infection.patient.last_name || '';
                        fullName = (firstName || lastName) ? `${firstName} ${lastName}`.trim() : 'N/A';
                    }


                    let type = infection.type || 'N/A';
                    let status = infection.status || 'N/A';
                    let dateReported = infection.dateReported || 'N/A';
                    let followUpDue = infection.follow_up_due || 'N/A';
                    let assignedTo = infection.assigned_to || 'N/A';

                    let cfullName = 'N/A';
                    if (infection.case_manager) {
                        let cfirstName = infection.case_manager.first_name || '';
                        let clastName = infection.case_manager.last_name || '';
                        cfullName = (cfirstName || clastName) ? `${cfirstName} ${clastName}`.trim() : 'N/A';
                    }

                    let afullName = 'N/A';
                    if (infection.infection_reported_to) {
                        let afirstName = infection.infection_reported_to.first_name || '';
                        let alastName = infection.infection_reported_to.last_name || '';
                        afullName = (afirstName || alastName) ? `${afirstName} ${alastName}`.trim() : 'N/A';
                    }

                    let row = $('<tr>');
                    row.append($('<td>').text(fullName));
                    row.append($('<td>').text(type));
                    row.append($('<td>').text(status));
                    row.append($('<td>').text(dateReported));
                    row.append($('<td>').text(followUpDue));
                    row.append($('<td>').text(afullName));
                    row.append($('<td>').text(cfullName));

                    tableBody.append(row);
                });
            }
            $.ajax({
                url: '/api/infections',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.data && response.data.length > 0) {
                        populateTable(response.data);
                    } else {
                        console.log("No data or empty data received");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log('Error:', textStatus, errorThrown);
                    alert('Error loading infection data');
                }
            });
        });

    </script>

    <script>
        jQuery(document).ready(function($) {
            $('.open_infection_log_modal').click(function () {
                $('#infectionLogModal').modal({
                    fadeDuration: 100
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/admited/patients',
                type: 'GET',
                dataType: 'json',
                success: function(patients) {
                    let options = '<option>Select</option>';
                    $.each(patients, function(key, patient) {
                        let fullName = patient.first_name + ' ' + patient.last_name;
                        options += '<option value="' + patient.id + '">' + fullName + '</option>';
                    });
                    $('select[name="patient_id"]').html(options);
                },
                error: function() {
                    alert('Error loading patients');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function populateDropdown(selector, data) {
                let options = '<option>Select</option>';
                $.each(data, function(key, item) {
                    let fullName = item.first_name + ' ' + item.last_name;
                    options += '<option value="' + item.id + '">' + fullName + '</option>';
                });
                $(selector).html(options);
            }

            $.ajax({
                url: '/api/physician',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    populateDropdown('select[name="primaryPhysician_id"]', response.data);
                    populateDropdown('select[name="iatcPhysician_id"]', response.data);
                },
                error: function() {
                    alert('Error loading physicians');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function populateDropdown(selector, data) {
                let options = '<option>Select</option>';
                $.each(data, function(key, item) {
                    let fullName = item.first_name + ' ' + item.last_name;
                    options += '<option value="' + item.id + '">' + fullName + '</option>';
                });
                $(selector).html(options);
            }

            $.ajax({
                url: '/api/employee',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    populateDropdown('select[name="caseManager_id"]', response.data);
                    populateDropdown('select[name="infectionReportedBy_id"]', response.data);
                    populateDropdown('select[name="infectionReportedTo_id"]', response.data);
                    populateDropdown('select[name="follow-UpRequired"]', response.data);
                },
                error: function() {
                    alert('Error loading physicians');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/employee',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    let options = '<option>Select</option>';
                    $.each(response.data, function(key, employee) {
                        let pfullName = employee.first_name + ' ' + employee.last_name;
                        options += '<option value="' + employee.id + '">' + pfullName + '</option>';
                    });
                    $('select[name="caseManager_id"]').html(options);
                },
                error: function() {
                    alert('Error loading Case Manager');
                }
            });
        });
    </script>

@endsection
