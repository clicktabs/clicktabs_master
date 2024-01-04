
        <form class="patientEmergencyPreparednessForm" name="patientEmergencyPreparednessForm" id="patientEmergencyPreparednessForm" method="post">
            @csrf
            <div class="vt card mb-2 tabcontent p-2" id="emergency">
                <div class="card-header text-center !bg-[#4133BF]">
                    <h2 class="gh text-slate-800 text-white">Emergency Preparedness</h2>
                </div>
                 <div class="row mt-2">
                    <div class="col">
                        <label for="middle_name">Emergency Contacts and or/ Next of Kin (if applicable) </label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="emergency_first_name">Name: <span class="text-red">*</span></label>
                        <input id="emergency_first_name" type="text" class="form-control s ou" name="emergency_first_name" value="{{ old('emergency_first_name') }}">
                    </div>
                    <div class="col">
                        <label for="emergency_relationship_patient">Relationship to patient</label>
                        <select name="emergency_relationship_patient" id="emergency_relationship_patient">
                        <option value="">Select Relationship</option>
                        <option value="mother">Mother</option>
                        <option value="father">Father</option>
                        <option value="son">Son</option>
                        <option value="dougther">Daugther</option>
                        <option value="brother">Brother</option>
                        <option value="sister">Sister</option>
                        <option value="parent">Parent</option>
                        <option value="family member">Family Member</option>
                        </select>
                    </div>
                    <div class="col relative">
                        <label for="emergency_patient_address">Address:</label>
                        <input id="emergency_patient_address" type="text" class="form-control s ou"
                               name="emergency_patient_address" value="{{ old('emergency_patient_address') }}">
                        <div id="pa_results" class="absolute top-[65px] bg-white"></div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col">
                        <label for="emergency_patient_city">City:</label>
                        <input id="emergency_patient_city" type="text" placeholder="Enter City Name" class="form-control s ou"
                               name="emergency_patient_city" value="{{ old('emergency_patient_city') }}">
                    </div>
                    <div class="form-group col">
                        <div class="form-group">
                            <label for="emergency_patient_state">State: </label>
                            <input id="emergency_patient_state" type="text" placeholder="Enter State Name"
                                   class="form-control s ou" name="emergency_patient_state"
                                   value="{{ old('emergency_patient_state') }}">
                        </div>
                    </div>
                    <div class="form-group col">
                        <div class="form-group">
                            <label for="emergency_patient_zip">Zip: </label>
                            <input id="emergency_patient_zip" type="text" placeholder="Enter Zipcode" class="form-control s ou"
                                   name="emergency_patient_zip" value="{{ old('emergency_patient_zip') }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-md-4">
                        <label for="emergency_patient_phone">Phone:</label>
                        <input id="emergency_patient_phone" type="text" placeholder="Enter Phone Number"
                               class="form-control s ou" name="emergency_patient_phone"
                               value="{{ old('emergency_patient_phone') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <label for="emergency_alternate_phone">Alternate Phone: </label>
                            <input id="emergency_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                                   class="form-control s ou" name="emergency_alternate_phone"
                                   value="{{ old('emergency_alternate_phone') }}">
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
                               name="emergency_alternate_first_name" value="{{ old('emergency_alternate_first_name') }}">
                    </div>
                    <div class="col">
                        <label for="emergency_relationship_to_patient">Relationship to patient</label>
                        <select name="emergency_relationship_to_patient" id="emergency_relationship_to_patient">
                        <option value="">Select Relationship</option>
                        <option value="mother">Mother</option>
                        <option value="father">Father</option>
                        <option value="son">Son</option>
                        <option value="dougther">Daugther</option>
                        <option value="brother">Brother</option>
                        <option value="sister">Sister</option>
                        <option value="parent">Parent</option>
                        <option value="family member">Family Member</option>
                        </select>
                    </div>
                    <div class="col relative">
                        <label for="emergency_relationship_address">Address:</label>
                        <input id="emergency_relationship_address" type="text" class="form-control s ou"
                               name="emergency_relationship_address" value="{{ old('emergency_relationship_address') }}">
                        <div id="aa_results" class="absolute top-[65px] bg-white"></div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col">
                        <label for="emergency_relationship_city">City:</label>
                        <input id="emergency_relationship_city" type="text" placeholder="Enter City Name"
                               class="form-control s ou" name="emergency_relationship_city"
                               value="{{ old('emergency_relationship_city') }}">
                    </div>
                    <div class="form-group col">
                        <div class="form-group">
                            <label for="emergency_relationship_state">State: </label>
                            <input id="emergency_relationship_state" type="text" placeholder="Enter City Name"
                                   class="form-control s ou" name="emergency_relationship_state"
                                   value="{{ old('emergency_relationship_state') }}">
                        </div>
                    </div>
                    <div class="form-group col">
                        <div class="form-group">
                            <label for="emergency_relationship_zip">Zip: </label>
                            <input id="emergency_relationship_zip" type="text" placeholder="Enter Zipcode"
                                   class="form-control s ou" name="emergency_relationship_zip"
                                   value="{{ old('emergency_relationship_zip') }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="form-group col-md-4">
                        <label for="emergency_relationship_phone">Phone:</label>
                        <input id="emergency_relationship_phone" type="text" placeholder="Enter Phone Number"
                               class="form-control s ou" name="emergency_relationship_phone"
                               value="{{ old('emergency_relationship_phone') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <label for="emergency_relationship_alternate_phone">Alternate Phone: </label>
                            <input id="emergency_relationship_alternate_phone" type="text" placeholder="Enter Alternate Phone"
                                   class="form-control s ou" name="emergency_relationship_alternate_phone"
                                   value="{{ old('emergency_relationship_alternate_phone') }}">
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="row mt-3">
                    <div class="col">
                        <label for="middle_name"><span>Emergency Preparedness<span class="text-red">*</span>:</span></label>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <span for="emergency_preparedness">1. Life-threaten and requires ongoing medical treatment (i.e., oxygen dependent). A backup oxygen tank should be requested from supplier. Proceed to hospital (with supplies) if not able to manage your care.</span>
                            <input type="checkbox" name="emergency_preparedness[]" value="1" id="emergency_preparedness"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <span for="emergency_life_threatening">2. Not Life-threatening but would suffer severe adverse effects from interruption of services (i.e., daily insulin, IV medications, Sterile wound care of a wound with large amount of drainage).</span>
                            <input type="checkbox" name="emergency_preparedness[]" value="2" id="emergency_life_threatening"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <span for="emergency_proponed_24_hours">3. Visits could be proponed 24-48 hours without adverse effect (i.e., new insulin dependent diabetic able to self-inject, sterile wound care with a minimal amount to no drainage).</span>
                            <input type="checkbox" name="emergency_preparedness[]" value="3" id="emergency_proponed_24_hours"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <span for="emergency_proponed_72_hours">4. Visit could postpone 72-96 hours without adverse effects (i.e., post-op with no open wound, anticipated discharge within the next 10-14 days, routine catheter changes).</span>
                            <input type="checkbox" name="emergency_preparedness[]" value="4" id="emergency_proponed_72_hours"
                                   class="form-control">
                        </div>
                    </div>
        
                    <div class="row mt-2">
                        <div class="col">
                            <span for="emergency_transportation">Has transportation & assistance of family </span>
                            <input type="checkbox" name="emergency_preparedness[]" value="5" id="emergency_transportation"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <span for="emergency_neighbor">Neighbor.</span>
                            <input type="checkbox" name="emergency_preparedness[]" value="6" id="emergency_neighbor" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2 mb-5">
                        <div class="col">
                            <span for="emergency_caregiver">Caregiver.</span>
                            <input type="checkbox" name="emergency_preparedness[]" value="7" id="emergency_caregiver" class="form-control">
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
                    <div class="row mt-3">
                        <div class="col">
                            <label>Medicaid Waiver:</label>
                        </div>
                        <div class="col">
                            <input id="emergency_medicaid" type="text" class="form-control s ou" name="coordination_of_care['medicaid_waiver']['emergency_medicaid']" />
                        </div>
                        <div class="col">
                            <input id="emergency_medicaid_1" type="text" class="form-control s ou" name="coordination_of_care['medicaid_waiver']['emergency_medicaid_1']" />
                        </div>
                        <div class="col">
                            <input id="emergency_medicaid_2" type="text" class="form-control s ou" name="coordination_of_care['medicaid_waiver']['emergency_medicaid_2']" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label>Medicare:</label>
                        </div>
                        <div class="col">
                            <input id="emergency_medicare_1" type="text" class="form-control s ou" name="coordination_of_care['medicare']['emergency_medicare_1']" />
                        </div>
                        <div class="col">
                            <input id="emergency_medicare_2" type="text" class="form-control s ou" name="coordination_of_care['medicare']['emergency_medicare_2']" />
                        </div>
                        <div class="col">
                            <input id="emergency_medicare_3" type="text" class="form-control s ou" name="coordination_of_care['medicare']['emergency_medicare_3']" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label>Dialysis:</label>
                        </div>
                        <div class="col">
                            <input id="emergency_dialysis" type="text" class="form-control s ou" name="coordination_of_care['dialysis']['emergency_dialysis']" />
                        </div>
                        <div class="col">
                            <input id="emergency_dialysis_1" type="text" class="form-control s ou" name="coordination_of_care['dialysis']['emergency_dialysis_1']" />
                        </div>
                        <div class="col">
                            <input id="emergency_dialysis_2" type="text" class="form-control s ou" name="coordination_of_care['dialysis']['emergency_dialysis_2']" />
                        </div>
                    </div>
        
        
                    <div class="row mt-3">
                        <div class="col">
                            <label>Wound Care Clinic:</label>
                        </div>
                        <div class="col">
                            <input id="emergency_wound_care" type="text" class="form-control s ou" name="coordination_of_care['wound_care_clinic']['emergency_wound_care']"/>
                        </div>
                        <div class="col">
                            <input id="emergency_wound_care_1" type="text" class="form-control s ou" name="coordination_of_care['wound_care_clinic']['emergency_wound_care_1']" />
                        </div>
                        <div class="col">
                            <input id="emergency_wound_care_2" type="text" class="form-control s ou" name="coordination_of_care['wound_care_clinic']['emergency_wound_care_2']" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label>Out-Patient Rehab:</label>
                        </div>
                        <div class="col">
                            <input id="emergency_patient_rehab" type="text" class="form-control s ou" name="coordination_of_care['out_patient_rehab']['emergency_patient_rehab']" />
                        </div>
                        <div class="col">
                            <input id="emergency_patient_rehab_1" type="text" class="form-control s ou" name="coordination_of_care['out_patient_rehab']['emergency_patient_rehab_1']" />
                        </div>
                        <div class="col">
                            <input id="emergency_patient_rehab_2" type="text" class="form-control s ou" name="coordination_of_care['out_patient_rehab']['emergency_patient_rehab_2']" />
                        </div>
                    </div>
                </div>
                <div class="col pb-4 pl-3">
                    <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
                </div>
            </div>
        </form>

