<div id="bladder-bowel" class="tabcontent tab-pane {{isset($active) && $active=='bladd'?'active':''}}" role="tabpanel" >
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
    <table class="table table-bordered align-middle">
        <tr>
            <td class="bg-black py-2 px-3">
                <h3 class="text-center m-0 text-white"><span class="border-md-end-1">Section H</span> <span>Bladder and Bowel</span></h3>
            </td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle">
                <b>M1600</b>. Has this patient been treated for a <b>Urinary Tract Infection</b> in the past 14 days?
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" value="0" name="tractInfection" class="form-check-input"> 0. <b>No</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" value="1" name="tractInfection" class="form-check-input"> 1. <b>Yes</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" value="2" name="tractInfection" class="form-check-input"> NA <b>Patient on prophylactic treatment</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" value="3" name="tractInfection" class="form-check-input"> UK <b>Unknown</b> [Omit “UK�? option on DC]</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="border-0"></td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle">
                <b>M1610. Urinary Incontinence or Urinary Catheter Presence</b>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-block"><label class="form-check-label">
                        <input type="radio" name="catheterPresence" class="form-check-input" value="0"> 0. <b>No incontinence or catheter</b> (includes anuria or ostomy for urinary drainage)</label>
                </div>
                <div class="d-block">
                    <label class="form-check-label"><input type="radio" name="catheterPresence" value="1" class="form-check-input"> 1. <b>Patient is incontinent</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" value="2" name="catheterPresence" class="form-check-input"> 2. <b>Patient requires a urinary catheter</b> (specifically: external, indwelling, intermittent, or suprapubic)</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="border-0"></td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle">
                <b>M1620. Bowel Incontinence Frequency</b>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" class="form-check-input" value="0"> 0. <b>Very rarely or never has bowel incontinence</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" value="1" class="form-check-input"> 1. <b>Less than once weekly</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" value="2" class="form-check-input"> 2. <b>One to three times weekly</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" value="3" class="form-check-input"> 3. <b>Four to six times weekly</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" class="form-check-input" value="4"> 4. <b>On a daily basis</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" class="form-check-input" value="5"> 5. <b>More often than once daily</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" value="6" class="form-check-input"> NA. <b>Patient has ostomy for bowel elimination</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="incontinenceFrequency" class="form-check-input" value="7"> UK. <b>Unknown</b> [Omit “UK�? option on DC]</label>
                </div>
            </td>
        </tr>
        <tr>
            <td class="border-0"></td>
        </tr>
        <tr>
            <td class="bg-secondary-subtle">
                <b>M1630. Ostomy for Bowel Elimination</b>
                <p>Does this patient have an ostomy for bowel elimination that (within the last 14 days): a) was related to an inpatient facility stay; <u>or</u> b) necessitated a change in medical or treatment regimen?</p>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="bowelElimination" class="form-check-input" value="0"> 0. <b>Patient does <u>not</u> have an ostomy for bowel elimination.</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="bowelElimination" class="form-check-input" value="1"> 1. <b>Patient's ostomy was not related to an inpatient stay and did <u>not</u> necessitate change in medical or treatment regimen.</b></label>
                </div>
                <div class="d-block"><label class="form-check-label">
                    <input type="radio" name="bowelElimination" class="form-check-input" value="2"> 2. <b>The ostomy <u>was</u> related to an inpatient stay or <u>did</u> necessitate change in medical or treatment regimen.</b></label>
                </div>
            </td>
        </tr>
    </table>
    <div class="mt-[20px]">
        <button type="submit" name="bladd" value="bladd" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="active-diagnosis">Save & Continue</button></div>
</form>
</div>
