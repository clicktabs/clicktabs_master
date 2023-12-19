<form class="advanceDirectiveForm" name="advanceDirectiveForm" id="advanceDirectiveForm" method="post">
    @csrf
    <div class="vt card mb-2 tabcontent" id="advance_directive">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 text-white">Advance Directive</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <div class="col-md-12">
                        <p>
                            Advance directive by the patient.
                        </p>
                        <br>
                    <div class="col">
                        <input type="checkbox" name="advance_directive[]" value="living_will" id="living_will" class="form-control">
                        <label for="living_will">Living Will</label>
                    </div>
                    <div class="col">
                        <input type="checkbox" name="advance_directive[]" value="dnr_out_hospital" id="dnr_out_hospital" class="form-control">
                        <label for="dnr_out_hospital">DNR, Out of Hospital</label>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col">
                            <label for="first_name">Physician:</label>

                            {{-- <select name="attending" id="attending" class="form-control s ou attending-drop-down">
                                <option value="">--- Select Attending Physician ---</option>
                                <option value="M">Agency</option>
                                <option value="F">Agency</option>
                            </select> --}}
                            <select name="attending" id="attending" class="attendingSelector form-control s ou attending-drop-down">
                                <option value="">--- Select ---</option>
                            </select>
                        </div>


                        <div class="mt-4">
                            <div class="col">
                                <label for="attendin_physician_name">Physician Name:</label>
                                <span id="attendin_physician_name"></span>
                            </div>
                            <div class="col">
                                <label for="attendin_physician_address">Address:</label>
                                <span id="attendin_physician_address"></span>
                            </div>
                            <div class="col">
                                <label for="attendin_physician_phone">Telephone:</label>
                                <span id="attendin_physician_phone"></span>
                            </div>
                            <div class="col">
                                <label for="attendin_physician_fax">Fax:</label>
                                <span id="attendin_physician_fax"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col pb-4 pl-3">
            <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
        </div>
        
    </div>
</form>
