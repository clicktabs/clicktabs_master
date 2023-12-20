@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}"/>
    <link href="{{asset('assets/css/calendar/style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/oasisCss/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/oasisCss/style_page14.css') }}"/>
    <link rel="stylesheet" href="{{asset('outass/css/style.css')}}">
    <style>
        .dataTables_length label {
            width: 250px;
        }

        .dataTables_length label select {
            width: 100px;  
        }

        table.dataTable > tbody > tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .blocker.jquery-modal {
            z-index: 99;
        }

        .jquery-modal .modal a.close-modal {
            top: 5px;
            right: 5px;
        }

        #patient_status_Modal {
            position: relative !important;
            margin: 0 auto !important;
        }

        .medication-content {
            margin-top: 30px;
        }

        .editEmployeeModal {
            display: none;
        }

        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }

        .avatar-upload .avatar-edit input {
            display: none;
        }

        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .modal {
            height: auto !important;
            width: 65% !important;
        }

        .nav-tabs .nav-link {
            color: #fff !important;
            margin: 5px 5px -1px 5px !important;
            border-right: 1px solid #fff;
            font-weight: bold;
        }

        .nav-tabs .nav-link:hover {
            color: #fff !important;
        }

        .text-dark {
            color: #0e0e0e;
        !important;
            border-color: #1a7eca #1a7eca #1a7eca !important;
            margin: 5px 5px -1px 5px;
            border-bottom: none;
            background-color: linear-gradient(180deg, #4133BF 0%, #848DFF 100%) !important;
            border-bottom: 0px !important;
        }

        .customth {
            background: linear-gradient(180deg, #4133BF 0%, #848DFF 100%);
        }

        #results {
            position: absolute;
            bottom: 0;
            top: 85px;
            background: #fff;
            width: 100%;
            height: 100%;
            padding: 15px;
            overflow: hidden;
            min-height: 250px;
            box-shadow: 0 0px 5px 7px #f5f5f5;
            border-radius: 5px;
            overflow-y: scroll;
        }

        #results ul li {
            padding: 5px;
            cursor: pointer;
        }

        #results ul li:hover {
            background: #f5f5f5;
        }

        .overlay {
            display: none;
        }

        th {
            color: white;
        }

        @media print {
            .no-print {
                display: none;
            }

            /* order management CSS */
            .dataTables_length label {
                width: 250px;
            }

            .dataTables_length label select {
                width: 100px;
            }

            #orderTable {
                padding-top: 30px;
            }

            table.dataTable > tbody > tr.child ul.dtr-details {
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

            .dataTables_length label {
                width: 250px;
            }

            .dataTables_length label select {
                width: 100px;
            }

            table.dataTable > tbody > tr.child ul.dtr-details {
                display: flex;
                align-items: center;
                gap: 20px;
                flex-wrap: wrap;
            }

            .blocker.jquery-modal {
                z-index: 99;
            }

            .jquery-modal .modal a.close-modal {
                top: 15px;
                right: 5px;
            }

            .editEmployeeModal {
                display: none;
            }

            .avatar-upload {
                position: relative;
                max-width: 205px;
                margin: 50px auto;
            }

            .avatar-upload .avatar-edit {
                position: absolute;
                right: 12px;
                z-index: 1;
                top: 10px;
            }

            .avatar-upload .avatar-edit input {
                display: none;
            }

            .avatar-upload .avatar-edit input + label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                background: #FFFFFF;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all 0.2s ease-in-out;
            }

            .avatar-upload .avatar-edit input + label:hover {
                background: #f1f1f1;
                border-color: #d6d6d6;
            }

            .avatar-upload .avatar-preview {
                width: 192px;
                height: 192px;
                position: relative;
                border-radius: 100%;
                border: 6px solid #F8F8F8;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
            }

            .avatar-upload .avatar-preview > div {
                width: 100%;
                height: 100%;
                border-radius: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            .modal {
                height: auto !important;
                width: 65% !important;
            }

            .nav-tabs .nav-link {
                color: #0e0e0e;
                margin: 5px 5px -1px 5px !important;
                border: 1px solid #1a7eca;
                font-weight: bold;
            }

            .nav-tabs .nav-link:hover {

                margin: 5px 5px -1px 5px !important;
                border-top: 1px solid #1a7eca;
                border-right: 1px solid #1a7eca;
                border-left: 1px solid #1a7eca;
            }

            .text-dark {
                color: #0e0e0e;
            !important;
                border-color: #1a7eca #1a7eca #1a7eca !important;
                margin: 5px 5px -1px 5px;
                border-bottom: none;
                background-color: linear-gradient(180deg, #4133BF 0%, #848DFF 100%) !important;
                border-bottom: 0px !important;
            }

            .customth {
                background: linear-gradient(180deg, #4133BF 0%, #848DFF 100%);
            }

            #results {
                position: absolute;
                bottom: 0;
                top: 85px;
                background: #fff;
                width: 100%;
                height: 100%;
                padding: 15px;
                overflow: hidden;
                min-height: 250px;
                box-shadow: 0 0px 5px 7px #f5f5f5;
                border-radius: 5px;
                overflow-y: scroll;
            }

            #results ul li {
                padding: 5px;
                cursor: pointer;
            }

            #results ul li:hover {
                background: #f5f5f5;
            }

            .overlay {
                display: none;
            }

            th {
                color: white;
            }

            @media print {
                .no-print {
                    display: none;
                }

                /* order management CSS */
                .dataTables_length label {
                    width: 250px;
                }

                .dataTables_length label select {
                    width: 100px;
                }

                #orderTable {
                    padding-top: 30px;
                }

                table.dataTable > tbody > tr.child ul.dtr-details {
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
            }
        }
    </style>

    <style>
        #kt_content_container .modal {
            width: 100% !important;
            background: #00000085 !important;
            box-shadow: none !important;
            max-width: 100% !important;
            position: relative;
            top: 0;
            left: 0;
            z-index: 1055;
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }

        #kt_modal_add_event_form.modal {
            position: relative;
            top: 0;
            left: 0;
            z-index: 1055;
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }

        #kt_modal_add_event_form .modal-content {
            box-shadow: none !important;
        }

        #kt_modal_add_event_form.modal.fade .modal-dialog {
            margin: 0 !important;
            width: 100% !important;
            max-width: 100% !important;
            margin-top: 50px !important;
        }

        #kt_modal_add_event_form .close-modal {
            display: none;
        }

        #kt_modal_add_event_form .modal-body {
            padding: 0 !important;
        }

        #kt_modal_add_event_form select, #kt_modal_add_event_form .select_wrapper {
            margin: 0 !important;
        }

        #kt_modal_add_event_form .btn.btn-icon {
            position: relative;
            border: none;
            padding: 0;
            box-shadow: none;
            right: 0;
            text-align: right;
            width: 30px;
            margin-left: auto;
        }

        #kt_content_container {
            /*width: 100% !important;*/
            max-width: 100% !important;
            /*padding: 20px !important;*/
        }

        #schedulingList_wrapper {
            margin-top: 30px !important;
        }

        #hhaEdit, #nursingEdit {
            width: 100% !important;
            max-width: 100% !important;
        }

        #nursingEdit {
            display: none;
        }
        .modal#oasis-e-start-of-care {
            max-width: 100% !important;
            width: 90% !important;
        }

        .ui-tabs-panel .dataTables_scrollHead, .ui-tabs-panel .dataTables_scroll {
            padding-top: 0;
        }

        .ui-tabs-panel .dataTables_scrollHeadInner, .ui-tabs-panel .dataTable {
            width: 100% !important;
        }
    </style>

@endsection
@section('content')
    <main>
        <div class="vs">
            <div class="container-fluid">
                <div class="header bg-[#4133BF]">
                    <div class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}"/>
                    </div>
                    <div class="header_content">
                        <p class="display-4 text-white text--certer" style="font-size: 1.2em;"> {{ $patient->first_name }} {{ $patient->last_name }} @ <span style="font-size: 1.6em;">{{ Auth::user()->organization->name }} </span>
                            </p>
                    </div>
                   </div>
                  <div class="main_wrapper">
                    <div class="container-full">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main_content pb-[50px]">
                                    <div id="tabs">
                                        <div class="main_content_nav">

                                            <ul class="bg-[#4133BF]">
                                                <li class="{{ session('active_status_p', '') }}"><a href="#tabs-patient">Patient</a></li>
                                                <li class="{{ session('active_status_m', '') }}"><a href="#tabs-medication">Medication</a></li>
                                                <li class="{{ session('active_status_a', '') }}"><a href="#tabs-alrg">Allergy</a></li>
                                                <li class="{{ session('active_status_i', '') }}"><a href="#tabs-immunize">Immunization</a></li>
                                                <li class="{{ session('active_status_au', '') }}"><a href="#tabs-auth">Authorization Listings</a></li>
                                                <li><a href="#tabs-communication">Communication Notes</a></li>
                                                <li class="{{ session('active_status_v', '') }}"><a href="#tabs-vital">Vital Signs Charts</a></li>
                                                {{-- <li><a href="#sixty-day-summaries">60 Day Summaries</a></li> --}}
                                                {{-- <li><a href="#tabs-nurseNote">Nurses Visit Note</a></li>
                                                <li><a href="#tabs-nurseNote">Infection Control</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="px-[15px]" id="tabs-immunize">
                                            @include('patients.components.immunize')
                                        </div>

                                        <div class="px-[15px]" id="tabs-patient">
                                            @include('patients.components.patient')
                                        </div>

                                        <div class="px-[15px]" id="tabs-auth">
                                            @include('patients.components.auth')
                                        </div>

                                        <div class="px-[15px]" id="tabs-medication">
                                            @include('patients.components.medication')
                                        </div>

                                        <div class="px-[15px]" id="tabs-alrg">
                                            @include('patients.components.allergy')
                                        </div>

                                        <div class="px-[15px]" id="tabs-communication">
                                            @include('patients-admission.components.communication.index')
                                        </div>

                                        <div class="px-[15px]" id="tabs-vital">
                                            @include('patients.components.vital')
                                        </div>

                                        <div class="px-[15px]" id="tabs-nurseNote">
                                             {{-- @include('patients.nurse-note.index')  --}}
                                        </div>
                                    </div> <!--tabs end-->
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
    <!-- <script src="{{ asset('outass/bs/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/leaflet.js') }}"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <link href="{{ asset('assets/css/maplibre-gl.css') }}" rel='stylesheet'/>
    <script src="{{ asset('assets/js/maplibre-gl.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet-maplibre-gl.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script>
        function fetchReactionMeddrapt() {
            jQuery('.loader_wrap').fadeIn();
            const drugInteractionModal = document.getElementById('drugInteractionModal')
            const secondTableRows = document.querySelectorAll('#secondTable tbody tr');
            const selectedMedicationDosages = [];

            secondTableRows.forEach((row) => {
                const medicationDosage = row.cells[1].innerText;
                selectedMedicationDosages.push(medicationDosage);
            });

            const reactionTableBody = document.querySelector('#reactionTable tbody');
            reactionTableBody.innerHTML = '';

            selectedMedicationDosages.forEach((medicationDosage, i) => {
                const encodedMedicationDosage = encodeURIComponent(medicationDosage);
                const url = `https://api.fda.gov/drug/event.json?search=${encodedMedicationDosage}`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        const results = data.results;
                        if (results.length > 0) {
                            
                            const reactions = results[0].patient.reaction.map(reaction => reaction.reactionmeddrapt);
                            const row = document.createElement('tr');
                            const medicationDosageCell = document.createElement('td');
                            const reactionsCell = document.createElement('td');

                            medicationDosageCell.textContent = medicationDosage;
                            reactionsCell.textContent = reactions.join(', ');

                            row.appendChild(medicationDosageCell);
                            row.appendChild(reactionsCell);
                            reactionTableBody.appendChild(row);

                            drugInteractionModal.style.opacity = '0';
                            drugInteractionModal.style.display = 'none';
                            closeModal();
                            jQuery('.loader_wrap').fadeOut();

                            // Add Hidden data
                            const submitHiddenData = document.querySelector('#submitHiddenData');
                            submitHiddenData.insertAdjacentHTML('afterend', `<input type="hidden" name="drug[${i}][dosage]" value="${medicationDosage}"><input type="hidden" name="drug[${i}][reactions]" value="${reactions.join(', ')}">`);
                        } else {
                            console.log(`No data found for Medication & Dosage: ${medicationDosage}`);
                        }
                    })
                    .catch(error => console.log(error));
            });
        }

        function closeModal() {
            jQuery('.close-modal ').trigger('click');
        }
    </script>
    <script>
        function updateSecondTable() {
            const firstTableRows = document.querySelectorAll('#firstTable tbody tr');
            const secondTableBody = document.querySelector('#secondTable tbody');
            secondTableBody.innerHTML = '';

            firstTableRows.forEach((row) => {
                const checkbox = row.querySelector('.checkbox');
                if (checkbox && checkbox.checked) {
                    const clonedRow = row.cloneNode(true);
                    const actionCells = clonedRow.querySelectorAll('td:last-child');
                    actionCells.forEach((cell) => {
                        cell.parentNode.removeChild(cell);
                    });
                    secondTableBody.appendChild(clonedRow);
                }
            });
        }

        const checkboxes = document.querySelectorAll('#firstTable .checkbox');
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', updateSecondTable);
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.allergy-edit-btn').click(function () {
                var allergyId = $(this).data('allergy-id');
                var url = "{{ route('allergies.editmodal', ':id') }}".replace(':id', allergyId);

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $('#editquickViewModal .edit-modal-content').html(response);
                        $('#editquickViewModal').modal({
                            fadeDuration: 100
                        })
                    },
                    error: function (xhr) {
                        console.log(xhr);
                        // Handle error if needed
                    }
                });
            });
            $('.authorization-edit-btn').click(function () {
                var authorizationId = $(this).data('authorization-id');
                var url = "{{ route('authorizations.editmodal', ':id') }}".replace(':id', authorizationId);

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $('#authorizationEditModal .container').html(response);
                        $('#authorizationEditModal').modal({
                            fadeDuration: 100
                        })
                    },
                    error: function (xhr) {
                        console.log(xhr);
                        // Handle error if needed
                    }
                });
            });

            // Add 60days to episode
            function add_60day(date) {
                if(!date)
                    return;

                const inputDate = new Date(date); // Create a Date object with the input date
                const numberOfDaysToAdd = 60;

                // Calculate the new date by adding the number of days
                const newDate = new Date(inputDate);
                newDate.setDate(newDate.getDate() + numberOfDaysToAdd);

                // Format the new date as YYYY-MM-DD
                const year = newDate.getFullYear();
                const month = String(newDate.getMonth() + 1).padStart(2, '0');
                const day = String(newDate.getDate()).padStart(2, '0');

                const result = `${year}-${month}-${day}`;

                console.log(result);
                $('#episode_end_date').val(result)
            }
            const episode_start_date = $('#episode_start_date').val();
            add_60day(episode_start_date);


            $('#episode_start_date').on('change', function() {
                const episode_start_date = $('#episode_start_date').val();
                add_60day(episode_start_date);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.vital-edit-btn').click(function () {
                var vitalId = $(this).data('vital-id');
                // console.log(vitalId);
                var url = "{{ route('vitals.editmodal', ':id') }}".replace(':id', vitalId);
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $('#editquickViewvitalModal .edit-modal-content2').html(response);
                        $('#editquickViewvitalModal').modal({
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
            $('.immunization-edit-btn').click(function () {
                var immunizationID = $(this).data('immunization-id');
                console.log(immunizationID);
                var url = "{{ route('immunizations.editmodal', ':id') }}".replace(':id', immunizationID);
                console.log(url);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        console.log(response);
                        $('#editquickViewimmunModal .edit-modal-content3').html(response);
                        $('#editquickViewimmunModal').modal({
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
            $('.medication-edit-btn').click(function () {
                var medicationID = $(this).data('medication-id');
                var url = "{{ route('medication.editmodal', ':id') }}".replace(':id', medicationID);
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function (response) {
                        $('#editquickViewmedicationModal .edit-modal-content4').html(response);
                        $('#editquickViewmedicationModal').modal({
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
        let startlat = <?php echo $patient->p_h_lat ? $patient->p_h_lat : '40.4173'; ?>;
        let startlon = <?php echo $patient->p_h_lon ? $patient->p_h_lon : '82.9071'; ?>;

        let options = {
            center: [startlat, startlon],
            zoom: 12
        }

        let map = L.map('map', options);
        let nzoom = 12;


        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: 'OSM'
        }).addTo(map);

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


        $(document).ready(function () {
            $('#sixtyDaysTable').DataTable({
                "scrollX": true,
                searching: false,
            });
            $('#communicationNotes, #episodeManagerList').DataTable({
                "scrollX": true,
                searching: false,
            });
            $('#instructionTable').DataTable({
                "scrollX": true
            });

            $('.add_new_summary').click(function () {
                $('#sixtyDayModal').modal({
                    fadeDuration: 100
                });
            });
        });

        function openPage(evt, sectionIdName) {
            evt.preventDefault();
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(sectionIdName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        $(function () {
            $("#tabs").tabs();
            // $("#nonOasisTab").tabs();

            let currentTab = 0;
            // let oasisTabs = $("#oasis_tabs").tabs();

            $('.continue_next').on('click', function(){
                let next = $(this).data('next');
                openPage(event, next);
                jQuery('.'+next).addClass('active');
            });

            // $('.add_new_medication_discontinue').click(function () {
            //     $('#discontinueModal').modal({
            //         fadeDuration: 100
            //     });
            // });
            $('.add_new_medication_continue').click(function () {
                $('#continueModal').modal({
                    fadeDuration: 100
                });
            });
            $('.add_new_allergy').click(function () {
                $('#allergyModal').modal({
                    fadeDuration: 100
                })
            });
            $('.add_new_authorization').click(function () {
                $('#authorizationModal').modal({
                    fadeDuration: 100
                })
            });
            $('.add_new_immunization').click(function () {
                $('#immunizationModal').modal({
                    fadeDuration: 100
                })
            });
            $('.add_new_vital').click(function () {
                $('#vitalModal').modal({
                    fadeDuration: 100
                })
            });
            $('.add_new_communication').click(function () {
                $('#communicationModal').modal({
                    fadeDuration: 100
                })
            });
            $('.drug_interaction').click(function () {
                $('#drugInteractionModal').modal({
                    fadeDuration: 100
                })
            });
            $('.print_medication').click(function () {
                $('#printMedicationModal').modal({
                    fadeDuration: 100
                })
            });

            $('.accident_risk_assessment').click(function () {
                $('#accident_risk_assessment').modal({
                    fadeDuration: 100
                })
            });

            $('.change_of_physician').click(function () {
                $('#change_of_physician').modal({
                    fadeDuration: 100
                })
            });

            $('.hha_supervisory').click(function () {
                $('#hha_supervisory').modal({
                    fadeDuration: 100
                })
            });

            $('.patient_recertification').click(function () {
                $('#patient_recertification').modal({
                    fadeDuration: 100
                })
            });
            $('.physician_order').click(function () {
                $('#physician_order').modal({
                    fadeDuration: 100
                })
            });
            $('.post_fall_evaluation').click(function () {
                $('#post_fall_evaluation').modal({
                    fadeDuration: 100
                })
            });
            $('.referral_intake').click(function () {
                $('#referral_intake').modal({
                    fadeDuration: 100
                })
            });
            $('.patientStatus').click(function () {
                $('#patientStatus').modal({
                    fadeDuration: 100
                })
            });
            $('.cancelDischarge').click(function () {
                $('.close-modal').trigger('click');
            });

            // https://clinicaltables.nlm.nih.gov/api/rxterms/v3/search?ef=STRENGTHS_AND_FORMS,SXDG_RXCUI,RXCUIS&terms=arava

            jQuery('#results').hide();
            const debounceDelay = 100;
            let debounceTimer;
            let lastSearchQuery = '';
            const apiURL = 'https://clinicaltables.nlm.nih.gov/api/rxterms/v3/search?ef=STRENGTHS_AND_FORMS,SXDG_RXCUI';

            jQuery('#medication_dosage, #medication_dosage_edit').keyup(function () {
                const searchTerm = $(this).val().trim();
                jQuery('.overlay').show();
                clearTimeout(debounceTimer);
                jQuery('#results').show('slow');
                debounceTimer = setTimeout(() => {
                    if (searchTerm === lastSearchQuery) {
                        return;
                    }
                    lastSearchQuery = jQuery(this).val();
                    if (searchTerm !== '') {
                        fetchData(searchTerm);
                    } else {
                        clearMedicationList();
                    }
                }, debounceDelay);
            });

            $(document).on('keyup', '#medication_dosage_edit', function () {
                const searchTerm = $(this).val().trim();
                jQuery('.overlay').show();
                clearTimeout(debounceTimer);
                jQuery('#results_edit').show('slow');
                debounceTimer = setTimeout(() => {
                    if (searchTerm === lastSearchQuery) {
                        return;
                    }
                    lastSearchQuery = jQuery(this).val();
                    if (searchTerm !== '') {
                        fetchData(searchTerm);
                    } else {
                        clearMedicationList();
                    }
                }, debounceDelay);
            });
            let strengthData = [];

            function fetchData(searchTerm) {
                $.ajax({
                    url: apiURL + '&terms=' + searchTerm,
                    method: 'GET',
                    success: function (response) {
                        const data = response;
                        console.log(response)
                        const secondItem = data[1];
                        strengthData = data[2].STRENGTHS_AND_FORMS;
                        displayMedication(secondItem);
                    },
                    error: function (error) {
                        console.log('An error occurred:', error);
                    }
                });
            }

            function displayMedication(medication) {
                // console.log(medication)
                const medicationListDiv = $('#results');
                medicationListDiv.empty();

                let list = $('<ul></ul>');

                if (medication.length > 0) {
                    for (let i = 0; i < medication.length; i++) {
                        list.append(
                            `<li data-medication='${medication[i]}' data-index='${i}' >${medication[i]}</li>`)
                    }
                } else {
                    list.append('<div>No data found</div>');
                }


                medicationListDiv.append(list);
            }

            // Insert drug name
            jQuery('body').on('click', '#results ul li', function () {
                jQuery('#medication_dosage').val(jQuery(this).data('medication'));
                jQuery('#results').fadeOut('fast');
                jQuery('.overlay').hide();
                let index = jQuery(this).data('index');
                jQuery('#drug_strengths').empty();
                jQuery('#drug_strengths').append($('<option>', {
                    value: '',
                    text: 'Select drug strength'
                }));
                for (let i = 0; i < strengthData[index].length; i++) {
                    jQuery('#drug_strengths').append($('<option>', {
                        value: strengthData[index][i],
                        text: strengthData[index][i]
                    }));
                }
            });

            jQuery('.overlay').click(function () {
                jQuery(this).hide();
                jQuery('#results').hide();
            });

            function clearMedicationList() {
                const medicationListDiv = $('#results');
                medicationListDiv.empty();

                jQuery('#drug_strengths').empty();
                jQuery('#drug_strengths').append($('<option>', {
                    value: '',
                    text: 'Select drug strength'
                }));
            }


            jQuery(document).on('submit', '#patientStatusForm', function (e) {
                e.preventDefault();
                jQuery('.loader_wrap').fadeIn();
                jQuery.ajax({
                    url: "{{ route('patient-discharge.store') }}",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        toastr.success(data.message)
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 300;
                        toastr.options.closeEasing = 'swing';
                        toastr.options.progressBar = true;
                        let status = jQuery('#patient_status').val();
                        if(status === 'pending') {
                            window.location = '/pending/patient';
                        } else if(status === 'non-admit') {
                            window.location = '/non-admit-patient'
                        } else {
                            window.location = '/discharge';
                        }
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][
                                0
                                ] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            });

            // jQuery(document).on('submit', '#patientStatusForm', function (e) {
            //     e.preventDefault();
            //     jQuery('.loader_wrap').fadeIn();
            //     jQuery.ajax({
            //         url: "{{ route('patient-discharge.store') }}",
            //         method: 'POST',
            //         data: new FormData(this),
            //         dataType: 'JSON',
            //         contentType: false,
            //         cache: false,
            //         processData: false,
            //         success: function (data) {
            //             toastr.success(data.message)
            //             toastr.options.closeMethod = 'fadeOut';
            //             toastr.options.closeDuration = 300;
            //             toastr.options.closeEasing = 'swing';
            //             toastr.options.progressBar = true;
            //             window.location = '/discharge';
            //         },
            //         error: function (data) {
            //             console.log(data)
            //             let errors = data.responseJSON;
            //             for (const key of Object.keys(errors.errors)) {
            //                 let input = $('#' + key);
            //                 input.addClass('error');
            //                 input.parent().append('<label class="error">' + errors.errors[key][
            //                     0
            //                     ] + '</label>');
            //             }
            //             jQuery('.loader_wrap').fadeOut();
            //         }
            //     });
            // });
        });
    </script>
    <script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
    <script>
        function activateTab(tabNumber) {
            // Remove 'active' class from all tab content panes
            const tabPanes = document.getElementsByClassName('tab-pane');
            for (let i = 0; i < tabPanes.length; i++) {
                tabPanes[i].classList.remove('active');
            }

            // Add 'active' class to the clicked tab content pane
            const tabContent = document.getElementById(`tab-content-${tabNumber}`);
            tabContent.classList.add('active');
        }
    </script>

    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
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
                var url = "{{ route('patient.caregiver.editmodal', ':id') }}".replace(':id', caregiverId);
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

    <script>
        $(function () {
            $("#tub").tabs();
            $('.add_patient_status').click(function () {
                $('#patient_status_Modal').modal({
                    fadeDuration: 100
                });
            });
            $('.add_new_matching').click(function () {
                $('#matchingModal').modal({
                    fadeDuration: 100
                });
            });
            $('.cahps').click(function () {
                $('#cahpsModal').modal({
                    fadeDuration: 100
                });
            });
            $('.planofcare').click(function () {
                $('#planofcareModal').modal({
                    fadeDuration: 100
                });
            });
            $('.assessment').click(function () {
                $('#assessmentModal').modal({
                    fadeDuration: 100
                });
            });
            $('.physicianorders').click(function () {
                $('#physicianordersModal').modal({
                    fadeDuration: 100
                });
            });
            $('.add_new_attribute').click(function () {
                $('#attributeModal').modal({
                    fadeDuration: 100
                });
            });

            $('.add_new_caregiver').click(function () {
                $('#caregiverModal').modal({
                    fadeDuration: 100
                })
            });

            $('.add_new_caregiver').click(function () {
                $('#caregiverModal').modal({
                    fadeDuration: 100
                })
            });

            $('.hha_edit').click(function () {
                let schedule_id = $(this).data('sehedule_id');
                $('.task_schedule_id').val(schedule_id);
                $('#hhaEdit').modal({
                    fadeDuration: 100
                })
            });

            $('.nursing_edit').click(function () {
                let schedule_id = $(this).data('sehedule_id');
                let modal = $(this).data('modal');
                $('.task_schedule_id').val(schedule_id);
                $('#'+modal).modal({
                    fadeDuration: 100
                })
            });

            $('.interactionClose').click(function() {
                $('#drugInteractionModal').modal({
                    fadeDuration: 100
                })
            })
        });


    </script>

    <script>
        $('#caregiver_table').DataTable({
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
            order: [1, 'asc'],
            dom: 'Bfrtip',

        });
        $('#masterCalendarTable').DataTable({
            scrollX: true,
        });

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
            order: [1, 'asc'],
            dom: 'Bfrtip',

        });

        $('#matching_table').DataTable({
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
            order: [1, 'asc'],
            dom: 'Bfrtip',

        });

    </script>

    <script>
        function reset_modal_input() {
            $('#kt_calendar_datepicker_start_date, #kt_calendar_datepicker_end_date, #patient, #client_assess, #employee, #task, #sc_sub_addon_id, #bill_unit_type, #pay_unit_type, #scheduling_status, #payor_sub_addon_id, #scheduling_notes').val('');
            $('#mi_no_select').append();
            $('.total_hrs').text(`00 H : 00 M`);
        }

        function updateMiNo(selectElement) {
            // Get the selected option element
            let selectedOption = selectElement.options[selectElement.selectedIndex];
            let miNo = selectedOption.getAttribute('data-mi_no');
            // Set the MR No value to the blank option in the mi_no select element
            let miNoSelect = document.getElementById('mi_no_select');

            // Create the blank option if it doesn't exist
            let blankOption = miNoSelect.querySelector('option[value=""]');
            if (!blankOption) {
                blankOption = document.createElement('option');
                blankOption.value = "";
                miNoSelect.appendChild(blankOption);
            }

            // Set the value and text of the blank option
            blankOption.value = miNo;
            blankOption.text = miNo;
            miNoSelect.value = miNo;
        }

        $('#patient_id').change(function () {
            let mi_no = $(this).find(':selected').attr('data-mi_no')
            $('#mi_no_select').empty();
            $('#mi_no_select').append($('<option>', {
                value: mi_no,
                text: mi_no
            }));
        });

        function editWeeklySchedule(id) {
            $.ajax({
                url: "/schedule/get-edit-weekly-schedule",
                type: "POST",
                data: {id: id},
                success: function (data) {
                    if (data.schedule === null) {
                        return;
                    }

                    $('#schadule_id').val(data.schedule.id);
                    $('#patient_id').val(data.schedule.patient_id);
                    $('#mi_no_select').append($('<option>', {
                        value: data.schedule.mi_no,
                        text: data.schedule.mi_no
                    }));

                    $('#client_assess').val(data.schedule.client_assess);
                    $('#employee').val(data.schedule.employee_id);
                    $('#task').val(data.schedule.task);
                    $('#sc_sub_addon_id').val(data.schedule.sc_sub_addon_id);
                    $('#bill_unit_type').val(data.schedule.bill_unit_type);
                    $('#pay_unit_type').val(data.schedule.pay_unit_type);
                    $('#scheduling_status').val(data.schedule.scheduling_status);
                    $('#payor_sub_addon_id').val(data.schedule.payor_sub_addon_id);
                    $('#scheduling_notes').val(data.schedule.scheduling_notes);

                    let originalDateTimeStart = data.schedule.kt_calendar_datepicker_start_date + " " + data.schedule.start_time;
                    let startLocalDate = moment(originalDateTimeStart, "MM-DD-YYYY HH:mm:ss").format("MM-DD-YYYY [T]HH:mm");

                    let originalDateTimeEnd = data.schedule.kt_calendar_datepicker_end_date + " " + data.schedule.end_time;
                    let endLocalDate = moment(originalDateTimeEnd, "MM-DD-YYYY  HH:mm:ss").format("MM-DD-YYYY [T]HH:mm");

                    let start_date = $('#kt_calendar_datepicker_start_date');
                    let end_date = $('#kt_calendar_datepicker_end_date');

                    start_date.val(startLocalDate);
                    end_date.val(endLocalDate);

                    let m1 = moment(startLocalDate, 'MM-DD-YYYY  HH:mm');
                    let m2 = moment(endLocalDate, 'MM-DD-YYYY  HH:mm');
                    let duration = moment.duration(m1.diff(m2));
                    let hours = duration.hours();
                    let minutes = duration.minutes();
                    $('.total_hrs').text(`${Math.abs(hours)} H : ${Math.abs(minutes)} M`);
                }
            });
        }

        $('#rec_event_data').click(function () {
            $('.week_lists').css("display", "flex").fadeIn();
        });
        $('#schedulingList').DataTable({
            scrollX: true,
            ajax: {
                data: {
                    id: {{$patient->id}}
                },
                url: "/schedule/get-patient-schedule",
            },
            columns: [
                {data: 'first_name'},
                {data: 'patient_first_name'},
                {data: 'kt_calendar_datepicker_start_date'},
                {data: 'kt_calendar_datepicker_start_date'},
                {data: 'start_time'},
                {data: 'end_time'},
                {
                    data: 'scheduling_status',
                    orderable: false,
                    "mRender": function (data, type, row) {
                        return `<div class="rounded-[5px] ${data === 'scheduled' ? 'scheduled' : data === 'started' ? 'started' : data === 'open_shift' ? 'open_shift' : data === 'no_show' ? 'no_show' : data === 'on_hold' ? 'on_hold' : data === 'hospitalization' ? 'hospitalization' : 'completed'}">
    <span class="text-white block text-center py-[5px] px-[10px] border-none">${data === 'scheduled' ? 'Scheduled' : data === 'started' ? 'Started' : data === 'open_shift' ? 'Open Shift' : data === 'no_show' ? 'No Show' : data === 'on_hold' ? 'On Hold' : data === 'hospitalization' ? 'Hospitalization' : 'Completed'}</span>
</div>`
                    }
                },
                {
                    data: 'id',
                    className: "dt-center editor-delete",
                    orderable: false,
                    "mRender": function (data, type, row) {
                        return `
                            <button class="btn btn-primary edit" data-eventId="${data}">Edit</button>
                            <button class="btn btn-danger delete" data-eventId="${data}">Delete</button>`
                    }
                }
            ],
        });

        jQuery(document).on('submit', '#scheduleForm', function (e) {
            e.preventDefault();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("_method", "PUT");

            jQuery.ajax({
                url: "/schedule-update/api",
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    jQuery('#schedulingList').DataTable().ajax.reload();
                    $('.jquery-modal.blocker.current').trigger('click');
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        })

        $('body').on('click', '.edit', function () {
            $('#kt_modal_add_event_form').modal({
                fadeDuration: 100
            });
            let event_id = $(this).data('eventid');
            editWeeklySchedule(event_id);
        });

        $('#cancel_event_data').click(function () {
            $('.jquery-modal.blocker.current').trigger('click');
        });

        $('body').on('click', '.delete', function () {
            jQuery('.loader_wrap').fadeIn();
            let event_id = $(this).data('eventid');
            let data = [event_id];
            $.ajax({
                url: "/schedule/delete-schedule",
                method: 'POST',
                data: {ids: data},
                success: function (data) {
                    jQuery('#schedulingList').DataTable().ajax.reload();
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        })

        $('#kt_modal_add_event_close').click(function () {
            $('.jquery-modal.blocker.current').trigger('click')
        });

        $('.jquery-modal.blocker.current').click(function () {
            $('#kt_modal_add_event_form').modal('hide');
            $('.week_lists').fadeOut();
            reset_modal_input();
            $('#schadule_id').val('');
            $(this).hide();
        });

        jQuery(document).on('submit', '.task_form', function (e) {
            e.preventDefault();
            // let event_id = $('.task_schedule_id').val();
            let formData = new FormData(this);
            // data.append("event_id", event_id);
            $.ajax({
                url: "/generate-pdf",
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    // jQuery('#schedulingList').DataTable().ajax.reload();
                    // jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery(document).on('submit', '#patientEpisodeManagerForm', function (e) {
            e.preventDefault();
            let validator = jQuery('#patientEpisodeManagerForm').validate({
                rules: {
                    start_of_care_date: "required",
                    episode_start_date: "required",
                    episode_end_date: "required",
                    case_manager: "required",
                    primary_insurance: "required",
                    secondary_insurance: "required",
                    primary_physician: "required",
                    comment: "required"
                }
            });

            if (validator.valid()) {
                jQuery('.loader_wrap').fadeIn();
                jQuery.ajax({
                    // data: $('#employeeForm').serialize(),
                    url: "/api/patient-episode-manager",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
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
            }
        });
    </script>
<script>
    $(document).ready(function() {
        var dataForSchedulingList2 = [];
        var dataForSchedulingList3 = [];

        // Fetch the schedule data from the server
        $.ajax({
            url: "/schedule/get-schedule",
            success: function (result) {
                // Filter the data based on the 'task'
                result.data.forEach(function(item) {
                    if (item.task === 'HHA Visit (Billable)' || item.task === 'DSP (Billable)') {
                        dataForSchedulingList3.push(item);
                    } else {
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
                                let subscriptionPlanType = 1 || "DefaultPlan";
                                let buttonsHtml = '';
                                if (subscriptionPlanType === 'DOODD and home healthcare') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else if (subscriptionPlanType === 'Private Care') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else if (subscriptionPlanType === 'Home healthcare') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else if (subscriptionPlanType === 'Combo') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else {
                                    buttonsHtml = 'No permission';
                                }
                                return buttonsHtml;
                            }
                        },
                    ],

                });

                // Initialize schedulingList3 DataTable
                $('#schedulingList3').DataTable({
                    scrollX: true,
                    data: dataForSchedulingList3,
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
                                let subscriptionPlanType = 1 || "DefaultPlan";

                                let buttonsHtml = '';

                                if (subscriptionPlanType === 'DOODD and home healthcare') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else if (subscriptionPlanType === 'Private Care') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else if (subscriptionPlanType === 'Home healthcare') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else if (subscriptionPlanType === 'Combo') {
                                    buttonsHtml += `<a href="#" class="btn btn-primary" target="_blank">Open</a>`;
                                } else {
                                    buttonsHtml = 'No permission';
                                }
                                return buttonsHtml;
                            }
                        },
                    ]
                });
            }
        });
    });
</script>
@endsection
