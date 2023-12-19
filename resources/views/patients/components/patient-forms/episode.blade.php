

<form class="patientEpisodeForm" name="patientEpisodeForm" id="patientEpisodeForm" method="post">
    @csrf
    <div class=" card mb-2 tabcontent p-4 vt" id="episode">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Episode Timing & OASIS Scheduling</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="form-group">
                    <label for="middle_name">
                        <span class="text-green">(M0110)</span>
                        Episode Timing: </label>
                    <label for="middle_name">
                        <i>Is the Medical Home Health payment episode for which this assessment will define a case mix
                            group an “early” episode or “late” episode in the patient’s current sequence of adjacent
                            Medicare home health payment episode: (Check what applies): </i>
                    </label>

                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_early">Early</label>
                            <input type="radio" name="episode_timing" value="early" id="episode_timing_early" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_late">Late</label>
                            <input type="radio" name="episode_timing" value="late" id="episode_timing_late" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_unknown">Unknown</label>
                            <input type="radio" name="episode_timing" value="unknown" id="episode_timing_unknown" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label class="font-normal" for="episode_timing_not_applicable">N/A- Not applicable: No Medicare case mix group</label>
                            <input type="radio" name="episode_timing" value="applicable" id="episode_timing_not_applicable" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="row">
                    <div class="col-md-6">
                        <label for="episode_timing_start_care_date">
                            <span class="text-green">(M0030) </span> Start of care: </label>
                    </div>
                    <div class="col-md-6">
                        <input id="episode_timing_start_care_date" type="date" class="form-control s ou" name="episode_timing_start_care_date" value="{{ old('episode_timing_start_care_date') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="episode_timing_start_date">Episode Start Date: </label>
                    </div>
                    <div class="col-md-6">
                        <input id="episode_timing_start_date" type="date" class="form-control s ou" name="episode_timing_start_date" value="{{ old('episode_timing_start_date') }}">
                    </div> 
                    </div>
                </div>
            {{-- <div class="col-md-12 mt3 episode_schedule">
                <label for="middle_name">Generate Episode & Schedule Visit after Saving: </label>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('startCare', this)" name="oasis_start_care" value="oasis_start_care" id="episode_timing_oasis_start_care_label" class="form-control">
                        <label class="font-normal" for="episode_timing_oasis_start_care_label">Generate episode & schedule OASIS Start of Care visit after saving</label>
                    </div>
                </div>
                <div class="col-md-12" id="startCare">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" value="episode_timing_oasis_start_care_sn" id="episode_timing_oasis_start_care_sn" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_sn">Oasis Start of Care (SN)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" value="episode_timing_oasis_start_care_st" id="episode_timing_oasis_start_care_st" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_st">Oasis Start of Care (ST)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" value="episode_timing_oasis_start_care_pt" id="episode_timing_oasis_start_care_pt" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_pt">Oasis Start of Care (PT)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_start_care[]" id="episode_timing_oasis_start_care_ot" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_start_care_ot">Oasis Start of Care (OT)</label>
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('therapyEvaluation', this)" name="schedule_therapy" value="schedule_therapy" id="schedule_therapy" class="form-control">
                        <label class="font-normal" for="schedule_therapy">Generate episode & schedule therapy evaluation</label>
                        <i class="label-font-size">(check box allows therapist to perform ‘therapy only’ admission when OASIS is required to be completed by an RN within 5-days windows, OASIS must be scheduled)</i>
                    </span>
                    </div>
                </div>
                <div class="col-md-12" id="therapyEvaluation">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_therapy_evaluation[]" value="episode_timing_pt_assessment" id="episode_timing_pt_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_pt_assessment">PT Assessment/Evaluation SOC</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_therapy_evaluation[]" value="episode_timing_st_assessment" id="episode_timing_st_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_st_assessment">ST Assessment/Evaluation SOC</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_therapy_evaluation[]" value="episode_timing_ot_assessment" id="episode_timing_ot_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_ot_assessment">OT Assessment/Evaluation SOC</label>
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('nonOasisStart', this)" name="non_oasis_start_care" value="non_oasis_start_care" id="non_oasis_start_care" class="form-control">
                        <label class="font-normal" for="non_oasis_start_care">Generate episode & schedule non-OASIS Start of Care visit after saving</label>
                 </div>
                </div>
                <div class="col-md-12" id="nonOasisStart">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_rn_assessment" id="episode_timing_rn_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_rn_assessment">RN Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_pt_non_assessment" id="episode_timing_pt_non_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_pt_non_assessment">PT Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_ot_non_assessment" id="episode_timing_ot_non_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_ot_non_assessment">OT Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_non_oasis_start[]" value="episode_timing_st_non_assessment" id="episode_timing_st_non_assessment" class="form-control">
                            <label class="font-normal" for="episode_timing_st_non_assessment">ST Assessment - Start of Care (Non-OASIS)</label>
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('oasisRecert', this)" name="initial_oasis_recert" value="initial_oasis_recert" id="episode_timing_recert_assessment" class="form-control">
                        <label class="font-normal" for="episode_timing_recert_assessment">Generate episode & schedule initial OASIS Recert </label>
                    </div>
                </div>
                <div class="col-md-12" id="oasisRecert">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_recertification" id="episode_timing_recertification" class="form-control">
                            <label class="font-normal" for="episode_timing_recertification">OASIS Recertification (SN)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_recertification_pt" id="episode_timing_recertification_pt" class="form-control">
                            <label class="font-normal" for="episode_timing_recertification_pt">OASIS Recertification (PT)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_recertification_st" id="episode_timing_recertification_st" class="form-control">
                            <label class="font-normal" for="episode_timing_recertification_st">OASIS Recertification (ST)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="episode_timing_oasis_recert[]" value="episode_timing_oasis_recert_ot" id="episode_timing_oasis_recert_ot" class="form-control">
                            <label class="font-normal" for="episode_timing_oasis_recert_ot">OASIS Recertification (OT)</label>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label for="episode_timing_oasis_recert_date">Recertification Date:</label>
                            <input type="date" name="episode_timing_oasis_recert_date" id="episode_timing_oasis_recert_date" class="form-control">
                        </div>
                    </div>
                </div>
                <hr class="hr-st">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" onclick="toggle('nonOasisRecert', this)" name="initial_non_oasis_recert" value="initial_non_oasis_recert" id="non_oasis_recert" class="form-control">
                        <label class="font-normal" for="non_oasis_recert">Generate episode & schedule initial non-OASIS Recert</label>
                    </div>
                </div>
                <div class="col-md-12" id="nonOasisRecert">
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis" value="episode_timing_non_oasis" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis">RN Assessment Recertification (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis_pt" value="episode_timing_non_oasis_pt" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis_pt">PT Assessment Recertification (Non-OASIS)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis_ot" value="episode_timing_non_oasis_ot" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis_ot">OT Assessment Recertification (Non-OASIS)</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="non_oasis_recert[]" id="episode_timing_non_oasis_st" value="episode_timing_non_oasis_st" class="form-control">
                            <label class="font-normal" for="episode_timing_non_oasis_st">ST Assessment Recertification (Non-OASIS)</label>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <label for="episode_timing_recertification_date">Recertification Date:</label>
                            <input type="date" name="episode_timing_recertification_date" id="episode_timing_recertification_date" class="form-control">
                        </div>
                    </div>
                </div>
            </div><!---/Generate Episode--> --}}
        </div>
        <div class="col pb-4 pl-3">
            <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
        </div>
        
    </div>
</form>
