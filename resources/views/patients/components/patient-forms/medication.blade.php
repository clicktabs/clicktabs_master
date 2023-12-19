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
  </style>
  
@endsection
@section('content')
<main>
<div class="px-[15px]" id="tabs-medication">
    <div class="flex items-center gap-[15px] mt-[20px] overflow-x-scroll">
        <button
            class="add_new_medication_continue btn btn-success text-white flex-shrink-0 !bg-[#4133BF]">
            Add Medication
        </button>
        <button
            class="print_medication btn btn-success text-white flex-shrink-0 !bg-[#4133BF]">
            Print Medication Profile
        </button>
        <button
            class="drug_interaction btn btn-success text-white flex-shrink-0 !bg-[#4133BF]">
            Drug Interactions
        </button>
    </div>
    <div class="table-responsive mt-4">
        <div
            class="bg-[#4133BF] py-[8px] border-b border-[#fff] font-bold text-[#fff] text-center">
            Medication List (Active Medication List)
        </div>
        <table class="table" id="firstTable">
            <thead class="bg-[#4133BF] text-[#fff] text-center">
            <tr>
                <th></th>
                <th>Medication & Dosage</th>
                <th>Freq</th>
                <th>Route</th>
                <th>Classification</th>
                <th>Physician</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($medications->where('status', 1) as $row)
                <tr>
                    <td><label><input type="checkbox" class="checkbox"/><span class="ml-3">{{ @$row->start_date }}</span></label></td>
                    <td>{{ @$row->medication_dosage }}</td>
                    <td>{{ @$row->frequency }}</td>
                    <td>{{ @$row->route }}</td>
                    <td>{{ @$row->classification }}</td>
                    @php
                        $physician_info = App\Models\Physician::select('first_name', 'last_name')->where('id', $row->physician)->first();
                    @endphp
                    <td>{{ $physician_info->first_name . ' '. $physician_info->last_name }}</td>
                    <td>
                        <a href="{{ route('medication.changeStatus', $row->id) }}"
                           class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                            {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                        </a>
                    </td>
                    <td>
                        <button type="button"
                                class="btn btn-primary medication-edit-btn"
                                data-medication-id="{{ $row->id }}">Edit
                        </button>
                    </td>
                    <td>
                        <form
                            action="{{ route('medications.destroy', $row->id) }}"
                            id="medication-delete-form"
                            method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                        <button type="button"
                                onclick="event.preventDefault; document.getElementById('medication-delete-form').submit()"
                                class="btn btn-danger">
                            Delate
                        </button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div class="table-responsive mt-4">
        <div
            class="bg-[#4133BF] py-[8px] border-b border-[#fff] font-bold text-[#fff] text-center">
            Medication List (Discontinue Medication List)
        </div>
        <table class="table">
            <thead class="bg-[#4133BF] text-[#fff] text-center">
            <tr>
                <th></th>
                <th>Medication & Dosage</th>
                <th>Freq</th>
                <th>Route</th>
                <th>Classification</th>
                <th>Physician</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($medications->where('status', 0) as $row)
                <tr>
                    <td><label><input type="checkbox"/><span
                                class="ml-3">{{ @$row->start_date }}</span></label>
                    </td>
                    <td>{{ @$row->medication_dosage }}</td>
                    <td>{{ @$row->frequency }}</td>
                    <td>{{ @$row->route }}</td>
                    <td>{{ @$row->classification }}</td>
                    <td>{{ @$row->physician }}</td>
                    <td>
                        <a href="{{ route('medication.changeStatus', $row->id) }}"
                           class="btn btn-{{ $row->status == 1 ? 'danger' : 'success' }}">
                            {{ $row->status == 1 ? 'Inactive' : 'Active' }}
                        </a>
                    </td>
                    <td>
                        <button type="button"
                                class="btn btn-primary medication-edit-btn"
                                data-medication-id="{{ $row->id }}">Edit
                        </button>
                    </td>
                    <td>
                        <form
                            action="{{ route('medications.destroy', $row->id) }}"
                            id="medication-delete-form"
                            method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                        <button type="button"
                                onclick="event.preventDefault; document.getElementById('medication-delete-form').submit()"
                                class="btn btn-danger">
                            Delate
                        </button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div class="modal fade !max-w-full" id="drugInteractionModal" tabindex="-1"
         role="dialog" aria-labelledby="drugInteraction" aria-hidden="true">
        <div class="container">
            <div class="instruction_header bg-[#4133BF] p-[10px]">
                <h3 class="font-[600] text-center text-white">Drug Interaction
                    Checker</h3>
            </div>
            Please unselect the medications from the list to exclude from drug
            interaction check.
            <h5
                class="text-center font-[700] text-[20px] mt-[20px] mb-[10px] text-[#000]">
                Active Medication(S)</h5>
            <div class="table-responsive">
                <table id="secondTable" class="table">
                    <thead class="bg-[#4133BF] text-[#fff] text-center">
                    <tr>
                        <th></th>
                        <th>Medication & Dosage</th>
                        <th>Freq</th>
                        <th>Route</th>
                        <th>Classification</th>
                        <th>Physician</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center"></tbody>
                </table>
            </div>
            <div class="flex items-center justify-center gap-[15px] mt-[20px]">
                <button onclick="fetchReactionMeddrapt()"
                        class="bg-[#4133BF] py-[10px] px-[15px] rounded-[6px] text-[#fff]">
                    Check Interactions
                </button>
                <button onclick="closeModal()"
                    class=" bg-[#4133BF] py-[10px] px-[15px] rounded-[6px] text-[#fff]">
                    Close
                </button>
            </div>
        </div>
    </div>
    <div class="modal fade !max-w-full" id="printMedicationModal" tabindex="-1"
         role="dialog" aria-labelledby="printMedicationModal"
         aria-hidden="true">
        <div class="container">
            <h3 class="font-[600] text-[18px] text-left text-[#000]">Sign
                Medication Profile</h3>
            <div
                class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden mt-[25px]">
                <div class="table-header bg-[#4133BF] text-white p-[10px]">
                    <h4 class="text-white">Patient Information</h4>
                </div>
                <div class="table-responsive p-[10px]">
                    <table class="table border-none">
                        <thead
                            class="text-left bg-[#4133BF] text-[#fff] text-center border-none">
                        <tr class="border-none">
                            <th class="border-none">Admission Period
                                Associated
                            </th>
                            <th class="border-none">Terminal Diagnosis</th>
                            <th class="border-none">Comorbiditles</th>
                            <th class="border-none">Attending Physician</th>
                        </tr>
                        </thead>
                        <tbody class="text-left">
                        <tr>
                            <td class="border-none">07/04/2022-12/31/1999</td>
                            <td class="border-none">Parkinson's disease</td>
                            <td class="border-none">Acute gastric ulcer without
                                hemorrhage or perforation
                            </td>
                            <td class="border-none">Rose, Amy</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                <div class="table-header bg-[#4133BF] text-white p-[10px]">
                    <h4 class="text-white">Active Medication
                        ({{$medications->where('status', 1)->count()}})</h4>
                </div>
                <div class="table-responsive p-[10px]">
                    <table class="table border-none">
                        <thead
                            class="bg-[#4133BF] text-[#fff] text-center border-none">
                        <tr class="border-none">
                            <th>Medication & Dosage</th>
                            <th>Freq</th>
                            <th>Route</th>
                            <th>Classification</th>
                            <th>Physician</th>
                        </tr>
                        </thead>
                        <tbody class="text-left">
                        @foreach ($medications->where('status', 1) as $row)
                            <tr>
                                <td>{{ @$row->medication_dosage }}</td>
                                <td>{{ @$row->frequency }}</td>
                                <td>{{ @$row->route }}</td>
                                <td>{{ @$row->classification }}</td>
                                <td>{{ @$row->physician }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                <div class="table-header bg-[#4133BF] text-white p-[10px]">
                    <h4 class="text-white">Drug Interactions</h4>
                </div>
                <div class="table-responsive p-[10px]">
                    <ul>
                        <li
                            class="flex items-center gap-[15px] text-[11px] mb-[15px]">
                            <table id="reactionTable" class="table">
                                <thead
                                    class="bg-[#4133BF] text-[#fff] text-left">
                                <tr>
                                    <th>Medication & Dosage</th>
                                    <th>Reactions</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                <div class="table-header bg-[#4133BF] text-white p-[10px]">
                    <h4 class="text-white">Active Allergies
                        ({{$allergies->where('status', 1)->count()}})</h4>
                </div>
                <div class="table-responsive p-[10px]">
                    <table class="table mt-4">
                        <thead class="bg-[#4133BF] text-[#fff] text-center">
                        <tr>
                            <th>Allergy</th>
                            <th>Type</th>
                            <th>Severity</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($allergies->where('status', 1) as $row)
                            <tr>
                                <td>{{ @$row->allergy }}</td>
                                <td>{{ @$row->type }}</td>
                                <td>{{ @$row->severity }}</td>
                                <td>{{ @$row->start_date }}</td>
                                <td>{{ @$row->end_date }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div
                class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                <div class="table-header bg-[#4133BF] text-white p-[10px]">
                    <h4 class="text-white">Signature</h4>
                </div>
                <div class="p-[10px]">
                    <div class="flex gap-[10px]">
                        <input class="mt-[5px]" type="checkbox"
                               name="medication_regimen"
                               id="medication_regimen"/>
                        <label for="medication_regimen"
                               class="font-[600]">Acknowledgement of Medication
                            regimen review:
                            I have reviewed all listed medications for potential
                            adverse effects and drug reactions,
                            including ineffective drug therapy, side effects,
                            drug interactions, duplicate drug therapy,
                            medication allergies, and non-compliance with drug
                            therapy and significant reviewed findings
                            with the physician.</label>
                    </div>
                    <div class="row mt-[20px]">
                        <div class="col-md-12">
                            <label for="date_signed" class="py-1 font-[600]">
                                Date Signed <span
                                    class="text-red">*</span></label>
                            <input name="date_signed" id="date_signed"
                                   type="date" class="form-control s ou  p-3"
                                   required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-[15px] mt-[30px]">
                
                <button type="button"
                        class="!bg-[#4133BF] py-[5px] px-[15px] rounded-[5px] text-[#fff] no-print"
                        onclick="printDiv('printMedicationModal')">
                    Sign Medication Profile
                </button>
                <button type="button"
                        class="h-full inline-block w-auto border-[1px] border-[#4133BF] rounded-[5px] bg-transparent text-[#4133BF] px-[15px] py-[5px] no-print">
                    Cancel
                </button>
            </div>
        </div>
    </div>

    <div class="modal fade !max-w-[768px] !w-[768px]" id="continueModal" tabindex="-1" role="dialog" aria-labelledby="continueModal" aria-hidden="true">
        <div class="overlay fixed top-0 left-0 w-full h-full"></div>
        <div class="container">
            <form action="{{ route('medication.discontinue.store') }}"
                  method="POST">
                @csrf
                <div class="medication-content">
                    <div class="row">
                        <h4 class="text-center font-[700] text-[20px] !bg-[#4133BF] text-[#fff] p-2">Add Medications</h4>
                        <div class="col-md-12">
                            <div class="flex items-center gap-[15px]">
                                <input type="checkbox" name="long_standing"
                                       id="long_standing" value="1"/>
                                <label for="long_standing">Long Standing</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="patient_id"
                               value="{{ $patient->id }}">
                        <div class="col-md-6">
                            <label for="conStartDate" class="py-1">Start Date
                                <span class="text-red">*</span></label>
                            <input name="start_date" id="conStartDate"
                                   type="date" placeholder="Date picker"
                                   class="form-control s ou  p-3" required>
                        </div>
                        <div class="col-md-6">
                            <label for="dcThroughDate" class="py-1">D/C Through
                                Date<span class="text-red">*</span></label>
                            <input name="through_date" id="dcThroughDate"
                                   type="date" class="form-control s ou  p-3"
                                   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col relative">
                            <label for="medication_dosage" class="block py-1">
                                Medication & Dosage <span
                                    class="text-red">*</span></label>
                            <input class="form-control" type="text"
                                   name="medication_dosage"
                                   id="medication_dosage"
                                   placeholder="Drug name"/>
                            <span class="text-[12px] block font-[700]">Search for
                                Medication is required to include medication in drug
                                interactions check.</span>
                            <div id="results"></div>
                        </div>
                        <div class="col">
                            <label for="drug_strengths" class="py-1">
                                Medication & Dosage strength <span
                                    class="text-red">*</span></label>
                            <select class="form-control" id="drug_strengths"
                                    name="strength">
                                <option value="">Select drug strength
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="contRoute" class="py-1"> Route <span
                                    class="text-red">*</span></label>
                            <input name="route" id="contRoute" type="text"
                                   placeholder="Route"
                                   class="form-control s ou  p-3"
                                   required>
                        </div>
                        <div class="col-md-6">
                            <label for="contFrequency" class="py-1"> Frequency
                                <span class="text-red">*</span></label>
                            <input name="frequency" id="contFrequency"
                                   type="text" placeholder="Frequency"
                                   class="form-control s ou  p-3" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="contClassification"
                                   class="py-1">Classification
                                <span class="text-red">*</span></label>
                            <input name="classification" id="contClassification"
                                   type="text" placeholder="Classification"
                                   class="form-control s ou  p-3" required>
                        </div>
                        <div class="col-md-6">
                            <label for="medicationType" class="py-1"> Type<span
                                    class="text-red">*</span></label>
                            <select class="form-control !py-[16px]"
                                    name="type">
                                <option value="1">New</option>
                                <option value="0">New</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="contPhysician" class="py-1"> Physician <span class="text-red">*</span></label>
                            <select name="physician">
                                <option value="">Select physician</option>
                                @if($physicians)
                                    @foreach( $physicians as $single_physician )
                                        <option value="{{$single_physician->id}}">{{$single_physician->first_name . ' ' . $single_physician->last_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="contPharmacy" class="py-1"> Pharmacy<span class="text-red">*</span></label>
                            <select name="pharmacy">
                                <option value="">Select pharmacy</option>
                                @if($pharmacies)
                                    @foreach( $pharmacies as $single_pharmacie )
                                        <option value="{{$single_pharmacie->id}}">{{$single_pharmacie->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="medicationType" class="py-1"> Medication
                                status
                                <span class="text-red">*</span></label>
                            <select class="form-control !py-[16px]"
                                    name="status">
                                <option value="1">Continue</option>
                                <option value="0">Dis continue</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="flex items-center gap-[15px]">
                            <button type="submit" class="form-control btn btn-primary !bg-[#4133BF] text-[#fff]">Save &
                                Exit
                            </button>
                            <button type="button" class="form-control btn btn-primary !bg-[#4133BF] text-[#fff]">Exit
                                Without Saving
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <main>

        @endsection
        
        @section('extra_js')
            <script>
                $(function () {
                    $("#teb").tabs();
                });
        
        
                </script>
                <script src="{{ asset('assets/js/leaflet.js') }}"></script>
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
                <link href="{{ asset('assets/css/maplibre-gl.css') }}" rel='stylesheet' />
                <script src="{{ asset('assets/js/maplibre-gl.js') }}"></script>
                <script src="{{ asset('assets/js/leaflet-maplibre-gl.js') }}"></script>
                <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        @endsection
        