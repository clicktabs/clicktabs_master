<form class="patientInsuranceForm" name="patientInsuranceForm"
      id="patientInsuranceForm" method="post">
    @csrf
    <div class="vt card mb-2 p-2 tabcontent" id="insurance">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Insurance:</h2>
        </div>
        <div class="row mt-3">
            <label for="gender">Payors: </label>
            <div class="row mt-1">
                <div class="col-md-2">
                    <label for="primary_payor">Primary Payor: </label>
                </div>
                <div class="col-md-5">
                    <select name="primary_payor" id="primary_payor" class="form-control s ou primary-payor-drop-down">
                        <option value="">--- Select ---</option>
                        @if($payors_sub_addons)
                            @foreach($payors_sub_addons as $payor)
                                <option value="{{$payor->name}}">{{$payor->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-5">
                    <input type="checkbox" value="N/A" name="primary_payor_na" id="primary_payor_na">
                    <label for="primary_payor_na"> N/A</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="secondary_payor">Secondary Payor: </label>
                </div>
                <div class="col-md-5">
                    <select name="secondary_payor" id="secondary_payor"
                            class="form-control s ou secondary-payor-drop-down">
                        <option value="">--- Select ---</option>
                        @if($payors_sub_addons)
                            @foreach($payors_sub_addons as $secondary_payor)
                                <option value="{{$secondary_payor->name}}">{{$secondary_payor->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-5">
                    <input type="checkbox" value="N/A" name="secondary_payor_na" id="secondary_payor_na">
                    <label for="secondary_payor_na"> N/A</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="co_pay_money">Co-Pay: </label>
                </div>
                <div class="col-md-3">
                    <input class="w-full" name="co_pay_money" type="text" placeholder="$"/>
                </div>
                <div class="col-md-5">
                    <input type="checkbox" value="N/A" name="co_pay_money_na" id="co_pay_money_na">
                    <label for="co_pay_money_na"> N/A</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="private_pay">Private Pay: </label>
                </div>
                <div class="col-md-1">
                    <input type="checkbox" name="private_pay" id="private_pay" class="form-control">
                </div>
                <div class="col-md-5">
                    <input type="checkbox" value="N/A" name="private_pay_na" id="private_pay_na">
                    <label for="private_pay_na"> N/A</label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <hr class="hr-st">
            <label for="insurance_membar_insurace_number">Members Insurance Number: </label>

            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="insurance_medicaid_member_id"><span class="text-green">(M0065)</span>Medicaid Member ID: </label>
                </div>
                <div class="col-md-5">
                    <input id="insurance_medicaid_member_id" type="text" class="form-control s ou"
                           name="insurance_medicaid_member_id" value="{{ old('insurance_medicaid_member_id') }}">
                </div>
                <div class="col-md-4">
                    <input type="checkbox" value="N/A" name="insurance_medicaid_member_id_na" id="insurance_medicaid_member_id_na">
                    <label for="insurance_medicaid_member_id_na"> NA - No Medicaid</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="insurance_medicare_member_id">
                        <span class="text-green">(M0063)</span>
                        Medicare Member ID: </label>
                </div>
                <div class="col-md-5">
                    <input id="insurance_medicare_member_id_check" type="text" class="form-control s ou"
                           name="insurance_medicare_member_id_check"
                           value="{{ old('insurance_medicare_member_id_check') }}">
                </div>
                <div class="col-md-4">
                    <input type="checkbox" value="N/A" name="insurance_medicare_member_id_check_na" id="insurance_medicare_member_id_check_na">
                    <label for="insurance_medicare_member_id_check_na"> NA - No Medicare</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="insurance_nic_member_id">NIC Member ID: </label>
                </div>
                <div class="col-md-5">
                    <input id="insurance_nic_member_id_check" type="text" class="form-control s ou"
                           name="insurance_nic_member_id_check" value="{{ old('insurance_nic_member_id_check') }}">
                </div>
                <div class="col-md-4">
                    <input type="checkbox" value="N/A" name="insurance_nic_member_id_check_na" id="insurance_nic_member_id_check_na">
                    <label for="insurance_nic_member_id_check_na"> NA - No NIC</label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <hr class="hr-st">
            <label><span class="text-green">(M0150)</span>Current Payment Source
                for Home Care (Check all that apply):</label>
          <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="non_charge_current_service"
                           id="non_charge_current_service" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="non_charge_current_service">None; no charge for current services</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="free_for_service"
                           id="free_for_service" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="free_for_service">Medicare (traditional fee-for-service)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="medicare_hmo_managed"
                           id="medicare_hmo_managed" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="medicare_hmo_managed">Medicare (HMO/managed care/Advantage)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="traditional_free_service"
                           id="traditional_free_service" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="traditional_free_service">Medicaid (Traditional fee-for-service)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="insurance_medicaid_hmo_managed"
                           id="insurance_medicaid_hmo_managed" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="insurance_medicaid_hmo_managed">Medicaid (HMO/Managed)</label>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="insurance_workers_compensation"
                           id="insurance_workers_compensation" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="insurance_workers_compensation">Workers Compensation</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="insurance_program_111"
                           id="insurance_program_111" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="insurance_program_111">Title programs (for example, Title III, V, or XX)</label>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="other_government"
                           id="other_government" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="other_government">Other government (for example, Tricare, VA)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="private_insurance"
                           id="private_insurance" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="private_insurance">Private Insurance</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="private_hmo_care"
                           id="private_hmo_care" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="private_hmo_care">Private HMO/Managed care</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="self_pay" id="selft_pay"
                           class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="selft_pay">Self Pay</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="other_specify" id="other_specify"
                           class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="other_specify">Other (Specify)</label>
                </div>
                <div class="col-md-5">
                    <input id="other_specify_value" type="text" class="form-control s ou"
                           name="insurance_current_payment_source[]" value="other_specify_value">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]" value="unknown_resource"
                           id="unknown_resource" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="unknown_resource">Unknown</label>
                </div>
            </div>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Admit</button>
        </div>
    </div>
</form>
