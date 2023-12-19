<form action="{{ route('patients.store') }}" method="post" class="row">
    @csrf
    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Basic Information</h2>
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

            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Patient Extra Information</h2>
        </div>
        <div class="card-body">
            <div class="row">

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

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="social_security_number">Social Security Number</label>
                        <input type="text" name="social_security_number" class="form-control s ou" id="social_security_number" value="{{ old('social_security_number') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mbi_number">Medicare Beneficiary Identifier (MBI) Number:</label>
                        <input type="text" name="mbi_number" class="form-control s ou" id="mbi_number" value="{{ old('mbi_number') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="hic_number">Health Insurance Claim (HIC) Number:</label>
                        <input type="text" name="hic_number" class="form-control s ou" id="hic_number" value="{{ old('hic_number') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="medicaid_number">Medicaid Number</label>
                        <input type="text" name="medicaid_number" class="form-control s ou" id="medicaid_number" value="{{ old('medicaid_number') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="primary_insurance">Primary Insurance</label>
                        <input type="text" name="primary_insurance" class="form-control s ou" id="primary_insurance" value="{{ old('primary_insurance') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="secondary_insurance">Secondary Insurance</label>
                        <input type="text" name="secondary_insurance" class="form-control s ou" id="secondary_insurance" value="{{ old('secondary_insurance') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="tertiary_insurance">Tertiary Insurance</label>
                        <input type="text" name="tertiary_insurance" class="form-control s ou" id="tertiary_insurance" value="{{ old('tertiary_insurance') }}">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Address Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address_line_1">Address Line 1: </label>
                        <input id="address_line_1" placeholder="Leave Empty if it's same as primary Address" type="text" class="form-control s ou" name="address_line_1" value="{{ old('address_line_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address_line_2">Address Line 2: </label>
                        <input id="address_line_2" placeholder="Leave Empty if it's same as primary Address" type="text" class="form-control s ou" name="address_line_2" value="{{ old('address_line_2') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Emergency Contact Person Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact_person_first_name">FIrst Name: </label>
                        <input id="contact_person_first_name" type="text" class="form-control s ou" name="contact_person_first_name" value="{{ old('contact_person_first_name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact_person_last_name">Last Name: </label>
                        <input id="contact_person_last_name" type="text" class="form-control s ou" name="contact_person_last_name" value="{{ old('contact_person_last_name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact_person_email">Email: </label>
                        <input id="contact_person_email" type="text" class="form-control s ou" name="contact_person_email" value="{{ old('contact_person_email') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact_person_phone">Phone: </label>
                        <input id="contact_person_phone" type="text" class="form-control s ou" name="contact_person_phone" value="{{ old('contact_person_phone') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Services Required</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="service_required">Service: </label>
                        <select name="service_required" id="service_required" class="form-control s ou">
                            <option value="">Select from a list of services that needs to be provided</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="assigned_physician">Assigned Physician: </label>
                        <select name="assigned_physician" id="assigned_physician" class="form-control s ou">
                            <option value="">Select from a list of Employees within this Organization</option>
                            <option value="">Physician 1</option>
                            <option value="">Physician 2</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
