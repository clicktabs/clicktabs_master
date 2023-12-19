@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{asset('assets/css/patients-admission.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/patient/communication/style.css')}}"/>
    <style>
        .dataTables_scroll {
            padding-top: 0 !important;
        }

        /* Green dot */
        .dot.green {
            width: 10px;
            height: 10px;
            display: inline-block;
            background-color: green;
            border-radius: 50%;
            margin-left: 5px;
        }

        /* Yellow dot */
        .dot.yellow {
            width: 10px;
            height: 10px;
            display: inline-block;
            background-color: yellow;
            border-radius: 50%;
            margin-left: 5px;
        }

        /* Red dot */
        .dot.red {
            width: 10px;
            height: 10px;
            display: inline-block;
            background-color: red;
            border-radius: 50%;
            margin-left: 5px;
        }
    </style>
@endsection
@section('content')
    <main>
        <div class="vs">
            <div class="container-fluid">
                <div class="header">
                    <div class="logo">
                        <img src="{{asset('assets/images/logo.png')}}"/>
                    </div>
                    <div class="header_content">
                        <p class="display-4 text-white text--certer" style="font-size: 1.2em;"> {{$employee->first_name}} {{$employee->last_name}} @ <span style="font-size: 1.6em;">{{ Auth::user()->organization->name }} </span>
                    </div>
                </div>
                <div class="main_wrapper">
                    <div class="container-full">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main_content">
                                    <div id="tabs">
                                        <div class="main_content_nav">
                                            @include('employees.hrsection')
                                        </div>
                                        <div id="main">
                                            @include('employees.employee-information')
                                            @include('employees.tasksection')
                                        </div>
                                        <div id="signature" class="mt-[30px]">
                                            <div class="bg-white bd rounded-sm rc">
                                                <div class="row p-3">
                                                    <div class="col-md-6">
                                                        <div class="signature-container">
                                                            <div>
                                                                <canvas id="signatureCanvas" width="400" height="200" style="border: 2px solid black"></canvas>
                                                            </div>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="password" class="label">Password:</label>
                                                            <input type="password" class="form-control" id="passwordq" placeholder="Enter password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pin" class="label">PIN:</label>
                                                            <input type="password" class="form-control" id="pin" placeholder="Enter PIN">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="confirmPin" class="label">Confirm PIN:</label>
                                                            <input type="password" class="form-control" id="confirmPin" placeholder="Confirm PIN">
                                                        </div>
                                                        <div class="button-container mt-3">
                                                            <button id="saveButton" data-signature-upload-route="{{ route('signatures.upload') }}" class="btn ho xi ye">Save</button>
                                                            <button id="clearButton" class="btn btn-danger">Clear</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- @include('employees.components.pay_rate', ['employee' => $employee, 'pay_type' => $pay_type, 'billing_code' => $billing_code, 'employee_pays' => $employee_pays, 'service_code' => $service_code])
                                        @include('employees.components.billing_code', ['billing_code' => $billing_code, 'employee_bills' => array()])
                                        @include('employees.components.expiration', ['employee' => $employee, 'docs'=> $docs]) --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
@endsection

@section('extra_js')
    <script src="{{asset('assets/js/plugins/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
    {{--    --}}
    <script src="{{asset('assets/js/leaflet.js')}}"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link href="{{asset('assets/css/maplibre-gl.css')}}" rel='stylesheet'/>
    <script src="{{asset('assets/js/maplibre-gl.js')}}"></script>
    <script src="{{asset('assets/js/leaflet-maplibre-gl.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="https://unpkg.com/signature_pad"></script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    jQuery('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    jQuery('#imagePreview').hide();
                    jQuery('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        jQuery("#imageUpload").change(function () {
            readURL(this);
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var canvas = document.getElementById('signatureCanvas');
        var signaturePad = new SignaturePad(canvas);

        document.getElementById('saveButton').addEventListener('click', function () {
            var signatureData = signaturePad.toDataURL();
            var password = document.getElementById('passwordq').value;
            var pin = document.getElementById('pin').value;
            var confirmPin = document.getElementById('confirmPin').value;
            var signatureUploadRoute = this.getAttribute('data-signature-upload-route');

            // Send the signatureData, password, and pin to the server for saving to the database
            fetch(signatureUploadRoute, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    signatureImage: signatureData,
                    password: password,
                    pin: pin,
                    confirmPin: confirmPin
                })
            })
                .then(function (response) {
                    if (response.ok) {
                        return response.json(); // Parse the response JSON
                    } else {
                        throw new Error('Failed to save the signature.');
                    }
                })
                .then(function (data) {
                if (data.success) {
                    console.log('Signature saved successfully!');
                    toastr.success(data.success);
                    signaturePad.clear();
                    document.getElementById('passwordq').value = '';
                    document.getElementById('pin').value = ''; // Clear pin field
                    document.getElementById('confirmPin').value = '';
                } else if (data.danger) {
                    console.error(data.danger);
                    toastr.error(data.danger);
                }
            })
                .catch(function (error) {
                    console.error('Failed to save the signature:', error);
                });
        });

        document.getElementById('clearButton').addEventListener('click', function () {
            signaturePad.clear();
        });
    });
</script>
<script>
    $(document).ready(function() {
        var dataForSchedulingList2 = [];

        // Fetch the schedule data from the server
        $.ajax({
            url: "/schedule/employee-wise/get-schedule",
            success: function (result) {
                // Filter the data based on the 'task'
                result.data.forEach(function(item) {
                    if (item.task !== 'HHA Visit (Billable)' && item.task !== 'DSP (Billable)') {
                        dataForSchedulingList2.push(item);
                    }
                });

                // Initialize schedulingList2 DataTable
                $('#schedulingList2').DataTable({
                    scrollX: true,
                    data: dataForSchedulingList2,
                    searching: false,
                    columns: [
                        { data: 'patient_first_name', title: 'Patient First Name' },
                        { data: 'task', title: 'Task' },
                        { data: 'kt_calendar_datepicker_start_date', title: 'Schedule Date' },
                        { data: 'first_name', title: 'Assigned To' },
                        {
                            data: 'scheduling_status',
                            title: 'Scheduling Status',
                            orderable: false,
                            render: function (data, type, row) {
                                return `<div class="rounded-[5px] ${data === 'scheduled' ? 'scheduled' : data === 'started' ? 'started' : data === 'open_shift' ? 'open_shift' : data === 'no_show' ? 'no_show' : data === 'on_hold' ? 'on_hold' : data === 'hospitalization' ? 'hospitalization' : 'completed'}">
                                    <span class="text-white block text-center py-[5px] px-[10px] border-none">${data === 'scheduled' ? 'Scheduled' : data === 'started' ? 'Started' : data === 'open_shift' ? 'Open Shift' : data === 'no_show' ? 'No Show' : data === 'on_hold' ? 'On Hold' : data === 'hospitalization' ? 'Hospitalization' : 'Completed'}</span>
                                </div>`;
                            }
                        },
                        {
                            data: 'id',
                            title: 'Actions',
                            className: "dt-center editor-delete",
                            orderable: false,
                            render: function (data, type, row) {
                                // Removed permission-related code
                                return `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                            }
                        },
                    ],
                });
            }
        });
    });
</script>


    <script>
        let startlat = <?php echo $employee->lat ? $employee->lat : '40.4173'; ?>;
        let startlon = <?php echo $employee->lon ? $employee->lon : '82.9071'; ?>;

        let options = {
            center: [startlat, startlon],
            zoom: 12
        }

        let map = L.map('map', options);
        let nzoom = 12;


        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(map);

        let myMarker = L.marker([startlat, startlon], {
            title: "Coordinates",
            alt: "Coordinates",
            draggable: true
        }).addTo(map).on('dragend', function () {
            let lat = myMarker.getLatLng().lat.toFixed(8);
            let lon = myMarker.getLatLng().lng.toFixed(8);
            let czoom = map.getZoom();
            if (czoom < 18) {
                nzoom = czoom + 2;
            }
            if (nzoom > 18) {
                nzoom = 18;
            }
            if (czoom != 18) {
                map.setView([lat, lon], nzoom);
            } else {
                map.setView([lat, lon]);
            }
            document.getElementById('lat').value = lat;
            document.getElementById('lon').value = lon;
        });


        $('#employeeList').DataTable(
            {
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [{
                    className: 'dtr-control',
                    orderable: false,
                    targets: 0
                }],
                order: [1, 'asc']
            }
        );
        $('#patientTable').DataTable({
            searching: false,
            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs: [{
                className: 'dtr-control',
                orderable: false,
                targets: 0
            }],
            order: [1, 'asc']
        });
        $('#caregiver_table').DataTable({
            searching: false,
            scrollX: true,
        });
        $('#taskTableList').DataTable({
            searching: false,
            scrollX: true,
        });

        // $('#matching_table').DataTable({
        //     searching: false,
        //     scrollX: true,
        // });
        $('#attachment_table').DataTable({
            scrollX: true,
            ajax: {
                url: "/api/employee-attachment?e_id=<?php echo \Route::current()->parameter('employee'); ?>",
            },
            columns: [
                {data: 'document_name'},
                {
                    data: 'document_type',
                    "render": function (data, type, row, meta) {
                        return data.split('.').pop();
                    }
                },
                {
                    data: 'created_at',
                    "render": function (data, type, row, meta) {
                        return moment(data).format('MM/DD/YYYY');
                    }
                },
                {
                    data: 'id',
                    className: "dt-center editor-delete",
                    orderable: false,
                    "mRender": function (data, type, row) {
                        return `
            <button type="button" class="btn btn-primary attachment_print" data-id="${data}">Print</button>
            <button type="button" class="btn btn-danger attachment_delete" data-id="${data}">Delete</button>
            `;
                    }
                }
            ],
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                    {
                        text: 'Add new',
                    }
                ],
                dom: {
                    button: {className: 'btn btn-primary add_new_attachment'}
                },
            },
        });
        $('#matching_table').DataTable({
            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs: [{
                className: 'dtr-control',
                orderable: false,
                targets: 0
            }],
            order: [1, 'asc'],
            searching: false,
            //     scrollX: true,
            // dom: 'Bfrtip',
            // buttons: {
            //     buttons: [
            //     {
            //         text: 'Add new',
            //     }
            //     ],
            //     dom: {
            //         button: {className: 'btn btn-primary add_new_matching'}
            //     },
            // },
        });
        $('#expirations_table').DataTable({
            scrollX: true,
            ajax: {
                url: "/api/employee-expiration?e_id=<?php echo \Route::current()->parameter('employee'); ?>",
            },
            columns: [
                {data: 'expirations_doc_type'},
                {
                    data: 'expirations_date',
                    render: function (data, type, row, meta) {
                        let expirationDate = moment(data);
                        let currentDate = moment();
                        let remainingDays = expirationDate.diff(currentDate, 'days');
                        let dotColor;

                        if (remainingDays > 60) {
                            dotColor = 'green';
                        } else if (remainingDays > 30) {
                            dotColor = 'yellow';
                        } else {
                            dotColor = 'red';
                        }

                        return moment(data).format('MM/DD/YYYY') + '<span class="dot ' + dotColor + '"></span>';
                    }
                },
                {data: 'expiration_notes'},
                {
                    data: 'created_at',
                    render: function (data, type, row, meta) {
                        return moment(data).format('MM/DD/YYYY');
                    }
                },
                {data: 'employee_id'},
                {
                    data: 'id',
                    className: 'dt-center editor-delete',
                    orderable: false,
                    render: function (data, type, row) {
                        return `
                <button type="button" class="btn btn-primary expiration_edit" data-id="${data}">Edit</button>
                <button type="button" class="btn btn-danger expiration_delete" data-id="${data}">Delete</button>
                `;
                    }
                }
            ],
            order: [1, 'asc'],
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                    {
                        text: 'Add new',
                    }
                ],
                dom: {
                    button: {className: 'btn btn-primary add_new_expiration'}
                },
            },
        });
        $('#pay_rate_table').DataTable({
            scrollX: true,
            order: [1, 'asc'],
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                    {
                        text: 'Add new',
                    }
                ],
                dom: {
                    button: {className: 'btn btn-primary add_new_pay_rate'}
                },
            },
        });
        $('#billing_table').DataTable({
            scrollX: true,
            ajax: {
                url: "/api/employee-bill?e_id=<?php echo \Route::current()->parameter('employee'); ?>",
            },
            columns: [
                {data: 'billing_code'},
                {data: 'billing_description'},
                {
                    data: 'created_at',
                    "render": function (data, type, row, meta) {
                        return moment(data).format('MM/DD/YYYY');
                    }
                },
                {data: 'employee_id'},
                {
                    data: 'id',
                    className: "dt-center editor-delete",
                    orderable: false,
                    "mRender": function (data, type, row) {
                        return `
                <button type="button" class="btn btn-primary bill_edit" data-id="${data}">Edit</button>
                <button type="button" class="btn btn-danger bill_delete" data-id="${data}">Delete</button>
                `;
                    }
                }
            ],
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                    {
                        text: 'Add new',
                    }
                ],
                dom: {
                    button: {className: 'btn btn-primary add_new_billing_code'}
                },
            },
        });
        $('#activities_table').DataTable({
            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs: [{
                className: 'dtr-control',
                orderable: false,
                targets: 0
            }],
            order: [1, 'asc'],
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                    {
                        text: 'Add new',
                    }
                ],
                dom: {
                    button: {className: 'btn btn-primary add_new_activities'}
                },
            },
        });
        $(function () {
            $("#tabs").tabs();

            $("#employee_info_tabs").tabs();

            $('.add_new_attachment').click(function () {
                $('#attachmentModal').modal({
                    fadeDuration: 100
                });
            });
            $('.add_new_matching').click(function () {
                $('#matchingModal').modal({
                    fadeDuration: 100
                });
            });
            $('.add_new_attribute').click(function () {
                $('#attributeModal').modal({
                    fadeDuration: 100
                });
            });
            $('.add_new_expiration').click(function () {
                $('#expirationsModal').modal({
                    fadeDuration: 100
                });
            });

            $('.add_new_pay_rate').click(function () {
                $('#payRateModal').modal({
                    fadeDuration: 100
                })
            });
            $('.add_new_billing_code').click(function () {
                $('#billingModal').modal({
                    fadeDuration: 100
                })
            });
            $('.add_new_activities').click(function () {
                $('#activitiesModal').modal({
                    fadeDuration: 100
                })
            });
            $('.add_new_caregiver').click(function () {
                $('#caregiverModal').modal({
                    fadeDuration: 100
                })
            });
        });
    </script>
    {{--  Attachment functionality  --}}
    <script>

        jQuery(document).on('submit', '#attachmentModal form', function (e) {
            e.preventDefault();
            let validator = jQuery('#attachmentModal form').validate({
                rules: {
                    document_name: "required",
                }
            });
            if (validator.valid()) {
                jQuery('.loader_wrap').fadeIn();
                jQuery.ajax({
                    url: "{{ route('employee-attachment.store') }}",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        jQuery('.close-modal').trigger('click');
                        $('#attachmentModal form').trigger("reset");
                        jQuery('.loader_wrap').fadeOut();
                        jQuery('#attachment_table').DataTable().ajax.reload();
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            }
        });
        jQuery(document).on('click', '.attachment_delete', function () {
            let attachment_id = jQuery(this).data('id');
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "/api/employee-attachment/" + attachment_id,
                method: 'DELETE',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    jQuery('#attachment_table').DataTable().ajax.reload();
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    console.log(data)
                }
            });
        });
        jQuery(document).on('click', '.attachment_print', function () {
            let attachment_id = jQuery(this).data('id');
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "/api/employee-attachment/" + attachment_id,
                method: 'GET',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    console.log(res)
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    console.log(data)
                }
            });
        });

    </script>
    {{--  End Attachment functionality  --}}
    {{--  Pay rates functionality --}}
    <script>
        let p_id;
        jQuery(document).on('submit', '#payRateForm', function (e) {
            e.preventDefault();
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "{{ route('employee-pay.store') }}",
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data)
                    $('#payRateForm').trigger("reset");
                    jQuery('.loader_wrap').fadeOut();
                    toastr.success(data.message)
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.closeEasing = 'swing';
                    toastr.options.progressBar = true;
                    window.location.reload();
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery('.pay_rate_delete').click(function () {
            let pay_id = jQuery(this).data('id');
            jQuery.ajax({
                url: "/api/employee-pay/" + pay_id,
                method: 'DELETE',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    toastr.success(res.message)
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.closeEasing = 'swing';
                    toastr.options.progressBar = true;
                    window.location.reload()
                },
                error: function (data) {
                    console.log(data)
                }
            });
        });

        jQuery('.pay_edit').click(function () {
            jQuery('#payRateUpdateModal').modal({
                fadeDuration: 100
            });
            p_id = jQuery(this).data('id');
            jQuery.ajax({
                url: "/api/employee-pay/" + p_id + "/edit",
                method: 'GET',
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    // setInputField(data);
                    console.log(data.employee_pays)
                    let pay_rate_start_date = moment(data.employee_pays.pay_rate_start_date).format('YYYY-MM-DD');
                    let pay_rate_end_date = moment(data.employee_pays.pay_rate_end_date).format('YYYY-MM-DD');
                    jQuery('#payRateUpdateModal #pay_rate_start_date').val(pay_rate_start_date);
                    jQuery('#payRateUpdateModal #pay_rate_end_date').val(pay_rate_end_date);
                    jQuery('#payRateUpdateModal #pay_rate_pay_type').val(data.employee_pays.pay_rate_pay_type);
                    jQuery('#payRateUpdateModal #pay_rate_amount').val(data.employee_pays.pay_rate_amount);
                    jQuery('#payRateUpdateModal #pay_rate_service_code').val(data.employee_pays.pay_rate_service_code);
                    jQuery('#payRateUpdateModal #pay_rate_billing_code').val(data.employee_pays.pay_rate_billing_code);
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery(document).on('submit', '#payRateUpdateModal form', function (e) {
            e.preventDefault();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("_method", "PUT")
            jQuery.ajax({
                url: "/api/employee-pay/" + p_id,
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    window.location.reload();
                    $('#payRateUpdateModal form').trigger("reset");
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.close-modal').trigger('click');
                    toastr.success(data.message)
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.closeEasing = 'swing';
                    toastr.options.progressBar = true;
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.close-modal').trigger('click');
                }
            });
        });

    </script>
    {{--  Pay rates functionality end  --}}

    {{--  Billing code functionality --}}
    <script>
        let b_id;
        jQuery(document).on('submit', '#billingForm', function (e) {
            e.preventDefault();
            jQuery.ajax({
                url: "{{ route('employee-bill.store') }}",
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#billingForm').trigger("reset");
                    toastr.success(data.message)
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.closeEasing = 'swing';
                    toastr.options.progressBar = true;
                    // window.location.reload();
                    jQuery('#billing_table').DataTable().ajax.reload();
                    jQuery('.close-modal').trigger('click');
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                }
            });
        });

        jQuery(document).on('click', '.bill_delete', function () {
            let bill_id = jQuery(this).data('id');
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "/api/employee-bill/" + bill_id,
                method: 'DELETE',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    jQuery('#billing_table').DataTable().ajax.reload();
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    console.log(data)
                }
            });
        });

        jQuery(document).on('click', '.bill_edit', function () {
            jQuery('#billingUpdateModal').modal({
                fadeDuration: 100
            });
            b_id = jQuery(this).data('id');
            jQuery.ajax({
                url: "/api/employee-bill/" + b_id + "/edit",
                method: 'GET',
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    jQuery('#billingUpdateModal #billing_code').val(res.data.billing_code);
                },
                error: function (data) {
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery(document).on('submit', '#billingUpdateForm', function (e) {
            e.preventDefault();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("_method", "PUT")
            jQuery.ajax({
                url: "/api/employee-bill/" + b_id,
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#billingUpdateForm').trigger("reset");
                    jQuery('.close-modal').trigger('click');
                    jQuery('#billing_table').DataTable().ajax.reload();
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.close-modal').trigger('click');
                }
            });
        });

    </script>
    {{--  Billing code functionality end  --}}

    {{--  Expiration functionality start  --}}
    <script>
        let e_id;
        jQuery(document).on('submit', '#expirationForm', function (e) {
            e.preventDefault();
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "{{ route('employee-expiration.store') }}",
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#billingForm').trigger("reset");
                    jQuery('.close-modal').trigger('click');
                    jQuery('#expirations_table').DataTable().ajax.reload();
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery(document).on('click', '.expiration_delete', function () {
            let expiration_id = jQuery(this).data('id');
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "/api/employee-expiration/" + expiration_id,
                method: 'DELETE',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    jQuery('#expirations_table').DataTable().ajax.reload();
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    console.log(data)
                }
            });
        });

        jQuery(document).on('click', '.expiration_edit', function () {
            jQuery('#expirationsUpdateModal').modal({
                fadeDuration: 100
            });
            e_id = jQuery(this).data('id');
            jQuery.ajax({
                url: "/api/employee-expiration/" + e_id + "/edit",
                method: 'GET',
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    jQuery('#expirationsUpdateModal #expirations_doc_type').val(res.data.expirations_doc_type);
                    jQuery('#expirationsUpdateModal #expirations_date').val(res.data.expirations_date);
                    jQuery('#expirationsUpdateModal #expiration_notes').val(res.data.expiration_notes);
                },
                error: function (data) {
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery(document).on('submit', '#expirationUpdateForm', function (e) {
            e.preventDefault();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("_method", "PUT")
            jQuery.ajax({
                url: "/api/employee-expiration/" + e_id,
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    $('#billingUpdateForm').trigger("reset");
                    jQuery('.close-modal').trigger('click');
                    jQuery('#expirations_table').DataTable().ajax.reload();
                    jQuery('.loader_wrap').fadeOut();
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.close-modal').trigger('click');
                }
            });
        })
    </script>
    {{--  Expiration functionality end  --}}
    <script>
        let eId = '';
        $(document).ready(function () {
            $('#employeeTable').DataTable({
                order: [1, 'desc'],
                scrollX: true,
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.restriction-edit-btn').click(function () {
                var restrictionId = $(this).data('restriction-id');
                console.log(restrictionId);
                var url = "{{ route('restrictions.editmodal', ':id') }}".replace(':id', restrictionId);
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $('#restrictionEditModal .edit-modal-content').html(response);
                        $('#restrictionEditModal').modal({
                            fadeDuration: 100
                        })
                    },
                    error: function (xhr) {
                        console.log(xhr);
                        // Handle error if needed
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.caregiver-edit-btn').click(function () {
                var caregiverId = $(this).data('caregiver-id');
                // console.log(caregiverId);
                var url = "{{ route('caregivers.editmodal', ':id') }}".replace(':id', caregiverId);
                // console.log(url);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $('#caregiverEditModal .edit-modal-content2').html(response);
                        $('#caregiverEditModal').modal({
                            fadeDuration: 100
                        })
                    },
                    error: function (xhr) {
                        console.log(xhr);
                        // Handle error if needed
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.attribute-edit-btn').click(function () {
                var attributeId = $(this).data('attribute-id');
                // console.log(caregiverId);
                var url = "{{ route('attributes.editmodal', ':id') }}".replace(':id', attributeId);
                // console.log(url);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $('#attributesEditModal .edit-modal-content3').html(response);
                        $('#attributesEditModal').modal({
                            fadeDuration: 100
                        })
                    },
                    error: function (xhr) {
                        console.log(xhr);
                        // Handle error if needed
                    }
                });
            });
        });
    </script>


@endsection

