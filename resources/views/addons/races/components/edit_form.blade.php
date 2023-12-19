<form action="{{ route('addonRace.update') }}" method="post" class="row">
    @csrf

    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Edit Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="race_type">Name (Race Type): </label>
                        <input id="race_type" type="text" class="form-control s ou" name="race_type" value="{{ $addonRace->race_type }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="reference_code">Reference Code: </label>
                        <input id="reference_code" type="text" class="form-control s ou" name="reference_code" value="{{ $addonRace->reference_code }}">
                    </div>
                </div>
                <input type="hidden" name="id" value="{{ encrypt($addonRace->id) }}">
                <input id="organisation_id" value={{ $addonRace->company_id }} type="text" class="form-control s ou" name="organisation_id" value="{{ old('organisation_id') }}">

            </div>
        </div>
    </div>

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
