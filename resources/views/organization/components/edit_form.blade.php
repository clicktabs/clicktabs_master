<div class="my-2 tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
    <div class="dk">
        <form action="{{ route('organizations.update', [$org->org_id]) }}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="card mb-2">
                <div class="card-header text-center">
                    <h2 class="gh text-slate-800">Basic Information</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name: </label>
                                <input id="name" type="text" class="form-control s ou" name="name" value="{{ $org->name ?? "" }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone">Phone: </label>
                                <input id="phone" type="text" class="form-control s ou" name="phone" value="{{ $org->phone ?? "" }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input id="email" type="email" class="form-control s ou" name="email" value="{{ $org->email ?? "" }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-1">
                <input type="submit" value="Update" class="btn btn-block hd xu ye float-right">
            </div>
        </form>
    </div>
</div>

<div class="my-2 tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
    <div class="dk">
        <form action="{{ route('update_org_info', ['org' => $org->org_id]) }}" method="post" class="row">
            @csrf
            @method('PUT')
            <div class="card mb-2">
                <div class="card-header text-center">
                    <h2 class="gh text-slate-800">Agency Information</h2>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="national_provider_number">National Provider Number</label>
                                <input type="text" name="national_provider_number" class="form-control s ou" id="national_provider_number" value="{{ $org->agency_info->national_provider_number ?? "" }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tax_id">Tax ID Number</label>
                                <input type="text" name="tax_id" class="form-control s ou" id="tax_id" value="{{ $org->agency_info->tax_id ?? "" }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tax_id_type">Tax ID Type</label>
                                <select name="tax_id_type" id="tax_id_type" class="form-control s ou">
                                    <option value="">Select Type of Tax ID</option>
                                    <option value="1">Text Type ID</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="medicare_provider_number">Medicare Provider Number</label>
                                <input type="text" name="medicare_provider_number" class="form-control s ou" id="medicare_provider_number" value="{{ $org->agency_info->medicare_provider_number ?? "" }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="medicaid_provider_number">Medicaid Provider Number</label>
                                <input type="text" name="medicaid_provider_number" class="form-control s ou" id="medicaid_provider_number" value="{{ $org->agency_info->medicaid_provider_number ?? "" }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="medicaid_provider_identifier">Medicaid Provider Identifier</label>
                                <input type="text" name="medicaid_provider_identifier" class="form-control s ou" id="medicaid_provider_identifier" value="{{ $org->agency_info->medicaid_provider_identifier ?? "" }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="unique_agency_oasis_id_code">Unique Agency Oasis ID Code</label>
                                <input type="text" name="unique_agency_oasis_id_code" class="form-control s ou" id="unique_agency_oasis_id_code" value="{{ $org->agency_info->unique_agency_oasis_id_code ?? "" }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dme_medicaid_provider_identifier">DME Medicaid Provider Identifier</label>
                                <input type="text" name="dme_medicaid_provider_identifier" class="form-control s ou" id="dme_medicaid_provider_identifier" value="{{ $org->agency_info->dme_medicaid_provider_identifier ?? "" }}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cahps_vendor_id">CAPHS Vendor ID</label>
                                <input type="text" name="cahps_vendor_id" class="form-control s ou" id="cahps_vendor_id" value="{{ $org->agency_info->cahps_vendor_id ?? "" }}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-1">
                <input type="submit" value="Update" class="btn btn-block hd xu ye float-right">
            </div>
        </form>
    </div>
</div>

<div class="my-2 tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
    <div class="dk">
        <form action="" method="post" class="row">
            @csrf
            <div class="card mb-2">
                <div class="card-header text-center">
                    <h2 class="gh text-slate-800">Address Information</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="country">Country: </label>
                                <select name="country_id" id="country" class="form-control s ou">
                                    <option value="">Select Country</option>
                                    {{-- @foreach ($countries as $c)
                                        <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                                    @endforeach --}}
                                    @if($org->address)
                                        <option value="1" @if ($org->address->country_id == 1) selected @endif>United States of America</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="zip_code">Zip Code: </label>
                                <input id="zip_code" type="text" class="form-control s ou" name="zip_code" value="{{ $org->address ? $org->address->zip_code : "" }}">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="address_line_1">Address Line 1: </label>
                                <input id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ $org->address ? $org->address->address_line_1 : "" }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_line_2">Address Line 2: </label>
                                <input id="address_line_2" type="text" class="form-control s ou" name="address_line_2" value="{{ $org->address ? $org->address->address_line_2 : "" }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="po_box_address">P.O Box Address: </label>
                                <input id="po_box_address" type="text" class="form-control s ou" name="po_box_address" value="{{ $org->address ? $org->address->po_box_address : "" }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="city">City: </label>
                                <input id="city" type="text" class="form-control s ou" name="city" value="{{ $org->address ? $org->address->city : "" }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-1">
                <input type="submit" value="Update" class="btn btn-block hd xu ye float-right">
            </div>
        </form>
    </div>
</div>

<div class="my-2 tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
    <div class="dk">
        <form action="" method="post" class="row">
            @csrf
            <div class="card mb-2">
                <div class="card-header text-center">
                    <h2 class="gh text-slate-800">Contact Person Information</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_person_first_name">FIrst Name: </label>
                                <input id="contact_person_first_name" type="text" class="form-control s ou" name="contact_person_first_name" value="{{ $org->contact_person ? $org->contact_person->contact_person_first_name : "" }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_person_last_name">Last Name: </label>
                                <input id="contact_person_last_name" type="text" class="form-control s ou" name="contact_person_last_name" value="{{ $org->contact_person ? $org->contact_person->contact_person_last_name : "" }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_person_email">Email: </label>
                                <input id="contact_person_email" type="text" class="form-control s ou" name="contact_person_email" value="{{ $org->contact_person ? $org->contact_person->contact_person_email : "" }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_person_phone">Phone: </label>
                                <input id="contact_person_phone" type="text" class="form-control s ou" name="contact_person_phone" value="{{ $org->contact_person ? $org->contact_person->contact_person_phone :"" }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-1">
                <input type="submit" value="Update" class="btn btn-block hd xu ye float-right">
            </div>
        </form>
    </div>
</div>



