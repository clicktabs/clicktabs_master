@extends('layouts.app')
@section('content')
    <main>
        <div class="vs jj ttm vl ou uf na">
            <!-- Welcome banner -->
            <div class="y pr dw jk rounded-sm la rc mb-1">
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
                <div class="y d-print-none">
                    <h1 class="gu teu text-slate-800 font-bold rt">
                        <a href="#" type="button" class="btn ha xo ye">Back</a>
                        {{$heading}}
                    </h1>
                </div>

            </div>

            <div class="row mb-4">
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <!-- include create form -->
                        <form action="{{$url}}" class="employee_application" method="post">
                          @csrf
                          <div class="row">
                              <div class="col-md-12">
                                  <label for="ssn">Leave Type<span class="text-red">*</span></label>
                                  <select name="leaveType" id="leaveType" class="form-control s ou">
                                    <option value="">Select</option>
                                    <option value="Sick Leave" {{isset($employeeLeaveData) && $employeeLeaveData->leave_type=="Sick Leave"?'selected':''}}>Sick Leave</option>
                                    <option value="Earn Leave" {{isset($employeeLeaveData) && $employeeLeaveData->leave_type=="Earn Leave"?'selected':''}}>Earn Leave</option>
                                    <option value="Casual Leave" {{isset($employeeLeaveData) && $employeeLeaveData->leave_type=="Casual Leave"?'selected':''}}>Casual Leave</option>
                                  </select>
                              </div>
                          </div>
                          <div class="row">
                                <div class="col-md-6">
                                <label for="leaveFrom">Leave From<span class="text-red">*</span></label>
                                <input type="date" class="form-control s ou" name="leaveFrom" id="leaveFrom" value="{{isset($employeeLeaveData)? $employeeLeaveData->leave_from :''}}" />
                            </div>
                                <div class="col-md-6">
                                <label for="leaveUntil">Leave Until<span class="text-red">*</span></label>
                                <input type="date" class="form-control s ou" name="leaveUntil" id="leaveUntil" value="{{isset($employeeLeaveData)? $employeeLeaveData->leave_until :''}}" />
                            </div>
                          </div>
                          <div class="row">
                                <div class="col-md-12">
                                <label for="returnDate">Return Date<span class="text-red">*</span></label>
                                <input type="date" class="form-control s ou" name="returnDate" id="returnDate" value="{{isset($employeeLeaveData)? $employeeLeaveData->return_date :''}}" />
                            </div>
                          </div>
                          <div class="row">
                                <div class="col-md-12">
                                <label for="reason">Reason<span class="text-red">*</span></label>
                                <input type="text" class="form-control s ou" name="reason" id="reason" value="{{isset($employeeLeaveData)? $employeeLeaveData->reason :''}}" />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <label for="reason">Status<span class="text-red">*</span></label>
                           <select class="form-control s ou" name="status" id="">
                            <option value="">Select</option>
                            <option value="0" {{isset($employeeLeaveData) && $employeeLeaveData->status=="0"?'selected':''}}>Pending</option>
                            <option value="1" {{isset($employeeLeaveData) && $employeeLeaveData->status=="1"?'selected':''}}>Approved</option>
                            <option value="2" {{isset($employeeLeaveData) && $employeeLeaveData->status=="2"?'selected':''}}>Declined</option>
                           </select>
                        </div>
                      </div>
                          <div class="col-md-12 mb-2">
                            <button type="submit" class="btn btn-block hd xu ye float-right">Submit</button>
                        </div>
                         </form>
                      
                    </div>
                
                </div>
            </div>
        </div>
    </main>
@endsection
@section('extra_js')
    <script>
        // jQuery('#results').hide();
        // jQuery(document).on('submit', 'form', function(e) {
        //     e.preventDefault();
        //     let validator = jQuery('#employeeForm').validate({
        //         rules: {
        //             leaveFrom: "required",
        //             last_name: "required",
        //             dob: "required",
        //             ssn: "required",
        //             gender: "required",
        //             doh: "required",
         
        //         }
        //     });
        //     if(validator.valid()) {
        //         jQuery('.loader_wrap').fadeIn();
        //         jQuery.ajax({
        //             // data: $('#employeeForm').serialize(),
        //             url: "{{ route('api.employee') }}",
        //             method: 'POST',
        //             data: new FormData(this),
        //             dataType: 'JSON',
        //             contentType: false,
        //             cache: false,
        //             processData: false,
        //             success: function (data) {
        //                 console.log(data)
        //                 $('#employeeForm').trigger("reset");
        //                 jQuery('.loader_wrap').fadeOut();
        //                 toastr.success(data.message)
        //                 toastr.options.closeMethod = 'fadeOut';
        //                 toastr.options.closeDuration = 300;
        //                 toastr.options.closeEasing = 'swing';
        //                 toastr.options.progressBar = true;
        //             },
        //             error: function (data) {
        //                 let errors = data.responseJSON;
        //                 for (const key of Object.keys(errors.errors)) {
        //                     let input = $('#'+key);
        //                     input.addClass('error');
        //                     input.parent().append('<label class="error">'+errors.errors[key][0]+'</label>');
        //                 }
        //                 jQuery('.loader_wrap').fadeOut();
        //             }
        //         });
        //     }
        // });

        // jQuery('#address_line_1').keyup(function () {
        //     jQuery('#results').fadeIn();
        //     let xmlhttp = new XMLHttpRequest();
        //     let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#address_line_1').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
        //     xmlhttp.onreadystatechange = function()
        //     {
        //         if (this.readyState == 4 && this.status == 200)
        //         {
        //             let myArr = JSON.parse(this.responseText);
        //             address_lockup(myArr.features);
        //         }
        //     };
        //     xmlhttp.open("GET", url, true);
        //     xmlhttp.send();
        // });

        // function address_lockup(arr)
        // {
        //     let out = "";
        //     let i;

        //     if(arr.length > 0)
        //     {
        //         for(i = 0; i < arr.length; i++)
        //         {
        //             out += "<div class='address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='"+arr[i].properties.address_line1+"' data-addressLine2='"+arr[i].properties.address_line2+"' data-county='"+arr[i].properties.county+"' data-city='"+arr[i].properties.city+"' data-country='"+arr[i].properties.country+"'  data-lat='"+arr[i].properties.lat+"' data-lon='"+arr[i].properties.lon+"' data-state='"+arr[i].properties.state+"'>" + arr[i].properties.formatted + "</div>";
        //         }
        //         document.getElementById('results').innerHTML = out;
        //     }
        //     else
        //     {
        //         document.getElementById('results').innerHTML = "Sorry, no results...";
        //     }
        // }

        // jQuery(document).on('click', '.address', function () {
        //     console.log(jQuery(this).data)
        //     jQuery('#address_line_1').val(jQuery(this).data('addressline1'));
        //     jQuery('#address_line_2').val(jQuery(this).data('addressline2'));
        //     jQuery('#county').val(jQuery(this).data('county'));
        //     jQuery('#city').val(jQuery(this).data('city'));
        //     jQuery('#state').val(jQuery(this).data('state'));
        //     jQuery('#lat').val(jQuery(this).data('lat'));
        //     jQuery('#lon').val(jQuery(this).data('lon'));
        //     jQuery('#results').fadeOut();
        //     // console.log(jQuery(this).data('lat'), jQuery(this).data('lang'), jQuery(this).data('address'))
        // });

        // function readURL(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $('#imagePreview').css('background-image', 'url('+e.target.result +')');
        //             $('#imagePreview').hide();
        //             $('#imagePreview').fadeIn(650);
        //         }
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
        // jQuery("#imageUpload").change(function() {
        //     readURL(this);
        // });
    </script>
@endsection