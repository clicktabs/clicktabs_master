@php
$otherdig='';
$otherdigcode='';
if(isset($patient->diagnosis->other_diagnosis_name)){
    $remove=array('[',']','"');
   $otherdig=$patient->diagnosis->other_diagnosis_name;
   $otherdig=str_replace($remove,"",$otherdig);

   $otherdigcode=$patient->diagnosis->other_diagnosis_code;
   $otherdigcode=str_replace($remove,"",$otherdigcode);

}
@endphp
<table class="table table-bordered align-middle default-td not-responsive">
                     <tr>
                        <td class="p-4">
                           <p class="text-danger border-bottom border-2 pb-2"><b>* = Required Information</b></p>
                           <div class="row row-flex align-items-center gy-3">
                              <div class="col-md-6">
                                 <label for="PhysicianName" class="form-label"><b>Physician's Name:</b></label>

                                 <input type="text" value="{{isset($patient->extra_info->physician->last_name)?$patient->extra_info->physician->last_name.' '.$patient->extra_info->physician->first_name:''}}" name="PhysicianName" id="PhysicianName" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <label for="ClientName" class="form-label"><b>Patient Name:</b></label>
                                 <input type="text" value="{{isset($patient->first_name)?$patient->first_name.' '.$patient->last_name:''}}" name="ClientName" id="ClientName" class="form-control">
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <label for="Address_1" class="form-label"><b>Address:</b></label>
                                 <input type="text"  value="{{isset($patient->extra_info->physician->address_line_1)?$patient->extra_info->physician->address_line_1:''}}" name="Address_1" id="Address_1" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <label for="Address_2" class="form-label"><b>Address:</b></label>
                                 <input type="text"  value="{{isset($patient->extra_info->physician->address_line_2)?$patient->extra_info->physician->address_line_2:''}}" name="Address_2" id="Address_2" class="form-control">
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-3">
                                 <label for="Tel_1" class="form-label"><b>Tel, #:</b></label>
                                 <input type="text"  value="{{isset($patient->extra_info->physician->primary_phone)?$patient->extra_info->physician->primary_phone:''}}" name="Tel_1" id="Tel_1" class="form-control">
                              </div>
                              <div class="col-md-3">
                                 <label for="Fax" class="form-label"><b>Fax #:</b></label>
                                 <input type="text" name="Fax"  value="{{isset($patient->extra_info->physician->fax)?$patient->extra_info->physician->fax:''}}"  id="Fax" class="form-control">
                              </div>
                              <div class="col-md-3">
                                 <label for="Tel_2" class="form-label"><b>Tel, #:</b></label>
                                 <input type="text"  value="{{isset($patient->extra_info->physician->alternate_phone)?$patient->extra_info->physician->alternate_phone:''}}"  name="Tel_2" id="Tel_2" class="form-control">
                              </div>
                              <div class="col-md-3">
                                 <label for="SSS" class="form-label"><b>SSS #:</b></label>
                                 <input type="text" value="{{isset($patient->extra_info->physician->speciality)?$patient->extra_info->physician->speciality:''}}"  name="SSS" id="SSS" class="form-control">
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-3">
                                 <label for="ClientDateOfBirth" class="form-label"><b>Patient's Date of Birth:</b></label>
                                 <input type="date"  value="{{isset($patient->date_of_birth)?$patient->date_of_birth:''}}" name="ClientDateOfBirth" id="ClientDateOfBirth" class="form-control">
                              </div>
                              <div class="col-md-3">
                                 <label for="NPI" class="form-label"><b>NPI #:</b></label>
                                 <input type="text" value="{{isset($patient->social_security_no)?$patient->social_security_no:''}}" name="NPI" id="NPI" class="form-control">
                              </div>
                              <div class="col-md-3">
                                 <label for="Date" class="form-label"><b> Current Date:</b></label>
                                 <input type="date" value="{{date('m-d-Y')}}" name="currentdate" id="Date" class="form-control">
                              </div>
                              <div class="col-md-3 labels-group">
                                 <p class="mb-2"><b>Gender:</b></p>
                                 <label class="form-check-label"><input  {{isset($patient->gender) && $patient->gender=='male'?'checked':''}} type="radio" class="form-check-input"  name="Sex" value="male"> M</label>
                                 <label class="form-check-label"><input  {{isset($patient->gender) && $patient->gender=='female'?'checked':''}} type="radio" class="form-check-input" name="Sex" value="female"> F</label>
                              </div>
                           </div>

                           <p class="mt-4 mb-1"><b>RN to Evaluate for Home Health Care Service</b></p>
                           <div class="labels-group">
                              <label class="form-check-label"><input type="checkbox" class="form-check-input" name="phsicianSkilled" value="1"> Skilled Nursing</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input" name="phsicianHealthAide" value="1"> Home Health Aide</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input" name="phsicianTherapy" value="1"> Therapy (OT/PT/ST)</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input" name="phsicianTherapy" value="1"> Other</label>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <label for="PrimaryDiagnosis" class="form-label"><b>Primary Diagnosis:</b></label>
                                 <input type="text" name="PrimaryDiagnosis"  value="{{isset($patient->diagnosis->primary_diagnosis_name)?$patient->diagnosis->primary_diagnosis_name:''}}" id="PrimaryDiagnosis" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <label for="PD_ICD9" class="form-label"><b>ICD9:</b></label>
                                 <input type="text"  value="{{isset($patient->diagnosis->primary_diagnosis_code)?$patient->diagnosis->primary_diagnosis_code:''}}" name="PD_ICD9" id="PD_ICD9" class="form-control">
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <label for="OtherDiagnosis" class="form-label"><b>Other Diagnosis:</b></label>
                                 <input type="text"  value="{{$otherdig}}" name="OtherDiagnosis" id="OtherDiagnosis" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <label for="OD_ICD9" class="form-label"><b>ICD10:</b></label>
                                 <input type="text"  value="{{$otherdigcode}}" name="OD_ICD9" id="OD_ICD9" class="form-control">
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <input type="text" name="OtherDiagnosis" id="OtherDiagnosis" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <div class="input-group">
                                    <label class="input-group-text">ICD10:</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <input type="text" name="OtherDiagnosis" id="OtherDiagnosis" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <div class="input-group">
                                    <label class="input-group-text">ICD10:</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <input type="text" name="OtherDiagnosis" id="OtherDiagnosis" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <div class="input-group">
                                    <label class="input-group-text">ICD10:</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <input type="text" name="OtherDiagnosis" id="OtherDiagnosis" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <div class="input-group">
                                    <label class="input-group-text">ICD10:</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-6">
                                 <label for="NewMedicationDate" class="form-label"><b>New Medication Date:</b></label>
                                 <input type="text" name="NewMedicationDate" id="NewMedicationDate" class="form-control">
                              </div>
                              <div class="col-md-6">
                                 <label for="OldMedicationsDate" class="form-label"><b>Old Medications and Start Date:</b></label>
                                 <input type="text" name="OldMedicationsDate" id="OldMedicationsDate" class="form-control">
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                              <div class="col-md-12">
                                 <div class="input-group">
                                    <label class="input-group-text"><b>Change in Medications and Date</b>:</label>
                                    <input type="date" id="" class="form-control">
                                 </div>
                              </div>
                           </div>

                           <div class="row row-flex align-items-center gy-3 mt-1">
                               <!--  <div class="col-md-6">
                                 <label for="MdSignature" class="form-label"><b>M.D. Signature:</b></label>
                                 {{-- <input type="text" name="MdSignature" id="MdSignature" class="form-control"> --}}

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#doctorFormModal">Add M.D. Signature</button>

                                <div id="doctorSignatureImageContainer" style="display: none;">
                                    <img id="doctorSignatureImage" src="" alt="Doctor's Signature">
                                </div>


                                 <div class="d-block mt-2">
                                    <label for="MdSignatureDate" class="form-label"><b>Date:</b></label>
                                    <input type="text" name="MdSignatureDate" value="{{date('m-d-Y')}}" id="MdSignatureDate" class="form-control">
                                 </div>
                              </div>-->

                              <div class="col-md-6">
                                 <label for="NurseSignature" class="form-label"><b>Nurse's Signature:</b></label>
                                 {{-- <input type="text" name="NurseSignature" id="NurseSignature" class="form-control"> --}}

                                 <!-- Nurse Signature Button -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nurseFormModal">Add Signature</button>

                                <!-- Nurse Signature image container initially hidden -->
                                <div id="nurseSignatureImageContainer" style="display: none;">
                                    <img id="nurseSignatureImage" src="" alt="Nurse's Signature">
                                </div>

                                 <div class="d-block mt-2">
                                    <label for="NurseSignatureDate" class="form-label"><b>Date:</b></label>
                                    <input type="text" value="{{date('m-d-Y')}}" name="NurseSignatureDate" id="NurseSignatureDate" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                  </table>
                  @include('signature')
