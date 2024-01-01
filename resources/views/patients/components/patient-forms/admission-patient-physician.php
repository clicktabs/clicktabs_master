<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<div class="vt card mb-2 tabcontent" id="physician">
            <form name="patientPhysicianForm" id="patientPhysicianForm">
                <div class="card-header text-center !bg-[#4133BF]">
                    <h2 class="gh text-slate-800 !text-white">Physician</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <label for="first_name">Primary Physician:</label>

                            <select name="primary_physician" id="primary_physician"
                            class="physicianSelector form-control s ou primary-physician-drop-down">
                            <option value="{{ old('primary_physician') }}">--- Select ---</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <button type="button" class="btn btn-block add_new_physician hd xu ye button-float-right">Add new
                            Physician
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="checkbox" name="attending_physician" id="attending_physician" value="1"
                        class="form-control">
                        <label class="font-normal" for="attending_physician">Attending Physician was contacted and agreed to
                        provide ongoing care (orders) for this patient.</label>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="col">
                        <label for="physician_name">Physician Name:</label>
                        <span id="physician_name" name="physician_name" value="{{ old('physician_name') }}"></span>
                    </div>
                    <div class="col">
                        <label for="physician_address">Address:</label>
                        <span id="physician_address" name="physician_address" value="{{ old('physician_address') }}"></span>
                    </div>
                    <div class="col">
                        <label for="physician_telephone">Telephone:</label>
                        <span id="physician_telephone" name="physician_telephone" value="{{ old('physician_telephone') }}"></span>
                    </div>
                    <div class="col">
                        <label for="physician_fax">Fax:</label>
                        <span id="physician_fax" name="physician_fax" valu="{{ old('physician_fax') }}"></span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-5">
                        <label for="first_name">Referring Physician:</label>
                        <select name="referring_physician" id="referring_physician"
                        class="referringSelector form-control s ou referring-physician-drop-down">
                        <option value="{{ old('referring_physician') }}">--- Select ---</option>
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
                        <input type="checkbox" name="face_to_face_evaluation[]" value="na"
                        id="face_to_face_evaluation" class="form-control">
                        <label for="face_to_face_evaluation_na">NA</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="face_to_face_evaluation[]" value="date" id="face_to_face_evaluation_date" class="form-control">
                        <label for="face_to_face_evaluation_date">Date of Face-to-Face Visit</label>
                        <input class="face_to_face" type="date" name="faceVsitDate" >
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="face_to_face_evaluation[]"
                        value="face_to_face_evaluation_completed" id="face_to_face_completed"
                        class="form-control">
                        <label for="face_to_face_evaluation_completed">Face-to-Face to be completed within 30
                        days</label>
                    </div>
                </div>
            </div>
        </div><div class="col pb-4 pl-3">
                 <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white ">Save and Continue</button>
                </div>
        </form>
</div>

<script>
$(".face_to_face").hide();
$("#face_to_face_evaluation_date").click(function() {
    if($(this).is(":checked")) {
        $(".face_to_face").show(300);
    } else {
        $(".face_to_face").hide(200);
    }
});
</script>
