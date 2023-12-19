<form class="patientPharmacyForm" name="patientPharmacyForm" id="patientPharmacyForm" method="post">
    @csrf
<div class="vt acrd mb-2 tabcontent" id="pharmacy_form">
    <div class="card-header text-center !bg-[#4133BF]">
        <h2 class="gh text-slate-800 text-white">Pharmacy Information:</h2>
    </div>
    <div class="row p-2">
        <div class="col-md-5 mt-4">
            <div class="form-group">
                    <p class="fw-bolder">Add Patient Pharmacy Information</p>
                    <br>
                <label for="gender">Pharmacy: </label>
                <select name="pharmacy" id="pharmacy" class="pharmacySelector form-control s ou pharmacy-drop-down">
                    <option value="">--- Select ---</option>
                </select>

            </div>
        </div>
        <div class="col-md-7 mt-4">
            <button type="button" class="btn btn-block hd xu ye button-float-right add_new_pharmacy">Add new Pharmacy</button>
        </div>
        <div class="mt-4">
            <div class="col">
                <label for="last_name">Pharmacy Name:</label>
                <span id="pharmacy_name"></span>
            </div>
            <div class="col">
                <label for="pharmacy_address">Address:</label>
                <span id="pharmacy_address"></span>
            </div>
            <div class="col">
                <label for="pharmacy_telephone">Telephone:</label>
                <span id="pharmacy_telephone"></span>
            </div>
            <div class="col">
                <label for="pharmacy_fax">Fax:</label>
                <span id="pharmacy_fax"></span>
            </div>
        </div>
    </div>
    <div class="col pb-4 pl-3">
        <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
    </div>
    
</div>
</form>
