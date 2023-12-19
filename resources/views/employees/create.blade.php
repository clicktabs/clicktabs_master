@extends('layouts.app')
@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/oasisCss/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/oasisCss/style_page14.css') }}"/>
    <link rel="stylesheet" href="{{asset('outass/css/style.css')}}">

@endsection
@section('content')
    <main>
        <div class="vs">
            <div class="container-fluid">
            <div class="main_wrapper">
                <div class="container-full">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main_content pb-[50px]">
                                <div id="section">

                                    <div class="main_content_nav">
                                        <ul class="bg-[#4133BF]">
                                            <li ><a href="#section-addEmployee">Add Employee</a></li>
                                            {{-- <li ><a href="#section-hrinfo">Employee HR Information</a></li> --}}
                                        </ul>
                                    </div>

                                    <div class="px-[15px]" id="section-addEmployee">
                                        @include('employees.components.create_form')
                                    </div>

                                    {{-- <div class="px-[15px]" id="section-hrinfo">
                                        @include('employees.components.humanresource')
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </main>
@endsection

@section('extra_js')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="{{ asset('assets/js/maplibre-gl.js') }}"></script>
    <script src="{{ asset('assets/js/leaflet-maplibre-gl.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script>
        jQuery('#results').hide();
        jQuery(document).on('submit', 'form', function(e) {
            e.preventDefault();
            let validator = jQuery('#employeeForm').validate({
                rules: {
                    first_name: "required",
                    last_name: "required",
                    dob: "required",
                    ssn: "required",
                    gender: "required",
                    doh: "required",
                    status: "required",
                    type: "required",
                    job_title: "required",
                    credentials: "required",
                    agency_branch: "required",
                    address_line_1: "required",
                    county: "required",
                    city: "required",
                    email: "required",
                    state: "required",
                    zip: "required",
                    prefered_contact: "required"
                }
            });
            if(validator.valid()) {
                jQuery('.loader_wrap').fadeIn();
                jQuery.ajax({
                    // data: $('#employeeForm').serialize(),
                    url: "{{ route('api.employee') }}",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        console.log(data)
                        $('#employeeForm').trigger("reset");
                        jQuery('.loader_wrap').fadeOut();
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
                    }
                });
            }
        });

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
                    out += "<div class='address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='"+arr[i].properties.address_line1+"' data-county='"+arr[i].properties.county+"' data-city='"+arr[i].properties.city+"' data-country='"+arr[i].properties.county+"'  data-lat='"+arr[i].properties.lat+"' data-lon='"+arr[i].properties.lon+"' data-state='"+arr[i].properties.state+"'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('results').innerHTML = out;
            }
            else
            {
                document.getElementById('results').innerHTML = "Sorry, no results...";
            }
        }

        jQuery(document).on('click', '.address', function () {
            console.log(jQuery(this).data)
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
    <script>
        $(function () {
            $("#section").tabs();
        });
    </script>
@endsection
