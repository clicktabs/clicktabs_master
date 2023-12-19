
<table class="table table-bordered align-middle">
                     <tr>
                        <td class="bg-secondary-subtle">
                           <strong>M0030. Start of Care Date</strong>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center g-2">
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Date</label>
                                    <input type="date" id="startCareDate" name="startCareDate" value="{{ $patientEpisodeTiming->start_care_date }}" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <strong>M0080. Discipline of Person Completing Assessment</strong>
                        </td>
                     </tr>
                     <tr>
                        <td class="labels-group">
                            <label class="form-check-label">
                                <input type="checkbox" name="rn" class="form-check-input"> 1. RN
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" name="pt" class="form-check-input"> 2. PT
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" name="slpSt" class="form-check-input"> 3. SLP/ST
                            </label>
                            <label class="form-check-label">
                                <input type="checkbox" name="ot" class="form-check-input"> 4. OT
                            </label>
                     </tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <strong>M0090. Date Assessment Completed</strong>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center g-2">
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Date</label>
                                    <input type="date" name="assessmentDate" value="{{ old('assessmentDate') }}" id="" class="form-control">
                                 </div>
                              </div>
                           </div>
                        </td>
                     </tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <strong>M0100. This Assessment is Currently Being Completed for the Following Reason</strong>
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <p class="mt-2 mb-0"><strong>Start of Care</strong></p>
                            <div class="d-block">
                                <label class="form-check-label">
                                    <input type="checkbox" name="startofcare" class="form-check-input"> 1. <strong>Start of care</strong> – further visits planned
                                </label>
                            </div><!----/Start of Care-->
{{--
                            <div class="d-block">
                                <label class="form-check-label">
                                    <input type="checkbox" name="resumption" class="form-check-input"> 3. <strong>Resumption of care</strong> (after inpatient stay)
                                </label>
                            </div>

                            <p class="mt-2 mb-0"><strong>Follow-Up</strong></p>
                            <div class="d-block">
                                <label class="form-check-label">
                                    <input type="checkbox" name="recertification" class="form-check-input"> 4. <strong>Recertification (follow-up) reassessment</strong>
                                </label>
                            </div>
                            <div class="d-block">
                                <label class="form-check-label">
                                    <input type="checkbox" name="otherFollow" class="form-check-input"> 5. <strong>Other follow-up</strong>
                                </label>
                            </div>

                            <p class="mt-2 mb-0"><strong>Transfer to an Inpatient Facility</strong></p>
                            <div class="d-block">
                                <label class="form-check-label">
                                    <input type="checkbox" name="transferred" class="form-check-input"> 6. <strong>Transferred to an inpatient facility -</strong> patient not discharged from agency
                                </label>
                            </div>
                            <div class="d-block">
                                <label class="form-check-label">
                                    <input type="checkbox" name="facility" class="form-check-input"> 7. <strong>Transferred to an inpatient facility -</strong> patient discharged from agency
                                </label>
                            </div>

                            <p class="mt-2 mb-0"><strong> – Not to an Inpatient Facility</strong></p>
                            <div class="d-block">Discharge from Agency
                                <label class="form-check-label">
                                    <input type="checkbox" name="deathHome" class="form-check-input"> 8. <strong>Death at home</strong>
                                </label>
                            </div>
                            <div class="d-block">
                                <label class="form-check-label">
                                    <input type="checkbox" name="dischargeAgency" class="form-check-input"> 9. <strong>Discharge from agency</strong>
                                </label>
                            </div>
                        </td> --}}

                     </tr>

                     {{-- <tr>
                        <td class="bg-secondary-subtle">
                           <strong>M0906. Discharge/Transfer/Death Date</strong>
                           <p>Enter the date of the discharge, transfer, or death (at home) of the patient.</p>
                        </td>
                     </tr> --}}
                     {{-- <tr>
                        <td>
                           <div class="row row-flex align-items-center g-2">
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Date</label>
                                    <input type="date" id="" name="dischargedDate" value="{{ old('dischargedDate') }}" class="form-control">
                                 </div>
                              </div>

                           </div>
                        </td>
                     </tr> --}}

                     <tr>
                        <td class="bg-secondary-subtle">
                           <strong>M0102. Date of Physician-ordered Start of Care</strong>
                           <p>If the physician indicated a specific start of care date when the patient was referred for home health services, record the date specified.</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center g-2">
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Date</label>
                                    <input type="date" id="" name="orderedDate" value="{{ old('orderedDate') }}" class="form-control">

                                 </div>
                              </div>
                             <!--  <div class="col-auto">
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
                              </div> -->
                           </div>
                           <p><strong><i>→ Skip to M0100, Episode Timing, if date entered</i></strong></p>
                           <p><label class="form-check-label">
                              <input type="checkbox" name="episodeDate" class="form-check-input"> NA - No specific SOC date ordered by physician</label></p>
                        </td>
                     </tr>

                     <tr>
                        <td class="bg-secondary-subtle">  
                           <strong>M0104. Date of Referral</strong>
                           <p>Indicate the date that the written or verbal referral for initiation or resumption of care was received by the HHA.</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center g-2">
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">Date</label>
                                    <input type="date" id="" name="referralDate" value="{{ old('referralDate') }}" class="form-control">
                                 </div>
                              </div>
                              <!-- <div class="col-auto">
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
                           </div> -->
                        </td>
                     </tr>
                  </table>
