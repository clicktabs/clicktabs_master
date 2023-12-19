<form action="{{ route('internalReferralSource.store') }}" method="post" class="row">
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
                        <input id="name" type="text" class="form-control s ou" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="reference_code">Reference Code: </label>
                        <input id="reference_code" type="text" class="form-control s ou" name="reference_code" value="{{ old('reference_code') }}">
                    </div>
                </div>
            </div>
            @hasrole('super-admin')
                @if (Auth::user()->organization_id == null)
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="organisation_id">Organisation (IDs)</label>
                                <select name="organisation_id" id="organisation_id" class="form-control s ou">
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
                    <input id="organisation_id" value={{ $organizations }} type="text" class="form-control s ou" name="organisation_id" value="{{ old('organisation_id') }}">
                @endif
            @else
                <input id="organisation_id" value={{ $organizations }} type="text" class="form-control s ou" name="organisation_id" value="{{ old('organisation_id') }}">
            @endhasrole
        </div>
    </div>
    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>
