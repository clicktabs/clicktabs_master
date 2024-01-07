<input type="hidden" name="task_schedule_id" value="{{isset($_COOKIE['schedule_id']) ? $_COOKIE['schedule_id'] : '' }}">
<div class="container">
   <div class="d-flex flex-column" style="background: white;">
       <div class="d-flex flex-row justify-content-between mx-3 " >
           <div>Department of Health and Human Services Centers for Medicare & Medicaid Services</div>
           <div>Form Approved OMB No. 0938-0357</div>
       </div>
       <div class="d-flex flex-column mt-2 border mx-3 mb-4">

           <div class="d-flex justify-content-center border-top py-2 fw-bold border bg-info bg-gradient">HOME HEALTH CERTIFICATION AND PLAN OF CARE</div>

           <div class="d-flex border flex-row">
               <div class="col-md-2 border px-2 py-2">
                   1. Patient's HI Claim No.
                   <input type="text" name="hiClaimNo" id="hiClaimNo" value="{{ $patient->insurance->medicaid_id }}" placeholder="Patient's HI Claim No." class="form-control">
               </div>
               <div class="col-md-2 border px-2 py-2">2. Start Of Care Date
                   <input type="date"  name="startOfCareDate" id="startOfCareDate" value="{{$patient?->episode?->start_care_date}}" class="form-control"  >
               </div>
               <div class="col-md-4 d-flex flex-column border">
                   <div class="px-2 py-2">3. Certification Period</div>
                   <div class="d-flex flex-row justify-content-around">
                       <div class="" style="margin-right: 10px;">From
                           <input type="text" name="certiPeriodFrom" id="certiPeriodFrom" value="{{isset($episodeDaterange->episode_start_date)?$episodeDaterange->episode_start_date:''}}" placeholder="From" class="form-control   mr-1">
                       </div>
                       <div>To
                           <input type="text" name="certiPeriodTo" id="certiPeriodTo" value="{{isset($episodeDaterange->episode_end_date)?$episodeDaterange->episode_end_date:''}}"  placeholder="To" class="form-control">
                       </div>
                   </div>
               </div>
               <div class="col-md-2 border px-2 py-2">4. Medical Record No
                   <input type="text" placeholder="Medical Record No" name="medicalRecordNo" id="medicalRecordNo" value="{{$patient->patient_code}}" class="form-control">
               </div>
               <div class="col-md-2 px-2 py-2">5. Provider No.
                   <input type="text" placeholder="Provider No." name="providerNumber" id="providerNumber" value="{{$account ? $account->unique_agency_oasis : ''}}" class="form-control">
               </div>

           </div>
           <div class="d-flex flex-row border">
               <div class="d-flex col-md-6 border-end px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       6. Patient's Name and Address
                       <input type="text" placeholder="Patient's Name and Address" class="form-control" name="name" id="name" value="{{$patient?->first_name.' '.$patient?->last_name}}, {{$patient?->address?->address_line_1.' '.$patient?->address?->address_line_2}}">
                   </div>
               </div>
               <div class="d-flex col-md-6 px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       7. Provider's Name, Address and Telephone Number
                       <input type="text" class="form-control" placeholder="Provider's Name, Address and Telephone Number" name="branchInfo" id="branchInfo"
                       value="{{ $account ? $account->company_name : '' }}">
                       <input type="text" class="form-control" style="font-size: 15px;" name="" id="branchAddress" value="{{ $account ? $account->address_line . ' - ' . $account->zip : '' }}, Tel: {{ $account ? $account->phone : '' }}, Fax: {{ $account ? $account->fax : '' }}">
                   </div>
               </div>
           </div>
           <div class="d-flex flex-row border">
               <div class="d-flex flex-column col-md-6">
                   <div class="d-flex flex-row ">
                       <div class="col-md-7 border-end px-2 py-2">8. Date of Birth
                           <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth" value="{{$patient?->date_of_birth}}">
                       </div>
                       <div class="col-md-5 px-2 py-2">
                           9. Sex
                           <input type="radio" name="gender" id="gender_male" id="Male" value="1" {{ $patient?->gender == 'male' ? 'checked' : '' }}>
                           <label for="Male">M</label>
                           <input type="radio" name="sex" name="gender" id="gender_female" value="2" {{ $patient?->gender == 'female' ? 'checked' : '' }}>
                           <label for="Female">F</label>
                         </div>
                   </div>
                   <div class="d-flex flex-row border">
                       <div class="col-md-3 d-flex border-end border-top px-2 py-2">11. ICD- 10-CM</div>
                       <div class="col-md-5 d-flex border-end border-top px-2 py-2">
                           <div class="from-group col-md-12 py-2">
                               Principal Diagnosis
                               <input type="text" placeholder="Principal Diagnosis" class="form-control" name="diagonsisCode" id="diagonsisCode"
                               value="{{ $patient && $patient->diagnosis ? $patient->diagnosis->primary_diagnosis_code : '' }}">
                           </div>

                       </div>
                       <div class="col-md-3 d-flex  px-2">
                           <div class="from-group">
                               <label for="principaldate" class="col-form-label"> Date: </label>
                               <input type="date" name="date" id="date" value="{{ $patient && $patient->diagnosis ? $patient->diagnosis->created_at->format('Y-m-d') : '' }}" class="form-control" >

                           </div>

                       </div>
                   </div>

                   <div class="d-flex flex-row border">
                       <div class="col-md-3 d-flex border-end  px-2 py-2">12. ICD- 10-CM</div>
                       <div class="col-md-5 d-flex border-end  px-2 py-2">
                           <div class="from-group col-md-12  py-2">
                               Surgical Procedure
                               <input type="text" placeholder=" Surgical Procedure" class="form-control" name="surgical-procedure">
                           </div>

                       </div>
                       <div class="col-md-3 d-flex  px-2">
                           <div class="from-group">
                               <label for="principaldate" class="col-form-label"> Date: </label>
                               <input type="date" id="principaldate" class="form-control" >

                           </div>

                       </div>
                   </div>

                   <div class="d-flex flex-row border">
                       <div class="col-md-3 d-flex border-end px-2 py-2">13. ICD- 10-CM</div>
                       <div class="col-md-5 d-flex border-end px-2 py-2">
                           <div class="from-group col-md-12  py-2">
                               Other Pertinent Diagnoses
                               <input type="text" class="form-control" placeholder="Other Pertinent Diagnoses" name="other-pertinent-diagnoses">
                           </div>


                       </div>
                       <div class="col-md-3 d-flex  px-2">
                           <div class="from-group">
                               <label for="principaldate" class="col-form-label"> Date: </label>
                               <input type="date" id="principaldate2" class="form-control" >
                           </div>

                       </div>
                   </div>

               </div>
               <div class="d-flex col-md-6 border-start px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       10. Medications: Dose/Frequency/Route (N)ew (C)hanged (U)nchanged
                       <textarea class="form-control py-2" name="riskProfile" id="riskProfile" rows="12" placeholder="Medications: Dose/Frequency/Route (N)ew (C)hanged (U)nchanged">
                        @if (!empty($medications))
                        @forelse($medications as $medication)
                        @if ($medication->status == 1)
                            (N) {{ $medication->medication_dosage }} - {{ $medication->frequency }} - {{ $medication->route }}
                        @else
                            (C) {{ $medication->medication_dosage }} - {{ $medication->frequency }} - {{ $medication->route }}
                        @endif
                        @empty
                            No medications found.
                        @endforelse
                    @endif

                     </textarea>
                   </div>
               </div>
           </div>
           <div class="d-flex flex-row">
               <div class="col-md-6 border-end d-flex px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       14. DME and Supplies:
                       <input type="text" placeholder="" class="form-control" name="dme-and-supplies">
                   </div>
               </div>
               <div class="col-md-6 border d-flex px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       15. Safety Measures:
                       <input type="text" placeholder="" class="form-control" name="safety-measures">
                   </div>
               </div>
           </div>
           <div class="d-flex flex-row">
               <div class="col-md-6 border d-flex px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       16. Nutritional Req.
                       <textarea class="form-control" name="nutritional-req" cols="30" rows="10">
                        {{ isset($patient->SwallowingNutritional->feedingEatingNo) && $patient->SwallowingNutritional->feedingEatingNo == 1 ? 'Able to independently feed self.' : '' }}
                        {{ isset($patient->SwallowingNutritional->feedingEatingYes) && $patient->SwallowingNutritional->feedingEatingYes == 1 ? 'Able to feed self independently but requires.' : '' }}
                        {{ isset($patient->SwallowingNutritional->feedingEatingUnable) && $patient->SwallowingNutritional->feedingEatingUnable == 1 ? 'Unable to feed self and must be assisted or supervised throughout the meal/snack.' : '' }}
                        {{ isset($patient->SwallowingNutritional->feedingEatingAble) && $patient->SwallowingNutritional->feedingEatingAble == 1 ? 'Able to take in nutrients orally and receives supplemental nutrients through a nasogastric tube or gastrostomy.' : '' }}
                        {{ isset($patient->SwallowingNutritional->feedingEatingUnableGastrostomy) && $patient->SwallowingNutritional->feedingEatingUnableGastrostomy == 1 ? 'Unable to take in nutrients orally and is fed nutrients through a nasogastric tube or gastrostomy.' : '' }}
                        {{ isset($patient->SwallowingNutritional->feedingEatingUnableNutrients) && $patient->SwallowingNutritional->feedingEatingUnableNutrients == 1 ? 'Unable to take in nutrients orally or by tube feeding.' : '' }}
                       </textarea>
                       {{-- <input type="text" placeholder="" class="form-control" name="nutritional-req"> --}}
                   </div>
               </div>
               <div class="col-md-6 border d-flex px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       17. Allergies: <input type="text" name="substance" id="substance" value="{{ $patient && $patient->allergy ? $patient->allergy->allergy : '' }}" placeholder="" class="form-control" name="Allergies">
                   </div>
               </div>
           </div>
           <div class="d-flex flex-row">
               <div class="col-md-6 border d-flex flex-column py-2 px-2" >

                   <div class="d-flex py-2">18.A. Functional Limitations</div>
                   <div class="d-flex flex-row justify-content-between" style="font-size: 11px;">
                       <div class="d-flex flex-column col-md-4">
                           <div class="">
                               1 1 <input type="checkbox" name="funcitonalLimition" id="amputation" value="1" {{ !empty($patient->functionalAbilitie->amputation) && $patient->functionalAbilitie->amputation == 1 ? 'checked' : '' }}>
                               <label for="amputation">Amputation</label>
                           </div>

                           <div>
                               2 <input type="checkbox" name="funcitonalLimition" id="bowelBladder" value="1"  {{ !empty($patient->functionalAbilitie->bowelBladder) && $patient->functionalAbilitie->bowelBladder == 1 ? 'checked' : '' }}>
                               <label for="bowelBladder">Bowel/Bladder (Incontinence)</label>
                           </div>

                           <div>
                               3 <input type="checkbox" name="funcitonalLimition" id="contracture" value="1" {{ !empty($patient->functionalAbilitie->contracture) && $patient->functionalAbilitie->contracture == 1 ? 'checked' : '' }}>
                               <label for="contracture">Contracture</label>
                           </div>

                           <div>
                               4 <input type="checkbox" name="funcitonalLimition" id="hearing" value="1" {{ !empty($patient->functionalAbilitie->hearing) && $patient->functionalAbilitie->hearing == 1 ? 'checked' : '' }}>
                               <label for="hearing">Hearing</label>
                           </div>


                       </div>

                       <div class="d-flex flex-column col-md-3">
                           <div>
                               5 <input type="checkbox" name="funcitonalLimition" id="paralysis" value="1" {{ !empty($patient->functionalAbilitie->paralysis) && $patient->functionalAbilitie->paralysis == 1 ? 'checked' : '' }}>
                               <label for="paralysis">Paralysis</label>
                           </div>

                           <div>
                               6 <input type="checkbox" name="funcitonalLimition" id="endurance" value="1" {{ !empty($patient->functionalAbilitie->endurance) && $patient->functionalAbilitie->endurance == 1 ? 'checked' : '' }}>
                               <label for="endurance">Endurance</label>
                           </div>

                           <div>
                               7 <input type="checkbox" name="funcitonalLimition" id="ambulation" value="1" {{ !empty($patient->functionalAbilitie->ambulation) && $patient->functionalAbilitie->ambulation == 1 ? 'checked' : '' }}>
                               <label for="ambulation">Ambulation</label>
                           </div>

                           <div>
                               8 <input type="checkbox" name="funcitonalLimition" id="speech" value="1" {{ !empty($patient->functionalAbilitie->speech) && $patient->functionalAbilitie->speech == 1 ? 'checked' : '' }}>
                               <label for="speech">Speech</label>
                           </div>


                       </div>

                       <div class="d-flex flex-column col-md-5">
                           <div>
                               9 <input type="checkbox" name="funcitonalLimition" id="legallyBlind" value="1" {{ !empty($patient->functionalAbilitie->legallyBlind) && $patient->functionalAbilitie->legallyBlind == 1 ? 'checked' : '' }}>
                               <label for="legallyBlind">Legally Blind</label>
                           </div>

                           <div>
                               A <input type="checkbox" name="minimalExertion" id="dyspneaWithMinimalExertion" value="1" {{ !empty($patient->functionalAbilitie->minimalExertion) && $patient->functionalAbilitie->minimalExertion == 1 ? 'checked' : '' }}>
                               <label for="dyspneaWithMinimalExertion">Dyspnea With Minimal Exertion </label>
                           </div>

                           <div>
                               B <input type="checkbox" name="funcitonalLimition" id="other" value="1" {{ !empty($patient->functionalAbilitie->Other) && $patient->functionalAbilitie->Other == 1 ? 'checked' : '' }}>
                               <label for="other">Other (Specify)</label>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-md-6 border d-flex flex-column px-2 py-2" >

                   <div class="d-flex py-2 ">18.B. Activities Permitted</div>
                   <div class="d-flex flex-row justify-content-between" style="font-size: 11px;">
                       <div class="d-flex flex-column col-md-4">
                           <div>
                               1 <input type="checkbox" name="completeBedrest" id="completeBedrest" value="1" {{ !empty($patient->functionalStatus->completeBedrest) && $patient->functionalStatus->completeBedrest == 1 ? 'checked' : '' }}>
                               <label for="completeBedrest">Complete Bedrest</label>
                           </div>

                           <div>
                               2 <input type="checkbox" name="bathroomPrevileges" id="bathroomPrevileges" value="1" {{ !empty($patient->functionalStatus->bathroomPrevileges) && $patient->functionalStatus->bathroomPrevileges == 1 ? 'checked' : '' }}>
                               <label for="bathroomPrevileges">Bedrest BRP</label>
                           </div>

                           <div>
                               3 <input type="checkbox" name="upAsTolerated2" id="upAsTolerated" value="1" {{ !empty($patient->functionalStatus->upAsTolerated2) && $patient->functionalStatus->upAsTolerated2 == 1 ? 'checked' : '' }}>
                               <label for="upAsTolerated">Up As Tolerated</label>
                           </div>

                           <div>
                               4 <input type="checkbox" name="transferbed" id="transferbed" value="1" {{ !empty($patient->functionalStatus->transferbed) && $patient->functionalStatus->transferbed == 1 ? 'checked' : '' }}>
                               <label for="transferBed">Transfer Bed/Chair</label>
                           </div>

                           <div>
                               5 <input type="checkbox" name="excercisePre" id="excercisePre" value="1" {{ !empty($patient->functionalStatus->excercisePre) && $patient->functionalStatus->excercisePre == 1 ? 'checked' : '' }}>
                               <label for="exercisesPrescribed">Exercises Prescribed</label>
                           </div>


                       </div>

                       <div class="d-flex flex-column col-md-4">
                           <div>
                               6 <input type="checkbox" name="partialWeight" id="partialWeight" value="1" {{ !empty($patient->functionalStatus->partialWeight) && $patient->functionalStatus->partialWeight == 1 ? 'checked' : '' }}>
                               <label for="partialWeightBearing">Partial Weight Bearing</label>
                           </div>

                           <div>
                               7 <input type="checkbox" name="independet" id="independet" value="1" {{ !empty($patient->functionalStatus->independet) && $patient->functionalStatus->independet == 1 ? 'checked' : '' }}>
                               <label for="independentAtHome">Independent At Home</label>
                           </div>

                           <div>
                               8 <input type="checkbox" name="crutches" id="crutches" value="1" {{ !empty($patient->functionalStatus->crutches) && $patient->functionalStatus->crutches == 1 ? 'checked' : '' }}>
                               <label for="crutches">Crutches</label>
                           </div>
                           <div>
                               9 <input type="checkbox" name="cane" id="cane" value="1" {{ !empty($patient->functionalStatus->cane) && $patient->functionalStatus->cane == 1 ? 'checked' : '' }}>
                               <label for="cane">Cane</label>
                           </div>

                       </div>

                       <div class="d-flex flex-column col-md-4">


                           <div>
                               A <input type="checkbox" name="wheelchair" id="wheelchair" value="1" {{ !empty($patient->functionalStatus->wheelchair) && $patient->functionalStatus->wheelchair == 1 ? 'checked' : '' }}>
                               <label for="wheelchair">Wheelchair </label>
                           </div>

                           <div>
                               B <input type="checkbox" id="walker" name="walker" value="1" {{ !empty($patient->functionalStatus->walker) && $patient->functionalStatus->walker == 1 ? 'checked' : '' }}>
                               <label for="walker">Walker</label>
                           </div>
                           <div>
                               C <input type="checkbox" name="noRestrictions2" id="noRestrictions2" value="1" {{ !empty($patient->functionalStatus->noRestrictions2) && $patient->functionalStatus->noRestrictions2 == 1 ? 'checked' : '' }}>
                               <label for="noRestrictions">No Restrictions</label>
                           </div>
                           <div>
                               D <input type="checkbox" name="otherSpecify10" id="otherSpecify10" value="1" {{ !empty($patient->functionalStatus->otherSpecify10) ? 'checked' : '' }}>
                               <label for="actiothers">Other (Specify)</label>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
           <div class="d-flex flex-row">
               <div class="col-md-4 px-2 py-2">19. Mental Status:</div>
               <div class="col-md-8 d-flex flex-wrap">
                   <div class="col-md-3">
                       1 <input type="checkbox" name="mentalstatus" id="oriented" value="1" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="oriented">Oriented</label>
                   </div>

                   <div class="col-md-3">
                       2 <input type="checkbox" name="mentalstatus" id="comatose" value="comatose" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="comatose">Comatose</label>
                   </div>

                   <div class="col-md-3">
                       3 <input type="checkbox" name="mentalstatus" id="forgetful" value="forgetful" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="forgetful">Forgetful</label>
                   </div>

                   <div class="col-md-3">
                       4 <input type="checkbox" name="mentalstatus" id="depressed" value="depressed" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="depressed">Depressed</label>
                   </div>

                   <div class="col-md-3">
                       5 <input type="checkbox" name="mentalstatus" id="disoriented" value="disoriented" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="disoriented">Disoriented</label>
                   </div>

                   <div class="col-md-3">
                       6 <input type="checkbox" name="mentalstatus" id="lethargic" value="lethargic" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="lethargic">Lethargic</label>
                   </div>
                   <div class="col-md-3">
                       7 <input type="checkbox" name="mentalstatus" id="agitated" value="agitated" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="agitated">Agitated</label>
                   </div>
                   <div class="col-md-3">
                       8 <input type="checkbox" name="mentalstatus" id="menstother" value="Other" {{ !empty($patient->functionalStatus->exercises) && $patient->functionalStatus->exercises == 1 ? 'checked' : '' }}>
                       <label for="menstother">Other</label>
                   </div>

               </div>
           </div>

           <div class="d-flex flex-row border">
               <div class="col-md-2 px-2 py-2">20. Prognosis:</div>

               <div class="col-md-2 py-2">
                   1 <input type="checkbox" name="Prognosis" id="poor" value="poor">
                   <label for="poor">Poor</label>
               </div>

               <div class="col-md-2 px-2 py-2">
                   2 <input type="checkbox" name="Prognosis" id="guarded" value="guarded">
                   <label for="guarded">Guarded</label>
               </div>
               <div class="col-md-2 px-2 py-2">
                   3 <input type="checkbox" name="Prognosis" id="fair" value="fair">
                   <label for="fair">Fair</label>
               </div>
               <div class="col-md-2 px-2 py-2">
                   4 <input type="checkbox" name="Prognosis" id="good" value="good">
                   <label for="good">Good</label>
               </div>
               <div class="col-md-2 px-2 py-2">
                   5 <input type="checkbox" name="Prognosis" id="excellent" value="excellent">
                   <label for="excellent">Excellent</label>
               </div>



           </div>

           <div class="d-flex border px-2 py-2" style="height: 300px;">
               <div class="from-group col-md-12 py-2">
                   21. Orders for Discipline and Treatments (Specify Amount/Frequency/Duration)

                   <textarea class="form-control py-2"  name="medications" id="medications" rows="7">
                    {{ isset($patient->specialTreatment->discontinued) ? $patient->specialTreatment->discontinued : '' }}
                   </textarea>

               </div>
           </div>
           <div class="d-flex border px-2 py-2" style="height: 200px;">
               <div class="from-group col-md-12 py-2">
                   22. Goals/Rehabilitation Potential/Discharge Plans

                   <textarea class="form-control py-2" name="treatments" id="treatments"  rows="4">{{ isset($patient->preference->discontinued) ? $patient->preference->discontinued : '' }}</textarea>
               </div>
           </div>

           <div class="d-flex flex-row border" >
               <div class="d-flex col-md-8 border-end px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       <span class="fw-bolder">23. Nurse's Signature and Date of Verbal SOC Where Applicable: </span>
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#doctorFormModal">Add Signature</button>
                        <div id="doctorSignatureImageContainer" style="display: none;">
                            <img id="doctorSignatureImage" src="" alt="Nurse's Signature">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nurseFormModal">Add Signature</button>
                                <div id="nurseSignatureImageContainer" style="display: none;">
                                    <img id="nurseSignatureImage" src="" alt="Nurse's Signature">
                                    <input type="hidden" id="nurseSignaturePath" name="nurseSignaturePath" value="">
                                </div>
                        </div>
                   </div>
               </div>
               <div class="d-flex col-md-4 px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       25. Date HHA Received Signed POT
                       <input type="date" class="form-control" name="DateHHA">
                   </div>
               </div>
           </div>
           <div class="d-flex flex-row border" >
               <div class="d-flex col-md-6 border-end px-2 py-2">
                   <div class="from-group col-md-12 py-2">

                       24. Physician's Name and Address

                       <textarea class="form-control py-2" name="name" id="name" rows="5">
                            {{ isset($patient->extra_info->physician) ? $patient->extra_info->physician->first_name : '' }} {{ isset($patient->extra_info->physician) ? $patient->extra_info->physician->last_name : '' }},
                            {{ isset($patient->extra_info->physician) ? $patient->extra_info->physician->address_line_1 : '' }} {{ isset($patient->extra_info->physician) ? $patient->extra_info->physician->address_line_2 : '' }}
                       </textarea>
                   </div>
               </div>
               <div class="d-flex col-md-6 px-2 py-2">



                   <div class="from-group col-md-12 py-2">
                       <div>

                           26. I certify/recertify that this patient is confined to his/her home and needs
                           intermittent skilled nursing care, physical therapy and/or speech
                           therapy or continues to need occupational therapy. The patient is under
                           my care, and I have authorized the services on this plan
                       </div>
                       <div>

                           <textarea class="form-control py-2" >

                           </textarea>
                       </div>
                   </div>


               </div>
           </div>

           <div class="d-flex flex-row border" >
               <div class="d-flex col-md-6 border-end px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       <div>

                           27. Attending Physician's Singnature and Date Signed
                       </div>
                       <div>
                           <textarea class="form-control py-2" rows="4"></textarea>
                       </div>
                   </div>
               </div>
               <div class="d-flex col-md-6 px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       28. Anyone who misrepresents, falsifies, or conceals essential information required for payment of Federal funds may be subject to fine, imprisonment, or civil penalty under applicable Federal laws.
                       <textarea class="form-control py-2"></textarea>

                   </div>
               </div>
           </div>
       </div>

       <div class="d-flex flex-column border mt-2 mx-3 mb-4">
           <div class="d-flex justify-content-center py-2 fw-bold border bg-info bg-gradient"> ADDENDUM TO: PLAN OF TREATMENT </div>

           <div class="d-flex border flex-row">
               <div class="col-md-2 border-end px-2 py-2">1. Patient's HI Claim No. <input type="text" placeholder="" class="form-control" name="hiClaimNo" id="" value="{{ $patient->insurance->medicaid_id }}">
               </div>
               <div class="col-md-2 border-end px-2 py-2">2. Start Of Care Date <input type="date"  class="form-control" name="startOfCareDate" id="startOfCareDate" value="{{$patient?->episode?->start_care_date}}">
               </div>
               <div class="col-md-4 d-flex flex-column border-end">
                   <div class="px-2 py-2">3. Certification Period</div>
                   <div class="d-flex flex-row justify-content-around">
                       <div>From <input type="date" class="form-control" name="certiPeriodFrom" id="certiPeriodFrom" value="{{isset($episodeDaterange->episode_start_date)?$episodeDaterange->episode_start_date:''}}">
                       </div>
                       <div>To <input type="date" class="form-control" name="certiPeriodTo" id="certiPeriodTo" value="{{isset($episodeDaterange->episode_end_date)?$episodeDaterange->episode_end_date:''}}">
                       </div>
                   </div>
               </div>
               <div class="col-md-2 border-end px-2 py-2">4. Medical Record No
                   <input type="text" placeholder="" class="form-control" name="medicalRecordNo" id="medicalRecordNo" value="{{$patient->patient_code}}" class="form-control">
               </div>
               <div class="col-md-2  px-2 py-2">5. Provider No. <input type="text" placeholder="" class="form-control" name="providerNumber" id="providerNumber" value="{{$account ? $account->medicare_p_n : ''}}" class="form-control">
               </div>
           </div>
           <div class="d-flex flex-row border">
               <div class="d-flex col-md-6 border-end px-2 py-2">
                   <div class="from-group col-md-12 py-2">
                       6. Patient's Name
                       <input type="text" placeholder="" class="form-control" name="patientsName2" value="{{$patient->first_name}} {{$patient->middle_name}} {{$patient->last_name}} ">
                   </div>
               </div>
               <div class="d-flex col-md-6 px-2 py-2">
                   <div class="from-group col-md-12 py-2">

                       7. Provider's Name
                       <input type="text" placeholder="" class="form-control" value="{{ $account ? $account->company_name : '' }}">
                   </div>

               </div>
           </div>
           <div class="d-flex px-2 py-2">
               <div class="from-group col-md-12 py-2">
                   <textarea name="periodicallyreviewtheplan" placeholder="8. of care and will periodically review the plan" id="periodicallyreviewtheplan" cols="100" rows="3"></textarea>
               </div>
           </div>
           <div class="d-flex flex-row border">
               <div class="d-flex col-md-8 border-end px-2 py-2">
                   <div class="from-group col-md-12">
                     <textarea placeholder="9. Signature of Physician:" name="" id="" cols="60" rows="3"></textarea>
                   </div>
               </div>
               <div class="d-flex col-md-4 px-2 py-2">
                   <div class="from-group">
                       <label for="physicalsign" class="col-form-label">  10. Date:
                       </label>
                       <input type="text" id="physicalsign" class="form-control" >
                   </div>
               </div>
           </div>

           <div class="d-flex flex-row border">
               <div class="d-flex col-md-8 border-end px-2 py-2">
                   <div class="from-group col-md-12 py-2">

                         <label for="">11. Optional Name / Signature of Nurse / Therapist</label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nurseFormModal">Add Signature</button>
                            <div id="nurseSignatureImageContainer" style="display: none;">
                                <img id="nurseSignatureImage" src="" alt="Nurse's Signature">
                                <input type="hidden" id="nurseSignaturePath" name="nurseSignaturePath" value="">
                            </div>

                   </div>
               </div>
               <div class="d-flex col-md-4 px-2 py-2">
                   <div class="from-group">
                       <label for="optionsing" class="col-form-label"> 12. Date: </label>
                       <input type="date" id="optionsing" class="form-control" >
                   </div>
               </div>
           </div>
       </div>
       </body>
       </html>
