<style>
      label .pecos {
        display: inline-block;
        text-align: right;
      }
      label.not-checked::after {
        content: '✖';
        color: red;
        font-weight: bold;
        font-size: 1.2em;
        margin-left: 4px;
    }
    label.checked::after {
        content: ''; /* Removes the content when checkbox is checked */
    }
</style>
<div class="col">
    <form action="{{ route('physician.store') }}" method="post" class="row">
        @csrf
        <div class="vt card mb-2">
            <div class="card-header text-center !bg-[#4133BF]">
                <h2 class="gh text-slate-800 text-white">Search Physician</h2>
            </div>
            <div class="row pl-3 mt-3 mb-3" id="npi_field">
                <div class="col-md-2 justify-content-center">
                    <label for="npi_number_search">NPI Number: </label>
                </div>
                <div class="col">
                    <input id="npi_number_search" type="number" class="form-control s ou" name="npi_number_search" value="{{ old('npi_number_search') }}">
                </div>
                <div class="col">
                    <svg onclick="checkNpiNumber()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
            </div>
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Physician Information</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="date_of_birth">First Name: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="first_name" type="text" class="form-control s ou" name="first_name" value="{{ old('first_name') }}">
                        @if ($errors->has('first_name'))
                            <div class="text-danger">{{ $errors->first('first_name') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">MI: </label>
                    </div>
                    <div class="col-md-5">
                        <input readonly id="mi" type="text" class="form-control s ou" name="mi" value="{{ old('mi') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="last_name">Last Name: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="last_name" type="text" class="form-control s ou" name="last_name" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                            <div class="text-danger">{{ $errors->first('last_name') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="credentials">Credentials: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="credentials" type="text" class="form-control s ou" name="credentials" value="{{ old('credentials') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="npi_number">NPI Number: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="npi_number" type="text" class="form-control s ou" name="npi_number" value="{{ old('npi_number') }}">
                        @if ($errors->has('npi_number'))
                            <div class="text-danger">{{ $errors->first('npi_number') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">PECOS Verification: </label>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-3">
                                <label for="hha_checkbox">HHA</label>
                                <input type="checkbox" id="hha_checkbox" name="hha_checkbox" disabled>
                            </div>
                            <div class="col-sm-3">
                                <label for="dme_checkbox">DME</label>
                                <input type="checkbox" id="dme_checkbox" name="dme_checkbox" disabled>
                            </div>
                            <div class="col-sm-4">
                                <label for="partb_checkbox">PARTB</label>
                                <input type="checkbox" id="partb_checkbox" name="partb_checkbox" disabled>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @hasrole('super-admin')
                @if (Auth::user()->organization_id == null)
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="organisation_id">Organisation (IDs)</label>
                                <select name="org_id" id="organisation_id" class="form-control s ou">
                                    <option value="">Select Organisation ID</option>
                                    <option value="0">All</option>
                                    @if ($organizations)
                                        @foreach ($organizations as $organization)
                                            <option value={{ $organization->id }}>{{ $organization->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                @else
                    <input id="org_id" value={{ $organizations }} type="hidden" class="form-control s ou" name="org_id" value="{{ old('org_id') }}">
                @endif
            @else
                <input id="org_id" value={{ $organizations }} type="hidden" class="form-control s ou" name="org_id" value="{{ old('org_id') }}">
            @endhasrole
        </div>
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Physician Address</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="address_line_1">Address Line 1: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ old('address_line_1') }}">
                        @if ($errors->has('address_line_1'))
                            <div class="text-danger">{{ $errors->first('address_line_1') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="address_line_2">Address Line 2: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="address_line_2" type="text" class="form-control s ou" name="address_line_2" value="{{ old('address_line_2') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="city">City: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="city" type="text" class="form-control s ou" name="city" value="{{ old('city') }}">
                        @if ($errors->has('city'))
                            <div class="text-danger">{{ $errors->first('city') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">State, Zip: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <input readonly id="state" type="text" class="form-control s ou" name="state" value="{{ old('state') }}">
                                @if ($errors->has('state'))
                                    <div class="text-danger">{{ $errors->first('state') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input readonly id="zip" type="text" class="form-control s ou" name="zip" value="{{ old('zip') }}">
                                @if ($errors->has('zip'))
                                    <div class="text-danger">{{ $errors->first('zip') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">Speciality: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="speciality" type="text" class="form-control s ou" name="speciality" value="{{ old('speciality') }}">

                        @if ($errors->has('speciality'))
                            <div class="text-danger">{{ $errors->first('speciality') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="primary_phone">Primary Phone: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="primary_phone" type="text" class="form-control s ou" name="primary_phone" value="{{ old('primary_phone') }}">
                        @if ($errors->has('primary_phone'))
                            <div class="text-danger">{{ $errors->first('primary_phone') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="alternate_phone">Alternate Phone: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="alternate_phone" type="text" class="form-control s ou" name="alternate_phone" value="{{ old('alternate_phone') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="fax">Fax: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="fax" type="text" class="form-control s ou" name="fax" value="{{ old('fax') }}">
                    </div>
                    <div class="col-md-4">
                        <label for="datemaile_of_birth">Email: </label>
                    </div>
                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control s ou" name="email" value="{{ old('email') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-1">
                <input type="submit" value="Save" class="btn btn-block !bg-[#4133BF] hd xu ye">
            </div>
        </form>
        </div>
           @push('scripts')

        <script>
            function setCheckboxState(checkboxId, dataProperty) {
                var checkbox = $('#' + checkboxId);
                var label = $('label[for="' + checkboxId + '"]');
                var isChecked = dataProperty === "Y";

                checkbox.prop('checked', isChecked); // Set the checked property based on the data

                if (isChecked) {
                    checkbox.show(); // Show the checkbox if checked
                    label.removeClass('not-checked');
                } else {
                    checkbox.hide(); // Hide the checkbox if not checked
                    label.addClass('not-checked'); // Add the class to show the red "X"
                }
            }

            function checkNpiNumber() {
                var id = $('#npi_field').find('input[name="npi_number_search"]').val();
                $.ajax({
                    url: "{{ route('physician.details') }}",
                    data: { "id": id },
                    type: 'get',
                    success: function (result) {
                        if (Array.isArray(result) && result.length > 0) {
                            // Assuming the second element in the array contains the checkbox data
                            var data = result[1]; // This is the object with PARTB, DME, HHA

                            // Set input field values using the first element of the result array
                            var basicData = result[0].basic;
                            var addressData = result[0].addresses[0];
                            var taxonomyData = result[0].taxonomies[0];

                            $('#first_name').val(basicData.first_name);
                            $('#last_name').val(basicData.last_name);
                            $('#credentials').val(basicData.credential);
                            $('#speciality').val(taxonomyData.desc);
                            $('#npi_number').val(result[0].number);
                            $('#address_line_1').val(addressData.address_1);
                            $('#city').val(addressData.city);
                            $('#state').val(addressData.state);
                            $('#zip').val(addressData.postal_code);
                            $('#primary_phone').val(addressData.telephone_number);

                            // For address line 2 and alternate phone, check if the secondary address exists
                            var secondaryAddress = result[0].addresses.length > 1 ? result[0].addresses[1] : null;
                            $('#address_line_2').val(secondaryAddress ? secondaryAddress.address_1 : '');
                            $('#alternate_phone').val(secondaryAddress ? secondaryAddress.telephone_number : '');
                            $('#fax').val(addressData.fax_number);

                            // Set checkboxes based on the second element of the result array
                            if (result.length > 1) {
                                setCheckboxState('hha_checkbox', data.HHA);
                                setCheckboxState('dme_checkbox', data.DME);
                                setCheckboxState('partb_checkbox', data.PARTB);
                            } else {
                                setCheckboxState('hha_checkbox', null);
                                setCheckboxState('dme_checkbox', null);
                                setCheckboxState('partb_checkbox', null);
                            }


                        } else {

                            console.log('NPI data not found in the response or incorrect response structure.');
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('AJAX request failed: ' + error);
                    }
                });
            }

            window.addEventListener('load', function () {
                $('.states-drop-down').select2();
                $('.speciality-drop-down').select2();
            });
        </script>




    @endpush
    @stack('scripts')
