<div class="card mb-2 tabcontent" id="physician">
    <div class="card-header text-center bg-dark">
        <h2 class="gh text-slate-800 text-white">Physician</h2>
    </div>
    <div class="card-body">
        <div class="row">
            <p>Add Patient Primary/Attending Physician here</p>
            <br>
            <div class="col-md-5">
                <label for="first_name">Primary Physician:</label>
                <select name="pharmacy" class="physicianSelector form-control s ou primary-physician-drop-down">
                    <option value="">--- Select ---</option>
                    @if ($physicians)
                        @foreach ($physicians as $physician)
                            <option value={{ $physician->id }}>{{ $physician->first_name }} {{ $physician->last_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col-md-7">
                <button type="button" class="btn btn-block add_new_physician hd xu ye button-float-right">Add new Physician</button>
            </div>
            <div class="physician_modal hidden" style="max-width: 80%;">
                @include('patients.components.physician_modal')
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                <span for="language_barrier">Attending Physician was contacted and agreed to provide ongoing care (orders) for this patient.</span>
            </div>
        </div>
        <div class="mt-4">
            <div class="col">
                <label for="physician_name">Physician Name:</label>
                <span id="physician_name"></span>
            </div>
            <div class="col">
                <label for="physician_address">Address:</label>
                <span id="physician_address"></span>
            </div>
            <div class="col">
                <label for="physician_telephone">Telephone:</label>
                <span id="physician_telephone"></span>
            </div>
            <div class="col">
                <label for="physician_fax">Fax:</label>
                <span id="physician_fax"></span>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-5">
                <label for="first_name">Referring Physician:</label>

                <select name="referring_physician" class="referringSelector form-control s ou referring-physician-drop-down">
                    <option value="">--- Select ---</option>
                    @if ($physicians)
                        @foreach ($physicians as $physician)
                            <option value={{ $physician->id }}>{{ $physician->first_name }} {{ $physician->last_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mt-4">
                <div class="col">
                    <label for="physician_name_alt">Physician Name:</label>
                    <span id="physician_name_alt"></span>
                </div>
                <div class="col">
                    <label for="physician_address">Address:</label>
                    <span id="physician_address_alt"></span>
                </div>
                <div class="col">
                    <label for="physician_telephone">Telephone:</label>
                    <span id="physician_telephone_alt"></span>
                </div>
                <div class="col">
                    <label for="physician_fax">Fax:</label>
                    <span id="physician_fax_alt"></span>
                </div>
            </div>
        </div>
        <hr class="hr-st">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <label for="first_name">Face-to-Face Evaluation Information:</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="face_to_face_evaluation[]" id="face_to_face_evaluation_na" class="form-control">
                    <span for="face_to_face_evaluation_na">NA</span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="face_to_face_evaluation[]" id="face_to_face_evaluation_date" class="form-control">
                    <span for="face_to_face_evaluation_date">Date of Face-to-Face Visit</span>

                </div>
                <div class="form-group">
                    <input type="checkbox" name="face_to_face_evaluation[]" id="face_to_face_evaluation_completed" class="form-control">
                    <span for="face_to_face_evaluation_completed">Face-to-Face to be completed within 30 days</span>

                </div>

            </div>
        </div>
    </div>
</div>
