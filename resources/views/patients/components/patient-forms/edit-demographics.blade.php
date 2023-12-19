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
                    <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
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
                        value="{{ old('last_name') }}">
                    </div>
                    <div class="col-md-3">
                        <label for="first_name"><span class="text-green">(M0040)</span> First Name: <span
                            class="text-red">*</span></label>
                            <input id="first_name" type="text" class="form-control s ou" name="first_name"
                            value="{{ old('first_name') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="middle_name"><span class="text-green">(M0040)</span> MI:</label>
                            <input id="middle_name" type="text" class="form-control s ou" name="middle_name"
                            value="{{ old('middle_name') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="referral_date">
                                <span class="text-green">(M0104)</span>
                                Referral Date: <span class="text-red">*</span></label>
                                <input id="referral_date" type="date" class="form-control s ou" name="referral_date"
                                value="{{ old('referral_date') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="gender"><span class="text-green">(M0069)</span>Gender: <span
                                    class="text-red">*</span></label>
                                    <select name="gender" id="gender" class="form-control s ou" {{ old('gender') }}>
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="marital_status">Marital Status: </label>
                                    <select name="marital_status" id="marital_status" class="form-control s ou" value="{{ old('marital_status') }}">
                                        <option value="">Select</option>
                                        <option value="married">Married</option>
                                        <option value="single">Single</option>
                                        <option value="single">Divorced</option>
                                        <option value="single">widowed</option>
                                        <option value="single">Single</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="date_of_birth"><span class="text-green">(M0066)</span>Date of Birth: <span
                                        class="text-red">*</span></label>
                                        <input id="date_of_birth" type="date" class="form-control s ou" name="date_of_birth"
                                        value="{{ old('date_of_birth') }}">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-4">
                                        <label for="s_s_number"><span class="text-green">(M0064)</span> Social Security Number: <span
                                            class="text-red">*</span></label>
                                            <input id="s_s_number" type="text" class="form-control s ou" name="s_s_number"
                                            value="{{ old('s_s_number') }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="insurance_type">Insurance Type: <span class="text-red">*</span></label>
                                            <select name="insurance_type" class="insurance_type form-control" id="insurance_type" value="{{ old('insurance_type') }}">
                                                <option value="">Select Insurance Type</option>
                                                @if($insurance_type_sub_addons)
                                                @foreach($insurance_type_sub_addons as $insurance)
                                                <option value="{{$insurance->name}}">{{$insurance->name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col hidden">
                                            <label for="patient_admission_status">Status: <span class="text-red">*</span></label>
                                            <select name="patient_admission_status" id="patient_admission_status" class="form-control s ou"  value="{{ old('patient_admission_status') }}">
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
                                        <div class="col-sm-6">
                                            <div class="col-md-12">
                                                <label>Patient Home Address: <span class="text-red">*</span></label>
                                                <hr class="hr-st"/>
    
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="p_h_address_line_1">Address Line 1: <span class="text-red">*</span> </label>
                                                    </div>
                                                    <div class="col-md-8 relative">
                                                        <input id="p_h_address_line_1" type="text" class="form-control s ou"
                                                        name="p_h_address_line_1" value="{{ old('p_h_address_line_1') }}">
                                                        <input id="p_h_lat" type="hidden" name="p_h_lat"/>
                                                        <input id="p_h_lon" type="hidden" name="p_h_lon"/>
    
                                                        <div id="p_h_results" class="absolute top-[65px] bg-white"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="p_h_address_line_2">Address Line 2: </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input id="p_h_address_line_2" type="text" class="form-control s ou"
                                                        name="p_h_address_line_2" value="{{ old('p_h_address_line_2') }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col">
                                                        <label for="p_h_zip">
                                                            <span class="text-green">(M0060)</span>
                                                        Zip:</label>
                                                        <input id="p_h_zip" type="text" placeholder="Enter Zipcode" class="form-control s ou"
                                                        name="p_h_zip" value="{{ old('p_h_zip') }}">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="p_h_country">Country: </label>
                                                        <input type="text" name="p_h_country" class="form-control s ou" id="p_h_country"
                                                        placeholder="Enter country" value="{{ old('p_h_country') }}/">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="form-group col">
                                                        <label for="p_h_city">City: </label>
                                                        <input type="text" name="p_h_city" class="form-control s ou" id="p_h_city"
                                                        placeholder="Enter city" value="{{ old('p_h_city') }}"/>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="p_h_state">
                                                            <span class="text-green">(M0050)</span>
                                                        State: </label>
                                                        <input type="text" name="p_h_state" id="p_h_state" class="form-control s ou"
                                                        placeholder="Enter state" value="{{ old('p_h_state') }}"/>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
    
                                                    <div class="form-group col">
                                                        <label for="p_h_phone">Phone: <span class="text-red">*</span></label>
                                                        <input id="p_h_phone" type="text" placeholder="Enter Phone" class="form-control s ou"
                                                        name="p_h_phone" value="{{ old('p_h_phone') }}">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="p_h_alternate_phone">Alternate Phone: </label>
                                                        <input id="p_h_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                                                        class="form-control s ou" name="p_h_alternate_phone"
                                                        value="{{ old('p_h_alternate_phone') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--Address line 1----------->
                                        <div class="col-sm-6">
                                            <div class="col-md-12">
                                                <div class="flex items-center flex-wrap justify-between">
                                                    <label><span class="mr-2">Patient Service Address:  <span class="text-red">*</span></span>Same as Home Address <input type="checkbox" id="same_home_address"/> </label>
                                                </div>
                                                <hr class="hr-st"/>
                        
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="p_s_address_line_1">Address Line 1: <span class="text-red">*</span></label>
                                                    </div>
                                                    <div class="col-md-8 relative">
                                                        <input id="p_s_address_line_1" type="text" class="form-control s ou"
                                                        name="p_s_address_line_1" value="{{ old('p_s_address_line_1') }}">
                                                        <input id="p_s_lat" type="hidden" name="p_s_lat"/>
                                                        <input id="p_s_lon" type="hidden" name="p_s_lon"/>
                        
                                                        <div id="p_s_results" class="absolute top-[65px] bg-white"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="p_s_address_line_2">Address Line 2:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input id="p_s_address_line_2" type="text" class="form-control s ou"
                                                        name="p_s_address_line_2" value="{{ old('p_s_address_line_2') }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col">
                                                        <label for="p_s_zip">Zip: <span class="text-red">*</span></label>
                                                        <input id="p_s_zip" type="text" placeholder="Enter Zipcode" class="form-control s ou"
                                                        name="p_s_zip" value="{{ old('p_s_zip') }}">
                                                    </div>
                                                    <div class="form-group col">
                                                        <div class="form-group">
                                                            <label for="p_s_country">Country: <span class="text-red">*</span></label>
                                                            <input id="p_s_country" type="text" placeholder="Enter Country"
                                                            class="form-control s ou" name="p_s_country" value="{{ old('p_s_country') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="form-group col">
                                                        <label for="p_s_city">City: </label>
                                                        <input type="text" name="p_s_city" class="form-control s ou" id="p_s_city"
                                                        placeholder="Enter city" value="{{ old('p_h_s_city') }}"/>
                                                    </div>
                                                    <div class="form-group col">
                                                        <div class="form-group">
                                                            <label for="p_s_state">State: <span class="text-red">*</span></label>
                                                            <input id="p_s_state" type="text" placeholder="Enter State" class="form-control s ou"
                                                            name="p_s_state" value="{{ old('p_s_state') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                        
                                                    <div class="form-group col">
                                                        <label for="p_s_phone">Phone: <span class="text-red">*</span></label>
                                                        <input id="p_s_phone" type="text" placeholder="Enter Phone number" class="form-control s ou"
                                                        name="p_s_phone" value="{{ old('p_s_phone') }}">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="p_s_alternate_phone">Alternate Phone: </label>
                                                        <input id="p_s_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                                                        class="form-control s ou" name="p_s_alternate_phone"
                                                        value="{{ old('p_s_alternate_phone') }}">
                                                    </div>
                                                </div>
                                            </div><!--------- Address line 2------------->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="patient_language_spoken">Patient Language Spoken: <span
                                            class="text-red">*</span></label>
                                            <div class="col-sm-6">
                                                <div class="col">
                                                    <select name="patient_language_spoken" id="patient_language_spoken"
                                                    class="form-control s ou language-drop-down" value="{{ old('patient_language_spoken') }}">
                                                    <option value="">--- Select ---</option>
                                                    <option value="english">English</option>
                                                    <option value="spanish">Spanish</option>
                                                    <option value="french">French</option>
                                                    <option value="german">German</option>
                                                    <option value="chinese">Chinese</option>
                                                    <option value="filipino">Filipino</option>
                                                    <option value="arabic">Arabic</option>
                                                    <option value="korean">Korean</option>
                                                    <option value="russian">Russian</option>
                                                    <option value="somali">Somali</option>
                                                    <option value="twi">Twi</option>
                                            </select>
                                                </div>
                                            </div> 
                                            <div class="col-sm-6">
                                                <label class="mr-3" for="use_of_interpreter">Use of Interpreter: </label>
                                            
                                                <input type="radio" name="use_of_interpreter" value="1"  id="use_of_interpreter_yes"
                                                       class="form-control" value="{{ old('use_of_interpreter') }}">
                                                <label class="font-normal" for="use_of_interpreter_yes">Yes</label>
                                                <input type="radio" name="use_of_interpreter"  value="0" id="use_of_interpreter_no"
                                                       class="form-control"value="{{ old('use_of_interpreter') }}">
                                                <label class="font-normal" for="use_of_interpreter_no">No</label>
                                            </div>             
                                    </div><!-------Patient Spoken languange---------> 
                                    <div class="col mt-4">
                                     <div class="row">
                                        <label for="race_ethnicity">
                                            <span class="text-green">(M0140)</span>
                                            Ethnicity <span class="text-red">*</span>(mark all that apply): </label>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_american">A. White</label>
                                                    <input type="checkbox" name="white"  value="{{ old('white') }}"
                                                    id="white" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="ablack_or_african_american">B. Black or African American</label>
                                                    <input type="checkbox" name="black" id="black"
                                                    value="{{ old('black') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_black"> C. American Indian or Alaska Native</label>
                                                    <input type="checkbox" name="american_indian" value="{{ old('american_indian') }}"
                                                    id="american_indian" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_hispanic">D. Asian Indian</label>
                                                    <input type="checkbox" name="asian_indian" value="{{ old('asian_indian') }}"
                                                    id="asian_indian" class="form-control">
                                                </div>
                                            </div>
                                        
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_native">E. Chinese</label>
                                                    <input type="checkbox" name="chines" value="{{ old('chines') }}"
                                                    id="chines" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_white"> F. Filipino</label>
                                                    <input type="checkbox" name="fillipino" value="{{ old('fillipino') }}"
                                                    id="fillipino" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">G. Japanese</label>
                                                    <input type="checkbox" name="japanes" value="{{ old('japanes') }}"
                                                    id="japanes" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">H. Korean</label>
                                                    <input type="checkbox" name="korean" value="{{ old('korean') }}"
                                                    id="korean" class="form-control">
                                                </div>
                                            </div>
                        
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">I. Vietnamese</label>
                                                    <input type="checkbox" name="vietnamese" value="{{ old('vietnamese') }}"
                                                    id="vietnamese" class="form-control">
                                                </div>
                                            </div>
                        
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">J. Other Asian</label>
                                                    <input type="checkbox" name="other_asian" value="{{ old('other_asian') }}"
                                                    id="other_asian" class="form-control">
                                                </div>
                                            </div>
                        
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">K. Native Hawaiian</label>
                                                    <input type="checkbox" name="native_hawaiian" value="{{ old('native_hawaiian') }}"
                                                    id="native_hawaiian" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">L. Guamanian or Chamorro</label>
                                                    <input type="checkbox" name="guamanian" value="{{ old('guamanian') }}"
                                                    id="guamanian" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">M. Samoan</label>
                                                    <input type="checkbox" name="samoa" value="{{ old('samoa') }}"
                                                    id="samoan" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">N. Other Pacific Islander</label>
                                                    <input type="checkbox" name="other_pacific_island" value="{{ old('other_pacific_island') }}"
                                                    id="other_pacific_island" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">X. Patient unable to respond</label>
                                                    <input type="checkbox" name="patient_unable_to_respond" value="{{ old('patient_unable_to_respond') }}" 
                                                    id="patient_unable_to_respond" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">Y. Patient declines to respond</label>
                                                    <input type="checkbox" name="patient_declines" value="{{ old('patient_declines') }}" 
                                                    id="patient_declines" class="form-control">
                                                </div>
                                            </div>
                        
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <label class="font-normal" for="needs_interpreter_unknown">Z. None of the above</label>
                                                    <input type="checkbox" name="none_of_the_above" value="{{ old('none_of_the_above') }}"
                                                    id="none_of_the_above" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                    </div><!----End of (M0140) Race ---->
                                
                                       <hr class="hr-st"/>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="col-md-12"><!---A1005. Ethnicity--->
                                                        <div class="form-group">
                                                            <label for="race_ethnicity">
                                                                <span class="text-green">(A1005)</span>
                                                                Race <span class="text-red">*</span>(mark all that apply): </label>
                                    
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="needs_interpreter_american">American Indian/
                                                                        Alaskan</label>
                                                                    <input type="checkbox" name="ethnicity_alaskan" value=" {{ old('ethnicity_alaskan') }}"
                                                                           id="ethnicity_alaskan" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="asian_race_ethnicity_asian">Asian</label>
                                                                    <input type="checkbox" name="ethnicity_asian" id="ethnicity_asian"
                                                                           value="{{ old('ethnicity_asian') }}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="needs_interpreter_black">Black or African
                                                                        American</label>
                                                                    <input type="checkbox" name="ethnicity_black" value=" {{ old('ethnicity_black') }}"
                                                                           id="ethnicity_black" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="needs_interpreter_hispanic">Hispanic or Latino</label>
                                                                    <input type="checkbox" name="ethnicity_hispanic_or_latino" value=" {{ old('ethnicity_hispanic_or_latino') }}"
                                                                           id="ethnicity_hispanic_or_latino" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="needs_interpreter_native">Native Hawaiian or Pacific
                                                                        Islander</label>
                                                                    <input type="checkbox" name="ethnicity_hawaiian_pacific" value="{{ old('ethnicity_hawaiian_pacific') }}"
                                                                           id="ethnicity_hawaiian_pacific" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="needs_interpreter_white">White</label>
                                                                    <input type="checkbox" name="ethnicity_white" value=" {{ old('ethnicity_white') }}"
                                                                           id="ethnicity_white" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="needs_interpreter_unknown">Unknown</label>
                                                                    <input type="checkbox" name="ethnicity_unknown" value="{{ old('ethnicity_unknown') }}"
                                                                           id="ethnicity_unknown" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="col-md-12"><!-----Case Managers starts--->
                                                        <div class="form-group">
                                                            <label for="middle_name">Case Managers: </label>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <label class="font-normal" for="middle_name">Clinical Care Manager: </label>
                                                                </div>
                                                                <div class="col">
                                                                    <select name="clicnical_manager" id="clicnical_manager"
                                                                            class="form-control s ou clinician-drop-down" value="{{ old('clicnical_manager') }}">
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
                                                                            class="form-control s ou case-manager-drop-down" value="{{ old('case_manager') }}">
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
                                                                            class="form-control s ou oasis-assign-drop-down" value="{{ old('oasis_assigned_manager') }}">
                                                                        <option value="">--- Select ---</option>
                                                                        <option value="M">clinical_manager</option>
                                                                        <option value="F">clinical_manager</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col">
                                                                    <span for="ot_approved">OT Approved by: </span>
                                                                </div>
                                                                <div class="col">
                                                                    <select name="ot_approved" id="ot_approved"
                                                                            class="form-control s ou ot_approved-drop-down" value="{{ old('ot_approved') }}">
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
                                                                            class="form-control s ou pt_approved-drop-down" value="{{ old('pt_approved') }}">
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
                                                                            class="form-control s ou st_approved-drop-down" value="{{ old('st_approved') }}">
                                                                        <option value="">--- Select ---</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-----Case Managers ends--->
                                                </div>
                                            </div>
                        
                                        <div class="row mt-2">
                                            <div class="col-sm-6">
                                                <div class="form-group">
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
                                                            <input type="checkbox" name="nf"
                                                                   id="nf" class="form-control" value="{{ old('nf') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <label class="font-normal" for="skilled_nursing_facility">Skilled nursing facility
                                                                (SNF/TCU)</label>
                                                            <input type="checkbox" name="sn_tuc"
                                                                  id="sn_tuc" class="form-control" value="{{ old('sn_tuc') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <label class="font-normal" for="short_stay_acute">Short-stay acute hospital
                                                                (IPPS)</label>
                                                            <input type="checkbox" name="ipps" id="ipps" class="form-control" value="{{ old('ipps') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <label class="font-normal" for="long_term_care">Long-term care hospital (LTCH)</label>
                                                            <input type="checkbox" name="ltch" id="ltch" class="form-control" value="{{ old('ltch') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <label class="font-normal" for="inpatient_rehailitation">Inpatient rehabilitation
                                                                hospital or unit (IRF)</label>
                                                            <input type="checkbox" name="irf" id="irf"
                                                                   class="form-control" value="{{ old('irf') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <label class="font-normal" for="phyciatric_hospital">Phychiatric hospital or
                                                                unit</label>
                                                            <input type="checkbox" name="phychaitric_hospital_or_unit"
                                                                   id="phychaitric_hospital_or_unit" class="form-control" value="{{ old('phychaitric_hospital_or_unit') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <label for="patient_admission_history_other">Other</label>
                                                            <input type="text" name="history_other"
                                                                   id="history_other" class="form-control" value="{{ old('history_other') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <label class="font-normal" for="patient_discharged">N/A Patient was not discharged from
                                                                any inpatient facility</label>
                                                            <input type="checkbox" name="inpatient_facility"
                                                                   id="inpatient_facility" class="form-control"  value="{{ old('inpatient_facility') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label for="middle_name">Services Requested (Mark all that apply): <span class="text-red">*</span></label>
                                                        <div class="col-sm-3">
                                                            <div class="col">
                                                                <input type="checkbox" name="hha" value="hha" id="hha"
                                                                       class="form-control" value="{{ old('hha') }}">
                                                                <label class="font-normal" for="hha">HHA</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox" name="sn" id="sn"
                                                                       class="form-control" value="{{ old('sn') }}">
                                                                <label class="font-normal" for="sn">SN</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox" name="pt" id="pt"
                                                                       class="form-control" value="{{ old('pt') }}">
                                                                <label class="font-normal" for="pt">PT</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox" name="ot" id="ot"
                                                                       class="form-control" value="{{ old('ot') }}">
                                                                <label class="font-normal" for="ot">OT</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                             <div class="col">
                                                                <input type="checkbox" name="st" id="st"
                                                                       class="form-control" value="{{ old('st') }}">
                                                                <label class="font-normal" for="st">ST</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox" name="msw" value="msw"
                                                                       class="form-control" value="{{ old('msw') }}">
                                                                <label class="font-normal" for="msw">MSW</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox" name="no_ancillary"
                                                                       id="no_ancillary" class="form-control" value="{{ old('no_ancillary') }}">
                                                                <label class="font-normal" for="no_ancillary_services">No ancillary services needed at
                                                                    this time</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="checkbox" name="referrals_complate" 
                                                                       id="referral_completed" class="form-control" value="{{ old('referrals_complate') }}">
                                                                <label class="font-normal" for="referral_completed">Referrals Completed</label>
                                                            </div>
                                                        </div>
                                                            <div class="col-md mt-3">
                                                                <label for="episode_timing_start_date"><span class="text-green">(A1250) Transportation</span></label>
                                                                <div class="form-group">
                                                                    <label for="middle_name">(Has lack of transportation kept you from medical appointments, Mark all that apply):</label>
                                                                    <div class="row mt-2">
                                                                        <div class="col">
                                                                            <input type="checkbox" name="medical_appointment" value="{{ old('medical_appointment') }}" id="medical_appointment"
                                                                            class="form-control">
                                                                            <label class="font-normal" for="hha">Yes, it has kept me from medical appointments</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col">
                                                                            <input type="checkbox" name="non_medical_appointment" value="{{ old('non_medical_appointment') }}" id="non_medical_appointment" 
                                                                            class="form-control">
                                                                            <label class="font-normal" for="hha">Yes, it has kept me from non-medical meetings</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col">
                                                                            <input type="checkbox" name="lack_transportation" value="{{ old('lack_transportation') }}" id="lack_transportation"
                                                                            class="form-control">
                                                                            <label class="font-normal" for="hha">No</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col">
                                                                            <input type="checkbox" name="trans_unable_respond" value="{{ old('trans_unable_respond') }}" id="trans_unable_respond"
                                                                            class="form-control">
                                                                            <label class="font-normal" for="hha">Patient unable to respond</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col">
                                                                            <input type="checkbox" name="trans_declines" value="{{ old('trans_declines') }}" id="trans_declines"
                                                                            class="form-control">
                                                                            <label class="font-normal" for="hha">Patient declines to respond</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                         </div><!------/end of (A1250) Transportation--->
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                       