<form action="{{ route('addonLeave.update') }}" method="post" class="row">
    @csrf

    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Basic Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input id="name" type="text" class="form-control s ou" name="name" value="{{  $addonLeaves->name }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="reference_code">Reference Code: </label>
                        <input id="reference_code" type="text" class="form-control s ou" name="reference_code" value="{{ $addonLeaves->reference_code }}">
                        <input id="organisation_id" value={{ $addonLeaves->company_id }} type="text" class="form-control s ou" name="organisation_id" value="{{ old('organisation_id') }}">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-2">
        <div class="card-header text-center">
            <h2 class="gh text-slate-800">Extra Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Description: </label>
                        <input id="description" type="text" class="form-control s ou" name="description" value="{{  $addonLeaves->description }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="leave_privileges">Leave Privileges: </label>
                        <input id="leave_privileges" type="text" class="form-control s ou" name="leave_privileges" value="{{  $addonLeaves->leave_privileges }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="{{ encrypt($addonLeaves->id) }}">

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
