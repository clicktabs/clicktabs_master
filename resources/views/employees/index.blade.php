@extends('layouts.app')

@section('extra_css')
    <style>
        .dataTables_length label{
            width: 250px;
        }
        .dataTables_length label select {
            width: 100px;
        }
        table.dataTable>tbody>tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .blocker.jquery-modal {
            z-index: 99;
        }
        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
        }
        .editEmployeeModal {
            display: none;
        }
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }
        .avatar-upload .avatar-edit input {
            display: none;
        }
        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }
        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }
        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
@endsection
@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <!-- Welcome banner -->
            <div class="y pr dw jk rounded-sm la rc !bg-[#4133BF]">

                <!-- Background illustration -->
                <div class="g q k ip id pointer-events-none hidden tnh" aria-hidden="true">
                    <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                            <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                            <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                                <stop stop-color="#A5B4FC" offset="0%"></stop>
                                <stop stop-color="#818CF8" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                                <stop stop-color="#4338CA" offset="0%"></stop>
                                <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <g transform="rotate(64 36.592 105.604)">
                                <mask id="welcome-d" fill="#fff">
                                    <use xlink:href="#welcome-a"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                            </g>
                            <g transform="rotate(-51 91.324 -105.372)">
                                <mask id="welcome-f" fill="#fff">
                                    <use xlink:href="#welcome-e"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                            </g>
                            <g transform="rotate(44 61.546 392.623)">
                                <mask id="welcome-h" fill="#fff">
                                    <use xlink:href="#welcome-g"></use>
                                </mask>
                                <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                                <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                            </g>
                        </g>
                    </svg>
                </div>

                <!-- Content -->
                <div class="y">
                    <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]">Employees</h1>
                </div>

            </div>
            <!-- Dashboard actions -->
            <div class="je jd jc rc">

                <!-- Right: Actions -->
                <div class="sn am jo az jp ft">

                    <!-- Add view button -->
                    <a type="button" href="{{ route('employees.create') }}" class="btn ho xi ye">
                        <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                        </svg>
                        <span class="hidden trm nq">Add New Employee</span>
                    </a>

{{--                    <form id="search-form" class="flex gap-[20px]" action="{{route('search.employees')}}">--}}
{{--                        <div>--}}
{{--                            <label class="filter_label" for="Branch">Branch:</label>--}}
{{--                            <select name="branch" id="Branch">--}}

{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <button class="btn ho xi ye" type="submit">Search</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
            </div>

            <div class="row mb-4">
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <!-- Table -->
                        <div class="lf">
                            <table class="ux ou display nowrap" style="width:100%" id="employeeTable">
                                <!-- Table header -->
                                <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                    <tr>
                                        <th>Image</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Hiring Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm gp le ln">
                                <!-- Row -->
                                @if ($employees)
                                    @foreach($employees as $employee)
                                        <tr class="active cursor-pointer " data-id="{{$employee->id}}">
                                            <td style="width:20px; height:10px;">
                                                @if (isset($employee->photo) && file_exists(public_path('employee/' . $employee->photo)))
                                                    <img src="{{ asset('employee/' . $employee->photo) }}" alt="{{ $employee->name }}'s photo">
                                                @else
                                                    <img src="{{asset('employee/avatar.svg')}}" alt="Default photo">
                                                @endif
                                            </td>
                                            <td><a href="{{route('employees.show', $employee->id)}}">{{$employee->first_name}}</a></td>
                                            <td> <a href="{{route('employees.show', $employee->id)}}">{{$employee->last_name}}</a></td>
                                            <td>{{ \Carbon\Carbon::parse($employee->doh)->format('M d, Y') }}</td>
                                            <td>
                                                <div class="flex flex-wrap gap-[5px]">
                                                    <a class="btn btn-info" href="{{route('employees.show', $employee->id)}}">View</a>
                                                    <button type="button" class="btn btn-primary !bg-[#0b5ed7] edit_employee" data-id="{{$employee->id}}" >Edit</button>
                                                    <form method="post" action="{{route('employees.destroy', $employee->id)}}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger !bg-[#bb2d3b]">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        @canany(['employee-create'])
                        <div class="editEmployeeModal !max-w-[1024px]">
                            <form name="employeeForm" id="employeeForm" method="POST" class="row employeeForm">
                                @csrf
                                @method('PUT')
                                <div class="card mb-2">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type="file" id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" class="form-control">
                                            <label for="imageUpload">
                                                <svg width="800px" height="800px" viewBox="0 0 24 24" id="_24x24_On_Light_Edit" data-name="24x24/On Light/Edit" xmlns="http://www.w3.org/2000/svg">
                                                    <rect id="view-box" width="24" height="24" fill="none"></rect>
                                                    <path id="Shape" d="M.75,17.5A.751.751,0,0,1,0,16.75V12.569a.755.755,0,0,1,.22-.53L11.461.8a2.72,2.72,0,0,1,3.848,0L16.7,2.191a2.72,2.72,0,0,1,0,3.848L5.462,17.28a.747.747,0,0,1-.531.22ZM1.5,12.879V16h3.12l7.91-7.91L9.41,4.97ZM13.591,7.03l2.051-2.051a1.223,1.223,0,0,0,0-1.727L14.249,1.858a1.222,1.222,0,0,0-1.727,0L10.47,3.91Z" transform="translate(3.25 3.25)" fill="#141124"></path>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body row vt">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="first_name">First Name: <span class="text-red">*</span></label>
                                                <input id="first_name" type="text" class="form-control s ou" name="first_name" value="{{ old('first_name') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="last_name">Last Name: <span class="text-red">*</span></label>
                                                <input id="last_name" type="text" class="form-control s ou" name="last_name" value="{{ old('last_name') }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mi">MI:</label>
                                                <input id="mi" type="text" class="form-control s ou" name="mi" value="{{ old('mi') }}">

                                            </div>
                                            <div class="col-md-3">
                                                <label for="dob">Date of Birth: <span class="text-red">*</span></label>
                                                <input id="dob" type="date" class="form-control s ou" name="dob" value="{{ old('dob') }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <label for="ssn">Social Security No:</label>
                                                <input id="ssn" type="text" class="form-control s ou" name="ssn" value="{{ old('ssn') }}">
                                            </div>
                                            <div class="col">
                                                <label for="gender">Gender: <span class="text-red">*</span></label>
                                                <select name="gender" id="gender" class="form-control s ou">
                                                    <option value="">Select</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="doh">Date of Hire: <span class="text-red">*</span></label>
                                                <input id="doh" type="date" class="form-control s ou" name="doh" value="{{ old('doh') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="dot">Date of Termination:</label>
                                                <input id="dot" type="date" class="form-control s ou" name="dot" value="{{ old('dot') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="status">Status: <span class="text-red">*</span></label>
                                                <select class="form-control s ou" name="status" id="status">
                                                    <option value="">Select status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Not Active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-">
                                                <label for="type">Type: <span class="text-red">*</span></label>
                                                <select class="form-control s ou" name="type" id="type">
                                                    <option value="">Select Type</option>
                                                    <option value="full_time">Full Time</option>
                                                    <option value="per_time">Part Time</option>
                                                    <option value="seasonal_time">Seasonal</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="job_title">Job Title: <span class="text-red">*</span></label>
                                                <select class="form-control s ou" name="job_title" id="job_title">
                                                    <option value="">Select Job Title</option>
                                                    @if($jobs)
                                                        @foreach($jobs as $job)
                                                            <option value="{{$job->code}}">{{$job->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="credentials">Credentials: <span class="text-red">*</span></label>
                                                <select class="form-control s ou" name="credentials" id="credentials">
                                                    <option value="">Select Credentials</option>
                                                    @if($admission_source)
                                                        @foreach($admission_source as $creads)
                                                            <option value="{{$creads->id}}">{{$creads->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="agency_branch">Agency Branch: <span class="text-red">*</span></label>
                                                <select class="form-control s ou" name="agency_branch" id="agency_branch">
                                                    <option value="">Select agency</option>
                                                    @if($agency_branch)
                                                        @foreach($agency_branch as $branch)
                                                            <option value="{{$branch->id}}">{{$branch->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 relative">
                                                <label for="address_line_1">Address Line 1: <span class="text-red">*</span></label>
                                                <input id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ old('address_line_1') }}">
                                                {{-- <input id="lat" type="hidden" class="form-control s ou" name="lat" />
                                                <input id="lon" type="hidden" class="form-control s ou" name="lon" /> --}}
                                                <div class="absolute top-[67px] bg-[#fff] shadow-xl p-[10px] z-[999]" id="results"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address_line_2">Address Line 2: <span class="text-red">*</span></label>
                                                <input id="address_line_2" type="text" class="form-control s ou" name="address_line_2" value="{{ old('address_line_2') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone">Mobile Phone: <span class="text-red">*</span></label>
                                                <input id="phone" type="text" class="form-control s ou" name="phone" value="{{ old('phone') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="county">County: <span class="text-red">*</span></label>
                                                <input id="county" type="text" class="form-control s ou" name="county" value="{{ old('county') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="emergency">Emergency Name: <span class="text-red">*</span></label>
                                                <input id="emergency" type="text" class="form-control s ou" name="emergency" value="{{ old('home_phone') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="home_phone">Phone: <span class="text-red">*</span></label>
                                                <input id="home_phone" type="text" class="form-control s ou" name="home_phone" value="{{ old('home_phone') }}">
                                            </div>
                                        </div>

                                        <hr class="hr-st"/>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="city">City: <span class="text-red">*</span></label>
                                                <input id="city" type="text" class="form-control s ou" name="city" value="{{ old('city') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="fax">Fax: <span class="text-red">*</span></label>
                                                <input id="fax" type="text" class="form-control s ou" name="fax" value="{{ old('fax') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="email">Email: <span class="text-red">*</span></label>
                                                <input id="email" type="email" class="form-control s ou" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="state">State: <span class="text-red">*</span></label>
                                                <input id="state" type="text" class="form-control s ou" name="state" value="{{ old('state') }}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="zip">Zip: <span class="text-red">*</span></label>
                                                <input id="zip" type="text" class="form-control s ou" name="zip" value="{{ old('zip') }}">
                                             </div>
                                            <div class="col-md-4">
                                                <label for="prefered_contact">Prefered Contact: <span class="text-red">*</span></label>
                                                <select name="prefered_contact" id="prefered_contact" class="form-control s ou">
                                                    <option value="">Select prefered Contact</option>
                                                    <option value="home">Home</option>
                                                    <option value="mobile">Mobile</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mt-1">
                                    <button type="submit" class="btn btn-block hd xu ye float-right">Update</button>
                                </div>
                            </form>

                        </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('extra_js')
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script>
        let eId = '';
        $(document).ready(function () {
            $('#employeeTable').DataTable({
                order: [ 1, 'desc' ],
                scrollX: true,
            });

            jQuery(document).on('submit', '#employeeForm', function(e) {
                e.preventDefault();
                let validator = jQuery('#employeeForm').validate({
                    rules: {
                        first_name: "required",
                        last_name: "required",
                        dob: "required",
                        ssn: "required",
                        gender: "required",
                        doh: "required",
                        dot: "required",
                        status: "required",
                        type: "required",
                        job_title: "required",
                        credentials: "required",
                        agency_branch: "required",
                        address_line_1: "required",
                        county: "required",
                        phone: "required",
                        home_phone: "required",
                        city: "required",
                        fax: "required",
                        email: "required",
                        state: "required",
                        zip: "required",
                        prefered_contact: "required",
                    }
                });
                if(validator.valid()) {
                    jQuery('.loader_wrap').fadeIn();
                    let data = new FormData(this);
                    data.append("_method", "PUT")
                    jQuery.ajax({
                        // data: $('#employeeForm').serialize(),
                        url: "/api/employee-update/"+eId,
                        method: 'POST',
                        data: data,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data) {
                            window.location.reload();
                            $('#employeeForm').trigger("reset");
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                            toastr.success(data.message)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;
                        },
                        error: function (data) {
                            let errors = data.responseJSON;
                            for (const key of Object.keys(errors.errors)) {
                                let input = $('#'+key);
                                input.addClass('error');
                                input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
                            }
                            jQuery('.loader_wrap').fadeOut();
                            jQuery('.close-modal').trigger('click');
                        }
                    });
                }
            });
        });

        jQuery(document).ready(function () {
            jQuery('table tbody').on('click', '.edit_employee', function() {
            // jQuery('.edit_employee').click(function () {
                $('.editEmployeeModal').modal({
                    fadeDuration: 100
                });

                eId = jQuery(this).data("id");

                jQuery.ajax({
                    url: "/api/employee-edit/"+eId,
                    method: 'POST',
                    data: eId,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        setInputField(data);
                        jQuery('.loader_wrap').fadeOut();
                    },
                    error: function (data) {
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            });
        });
        function setInputField(data) {
            jQuery('#first_name').val(data.employee.first_name);
            jQuery('#last_name').val(data.employee.last_name);
            jQuery('#mi').val(data.employee.mi);
            let dob = moment(data.employee.dob).format('MM-DD-YYYY');

            jQuery('#dob').val(dob);
            jQuery('#ssn').val(data.employee.ssn);
            console.log(data.employee.photo);
            jQuery('#imagePreview').css('background-image', 'url(/employee/'+data.employee.photo+')');
            let doh = moment(data.employee.doh).format('MM-DD-YYYY');
            let dot = moment(data.employee.dot).format('MM-DD-YYYY');
            jQuery('#doh').val(doh);
            jQuery('#dot').val(dot);
            jQuery('#gender').val(data.employee.gender);
            jQuery('#type').val(data.employee.type);
            jQuery('#status').val(data.employee.status);
            jQuery('#job_title').val(data.employee.job_title);
            jQuery('#credentials').val(data.employee.credentials);
            jQuery('#agency_branch').val(data.employee.agency_branch);
            jQuery('#address_line_1').val(data.employee.address_line_1);
            jQuery('#phone').val(data.employee.mobile_phone);
            jQuery('#address_line_2').val(data.employee.address_line_2);
            jQuery('#home_phone').val(data.employee.home_phone);
            jQuery('#city').val(data.employee.city);
            jQuery('#fax').val(data.employee.fax);
            jQuery('#email').val(data.employee.email);
            jQuery('#state').val(data.employee.state);
            jQuery('#zip').val(data.employee.zip);
            jQuery('#prefered_contact').val(data.employee.prefered_contact);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    jQuery('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    jQuery('#imagePreview').hide();
                    jQuery('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        jQuery("#photo").change(function() {
            readURL(this);
        });

        jQuery('#results').hide();

        jQuery('#address_line_1').keyup(function () {
            jQuery('#results').fadeIn();
            let xmlhttp = new XMLHttpRequest();
            let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#address_line_1').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
            xmlhttp.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    let myArr = JSON.parse(this.responseText);
                    address_lockup(myArr.features);
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        });

        function address_lockup(arr)
        {
            let out = "";
            let i;

            if(arr.length > 0)
            {
                for(i = 0; i < arr.length; i++)
                {
                    out += "<div class='address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='"+arr[i].properties.address_line1+"' data-zip='"+arr[i].properties.zip+"' data-county='"+arr[i].properties.county+"' data-city='"+arr[i].properties.city+"' data-country='"+arr[i].properties.country+"'  data-lat='"+arr[i].properties.lat+"' data-lon='"+arr[i].properties.lon+"' data-state='"+arr[i].properties.state+"'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('results').innerHTML = out;
            }
            else
            {
                document.getElementById('results').innerHTML = "Sorry, no results...";
            }
        }

        jQuery(document).on('click', '.address', function () {
            jQuery('#address_line_1').val(jQuery(this).data('addressline1'));
            // jQuery('#zip').val(jQuery(this).data('zip'));
            jQuery('#county').val(jQuery(this).data('county'));
            jQuery('#city').val(jQuery(this).data('city'));
            jQuery('#zip').val(jQuery(this).data('zip'));
            jQuery('#state').val(jQuery(this).data('state'));
            jQuery('#lat').val(jQuery(this).data('lat'));
            jQuery('#lon').val(jQuery(this).data('lon'));
            jQuery('#results').fadeOut();
            // console.log(jQuery(this).data('lat'), jQuery(this).data('lang'), jQuery(this).data('address'))
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        jQuery("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
@endsection
