<table class="table table-bordered align-middle">
    <tr>
        <td class="bg-secondary-subtle">
            <strong>C0500. BIMS Summary Score</strong>
        </td>
    </tr>
    <tr>
        <td>
            <p><b>Add scores</b> for questions C0200-C0400 and fill in total score (00-15)
                <br><b>Enter 99 if the patient was unable to complete the interview</b>
            </p>
            <input style="max-width: 400px;" type="number" class="form-control" name="addScore" id="">
        </td>
    </tr>
    <tr>
        <td class="border-0"></td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>C1310. Signs and Symptoms of Delirium (from CAM©)</strong>
        </td>
    </tr>
    <tr>
        <td>Code <b>after completing</b> Brief Interview for Mental Status and reviewing medical record.</td>
    </tr>
    <tr>
        <td>
            <p>A. <b>Acute Onset of Mental Status Change</b>
                <br><b>Is there evidence of an acute change in mental status</b> from the patient's baseline?
            </p>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="acute" class="form-check-input" value="0">
                    0. <b>No</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="acute" class="form-check-input" value="1">
                    1. <b>Yes</b>
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <h5>Coding:</h5>
            <ul>
                <li>0. <b>Behavior not present</b></li>
                <li>1. <b>Behavior continuously present, does not fluctuate</b></li>
                <li>2. <b>Behavior present, fluctuates</b> (comes and goes, changes in severity)</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="p-0 border-0">
            <table class="table table-bordered align-middle nmt-1 nmb-1">
                <tr>
                    <td style="width: 90px;">
                        <input type="number" id="inattention" name="inattention" class="form-control">
                    </td>
                    <td>
                        <label for="inattention">B. <b>Inattention</b> – Did the patient have difficulty focusing attention,
                            for example, being easily distractible or having difficulty keeping track of what was being said?
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="width: 90px;">
                        <input type="number" id="disorganized" name="disorganized" class="form-control">
                    </td>
                    <td>
                        <label for="disorganized">C. <b>Disorganized thinking</b> – Was the patient's thinking disorganized
                            or incoherent (rambling or irrelevant conversation, unclear or illogical flow of ideas,
                            or unpredictable switching from subject to subject)?
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style="width: 90px;">
                        <input type="number" id="altered" name="altered" class="form-control">
                    </td>
                    <td>
                        <label for="altered">D. <b>Altered level of consciousness</b> – Did the patient have altered
                            level of consciousness, as indicated by any of the following criteria?</label>
                        <ul style="list-style-type:square" class="mt-1">
                            <li><b>vigilant</b> – startled easily to any sound or touch</li>
                            <li><b>lethargic</b> – repeatedly dozed off when being asked questions, but responded to voice or touch</li>
                            <li><b>stuporous</b> – very difficult to arouse and keep aroused for the interview</li>
                            <li><b>comatose</b> – could not be aroused</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="border-0 ps-0 pe-0 pt-1">
            <p><i>Adapted from: Inouye SK, et al. Ann Intern Med. 1990; 113: 941-948. Confusion Assessment
                    Method. Copyright 2003, Hospital Elder Life Program, LLC. Not to be reproduced without
                    permission.</i></p>
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M1700. Cognitive Functioning</strong>
            <p>Patient's current (day of assessment) level of alertness, orientation, comprehension,
                concentration, and immediate memory for simple commands.</p>
        </td>
    </tr>
    <tr>
        <td>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="checkbox" name="alert" class="form-check-input" value="0">
                    0. <b>Alert/oriented, able to focus and shift attention, comprehends and recalls task directions independently.</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="checkbox" name="prompting" class="form-check-input" value="1">
                    1. <b>Requires prompting (cueing, repetition, reminders) only under stressful or unfamiliar conditions.</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="checkbox" name="assistance" class="form-check-input" value="2">
                    2. <b>Requires assistance and some direction in specific situations (for example, on all tasks involving shifting of attention) or consistently requires low stimulus environment due to distractibility.</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="checkbox" name="considerable" class="form-check-input" value="3">
                    3. <b>Requires considerable assistance in routine situations. Is not alert and oriented or is unable to shift attention and recall directions more than half the time.</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="checkbox" name="dependent" class="form-check-input" value="4">
                    4. <b>Totally dependent due to disturbances such as constant disorientation, coma, persistent vegetative state, or delirium.</b>
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <td class="border-0"></td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M1710. When Confused</strong>
            <p>(Reported or <u>O</u>bserved <u>W</u>ithin the <u>L</u>ast 14 <u>D</u>ays):</p>
        </td>
    </tr>
    <tr>
        <td>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenConfused" class="form-check-input" value="0">
                    0. <b>Never</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenConfused" class="form-check-input" value="1">
                    1. <b>In new or complex situations only</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenConfused" class="form-check-input" value="2">
                    2. <b>On awakening or at night only</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenConfused" class="form-check-input" value="3">
                    3. <b>During the day and evening, but not constantly</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenConfused" class="form-check-input" value="4">
                    4. <b>Constantly</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenConfused" class="form-check-input" value="5">
                    NA <b>Patient nonresponsive</b>
                </label>
            </div>
        </td>
    </tr>
    <tr>
        <td class="border-0"></td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M1720. When Anxious</strong>
            <p>(Reported or <u>O</u>bserved <u>W</u>ithin the <u>L</u>ast 14 <u>D</u>ays):</p>
        </td>
    </tr>
    <tr>
        <td>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenAnxious" class="form-check-input" value="0">
                    0. <b>None of the time</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenAnxious" class="form-check-input" value="1">
                    1. <b>Less often than daily</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenAnxious" class="form-check-input" value="2">
                    2. <b>Daily, but not constantly</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenAnxious" class="form-check-input" value="3">
                    3. <b>All of the time</b>
                </label>
            </div>
            <div class="d-block">
                <label class="form-check-label">
                    <input type="radio" name="whenAnxious" class="form-check-input" value="4">
                    NA <b>Patient nonresponsive</b>
                </label>
            </div>
        </td>

    </tr>
</table>
