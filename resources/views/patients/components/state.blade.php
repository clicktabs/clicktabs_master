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
        #main {
            margin-top: -.5em;
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
                        <p class="display-4 text-white text--certer" style="font-size: 1.2em;"> <span style="font-size: 1.6em;">{{ Auth::user()->organization->name }} </span> 
                    </div>
                </div>
                <div class="main_wrapper">
                    <div class="container-full">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main_content">
                                    <div id="tabs">
                                        <div class="main_content_nav">
                                            <ul>
                                                <li><a href="#main">Main</a></li>
                                                <li><a href="isp">ISP Documentation</a></li>
                                                <li><a href="#annual-agency">Annual Agency Reporting</a></li>
                                                <li><a href="#possible-mui">Possible MUI Report</a></li>
                                                <li><a href="#Hospitalization">Unanticipated Hospitalization Reporting</a></li>
                                                <li><a href="#bhavioral">Unapproved Bhavioral Support</a></li>
                                                <li><a href="unusual-incident">Unusual Incident Reporting</a></li>
                                                <li><a href="#isp-upload">ISP Upload</a></li>
                                            </ul>
                                        </div>
                                        <div id="main">
                                            <div class="patient_info">
                                                <div class="patient_info_wrapper">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-2">
                                                                <div class="patient_image">
                                                                    <img src=""><img src="{{ asset('employee/avatar.svg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-10 col-md-10">
                                                                <div class="row h-full">
                                                                    <div class="col-lg-6">
                                                                        <div class="patient_info_content">
                                                                            <div
                                                                                class="patient_info_content_header d-flex align-items-center">
                                                                                <h1></h1>
                                                                            </div>
                                                                            <div
                                                                                class="patient_info_table table-responsive">
                                                                                <table>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>Patient Name:</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Birthday:</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Phone Number:</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Case Manager / SSA:
                                                                                        <td>
                                                                                         
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="patient_status_table pb-5 " style="margin-top: -2em;">
                                                <div class="main_content_nav">
                                                    <ul>
                                                        <li><a href="#main">Patient Tracking</a></li>
                                                        <li><a href="#pay-rates">Infection Control</a></li>
                                                        <li><a href="#billing-code">Billing Code</a></li>
                                                        <li><a href="#expirations">Expirations</a></li>
                                                        <li><a href="#pay-rates">Pay Rates</a></li>
                                                        <li><a href="#billing-code">Billing Code</a></li>
                                                        <li><a href="#expirations">Expirations</a></li>
                                                        <li><a href="#main">Main</a></li>
                                                        <li><a href="#pay-rates">Pay Rates</a></li>
                                                        <li><a href="#billing-code">Billing Code</a></li>
                                                        <li><a href="#expirations">Expirations</a></li>
                                                        <li><a href="#pay-rates">Pay Rates</a></li>
                                                        <li><a href="#billing-code">Billing Code</a></li>
                                                        <li><a href="#expirations">Expirations</a></li>
                                                    </ul>
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

    {{-- <script>
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
