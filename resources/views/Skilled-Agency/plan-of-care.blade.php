@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/nursingVisitNote/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/oasisCss/style_page14.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}" />

@endsection
@section('content')
<main>

   <div class="table-responsive m-5">
      <div class="form-holder pt-5 pb-5">
         <form action="" method="post" id="hhcapoc-form">
            <h1 class="text-center">HOME HEALTH CERTIFICATION AND PLAN OF CARE</h1>
                  <div class="row mb-2 fw-bolder border-1 border-secondary">
                     <div class="col-md-6 border border-secondary">
                      
                        <p>Panient Name:</p>
                        <p>Panient DOB:</p>
                        <p>Panient Home Address:</p>
                        <p>City: | State: | Zip:</p>
                        <p>Tel:</p>
                        
                     </div>
                     <div class="col-md-6 border border-secondary">
                         <p>Agency Name:</p>
                         <p>Agency Address:</p>
                         <p>City: | State: | Zip:</p>
                          <p>Tel:</p>
                         <p>Fax:</p>
                 
                     </div>
                  </div>
               <table class="table table-bordered align-middle mb-0">
               <tr>
                  <td>
                     <label for="Patients_hi_claim_no">Patients HI Claim No.</label>
                     <input type="number" name="Patients_hi_claim_no" id="Patients_hi_claim_no" class="form-control">
                  </td>
                  <td>
                     <label for="start_of_care_date">Start Of Care Date</label>
                     <input type="date" name="start_of_care_date" id="start_of_care_date" class="form-control">
                  </td>
                  <td>
                     <label for="certification_period">Certification Period</label>
                     <div class="row row-flex align-items-center gy-2">
                        <div class="col">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text" for="certification_period_from">From:</label>
                              <input type="date" name="certification_period_from" id="certification_period_from" class="form-control">
                           </div>
                        </div>
                        <div class="col">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text" for="certification_period_to">To:</label>
                              <input type="date" name="certification_period_to" id="certification_period_to" class="form-control">
                           </div>
                        </div>
                     </div>
                  </td>
                  <td colspan="2">
                     <label for="medical_record_no">Medical Record No.</label>
                     <input type="number" name="medical_record_no" id="medical_record_no" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="2">   
                        <label for="patient_address">Patients Name and Address</label>
                        <input type="text" name="patient_address" id="patient_address" class="form-control" placeholder="Name">
                     <div class="d-block">
                        <label for="patient_risk_profile_1"></label>
                        <textarea name="patient_risk_profile_1" id="patient_risk_profile_1" cols="30" rows="1" class="form-control" placeholder="Address"></textarea>
                     </div>
                  </td>
                  <td class="labels-group">
                     <span class="fw-semibold d-block">Gender</span>
                     <label class="form-check-label" for="gender_male"><input type="radio" name="gender" id="gender_male" class="form-check-input"> Male</label>
                     <label class="form-check-label" for="gender_female"><input type="radio" name="gender" id="gender_female" class="form-check-input"> Female</label>
                  </td>
                  <td>
                     <label for="date_of_birth">Date of Birth</label>
                     <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                  </td>
                  <td>
                     <label for="phone_number">Phone Number</label>
                     <input type="text" name="phone_number" id="phone_number" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="5">
                     <label for="patient_risk_profile">Patient Risk Profile</label>
                     <textarea name="patient_risk_profile" id="patient_risk_profile" cols="30" rows="7" class="form-control"></textarea>
                  </td>
               </tr>
            </table>

            <table class="table table-bordered align-middle mb-0">
               <tr>
                  <td colspan="3"><b>Clinical Data</b></td>
               </tr>
               <tr>
                  <td>
                     <label for="clinical_manager">Clinical Manager</label>
                     <input type="text" name="" id="" class="form-control">
                  </td>
                  <td rowspan="2">
                     <div class="d-block">
                        <label for="branch_name_and_address">Branch Name and Address</label>
                        <input type="text" name="branch_name_and_address" id="branch_name_and_address" class="form-control" placeholder="Branch Name">
                    </div>
                     <div class="d-block">
                        <label for="address_2"></label>
                        <textarea name="address_2" id="address_2" cols="30" rows="1" class="form-control" placeholder="Address"></textarea>
                     </div>
                  </td>
                  <td>
                     <label for="phone_number">Phone Number</label>
                     <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="(614) 762-8063">
                  </td>
               </tr>
               <tr>
                  <td>
                     <span class="fw-semibold">Provider Number - Medicare Number</span>
                     <div class="d-block">
                        <label for="provider_number"></label>
                        <input type="number" name="provider_number" id="provider_number" class="form-control" placeholder="Provider Number">
                    </div>
                     <div class="d-block">
                        <label for="medicare_number"></label>
                        <input type="number" name="medicare_number" id="medicare_number" class="form-control" placeholder="Medicare Number">
                    </div>
                  </td>
                  <td>
                     <label for="fax_number">Fax Number</label>
                     <input type="text" name="fax_number" id="fax_number" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="3" class="px-3 py-2 bg-secondary-subtle"><b>Primary Diagnosis</b></td>
               </tr>
               <tr>
                  <td>
                     <label for="primary_diagnosis">Code</label>
                     <textarea name="primary_diagnosis" id="primary_diagnosis"  cols="30" rows="2" class="form-control autolineinput"></textarea>
                  </td>
                  <td>
                     <label for="description">Description</label>
                     <textarea name="description" id="description" cols="30" rows="2" class="form-control autolineinput"></textarea>
                  </td>
                  <td>
                     <label for="">Date</label>
                     <input type="date" name="date" id="date" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="3" class="px-3 py-2 bg-secondary-subtle"><b>Secondary/Other Diagnosis</b></td>
               </tr>
               <tr>
                  <td>
                     <label for="secondary_diagnosis">Code</label>
                     <textarea name="secondary_diagnosis" id="secondary_diagnosis" cols="30" rows="8" class="form-control autolineinput"></textarea>
                  </td>
                  <td colspan="2">
                     <label for="description_1">Description</label>
                     <textarea name="description_1" id="description_1" cols="30" rows="8" class="form-control autolineinput"></textarea>
                  </td>
               </tr>
               <tr>
                  <td colspan="3">
                     <label for="mental_status">Mental Status</label>
                     <textarea name="mental_status" id="mental_status" cols="30" rows="8" class="form-control"></textarea>
                  </td>
               </tr>

               <tr>
                  <td colspan="3">
                     <label for="dmeand_supplies">DME and Supplies</label>
                     <textarea name="dmeand_supplies" id="dmeand_supplies" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>

               <tr>
                  <td colspan="3">
                     <label for="">Prognosis</label>
                     <textarea name="" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
               </tr>

               <tr>
                  <td colspan="3">
                     <label for="safety_measures">Safety Measures</label>
                     <textarea name="safety_measures" id="safety_measures" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>

               <tr>
                  <td colspan="3">
                     <label for="nutritional_requirements">Nutritional Requirements</label>
                     <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>

               <tr>
                  <td colspan="3">
                     <label for="">Functional Limitations</label>
                     <textarea name="nutritional_requirements" id="nutritional_requirements" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>

               <tr>
                  <td colspan="3">
                     <label for="nutritional_other">Other</label>
                     <textarea name="nutritional_other" id="nutritional_other" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>

               <tr>
                  <td colspan="3">
                     <label for="activities_permitted">Activities Permitted</label>
                     <textarea name="activities_permitted" id="activities_permitted" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>
            </table>

            <table class="table table-bordered mb-0">
               <tr>
                  <td colspan="2"><b>Treatments</b></td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="medications">Medications</label>
                     <textarea name="medications" id="medications" cols="30" rows="10" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td colspan="2" class="px-3 py-2 bg-secondary-subtle"><b>Allergies</b></td>
               </tr>
               <tr>
                  <td>
                     <label for="substance">Substance</label>
                     <p class="m-0">NKA (Food/ Drug/ Latex/ Environmental)</p>
                     <textarea name="substance" id="substance" cols="30" rows="1" class="form-control"></textarea>
                  </td>
                  <td>
                     <label for="reaction">Reaction</label>
                     <textarea name="reaction" id="reaction" cols="30" rows="2" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="orders_and_treatments">Orders and Treatments</label>
                     <textarea name="orders_and_treatments" id="orders_and_treatments" cols="30" rows="20" class="form-control"></textarea>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p><b>Nurse Signature and Date of Verbal SOC Where Applicable</b></p>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text" for="nurse_signature">Digitally Signed by:</label>
                        <input type="text" name="nurse_signature" id="nurse_signature" class="form-control">
                     </div>
                  </td>
                  <td class="align-middle">
                     <div class="clean-input-group">
                        <label for="date">Date</label>
                        <input type="text" name="date" id="date" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label class="form-check-label" for="i_certify_that_this_patient">
                        <input type="checkbox" name="i_certify_that_this_patient" id="i_certify_that_this_patient" class="form-check-input"> I certify/ recertify that this patient is confined to his/her home and needs intermittent skilled nursing care, physical therapy and/or speech therapy or continues to need occupational therapy. This patient is under my care, and I have authorized the services on this plan of care and I or another physician will periodically review this plan. I attest that a valid face-to-face encounter occurred (or will occur) within timeframe requirements and it is related to the primary reason the patient requires home health services.</label>
                  </td>
                  <td>
                     <label class="form-check-label" for="anyone_who_misrepresents"><input type="checkbox" name="nyone_who_misrepresents" id="nyone_who_misrepresents" class="form-check-input"> Anyone who misrepresents, falsifies, or conceals essential information required for payment of Federal funds may be subject to fine, imprisonment, or civil penalty under applicable Federal laws.</label>
                  </td>
               </tr>
            </table>

            <table class="table table-bordered align-middle mb-0">
               <tr>
                  <td>
                     <label for="primary_physician">Primary Physician</label>
                     <input type="text" name="primary_physician" id="primary_physician" class="form-control">
                  </td>
                  <td rowspan="2">
                     <label for="">Address</label>
                     <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                  </td>
                  <td>
                     <label for="primary_physician_phone">Phone Number</label>
                     <input type="text" name="primary_physician_phone" id="primary_physician_phone" class="form-control" placeholder="(614) 762-8063">
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="physician_npi">NPI</label>
                     <input type="text" name="physician_npi" id="physician_npi" class="form-control">
                  </td>
                  <td>
                     <label for="physician_fax_number">Fax Number</label>
                     <input type="text" name="physician_fax_number" id="physician_fax_number" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                    
                     <div class="clean-input-group mt-2">
                        <label for="attending_physician_signature">Attending Physician's Signature and Date Signed</label>
                        <input type="text" name="attending_physician_signature" id="attending_physician_signature" class="form-control">
                     </div>
                  </td>
                  <td>
                     <div class="clean-input-group">
                        <label for="">Date</label>
                        <input type="text" name="" id="" class="form-control">
                     </div>
                  </td>
               </tr>
            </table>
         </form>
      </div>


   </div>

   @endsection
   
   @section('extra_js')