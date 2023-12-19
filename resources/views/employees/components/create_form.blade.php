<div>
    <form id="employeeForm" name="employeeForm" class="row">
        @csrf
        <div class="vt card mb-2">
            <div class="card-header text-center !bg-[#4133BF]">
                <h2 class="gh text-slate-800 text-white">Employee Details</h2>
            </div>
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload"  name="photo" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload">
                        <svg width="800px" height="800px" viewBox="0 0 24 24" id="_24x24_On_Light_Edit" data-name="24x24/On Light/Edit" xmlns="http://www.w3.org/2000/svg">
                            <rect id="view-box" width="24" height="24" fill="none"/>
                            <path id="Shape" d="M.75,17.5A.751.751,0,0,1,0,16.75V12.569a.755.755,0,0,1,.22-.53L11.461.8a2.72,2.72,0,0,1,3.848,0L16.7,2.191a2.72,2.72,0,0,1,0,3.848L5.462,17.28a.747.747,0,0,1-.531.22ZM1.5,12.879V16h3.12l7.91-7.91L9.41,4.97ZM13.591,7.03l2.051-2.051a1.223,1.223,0,0,0,0-1.727L14.249,1.858a1.222,1.222,0,0,0-1.727,0L10.47,3.91Z" transform="translate(3.25 3.25)" fill="#141124"/>
                        </svg>
                    </label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                    </div>
                </div>
            </div>

            <div class="card-body row">
                <div class="row">
                    <div class="col-md-4">
                        <label for="first_name">First Name: <span class="text-red">*</span></label>
                        <input id="first_name" type="text" class="form-control s ou" name="first_name" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="last_name">Last Name: <span class="text-red">*</span></label>
                        <input id="last_name" type="text" class="form-control s ou" name="last_name" value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-3">
                        <label for="mi">MI:</label>
                        <input id="mi" type="text" class="form-control s ou" name="mi" value="{{ old('mi') }}">
                    </div>
                    <div class="col mt-2">
                        <label for="status">Status:</label>
                        <select class="form-control s ou" name="status" id="status">
                            <option value="">Select status</option>
                            <option value="1">Active</option>
                            <option value="0">Not Active</option>
                        </select>
                        @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        @endif
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <label for="ssn">Social Security No: <span class="text-red">*</span></label>
                        <input id="ssn" type="text" class="form-control s ou" name="ssn" value="{{ old('ssn') }}">
                        @if ($errors->has('ssn'))
                            <span class="text-danger">{{ $errors->first('ssn') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <label for="gender">Gender: <span class="text-red">*</span></label>
                        <select name="gender" id="gender" class="form-control s ou">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @if ($errors->has('gender'))
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <label for="doh">Date of Hire: <span class="text-red">*</span></label>
                        <input id="doh" type="date" class="form-control s ou" name="doh" value="{{ old('doh') }}">
                        @if ($errors->has('doh'))
                            <span class="text-danger">{{ $errors->first('doh') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <label for="dot">Date of Termination:</label>
                        <input id="dot" type="date" class="form-control s ou" name="dot" value="{{ old('dot') }}">
                        @if ($errors->has('dot'))
                            <span class="text-danger">{{ $errors->first('dot') }}</span>
                        @endif
                    </div>

                </div><!---/End of row--->

                <div class="row mt-4">
                    <div class="col">
                        <label for="type">Type: <span class="text-red">*</span></label>
                        <select class="form-control s ou" name="type" id="type">
                            <option value="">Select Type</option>
                            <option value="full_time">Full Time</option>
                            <option value="per_time">Per Time</option>
                            <option value="seasonal_time">Seasonal</option>
                        </select>
                        @if ($errors->has('type'))
                            <span class="text-danger">{{ $errors->first('type') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <label for="job_title">Job Title: <span class="text-red">*</span></label>
                        <select class="form-control s ou" name="job_title" id="job_title">
                            <option value="">Select Job Title</option>
                            @if($jobs)
                                @foreach($jobs as $job)
                                    <option value="{{$job->code}}">{{$job->name}}</option>
                                @endforeach
                            @endif
                        </select>

                        @if ($errors->has('job_title'))
                            <span class="text-danger">{{ $errors->first('job_title') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <label for="credentials">Credentials: <span class="text-red">*</span></label>
                        <select class="form-control s ou" name="credentials" id="credentials">
                            <option value="">Select Credentials</option>
                            @if($admission_source)
                                @foreach($admission_source as $creads)
                                    <option value="{{$creads->id}}">{{$creads->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        @if ($errors->has('credentials'))
                            <span class="text-danger">{{ $errors->first('credentials') }}</span>
                        @endif
                    </div>
                    <div class="col">
                        <label for="agency_branch">Agency Branch: <span class="text-red">*</span></label>
                        <select class="form-control s ou" name="agency_branch" id="agency_branch">
                            <option value="">Select agency</option>
                            @if($agency_branch)
                                @foreach($agency_branch as $branch)
                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        @if ($errors->has('agency_branch'))
                            <span class="text-danger">{{ $errors->first('agency_branch') }}</span>
                        @endif
                    </div>
                </div><!--/End of row-->

                <div class="row mt-4">
                    <div class="col">
                        <label for="address_line_1">Address Line 1: <span class="text-red">*</span></label>
                        <input id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ old('address_line_1') }}">
                        <input id="lat" type="hidden" class="form-control s ou" name="lat" />
                        <input id="lon" type="hidden" class="form-control s ou" name="lon" />
                        <div class="absolute top-[67px] bg-[#fff] shadow-xl p-[10px] z-[999]" id="results"></div>
                    </div>
                    <div class="col">
                        <label for="city">City: <span class="text-red">*</span></label>
                        <input id="city" type="text" class="form-control s ou" name="city" value="{{ old('city') }}">
                    </div>
                    <div class="col">
                        <label for="state">State: <span class="text-red">*</span></label>
                        <input id="state" type="text" class="form-control s ou" name="state" value="{{ old('state') }}">
                    </div>

                </div><!--/End of Row-->

                <div class="row mt-4">
                    <div class="col">
                        <label for="zip">Zip: <span class="text-red">*</span></label>
                        <input id="zip" type="text" class="form-control s ou" name="zip" value="{{ old('zip') }}">
                    </div>
                    <div class="col">
                        <label for="county">County: <span class="text-red">*</span></label>
                        <input id="county" type="text" class="form-control s ou" name="county" value="{{ old('county') }}">
                    </div>
                    <div class="col">
                        <label for="emergency">Emergency Name: </label>
                        <input id="home_phone" type="text" class="form-control s ou" name="home_phone" value="{{ old('home_phone') }}">
                    </div>
                </div><!--/End of Row-->

                <div class="row mt-4">
                    <div class="col">
                        <label for="home_phone">Phone Number:<span class="text-red">*</span> </label>
                        <input id="emergency" type="text" class="form-control s ou" name="emergency" value="{{ old('home_phone') }}">
                    </div>

                    <div class="col">
                        <label for="phone">Phone Number:</label>
                        <input id="phone" type="text" class="form-control s ou" name="phone" value="{{ old('phone') }}">
                    </div>
                    <div class="col">
                        <label for="email">Email:<span class="text-red">*</span></label>
                        <input id="email" type="email" class="form-control s ou" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="col">
                        <label for="prefered_contact">Prefered Contact: <span class="text-red">*</span></label>
                        <select name="prefered_contact" id="prefered_contact" class="form-control s ou">
                            <option value="">Select prefered Contact</option>
                            <option value="home">Home</option>
                            <option value="mobile">Mobile</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12 mt-5 pl-3 pb-3">
                    <button type="submit" class="btn btn-block hd xu ye">Submit</button>
                </div>

            </div>
        </div>
    </form>
</div>
