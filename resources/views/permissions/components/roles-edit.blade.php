<form  action="{{ route('roles.update', ['role' => $role->id]) }}" method="post" class="row">
    @csrf
    @method('PUT')
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input id="name" type="text" class="form-control s ou" name="name"  value="{{ $role->name }}">
                    </div>
                    @if ($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="permissions">Permissions</label>
                        <select id="permissions" class="form-control s ou"
                                name="permission[]" multiple="multiple" required>
                            <option value="">Select Permissions</option>
                            @foreach($permission as $value)
                                <option value="{{ $value->id }}"
                                        @foreach($rolePermissions as $t)
                                            @if($t === $value->id)
                                                selected
                                    @endif
                                    @endforeach
                                >{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('permission'))
                        <div class="error text-danger">{{ $errors->first('permission') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-1">
        <input type="submit" value="Update" class="btn btn-block hd xu ye float-right">
    </div>
</form>
