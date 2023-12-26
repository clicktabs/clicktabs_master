<form action="{{ route('patients.store') }}" method="post" class="row">
    @csrf
    <div class="tab">

        <button type="button" class="tablinks" id="defaultOpen" onclick="openPage(event, 'demographics')">Demographics</button>
        <button type="button" class="tablinks" onclick="openPage(event, 'physician')">Physician</button>
        <button type="button" class="tablinks" onclick="openPage(event, 'patient_diagnosis')">Clinical Diagnosis</button>
        <button type="button" class="tablinks" onclick="openPage(event, 'pharmacy')">Pharmacy</button>
        <button type="button" class="tablinks" onclick="openPage(event, 'advance_directive')">Advance Directives</button>
        <button type="button" class="tablinks" onclick="openPage(event, 'emergency')">Emergency Preparedness</button>
        <button type="button" class="tablinks" onclick="openPage(event, 'episode')">Episode Timing</button>
        <button type="button" class="tablinks" onclick="openPage(event, 'insurance')">Insurance</button>
    </div>
    @include('patients.components.patient-forms.demographic')
    @include('patients.components.patient-forms.emergency')
    @include('patients.components.patient-forms.insurance')
    @include('patients.components.patient-forms.pharmacy')
    <div class="card mb-2 tabcontent" id="physician">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Physician</h2>
        </div>
        <div class="vt card-body pb-4">
            <div class="row">
                <div class="col-md-5">
                    <label for="first_name">Primary Physician:</label>
                    <select name="pharmacy" class="physicianSelector form-control s ou primary-physician-drop-down">
                        <option value="">--- Select ---</option>
                        @if ($physicians)
                            @foreach ($physicians as $physician)
                                <option value={{ $physician->id }}>{{ $physician->first_name }} {{ $physician->last_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-md-7">
                    <button type="button" class="btn btn-block add_new_physician hd xu ye button-float-right">Add new Physician</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">Attending Physician was contacted and agreed to provide ongoing care (orders) for this patient.</span>
                </div>
            </div>
            <div class="mt-4">
                <div class="col">
                    <label for="physician_name">Physician Name:</label>
                    <span id="physician_name"></span>
                </div>
                <div class="col">
                    <label for="physician_address">Address:</label>
                    <span id="physician_address"></span>
                </div>
                <div class="col">
                    <label for="physician_telephone">Telephone:</label>
                    <span id="physician_telephone"></span>
                </div>
                <div class="col">
                    <label for="physician_fax">Fax:</label>
                    <span id="physician_fax"></span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-5">
                    <label for="first_name">Referring Physician:</label>

                    <select name="referring_physician" class="referringSelector form-control s ou referring-physician-drop-down">
                        <option value="">--- Select ---</option>
                        @if ($physicians)
                            @foreach ($physicians as $physician)
                                <option value={{ $physician->id }}>{{ $physician->first_name }} {{ $physician->last_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="mt-4">
                    <div class="col">
                        <label for="physician_name_alt">Physician Name:</label>
                        <span id="physician_name_alt"></span>
                    </div>
                    <div class="col">
                        <label for="physician_address">Address:</label>
                        <span id="physician_address_alt"></span>
                    </div>
                    <div class="col">
                        <label for="physician_telephone">Telephone:</label>
                        <span id="physician_telephone_alt"></span>
                    </div>
                    <div class="col">
                        <label for="physician_fax">Fax:</label>
                        <span id="physician_fax_alt"></span>
                    </div>
                </div>
            </div>
            <hr class="hr-st">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <label for="first_name">Face-to-Face Evaluation Information:</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                        <span for="language_barrier">NA</span>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                        <span for="language_barrier">Date of Face-to-Face Visit</span>
               
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                        <span for="language_barrier">Face-to-Face to be completed within 30 days</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('patients.components.patient-forms.episode')
    @include('patients.components.patient-forms.advance_directive')
    @include('patients.components.patient-forms.patient_diagnosis')
    @include('patients.components.patient-forms.advance')
    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>
</form>

<div class="physician_modal" style="max-width: 80%;">
    @include('patients.components.physician_modal')
</div>


@push('scripts')

    <script>

        function checkIcdName(){
            var name = $('#icd_field').find('input[name="icd_name_search"]').val();
            $.ajax({
                url: "{{ route("patients.icd_details") }}",
                data: {"name":name},
                type: 'get',
                success: function(result){
                    const { data } = result
                    $('#ic_code_name').empty();
                    var $dropdown = $("#ic_code_name");
                    for(let i = 0; i < data[3].length; i ++){
                        $dropdown.append($("<option />").val(data[3][i][0]).text(data[3][i][1]));
                    }
                }
            });
        };

        function openPage(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        var i = 0;
        var original = document.getElementById('wrapper-other-diagnosis');

        function addAnotherDiagnosis() {
            var clone = original.cloneNode(true); // "deep" clone
            clone.id = "duplicetor" + ++i; // there can only be one element with an ID
            original.parentNode.appendChild(clone);
        }

        function toggle(className, obj) {
            console.log("HERE")

            var $input = $(obj);
            if ($input.prop('checked')) {
                document.getElementById(className).style.display="block"
            } else {
                document.getElementById(className).style.display="none"
            }
        }

            // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        window.addEventListener('load', function() {
            $('.clinician-drop-down').select2();
            $('.physician-drop-down').select2();
            $('.certified-physician-drop-down').select2();
            $('.liaison-drop-down').select2();
            $('.internal-source-drop-down').select2();
            $('.manager-drop-down').select2();
            $('.services-drop-down').select2();
            $('.attending-drop-down').select2();
            $('.relationship-drop-down').select2();
            $('.states-drop-down').select2();
            $('.country-drop-down').select2();
            $('.ic-diagnosis-drop-down').select2();
            // $('.ic-code-drop-down').select2();
            $('.severity-drop-down').select2();
            $('.pharmacy-drop-down').select2();
            $('.language-drop-down').select2();
            $('.interpreter-drop-down').select2();
            $('.agency-drop-down').select2();
            $('.oasis-assign-drop-down').select2();
            $('.ot-assign-drop-down').select2();
            $('.pt-assign-drop-down').select2();
            $('.st-assign-drop-down').select2();
            $('.case-manager-drop-down').select2();
            $('.attending-physician-drop-down').select2();
            $('.secondary-payor-drop-down').select2();
            $('.primary-payor-drop-down').select2();
            $('.primary-physician-drop-down').select2();
            $('.referring-physician-drop-down').select2();
            $('.icd-name-drop-down').select2();
        });

        window.addEventListener('load', function() {

            $('.attendingSelector').change(function() {
                var id = this.value;
                console.log(id)
                $.ajax({
                    url: "{{ route("physician.single_details") }}",
                    data: {"id":id},
                    type: 'get',
                    success: function(result){

                        let name = `${result.data[0].first_name} ${result.data[0].last_name}`
                        document.getElementById("attendin_physician_name").textContent= name;
                        document.getElementById("attendin_physician_address").textContent= result.data[0].address_line_1;
                        document.getElementById("attendin_physician_phone").textContent= result.data[0].primary_phone;
                        document.getElementById("attendin_physician_fax").textContent= result.data[0].fax;
                    }
                });
            });

            $('.referringSelector').change(function() {
                var id = this.value;
                console.log(id)
                $.ajax({
                    url: "{{ route("physician.single_details") }}",
                    data: {"id":id},
                    type: 'get',
                    success: function(result){

                        let name = `${result.data[0].first_name} ${result.data[0].last_name}`
                        document.getElementById("physician_name_alt").textContent= name;
                        document.getElementById("physician_address_alt").textContent= result.data[0].address_line_1;
                        document.getElementById("physician_telephone_alt").textContent= result.data[0].primary_phone;
                        document.getElementById("physician_fax_alt").textContent= result.data[0].fax;
                    }
                });
            });

            $('.physicianSelector').change(function() {
                var id = this.value;
                console.log(id)
                $.ajax({
                    url: "{{ route("physician.single_details") }}",
                    data: {"id":id},
                    type: 'get',
                    success: function(result){

                        let name = `${result.data[0].first_name} ${result.data[0].last_name}`
                        document.getElementById("physician_name").textContent= name;
                        document.getElementById("physician_address").textContent= result.data[0].address_line_1;
                        document.getElementById("physician_telephone").textContent= result.data[0].primary_phone;
                        document.getElementById("physician_fax").textContent= result.data[0].fax;
                    }
                });
            });

            $('.pharmacySelector').change(function() {
                var id = this.value;
                $.ajax({
                    url: "{{ route("pharmacy.details") }}",
                    data: {"id":id},
                    type: 'get',
                    success: function(result){
                        document.getElementById("pharmacy_name").textContent= result.data[0].name;
                        document.getElementById("pharmacy_address").textContent= result.data[0].address;
                        document.getElementById("pharmacy_telephone").textContent= result.data[0].telephone;
                        document.getElementById("pharmacy_fax").textContent= result.data[0].fax;
                    }
                });
            });
        });
    </script>
@endpush

@section('extra_js')
    <script>
        // Find other diagnosis
        jQuery(document).on('click', '.check_another_icd_name', function () {
            let name = jQuery(this).parents('.other-diagnosis').find('.other_diagnosis_code').val();
            jQuery(this).parents('.other-diagnosis').find('.ic-code-drop-down').empty();
            let $dropdown = jQuery(this).parents('.other-diagnosis').find('.ic-code-drop-down');
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "{{ route("patients.icd_details") }}",
                data: {"name":name},
                type: 'get',
                success: function(result){

                    const { data } = result
                    for(let i = 0; i < data[3].length; i ++){
                        $dropdown.append($("<option />").val(data[3][i][0]).text(data[3][i][1]));
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery(document).on('click','.add_new_physician', function () {
            jQuery('.physician_modal').modal({
                fadeDuration: 100
            })
        });

        jQuery('.add_new_pharmacy').click(function () {
            jQuery('.pharmacy_modal').modal({
                fadeDuration: 100
            })
        });

        function get_api_data() {
            jQuery.ajax({
                url: "{{ route("social-worker.index") }}",
                type: 'get',
                success: function(result){
                    const { data } = result;
                    $('#case_manager').empty();
                    var $dropdown = $("#case_manager");
                    $dropdown.append($("<option />").val('').text('--Select--'));
                    for(let i = 0; i < data.length; i ++){
                        $dropdown.append($("<option />").val(data[i].id).text(data[i].first_name+' '+data[i].last_name));
                    }
                }
            });

            jQuery.ajax({
               url: "{{route("api.employee.index")}}",
               type: "get",
               success: function (result) {
                   const { data } = result;
                   $('#clinical_manager, #oasis_assigned_manager, #ot_assigned_manager, #pt_assigned_manager, #st_assigned_manager').empty();
                   var $dropdown = $("#clinical_manager, #oasis_assigned_manager, #ot_assigned_manager, #pt_assigned_manager, #st_assigned_manager");
                   $dropdown.append($("<option />").val('').text('--Select--'));
                   for(let i = 0; i < data.length; i ++){
                       $dropdown.append($("<option />").val(data[i].id).text(data[i].first_name+' '+data[i].last_name));
                   }
               }
            });
        }
        get_api_data();

        jQuery('#p_h_address_line_1').keyup(function () {

            jQuery('#p_h_results').fadeIn();
            let xmlhttp = new XMLHttpRequest();
            let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#p_h_address_line_1').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
            xmlhttp.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    let myArr = JSON.parse(this.responseText);
                    p_h_address_lockup(myArr.features);
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        });

        jQuery('#p_s_address_line_1').keyup(function () {
            jQuery('#p_s_results').fadeIn();
            let xmlhttp = new XMLHttpRequest();
            let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#p_s_address_line_1').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
            xmlhttp.onreadystatechange = function()
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    let myArr = JSON.parse(this.responseText);
                    p_s_address_lockup(myArr.features);
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        });

        jQuery(document).on('click', '.p_h_address', function () {
            jQuery('#p_h_address_line_1').val(jQuery(this).data('addressline1'));
            jQuery('#p_h_address_line_2').val(jQuery(this).data('addressline2'));
            jQuery('#p_h_country').val(jQuery(this).data('country'));
            jQuery('#p_h_county').val(jQuery(this).data('county'));
            jQuery('#p_h_city').val(jQuery(this).data('city'));
            jQuery('#p_h_state').val(jQuery(this).data('state'));
            jQuery('#p_h_lat').val(jQuery(this).data('lat'));
            jQuery('#p_h_lon').val(jQuery(this).data('lon'));
            jQuery('#p_h_results').fadeOut();
            // console.log(jQuery(this).data('lat'), jQuery(this).data('lang'), jQuery(this).data('address'))
        });

        jQuery(document).on('click', '.p_s_address', function () {
            jQuery('#p_s_address_line_1').val(jQuery(this).data('addressline1'));
            jQuery('#p_s_address_line_2').val(jQuery(this).data('addressline2'));
            jQuery('#p_s_country').val(jQuery(this).data('country'));
            jQuery('#p_s_county').val(jQuery(this).data('county'));
            jQuery('#p_s_city').val(jQuery(this).data('city'));
            jQuery('#p_s_state').val(jQuery(this).data('state'));
            jQuery('#p_s_lat').val(jQuery(this).data('lat'));
            jQuery('#p_s_lon').val(jQuery(this).data('lon'));
            jQuery('#p_s_results').fadeOut();
            // console.log(jQuery(this).data('lat'), jQuery(this).data('lang'), jQuery(this).data('address'))
        });

        function p_h_address_lockup(arr) {
            let out = "";
            let i;

            if(arr.length > 0)
            {
                for(i = 0; i < arr.length; i++)
                {
                    out += "<div class='p_h_address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='"+arr[i].properties.address_line1+"' data-addressLine2='"+arr[i].properties.address_line2+"' data-county='"+arr[i].properties.county+"' data-city='"+arr[i].properties.city+"' data-country='"+arr[i].properties.country+"'  data-lat='"+arr[i].properties.lat+"' data-lon='"+arr[i].properties.lon+"' data-state='"+arr[i].properties.state+"'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('p_h_results').innerHTML = out;
            }
            else
            {
                document.getElementById('p_h_results').innerHTML = "Sorry, no results...";
            }
        }

        function p_s_address_lockup(arr) {
            let out = "";
            let i;

            if(arr.length > 0)
            {
                for(i = 0; i < arr.length; i++)
                {
                    out += "<div class='p_s_address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='"+arr[i].properties.address_line1+"' data-addressLine2='"+arr[i].properties.address_line2+"' data-county='"+arr[i].properties.county+"' data-city='"+arr[i].properties.city+"' data-country='"+arr[i].properties.country+"'  data-lat='"+arr[i].properties.lat+"' data-lon='"+arr[i].properties.lon+"' data-state='"+arr[i].properties.state+"'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('p_s_results').innerHTML = out;
            }
            else
            {
                document.getElementById('p_s_results').innerHTML = "Sorry, no results...";
            }
        }

        // Same as home address
        jQuery('#same_home_address').click(function () {
            if(jQuery(this).is(':checked')) {
                jQuery('#p_s_address_line_1').val(jQuery('#p_h_address_line_1').val());
                jQuery('#p_s_address_line_2').val(jQuery('#p_h_address_line_2').val());
                jQuery('#p_s_country').val(jQuery('#p_h_country').val());
                jQuery('#p_s_county').val(jQuery('#p_h_county').val());
                jQuery('#p_s_city').val(jQuery('#p_h_city').val());
                jQuery('#p_s_state').val(jQuery('#p_h_state').val());
                jQuery('#p_s_lat').val(jQuery('#p_h_lat').val());
                jQuery('#p_s_lon').val(jQuery('#p_h_lon').val());
            } else {
                jQuery('#p_s_address_line_1').val();
                jQuery('#p_s_address_line_2').val();
                jQuery('#p_s_country').val();
                jQuery('#p_s_county').val();
                jQuery('#p_s_city').val();
                jQuery('#p_s_state').val();
                jQuery('#p_s_lat').val();
                jQuery('#p_s_lon').val();
            }
        });
    </script>
@endsection

@stack('scripts')
