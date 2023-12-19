<table class="table table-bordered align-middle not-responsive">
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1322. Current Number of Stage 1 Pressure Injuries</b>
                           <p>Intact skin with non-blanchable redness of a localized area usually over a bony prominence. Darkly pigmented skin may not have a visible blanching; in dark skin tones only, it may appear with persistent blue or purple hues.</p>
                        </td>
                     </tr>
                     <tr>
                        <td style="width: 120px;"><input type="number" name="pressureInjuries" class="form-control"></td>
                        <td class="labels-group">
                           <label for=""><b>0</b></label><br>
                           <label for=""><b>1</b></label><br>
                           <label for=""><b>2</b></label><br>
                           <label for=""><b>3</b></label><br>
                           <label for=""><b>4 or more</b></label>
                        </td>
                     </tr>
                  </table>

                  <table class="table table-bordered align-middle not-responsive mt-4">
                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1324. Stage of Most Problematic Unhealed Pressure Ulcer/Injury that is Stageable</b>
                           <p>Excludes pressure ulcer/injury that cannot be staged due to a non-removable dressing/device, coverage of wound bed by slough and/or eschar, or deep tissue injury.</p>
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="StageofUnhealedPressure" class="form-check-input" value="1"> 1. <b>Stage 1</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="StageofUnhealedPressure" class="form-check-input" value="2"> 2. <b>Stage 2</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="StageofUnhealedPressure" class="form-check-input" value="3"> 3. <b>Stage 3</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="StageofUnhealedPressure" class="form-check-input" value="4"> 4. <b>Stage 4</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="StageofUnhealedPressure" class="form-check-input" value="NA"> NA <b>Patient has no pressure ulcers/injuries or no stageable pressure ulcers/injuries</b></label></div>
                          </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1330</b>. Does this patient have a <b>Stasis Ulcer</b>?
                        </td>
                     </tr>
                     <tr>
                        <td>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="PatientStasisUlcer" class="form-check-input" value="0"> 0. <b>No ➔</b> <i>Skip to M1340, Surgical Wound</i></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="PatientStasisUlcer" class="form-check-input" value="1"> 1. <b>Yes, patient has BOTH observable and unobservable stasis ulcers</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="PatientStasisUlcer" class="form-check-input" value="2"> 2. <b>Yes, patient has observable stasis ulcers ONLY</b></label></div>
                            <div class="d-block"><label class="form-check-label"><input type="radio" name="PatientStasisUlcer" class="form-check-input" value="3"> 3. <b>Yes, patient has unobservable stasis ulcers ONLY</b> (known but not observable due to non-removable dressing/device) ➔ <i>Skip to M1340, Surgical Wound</i></label></div>
                        </td>
                     </tr>
                  </table>

                  <table class="table table-bordered align-middle not-responsive mt-4">
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1332. Current Number of Stasis Ulcer(s) that are Observable</b>
                        </td>
                     </tr>
                     <tr>
                        <td style="width: 120px;"><input type="number" name="Stasis_Ulcer" class="form-control"></td>
                        <td class="labels-group">
                           <label for="">1. <b>One</b></label><br>
                           <label for="">2. <b>Two</b></label><br>
                           <label for="">3. <b>Three</b></label><br>
                           <label for="">4. <b>Four or more</b></label>
                        </td>
                     </tr>
                  </table>

                  <table class="table table-bordered align-middle not-responsive mt-4">
                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1334. Status of Most Problematic Stasis Ulcer that is Observable</b>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="StatusofStasisUlcer" value="0" class="form-check-input"> 1. <b>Fully granulating</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="StatusofStasisUlcer" value="1" class="form-check-input"> 2. <b>Early/partial granulation</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="StatusofStasisUlcer" value="2" class="form-check-input"> 3. <b>Not healing</b></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1340.</b> Does this patient have a <b>Surgical Wound</b>?
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="Patient_have_Surgical_Wound" value="0" class="form-check-input"> 0. <b>No ➔</b> <i>Skip to N0415, High-Risk Drug Classes: Use and Indication</i></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="Patient_have_Surgical_Wound" value="1" class="form-check-input"> 1. <b>Yes, patient has at least one observable surgical wound</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="Patient_have_Surgical_Wound" value="2" class="form-check-input"> 2. <b>Surgical wound known but not observable due to non-removable dressing/device ➔</b> <i>Skip to N0415, High-Risk DrugClasses: Use and Indication</i></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1342. Status of Most Problematic Surgical Wound that is Observable</b>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="StatusSurgicalWound" value="0" class="form-check-input"> 0. <b>Newly epithelialized</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="StatusSurgicalWound" value="1" class="form-check-input"> 1. <b>Fully granulating</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="StatusSurgicalWound" value="2" class="form-check-input"> 2. <b>Early/partial granulation</b></label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="StatusSurgicalWound" value="3" class="form-check-input"> 3. <b>Not healing</b></label></div>
                        </td>
                     </tr>
                  </table>
