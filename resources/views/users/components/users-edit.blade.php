<form  action="{{ route('users.update', ['user' => $user->id]) }}" method="post" class="row">
    @csrf
    @method('PUT')

    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">First Name: </label>
                        <input id="first_name" type="text" class="form-control s ou" name="first_name"
                               value="{{ $user->first_name }}">
                    </div>
                    @if ($errors->has('first_name'))
                        <div class="error text-danger">{{ $errors->first('first_name') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name: </label>
                        <input id="last_name" type="text" class="form-control s ou" name="last_name"
                               value="{{ $user->last_name }}">
                    </div>
                    @if ($errors->has('last_name'))
                        <div class="error text-danger">{{ $errors->first('last_name') }}</div>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input id="email" type="email" class="form-control s ou" name="email"
                               value="{{ $user->email }}">
                    </div>
                    @if ($errors->has('email'))
                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_number">Phone Number: </label>
                        <input id="phone_number" type="tel" class="form-control s ou" name="phone_number" value="{{isset($user->user_info->phone_number) ? $user->user_info->phone_number : ''}}">
                    </div>
                    @if ($errors->has('phone_number'))
                        <div class="error text-danger">{{ $errors->first('phone_number') }}</div>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob">Date of birth: </label>
                        <input id="dob" type="date" class="form-control s ou" name="dob"
                               value="{{ isset($user->user_info->dob) ? $user->user_info->dob : '' }}">
                    </div>
                    @if ($errors->has('dob'))
                        <div class="error text-danger">{{ $errors->first('dob') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Address: </label>
                        <input id="address" type="text" class="form-control s ou" name="address"
                               value="{{ isset($user->user_info->address) ? $user->user_info->address : '' }}">
                    </div>
                    @if ($errors->has('address'))
                        <div class="error text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>

            </div>
            @hasrole('super-admin')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="organization_id">Organization</label>
                        <select id="organization_id" class="form-control s ou"
                                name="organization_id">
                            <option value="">Select Organization</option>
                            @foreach($organizations as $value)
                                <option value="{{ $value->id }}"
                                        @if($user->organization_id === $value->id)
                                            selected
                                    @endif
                                >{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('organization_id'))
                        <div class="error text-danger">{{ $errors->first('organization_id') }}</div>
                    @endif
                </div>
{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="roles">Role</label>--}}
{{--                        <select id="roles" class="form-control s ou"--}}
{{--                                name="roles" required>--}}
{{--                            <option value="">Select Roles</option>--}}

{{--                            @foreach($roles as $value)--}}
{{--                                <option value="{{ $value->id }}" {{$value->name === $userRoleNames[0] ? 'selected': ''}} >{{ $value->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    @if ($errors->has('roles'))--}}
{{--                        <div class="error text-danger">{{ $errors->first('roles') }}</div>--}}
{{--                    @endif--}}
{{--                </div>--}}
            </div>
            @endhasrole
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input id="password" type="password" class="form-control s ou" name="password">
                    </div>
                    @if ($errors->has('password'))
                        <div class="error text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password: </label>
                        <input id="confirm_password" type="password" class="form-control s ou" name="confirm_password">
                    </div>
                    @if ($errors->has('confirm_password'))
                        <div class="error text-danger">{{ $errors->first('confirm_password') }}</div>
                    @endif
                </div>

            </div>
            <div class="row">
                <label for="confirm_password">Roles: </label>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <select id="multiselect" class="form-control" size="8" multiple="multiple">
                        @foreach ($roles as $role)
                            @if($role->name !== 'super-admin')
                                <option value="{{$role->name}}">{{$role->name}}</option>
                            @endif
                        @endforeach
                        <input type="hidden" id="selectedValues" name="roles[]">
                    </select>
                </div>

                <div class="col-md-2">
                    <div class="d-flex flex-column h-100 justify-content-evenly">
                        <button id="multiselect_rightSelected"
                                class="btn btn-primary">Add</button>
                        <button id="multiselect_leftSelected"
                                class="btn btn-danger">Remove</button>
                    </div>
                </div>

                <div class="col-md-5">
                    <select  id="multiselect_to" class="form-control"
                             size="8" multiple="multiple">
                        @if (isset($userRoleNames))
                            @foreach ($userRoleNames as $userRoleName)
                                <option
                                    value="{{ $userRoleName }}"
                                    selected >{{ $userRoleName }}</option>
                            @endforeach
                        @endif
                    </select>
                    @if ($errors->has('roles'))
                        <div class="error text-danger">{{ $errors->first('roles') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-1">
        <input type="submit" value="Update" id="update" class="btn btn-block hd xu ye float-right">
    </div>
</form>
