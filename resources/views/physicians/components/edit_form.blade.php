<form action="{{ route('physician.update') }}" method="post" class="row">
    @csrf

    <div class="card mb-2">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Search Physician</h2>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-2 justify-content-center">
                <label for="npi_number_search">NPI Number: </label>
            </div>
            <div class="col">
                <input id="npi_number_search" type="text" class="form-control s ou" name="npi_number_search" value="{{ old('npi_number_search') }}">
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
        </div>
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Physician Information</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="date_of_birth">First Name: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input id="first_name" type="text" class="form-control s ou" name="first_name" value="{{ $physician->first_name }}">
                        @if ($errors->has('first_name'))
                            <div class="text-danger">{{ $errors->first('first_name') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">MI: </label>
                    </div>
                    <div class="col-md-5">
                        <input id="mi" type="text" class="form-control s ou" name="mi" value="{{ $physician->mi }}">
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">Last Name: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input id="last_name" type="text" class="form-control s ou" name="last_name" value="{{ $physician->last_name }}">
                        @if ($errors->has('last_name'))
                            <div class="text-danger">{{ $errors->first('last_name') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="date_of_birth">Credentials: </label>
                    </div>
                    <div class="col-md-8">
                        <input id="credentials" type="text" class="form-control s ou" name="credentials" value="{{ $physician->credentials }}">
                    </div>
                    <div class="col-md-4">
                        <label for="npi_number">NPI Number: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input id="npi_number" type="text" class="form-control s ou" name="npi_number" value="{{ $physician->npi_number }}">
                        @if ($errors->has('npi_number'))
                            <div class="text-danger">{{ $errors->first('npi_number') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">PECOS Verification: </label>
                    </div>
                    <div class="col-md-8">
                        <input id="pecos_verification" type="text" value="false" class="form-control s ou" name="pecos_verification" hidden>
                        <span id="verification_pecos"></span>
                    </div>
                </div>
            </div>

            <input id="org_id" value={{ encrypt($physician->org_id) }} type="hidden" class="form-control s ou" name="org_id" value="{{ old('org_id') }}">
        </div>
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Physician Address</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="address_line_1">Address Line 1: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ $physician->address_line_1 }}">
                        @if ($errors->has('address_line_1'))
                            <div class="text-danger">{{ $errors->first('address_line_1') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="address_line_2">Address Line 2: </label>
                    </div>
                    <div class="col-md-8">
                        <input id="address_line_2" type="text" class="form-control s ou" name="address_line_2" value="{{ $physician->address_line_2 }}">
                    </div>
                    <div class="col-md-4">
                        <label for="city">City: <span class="text-red">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <input id="city" type="text" class="form-control s ou" name="city" value="{{ $physician->city }}">
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
                                <select name="state" id="state" class="form-control s ou states-drop-down">
                                    <option value="">--- Select ---</option>
                                    <option value="M">State</option>
                                    <option value="F">State</option>
                                </select>
                                @if ($errors->has('state'))
                                    <div class="text-danger">{{ $errors->first('state') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control s ou" name="zip" value="{{ $physician->zip }}">
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
                        <select name="speciality" id="speciality" class="form-control s ou speciality-drop-down">
                            <option value="">--- Select ---</option>
                            {{-- @foreach($physician as $shopping)
                                <option value="{{ $shopping->id }}" {{$company->shopping_id == $shopping->id  ? 'selected' : ''}}>{{ $shopping->fantasyname}}</option>
                            @endforeach --}}
                            <option value="M">State</option>
                            <option value="F">State</option>
                        </select>
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
                        <input id="primary_phone" type="text" class="form-control s ou" name="primary_phone" value="{{ $physician->primary_phone }}">
                        @if ($errors->has('primary_phone'))
                            <div class="text-danger">{{ $errors->first('primary_phone') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="alternate_phone">Alternate Phone: </label>
                    </div>
                    <div class="col-md-8">
                        <input id="alternate_phone" type="text" class="form-control s ou" name="alternate_phone" value="{{ $physician->alternate_phone }}">
                    </div>
                    <div class="col-md-4">
                        <label for="fax">Fax: </label>
                    </div>
                    <div class="col-md-8">
                        <input id="fax" type="text" class="form-control s ou" name="fax" value="{{ $physician->fax }}">
                    </div>
                    <div class="col-md-4">
                        <label for="datemaile_of_birth">Email: </label>
                    </div>
                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control s ou" name="email" value="{{ $physician->email }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ encrypt($physician->id) }}">

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
@push('scripts')

    <script>
        window.addEventListener('load', function() {
            $('.states-drop-down').select2();
            $('.speciality-drop-down').select2();
        })
    </script>

@endpush
@stack('scripts')
