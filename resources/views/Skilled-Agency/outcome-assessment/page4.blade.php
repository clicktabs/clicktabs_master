<style>
    #demographics table tr th, table tr td {
        white-space: unset;
    }
</style>
<table class="table table-bordered align-middle">
    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0110. Episode Timing</strong>
            <p>Is the Medicare home health payment episode, for which this assessment will define a case mix group, an “early” episode or a “later” episode in the patient’s current sequence of adjacent Medicare home health payment episodes?</p>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <label class="form-check-label">
                <input type="radio" value="Early" name="episodeTiming" class="form-check-input" @if($patientEpisodeTiming->episode_timing == 'early') checked @endif> 1. Early
            </label>
            <label class="form-check-label">
                <input type="radio" value="Later" name="episodeTiming" class="form-check-input" @if($patientEpisodeTiming->episode_timing == 'late') checked @endif> 2. Later
            </label>
            <label class="form-check-label">
                <input type="radio" value="UK" name="episodeTiming" class="form-check-input" @if($patientEpisodeTiming->episode_timing == 'unknown') checked @endif> UK Unknown
            </label>
            <label class="form-check-label">
                <input type="radio" value="applicable" name="episodeTiming" class="form-check-input" @if($patientEpisodeTiming->episode_timing == 'applicable') checked @endif> N/A- Not applicable: No Medicare case mix group
            </label>
            <p>
                <label class="form-check-label">
                    <input type="radio" value="NA" name="episodeTiming" class="form-check-input"> NA Not Applicable: No Medicare case mix group to be defined by this assessment.
                </label>
            </p>
        </td>
    </tr>
    <tr><td class="border-0"></td></tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>A1250. Transportation (NACHC ©)</strong>
            <p>Has lack of transportation kept you from medical appointments, meetings, work, or from getting things needed for daily living?</p>
        </td>
    </tr>
    <tr>
        <td class="pt-2 pb-2"><strong>↓ Check all that apply</strong></td>
    </tr>
    <tr>
        <td class="p-0">
            <table class="table align-middle default-td">
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="transportationA" class="form-check-input" @if(in_array('medical_appointment', $patientTransportation)) checked @endif> A. Yes, it has kept me from medical appointments or from getting my medications</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="transportationB" class="form-check-input" @if(in_array('non_medical_appointment', $patientTransportation)) checked @endif> B. Yes, it has kept me from non-medical meetings, appointments, work, or from getting things that I need</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="transportationC" class="form-check-input" @if(in_array('lack_transportation', $patientTransportation)) checked @endif> C. No</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="transportationX" class="form-check-input" @if(in_array('trans_unable_respond', $patientTransportation)) checked @endif> X. Patient unable to respond</label></td>
                </tr>
                <tr>
                    <td class="border-bottom-0"><label class="form-check-label"><input type="checkbox" name="transportationY" class="form-check-input" @if(in_array('trans_declines', $patientTransportation)) checked @endif> Y. Patient declines to respond</label></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="border-0 ps-0 pe-0">
            {{-- <p><i>Adapted from:© 2019. National Association of Community Health Centers, Inc., Association of Asian Pacific Community Health Organizations, Oregon Primary Care Association. PRAPARE and its resources are proprietary information of NACHC and its partners, intended for use by NACHC, its partners, and authorized recipients. Do not publish, copy, or distribute this information in part or whole without written consent from NACHC.</i></p> --}}
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M1000. From which of the following Inpatient Facilities was the patient discharged within the past 14 days?</strong>
        </td>
    </tr>
    <tr>
        <td class="pt-2 pb-2"><strong>↓ Check all that apply</strong></td>
    </tr>
    <tr>
        <td class="p-0">
            <table class="table align-middle default-td">
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="longTerm" class="form-check-input" @if(in_array('long_term_nursing_facility', $source_of_add)) checked @endif> 1. Long-term nursing facility (NF)</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="skilled" class="form-check-input"  @if(in_array('skilled_nursing_facility', $source_of_add)) checked @endif> 2. Skilled nursing facility (SNF/TCU)</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="shortstay" class="form-check-input"  @if(in_array('short_stay_acute', $source_of_add)) checked @endif> 3. Short-stay acute hospital (IPPS)</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="careHospital" class="form-check-input"  @if(in_array('long_term_care', $source_of_add)) checked @endif> 4. Long-term care hospital (LTCH)</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="inpatient" class="form-check-input"   @if(in_array('inpatient_rehailitation', $source_of_add)) checked @endif> 5. Inpatient rehabilitation hospital or unit (IRF)</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="psychiatric" class="form-check-input" @if(in_array('phyciatric_hospital', $source_of_add)) checked @endif> 6. Psychiatric hospital or unit</label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="otherDischarge" class="form-check-input" @if(in_array('patient_admission_history_other', $source_of_add)) checked @endif> 7. Other (specify)</label></td>
                </tr>
                <tr>
                    <td class="border-bottom-0"><label class="form-check-label">
                        <input type="checkbox" name="noapply" class="form-check-input" @if(in_array('patient_discharged', $source_of_add)) checked @endif> NA <strong>Patient was not discharged from an inpatient facility ➔</strong> Skip to B0200, Hearing at SOC</label></td>
                </tr>
            </table>
        </td>
    </tr>
    {{-- <tr><td class="border-0"></td></tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M1005. Inpatient Discharge Date</strong> (most recent)
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex align-items-center gx-4 gy-2">
                <div class="col-auto">
                    <div class="input-group">
                    <label class="input-group-text">Month</label>
                    <input type="date" name="dischargeDate" id="" class="form-control">
                    </div>
                </div> --}}
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
                <div class="col-auto">
                    <label class="form-check-label">
                        <input type="checkbox" name="ukUnknown" class="form-check-input"> UK - Unknow or Not Available</label>
                </div>
            </div>
        </td>
    </tr>
    {{-- <tr><td class="border-0"></td></tr> --}}

    {{-- <tr>
        <td class="bg-secondary-subtle">
            <strong>M2301. Emergent Care</strong>
            <p>At the time of or at any time since the most recent SOC/ROC assessment has the patient utilized a hospital emergency department (includes holding/observation status)?</p>
        </td>
    </tr> --}}
    {{-- <tr>
        <td>
            <div class="d-block"><label class="form-check-label">
                <input type="checkbox" name="emergentCareNo" class="form-check-input"> 0. <b>No ➔</b> Skip to M2410, Inpatient Facility</label>
            </div>
            <div class="d-block"><label class="form-check-label">
                <input type="checkbox" name="emergentCareYes" class="form-check-input"> 1. <b>Yes, used hospital emergency department WITHOUT hospital admission</b></label>
            </div>
            <div class="d-block"><label class="form-check-label">
                <input type="checkbox" name="emergentCareUsedHospital" class="form-check-input"> 2. <b>Yes, used hospital emergency department WITH hospital admission</b></label>
            </div>
            <div class="d-block"><label class="form-check-label">
                <input type="checkbox" name="emergentCareUnknown" class="form-check-input"> UK <b>Unknown ➔</b> Skip to M2410, Inpatient Facility</label>
            </div>
        </td>
    </tr> --}}
    {{-- <tr>
        <td class="bg-secondary-subtle">
            <strong>M2310. Reason for Emergent Care</strong>
            <p>For what reason(s) did the patient seek and/or receive emergent care (with or without hospitalization)?</p>
        </td>
    </tr>
    <tr>
        <td class="pt-2 pb-2"><strong>↓ Check all that apply</strong></td>
    </tr>
    <tr>
        <td class="p-0">
            <table class="table align-middle default-td">
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="emergentCareImproper" class="form-check-input"> 1. <b>Improper medication administration, adverse drug reactions, medication side effects, toxicity, anaphylaxis</b></label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="emergentCareHypo" class="form-check-input"> 10. <b>Hypo/Hyperglycemia, diabetes out of control</b></label></td>
                </tr>
                <tr>
                    <td><label class="form-check-label"><input type="checkbox" name="emergentCareOther" class="form-check-input"> 19. <b>Other than above reasons</b></label></td>
                </tr>
                <tr>
                    <td class="border-bottom-0"><label class="form-check-label"><input type="checkbox" name="emergentCareunknown" class="form-check-input"> UK <b>Reason unknown</b></label></td>
                </tr>
            </table>
        </td>
    </tr> --}}
</table>
