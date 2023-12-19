<div class="row vt">
    <div class="card mb-2">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Physician Information</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="date_of_birth">First Name: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="first_name" type="text" class="form-control s ou" name="first_name" value="{{ $physician->first_name }}">

                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">MI: </label>
                    </div>
                    <div class="col-md-5">
                        <input readonly id="mi" type="text" class="form-control s ou" name="mi" value="{{ $physician->mi }}">
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">Last Name: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="last_name" type="text" class="form-control s ou" name="last_name" value="{{ $physician->last_name }}">
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
                        <input readonly id="credentials" type="text" class="form-control s ou" name="credentials" value="{{ $physician->credentials }}">
                    </div>
                    <div class="col-md-4">
                        <label for="npi_number">NPI Number: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="npi_number" type="text" class="form-control s ou" name="npi_number" value="{{ $physician->npi_number }}">
                        @if ($errors->has('npi_number'))
                            <div class="text-danger">{{ $errors->first('npi_number') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">PECOS Verification: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="pecos_verification" type="text" value="false" class="form-control s ou" name="pecos_verification" hidden>
                        <span id="verification_pecos"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Physician Address</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="address_line_1">Address Line 1: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ $physician->address_line_1 }}">
                        @if ($errors->has('address_line_1'))
                            <div class="text-danger">{{ $errors->first('address_line_1') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="address_line_2">Address Line 2: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="address_line_2" type="text" class="form-control s ou" name="address_line_2" value="{{ $physician->address_line_2 }}">
                    </div>
                    <div class="col-md-4">
                        <label for="city">City: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="city" type="text" class="form-control s ou" name="city" value="{{ $physician->city }}">
                        @if ($errors->has('city'))
                            <div class="text-danger">{{ $errors->first('city') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">State, Zip: </label>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <input readonly id="state" type="text" class="form-control s ou" name="state" value="{{ $physician->state }}">

                                @if ($errors->has('state'))
                                    <div class="text-danger">{{ $errors->first('state') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input readonly id="zip" type="text" class="form-control s ou" name="zip" value="{{ $physician->zip }}">
                                @if ($errors->has('zip'))
                                    <div class="text-danger">{{ $errors->first('zip') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="date_of_birth">Speciality: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="speciality" type="text" class="form-control s ou" name="speciality" value="{{ $physician->speciality }}">

                        @if ($errors->has('speciality'))
                            <div class="text-danger">{{ $errors->first('speciality') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-md-4">
                        <label for="primary_phone">Primary Phone: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="primary_phone" type="text" class="form-control s ou" name="primary_phone" value="{{ $physician->primary_phone }}">
                        @if ($errors->has('primary_phone'))
                            <div class="text-danger">{{ $errors->first('primary_phone') }}</div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="alternate_phone">Alternate Phone: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="alternate_phone" type="text" class="form-control s ou" name="alternate_phone" value="{{ $physician->alternate_phone }}">
                    </div>
                    <div class="col-md-4">
                        <label for="fax">Fax: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="fax" type="text" class="form-control s ou" name="fax" value="{{ $physician->fax }}">
                    </div>
                    <div class="col-md-4">
                        <label for="datemaile_of_birth">Email: </label>
                    </div>
                    <div class="col-md-8">
                        <input readonly id="email" type="email" class="form-control s ou" name="email" value="{{ $physician->email }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')

    <script>
        window.addEventListener('load', function() {
            $('.states-drop-down').select2();
            $('.speciality-drop-down').select2();
        })
    </script>

@endpush
@stack('scripts')
