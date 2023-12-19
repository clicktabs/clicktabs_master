<form action="{{ route('pharmacy.update') }}" method="post" class="row">
    @csrf
    <div class="card mb-2">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Basic Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name: <span class="text-red">*</span></label>
                        <input id="name" type="text" class="form-control s ou" name="name" value="{{ $pharmacy->name }}">
                        @if ($errors->has('name'))
                            <span class="invalid feedback"role="alert">
                                <strong>{{ $errors->first('name') }}.</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="reference_code">Reference Code: <span class="text-red">*</span></label>
                        <input id="reference_code" type="text" class="form-control s ou" name="reference_code" value="{{ $pharmacy->reference_code }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Address:<span class="text-red">*</span></label>
                        <input id="address" type="text" class="form-control s ou" name="address" value="{{ $pharmacy->address }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telephone">Telephone: <span class="text-red">*</span></label>
                        <input id="telephone" type="text" class="form-control s ou" name="telephone" value="{{ $pharmacy->telephone }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fax">Fax: <span class="text-red">*</span></label>
                        <input id="fax" type="text" class="form-control s ou" name="fax" value="{{ $pharmacy->fax }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ encrypt($pharmacy->id) }}">
    <input id="org_id" value={{ $pharmacy->org_id }} type="hidden" class="form-control s ou" name="org_id" value="{{ old('org_id') }}">

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
