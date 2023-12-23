   <style>
      .heading_1 {
         font-size: 30px;
         font-weight: 600;
         margin-bottom: 20px;
      }
   </style>

   <div class="table-responsive">
      <div class="form-holder pt-5 pb-5">
         <h1 class="text-center heading_1">HOME HEALTH CERTIFICATION AND PLAN OF CARE</h1>

            <table class="table table-bordered align-middle mb-0">
            <tr>
               <td>
                  <label for="hiClaimNo">Patients HI Claim No.</label>
                  @if (!empty($patient->insurance->medicaid_id) && !empty($patient->insurance->medicare_id))
                  <input type="number"
                        name="hiClaimNo"
                        id="hiClaimNo"
                        class="form-control"
                        value="{{ $patient->insurance->medicaid_id }}">
                    <br>
                    <input type="number"
                        name="medicareId"
                        id="medicareId"
                        class="form-control"
                        value="{{ $patient->insurance->medicare_id }}">
                @elseif (!empty($patient->insurance->medicaid_id) )
                <input type="number"
                    name="hiClaimNo"
                    id="hiClaimNo"
                    class="form-control"
                    value="{{ $patient->insurance->medicaid_id }}">
                @else
                    <input type="number"
                        name="hiClaimNo"
                        id="hiClaimNo"
                        class="form-control"
                        value="{{ !empty($patient->cms->hiClaimNo) ? $patient->cms->hiClaimNo : '' }}">
                @endif
                </td>
               <td>
                  <label for="startOfCareDate">Start Of Care Date</label>
                  <input type="date" name="startOfCareDate" id="startOfCareDate" class="form-control" value="{{$patient?->episode?->start_care_date}}">
               </td>
               <td>
                  <label for="certification_period">Certification Period</label>
                  @php

                  @endphp
                  <div class="row row-flex align-items-center gy-2">
                     <div class="col">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text" for="certiPeriodFrom">From:</label>
                           <input type="date" name="certiPeriodFrom" id="certiPeriodFrom" class="form-control" value="{{$episodeDaterange?->episode_start_date}}">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group clean-input-group">
                           <label class="input-group-text" for="certiPeriodTo">To:</label>
                           <input type="date" name="certiPeriodTo" id="certiPeriodTo" class="form-control" value="{{$episodeDaterange?->episode_end_date}}">
                        </div>
                     </div>
                  </div>
               </td>
               <td colspan="2">
                  <label for="medicalRecordNo">Medical Record No.</label>
                  <input type="text" name="medicalRecordNo" id="medicalRecordNo" class="form-control" value="{{$patient->patient_code}}">
               </td>
            </tr>
            <tr>
               <td colspan="2">
                     <label for="name">Patients Name and Address</label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$patient?->first_name.' '.$patient?->last_name}}">
                  <div class="d-block">
                     <label for="address"></label>
                     <textarea name="address" id="address" cols="30" rows="1" class="form-control" placeholder="Address">{{$patient?->address?->address_line_1.' '.$patient?->address?->address_line_2}}</textarea>
                  </div>
               </td>
               <td class="labels-group">
                  <span class="fw-semibold d-block">Gender</span>
                  <label class="form-check-label" for="gender_male">
                    <input type="radio" name="gender" id="gender_male" value="1" class="form-check-input" {{ $patient?->gender == 'male' ? 'checked' : '' }}> Male
                </label>
                <label class="form-check-label" for="gender_female">
                    <input type="radio" name="gender" value="2" id="gender_female" class="form-check-input" {{ $patient?->gender == 'female' ? 'checked' : '' }}> Female
                </label>

               </td>
               <td>
                  <label for="dateOfBirth">Date of Birth</label>
                  <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" value="{{$patient?->date_of_birth}}">
               </td>
               <td>
                  <label for="phone">Phone Number</label>
                  <input type="text" name="phone" id="phone" class="form-control" value="{{$patient?->address?->phone}}">
               </td>
            </tr>
            <tr>
               <td colspan="5">
                  <label for="riskProfile">Patient Risk Profile: N0415. High-Risk Drug Classes: Use and Indication</label>
                  <textarea name="riskProfile" id="riskProfile" cols="30" rows="7" class="form-control">
                    @forelse($medications as $medication)
                        @if ($medication->status == 1)
                            (N) {{ $medication->medication_dosage }} - {{ $medication->frequency }} - {{ $medication->route }}
                        @else
                            (C) {{ $medication->medication_dosage }} - {{ $medication->frequency }} - {{ $medication->route }}
                        @endif

                    @empty
                        No medications found.
                    @endforelse
                </textarea>
               </td>
            </tr>
         </table>

         <table class="table table-bordered align-middle mb-0">
            <tr>
               <td colspan="3"><b>Clinical Data</b></td>
            </tr>
            <tr>
               <td>
                  <label for="clinicalManager">Clinical Manager</label>
                  <input type="text" name="clinicalManager" id="clinicalManager" class="form-control" value="{{$schedule->employee->first_name.' '.$schedule->employee->last_name}}">
               </td>
               <td rowspan="2">
                  <div class="d-block">
                     <label for="branchInfo">Branch Name and Address</label>
                     <input type="text" name="branchInfo" id="branchInfo" class="form-control" placeholder="Branch Name" value="{{$account?->company_name}}">
                  </div>
                  <div class="d-block">
                     <label for="branchAddress"></label>
                     <textarea name="branchAddress" id="branchAddress" cols="30" rows="1" class="form-control" placeholder="Address">{{$account?->address_line}} - {{$account?->zip}}</textarea>
                  </div>
               </td>
               <td>
                  <label for="clinicPhone">Phone Number</label>
                  <input type="text" name="clinicPhone" id="clinicPhone" class="form-control" placeholder="(614) 762-8063" value="{{$account?->phone}}">
               </td>
            </tr>
            <tr>
               <td>
                  <span class="fw-semibold">Provider Number - Medicare Number</span>
                  <div class="d-block">
                     <label for="providerNumber"></label>
                     <input type="number" name="providerNumber" id="providerNumber" class="form-control" placeholder="Provider Number" value="{{$account?->medicare_p_n}}">
                  </div>
               </td>
               <td>
                  <label for="fax">Fax Number</label>
                  <input type="text" name="fax" id="fax" class="form-control" value="{{$account?->fax}}">
               </td>
            </tr>
            <tr>
               <td colspan="3" class="px-3 py-2 bg-secondary-subtle"><b>Primary Diagnosis</b></td>
            </tr>
            <tr>
               <td>
                  <label for="diagonsisCode">Code</label>
                  <textarea name="diagonsisCode" id="diagonsisCode"  cols="30" rows="2" class="form-control autolineinput">{{$patient?->diagnosis?->primary_diagnosis_code}}</textarea>
               </td>
               <td>
                  <label for="description">Description</label>
                  <textarea name="description" id="description" cols="30" rows="2" class="form-control autolineinput">{{$patient?->diagnosis?->primary_diagnosis_name}}</textarea>
               </td>
               <td>
                  <label for="">Date</label>
                  <input type="date" name="date" id="date" class="form-control" value="{{$patient->diagnosis->created_at->format('Y-m-d')}}">
               </td>
            </tr>
            <tr>
               <td colspan="3" class="px-3 py-2 bg-secondary-subtle"><b>Secondary/Other Diagnosis</b></td>
            </tr>
            <tr>
               <td>
                  <label for="secDiagnosisCode">Code</label>
                  <textarea name="secDiagnosisCode" id="secDiagnosisCode" cols="30" rows="8" class="form-control autolineinput">{{$patient?->cms?->secDiagnosisCode}}</textarea>
               </td>
               <td colspan="2">
                  <label for="secDescription">Description</label>
                  <textarea name="secDescription" id="secDescription" cols="30" rows="8" class="form-control autolineinput">{{$patient?->cms?->secDescription}}</textarea>
               </td>
            </tr>
            <tr>
               <td colspan="3">
                  <label for="mentalStatus">Mental Status</label>
                  <textarea name="mentalStatus" id="mentalStatus" cols="30" rows="8" class="form-control">{{$patient?->cms?->mentalStatus}}</textarea>
               </td>
            </tr>

            <tr>
               <td colspan="3">
                  <label for="supplies">DME and Supplies</label>
                  <textarea name="supplies" id="supplies" cols="30" rows="2" class="form-control">{{$patient?->cms?->supplies}}</textarea>
               </td>
            </tr>

            <tr>
               <td colspan="3">
                  <label for="prognosis">Prognosis</label>
                  <textarea name="prognosis" id="prognosis" cols="30" rows="1" class="form-control">{{$patient?->cms?->prognosis}}</textarea>
               </td>
            </tr>

            <tr>
               <td colspan="3">
                  <label for="safety">Safety Measures</label>
                  <textarea name="safety" id="safety" cols="30" rows="2" class="form-control">{{$patient?->cms?->safety}}</textarea>
               </td>
            </tr>

            <tr>
               <td colspan="3">
                  <label for="nutritional">Nutritional Requirements</label>
                  <textarea name="nutritional" id="nutritional" cols="30" rows="2" class="form-control">{{$patient?->cms?->nutritional}}</textarea>
               </td>
            </tr>

            <tr>
               <td colspan="3">
                  <label for="limitations">Functional Limitations</label>
                  <textarea name="limitations" id="limitations" cols="30" rows="2" class="form-control">{{$patient?->cms?->limitations}}</textarea>
               </td>
            </tr>

            <tr>
               <td colspan="3">
                  <label for="other">Other</label>
                  <textarea name="other" id="other" cols="30" rows="2" class="form-control">{{$patient?->cms?->other}}</textarea>
               </td>
            </tr>

            <tr>
               <td colspan="3">
                  <label for="activities">Activities Permitted</label>
                  <textarea name="activities" id="activities" cols="30" rows="2" class="form-control">{{$patient?->cms?->activities}}</textarea>
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
                  <textarea name="medications" id="medications" cols="30" rows="10" class="form-control">{{$patient?->cms?->medications}}</textarea>
               </td>
            </tr>
            <tr>
               <td colspan="2" class="px-3 py-2 bg-secondary-subtle"><b>Allergies</b></td>
            </tr>
            <tr>
               <td>
                  <label for="substance">Substance</label>
                  <p class="m-0">NKA (Food/ Drug/ Latex/ Environmental)</p>
                  <textarea name="substance" id="substance" cols="30" rows="1" class="form-control">{{$patient?->allergy?->allergy}}</textarea>
               </td>
               <td>
                  <label for="reaction">Reaction</label>
                  <textarea name="reaction" id="reaction" cols="30" rows="2" class="form-control">{{$patient?->allergy?->reaction}}</textarea>
               </td>
            </tr>
            <tr>
               <td colspan="2">
                  <label for="treatments">Orders and Treatments</label>
                  <textarea name="treatments" id="treatments" cols="30" rows="20" class="form-control">{{$patient?->cms?->treatments}}</textarea>
               </td>
            </tr>
            <tr>
               <td>
                  <p><b>Nurse Signature and Date of Verbal SOC Where Applicable</b></p>
                  <div class="input-group clean-input-group mt-2">
                     <label class="input-group-text" for="nurseSign">Digitally Signed by:</label>
                     <input type="text" name="nurseSign" id="nurseSign" class="form-control" value="{{$patient?->cms?->nurseSign}}">
                  </div>
               </td>
               <td class="align-middle">
                  <div class="clean-input-group">
                     <label for="signDate">Date</label>
                     <input type="date" name="signDate" id="signDate" class="form-control" value="{{$patient?->cms?->signDate}}">
                  </div>
               </td>
            </tr>
            <tr>
               <td>
                  <label class="form-check-label" for="certify">
                     <input type="checkbox" value="1" name="certify" id="certify" class="form-check-input" value="{{$patient?->cms?->certify}}"> I certify/ recertify that this patient is confined to his/her home and needs intermittent skilled nursing care, physical therapy and/or speech therapy or continues to need occupational therapy. This patient is under my care, and I have authorized the services on this plan of care and I or another physician will periodically review this plan. I attest that a valid face-to-face encounter occurred (or will occur) within timeframe requirements and it is related to the primary reason the patient requires home health services.</label>
               </td>
               <td>
                  <label class="form-check-label" for="fine">
                     <input type="checkbox" value="1" name="fine" id="fine" class="form-check-input" value="{{$patient?->cms?->fine}}"> Anyone who misrepresents, falsifies, or conceals essential information required for payment of Federal funds may be subject to fine, imprisonment, or civil penalty under applicable Federal laws.</label>
               </td>
            </tr>
         </table>

         <table class="table table-bordered align-middle mb-0">
            <tr>
               <td>
                  <label for="physician">Primary Physician</label>
                  <input type="text" name="physician" id="physician" class="form-control" value="{{$patient?->cms?->physician}}">
               </td>
               <td rowspan="2">
                  <label for="physicianAddress">Address</label>
                  <textarea name="physicianAddress" id="physicianAddress" cols="30" rows="2" class="form-control">{{$patient?->cms?->physicianAddress}}</textarea>
               </td>
               <td>
                  <label for="physicianPhone">Phone Number</label>
                  <input type="text" name="physicianPhone" id="physicianPhone" class="form-control" placeholder="(614) 762-8063" value="{{$patient?->cms?->physicianPhone}}">
               </td>
            </tr>
            <tr>
               <td>
                  <label for="npi">NPI</label>
                  <input type="text" name="npi" id="npi" class="form-control" value="{{$patient?->cms?->npi}}">
               </td>
               <td>
                  <label for="physicianFax">Fax Number</label>
                  <input type="text" name="physicianFax" id="physicianFax" class="form-control" value="{{$patient?->cms?->physicianFax}}">
               </td>
            </tr>
            <tr>
               <td colspan="2">

                  <div class="clean-input-group mt-2">
                     <label for="physicianSign">Attending Physician's Signature and Date Signed</label>
                     <input type="text" name="physicianSign" id="physicianSign" class="form-control" value="{{$patient?->cms?->physicianSign}}">
                  </div>
               </td>
               <td>
                  <div class="clean-input-group">
                     <label for="physicianSignDate">Date</label>
                     <input type="date" name="physicianSignDate" id="physicianSignDate" class="form-control" value="{{$patient?->cms?->physicianSignDate}}">
                  </div>
               </td>
            </tr>
         </table>
      </div>
   </div>
