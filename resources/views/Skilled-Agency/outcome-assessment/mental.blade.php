<table class="table table-bordered align-middle default-td">
    <tr>
        <td class="bg-black py-2 px-3">
            <h3 class="text-center m-0 text-white">MENTAL STATUS</h3>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <span class="fw-medium me-2">Has there been a sudden/acute change in their mental status?</span>
            <label class="form-check-label"><input type="radio" name="scms" value="0" class="form-check-input"> No</label>
            <label class="form-check-label"><input type="radio" name="scms" value="1" class="form-check-input"> Yes</label>
            <span class="fw-medium me-2">If yes, did the change coincide with something else? For example, a medication change, a fall, the loss of a loved one or a change in their living arrangements etc.</span>
            <label class="form-check-label"><input type="radio" name="dccwse" value="0" class="form-check-input"> No</label>
            <label class="form-check-label"><input type="radio" name="dccwse" value="0" class="form-check-input"> Yes</label>
            <label class="form-label fw-medium">If yes, explain:</label>
            <textarea name="dccwse_explain" id="" cols="30" rows="2" class="form-control"></textarea>

            <div class="d-block mt-3">
                <span class="fw-medium me-2">Mental status changes reported by:</span>
                <label class="form-check-label"><input type="radio" name="mscrb" value="0" class="form-check-input"> Patient</label>
                <label class="form-check-label"><input type="radio" name="mscrb" value="1" class="form-check-input"> Caregiver</label>
                <label class="form-check-label"><input type="radio" name="mscrb" value="2" class="form-check-input"> Representative</label>
                <label class="input-group clean-input-group d-inline-flex w-auto">
                    <span class="input-group-text fw-medium">Other:</span>
                    <input type="text" id="" name="mscrb_other" class="form-control">
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <td class="bg-black py-2 px-3">
            <h3 class="text-center m-0 text-white">PSYCHOSOCIAL</h3>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <label class="form-check-label"><input type="radio" name="PSYCHOSOCIAL_sc" value="0" class="form-check-input"> Spiritual</label>
            <label class="form-check-label"><input type="radio" name="PSYCHOSOCIAL_sc" value="1" class="form-check-input"> Cultural implications that impact care</label>
            <span class="fw-medium">Explain:</span>
            <textarea name="PSYCHOSOCIAL_sc_explain" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex gy-2 mb-2">
                <div class="col">
                    <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">Spiritual resource:</span>
                        <input type="text" id="" name="spiritual_resource" class="form-control">
                    </label>
                </div>
                <div class="col">
                    <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">Phone No.</span>
                        <input type="text" id="" name="spiritual_resource_phn" class="form-control">
                    </label>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <span class="fw-medium me-2">Marital status:</span>
            <label class="form-check-label"><input type="radio" name="marital_status" value="0" class="form-check-input"> Single</label>
            <label class="form-check-label"><input type="radio" name="marital_status" value="1" class="form-check-input"> Married</label>
            <label class="form-check-label"><input type="radio" name="marital_status" value="2" class="form-check-input"> Divorced</label>
            <label class="form-check-label"><input type="radio" name="marital_status" value="3" class="form-check-input"> Widower</label>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <span class="fw-medium me-2">Feelings/emotions the patient reports when asked:</span>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="0" class="form-check-input"> N/A - Nothing reported</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="1" class="form-check-input"> Angry</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="2" class="form-check-input"> Fear</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="3" class="form-check-input"> Sadness</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="4" class="form-check-input"> Discouraged</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="5" class="form-check-input"> Lonely</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="6" class="form-check-input"> Depressed</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="7" class="form-check-input"> Helpless</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="8" class="form-check-input"> Content</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="9" class="form-check-input"> Happy</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="10" class="form-check-input"> Hopeful</label>
            <label class="form-check-label"><input type="checkbox" name="emotions_reports[]" value="11" class="form-check-input"> Motivated</label>
            <label class="input-group clean-input-group d-inline-flex w-auto">
                <span class="input-group-text fw-medium">Other:</span>
                <input type="text" id="" name="emotions_reports_other" class="form-control">
            </label>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex gy-2">
                <div class="col-auto">
                    <span class="fw-medium">Inability to cope with altered health status as evidenced by:</span>
                </div>
                <div class="col-auto">
                    <label class="form-check-label"><input type="checkbox" name="evidenced_motivation[]" value="0" class="form-check-input"> Lack of motivation</label>
                    <br>
                    <label class="form-check-label"><input type="checkbox" name="evidenced_motivation[]" value="1" class="form-check-input"> Unrealistic expectations</label>
                </div>
                <div class="col-auto">
                    <label class="form-check-label"><input type="checkbox" name="evidenced_motivation[]" value="2" class="form-check-input"> Inability to recognize problems</label>
                    <br>
                    <label class="form-check-label"><input type="checkbox" name="evidenced_motivation[]" value="3" class="form-check-input"> Denial of problems</label>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <span class="fw-medium me-2">Evidence of:</span>
            <label class="form-check-label"><input type="checkbox" name="evidence_abouse[]" value="0" class="form-check-input"> Abuse</label>
            <label class="form-check-label"><input type="checkbox" name="evidence_abouse[]" vlaue="1" class="form-check-input"> Neglect</label>
            <span class="fw-medium me-2 ms-3">Exploitation:</span>
            <label class="form-check-label"><input type="radio" name="EvidenceofExploitation" value="0" class="form-check-input"> Potential</label>
            <label class="form-check-label"><input type="radio" name="EvidenceofExploitation" value="1" class="form-check-input"> Actual</label>
            <label class="form-check-label"><input type="checkbox" name="exploitation[]" value="0" class="form-check-input"> Verbal</label>
            <label class="form-check-label"><input type="checkbox" name="exploitation[]" value="1" class="form-check-input"> Emotional</label>
            <label class="form-check-label"><input type="checkbox" name="exploitation[]" value="2" class="form-check-input"> Physical</label>
            <label class="form-check-label"><input type="checkbox" name="exploitation[]" value="3" class="form-check-input"> Financial</label>
            <label class="form-check-label"><input type="checkbox" name="exploitation[]" value="4" class="form-check-input"> N/A</label>
            <br>
            <span class="fw-medium me-2">MSW referral made:</span>
            <label class="form-check-label"><input type="radio" name="msw_rm" value="1" class="form-check-input"> Yes</label>
            <label class="form-check-label"><input type="radio" name="msw_rm" value="0" class="form-check-input"> No</label>
            <label class="input-group clean-input-group d-inline-flex w-auto">
                <span class="input-group-text fw-medium">Other intervention:</span>
                <input type="text" id="" name="other_intervention" class="form-control">
            </label>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <span class="fw-medium me-2">Are there any psychosocial barriers that may affect care or recuperation?</span>
            <label class="form-check-label"><input type="radio" name="apbtmacor" value="0" class="form-check-input"> No</label>
            <label class="form-check-label"><input type="radio" name="apbtmacor" value="1" class="form-check-input"> Yes</label>
            <span class="fw-medium ms-2">If yes, explain:</span>
            <textarea name="" id="" cols="30" name="apbtmacor_explain" rows="2" class="form-control mt-1"></textarea>
        </td>
    </tr>
</table>