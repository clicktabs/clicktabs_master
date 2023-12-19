<h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section M</span> <span>Skin Conditions</span></h2>

                  <table class="table table-bordered align-middle">
                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1306.</b> Does this patient have at least one <b>Unhealed Pressure Ulcer/Injury at Stage 2 or Higher</b> or designated as Unstageable? (Excludes Stage 1 pressure injuries and all healed pressure ulcers/injuries)
                        </td>
                     </tr> 
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="patientUnhealedPressureUlcer" class="form-check-input" value="0"> 0. <b>No ➔</b> Skip to M1322, Current Number of Stage 1 Pressure Injuries at SOC; Skip to M1324, Stage of Most ProblematicUnhealed Pressure Ulcer/Injury that is Stageable at DC</label></div>
                           <div class="d-block"><label class="form-check-label"><input type="radio" name="patientUnhealedPressureUlcer" class="form-check-input" value="1"> 1. <b>Yes</b></label></div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>
      
                     {{-- <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1307. The Oldest Stage 2 Pressure Ulcer</b> that is present at discharge: (Excludes healed Stage 2 pressure ulcers)
                        </td>
                     </tr> --}}
                     <tr>
                        <td>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="patientUnhealedPressureUlcercheckPresent" class="form-check-input"> 1. <b>Was present at the most recent SOC assessment</b></label></div>
                           <div class="d-block">
                              <label class="form-check-label">2. <b>Developed since the most recent SOC assessment.</b> Record date pressure ulcer first identified:</label>
                              <div class="row row-flex align-items-center gx-3 gy-2 mt-0">
                                 <div class="col-auto">
                                    <div class="input-group">
                                       <label class="input-group-text">Month</label>
                                       <input type="text" name="socmonth23" id="" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <div class="input-group">
                                       <label class="input-group-text">Day</label>
                                       <input type="text" name="socday23" id="" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-auto">
                                    <div class="input-group">
                                       <label class="input-group-text">Year</label>
                                       <input type="text" name="socyear23" id="" class="form-control">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="d-block"><label class="form-check-label"><input type="checkbox" name="patientUnhealedPressureUlcercheckNa" class="form-check-input"> NA <b>No Stage 2 pressure ulcers are present at discharge</b></label></div>
                        </td>
                     </tr>
                  </table>
      
                  <table class="table table-bordered align-middle not-responsive">
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>SOC</b>
                        </td>
                     </tr>
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1311. Current Number of Unhealed Pressure Ulcers/Injuries at Each Stage</b>
                        </td>
                     </tr>
                     <tr>
                        <td><input type="number" name="socstage223" class="form-control"></td>
                        <td><label for="">A1. <b>Stage 2:</b> Partial thickness loss of dermis presenting as a shallow open ulcer with a red or pink wound bed, without slough. May also present as an intact or open/ruptured blister.<br><b>Number of Stage 2 pressure ulcers</b></label></td>
                     </tr>
                     <tr>
                        <td><input type="number" name="socstage323" class="form-control"></td>
                        <td><label for="">B1. <b>Stage 3:</b> Full thickness tissue loss. Subcutaneous fat may be visible but bone, tendon, or muscle is not exposed. Slough may be present but does not obscure the depth of tissue loss. May include undermining and tunneling.<br><b>Number of Stage 3 pressure ulcers</b></label></td>
                     </tr>
                     <tr>
                        <td><input type="number" name="socstage423" class="form-control"></td>
                        <td><label for="">C1. <b>Stage 4:</b> Full thickness tissue loss with exposed bone, tendon, or muscle. Slough or eschar may be present on some parts of the wound bed. Often includes undermining and tunneling.<br><b>Number of Stage 4 pressure ulcers</b></label></td>
                     </tr>
                     <tr>
                        <td><input type="number" name="socstage424" class="form-control"></td>
                        <td><label for="">D1. <b>Unstageable: Non-removable dressing/device:</b> Known but not stageable due to non-removable dressing/device<br><b>Number of unstageable pressure ulcers/injuries due to non-removable dressing/device</b></label></td>
                     </tr>
                     <tr>
                        <td><input type="number" name="socstage425" class="form-control"></td>
                        <td><label for="">E1. <b>Unstageable: Slough and/or eschar:</b> Known but not stageable due to coverage of wound bed by slough and/or eschar<br><b>Number of unstageable pressure ulcers due to coverage of wound bed by slough and/or eschar</b></label></td>
                     </tr>
                     <tr>
                        <td><input type="number" name="unstageable1" class="form-control"></td>
                        <td><label for="">F1. <b>Unstageable: Deep tissue injury:</b><br><b>Number of unstageable pressure injuries presenting as deep tissue injury</b></label></td>
                     </tr>
                  </table>
      
                  {{-- <table class="table table-bordered align-middle not-responsive">
                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>Discharge</b>
                        </td>
                     </tr>
                     <tr>
                        <td class="bg-secondary-subtle">
                           <b>M1311. Current Number of Unhealed Pressure Ulcers/Injuries at Each Stage</b>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageable223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">A1. <b>Stage 2:</b> Partial thickness loss of dermis presenting as a shallow open ulcer with a red or pink wound bed, without slough. May also present as an intact or open/ruptured blister.<br>
                                    <b>Number of Stage 2 pressure ulcers</b> – If 0 ➔ <i>Skip to M1311B1, Stage 3</i></label>
                              </div>
                           </div>
                           <div class="row row-flex align-items-center mt-3">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageablea223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">A2. <b>Number of <u>these</u> Stage 2 pressure ulcers that were present at most recent SOC</b><br> – enter how many were noted at the time of most recent SOC</label>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageable323" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">B1. <b>Stage 3:</b> Full thickness tissue loss. Subcutaneous fat may be visible but bone, tendon, or muscle is not exposed. Slough may be present but does not obscure the depth of tissue loss. May include undermining and tunneling.<br>
                                    <b>Number of Stage 3 pressure ulcers</b> – If 0 ➔ <i>Skip to M1311C1, Stage 4</i></label>
                              </div>
                           </div>
                           <div class="row row-flex align-items-center mt-3">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageableb223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">B2. <b>Number of <u>these</u> Stage 3 pressure ulcers that were present at most recent SOC</b><br> – enter how many were noted at the time of most recent SOC</label>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageablea423" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">C1. <b>Stage 4:</b> Full thickness tissue loss with exposed bone, tendon, or muscle. Slough or eschar may be present on some parts of the wound bed. Often includes undermining and tunneling.<br>
                                    <b>Number of Stage 4 pressure ulcers</b> – If 0 ➔ <i>Skip to M1311D1, Unstageable: Non-removable dressing/device</i></label>
                              </div>
                           </div>
                           <div class="row row-flex align-items-center mt-3">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageablec223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">C2. <b>Number of <u>these</u> Stage 4 pressure ulcers that were present at most recent SOC</b><br> – enter how many were noted at the time of most recent SOC</label>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageabled223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">D1. <b>Unstageable: Non-removable dressing/device:</b> Known but not stageable due to non-removable dressing/device<br>
                                    <b>Number of unstageable pressure ulcers/injuries due to non-removable dressing/device</b> – If 0 ➔ <i>Skip to M1311E1,Unstageable: Slough and/or eschar</i></label>
                              </div>
                           </div>
                           <div class="row row-flex align-items-center mt-3">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageabled2223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">D2. <b>Number of <u>these</u> unstageable pressure ulcers/injuries that were present at most recent SOC</b><br> – enter how many were noted at the time of most recent SOC</label>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageablee223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">E1. <b>Unstageable: Slough and/or eschar:</b> Known but not stageable due to coverage of wound bed by slough and/or eschar<br>
                                    <b>Number of unstageable pressure ulcers due to coverage of wound bed by slough and/or eschar</b> – If 0 ➔ <i>Skip to M1311F1,Unstageable: Deep tissue injury</i></label>
                              </div>
                           </div>
                           <div class="row row-flex align-items-center mt-3">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageablee2223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">E2. <b>Number of <u>these</u> unstageable pressure ulcers that were present at most recent SOC</b><br> – enter how many were noted at the time of most recent SOC</label>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="row row-flex align-items-center">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageablef223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">F1. <b>Unstageable: Deep tissue injury</b><br>
                                    <b>Number of unstageable pressure injuries presenting as deep tissue injury</b> – If 0 ➔ <i>Skip to M1324, Stage of MostProblematic Unhealed Pressure Ulcer/Injury that is Stageable</i></label>
                              </div>
                           </div>
                           <div class="row row-flex align-items-center mt-3">
                              <div class="col-sm-2 col-3"><input type="number" name="unstageablef2223" class="form-control"></div>
                              <div class="col-sm-10 col-9">
                                 <label for="">F2. <b>Number of <u>these</u> unstageable pressure injuries that were present at most recent SOC</b><br> – enter how many were noted at the time of most recent SOC</label>
                              </div>
                           </div>
                        </td>
                     </tr>
                  </table> --}}