@extends('Skilled-Agency.my-task-layout')


@section('content')

    <link rel="stylesheet" href="{{asset('outass/css/style.css')}}">
    
    <script src="{{asset('assets/bs/js/bootstrap.min.js')}}"></script>
    
   <nav class="pt-3 pb-3">
      <div class="container">
         <div class="nav nav-pills" id="nav-tab" role="tablist">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#SectionA" type="button" role="tab" aria-selected="true">SectionA</button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#SectionJ" type="button" role="tab" aria-selected="true">SectionJ</button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#SectionN" type="button" role="tab" aria-selected="true">SectionN</button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#SectionO" type="button" role="tab" aria-selected="true">SectionO</button>
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#SectionQ" type="button" role="tab" aria-selected="true">SectionQ</button>
      </div>
   </nav>

   <div class="container pt-5">
      <h1 class="text-center">OUTCOME ASSESSMENT INFORMATION SET VERSION E (OASIS-E)</h1>
      <h2 class="text-center my-4">Transfer to an Inpatient facility (TRN)</h2>

      <div class="form-holder">
         <form action="" method="post" id="oasis-e-form">
            <div class="tab-content" id="nav-tabContent">
                <!-- SectionA -->
                <div class="tab-pane fade active show" id="SectionA" role="tabpanel" tabindex="0">
                  <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section A</span> <span>Administrative Information</span></h2>

                  <table class="table table-bordered align-middle not-responsive default-td">
                     <tbody><tr>
                        <td class="bg-secondary-subtle">
                           <b>M0080. Discipline of Person Completing Assessment</b>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" class="form-check-input"> 1. <b>RN</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" class="form-check-input"> 2. <b>PT</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" class="form-check-input"> 3. <b>SLP/ST</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="dopca" class="form-check-input"> 4. <b>OT</b></label></div>
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
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Day</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Year</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M0100. This Assessment is Currently Being Completed for the Following Reason</b>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="mb-1"><b>Start/Resumption of Care</b></p>
                           <div class="ps-3 mb-1">
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 1. <b>Start of care -</b> further visits planned</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 3. <b>Resumption of care</b> (after inpatient stay)</label></div>
                           </div>

                           <p class="mb-1"><b>Follow-Up</b></p>
                           <div class="ps-3 mb-1">
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 4. <b>Recertification (follow-up) reassessment</b></label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 5. <b>Other follow-up</b></label></div>
                           </div>

                           <p class="mb-1"><b>Transfer to an Inpatient Facility</b></p>
                           <div class="ps-3 mb-1">
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 6. <b>Transferred to an inpatient facility –</b> patient not discharged from agency</label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 7. <b>Transferred to an inpatient facility –</b> patient discharged from agency</label></div>
                           </div>

                           <p class="mb-1"><b>Discharge from Agency – Not to an Inpatient Facility</b></p>
                           <div class="ps-3">
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 8. <b>Death at home</b></label></div>
                              <div class="d-block"><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 9. <b>Discharge from agency</b></label></div>
                           </div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

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
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Day</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Year</label>
                                    <input type="text" id="" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2301. Emergent Care</b>
                           <p>At the time of or at any time since the most recent SOC/ROC assessment has the patient utilized a hospital emergency department (includes holding/observation status)?</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" class="form-check-input"> 0. <b>No ➔</b> <i>Skip to M2410, Inpatient Facility</i></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" class="form-check-input"> 1. <b>Yes, used hospital emergency department WITHOUT hospital admission</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" class="form-check-input"> 2. <b>Yes, used hospital emergency department WITH hospital admission</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="EmergentCare" class="form-check-input"> UK. <b>Unknown ➔</b> <i>Skip to M2410, Inpatient Facility</i></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

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
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 1. <b>Improper medication administration, adverse drug reactions, medication side effects, toxicity, anaphylaxis</b></label></td></tr>
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 10. <b>Hypo/Hyperglycemia, diabetes out of control</b></label></td></tr>
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> 19. <b>Other than above reasons</b></label></td></tr>
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> UK. <b>Reason unknown</b></label></td></tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2410. To which Inpatient Facility has the patient been admitted?</b>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" class="form-check-input"> 1. <b>Hospital</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" class="form-check-input"> 2. <b>Rehabilitation facility</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" class="form-check-input"> 3. <b>Nursing home</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="wifpa" class="form-check-input"> 4. <b>Hospice</b></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>A2120. Provision of Current Reconciled Medication List to Subsequent Provider at Transfer</b>
                           <p>At the time of transfer to another provider, did your agency provide the patient’s current reconciled medication list to the subsequent provider?</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="pcrmltsp" class="form-check-input"> 0. <b>No – Current reconciled medication list not provided to the subsequent provider ➔</b> <i>Skip to J1800, Any Falls Since SOC/ROC</i></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="pcrmltsp" class="form-check-input"> 1. <b>Yes – Current reconciled medication list provided to the subsequent provider ➔</b> Continue to A2122, Route of Current Reconciled Medication List Transmission to Subsequent Provider</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="pcrmltsp" class="form-check-input"> 2. <b>NA –</b> The agency was not made aware of this transfer timely ➔ <i>Skip to J1800, Any Falls Since SOC/ROC</i></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

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
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> <b>A. Electronic Health Record</b></label></td></tr>
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> <b>A. Health Information Exchange</b></label></td></tr>
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> <b>C. Verbal</b> (e.g., in-person, telephone, video conferencing)</label></td></tr>
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> <b>D. Paper-based</b> (e.g., fax, copies, printouts)</label></td></tr>
                     <tr><td><label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> <b>E. Other Methods</b> (e.g., texting, email, CDs)</label></td></tr>
                  </tbody></table>
               </div>
                <!--/ SectionA -->

                <!-- SectionJ -->
                <div class="tab-pane fade" id="SectionJ" role="tabpanel" tabindex="0">
                  <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section J</span> <span>Health Conditions</span></h2>
                  <table class="table table-bordered align-middle not-responsive default-td">
                     <tbody>
                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>J1800. Any Falls Since SOC/ROC,</b> whichever is more recent
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <p class="mb-1">Has the patient <b>had any falls since SOC/ROC</b>, whichever is more recent?</p>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="pfsrwmr" class="form-check-input">0. <b>No ➔</b> <i>Skip to M2005, Medication Intervention</i></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="pfsrwmr" class="form-check-input">1. <b>Yes ➔</b> <i>Continue to J1900, Number of Falls Since SOC/ROC</i></label></div>
                        </td>
                     </tr>
                  </tbody></table>

                  <table class="table table-bordered align-middle not-responsive default-td">
                     <tbody><tr>
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
                                 <td class="bg-secondary-subtle"><input type="number" name="" class="form-control"></td>
                                 <td>
                                    <label class="form-label"> A. <b>No injury:</b> No evidence of any injury is noted on physical assessment by the nurse or primary care clinician; no complaints of pain or injury by the patient; no change in the patient's behavior is noted after the fall</label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="bg-secondary-subtle"><input type="number" name="" class="form-control"></td>
                                 <td>
                                    <label class="form-label"> B. <b>Injury (except major):</b> Skin tears, abrasions, lacerations, superficial bruises, hematomas, and sprains; or any fall-related injury that causes the patient to complain of pain</label>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="bg-secondary-subtle"><input type="number" name="" class="form-control"></td>
                                 <td>
                                    <label class="form-label"> C. <b>Major injury:</b> Bone fractures, joint dislocations, closed head injuries with altered consciousness, subdural hematoma</label>
                                 </td>
                              </tr>
                           </tbody></table>
                        </td>
                     </tr>
                  </tbody></table>
                </div>
                <!--/ SectionJ -->

                <!-- SectionN -->
                <div class="tab-pane fade" id="SectionN" role="tabpanel" tabindex="0">
                  <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section N</span> <span>Medications</span></h2>
                  <table class="table table-bordered align-middle not-responsive default-td">
                     <tbody>
                     <tr>
                        <td class="bg-secondary-subtle" colspan="3">
                           <b>M2005. Medication Intervention</b>
                           <p>Did the agency contact and complete physician (or physician-designee) prescribed/recommended actions by midnight of the next calendar day each time potential clinically significant medication issues were identified since the SOC/ROC?</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="3">
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">0. <b>No</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">1. <b>Yes</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">9. <b>NA –</b> There were no potential clinically significant medication issues identified since SOC/ROC or patient is not taking any medications</label></div>
                        </td>
                     </tr>
                  </tbody></table>
                </div>
                <!--/ SectionN -->

                <!-- SectionO -->
                <div class="tab-pane fade" id="SectionO" role="tabpanel" tabindex="0">
                  <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section O</span> <span>Special Treatment, Procedures, and Programs</span></h2>
                  <table class="table table-bordered align-middle not-responsive default-td">
                     <tbody>
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1041. Influenza Vaccine Data Collection Period</b>
                           <p>Does this episode of care (SOC/ROC to Transfer/Discharge) include any dates on or between October 1 and March 31?</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2">
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">0. <b>No ➔</b> <i>Skip to M2401, Intervention Synopsis</i></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">1. <b>Yes ➔</b> Continue to M1046, Influenza Vaccine Received</label></div>
                        </td>
                     </tr>

                     <tr><td colspan="2" class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1046. Influenza Vaccine Received</b>
                           <p>Did the patient receive the influenza vaccine for this year’s flu season?</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="2">
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">1. <b>Yes;</b> received from your agency during this episode of care (SOC/ROC to Transfer/Discharge)</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">2. <b>Yes;</b> received from your agency during a prior episode of care (SOC/ROC to Transfer/Discharge)</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">3. <b>Yes;</b> received from another health care provider (for example, physician, pharmacist)</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">4. <b>No;</b> patient offered and declined</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">5. <b>No;</b> patient assessed and determined to have medical contraindication(s)</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">6. <b>No;</b> not indicated – patient does not meet age/condition guidelines for influenza vaccine</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">7. <b>No;</b> inability to obtain vaccine due to declared shortage</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="MedicationIntervention" class="form-check-input">8. <b>No;</b> patient did not receive the vaccine due to reasons other than those listed in responses 4-7.</label></div>
                        </td>
                     </tr>
                  </tbody></table>
                </div>
                <!--/ SectionO -->

                <!-- SectionQ -->
                <div class="tab-pane fade" id="SectionQ" role="tabpanel" tabindex="0">
                  <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section Q</span> <span>Participation in Assessment and Goal Setting</span></h2>
                  <table class="table table-bordered align-middle not-responsive default-td">
                     <tbody><tr>
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
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="fpi" class="form-check-input"> 0</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="fpi" class="form-check-input"> 1</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="fpi" class="form-check-input"> NA</label></td>
                        <td>Every standardized, validated multi-factor fall risk assessment conducted at or since the most recent SOC/ROC assessment indicates the patient has no risk for falls.</td>
                     </tr>
                     <tr>
                        <td>c. Depression intervention(s) such as medication, referral for other treatment, or a monitoring plan for current treatment</td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="dimrtmp" class="form-check-input"> 0</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="dimrtmp" class="form-check-input"> 1</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="dimrtmp" class="form-check-input"> NA</label></td>
                        <td>Patient has no diagnosis of depression AND every standardized, validated depression screening conducted at or since the most recent SOC/ROC assessment indicates the patient has: 1) no symptoms of depression; or 2) has some symptoms of depression but does not meet criteria for further evaluation of depression based on screening tool used.</td>
                     </tr>
                     <tr>
                        <td>d. Intervention(s) to monitor and mitigate pain</td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itmamp" class="form-check-input"> 0</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itmamp" class="form-check-input"> 1</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="itmamp" class="form-check-input"> NA</label></td>
                        <td>Every standardized, validated pain assessment conducted at or since the most recent SOC/ROC assessment indicates the patient has no pain.</td>
                     </tr>
                     <tr>
                        <td>e. Intervention(s) to prevent pressure ulcers</td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itppu" class="form-check-input"> 0</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="itppu" class="form-check-input"> 1</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="itppu" class="form-check-input"> NA</label></td>
                        <td>Every standardized, validated pressure ulcer risk assessment conducted at or since the most recent SOC/ROC assessment indicates the patient is not at risk of developing pressure ulcers.</td>
                     </tr>
                     <tr>
                        <td>f. Pressure ulcer treatment based on principles of moist wound healing</td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="putpmwh" class="form-check-input"> 0</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 64px;"><label class="form-check-label"><input type="radio" name="putpmwh" class="form-check-input"> 1</label></td>
                        <td class="bg-secondary-subtle text-center" style="width: 78px;"><label class="form-check-label"><input type="radio" name="putpmwh" class="form-check-input"> NA</label></td>
                        <td>Patient has no pressure ulcers OR has no pressure ulcers for which moist wound healing is indicated.</td>
                     </tr>
                  </tbody></table>
                </div>
                <!--/ SectionQ -->
            </div>
         </form>
      </div>
   </div>

@endsection
