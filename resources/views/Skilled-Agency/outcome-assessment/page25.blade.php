<h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section N</span> <span>Medications</span></h2>

                  <div class="table-responsive">
                     <table class="table table-bordered align-middle not-responsive default-td">
                        <tr>
                           <td class="bg-secondary-subtle" colspan="3">
                              <b>SOC</b>
                           </td>
                        </tr>
                        <tr>
                           <td class="bg-secondary-subtle" colspan="3">
                              <b>N0415. High-Risk Drug Classes: Use and Indication</b>
                           </td>
                        </tr>
                        <tr>
                           <td rowspan="2">
                              <p>1. <b>Is taking</b>
                                 <span class="ms-3 d-block">Check if the patient is taking any medications by pharmacologicalclassification, not how it is used, in the following classes</span></p>

                              <p class="mt-2">2. <b>Indication noted</b>
                                    <span class="ms-3 d-block">If Column 1 is checked, check if there is an indication noted for allmedications in the drug class</span></p>
                           </td>
                           <td class="bg-secondary-subtle text-center"><b>1.<br>Is Taking</b></td>
                           <td class="bg-secondary-subtle text-center"><b>2.<br>Indication Noted</b></td>
                        </tr>
                        <tr>
                           <td class="text-center" style="max-width: 120px;" colspan="2"><b>↓ Check all that apply ↓</b></td>
                        </tr>
                        <tr>
                           <td>A. <b>Antipsychotic</b></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="antipsychoticYes" value="1" class="form-check-input"></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="antipsychoticNo" class="form-check-input" value="0"></td>
                        </tr>
                        <tr>
                           <td>E. <b>Anticoagulant</b></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="anticoagulantYes" class="form-check-input" value="1"></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="anticoagulantNo" class="form-check-input" value="0"></td>
                        </tr>
                        <tr>
                           <td>F. <b>Antibiotic</b></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="antibioticYes" class="form-check-input" value="1"></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="antibioticNo" class="form-check-input" value="0"></td>
                        </tr>
                        <tr>
                           <td>H. <b>Opioid</b></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="opioidYes" class="form-check-input" value="1"></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="opioidNo" class="form-check-input" value="0"></td>
                        </tr>
                        <tr>
                           <td>I. <b>Antiplatelet</b></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="antiplateletYes" class="form-check-input" value="1"></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="antiplateletNo" class="form-check-input" value="0"></td>
                        </tr>
                        <tr>
                           <td>J. <b>Hypoglycemic</b> (including insulin)</td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="hypoglycemicYes" class="form-check-input" value="1"></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="hypoglycemicNo" class="form-check-input" value="0"></td>
                        </tr>
                        <tr>
                           <td>Z. <b>None of the Above</b></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="noneofAbobe25Yes" class="form-check-input" value="1"></td>
                           <td class="bg-secondary-subtle text-center"><input type="checkbox" name="noneofAbobe25No" class="form-check-input" value="0"></td>
                        </tr>
                     </table>
                  </div>

                  <table class="table table-bordered align-middle not-responsive mt-4">
                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2001. Drug Regimen Review</b>
                           <p>Did a complete drug regimen review identify potential clinically significant medication issues?</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="drugReview" value="0" class="form-check-input"> 0. <b>No – No issues found during review ➔</b> <i>Skip to M2010, Patient/Caregiver High-Risk Drug Education</i></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="drugReview" value="1" class="form-check-input"> 1. <b>Yes – Issues found during review</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="drugReview" value="2" class="form-check-input"> 9. <b>NA – Patient is not taking any medications ➔</b> <i>Skip to O0110, Special Treatments, Procedures, and Programs</i></label></div>
                        </td>
                     </tr>
                     <tr><td drug_regimen_reviewclass="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2003. Medication Follow-up</b>
                           <p>Did the agency contact a physician (or physician-designee) by midnight of the next calendar day and complete prescribed/recommended actions in response to the identified potential clinically significant medication issues?</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block">
                              <label class="form-check-label">
                                 <input type="radio" name="agencyPhysician" class="form-check-input" value="0"> 0. <b>No</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="agencyPhysician" class="form-check-input" value="1"> 1. <b>Yes</b></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2005. Medication Intervention</b>
                           <p>Did the agency contact and complete physician (or physician-designee) prescribed/recommended actions by midnight of the next calendar day each time potential clinically significant medication issues were identified since the SOC?</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="agencyCompletePhysician" value="0" class="form-check-input"> 0. <b>No</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="agencyCompletePhysician" value="1" class="form-check-input"> 1. <b>Yes</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="agencyCompletePhysician" value="2" class="form-check-input"> 9. <b>NA –</b> There were no potential clinically significant medication issues identified since SOC or patient is not taking anymedications</label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2010. Patient/Caregiver High-Risk Drug Education</b>
                           <p>Has the patient/caregiver received instruction on special precautions for all high-risk medications (such as hypoglycemics, anticoagulants, etc.) and how and when to report problems that may occur?</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="instructionSpecial" value="0" class="form-check-input"> 0. <b>No</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="instructionSpecial" value="1" class="form-check-input"> 1. <b>Yes</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="instructionSpecial" value="2" class="form-check-input"> NA <b>Patient not taking any high-risk drugs OR patient/caregiver fully knowledgeable about special precautions associatedwith all high-risk medications</b></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2020. Management of Oral Medications</b>
                           <p><u>Patient's current ability</u> to prepare and take all oral medications reliably and safely, including administration of the correct dosage at the appropriate times/intervals. <u>Excludes</u> injectable and IV medications. (NOTE: This refers to ability, not compliance or willingness.)</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="independently" class="form-check-input" value="0"> 0. <b>Able to independently take the correct oral medication(s) and proper dosage(s) at the correct times.</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="medication" class="form-check-input" value="1"> 1. <b>Able to take medication(s) at the correct times if:</b>
                           </label>
                           <p class="ms-4">a. <b>individual dosages are prepared in advance by another person; <u>OR</u></b><br>
                              b. <b>another person develops a drug diary or chart.</b></p>
                           </div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="correctTimes" class="form-check-input" value="2"> 2. <b>Able to take medication(s) at the correct times if given reminders by another person at the appropriate times</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="administered" class="form-check-input" value="3"> 3. <b><u>Unable</u> to take medication unless administered by another person.</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="prescribed" class="form-check-input" value="4"> NA <b>No oral medications prescribed.</b></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M2030. Management of Injectable Medications</b>
                           <p><u>Patient's current ability</u> to prepare and take <u>all</u> prescribed injectable medications reliably and safely, including administration of correct dosage at the appropriate times/intervals. <u>Excludes</u> IV medications.</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="managIndependently" class="form-check-input" value="0"> 0. <b>Able to independently take the correct medication(s) and proper dosage(s) at the correct times.</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="managInjectable" class="form-check-input" value="1"> 1. <b>Able to take injectable medication(s) at the correct times if:</b>
                           </label>
                           <p class="ms-4">a. <b>individual syringes are prepared in advance by another person; <u>OR</u></b><br>
                              b. <b>another person develops a drug diary or chart.</b></p>
                           </div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="managCorrectTimes" class="form-check-input" value="2"> 2. <b>Able to take medication(s) at the correct times if given reminders by another person based on the frequency of theinjection</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="managAdministered" class="form-check-input" value="3"> 3. <b><u>Unable</u> to take injectable medication unless administered by another person.</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="managNa" class="form-check-input" value="4"> NA <b>No injectable medications prescribed.</b></label></div>
                        </td>
                     </tr>
                  </table>
