<form name="patientAdvanceForm" method="post" id="patientAdvanceForm">
    <div class="vt card mb-2 tabcontent" id="advance">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Advance Care Plan</h2>
        </div>
        <div class="card-body row">
            <input type="hidden" name="org_id" value="{{ request('org') }}">

            <div class="col-md-12">
                <label for="middle_name">Advance Care Plan: </label>
                <hr class="hr-st">
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">Living Will</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <label for="language_barrier">DNR, Out of hospital</label>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <label for="middle_name">Face-to-Face Evaluation Information: </label>
                <hr class="hr-st">
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">NA</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">Date of Face-to-Face visit</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                    <span for="language_barrier">Face-to-Face to be completed within 30 days</span>
                </div>
            </div>
        </div>
    </div>
</form>
