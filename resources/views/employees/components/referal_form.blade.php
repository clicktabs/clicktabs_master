<form action="{{ route('referrals.store') }}" method="post" class="row">
    @csrf
    <div class="card mb-2">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Demographics</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="org_id" value="{{ request('org') }}">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="first_name">First Name: </label>
                        <input id="first_name" type="text" class="form-control s ou" name="first_name" value="{{ old('first_name') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="middle_name">Middle Name: </label>
                        <input id="middle_name" type="text" class="form-control s ou" name="middle_name" value="{{ old('middle_name') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_name">Last Name: </label>
                        <input id="last_name" type="text" class="form-control s ou" name="last_name" value="{{ old('last_name') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender: </label>
                        <select name="gender" id="gender" class="form-control s ou">
                            <option value="">Select</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth: </label>
                        <input id="date_of_birth" type="date" class="form-control s ou" name="date_of_birth" value="{{ old('date_of_birth') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control s ou" id="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mobile_phone">Mobile Phone</label>
                        <input type="text" name="mobile_phone" class="form-control s ou" id="mobile_phone" value="{{ old('mobile_phone') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="altenate_phone">Alternate Phone</label>
                        <input type="text" name="altenate_phone" class="form-control s ou" id="altenate_phone" value="{{ old('altenate_phone') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="marital_status">Marital Status</label>
                        <select name="marital_status" id="marital_status" class="form-control s ou">
                            <option value="">Select an option</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="married">Divorced</option>
                            <option value="widower">Widower</option>
                            <option value="widow">Widow</option>
                        </select>
                    </div>
                </div>


                {{-- addrees area --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="country">Country: </label>
                        <select name="country" id="country" class="form-control s ou">
                            <option value="">Select Country</option>
                            <option value="1">United States of America</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="zip_code">Zip Code: </label>
                        <input id="zip_code" type="text" class="form-control s ou" name="zip_code" value="{{ old('zip_code') }}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="primary_address_line_1">Primary Address Line 1: </label>
                        <input id="primary_address_line_1" type="text" class="form-control s ou" name="primary_address_line_1" value="{{ old('primary_address_line_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="primary_address_line_2">Primary Address Line 2: </label>
                        <input id="primary_address_line_2" type="text" class="form-control s ou" name="primary_address_line_2" value="{{ old('primary_address_line_2') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="county">County: </label>
                        <input id="county" type="text" class="form-control s ou" name="county" value="{{ old('county') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="city">City: </label>
                        <input id="city" type="text" class="form-control s ou" name="city" value="{{ old('city') }}">
                    </div>
                </div>

                {{-- language details --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="primary_language">Primary Language</label>
                        <input type="text" name="primary_language" id="primary_language" class="form-control" value="{{ old('primary_language') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                        <label for="language_barrier">Language Barrier</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" name="needs_interpreter" id="needs_interpreter" class="form-control">
                        <label for="needs_interpreter">Needs Interpreter</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>

{{--    <div class="card mb-2">--}}
{{--        <div class="card-header text-center  bg-dark">--}}
{{--            <h2 class="gh text-slate-800 text-white">Insurance</h2>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="row">--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="mbi_number">Medicare Number:</label>--}}
{{--                        <input type="text" name="mbi_number" class="form-control s ou" id="mbi_number" value="{{ old('mbi_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="medicaid_number">Medicaid Number</label>--}}
{{--                        <input type="text" name="medicaid_number" class="form-control s ou" id="medicaid_number" value="{{ old('medicaid_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="secondary_number">Secondary Payer</label>--}}
{{--                        <input type="text" name="secondary_number" class="form-control s ou" id="secondary_number" value="{{ old('secondary_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-2">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="secondary_number_id">ID</label>--}}
{{--                        <input type="text" name="secondary_number_id" class="form-control s ou" id="secondary_number_id" value="{{ old('secondary_number_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="mcr_advantage_plan">MCR Advantage Plan</label>--}}
{{--                        <input type="text" name="mcr_advantage_plan" class="form-control s ou" id="mcr_advantage_plan" value="{{ old('mcr_advantage_plan') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="mcr_advantage_number">MCR Advantage Number</label>--}}
{{--                        <input type="text" name="mcr_advantage_number" class="form-control s ou" id="mcr_advantage_number" value="{{ old('mcr_advantage_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-2">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="auth_required">Auth Required</label>--}}
{{--                        <select name="auth_required" id="auth_required">--}}
{{--                            <option value="">Select Option</option>--}}
{{--                            <option value="Yes">Yes</option>--}}
{{--                            <option value="No">No</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="reimbursement_is">Reimbursement is</label>--}}
{{--                        <select name="reimbursement_is" id="reimbursement_is">--}}
{{--                            <option value="">Select Option</option>--}}
{{--                            <option value="episodic">Episodic</option>--}}
{{--                            <option value="pay_per_visit">Pay per visit</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="new_patient_id">New Patient ID</label>--}}
{{--                        <input type="text" name="new_patient_id" class="form-control s ou" id="new_patient_id" value="{{ old('new_patient_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="former_patient_id">Former Patient ID</label>--}}
{{--                        <input type="text" name="former_patient_id" class="form-control s ou" id="former_patient_id" value="{{ old('former_patient_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="eligibility_checked_by">Eligibity Checked By</label>--}}
{{--                        <input type="text" name="eligibility_checked_by" class="form-control s ou" id="eligibility_checked_by" value="{{ old('eligibility_checked_by') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- emergency contact details --}}




{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</form>
