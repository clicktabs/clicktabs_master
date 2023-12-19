@php
$otherdig='';
if(isset($patient->diagnosis->other_diagnosis_name)){
    $remove=array('[',']','"');
   $otherdig=$patient->diagnosis->other_diagnosis_name;
   $otherdig=str_replace($remove,"",$otherdig);
  
}
@endphp
<div class="container">
    <div class="form-holder pt-5 pb-5">
      
          <h1 class="text-center">HOME HEALTH CERTIFICATION AND PLAN OF CARE</h1>
            <table class="table table-bordered align-middle mb-0">
               <tr>
                  <td>
                     <label for="">1. Patient’s HI Claim No.</label>
                     <input type="number" name="" value="{{isset($patient->mi_no)?$patient->mi_no:''}}" class="form-control">
                  </td>
                  <td>
                     <label for="">2. Start Of Care Date</label>
                     <input type="date" name="" value="{{isset($patient->episode->start_care_date)?$patient->episode->start_care_date:''}}" class="form-control">
                  </td>
                  <td>
                     <label for="">3. Certification Period</label>
                     <div class="row row-flex align-items-center gy-2">
                        <div class="col">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">From:</label>
                              <input type="date" id="" class="form-control">
                           </div>
                        </div>
                        <div class="col">
                           <div class="input-group clean-input-group">
                              <label class="input-group-text">To:</label>
                              <input type="date" id="" class="form-control">
                           </div>
                        </div>
                     </div>
                  </td>
                  <td>
                     <label for="">4. Medical Record No.</label>
                     <input type="number" name="" class="form-control">
                  </td>
                  <td>
                     <label for="">5. Provider No.</label>
                     <input type="number" name="provider_no" value="{{isset($orgn->address->national_provider_number)?$orgn->address->national_provider_number:''}}" class="form-control">
                  </td>
               </tr>
            </table>

            <table class="table table-bordered align-middle mb-0">
               <tr>
                  <td>
                     <span class="fw-semibold">6. Patient’s Name and Address</span>
                     <div class="d-block"><input type="text" value="{{isset($patient->first_name)?$patient->first_name.' '.$patient->last_name:''}}" name="" class="form-control" placeholder="Name"></div>
                     <div class="d-block"><input type="text" name="" value="{{isset($patient->address->address_line_1)?$patient->address->address_line_1.','.$patient->address->city.','.$patient->address->country:''}}" class="form-control" placeholder="Address"></div>
                  </td>
                  <td>
                     <span class="fw-semibold">7. Provider’s Name, Address and Telephone Number</span>
                     <div class="d-block">
                        <input type="text" name="provider_name" value="{{isset($orgn->name)?$orgn->name:''}}" class="form-control" placeholder="Name">
                     </div>
                     <div class="d-block">
                        <input type="text" name="provider_address" value="{{isset($orgn->address->address_line_1)?$orgn->address->address_line_1:''}}" class="form-control" placeholder="Address">
                     </div>
                     <div class="d-block">
                        <input type="text" name="" value="{{isset($orgn->phone)?$orgn->phone:''}}" class="form-control" placeholder="Telephone Number">
                     </div>
                  </td>
               </tr>
            </table>

            <table class="table table-bordered align-middle mb-0">
               <tr>
                  <td>
                     <div class="input-group clean-input-group">
                        <label class="input-group-text">8. Date of Birth</label>
                        <input type="date" value="{{isset($patient->date_of_birth)?$patient->date_of_birth:''}}" id="" class="form-control">
                     </div>
                  </td>
                  <td class="labels-group">
                     <span class="fw-semibold">9. Sex &nbsp;</span>
                     <label class="form-check-label"><input type="radio"  {{isset($patient->gender) && $patient->gender=='male'?'checked':''}} name="Sex" class="form-check-input"> M</label>
                     <label class="form-check-label"><input type="radio"  {{isset($patient->gender) && $patient->gender=='female'?'checked':''}} name="Sex" class="form-check-input"> F</label>
                  </td>
                  <td class="p-0"></td>
                  <td rowspan="4">
                     <label for="">10. Medications: Dose/Frequency/Route (N)ew (C)hanged</label>
                     <div class="d-block"><input type="text" id="" class="form-control" placeholder="Dose/Frequency/Route"></div>
                     <div class="d-block"><input type="text" id="" class="form-control" placeholder="(N)ew"></div>
                     <div class="d-block"><input type="text" id="" class="form-control" placeholder="(C)hanged"></div>
                  </td>
               </tr>
               
               <tr>
                  <td>
                     <label for="">11. ICD</label>
                     <input type="text" id="" class="form-control">
                  </td>
                  <td>
                     <label for="">Principal Diagnosis</label>
                     <input type="text" id="" name="principal_diagonosis" value="{{isset($patient->diagnosis->primary_diagnosis_name)?$patient->diagnosis->primary_diagnosis_name:''}}" class="form-control">
                  </td>
                  <td>
                     <label for="">Date</label>
                     <input type="date" id="" class="form-control">
                  </td>
               </tr>

               <tr>
                  <td>
                     <label for="">12. ICD</label>
                     <input type="text" id="" class="form-control">
                  </td>
                  <td>
                     <label for="">Surgical Procedure</label>
                     <input type="text" id="" class="form-control">
                  </td>
                  <td>
                     <label for="">Date</label>
                     <input type="date" id="" class="form-control">
                  </td>
               </tr>

               <tr>
                  <td>
                     <label for="">13. ICD</label>
                     <input type="text" id="" class="form-control">
                  </td>
                  <td>
                     <label for="">Other Pertinent Diagnoses</label>
                     <input type="text" name="other_pertinet_diagnoses" value="{{$otherdig}}" id="" class="form-control">
                  </td>
                  <td>
                     <label for="">Date</label>
                     <input type="date" id="" class="form-control">
                  </td>
               </tr>
            </table>

            <table class="table table-bordered mb-0">
               <tr>
                  <td>
                     <label for="">14. DME and Supplies</label>
                     <input type="text" id="" class="form-control">
                  </td>
                  <td>
                     <label for="">15. Safety Measures</label>
                     <input type="text" id="" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td>
                     <label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 16. Nutritional Req.</label>
                  </td>
                  <td>
                     <label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 17. Allergies</label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p class="fw-semibold">18.A. Functional Limitations</p>
                     <div class="row row-flex">
                        <div class="col-md-4">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">1</span><input type="checkbox" name="" class="form-check-input"> Amputation</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">2</span><input type="checkbox" name="" class="form-check-input"> Bowel/Bladder (Incontinance)</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">3</span><input type="checkbox" name="" class="form-check-input"> Contracture</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">4</span><input type="checkbox" name="" class="form-check-input"> Hearing</label>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">5</span><input type="checkbox" name="" class="form-check-input"> Paralysis</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">6</span><input type="checkbox" name="" class="form-check-input"> Endurance</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">7</span><input type="checkbox" name="" class="form-check-input"> Ambulation</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">8</span><input type="checkbox" name="" class="form-check-input"> Speech</label>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">9</span><input type="checkbox" name="" class="form-check-input"> Legally Blind</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">A</span><input type="checkbox" name="" class="form-check-input"> Dyspnea With Minimal Exertion</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">B</span><input type="checkbox" name="" class="form-check-input"> Other (Specify)</label>
                           </div>
                        </div>
                     </div>
                  </td>

                  <td>
                     <p class="fw-semibold">18.B. Activities Permitted</p>
                     <div class="row row-flex">
                        <div class="col-md-4">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">1</span><input type="checkbox" name="" class="form-check-input"> Complete Bedrest</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">2</span><input type="checkbox" name="" class="form-check-input"> Bedrest BRP</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">3</span><input type="checkbox" name="" class="form-check-input"> Up As Tolerated</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">4</span><input type="checkbox" name="" class="form-check-input"> Transfer Bed/Chair</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">5</span><input type="checkbox" name="" class="form-check-input"> Exercises Prescribed</label>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">6</span><input type="checkbox" name="" class="form-check-input"> Partial Weight Bearing</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">7</span><input type="checkbox" name="" class="form-check-input"> Independent At Home</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">8</span><input type="checkbox" name="" class="form-check-input"> Crutches</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">9</span><input type="checkbox" name="" class="form-check-input"> Cane</label>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">A</span><input type="checkbox" name="" class="form-check-input"> Wheelchair</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">B</span><input type="checkbox" name="" class="form-check-input"> Walker</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">C</span><input type="checkbox" name="" class="form-check-input"> No Restrictions</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">D</span><input type="checkbox" name="" class="form-check-input"> Other (Specify)</label>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <div class="row row-flex">
                        <div class="col-md-auto me-auto fw-semibold">
                           19. Mental Status
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">1</span><input type="checkbox" name="" class="form-check-input"> Oriented</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">2</span><input type="checkbox" name="" class="form-check-input"> Comatose</label>
                           </div>
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">3</span><input type="checkbox" name="" class="form-check-input"> Forgetful</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">4</span><input type="checkbox" name="" class="form-check-input"> Depressed</label>
                           </div>
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">5</span><input type="checkbox" name="" class="form-check-input"> Disoriented</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">6</span><input type="checkbox" name="" class="form-check-input"> Lethargic</label>
                           </div>
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">7</span><input type="checkbox" name="" class="form-check-input"> Agitated</label>
                           </div>
                           <div class="d-block mt-1">
                              <label class="form-check-label"><span class="num">8</span><input type="checkbox" name="" class="form-check-input"> Other</label>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <div class="row row-flex">
                        <div class="col-md-auto me-auto fw-semibold">20. Prognosis</div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">1</span><input type="checkbox" name="" class="form-check-input"> Poor</label>
                           </div>
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">2</span><input type="checkbox" name="" class="form-check-input"> Guarded</label>
                           </div>
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">3</span><input type="checkbox" name="" class="form-check-input"> Fair</label>
                           </div>
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">4</span><input type="checkbox" name="" class="form-check-input"> Good</label>
                           </div>
                        </div>
                        <div class="col-md-auto me-auto">
                           <div class="d-block">
                              <label class="form-check-label"><span class="num">5</span><input type="checkbox" name="" class="form-check-input"> Excellent</label>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <span class="fw-semibold">21. Orders for Discipline and Treatments (Specify Amount/Frequency/Duration)</span>
                     <div class="row row-flex">
                        <div class="col-md-auto"><input type="text" name="" class="form-control" placeholder="Specify Amount"></div>
                        <div class="col-md-auto"><input type="text" name="" class="form-control" placeholder="Frequency"></div>
                        <div class="col-md-auto"><input type="text" name="" class="form-control" placeholder="Duration"></div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <span class="fw-semibold">22. Goals/Rehabilitation Potential/Discharge Plans</span>
                     <div class="row row-flex">
                        <div class="col-md-auto"><input type="text" name="" class="form-control" placeholder="Goals/Rehabilitation"></div>
                        <div class="col-md-auto"><input type="text" name="" class="form-control" placeholder="Potential/Discharge"></div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <span class="fw-semibold">23. Nurse’s Signature and Date of Verbal SOC Where Applicable:</span>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text">Nurse’s Signature</label>
                        <input type="text" id="" class="form-control">
                     </div>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text">Date</label>
                        <input type="text" value="{{date('m-d-Y')}}" id="" class="form-control">
                     </div>
                  </td>
                  <td class="align-middle">
                     <span class="fw-semibold">25. Date of HHA Received Signed POT</span>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text">Date</label>
                        <input type="text" id="" value="{{date('m-d-Y')}}" class="form-control">
                     </div>
                  </td>
               </tr>
               <tr>
                  <td class="md-lg-40">
                     <span class="fw-semibold">24. Physician’s Name and Address</span>
                     <div class="d-block"><input type="text" value="{{isset($patient->extra_info->physician->first_name)?$patient->extra_info->physician->last_name. ' '.$patient->extra_info->physician->first_name:''}}" name="" class="form-control" placeholder="Name"></div>
                     <div class="d-block"><input type="text"  value="{{isset($patient->extra_info->physician->address_line_1)?$patient->extra_info->physician->address_line_1:''}}" name="" class="form-control" placeholder="Address"></div>
                  </td>
                  <td>
                     <label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 26. I certify/recertify that this patient is confined to his/her home and needs intermittent skilled nursing care, physical therapy and/or speech therapy or continues to need occupational therapy. The patient is under my care, and I have authorized services on this plan of care and will periodically review the plan.</label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <span class="fw-semibold">27. Attending Physician’s Signature and Date Signed</span>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text">Physician’s Signature</label>
                        <input type="text" id="" class="form-control">
                     </div>
                     <div class="input-group clean-input-group mt-2">
                        <label class="input-group-text">Date</label>
                        <input type="date" id="" value="{{date('m-d-Y')}}" class="form-control">
                     </div>
                  </td>
                  <td>
                     <label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 28. Anyone who misrepresents, falsifies, or conceals essential information required for payment of Federal funds may be subject to fine, imprisonment, or civil penalty under applicable Federal laws.</label>
                  </td>
               </tr>
               <tr>
                  <td>  <button class="btn btn-primary" type="submit" name="">Save</button></td>
               </tr>
            </table>
  
    </div>
 </div>
