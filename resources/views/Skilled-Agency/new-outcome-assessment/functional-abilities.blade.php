<div class="tab-pane tabcontent {{isset($active) && $active=='functionalabilitie'?'active':''}}" id="functional-abilities" role="tabpanel" tabindex="0">
<form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
@csrf
<input type="hidden" name="patient_history_id" value="{{$patient->id}}">
@include('skilled-agency.outcome-assessment.page13')

<table class="table table-bordered align-middle default-td mb-0">
<tr>
<td class="bg-black py-2 px-3" colspan="2">
<h3 class="text-center m-0 text-white">FUNCTIONAL LIMITATIONS</h3>
</td>
</tr>
<tr>
<td colspan="2">
<table class="table table-borderless align-middle table-nopadding block-td-md">
<tr>
<td><label class="form-check-label"><input type="checkbox" value="1" name="amputation" class="form-check-input">
Amputation</label></td>
<td><label class="form-check-label"><input type="checkbox" value="1" name="paralysis" class="form-check-input">
Paralysis</label></td>
<td><label class="form-check-label"><input type="checkbox" value="1" name="legallyBlind" class="form-check-input">
Legally blind</label></td>
</tr>
<tr>
<td><label class="form-check-label"><input type="checkbox" value="1" name="bowelBladder" class="form-check-input">
Bowel/Bladder (Incontinence)</label></td>


<td><label class="form-check-label"><input type="checkbox" value="1" name="endurance" class="form-check-input">
Endurance</label></td>
<td><label class="form-check-label"><input type="checkbox" value="1" name="minimalExertion" class="form-check-input">
Dyspnea with minimal exertion</label></td>
</tr>
<tr>
<td><label class="form-check-label"><input type="checkbox" value="1" name="contracture" class="form-check-input">
Contracture</label></td>
<td><label class="form-check-label"><input type="checkbox" value="1" name="ambulation" class="form-check-input">
Ambulation</label></td>
<td>
<div class="input-group clean-input-group">
<label class="input-group-text fw-medium">Other (specify):</label>
<input type="text" name="functionalLimitationsOther" id="" class="form-control">
</div>
</td>
</tr>
<tr>
<td><label class="form-check-label"><input type="checkbox" value="1" name="hearing" class="form-check-input">
Hearing</label></td>
<td><label class="form-check-label"><input type="checkbox" value="1" name="speech" class="form-check-input">
Speech</label></td>
<td>
<div class="input-group clean-input-group">
<label class="input-group-text fw-medium">Other (specify):</label>
<input type="text" id="" name="speechOther" class="form-control">
</div>
</td>
</tr>
<tr>
<td colspan="2">
<label class="form-label fw-medium mb-1">Prior transfer ability:</label>
<style>@media (min-width: 992px) {
textarea.w-98 {
width: 98%;
}
}</style>
<textarea name="priorTransferAbility" id="" cols="30" rows="2" class="form-control w-98"></textarea>
</td>
<td>
<label class="form-label fw-medium mb-1">Prior social activity level:</label>
<textarea name="priorSocialActivityLevel" id="" cols="30" rows="2" class="form-control"></textarea>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td class="bg-black py-2 px-3" colspan="2">
<h3 class="text-center m-0 text-white">MUSCULOSKELETAL</h3>
</td>
</tr>
<tr>
<td class="labels-group w-md-50">
<div class="d-block"><label class="form-check-label">
<input type="checkbox" value="1" name="noProblem" class="form-check-input"> No Problem</label>
</div>
<p>Check all that apply:</p>
<span class="fw-medium me-2">Has patient had any past problems or injuries to:</span>
<label class="form-check-label"><input type="checkbox" value="1" name="joints" class="form-check-input"> joints</label>
<label class="form-check-label"><input type="checkbox" value="1" name="muscles" class="form-check-input"> muscles</label>
<label class="form-check-label"><input type="checkbox" value="1" name="bones" class="form-check-input"> bones?</label>
<br>
<label class="form-check-label"><input type="radio" name="hpapp" class="form-check-input" value="0"> No</label>
<label class="form-check-label"><input type="radio" name="hpapp" class="form-check-input" value="1"> Yes (note a
problem could be a disease process, for example: osteoporosis, tetanus or cancer) If yes, what
happened:</label>
<textarea name="yesNote" id="" cols="30" rows="2" class="form-control mt-1"></textarea>

<label class="form-label fw-medium mb-1 mt-2">Treatment received:</label>
<textarea name="treatmentReceived" id="" cols="30" rows="2" class="form-control mt-1"></textarea>

<div class="d-block mt-2">
<span class="fw-medium me-2">Did the patient have any after effects/residual problems from the problem or injury reported?</span>
<label class="form-check-label"><input type="radio" value="2" name="hparp" class="form-check-input">
No</label>
<label class="form-check-label"><input type="radio" name="hparp" class="form-check-input" value="3"> Yes If
yes, what happened:</label>
<textarea name="hpapp2note" id="" cols="30" rows="2" class="form-control mt-1"></textarea>
</div>

<div class="d-block mt-2">
<p class="fw-medium mb-0">Patient has pain associated with (check all that apply):</p>
<div class="ms-2">
<label class="form-check-label">
<input type="checkbox" value="1" name="painJoints" class="form-check-input">joints</label>
<label class="form-check-label">
<input type="checkbox" value="1" name="painMuscles" class="form-check-input">muscles</label>
<label class="form-check-label">
<input type="checkbox" value="1" name="painBones" class="form-check-input">bones?</label>
</div>
</div>

<div class="d-block mt-2">
<span class="fw-medium me-2">Patient has (check all that apply):</span>
<label class="form-check-label">
<input type="checkbox" value="1" name="tingling" class="form-check-input">tingling</label>
<label class="form-check-label">
<input type="checkbox" value="1" name="numbness" class="form-check-input">numbness</label>
<div class="ms-2">
<label class="form-check-label">
<input type="checkbox" value="1" name="swelling" class="form-check-input">swelling</label>
<label class="form-check-label">
<input type="checkbox" value="1" name="contractures" class="form-check-input">contracture(s)</label>
<span class="fw-medium me-2">weakness of: </span>
<label class="form-check-label">
    <input type="checkbox" value="1" name="ue" class="form-check-input">UE</label>
    <label class="form-check-label">
        <input type="checkbox" value="1" name="le" class="form-check-input">LE</label>
        <label class="form-check-label">
            <input type="checkbox" value="1" name="atrophy" class="form-check-input">atrophy</label>
            <label class="form-check-label">
                <input type="checkbox" value="1" name="rom" class="form-check-input">decreased
            ROM</label>
        </div>
    </div>

    <div class="d-block mt-2">
        <span class="fw-medium me-2">Motor changes:</span>
        <label class="form-check-label"><input type="radio" name="motorChanges" class="form-check-input" value="0">No</label>
        <label class="form-check-label"><input type="radio" name="motorChanges" class="form-check-input" value="1">Yes</label>
        <span class="fw-medium me-2 ms-2">If yes:</span>
        <label class="form-check-label">
            <input type="checkbox" value="1" name="motorChangeFine" class="form-check-input">fine</label>
            <label class="form-check-label">
                <input type="checkbox" value="1" name="motorChangeGross" class="form-check-input">gross</label>
            </div>

            <div class="d-block mt-2">
                <span class="fw-medium me-2">Hand grips:</span>
                <label class="form-check-label"><input type="radio" name="handGrips" value="1" class="form-check-input">equal</label>
                <label class="form-check-label"><input type="radio" name="handGrips" value="2" class="form-check-input">unequal</label>
                <div class="ms-2">
                    <span class="fw-medium me-2">strong:</span>
                    <label class="form-check-label">
                        <input type="checkbox" value="1" name="strongR" class="form-check-input">R</label>
                        <label class="form-check-label"><input type="checkbox" value="1" name="strongL"
                         class="form-check-input">L</label>
                         <span class="fw-medium me-2 ms-2">weak:</span>
                         <label class="form-check-label">
                            <input type="checkbox" value="1" name="weakR" class="form-check-input">R</label>
                            <label class="form-check-label"><input type="checkbox" value="1" name="weakL" class="form-check-input">L</label>
                        </div>
                    </div>
                </td>
                <td class="labels-group align-top">
                    <span class="fw-medium me-2">Has the patient had an amputation?</span>
                    <label class="form-check-label"><input type="radio" name="htpa" value="0" class="form-check-input"> No</label>
                    <label class="form-check-label"><input type="radio" name="htpa" value="1" class="form-check-input"> Yes If
                    yes,</label>
                    <div class="ms-2">
                        <span class="fw-medium me-2">below knee:</span>
                        <label class="form-check-label"><input type="checkbox" value="1" name="belowRight" class="form-check-input">
                        right</label>
                        <label class="form-check-label"><input type="checkbox" value="1" name="belowLeft" class="form-check-input">
                        left</label>
                        <span class="fw-medium me-2">above knee:</span>
                        <label class="form-check-label">
                            <input type="checkbox" value="1" name="aboveRight" class="form-check-input">
                        right</label>
                        <label class="form-check-label">
                            <input type="checkbox" value="1" name="aboveLeft" class="form-check-input">
                        left</label>
                        <br>
                        <span class="fw-medium me-2">upper extremity:</span>
                        <label class="form-check-label"><input type="checkbox" value="1" name="upperRight" class="form-check-input">
                        right</label>
                        <label class="form-check-label"><input type="checkbox" value="1" name="upperLeft" class="form-check-input">
                        left</label>
                        <div class="input-group clean-input-group">
                            <label class="input-group-text fw-medium">Other:</label>
                            <input type="text" id="upperOther" name="upperOther" class="form-control">
                        </div>
                    </div>

                    <p class="fw-medium mb-0 mt-2">When standing does the patient appear to have:</p>
                    <div class="d-block"><label class="form-check-label">
                        <input type="checkbox" value="1" name="exaggeratedForward" class="form-check-input">Exaggerated forward
                    curve of lumbar region</label></div>
                    <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="upperBack"
                        class="form-check-input">Rounded upper back
                    S shaped spine</label></div>
                    <div class="d-block"><label class="form-check-label"><input type="checkbox" value="1" name="canTStand"
                        class="form-check-input">N/A patient can't
                    stand</label></div>

                    <div class="d-block mt-2">
                        <span class="fw-medium me-2">Does the patient's posture limit their activities?</span>
                        <label class="form-check-label"><input type="radio" value="0" name="dtppl" class="form-check-input">No</label>
                        <label class="form-check-label"><input type="radio" value="1" name="dtppl"
                         class="form-check-input">Yes</label>
                         <label class="form-label fw-medium mb-1 mt-2">If the patient has any of these conditions, specify
                         what and how it affects their functional ability and/or safety:</label>
                         <textarea name="abilitySafety" id="abilitySafety" cols="30" rows="4" class="form-control mt-1"></textarea>
                     </div>
                 </td>
             </tr>
         </table>

         <div class="table-responsive">
            <table class="table table-bordered align-middle default-td not-responsive">
                <tr>
                    <td class="bg-black py-2 px-3" colspan="2">
                        <h3 class="text-center m-0 text-white">FALL RISK ASSESSMENT</h3>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-3" colspan="2">
                        <h4 class="text-center m-0">MAHC 10-FALL RISK ASSESSMENT TOOL</h4>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="width: auto !important;">
                        <p><b>REQUIRED CORE ELEMENTS - Assess one point for each core element "yes".</b>
                            <br>
                            <i class="fw-medium">Information may be gathered from medical record, assessment and if
                                applicable, the patient/caregiver. Beyond protocols listed below, scoring should be based on
                            your clinical judgment.</i></p>
                        </td>
                        <td class="text-center"><b>POINTS</b></td>
                    </tr>
                    <tr>
                        <td><b>Age 65+</b></td>
                        <td><input type="number" name="age" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Diagnosis (3 or more co-existing)</b><br>
                            Includes only documented medical diagnosis.
                        </td>
                        <td><input type="number" name="noDiagnosis" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Prior history of falls within 3 months</b><br>
                            An unintentional change in position resulting in coming to rest on the ground or at a lower level.
                        </td>
                        <td><input type="number" name="priorHistory" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Incontinence</b><br>
                            Inability to make it to the bathroom or commode in timely manner. Includes frequency, urgency,
                            and/or nocturia.
                        </td>
                        <td><input type="number" name="incontinence" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Visual impairment</b><br>
                            Includes but not limited to, macular degeneration, diabetic retinopathies, visual field loss, age
                            related changes, decline in visual acuity, accommodation, glare tolerance, depth perception, and
                            night vision or not wearing prescribed glasses or having the correct prescription.
                        </td>
                        <td><input type="number" name="visualImpairment" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Impaired functional mobility</b><br>
                            May include patients who need help with IADLs or ADLs or have gait or transfer problems, arthritis,
                            pain, fear of falling, foot problems, impaired sensation, impaired coordination or improper use of
                            assistive devices.
                        </td>
                        <td><input type="number" name="mobility" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Environmental hazards</b><br>
                            May include but not limited to, poor illumination, equipment tubing, inapprop footwear, pets, hard
                            to reach items, floor surfaces that are uneven or cluttered, or outdoor entry and exits.
                        </td>
                        <td><input type="number" name="hazards" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Poly Pharmacy (4 or more prescriptions - any type)</b><br>
                            All PRESCRIPTIONS including prescriptions for OTC meds. Drugs! associated with fall risk include but
                            not limited to, sedatives, anti-depressants, tranquilizers, narcotics, antihypertensives, cardiac
                            meds, corticosteroids, anti-anxiety drugs, anticholinergic drugs, and hypoglycemic drugs.
                        </td>
                        <td><input type="number" name="pharmacy" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Pain affecting level of function</b><br>
                            Pain often affects an individual's desire or ability to move or pain can be a factor in depression
                            or compliance with safety recommendations.
                        </td>
                        <td><input type="number" name="affecting" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Cognitive impairment</b><br>
                            Could include patients with dementia, Alzheimer's or stroke patients or patients who are confused,
                            use poor judgment, have decreased comprehension, impulsivity, memory deficits. Consider patient's
                            ability to adhere to the plan of care.
                        </td>
                        <td><input type="number" name="cognitive" class="form-control"></td>
                    </tr>
                    <tr>
                        <td class="bg-secondary-subtle">
                            <p class="d-flex justify-content-between">
                                <span><b>A score of 4 or more is considered at risk for falling</b></span>
                                <span><b>TOTAL</b></span>
                            </p>
                        </td>
                        <td><input type="number" name="total" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="2">MAHC 10 reprinted with permission from <b><i>Missouri Alliance for</i> HOME CARE</b>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mt-[20px]"><button type="submit" value="functionalabilitiesubmit" name="functionalabilitiesubmit" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="bladder-bowel">Save & Continue</button></div>
        </form>
    </div>


