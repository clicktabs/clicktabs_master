<style>
    .close-modal {
        display: none !important;
    }
</style>
<form name="pharmacyForm" id="pharmacyForm" method="post" class="row">
    @csrf
    <div class="card mb-2">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Basic Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pharmacy_name">Name: <span class="text-red">*</span></label>
                        <input id="pharmacy_name" type="text" class="form-control s ou" name="pharmacy_name" value="{{ old('pharmacy_name') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pharmacy_reference_code">Reference Code: <span class="text-red">*</span></label>
                        <input id="pharmacy_reference_code" type="text" class="form-control s ou" name="pharmacy_reference_code" value="{{ old('pharmacy_reference_code') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pharmacy_address">Address:<span class="text-red">*</span></label>
                        <input id="pharmacy_address" type="text" class="form-control s ou" name="pharmacy_address" value="{{ old('pharmacy_address') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pharmacy_telephone">Telephone: <span class="text-red">*</span></label>
                        <input id="pharmacy_telephone" type="text" class="form-control s ou" name="pharmacy_telephone" value="{{ old('pharmacy_telephone') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pharmacy_fax">Fax: <span class="text-red">*</span></label>
                        <input id="pharmacy_fax" type="text" class="form-control s ou" name="pharmacy_fax" value="{{ old('pharmacy_fax') }}">
                    </div>
                </div>
            </div>
{{--            <input id="org_id" value={{ $organizations }} type="text" class="form-control s ou" name="org_id" value="{{ old('organisation_id') }}" hidden>--}}

        </div>
    </div>
    <div class="col-md-12 mt-1">
        <button type="submit" class="btn btn-block hd xu ye float-right"> Save</button>
    </div>
</form>
