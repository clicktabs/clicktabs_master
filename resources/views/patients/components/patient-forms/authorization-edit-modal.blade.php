<form action="{{ route('authorizations.update', $authorization->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="medication-content" style="border: 1px solid gray; padding:3%">
        <div class="row">
            <div class="col-md-6">
                <label for="authorization_number" class="py-1">Authorization_number<span
                        class="text-red">*</span></label>
                <input type="number" value="{{ $authorization->authorization_number }}" class="form-control"
                    id="authorization_number" name="authorization_number">
            </div>
            <div class="col-md-6">
                <label for="payer" class="py-1">payer<span class="text-red">*</span></label>
                <input type="text" value="{{ $authorization->payer }}" class="form-control" id="payer"
                    name="payer">
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-md-6">
                <label for="severity" class="py-1">severity<span class="text-red">*</span></label>
                <input type="text" value="{{ $authorization->severity }}" class="form-control" id="severity"
                    name="severity">
            </div> --}}
            <div class="col-md-6">
                <label for="eoc_date" class="py-1">eoc_date<span class="text-red">*</span></label>
                <input type="date" value="{{ $authorization->eoc_date }}" class="form-control" id="eoc_date"
                    name="eoc_date">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="service_code" class="py-1">service_code<span class="text-red">*</span></label>
                <input type="text" value="{{ $authorization->service_code }}" class="form-control" id="service_code"
                    name="service_code">
            </div>
            <div class="col-md-6">
                <label for="authorized_units" class="py-1">authorized_units<span class="text-red">*</span></label>
                <input type="text" value="{{ $authorization->authorized_units }}" class="form-control"
                    id="authorized_units" name="authorized_units">
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-6">
                <label for="used" class="py-1">used<span class="text-red">*</span></label>
                <input type="text" value="{{ $authorization->used }}" class="form-control" id="used"
                    name="used">
            </div>
            <div class="col-md-6">
                <label for="unused" class="py-1">unused<span class="text-red">*</span></label>
                <input type="text" value="{{ $authorization->unused }}" class="form-control" id="unused"
                    name="unused">
            </div>
        </div> --}}

        <div class="row mt-5">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <button type="submit" class="form-control btn btn-primary">Update & Exit
                </button>
            </div>

        </div>
    </div>
</form>
