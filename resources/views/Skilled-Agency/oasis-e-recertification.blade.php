@extends('Skilled-Agency.my-task-layout')

@section('content')
    <style>:root{--bs-border-width:1px;--bs-border-color:#ccc;}@media print{nav{display:none}.h1,h1{font-size:1.9rem}.h2,h2{font-size:1.5rem}body{-webkit-print-color-adjust:exact;print-color-adjust:exact}h2.d-md-flex{display:flex!important}h2>.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}.row>.col-auto>.input-group>.form-control{max-width:130px}}.bg-secondary-subtle{background-color:#eee!important}.navbar-expand-lg .navbar-nav{flex-direction:row;column-gap:20px}body{background-color:#fff}.nm-3{margin-left:-15px!important;margin-right:-15px!important}.nmt-1{margin-top:-1px!important}.nmb-1{margin-bottom:-1px!important}.labels-mt-1 label{margin-top:5px}.clean-input-group{align-items:flex-end;column-gap:10px}.clean-input-group .form-control,.clean-input-group .input-group-text{border-radius:0;border:0;padding:0;background: none;}.clean-input-group .form-control{border-bottom:var(--bs-border-width) solid var(--bs-border-color)}.clean-input-group .form-control:focus{border-color:transparent;box-shadow:none;border-bottom:var(--bs-border-width) solid #000}#oasis-e-form img{max-width:100%}#oasis-e-form p:last-child{margin-bottom:0}#oasis-e-form .form-fields-wrapper{border:2px solid var(--bs-border-color);border-radius:15px;overflow:hidden}#oasis-e-form .table td{padding-left:1rem;padding-right:1rem}#oasis-e-form .table td>.d-block{margin:5px 0}#oasis-e-form .table td>.d-block .form-check-input,#oasis-e-form td table td .form-check-input{margin-right:5px}#oasis-e-form .table:not(.default-td)>:not(caption)>*>*{background-color:transparent;padding:1rem}#oasis-e-form h3{font-size:1.4em;font-weight:700}#oasis-e-form h4{font-weight:700;margin:0;font-size:1.2em}#oasis-e-form h5{font-size:1em;font-weight:700}#oasis-e-form table h5,#oasis-e-form td table{margin:0}#oasis-e-form label.form-check-label{font-weight:500}#oasis-e-form .labels-group label{margin-right:10px}@media (max-width:1199px){#oasis-e-form td table.table-bordered td{display:table-cell}#oasis-e-form td table.stack-padding td{padding-left:10px;padding-right:10px}}@media (max-width:991px){#oasis-e-form .table td[data-title]::before{content:attr(data-title);display:block;font-weight:700;text-align:center}#oasis-e-form .labels-group{margin-top:5px}.mt-md-2{margin-top:10px!important}}@media (min-width:992px){.nmt-lg-1{margin-top:-1px!important}.border-lg-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}}@media (min-width:768px){.border-md-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}}.form-holder h2>span{padding:5px 15px}@media (max-width:1199px){.d-block-on-xl{display: block!important;width: 100% !important;}}@media (max-width:767px){.form-holder h2>span{display:block}#oasis-e-form .table-responsive{max-width:calc(540px - var(--bs-gutter-x))}}@media (max-width:575px){#oasis-e-form .table-responsive{max-width:calc(100vw - var(--bs-gutter-x))}}table tr th, table tr td {white-space: wrap!important;}.table-py-8 td{padding-top: 8px!important;padding-bottom: 8px!important;}.table-py-5 td{padding-top: 5px!important;padding-bottom: 5px!important;}.border-1{border: 1px solid var(--bs-border-color)!important;}</style>

    <div class="form-holder">
        <form action="{{route('oasis-e-recertification.store')}}" method="post" id="oasis-e-form">
            @csrf

            <input type="hidden" name="schedule_id" value="{{request('data')}}">

            <!-- SectionA -->
            <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section A</span> <span>Administrative Information</span></h2>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                        <tbody>
                    <!-- M0080 -->
                    <tr>
                        <td class="bg-secondary-subtle">
                            <b>M0080. Discipline of Person Completing Assessment</b>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="RN" class="form-check-input"> 1. <b>RN</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="PT" class="form-check-input"> 2. <b>PT</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="SLP/ST" class="form-check-input"> 3. <b>SLP/ST</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="OT" class="form-check-input"> 4. <b>OT</b></label></div>
                        </td>
                        </tr>
                        <tr><td class="border-0"></td></tr>

                        <!-- M0090 -->
                        <tr>
                        <td class="bg-secondary-subtle">
                            <b>M0090. Date Assessment Completed</b>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                                <div class="col-auto">
                                    <div class="input-group">
                                    <label class="input-group-text">Month</label>
                                    <input type="text" class="monthAssessment" name="monthAssessment" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="input-group">
                                    <label class="input-group-text">Day</label>
                                    <input type="text" class="dayAssessment" name="dayAssessment" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="input-group">
                                    <label class="input-group-text">Year</label>
                                    <input type="text" class="yearAssessment" name="yearAssessment" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                        <tr><td class="border-0"></td></tr>

                        <tr><td class="py-2">
                            <span style="font-weight: 500;">Type of Visit</span>
                            <label class="form-check-label ms-2"><input type="radio" name="TypeOfVisit" class="form-check-input" value="Skilled"> Skilled</label>
                            <label class="form-check-label ms-2"><input type="radio" name="TypeOfVisit" class="form-check-input" value="Supervisory"> Skilled & Supervisory</label>
                            <label class="form-check-label ms-2"><input type="radio" name="TypeOfVisit" class="form-check-input" value="Othersupervisory"> Other</label>
                            <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                <input type="text" id="" name="OtherTypeOfVisit" class="form-control">
                            </div>
                        </td></tr>
                        <tr><td class="border-0"></td></tr>

                        <!-- M0100 -->
                        <tr>
                        <td class="bg-secondary-subtle">
                            <b>M0100. This Assessment is Currently Being Completed for the Following Reason</b>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p class="mb-1"><b>Follow-Up</b></p>
                            <div class="ps-3 mb-1">
                                <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Recertification" value="1" class="form-check-input"> 4. <b>Recertification (follow-up) reassessment</b></label></div>
                                <div class="d-block"><label class="form-check-label"><input type="checkbox" name="Other_followup" value="1" class="form-check-input"> 5. <b>Other follow-up</b></label></div>
                            </div>

                            <p class="mb-1 mt-1"><b>If M0100. coded 5</b>, explain reason:</p>
                            <textarea name="M0100_explain" id="" cols="30" rows="1" class="form-control"></textarea>
                        </td>
                        </tr>
                        <tr><td class="border-0"></td></tr>

                        <!-- M0110 -->
                        <tr>
                            <td class="bg-secondary-subtle">
                            <strong>M0110. Episode Timing</strong>
                            <p>Is the Medicare home health payment episode, for which this assessment will define a case mix group, an “early” episode or a “later” episode in the patient’s current sequence of adjacent Medicare home health payment episodes?</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="labels-group">
                            <label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input" value="Early"> 1. Early</label>
                            <label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input" value="Later"> 2. Later</label>
                            <label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input" value="UKUnknown"> UK Unknown</label>
                            <p><label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input" value="NotApplicable"> NA &nbsp; <b>Not Applicable:</b> No Medicare case mix group to be defined by this assessment.</label></p>
                            </td>
                        </tr>
                        <tr><td class="border-0"></td></tr>

                        <!-- PATIENT CONTACTS/CAREGIVERS -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>PATIENT CONTACTS/CAREGIVERS</b></td>
                        </tr>
                        <tr>
                            <td class="p-0 border-0">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="width: 50%;" class="d-block-on-xl">
                                            <div>
                                                <b>Document any changes in information since the last OASIS assessment. No change since last assessment. Contact information confirmed this vist with:</b>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Patient" value="1">Patient</label>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Caregiver" value="1">Caregiver</label>
                                            </div>

                                            <div class="mt-2">
                                                <b>Present during this visit:</b>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Family_member" value="1">Family member(s)</label>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Representative" value="1">Representative</label>
                                            </div>
                                            <div class="mt-1">
                                                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="familyCaregiver" value="1">Caregiver(s)</label>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="caregiver_other" value="1">Other:</label>
                                                <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                    <input type="text" name="caregiver_other_1" id="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-1">
                                                <b>Does the patient have a representative?</b>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="patientRepresentative" value="No">No</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="patientRepresentative" value="Yes">Yes</label>
                                            </div>

                                            <div class="mt-1">
                                                <span>If yes, is the person:</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="representativePerson" value="Court">Court declared</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="representativePerson" value="selected">Patient selected</label>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Representative Name:</label>
                                                    <input type="text" name="representativePerson_1" id="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <span>Relationship:</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship" value="Family">Family</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship" value="Friend">Friend</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship" value="Other">Other:</label>
                                                <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                    <input type="text" name="relationship_other_1" id="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Address:</label>
                                                    <input type="text" id="" name="address" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2 d-flex gap-1">
                                                <div class="input-group">
                                                    <label class="input-group-text">City:</label>
                                                    <input type="text" id="" name="city" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">State:</label>
                                                    <input type="text" id="" name="state" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">ZIP Code:</label>
                                                    <input type="text" id="" name="zip" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Phone:</label>
                                                    <input type="text" id="" name="phone" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Email:</label>
                                                    <input type="email" id="" name="email" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <b>Does the patient have a representative?</b>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="patient_1" value="patient">N/A</label>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="patientrepresentative_1" value="patientrepresentative">None available</label>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text"><b>Caregiver Name:</b></label>
                                                    <input type="text" id="" name="caregiverName" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <span>Relationship:</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_1" value="Family_1">Family</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_1" value="Friend_1">Friend</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_1" value="Other_1">Other:</label>
                                                <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                    <input type="text" name="caregiverName_1" id="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Address:</label>
                                                    <input type="text" id="" name="address_1" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2 d-flex gap-1">
                                                <div class="input-group">
                                                    <label class="input-group-text">City:</label>
                                                    <input type="text" id="" name="city_1" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">State:</label>
                                                    <input type="text" id="" name="state_1" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">ZIP Code:</label>
                                                    <input type="text" id="" name="zip_1" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Phone:</label>
                                                    <input type="text" id="" name="phone_1" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Email:</label>
                                                    <input type="email" id="" name="email_1" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <span>Paid service other than home health staff:</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="PaidService" value="No">No</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="PaidService" value="Yes">Yes, If yes,</label>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Company name:</label>
                                                    <input type="text" id="" name="companyName" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Phone number:</label>
                                                    <input type="text" id="" name="phoneNumber" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Contact name:</label>
                                                    <input type="text" id="" name="contactName" class="form-control">
                                                </div>
                                            </div>
                                        </td>

                                        <td class="d-block-on-xl">
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="lastAssessment">No change since last assessment.</label>
                                            </div>

                                            <div class="mt-2">
                                                <h4>EMERGENCY PREPAREDNESS</h4>
                                                <h4 class="mb-2">&#8903; &#8903; &#8903; &#8903; PRIORITY CODE &#8903; &#8903; &#8903; &#8903;</h4>
                                                <input type="text" name="PRIORITY" class="form-control">
                                                <p class="mt-1"><b>See page 2 for Advance Directives</b></p>
                                            </div>

                                            <div class="mt-2">
                                                <span>Emergency Contact:</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="EmergencyContact" value="Representative">Representative</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="EmergencyContact" value="Caregiver">Caregiver</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="EmergencyContact" value="IfOther">Other, if “Other”</label>
                                            </div>

                                            <div class="mt-2">
                                                <label class="form-check-label mb-1"><b>Emergency Contact Name:</b></label>
                                                <input type="text" name="EmergencyContact_1" class="form-control">
                                            </div>

                                            <div class="mt-2">
                                                <span>Relationship:</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_2" value="Family">Family</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_2" value="Friend">Friend</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_2" value="Other">Other:</label>
                                                <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                    <input type="text" name="relationship_2_other" id="relationship_1" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Address:</label>
                                                    <input type="text" id="" name="address_2" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2 d-flex gap-1">
                                                <div class="input-group">
                                                    <label class="input-group-text">City:</label>
                                                    <input type="text" id="" name="city_2" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">State:</label>
                                                    <input type="text" id="" name="state_2" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">ZIP Code:</label>
                                                    <input type="text" id="" name="zip_2" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Phone:</label>
                                                    <input type="text" id="" name="phone_2" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Email:</label>
                                                    <input type="email" id="" name="email_2" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text"><b>Caregiver Name:</b></label>
                                                    <input type="text" id="" name="caregiver_2" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <span>Relationship:</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_3" value="Family">Family</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_3" value="Friend">Friend</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="relationship_3" value="Other">Other:</label>
                                                <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                    <input type="text" name="relationship_3_other" id="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Address:</label>
                                                    <input type="text" id="address_3" name="" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2 d-flex gap-1">
                                                <div class="input-group">
                                                    <label class="input-group-text">City:</label>
                                                    <input type="text" id="" name="city_3" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">State:</label>
                                                    <input type="text" id="" name="state_3" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <label class="input-group-text">ZIP Code:</label>
                                                    <input type="text" id="" name="zip_3" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Phone:</label>
                                                    <input type="text" id="" name="phone_3" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Email:</label>
                                                    <input type="email" id="" name="email_3" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <span>If the caregiver(s) are not available, is there anyone who could be contacted in a critical situation?</span>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="criticalSituation" value="No">No</label>
                                                <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="criticalSituation" value="Yes">Yes, If yes,</label>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Name:</label>
                                                    <input type="text" id="" name="name_4" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <div class="input-group">
                                                    <label class="input-group-text">Phone number:</label>
                                                    <input type="text" id="" name="phoneNumber_4" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Patient Name - Last, First, Middle Initial</p>
                                            <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                                                <div class="col-auto">
                                                    <div class="input-group">
                                                    <label class="input-group-text">Last</label>
                                                    <input type="text" id="" name="patientLast" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="input-group">
                                                    <label class="input-group-text">First</label>
                                                    <input type="text" id="" name="patientFirst" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="input-group">
                                                    <label class="input-group-text">Middle Initial</label>
                                                    <input type="text" id="" name="patientInitial" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0">ID #</p>
                                            <input type="text" name="pid" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <label class="input-group-text">Patient Name</label>
                                                <input type="text" id="" name="patientName_5" class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <label class="input-group-text">ID #</label>
                                                <input type="text" id="patientName_ID" name="patientID" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- SUPPORTIVE ASSISTANCE/CARE PREFERENCES SUMMARY -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>SUPPORTIVE ASSISTANCE/CARE PREFERENCES SUMMARY</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <b>Document any changes in information since the last OASIS assessment.</b>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="OASISassessment" value="1"> No change since last assessment.</label>
                                </div>

                                <div class="mt-2">
                                    <span>Caregiver(s) assist with ADLs, IADLs and/or medical cares?</span>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="IADLs" value="No"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="IADLs" value="Yes"> Yes, If yes,</label>
                                    <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                        <input type="text" id="" name="IADLsIfYes" class="form-control">
                                    </div>
                                </div>

                                <div class="mt-1">
                                    <span>Type(s) of assistance provided:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="No_assistance" value="1"> No assistance</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Meals" value="1"> Meals</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="ADLs_ADLs" value="1">ADLs ADLs</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Transportation" value="1"> Transportation</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="SupervisionSupport" value="1"> Supervision/Support</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Medications" value="1"> Medications</label>
                                    <br>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="Home_maintenance" value="1"> Home Maintenance</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="OtherAssistance" value="1"> Other:</label>
                                    <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                        <input type="text" name="Home_maintenance_1" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Caregiver(s) willing to assist?</span>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="WillingToAssist" value="Yes"> Yes</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="WillingToAssist" value="No"> No</label>
                                    <label class="form-check-label ms-2 mb-1"><input type="radio" class="form-check-input" name="WillingToAssist" value="Unknown"> Unknown If no or unknown, explain:</label>
                                    <textarea id="" name="unknowntextarea" cols="30" rows="1" class="form-control"></textarea>
                                </div>

                                <div class="mt-2">
                                    <span>Does the caregiver need training to assist the patient?</span>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="AssistThePatient" value="Yes"> Yes</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="AssistThePatient" value="No"> No</label>
                                    <label class="form-check-label ms-2 mb-1"><input type="radio" class="form-check-input" name="AssistThePatient" value="Unknown"> Unknown If no or unknown, explain:</label>
                                    <textarea name="unknowntextarea_1" id="" cols="30" rows="1" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div>
                                    <span>List below the hours and days a caregiver is available to provide cares.</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" name="noAssistance" class="form-check-input" value="1"> No assistance</label>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <tr class="text-center" style="font-weight: 500;">
                                            <th></th>
                                            <th>SUNDAY</th>
                                            <th>MONDAY</th>
                                            <th>TUESDAY</th>
                                            <th>WEDNESDAY</th>
                                            <th>THURSDAY</th>
                                            <th>FRIDAY</th>
                                            <th>SATURDAY</th>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 500;" class="align-middle">AM HOURS</td>
                                            <td><input type="time" name="sundayAm" id="" class="form-control"></td>
                                            <td><input type="time" name="mondayAm" id="" class="form-control"></td>
                                            <td><input type="time" name="tuesdayAM"  id="" class="form-control"></td>
                                            <td><input type="time" name="wednesdayAM"  id="" class="form-control"></td>
                                            <td><input type="time" name="thursdayAM"  id="" class="form-control"></td>
                                            <td><input type="time" name="fridayAM"  id="" class="form-control"></td>
                                            <td><input type="time" name="saturdayAM"  id="" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 500;" class="align-middle">PM HOURS</td>
                                            <td><input type="time" name="sundayPm"  id="" class="form-control"></td>
                                            <td><input type="time" name="mondayPm"  id="" class="form-control"></td>
                                            <td><input type="time" name="tuesdayPm" id="" class="form-control"></td>
                                            <td><input type="time" name="wednesdayPm"  id="" class="form-control"></td>
                                            <td><input type="time" name="thursdayPm"  id="" class="form-control"></td>
                                            <td><input type="time" name="fridayPm" id="" class="form-control"></td>
                                            <td><input type="time" name="saturdayPm" id="" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 500;" class="align-middle">NIGHTS</td>
                                            <td><input type="time" name="sundayNights" id="" class="form-control"></td>
                                            <td><input type="time" name="mondayNights"  id="" class="form-control"></td>
                                            <td><input type="time" name="tuesdayNights"  id="" class="form-control"></td>
                                            <td><input type="time" name="wednesdayNights" id="" class="form-control"></td>
                                            <td><input type="time" name="thursdayNights"  id="" class="form-control"></td>
                                            <td><input type="time" name="fridayNights"  id="" class="form-control"></td>
                                            <td><input type="time" name="saturdayNights"  id="" class="form-control"></td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <!-- ADVANCE DIRECTIVES -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>ADVANCE DIRECTIVES</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <span>Does the patient have an Advance Directives order?</span>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="DirectivesOrder" value="No"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="DirectivesOrder" value="Yes"> Yes</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="DirectivesOrder" value="Nochange"> No change since last assessment.</label>
                                </div>

                                <div class="mt-2">
                                    <span>Since the last OASIS assessment, the patient:</span>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="OASISassessment_2" value="1"> obtained</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="OASISassessment_2" value="2"> changed the item(s) checked below:</label>
                                    <div class="ms-3 mt-1">
                                        <div>
                                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="advanceDirectives" value="1"> An order for Advance Directives</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="livingWill" value="1"> Living Will</label>
                                        </div>
                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="doCardiopulmonary" value="1"> Do Cardiopulmonary Resuscitation (CPR)</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="donotResuscitate" value="1"> Do Not Resuscitate Order (DNR)</label>
                                        </div>
                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="donotIntubate" value="1"> Do Not Intubate Order (DNI)</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="noArtificial" value="1"> No Artificial Nutrition and Hydration</label>
                                        </div>
                                        <div class="mt-2">
                                            <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                                                <div class="col-auto">
                                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="powerofAttorney" value="1"> Medical/Durable Power of Attorney Name:</label>
                                                    <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                        <input type="text" name="powerofAttorney_1" id="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="form-check-label">Phone #:</label>
                                                    <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                        <input type="text" name="powerPhone" id="" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                                                <div class="col-auto">
                                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="FinancialPower" value="1"> Financial Power of Attorney Name:</label>
                                                    <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                        <input type="text" id="" name="financialPowerName" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <label class="form-check-label">Phone #:</label>
                                                    <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                        <input type="text" id="" name="phonefinancialPower" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="stateSpecificform" class="form-check-input" value="1"> State specific form(s):</label>
                                            <div class="clean-input-group d-inline-flex ms-1" style="width: 50%;">
                                                <input type="text" id="" name="stateSpecificform_1" class="form-control">
                                            </div>
                                            <div class="ms-2 mt-2">
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="copiesonFile" value="1"> Copies on file with:</label>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="pcp" value="1"> PCP</label>
                                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="copiesonFile_other" value="1"> Other:</label>
                                                <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                                    <input type="text" name="copiesonFile_other_1" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <label class="form-label mb-1" style="font-weight: 500;">Comments:</label>
                                    <textarea name="Comments" id="" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>

                        <!-- SENSORY STATUS -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>SENSORY STATUS</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <span>Patient wears:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="patientWears"> Glasses</label>

                                    &nbsp; &nbsp; &nbsp;
                                    <span>Contacts:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Contacts" > R</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Contacts_1" > L</label>

                                    &nbsp; &nbsp; &nbsp;
                                    <span>Prosthesis:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="prosthesis_R" > R</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="prosthesis_L" > L</label>

                                    &nbsp; &nbsp; &nbsp;
                                    <span>Hearing aid:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="hearingaid_R" > R</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="hearingaid_L" > L</label>

                                    &nbsp; &nbsp; &nbsp;
                                    <label class="form-check-label ms-2">Other:</label>
                                    <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                        <input type="text" id="" name="hearingaid_Other" class="form-control">
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Select all areas that are affected:</span>
                                    <div class="ms-3">
                                        <div>
                                            <span>What is the patient’s structural (sensory) impairment:</span>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Eyes"> Eyes</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input"  value="1" name="Ears" > Ears</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input"  value="1" name="Nose" > Nose</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input"  value="1" name="Mouth" > Mouth</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input"  value="1" name="Throat" > Throat</label>
                                        </div>

                                        <div class="mt-1">
                                            <span>What is the functional impairment:</span>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Sight" > Sight</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Hearing" > Hearing</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Smell"> Smell</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Taste" > Taste</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Throat_2"> Throat</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <label class="form-label mb-1">What is the activity limitation (which ADL(s)/IADL(s) do they need help with to safely complete)?</label>
                                    <textarea name="activityLimitation" id="" cols="30" rows="2" class="form-control"></textarea>
                                </div>

                                <div class="mt-2">
                                    <label class="form-label mb-1">How do the skills of a nurse or therapist address the specific structural and/or functional impairment(s) and activity limitation(s) cited in steps above?</label>
                                    <textarea name="therapist" id="" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>

                        <!-- NEUROLOGICAL STATUS -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>NEUROLOGICAL STATUS</b></td>
                        </tr>
                        <tr>
                            <td class="p-0">
                                <table class="table table-borderless align-middle default-td">
                                    <tr>
                                    <td colspan="3">
                                        <label class="form-check-label"><input type="checkbox" name="Problem" class="form-check-input" value="1"><b>No Problem</b></label>
                                        <br>
                                        <label for="" class="form-label fw-medium">Diagnosed disorder(s) of neurological system (type):</label>
                                        <textarea name="neurologicalSystem" id="" cols="30" rows="2" class="form-control"></textarea>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" name="traumaticBrain" class="form-check-input" value="1">History of a traumatic brain injury</label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Date of injury:</span>
                                            <input type="date" id="" name="dateofInjury" class="form-control">
                                        </label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">(Type):</span>
                                            <input type="text" name="type" id="" class="form-control">
                                        </label>
                                    </td>
                                    </tr>
                                    <tr>  
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" name="headaches" class="form-check-input" value="1">History of headaches</label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Date of last headache:</span>
                                            <input type="date" name="Lastheadaches" class="form-control">
                                        </label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">(Type):</span>
                                            <input type="text" name="lastHeadachestype" id="" class="form-control">
                                        </label>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>
                                        <label class="form-check-label"><input type="checkbox" name="seizures" class="form-check-input" value="1">History of seizures</label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Date of last seizure:</span>
                                            <input type="date" name="lastSeizure" class="form-control">
                                        </label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">(Type):</span>
                                            <input type="text" name="lastSeizuretype" id="" class="form-control">
                                        </label>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Aphasic" class="form-check-input">Aphasic:</label>
                                            <label class="form-check-label ms-3"><input type="checkbox" value="1" name="Receptive" class="form-check-input">Receptive</label>
                                            <label class="form-check-label ms-3"><input type="checkbox" value="1" name="Expressive" class="form-check-input">Expressive</label>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="3" class="labels-group">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="Tremors"  class="form-check-input">Tremors:</label>
                                        <label class="form-check-label"><input type="checkbox" value="1" name="atRest" class="form-check-input">At Rest</label>
                                        <label class="form-check-label"><input type="checkbox" value="1" name="voluntaryMovement"  class="form-check-input">With voluntary movement</label>
                                        <label class="form-check-label"><input type="checkbox" value="1" name="Continuous" class="form-check-input">Continuous</label>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">
                                        <label class="form-check-label"><input type="checkbox" name="Spasms" class="form-check-input" value="1"> Spasms (for example; back, bladder, legs) Location:</label>
                                        <div class="clean-input-group d-inline-flex ms-1" style="width: auto;">
                                            <input type="text" name="Spasm" class="form-control">
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="3">
                                        <div class="row row-flex gy-2">
                                            <div class="col-auto labels-group">
                                                <span class="fw-medium me-2">Dominant side:</span>
                                                <label class="form-check-label"><input type="radio" name="dominant_side" value="Right" class="form-check-input">Right</label>
                                                <label class="form-check-label"><input type="radio" name="dominant_side" value="Left" class="form-check-input">Left</label>
                                            </div>
                                            <div class="col-auto labels-group">
                                                <label class="form-check-label"><input type="checkbox" name="sideHemiplegia" class="form-check-input" value="1">Hemiplegia:</label>
                                                <label class="form-check-label"><input type="radio" name="Hemiplegia" class="form-check-input" value="Right">Right</label>
                                                <label class="form-check-label"><input type="radio" name="Hemiplegia" class="form-check-input" value="Left">Left</label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="form-check-label"><input type="checkbox" name="Paraplegia" class="form-check-input" value="1">Paraplegia</label>
                                            </div>
                                            <div class="col-auto">
                                                <label class="form-check-label"><input type="checkbox" name="Quadriplegia" class="form-check-input" value="1">Quadriplegia/Tetraplegia</label>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td colspan="3" class="labels-group">
                                        <span class="fw-medium me-2">Does the patient's condition affect functional ability and/or safety?</span>
                                        <label class="form-check-label"><input type="radio" name="pcafa" class="form-check-input" value="No">No</label>
                                        <label class="form-check-label"><input type="radio" name="pcafa" class="form-check-input" value="Yes">Yes</label>
                                        <label class="input-group clean-input-group d-inline-flex w-auto"><span class="input-group-text fw-medium">If yes, explain:</span></label>
                                        <textarea name="conditionAffect" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- COGNITIVE STATUS -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>COGNITIVE STATUS</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div>Patient’s cognitive function:</div>
                                <div class="ms-3 mt-1">
                                    <div><label class="form-check-label"><input type="radio" name="PatientCognitive" value="Alert" class="form-check-input"> Alert/oriented to self, person, place and time</label></div>
                                    <div><label class="form-check-label"><input type="radio" name="PatientCognitive" value="prompting" class="form-check-input"> Requires prompting when stressed or conditions unfamiliar</label></div>
                                    <div><label class="form-check-label"><input type="radio" name="PatientCognitive" value="some" class="form-check-input"> Requires some assistance to stay focused when attention needs to shift between activities</label></div>
                                    <div><label class="form-check-label"><input type="radio" name="PatientCognitive" value="Requiresconsiderable" class="form-check-input"> Requires considerable assistance to stay focused when attention needs to shift between activities</label></div>
                                </div>

                                <div class="mt-2">Patient is confused:</div>
                                <div class="ms-3 mt-1">
                                    <label class="form-check-label"><input type="radio" name="PatientConfused" value="Constantly_1" class="form-check-input"> Constantly</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientConfused" value="Non-responsive" class="form-check-input"> Non-responsive</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientConfused" value="Never" class="form-check-input"> Never</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientConfused" value="only" class="form-check-input"> On waking or at night only</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientConfused" value="consistently" class="form-check-input"> During the day and evening but not consistently</label>
                                </div>

                                <div class="mt-2">Patient is anxious:</div>
                                <div class="ms-3 mt-1">
                                    <label class="form-check-label"><input type="radio" name="PatienAnxious" class="form-check-input" value="None"> None of the time</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatienAnxious" value="Less" class="form-check-input"> Less often than daily</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatienAnxious" value="Daily" class="form-check-input"> Daily, but not constantly</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatienAnxious" value="time" class="form-check-input"> All the time</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatienAnxious" value="responsive" class="form-check-input"> Non-responsive</label>
                                </div>

                                <div class="mt-2">Patient has:</div>
                                <div class="ms-3 mt-1">
                                    <label class="form-check-label"><input type="radio" name="PatientHas" value="deficit" class="form-check-input"> Memory deficit</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientHas" value="making" class="form-check-input"> Impaired decision making</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientHas" value="Disruptive" class="form-check-input"> Disruptive behaviors:</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientHas" value="verbal" class="form-check-input"> verbal</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientHas" value="physical" class="form-check-input"> physical</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientHas" value="Delusional" class="form-check-input"> Delusional</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientHas" value="behaviors" class="form-check-input"> Paranoid behaviors</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="PatientHas" value="demonstrated" class="form-check-input"> None of these behaviors demonstrated</label>
                                </div>

                                <div class="mt-2">
                                    <b>Is the patient receiving psychiatric nursing services at home?</b>
                                    <label class="form-check-label ms-2"><input type="radio" name="psychiatricNursing" value="No" class="form-check-input"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="psychiatricNursing" value="Yes" class="form-check-input"> Yes</label>
                                </div>

                                <div class="mt-1"><b>Note:</b> <i>CMS is looking for potential issues that may complicate or interfere with the delivery of the HHA services and the patient’s ability to participate in his
                                    or her own care. Consider the <u>Brief Interview for Mental Status (BIMS)</u> for further assessment.</i></div>
                            </td>
                        </tr>

                        <!-- PSYCHOSOCIAL -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>PSYCHOSOCIAL</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <span>Is the patient able to communicate their needs?</span>
                                    <label class="form-check-label"><input type="radio" name="patientCommunicate" value="Yes" class="form-check-input"> Yes</label>
                                    <label class="form-check-label"><input type="radio" name="patientCommunicate" value="No" class="form-check-input"> No</label>
                                    <label class="form-check-label">If no, explain:</label>
                                    <div class="clean-input-group d-inline-flex ms-1" style="width: 50%;">
                                        <input type="text" name="ifnoExplain" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="mt-1">
                                    <span>What is the patient’s primary way to communicate? For example, language, sign language, etc.:</span>
                                    <div class="clean-input-group d-inline-flex ms-1" style="width: 30%">
                                        <input type="text" id="" name="signLanguage" class="form-control">
                                    </div>
                                </div>

                                <div class="mt-1">
                                    <label for="">If the patient has a communication barrier, what has the HHA done to improve communication? For example, use an interpreter, large print
                                        literature supplied, etc.</label>
                                    <textarea name="improveCommunication" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                    <span>Was anyone else present during this visit to support the patient?</span>
                                    <label class="form-check-label ms-2"><input type="radio" name="supportPatient" value="No" class="form-check-input"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="supportPatient" value="Yes" class="form-check-input"> Yes</label>
                                    <label class="form-check-label ms-2">If yes, give name and relationship to the client:</label>
                                    <textarea name="relationship_4" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                    <label class="form-check-label"><input type="checkbox" name="Spiritual" class="form-check-input"> Spiritual resource:</label>
                                    <div class="clean-input-group d-inline-flex ms-1" style="width: 50%;">
                                        <input type="text" name="spiritualResource" id="" class="form-control">
                                    </div>

                                    <label class="form-check-label ms-3"> Phone:</label>
                                    <div class="clean-input-group d-inline-flex ms-1">
                                        <input type="text" name="phoneResource" id="" class="form-control">
                                    </div>

                                    <div class="ms-3 mt-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="change" class="form-check-input"> N/A</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="changeSince" class="form-check-input"> No change since last visit</label>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Feelings/emotions the patient reports:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Angry" class="form-check-input"> Angry</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Fear"  class="form-check-input"> Fear</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Sadness"   class="form-check-input"> Sadness</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Discouraged"  class="form-check-input"> Discouraged</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Lonely"   class="form-check-input"> Lonely</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Depressed"  class="form-check-input"> Depressed</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Helpless"  class="form-check-input"> Helpless</label>

                                    <div class="ms-3 mt-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="Content" class="form-check-input"> Content</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Happy"   class="form-check-input"> Happy</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Hopeful"   class="form-check-input"> Hopeful</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Motivated"  class="form-check-input"> Motivated</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="contentOther"   class="form-check-input"> Other:</label>
                                        <div class="clean-input-group d-inline-flex ms-1">
                                            <input type="text" name="contentOther_1" id="" class="form-control">
                                        </div>
                                        <br>
                                        <label class="form-check-label mt-1"><input type="checkbox" name="nothingReported" class="form-check-input" value="1"> N/A - Nothing reported</label>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Sleep:</span>
                                    <label class="form-check-label ms-2"><input type="radio" name="Sleep" class="form-check-input" value="Adequate"> Adequate</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Sleep" class="form-check-input" value="Inadequate"> Inadequate</label>

                                    &nbsp; &nbsp; &nbsp;
                                    <span>Rest:</span>
                                    <label class="form-check-label ms-2"><input type="radio" name="Rest" class="form-check-input" value="Adequate"> Adequate</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Rest" class="form-check-input" value="Inadequate"> Inadequate</label>

                                    <div class="ms-3 mt-1">
                                        <label class="input-group clean-input-group d-inline-flex" style="width: auto;">
                                            <span class="input-group-text fw-medium">Frequency of naps:</span>
                                            <input type="text" id="" name="frequencyNap" class="form-control">
                                        </label>

                                        <label class="input-group clean-input-group d-inline-flex ms-2" style="width: auto;">
                                            <span class="input-group-text fw-medium">Number of hours slept per night:</span>
                                            <input type="number" id="" name="hoursSlept" class="form-control">
                                        </label>

                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Explain:</span>
                                            <input type="text" id="" name="sleptExplain" class="form-control">
                                        </label>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Inappropriate reactions/behaviors toward:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Caregiver_3"> Caregiver(s)</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Clinician"> Clinician(s)</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Representative_2"> Representative</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="behaviorstoward_Others"> Others:</label>
                                    <div class="clean-input-group d-inline-flex">
                                        <input type="text" name="behaviorstoward_Others_1" id="" class="form-control">
                                    </div>

                                    <br>
                                    <label class="form-check-label ms-2"><input type="radio" name="Rest_2" class="form-check-input" value="Reported"> Reported</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Rest_2" class="form-check-input" value="Observed"> Observed</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Rest_2" class="form-check-input" value="N/A"> N/A</label>
                                    <div class="ms-2">
                                        <label for="">Describe:</label>
                                        <textarea name="describeInappropriate" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Inability to cope with altered health status as evidenced by:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="lackofMotivation"> Lack of motivation</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="inabilitytoRecognize"> Inability to recognize problems</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Unrealistic"> Unrealistic expectations</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Denial"> Denial of problems</label>
                                </div>

                                <div class="mt-2">
                                    <span>Evidence of:</span>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Abuse"> Abuse</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Neglect"> Neglect</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Exploitation"> Exploitation</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Verbal"> Verbal</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Emotional"> Emotional</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Physical"> Physical</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" value="1" name="Financial"> Financial</label>

                                    <div class="ms-3 mt-1">
                                        <label class="form-check-label ms-2"><input type="radio" name="PotentialActual" class="form-check-input" value="Potential"> Potential</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PotentialActual" class="form-check-input" value="Actual"> Actual</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PotentialActual" class="form-check-input" value="N/A"> N/A</label>
                                        &nbsp; &nbsp; &nbsp;
                                        <span>MSW referral made:</span>
                                        <label class="form-check-label ms-2"><input type="radio" name="MSWreferral" class="form-check-input" value="No"> No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="MSWreferral" class="form-check-input" value="Yes"> Yes</label>
                                        <br>
                                        <label for="">Other intervention:</label>
                                        <textarea name="Otherintervention" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Does the patient’s psychosocial condition affect functional ability and/or safety (i.e., patient reports they were robbed two months ago and now they
                                        can only sleep for brief periods)?</span>
                                    <label class="form-check-label ms-2"><input type="radio" name="affectFunctionalAbility " class="form-check-input" value="No"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="affectFunctionalAbility " class="form-check-input" value="Yes"> Yes</label>
                                    <label for="">If yes, explain:</label>
                                    <textarea name="psychosocialExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                    <b>Note:</b> <i><u>CMS is looking for potential issues that may complicate or interfere</u> with the delivery of the HHA services and the patient’s ability to participate in his
                                        or her own care. A psychosocial evaluation includes the patient’s mental health, social status, and functional capacity within the community by looking
                                        at issues surrounding both a patient’s psychological and social condition (for example, education and marital history).</i>
                                </div>
                            </td>
                        </tr>

                        <!-- CARE PREFERENCES/PATIENT’S PERSONAL GOALS -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>CARE PREFERENCES/PATIENT’S PERSONAL GOALS</b></td>
                        </tr>
                        <tr>
                            <td class="p-0">
                                <table class="table table-borderless align-middle default-td">
                                    <tr>
                                        <td class="labels-group">
                                            <span class="fw-medium me-2">Did the</span>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="patient_2" class="form-check-input">Patient</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="representative_3" class="form-check-input" >Representative</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                                <span class="input-group-text fw-medium">Other</span>
                                                <input type="text" id="" name="didOther" class="form-control">
                                            </label>
                                            <span class="fw-medium me-2">communicate care preferences that involve the home health services
                                                provided?
                                                For example, preferred visit times or days, etc.</span>
                                            <label class="form-check-label"><input type="radio" name="ccptihhsp" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label"><input type="radio" name="ccptihhsp" value="Yes" class="form-check-input">Yes</label>
                                            <label class="form-check-label">If yes, list preferences:</label>
                                            <textarea name="preferences" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="labels-group">
                                            <span class="fw-medium me-2">Did the</span>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="communicationPatient"
                                                    class="form-check-input">Patient</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="communicationRepresentative"
                                                    class="form-check-input">Representative</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                                <span class="input-group-text fw-medium">Other</span>
                                                <input type="text" name="communicationOther" id="communicationOther" class="form-control">
                                            </label>
                                            <span class="fw-medium me-2">communicate any specific information about personal goal(s) the patient would like to achieve from this home health admission?</span>
                                            <label class="form-check-label"><input type="radio" name="communicationStatus" class="form-check-input" value="No">No</label>
                                            <label class="form-check-label"><input type="radio" name="communicationStatus" class="form-check-input" value="Yes">Yes</label>
                                            <div class="d-block ms-3">
                                                <span class="fw-medium me-2">If no, the</span>
                                                <label class="form-check-label"><input type="checkbox" class="form-check-input" value="1" name="thePatient">Patient</label>
                                                <label class="form-check-label"><input type="checkbox" class="form-check-input" value="1" name="theRepresentative" >Representative</label>
                                                <label class="input-group clean-input-group d-inline-flex w-auto">
                                                    <span class="input-group-text fw-medium">Other</span>
                                                    <input type="text" id="otherDiscussed" name="otherRepresentative" class="form-control">
                                                </label>

                                                <div class="d-block ms-3">
                                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" value="1" name="personalGoal">Do not want a personal goal(s)</label>
                                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" value="1" name="workingOn">Already have a goal(s) they are working on at this time</label>
                                                    <br>
                                                    <label class="input-group clean-input-group">
                                                        <span class="input-group-text fw-medium">Other</span>
                                                        <input type="text" id="otherDiscussed" name="otherWorking" class="form-control">
                                                    </label>
                                                </div>

                                                <span class="fw-medium me-2">If yes, the</span>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="personalGoalPatient"
                                                        class="form-check-input">Patient</label>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="personalGoalRepresentative"
                                                        class="form-check-input">Representative</label>
                                                <label class="input-group clean-input-group d-inline-flex w-auto">
                                                    <span class="input-group-text fw-medium">Other</span>
                                                    <input type="text" id="otherDiscussed" name="otherDiscussed_1" class="form-control">
                                                </label>
                                                <span class="fw-medium">discussed/communicated about the goal(s) with the assessing clinician
                                                    and:</span>
                                                <div class="d-block mt-2">
                                                    <label class="form-check-label"><input type="radio" name="agreementStatus"
                                                            class="form-check-input" value="realistic">Agreed their personal goal(s) was
                                                        realistic
                                                        based on the patient's health status.</label>
                                                </div>
                                                <div class="d-block">
                                                    <label class="form-check-label"><input type="radio" name="agreementStatus"
                                                            class="form-check-input" value="modified">Agreed their personal goal(s) needed
                                                        to be
                                                        modified based on the patient's health status.</label>
                                                </div>
                                                <div class="d-block">
                                                    <label class="form-check-label"><input type="radio" name="agreementStatus"
                                                            class="form-check-input" value="implement">Agreed to and identified
                                                        actions/interventions the patient is willing to safely implement, so the patient will be
                                                        able to
                                                        meet their goal(s) by the anticipated discharge date.</label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="labels-group pb-1">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="The" class="form-check-input">The</label>
                                            <label class="form-check-label"><input type="checkbox"  value="1" name="ThePatient_2"  class="form-check-input">Patient</label>
                                            <label class="form-check-label"><input type="checkbox"  value="1" name="Representative_4" class="form-check-input">Representative</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                                <span class="input-group-text fw-medium">Other</span>
                                                <input type="text" id="other_goal_written_by" name="otherGoalWritten" class="form-control">
                                            </label>
                                            <span class="fw-medium">helped write a measurable goal(s), understandable to all stakeholders.</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="labels-group pt-1">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="thestakeholders" class="form-check-input">The</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="patientstakeholders" class="form-check-input">Patient</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="representativestakeholders" class="form-check-input">Representative</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                                <span class="input-group-text fw-medium">Other</span>
                                                <input type="text" id="other_goal_agreement_by" name="otherGoalAgreement" class="form-control">
                                            </label>
                                            <span class="fw-medium">was informed, appeared to understand and agreed the personal goal(s) would
                                                be added
                                                to the patient's individualized plan of care and submitted to the physician responsible for
                                                reviewing
                                                and signing the plan of care.</span>

                                            <div class="mt-2">
                                                <label for="">Document what the patient reports/says about their progress towards their personal goal(s) (if applicable) and the HHA measurable goals since prior assessment:</label>
                                                <textarea name="documentGoals" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- STRENGTHS/LIMITATIONS -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>STRENGTHS/LIMITATIONS</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <span>Based upon the patient’s comprehensive assessment (physical, psychosocial, cognitive, mental status and functional status):</span>
                                <br>
                                <label for="">List the patient’s strengths that contributed to the progress toward their goal(s), both personal and the HHA measurable goals since prior
                                    assessment. For example, involved family, interest in returning to prior activities, cheerful attitude, cooperative, etc.</label>
                                <textarea name="involvedFamily" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                <b><i>** It is recommended that you not use checkboxes and generalized terms and restating requirements would not be adequate without
                                    corroborating documentation.</i></b>
                                </div>

                                <div class="mt-2">
                                    <label>Describe the patient’s structural impairment (physical or pathophysiological impairment, e.g., fracture, MI, blindness, etc.)</label>
                                    <textarea name="structuralImpairment" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                    <label>Describe the patient’s functional impairment (e.g., dyspnea, pain, weakness, etc.)</label>
                                    <textarea name="functionalImpairment" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                    <label>Does the impairment limit the patient’s activities (climbing stairs, ambulating, making decisions, etc.)? m No m Yes If yes, explain:</label>
                                    <textarea name="patientActivities" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                    <span>Does the skill(s) of a nurse address the specific structural and/or functional impairments and activity limitations cited in this section?</span>
                                    <br>
                                    <label class="form-check-label"><input type="radio" class="form-check-input" name="nurseSkill" value="No"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="nurseSkill" value="Yes"> Yes &nbsp; If yes, explain:</label>
                                    <textarea name="specificStructural" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                    <span>Has there been any significant changes in strength/limitations since the last visit?</span>
                                    <label class="form-check-label"><input type="radio" class="form-check-input" name="changes" value="No"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="changes" value="Yes"> Yes &nbsp; If yes, explain:</label>
                                    <textarea name="limitations" id="" cols="30" rows="2" class="form-control mt-1"></textarea>

                                    <p class="mt-1"><b>Note:</b> <i>CMS is looking for potential issues that may complicate or interfere with the delivery of the HHA services and the patient’s ability to participate in his or her own plan of care.</i></p>
                                </div>
                            </td>
                        </tr>

                        <!-- SAFETY MEASURES -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>SAFETY MEASURES</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row row-flex gy-2">
                                    <div class="col-lg-12 col-xl-5">
                                    <div class="row row-flex">
                                        <div class="col-md-6">
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Bleeding" class="form-check-input"> Bleeding precautions</label>
                                            </div>
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="siderailsUp" class="form-check-input"> Siderails up</label>
                                            </div>
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="infectionControl" class="form-check-input"> Infection control measures</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="precautions" class="form-check-input"> O<sub>2</sub>, precautions</label>
                                            </div>
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="elevateHead" class="form-check-input"> Elevate head of bed</label>
                                            </div>
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="walker" class="form-check-input"> Walker/cane</label>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-xl-7">
                                    <div class="row row-flex">
                                        <div class="col-md-4">
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="seizurePrecautions" class="form-check-input"> Seizure precautions</label>
                                            </div>
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="supervision" class="form-check-input"> 24 hr. supervision</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="fallPrecautions" class="form-check-input"> Fall precautions</label>
                                            </div>
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="clearpathways" class="form-check-input"> Clear pathways</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Aspiration" class="form-check-input"> Aspiration precautions</label>
                                            </div>
                                            <div class="d-block">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="transfers" class="form-check-input"> Lock w/c with transfers</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-flex gy-2">
                                        <div class="col-12">
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">Other</span>
                                                <input type="text" id="" name="transfersOther" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <span>Were there any changes with the emergency preparedness plan since the last assessment?</span>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="changesPreparedness" value="No"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="changesPreparedness" value="Yes"> Yes &nbsp; If yes, explain:</label>
                                    <textarea name="preparednessExplain" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                </div>
                            </td>
                        </tr>

                        <!-- Primary Diagnosis & Other Diagnoses -->
                        <tr>
                            <td class="text-center bg-dark text-white"><b>Primary Diagnosis & Other Diagnoses</b></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 85px;fill: #FF5722;"><path d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-center mb-1" style="font-weight: 500;">Documentation of diagnoses has been removed from the OASIS data at recertification.</p>
                                        <p class="text-center mb-1" style="font-weight: 700;"><u>If the patient diagnoses are the same from the last comprehensive assessment, SKIP THIS PAGE.</u></p>
                                        <p class="text-center mb-0" style="font-weight: 500;">If there are changes in the diagnoses, or the order of the diagnoses, please document these changes below. These diagnoses must be captured accurately for billing purposes.</p>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="border-0 p-0">
                                <table class="table table-bordered table-py-8">
                                    <tr>
                                        <td colspan="2" class="bg-secondary-subtle"><b>Primary Diagnosis (If changed from last assessment)</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">a.</span>
                                                <input type="text" class="form-control" name="primaryDiagnosis">
                                            </label>
                                        </td>
                                        <td>
                                            <b>V, W, X, Y codes NOT allowed</b><br>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">a.</span>
                                                <input type="text" class="form-control" name="notAllowed">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-secondary-subtle"><b>Other Diagnoses (If changed from last assessment)</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">b.</span>
                                                <input type="text" class="form-control" name="otherDiagnoses">
                                            </label>
                                        </td>
                                        <td>
                                            <b>All ICD-10-CM codes allowed</b><br>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">b.</span>
                                                <input type="text" class="form-control" name="allowedDiagnoses">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium" >c.</span>
                                                <input type="text" class="form-control" name="allowedDiagnoses_b">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium" >c.</span>
                                                <input type="text" class="form-control" name="allowedDiagnoses_c">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">d.</span>
                                                <input type="text" class="form-control" name="allowedDiagnoses_d">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">d.</span>
                                                <input type="text" class="form-control" name="allowedDiagnosesd">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">e.</span>
                                                <input type="text" name="allowedDiagnoses_e" class="form-control">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">e.</span>
                                                <input type="text" class="form-control" name="allowedDiagnoses_ee">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">f.</span>
                                                <input type="text" class="form-control" name="allowedDiagnoses_f">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">f.</span>
                                                <input type="text" class="form-control" name="allowedDiagnoses_ff">
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="border-0 p-0">
                                <table class="table table-bordered table-py-8">
                                    <tr>
                                        <td colspan="2" class="bg-secondary-subtle"><b><i>Complete g through v per agency policy for all pertinent secondary diagnoses identified</i></b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">g.</span>
                                                <input type="text" class="form-control" name="Complete">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">g.</span>
                                                <input type="text" class="form-control" name="Complete_g">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">h.</span>
                                                <input type="text" class="form-control" name="Completeh">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">h.</span>
                                                <input type="text" class="form-control" name="Complete_h">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">i.</span>
                                                <input type="text" class="form-control" name="Completei">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">i.</span>
                                                <input type="text" class="form-control" name="Complete_i">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">j.</span>
                                                <input type="text" class="form-control" name="Completej">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">j.</span>
                                                <input type="text" class="form-control" name="Complete_j">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">k.</span>
                                                <input type="text" class="form-control" name="Completek">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">k.</span>
                                                <input type="text" class="form-control" name="Complete_k">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">l.</span>
                                                <input type="text" class="form-control" name="Completei_2">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">l.</span>
                                                <input type="text" class="form-control" name="Complete_i_2">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">m.</span>
                                                <input type="text" class="form-control" name="Completem">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">m.</span>
                                                <input type="text" class="form-control" name="Complete_m">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">n.</span>
                                                <input type="text" class="form-control" name="Completen">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">n.</span>
                                                <input type="text" class="form-control" name="Complete_n">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">o.</span>
                                                <input type="text" class="form-control" name="Completeo">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">o.</span>
                                                <input type="text" class="form-control" name="Complete_o">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">p.</span>
                                                <input type="text" class="form-control"name="Completep">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">p.</span>
                                                <input type="text" class="form-control"name="Complete_p">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">q.</span>
                                                <input type="text" class="form-control" name="Completeq">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">q.</span>
                                                <input type="text" class="form-control" name="Complete_q">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">r.</span>
                                                <input type="text" class="form-control"name="Completer">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium" name="Complete_r">r.</span>
                                                <input type="text" class="form-control">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">s.</span>
                                                <input type="text" class="form-control" name="Completes">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">s.</span>
                                                <input type="text" class="form-control" name="Complete_s">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">t.</span>
                                                <input type="text" class="form-control"name="Completet">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">t.</span>
                                                <input type="text" class="form-control" name="Complete_t">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">u.</span>
                                                <input type="text" class="form-control" name="Completeu">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">u.</span>
                                                <input type="text" class="form-control" name="Complete_u">
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">v.</span>
                                                <input type="text" class="form-control" name="Completv">
                                            </label>
                                        </td>
                                        <td>
                                            <label class="input-group clean-input-group">
                                                <span class="input-group-text fw-medium">v.</span>
                                                <input type="text" class="form-control" name="Complete_vhm">
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--/ SectionA -->

            <!-- SectionG -->
            <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section G</span> <span>Functional Status</span></h2>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <tr>
                    <td class="bg-secondary-subtle">
                        <b>M1800. Grooming</b>
                        <p>Current ability to tend safely to personal hygiene needs (specifically: washing face and hands, hair care, shaving or make up, teeth or denture care, or fingernail care).</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Grooming" value="0" class="form-check-input">0. <b>Able to groom self unaided, with or without the use of assistive devices or adapted methods.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Grooming" value="1" class="form-check-input">1. <b>Grooming utensils must be placed within reach before able to complete grooming activities.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Grooming" value="2" class="form-check-input">2. <b>Someone must assist the patient to groom self.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Grooming" value="3" class="form-check-input">3. <b>Patient depends entirely upon someone else for grooming needs.</b></label></div>
                    </td>
                    </tr>

                    <tr><td class="border-0"></td></tr>

                    <tr>
                    <td class="bg-secondary-subtle">
                        <b>M1810. Current Ability to Dress <u>Upper</u> Body</b>
                        safely (with or without dressing aids) including undergarments, pullovers, front-opening shirts and blouses, managing zippers, buttons, and snaps.
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" value="0" class="form-check-input">0. <b>Able to get clothes out of closets and drawers, put them on and remove them from the upper body without assistance.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" value="1" class="form-check-input">1. <b>Able to dress upper body without assistance if clothing is laid out or handed to the patient.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" value="2" class="form-check-input">2. <b>Someone must help the patient put on upper body clothing.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" value="3" class="form-check-input">3. <b>Patient depends entirely upon another person to dress the upper body.</b></label></div>
                    </td>
                    </tr>

                    <tr><td class="border-0"></td></tr>

                    <tr>
                    <td class="bg-secondary-subtle">
                        <b>M1820. Current Ability to Dress <u>Lower</u> Body</b>
                        safely (with or without dressing aids) including undergarments, slacks, socks or nylons, shoes.
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Groom" value="0" class="form-check-input">0. <b>Able to obtain, put on, and remove clothing and shoes without assistance.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Groom" value="1" class="form-check-input">1. <b>Able to dress lower body without assistance if clothing and shoes are laid out or handed to the patient.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Groom" value="2" class="form-check-input">2. <b>Someone must help the patient put on undergarments, slacks, socks or nylons, and shoes.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Groom" value="3" class="form-check-input">3. <b>Patient depends entirely upon another person to dress lower body.</b></label></div>
                    </td>
                    </tr>

                    
                    <tr><td class="border-0"></td></tr>

                    <tr>
                    <td class="bg-secondary-subtle">
                        <b>M1830. Bathing</b>
                        <p>Current ability to wash entire body safely. <u>Excludes</u> grooming (washing face, washing hands, and shampooing hair).</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" value="0" class="form-check-input">0. <b>Able to bathe self in <u>shower or tub</u> independently, including getting in and out of tub/shower.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" value="1" class="form-check-input">1. <b>With the use of devices, is able to bathe self in shower or tub independently, including getting in and out of the tub/shower.</b></label></div>
                        <div class="d-block">
                            <label class="form-check-label"><input type="radio" name="Bathing" value="2" class="form-check-input">2. <b>Able to bathe in shower or tub with the intermittent assistance of another person:</b></label>
                            <div class="ms-3">
                                <p class="mb-0">a. <b>for intermittent supervision or encouragement or reminders, <u>OR</u></b></p>
                                <p class="mb-0">b. <b>to get in and out of the shower or tub, <u>OR</u></b></p>
                                <p class="mb-0">c. <b>for washing difficult to reach areas.</b></p>
                            </div>
                        </div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" value="3" class="form-check-input">3. <b>Able to participate in bathing self in shower or tub, but requires presence of another person throughout the bath for assistance or supervision.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" value="4" class="form-check-input">4. <b>Unable to use the shower or tub, but able to bathe self independently with or without the use of devices at the sink, in chair, or on commode.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" value="5" class="form-check-input">5. <b>Unable to use the shower or tub, but able to participate in bathing self in bed, at the sink, in bedside chair, or on commode, with the assistance or supervision of another person.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" value="6" class="form-check-input">6. <b>Unable to participate effectively in bathing and is bathed totally by another person.</b></label></div>
                    </td>
                    </tr>

                    <tr><td class="border-0"></td></tr>

                    <tr>
                    <td class="bg-secondary-subtle">
                        <b>M1840. Toilet Transferring</b>
                        <p>Current ability to get to and from the toilet or bedside commode safely and transfer on and off toilet/commode.</p>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="ToiletTransferring" value="0" class="form-check-input">0. <b>Able to get to and from the toilet and transfer independently with or without a device.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="ToiletTransferring" value="1" class="form-check-input">1. <b>When reminded, assisted, or supervised by another person, able to get to and from the toilet and transfer.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="ToiletTransferring" value="2" class="form-check-input">2. <b><u>Unable</u> to get to and from the toilet but is able to use a bedside commode (with or without assistance).</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="ToiletTransferring" value="3" class="form-check-input">3. <b><u>Unable</u> to get to and from the toilet or bedside commode but is able to use a bedpan/urinal independently.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="ToiletTransferring" value="4"  class="form-check-input">4. <b>Is totally dependent in toileting.</b></label></div>
                    </td>
                    </tr>
                    <tr><td class="border-0"></td></tr>

                    <tr>
                        <td class="bg-secondary-subtle">
                        <strong>M1850. Transferring</strong>
                        <p>Current ability to move safely from bed to chair, or ability to turn and position self in bed if patient is bedfast.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Transferring" value="0" class="form-check-input"> 0. <b>Able to independently transfer.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Transferring" value="1" class="form-check-input"> 1. <b>Able to transfer with minimal human assistance or with use of an assistive device.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Transferring" value="2" class="form-check-input"> 2. <b>Able to bear weight and pivot during the transfer process but unable to transfer self.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Transferring" value="3" class="form-check-input"> 3. <b>Unable to transfer self and is unable to bear weight or pivot when transferred by another person.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Transferring" value="4" class="form-check-input"> 4. <b>Bedfast, unable to transfer but is able to turn and position self in bed.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Transferring" value="5" class="form-check-input"> 5. <b>Bedfast, unable to transfer and is unable to turn and position self.</b></label></div>
                        </td>
                    </tr>
                    <tr><td class="border-0"></td></tr>

                    <tr>
                        <td class="bg-secondary-subtle">
                        <strong>M1860. Ambulation/Locomotion</strong>
                        <p>Current ability to walk safely, once in a standing position, or use a wheelchair, once in a seated position, on a variety of surfaces.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Ambulation" value="0" class="form-check-input"> 0. <b>Able to independently walk on even and uneven surfaces and negotiate stairs with or without railings (specifically:needs no human assistance or assistive device).</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Ambulation" value="1"class="form-check-input"> 1. <b>With the use of a one-handed device (for example, cane, single crutch, hemi-walker), able to independently walk oneven and uneven surfaces and negotiate stairs with or without railings.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Ambulation" value="2" class="form-check-input"> 2. <b>Requires use of a two-handed device (for example, walker or crutches) to walk alone on a level surface and/orrequires human supervision or assistance to negotiate stairs or steps or uneven surfaces.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Ambulation" value="3" class="form-check-input"> 3. <b>Able to walk only with the supervision or assistance of another person at all times.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Ambulation" value="4" class="form-check-input"> 4. <b>Chairfast, <u>unable</u> to ambulate but is able to wheel self independently.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Ambulation" value="5" class="form-check-input"> 5. <b>Chairfast, <u>unable</u> to ambulate and is unable to wheel self.</b></label></div>
                        <div class="d-block"><label class="form-check-label"><input type="radio" name="Ambulation" value="6" class="form-check-input"> 6. <b>Bedfast, unable to ambulate or be up in a chair.</b></label></div>
                        </td>
                    </tr>
                    <tr><td class="border-0"></td></tr>

                    <tr>
                        <td class="labels-group">
                        <span class="fw-medium me-2"><b>Indications for Home Health Aides:</b></span>
                        <label class="form-check-label"><input type="radio" name="ifhha" class="form-check-input" value="Yes"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="ifhha" class="form-check-input" value="No"> No</label>
                        <label class="form-check-label"><input type="radio" name="ifhha" class="form-check-input" value="Refused"> Refused</label>
                        <span class="fw-medium ms-2 me-2"><b>Order obtained:</b></span>
                        <label class="form-check-label"><input type="radio" name="ifhha_oo" class="form-check-input" value="Yes"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="ifhha_oo" class="form-check-input" value="No"> No</label>
                        <br>
                        <label class="form-check-label">Reason for need:</label>
                        <textarea name="reasonforNeed" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="labels-group">
                        <span class="fw-medium me-2"><b>Indications for Occupational Therapy:</b></span>
                        <label class="form-check-label"><input type="radio" name="OccupationalTherapy" value="Yes" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="OccupationalTherapy" value="No" class="form-check-input"> No</label>
                        <label class="form-check-label"><input type="radio" name="OccupationalTherapy" value="Refused" class="form-check-input"> Refused</label>
                        <span class="fw-medium ms-2 me-2"><b>Order obtained:</b></span>
                        <label class="form-check-label"><input type="radio" name="OccupationalTherapyO" value="Yes" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="OccupationalTherapyO" value="No" class="form-check-input"> No</label>
                        <br>
                        <label class="form-check-label">Reason for need:</label>
                        <textarea name="Indications" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                        </td>
                    </tr>
                    <tr><td class="border-0"></td></tr>

                    <!-- ACTIVITIES PERMITTED -->
                    <tr>
                        <td class="text-center bg-dark text-white"><b>ACTIVITIES PERMITTED</b></td>
                    </tr>
                    <tr>
                        <td class="px-0 py-2">
                            <table class="table table-borderless align-middle table-py-5">
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="No_Restrictions" class="form-check-input"> No Restrictions</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Complete_bedrest" class="form-check-input"> Complete bedrest</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Bathroomprivileges" class="form-check-input"> Bathroom privileges</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="tolerated" class="form-check-input"> Up as tolerated</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="transfer_bedchair" class="form-check-input"> Transfer bed/chair</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="exercisespPprescribed" class="form-check-input" > Exercises prescribed</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="partialWeight" class="form-check-input"> Partial weight bearing</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Independent" class="form-check-input"> Independent in home</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Crutches" class="form-check-input" > Crutches</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Cane" class="form-check-input" > Cane</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Wheelchair" class="form-check-input" > Wheelchair</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Walker_2" class="form-check-input"> Walker</label></td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <label style="font-weight: 500;" class="form-label fw-medium mb-1">Other (specify):</label>
                                        <textarea name="activities_1" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <label style="font-weight: 500;" class="form-label fw-medium mb-1 mt-2">Other (specify):</label>
                                        <textarea name="activities_2" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <label style="font-weight: 500;" class="form-label fw-medium mb-1 mt-2">Plan/Comments regarding ADLs:</label>
                                        <textarea name="commentsRegarding" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </td>
                                </tr>
                                </table>
                        </td>
                    </tr>
                    <tr><td class="border-0"></td></tr>

                    <!-- FUNCTIONAL LIMITATIONS -->
                    <tr>
                        <td class="text-center bg-dark text-white"><b>FUNCTIONAL LIMITATIONS</b></td>
                    </tr>
                    <tr>
                        <td class="px-0 py-2">
                            <table class="table table-borderless align-middle table-py-5">
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Amputation" class="form-check-input" > Amputation</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Paralysis" class="form-check-input"> Paralysis</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="legallyBlind" class="form-check-input"> Legally blind</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Bowel" class="form-check-input" > Bowel/Bladder (Incontinence)</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Endurance" class="form-check-input"> Endurance</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Dyspnea" class="form-check-input"> Dyspnea with minimal exertion</label></td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Contracture" class="form-check-input"> Contracture</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Ambulation_2" class="form-check-input"> Ambulation</label></td>
                                    <td>
                                    <div class="input-group clean-input-group">
                                        <label class="input-group-text fw-medium">Other (specify):</label>
                                        <input type="text" id="" name="limitationOther" class="form-control">
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Hearing_2" class="form-check-input"> Hearing</label></td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="Speech" class="form-check-input"> Speech</label></td>
                                    <td>
                                    <div class="input-group clean-input-group">
                                        <label class="input-group-text fw-medium">Other (specify):</label>
                                        <input type="text" id="" name="hearingOther" class="form-control">
                                    </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        </tr>

                </table>
            </div>
            <!--/ SectionG -->

            <!-- SectionGG -->
            <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section GG</span> <span>Functional Abilities and Goals</span></h2>
            <div class="table-responsive">
                <table class="table table-bordered align-middle table-py-8">
                    <tr>
                        <td>
                            <p>NOTE: Code the GG tasks based on the amount of assistance needed by a helper to complete the task safely, based on the patient’s innate ability
                                and environment – NOT based on preferences or current caregiver circumstance.</p>
                            <p>Score 06-01 whenever it is possible for the task to be completed, even if the helper must complete the entire task, which would be coded as a “01”.
                                When a task can not be completed, even with the assistance of a helper, such as walking or steps, then utilize one of the “activity not attempted
                                codes”.</p>
                        </td>
                    </tr>
                    <tr><td class="border-0 py-1"></td></tr>

                    <!-- GG0130. Self-Care -->
                    <tr>
                        <td class="bg-secondary-subtle">
                        <strong>GG0130. Self-Care</strong>
                        <p>Code the patient’s usual performance at Follow-Up for each activity using the 6-point scale. If activity was not attempted at Follow-Up,
                            code the reason.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mb-1">
                                <b>Coding:</b><br>
                                <b>Safety</b> and <b>Quality of Performance</b> – If helper assistance is required because patient’s performance is unsafe or of poor quality, score according to amount of assistance provided.<br>
                                <i>Activities may be completed with or without assistive devices.</i>
                            </p>
                            <div class="ms-2 mb-2">
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="SelfCare" class="form-check-input" value="06"> 06. <b>Independent –</b> Patient completes the activity by themself with no assistance from a helper.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="SelfCare" class="form-check-input" value="05"> 05. <b>Setup or clean-up assistance –</b> Helper sets up or cleans up; patient completes activity. Helper assists only prior to or following the activity.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="SelfCare" class="form-check-input" value="04"> 04. <b>Supervision or touching assistance –</b> Helper provides verbal cues and/or touching/steadying and/or contact guard assistance as patient completes activity. Assistance may be provided throughout the activity or intermittently.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="SelfCare" class="form-check-input" value="03"> 03. <b>Partial/moderate assistance –</b> Helper does LESS THAN HALF the effort. Helper lifts, holds or supports trunk or limbs, but provides less than half the effort.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="SelfCare" class="form-check-input" value="02"> 02. <b>Substantial/maximal assistance –</b> Helper does MORE THAN HALF the effort. Helper lifts or holds trunk or limbs and provides more than half the effort.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="SelfCare" class="form-check-input" value="01"> 01. <b>Dependent –</b> Helper does ALL of the effort. Patient does none of the effort to complete the activity. Or, the assistance of 2 or more helpers is required for the patient to complete the activity.</label></div>
                            </div>
                            <p class="mb-1"><b>If activity was not attempted, code reason:</b></p>
                            <div class="ms-2">
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input" value="07"> 07. <b>Patient refused</b></label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input" value="09"> 09. <b>Not applicable –</b> Not attempted and the patient did not perform this activity prior to the current illness, exacerbation or injury.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input" value="10"> 10. <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather constraints)</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input" value="88"> 88. <b>Not attempted due to medical condition or safety concerns</b></label></div>
                            </div>
                        </td>
                        </tr>
                        <tr><td class="py-1 border-0"></td></tr>
                        <tr>
                        <td><b>4. Follow-up Performance</b></td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="Eating" class="form-check-input"> <b>Eating</b>: The ability to use suitable utensils to bring food and/or liquid to the mouth and swallow food and/or liquid once the meal is placed before the patient</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="oralHygiene" class="form-check-input"> B. <b>Oral Hygiene:</b> The ability to use suitable items to clean teeth. Dentures (if applicable): The ability to insert and remove dentures into and from mouth, and manage denture soaking and rinsing with use of equipment.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="toiletingHygiene" class="form-check-input"> C. <b>Toileting Hygiene:</b> The ability to maintain perineal hygiene, adjust clothes before and after voiding or having a bowel movement. If managing an ostomy, include wiping the opening but not managing equipment.</label>
                        </td>
                        </tr>
                        <tr><td class="border-0 py-1"></td></tr>

                        <!-- ADDITIONAL COMMENTS -->
                        <tr>
                        <td class="text-center bg-dark text-white py-2"><b>ADDITIONAL COMMENTS</b></td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="additionalComment" id="" cols="30" rows="4" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr><td class="border-0 py-1"></td></tr>

                    <!-- GG0170. Mobility -->
                    <tr>
                        <td class="bg-secondary-subtle">
                            <b>GG0170. Mobility</b>
                            <p>Code the patient’s usual performance at Follow-Up for each activity using the 6-point scale. If activity was not attempted at Follow-Up code the reason.</p>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p class="mb-1">
                                <b>Coding:</b><br>
                                <b>Safety</b> and <b>Quality of Performance –</b> If helper assistance is required because patient’s performance is unsafe or of poor quality, score according to amount of assistance provided.<br>
                                <i>Activities may be completed with or without assistive devices.</i>
                            </p>
                            <div class="ms-2 mb-2">
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility" value="06" class="form-check-input"> 06. <b>Independent –</b> Patient completes the activity by themself with no assistance from a helper.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility" value="05" class="form-check-input"> 05. <b>Setup or clean-up assistance –</b> Helper sets up or cleans up; patient completes activity. Helper assists only prior to or following the activity.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility" value="04" class="form-check-input"> 04. <b>Supervision or touching assistance –</b> Helper provides verbal cues and/or touching/steadying and/or contact guard assistance as patient completes activity. Assistance may be provided throughout the activity or intermittently.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility" value="03" class="form-check-input"> 03. <b>Partial/moderate assistance –</b> Helper does LESS THAN HALF the effort. Helper lifts, holds or supports trunk or limbs, but provides less than half the effort.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility" value="02" class="form-check-input"> 02. <b>Substantial/maximal assistance –</b> Helper does MORE THAN HALF the effort. Helper lifts or holds trunk or limbs and provides more than half the effort.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility" value="01" class="form-check-input"> 01. <b>Dependent –</b> Helper does ALL of the effort. Patient does none of the effort to complete the activity. Or, the assistance of 2 or more helpers is required for the patient to complete the activity.</label></div>
                            </div>

                            <p class="mb-1"><b>If activity was not attempted, code reason:</b></p>
                            <div class="ms-2">
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility_CS" value="07" class="form-check-input" wfd-id="id213"> 07. <b>Patient refused</b></label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility_CS" value="08" class="form-check-input" wfd-id="id214"> 08. <b>Not applicable –</b> Not attempted and the patient did not perform this activity prior to the current illness, exacerbation or injury.</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility_CS" value="09" class="form-check-input" wfd-id="id215"> 09. <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather constraints)</label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="Mobility_CS" value="10" class="form-check-input" wfd-id="id216"> 10. <b>Not attempted due to medical condition or safety concerns</b></label></div>
                            </div>
                        </td>
                        </tr>

                        <tr><td class="py-1 border-0"></td></tr>

                        <tr>
                        <td><b>4. Follow-up Performance</b></td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="rollLeft" class="form-check-input"> A. <b>Roll left and right:</b> The ability to roll from lying on back to left and right side, and return to lying on back on the bed.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="sitLying" class="form-check-input"> B. <b>Sit to lying:</b> The ability to move from sitting on side of bed to lying flat on the bed.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="Lying" class="form-check-input"> C. <b>Lying to sitting on side of bed:</b> The ability to move from lying on the back to sitting on the side of the bed with no back support.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="Sit" class="form-check-input"> D. <b>Sit to stand:</b> The ability to come to a standing position from sitting in a chair, wheelchair, or on the side of the bed.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="Chair" class="form-check-input"> E. <b>Chair/bed-to-chair transfer:</b> The ability to transfer to and from a bed to a chair (or wheelchair).</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="Toilet" class="form-check-input"> F. <b>Toilet transfer:</b> The ability to get on and off a toilet or commode.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="Walk" class="form-check-input"> I. <b>Walk 10 feet:</b> Once standing, the ability to walk at least 10 feet in a room, corridor, or similar space.<br><i>If Follow-Up performance is coded 07, 09, 10 or 88 ➔Skip to GG0170M, 1 step (curb).</i></label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="WalkFeet" class="form-check-input"> J. <b>Walk 50 feet with two turns:</b> Once standing, the ability to walk 50 feet and make two turns.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="WalkOnce" class="form-check-input"> K. <b>Walk 150 feet:</b> Once standing, the ability to walk at least 150 feet in a corridor or similar space.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="WalkUneven" class="form-check-input"> L. <b>Walking 10 feet on uneven surfaces:</b> The ability to walk 10 feet on uneven or sloping surfaces (indoor or outdoor), such as turf or gravel.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="Walkstep" class="form-check-input"> M. <b>1 step (curb):</b> The ability to go up and down a curb or up and down one step.<br><i>If Follow-up performance is coded 07, 09, 10 or 88, ➔ Skip to GG0170Q, Does patient use wheelchair and/or scooter?</i></label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" value="1" name="WalkAbility" class="form-check-input"> N. <b>4 steps:</b> The ability to go up and down four steps with or without a rail.</label>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <p class="mb-1"><b>Q. Does patient use wheelchair and/or scooter?</b></p>
                            <div class="ms-2">
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="dpuws" class="form-check-input" value="No"> <b>0. No ➔</b> <i>Skip to M1033, Risk for Hospitalization</i></label></div>
                                <div class="d-block"><label class="form-check-label"><input type="radio" name="dpuws" class="form-check-input" value="Yes"> <b>1. Yes ➔</b> Continue to GG0170R, Wheel 50 feet with two turns</label></div>
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="checkbox" name="wheelTurns" value="1" class="form-check-input"> R. <b>Wheel 50 feet with two turns:</b> Once seated in wheelchair/scooter, the ability to wheel at least 50 feet and make two turns.</label>
                        </td>
                        </tr>

                        <!-- MUSCULOSKELETAL -->
                        <tr>
                        <td class="text-center bg-dark text-white py-2"><b>MUSCULOSKELETAL</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="musculoskeletal_np" value="1" class="form-check-input"> No Problem</label></div>
                            <label for="">Current disorder(s) of musculoskeletal system (type) affecting functional activity or safety:</label>
                            <textarea name="musculoskeletalSystem" id="" cols="30" rows="2" class="form-control mt-1"></textarea>

                            <div class="d-flex gap-3 mt-3">
                                <div>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" value="1" name="FractureLocation"> Fracture (location):</label>
                                    <div class="clean-input-group d-inline-flex">
                                        <input type="text" name="Fracture" id="" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input" name="spj" value="1"> Swollen, painful joints (specify):</label>
                                    <div class="clean-input-group d-inline-flex">
                                        <input type="text" name="Swollen" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-3 mt-2">
                                <div>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"> Contracture(s): Location</label>
                                    <div class="clean-input-group d-inline-flex">
                                        <input type="text" name="Contracture_2" id="" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"> Contracture(s): Location</label>
                                    <div class="clean-input-group d-inline-flex">
                                        <input type="text" name="contractureLocation" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="d-block mt-2">
                                <span class="fw-medium me-2">Hand grips:</span>
                                <label class="form-check-label"><input type="radio" name="Hand_grips" value="equal" class="form-check-input">equal</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Hand_grips" value="unequal" class="form-check-input">unequal</label>
                                <span class="fw-medium ms-4">strong:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="strongL" class="form-check-input">R</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="strongR" class="form-check-input">L</label>
                                <span class="fw-medium me-2 ms-4">weak:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="weakR" class="form-check-input">R</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="weakL"  class="form-check-input">L</label>
                                </div>

                                <div class="d-block mt-2">
                                <label class="form-check-label"><input type="checkbox" value="1" name="motorChanges" class="form-check-input">Motor changes:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Fine" class="form-check-input">Fine</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Gross" class="form-check-input">Gross (specify):</label>
                                <div class="clean-input-group d-inline-flex">
                                    <input type="text" name="Gross_1" id="" class="form-control">
                                </div>
                                </div>

                                <div class="d-block mt-2">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="Weakness" value="1">Weakness:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="UE" class="form-check-input">UE</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="LE" class="form-check-input">LE (details):</label>
                                <div class="clean-input-group d-inline-flex">
                                    <input type="text" name="WeaknessOther" id="" class="form-control">
                                </div>
                                </div>

                                <div class="d-block mt-2">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="AtrophyYes" value="1">Atrophy:</label>
                                <div class="clean-input-group d-inline-flex">
                                    <input type="text" name="Atrophy" id="" class="form-control">
                                </div>
                                <label class="form-check-label ms-2"><input type="checkbox" class="form-check-input" name="DecreasedYes" value="1">Decreased ROM:</label>
                                <div class="clean-input-group d-inline-flex">
                                    <input type="text" id="" name="decreasedROM" class="form-control">
                                </div>
                                </div>

                                <div class="d-block mt-2">
                                <label class="form-check-label"><input type="checkbox" value="1" name="Shuffling" class="form-check-input">Shuffling</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Widebased" class="form-check-input">Wide-based gait</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Amputations" class="form-check-input">Amputation</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="BK"class="form-check-input">BK</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="AK" class="form-check-input">AK</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="UE_2"  class="form-check-input">UE;</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="R"  class="form-check-input">R</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="L"  class="form-check-input">L (specify):</label>
                                <div class="clean-input-group d-inline-flex">
                                    <input type="text" name="shufflingOther" id="" class="form-control">
                                </div>
                                </div>

                                <div class="d-flex mt-2">
                                <label class="form-check-label"><input type="checkbox" class="form-check-input" value="shufflingOther_yes" value="1"> Other (specify):</label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="text" name="shufflingOther_1" id="" class="form-control">
                                </div>
                                </div>

                                <div class="d-block mt-2">
                                <span>Does the patient’s condition affect their functional ability and/or safety?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="PatientFunctionalAbility" class="form-check-input" value="no">No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="PatientFunctionalAbility" class="form-check-input" value="yes">Yes &nbsp; If yes, explain:</label>
                                <textarea name="" id="" cols="30" rows="1" class="form-control mt-1" name="PatientFunctionalAbilityexplain"></textarea>
                                </div>
                        </td>
                    </tr>

                    <!-- FALL RISK ASSESSMENT -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>FALL RISK ASSESSMENT</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <span>Any falls reported since last OASIS assessment?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="fallsReported" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="fallsReported" value="Yes" class="form-check-input"> Yes (describe the fall and the severity of injuries, if applicable):</label>
                                <textarea name="describeFall " id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>

                                <div class="mt-2">
                                <span>Have fall risk factors changed since prior assessment?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="fallsReported_2" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="fallsReported_2" value="Yes" class="form-check-input"> Yes (describe):</label>
                                <textarea name="describeFactors" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>

                                <p class="mt-4 mb-0 text-center"><b><i>Complete the MAHC 10 and score as appropriate.</i></b></p>
                        </td>
                    </tr>

                    <!-- MAHC 10 - FALL RISK ASSESSMENT TOOL -->
                    <tr>
                        <td class="text-center bg-secondary-subtle py-1"><b>MAHC 10 - FALL RISK ASSESSMENT TOOL</b></td>
                    </tr>
                    <tr>   
                        <td class="p-0 border-0" style="padding-top: 0 !important;">
                            <table class="table table-bordered align-middle">
                                <tr>
                                    <td class="text-center bg-secondary-subtle" style="width: auto !important;">
                                        <p><b>REQUIRED CORE ELEMENTS - Assess one point for each core element "yes".</b>
                                        <br>
                                        <i class="fw-medium">Information may be gathered from medical record, assessment and if applicable, the patient/caregiver. Beyond protocols listed below, scoring should be based on your clinical judgment.</i></p>
                                    </td>
                                    <td class="text-center"><b>POINTS</b></td>
                                </tr>
                                <tr>
                                    <td><b>Age 65+</b></td>
                                    <td><input type="number" name="age" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Diagnosis (3 or more co-existing)</b><br>
                                        Includes only documented medical diagnosis.
                                    </td>
                                    <td><input type="number" name="diagnosisMore" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Prior history of falls within 3 months</b><br>
                                        An unintentional change in position resulting in coming to rest on the ground or at a lower level.
                                    </td>
                                    <td><input type="number" name="priorHistory" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Incontinence</b><br>
                                        Inability to make it to the bathroom or commode in timely manner. Includes frequency, urgency, and/or nocturia.
                                    </td>
                                    <td><input type="number" name="Incontinence" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Visual impairment</b><br>
                                        Includes but not limited to, macular degeneration, diabetic retinopathies, visual field loss, age related changes, decline in visual acuity, accommodation, glare tolerance, depth perception, and night vision or not wearing prescribed glasses or having the correct prescription.
                                    </td>
                                    <td><input type="number" name="visualImpairment" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Impaired functional mobility</b><br>
                                        May include patients who need help with IADLs or ADLs or have gait or transfer problems, arthritis, pain, fear of falling, foot problems, impaired sensation, impaired coordination or improper use of assistive devices.
                                    </td>
                                    <td><input type="number" name="impairedFunctional" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Environmental hazards</b><br>
                                        May include but not limited to, poor illumination, equipment tubing, inapprop footwear, pets, hard to reach items, floor surfaces that are uneven or cluttered, or outdoor entry and exits.
                                    </td>
                                    <td><input type="number" name="Environmental" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Poly Pharmacy (4 or more prescriptions - any type)</b><br>
                                        All PRESCRIPTIONS including prescriptions for OTC meds. Drugs! associated with fall risk include but not limited to, sedatives, anti-depressants, tranquilizers, narcotics, antihypertensives, cardiac meds, corticosteroids, anti-anxiety drugs, anticholinergic drugs, and hypoglycemic drugs.
                                    </td>
                                    <td><input type="number" name="polyPharmacy" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Pain affecting level of function</b><br>
                                        Pain often affects an individual's desire or ability to move or pain can be a factor in depression or compliance with safety recommendations.
                                    </td>
                                    <td><input type="number" name="polyAffecting" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Cognitive impairment</b><br>
                                        Could include patients with dementia, Alzheimer's or stroke patients or patients who are confused, use poor judgment, have decreased comprehension, impulsivity, memory deficits. Consider patient's ability to adhere to the plan of care.
                                    </td>
                                    <td><input type="number" name="cognitiveImpairment" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="bg-secondary-subtle">
                                        <p class="d-flex justify-content-between gap-2">
                                            <span><b>A score of 4 or more is considered at risk for falling</b></span>
                                            <span>MAHC 10 reprinted with permission from <b><i>Missouri Alliance for</i> HOME CARE</b></span>
                                            <span><b>TOTAL</b></span>
                                        </p>
                                    </td>
                                    <td><input type="number" name="missouriAlliance" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    <span>Plan/Comments re: ADLs and fall risk:</span>
                                    <textarea name="commentsFallrisk" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                    </td>
                                </tr>
                                </table>
                        </td>
                    </tr>

                    <!-- URINARY ELIMINATION -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>URINARY ELIMINATION</b></td>
                    </tr>
                    <tr>
                        <td class="p-0">
                            <table class="table table-borderless">
                                <tr>
                                    <td style="min-width: 282px;" class="d-block-on-xl">
                                        <label class="form-check-label"><input type="checkbox" name="noUEProblem" class="form-check-input" value="1"><b>No Problem</b></label>
                                        <br>
                                        <label class="form-label fw-medium mb-1">Diagnosed disorder(s) of urinary system (type):</label>
                                        <textarea name="diagnosedDisorder" id="" cols="30" rows="2" class="form-control"></textarea>
                                        <div class="d-block mt-2 labels-group">
                                            <span class="fw-medium me-2">(Check all applicable items)</span>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Observed" class="form-check-input">Observed</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Reported" class="form-check-input">Reported</label>
                                            <div class="ms-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Urgency" class="form-check-input">Urgency</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Frequency" class="form-check-input">Frequency</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Burning" class="form-check-input">Burning</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Pain" class="form-check-input">Pain</label>
                                            <br>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Hesitancy" class="form-check-input">Hesitancy</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="increasedUrination" class="form-check-input">Increased urination at night</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="decreasedUrination" class="form-check-input">Decreased urination</label>
                                            </div>
                                        </div>
            
                                        <div class="d-block mt-2 labels-group">
                                            <span class="fw-medium me-2">Color:</span>
                                            <label class="form-check-label"><input type="radio" name="UColor" value="Yellow_straw" class="form-check-input">Yellow/straw</label>
                                            <label class="form-check-label"><input type="radio" name="UColor" value="Amber" class="form-check-input">Amber</label>
                                            <label class="form-check-label"><input type="radio" name="UColor" value="Brown_gray" class="form-check-input">Brown/gray</label>
                                            <label class="form-check-label"><input type="radio" name="UColor" value="Pink/red tinged" class="form-check-input">Pink/red tinged</label>
                                            <div class="input-group clean-input-group ms-3">
                                            <label class="input-group-text fw-medium">Other:</label>
                                            <input type="text" id="" name="colorOther" class="form-control">
                                            </div>
                                        </div>
            
                                        <div class="d-block mt-2 labels-group">
                                            <span class="fw-medium me-2">Clarity:</span>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Clear" class="form-check-input">Clear</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Cloudy"  class="form-check-input">Cloudy</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Sediment"  class="form-check-input">Sediment</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Mucous"  class="form-check-input">Mucous</label>
                                        </div>
            
                                        <div class="d-block mt-2 labels-group">
                                            <span class="fw-medium me-2">Odor:</span>
                                            <label class="form-check-label"><input type="radio" name="UOdor" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label"><input type="radio" name="UOdor" value="Yes" class="form-check-input">Yes</label>
                                        </div>
            
                                        <div class="d-block mt-2 labels-group">
                                            <span class="fw-medium me-2 w-100">If the patient has incontinence, when does urinary incontinence occur?</span>
                                            <div class="ms-2">
                                            <label class="form-check-label"><input type="radio" name="phiwuio" value="During" class="form-check-input">During the day only</label>
                                            <label class="form-check-label"><input type="radio" name="phiwuio" value="Timed" class="form-check-input">Timed-voiding defers incontinence</label>
                                            <label class="form-check-label"><input type="radio" name="phiwuio" value="Duringday" class="form-check-input">During the day and night</label>
                                            <label class="form-check-label"><input type="radio" name="phiwuio" value="Occasional" class="form-check-input">Occasional stress incontinence</label>
                                            <label class="form-check-label"><input type="radio" name="phiwuio" value="Duringthe " class="form-check-input">During the night only</label>
                                            </div>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <label class="form-label fw-medium mb-1">Incontinence products/other:</label>
                                            <textarea name="otherIncontinence" id="" cols="30" rows="2" class="form-control"></textarea>
                                        </div>
                                    </td>
                                    <td class="labels-group w-md-50" colspan="d-block-on-xl">
                                        <span class="fw-bold me-2">URINARY CATHETER</span>
                                        <label class="form-check-label"><input type="checkbox" name="urinaryCatheter" class="form-check-input" value="1">N/A</label>
            
                                        <div class="d-block mt-2">
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                            <span class="input-group-text fw-medium">Type:</span>
                                            <input type="text" id="" name="urinaryCatheterType" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                            <span class="input-group-text fw-medium">Date last changed:</span>
                                            <input type="date" id="" name="dateLastChanged" class="form-control">
                                            </label>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="indwellingCatheter" value="1" class="form-check-input">Indwelling catheter <u>changed</u> this visit.</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto ms-1">
                                            <span class="input-group-text fw-medium">Size</span>
                                            <input type="text" id="" name="indwellingChange_size" class="form-control">
                                            <span class="input-group-text fw-medium">French</span>
                                            </label>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="indwellingCatheter_1" value="1" class="form-check-input">Indwelling catheter <u>inserted</u> this visit.</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto ms-1">
                                            <span class="input-group-text fw-medium">Size</span>
                                            <input type="text" name="indwellingInserted_size" id="" class="form-control">
                                            <span class="input-group-text fw-medium">French</span>
                                            </label>
                                            <div class="ms-2">
                                            <label class="form-check-label"><input type="radio" name="balloon" value="Single" class="form-check-input">Single balloon</label>
                                            <label class="form-check-label"><input type="radio" name="balloon" value="Double" class="form-check-input">Double balloon</label>
                                            </div>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="balloonInflated" value="1" class="form-check-input">Single/anchor balloon inflated with</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                            <input type="text" id="" name="singleAnchor_ml" class="form-control">
                                            <span class="input-group-text fw-medium">mL</span>
                                            </label>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="balloon_2" value="1" class="form-check-input">Second/tip balloon inflated with</label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto">
                                            <input type="text" id="" name="secondTip_ml" class="form-control">
                                            <span class="input-group-text fw-medium">mL</span>
                                            </label>
                                            <div class="ms-2">
                                            <label class="form-check-label"><input type="radio" name="difficulty" value="Without" class="form-check-input">Without difficulty</label>
                                            <label class="form-check-label"><input type="radio" name="difficulty" value="With" class="form-check-input">With difficulty (explain):</label>
                                            <textarea name="withdifficultyExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                            <label class="input-group clean-input-group mt-2">
                                                <span class="input-group-text fw-medium">Irrigation solution: Type (specify):</span>
                                                <input type="text" id="" name="irrigationSolution" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto mt-1">
                                                <span class="input-group-text fw-medium">Amount</span>
                                                <input type="text" id="" name="Amount_ml" class="form-control">
                                                <span class="input-group-text fw-medium">mL</span>
                                            </label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto mt-1">
                                                <span class="input-group-text fw-medium">Frequency</span>
                                                <input type="text" id="" name="irrigationFrequency" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group d-inline-flex w-auto mt-1">
                                                <span class="input-group-text fw-medium">Returns</span>
                                                <input type="text" id="" name="returnsFrequency" class="form-control">
                                            </label>
                                            </div>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <span class="fw-medium me-2">Patient tolerated procedure well</span>
                                            <label class="form-check-label"><input type="radio" name="ptpw" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label"><input type="radio" name="ptpw" value="Yes" class="form-check-input">Yes</label>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="suprapubic" value="1" class="form-check-input">Patient has suprapubic</label>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="Urostomy" value="1" class="form-check-input">Urostomy site (describe skin around stoma):</label>
                                            <textarea name="urostomyDescribe" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
            
                                        <div class="d-block mt-2">
                                            <span class="fw-medium me-2">Ostomy care managed by:</span>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="OstomyPatient" class="form-check-input">Patient</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="OstomyCaregiver" class="form-check-input">Caregiver</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="OstomyFamily"  class="form-check-input">Family</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="OstomyNurse"  class="form-check-input">Nurse</label>
                                        </div>
                                    </td>
                                </tr>
                                </table>
                        </td>
                    </tr>

                    <!-- BOWEL ELIMINATION -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>BOWEL ELIMINATION</b></td>
                    </tr>
                    <tr>
                        <td class="p-0">
                            <table class="table table-borderless not-responsive">
                                <tr>
                                    <td class="w-50 d-block-on-xl">
                                        <div><label class="form-check-label"><input type="checkbox" name="bowelElimination" value="1" class="form-check-input"><b>No Problem</b></label></div>
                                        <label for="">Diagnosed disorder(s) of GI system (type):</label>
                                        <textarea name="GIsystem" id="" cols="30" rows="1" class="form-control mt-1"></textarea>

                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Constipation" class="form-check-input">Constipation</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Diarrhea" class="form-check-input">Diarrhea</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Hemorrhoids" class="form-check-input">Hemorrhoids</label>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="lasBM" value="1" class="form-check-input">Last BM:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" id="" name="lasBM_1" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <div><label class="form-check-label"><input type="checkbox" name="bowelSounds" value="1" class="form-check-input">Bowel sounds:</label></div>
                                            <label class="input-group clean-input-group mt-1">
                                                <span class="input-group-text fw-medium">active</span>
                                                <input type="text" name="active" id="" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group mt-1">
                                                <span class="input-group-text fw-medium">absent</span>
                                                <input type="text" name="absent" id="" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group mt-1">
                                                <span class="input-group-text fw-medium">hypoactive</span>
                                                <input type="text" name="hypoactive" id="" class="form-control">
                                            </label>
                                            <label class="input-group clean-input-group mt-1">
                                                <span class="input-group-text fw-medium">hyperactive</span>
                                                <input type="text" id="" name="hyperactive" class="form-control">
                                            </label>
                                        </div>

                                        <div class="mt-2">
                                            <span>Abdomen:</span>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="noProblem" class="form-check-input"><b>No Problem</b></label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Tenderness"  class="form-check-input">Tenderness</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Pain" class="form-check-input">Pain</label>
                                        </div>

                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Distention" class="form-check-input">Distention:</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="HardSoft" value="Hard" class="form-check-input">Hard</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="HardSoft" value="Soft" class="form-check-input">Soft</label>
                                            <div class="d-inline-flex ms-2">
                                                <label class="form-check-label"><input type="checkbox" name="abdominalGirth" value="1" class="form-check-input">Abdominal girth</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" id="" name="abdominalGirth_1" class="form-control">
                                                </div>
                                                <span>cm</span>
                                            </div>
                                        </div>

                                        <div class="d-flex mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="abdominalOther" value="1" class="form-check-input">Other:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="abdominalOther_1" id="" class="form-control">
                                            </div>
                                        </div>
                                    </td>

                                    <td class="d-block-on-xl">
                                        <div class="d-flex">
                                            <label class="form-check-label"><input type="checkbox" name="girthOther" value="1" class="form-check-input">Other:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="girthOther_1" id="" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <label for="">Bowel regimen/program:</label>
                                            <textarea name="bowelRregimen" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>

                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="Laxative" value="1" class="form-check-input">Laxative</label>
                                            <div class="d-inline-flex ms-2">
                                                <label class="form-check-label"><input type="checkbox" name="Enema" value="1"  class="form-check-input">Enema use/frequency:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="enemauseFrequency" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex ms-2">
                                                <label class="form-check-label"><input type="checkbox" name="EnemaOther:" class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="enemauseFrequency_other" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="ifInvoluntaryIncontinence" value="1">Involuntary incontinence (details if applicable):</label>
                                            <textarea name="involuntaryIncontinence" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>

                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="ifIncontinenceProducts" value="1">Incontinence products/other:</label>
                                            <textarea name="incontinenceProducts" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>

                                        <div class="mt-2">
                                            <label class="form-check-label"><input type="checkbox" name="Ileostomy" value="1" class="form-check-input">Ileostomy</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" name="colostomySite" value="1" class="form-check-input">Colostomy site (describe skin around stoma):</label>
                                            <textarea name="Colostomy_site" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>

                                        <div class="mt-2">
                                            <span>Ostomy care managed by:</span>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managedPatient" class="form-check-input">Patient</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managedCaregiver"  class="form-check-input">Caregiver</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managedFamily"  class="form-check-input">Family</label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managedNurse"  class="form-check-input">Nurse</label>
                                        </div>

                                        <div class="d-flex mt-2">
                                            <label class="form-check-label"><input type="checkbox" class="form-check-input" name="ifOstomy_other" value="1">Other:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="Ostomy_other" id="" class="form-control">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Does the elimination</span>
                            <label class="form-check-label ms-2"><input type="checkbox" name="bowelElimination_3" value="1" class="form-check-input"> bowel and/or</label>
                            <label class="form-check-label ms-2"><input type="checkbox" name="bladderElimination_4" value="1" class="form-check-input"> bladder disorder(s) interfere/impact the patient’s functional ability and/or safety?</label>
                            <label class="form-check-label ms-2"><input type="radio" name="eliminationNoYes" value="No" class="form-check-input"> No</label>
                            <label class="form-check-label ms-2"><input type="radio" name="eliminationNoYes" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                            <textarea name="theElimination" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                        </td>
                    </tr>

                    <!-- GENITALIA -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>GENITALIA</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <label class="form-check-label"><input type="checkbox" value="1" name="genitalia" class="form-check-input"> <b>No Problem</b></label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="notAssessed" class="form-check-input"> <b>Not Assessed</b></label>
                            </div>

                            <div class="mt-2">
                                <div class="d-inline-flex">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="dischargeDrainage" class="form-check-input"> Discharge/Drainage: (describe):</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="Otherdischargedrainage" id="" class="form-control">
                                    </div>
                                </div>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Lesions"  class="form-check-input"> Lesions</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Blisters"   class="form-check-input"> Blisters</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Masses"   class="form-check-input"> Masses</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Cysts"  class="form-check-input"> Cysts</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Inflammation"  class="form-check-input"> Inflammation</label>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" value="1" name="surgicalAlteration" class="form-check-input"> Surgical alteration:</label>
                                <label class="form-check-label ms-2"><input type="radio" name="MaleFemale" value="Female" class="form-check-input"> Female to Male</label>
                                <label class="form-check-label ms-2"><input type="radio" name="MaleFemale" value="Male" class="form-check-input"> Male to Female</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="surgicalalterationOther" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="surgicalalterationOther_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" value="1" name="prostateProblem" class="form-check-input"> Prostate problem:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="BPH" class="form-check-input"> BPH</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="TURP" class="form-check-input"> TURP</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="TURP_1" class="form-check-input"> TURP</label>
                                <div class="d-inline-flex ms-2">
                                    <b>Date:</b>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="prostateProblem_date" id="" class="form-control">
                                    </div>
                                </div>
                                <label class="form-check-label ms-2"><input type="checkbox" name="SelfTesticular" value="1" class="form-check-input"> Self-testicular exam</label>
                                <div class="d-inline-flex ms-2">
                                    <span>Frequency</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="selftesticularFrequency" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>Date last exam:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" id="" name="lastExam" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" name="Menopause" value="1" class="form-check-input"> Menopause</label>
                                <label class="form-check-label ms-2"><input type="checkbox" name="Hysterectomy" value="1" class="form-check-input"> Hysterectomy</label>
                                <div class="d-inline-flex ms-2">
                                    <span>Date:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="HysterectomyDate" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>Date last PAP:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="datelastPAP" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>Results:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="Result" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" name="BreastselfExam" value="1" class="form-check-input"> Breast self-exam</label>
                                <div class="d-inline-flex ms-2">
                                    <span>Frequency</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="BreastselfExam_Frequency" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>Date last exam:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="BreastselfExam_date" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" name="nippleDischarge" value="1" class="form-check-input"> Nipple discharge:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" name="nippleDischarge_R" value="1" class="form-check-input"> R</label>
                                <div class="d-inline-flex ms-2">
                                    <span>Date:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="nippleDischarge_R_date" id="" class="form-control">
                                    </div>
                                </div>
                                <label class="form-check-label ms-2"><input type="checkbox" name="nippleDischarge_L" value="1" class="form-check-input"> L</label>
                                <div class="d-inline-flex ms-2">
                                    <span>Date:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="nippleDischarge_L_date" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- ENDOCRINE -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>ENDOCRINE</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div><label class="form-check-label"><input type="checkbox" name="endocrineNoproblem" value="1" class="form-check-input"> <b>No Problem</b></label></div>
                            <div class="mt-2">
                                <span><input type="checkbox" name="endocrineDiabetes" value="1" class="form-check-input"> Diabetes:</span>
                                <div>
                                    <label class="form-check-label"><input type="radio" name="DiabetesType" class="form-check-input" value="Type1"> Type 1</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="DiabetesType" class="form-check-input" value="Type2"> Type 2</label>
                                    <div class="d-inline-flex ms-2">
                                        <label class="form-check-label"><input name="DiabetesType" type="radio" class="form-check-input" value="Otherdiabetes"> Other diabetes</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="Otherdiabetes" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-inline-flex ms-2">
                                        <span>Date of onset:</span>
                                        <div class="clean-input-group flex-grow-1 ms-2">
                                            <input type="date" name="dateOnset" id="" class="form-control">
                                        </div>
                                    </div>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="diabeticDiet" class="form-check-input"> Diabetic diet</label>
                                </div>

                                <div>
                                    <label class="form-check-label"><input type="checkbox" value="1" name="oralMedication" class="form-check-input"> Oral medication</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="injectableMedication" class="form-check-input"> Injectable medication</label>
                                    <span class="ms-4">Was there a change in the diabetic medication since the last OASIS assessment?</span><br>
                                    <label class="form-check-label"><input type="radio" name="diabeticMedicatio" class="form-check-input" value="No"> No</label>
                                    <div class="d-inline-flex ms-2">
                                        <label class="form-check-label"><input type="radio" name="diabeticMedicatio" class="form-check-input" value="Yes"> Yes &nbsp; If yes, medication name, dose/frequency (specify):</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="diabeticMedication" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <span>Administered by:</span>
                                    <label class="form-check-label"><input type="checkbox" value="1" name="patientAdministered" class="form-check-input"> Patient</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1"  name="caregiverAdministered" class="form-check-input"> Caregiver</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1"  name="nurseAdministered" class="form-check-input"> Nurse</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1"  name="familyAdministered" class="form-check-input"> Family</label>
                                    <div class="d-inline-flex ms-2">
                                        <label class="form-check-label"><input type="checkbox" value="1"  name="Otheradministered" class="form-check-input"> Other:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="OtheradministeredBy" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <span>Reports symptoms of:</span><br>
                                <div>
                                    <label class="form-check-label"><input type="radio" name="ReportsSymptoms" value="Hyperglycemia" class="form-check-input"> Hyperglycemia:</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="increasedUrination_2" class="form-check-input"> Increased urination</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="increasedThirst" class="form-check-input"> Increased thirst</label>
                                </div>
                                <div>
                                    <label class="form-check-label"><input type="radio" name="ReportsSymptoms" value="Hypoglycemia" class="form-check-input"> Hypoglycemia:</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Sweats"class="form-check-input"> Sweats</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="increasedHunger"  class="form-check-input"> Increased hunger</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Weak"  class="form-check-input"> Weak</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Faint" class="form-check-input"> Faint</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Stupor" class="form-check-input"> Stupor</label>
                                </div>
                            </div>

                            <div class="mt-2">
                                <div class="d-inline-flex">
                                    <span>A1C</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="A1C" id="" class="form-control" style="width: 80px;">
                                    </div>
                                    <span>%</span>
                                </div>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="patientReported" class="form-check-input"> Patient reported</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="labSlip" class="form-check-input"> Lab slip</label>
                                <div class="d-inline-flex ms-2">
                                    <span>Date:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="labSlip_date" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>BS</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="BS" id="" class="form-control" style="width: 80px;">
                                    </div>
                                    <span>mg/dL</span>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>Date:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="BS_date" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>Time:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="time" name="BS_time" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="ms-3 mt-1">
                                    <div>
                                        <label class="form-check-label"><input type="checkbox" value="1" name="FBS" class="form-check-input"> FBS</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="beforeMeal" class="form-check-input"> Before meal</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="afterMeal"  class="form-check-input"> After meal</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Random"  class="form-check-input"> Random</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="HS"  class="form-check-input"> HS</label>
                                    </div>
                                    <div class="mt-1">
                                        <div class="d-inline-flex">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="bloodSugar" class="form-check-input"> Blood sugar ranges:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="bloodsugarRanges" id="" class="form-control">
                                            </div>
                                        </div>
                                        <span class="ms-2">Reported by:</span>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Patient_reported"  class="form-check-input"> Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Caregiver_reported" class="form-check-input"> Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Family_reported"  class="form-check-input"> Family</label>
                                    </div>
                                    <div class="mt-1">
                                        <span>Monitored by:</span>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="patientMonitor"  class="form-check-input"> Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="caregiverMonitor"  class="form-check-input"> Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="familyMonitor" class="form-check-input"> Family</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="nurseMonitor" class="form-check-input"> Nurse</label>
                                        <div class="d-inline-flex ms-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="othernurseMonitor"  class="form-check-input"> Other:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="otherMonitor" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <div class="d-inline-flex ms-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="frequencyofMmonitoring" class="form-check-input"> Frequency of monitoring:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="frequencyofMmonitoring_1" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-inline-flex ms-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Competency" class="form-check-input"> Competency with use of Glucometer:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" id="" name="competencyGlucometer" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" value="1" name="diseaseManagement" class="form-check-input"> <b>Disease Management Problems (explain):</b></label>
                                <textarea name="diseaseManagementExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" value="1" name="diseaseEndocrine" class="form-check-input"> <b>Other Endocrine or Hematology Issues:</b></label>
                                <textarea name="diseaseHematology" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <!--/ SectionGG -->

            <!-- Section J -->
            <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section J</span> <span>Health Conditions</span></h2>
            <div class="table-responsive">
                <table class="table table-bordered align-middle table-py-5">
                    <tr>
                        <td class="bg-secondary-subtle">
                            <b>M1033. Risk for Hospitalization</b>
                            <p>Which of the following signs or symptoms characterize this patient as at risk for hospitalization?</p>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>↓ Check all that apply</strong></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="historyof_falls" class="form-check-input"> 1. <b>History of falls (2 or more falls – or any fall with an injury – in the past 12 months)</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="Unintentional" class="form-check-input"> 2. <b>Unintentional weight loss of a total of 10 pounds or more in the past 12 months</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="Multiple"  class="form-check-input"> 3. <b>Multiple hospitalizations (2 or more) in the past 6 months</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="multipleEmergency" class="form-check-input"> 4. <b>Multiple emergency department visits (2 or more) in the past 6 months</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="declineMental"  class="form-check-input"> 5. <b>Decline in mental, emotional, or behavioral status in the past 3 months</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="observedHistory"  class="form-check-input"> 6. <b>Reported or observed history of difficulty complying with any medical instructions (for example, medications,diet, exercise) in the past 3 months</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="currentlyTaking"  class="form-check-input"> 7. <b>Currently taking 5 or more medications</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="reportsExhaustion"  class="form-check-input"> 8. <b>Currently reports exhaustion</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="currentlyReports"  class="form-check-input"> 9. <b>Other risk(s) not listed in 1-8</b></label></td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label"><input type="checkbox" value="1" name="noneAbove"  class="form-check-input"> 10. <b>None of the above</b></label></td>
                    </tr>
                    <tr><td class="border-0"></td></tr>

                    <!-- RISK FACTORS/HOSPITAL ADMISSION/EMERGENCY ROOM -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>RISK FACTORS/HOSPITAL ADMISSION/EMERGENCY ROOM</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div><label class="form-check-label"><input type="checkbox" value="1" name="visits" class="form-check-input"> <b>N/A THIS VISIT</b></label></div>
                            <div class="mt-1">
                                <span>Risk factors identified and followed up on by:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Discussion" class="form-check-input"> Discussion</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Education" class="form-check-input"> Education</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name=" Training" class="form-check-input"> Training</label>
                            </div>
                            <div class="mt-1">
                                <span>Literature given to:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="literaturePatient"  class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="literatureRepresentative" class="form-check-input"> Representative</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="literatureCaregiver"  class="form-check-input"> Caregiver</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="literaturefamilyMember"  class="form-check-input"> Family Member</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="literatureOther" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="literatureOther_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1">
                                <span>List identified risk factors the patient has related to an <u>unplanned</u> hospital admission or an emergency department visit (e.g., smoking, alcohol,
                                    unsteady gait, etc.).</span>
                                <textarea name="factorsUnplanned" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                            </div>
                            <p class="mt-2"><b>Note:</b> <i>Following a patient’s hospital discharge, HHA are required by CMS to include an assessment of the patient’s level of risk for hospital ED visits and
                                hospital admission. Interventions are required in the patient’s plan of care. When assessing the patient, pay particular attention to patients with CHF, AMI,
                                COPD, CABG, pneumonia, diabetes or hip and knee replacements. Consider these factors co-morbidities, multiple medications, low health literacy level,
                                history of falls, low socioeconomic level, dyspnea, safety, confusion, chronic wounds, depression, lives alone, support system, etc.</i></p>
                        </td>
                    </tr>

                    <!-- PAIN -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>PAIN</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <b>Is patient experiencing pain?</b>
                                <label class="form-check-label ms-2"><input type="radio" name="patient_experiencing" value="Yes" class="form-check-input"> Yes</label>
                                <label class="form-check-label"><input type="radio" name="patient_experiencing" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label"><input type="radio" name="patient_experiencing" value="Unable" class="form-check-input"> Unable to communicate</label>
                            </div>

                            <div class="mt-1">
                                <b>Non-verbals demonstrated:</b>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Diaphoresis"  class="form-check-input"> Diaphoresis</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Grimacing"  class="form-check-input"> Grimacing</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Guarding"  class="form-check-input"> Guarding</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Moaning" class="form-check-input"> Moaning</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Crying"  class="form-check-input"> Crying</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Irritability"  class="form-check-input"> Irritability</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Anger"  class="form-check-input"> Anger</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Tense"  class="form-check-input"> Tense</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Restlessness"  class="form-check-input"> Restlessness</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="changeSigns"  class="form-check-input"> Change in Vital Signs</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="demonstratedOther" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="demonstratedOther_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <label class="form-check-label"><input type="checkbox" name="self_assessment" value="1" class="form-check-input"> Self-assessment</label>
                                <div class="d-inline-flex ms-2 w-50">
                                    <label class="form-check-label"><input type="checkbox" name="implications" value="1" class="form-check-input"> Implications:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="implicationsOther" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <p class="mb-0">If applicable (with or without pain medication) what level of discomfort/pain did the patient report is tolerable?</p>
                                <div>
                                    <div class="d-inline-flex">
                                        <span>Score:</span>
                                        <div class="clean-input-group flex-grow-1 ms-2">
                                            <input type="text" name="pplicableScore" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-inline-flex ms-2 w-50">
                                        <span>Assessment used:</span>
                                        <div class="clean-input-group flex-grow-1 ms-2">
                                            <input type="text" name="assessmentUse" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>

                        <tr>
                        <td>
                            <b>Check box to indicate which pain assessment was used:</b>
                            <label class="form-check-label ms-2"><input type="radio" name="painAssessment" value="Wong-Baker" class="form-check-input"> Wong-Baker</label>
                            <label class="form-check-label ms-2"><input type="radio" name="painAssessment" value="PAINAD" class="form-check-input"> PAINAD</label>
                        </td>
                        </tr>
                        <tr>
                        <td class="border-0 p-0">
                            <table class="table table-bordered align-middle">
                                <tr class="text-center">
                                    <td><b>Pain Assessment</b></td>
                                    <td><b>Site 1</b></td>
                                    <td><b>Site 2</b></td>
                                    <td><b>Site 3</b></td>
                                    <td rowspan="6" class="text-start" style="width: 45%;">
                                        <p class="mb-1"><b>Intensity:</b> (using scales below)</p>
                                        <p class="mb-1 text-center"><b><u>Wong-Baker FACES® Pain Rating Scale**</u></b></p>
                                        <div class="mt-3"><img src="Wong-Baker FACES.png" alt=""></div>
                                        {{-- <div class="my-2">
                                            <b>Collected using:</b>
                                            <label class="form-check-label ms-2"><input type="radio" name="CollectedUsing" class="form-check-input">FACES® Scale</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="CollectedUsing" class="form-check-input">0-10 Scale (subjective reporting)</label>
                                            <p class="text-center mt-2" style="line-height: 1.1;font-size: 13px;"><small>**From Wong D.L., Hockenberry-Eaton M., Wilson D., Winkelstein M.L., Schwartz P.: Wong’s Essentials of
                                                Pediatric Nursing, ed. 6, St. Louis, 2001, p. 1301. Copyrighted by Mosby, Inc. Reprinted by permission.</small></p>
                                        </div> --}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td><input type="number" name="Location_1" id="" class="form-control"></td>
                                    <td><input type="number" name="Location_2" id="" class="form-control"></td>
                                    <td><input type="number" name="Location_3" id="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Present level (0-10)</td>
                                    <td><input type="number" name="Present_1" id="" class="form-control"></td>
                                    <td><input type="number" name="Present_2" id="" class="form-control"></td>
                                    <td><input type="number" name="Present_3" id="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Worst pain gets (0-10)</td>
                                    <td><input type="number" name="pain_1" id="" class="form-control"></td>
                                    <td><input type="number" name="pain_2" id="" class="form-control"></td>
                                    <td><input type="number" name="pain_3" id="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Best pain gets (0-10)</td>
                                    <td><input type="number" name="Best_1" id="" class="form-control"></td>
                                    <td><input type="number" name="Best_2" id="" class="form-control"></td>
                                    <td><input type="number" name="Best_3" id="" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Pain description
                                        (aching, radiating,
                                        throbbing, etc.)</td>
                                    <td><input type="number" name="aching_1" id="" class="form-control"></td>
                                    <td><input type="number" name="aching_2" id="" class="form-control"></td>
                                    <td><input type="number" name="aching_3" id="" class="form-control"></td>
                                </tr>
                            </table>
                        </td>
                        </tr>

                        <!-- Pain Assessment IN Advanced Dementia - PAINAD* -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>Pain Assessment IN Advanced Dementia - PAINAD*</b></td>
                    </tr>
                    <tr>
                        <td class="p-0 border-0" style="padding: 0 !important;">
                            <table class="table table-bordered text-center align-middle">
                                <tr>
                                    <td><b>ITEMS</b></td>
                                    <td><b>0</b></td>
                                    <td><b>1</b></td>
                                    <td><b>2</b></td>
                                    <td><b>SCORE</b></td>
                                </tr>
                                
                                <tr>
                                    <td><b>Independent</b> of Vocalization</td>
                                    <td>Normal</td>
                                    <td>Occasional labored breathing or
                                        short periods of hyperventilation</td>
                                    <td>Noisy labored breathing,
                                        long period of hyperventilation or
                                        Cheyne-Stokes respirations</td>
                                    <td><input type="number" name="Independent_2" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><b>Negative Vocalization</b></td>
                                    <td>None</td>
                                    <td>Occasional moan/groan or
                                        low level speech with a negative quality</td>
                                    <td>Repeated troubled calling out,
                                        loud moaning/groaning/crying</td>
                                    <td><input type="number" name="Negative" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><b>Facial Expression</b></td>
                                    <td>Smiling or inexpressive</td>
                                    <td>Sad/frightened/frown</td>
                                    <td>Facial grimacing</td>
                                    <td><input type="number" name="Expression" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><b>Body Language</b></td>
                                    <td>Relaxed</td>
                                    <td>Tense, distressed pacing/fidgeting</td>
                                    <td>Rigid, fists clenched, knees pulled up;
                                        pulling/pushing away/striking</td>
                                    <td><input type="number" name="Language" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td><b>Consolability</b></td>
                                    <td>No need to console</td>
                                    <td>Distracted or reassured by voice/touch</td>
                                    <td>Unable to console, distract or reassure</td>
                                    <td><input type="number" name="Consolability" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-start align-middle" style="padding: 0!important;">
                                        <div class="d-flex">
                                            <b class="px-3 py-2">**Total scores range from 0 to 10 (based on a scale of 0 to 2 for five items), with a higher score indicating more severe pain 0="no pain" to 10="severe pain").</b>
                                            <b class="bg-dark text-white px-3" style="line-height: 64px;">TOTAL**</b>
                                        </div>
                                    </td>
                                    <td><input type="number" name="TOTAL" id="" class="form-control"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mb-1" style="line-height: 1.1;"><small><b>Instructions:</b> Observe the older person both at rest and during activity/with movement. For each of the items included in the PAINAD, select the score (0, 1, or 2) that reflects the
                                current state of the person’s behavior. Add the score for each item to achieve a total score. Monitor changes in the total score over time and in response to treatment to determine
                                changes in pain. Higher scores suggest greater pain severity.</small></p>
                            <p class="mb-1" style="line-height: 1.1;"><small><b>Note:</b> Behavior observation scores should be considered in conjunction with knowledge of existing painful conditions and report from an individual knowledgeable of the person and
                                their pain behaviors. Remember that some individuals may not demonstrate obvious pain behaviors or cues.</small></p>
                            <p class="mb-1" style="line-height: 1.1;"><small><b>*Reference</b>: Warden, V, Hurley AC, Volicer, V. (2003). Development and psychometric evaluation of the Pain Assessment in Advanced Dementia (PAINAD) Scale. J Am Med Dir Assoc, 4:9-15. Developed at the New England Geriatric
                                Research Education & Clinical Center, Bedford VAMC, MA.; Document updated 1.10.2013.</small></p>
                        </td>
                    </tr>

                    <!-- Which activities are affected: -->
                    <tr>
                        <td>
                            <div>
                                <span>Which activities are affected: (Check all that apply)</span>
                                <div class="ms-3 mt-1">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="functionalCognition"  class="form-check-input"> Functional cognition/focus</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="functionalTransfers"  class="form-check-input"> Transfers</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Hygiene" class="form-check-input"> Hygiene</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="functionalAmbulation"  class="form-check-input"> Ambulation</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Dressing"  class="form-check-input"> Dressing:</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="upper"  class="form-check-input"> lower</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Undressing"  class="form-check-input"> Undressing:</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="upper_2"  class="form-check-input"> upper</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="lower"  class="form-check-input"> lower</label>
                                </div>
                                <div class="ms-3 mt-1">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="Stairs"  class="form-check-input"> Stairs:</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="ascend"  class="form-check-input"> ascend</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="descend"  class="form-check-input"> descend</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Eating_2"  class="form-check-input"> Eating</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Toileting"  class="form-check-input"> Toileting</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Appetite"  class="form-check-input"> Appetite</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Positional"  class="form-check-input"> Positional changes</label>
                                    <div class="d-inline-flex ms-2">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="positionalOther" value="" class="form-check-input"> Other:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="positionalOther_1" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <span>Does the pain interfere/impact the patient’s functional ability and/or safety?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="painImpact" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="painImpact" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                                <textarea name="abilityExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span>What makes pain worse?</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Movement"  class="form-check-input"> Movement</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Ambulation_3"  class="form-check-input"> Ambulation</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Immobility" class="form-check-input"> Immobility</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="immobilityOther" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="immobilityOther_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Is there a pattern to the pain?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="patternPain" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="patternPain" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                                <textarea name="patternExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span>What makes pain better?</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Heat"  class="form-check-input"> Heat</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Ice"  class="form-check-input"> Ice</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Massage"  class="form-check-input"> Massage</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Repositioning"  class="form-check-input"> Repositioning</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Rest_3"  class="form-check-input"> Rest</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Relaxation"  class="form-check-input"> Relaxation</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Medication" class="form-check-input"> Medication</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Diversion" class="form-check-input"> Diversion</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="diversionOther" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="diversionOther_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>How often is breakthrough medication needed?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="breakthroughMedication" value="Never" class="form-check-input"> Never</label>
                                <label class="form-check-label ms-2"><input type="radio" name="breakthroughMedication" value="LTdaily"  class="form-check-input"> Less than daily</label>
                                <label class="form-check-label ms-2"><input type="radio" name="breakthroughMedication" value="Daily"  class="form-check-input"> Daily</label>
                                <label class="form-check-label ms-2"><input type="radio" name="breakthroughMedication" value="2-3times"  class="form-check-input"> 2-3 times/day</label>
                                <label class="form-check-label ms-2"><input type="radio" name="breakthroughMedication" value="MT3times"  class="form-check-input"> More than 3 times/day</label>
                            </div>

                            <div class="mt-1">
                                <span>Does the pain radiate?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="painRadiate" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="painRadiate" value="Occasionally" class="form-check-input"> Occasionally</label>
                                <label class="form-check-label ms-2"><input type="radio" name="painRadiate" value="Continuously" class="form-check-input"> Continuously</label>
                                <label class="form-check-label ms-2"><input type="radio" name="painRadiate" value="Intermittent" class="form-check-input"> Intermittent</label>
                                <span class="ms-4">Current pain control medications adequate:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="medicationsAdequate" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="medicationsAdequate" value="Yes" class="form-check-input"> Yes</label>
                            </div>

                            <div class="mt-1">
                                <span>Check all pharmacological classification(s) based on the pain medication(s) the patient is receiving:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Analgesics" class="form-check-input"> Analgesics</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Corticosteroid"  class="form-check-input"> Corticosteroid</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Antianxiety"  class="form-check-input"> Antianxiety</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="DMARD"  class="form-check-input"> DMARD</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Anticonvulsant"  class="form-check-input"> Anticonvulsant</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Localanesthetics"  class="form-check-input"> Local anesthetics</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Antidepressant"  class="form-check-input"> Antidepressant</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Narcotic" class="form-check-input"> Narcotic</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Antimigraine"  class="form-check-input"> Antimigraine</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="NSAIDs" class="form-check-input"> NSAIDs</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Biologic"class="form-check-input"> Biologic</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Salicylate"  class="form-check-input"> Salicylate</label><br>
                                <div class="ms-2">
                                    <span>pharmacologicalComments:</span>
                                    <textarea name="pharmacologicalComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- CARDIOPULMONARY -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>CARDIOPULMONARY</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <label class="form-check-label"><input type="checkbox" name="heartProblem" value="1" class="form-check-input"> <b>No problem with heart/respiratory system</b></label>
                            </div>
                            <div class="mt-1">
                                <span>Diagnosed disorder(s) of heart/respiratory system (type):</span>
                                <textarea name="respiratorySystem" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span><b>Breath Sounds:</b> (e.g., clear, crackles/rales, wheezes/rhonchi, diminished, absent)</span>
                                <textarea name="breathSounds" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <p class="mb-1 mt-2"><b>Breath Sounds:</b> (e.g., clear, crackles/rales, wheezes/rhonchi, diminished, absent)</p>
                            <div class="d-flex ms-3">
                                <div>
                                    <span>Anterior:</span><br>
                                    <div class="d-inline-flex">
                                        <span>Right</span>
                                        <div class="clean-input-group flex-grow-1 ms-2">
                                            <input type="text" name="rightAnterior" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-inline-flex ms-2">
                                        <span>Left</span>
                                        <div class="clean-input-group flex-grow-1 ms-2">
                                            <input type="text" name="leftAnterior" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="ms-3">
                                    <span>Posterior:</span>
                                    <div>
                                        <div class="d-inline-flex">
                                            <span>Right Upper</span>
                                            <div class="clean-input-group flex-grow-1 ms-2">
                                                <input type="text" name="posteriorRight" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-inline-flex ms-2">
                                            <span>Left Upper</span>
                                            <div class="clean-input-group flex-grow-1 ms-2">
                                                <input type="text" name="posteriorLeft" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-inline-flex">
                                            <span>Right Lower</span>
                                            <div class="clean-input-group flex-grow-1 ms-2">
                                                <input type="text" name="posteriorLower_right" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="d-inline-flex ms-2">
                                            <span>Left Lower</span>
                                            <div class="clean-input-group flex-grow-1 ms-2">
                                                <input type="text" name="posteriorLower_left" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="form-check-label"><input type="checkbox" name="LaboredBbreathing" value="1" class="form-check-input"> Labored breathing</label>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="radio" name="patientSmoked" value="Non-smoker" class="form-check-input"> Non-smoker</label>
                                <span class="ms-3">Has patient ever smoked in the past?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="patientSmoked" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="patientSmoked" value="Yes" class="form-check-input"> Yes</label>
                                <div class="d-inline-flex ms-2">
                                    <span>If yes, date last smoked:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="lastSmoked" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="radio" name="SmokerFrequency" value="Smoker" class="form-check-input"> Smoker - frequency:</label>
                                <label class="form-check-label ms-2"><input type="radio" name="SmokerFrequency" value="Daily" class="form-check-input"> Daily</label>
                                <label class="form-check-label ms-2"><input type="radio" name="SmokerFrequency" value="Occasional" class="form-check-input"> Occasional</label>
                                <label class="form-check-label ms-2"><input type="radio" name="SmokerFrequency" value="VeryOccasional" class="form-check-input"> Very Occasional</label>
                                <div class="d-flex ms-3">
                                    <span>If daily, (include all types of products that are smoked or vaporized) how often:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="vaporized" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <span>Respiratory Treatments utilized at home:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" name="IfOxygen" value="1" class="form-check-input"> Oxygen:</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Oxygen" value="intermittent" class="form-check-input"> intermittent</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Oxygen" value="continuous" class="form-check-input"> continuous</label>
                                <label class="form-check-label ms-3"><input type="checkbox" name="IfVentilator" value="1" class="form-check-input"> Ventilator:</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Ventilator" value="continuous" class="form-check-input"> continuous</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Ventilator" value="atNight" class="form-check-input"> at night</label>
                                <br>
                                <label class="form-check-label ms-3"><input type="checkbox" value="1" name="positiveAirway" class="form-check-input"> Positive airway pressure:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="continuousAirway"   class="form-check-input"> continuous</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="bi_level"   class="form-check-input"> bi-level</label>
                                <div class="d-inline-flex ms-4">
                                    <span>O<sub>2</sub> @</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="bi_level_1" id="" class="form-control" style="width: 70px;">
                                    </div>
                                    <span>LPM via</span>
                                </div>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="cannula"  class="form-check-input"> cannula</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="mask"  class="form-check-input"> mask</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="trach" class="form-check-input"> trach</label>
                                <div class="d-inline-flex ms-4">
                                    <span>O<sub>2</sub>saturation</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="saturation" id="" class="form-control" style="width: 70px;">
                                    </div>
                                    <span>%</span>
                                </div>
                                <br>
                                <div class="d-inline-flex ms-3">
                                    <span>Trach size/type</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="trachSize" id="" class="form-control">
                                    </div>
                                </div>
                                <span class="ms-4">Who manages?</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managesPatient" class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managesRN"  class="form-check-input"> RN</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managesCaregiver"  class="form-check-input"> Caregiver</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="managesFamily" class="form-check-input"> Family</label>
                            </div>

                            <div class="mt-2">
                                <span>Intermittent treatments (e.g., cough & deep breath, medicated inhalation treatments, etc.)</span>
                                <label class="form-check-label ms-2"><input type="radio" name="IntermittentTreatments" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="IntermittentTreatments" value="Yes" class="form-check-input"> Yes, explain:</label>
                                <textarea name="treatmentsExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2 d-flex">
                                <div>
                                    <label class="form-check-label"><input type="checkbox" name="IfCough" value="1" class="form-check-input"> <b>Cough:</b></label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Cough" value="No" class="form-check-input"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Cough" value="Yes" class="form-check-input"> Yes:</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Cough" value="Productive" class="form-check-input"> Productive</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="Cough" value="Non-productive" class="form-check-input"> Non-productive</label>
                                </div>
                                <div class="d-flex ms-2 flex-grow-1">
                                    <span>describe:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="coughExplain" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 d-flex">
                                <div>
                                    <span>Positioning necessary for improved breathing:</span>
                                    <label class="form-check-label ms-2"><input type="radio" name="breathing" value="No" class="form-check-input"> No</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="breathing" value="Yes" class="form-check-input"> Yes:</label>
                                </div>
                                <div class="d-flex ms-2 flex-grow-1">
                                    <span>describe:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="breathingExplain" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <b>Heart Sounds:</b>
                                <label class="form-check-label ms-2"><input type="radio" name="heartSounds" value="Regular" class="form-check-input"> Regular</label>
                                <label class="form-check-label ms-2"><input type="radio" name="heartSounds" value="Irregular" class="form-check-input"> Irregular</label>
                                <label class="form-check-label ms-4"><input type="checkbox" name="IfPacemaker" value="1" class="form-check-input"> Pacemaker:</label>
                                <div class="d-inline-flex ms-2">
                                    <span>Date:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="heartSounds_date" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>Last date checked:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="heartSounds_lasetchecked" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex mt-1">
                                <span>Color of nail beds:</span>
                                <div class="clean-input-group flex-grow-1 ms-1">
                                    <input type="text" name="colorNailbeds" id="" class="form-control">
                                </div>
                            </div>

                            <table class="table table-bordered text-center align-middle mt-3">
                                <tr>
                                    <td><b>Circulation</b></td>
                                    <td>N/A</td>
                                    <td>Non-Pitting</td>
                                    <td>Pitting</td>
                                    <td>Capillary Refill</td>
                                    <td rowspan="6" class="text-start">
                                        <div class="py-3" style="border-bottom: 1px solid;"><label class="form-check-label"><input type="checkbox" value="1" name="xxtremityCramp" class="form-check-input"> Extremity Cramp(s) (location):</label></div>
                                        <div class="py-3" style="border-bottom: 1px solid;"><label class="form-check-label"><input type="checkbox" value="1" name="painRest"  class="form-check-input"> Pain at rest:</label></div>
                                        <div class="py-3"><label class="form-check-label"><input type="checkbox" value="1" class="form-check-input" name="painDependent" > Dependent:</label></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">Edema Pedal Right</td>
                                    <td><input type="checkbox" value="1" name="edemaPedal"  id=""></td>
                                    <td><input type="checkbox" value="1" name="edemaPedal_right_2" id=""></td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_right" value="+1" class="form-check-input"> +1</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_right" value="+2" class="form-check-input"> +2</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_right" value="+3" class="form-check-input"> +3</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_right" value="+4" class="form-check-input"> +4</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_right" value="&lt; 3 sec" class="form-check-input"> &lt;3 sec</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_right" value="&gt; 3 sec" class="form-check-input"> &gt;3 sec</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">Edema Pedal Left</td>
                                    <td><input type="checkbox" value="1" name="EdemaPedal_4" id=""></td>
                                    <td><input type="checkbox" value="1" name="Pedalleft" id=""></td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_left" value="+1" class="form-check-input"> +1</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_left" value="+2" class="form-check-input"> +2</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_left" value="+3" class="form-check-input"> +3</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_left" value="+4" class="form-check-input"> +4</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_left" value="&lt;3 sec" class="form-check-input"> &lt;3 sec</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_left" value="&gt;3 sec" class="form-check-input"> &gt;3 sec</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="checkbox" value="1" name="edema_1" id=""></td>
                                    <td><input type="checkbox" value="1" name="edem" id=""></td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_1" value="+1" class="form-check-input"> +1</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_1" value="+2" class="form-check-input"> +2</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_1" value="+3" class="form-check-input"> +3</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_1" value="+4" class="form-check-input"> +4</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_1" value="+5" class="form-check-input"> +5</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_1" value="&lt;3 sec" class="form-check-input"> &lt;3 sec</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_1" value="&gt;3 sec" class="form-check-input"> &gt;3 sec</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="checkbox" value="1" name="edema_3" id=""></td>
                                    <td><input type="checkbox" value="1" name="edema_4"></td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_2" value="+1" class="form-check-input"> +1</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_2" value="+2" class="form-check-input"> +2</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_2" value="+3" class="form-check-input"> +3</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_2" value="+4" class="form-check-input"> +4</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_2" value="&lt;3 sec" class="form-check-input"> &lt;3 sec</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_2" value="&gt;3 sec" class="form-check-input"> &gt;3 sec</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="checkbox" value="1" name="Pitting_1" id=""></td>
                                    <td><input type="checkbox" value="1" name="Pitting_2" id=""></td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_3" value="+1" class="form-check-input"> +1</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_3" value="+2" class="form-check-input"> +2</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_3" value="+3" class="form-check-input"> +3</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="edemaPedal_3" value="+4" class="form-check-input"> +4</label>
                                    </td>
                                    <td>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_3" value="&lt;3 sec" class="form-check-input"> &lt;3 sec</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CapillaryRefill_3" value="&gt;3 sec" class="form-check-input"> &gt;3 sec</label>
                                    </td>
                                </tr>
                            </table>

                            <div>
                                <b>Respiratory Status:</b><br>
                                <span>Is the patient Short of Breath (SOB)?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="sob" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="sob" value="Yes" class="form-check-input"> Yes &nbsp; If yes,</label>
                                <label class="form-check-label ms-2"><input type="radio" name="sob" value="Assessed" class="form-check-input"> <b>Assessed</b></label>
                                <label class="form-check-label ms-2"><input type="radio" name="sob" value="Reported" class="form-check-input"> <b>Reported</b></label>
                            </div>

                            <div class="mt-2">
                                <span>If yes, explain how/when SOB happens (i.e., patient can’t walk and talk at the same time in cold weather):</span>
                                <textarea name="Respiratory" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span>Does the patient’s respiratory status affect their functional ability and/or safety (i.e., patient becomes dizzy when ascending stairs)?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="respiratoryStatus" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="respiratoryStatus" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                                <textarea name="dizzyExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <label class="form-check-label"><input type="checkbox" name="IfdiseaseExplain" value="1" class="form-check-input"> Disease Management Problems (explain):</label>
                                <textarea name="diseaseExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>
                        </td>
                    </tr>

                    <!-- VITAL SIGNS -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>VITAL SIGNS</b></td>
                    </tr>
                    <tr>
                        <td class="p-0">
                            <table class="table table-borderless">
                                <tr>
                                    <td class="d-block-on-xl">
                                        <div>
                                            <div class="d-inline-flex flex-grow-1">
                                                <b>Temperature:</b>
                                                <div class="clean-input-group flex-grow-1 ms-2">
                                                    <input type="text" name="Temperature" id="" class="form-control">
                                                </div>
                                                <span>F</span>
                                            </div>
                                            <label class="form-check-label ms-2"><input type="radio" name="otrat" value="Oral" class="form-check-input">Oral</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="otrat" value="Temporal/Forehead" class="form-check-input">Temporal/Forehead</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="otrat" value="Rectal" class="form-check-input">Rectal</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="otrat" value="Axillary" class="form-check-input">Axillary</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="otrat" value="Tympanic" class="form-check-input">Tympanic</label>
                                        </div>

                                        <div class="mt-2">
                                            <b>Pulse:</b>
                                            <div class="d-inline-flex ms-2">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="IfApical" class="form-check-input">Apical</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Apical" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-inline-flex ms-2">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="IfBrachial" class="form-check-input">Brachial</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Brachial" id="" class="form-control">
                                                </div>
                                            </div>
                                            <label class="form-check-label ms-2"><input type="radio" name="PulseRI" value="Regular" class="form-check-input">Regular</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="PulseRI" value="Irregular" class="form-check-input">Irregular</label>
                                            <div class="d-inline-flex ms-2">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="IfRadial" class="form-check-input">Radial</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Radial" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-inline-flex ms-2">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="IfCarotid" class="form-check-input">Carotid</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Carotid" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <b>Pulse Oximetry:</b>
                                            <div class="d-inline-flex flex-grow-1 ms-2">
                                                <span>at rest</span>
                                                <div class="clean-input-group flex-grow-1 ms-2">
                                                    <input type="text" name="pulseOximetry" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-inline-flex flex-grow-1 ms-3">
                                                <span>after activity</span>
                                                <div class="clean-input-group flex-grow-1 ms-2">
                                                    <input type="text" name="afterActivity" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex flex-grow-1 ms-3">
                                                <span>(specify activity):</span>
                                                <div class="clean-input-group flex-grow-1 ms-2">
                                                    <input type="text" name="specifyActivity" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="d-block-on-xl">
                                        <table class="table table-bordered align-middle table-py-5">
                                            <tr>
                                                <td style="width: 120px"><b>Blood Pressure:</b></td>
                                                <td style="width: 100px">Left</td>
                                                <td style="width: 100px">Right</td>
                                                <td style="width: 100px">Sitting/Lying</td>
                                                <td style="width: 100px">Standing</td>
                                            </tr>
                                            <tr>
                                                <td>At rest</td>
                                                <td><input type="text" name="atRest_5" class="form-control"></td>
                                                <td><input type="text" name="atRest_1" class="form-control"></td>
                                                <td><input type="text" name="atRest_2" class="form-control"></td>
                                                <td><input type="text" name="atRest_3" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>With activity</td>
                                                <td><input type="text" name="withActivity" class="form-control"></td>
                                                <td><input type="text" name="withActivity_1" class="form-control"></td>
                                                <td><input type="text" name="withActivity_2" class="form-control"></td>
                                                <td><input type="text" name="withActivity_3" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Post activity</td>
                                                <td><input type="text" name="postActivity" class="form-control"></td>
                                                <td><input type="text" name="postActivity_1" class="form-control"></td>
                                                <td><input type="text" name="postActivity_2" class="form-control"></td>
                                                <td><input type="text" name="postActivity_3" class="form-control"></td>
                                            </tr>
                                            </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <div class="d-inline-flex flex-grow-1">
                                            <b>Respirations:</b>
                                            <div class="clean-input-group flex-grow-1 ms-2">
                                                <input type="text" name="Respirations_1" id="" class="form-control">
                                            </div>
                                        </div>
                                        <label class="form-check-label ms-2"><input type="radio" name="RespirationsRI" value="Regular" class="form-check-input">Regular</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="RespirationsRI" value="Irregular" class="form-check-input">Irregular</label>
                                        <div class="d-inline-flex ms-4">
                                            <label class="form-check-label"><input type="checkbox" name="apneaPeriods" value="1" class="form-check-input">Apnea periods</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="apneaPeriods_sec" id="" class="form-control">
                                            </div>
                                            <label class="form-check-label">sec.</label>
                                        </div>
                                        <label class="form-check-label ms-2"><input type="radio" name="RespirationsOR" value="Observed" class="form-check-input">Observed</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="RespirationsOR" value="Reported" class="form-check-input">Reported</label>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- HEIGHT AND WEIGHT -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>HEIGHT AND WEIGHT</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div class="d-inline-flex">
                                    <span>Height:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="HeightA" id="" class="form-control">
                                    </div>
                                </div>
                                <label class="form-check-label ms-2"><input type="radio" name="HeightAR" value="actual" class="form-check-input"> actual</label>
                                <label class="form-check-label ms-2"><input type="radio" name="HeightAR" value="reported" class="form-check-input"> reported</label>
                                <div class="d-inline-flex ms-4">
                                    <span>Weight:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="Weight" id="" class="form-control">
                                    </div>
                                </div>
                                <label class="form-check-label ms-2"><input type="radio" name="WeightAN" value="actual" class="form-check-input"> actual</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="radio" name="WeightAN" value="notWeighed" class="form-check-input"> not weighed, reason:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="WeightA" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2">
                                <span>Weight Change:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" name="weightChange" value="1" class="form-check-input"> N/A</label>
                                <label class="form-check-label ms-2"><input type="radio" name="WeightChangeGL" value="Gain" class="form-check-input"> Gain</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="radio" name="WeightChangeGL"  value="Loss" class="form-check-input"> Loss</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="weightChange_lb" id="" class="form-control">
                                    </div>
                                    <label class="form-check-label">lb.</label>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <span>X</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="weightChange_x" id="" class="form-control">
                                    </div>
                                </div>
                                <label class="form-check-label ms-2"><input type="radio" name="WeightChangeWMY" value="week" class="form-check-input"> week</label>
                                <label class="form-check-label ms-2"><input type="radio" name="WeightChangeWMY" value="month" class="form-check-input"> month</label>
                                <label class="form-check-label ms-2"><input type="radio" name="WeightChangeWMY" value="year" class="form-check-input"> year</label>
                            </div>
                        </td>
                    </tr>

                    <!-- NUTRITIONAL STATUS -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>NUTRITIONAL STATUS</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div><label class="form-check-label"><input type="checkbox" name="nutritionalStatus" value="1" class="form-check-input"> <b>No Problem</b></label></div>
                            <div class="mt-1">
                                <label class="form-check-label"><input type="checkbox" value="1" name="General" class="form-check-input"> General</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="NAS"  class="form-check-input"> NAS</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="NPO"   class="form-check-input"> NPO</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Controlled"   class="form-check-input"> Controlled Carbohydrate</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Renal"   class="form-check-input"> Renal</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="renalOther" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="otherNutritional" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <div class="d-flex">
                                    <div class="d-flex flex-grow-1">
                                        <label class="form-check-label">Nutritional requirements (diet):</label>
                                        <div class="clean-input-group flex-grow-1 ms-2">
                                            <input type="text" name="nutritionalDiet" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-inline-flex ms-2">
                                            <label class="form-check-label"><input type="radio" class="form-check-input" name="IfFluids" value="Increase"> Increase fluids:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="increaseFluids" id="" class="form-control" style="width: 120px;">
                                            </div>
                                            <span>amt.</span>
                                        </div>
                                        <div class="d-inline-flex ms-2">
                                            <label class="form-check-label"><input type="radio" class="form-check-input" name="IfFluids" value="Restrict"> Restrict fluids:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="restrictFluids" id="" class="form-control">
                                            </div>
                                            <span>amt.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <b>Appetite:</b>
                                <label class="form-check-label ms-2"><input type="radio" name="Appetite_2" value="Fair" class="form-check-input"> Fair</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Appetite_2" value="Good"  class="form-check-input"> Good</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Appetite_2" value="Poor"  class="form-check-input"> Poor</label>
                                <label class="form-check-label ms-4"><input type="checkbox" name="Nausea" value="1" class="form-check-input"> Nausea</label>
                                <label class="form-check-label ms-2"><input type="checkbox" name="Vomiting" value="1" class="form-check-input"> Vomiting:</label>
                                <div class="d-inline-flex flex-grow-1 ms-2">
                                    <label class="form-label">Frequency:</label>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="frequencyAppetite" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex flex-grow-1 ms-2">
                                    <label class="form-label">Amount:</label>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="appetiteAmount" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="ms-3">
                                    <label class="form-check-label"><input type="checkbox" name="Heartburn" value="1" class="form-check-input"> Heartburn (food intolerance)</label>
                                    <div class="d-inline-flex ms-2">
                                        <label class="form-check-label"><input type="checkbox" name="Heartburn_1" value="1" class="form-check-input"> Other:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="heartburnOther" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <b>Food/Environmental Allergies:</b>
                                <label class="form-check-label ms-2"><input type="radio" name="FoodAllergies" value="N/A" class="form-check-input"> <b>N/A</b></label>
                                <div class="d-flex">
                                    <label class="form-check-label"><input type="radio" name="FoodAllergies" value="KnownAllergy" class="form-check-input"> Known allergy(ies):</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="otherAllergies" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <b>Alcohol Use:</b>
                                <label class="form-check-label ms-2"><input type="radio" name="AlcoholUse" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="AlcoholUse" value="Yes" class="form-check-input"> Yes &nbsp; If yes, frequency:</label>
                                <label class="form-check-label ms-2"><input type="radio" name="AlcoholUse" value="Daily" class="form-check-input"> Daily</label>
                                <label class="form-check-label ms-2"><input type="radio" name="AlcoholUse" value="Occasional" class="form-check-input"> Occasional</label>
                                <label class="form-check-label ms-2"><input type="radio" name="AlcoholUse" value="VeryOccasional" class="form-check-input"> Very Occasional</label>
                                <label class="form-check-label ms-2"><input type="radio" name="AlcoholUse" value="VeryOccasional" class="form-check-input"> Very Occasional</label>
                                <div class="d-inline-flex flex-grow-1 ms-3">
                                    <span>If daily, amount per day:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="dailyAmount" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <b>Nutritional Approaches:</b> <span>Check all that apply</span>
                                <div class="ms-3">
                                    <div><label class="form-check-label"><input type="checkbox" value="1" name="Parenteral"  class="form-check-input"> Parenteral/IV feeding</label></div>
                                    <div><label class="form-check-label"><input type="checkbox" value="1" name="feedingTube"  class="form-check-input"> Feeding tube - nasogastric of abdominal (e.g., PEG, NG)</label></div>
                                    <div><label class="form-check-label"><input type="checkbox" value="1" name="Mechanically"  class="form-check-input"> Mechanically altered diet - change of texture with solids or fluids (e.g., pureed or thickened</label></div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <label class="form-check-label"><input type="checkbox" value="1" name="Mechanically_1" class="form-check-input"> <b>N/A</b></label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="border-0" style="padding: 0 !important;line-height: normal;">
                            <table class="table table-bordered align-middle">
                                <tr>
                                    <td class="bg-secondary-subtle w-50"><b>Directions:</b> Check each area with “yes” to assessment, then total score to
                                        determine additional risk.</td>
                                    <td class="text-center" style="width: 70px;"><b>YES</b></td>
                                    <td class="text-center bg-secondary-subtle"><b>INTERPRETATION OF ASSESSMENT</b></td>
                                </tr>
                                <tr>
                                    <td>Has an illness or condition that changed the kind and/or amount of food eaten.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="illness" class="form-check-input">2</label></td>
                                    <td rowspan="8">
                                        <div>
                                            <b>0-2 Good</b><br>
                                            <span>As appropriate reassess and/or provide information
                                                based on situation.</span>
                                        </div>
                                        <div class="mt-3">
                                            <b>3-5 Moderate risk</b><br>
                                            <span>Educate, refer, monitor and reevaluate based on patient
                                                situation and organization policy.</span>
                                        </div>
                                        <div class="mt-3">
                                            <b>6 or more High risk</b><br>
                                            <span>Coordinate with physician, dietitian, social service
                                                professional or nurse about how to improve nutritional
                                                health. Reassess nutritional status and educate based
                                                on plan of care.</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Eats fewer than 2 meals per day.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="mealsperDay" class="form-check-input">3</label></td>
                                </tr>
                                <tr>
                                    <td>Eats few fruits, vegetables or milk products.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="milkProducts" class="form-check-input">2</label></td>
                                </tr>
                                <tr>
                                    <td>Has 3 or more drinks of beer, liquor or wine almost every day.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="liquor" class="form-check-input">2</label></td>
                                </tr>
                                <tr>
                                    <td>Has tooth or mouth problems that make it hard to eat.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="mouthProblems"  class="form-check-input">2</label></td>
                                </tr>
                                <tr>
                                    <td>Does not always have enough money to buy the food needed.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="foodNeeded" class="form-check-input">4</label></td>
                                </tr>
                                <tr>
                                    <td>Eats alone most of the time.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="eatsAlone"  class="form-check-input">1</label></td>
                                </tr>
                                <tr>
                                    <td>Takes 3 or more different prescribed or over-the-counter drugs a day.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="drugs"  class="form-check-input">1</label></td>
                                </tr>
                                <tr>
                                    <td>Without wanting to, has lost or gained 10 pounds in the last 6 months.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="gained"  class="form-check-input">2</label></td>
                                    <td rowspan="3">
                                        <small>Reprinted with permission by the Nutrition Screening Initiative, a project of the
                                            American Academy of Family Physicians, the American Dietetic Association and the
                                            National Council on the Aging, Inc., and funded in part by a grant from Ross Products
                                            Division, Abbott Laboratories Inc.</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Not always physically able to shop, cook and/or feed self.</td>
                                    <td><label class="form-check-label"><input type="checkbox" value="1" name="notAlways" class="form-check-input">2</label></td>
                                </tr>
                                <tr>
                                    <td class="text-end"><b>TOTAL</b></td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div>
                                <span>Describe at risk intervention:</span> <label class="form-check-label ms-3"><input type="checkbox" name="IfRiskinterventionExplain" value="1" class="form-check-input"> <b>N/A</b></label>
                                <textarea name="riskinterventionExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span>If applicable, describe safety risk:</span> <label class="form-check-label ms-3"><input type="checkbox" name="IfSafetyriskExplain" value="1" class="form-check-input"> <b>N/A</b></label>
                                <textarea name="safetyriskExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span>Patient’s current ability to plan and safely prepare light meals (for example, cereal, sandwich):</span>
                                <div class="ms-1">
                                    <div><label class="form-check-label ms-3"><input type="checkbox" value="1" name="independentlyPlan" class="form-check-input"> Able to independently plan, prepare and reheat light meals</label></div>
                                    <div><label class="form-check-label ms-3"><input type="checkbox" value="1" name="cognitively"  class="form-check-input"> Is physically, cognitively, and mentally able to prepare light meals on a regular basis but has not routinely performed light meal preparation in the past</label></div>
                                    <div><label class="form-check-label ms-3"><input type="checkbox" value="1" name="prepareLight"  class="form-check-input"> <u>Unable</u> to prepare light meals due to physical, cognitive, or mental limitations</label></div>
                                    <div><label class="form-check-label ms-3"><input type="checkbox" value="1" name="unablePrepare"  class="form-check-input"> <u>Unable</u> to prepare or reheat any light meals</div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </table>
            </div>
            <!--/ Section J -->

            <!-- Section M -->
            <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section M</span> <span>Skin Conditions</span></h2>
            <div class="table-responsive">
                <table class="table table-bordered align-middle table-py-8">
                    <!-- INTEGUMENTARY STATUS -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>INTEGUMENTARY STATUS</b></td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img src="INTEGUMENTARY STATUS Photo.png" alt="">
                        </td>
                    </tr>
                    <!-- WOUND CARE: -->
                    <tr>
                        <td>
                            <div>
                                <b>WOUND CARE: (Check all that apply)</b> <label class="form-check-label ms-3"><input type="checkbox" name="NAwoundCare" value="1" class="form-check-input"> <b>N/A</b></label>
                            </div>
                            <div class="mt-1">
                                <span>Wound care done during this visit:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="WoundCare" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="WoundCare" value="Yes" class="form-check-input"> Yes</label>
                                <div class="d-inline-flex flex-grow-1 ms-2">
                                    <span>Location(s) wound site:</span>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="woundCare_location" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <label class="form-check-label"><input type="checkbox" name="IfSoiledDressing" value="1" class="form-check-input"> Soiled dressing removed by:</label>
                                <label class="form-check-label ms-2"><input type="radio" name="SoiledDressing" value="Patient" class="form-check-input"> Patient</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="radio" name="SoiledDressing" value="Caregiver" class="form-check-input"> Caregiver (name)</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" id="" class="form-control" name="WCCaregiverName">
                                    </div>
                                </div>
                                <label class="form-check-label"><input type="radio" name="SoiledDressing" value="Family" class="form-check-input"> Family</label>
                                <label class="form-check-label ms-2"><input type="radio" name="SoiledDressing"  value="RN" class="form-check-input"> RN</label>
                                <label class="form-check-label ms-2"><input type="radio" name="SoiledDressing"  value="PT" class="form-check-input"> PT</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="radio" name="SoiledDressing"  value="Other" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="otherWoundcare" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Technique:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="Technique" value="Sterile" class="form-check-input"> Sterile</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Technique" value="Clean" class="form-check-input"> Clean</label>
                                <label class="form-check-label ms-4"><input type="checkbox" value="1" name="Hands_washed"  class="form-check-input"> Hands washed:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="before" class="form-check-input"> before</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="after_dressing"  class="form-check-input"> after dressing change</label>
                            </div>

                            <div class="mt-1">
                                <div class="d-flex">
                                    <div class="d-flex flex-grow-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="woundCleaned"  class="form-check-input"> Wound cleaned with (specify):</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="woundCleaned_Other" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex ms-2 flex-grow-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="wounddressingApplied" class="form-check-input"> Wound dressing applied (specify):</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="other_wounddressingApplied" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <div class="d-flex">
                                    <div class="d-flex flex-grow-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="woundIrrigated" class="form-check-input"> Wound irrigated with (specify):</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="other_woundIrrigated" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex ms-2 flex-grow-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="dressingSecured" class="form-check-input"> Dressing secured with (specify):</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="other_dressingSecured" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <div class="d-flex">
                                    <div class="d-flex flex-grow-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="woundPacked" class="form-check-input"> Wound packed with (specify):</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="other_woundPacked" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="d-flex ms-2 flex-grow-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="dressedproperly" class="form-check-input"> Soiled dressing properly disposed of (per agency policy)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Patient tolerated procedure well:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="PatientTolerated" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="PatientTolerated" value="Yes" class="form-check-input"> Yes</label>
                            </div>

                            <div class="mt-1">
                                <label class="form-label mb-1">Comments:</label>
                                <textarea name="woundComments" id="" cols="30" rows="1" class="form-control"></textarea>
                            </div>
                        </td>
                    </tr>

                    <!-- DIABETIC FOOT EXAM: -->
                    <tr>
                        <td>
                            <div>
                                <b>DIABETIC FOOT EXAM: (Check all that apply)</b> <label class="form-check-label ms-3"><input type="checkbox" name="footExam" class="form-check-input"> <b>N/A</b></label>
                            </div>
                            <div class="mt-1">
                                <span>Frequency of diabetic foot exam:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="FrequencyOfDiabetic" value="Daily" class="form-check-input"> Daily</label>
                                <label class="form-check-label ms-2"><input type="radio" name="FrequencyOfDiabetic" value="Weekly" class="form-check-input"> Weekly</label>
                                <label class="form-check-label ms-2"><input type="radio" name="FrequencyOfDiabetic" value="Monthly" class="form-check-input"> Monthly</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="radio" name="FrequencyOfDiabetic" value="Other" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="FrequencyOfDiabetic_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Done by:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="DoneBy" value="Patient" class="form-check-input"> Patient</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="radio" name="DoneBy" value=" Caregiver" class="form-check-input"> Caregiver (name)</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" id="" class="form-control" name="DoneByCaregiver">
                                    </div>
                                </div>
                                <label class="form-check-label"><input type="radio" name="DoneBy" value="Family" class="form-check-input"> Family</label>
                                <label class="form-check-label ms-2"><input type="radio" name="DoneBy" value="RN" class="form-check-input"> RN</label>
                                <label class="form-check-label ms-2"><input type="radio" name="DoneBy" value="PT" class="form-check-input"> PT</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="radio" name="DoneBy" value="Other" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" id="otherDoneBy" name="otherDoneBy" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Exam by clinician this visit:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="ExamByClinician" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="ExamByClinician" value="Yes" class="form-check-input"> Yes</label>
                            </div>

                            <div class="mt-1">
                                <label class="form-label mb-1">Integument findings:</label>
                                <textarea name="findingsExplain" id="" cols="30" rows="1" class="form-control"></textarea>
                            </div>

                            <div class="mt-1">
                                <span>Pedal pulses:</span>
                                <span class="ms-2">Present</span>
                                <label class="form-check-label ms-2"><input type="radio" name="PedalPulsesPresent" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="PedalPulsesPresent" value="left" class="form-check-input"> left</label>

                                <span class="ms-3">Absent</span>

                                <label class="form-check-label ms-2"><input type="radio" name="PedalPulsesAbsent" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="PedalPulsesAbsent" value="left" class="form-check-input"> left</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label">Comment:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="comment_PedalPulsesAbsent" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Loss of sense of:</span>
                                <span class="ms-2">Warm</span>
                                <label class="form-check-label ms-2"><input type="radio" name="LossOfSenseWarm" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="LossOfSenseWarm" value="left"  class="form-check-input"> left</label>

                                <span class="ms-3">Cold</span>
                                <label class="form-check-label ms-2"><input type="radio" name="LossOfSenseCold" value="right"  class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="LossOfSenseCold" value="left"  class="form-check-input"> left</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label">Comment:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="otherCold" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Numbness</span>
                                <label class="form-check-label ms-2"><input type="radio" name="Numbness" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Numbness" value="left" class="form-check-input"> left</label>

                                <span class="ms-3">Tingling</span>
                                <label class="form-check-label ms-2"><input type="radio" name="NumbnessTingling" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="NumbnessTingling" value="left" class="form-check-input"> left</label>

                                <span class="ms-3">Burning</span>
                                <label class="form-check-label ms-2"><input type="radio" name="NumbnessBurning" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="NumbnessBurning" value="left" class="form-check-input"> left</label>

                                <span class="ms-3">Leg hair:</span>
                                <span class="ms-2">Present</span>
                                <label class="form-check-label ms-2"><input type="radio" name="LegHairPresent" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="LegHairPresent" value="left" class="form-check-input"> left</label>

                                <span class="ms-3">Absent</span>
                                <label class="form-check-label ms-2"><input type="radio" name="LegHairAbsent" value="right" class="form-check-input"> right</label>
                                <label class="form-check-label ms-2"><input type="radio" name="LegHairAbsent" value="left" class="form-check-input"> left</label>
                            </div>

                            <div class="mt-1">
                                <label class="form-label mb-1">Comments:</label>
                                <textarea name="AbsentComment" id="" cols="30" rows="1" class="form-control"></textarea>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div>
                                <span>Does the patient’s integumentary status affect the patient’s functional ability and/or safety (i.e., patient has a high risk for skin tears that
                                    could result in secondary wound infection)</span>
                                <label class="form-check-label ms-2"><input type="radio" name="integumentaryStatus" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="integumentaryStatus" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                                <textarea name="woundinfectionExplain" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span>Does the patient appear to be at risk for acquiring any type of integumentary problem(s) based on the clinical factors (e.g., immobility,
                                    incontinence, skin thinning, impaired sensory, poor nutrition, skin disorder, poor circulation, etc.)?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="patientAppear" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="patientAppear" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                                <textarea name="patientAppear_1" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>
                        </td>
                    </tr>

                    <!-- M1306 -->
                    <tr>
                        <td class="bg-secondary-subtle">
                            <b>M1306.</b> Does this patient have at least one <b>Unhealed Pressure Ulcer/Injury at Stage 2 or Higher</b> or designated as Unstageable? (Excludes Stage 1 pressure injuries and all healed pressure ulcers/injuries)
                        </td>
                        </tr>
                        <tr>
                        <td>
                            <label class="form-check-label"><input type="radio" name="patientUnhealedPressureUlcer" value="No" class="form-check-input"> 0. <b>No</b></label>
                            <label class="form-check-label ms-3"><input type="radio" name="patientUnhealedPressureUlcer" value="Yes" class="form-check-input"> 1. <b>Yes</b></label>
                        </td>
                        </tr>

                        <!-- INTEGUMENTARY STATUS (Continued) -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>INTEGUMENTARY STATUS</b> (Continued)</td>
                    </tr>
                    <tr>
                        <td class="bg-secondary-subtle text-center"><b>WOUND/LESION ASSESSMENT</b></td>
                    </tr>
                    <tr>
                        <td class="border-0" style="padding: 0 !important;">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">WOUND/LESION<br><span style="white-space: nowrap;">Date Originally Reported ►</span></td>
                                        <td class="align-middle">
                                            <div class="input-group clean-input-group">
                                                <label class="input-group-text"><b>#1</b></label>
                                                <input type="text" name="woundLesion_1" id="" class="form-control">
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="input-group clean-input-group">
                                                <label class="input-group-text"><b>#2</b></label>
                                                <input type="text"  name="woundLesion_2" id="" class="form-control">
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="input-group clean-input-group">
                                                <label class="input-group-text"><b>#3</b></label>
                                                <input type="text"  name="woundLesion_3" id="" class="form-control">
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="input-group clean-input-group">
                                                <label class="input-group-text"><b>#4</b></label>
                                                <input type="text" id=""  name="woundLesion_4" class="form-control">
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="input-group clean-input-group">
                                                <label class="input-group-text"><b>#5</b></label>
                                                <input type="text"  name="woundLesion_5" id="" class="form-control">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle">
                                            <div>Type</div>
                                            <div class="mt-5"><small>*Include depth of infected
                                                surgical wound(s) in Size
                                                category below ▼</small></div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="Arterial" class="form-check-input">Arterial</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="Diabetic" class="form-check-input">Diabetic foot ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="Malignancy" class="form-check-input">Malignancy</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="Mechanical/Trauma" class="form-check-input">Mechanical/Trauma</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="PressureUlcer" class="form-check-input">Pressure ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="Surgical*" class="form-check-input">Surgical*</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="DialysisAccess" class="form-check-input">Dialysis access</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="VenousUlcer" class="form-check-input">Venous stasis ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="IV" class="form-check-input">IV</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type1" value="Other" class="form-check-input">Other:</label>
                                                <textarea name="" id="" cols="30" rows="1" class="form-control mt-1" name="OtherType1"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="Arterial" class="form-check-input">Arterial</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="Diabetic" class="form-check-input">Diabetic foot ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="Malignancy" class="form-check-input">Malignancy</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="Mechanical/Trauma" class="form-check-input">Mechanical/Trauma</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="PressureUlcer" class="form-check-input">Pressure ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="Surgical*" class="form-check-input">Surgical*</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="DialysisAccess" class="form-check-input">Dialysis access</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="VenousStasis" class="form-check-input">Venous stasis ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="IV" class="form-check-input">IV</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type2" value="Other" class="form-check-input">Other:</label>
                                                <textarea name="" id="" cols="30" rows="1" class="form-control mt-1" name="OtherType2"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="Arterial" class="form-check-input">Arterial</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="Diabetic" class="form-check-input">Diabetic foot ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="Malignancy" class="form-check-input">Malignancy</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="Mechanical/Trauma" class="form-check-input">Mechanical/Trauma</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="PressureUlcer" class="form-check-input">Pressure ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="Surgical*" class="form-check-input">Surgical*</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="DialysisAccess" class="form-check-input">Dialysis access</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="VenousStasis" class="form-check-input">Venous stasis ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="IV" class="form-check-input">IV</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type3" value="Other" class="form-check-input">Other:</label>
                                                <textarea name="" id="" cols="30" rows="1" class="form-control mt-1" name="OtherType3"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="Arterial" class="form-check-input">Arterial</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="Diabetic" class="form-check-input">Diabetic foot ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="Malignancy" class="form-check-input">Malignancy</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="Mechanical/Trauma" class="form-check-input">Mechanical/Trauma</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="PressureUlcer" class="form-check-input">Pressure ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="Surgical" class="form-check-input">Surgical*</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="DialysisAccess" class="form-check-input">Dialysis access</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="VenousStasis" class="form-check-input">Venous stasis ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="IV" class="form-check-input">IV</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type4" value="Other" class="form-check-input">Other:</label>
                                                <textarea name="" id="" cols="30" rows="1" class="form-control mt-1" name="OtherType4"></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="Arterial" class="form-check-input">Arterial</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="Diabetic" class="form-check-input">Diabetic foot ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="Malignancy" class="form-check-input">Malignancy</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="Mechanical/Trauma" class="form-check-input">Mechanical/Trauma</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="PressureUlcer" class="form-check-input">Pressure ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="Surgical*" class="form-check-input">Surgical*</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="DialysisAccess" class="form-check-input">Dialysis access</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="VenousUlcer" class="form-check-input">Venous stasis ulcer</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="IV" class="form-check-input">IV</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Type5" value="Other" class="form-check-input">Other:</label>
                                                <textarea name="OtherType5" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Size (cm) (LxWxD)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Tunneling/Sinus Tract</td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">length</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTract_length" id="" class="form-control">
                                                </div>
                                                <span>cm</span>
                                            </div>
                                            <div class="d-flex">
                                                <label class="form-check-label">@</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTract_cm" id="" class="form-control">
                                                </div>
                                                <span>o’clock</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">length</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractlength" id="" class="form-control">
                                                </div>
                                                <span>cm</span>
                                            </div>
                                            <div class="d-flex">
                                                <label class="form-check-label">@</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractcm" id="" class="form-control">
                                                </div>
                                                <span>o’clock</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">length</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractcm_1" id="" class="form-control">
                                                </div>
                                                <span>cm</span>
                                            </div>
                                            <div class="d-flex">
                                                <label class="form-check-label">@</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractcm_2" id="" class="form-control">
                                                </div>
                                                <span>o’clock</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">length</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractcm_3" id="" class="form-control">
                                                </div>
                                                <span>cm</span>
                                            </div>
                                            <div class="d-flex">
                                                <label class="form-check-label">@</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractcm_4" id="" class="form-control">
                                                </div>
                                                <span>o’clock</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">length</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractcm_5" id="" class="form-control">
                                                </div>
                                                <span>cm</span>
                                            </div>
                                            <div class="d-flex">
                                                <label class="form-check-label">@</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="sinusTractcm_6" id="" class="form-control">
                                                </div>
                                                <span>o’clock</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Undermining (cm)</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label" style="width: 120px;">cm, from</label>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_1" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">to</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_2" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">o’clock</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_3" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label" style="width: 120px;">cm, from</label>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_4" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">to</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_5" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">o’clock</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_6" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label" style="width: 120px;">cm, from</label>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_7" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">to</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_8" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">o’clock</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_9" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label" style="width: 120px;">cm, from</label>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_10" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">to</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_11" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">o’clock</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_12" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label" style="width: 120px;">cm, from</label>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_13" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">to</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Undermining_14" id="" class="form-control">
                                                </div>
                                                <label class="form-check-label">o’clock</label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Stage<br><b>Stage (pressure ulcers only)</b></td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">Stage:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Stage_1" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="Stage1" value="Unstageable" class="form-check-input">Unstageable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage1" value="Unobservable" class="form-check-input">Unobservable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage1" value="DTI" class="form-check-input">DTI</label></div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">Stage:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Stage_2" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="Stage2" value="Unstageable" class="form-check-input">Unstageable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage2" value="Unobservable" class="form-check-input">Unobservable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage2" value="DTI" class="form-check-input">DTI</label></div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">Stage:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="Stage_3" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="Stage3" value="Unstageable" class="form-check-input">Unstageable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage3" value="Unobservable" class="form-check-input">Unobservable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage3" value="DTI" class="form-check-input">DTI</label></div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">Stage:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text"  name="Stage_4" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="Stage4" value="Unstageable" class="form-check-input">Unstageable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage4" value="Unobservable"  class="form-check-input">Unobservable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage4" value="DTI" class="form-check-input">DTI</label></div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label">Stage:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text"  name="Stage_5" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="Stage5" value="Unstageable" class="form-check-input">Unstageable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage5" value="Unobservable" class="form-check-input">Unobservable</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Stage5" value="DTI" class="form-check-input">DTI</label></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Severity of Ulcer<br>(exclude pressure ulcers)</td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Skin_only"  class="form-check-input">Skin only</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Fatty_tissue" class="form-check-input">Fatty tissue</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Muscle"  class="form-check-input">Muscle</label>
                                                <label class="form-check-label ms-3"><input type="checkbox" value="1" name="Bone"  class="form-check-input">Bone</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="MuscleNecrosis"  class="form-check-input">Muscle necrosis</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Bone_necrosis"  class="form-check-input">Bone necrosis</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="necrosisOther"  class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" id="" name="necrosisOther1"  class="form-control" style="width: 80px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Skin"  class="form-check-input">Skin only</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Fatty_tissue_1"  class="form-check-input">Fatty tissue</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Muscle_1"  class="form-check-input">Muscle</label>
                                                <label class="form-check-label ms-3"><input type="checkbox" value="1" name="Bone_1"  class="form-check-input">Bone</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="MuscleNecrosis_1" class="form-check-input">Muscle necrosis</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Bone_necrosis_1"  class="form-check-input">Bone necrosis</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="necrosisOther_1"  class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" id="" name="necrosisOther2" class="form-control" style="width: 80px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Skin_1"  class="form-check-input">Skin only</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Fatty_tissue_2"  class="form-check-input">Fatty tissue</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Muscle_2"   class="form-check-input">Muscle</label>
                                                <label class="form-check-label ms-3"><input type="checkbox" value="1" name="Bone_2"   class="form-check-input">Bone</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="MuscleNecrosis_2"   class="form-check-input">Muscle necrosis</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Bone_necrosis_2"   class="form-check-input">Bone necrosis</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="necrosisOther_2"  class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" id="" class="form-control" name="necrosisOther5" style="width: 80px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Skin_2" value="" class="form-check-input">Skin only</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1"  name="Fatty_tissue_3" value="" class="form-check-input">Fatty tissue</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1"  name="Muscle_3" value="" class="form-check-input">Muscle</label>
                                                <label class="form-check-label ms-3"><input type="checkbox" value="1" name="Bone_3" value="" class="form-check-input">Bone</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1"  name="MuscleNecrosis_3" value="" class="form-check-input">Muscle necrosis</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1"   name="Bone_necrosis_3" value="" class="form-check-input">Bone necrosis</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1"  name="necrosisOther_3" value="" class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" id="" name="necrosisOther3" class="form-control" style="width: 80px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Skin_3" value="" class="form-check-input">Skin only</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Fatty_tissue_4" value="" class="form-check-input">Fatty tissue</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Muscle_4" value="" class="form-check-input">Muscle</label>
                                                <label class="form-check-label ms-3"><input type="checkbox" value="1" name="Bone_4" value="" class="form-check-input">Bone</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="MuscleNecrosis_4" value="" class="form-check-input">Muscle necrosis</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Bone_necrosis_4" value="" class="form-check-input">Bone necrosis</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="necrosisOther_4" value="" class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text"  name="necrosisOther4" id="" class="form-control" style="width: 80px;">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Odor</td>
                                        <td>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor1" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor1" value="Yes" class="form-check-input">Yes</label>
                                        </td>
                                        <td>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor2" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor2" value="Yes" class="form-check-input">Yes</label>
                                        </td>
                                        <td>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor3" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor3" value="Yes" class="form-check-input">Yes</label>
                                        </td>
                                        <td>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor4" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor4" value="Yes" class="form-check-input">Yes</label>
                                        </td>
                                        <td>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor5" value="No" class="form-check-input">No</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="Odor5" value="Yes" class="form-check-input">Yes</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Surrounding Skin</td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Erythema"  class="form-check-input">Erythema</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Induration"   class="form-check-input">Induration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Maceration"  class="form-check-input">Maceration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Normal"   class="form-check-input">Normal</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="surroundingOther" value="Other" class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="surroundingOther1" id="" class="form-control" style="width: 100px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Erythema_1"  class="form-check-input">Erythema</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Induration_1"  class="form-check-input">Induration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Maceration_1"   class="form-check-input">Maceration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Normal_1"   class="form-check-input">Normal</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="surroundingOther_1"  class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="surroundingOther2" id="" class="form-control" style="width: 100px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Erythema_2"   class="form-check-input">Erythema</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Induration_2"   class="form-check-input">Induration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Maceration_2"   class="form-check-input">Maceration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Normal_2"   class="form-check-input">Normal</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1"  name="surroundingOther_5" class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="surroundingOther6" id="" class="form-control" style="width: 100px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Erythema_6"  class="form-check-input">Erythema</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Induration_6"  class="form-check-input">Induration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Maceration_6"   class="form-check-input">Maceration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Normal_6"   class="form-check-input">Normal</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="surroundingOther_3" class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="surroundingOther4" id="" class="form-control" style="width: 100px;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Erythema_4" value=""  class="form-check-input">Erythema</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Induration_4" value=""  class="form-check-input">Induration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Maceration_4" value=""  class="form-check-input">Maceration</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Normal_4" value=""  class="form-check-input">Normal</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="surroundingOther_4" class="form-check-input">Other:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="surroundingOther5" id="" class="form-control" style="width: 100px;">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Edema</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Appearance of the<br>Wound Bed</td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="Slough" class="form-check-input">Slough</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceSlough" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="Eschar" class="form-check-input">Eschar</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceEschar" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="Granulation" class="form-check-input">Granulation</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceGranulation" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceSlough11" class="form-check-input">Slough</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceEschar11" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="IfAppearanceEschar_11" class="form-check-input">Eschar</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceEschar_11" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceGranulation11" class="form-check-input">Granulation</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceGranulation_11" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceSlough22" class="form-check-input">Slough</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceSlough_22" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceEschar22" class="form-check-input">Eschar</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceEschar_22" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceGranulation33" class="form-check-input">Granulation</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceGranulation_33" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceSlough4" class="form-check-input">Slough</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceSlough_4" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceEschar44" class="form-check-input">Eschar</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceEschar_44" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceGranulation44" class="form-check-input">Granulation</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceGranulation_44" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceSlough55" class="form-check-input">Slough</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceSlough_55"  id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceEschar5" class="form-check-input">Eschar</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceEschar_5" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="checkbox" value="1" name="appearanceGranulation55" class="form-check-input">Granulation</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="appearanceGranulation_5" id="" class="form-control">
                                                </div>
                                                <span>%</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Drainage/Amount</td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage1" value="None" class="form-check-input">None</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage1" value="Small" class="form-check-input">Small</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage1" value="Moderate" class="form-check-input">Moderate</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage1" value="Large" class="form-check-input">Large</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage2" value="None" class="form-check-input">None</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage2" value="Small" class="form-check-input">Small</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage2" value="Moderate" class="form-check-input">Moderate</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage2" value="Large" class="form-check-input">Large</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage3" value="None" class="form-check-input">None</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage3" value="Small" class="form-check-input">Small</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage3" value="Moderate" class="form-check-input">Moderate</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage3" value="Large" class="form-check-input">Large</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage4" value="None" class="form-check-input">None</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage4" value="Small" class="form-check-input">Small</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage4" value="Moderate" class="form-check-input">Moderate</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage4" value="Large" class="form-check-input">Large</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage5" value="None" class="form-check-input">None</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage5" value="Small" class="form-check-input">Small</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Drainage5" value="Moderate" class="form-check-input">Moderate</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Drainage5" value="Large" class="form-check-input">Large</label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Color</td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Color1" value="Clear" class="form-check-input">Clear</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Color1" value="Tan" class="form-check-input">Tan</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="Color1" value="Serosanguineous" class="form-check-input">Serosanguineous</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Color1" value="Other" class="form-check-input">Other</label></div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Color2" value="Clear" class="form-check-input">Clear</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Color2" value="Tan" class="form-check-input">Tan</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="Color2" value="Serosanguineous" class="form-check-input">Serosanguineous</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Color2" value="Other" class="form-check-input">Other</label></div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Color3" value="Clear" class="form-check-input">Clear</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Color3" value="Tan" class="form-check-input">Tan</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="Color3" value="Serosanguineous" class="form-check-input">Serosanguineous</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Color3" value="Other" class="form-check-input">Other</label></div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Color4" value="Clear" class="form-check-input">Clear</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Color4" value="Tan" class="form-check-input">Tan</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="Color4" value="Serosanguineous" class="form-check-input">Serosanguineous</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Color4" value="Other" class="form-check-input">Other</label></div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Color5" value="Clear" class="form-check-input">Clear</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Color5" value="Tan" class="form-check-input">Tan</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="Color5" value="Serosanguineous" class="form-check-input">Serosanguineous</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="Color5" value="Other" class="form-check-input">Other</label></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Consistency</td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Consistency1" value="Thin" class="form-check-input">Thin</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Consistency1"  value="Thick" class="form-check-input">Thick</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Consistency2"  value="Thin" class="form-check-input">Thin</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Consistency2"  value="Thick" class="form-check-input">Thick</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Consistency3"  value="Thin" class="form-check-input">Thin</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Consistency3" value="Thick" class="form-check-input">Thick</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Consistency4"  value="Thin" class="form-check-input">Thin</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Consistency4"  value="Thick" class="form-check-input">Thick</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="Consistency5"  value="Thin" class="form-check-input">Thin</label>
                                                <label class="form-check-label ms-3"><input type="radio" name="Consistency5"  value="Thick" class="form-check-input">Thick</label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Incision Status</td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus1" value="Status_1" class="form-check-input">Well Approximated</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus1" value="Status_2" class="form-check-input">Incisional separation</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus1" value="Status_3" class="form-check-input">Planned secondary Intention</label></div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus2" value="Status_4" class="form-check-input">Well Approximated</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus2" value="Status_5" class="form-check-input">Incisional separation</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus2" value="Status_6" class="form-check-input">Planned secondary Intention</label></div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus3" value="Status_7" class="form-check-input">Well Approximated</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus3" value="Status_8" class="form-check-input">Incisional separation</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus3" value="Status_9" class="form-check-input">Planned secondary Intention</label></div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus4" value="Status_10" class="form-check-input">Well Approximated</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus4" value="Status_11" class="form-check-input">Incisional separation</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus4" value="Status_12" class="form-check-input">Planned secondary Intention</label></div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus5" value="Status_13" class="form-check-input">Well Approximated</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus5" value="Status_14" class="form-check-input">Incisional separation</label></div>
                                            <div><label class="form-check-label"><input type="radio" name="IncisionStatus5" value="Status_15" class="form-check-input">Planned secondary Intention</label></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Dialysis Access</td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="DialysisAccess1" value="PD" class="form-check-input">PD</label>
                                                <label class="form-check-label ms-2"><input type="radio" name="DialysisAccess1" value="AV Graft" class="form-check-input">AV Graft</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="DialysisAccess1" value="AV Fistula" class="form-check-input">AV Fistula</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label">Site:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="dialysisAccess" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="DialysisAccess2" value="PD" class="form-check-input">PD</label>
                                                <label class="form-check-label ms-2"><input type="radio" name="DialysisAccess2" value="AV Graft" class="form-check-input">AV Graft</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="DialysisAccess2" value="AV Fistula" class="form-check-input">AV Fistula</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label">Site:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="DialysisAccess_site" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="DialysisAccess3" value="PD" class="form-check-input">PD</label>
                                                <label class="form-check-label ms-2"><input type="radio" name="DialysisAccess3" value="AV Graft" class="form-check-input">AV Graft</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="DialysisAccess3" value="AV Fistula" class="form-check-input">AV Fistula</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label">Site:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="DialysisAccess3_site" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="DialysisAccess4" value="PD" class="form-check-input">PD</label>
                                                <label class="form-check-label ms-2"><input type="radio" name="DialysisAccess4" value="AV Graft" class="form-check-input">AV Graft</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="DialysisAccess4"  value="AV Fistula" class="form-check-input">AV Fistula</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label">Site:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" id="" name="DialysisAccess4_site" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="radio" name="DialysisAccess5" value="PD" class="form-check-input">PD</label>
                                                <label class="form-check-label ms-2"><input type="radio" name="DialysisAccess5" value="AV Graft" class="form-check-input">AV Graft</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="radio" name="DialysisAccess5" value="AV Fistula" class="form-check-input">AV Fistula</label></div>
                                            <div class="d-flex">
                                                <label class="form-check-label">Site:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="DialysisAccess5_site" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">IV</td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IV1" value="Peripheral" class="form-check-input">Peripheral</label></div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="IV1" value="PICC" class="form-check-input">PICC</label></div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="radio" name="IV1" value="Central" class="form-check-input">Central:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="IV_1" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex" style="white-space: nowrap;"># of lumens</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="lumens" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IV2" value="Peripheral" class="form-check-input">Peripheral</label></div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="IV2" value="PICC" class="form-check-input">PICC</label></div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="radio" name="IV2" value="Central" class="form-check-input">Central:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="IV2_1" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex" style="white-space: nowrap;"># of lumens</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="oflumens" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IV3" value="Peripheral" class="form-check-input">Peripheral</label></div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="IV3"  value="PICC" class="form-check-input">PICC</label></div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="radio" name="IV3"  value="Central" class="form-check-input">Central:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" id="" name="IV3_1" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex" style="white-space: nowrap;"># of lumens</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="oflumens_1" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IV4" value="Peripheral" class="form-check-input">Peripheral</label></div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="IV4" value="PICC" class="form-check-input">PICC</label></div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="radio" name="IV4" value="IV4_1" class="form-check-input">Central:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="IV4_1" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex" style="white-space: nowrap;"># of lumens</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="oflumens_2" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="radio" name="IV5" value="Peripheral" class="form-check-input">Peripheral</label></div>
                                            <div class="mt-1"><label class="form-check-label"><input type="radio" name="IV5" value="PICC" class="form-check-input">PICC</label></div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex"><input type="radio" name="IV5" value="Central" class="form-check-input">Central:</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text"  name="IV5_1" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <label class="form-check-label d-flex" style="white-space: nowrap;"># of lumens</label>
                                                <div class="clean-input-group flex-grow-1">
                                                    <input type="text" name="oflumens_3" id="" class="form-control">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="bg-secondary-subtle align-middle">Date Healed</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">
                                            <label class="form-label mb-1">Comments:</label>
                                            <textarea name="healedComments" id="" cols="30" rows="2" class="form-control"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>

                    <!-- MEDICATIONS -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>MEDICATIONS</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <label class="form-check-label"><input type="checkbox" value="1" name="drugRegimen" class="form-check-input"> Drug Regimen Review completed.</label>
                                <div class="d-inline-flex ms-3">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">Date:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="date" name="drugRegimenDate" id="" class="form-control">
                                    </div>
                                </div>
                                <label class="form-check-label ms-3"><input type="radio" name="DrugRegimen_2" value="No change" class="form-check-input"> No change</label>
                                <label class="form-check-label ms-3"><input type="radio" name="DrugRegimen_2"value="Order obtained"  class="form-check-input"> Order obtained</label>
                            </div>

                            <div class="mt-1">
                                <span>Check if any of the following were identified:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Potential"  class="form-check-input"> Potential adverse effects</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="drugReactions" class="form-check-input"> Drug reactions</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Ineffective" class="form-check-input"> Ineffective drug therapy</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Significant"  class="form-check-input"> Significant side effects</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="significantDrug"  class="form-check-input"> Significant drug interactions</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Duplicate" class="form-check-input"> Duplicate drug therapy</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="NonCompliance" class="form-check-input"> Non-compliance with drug therapy</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="highRisk"  class="form-check-input"> High-risk drugs</label>
                            </div>

                            <div class="mt-1">
                                <label class="form-label mb-1">Comments:</label>
                                <textarea name="highriskcomment" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>

                            <div class="mt-2">
                                <b>Medication Allergies:</b>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="medicationAllergies" class="form-check-input"> No known medication allergies</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Aspirin" class="form-check-input"> Aspirin</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Penicillin" class="form-check-input"> Penicillin</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Sulfa" class="form-check-input"> Sulfa</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="medicationallergiesOther" class="form-check-input"> Other(s):</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="medicationallergiesOther_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <b>Psychotropic drug use:</b>
                                <label class="form-check-label ms-2"><input type="radio" name="Psychotropic" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Psychotropic" value="Yes" class="form-check-input"> Yes (see med sheet)</label>
                            </div>
                            <div class="mt-1">
                                <b>Financial ability to pay for medications:</b>
                                <label class="form-check-label ms-2"><input type="radio" name="FinancialAbility" value="Yes" class="form-check-input"> Yes</label>
                                <label class="form-check-label ms-2"><input type="radio" name="FinancialAbility" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="checkbox" name="FinancialAbility_1" value="1" class="form-check-input"> No change since last assessment</label>
                                <div class="ms-2 mt-1">
                                    <span>If no, was MSW referral made?</span>
                                    <label class="form-check-label ms-2"><input type="radio" name="MSWreferral" value="Yes" class="form-check-input"> Yes</label>
                                    <label class="form-check-label ms-2"><input type="radio" name="MSWreferral" value="No" class="form-check-input"> No &nbsp; If no, comment:</label>
                                    <textarea name="MSWreferralComment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Does the patient have special needs or problems administering any of their medications by any route?</span>
                            <label class="form-check-label ms-2"><input type="radio" name="problemsAdministering" value="No" class="form-check-input"> No</label>
                            <label class="form-check-label ms-2"><input type="radio" name="problemsAdministering" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                            <textarea name="administeringComments" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                        </td>
                    </tr>

                    <!-- INFUSION -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>INFUSION</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div><label class="form-check-label"><input type="checkbox" name="infusion" value="1" class="form-check-input"> <b>N/A</b></label></div>
                            <div class="mt-1">
                                <span>Does the patient have an IV?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="patientIV" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="patientIV" value="Yes" class="form-check-input"> Yes</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">If yes, type(s):</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="patient_IV" id="" class="form-control">
                                    </div>
                                </div>
                                <br>
                                
                                <div class="d-inline-flex ms-2 mt-1">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">If yes, number of site(s):</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="number" name="numberSite" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="d-inline-flex ms-2 mt-1">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">Site location(s)</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="siteLocations" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex mt-1">
                                <label class="form-check-label d-flex" style="white-space: nowrap;">Total number of lumen(s):</label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="number" name="lumen" id="" class="form-control">
                                </div>
                            </div>

                            <div class="mt-1">
                                <div class="d-inline-flex">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">Insertion date(s):</label>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="date" name="insertionDate" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">Flush solution/frequency:</label>
                                    <div class="clean-input-group flex-grow-1 ms-2">
                                        <input type="text" name="flushSolution" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Lumen(s) patent:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="LumenPatent" value="Yes" class="form-check-input"> Yes</label>
                                <label class="form-check-label ms-2"><input type="radio" name="LumenPatent" value="No" class="form-check-input"> No</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">If no, explain:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="LumenpatentComments" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="ms-2 mt-1">
                                    <label class="form-check-label"><input type="checkbox" name="notFlushed" value="1" class="form-check-input"> N/A not flushed</label>
                                    <div class="d-inline-flex ms-3">
                                        <label class="form-check-label d-flex" style="white-space: nowrap;">Injection cap change frequency:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="injectionCap" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Dressing change during visit:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="DressingChange" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="DressingChange" value="Yes" class="form-check-input"> Yes</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label d-flex" style="white-space: nowrap;">Dressing change frequency:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="changeFrequency" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="ms-2 mt-1">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="flushed" class="form-check-input"> N/A not flushed</label>
                                    <div class="ms-3">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="Sterile" class="form-check-input"> Sterile</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Clean"  class="form-check-input"> Clean</label>
                                        <span class="ms-3">Performed by:</span>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="performedPatient" class="form-check-input"> Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="performedNurse" class="form-check-input"> Nurse</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="performedCaregiver" class="form-check-input"> Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="performedFamily" class="form-check-input"> Family</label>
                                        <div class="d-inline-flex ms-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="performedOther" class="form-check-input"> Other:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="performedOther_1" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex mt-1">
                                <label class="form-check-label d-flex" style="white-space: nowrap;">Site/skin condition:</label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="text" name="skinCondition" id="" class="form-control">
                                </div>
                            </div>

                            <div class="d-flex mt-1">
                                <label class="form-check-label d-flex" style="white-space: nowrap;">Infusion solution (type/volume/rate):</label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="text" name="infusionSolution" id="" class="form-control">
                                </div>
                            </div>

                            <div class="d-flex mt-1">
                                <label class="form-check-label"><input type="checkbox" value="1" name="pumpType" class="form-check-input"> Pump: (type, specify):</label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="text" name="pumpType_1" id="" class="form-control">
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Administered by:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="administeredbyPatient"  class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="administeredbyNurse"  class="form-check-input"> Nurse</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="administeredbyCaregiver"  class="form-check-input"> Caregiver</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="administeredbyFamily" class="form-check-input"> Family</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="administeredbyOther"  class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="administeredby_Other" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex mt-1">
                                <label class="form-check-label d-flex" style="white-space: nowrap;">Purpose of intravenous:</label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="text" name="intravenous" id="" class="form-control">
                                </div>
                            </div>

                            <div class="mt-1">
                                <span>Infusion provided during this visit?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="InfusionProvided" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="InfusionProvided" value="Yes" class="form-check-input"> Yes, specify:</label>
                                <textarea name="infusion_Provided" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-3"><b>Review medication profile for details</b></div>
                        </td>
                    </tr>

                    <!-- IMMUNIZATIONS -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>IMMUNIZATIONS</b></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mb-0">Within the past 12 months:</p>
                            <div class="ms-2">
                                <label class="form-check-label"><input type="checkbox" value="1" name="InfluenzaFlu" class="form-check-input"> Influenza (specifically
                                    this year's flu season)</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Influenza" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="Influenza" value="Yes" class="form-check-input"> Yes</label>
                            </div>
                        
                            <div class="mt-1">
                                <span>According to immunization guidelines:</span><br>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="accordingPneumonia"  class="form-check-input"> Pneumonia</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="accordingTetanus"  class="form-check-input"> Tetanus</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="accordingShingles"  class="form-check-input"> Shingles</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="accordingHepatitis"  class="form-check-input"> Hepatitis C</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="otherHepatitis"  class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="immunizationGuidelines" id="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <label class="input-group clean-input-group mt-1">
                                <span class="input-group-text fw-medium">Needs:</span>
                                <input type="text" id="" name="Needs" class="form-control">
                            </label>

                            <div class="mt-1">
                                <b>Last COVID-19 Vaccination:</b><br>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Vaccination"  class="form-check-input">
                                    Initial vaccine series</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Vaccination_1" class="form-check-input"> Booster:</label>
                                <label class="form-check-label ms-2"><input type="radio" name="vaccination_booster" value="1st" class="form-check-input">
                                    1st</label>
                                <label class="form-check-label ms-2"><input type="radio" name="vaccination_booster" value="2nd" class="form-check-input">
                                    2nd</label>
                                <label class="form-check-label ms-2"><input type="radio" name="vaccination_booster" value="3rd" class="form-check-input">
                                    3rd</label>
                                <label class="form-check-label ms-2"><input type="radio" name="vaccination_booster" value="4th" class="form-check-input">
                                    4th</label>
                                <label class="form-check-label ms-2"><input type="radio" name="vaccination_booster" value="5th" class="form-check-input">
                                    5th</label>
                            </div>

                            <div class="mt-1">
                                <label class="mb-1"><b>Medical restrictions or personal preferences impacting immunizations:</b></label>
                                <textarea class="form-control" name="personalPreferences" id="" cols="30" rows="1"></textarea>
                            </div>
                        </td>
                        </tr>

                        <!-- REFUSED CARES -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>REFUSED CARES</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <span>Did the</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="refusedPatient"  class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="refusedRepresentative"  class="form-check-input"> Representative</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="refusedOther"  class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="refusedOther1" id="" class="form-control">
                                    </div>
                                    <span>refuse</span>
                                </div>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="refuseCare"  class="form-check-input"> Care(s)</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="refuseService" class="form-check-input"> Service(s) since the last assessment?</label>
                            </div>

                            <div class="mt-1">
                                <label class="form-check-label"><input type="radio" name="ServiceYesNo" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="ServiceYesNo" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain:</label>
                                <textarea name="serviceExplain" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                            </div>

                            <div class="mt-2">
                                <span>Are the</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="theCare" class="form-check-input"> Care(s)</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="theServices" class="form-check-input"> Service(s)</label>
                                <span class="ms-3">they refused a significant part of the recommended plan of care?</span>
                                <label class="form-check-label ms-2"><input type="radio" name="ServiceYesNo_1" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="ServiceYesNo_1" value="Yes" class="form-check-input"> Yes &nbsp; If yes, explain how:</label>
                                <textarea name="thecareExplain" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                            </div>
                        </td>
                    </tr>

                        <!-- PATIENT/CAREGIVER/REPRESENTATIVE/FAMILY EDUCATION AND TRAINING FOR CARE PLANNING -->
                        <tr>
                        <td class="text-center bg-dark text-white py-2"><b>PATIENT/CAREGIVER/REPRESENTATIVE/FAMILY EDUCATION AND TRAINING FOR CARE PLANNING</b></td>
                    </tr>
                    <tr>
                        <td style="padding: 0!important;">
                            <div class="px-3 py-2">Check all that apply. Because several people may be involved with education and training, document details of the outcome(s) and person(s) involved per agency policy.</div>

                            <table class="table table-borderless">
                                <tr class="text-center">
                                    <td></td>
                                    <td><b>Knowledge<br>Deficit Identified</b></td>
                                    <td><b>Individuals to be<br>Instructed</b></td>
                                </tr>
                                <tr>
                                    <td>Wound care:</td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="WoundCare_2" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="WoundCare_2"  value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="WoundCare_2"  value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="woundCarePatient" class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="woundCareCaregiver"   class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="woundCareRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="woundCareFamily"  class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Diabetic:</span>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="diabeticFoot"  class="form-check-input">Foot exam</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="diabeticCare"  class="form-check-input">Care</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="Diabetic" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="Diabetic" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="Diabetic" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="diabeticPatient" class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="diabeticCaregiver" class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="diabeticRepresentative" class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="diabeticFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Insulin administration:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="InsulinAdministration" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="InsulinAdministration" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="InsulinAdministration" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="insulinPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="insulinCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="insulinRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="insulinFamily"  class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Glucometer use:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="GlucometerUse" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="GlucometerUse" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="GlucometerUse" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="glucometer" class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="glucometerPatient" class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="glucometerRepresentative" class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="glucometerFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Nutritional management:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="NutritionalManagement" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="NutritionalManagement" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="NutritionalManagement" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="nutritionalPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="nutritionalCaregiver" class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="nutritionalRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="nutritionalFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Medication(s) administration:</span><br>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Oral"  class="form-check-input">Oral</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Injected"  class="form-check-input">Injected</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Infused"  class="form-check-input">Infused</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Inhaled"  class="form-check-input">Inhaled</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Topical" class="form-check-input">Topical</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="MedicationAdministration" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="MedicationAdministration" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="MedicationAdministration" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="MedicationAdministration_Patient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="MedicationAdministration_Caregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="MedicationAdministration_Representative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="MedicationAdministration_Family"  class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Pain management:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="PainManagement" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PainManagement" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PainManagement" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="painManagement_Patient" class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="painManagement_Caregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="painManagement_Representative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="painManagement_Family" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Oxygen use:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="OxygenUse" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="OxygenUse" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="OxygenUse" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="oxygenPatient" class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="oxygenCaregiver"   class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="oxygenRepresentative" class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="oxygenFamily"  class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Use of medical devices:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="medicalDevices" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="medicalDevices" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="medicalDevices" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="medicalPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="medicalCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="medicalRepresentative" class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="medicalFamily"  class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Pressure reduction:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="PressureReduction" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PressureReduction" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PressureReduction" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="pressurePatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="pressureCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="pressureRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="pressureFamily"  class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Catheter care:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="CatheterCare" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CatheterCare" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CatheterCare" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="catheterPatient" class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="catheterCaregiver" class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="catheterRepresentative" class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="catheterFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Trach care:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="TrachCare" value="yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="TrachCare" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="TrachCare" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="trachPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="trachCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="trachRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="trachFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Ostomy care:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="OstomyCare" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="OstomyCare" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="OstomyCare" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="ostomyPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="ostomyCaregiver"   class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="ostomyRepresentative"   class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="ostomyFamily"  class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Emergency Preparedness Plan:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="PreparednessPlan" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PreparednessPlan" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PreparednessPlan" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="emergencyPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="emergencyCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="emergencyRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="emergencyFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Infection control:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="InfectionControl" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="InfectionControl" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="InfectionControl" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="infectioncontrolPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="infectioncontrolCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="infectioncontrolRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="infectioncontrolFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>S/S Report to agency:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="ReportToAgency" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="ReportToAgency" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="ReportToAgency" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="agencyPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="agencyCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="agencyRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="agencyFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Patient’s Rights:</span>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="radio" name="PatientRights" value="Yes" class="form-check-input">Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PatientRights" value="No" class="form-check-input">No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="PatientRights" value="N/A" class="form-check-input">N/A</label>
                                    </td>
                                    <td class="text-center">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="rightsPatient"  class="form-check-input">Patient</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="rightsCaregiver"  class="form-check-input">Caregiver</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="rightsRepresentative"  class="form-check-input">Representative</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="rightsFamily" class="form-check-input">Family</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <label class="form-label mb-1">Other care(s):</label>
                                        <textarea name="rightsComments" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </td>
                                </tr>
                            </table>

                            <div class="px-3 py-2">
                                <span>Teach back method used to:</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodEducate" class="form-check-input"> Educate</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodTrain"  class="form-check-input"> Train</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodPatient"  class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodCaregiver"  class="form-check-input"> Caregiver</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodRepresentative" class="form-check-input"> Representative</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodFamily"  class="form-check-input"> Family</label>
                                <div class="ms-2 mt-1">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="methodusedPatient"  class="form-check-input"> Patient</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodusedCaregiver"  class="form-check-input"> Caregiver</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="methodusedRepresentative"  class="form-check-input"> Representative</label>
                                    <div class="d-inline-flex ms-2">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="methodusedFamilyeducated"  class="form-check-input"> Family educated this visit specifically for:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="methodusedFamilyeducated_other" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-2 mt-1">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="teachPatient"  class="form-check-input"> Patient</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="teachCaregiver"  class="form-check-input"> Caregiver</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="teachRepresentative"  class="form-check-input"> Representative</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="teachFamily"  class="form-check-input"> Family made aware that</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="teachEducation"  class="form-check-input"> education</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="teachTraining"  class="form-check-input"> training will continue during follow-up visits as needed.</label>
                                </div>
                            </div>

                            <div class="px-3 py-2">
                                <span>Does the</span>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="usedteachPatient" class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="usedteachCaregiver"  class="form-check-input"> Caregiver</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="usedteachRepresentative"  class="form-check-input"> Representative</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="usedteachFamily"  class="form-check-input"> Family</label>
                                <span class="ms-2">have an action plan when disease symptoms exacerbate (e.g., when to call the homecare agency vs. emergency services)?:</span>
                                <label class="form-check-label ms-2"><input type="radio" name="actionPlan" value="Yes" class="form-check-input"> Yes</label>
                                <label class="form-check-label ms-2"><input type="radio" name="actionPlan" value="No" class="form-check-input"> No</label>
                            </div>

                            <div class="px-3 py-2"><b>After completing this section document the education and training outcome(s), per agency policy. Go to page 22 under Rehabilitation
                                Potential/Anticipated Discharge for Plan of Care to document status of patient’s anticipated discharge.</b></div>
                        </td>
                    </tr>

                    <!-- PATIENT/CAREGIVER/REPRESENTATIVE/FAMILY EDUCATION AND TRAINING FOR CARE PLANNING -->
                    <tr>
                        <td class="bg-secondary-subtle text-center"><b>SKILLED INTERVENTIONS/INSTRUCTIONS DONE THIS VISIT (Check all applicable)</b></td>
                    </tr>
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>NURSING INTERVENTIONS/INSTRUCTIONS</b></td>
                    </tr>
                    <tr>
                        <td style="padding: 0!important;">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="skilledObservation"  class="form-check-input">Skilled observation & assessment</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="foleyCare"  class="form-check-input">Foley care</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Wound_care"  class="form-check-input">Wound care</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Wound_dressing"  class="form-check-input">Wound dressing</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Pressure_ulcer"  class="form-check-input">Pressure ulcer/injury care</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Venipuncture"  class="form-check-input">Venipuncture</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="ngchange"  class="form-check-input">Change:</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="NG_tube"  class="form-check-input">NG tube</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="G_tube"  class="form-check-input">G tube</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Adminofvitamin"  class="form-check-input">Admin. of vitamin B<sub>12</sub></label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Prep"  class="form-check-input">Prep.</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="adminInsulin"  class="form-check-input">Admin. &nbsp; insulin</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Teach_admin"  class="form-check-input">Teach</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="admin_teach"  class="form-check-input">Admin.</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="ivs"  class="form-check-input">IVs</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="Clysis"  class="form-check-input">Clysis</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Teach_ostomy"  class="form-check-input">Teach ostomy</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="conduit_care"  class="form-check-input">Ileo. conduit care</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Teaching"  class="form-check-input">Teach</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="tube_feedings"  class="form-check-input">Admin. &nbsp; tube feedings</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="teaching_1"  class="form-check-input">Teach</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="careofTrach"  class="form-check-input">Admin. &nbsp; care of trach</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="terminally"  class="form-check-input">Teach care - terminally ill</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="IM_injection"  class="form-check-input">IM injection</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="SQ_injection"  class="form-check-input">SQ injection</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Psych_intervention" class="form-check-input">Psych. intervention</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="SS_infection"  class="form-check-input">Observe S/S infection</label></div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Diabetic_observation"  class="form-check-input">Diabetic observation</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="diabetic_care"  class="form-check-input">Teach diabetic care</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Observe"  class="form-check-input">Observe</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="Teach_medication"  class="form-check-input">Teach medication (N or C)</label>
                                            </div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="effects"  class="form-check-input">effects</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="side_effects"  class="form-check-input">side effects</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Physiology_Disease"  class="form-check-input">Physiology/Disease process teaching</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Diet_teaching"  class="form-check-input">Diet teaching</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Safety_factors"  class="form-check-input">Safety factors</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Prenatal_assessment"  class="form-check-input">Prenatal assessment</label></div>
                                        </td>
                                        <td>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Post_partum" class="form-check-input">Post-partum assessment</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Teachcareof"  class="form-check-input">Teach care of:</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="infant"  class="form-check-input">infant</label>
                                                <label class="form-check-label ms-1"><input type="checkbox" value="1" name="child"  class="form-check-input">child</label>
                                            </div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Pain_management"  class="form-check-input">Pain management</label></div>
                                            <div><label class="form-check-label"><input type="checkbox" value="1" name="Fall_safety"  class="form-check-input">Fall safety teaching</label></div>
                                            <div>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Fall_safetyOther"  class="form-check-input">Other:</label>
                                                <textarea name="Fall_safetyOtherExplain" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>

                    <!-- SUPERVISORY VISIT: -->
                    <tr>
                        <td class="bg-secondary-subtle text-center">
                            <b>SUPERVISORY VISIT:</b>
                            <label class="form-check-label ms-2"><input type="radio" name="SUPERVISORY_VISIT" value="Yes" class="form-check-input"> Yes</label>
                            <label class="form-check-label ms-2"><input type="radio" name="SUPERVISORY_VISIT" value="No" class="form-check-input"> No</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0!important;">
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div>
                                            <b>SUPERVISORY VISIT:</b>
                                            <label class="form-check-label ms-2"><input type="radio" name="SUPERVISORY_VISIT_SU" value="Yes" class="form-check-input">Scheduled</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="SUPERVISORY_VISIT_SU" value="No" class="form-check-input">Unscheduled</label>
                                        </div>
                                        <div class="mt-1">
                                            <b>CARE PLAN UPDATED:</b>
                                            <label class="form-check-label ms-2"><input type="radio" name="CARE_PLAN_UPDATED" value="Yes" class="form-check-input">No</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="CARE_PLAN_UPDATED" value="No" class="form-check-input">Yes</label>
                                        </div>
                                        <div class="mt-1">
                                            <b>CARE PLAN FOLLOWED:</b>
                                            <label class="form-check-label ms-2"><input type="radio" name="CARE_PLAN_FOLLOWED" value="Yes" class="form-check-input">Yes</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="CARE_PLAN_FOLLOWED" value="No" class="form-check-input">No, explain:</label>
                                            <textarea name="CARE_PLAN_FOLLOWED_1" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <b>STAFF:</b>
                                            <label class="form-check-label ms-2"><input type="radio" name="STAFF" value="Present" class="form-check-input">Present</label>
                                            <label class="form-check-label ms-2"><input type="radio" name="STAFF" value="Not present" class="form-check-input">Not present</label>
                                            <label class="form-check-label ms-4"><input type="checkbox" value="1" name="AIDE"  class="form-check-input"><b>AIDE</b></label>
                                            <label class="form-check-label ms-2"><input type="checkbox" value="1" name="LPN_LVN" class="form-check-input"><b>LPN/LVN</b></label>
                                        </div>
                                        <div class="d-flex mt-1">
                                            <label class="form-check-label"><b>NEXT SCHEDULED SUPERVISORY VISIT:</b></label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="nextScheduled" id="" class="form-control">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <b>IS</b>
                                <label class="form-check-label ms-2"><input type="radio" name="PFR_SATISFIED" value="PATIENT" class="form-check-input"> <b>PATIENT</b></label>
                                <label class="form-check-label ms-2"><input type="radio" name="PFR_SATISFIED" value="FAMILY" class="form-check-input"> <b>FAMILY</b></label>
                                <label class="form-check-label ms-2"><input type="radio" name="PFR_SATISFIED" value="REPRESENTATIVE" class="form-check-input"> <b>REPRESENTATIVE</b></label>
                                <b class="ms-2">SATISFIED WITH CARE?</b>
                                <label class="form-check-label ms-2"><input type="radio" name="PFR_SATISFIED" value="Yes" class="form-check-input"> Yes</label>
                                <label class="form-check-label ms-2"><input type="radio" name="PFR_SATISFIED" value="No" class="form-check-input"> No, explain:</label>
                                <textarea name="IScomment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>
                            <div class="mt-2">
                                <label class="form-check-label"><b>OBSERVATION OF:</b></label>
                                <textarea name="OBSERVATIONcomment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>
                            <div class="mt-2">
                                <label class="form-check-label"><b>EDUCATION/TRAINING OF:</b></label>
                                <textarea name="EDUCATIONcomment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                            </div>
                        </td>
                    </tr>

                    <!-- RECERTIFICATION SUMMARY -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>RECERTIFICATION SUMMARY</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <b>CONFINED TO HOME (homebound):</b>
                                <label class="form-check-label ms-2"><input type="radio" name="CONFINED_TO_HOME" value="No" class="form-check-input"> No</label>
                                <label class="form-check-label ms-2"><input type="radio" name="CONFINED_TO_HOME" value="Yes" class="form-check-input"> Yes, and the patient either</label>
                            </div>
                            <div class="mt-1 ms-2">
                                <div>
                                    <p class="mb-1"><b>1. Criteria One:</b> because of illness or injury, (must choose at least one):</p>
                                    <div class="ms-2">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="adaptiveDevice" class="form-check-input"> Dependent upon adaptive device(s)</label><br>
                                        <span class="ms-2">Check all that apply:</span>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="crutches" class="form-check-input"> crutches</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="canes"   class="form-check-input"> canes</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="walker_3"   class="form-check-input"> walker</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="wheelchair"   class="form-check-input"> wheelchair:</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="manual"   class="form-check-input"> manual</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="motorized"   class="form-check-input"> motorized</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="prosthetic"   class="form-check-input"> prosthetic limb</label><br>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="scooter"  class="form-check-input"> scooter</label>
                                        <label class="form-check-label ms-2"><input type="checkbox" value="1" name="helper"   class="form-check-input"> a helper</label>
                                        <div class="d-inline-flex ms-2">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="injuryOther" class="form-check-input"> Other:</label>
                                            <div class="clean-input-group flex-grow-1">
                                                <input type="text" name="injuryOther_1" id="" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="specialTransportation"  class="form-check-input"> Needs special transportation as indicated by</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="special_Transportation" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="d-flex mt-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="hysicalAssist" class="form-check-input"> Needs physical assist to leave as indicated by:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="hysicalAssist_1" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mt-2"><b>AND/OR</b></div>
                                    <div class="d-flex mt-1">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="medicallyContraindicated"  class="form-check-input"> Leaving home is medically contraindicated due to:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text" name="edicallyContraindicated_other" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <p class="mb-1"><b>Criteria Two:</b></p>
                                    <div class="ms-2">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="normalInability"  class="form-check-input"> There exists a normal inability to leave the home as indicated by infrequent outings, consisting of:</label>
                                        <textarea name="ormalInabilityComment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                    </div>
                                    <div class="mt-2 ms-2"><b>AND</b></div>
                                    <div class="ms-2">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="leavingHome"  class="form-check-input"> Leaving home requires a considerable and taxing effort due to functional impairment caused by diagnosis, as indicated by effort such as:</label>
                                        <textarea name="leavingHomeComment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="mb-1"><b>SUMMARY OF SETBACKS/IMPROVEMENTS SINCE LAST ASSESSMENT</b></p>
                            <div class="ms-2">
                                <div><b>Patient continues to be involved with decision-making towards personal goals. The following is noted:</b></div>
                                <div>
                                    <span>Improvements noted with the desired functional taks:</span>
                                    <label class="form-check-label ms-3"><input type="checkbox" value="1" name="desiredFunctional"  class="form-check-input"><b> N/A</b></label>
                                    <textarea name="desiredFunctionalComment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>
                                <div class="mt-2">
                                    <span>Patient continues to have difficulty/no gains made with the desired functional taks:</span>
                                    <label class="form-check-label ms-3"><input type="checkbox" value="1" name="functionaltaks"  class="form-check-input"><b> N/A</b></label>
                                    <textarea name="functionaltaksComment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>
                                <div class="mt-2">
                                    <span>Continued nursing care needed in order to (expresses new goals, continue with/modify present goals, etc.):</span>
                                    <label class="form-check-label ms-3"><input type="checkbox" name="expresses" class="form-check-input"><b> N/A</b></label>
                                    <textarea name="expressesComment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- SUMMARY CHECKLIST -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>SUMMARY CHECKLIST</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <b>Care Plan:</b><br>
                                <label class="form-check-label"><input type="radio" name="CarePlan" value="1" 
                                        class="form-check-input"> Reviewed</label>
                                <label class="form-check-label ms-2"><input type="radio" name="CarePlan" value="2"
                                        class="form-check-input"> Revised with involvement from:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="CareRevised"
                                        class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="Care"
                                            class="form-check-input"> Representative</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="CarePatient"
                                                class="form-check-input"> Caregiver</label>
                                <label class="form-check-label ms-4"><input type="checkbox" value="1" name="CareCaregiver"
                                        class="form-check-input"> <b>Outcome achieved</b></label>
                                </div>

                                <div class="mt-2">
                                <b>MEDICATION STATUS:</b>
                                <label class="form-check-label"><input type="checkbox" value="1" name="Medication_regimen"  class="form-check-input"> Medication regimen completed/reviewed - see page 19</label><br>
                                <label class="form-label mb-1">Comments:</label>
                                <textarea name="Medication_regimenComments" id="" cols="30" rows="1" class="form-control"></textarea>
                                </div>

                                <div class="mt-2">
                                <p class="mb-1"><b>CARE COORDINATION:</b></p>
                                <label class="form-check-label"><input type="checkbox" value="1" name="certifyingPhysician" class="form-check-input"> Certifying Physician</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="certifyingSN"   class="form-check-input"> SN</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="certifyingPT"   class="form-check-input"> PT</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="certifyingOT"  class="form-check-input"> OT</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="certifyingSLP"  class="form-check-input"> SLP</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="certifyingMSW"   class="form-check-input"> MSW</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="certifyingAide"   class="form-check-input"> Aide</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="certifyingOther"  class="form-check-input"> Other (specify)</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="certifyingOther_1" id="" class="form-control">
                                    </div>
                                </div>

                                <p class="my-1">Was a referral made to MSW for assistance with:</p>
                                <div class="ms-2">
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="communityResources"  class="form-check-input"> Community resources</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="livingWill"  class="form-check-input"> Living will</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="counselingNeeds"  class="form-check-input"> Counseling needs</label>
                                    <label class="form-check-label ms-2"><input type="checkbox" value="1" name="unsafeEnvironment"  class="form-check-input"> Unsafe environment</label>
                                    <div class="d-flex mt-1 ms-2">
                                        <label class="form-check-label"><input type="checkbox" value="1"  name="unsafeEnvironment_1" class="form-check-input"> Other:</label>
                                        <div class="clean-input-group flex-grow-1">
                                            <input type="text"  name="unsafeEnvironment_com" id="" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="ms-2 mt-1">
                                        <div class="d-inline-flex mt-1">
                                            <label class="form-check-label d-flex" style="white-space: nowrap;">Date:</label>
                                            <div class="clean-input-group flex-grow-1 ms-2">
                                                <input type="date" name="unsafeEnvironment_date" id="" class="form-control">
                                            </div>
                                        </div>
                                        <label class="form-check-label ms-2"><input type="radio" name="CarePlan_2" value="Yes" class="form-check-input"> Yes</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CarePlan_2" value="No" class="form-check-input"> No</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CarePlan_2" value="Refused" class="form-check-input"> Refused</label>
                                        <label class="form-check-label ms-2"><input type="radio" name="CarePlan_2" value="N/A" class="form-check-input"> N/A</label>
                                    </div>

                                    <div class="ms-2 mt-2">
                                        <label class="form-label mb-1">Comments:</label>
                                        <textarea name="unsafeEnvironmentComments" id="" cols="30" rows="1" class="form-control"></textarea>
                                    </div>
                                </div>
                                </div>

                                <div class="d-flex mt-2">
                                <label class="form-check-label"><b>REFERRAL TO:</b></label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="text" name="REFERRAL" id="" class="form-control">
                                </div>
                            </div>

                            <div class="mt-2">
                                <label class="form-label mb-1"><b>REASON FOR REFERRAL:</b></label>
                                <textarea name="reasonforReferral" id="" cols="30" rows="1" class="form-control"></textarea>
                            </div>

                            <div class="d-flex mt-2">
                                <label class="form-check-label"><b>APPROXIMATE NEXT VISIT DATE:</b></label>
                                <div class="clean-input-group flex-grow-1 ms-2">
                                    <input type="date" id="" name="reasonforReferral_date"  class="form-control">
                                </div>
                            </div>

                            <div class="d-flex mt-2">
                                <label class="form-check-label"><b>PLAN FOR NEXT VISIT:</b></label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="text" name="planforNextvisit" id="" class="form-control">
                                </div>
                            </div>

                            <div class="mt-2">
                                <b>RECERTIFICATION:</b>
                                <label class="form-check-label ms-2"><input type="radio" name="recertification" value="No" class="form-check-input"> No, complete Discharge Summary</label>
                                <label class="form-check-label ms-2"><input type="radio" name="recertification" value="Yes" class="form-check-input"> Yes, complete remaining sections, as appropriate</label>
                                <br>
                                <label class="form-label mb-1">Document the reason(s)/medical necessity that supports the continuation of services:</label>
                                <textarea name="necessityComments" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>

                            <div class="mt-3">
                                <p><b>Note:</b> <i>Medical necessity is always based on the patient’s condition. Identify the skilled service and the reason this skilled service is necessary in objective terms. For example, “Wound care completed per POC to diabetic ulceration left foot. No s/s of infection, but patient remains at risk due to diabetic status.” Or “Range of motion (ROM) as tolerated to lower extremities. Unsafe to teach caregiver ROM due to the patient’s displaced fracture.”</i></p>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="bg-secondary-subtle">
                            <span>Verbal Order Obtained:</span>
                            <label class="form-check-label ms-2"><input type="radio" name="VerbalOrder" value="Yes" class="form-check-input"> No</label>
                            <label class="form-check-label ms-2"><input type="radio" name="VerbalOrder" value="No" class="form-check-input"> Yes,</label>
                            <div class="d-inline-flex">
                                <label class="form-check-label d-flex" style="white-space: nowrap;">specify date:</label>
                                <div class="clean-input-group flex-grow-1">
                                    <input type="date" name="specify_date" id="" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- REHABILITATION POTENTIAL FOR ANTICIPATED DISCHARGE PLANNING -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>REHABILITATION POTENTIAL FOR ANTICIPATED DISCHARGE PLANNING</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div><label class="form-check-label"><input type="checkbox" value="1" name="independentLevel"  class="form-check-input"> Return to an independent level of care (self-care)</label></div>
                            <div>
                                <label class="form-check-label"><input type="checkbox" value="1" name="residenceAssistance"  class="form-check-input"> Able to remain in residence with assistance of:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="primaryCaregiver"  class="form-check-input"> Primary Caregiver</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="communitysupport"  class="form-check-input"> Support from community agencies</label>
                            </div>
                            <div class="mt-1"><label class="form-check-label"><input type="checkbox" value="1" name="Restorative"  class="form-check-input"> Restorative Potential, based on clinical objective assessment and evidence-based knowledge the patient's condition is likely to undergo functional improvement and benefit from rehabilitative care</label></div>
                            <div class="mt-1">
                                <label class="form-check-label"><input type="checkbox" value="1" name="dischargePlan"  class="form-check-input"> Discussed discharge plan with:</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="dischargePlanPatient"  class="form-check-input"> Patient</label>
                                <label class="form-check-label ms-2"><input type="checkbox" value="1" name="dischargePlanRepresentative"  class="form-check-input"> Representative</label>
                                <div class="d-inline-flex ms-2">
                                    <label class="form-check-label"><input type="checkbox" value="1" name="dischargePlanRepresentative_other" class="form-check-input"> Other:</label>
                                    <div class="clean-input-group flex-grow-1">
                                        <input type="text" name="dischargePlanRepresentative_1" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1">
                                <label class="form-label mb-1">List any changes since last assessment:</label>
                                <textarea name="lastassessmentComments" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="mt-2">
                                <label class="form-label mb-1">Anticipated discharge status:</label>
                                <textarea name="dischargestatusComments" id="" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </td>
                    </tr>

                    <!-- CURRENT DME/MEDICAL SUPPLIES/HCBS -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>CURRENT DME/MEDICAL SUPPLIES/HCBS</b></td>
                    </tr>
                    <tr>
                        <td style="padding: 0!important;">
                            <table class="table table-borderless table-py-5">
                                <tr>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">DME Company:</span>
                                            <input type="text" name="DMECompany" id="" class="form-control">
                                        </label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Phone:</span>
                                            <input type="text"  name="DMECompany_Phone" id="" class="form-control">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Oxygen Company:</span>
                                            <input type="text" name="OxygenCompany" id="" class="form-control">
                                        </label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Phone:</span>
                                            <input type="text" name="OxygenCompany_Phone" id="" class="form-control">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="labels-group">
                                        <label class="form-check-label"><input type="checkbox" value="1" name="CommunityOrganizations"  class="form-check-input">Community Organizations</label>
                                        <label class="form-check-label"><input type="checkbox" value="1" name="CommunityServices"  class="form-check-input">Services:</label>
                                        <textarea name="CommunityComments" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Contact:</span>
                                            <input type="text" name="CommunityContact" id="" class="form-control">
                                        </label>
                                    </td>
                                    <td>
                                        <label class="input-group clean-input-group">
                                            <span class="input-group-text fw-medium">Phone:</span>
                                            <input type="text" name="CommunityPhone" id="" class="form-control">
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-label fw-medium mb-1">Comments</label>
                                        <textarea name="CommunityComment" id="" cols="30" rows="2" class="form-control"></textarea>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 0!important;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-py-5">
                                    <tr>
                                    <td class="w-xl-20">
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_1"  class="form-check-input"><b>NONE USED WOUND CARE:</b></label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_2"  class="form-check-input">2x2's</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_3"  class="form-check-input">4x4's</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_4"  class="form-check-input">ABD's</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_5"  class="form-check-input">Cotton tipped applicators</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_6"  class="form-check-input">Drain sponges</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_7"  class="form-check-input">Hydrocolloids</label></div>
                                        <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1" name="wound_8" class="form-check-input">Kerlix size</label> <input type="text" name="KerlixSize" class="form-control d-inline" style="width: 60px;"></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_9"  class="form-check-input">Nu-gauze</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_10"  class="form-check-input">Saline</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_11"  class="form-check-input">Таре</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_12"  class="form-check-input">Transparent dressings</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_13"  class="form-check-input">Wound cleanser</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="wound_14"  class="form-check-input">Wound gel</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="wound_15" class="form-check-input">Other</label>
                                            <textarea name="woundcomment" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
                                        <div class="py-2"></div>
                                        <span class="fw-bold">IV SUPPLIES:</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="alcoholSwabs" class="form-check-input">Alcohol swabs</label></div>
                                        <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1" name="Angiocatheter" class="form-check-input">Angiocatheter size</label> <input type="text" name="AngiocatheterValue" class="form-control d-inline" style="width: 60px;"></div>
                                        <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1" name="Batteries" class="form-check-input">Batteries size</label> <input type="text" name="BatteriesValue" class="form-control d-inline" style="width: 60px;"></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Central" class="form-check-input">Central line dressing</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Extension" class="form-check-input">Extension tubings</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Infusion_pump" class="form-check-input">Infusion pump</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Injection_caps" class="form-check-input">Injection caps</label></div>
                                    </td>

                                    <td class="w-xl-20">
                                        <span class="fw-bold">IV SUPPLIES (Cont'd):</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="IV_pole" class="form-check-input">IV pole</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="IV_start"  class="form-check-input">IV start kit</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="IV_tubing"  class="form-check-input">IV tubing</label></div>
                                        <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1"  name="Syringes" class="form-check-input">Syringes size</label> <input type="text" value="SyringesValue" class="form-control d-inline" style="width: 60px;"></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Tape"  class="form-check-input">Tape</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="TapeOther"  class="form-check-input">Other</label>
                                            <textarea name="TapeComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>

                                        <div class="py-2"></div>

                                        <span class="fw-bold">URINARY/OSTOMY:</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="External_catheters" class="form-check-input">External catheters</label></div>
                                        <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1" name="ostomyPouch"  class="form-check-input">Ostomy pouch (brand, size)</label> <input type="text" name="ostomyPouchValue" class="form-control w-auto d-inline"></div>
                                        <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1" name="ostomyWafer"   class="form-check-input">Ostomy wafer (brand, size)</label> <input type="text" name="ostomyWaferValue" class="form-control w-auto d-inline"></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="protectant"   class="form-check-input">Skin protectant</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Stoma"   class="form-check-input">Stoma adhesive tape</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Underpads"   class="form-check-input">Underpads</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Urinary"   class="form-check-input">Urinary bag</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Pouch"   class="form-check-input">Pouch</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="pouchOther"   class="form-check-input">Other</label></div>
                                        <textarea name="pouchComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>

                                        <div class="py-2"></div>

                                        <span class="fw-bold">CATHETER SUPPLIES:</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Aceticacid"  class="form-check-input">Acetic acid</label></div>
                                        <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1" name="catheterKit"  class="form-check-input"><input type="text" name="catheterKitValue" class="form-control d-inline" style="width: 60px;"> Fr catheter kit (tray, bag, foley)</label></div>
                                    </td>

                                    <td class="w-xl-20">
                                        <span class="fw-bold">CATHETER SUPPLIES (Cont'd):</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="irrigationTray"  class="form-check-input">Irrigation Tray</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="catheterSaline"  class="form-check-input">Saline</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="straightCatheter"  class="form-check-input">Straight catheter</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="straightCatheter_1"  class="form-check-input">Other</label>
                                            <textarea name="straightCatheterComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>

                                        <div class="py-2"></div>

                                        <span class="fw-bold">DIABETIC:</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="diabeticchemstrips"  class="form-check-input">Chemstrips</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="diabeticSyringes"  class="form-check-input">Syringes</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="diabeticSyringes_1"  class="form-check-input">Other</label>
                                            <textarea name="diabeticSyringesComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>

                                        <div class="py-2"></div>

                                        <span class="fw-bold">MISCELLANEOUS:</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="EnemaSupplies"  class="form-check-input">Enema supplies</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Feeding_tube"  class="form-check-input">Feeding tube:</label>
                                            <div class="ms-2">
                                                <label class="input-group clean-input-group d-inline-flex w-auto">
                                                <span class="input-group-text fw-medium">type</span>
                                                <input type="text" name="feedingtubeType" id=""  class="form-control" style="width: 70px;">
                                                </label>
                                                <label class="input-group clean-input-group d-inline-flex w-auto">
                                                <span class="input-group-text fw-medium">size</span>
                                                <input type="text" name="feedingtubeSize" id=""  class="form-control" style="width: 70px;">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Gloves"  class="form-check-input">Gloves:</label>
                                            <div class="ms-2 labels-group">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Sterile_1"  class="form-check-input">Sterile</label>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="NonSterile"  class="form-check-input">Non-sterile</label>
                                            </div>
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="medBox"  class="form-check-input">Med Box</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="stapleremovalKit"  class="form-check-input">Staple removal kit</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="steriStrips"  class="form-check-input">Steri strips</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="sutureremovalKit"  class="form-check-input">Suture removal kit</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="sutureremovalKit_other" class="form-check-input">Other</label>
                                            <textarea name="sutureremovalKitcomments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
                                    </td>

                                    <td class="w-xl-20">
                                        <span class="fw-bold">SUPPLIES/EQUIPMENT:</span>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="alternative"   class="form-check-input">Augmentative and alternative communication device(s) (type)</label>
                                            <textarea name="alternativeComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="bathBench"  class="form-check-input">Bath bench</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Brace"  class="form-check-input">Brace</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Orthotics"  class="form-check-input">Orthotics (specify):</label>
                                            <textarea name="suppliesComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Cane_1"  class="form-check-input">Cane</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Commode"  class="form-check-input">Commode</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="dressingAid"  class="form-check-input">Dressing Aid Kit/Hip Kit <small style="font-weight: normal;display: block;line-height: normal;">(e.g.reacher, long handle sponge, long handle shoe horn, etc.)</small></label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Eggcrate"  class="form-check-input">Eggcrate</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="enteralFeeding"  class="form-check-input">Enteral feeding pump</label></div>
                                        <div class="d-block"><label class="form-check-label">
                                            <input type="checkbox" value="1" name="grabBars" class="form-check-input">Grab bars: Bathroom/Other</label>
                                            <textarea name="grabBarsComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="handheldShower"  class="form-check-input">Handheld shower</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="hospitalBed"  class="form-check-input">Hospital bed:</label>
                                            <div class="ms-2">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="semiElectric"  class="form-check-input">Semi-electric</label>
                                            </div>
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="hoyerLift"  class="form-check-input">Hoyer lift</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="kneeScooter"  class="form-check-input">Knee scooter</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="medicalAlert"  class="form-check-input">Medical alert</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Nebulizer"  class="form-check-input">Nebulizer</label></div>
                                    </td>

                                    <td class="w-xl-20">
                                        <span class="fw-bold">SUPPLIES/EQUIPMENT (Cont'd):</span>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="oxygenConcentrator"  class="form-check-input">Oxygen concentrator</label></div>
                                        <div class="d-block clean-input-group">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="relievingDevice"  class="form-check-input">Pressure relieving device</label>
                                            <input type="text" name="relievingDeviceValue" class="form-control">
                                        </div>
                                        <div class="d-block labels-group">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="Prosthesis"  class="form-check-input">Prosthesis:</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="prosthesisRUE"  class="form-check-input">RUE</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="prosthesisRLE"  class="form-check-input">RLE</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="prosthesisLUE"  class="form-check-input">LUE</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="prosthesisLLE"  class="form-check-input">LLE</label>
                                            <label class="form-check-label"><input type="checkbox" value="1" name="prosthesisOther"  class="form-check-input">Other</label>
                                            <textarea name="prosthesisComments" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="raiseToilet"  class="form-check-input">Raised toilet seat</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Reacher"  class="form-check-input">Reacher</label></div>
                                        <div class="d-block clean-input-group">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="mattressOverlay"  class="form-check-input">Special mattress overlay</label>
                                            <input type="text" name="mattressOverlayValue" class="form-control">
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="suctionMachine"  class="form-check-input">Suction machine</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="TENSunit"  class="form-check-input">TENS unit</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="transferEquipment"  class="form-check-input">Transfer equipment:</label>
                                            <div class="ms-2">
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Board"  class="form-check-input">Board</label>
                                                <label class="form-check-label"><input type="checkbox" value="1" name="Lift"  class="form-check-input">Lift</label>
                                            </div>
                                        </div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Ventilator" class="form-check-input">Ventilator</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Walker_2" class="form-check-input">Walker</label></div>
                                        <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Wheelchair_2" class="form-check-input">Wheelchair</label></div>
                                        <div class="d-block">
                                            <label class="form-check-label"><input type="checkbox" value="1" name="OtherSupplies"  class="form-check-input">Other Supplies Needed</label>
                                            <textarea name="OtherSuppliesComments" id="" cols="30" rows="4" class="form-control mt-1"></textarea>
                                        </div>
                                    </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>

                    <!-- PHYSICIAN VERBAL ORDER -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>PHYSICIAN VERBAL ORDER (Complete if applicable per agency policy)</b></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-block clean-input-group"><label class="form-check-label"><input type="checkbox" value="1" name="IfphysicainName" class="form-check-input">Physician (name) <input type="text" name="physicainName" class="form-control w-auto d-inline"> called to report comprehensive assessment findings (including medical, nursing, rehabilitative, social and discharge planning needs).</label></div>
                            <div class="d-block">
                                <label class="form-check-label"><input type="checkbox" value="1" name="verbalOrder_2" class="form-check-input">Verbal order received for home health (reasonable and necessary) skilled services. See Plan of Care or Verbal Orders.</label>
                            </div>

                            <div style="margin: 0 -15px;">
                            <table class="table table-borderless align-middle table-py-5">
                                <tr>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="text" name="Signature" class="form-control"><i class="d-block"><small>Signature/Title of Person Who Received Verbal Order</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="date" name="signatureDate" class="form-control"><i class="d-block"><small>Date</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="time" name="signatureTime" class="form-control"><i class="d-block"><small>Time</small></i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="text" name="physicianSignature" class="form-control"><i class="d-block"><small>Physician Signature for Verbal Order or see Plan of Care/Verbal Orders</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="date" name="physicianDate" class="form-control"><i class="d-block"><small>Date</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="time" name="physicianTime" class="form-control"><i class="d-block"><small>Time</small></i></label>
                                    </td>
                                </tr>
                                </table>
                            </div>
                            
                        </td>
                    </tr>

                    <!-- SIGNATURES/DATES -->
                    <tr>
                        <td class="text-center bg-dark text-white py-2"><b>SIGNATURES/DATES</b></td>
                    </tr>
                    <tr>
                        <td style="padding: 0!important;">
                            <table class="table table-borderless align-middle table-py-5">
                                <tr>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="text" name="pfcr" class="form-control"><i class="d-block"><small>Patient/Family Member/Caregiver/Representative (if applicable)</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="date" name="pfcr_date" class="form-control"><i class="d-block"><small>Date</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="time" name="pfcr_time" class="form-control"><i class="d-block"><small>Time</small></i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="text" name="pcf_signature" class="form-control"><i class="d-block"><small>Person Completing This Form (signature/title)</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="date" name="pcf_date" class="form-control"><i class="d-block"><small>Date</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="time" name="pcf_time" class="form-control"><i class="d-block"><small>Time</small></i></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-check-label clean-input-group d-block"><input type="text" name="AgencyName" class="form-control"><i class="d-block"><small>Agency Name</small></i></label>
                                    </td>
                                    <td>
                                        <label class="form-check-label clean-input-group d-block"><input type="text" name="AgencyPhone" class="form-control"><i class="d-block"><small>Phone Number</small></i></label>
                                    </td>
                                </tr>
                                </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!--/ Section M -->

            <div class="mb-5">
                <button type="submit" value="save_exit" class="!bg-[#4133BF] btn btn-primary" name="save_exit" data-next="cms-485">Save & Exit</button>
            </div>
        </form>
    </div>
@endsection
