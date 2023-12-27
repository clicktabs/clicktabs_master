@extends('layouts.app')
@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/nursingVisitNote/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}" />
<link href="{{asset('assets/css/calendar/style.css')}}" rel="stylesheet"/>
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
color: #0e0e0e !important;
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
color: #0e0e0e !important;
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
.modal [class*="col-md-"] {
    margin: 0.5rem 0;
}

</style>

@endsection
@section('content')
<main>
<div class="main_wrapper">
<div class="container-full">
<div class="row">
<div class="col-lg-12">
<div class="main_content pb-[50px]">
<div id="teb">
<div class="main_content_nav">
<ul class="bg-[#4133BF]">
<li class="{{isset($active)  && $active=='first'?'active':''}}"><a href="#teb-one">Page one</a></li>
<li class="{{isset($active)  && $active=='final'?'active':''}}"><a href="#teb-two" >Page Two</a></li>
</ul>
</div>

@include('skilled-agency.nurse-visit-note.tab2')
@include('skilled-agency.nurse-visit-note.tab1')

</div>
</div>
</div>
</div>
</div><!---end of row from top----->
</div>
</div>
<main>
@endsection

@section('extra_js')

<script>
    @if (isset($active) && $active=='final')

        $(function () {
            $("#teb").tabs({active: 1});
        });

    @else

        $(function () {
            $("#teb").tabs({active: 2});
        });

    @endif
</script>

<script src="{{ asset('assets/js/leaflet.js') }}"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link href="{{ asset('assets/css/maplibre-gl.css') }}" rel='stylesheet' />
<script src="{{ asset('assets/js/maplibre-gl.js') }}"></script>
<script src="{{ asset('assets/js/leaflet-maplibre-gl.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

<script>
    jQuery(document).ready(function() {
        $('.add_new_medication_continue').click(function () {
            $('#continueModal').modal({
                fadeDuration: 100
            });
        });

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
    });
</script>
@endsection