<form action="{{ route('addonJob.update') }}" method="post" class="row">
    @csrf

    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="job_title">Job Title: </label>
                        <input id="job_title" type="text" class="form-control s ou" name="job_title" value="{{ $addonJobTitle->job_title }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="job_title_short">Job Title (Short): </label>
                        <input id="job_title_short" type="text" class="form-control s ou" name="job_title_short" value="{{ $addonJobTitle->job_title_short }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="reference_code">Reference Code: </label>
                        <input id="reference_code" type="text" class="form-control s ou" name="reference_code" value="{{ $addonJobTitle->reference_code }}">
                        <input id="organisation_id" value={{ $addonJobTitle->company_id }} type="text" class="form-control s ou" name="organisation_id" value="{{ old('organisation_id') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ encrypt($addonJobTitle->id) }}">

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
