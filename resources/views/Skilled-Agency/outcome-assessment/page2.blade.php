      <table class="table table-bordered align-middle default-td">
          <tr>
            <td class="bg-black py-2 px-3">
                <h3 class="text-center m-0 text-white">Demographics</h3>
            </td>
        </tr>
        <input type="hidden" name="patient_history_id" value="{{$patient->id}}">

         <tr>
            <td class="bg-secondary-subtle">
               <strong>A1005. Race</strong>
               <p>Are you of Hispanic, Latino/a, or Spanish origin?</p>
            </td>
         </tr>
         <tr>
            <td><strong>↓ Check all that apply</strong></td>
         </tr>
         <tr>
            <td><label class="form-check-label">
               <input type="checkbox" name="hispanic" class="form-check-input" @if(in_array('No, not of Hispanic, Latino/a, or Spanish origin', $race_enc)) checked @endif> A. No, not of Hispanic, Latino/a, or Spanish origin</label></td>
            </tr>
            <tr>
               <td><label class="form-check-label">
                  <input type="checkbox" name="mexican" class="form-check-input" @if(in_array('Yes, Mexican, Mexican American, Chicano/a', $race_enc)) checked @endif> B. Yes, Mexican, Mexican American, Chicano/a</label></td>
            </tr>
            <tr>
               <td><label class="form-check-label">
                <input type="checkbox" name="rican" class="form-check-input" @if(in_array('Yes, Puerto Rican', $race_enc)) checked @endif> C. Yes, Puerto Rican</label></td>
            </tr>
            <tr>
               <td>
                <label class="form-check-label">
                <input type="checkbox" name="cuban" class="form-check-input" @if(in_array('Yes, Cuban', $race_enc)) checked @endif> D. Yes, Cuban</label>
            </td>
            </tr>
            <tr>
               <td><label class="form-check-label">
                <input type="checkbox" name="anotherHispanic" class="form-check-input" @if(in_array('Yes, another Hispanic, Latino, or Spanish origin', $race_enc)) checked @endif> E. Yes, another Hispanic, Latino, or Spanish origin</label></td>
            </tr>
            <tr>
               <td><label class="form-check-label">
                <input type="checkbox" name="unableRespond" class="form-check-input" @if(in_array('Patient unable to respond', $race_enc)) checked @endif> X. Patient unable to respond</label></td>
            </tr>
            <tr>
               <td><label class="form-check-label"><input type="checkbox" name="declines" class="form-check-input" @if(in_array('Patient declines to respond', $race_enc)) checked @endif> Y. Patient declines to respond</label></td>
            </tr>

            <tr>
               <td class="bg-secondary-subtle">
                  <strong>A1010. Ethnicity</strong>
                  <p>What is your race?</p>
               </td>
            </tr>
            <tr>
               <td><strong>↓ Check all that apply</strong></td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="white" class="form-check-input" @if(in_array('white', $ethnicities)) checked @endif> A. White
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="black" class="form-check-input" @if(in_array('black', $ethnicities)) checked @endif> B. Black or African American
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="americanIndian" class="form-check-input" @if(in_array('americanIndian', $ethnicities)) checked @endif> C. American Indian or Alaska Native
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="asianIndian" class="form-check-input" @if(in_array('asianIndian', $ethnicities)) checked @endif> D. Asian Indian
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="chines" class="form-check-input" @if(in_array('chines', $ethnicities)) checked @endif> E. Chinese
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="fillipino" class="form-check-input" @if(in_array('fillipino', $ethnicities)) checked @endif> F. Filipino
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="japanes"  class="form-check-input" @if(in_array('japanes', $ethnicities)) checked @endif> G. Japanese
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="korean" class="form-check-input" @if(in_array('korean', $ethnicities)) checked @endif> H. Korean
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="vietnamese" class="form-check-input" @if(in_array('vietnamese', $ethnicities)) checked @endif> I. Vietnamese
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="otherAsian" class="form-check-input" @if(in_array('otherAsian', $ethnicities)) checked @endif> J. Other Asian
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="nativeHawaiian"  class="form-check-input" @if(in_array('nativeHawaiian', $ethnicities)) checked @endif> K. Native Hawaiian
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="guamanian" class="form-check-input" @if(in_array('guamanian', $ethnicities)) checked @endif> L. Guamanian or Chamorro
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="samoa" class="form-check-input" @if(in_array('samoa', $ethnicities)) checked @endif> M. Samoan
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="otherIsland" class="form-check-input" @if(in_array('otherIsland', $ethnicities)) checked @endif> N. Other Pacific Islander
                    </label>
                </td>
            </tr>
           <!--  <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="patient_unable_to_respond" class="form-check-input" value="{{ old('patient_unable_to_respond') }}"> X. Patient unable to respond
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="patient_declines" class="form-check-input" value="{{ old('patient_declines') }}"> Y. Patient declines to respond
                    </label>
                </td>
            </tr> -->
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="noa" class="form-check-input" @if(in_array('noa', $ethnicities)) checked @endif> Z. None of the above
                    </label>
                </td>
            </tr>

            <tr>
               <td class="bg-secondary-subtle">
                  <strong>M0150. Current Payment Sources for Home Care</strong>
               </td>
            </tr>
            @php
                $paymentSource = json_decode($patientInsurance->payment_source, true);
            @endphp
            <tr>
               <td><strong>↓ Check all that apply</strong></td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="nocharge" class="form-check-input" @if(in_array('non_charge_current_service', $paymentSource)) checked @endif> 0. None; no charge for current services
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="traditional" class="form-check-input" @if(in_array('free_for_service', $paymentSource)) checked @endif> 1. Medicare (traditional fee-for-service)
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="hmo" class="form-check-input" @if(in_array('medicare_hmo_managed', $paymentSource)) checked @endif> 2. Medicare (HMO/managed care/Advantage plan)
                    </label>
                </td>
            </tr>

            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="compensation" class="form-check-input" @if(in_array('insurance_workers_compensation', $paymentSource)) checked @endif> 5. Workers' compensation
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="programs" class="form-check-input" @if(in_array('insurance_program_111', $paymentSource)) checked @endif> 6. Title programs (for example, Title III, V, or XX)
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="government" class="form-check-input" @if(in_array('other_government', $paymentSource)) checked @endif> 7. Other government (for example, TriCare, VA)
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="insurance" class="form-check-input" @if(in_array('private_insurance', $paymentSource)) checked @endif> 8. Private insurance
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="privateHmo" class="form-check-input" @if(in_array('private_hmo_care', $paymentSource)) checked @endif> 9. Private HMO/managed care
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="selfpay" class="form-check-input" @if(in_array('selft_pay', $paymentSource)) checked @endif> 10. Self-pay
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="other" class="form-check-input" @if(in_array('other_specify', $paymentSource)) checked @endif> 11. Other (specify)
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-check-label">
                        <input type="checkbox" name="unknown" class="form-check-input" @if(in_array('unknown_resource', $paymentSource)) checked @endif> UK. Unknown
                    </label>
                </td>
            </tr>

            <tr>
                <tr>
                    <td class="bg-secondary-subtle">
                        <strong>A1110. Language </strong>
                     </td>
                </tr>
                <td>
                    <label for="">A. What is your preferred language?</label>
                    <input type="text" name="preferred" id="" class="form-control" value="{{$patientAddressInfo->patient_language_spoken}}">
                    <p class="mt-2 mb-0"><strong>Do you need or want an interpreter to communicate with a doctor or health care staff?</strong></p>
                    <div class="labels-group">
                        <label class="form-check-label">
                            <input type="radio" name="interpreter" class="form-check-input" value="0" @if($patientAddressInfo->use_of_interpreter == 0) checked @endif> 0. No
                        </label>
                        <label class="form-check-label">
                            <input type="radio" name="interpreter" class="form-check-input" value="1" @if($patientAddressInfo->use_of_interpreter == 1) checked @endif> 1. Yes
                        </label>
                        <label class="form-check-label">
                            <input type="radio" name="interpreter" class="form-check-input" value="9" @if($patientAddressInfo->use_of_interpreter == 9) checked @endif> 9. Unable to determine
                        </label>
                    </div>
                </td>
            </tr>
</table>
