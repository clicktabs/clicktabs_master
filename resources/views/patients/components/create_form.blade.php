<div class="tab flex items-center flex-nowrap px-[20px] !overflow-x-scroll">
    <button type="button" class="tablinks flex-shrink-0 demographics" id="defaultOpen" onclick="openPage(event, 'demographics')">
        Demographics
    </button>
    <button type="button" class="tablinks flex-shrink-0 physician" onclick="openPage(event, 'physician')">Physician</button>
    <button type="button" class="tablinks flex-shrink-0 patient_diagnosis" onclick="openPage(event, 'patient_diagnosis')">Clinical
        Diagnosis
    </button>
    <button type="button" class="tablinks flex-shrink-0 pharmacy_form" onclick="openPage(event, 'pharmacy_form')">Pharmacy</button>
    <button type="button" class="tablinks flex-shrink-0 advance_directive" onclick="openPage(event, 'advance_directive')">Advance
        Directives
    </button>
    <button type="button" class="tablinks flex-shrink-0 emergency" onclick="openPage(event, 'emergency')">Emergency Preparedness
    </button>
    <button type="button" class="tablinks flex-shrink-0 episode" onclick="openPage(event, 'episode')">Episode Timing</button>
    <button type="button" class="tablinks flex-shrink-0 insurance" onclick="openPage(event, 'insurance')">Insurance</button>
</div>

        @include('patients.components.patient-forms.demographics')
        @include('patients.components.patient-forms.emergency')
        @include('patients.components.patient-forms.insurance')
        @include('patients.components.patient-forms.pharmacy')
        @include('patients.components.patient-forms.admission-patient-physician')
        @include('patients.components.patient-forms.episode')
        @include('patients.components.patient-forms.advance_directive')
        @include('patients.components.patient-forms.patient_diagnosis')
        @include('patients.components.patient-forms.advance')
        <div class="physician_modal hidden" style="max-width: 80%;">
            @include('patients.components.physician_modal')
</div>
<div class="pharmacy_modal hidden" style="max-width: 450px; height: fit-content;">
    @include('patients.components.pharmacy_modal')
</div>

<input type="text" class="hidden" value="" id="patient_id" />
@push('scripts')

<script>

    function checkIcdName() {
        var name = $('#icd_field').find('input[name="icd_name_search"]').val();
        $.ajax({
            url: "{{ route("patients.icd_details") }}",
            data: {"name": name},
            type: 'get',
            success: function (result) {
                const {data} = result
                $('#ic_code_name').empty();
                var $dropdown = $("#ic_code_name");
                for (let i = 0; i < data[3].length; i++) {
                    $dropdown.append($("<option />").val(data[3][i][1]).text(data[3][i][1]));
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
            let $input = $(obj);

            console.log($input[0].id)

            let checkboxes = $('.episode_schedule input[type="checkbox"]').not('#' + $input[0].id);

            // attach event listener to current checkbox
            $('#' + $input[0].id).on('change', function () {
                if (!$(this).prop('checked')) { // if unchecked
                    checkboxes.prop('disabled', false); // enable all checkboxes
                } else { // if checked
                    checkboxes.prop('disabled', true); // disable all checkboxes
                }
            });

            if ($input.prop('checked')) {
                document.getElementById(className).style.display = "block"
            } else {
                document.getElementById(className).style.display = "none"
            }
        }


        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        window.addEventListener('load', function () {
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
            $('.ot_approved-drop-down').select2();
            $('.pt_approved-drop-down').select2();
            $('.st_approved-drop-down').select2();
            $('.case-manager-drop-down').select2();
            $('.attending-physician-drop-down').select2();
            $('.secondary-payor-drop-down').select2();
            $('.primary-payor-drop-down').select2();
            $('.primary-physician-drop-down').select2();
            $('.referring-physician-drop-down').select2();
            $('.icd-name-drop-down').select2();
        });

        window.addEventListener('load', function () {

            $('.attendingSelector').change(function () {
                var id = this.value;
                console.log(id)
                $.ajax({
                    url: "{{ route("physician.single_details") }}",
                    data: {"id": id},
                    type: 'get',
                    success: function (result) {

                        let name = `${result.data[0].first_name} ${result.data[0].last_name}`
                        document.getElementById("attendin_physician_name").textContent = name;
                        document.getElementById("attendin_physician_address").textContent = result.data[0].address_line_1;
                        document.getElementById("attendin_physician_phone").textContent = result.data[0].primary_phone;
                        document.getElementById("attendin_physician_fax").textContent = result.data[0].fax;
                    }
                });
            });

            $('.referringSelector').change(function () {
                var id = this.value;
                console.log(id)
                $.ajax({
                    url: "{{ route("physician.single_details") }}",
                    data: {"id": id},
                    type: 'get',
                    success: function (result) {

                        let name = `${result.data[0].first_name} ${result.data[0].last_name}`
                        document.getElementById("physician_name_alt").textContent = name;
                        document.getElementById("physician_address_alt").textContent = result.data[0].address_line_1;
                        document.getElementById("physician_telephone_alt").textContent = result.data[0].primary_phone;
                        document.getElementById("physician_fax_alt").textContent = result.data[0].fax;
                    }
                });
            });

            $('.physicianSelector').change(function () {
                var id = this.value;
                console.log(id)
                $.ajax({
                    url: "{{ route("physician.single_details") }}",
                    data: {"id": id},
                    type: 'get',
                    success: function (result) {

                        let name = `${result.data[0].first_name} ${result.data[0].last_name}`
                        document.getElementById("physician_name").textContent = name;
                        document.getElementById("physician_address").textContent = result.data[0].address_line_1;
                        document.getElementById("physician_telephone").textContent = result.data[0].primary_phone;
                        document.getElementById("physician_fax").textContent = result.data[0].fax;
                    }
                });
            });

            $('.pharmacySelector').change(function () {
                var id = this.value;
                $.ajax({
                    url: "{{ route("pharmacy.details") }}",
                    data: {"id": id},
                    type: 'get',
                    success: function (result) {
                        document.getElementById("pharmacy_name").textContent = result.data[0].name;
                        document.getElementById("pharmacy_address").textContent = result.data[0].address;
                        document.getElementById("pharmacy_telephone").textContent = result.data[0].telephone;
                        document.getElementById("pharmacy_fax").textContent = result.data[0].fax;
                    }
                });
            });
        });
    </script>
    @endpush

    @section('extra_js')
    <script src="{{asset('assets/js/plugins/toastr.min.js')}}"></script>
    <script>
        // Find other diagnosis
        jQuery(document).on('click', '.check_another_icd_name', function () {
            let name = jQuery(this).parents('.other-diagnosis').find('.other_diagnosis_code').val();
            jQuery(this).parents('.other-diagnosis').find('.ic-code-drop-down').empty();
            let $dropdown = jQuery(this).parents('.other-diagnosis').find('.ic-code-drop-down');
            jQuery('.loader_wrap').fadeIn();
            jQuery.ajax({
                url: "{{ route("patients.icd_details") }}",
                data: {"name": name},
                type: 'get',
                success: function (result) {

                    const {data} = result
                    for (let i = 0; i < data[3].length; i++) {
                        $dropdown.append($("<option />").val(data[3][i][1]).text(data[3][i][1]));
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });

        jQuery(document).on('click', '.add_new_physician', function () {
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
            {{--jQuery.ajax({--}}
            {{--    url: "{{ route("social-worker.index") }}",--}}
            {{--    type: 'get',--}}
            {{--    success: function (result) {--}}
            {{--        const {data} = result;--}}
            {{--        $('#case_manager').empty();--}}
            {{--        var $dropdown = $("#case_manager");--}}
            {{--        $dropdown.append($("<option />").val('').text('--Select--'));--}}
            {{--        for (let i = 0; i < data.length; i++) {--}}
            {{--            $dropdown.append($("<option />").val(data[i].id).text(data[i].first_name + ' ' + data[i].last_name));--}}
            {{--        }--}}
            {{--    }--}}
            {{--});--}}

            jQuery.ajax({
                url: "{{route("api.employee.index")}}",
                type: "get",
                success: function (result) {
                    const {data} = result;
                    $('#clinical_manager, #ot_approved, #st_approved, #pt_approved, #oasis_assigned_manager, #ot_assigned_manager, #pt_assigned_manager, #st_assigned_manager').empty();
                    var $dropdown = $("#clinical_manager, #ot_approved, #st_approved, #pt_approved, #oasis_assigned_manager, #ot_assigned_manager, #pt_assigned_manager, #st_assigned_manager");
                    $dropdown.append($("<option />").val('').text('--Select--'));
                    for (let i = 0; i < data.length; i++) {
                        $dropdown.append($("<option />").val(data[i].id).text(data[i].first_name + ' ' + data[i].last_name));
                    }
                }
            });

            jQuery.ajax({
                url: "{{route("social-worker.index")}}",
                type: "get",
                success: function (result) {
                    const {data} = result;
                    $('#case_manager').empty();
                    var $dropdown = $("#case_manager");
                    $dropdown.append($("<option />").val('').text('--Select--'));
                    for (let i = 0; i < data.length; i++) {
                        $dropdown.append($("<option />").val(data[i].id).text(data[i].first_name + ' ' + data[i].last_name));
                    }
                }
            });
            // primary-physician-drop-down
        }

        get_api_data();

        function get_physician() {
            jQuery.ajax({
                url: "/api/physician",
                type: "get",
                success: function (result) {
                    const {data} = result;
                    $('.primary-physician-drop-down, .referring-physician-drop-down, .attending-drop-down').empty();
                    var $dropdown = $(".primary-physician-drop-down, .referring-physician-drop-down, .attending-drop-down");
                    $dropdown.append($("<option />").val('').text('--Select--'));
                    for (let i = 0; i < data.length; i++) {
                        $dropdown.append($("<option />").val(data[i].id).text(data[i].first_name + ' ' + data[i].last_name));
                    }
                }
            });
        }

        function get_pharmacy() {
            jQuery.ajax({
                url: "/api/pharmacy",
                type: "get",
                success: function (result) {
                    const {data} = result;
                    console.log(data)
                    $('.pharmacy-drop-down').empty();
                    var $dropdown = $(".pharmacy-drop-down");
                    $dropdown.append($("<option />").val('').text('--Select--'));
                    for (let i = 0; i < data.length; i++) {
                        $dropdown.append($("<option />").val(data[i].id).text(data[i].name));
                    }
                }
            });
        }

        get_pharmacy();
        get_physician();

        jQuery('#p_h_address_line_1').keyup(function () {

            jQuery('#p_h_results').fadeIn();
            let xmlhttp = new XMLHttpRequest();
            let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#p_h_address_line_1').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
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
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    let myArr = JSON.parse(this.responseText);
                    p_s_address_lockup(myArr.features);
                }
            };
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        });

        jQuery(document).on('click', '.p_h_address', function () {
            jQuery('#p_h_address_line_1').val(jQuery(this).data('addressline1'));
            jQuery('#p_h_country').val(jQuery(this).data('country'));
            jQuery('#p_h_county').val(jQuery(this).data('county'));
            jQuery('#p_h_city').val(jQuery(this).data('city'));
            jQuery('#p_h_state').val(jQuery(this).data('state'));
            jQuery('#p_h_lat').val(jQuery(this).data('lat'));
            jQuery('#p_h_lon').val(jQuery(this).data('lon'));
            jQuery('#p_h_zip').val(jQuery(this).data('postcode'));
            jQuery('#p_h_results').fadeOut();
            // console.log(jQuery(this).data('lat'), jQuery(this).data('lang'), jQuery(this).data('address'))
        });

        jQuery(document).on('click', '.p_s_address', function () {
            jQuery('#p_s_address_line_1').val(jQuery(this).data('addressline1'));
            jQuery('#p_s_country').val(jQuery(this).data('country'));
            jQuery('#p_s_county').val(jQuery(this).data('county'));
            jQuery('#p_s_city').val(jQuery(this).data('city'));
            jQuery('#p_s_state').val(jQuery(this).data('state'));
            jQuery('#p_s_lat').val(jQuery(this).data('lat'));
            jQuery('#p_s_lon').val(jQuery(this).data('lon'));
            jQuery('#p_s_zip').val(jQuery(this).data('postcode'));
            jQuery('#p_s_results').fadeOut();
            // console.log(jQuery(this).data('lat'), jQuery(this).data('lang'), jQuery(this).data('address'))
        });

        function p_h_address_lockup(arr) {
            let out = "";
            let i;

            if (arr.length > 0) {
                for (i = 0; i < arr.length; i++) {
                    out += "<div class='p_h_address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='" + arr[i].properties.address_line1 + "' data-postcode='" + arr[i].properties.postcode + "' data-addressLine2='" + arr[i].properties.address_line2 + "' data-county='" + arr[i].properties.county + "' data-city='" + arr[i].properties.city + "' data-country='" + arr[i].properties.country + "'  data-lat='" + arr[i].properties.lat + "' data-lon='" + arr[i].properties.lon + "' data-state='" + arr[i].properties.state + "'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('p_h_results').innerHTML = out;
            } else {
                document.getElementById('p_h_results').innerHTML = "Sorry, no results...";
            }
        }

        function p_s_address_lockup(arr) {
            let out = "";
            let i;

            if (arr.length > 0) {
                for (i = 0; i < arr.length; i++) {
                    out += "<div class='p_s_address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='" + arr[i].properties.address_line1 + "' data-addressLine2='" + arr[i].properties.address_line2 + "' data-county='" + arr[i].properties.county + "' data-city='" + arr[i].properties.city + "' data-country='" + arr[i].properties.country + "'  data-lat='" + arr[i].properties.lat + "' data-lon='" + arr[i].properties.lon + "' data-postcode='" + arr[i].properties.postcode + "' data-state='" + arr[i].properties.state + "'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('p_s_results').innerHTML = out;
            } else {
                document.getElementById('p_s_results').innerHTML = "Sorry, no results...";
            }
        }

        // Same as home address
        jQuery('#same_home_address').click(function () {
            if (jQuery(this).is(':checked')) {
                jQuery('#p_s_address_line_1').val(jQuery('#p_h_address_line_1').val());
                jQuery('#p_s_address_line_2').val(jQuery('#p_h_address_line_2').val());
                jQuery('#p_s_country').val(jQuery('#p_h_country').val());
                jQuery('#p_s_county').val(jQuery('#p_h_county').val());
                jQuery('#p_s_city').val(jQuery('#p_h_city').val());
                jQuery('#p_s_state').val(jQuery('#p_h_state').val());
                jQuery('#p_s_lat').val(jQuery('#p_h_lat').val());
                jQuery('#p_s_zip').val(jQuery('#p_h_zip').val());
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

        // jQuery('#insurance_medicaid_member_id').on('input', function () {
        //     if ($(this).val()) {
        //         $("#insurance_medicare_member_id_check, #insurance_nic_member_id_check").prop("disabled", true);
        //     } else {
        //         $("#insurance_medicare_member_id_check, #insurance_nic_member_id_check").prop("disabled", false);
        //     }
        // });
        // jQuery('#insurance_medicare_member_id_check').on('input', function () {
        //     if ($(this).val()) {
        //         $("#insurance_medicaid_member_id, #insurance_nic_member_id_check").prop("disabled", true);
        //     } else {
        //         $("#insurance_medicaid_member_id, #insurance_nic_member_id_check").prop("disabled", false);
        //     }
        // });
        // jQuery('#insurance_nic_member_id_check').on('input', function () {
        //     if ($(this).val()) {
        //         $("#insurance_medicaid_member_id, #insurance_medicare_member_id_check").prop("disabled", true);
        //     } else {
        //         $("#insurance_medicaid_member_id, #insurance_medicare_member_id_check").prop("disabled", false);
        //     }
        // });

        // Save physician from modal
        jQuery(document).on('submit', '#physicianForm', function (e) {
            e.preventDefault();
            let validator = jQuery('#physicianForm').validate({
                rules: {
                    physician_first_name: "required",
                    physician_last_name: "required",
                    credentials: "required",
                    speciality: "required",
                    npi_number: "required",
                    address_line_1: "required",
                    city: "required",
                    state: "required",
                    zip: "required",
                    primary_phone: "required",
                }
            });

            if (validator.valid()) {
                jQuery('.loader_wrap').fadeIn();
                jQuery.ajax({
                    // data: $('#employeeForm').serialize(),
                    url: "/api/physician",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        $('#physicianForm').trigger("reset");
                        jQuery('.close-modal').trigger('click');
                        jQuery('.loader_wrap').fadeOut();
                        get_physician();
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            }
        });

        // Save pharmacy from modal
        jQuery(document).on('submit', '#pharmacyForm', function (e) {
            e.preventDefault();
            let validator = jQuery('#pharmacyForm').validate({
                rules: {
                    pharmacy_name: "required",
                    pharmacy_reference_code: "required",
                    pharmacy_address: "required",
                    pharmacy_telephone: "required",
                    pharmacy_fax: "required",
                }
            });

            if (validator.valid()) {
                jQuery('.loader_wrap').fadeIn();
                jQuery.ajax({
                    url: "/api/pharmacy",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        $('#pharmacyForm').trigger("reset");
                        jQuery('.close-modal').trigger('click');
                        jQuery('.loader_wrap').fadeOut();
                        get_pharmacy();
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            }
        });

        // Save functionality of demographics
        jQuery(document).on('submit', '#patientDemographicsForm', function (e) {
            e.preventDefault();

            let validator = jQuery('#patientDemographicsForm').validate({
                rules: {
                    first_name: "required",
                    last_name: "required",
                    gender: "required",
                    referral_date: "required",
                    marital_status: "required",
                    date_of_birth: "required",
                    patient_mr_number: "required",
                    insurance_type: "required",
                    p_h_address_line_1: "required",
                    p_h_zip: "required",
                    p_h_country: "required",
                    p_h_state: "required",
                    p_h_phone: "required",
                    p_h_alternate_phone: "required",
                    patient_language_spoken: "required",
                    use_of_interpreter: "required",
                    race_ethnicity: "required",
                    clinical_manager: "required",
                    case_manager: "required",
                    oasis_assigned_manager: "required",
                    pt_approved: "required",
                    ot_approved: "required",
                    st_approved: "required",
                    p_s_address_line_1: "required",
                    p_s_zip: "required",
                    p_s_country: "required",
                    p_s_state: "required",
                    p_s_phone: "required",
                    p_s_alternate_phone: "required",
                    patient_admission_history: "required",
                    services_requested: "required",
                }
            });

            if (validator.valid()) {
                jQuery('.loader_wrap').fadeIn();
                jQuery.ajax({
                    url: "{{route('patient-demographic.store')}}",
                    method: 'POST',
                    data: new FormData(this),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (res) {
                        jQuery('.close-modal').trigger('click');
                        jQuery('.loader_wrap').fadeOut();
                        jQuery('#patient_id').val(res.data.id);
                        jQuery('.demographics').attr("disabled", true);
                        openPage(event, 'physician');
                        jQuery('.physician').addClass('active');
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            }
        });
        jQuery(document).on('submit', '#patientPhysicianForm', function (e) {
            e.preventDefault();

            let validator = jQuery('#patientPhysicianForm').validate({
                rules: {
                    primary_physician: "required",
                }
            });
            let patient_id = jQuery('#patient_id').val();

            if (validator.valid()) {
                jQuery('.loader_wrap').fadeIn();
                let data = new FormData(this);
                data.append("patient_id", patient_id);
                jQuery.ajax({
                    url: "{{route('patient-physician.store')}}",
                    method: 'POST',
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        jQuery('.close-modal').trigger('click');
                        jQuery('.loader_wrap').fadeOut();
                        jQuery('.physician').attr("disabled", true);
                        openPage(event, 'patient_diagnosis');
                        jQuery('.patient_diagnosis').addClass('active');
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            }
        });
        jQuery(document).on('submit', '#patientDiagnosisForm', function (e) {
            e.preventDefault();
            let patient_id = jQuery('#patient_id').val();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("patient_id", patient_id);
            jQuery.ajax({
                url: "{{route('patient-diagnosis.store')}}",
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    jQuery('.close-modal').trigger('click');
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.physician').attr("disabled", true);
                    openPage(event, 'pharmacy_form');
                    jQuery('.pharmacy_form').addClass('active');
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });
        jQuery(document).on('submit', '#patientPharmacyForm', function (e) {
            e.preventDefault();
            let patient_id = jQuery('#patient_id').val();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("patient_id", patient_id);
            jQuery.ajax({
                url: "{{route('patient-pharmacy.store')}}",
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    jQuery('.close-modal').trigger('click');
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.pharmacy').attr("disabled", true);
                    openPage(event, 'advance_directive');
                    jQuery('.advance_directive').addClass('active');
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });
        jQuery(document).on('submit', '#advanceDirectiveForm', function (e) {
            e.preventDefault();
            let patient_id = jQuery('#patient_id').val();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("patient_id", patient_id);
            jQuery.ajax({
                url: "{{route('patient-advance-directive.store')}}",
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    jQuery('.close-modal').trigger('click');
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.advance_directive').attr("disabled", true);
                    openPage(event, 'emergency');
                    jQuery('.emergency').addClass('active');
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
        });
        jQuery(document).on('submit', '#patientEmergencyPreparednessForm', function (e) {
            e.preventDefault();
            let validator = jQuery('#patientEmergencyPreparednessForm').validate({
                rules: {
                    emergency_first_name: "required",
                    emergency_relationship_patient: "required",
                    emergency_patient_address: "required",
                    emergency_patient_city: "required",
                    emergency_patient_state: "required",
                    emergency_patient_zip: "required",
                    emergency_patient_phone: "required",
                }
            });
            let patient_id = jQuery('#patient_id').val();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("patient_id", patient_id);
            if (validator.valid()) {
                jQuery.ajax({
                    url: "{{route('patient-emergency-preparedness.store')}}",
                    method: 'POST',
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        jQuery('.close-modal').trigger('click');
                        jQuery('.loader_wrap').fadeOut();
                        jQuery('.emergency').attr("disabled", true);
                        openPage(event, 'episode');
                        jQuery('.episode').addClass('active');
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            }
        });
        jQuery(document).on('submit', '#patientEpisodeForm', function (e) {
            e.preventDefault();
            let validator = jQuery('#patientEpisodeForm').validate({
                rules: {
                    episode_timing: "required",
                    episode_timing_start_care_date: "required",
                    episode_timing_start_date: "required",
                }
            });
            let patient_id = jQuery('#patient_id').val();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("patient_id", patient_id);
            if (validator.valid()) {
                jQuery.ajax({
                    url: "{{route('patient-episode.store')}}",
                    method: 'POST',
                    data: data,
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        jQuery('.close-modal').trigger('click');
                        jQuery('.loader_wrap').fadeOut();
                        jQuery('.episode').attr("disabled", true);
                        openPage(event, 'insurance');
                        jQuery('.insurance').addClass('active');
                    },
                    error: function (data) {
                        let errors = data.responseJSON;
                        for (const key of Object.keys(errors.errors)) {
                            let input = $('#' + key);
                            input.addClass('error');
                            input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                        }
                        jQuery('.loader_wrap').fadeOut();
                    }
                });
            }
        });
        jQuery(document).on('submit', '#patientInsuranceForm', function (e) {
            e.preventDefault();
            let patient_id = jQuery('#patient_id').val();
            jQuery('.loader_wrap').fadeIn();
            let data = new FormData(this);
            data.append("patient_id", patient_id);
            jQuery.ajax({
                url: "{{route('patient-insurance.store')}}",
                method: 'POST',
                data: data,
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    jQuery('.close-modal').trigger('click');
                    jQuery('.loader_wrap').fadeOut();
                    jQuery('.insurance').attr("disabled", true);
                    if(data.status == 500){
                        toastr.error(data.message)
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 300;
                        toastr.options.closeEasing = 'swing';
                        toastr.options.progressBar = true;
                    }else{
                        toastr.success(data.message)
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 300;
                        toastr.options.closeEasing = 'swing';
                        toastr.options.progressBar = true;
                        setTimeout(function() {
                            window.location.href = '/dashboard';
                        }, 2000);
                    }
                },
                error: function (data) {
                    let errors = data.responseJSON;
                    for (const key of Object.keys(errors.errors)) {
                        let input = $('#' + key);
                        input.addClass('error');
                        input.parent().append('<label class="error">' + errors.errors[key][0] + '</label>');
                    }
                    jQuery('.loader_wrap').fadeOut();
                }
            });
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


        jQuery('#emergency_relationship_address').keyup(function () {
        jQuery('#p_h_results').fadeIn();
        let xmlhttp = new XMLHttpRequest();
        let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#emergency_relationship_address').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let myArr = JSON.parse(this.responseText);
                aa_address_lockup(myArr.features);
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
        });

        jQuery(document).on('click', '.aa_address', function () {
            jQuery('#emergency_relationship_address').val(jQuery(this).data('addressline1'));
            jQuery('#emergency_relationship_city').val(jQuery(this).data('city'));
            jQuery('#emergency_relationship_state').val(jQuery(this).data('state'));
            jQuery('#emergency_relationship_zip').val(jQuery(this).data('postcode'));
            jQuery('#aa_results').fadeOut();
        });

        function aa_address_lockup(arr) {
            let out = "";
            let i;

            if (arr.length > 0) {
                for (i = 0; i < arr.length; i++) {
                    out += "<div class='aa_address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='" + arr[i].properties.address_line1 + "' data-postcode='" + arr[i].properties.postcode + "' data-addressLine2='" + arr[i].properties.address_line2 + "' data-county='" + arr[i].properties.county + "' data-city='" + arr[i].properties.city + "' data-country='" + arr[i].properties.country + "'  data-lat='" + arr[i].properties.lat + "' data-lon='" + arr[i].properties.lon + "' data-state='" + arr[i].properties.state + "'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('aa_results').innerHTML = out;
            } else {
                document.getElementById('aa_results').innerHTML = "Sorry, no results...";
            }
        }

        jQuery('#emergency_patient_address').keyup(function () {
        jQuery('#pa_results').fadeIn();
        let xmlhttp = new XMLHttpRequest();
        let url = "https://api.geoapify.com/v1/geocode/autocomplete?text=" + jQuery('#emergency_patient_address').val() + "&apiKey=59b779c0242a424b9f13a8bbc50bf287";
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let myArr = JSON.parse(this.responseText);
                pa_address_lockup(myArr.features);
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
        });

        jQuery(document).on('click', '.pa_address', function () {
            jQuery('#emergency_patient_address').val(jQuery(this).data('addressline1'));
            jQuery('#emergency_patient_city').val(jQuery(this).data('city'));
            jQuery('#emergency_patient_state').val(jQuery(this).data('state'));
            jQuery('#emergency_patient_zip').val(jQuery(this).data('postcode'));
            jQuery('#pa_results').fadeOut();
        });

        function pa_address_lockup(arr) {
            let out = "";
            let i;

            if (arr.length > 0) {
                for (i = 0; i < arr.length; i++) {
                    out += "<div class='pa_address py-[10px] cursor-pointer bg-[#f5f5f5] px-[15px] mb-[10px]' data-addressLine1='" + arr[i].properties.address_line1 + "' data-postcode='" + arr[i].properties.postcode + "' data-addressLine2='" + arr[i].properties.address_line2 + "' data-county='" + arr[i].properties.county + "' data-city='" + arr[i].properties.city + "' data-country='" + arr[i].properties.country + "'  data-lat='" + arr[i].properties.lat + "' data-lon='" + arr[i].properties.lon + "' data-state='" + arr[i].properties.state + "'>" + arr[i].properties.formatted + "</div>";
                }
                document.getElementById('pa_results').innerHTML = out;
            } else {
                document.getElementById('pa_results').innerHTML = "Sorry, no results...";
            }
        }




    </script>
    @endsection

    @stack('scripts')
