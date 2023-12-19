<style>@media print{nav{display:none}.h1,h1{font-size:1.9rem}.h2,h2{font-size:1.5rem}body{-webkit-print-color-adjust:exact;print-color-adjust:exact}h2.d-md-flex{display:flex!important}h2>.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}.row>.col-auto>.input-group>.form-control{max-width:130px}}.bg-secondary-subtle{background-color:#eee!important}.navbar-expand-lg .navbar-nav{flex-direction:row;column-gap:20px}body{background-color:#fff}.nm-3{margin-left:-15px!important;margin-right:-15px!important}.nmt-1{margin-top:-1px!important}.nmb-1{margin-bottom:-1px!important}.labels-mt-1 label{margin-top:5px}.clean-input-group{align-items:flex-end;column-gap:10px}.clean-input-group .form-control,.clean-input-group .input-group-text{border-radius:0;border:0;padding:0}.clean-input-group .form-control{border-bottom:var(--bs-border-width) solid var(--bs-border-color)}.clean-input-group .form-control:focus{border-color:transparent;box-shadow:none;border-bottom:var(--bs-border-width) solid #000}#oasis-e-form img{max-width:100%}#oasis-e-form p:last-child{margin-bottom:0}#oasis-e-form .form-fields-wrapper{border:2px solid var(--bs-border-color);border-radius:15px;overflow:hidden}#oasis-e-form .table td{padding-left:1rem;padding-right:1rem}#oasis-e-form .table td>.d-block{margin:5px 0}#oasis-e-form .table td>.d-block .form-check-input,#oasis-e-form td table td .form-check-input{margin-right:5px}#oasis-e-form .table:not(.default-td)>:not(caption)>*>*{background-color:transparent;padding:1rem}#oasis-e-form h3{font-size:1.4em;font-weight:700}#oasis-e-form h4{font-weight:700;margin:0;font-size:1.2em}#oasis-e-form h5{font-size:1em;font-weight:700}#oasis-e-form table h5,#oasis-e-form td table{margin:0}#oasis-e-form label.form-check-label{font-weight:500}#oasis-e-form .labels-group label{margin-right:10px}@media (max-width:1199px){#oasis-e-form td table:not(.default-td) td{display:block;padding-left:0;padding-right:0}#oasis-e-form td table.table-bordered td{display:table-cell}#oasis-e-form td table.stack-padding td{padding-left:10px;padding-right:10px}}@media (max-width:991px){#oasis-e-form .table td[data-title]::before{content:attr(data-title);display:block;font-weight:700;text-align:center}#oasis-e-form .labels-group{margin-top:5px}#oasis-e-form table:not(.not-responsive) td{display:block}.mt-md-2{margin-top:10px!important}}@media (min-width:992px){.nmt-lg-1{margin-top:-1px!important}.border-lg-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}}@media (min-width:768px){.border-md-end-2{border-right:2px var(--bs-border-style) var(--bs-border-color)!important}.border-md-end-1{border-right:1px var(--bs-border-style) var(--bs-border-color)!important}}.form-holder h2>span{padding:5px 15px}@media (max-width:767px){.form-holder h2>span{display:block}#oasis-e-form .table-responsive{max-width:calc(540px - var(--bs-gutter-x))}}@media (max-width:575px){#oasis-e-form .table-responsive{max-width:calc(100vw - var(--bs-gutter-x))}}table tr th, table tr td {white-space: wrap!important;}</style>
<div class="form-holder">
    <form method="POST" action="{{ route('oasis-e-dealth.store') }}" id="oasis-e-form">
        @csrf
       <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section A</span> <span>Administrative Information</span></h2>

       <div class="table-responsive">
           <table class="table table-bordered align-middle not-responsive default-td">
                   <tbody>
               <tr>
                   <td class="bg-secondary-subtle">
                       <b>M0080. Discipline of Person Completing Assessment</b>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="RNAssessment" class="form-check-input"> 1. <b>RN</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="PTAssessment" class="form-check-input"> 2. <b>PT</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="SLP/STAssessment" class="form-check-input"> 3. <b>SLP/ST</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" value="OTAssessment" class="form-check-input"> 4. <b>OT</b></label></div>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

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
                               <input type="text" id="" name="assessmentCompleted_Month" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                               <label class="input-group-text">Day</label>
                               <input type="text" id="" name="assessmentCompleted_Day" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                               <label class="input-group-text">Year</label>
                               <input type="text" id="" name="assessmentCompleted_Year" class="form-control">
                               </div>
                           </div>
                       </div>
                   </td>
                   </tr>
                   <tr><td class="py-1">Complete M0090 using the date of the day information was last collected.</td></tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- M0100 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>M0100. This Assessment is Currently Being Completed for the Following Reason</b>
                   </td>
                   </tr>
                   <tr>
                   <td>

                       <p class="mb-1"><b>Transfer to an Inpatient Facility</b></p>
                       <div class="ps-3 mb-1">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="inpatientFacility" value="1" class="form-check-input"> 6. <b>Transferred to an inpatient facility –</b> patient not discharged from agency</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="inpatientFacility_1" value="1" class="form-check-input"> 7. <b>Transferred to an inpatient facility –</b> patient discharged from agency</label></div>
                       </div>

                       <p class="mb-1"><b>Discharge from Agency – Not to an Inpatient Facility</b></p>
                       <div class="ps-3">
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="Discharge" value="1"  class="form-check-input"> 8. <b>Death at home</b></label></div>
                       </div>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

                   <tr>
                   <td>
                       <label for="" class="form-label"><b>Certifying Physician's Prognosis:</b></label>
                       <textarea name="certifyingPhysician" id="" cols="30" rows="2" class="form-control"></textarea>
                   </td>
                   </tr>

                   <!-- M0906 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>M0906. Discharge/Transfer/Death Date</b>
                       <p>Enter the date of the discharge, transfer, or death (at home) of the patient.</p>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                           <div class="col-auto">
                               <div class="input-group">
                               <label class="input-group-text">Month</label>
                               <input type="text" name="dischargeMonth" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                               <label class="input-group-text">Day</label>
                               <input type="text" name="dischargeDay" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                               <label class="input-group-text">Year</label>
                               <input type="text" name="dischargeYear" id="" class="form-control">
                               </div>
                           </div>
                       </div>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- M2301 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>M2301. Emergent Care</b>
                       <p>At the time of or at any time since the most recent SOC/ROC assessment has the patient utilized a hospital emergency department (includes holding/observation status)?</p>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" value="Inpatient" class="form-check-input"> 0. <b>No ➔</b> <i>Skip to M2410, Inpatient Facility</i></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" value="emergency" class="form-check-input"> 1. <b>Yes, used hospital emergency department WITHOUT hospital admission</b></label></div>
                       {{-- <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" value="" class="form-check-input"> 2. <b>Yes, used hospital emergency department WITH hospital admission</b></label></div> --}}
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" value="UnknownInpatient" class="form-check-input"> UK. <b>Unknown ➔</b> <i>Skip to M2410, Inpatient Facility</i></label></div>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- M2310 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>M2310. Reason for Emergent Care</b>
                       <p>For what reason(s) did the patient seek and/or receive emergent care (with or without hospitalization)?</p>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <p><b>↓ Check all that apply</b></p>
                   </td>
                   </tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="improperMedication" value="1" class="form-check-input"> 1. <b>Improper medication administration, adverse drug reactions, medication side effects, toxicity, anaphylaxis</b></label></td></tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="Hyperglycemia" value="1" class="form-check-input"> 10. <b>Hypo/Hyperglycemia, diabetes out of control</b></label></td></tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="aboveReasons" value="1" class="form-check-input"> 19. <b>Other than above reasons</b></label></td></tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="reasonUnknown" value="1" class="form-check-input"> UK. <b>Reason unknown</b></label></td></tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- M2410 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>M2410. To which Inpatient Facility has the patient been admitted?</b>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" value="Hospital" class="form-check-input"> 1. <b>Hospital</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" value="facility"  class="form-check-input"> 2. <b>Rehabilitation facility</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" value="Nursing_home"  class="form-check-input"> 3. <b>Nursing home</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" value="Hospice"  class="form-check-input"> 4. <b>Hospice</b></label></div>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <label for="" class="form-label"><b>Reason for Admission</b></label>
                       <textarea name="admissionReason" id="" cols="30" rows="2" class="form-control"></textarea>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- Name of facility -->
                   <tr>
                   <td>
                       <div class="input-group">
                           <label class="input-group-text">Name of facility</label>
                           <input type="text" name="facilityName_1" id="" class="form-control">
                           </div>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- Patient Name -->
                   <tr>
                   <td>
                       <p class="mb-0">Patient Name - Last, First, Middle Initial</p>
                       <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                           <div class="col-auto">
                               <div class="input-group">
                                   <label class="input-group-text">Last</label>
                                   <input type="text" name="patientLast" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                                   <label class="input-group-text">First</label>
                                   <input type="text" name="patientFirst" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                                   <label class="input-group-text">Middle</label>
                                   <input type="text" name="patientMiddle" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                                   <label class="input-group-text">ID #</label>
                                   <input type="text" name="patientID" id="" class="form-control">
                               </div>
                               </div>
                       </div>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- A2120 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>A2120. Provision of Current Reconciled Medication List to Subsequent Provider at Transfer</b>
                       <p>At the time of transfer to another provider, did your agency provide the patient’s current reconciled medication list to the subsequent provider?</p>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="pcrmltsp" value="reconciled" class="form-check-input"> 0. <b>No – Current reconciled medication list not provided to the subsequent provider ➔</b> <i>Skip to J1800, Any Falls Since SOC/ROC</i></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="pcrmltsp" value="provided"  class="form-check-input"> 1. <b>Yes – Current reconciled medication list provided to the subsequent provider ➔</b> Continue to A2122, Route of Current Reconciled Medication List Transmission to Subsequent Provider</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="pcrmltsp" value="timelyAgency"  class="form-check-input"> 2. <b>NA –</b> The agency was not made aware of this transfer timely ➔ <i>Skip to J1800, Any Falls Since SOC/ROC</i></label></div>
                   </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>

                   <!-- A2122 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>A2122. Route of Current Reconciled Medication List Transmission to Subsequent Provider</b>
                       <p>Indicate the route(s) of transmission of the current reconciled medication list to the subsequent provider.</p>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <p><b>Route of Transmission &nbsp; ↓ Check all that apply ↓</b></p>
                   </td>
                   </tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="electronicHealth" value="1" class="form-check-input"> <b>A. Electronic Health Record</b></label></td></tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="healthInformation" value="1" class="form-check-input"> <b>B. Health Information Exchange</b></label></td></tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="Verbal" value="1" class="form-check-input"> <b>C. Verbal</b> (e.g., in-person, telephone, video conferencing)</label></td></tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="paperBased" value="1" class="form-check-input"> <b>D. Paper-based</b> (e.g., fax, copies, printouts)</label></td></tr>
                   <tr><td><label class="form-check-label"><input type="checkbox" name="otherMethods" value="1" class="form-check-input"> <b>E. Other Methods</b> (e.g., texting, email, CDs)</label></td></tr>
               </tbody>
           </table>
       </div>
       <!--/ SectionA -->

       <!-- SectionJ -->
       <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section J</span> <span>Health Conditions</span></h2>
       <div class="table-responsive">
           <table class="table table-bordered align-middle not-responsive default-td">
                   <tbody>
               <!-- J1800 -->
                   <tr>
                   <td class="bg-secondary-subtle">
                       <b>J1800. Any Falls Since SOC/ROC,</b> whichever is more recent
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <p class="mb-1">Has the patient <b>had any falls since SOC/ROC</b>, whichever is more recent?</p>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="pfsrwmr" value="Skip" class="form-check-input">0. <b>No ➔</b> <i>Skip to M2005, Medication Intervention</i></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="pfsrwmr" value="Continue" class="form-check-input">1. <b>Yes ➔</b> <i>Continue to J1900, Number of Falls Since SOC/ROC</i></label></div>
                   </td>
                   </tr>
               </tbody>
           </table>
       </div>

       <div class="table-responsive">
           <table class="table table-bordered align-middle not-responsive default-td">
                   <tbody>
                   <!-- J1900 -->
                   <tr>
                   <td class="bg-secondary-subtle" colspan="2">
                       <b>J1900. Number of Falls Since SOC/ROC, whichever is more recent</b>
                   </td>
                   </tr>
                   <tr>
                   <td style="min-width: 160px;">
                       <p class="mb-1"><b>Coding:</b></p>
                       <div class="ms-2">
                           <div class="d-block">0. <b>None</b></div>
                           <div class="d-block">1. <b>One</b></div>
                           <div class="d-block">2. <b>Two or more</b></div>
                       </div>
                   </td>
                   <td class="border-0 p-0">
                       <table class="table table-bordered align-middle not-responsive default-td">
                           <tbody><tr>
                               <td class="py-1" colspan="2"><b>↓ Enter Codes in Boxes</b></td>
                           </tr>
                           <tr>
                               <td class="bg-secondary-subtle p-1"><input type="number" style="min-width: 60px;" name="Boxes" class="form-control"></td>
                               <td>
                               <label class="form-label"> A. <b>No injury:</b> No evidence of any injury is noted on physical assessment by the nurse or primary care clinician; no complaints of pain or injury by the patient; no change in the patient's behavior is noted after the fall</label>
                               </td>
                           </tr>
                           <tr>
                               <td class="bg-secondary-subtle p-1"><input type="number" style="min-width: 60px;" name="exceptMajor" class="form-control"></td>
                               <td>
                               <label class="form-label"> B. <b>Injury (except major):</b> Skin tears, abrasions, lacerations, superficial bruises, hematomas, and sprains; or any fall-related injury that causes the patient to complain of pain</label>
                               </td>
                           </tr>
                           <tr>
                               <td class="bg-secondary-subtle p-1"><input type="number" style="min-width: 60px;" name="jointDislocations" class="form-control"></td>
                               <td>
                               <label class="form-label"> C. <b>Major injury:</b> Bone fractures, joint dislocations, closed head injuries with altered consciousness, subdural hematoma</label>
                               </td>
                           </tr>
                       </tbody>
                   </table>
                   </td>
                   </tr>

                   <tr><td colspan="2" class="border-0"></td></tr>

                   <tr>
                   <td colspan="2">
                       <p class="mb-1">Was Transfer related to a fall with injury? <label for="" class="form-check-label ms-2"><input type="radio" name="fallWithInjury" class="form-check-input"> No</label> <label for="" class="form-check-label"><input type="radio" name="fallWithInjury" class="form-check-input ms-2"> Yes</label> &nbsp; If yes, document details of injury and circumstances surrounding injury:</p>
                       <textarea name="fallInjury" id="" cols="30" rows="2" class="form-control"></textarea>
                   </td>
                   </tr>
               </tbody>
           </table>
       </div>
       <!--/ SectionJ -->

       <!-- SectionN -->
       <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section N</span> <span>Medications</span></h2>
       <div class="table-responsive">
           <table class="table table-bordered align-middle not-responsive default-td">
                   <tbody>
               <!-- M2005 -->
                   <tr>
                   <td class="bg-secondary-subtle" colspan="3">
                       <b>M2005. Medication Intervention</b>
                       <p>Did the agency contact and complete physician (or physician-designee) prescribed/recommended actions by midnight of the next calendar day each time potential clinically significant medication issues were identified since the SOC/ROC?</p>
                   </td>
                   </tr>
                   <tr>
                   <td colspan="3">
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" value="medication" class="form-check-input">0. <b>No</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" value="clinically" class="form-check-input">1. <b>Yes</b></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" value="significant" class="form-check-input">9. <b>NA –</b> There were no potential clinically significant medication issues identified since SOC/ROC or patient is not taking any medications</label></div>
                   </td>
                   </tr>
               </tbody>
           </table>
       </div>
       <!--/ SectionN -->

       <!-- SectionO -->
       <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section O</span> <span>Special Treatment, Procedures, and Programs</span></h2>
       <div class="table-responsive">
           <table class="table table-bordered align-middle not-responsive default-td">
               <tbody>
                   <!-- M1041 -->
                   <tr>
                   <td class="bg-secondary-subtle" colspan="2">
                       <b>M1041. Influenza Vaccine Data Collection Period</b>
                       <p>Does this episode of care (SOC/ROC to Transfer/Discharge) include any dates on or between October 1 and March 31?</p>
                   </td>
                   </tr>
                   <tr>
                   <td colspan="2">
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="Influenza" value="Intervention" class="form-check-input">0. <b>No ➔</b> <i>Skip to M2401, Intervention Synopsis</i></label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="Influenza" value="Influenza" class="form-check-input">1. <b>Yes ➔</b> Continue to M1046, Influenza Vaccine Received</label></div>
                   </td>
                   </tr>

                   <tr><td colspan="2" class="border-0"></td></tr>

                   <!-- M1046 -->
                   <tr>
                   <td class="bg-secondary-subtle" colspan="2">
                       <b>M1046. Influenza Vaccine Received</b>
                       <p>Did the patient receive the influenza vaccine for this year’s flu season?</p>
                   </td>
                   </tr>
                   <tr>
                   <td colspan="2">
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="received" class="form-check-input">1. <b>Yes;</b> received from your agency during this episode of care (SOC/ROC to Transfer/Discharge)</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="anotherhealth" class="form-check-input">2. <b>Yes;</b> received from your agency during a prior episode of care (SOC/ROC to Transfer/Discharge)</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="patientoffered" class="form-check-input">3. <b>Yes;</b> received from another health care provider (for example, physician, pharmacist)</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="patientassessed" class="form-check-input">4. <b>No;</b> patient offered and declined</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="notindicated" class="form-check-input">5. <b>No;</b> patient assessed and determined to have medical contraindication(s)</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="inability" class="form-check-input">6. <b>No;</b> not indicated – patient does not meet age/condition guidelines for influenza vaccine</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="vaccine" class="form-check-input">7. <b>No;</b> inability to obtain vaccine due to declared shortage</label></div>
                       <div class="d-block"><label class="form-check-label"><input type="radio" name="fluseason" value="vaccinedue" class="form-check-input">8. <b>No;</b> patient did not receive the vaccine due to reasons other than those listed in responses 4-7.</label></div>
                   </td>
                   </tr>
                   <tr>
                   <td>
                       <label for="" class="form-label mb-1">If answer is 8., if known, specify reason(s):</label>
                       <textarea name="fluseason_specify" id="" cols="30" rows="2" class="form-control"></textarea>
                   </td>
                   </tr>
               </tbody>
           </table>
       </div>
       <!--/ SectionO -->

       <!-- SectionQ -->
       <h2 class="bg-secondary-subtle border-1 fs-3 py-2"><span class="border-md-end-1">Section Q</span> <span>Participation in Assessment and Goal Setting</span></h2>
       <div class="table-responsive">
           <table class="table table-bordered align-middle not-responsive default-td">
               <tbody>
                   <!-- M2401 -->
               <tr>
                   <td class="bg-secondary-subtle" colspan="5">
                       <b>M2401. Intervention Synopsis</b>
                       <p>At the time of or at any time since the most recent SOC/ROC assessment, were the following interventions BOTH included in the physician-ordered plan of care AND implemented? (Mark only one box in each row.)</p>
                   </td>
                   </tr>
                   <tr>
                   <td class="bg-secondary-subtle text-center"><b>Plan/Intervention</b></td>
                   <td class="bg-secondary-subtle text-center"><b>No</b></td>
                   <td class="bg-secondary-subtle text-center"><b>Yes</b></td>
                   <td class="bg-secondary-subtle text-center" colspan="2"><b>Not Applicable</b></td>
                   </tr>
                   <tr>
                   <td></td>
                   <td colspan="4"><b>↓ Check only one box in each row ↓</b></td>
                   </tr>
                   <tr>
                   <td>b. Falls prevention interventions</td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="fpi" value="riskfall" class="form-check-input"> 0</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="fpi" value="most" class="form-check-input"> 1</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="fpi" value="falls" class="form-check-input"> NA</label></td>
                   <td>Every standardized, validated multi-factor fall risk assessment conducted at or since the most recent SOC/ROC assessment indicates the patient has no risk for falls.</td>
                   </tr>
                   <tr>
                   <td>c. Depression intervention(s) such as medication, referral for other treatment, or a monitoring plan for current treatment</td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="dimrtmp" value="monitoring" class="form-check-input"> 0</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="dimrtmp" value="treatment" class="form-check-input"> 1</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="dimrtmp" value="conducted" class="form-check-input"> NA</label></td>
                   <td>Patient has no diagnosis of depression AND every standardized, validated depression screening conducted at or since the most recent SOC/ROC assessment indicates the patient has: 1) no symptoms of depression; or 2) has some symptoms of depression but does not meet criteria for further evaluation of depression based on screening tool used.</td>
                   </tr>
                   <tr>
                   <td>d. Intervention(s) to monitor and mitigate pain</td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itmamp" value="most" class="form-check-input"> 0</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itmamp" value="recent" class="form-check-input"> 1</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="itmamp" value="pain" class="form-check-input"> NA</label></td>
                   <td>Every standardized, validated pain assessment conducted at or since the most recent SOC/ROC assessment indicates the patient has no pain.</td>
                   </tr>
                   <tr>
                   <td>e. Intervention(s) to prevent pressure ulcers</td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itppu" value="developing" class="form-check-input"> 0</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itppu" value="risk " class="form-check-input"> 1</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="itppu" value="indicates" class="form-check-input"> NA</label></td>
                   <td>Every standardized, validated pressure ulcer risk assessment conducted at or since the most recent SOC/ROC assessment indicates the patient is not at risk of developing pressure ulcers.</td>
                   </tr>
                   <tr>
                   <td>f. Pressure ulcer treatment based on principles of moist wound healing</td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="putpmwh" value="healing" class="form-check-input"> 0</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="putpmwh" value="wound" class="form-check-input"> 1</label></td>
                   <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="putpmwh" value="moist" class="form-check-input"> NA</label></td>
                   <td>Patient has no pressure ulcers OR has no pressure ulcers for which moist wound healing is indicated.</td>
                   </tr>
               </tbody>
           </table>
        </div>
       <!--/ SectionQ -->

       <!-- PHYSICIAN TRANSFER/DEATH AT HOME SUMMARY -->
       <h2 class="bg-secondary-subtle border-1 fs-3 py-2 text-center"><span>PHYSICIAN TRANSFER/DEATH AT HOME SUMMARY</span></h2>
       <div class="table-responsive">
           <table class="table table-bordered align-middle not-responsive default-td">
               <tr>
                   <td class="text-center bg-dark text-white"><h4>SUMMARY: Complete all applicable information in this section for Transfer</h4></td>
               </tr>
               <tr>
                   <td>
                       <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                           <div class="col-auto">
                               <div class="input-group">
                               <label class="input-group-text">Admission Date:</label>
                               <input type="date" name="admissionDate" id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               <div class="input-group">
                               <label class="input-group-text">Transfer Date:</label>
                               <input type="date" name="admissiontransferDate"  id="" class="form-control">
                               </div>
                           </div>
                           <div class="col-auto">
                               Transfer was planned: <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" name="TransferPlanned" value="Transfer"> Yes</label>
                               <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" name="TransferPlanned" value="Planned"> No</label>
                           </div>
                       </div>

                       <div class="mt-2">
                           <div class="input-group">
                               <label class="input-group-text">Reason for admission:</label>
                               <input type="text" name="reasonforAdmission" id="" class="form-control">
                           </div>
                       </div>

                       <div class="mt-2">
                           <label for="" class="form-check-label"><input type="radio" class="form-check-input" name="TransferReason" value="N/A"> N/A</label> <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" name="TransferReason" value="reasonforTransfer"> Reason for transfer</label>
                           <div class="input-group d-inline-flex ms-2" style="width: auto;">
                               <label class="input-group-text">(reference reason given on page 1):</label>
                               <input type="text" id="" class="form-control">
                           </div>
                       </div>

                       <div class="mt-2">
                           <label for="" class="form-check-label"><input type="radio" class="form-check-input" name="TransferredTo"> N/A</label> <label for="" class="form-check-label ms-2"><input type="radio" class="form-check-input" name="TransferredTo"> Transferred to (facility name and address):</label>
                           <textarea name="TransferReason_1" id="" cols="30" rows="1" class="form-control mt-1"></textarea>
                       </div>

                       <div class="mt-2">
                           <label for="" class="form-check-label"><input type="checkbox" value="1" class="form-check-input" name="HHAdisciplines"> HHA disciplines involved:</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="SNdisciplines"> SN</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="PTdisciplines"> PT</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="OTdisciplines"> OT</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="STdisciplines"> ST</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="MSWdisciplines"> MSW</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="Aidedisciplines"> Aide</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="Otherdisciplines"> Other:</label>
                           <div class="input-group d-inline-flex ms-1" style="width: auto;">
                               <input type="text" id="" class="form-control">
                           </div>
                       </div>
                   </td>
               </tr>

               <tr>
                   <td>
                       <div>
                           <span>All involved team members notified of transfer:</span>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="SNtransfer" value="notifiedSN"> SN</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="PTtransfer" value="notifiedPT"> PT</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="OTtransfer"value="notifiedOT"> OT</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="STtransfer"value="notifiedST"> ST</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="MSWtransfer"value="notifiedMSW"> MSW</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="Aidetransfer" value="notifiedAide"> Aide</label>
                           <label for="" class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="Othertransfer" value="notifiedOther"> Other:</label>
                           <div class="clean-input-group border d-inline-flex ms-1" style="width: auto;">
                               <input type="text" id="" class="form-control">
                           </div>
                       </div>

                       <div class="mt-1 ms-3">
                           <label class="form-check-label"><input type="checkbox" value="1" class="form-check-input" name="agencyPolicy"> Appropriate physician(s) per agency policy</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="Representative"> Representative (if any) per agency policy/procedure</label>
                           <div class="input-group mt-1">
                               <label class="input-group-text">if not, explain:</label>
                               <input type="text" name="explain" id="" class="form-control">
                           </div>
                       </div>

                       <div class="mt-2">
                           <label class="form-check-label"><input type="checkbox" value="1"  class="form-check-input" name="documentation" value=""> Additional documentation provided per agency policy/process, and/or requested by receiving provider.</label>
                           <div class="ms-3">
                               <label class="form-check-label d-block"><input type="checkbox" value="1"  class="form-check-input" name="currentPlan" value=""> Copy of current plan of care</label>
                               <div>
                                   <label class="form-check-label"><input type="radio" class="form-check-input" name="currentPlanOfCare" value="1"> Current drug profile</label>
                                   <label class="form-check-label ms-3"><input type="radio" class="form-check-input" name="currentPlanOfCare" value="2"> N/A, patient was not taking any medications</label>
                               </div>
                               <div>
                                   <label class="form-check-label"><input type="radio" class="form-check-input" name="currentPlanOfCare" value="3"> Copy of advance directives</label>
                                   <label class="form-check-label ms-3"><input type="radio" class="form-check-input" name="currentPlanOfCare" value="4"> N/A, no advance directives</label>
                               </div>
                               <label class="form-check-label d-block"><input type="checkbox" value="1"  class="form-check-input" name="copyOrder"> Copy of transfer order</label>

                               <label for="" class="form-check-label"><input type="checkbox" value="1"  class="form-check-input" name="copyOther_1"> Other:</label>
                               <div class="clean-input-group border d-inline-flex ms-1" style="width: auto;">
                                   <input type="text" name="copyOther_2" id="" class="form-control">
                               </div>
                           </div>
                       </div>
                   </td>
               </tr>
               <tr><td class="border-0"></td></tr>

               <!-- COMPLETE FOR DEATH AT HOME ONLY -->
               <tr>
                   <td class="text-center bg-dark text-white"><h4>COMPLETE FOR DEATH AT HOME ONLY</h4></td>
               </tr>
               <tr>
                   <td class="p-0 align-middle">
                       <table class="table table-borderless">
                           <tr>
                               <td class="pb-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Date of death:</label>
                                       <input type="date" name="dateofdeath" id="" class="form-control">
                                   </div>
                               </td>
                               <td class="align-middle pb-1">
                                   <label class="form-check-label"><input type="radio" class="form-check-input" name="PlanOfCare" value="Observed">Observed by clinician</label>
                               </td>
                               <td class="align-middle pb-1">
                                   <label class="form-check-label"><input type="radio" class="form-check-input" name="PlanOfCare" value="Reported">Reported by:</label>
                                   <div class="clean-input-group border d-inline-flex ms-1" style="width: auto;">
                                       <input type="text" name="PlanOfCare_1" id="" class="form-control" style="max-width:150px;">
                                   </div>
                               </td>
                               <td class="align-middle pb-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Relationship to patient</label>
                                       <input type="text" name="relationshiptoPatient" id="" class="form-control">
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="4" class="pt-1 pb-1">
                                   <span style="font-weight: 500;">Person(s) present at time of death:</span>
                                   <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="pptd" value="Unknown"> Unknown</label>
                                   <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="pptd" value="Patient"> Patient was alone</label>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="3" class="pt-1 pb-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Name:</label>
                                       <input type="text" name="personName" id="" class="form-control">
                                   </div>
                               </td>
                               <td colspan="1" class="pt-1 pb-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Relationship:</label>
                                       <input type="text" name="Relationship" id="" class="form-control">
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="3" class="pt-1 pb-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Name:</label>
                                       <input type="text" name="RelationName" id="" class="form-control">
                                   </div>
                               </td>
                               <td colspan="1" class="pt-1 pb-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Relationship:</label>
                                       <input type="text" name="RelationName_1" id="" class="form-control">
                                   </div>
                               </td>
                           </tr>
                           <tr>
                               <td colspan="3" class="pt-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Name:</label>
                                       <input type="text" name="RelationName_2" value="Namerelationship" id="" class="form-control">
                                   </div>
                               </td>
                               <td colspan="1" class="pt-1">
                                   <div class="input-group">
                                       <label class="input-group-text">Relationship:</label>
                                       <input type="text" name="RelationName_3" value="Namerelationship_1" id="" class="form-control">
                                   </div>
                               </td>
                           </tr>
                       </table>
                   </td>
               </tr>
               <tr>
                   <td>
                       <div>
                           <span>All involved team members notified of transfer:</span>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="involvedSN" value=""> SN</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="involvedPT" value=""> PT</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="involvedOT" value=""> OT</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="involvedST" value=""> ST</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="involvedMSW" value=""> MSW</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="involvedAide" value=""> Aide</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="teamMembers" value=""> All involved team members</label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="otherMembers" value=""> Other:</label>
                           <div class="clean-input-group border d-inline-flex ms-1" style="width: auto;">
                               <input type="text" name="otherMembers_1" id="" class="form-control">
                           </div>
                       </div>

                       <div class="mt-1">
                           <label class="form-check-label"><input type="radio" class="form-check-input" name="representative" value="agency"> Representative (if any) per agency policy/procedure</label>
                           <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="representative" value="agency_1"> N/A no representative</label>
                           <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="representative" value="agency_2"> N/A representative already aware</label>
                       </div>
                       <div class="mt-1">
                           <label class="form-check-label"><input type="radio" class="form-check-input" name="pharmaceutical" value="1"> if applicable, all hazardous waste pharmaceuticals were disposed of</label>
                           <div class="clean-input-group border d-inline-flex ms-1" style="width: auto;">
                               <input type="text" name="pharmaceutical_1" id="" class="form-control">
                           </div>
                           <span style="font-weight: 500;">per agency policy in compliance with EPA guidelines</span>
                           <label class="form-check-label ms-3"><input type="radio" class="form-check-input" name="pharmaceutical" value="compliance"> N/A patient had no hazardous waste pharmaceutical</label>
                       </div>
                       <div class="mt-1">
                           <label class="form-check-label"><input type="radio" class="form-check-input" name="medications" value="compliance_1"> List of drug profile provided with physician summary (per agency policy/process)</label>
                           <label class="form-check-label ms-2"><input type="radio" class="form-check-input" name="medications" value="compliance_2"> N/A patient was not taking any medications</label>
                       </div>
                   </td>
               </tr>
               <tr>
                   <td>
                       <div>
                           <label class="form-check-label"><input type="radio" class="form-check-input" name="TransferDeath" value="brief"> <b>TRANSFER:</b> Give a brief description of the patient's care (e.g., education/training provided, care preferences, treatments, referrals, infections, wounds, unplanned ED visit or hospital admission, falls/injuries, assistive devices/equipment used etc.). Describe the patient's clinical, mental, psychosocial, cognitive, and functional status at SOC and at end of care. <b>(Always attach medication list.)</b></label>
                       </div>
                       <div class="mt-2">
                           <label class="form-check-label"><input type="radio" class="form-check-input" name="TransferDeath" value="brie"> <b>DEATH AT HOME:</b> Summary of services provided. Explain how the agency became aware of the patient's expiration. If a visit was made, explain services provided (e.g., calling agency to cancel services). If home visit was not made, explain circumstances</label>
                           <textarea name="TransferDeath_1" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
                       </div>
                   </td>
               </tr>
               <tr>
                   <td>
                       <div>
                           <b>Copy of summary:</b>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="malled" value=""> <b>malled</b></label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="emalled" value=""> <b>emalled</b></label>
                           <label class="form-check-label ms-2"><input type="checkbox" value="1" class="form-check-input" name="faxed" value=""> <b>faxed</b></label>
                           <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" value="1" class="form-check-input" name="faxed_1" value="facility"> Facility Name</label>
                           <div class="clean-input-group border d-inline-flex ms-1" style="width: auto;">
                               <input type="text" name="facilityName_1" id="" class="form-control">
                           </div>
                       </div>
                       <table class="table table-borderless">
                           <tr>
                               <td style="width: 50px;" class="pt-4">To:</td>
                               <td>
                                   <table class="table table-borderless">
                                       <tr>
                                           <td class="pb-1">
                                               <div class="d-flex">
                                                   <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" value="1" class="form-check-input" name="certifyingPhysician_1" value="certifying"> Certifying Physician:</label>
                                                   <div class="clean-input-group border flex-grow-1 ms-1">
                                                       <input type="text" name="Othercertifying" id="" class="form-control">
                                                   </div>
                                               </div>
                                           </td>
                                           <td class="pb-1">
                                               <div class="input-group">
                                                   <label class="input-group-text">Date:</label>
                                                   <input type="date" name="Datecertifying" id="" class="form-control">
                                               </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="pt-1 pb-1">
                                               <div class="d-flex">
                                                   <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" class="form-check-input" name="secondaryPhysician" value="secondary"> Secondary Physician:</label>
                                                   <div class="clean-input-group border flex-grow-1 ms-1">
                                                       <input type="text" name="secondaryPhysician_1" id="" class="form-control">
                                                   </div>
                                               </div>
                                           </td>
                                           <td class="pt-1 pb-1">
                                               <div class="input-group">
                                                   <label class="input-group-text">Date:</label>
                                                   <input type="date" name="secondaryPhysician_date" id="" class="form-control">
                                               </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="pb-1 pt-1">
                                               <div class="d-flex">
                                                   <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" value="1" class="form-check-input" name=""> Primary Care Provider Post-transfer/DAH:</label>
                                                   <div class="clean-input-group border flex-grow-1 ms-1">
                                                       <input type="text" name="primaryCare" value="care" id="" class="form-control">
                                                   </div>
                                               </div>
                                           </td>
                                           <td class="pb-1 pt-1">
                                               <div class="input-group">
                                                   <label class="input-group-text">Date:</label>
                                                   <input type="date" name="primaryCare_date" id="" class="form-control">
                                               </div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="pt-1">
                                               <div class="d-flex">
                                                   <label class="form-check-label ms-2" style="font-weight: 400;"><input type="checkbox" value="1" class="form-check-input" name=""> Representative (if any):</label>
                                                   <div class="clean-input-group border flex-grow-1 ms-1">
                                                       <input type="text" name="anyRepresentative" id="" class="form-control">
                                                   </div>
                                               </div>
                                           </td>
                                           <td class="pt-1">
                                               <div class="input-group">
                                                   <label class="input-group-text">Date:</label>
                                                   <input type="date" name="anyRepresentative_date" id="" class="form-control">
                                               </div>
                                           </td>
                                       </tr>
                                   </table>
                               </td>
                           </tr>
                       </table>
                   </td>
               </tr>

               <!-- SIGNATURE/DATE -->
               <tr>
                   <td class="text-center bg-dark text-white"><h4>SIGNATURE/DATE</h4></td>
               </tr>
               <tr>
                   <td class="p-0">
                       <table class="table table-borderless">
                           <tr>
                               <td>
                                   <input type="text" name="personCompleting" id="" class="form-control">
                                   <label for=""><i>Person Completing This Form (signature)</i></label>
                               </td>
                               <td>
                                   <input type="date" name="personCompleting_date" id="" class="form-control">
                                   <label for=""><i>Date</i></label>
                               </td>
                               <td>
                                   <input type="time" name="personCompleting_time" id="" class="form-control">
                                   <label for=""><i>Time</i></label>
                               </td>
                           </tr>
                       </table>
                   </td>
               </tr>

           </table>
       </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
 </div>
