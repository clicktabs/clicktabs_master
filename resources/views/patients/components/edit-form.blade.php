<div class="tab">
    <button type="button" class="tablinks demographics" id="defaultOpen" onclick="openPage(event, 'demographics')">
        Demographics
    </button>
    <button type="button" class="tablinks physician" onclick="openPage(event, 'physician')">Physician</button>
    <button type="button" class="tablinks patient_diagnosis" onclick="openPage(event, 'patient_diagnosis')">Clinical
        Diagnosis
    </button>
    <button type="button" class="tablinks pharmacy_form" onclick="openPage(event, 'pharmacy_form')">Pharmacy</button>
    <button type="button" class="tablinks advance_directive" onclick="openPage(event, 'advance_directive')">Advance
        Directives
    </button>
    <button type="button" class="tablinks emergency" onclick="openPage(event, 'emergency')">Emergency Preparedness
    </button>
    <button type="button" class="tablinks episode" onclick="openPage(event, 'episode')">Episode Timing</button>
    <button type="button" class="tablinks insurance" onclick="openPage(event, 'insurance')">Insurance</button>
</div>
<div class="card mb-2 tabcontent" id="demographics">
    <form class="patient_demographics_form" id="patientDemographicsForm" name="patientDemographicsForm" method="POST">
        @csrf
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 !text-white">Demographics</h2>
        </div>
        <div>
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
                    <div id="imagePreview" style="background-image: url('{{$patient->photo}}');">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body row">
            <div class="row">
                <div class="col-md-3">
                    <label for="last_name"><span class="text-green">(M0040)</span> Last Name: <span
                            class="text-red">*</span></label>
                    <input id="last_name" type="text" class="form-control s ou" name="last_name"
                           value="{{ $patient->last_name }}">
                </div>
                <div class="col-md-3">
                    <label for="first_name"><span class="text-green">(M0040)</span> First Name: <span
                            class="text-red">*</span></label>
                    <input id="first_name" type="text" class="form-control s ou" name="first_name"
                           value="{{ $patient->first_name }}">
                </div>
                <div class="col-md-3">
                    <label for="middle_name"><span class="text-green">(M0040)</span> MI:</label>
                    <input id="middle_name" type="text" class="form-control s ou" name="middle_name"
                           value="{{ $patient->middle_name }}">
                </div>
                <div class="col-md-3">
                    <label for="referral_date">
                        <span class="text-green">(M0104)</span>
                        Referral Date: <span class="text-red">*</span></label>
                    <input id="referral_date" type="date" class="form-control s ou" name="referral_date"
                           value="{{ $patient->referral_date }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="gender"><span class="text-green">(M0069)</span>Gender: <span class="text-red">*</span></label>
                    <select name="gender" id="gender" class="form-control s ou">
                        <option value="">Select</option>
                        <option {{ $patient->gender === 'male' ? 'selected' : '' }} value="male">Male</option>
                        <option {{ $patient->gender === 'female' ? 'selected' : '' }} value="female">Female</option>
                    </select>
                </div>
                <div class="col">
                    <label for="marital_status">Marital Status: </label>
                    <select name="marital_status" id="marital_status" class="form-control s ou">
                        <option value="">Select</option>
                        <option {{ $patient->marital_status === 'married' ? 'selected' : '' }} value="married">Married</option>
                        <option {{ $patient->marital_status === 'single' ? 'selected' : '' }} value="single">Single</option>
                    </select>
                </div>

                <div class="col">
                    <label for="date_of_birth"><span class="text-green">(M0066)</span>Date of Birth: <span
                            class="text-red">*</span></label>
                    <input id="date_of_birth" type="date" class="form-control s ou" name="date_of_birth"
                           value="{{ $patient->date_of_birth }}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label for="s_s_number"><span class="text-green">(M0064)</span> Social Security Number: <span
                            class="text-red">*</span></label>
                    <input id="s_s_number" type="text" class="form-control s ou" name="s_s_number"
                           value="{{ $patient->social_security_no }}">
                </div>
                <div class="col">
                    <label for="insurance_type">Insurance Type: <span class="text-red">*</span></label>
                    <select name="insurance_type" class="insurance_type form-control" id="insurance_type">
                        <option value="">Select Insurance Type</option>
                        @if($insurance_type_sub_addons)
                            @foreach($insurance_type_sub_addons as $insurance)
                                <option value="{{ $insurance->name }}" {{ $patient->insurance_type == $insurance->name ? 'selected' : '' }}>
                                    {{ $insurance->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="col hidden">
                    <label for="patient_admission_status">Status: <span class="text-red">*</span></label>
                    <select name="patient_admission_status" id="patient_admission_status" class="form-control s ou">
                        <option value="">Select</option>
                        <option value="admit">Admit</option>
                        <option value="non-admit">Non-Admit</option>
                        <option value="pending">Pending</option>
                        <option value="discharge">Discharge</option>
                    </select>
                </div>
            </div>
            <hr class="hr-st"/>
            <div class="row">
                <div class="col">
                    <div class="col-md-12">
                        <label>Patient Home Address:</label>
                        <hr class="hr-st"/>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="p_h_address_line_1">Address Line 1: </label>
                            </div>
                            <div class="col-md-8 relative">
                                <input id="p_h_address_line_1" type="text" class="form-control s ou"
                                    name="p_h_address_line_1" value="{{ $patient->address->address_line_1 }}">
                                <input id="p_h_lat" type="hidden" name="p_h_lat" value="{{ $patient->address->lat }}" />
                                <input id="p_h_lon" type="hidden" name="p_h_lon" value="{{ $patient->address->lon }}" />

                                <div id="p_h_results" class="absolute top-[65px] bg-white"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="p_h_address_line_2">Address Line 2: </label>
                            </div>
                            <div class="col-md-8">
                                <input id="p_h_address_line_2" type="text" class="form-control s ou"
                                    name="p_h_address_line_2" value="{{ $patient->address->address_line_2 }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="p_h_zip">
                                    <span class="text-green">(M0060)</span>
                                    Zip:</label>
                                <input id="p_h_zip" type="text" placeholder="Enter Zipcode" class="form-control s ou" name="p_h_zip" value="{{ $patient->address->zip }}">
                            </div>
                            <div class="form-group col">
                                <label for="p_h_country">Country: </label>
                                <input type="text" name="p_h_country" class="form-control s ou" id="p_h_country"
                                    placeholder="Enter country" value="{{ $patient->address->country }}"/>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col">
                                <label for="p_h_city">City: </label>
                                <input type="text" name="p_h_city" class="form-control s ou" id="p_h_city"
                                    placeholder="Enter city" value="{{ $patient->address->city }}"/>
                            </div>
                            <div class="form-group col">
                                <label for="p_h_state">
                                    <span class="text-green">(M0050)</span>
                                    State: </label>
                                <input type="text" name="p_h_state" id="p_h_state" class="form-control s ou"
                                    placeholder="Enter state" value="{{ $patient->address->state }}"/>
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="form-group col">
                                <label for="p_h_phone">Phone:</label>
                                <input id="p_h_phone" type="text" placeholder="Enter Phone" class="form-control s ou"
                                    name="p_h_phone" value="{{ $patient->address->phone }}">
                            </div>
                            <div class="form-group col">
                                <label for="p_h_alternate_phone">Alternate Phone: </label>
                                <input id="p_h_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                                    class="form-control s ou" name="p_h_alternate_phone"
                                    value="{{ $patient->address->alternate_phone }}">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Right Side --}}
                <div class="col">
                    <div class="col-md-12">
                        <div class="flex items-center flex-wrap justify-between">
                            <label>Patient Service Address: <span class="text-red">*</span></label>
                            <label>Same as Home Address <input type="checkbox" id="same_home_address"/> </label>
                        </div>
                        <hr class="hr-st"/>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="p_s_address_line_1">Address Line 1: <span class="text-red">*</span></label>
                            </div>
                            <div class="col-md-8 relative">
                                <input id="p_s_address_line_1" type="text" class="form-control s ou"
                                    name="p_s_address_line_1" value="{{ $pat->service->address_line_1 }}">
                                <input id="p_s_lat" type="hidden" name="p_s_lat"/>
                                <input id="p_s_lon" type="hidden" name="p_s_lon"/>

                                <div id="p_s_results" class="absolute top-[65px] bg-white"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="p_s_address_line_2">Address Line 2: <span class="text-red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input id="p_s_address_line_2" type="text" class="form-control s ou"
                                    name="p_s_address_line_2" value="{{ $pat->service->address_line_2 }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="p_s_zip">Zip: <span class="text-red">*</span></label>
                                <input id="p_s_zip" type="text" placeholder="Enter Zipcode" class="form-control s ou"
                                    name="p_s_zip" value="{{ $pat->service->zip }}">
                            </div>
                            <div class="form-group col">
                                <div class="form-group">
                                    <label for="p_s_country">Country: <span class="text-red">*</span></label>
                                    <input id="p_s_country" type="text" placeholder="Enter Country"
                                        class="form-control s ou" name="p_s_country" value="{{ $pat->service->county }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col">
                                <label for="p_s_city">City: </label>
                                <input type="text" name="p_s_city" class="form-control s ou" id="p_s_city" value="{{ $pat->service->city }}"
                                    placeholder="Enter city"/>
                            </div>
                            <div class="form-group col">
                                <div class="form-group">
                                    <label for="p_s_state">State: <span class="text-red">*</span></label>
                                    <input id="p_s_state" type="text" placeholder="Enter State" class="form-control s ou"
                                        name="p_s_state" value="{{ $pat->service->state }}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="form-group col">
                                <label for="p_s_phone">Phone: <span class="text-red">*</span></label>
                                <input id="p_s_phone" type="text" placeholder="Enter Phone number" class="form-control s ou"
                                    name="p_s_phone" value="{{ $pat->service->phone }}">
                            </div>
                            <div class="form-group col">
                                <label for="p_s_alternate_phone">Alternate Phone: </label>
                                <input id="p_s_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                                    class="form-control s ou" name="p_s_alternate_phone"
                                    value="{{ $pat->service->alternate_phone }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-6 mt-4">
                    <div class="form-group">
                        <label for="patient_language_spoken">Patient Language Spoken: <span
                                class="text-red">*</span></label>
                        <select name="patient_language_spoken" id="patient_language_spoken"
                                class="form-control s ou language-drop-down">
                            <option value="">--- Select ---</option>
                            <option {{ $patient->address->patient_language_spoken === 'english' ? 'selected' : '' }} value="english">English</option>
                            <option {{ $patient->address->patient_language_spoken === 'spanish' ? 'selected' : '' }} value="spanish">Spanish</option>
                            <option {{ $patient->address->patient_language_spoken === 'french' ? 'selected' : '' }} value="french">French</option>
                            <option {{ $patient->address->patient_language_spoken === 'german' ? 'selected' : '' }} value="german">German</option>
                            <option {{ $patient->address->patient_language_spoken === 'chinese' ? 'selected' : '' }} value="chinese">Chinese</option>
                            <option {{ $patient->address->patient_language_spoken === 'filipino' ? 'selected' : '' }} value="filipino">Filipino</option>
                            <option {{ $patient->address->patient_language_spoken === 'arabic' ? 'selected' : '' }} value="arabic">Arabic</option>
                            <option {{ $patient->address->patient_language_spoken === 'korean' ? 'selected' : '' }} value="korean">Korean</option>
                            <option {{ $patient->address->patient_language_spoken === 'russian' ? 'selected' : '' }} value="russian">Russian</option>
                            <option {{ $patient->address->patient_language_spoken === 'somali' ? 'selected' : '' }} value="somali">Somali</option>
                            <option {{ $patient->address->patient_language_spoken === 'twi' ? 'selected' : '' }} value="twi">Twi</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 mt-4">
                    <div class="form-group">
                        <label class="mt-4 mr-3" for="use_of_interpreter">Use of Interpreter:</label>


                        <input type="radio" name="use_of_interpreter" value="1" {{$patient->address->use_of_interpreter == '1' ? 'checked' : ''}} id="use_of_interpreter_yes" class="form-control">
                        <label class="font-normal" for="use_of_interpreter_yes">Yes</label>

                        <input type="radio" name="use_of_interpreter" value="0" {{$patient->address->use_of_interpreter == '0' ? 'checked' : ''}} id="use_of_interpreter_no" class="form-control">
                        <label class="font-normal" for="use_of_interpreter_no">No</label>
                    </div>
                </div>

                <hr class="hr-st"/>

                <div class="col-md-12">
                    <div class="form-group">
                        @php
                             $array_ethnicity = $patient->ethincity ? json_decode($patient->ethincity->ethincity_info) : [];
                        @endphp

                        <div class="row">
                            <label for="race_ethnicity"><span class="text-green">(M0140)</span>Ethnicity <span class="text-red">*</span>(mark all that apply): </label>
                            <div class="col-sm-4">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="white">A. White</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="white" id="white" class="form-control" {{ in_array('white', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="black">B. Black or African American</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="black" id="black" class="form-control" {{ in_array('black', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="american_indian">C. American Indian or Alaska Native</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="american_indian"  id="american_indian" class="form-control" {{ in_array('american_indian', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="asian_indian">D. Asian Indian</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="asian_indian"  id="asian_indian" class="form-control" {{ in_array('asian_race_ethnicity_asian', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="chines">E. Chinese</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="chines"  id="chines" class="form-control" {{ in_array('chines', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="fillipino"> F. Filipino</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="fillipino"  id="fillipino" class="form-control" {{ in_array('fillipino', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="japanes">G. Japanese</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="japanes"  id="japanes" class="form-control" {{ in_array('japanes', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="korean">H. Korean</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="korean"  id="korean" class="form-control" {{ in_array('korean', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="vietnamese">I. Vietnamese</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="vietnamese" id="vietnamese" class="form-control" {{ in_array('vietnamese', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="other_asian">J. Other Asian</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="other_asian" id="other_asian" class="form-control" {{ in_array('other_asian', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="native_hawaiian">K. Native Hawaiian</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="native_hawaiian" id="native_hawaiian" class="form-control" {{ in_array('native_hawaiian', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="guamanian">L. Guamanian or Chamorro</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="guamanian" id="guamanian" class="form-control" {{ in_array('guamanian', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="samoan">M. Samoan</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="samoa" id="samoan" class="form-control" {{ in_array('samoan', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="other_pacific_island">N. Other Pacific Islander</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="other_pacific_island" id="other_pacific_island" class="form-control" {{ in_array('other_pacific_island', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="patient_unable_to_respond">X. Patient unable to respond</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="patient_unable_to_respond" id="patient_unable_to_respond" class="form-control" {{ in_array('patient_unable_to_respond', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="patient_declines">Y. Patient declines to respond</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="patient_declines" id="patient_declines" class="form-control" {{ in_array('patient_declines', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="none_of_the_above">Z. None of the above</label>
                                        <input type="checkbox" name="ethnicity_requested[]" value="none_of_the_above" id="none_of_the_above" class="form-control" {{ in_array('none_of_the_above', $array_ethnicity) ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr class="hr-st"/>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-md-12"><!---A1005. Ethnicity--->
                            <div class="form-group">
                                @php
                                    $array_race = $patient->extra_info ? json_decode($patient->extra_info->race_ethnicity) : [];
                                @endphp

                                <label for="race_ethnicity">
                                    <span class="text-green">(A1005)</span>
                                    Race <span class="text-red">*</span>(mark all that apply):
                                </label>

                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="needs_interpreter_american">American Indian/ Alaskan</label>
                                        <input type="checkbox" name="race_ethnicity[]" id="needs_interpreter_american" value="needs_interpreter_american" class="form-control" {{ in_array('needs_interpreter_american', $array_race) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="asian_race_ethnicity">Asian</label>
                                        <input type="checkbox" name="race_ethnicity[]" id="asian_race_ethnicity" value="asian_race_ethnicity" class="form-control" {{ in_array('asian_race_ethnicity', $array_race) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="needs_interpreter_black">Black or African American</label>
                                        <input type="checkbox" name="race_ethnicity[]" id="needs_interpreter_black" value="needs_interpreter_black" class="form-control" {{ in_array('needs_interpreter_black', $array_race) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="needs_interpreter_hispanic">Hispanic or Latino</label>
                                        <input type="checkbox" name="race_ethnicity[]" id="needs_interpreter_hispanic" value="needs_interpreter_hispanic" class="form-control" {{ in_array('needs_interpreter_hispanic', $array_race) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="needs_interpreter_native">Native Hawaiian or Pacific Islander</label>
                                        <input type="checkbox" name="race_ethnicity[]" id="needs_interpreter_native" value="needs_interpreter_native" class="form-control" {{ in_array('needs_interpreter_native', $array_race) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="needs_interpreter_white">White</label>
                                        <input type="checkbox" name="race_ethnicity[]" id="needs_interpreter_white" value="needs_interpreter_white" class="form-control" {{ in_array('needs_interpreter_white', $array_race) ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <label class="font-normal" for="needs_interpreter_unknown">Unknown</label>
                                        <input type="checkbox" name="race_ethnicity[]" id="needs_interpreter_unknown" value="needs_interpreter_unknown" class="form-control" {{ in_array('needs_interpreter_unknown', $array_race) ? 'checked' : '' }}>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="middle_name">Case Managers: </label>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="middle_name">Clinical Care Manager:a </label>
                                </div>
                                <div class="col">
                                    <select name="clinical_manager" id="clinical_manager" class="form-control s ou clinician-drop-down">
                                        <option value="">--- Select ---</option>
                                        <option value="M">clinical manager</option>
                                        <option value="F">clinical manager</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <span for="middle_name">Case Manager: </span>
                                </div>
                                <div class="col">
                                    <select name="case_manager" id="case_manager"
                                            class="form-control s ou case-manager-drop-down">
                                        <option value="">--- Select ---</option>
                                        <option value="M">case manager</option>
                                        <option value="F">case manager</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <span for="middle_name">OASIS Assigned to: </span>
                                </div>
                                <div class="col">
                                    <select name="oasis_assigned_manager" id="oasis_assigned_manager"
                                            class="form-control s ou oasis-assign-drop-down">
                                        <option value="">--- Select ---</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <span for="ot_approved">OT Approved by: </span>
                                </div>
                                <div class="col">
                                    <select name="ot_approved" id="ot_approved"
                                            class="form-control s ou ot_approved-drop-down">
                                        <option value="">--- Select ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <span for="pt_approved">PT Approved by: </span>
                                </div>
                                <div class="col">
                                    <select name="pt_approved" id="pt_approved"
                                            class="form-control s ou pt_approved-drop-down">
                                        <option value="">--- Select ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <span for="st_approved">ST Approved by: </span>
                                </div>
                                <div class="col">
                                    <select name="st_approved" id="st_approved"
                                            class="form-control s ou st_approved-drop-down">
                                        <option value="">--- Select ---</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="hr-st"/>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            @php
                                $array_pah = $patient->extra_info ? json_decode($patient->extra_info->source_of_admission) : [];
                            @endphp
                            <label for="middle_name">
                                <span class="text-green">(M1000)</span>
                                Patient History (Source of Admission): <span class="text-red">*</span></label>
                            <label for="middle_name"><i>From which of the following inpatient facilities was the patient
                                    discharged withing
                                    the past 14 days?</i> (Mark all that apply): </label>

                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="long_term_nursing_facility">Long-term nursing facility
                                        (NF)</label>
                                    <input type="checkbox" name="patient_admission_history[]"
                                        value="long_term_nursing_facility" id="long_term_nursing_facility" {{ in_array('long_term_nursing_facility', $array_pah) ? 'checked' : '' }}
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="skilled_nursing_facility">Skilled nursing facility
                                        (SNF/TCU)</label>
                                    <input type="checkbox" name="patient_admission_history[]"
                                        value="skilled_nursing_facility" id="skilled_nursing_facility" {{ in_array('skilled_nursing_facility', $array_pah) ? 'checked' : '' }}
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="short_stay_acute">Short-stay acute hospital
                                        (IPPS)</label>
                                    <input type="checkbox" name="patient_admission_history[]" value="short_stay_acute" {{ in_array('short_stay_acute', $array_pah) ? 'checked' : '' }}
                                        id="short_stay_acute" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="long_term_care">Long-term care hospital (LTCH)</label>
                                    <input type="checkbox" name="patient_admission_history[]" value="long_term_care" {{ in_array('long_term_care', $array_pah) ? 'checked' : '' }}
                                        id="long_term_care" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="inpatient_rehailitation">Inpatient rehabilitation
                                        hospital or unit (IRF)</label>
                                    <input type="checkbox" name="patient_admission_history[]"
                                        value="inpatient_rehailitation" id="inpatient_rehailitation" {{ in_array('inpatient_rehailitation', $array_pah) ? 'checked' : '' }}
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="phyciatric_hospital">Phychiatric hospital or
                                        unit</label>
                                    <input type="checkbox" name="patient_admission_history[]" value="phyciatric_hospital" {{ in_array('phyciatric_hospital', $array_pah) ? 'checked' : '' }}
                                        id="phyciatric_hospital" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label for="patient_admission_history_other">Other</label>
                                    <input type="text" name="patient_admission_history_other" value="patient_admission_history_other" {{ in_array('patient_admission_history_other', $array_pah) ? 'checked' : '' }}
                                        id="patient_admission_history_other" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label class="font-normal" for="patient_discharged">N/A Patient was not discharged from
                                        any inpatient facility</label>
                                    <input type="checkbox" name="patient_admission_history[]" value="patient_discharged" {{ in_array('patient_discharged', $array_pah) ? 'checked' : '' }}
                                        id="patient_discharged" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="middle_name">Services Requested (Mark all that apply):</label>
                            @php
                                $array_sr = $patient->extra_info ? json_decode($patient->extra_info->services_requested) : [];
                            @endphp
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" value="hha" id="hha" {{ in_array('hha', $array_sr) ? 'checked' : '' }}
                                        class="form-control">
                                    <label class="font-normal" for="hha">HHA</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" value="sn" id="sn" {{ in_array('sn', $array_sr) ? 'checked' : '' }}
                                        class="form-control">
                                    <label class="font-normal" for="sn">SN</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" value="pt" id="pt" {{ in_array('pt', $array_sr) ? 'checked' : '' }}
                                        class="form-control">
                                    <label class="font-normal" for="pt">PT</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" id="ot" value="ot" {{ in_array('ot', $array_sr) ? 'checked' : '' }}
                                        class="form-control">
                                    <label class="font-normal" for="ot">OT</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" id="st" value="st" {{ in_array('st', $array_sr) ? 'checked' : '' }}
                                        class="form-control">
                                    <label class="font-normal" for="st">ST</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" value="msw" id="msw" {{ in_array('msw', $array_sr) ? 'checked' : '' }}
                                        class="form-control">
                                    <label class="font-normal" for="msw">MSW</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" value="no_ancillary_services" {{ in_array('no_ancillary_services', $array_sr) ? 'checked' : '' }}
                                        id="no_ancillary_services" class="form-control">
                                    <label class="font-normal" for="no_ancillary_services">No ancillary services needed at
                                        this time</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="services_requested[]" value="referral_completed" {{ in_array('referral_completed', $array_sr) ? 'checked' : '' }}
                                        id="referral_completed" class="form-control">
                                    <label class="font-normal" for="referral_completed">Referrals Completed</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-st"/>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        @php
                            $array_transpotation = $patient->transportation ? json_decode($patient->transportation->transportation) : [];
                        @endphp
                        <label for="episode_timing_start_date"><span class="text-green">(A1250) Transportation</span></label>
                        <div class="form-group">
                            <label for="middle_name">(Has lack of transportation kept you from medical appointments, Mark all that apply):</label>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="transportation[]"  id="medical_appointment" value="medical_appointment" {{ in_array('medical_appointment', $array_transpotation) ? 'checked' : '' }}
                                    class="form-control">
                                    <label class="font-normal" for="hha">Yes, it has kept me from medical appointments</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="transportation[]"  id="non_medical_appointment" value="non_medical_appointment" {{ in_array('non_medical_appointment', $array_transpotation) ? 'checked' : '' }}
                                    class="form-control">
                                    <label class="font-normal" for="hha">Yes, it has kept me from non-medical meetings</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="transportation[]"  id="lack_transportation" value="lack_transportation" {{ in_array('lack_transportation', $array_transpotation) ? 'checked' : '' }}
                                    class="form-control">
                                    <label class="font-normal" for="hha">No</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="transportation[]"  id="trans_unable_respond" value="trans_unable_respond" {{ in_array('trans_unable_respond', $array_transpotation) ? 'checked' : '' }}
                                    class="form-control">
                                    <label class="font-normal" for="hha">Patient unable to respond</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="checkbox" name="transportation[]"  id="trans_declines" value="trans_declines" {{ in_array('trans_declines', $array_transpotation) ? 'checked' : '' }}
                                    class="form-control">
                                    <label class="font-normal" for="hha">Patient declines to respond</label>
                                </div>
                            </div>
                        </div>
                 </div>
                </div>

            </div>




            </div>

            <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
        </div>

    </form>
</div>

<div class="card mb-2 tabcontent" id="physician">
    <form name="patientPhysicianForm" id="patientPhysicianForm">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 !text-white">Physician</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <label for="first_name">Primary Physician:</label>

                    <select name="primary_physician" id="primary_physician"
                            class="physicianSelector form-control s ou primary-physician-drop-down">
                            @foreach ($physicians as $physician)
                                <option value="{{$physician->id}}" {{($physician->id == $pat->extra_info->attending_physician)?'selected':''}}>{{$physician->first_name.' '.$physician->last_name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-7">
                    <button type="button" class="btn btn-block add_new_physician hd xu ye button-float-right">Add new
                        Physician
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="checkbox" name="attending_physician" value="1" id="attending_physician"
                           class="form-control">
                    <label class="font-normal" for="attending_physician">Attending Physician was contacted and agreed to
                        provide ongoing care (orders) for this patient.</label>
                </div>
            </div>
            @php
                $attendingPhysician = $physicians->where('id', $pat->extra_info->attending_physician)->first();
            @endphp
            <div class="mt-4">
                <div class="col">
                    <label for="physician_name">Physician Name:</label>
                    <span id="physician_name">{{$attendingPhysician->first_name.' '.$attendingPhysician->last_name}}</span>
                </div>
                <div class="col">
                    <label for="physician_address">Address:</label>
                    <span id="physician_address">{{$attendingPhysician->address_line_1}}</span>
                </div>
                <div class="col">
                    <label for="physician_telephone">Telephone:</label>
                    <span id="physician_telephone">{{$attendingPhysician->primary_phone}}</span>
                </div>
                <div class="col">
                    <label for="physician_fax">Fax:</label>
                    <span id="physician_fax">{{$attendingPhysician->fax}}</span>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-5">
                    <label for="first_name">Referring Physician:</label>
                    <select name="referring_physician"
                            class="referringSelector form-control s ou referring-physician-drop-down">
                        @foreach ($physicians as $physician)
                            <option value="{{$physician->id}}" {{($physician->id == $pat->extra_info->referring_physician_id)?'selected':''}}>{{$physician->first_name.' '.$physician->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                @php
                    $refeingPhysician = $physicians->where('id', $pat->extra_info->attending_physician)->first();
                @endphp
                <div class="mt-4">
                    <div class="col">
                        <label for="physician_name_alt">Physician Name:</label>
                        <span id="physician_name_alt">{{$refeingPhysician->first_name.' '.$refeingPhysician->last_name}}</span>
                    </div>
                    <div class="col">
                        <label for="physician_address">Address:</label>
                        <span id="physician_address_alt">{{$refeingPhysician->address_line_1}}</span>
                    </div>
                    <div class="col">
                        <label for="physician_telephone">Telephone:</label>
                        <span id="physician_telephone_alt">{{$refeingPhysician->primary_phone}}</span>
                    </div>
                    <div class="col">
                        <label for="physician_fax">Fax:</label>
                        <span id="physician_fax_alt">{{$refeingPhysician->fax}}</span>
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
                        <input type="checkbox" name="face_to_face_evaluation[]" value="na"
                               id="face_to_face_evaluation_na" class="form-control">
                        <label for="face_to_face_evaluation_na">NA</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="face_to_face_evaluation[]" value="date"
                               id="face_to_face_evaluation_date" class="form-control">
                        <label for="face_to_face_evaluation_date">Date of Face-to-Face Visit</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="face_to_face_evaluation[]"
                               value="face_to_face_completed" id="face_to_face_evaluation_completed"
                               class="form-control">
                        <label for="face_to_face_evaluation_completed">Face-to-Face to be completed within 30
                            days</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </form>
</div>

<form class="patientDiagnosisForm" name="patientDiagnosisForm" id="patientDiagnosisForm" method="post">
    @csrf
    <div class="card mb-2 tabcontent" id="patient_diagnosis">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 !text-white">Patient Diagnosis</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <label for="last_name"><span class="text-green">(M1021)</span> Primary Diagnosis:</label>
                <hr class="hr-st">

                <div class="row">
                    <div class="col">
                        <div class="row" id="icd_field">
                            <div class="col-md-8 form-group">
                                <label for="middle_name">ICD-10-CM Code: </label>
                                <input id="icd_name_search" type="text" class="form-control s ou" name="icd_name_search" value="{{ !empty($pDiagnosis->primary_diagnosis_code)?$pDiagnosis->primary_diagnosis_code:'' }}">
                            </div>
                            <div class="col mt-3">
                                <label for="middle_name"></label>

                                <svg onclick="checkIcdName()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <label for="ic_code_name">ICD-10-CM Code: </label>
                            <select name="ic_code_name" id="ic_code_name" class="form-control s ou icd-name-drop-down">
                                <option value="">--- Select ---</option>
                            </select>
                        </div>

                    </div>
                </div>


                <br>
                <br>
                <label for="last_name"><span class="text-green">(M1023)</span> Other Diagnoses:
                    <a class="add-button" onclick="addAnotherDiagnosis()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </a>
                </label>
                <hr class="hr-st">
                @if ($pDiagnosis && is_string($pDiagnosis->other_diagnosis_code))
                @php
                    $decodedCodes = json_decode($pDiagnosis->other_diagnosis_code);
                @endphp

                @if (is_array($decodedCodes) && !empty($decodedCodes))
                    <div class="row mt-4">
                        @foreach($decodedCodes as $diagnosisCode)
                            <div class="row other-diagnosis">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-8 form-group">
                                            <label for="other_diagnosis_code">ICD-10-CM Code: </label>
                                            <input type="text" id="other_diagnosis_code" class="form-control s ou other_diagnosis_code" name="other_diagnosis_code[]" value="{{ $diagnosisCode }}" />
                                        </div>
                                        <div class="col mt-3">
                                            <label for="middle_name"></label>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button check_another_icd_name" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ic_another_code">ICD-10-CM Code: </label>
                                        <select name="ic_another_code[]" id="ic_another_code" class="another_icd_code form-control s ou ic-code-drop-down">
                                            <option value="">--- Select ---</option>
                                            <!-- Add options dynamically if needed -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No other diagnosis codes available.</p>
                @endif
            @else
                <p>No data available.</p>
            @endif

                <div class="row mt-4" id="wrapper-other-diagnosis">
                    <div class="row other-diagnosis">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label for="other_diagnosis_code">ICD-10-CM Code: </label>
                                    <input type="text" id="other_diagnosis_code" class="form-control s ou other_diagnosis_code" name="other_diagnosis_code[]" />
                                </div>
                                <div class="col mt-3">
                                    <label for="middle_name"></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button check_another_icd_name" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ic_another_code">ICD-10-CM Code: </label>
                                <select name="ic_another_code[]" id="ic_another_code" class=" another_icd_code form-control s ou ic-code-drop-down">
                                    <option value="">--- Select ---</option>
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </div>
</form>

{{-- git token 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 --}}

<form class="patientEmergencyPreparednessForm" name="patientEmergencyPreparednessForm" id="patientEmergencyPreparednessForm" method="post">
    @csrf
    <div class="card mb-2 tabcontent" id="emergency">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Emergency Preparedness</h2>
        </div>
        <div class="row mt-2">
            <div class="col">
                <label for="middle_name">Emergency Contacts and or/ Next of Kin (if applicable) </label>
            </div>
            <div class="col hidden">
                <label for="emergency_patient_address">Same as patient address</label>
                <input type="checkbox" name="emergency_patient_address" id="emergency_patient_address" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="emergency_first_name">Name: <span class="text-red">*</span></label>
                <input id="emergency_first_name" type="text" class="form-control s ou" name="emergency_first_name" value="{{ $pat->emergencyContact->name }}">
            </div>
            <div class="col">
                <label for="emergency_relationship_patient">Relationship to patient</label>
                <input id="emergency_relationship_patient" type="text" class="form-control s ou"
                    name="emergency_relationship_patient" value="{{ $pat->emergencyContact->relationship_to_patient }}">
            </div>
            <div class="col">
                <label for="emergency_patient_address">Address:</label>
                <input id="emergency_patient_address" type="text" class="form-control s ou"
                    name="emergency_patient_address" value="{{ $pat->emergencyContact->address }}">
            </div>
        </div>

        <div class="row mt-2">
            <div class="form-group col">
                <label for="emergency_patient_city">City:</label>
                <input id="emergency_patient_city" type="text" placeholder="Enter City Name" class="form-control s ou"
                    name="emergency_patient_city" value="{{ $pat->emergencyContact->city }}">
            </div>
            <div class="form-group col">
                <label for="emergency_patient_state">State: </label>
                <input id="emergency_patient_state" type="text" placeholder="Enter State Name"
                    class="form-control s ou" name="emergency_patient_state"
                    value="{{ $pat->emergencyContact->state }}">
            </div>
            <div class="form-group col">
                <label for="emergency_patient_zip">Zip: </label>
                <input id="emergency_patient_zip" type="text" placeholder="Enter Zipcode" class="form-control s ou"
                    name="emergency_patient_zip" value="{{ $pat->emergencyContact->zip }}">
            </div>
        </div>

        <div class="row mt-2">
            <div class="form-group col-md-4">
                <label for="emergency_patient_phone">Phone:</label>
                <input id="emergency_patient_phone" type="text" placeholder="Enter Phone Number"
                    class="form-control s ou" name="emergency_patient_phone"
                    value="{{ $pat->emergencyContact->phone }}">
            </div>
            <div class="form-group col-md-4">
                <div class="form-group">
                    <label for="emergency_alternate_phone">Alternate Phone: </label>
                    <input id="emergency_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                        class="form-control s ou" name="emergency_alternate_phone"
                        value="{{ $pat->emergencyContact->alternate_phone }}">
                </div>
            </div>
        </div>

        <hr class="hr-st">

        <div class="row mt-3">
            <div class="col">
                <label for="emergency_alternate_address">Alternate Address:</label>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="emergency_alternate_first_name">Name: <span class="text-red">*</span></label>
                <input id="emergency_alternate_first_name" type="text" class="form-control s ou"
                       name="emergency_alternate_first_name" value="{{ $pat->emergency->name }}">
            </div>
            <div class="col">
                <label for="emergency_relationship_to_patient">Relationship to patient</label>
                <input id="emergency_relationship_to_patient" type="text" class="form-control s ou"
                       name="emergency_relationship_to_patient" value="{{ $pat->emergency->relationship_to_patient }}">
            </div>
            <div class="col">
                <label for="emergency_relationship_address">Address:</label>
                <input id="emergency_relationship_address" type="text" class="form-control s ou"
                       name="emergency_relationship_address" value="{{ $pat->emergency->address }}">
            </div>
        </div>

        <div class="row mt-2">
            <div class="form-group col">
                <label for="emergency_relationship_city">City:</label>
                <input id="emergency_relationship_city" type="text" placeholder="Enter City Name"
                       class="form-control s ou" name="emergency_relationship_city"
                       value="{{ $pat->emergency->city }}">
            </div>
            <div class="form-group col">
                <div class="form-group">
                    <label for="emergency_relationship_state">State: </label>
                    <input id="emergency_relationship_state" type="text" placeholder="Enter State Name"
                           class="form-control s ou" name="emergency_relationship_state"
                           value="{{ $pat->emergency->state }}">
                </div>
            </div>
            <div class="form-group col">
                <div class="form-group">
                    <label for="emergency_relationship_zip">Zip: </label>
                    <input id="emergency_relationship_zip" type="text" placeholder="Enter Zipcode"
                           class="form-control s ou" name="emergency_relationship_zip"
                           value="{{ $pat->emergency->zip }}">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="form-group col-md-4">
                <label for="emergency_relationship_phone">Phone:</label>
                <input id="emergency_relationship_phone" type="text" placeholder="Enter Phone Number"
                       class="form-control s ou" name="emergency_relationship_phone"
                       value="{{ $pat->emergency->phone }}">
            </div>
            <div class="form-group col-md-4">
                <div class="form-group">
                    <label for="emergency_relationship_alternate_phone">Alternate Phone: </label>
                    <input id="emergency_relationship_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                           class="form-control s ou" name="emergency_relationship_alternate_phone"
                           value="{{ $pat->emergency->alternate_phone }}">
                </div>
            </div>
        </div>

        <hr class="hr-st">
        @php
        $emergencyPreparednessArray = json_decode($pat->extra_info->emergency_preparedness, true);
        @endphp

        <div class="row mt-3">
            <div class="col">
                <label for="middle_name"><span>Emergency Preparedness<span class="text-red">*</span>:</span></label>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <span for="emergency_preparedness">1. Life-threaten and requires ongoing medical treatment (i.e., oxygen dependent). A backup oxygen tank should be requested from supplier. Proceed to hospital (with supplies) if not able to manage your care.</span>
                    <input type="checkbox" name="emergency_preparedness[]" value="emergency_preparedness" id="emergency_preparedness"
                        class="form-control" {{ in_array('emergency_preparedness', $emergencyPreparednessArray) ? 'checked' : '' }}>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <span for="emergency_life_threatening">2. Not Life-threatening but would suffer severe adverse effects from interruption of services (i.e., daily insulin, IV medications, Sterile wound care of a wound with a large amount of drainage).</span>
                    <input type="checkbox" name="emergency_preparedness[]" value="emergency_life_threatening" id="emergency_life_threatening"
                        class="form-control" {{ in_array('emergency_life_threatening', $emergencyPreparednessArray) ? 'checked' : '' }}>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <span for="emergency_proponed_24_hours">3. Visits could be postponed 24-48 hours without adverse effect (i.e., new insulin-dependent diabetic able to self-inject, sterile wound care with a minimal amount to no drainage).</span>
                    <input type="checkbox" name="emergency_preparedness[]" value="emergency_proponed_24_hours" id="emergency_proponed_24_hours"
                        class="form-control" {{ in_array('emergency_proponed_24_hours', $emergencyPreparednessArray) ? 'checked' : '' }}>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <span for="emergency_proponed_72_hours">4. Visit could postpone 72-96 hours without adverse effects (i.e., post-op with no open wound, anticipated discharge within the next 10-14 days, routine catheter changes).</span>
                    <input type="checkbox" name="emergency_preparedness[]" value="emergency_proponed_72_hours" id="emergency_proponed_72_hours"
                        class="form-control" {{ in_array('emergency_proponed_72_hours', $emergencyPreparednessArray) ? 'checked' : '' }}>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <span for="emergency_transportation">Has transportation & assistance of family </span>
                    <input type="checkbox" name="emergency_preparedness[]" value="emergency_transportation" id="emergency_transportation"
                        class="form-control" {{ in_array('emergency_transportation', $emergencyPreparednessArray) ? 'checked' : '' }}>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <span for="emergency_neighbor">Neighbor.</span>
                    <input type="checkbox" name="emergency_preparedness[]" value="emergency_neighbor" id="emergency_neighbor" class="form-control"
                        {{ in_array('emergency_neighbor', $emergencyPreparednessArray) ? 'checked' : '' }}>
                </div>
            </div>
            <div class="row mt-2 mb-5">
                <div class="col">
                    <span for="emergency_caregiver">Caregiver.</span>
                    <input type="checkbox" name="emergency_preparedness[]" value="emergency_caregiver" id="emergency_caregiver" class="form-control"
                        {{ in_array('emergency_caregiver', $emergencyPreparednessArray) ? 'checked' : '' }}>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col">
                <label>Coordination of Care with other agencies: </label>
                <label>Identify other agencies or services involved in care of patient:</label>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label>Agency / Services</label>
                </div>
                <div class="col">
                    <label>Name of Agency</label>
                </div>
                <div class="col">
                    <label>Phone Number</label>
                </div>
                <div class="col">
                    <label>Contact Person</label>
                </div>
            </div>
            @php
            $coordinationOfCare = json_decode($pat->extra_info->coordination_of_care, true);
        @endphp

        <div class="row mt-3">
            <div class="col">
                <label>Dialysis:</label>
            </div>
            <div class="col">
                <input id="emergency_dialysis" type="text" class="form-control s ou" name="coordination_of_care[dialysis][emergency_dialysis]" value="{{ $coordinationOfCare['\'dialysis\'']['\'emergency_dialysis\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_dialysis_1" type="text" class="form-control s ou" name="coordination_of_care[dialysis][emergency_dialysis_1]" value="{{ $coordinationOfCare['\'dialysis\'']['\'emergency_dialysis_1\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_dialysis_2" type="text" class="form-control s ou" name="coordination_of_care[dialysis][emergency_dialysis_2]" value="{{ $coordinationOfCare['\'dialysis\'']['\'emergency_dialysis_2\''] ?? '' }}" />
            </div>
        </div>

        <!-- Medicare -->
        <div class="row mt-3">
            <div class="col">
                <label>Medicare:</label>
            </div>
            <div class="col">
                <input id="emergency_medicare_1" type="text" class="form-control s ou" name="coordination_of_care[medicare][emergency_medicare_1]" value="{{ $coordinationOfCare['\'medicare\'']['\'emergency_medicare_1\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_medicare_2" type="text" class="form-control s ou" name="coordination_of_care[medicare][emergency_medicare_2]" value="{{ $coordinationOfCare['\'medicare\'']['\'emergency_medicare_2\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_medicare_3" type="text" class="form-control s ou" name="coordination_of_care[medicare][emergency_medicare_3]" value="{{ $coordinationOfCare['\'medicare\'']['\'emergency_medicare_3\''] ?? '' }}" />
            </div>
        </div>

        <!-- Medicaid Waiver -->
        <div class="row mt-3">
            <div class="col">
                <label>Medicaid Waiver:</label>
            </div>
            <div class="col">
                <input id="emergency_medicaid" type="text" class="form-control s ou" name="coordination_of_care[medicaid_waiver][emergency_medicaid]" value="{{ $coordinationOfCare['\'medicaid_waiver\'']['\'emergency_medicaid\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_medicaid_1" type="text" class="form-control s ou" name="coordination_of_care[medicaid_waiver][emergency_medicaid_1]" value="{{ $coordinationOfCare['\'medicaid_waiver\'']['\'emergency_medicaid_1\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_medicaid_2" type="text" class="form-control s ou" name="coordination_of_care[medicaid_waiver][emergency_medicaid_2]" value="{{ $coordinationOfCare['\'medicaid_waiver\'']['\'emergency_medicaid_2\''] ?? '' }}" />
            </div>
        </div>

        <!-- Out-Patient Rehab -->
        <div class="row mt-3">
            <div class="col">
                <label>Out-Patient Rehab:</label>
            </div>
            <div class="col">
                <input id="emergency_patient_rehab" type="text" class="form-control s ou" name="coordination_of_care[out_patient_rehab][emergency_patient_rehab]" value="{{ $coordinationOfCare['\'out_patient_rehab\'']['\'emergency_patient_rehab\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_patient_rehab_1" type="text" class="form-control s ou" name="coordination_of_care[out_patient_rehab][emergency_patient_rehab_1]" value="{{ $coordinationOfCare['\'out_patient_rehab\'']['\'emergency_patient_rehab_1\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_patient_rehab_2" type="text" class="form-control s ou" name="coordination_of_care[out_patient_rehab][emergency_patient_rehab_2]" value="{{ $coordinationOfCare['\'out_patient_rehab\'']['\'emergency_patient_rehab_2\''] ?? '' }}" />
            </div>
        </div>

        <!-- Wound Care Clinic -->
        <div class="row mt-3">
            <div class="col">
                <label>Wound Care Clinic:</label>
            </div>
            <div class="col">
                <input id="emergency_wound_care" type="text" class="form-control s ou" name="coordination_of_care[wound_care_clinic][emergency_wound_care]" value="{{ $coordinationOfCare['\'wound_care_clinic\'']['\'emergency_wound_care\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_wound_care_1" type="text" class="form-control s ou" name="coordination_of_care[wound_care_clinic][emergency_wound_care_1]" value="{{ $coordinationOfCare['\'wound_care_clinic\'']['\'emergency_wound_care_1\''] ?? '' }}" />
            </div>
            <div class="col">
                <input id="emergency_wound_care_2" type="text" class="form-control s ou" name="coordination_of_care[wound_care_clinic][emergency_wound_care_2]" value="{{ $coordinationOfCare['\'wound_care_clinic\'']['\'emergency_wound_care_2\''] ?? '' }}" />
            </div>
        </div>

        </div>

        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </div>
</form>

<form class="patientInsuranceForm" name="patientInsuranceForm"
      id="patientInsuranceForm" method="post">
    @csrf
    <div class="card mb-2 tabcontent" id="insurance">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Insurance:</h2>
        </div>
        <div class="row mt-3">
            <label for="gender">Payors: </label>
            <hr class="hr-st">

            <div class="row mt-1">
                <div class="col-md-2">
                    <label for="primary_payor">Primary Payor: </label>
                </div>
                <div class="col-md-5">
                    <select name="primary_payor" id="primary_payor" class="form-control s ou primary-payor-drop-down">
                        <option value="">--- Select ---</option>
                        @if($payors_sub_addons)
                            @foreach($payors_sub_addons as $payor)
                                <option value="{{$payor->name}}" {{ ($pat->insurance->primary_payor ?? '') == $payor->name ? 'selected' : '' }}>{{$payor->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="secondary_payor">Secondary Payor: </label>
                </div>
                <div class="col-md-5">
                    <select name="secondary_payor" id="secondary_payor"
                            class="form-control s ou secondary-payor-drop-down">
                        <option value="">--- Select ---</option>
                        @if($payors_sub_addons)
                            @foreach($payors_sub_addons as $secondary_payor)
                                <option value="{{$secondary_payor->name}}" {{ ($pat->insurance->secondary_payor ?? '') == $secondary_payor->name ? 'selected' : '' }}>{{$secondary_payor->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="co_pay_money">Co-Pay: </label>
                </div>
                <div class="col-md-3">
                    <input class="w-full" name="co_pay_money" type="text" value="{{$pat->insurance->co_pay}}"/>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label for="private_pay">Private Pay: </label>
                </div>
                <div class="col-md-2">
                    <input type="checkbox" name="private_pay" id="private_pay" class="form-control" {{ $pat->insurance->private_pay ? 'checked' : '' }}>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <label for="insurance_membar_insurace_number">Members Insurance Number: </label>
            <hr class="hr-st">

            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="insurance_medicaid_member_id"><span class="text-green">(M0063)</span>Medicaid Member ID: </label>
                </div>
                <div class="col-md-5">
                    <div class="col-md-5">
                        <input id="insurance_medicaid_member_id" type="text" class="form-control s ou"
                            name="insurance_medicaid_member_id" value="{{ old('insurance_medicaid_member_id', $pat->insurance->medicaid_id ?? '') }}">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="insurance_medicare_member_id">
                        <span class="text-green">(M0065)</span>
                        Medicare Member ID: </label>
                </div>
                <div class="col-md-5">
                    <input id="insurance_medicare_member_id_check" type="text" class="form-control s ou"
                        name="insurance_medicare_member_id_check"
                        value="{{ old('insurance_medicare_member_id_check', $pat->insurance->medicare_id ?? '') }}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="insurance_nic_member_id">NIC Member ID: </label>
                </div>
                <div class="col-md-5">
                    <input id="insurance_nic_member_id_check" type="text" class="form-control s ou"
                        name="insurance_nic_member_id_check" value="{{ old('insurance_nic_member_id_check', $pat->insurance->nic_id ?? '') }}">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <label><span class="text-green">(M0150)</span>Current Payment Source for Home Care (Check all that apply):</label>
            <hr class="hr-st">
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['non_charge_current_service']"
                           id="non_charge_current_service" class="form-control"
                           {{ in_array('non_charge_current_service', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="non_charge_current_service">None; no charge for current services</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['free_for_service']"
                           id="free_for_service" class="form-control"
                           {{ in_array('free_for_service', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="free_for_service">Medicare (traditional fee-for-service)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['medicare_hmo_managed']"
                           id="medicare_hmo_managed" class="form-control"
                           {{ in_array('medicare_hmo_managed', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="medicare_hmo_managed">Medicare (HMO/managed care/Advantage)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['traditional_free_service']"
                           id="traditional_free_service" class="form-control"
                           {{ in_array('traditional_free_service', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="traditional_free_service">Medicaid (Traditional fee-for-service)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['insurance_medicaid_hmo_managed']"
                           id="insurance_medicaid_hmo_managed" class="form-control"
                           {{ in_array('insurance_medicaid_hmo_managed', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="insurance_medicaid_hmo_managed">Medicaid (HMO/Managed)</label>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['insurance_workers_compensation']"
                           id="insurance_workers_compensation" class="form-control"
                           {{ in_array('insurance_workers_compensation', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="insurance_workers_compensation">Workers Compensation</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['insurance_program_111']"
                           id="insurance_program_111" class="form-control"
                           {{ in_array('insurance_program_111', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="insurance_program_111">Title programs (for example, Title III, V, or XX)</label>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['other_government']"
                           id="other_government" class="form-control"
                           {{ in_array('other_government', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="other_government">Other government (for example, Tricare, VA)</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['private_insurance']"
                           id="private_insurance" class="form-control"
                           {{ in_array('private_insurance', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="private_insurance">Private Insurance</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['private_hmo_care']"
                           id="private_hmo_care" class="form-control"
                           {{ in_array('private_hmo_care', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="private_hmo_care">Private HMO/Managed care</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['self_pay']" id="selft_pay"
                           class="form-control" {{ in_array('self_pay', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-7">
                    <label for="selft_pay">Self Pay</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['other_specify']" id="other_specify"
                           class="form-control"
                           {{ in_array('other_specify', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-2">
                    <label for="other_specify">Other (Specify)</label>
                </div>
                <div class="col-md-5">
                    <input id="other_specify_value" type="text" class="form-control s ou"
                           name="insurance_current_payment_source[]['other_specify_value']">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-1">
                    <input type="checkbox" name="insurance_current_payment_source[]['unknown_resource']"
                           id="unknown_resource" class="form-control" {{ in_array('unknown_resource', json_decode($pat->insurance->payment_source, true) ?? []) ? 'checked' : '' }}>
                </div>
                <div class="col-md-2">
                    <label for="unknown_resource">Unknown</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </div>
</form>

<form class="patientPharmacyForm" name="patientPharmacyForm" id="patientPharmacyForm" method="post">
    @csrf
    <div class="acrd mb-2 tabcontent" id="pharmacy_form">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Pharmacy Information:</h2>
        </div>
        <div class="row">
            <div class="col-md-5 mt-4">
                <div class="form-group">
                    <label for="gender">Pharmacy: </label>
                    <select name="pharmacy" id="pharmacy" class="pharmacySelector form-control s ou pharmacy-drop-down">
                        @foreach ($pharmacies as $pharmacy)
                            <option value="{{$pharmacy->id}}" {{($pharmacy->id == $pat->extra_info->pharmacy_id)?'selected':''}}>{{$pharmacy->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="col-md-7 mt-4">
                <button type="button" class="btn btn-block hd xu ye button-float-right add_new_pharmacy">Add new Pharmacy</button>
            </div>
            @php
                $currentPharmacy = $pharmacies->where('id', $pat->extra_info->pharmacy_id)->first();
            @endphp
            <div class="mt-4">
                <div class="col">
                    <label for="last_name">Pharmacy Name:</label>
                    <span id="pharmacy_name">{{$currentPharmacy->name}}</span>
                </div>
                <div class="col">
                    <label for="pharmacy_address">Address:</label>
                    <span id="pharmacy_address">{{$currentPharmacy->address}}</span>
                </div>
                <div class="col">
                    <label for="pharmacy_telephone">Telephone:</label>
                    <span id="pharmacy_telephone">{{$currentPharmacy->telephone}}</span>
                </div>
                <div class="col">
                    <label for="pharmacy_fax">Fax:</label>
                    <span id="pharmacy_fax">{{$currentPharmacy->fax}}</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </div>
</form>



<form class="patientEpisodeForm" name="patientEpisodeForm" id="patientEpisodeForm" method="post">
    @csrf
    <div class="card mb-2 tabcontent" id="episode">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Episode Timing & OASIS Scheduling</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="form-group">
                    <label for="middle_name">
                        <span class="text-green">(M0110)</span>
                        Episode Timing: </label>
                    <label for="middle_name">
                        <i>Is the Medical Home Health payment episode for which this assessment will define a case mix
                            group an “early” episode or “late” episode in the patient’s current sequence of adjacent
                            Medicare home health payment episode: (Check what applies): </i>
                    </label>

                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_early">Early</label>
                            <input type="radio" name="episode_timing" value="early" id="episode_timing_early" class="form-control" {{ $pat->episode->episode_timing === 'early' ? 'checked' : '' }}>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_late">Late</label>
                            <input type="radio" name="episode_timing" value="late" id="episode_timing_late" class="form-control" {{ $pat->episode->episode_timing === 'late' ? 'checked' : '' }}>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_unknown">Unknown</label>
                            <input type="radio" name="episode_timing" value="unknown" id="episode_timing_unknown" class="form-control" {{ $pat->episode->episode_timing === 'unknown' ? 'checked' : '' }}>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_not_applicable">N/A- Not applicable: No Medicare case mix group</label>
                            <input type="radio" name="episode_timing" value="applicable" id="episode_timing_not_applicable" class="form-control" {{ $pat->episode->episode_timing === 'applicable' ? 'checked' : '' }}>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <label for="middle_name">SOC & Episode Start Date: </label>
                <div class="row">
                    <div class="col-md-6">
                        <label for="episode_timing_start_care_date">
                            <span class="text-green">(M0030)</span>
                            Start of Care Date: </label>
                    </div>
                    <div class="col-md-6">
                        <input id="episode_timing_start_care_date" type="date" class="form-control s ou" name="episode_timing_start_care_date" value="{{ $pat->episode->start_care_date }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="episode_timing_start_date">Episode Start Date: </label>
                    </div>
                    <div class="col-md-6">
                        <input id="episode_timing_start_date" type="date" class="form-control s ou" name="episode_timing_start_date" value="{{ $pat->episode->episode_start_date }}">
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-12 mt-5 episode_schedule">
                <label for="middle_name">Create Episode & Schedule Visit after Saving: </label>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('startCare', this)" name="oasis_start_care" value="oasis_start_care" id="episode_timing_oasis_start_care_label" class="form-control">
                        <label class="font-normal" for="episode_timing_oasis_start_care_label">Create episode & schedule OASIS Start of Care visit after saving</label>
                    </div>
                </div>
                <div class="col-md-12" id="startCare">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" value="episode_timing_oasis_start_care_sn" id="episode_timing_oasis_start_care_sn" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_sn">Oasis Start of Care (SN)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" value="episode_timing_oasis_start_care_st" id="episode_timing_oasis_start_care_st" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_st">Oasis Start of Care (ST)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" value="episode_timing_oasis_start_care_pt" id="episode_timing_oasis_start_care_pt" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_pt">Oasis Start of Care (PT)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" id="episode_timing_oasis_start_care_ot" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_ot">Oasis Start of Care (OT)</label>
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('therapyEvaluation', this)" name="schedule_therapy" value="schedule_therapy" id="schedule_therapy" class="form-control">
                        <label class="font-normal" for="schedule_therapy">Create episode & schedule therapy evaluation</label>
                        <i class="label-font-size">(checking this box will allow therapist to perform ‘therapy only’ admission and when an OASIS is required to be completed by an RN within 5-days windows, an OASIS will need to be scheduled)</i>
                        </span>
                    </div>
                </div>
                <div class="col-md-12" id="therapyEvaluation">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_therapy_evaluation[]" value="episode_timing_pt_assessment" id="episode_timing_pt_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_pt_assessment">PT Assessment/Evaluation SOC</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_therapy_evaluation[]" value="episode_timing_st_assessment" id="episode_timing_st_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_st_assessment">ST Assessment/Evaluation SOC</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_therapy_evaluation[]" value="episode_timing_ot_assessment" id="episode_timing_ot_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_ot_assessment">OT Assessment/Evaluation SOC</label>
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('nonOasisStart', this)" name="non_oasis_start_care" value="non_oasis_start_care" id="non_oasis_start_care" class="form-control">
                        <label class="font-normal" for="non_oasis_start_care">Create episode & schedule non-OASIS Start of Care visit after saving</label>
                        <span><i class="label-font-size">(If this box is unchecked. patient will be added to list of pending admissions)</i></span>
                    </div>
                </div>
                <div class="col-md-12" id="nonOasisStart">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_rn_assessment" id="episode_timing_rn_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_rn_assessment">RN Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_pt_non_assessment" id="episode_timing_pt_non_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_pt_non_assessment">PT Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_ot_non_assessment" id="episode_timing_ot_non_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_ot_non_assessment">OT Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_st_non_assessment" id="episode_timing_st_non_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_st_non_assessment">ST Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('oasisRecert', this)" name="initial_oasis_recert" value="initial_oasis_recert" id="episode_timing_recert_assessment" class="form-control">
                        <label class="font-normal" for="episode_timing_recert_assessment">Create episode & schedule initial OASIS Recert </label>
                    </div>
                </div>
                <div class="col-md-12" id="oasisRecert">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_recertification" id="episode_timing_recertification" class="form-control">
                            <label class="font-normal" for="episode_timing_recertification">OASIS Recertification (SN)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_recertification_pt" id="episode_timing_recertification_pt" class="form-control">
                            <label class="font-normal" for="episode_timing_recertification_pt">OASIS Recertification (PT)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_recertification_st" id="episode_timing_recertification_st" class="form-control">
                            <label class="font-normal" for="episode_timing_recertification_st">OASIS Recertification (ST)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_oasis_recert_ot" id="episode_timing_oasis_recert_ot" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_recert_ot">OASIS Recertification (OT)</label>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label for="episode_timing_oasis_recert_date">Recertification Date:</label>
                            <input type="date" name="episode_timing_oasis_recert_date" id="episode_timing_oasis_recert_date" class="form-control">
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('nonOasisRecert', this)" name="initial_non_oasis_recert" value="initial_non_oasis_recert" id="non_oasis_recert" class="form-control">
                        <label class="font-normal" for="non_oasis_recert">Create episode & schedule initial non-OASIS Recert</label>
                    </div>
                </div>
                <div class="col-md-12" id="nonOasisRecert">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis" value="episode_timing_non_oasis" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis">RN Assessment Recertification (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis_pt" value="episode_timing_non_oasis_pt" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis_pt">PT Assessment Recertification (Non-OASIS)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis_ot" value="episode_timing_non_oasis_ot" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis_ot">OT Assessment Recertification (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis_st" value="episode_timing_non_oasis_st" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis_st">ST Assessment Recertification (Non-OASIS)</label>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label for="episode_timing_recertification_date">Recertification Date:</label>
                            <input type="date" name="episode_timing_recertification_date" id="episode_timing_recertification_date" class="form-control">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </div>
</form>

<form class="advanceDirectiveForm" name="advanceDirectiveForm" id="advanceDirectiveForm" method="post">
    @csrf
    <div class="card mb-2 tabcontent" id="advance_directive">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Advance Directive</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                @php
                    $advanceDirectives = json_decode($pat->extra_info->advance_directives, true);
                @endphp
                <div class="col-md-12">
                    <div class="col">
                        <input type="checkbox" name="advance_directive[]" value="living_will" id="living_will" class="form-control" {{ in_array('living_will', $advanceDirectives['advance_directive']) ? 'checked' : '' }}>
                        <label for="living_will">Living Will</label>
                    </div>
                    <div class="col">
                        <input type="checkbox" name="advance_directive[]" value="dnr_out_hospital" id="dnr_out_hospital" class="form-control" {{ in_array('dnr_out_hospital', $advanceDirectives['advance_directive']) ? 'checked' : '' }}>
                        <label for="dnr_out_hospital">DNR, Out of Hospital</label>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col">
                            <label for="first_name">Physician:</label>

                            {{-- <select name="attending" id="attending" class="form-control s ou attending-drop-down">
                                <option value="">--- Select Attending Physician ---</option>
                                <option value="M">Agency</option>
                                <option value="F">Agency</option>
                            </select> --}}
                            <select name="attending" id="attending" class="attendingSelector form-control s ou attending-drop-down">
                                <option value="">--- Select ---</option>
                                @foreach ($physicians as $physician)
                                <option value="{{$physician->id}}" {{($physician->id == $pat->extra_info->physician_id)?'selected':''}}>{{$physician->first_name .' '.$physician->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @php
                           $currentPatient = $physicians->where('id', $pat->extra_info->physician_id)->first();
                        @endphp

                        <div class="mt-4">
                            <div class="col">
                                <label for="attendin_physician_name">Physician Name:</label>
                                <span id="attendin_physician_name">{{$currentPatient->first_name.' '.$currentPatient->last_name}}</span>
                            </div>
                            <div class="col">
                                <label for="attendin_physician_address">Address:</label>
                                <span id="attendin_physician_address">{{$currentPatient->address_line_1}}</span>
                            </div>
                            <div class="col">
                                <label for="attendin_physician_phone">Telephone:</label>
                                <span id="attendin_physician_phone">{{$currentPatient->primary_phone}}</span>
                            </div>
                            <div class="col">
                                <label for="attendin_physician_fax">Fax:</label>
                                <span id="attendin_physician_fax">{{$currentPatient->fax}}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </div>
</form>

<form name="patientAdvanceForm" method="post" id="patientAdvanceForm">
    <div class="card mb-2 tabcontent" id="advance">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Advance Care Plan</h2>
        </div>
        <div class="card-body row">
            <input type="hidden" name="org_id" value="{{ request('org') }}">

            <div class="col-md-12">
                <label for="middle_name">Advance Care Plan: </label>
                <hr class="hr-st">
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">Living Will</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <label for="language_barrier">DNR, Out of hospital</label>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <label for="middle_name">Face-to-Face Evaluation Information: </label>
                <hr class="hr-st">
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">NA</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">Date of Face-to-Face visit</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">Face-to-Face to be completed within 30 days</span>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="physician_modal hidden" style="max-width: 80%;">
    <style>
        .close-modal {
            display: none !important;
        }
    </style>

    <form method="post" name="physicianForm" id="physicianForm" class="row py-[20px]">
        @csrf
        <div class="card mb-2">
            <div class="card-header text-center bg-dark">
                <h2 class="gh text-slate-800 text-white">Search Physician</h2>
            </div>
            <div class="row mt-3 mb-3 px-[15px]" id="npi_field">
                <div class="col-md-2 justify-content-center">
                    <label for="npi_number_search">NPI Number: </label>
                </div>
                <div class="col">
                    <input id="npi_number_search" type="text" class="form-control s ou" name="npi_number_search" value="{{ old('npi_number_search') }}">
                </div>
                <div class="col">
                    <svg onclick="checkNpiNumber()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
            </div>
            <div class="card-header text-center bg-dark">
                <h2 class="gh text-slate-800 text-white">Physician Information</h2>
            </div>
            <div class="card-body row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 mb-[10px]">
                            <label for="physician_first_name">First Name: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="physician_first_name" type="text" class="form-control s ou" name="physician_first_name" value="{{ old('first_name') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="date_of_birth">MI: </label>
                        </div>
                        <div class="col-md-5 mb-[10px]">
                            <input readonly id="mi" type="text" class="form-control s ou" name="mi" value="{{ old('mi') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="physician_last_name">Last Name: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="physician_last_name" type="text" class="form-control s ou" name="physician_last_name" value="{{ old('last_name') }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 mb-[10px]">
                            <label for="credentials">Credentials: </label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="credentials" type="text" class="form-control s ou" name="credentials" value="{{ old('credentials') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="npi_number">NPI Number: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="npi_number" type="text" class="form-control s ou" name="npi_number" value="{{ old('npi_number') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="date_of_birth">PECOS Verification: </label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="pecos_verification" type="text" value="false" class="form-control s ou" name="pecos_verification" hidden>
                            <span id="verification_pecos"></span>
                        </div>
                    </div>
                </div>
                {{--            @hasrole('super-admin')--}}
                {{--            @if (Auth::user()->organization_id == null)--}}
                {{--                <div class="row">--}}
                {{--                    <div class="col-md-3">--}}
                {{--                        <div class="form-group">--}}
                {{--                            <label for="organisation_id">Organisation (IDs)</label>--}}
                {{--                            <select name="org_id" id="organisation_id" class="form-control s ou">--}}
                {{--                                <option value="">Select Organisation ID</option>--}}
                {{--                                <option value="0">All</option>--}}
                {{--                                @if ($organizations)--}}
                {{--                                    @foreach ($organizations as $organization)--}}
                {{--                                        <option value={{ $organization->id }}>{{ $organization->name }}</option>--}}
                {{--                                    @endforeach--}}
                {{--                                @endif--}}
                {{--                            </select>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            @else--}}
                {{--                <input id="org_id" value={{ $organizations }} type="hidden" class="form-control s ou" name="org_id" value="{{ old('org_id') }}">--}}
                {{--            @endif--}}
                {{--            @else--}}
                {{--                <input id="org_id" value={{ $organizations }} type="hidden" class="form-control s ou" name="org_id" value="{{ old('org_id') }}">--}}
                {{--                @endhasrole--}}
            </div>
            <div class="card-header text-center bg-dark">
                <h2 class="gh text-slate-800 text-white">Physician Address</h2>
            </div>
            <div class="card-body row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 mb-[10px]">
                            <label for="address_line_1">Address Line 1: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="address_line_1" type="text" class="form-control s ou" name="address_line_1" value="{{ old('address_line_1') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="address_line_2">Address Line 2: </label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="address_line_2" type="text" class="form-control s ou" name="address_line_2" value="{{ old('address_line_2') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="city">City: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="city" type="text" class="form-control s ou" name="city" value="{{ old('city') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="date_of_birth">State, Zip: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <div class="row">
                                <div class="col-md-6 mb-[10px]">
                                    <input readonly id="state" type="text" class="form-control s ou" name="state" value="{{ old('state') }}">
                                </div>
                                <div class="col-md-6 mb-[10px]">
                                    <input readonly id="zip" type="text" class="form-control s ou" name="zip" value="{{ old('zip') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="date_of_birth">Speciality: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="speciality" type="text" class="form-control s ou" name="speciality" value="{{ old('speciality') }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-4 mb-[10px]">
                            <label for="primary_phone">Primary Phone: <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="primary_phone" type="text" class="form-control s ou" name="primary_phone" value="{{ old('primary_phone') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="alternate_phone">Alternate Phone: </label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="alternate_phone" type="text" class="form-control s ou" name="alternate_phone" value="{{ old('alternate_phone') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="fax">Fax: </label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input readonly id="fax" type="text" class="form-control s ou" name="fax" value="{{ old('fax') }}">
                        </div>
                        <div class="col-md-4 mb-[10px]">
                            <label for="datemaile_of_birth">Email: </label>
                        </div>
                        <div class="col-md-8 mb-[10px]">
                            <input id="email" type="email" class="form-control s ou" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-1">
            <button type="submit" class="btn btn-block hd xu ye float-right">Save</button>
        </div>
    </form>
    @push('scripts')
        <script>
            function checkNpiNumber(){
                var id = $('#npi_field').find('input[name="npi_number_search"]').val();
                $.ajax({
                    url: "{{ route("physician.details") }}",
                    data: {"id":id},
                    type: 'get',
                    success: function(result){
                        const { data } = result;

                        document.getElementById('physician_first_name').value = data.results[0].basic.first_name;
                        document.getElementById('physician_last_name').value = data.results[0].basic.last_name;
                        document.getElementById('credentials').value = data.results[0].basic.credential;
                        document.getElementById('speciality').value = data.results[0].taxonomies[0].desc;
                        document.getElementById('npi_number').value = data.results[0].number;
                        document.getElementById('address_line_1').value = data.results[0].addresses[0].address_1;
                        document.getElementById('address_line_2').value = data.results[0].addresses[1].address_1;
                        document.getElementById('city').value = data.results[0].addresses[0].city;
                        document.getElementById('state').value = data.results[0].addresses[0].state;
                        document.getElementById('zip').value = data.results[0].addresses[0].postal_code;
                        document.getElementById('primary_phone').value = data.results[0].addresses[0].telephone_number;
                        document.getElementById('alternate_phone').value = data.results[0].addresses[1].telephone_number;
                        document.getElementById('fax').value = data.results[0].addresses[0].fax_number;
                    }
                });
            }

            window.addEventListener('load', function() {
                $('.states-drop-down').select2();
                $('.speciality-drop-down').select2();
            })
        </script>
    @endpush
    @stack('scripts')

</div>
<div class="pharmacy_modal hidden" style="max-width: 450px; height: fit-content;">
    <style>
        .close-modal {
            display: none !important;
        }
    </style>
    <form name="pharmacyForm" id="pharmacyForm" method="post" class="row">
        @csrf
        <div class="card mb-2">
            <div class="card-header text-center bg-dark">
                <h2 class="gh text-slate-800 text-white">Basic Information</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pharmacy_name">Name: <span class="text-red">*</span></label>
                            <input id="pharmacy_name" type="text" class="form-control s ou" name="pharmacy_name" value="{{ old('pharmacy_name') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pharmacy_reference_code">Reference Code: <span class="text-red">*</span></label>
                            <input id="pharmacy_reference_code" type="text" class="form-control s ou" name="pharmacy_reference_code" value="{{ old('pharmacy_reference_code') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pharmacy_address">Address:<span class="text-red">*</span></label>
                            <input id="pharmacy_address" type="text" class="form-control s ou" name="pharmacy_address" value="{{ old('pharmacy_address') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pharmacy_telephone">Telephone: <span class="text-red">*</span></label>
                            <input id="pharmacy_telephone" type="text" class="form-control s ou" name="pharmacy_telephone" value="{{ old('pharmacy_telephone') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pharmacy_fax">Fax: <span class="text-red">*</span></label>
                            <input id="pharmacy_fax" type="text" class="form-control s ou" name="pharmacy_fax" value="{{ old('pharmacy_fax') }}">
                        </div>
                    </div>
                </div>
                {{--            <input id="org_id" value={{ $organizations }} type="text" class="form-control s ou" name="org_id" value="{{ old('organisation_id') }}" hidden>--}}

            </div>
        </div>
        <div class="col-md-12 mt-1">
            <button type="submit" class="btn btn-block hd xu ye float-right"> Save</button>
        </div>
    </form>

</div>
<input type="text" class="hidden" id="patient_id"/>
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
                        $dropdown.append($("<option />").val(data[3][i][0]).text(data[3][i][1]));
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

        // function get_api_data() {
        //     jQuery.ajax({
        //         url: "{{route("api.employee.index")}}",
        //         type: "get",
        //         success: function (result) {
        //             const {data} = result;
        //             $('#clinical_manager, #case_manager, #ot_approved, #st_approved, #pt_approved, #oasis_assigned_manager, #ot_assigned_manager, #pt_assigned_manager, #st_assigned_manager').empty();
        //             var $dropdown = $("#clinical_manager, #case_manager, #ot_approved, #st_approved, #pt_approved, #oasis_assigned_manager, #ot_assigned_manager, #pt_assigned_manager, #st_assigned_manager");
        //             $dropdown.append($("<option />").val('').text('--Select--'));
        //             for (let i = 0; i < data.length; i++) {
        //                 $dropdown.append($("<option {{$patient->id}} />").val(data[i].id).text(data[i].first_name + ' ' + data[i].last_name));
        //             }
        //         }
        //     });

        //     // primary-physician-drop-down
        // }

        function get_api_data() {
    jQuery.ajax({
        url: "{{ route("api.employee.index") }}",
        type: "get",
        success: function (result) {
            const { data } = result;

            // Create an object to store the field IDs and corresponding values
            const fieldValues = {
                "clinical_manager": "{{ $patient->caseManage->clinical_care_managers }}",
                "case_manager": "{{ $patient->caseManage->case_managers }}",
                "oasis_assigned_manager": "{{ $patient->caseManage->oasis_assigned_to }}",
                "ot_approved": "{{ $patient->caseManage->ot_approved }}",
                "pt_approved": "{{ $patient->caseManage->pt_approved }}",
                "st_approved": "{{ $patient->caseManage->st_approved }}",
            };

            // Iterate through the field IDs and set the selected option
            for (const fieldId in fieldValues) {
                if (fieldValues.hasOwnProperty(fieldId)) {
                    const fieldValue = fieldValues[fieldId];

                    $('#'+fieldId).empty();
                    var $dropdown = $('#' + fieldId);
                    $dropdown.append($("<option />").val('').text('--Select--'));

                    for (let i = 0; i < data.length; i++) {
                        // Check if the current option should be selected based on the condition
                        const isSelected = fieldValue == data[i].id ? true : false;

                        $dropdown.append($("<option />")
                            .val(data[i].id)
                            .text(data[i].first_name + ' ' + data[i].last_name)
                            .prop('selected', isSelected)
                        );
                    }
                }
            }
        }
    });
}




        get_api_data();

function get_pharmacy($selectpharmacyId) {
    jQuery.ajax({
        url: "/api/pharmacy",
        type: "get",
        success: function (result) {
            const { data } = result;
            console.log("Pharmacy Data:", data);

            var $dropdown = $(".pharmacy-drop-down");
            $dropdown.empty();
            $dropdown.append($("<option />").val('').text('--Select--'));

            for (let i = 0; i < data.length; i++) {
                const option = $("<option />").val(data[i].id).text(data[i].name);

                // Set the 'selected' attribute if the ID matches
                if ($selectpharmacyId && data[i].id === $selectpharmacyId) {
                    option.attr('selected', 'selected');
                    // Trigger change event to update pharmacy details
                    $dropdown.trigger('change');
                }

                $dropdown.append(option);
            }

            console.log("Dropdown Element:", $dropdown);
        },
        error: function (error) {
            console.error("Error fetching pharmacy data:", error);
        }
    });
}

// Assuming $selectedPharmacyId is available before calling get_pharmacy
get_pharmacy(<?php echo $selectpharmacyId; ?>);

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
                    toastr.success(data.message)
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 300;
                    toastr.options.closeEasing = 'swing';
                    toastr.options.progressBar = true;
                    window.location.href = '/patients';
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
    </script>
@endsection

@stack('scripts')
