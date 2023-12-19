<div class="tab-pane tabcontent {{isset($active) && $active=='phistory'?'active':''}}" id="patient-history" role="tabpanel" tabindex="0">
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_id" value="{{$patient->id}}">
    <table class="table table-bordered align-middle">
        <tr>
            <td class="bg-black py-2 px-3">
                <h3 class="text-center m-0 text-white">PATIENT HISTORY</h3>
            </td>
        </tr>
        <tr>
            <td>
                <p><b>PRIMARY REASON FOR HOME HEALTH ADMISSION:</b> (review Face-to-Face)</p>
                <textarea class="form-control" name="primary_reason" id="" cols="30" rows="4"></textarea>
            </td>
        </tr>
        <tr>
            <td class="labels-group">
                <p class="mb-2"><b>PERTINENT HISTORY AND/OR PREVIOUS OUTCOMES:</b></p>
                <div class="mt-[15px] mb-[15px] flex items-center gap-[15px]">
                    <label class="form-check-label"><input type="checkbox" value="1" name="hypertension" class="form-check-input">
                    Hypertension</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="hypotension" class="form-check-input">
                    Hypotension</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="cardiac" class="form-check-input">
                    Cardiac</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="respiratory" class="form-check-input">
                    Respiratory</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="osteoporosis" class="form-check-input">
                    Osteoporosis</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="fractures" class="form-check-input">
                    Fractures</label>
                    <label class="input-group clean-input-group d-inline-flex w-auto">
                    <span class="input-group-text fw-medium">Cancer (site:</span>
                    <input type="text" id="cancer_site" class="form-control" name="cancerSite">
                    <span class="input-group-text">)</span>
                    </label>
                </div>
                <div class="mt-[15px] mb-[15px] flex items-center gap-[15px]">
                    <label class="form-check-label"><input type="checkbox" value="1" name="infection" class="form-check-input">
                    Infection</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="immunosuppressed"
                        class="form-check-input">
                    Immunosuppressed</label>
                    <label class="input-group clean-input-group d-inline-flex w-auto">
                    <span class="input-group-text fw-medium">Open Wound etiology:</span>
                    <input type="text" id="open_wound_etiology" class="form-control" name="openWoundEtiology">
                    </label>
                </div>
                <div class="mt-[15px] mb-[15px]">
                    <div class="flex items-center gap-[15px]">
                        <label class="form-check-label"><input type="checkbox" value="1" name="fallsWithoutInjury"
                            class="form-check-input"> Falls without injury</label>
                        <label class="form-check-label"><input type="checkbox" value="1" name="fallsWithInjury"
                            class="form-check-input"> Falls with injury</label>
                        <label class="form-check-label"><input type="checkbox" value="1" name="hospitalizations"
                            class="form-check-input"> Hospitalizations</label>
                        <label class="form-check-label"><input type="checkbox" value="1" name="erVisits" class="form-check-input"> ER
                        Visits</label>
                        <label class="form-check-label"><input type="checkbox" value="1" name="recentSurgeries"
                            class="form-check-input"> Recent Surgeries</label>
                    </div>
                    <div class="block mt-[15px]">
                        <label for="" class="form-check-label">Pertinent details:</label>
                        <textarea class="form-control" name="pertinentDetails" id="" cols="30" rows="2"></textarea>
                    </div>
                </div>
                <div class="mt-[15px] mb-[15px] flex items-center gap-[15px]">
                    <label class="form-check-label"><input type="checkbox" value="1" name="surgery" class="form-check-input">
                    Surgery</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="procedures" class="form-check-input">
                    Procedure(s)</label>
                    <label class="form-check-label">expected in future:</label>
                    <label class="form-check-label"><input type="radio" value="0" name="expectedFuture"
                        class="form-check-input"> No</label>
                    <label class="form-check-label"><input type="radio" value="1" name="expectedFuture"
                        class="form-check-input"> Yes</label>
                    <label class="input-group clean-input-group d-inline-flex w-auto">
                    <span class="input-group-text fw-medium">If yes, explain:</span>
                    <input type="text" id="expectedFutureExplanation" class="form-control"
                        name="expected_in_future_explanation">
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <h4 class="block font-[18px] font-[700]">VITAL SIGNS:</h4>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="row">
                            <div class="col-auto">
                                <label class="input-group clean-input-group d-inline-flex w-auto">
                                    <span class="input-group-text"><b>Temperature:</b></span>
                                    <input type="text" id="temperature" class="form-control" name="temperature">
                                    <span class="input-group-text">F</span>
                                </label>
                            </div>
                            <div class="col-auto flex items-center gap-[15px]">
                                <label class="form-check-label"><input type="radio" value="on" name="tempOr"
                                    class="form-check-input"> Oral</label>
                                <label class="form-check-label"><input type="radio" value="off" name="tempOr"
                                    class="form-check-input"> Rectal</label>
                            </div>
                            <div class="col-auto labels-group mt-[20px] mb-[20px]">
                                <label class="form-check-label"><input type="radio" value="0" name="tempTat"
                                    class="form-check-input">
                                Temporal/Forehead</label>
                                <label class="form-check-label"><input type="radio" value="1" name="tempTat"
                                    class="form-check-input"> Axillary</label>
                                <label class="form-check-label"><input type="radio" value="2" name="tempTat"
                                    class="form-check-input"> Tympanic</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="block">
                                <b class="text-[18px] font-[700]">Pulse:</b>
                            </div>
                            <div class="col-auto !mt-[5px] mb-[10px]">
                                <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Apical</span>
                                <input type="text" id="pulseApical"  class="form-control" name="pulseApical">
                                </label>
                                <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Radial</span>
                                <input type="text" id="radial" class="form-control" name="radial">
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Brachial</span>
                                <input type="text" id="brachial" class="form-control" name="brachial">
                                </label>
                                <label class="input-group clean-input-group">
                                <span class="input-group-text fw-medium">Carotid</span>
                                <input type="text" id="carotid" class="form-control" name="carotid">
                                </label>
                            </div>
                            <div class="col-auto labels-group">
                                <label class="form-check-label"><input type="radio" value="0" name="ri"
                                    class="form-check-input"> Regular</label>
                                <label class="form-check-label"><input type="radio" value="1" name="ri"
                                    class="form-check-input"> Irregular</label>
                            </div>
                        </div>
                        <div class="row row-flex gy-2 !mt-[20px] mb-[10px]">
                            <p class="mb-0"><b>Pulse Oximetry:</b></p>
                            <div class="col-auto">
                                <label class="input-group clean-input-group">
                                <span class="input-group-text">at rest</span>
                                <input type="text" id="oximetryRest" class="form-control"
                                    name="oximetryRest">
                                <span class="input-group-text">%</span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="input-group clean-input-group">
                                <span class="input-group-text">after activity</span>
                                <input type="text" id="oximetryActivity" class="form-control"
                                    name="oximetryActivity">
                                <span class="input-group-text">%</span>
                                </label>
                            </div>
                            <div class="col w-100">
                                <label class="input-group clean-input-group">
                                <span class="input-group-text">(specify activity):</span>
                                <input type="text" id="activitySpecify" class="form-control"
                                    name="activitySpecify">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle default-td">
                                <tr>
                                    <td style="width: 25%"><b>Blood Pressure:</b></td>
                                    <td style="width: 25%; min-width: 110px;">Left</td>
                                    <td style="width: 25%; min-width: 110px;">Right</td>
                                    <td style="width: 25%">Sitting/Lying</td>
                                    <td style="width: 25%; min-width: 110px;">Standing</td>
                                </tr>
                                <tr>
                                    <td>At rest</td>
                                    <td><input type="text" name="leftRest" class="form-control"></td>
                                    <td><input type="text" name="rightRest" class="form-control"></td>
                                    <td><input type="text" name="sittingLyingRest" class="form-control"></td>
                                    <td><input type="text" name="standingRest" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>With activity</td>
                                    <td><input type="text" name="leftActivity" class="form-control"></td>
                                    <td><input type="text" name="rightActivity" class="form-control"></td>
                                    <td><input type="text" name="sittingLyingActivity" class="form-control"></td>
                                    <td><input type="text" name="standingActivity" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Post activity</td>
                                    <td><input type="text" name="leftPostActivity" class="form-control"></td>
                                    <td><input type="text" name="rightPostActivity" class="form-control"></td>
                                    <td><input type="text" name="sittingLyingPostActivity" class="form-control">
                                    </td>
                                    <td><input type="text" name="standingPostActivity" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="mt-2 labels-group flex items-center gap-[15px] pb-[20px]">
                    <label class="input-group clean-input-group d-inline-flex w-auto">
                    <span class="input-group-text"><b>Respirations:</b></span>
                    <input type="text" id="respirations" class="form-control" name="respirations">
                    </label>
                    <label class="form-check-label"><input type="radio" value="0" name="respirationsRi"
                        class="form-check-input"> Regular</label>
                    <label class="form-check-label"><input type="radio" value="1" name="respirationsRi"
                        class="form-check-input"> Irregular</label>
                    <label class="input-group clean-input-group d-inline-flex w-auto">
                    <span class="input-group-text fw-medium">Apnea periods</span>
                    <input type="text" id="apnea_periods" class="form-control" name="apneaPeriods">
                    <span class="input-group-text fw-medium">sec</span>
                    </label>
                    <label class="form-check-label"><input type="radio" value="0" name="respirationsOr"
                        class="form-check-input"> Observed</label>
                    <label class="form-check-label"><input type="radio" value="1" name="respirationsOr"
                        class="form-check-input"> Reported</label>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <h4 class="mb-2 text-[18px] font-[700]">IMMUNIZATIONS:</h4>
                <p class="mb-0">Within the past 12 months: Influenza (specifically this year's flu season) According
                    t to immunization guidelines:
                </p>
                <div class="flex items-center gap-[15px] mt-[10px]">
                    <label class="form-check-label"><input type="checkbox" value="1" name="pneumonia" class="form-check-input">
                    Pneumonia</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="tetanus" class="form-check-input">
                    Tetanus</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="shingles" class="form-check-input">
                    Shingles</label>
                    <label class="form-check-label"><input type="checkbox" value="1" name="hepatitisC" class="form-check-input">
                    Hepatitis C</label>
                    <label class="input-group clean-input-group d-inline-flex w-auto">
                    <span class="input-group-text fw-medium">Other</span>
                    <input type="text" id="other_immunizations" class="form-control" name="otherImmunizations">
                    </label>
                </div>
                <div>
                    <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">Needs:</span>
                        <input type="text" id="immunization_needs" class="form-control" name="immunizationNeeds">
                    </label>
                </div>

                <div class="row row-flex gy-2 mt-2">
                    <div class="col-auto"><b>Last COVID-19 Vaccination:</b></div>
                    <div class="col-auto"><label class="form-check-label"><input type="checkbox" value="1"
                        name="covidVaccineInitial"
                        class="form-check-input"> Initial
                        vaccine series</label>
                    </div>
                    <div class="col-auto labels-group flex items-center gap-[15px]">
                        <label class="form-check-label"><input type="checkbox" value="1" name="covidVaccineBooster"
                            class="form-check-input">
                        Booster:</label>
                        <label class="form-check-label"><input type="radio" value="0" name="vaccinationBooster"
                            class="form-check-input"> 1st</label>
                        <label class="form-check-label"><input type="radio" value="1" name="vaccinationBooster"
                            class="form-check-input"> 2nd</label>
                        <label class="form-check-label"><input type="radio" value="2" name="vaccinationBooster"
                            class="form-check-input"> 3rd</label>
                        <label class="form-check-label"><input type="radio" value="3" name="vaccinationBooster"
                            class="form-check-input"> 4th</label>
                        <label class="form-check-label"><input type="radio"  value="4"name="vaccinationBooster"
                            class="form-check-input"> 5th</label>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <div class="mt-[20px]"><button type="submit" value="patientHistory" name="patientHistory" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="patient-tracking">Save & Continue</button></div>
</form>
</div>
