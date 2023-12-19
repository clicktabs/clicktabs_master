<form action="{{ route('organizations.store') }}" method="post" class="row">
    @csrf
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input id="name" type="text" class="form-control s ou" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="phone">Phone: </label>
                        <input id="phone" type="text" class="form-control s ou" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input id="email" type="email" class="form-control s ou" name="email" value="{{ old('email') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="card mb-2">--}}
{{--        <div class="card-header text-center">--}}
{{--            <h2 class="gh text-slate-800">Agency Information</h2>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="row">--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="national_provider_number">National Provider Number</label>--}}
{{--                        <input type="text" name="national_provider_number" class="form-control s ou" id="national_provider_number" value="{{ old('national_provider_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="tax_id">Tax ID Number</label>--}}
{{--                        <input type="text" name="tax_id" class="form-control s ou" id="tax_id" value="{{ old('tax_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="tax_id_type">Tax ID Type</label>--}}
{{--                        <select name="tax_id_type" id="tax_id_type" class="form-control s ou">--}}
{{--                            <option value="">Select Type of Tax ID</option>--}}
{{--                            <option value="1">Text Type ID</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="medicare_provider_number">Medicare Provider Number</label>--}}
{{--                        <input type="text" name="medicare_provider_number" class="form-control s ou" id="medicare_provider_number" value="{{ old('medicare_provider_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="medicaid_provider_number">Medicaid Provider Number</label>--}}
{{--                        <input type="text" name="medicaid_provider_number" class="form-control s ou" id="medicaid_provider_number" value="{{ old('medicaid_provider_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="medicaid_provider_identifier">Medicaid Provider Identifier</label>--}}
{{--                        <input type="text" name="medicaid_provider_identifier" class="form-control s ou" id="medicaid_provider_identifier" value="{{ old('medicaid_provider_identifier') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="unique_agency_oasis_id_code">Unique Agency Oasis ID Code</label>--}}
{{--                        <input type="text" name="unique_agency_oasis_id_code" class="form-control s ou" id="unique_agency_oasis_id_code" value="{{ old('unique_agency_oasis_id_code') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="dme_medicaid_provider_identifier">DME Medicaid Provider Identifier</label>--}}
{{--                        <input type="text" name="dme_medicaid_provider_identifier" class="form-control s ou" id="dme_medicaid_provider_identifier" value="{{ old('dme_medicaid_provider_identifier') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="cahps_vendor_id">CAPHS Vendor ID</label>--}}
{{--                        <input type="text" name="cahps_vendor_id" class="form-control s ou" id="cahps_vendor_id" value="{{ old('cahps_vendor_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="card mb-2">--}}
{{--        <div class="card-header text-center">--}}
{{--            <h2 class="gh text-slate-800">Address Information</h2>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="country">Country: </label>--}}
{{--                        <select name="country_id" id="country" class="form-control s ou">--}}
{{--                            <option value="">Select Country</option>--}}
{{--                            <option value="1">United States of America</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="zip_code">Zip Code: </label>--}}
{{--                        <input id="zip_code" type="text" class="form-control s ou" name="zip_code" value="{{ old('zip_code') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-7">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="address_line_1">Address Line 1: </label>--}}
{{--                        <input id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ old('address_line_1') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="address_line_2">Address Line 2: </label>--}}
{{--                        <input id="address_line_2" type="text" class="form-control s ou" name="address_line_2" value="{{ old('address_line_2') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="po_box_address">P.O Box Address: </label>--}}
{{--                        <input id="po_box_address" type="text" class="form-control s ou" name="po_box_address" value="{{ old('po_box_address') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="city">City: </label>--}}
{{--                        <input id="city" type="text" class="form-control s ou" name="city" value="{{ old('city') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="card mb-2">--}}
{{--        <div class="card-header text-center">--}}
{{--            <h2 class="gh text-slate-800">Contact Person Information</h2>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="contact_person_first_name">First Name: </label>--}}
{{--                        <input id="contact_person_first_name" type="text" class="form-control s ou" name="contact_person_first_name" value="{{ old('contact_person_first_name') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="contact_person_last_name">Last Name: </label>--}}
{{--                        <input id="contact_person_last_name" type="text" class="form-control s ou" name="contact_person_last_name" value="{{ old('contact_person_last_name') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="contact_person_email">Email: </label>--}}
{{--                        <input id="contact_person_email" type="text" class="form-control s ou" name="contact_person_email" value="{{ old('contact_person_email') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="contact_person_phone">Phone: </label>--}}
{{--                        <input id="contact_person_phone" type="text" class="form-control s ou" name="contact_person_phone" value="{{ old('contact_person_phone') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
