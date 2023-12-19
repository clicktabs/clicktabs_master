<div class="patient_status_table pb-5 !px-[15px]">
    <div class="patient_table_filter d-flex align-items-center">
        <div class="filter_show">
            <label>Show</label>
            <select>
                <option value="all">All</option>
            </select>
        </div>
        <div class="filter_date">
            <label>Date</label>
            <select>
                <option value="all">All</option>
            </select>
        </div>
    </div>
    <div class="patient_table">
        <table class="table-responsive">
            <thead>
            <tr>
                <th>Task</th>
                <th>Schedule Date <span></span></th>
                <th>Assigned</th>
                <th>Status</th>
                <th colspan="2" class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ACCIDENT RISK ASSESSMENT</td>
                <td>04/04/23</td>
                <td>Employee</td>
                <td>Active</td>
                <td>
                    <button type="button" class="btn btn-primary accident_risk_assessment">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Change of physician</td>
                <td>04/04/23</td>
                <td>Employee</td>
                <td>Active</td>
                <td>
                    <button type="button" class="btn btn-primary change_of_physician">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>HHA SUPERVISORY VISIT</td>
                <td>04/04/23</td>
                <td>Employee</td>
                <td>Active</td>
                <td>
                    <button type="button" class="btn btn-primary hha_supervisory">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>PATIENT RECERTIFICATION CHECKLIST</td>
                <td>04/04/23</td>
                <td>Employee</td>
                <td>Active</td>
                <td>
                    <button type="button" class="btn btn-primary patient_recertification">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Physician order</td>
                <td>04/04/23</td>
                <td>Employee</td>
                <td>Active</td>
                <td>
                    <button type="button" class=" btn btn-primary physician_order">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>POST FALL EVALUATION</td>
                <td>04/04/23</td>
                <td>Employee</td>
                <td>Active</td>
                <td>
                    <button type="button" class=" btn btn-primary post_fall_evaluation">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>REFERRAL INTAKE FORM</td>
                <td>04/04/23</td>
                <td>Employee</td>
                <td>Active</td>
                <td>
                    <button type="button" class=" btn btn-primary referral_intake">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
{{-- Modal initialize --}}

{{-- Accident Risk Assessment --}}
<div class="modal fade !max-w-full" id="accident_risk_assessment">
    @include('nursing.form.accident-risk-assessment')
</div>
{{-- Change of physician --}}
<div class="modal fade !max-w-full" id="change_of_physician">
    @include('nursing.form.change-of-physician')
</div>
{{-- HHA supervisory --}}
<div class="modal fade !max-w-full" id="hha_supervisory">
    @include('nursing.form.hha_supervisory')
</div>
{{-- Patient recertification --}}
<div class="modal fade !max-w-full" id="patient_recertification">
    @include('nursing.form.patient_recertification')
</div>
{{-- Physician order --}}
<div class="modal fade !max-w-full" id="physician_order">
    @include('nursing.form.physician-order')
</div>
{{-- Post fall evaluation --}}
<div class="modal fade !max-w-full" id="post_fall_evaluation">
    @include('nursing.form.post-fall-evaluation')
</div>
{{-- Referral Intake --}}
<div class="modal fade !max-w-full" id="referral_intake">
    @include('nursing.form.referral-intake')
</div>
