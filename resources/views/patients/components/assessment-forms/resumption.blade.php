
 <div class="container pt-5">
    <h1 class="text-center">OUTCOME ASSESSMENT INFORMATION SET VERSION E (OASIS-E)</h1>
    <h2 class="text-center my-4">Follow-up (FU)</h2>

    <div class="form-holder">
       <form action="{{route('resumptionOfCare.store')}}" method="post" id="oasis-e-form">
        @csrf
        <input type="hidden" name="patient_id" value="{{$patient->id}}">
          <div class="tab-content" id="nav-tabContent">
             <!-- Home -->
             <div class="tab-pane fade active show">
                <table class="table table-bordered align-middle not-responsive default-td">
                   <tr>
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
                      <td>
                         <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                            <div class="col-auto">
                               <div class="input-group">
                                  <label class="input-group-text">Month</label>
                                  <input type="text" id="" name="assessment_month" class="form-control">
                               </div>
                            </div>
                            <div class="col-auto">
                               <div class="input-group">
                                  <label class="input-group-text">Day</label>
                                  <input type="text" id="" name="assessment_day" class="form-control">
                               </div>
                            </div>
                            <div class="col-auto">
                               <div class="input-group">
                                  <label class="input-group-text">Year</label>
                                  <input type="text" id="" name="assessment_year" class="form-control">
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
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="1" class="form-check-input"> 1. <b>Start of care -</b> further visits planned</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="3" class="form-check-input"> 3. <b>Resumption of care</b> (after inpatient stay)</label></div>
                         </div>

                         <p class="mb-1"><b>Follow-Up</b></p>
                         <div class="ps-3 mb-1">
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="4" class="form-check-input"> 4. <b>Recertification (follow-up) reassessment</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="5" class="form-check-input"> 5. <b>Other follow-up</b></label></div>
                         </div>

                         <p class="mb-1"><b>Transfer to an Inpatient Facility</b></p>
                         <div class="ps-3 mb-1">
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="6" class="form-check-input"> 6. <b>Transferred to an inpatient facility –</b> patient not discharged from agency</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="7" class="form-check-input"> 7. <b>Transferred to an inpatient facility –</b> patient discharged from agency</label></div>
                         </div>

                         <p class="mb-1"><b>Discharge from Agency – Not to an Inpatient Facility</b></p>
                         <div class="ps-3">
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="8" class="form-check-input"> 8. <b>Death at home</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="checkbox" name="assessment_reason[]" value="9" class="form-check-input"> 9. <b>Discharge from agency</b></label></div>
                         </div>
                      </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>
                   <tr>
                      <td class="bg-secondary-subtle">
                         <b>M0110. Episode Timing</b>
                         <p>Is the Medicare home health payment episode, for which this assessment will define a case mix group, an “early” episode or a “later” episode in the patient’s current sequence of adjacent Medicare home health payment episodes?</p>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input"> 1. <b>Early</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input"> 2. <b>Later</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input"> UK. <b>Unknown</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="EpisodeTiming" class="form-check-input"> NA. <b>Not Applicable:</b> No Medicare case mix group to be defined by this assessment.</label></div>
                      </td>
                   </tr>
                </table>
             </div>
              <!--/ Home -->

              <!-- SectionG -->
              <div class="tab-pane fade active show">
                <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section G</span> <span>Functional Status</span></h2>
                <table class="table table-bordered align-middle not-responsive default-td">
                   <tr>
                      <td class="bg-secondary-subtle">
                         <b>M1800. Grooming</b>
                         <p>Current ability to tend safely to personal hygiene needs (specifically: washing face and hands, hair care, shaving or make up, teeth or denture care, or fingernail care).</p>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="grooming" class="form-check-input">0. <b>Able to groom self unaided, with or without the use of assistive devices or adapted methods.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="grooming" class="form-check-input">1. <b>Grooming utensils must be placed within reach before able to complete grooming activities.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="grooming" class="form-check-input">2. <b>Someone must assist the patient to groom self.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="grooming" class="form-check-input">3. <b>Patient depends entirely upon someone else for grooming needs.</b></label></div>
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
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" class="form-check-input">0. <b>Able to get clothes out of closets and drawers, put them on and remove them from the upper body without assistance.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" class="form-check-input">1. <b>Able to dress upper body without assistance if clothing is laid out or handed to the patient.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" class="form-check-input">2. <b>Someone must help the patient put on upper body clothing.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="catdub" class="form-check-input">3. <b>Patient depends entirely upon another person to dress the upper body.</b></label></div>
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
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="dress" class="form-check-input">0. <b>Able to obtain, put on, and remove clothing and shoes without assistance.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="dress" class="form-check-input">1. <b>Able to dress lower body without assistance if clothing and shoes are laid out or handed to the patient.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="dress" class="form-check-input">2. <b>Someone must help the patient put on undergarments, slacks, socks or nylons, and shoes.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="dress" class="form-check-input">3. <b>Patient depends entirely upon another person to dress lower body.</b></label></div>
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
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" class="form-check-input">0. <b>Able to bathe self in <u>shower or tub</u> independently, including getting in and out of tub/shower.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="Bathing" class="form-check-input">1. <b>With the use of devices, is able to bathe self in shower or tub independently, including getting in and out of the tub/shower.</b></label></div>
                         <div class="d-block">
                            <label class="form-check-label"><input type="radio" name="Bathing" class="form-check-input">2. <b>Able to bathe in shower or tub with the intermittent assistance of another person:</b></label>
                            <div class="ms-3">
                               <p class="mb-0">a. <b>for intermittent supervision or encouragement or reminders, <u>OR</u></b></p>
                               <p class="mb-0">b. <b>to get in and out of the shower or tub, <u>OR</u></b></p>
                               <p class="mb-0">c. <b>for washing difficult to reach areas.</b></p>
                            </div>
                         </div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="bathing" class="form-check-input">3. <b>Able to participate in bathing self in shower or tub, but requires presence of another person throughout the bath for assistance or supervision.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="bathing" class="form-check-input">4. <b>Unable to use the shower or tub, but able to bathe self independently with or without the use of devices at the sink, in chair, or on commode.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="bathing" class="form-check-input">5. <b>Unable to use the shower or tub, but able to participate in bathing self in bed, at the sink, in bedside chair, or on commode, with the assistance or supervision of another person.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="bathing" class="form-check-input">6. <b>Unable to participate effectively in bathing and is bathed totally by another person.</b></label></div>
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
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="toilet_transferring" class="form-check-input">0. <b>Able to get to and from the toilet and transfer independently with or without a device.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="toilet_transferring" class="form-check-input">1. <b>When reminded, assisted, or supervised by another person, able to get to and from the toilet and transfer.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="toilet_transferring" class="form-check-input">2. <b><u>Unable</u> to get to and from the toilet but is able to use a bedside commode (with or without assistance).</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="toilet_transferring" class="form-check-input">3. <b><u>Unable</u> to get to and from the toilet or bedside commode but is able to use a bedpan/urinal independently.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="toilet_transferring" class="form-check-input">4. <b>Is totally dependent in toileting.</b></label></div>
                      </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>
                   <tr>
                      <td class="bg-secondary-subtle">
                         <b>M1850. Transferring</b>
                         <p>Current ability to move safely from bed to chair, or ability to turn and position self in bed if patient is bedfast.</p>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="transferring" class="form-check-input">0. <b>Able to independently transfer.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="transferring" class="form-check-input">1. <b>Able to transfer with minimal human assistance or with use of an assistive device.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="transferring" class="form-check-input">2. <b>Able to bear weight and pivot during the transfer process but unable to transfer self.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="transferring" class="form-check-input">3. <b>Unable to transfer self and is unable to bear weight or pivot when transferred by another person.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="transferring" class="form-check-input">4. <b>Bedfast, unable to transfer but is able to turn and position self in bed.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="transferring" class="form-check-input">5. <b>Bedfast, unable to transfer and is unable to turn and position self.</b></label></div>
                      </td>
                   </tr>
                   <tr><td class="border-0"></td></tr>
                   <tr>
                      <td class="bg-secondary-subtle">
                         <b>M1860. Ambulation/Locomotion</b>
                         <p>Current ability to walk safely, once in a standing position, or use a wheelchair, once in a seated position, on a variety of surfaces.</p>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="ambulation" class="form-check-input">0. <b>Able to independently walk on even and uneven surfaces and negotiate stairs with or without railings (specifically: needs no human assistance or assistive device).</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="ambulation" class="form-check-input">1. <b>With the use of a one-handed device (for example, cane, single crutch, hemi-walker), able to independently walk on even and uneven surfaces and negotiate stairs with or without railings.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="ambulation" class="form-check-input">2. <b>Requires use of a two-handed device (for example, walker or crutches) to walk alone on a level surface and/or requires human supervision or assistance to negotiate stairs or steps or uneven surfaces.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="ambulation" class="form-check-input">3. <b>Able to walk only with the supervision or assistance of another person at all times.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="ambulation" class="form-check-input">4. <b>Chairfast, <u>unable</u> to ambulate but is able to wheel self independently.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="ambulation" class="form-check-input">5. <b>Chairfast, <u>unable</u> to ambulate and is unable to wheel self.</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="ambulation" class="form-check-input">6. <b>Bedfast, unable to ambulate or be up in a chair.</b></label></div>
                      </td>
                   </tr>
                </table>
              </div>
              <!--/ SectionG -->

              <!-- SectionGG -->
              <div class="tab-pane fade active show" >
                <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section GG</span> <span>Functional Abilities and Goals</span></h2>
                <table class="table table-bordered align-middle not-responsive default-td">
                   <tbody><tr>
                      <td class="bg-secondary-subtle">
                         <b>0130. Self-Care</b>
                         <p>Code the patient’s usual performance at Follow-Up for each activity using the 6-point scale. If activity was not attempted at Follow-Up, code the reason.</p>
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
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="self_care" class="form-check-input"> 06. <b>Independent –</b> Patient completes the activity by themself with no assistance from a helper.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="self_care" class="form-check-input"> 05. <b>Setup or clean-up assistance –</b> Helper sets up or cleans up; patient completes activity. Helper assists only prior to or following the activity.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="self_care" class="form-check-input"> 04. <b>Supervision or touching assistance –</b> Helper provides verbal cues and/or touching/steadying and/or contact guard assistance as patient completes activity. Assistance may be provided throughout the activity or intermittently.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="self_care" class="form-check-input"> 03. <b>Partial/moderate assistance –</b> Helper does LESS THAN HALF the effort. Helper lifts, holds or supports trunk or limbs, but provides less than half the effort.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="self_care" class="form-check-input"> 02. <b>Substantial/maximal assistance –</b> Helper does MORE THAN HALF the effort. Helper lifts or holds trunk or limbs and provides more than half the effort.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="self_care" class="form-check-input"> 01. <b>Dependent –</b> Helper does ALL of the effort. Patient does none of the effort to complete the activity. Or, the assistance of 2 or more helpers is required for the patient to complete the activity.</label></div>
                         </div>
                         <p class="mb-1"><b>If activity was not attempted, code reason:</b></p>
                         <div class="ms-2">
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input"> 07. <b>Patient refused</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input"> 09. <b>Not applicable –</b> Not attempted and the patient did not perform this activity prior to the current illness, exacerbation or injury.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input"> 10. <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather constraints)</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="code_reason" class="form-check-input"> 88. <b>Not attempted due to medical condition or safety concerns</b></label></div>
                         </div>
                      </td>
                   </tr>
                   <tr><td class="py-1 bg-secondary-subtle"></td></tr>
                   <tr>
                      <td><b>4. Follow-up Performance</b></td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance[]" value="a" class="form-check-input"> <b>Eating</b>: The ability to use suitable utensils to bring food and/or liquid to the mouth and swallow food and/or liquid once the meal is placed before the patient</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance[]" value="b" class="form-check-input"> B. <b>Oral Hygiene:</b> The ability to use suitable items to clean teeth. Dentures (if applicable): The ability to insert and remove dentures into and from mouth, and manage denture soaking and rinsing with use of equipment.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance[]" value="c" class="form-check-input"> C. <b>Toileting Hygiene:</b> The ability to maintain perineal hygiene, adjust clothes before and after voiding or having a bowel movement. If managing an ostomy, include wiping the opening but not managing equipment.</label>
                      </td>
                   </tr>

                   <tr><td class="border-0"></td></tr>

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
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility" class="form-check-input"> 06. <b>Independent –</b> Patient completes the activity by themself with no assistance from a helper.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility" class="form-check-input"> 05. <b>Setup or clean-up assistance –</b> Helper sets up or cleans up; patient completes activity. Helper assists only prior to or following the activity.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility" class="form-check-input"> 04. <b>Supervision or touching assistance –</b> Helper provides verbal cues and/or touching/steadying and/or contact guard assistance as patient completes activity. Assistance may be provided throughout the activity or intermittently.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility" class="form-check-input"> 03. <b>Partial/moderate assistance –</b> Helper does LESS THAN HALF the effort. Helper lifts, holds or supports trunk or limbs, but provides less than half the effort.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility" class="form-check-input"> 02. <b>Substantial/maximal assistance –</b> Helper does MORE THAN HALF the effort. Helper lifts or holds trunk or limbs and provides more than half the effort.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility" class="form-check-input"> 01. <b>Dependent –</b> Helper does ALL of the effort. Patient does none of the effort to complete the activity. Or, the assistance of 2 or more helpers is required for the patient to complete the activity.</label></div>
                         </div>

                         <p class="mb-1"><b>If activity was not attempted, code reason:</b></p>
                         <div class="ms-2">
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility_CS" class="form-check-input" wfd-id="id213"> 07. <b>Patient refused</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility_CS" class="form-check-input" wfd-id="id214"> 09. <b>Not applicable –</b> Not attempted and the patient did not perform this activity prior to the current illness, exacerbation or injury.</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility_CS" class="form-check-input" wfd-id="id215"> 10. <b>Not attempted due to environmental limitations</b> (e.g., lack of equipment, weather constraints)</label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="mobility_CS" class="form-check-input" wfd-id="id216"> 88. <b>Not attempted due to medical condition or safety concerns</b></label></div>
                         </div>
                      </td>
                   </tr>

                   <tr><td class="py-1 bg-secondary-subtle"></td></tr>

                   <tr>
                      <td><b>4. Follow-up Performance Mobility</b></td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="a" class="form-check-input"> A. <b>Roll left and right:</b> The ability to roll from lying on back to left and right side, and return to lying on back on the bed.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="b" class="form-check-input"> B. <b>Sit to lying:</b> The ability to move from sitting on side of bed to lying flat on the bed.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="c" class="form-check-input"> C. <b>Lying to sitting on side of bed:</b> The ability to move from lying on the back to sitting on the side of the bed with no back support.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="d" class="form-check-input"> D. <b>Sit to stand:</b> The ability to come to a standing position from sitting in a chair, wheelchair, or on the side of the bed.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="e" class="form-check-input"> E. <b>Chair/bed-to-chair transfer:</b> The ability to transfer to and from a bed to a chair (or wheelchair).</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="f" class="form-check-input"> F. <b>Toilet transfer:</b> The ability to get on and off a toilet or commode.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="i" class="form-check-input"> I. <b>Walk 10 feet:</b> Once standing, the ability to walk at least 10 feet in a room, corridor, or similar space.<br><i>If Follow-Up performance is coded 07, 09, 10 or 88 ➔Skip to GG0170M, 1 step (curb).</i></label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="j" class="form-check-input"> J. <b>Walk 50 feet with two turns:</b> Once standing, the ability to walk 50 feet and make two turns.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="k" class="form-check-input"> K. <b>Walk 150 feet:</b> Once standing, the ability to walk at least 150 feet in a corridor or similar space.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="l" class="form-check-input"> L. <b>Walking 10 feet on uneven surfaces:</b> The ability to walk 10 feet on uneven or sloping surfaces (indoor or outdoor), such as turf or gravel.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="m" class="form-check-input"> M. <b>1 step (curb):</b> The ability to go up and down a curb or up and down one step.<br><i>If Follow-up performance is coded 07, 09, 10 or 88, ➔ Skip to GG0170Q, Does patient use wheelchair and/or scooter?</i></label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="n" class="form-check-input"> N. <b>4 steps:</b> The ability to go up and down four steps with or without a rail.</label>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <p class="mb-1"><b>Q. Does patient use wheelchair and/or scooter?</b></p>
                         <div class="ms-2">
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="dpuws" class="form-check-input"> <b>0. No ➔</b> <i>Skip to M1033, Risk for Hospitalization</i></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="dpuws" class="form-check-input"> <b>1. Yes ➔</b> Continue to GG0170R, Wheel 50 feet with two turns</label></div>
                         </div>
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <label class="form-check-label"><input type="checkbox" name="follow_up_performance_mobility[]" value="r" class="form-check-input"> R. <b>Wheel 50 feet with two turns:</b> Once seated in wheelchair/scooter, the ability to wheel at least 50 feet and make two turns.</label>
                      </td>
                   </tr>
                </tbody></table>
              </div>
              <!--/ SectionGG -->

              <!-- SectionJ -->
              <div class="tab-pane fade active show">
                <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section J</span> <span>Health Conditions</span></h2>
                <table class="table table-bordered align-middle not-responsive default-td">
                   <tr>
                      <td class="bg-secondary-subtle">
                         <b>JM1033. Risk for Hospitalization</b>
                         <p>Which of the following signs or symptoms characterize this patient as at risk for hospitalization?</p>
                      </td>
                   </tr>
                   <tr>
                      <td class="py-1"><b>↓ Check all that apply</b></td>
                   </tr>
                   <tr>
                      <td>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="risk_for_hospitalization[]" class="form-check-input"> 1. <b>History of falls (2 or more falls – or any fall with an injury – in the past 12 months)</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="2" name="risk_for_hospitalization[]" class="form-check-input"> 2. <b>Unintentional weight loss of a total of 10 pounds or more in the past 12 months</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="3" name="risk_for_hospitalization[]" class="form-check-input"> 3. <b>Multiple hospitalizations (2 or more) in the past 6 months</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="4" name="risk_for_hospitalization[]" class="form-check-input"> 4. <b>Multiple emergency department visits (2 or more) in the past 6 months</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="5" name="risk_for_hospitalization[]" class="form-check-input"> 5. <b>Decline in mental, emotional, or behavioral status in the past 3 months</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="6" name="risk_for_hospitalization[]" class="form-check-input"> 6. <b>Reported or observed history of difficulty complying with any medical instructions (for example, medications, diet, exercise) in the past 3 months</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="7" name="risk_for_hospitalization[]" class="form-check-input"> 7. <b>Currently taking 5 or more medications</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="8" name="risk_for_hospitalization[]" class="form-check-input"> 8. <b>Currently reports exhaustion</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="9" name="risk_for_hospitalization[]" class="form-check-input"> 9. <b>Other risk(s) not listed in 1-8</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="checkbox" value="10" name="risk_for_hospitalization[]" class="form-check-input"> 10. <b>None of the above</b></label></div>
                      </td>
                   </tr>
                </table>
              </div>
              <!--/ SectionJ -->

              <!-- SectionM -->
            <div class="tab-pane fade active show">
                <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section M</span> <span>Skin Conditions</span></h2>
                <table class="table table-bordered align-middle not-responsive default-td">
                   <tr>
                      <td class="bg-secondary-subtle">
                         <b>M1306</b>. Does this patient have at least one <b>Unhealed Pressure Ulcer/Injury at Stage 2 or Higher</b> or designated as Unstageable? (Excludes Stage 1 pressure injuries and all healed pressure ulcers/injuries)
                      </td>
                   </tr>
                   <tr>
                      <td>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="uplas2oh" class="form-check-input">0. <b>No</b></label></div>
                         <div class="d-block"><label class="form-check-label"><input type="radio" name="uplas2oh" class="form-check-input">1. <b>Yes</b></label></div>
                      </td>
                   </tr>
                </table>
              </div>
              <!--/ SectionM -->
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
       </form>
    </div>
 </div>

