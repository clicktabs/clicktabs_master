<div class="container">
    <div class="card mb-2 p-3">
        <div class="card-body row">
            @include('nursing.components.header')
            <form method="post">
                <h1 class="mb-3 mt-3 font-bold text-center ">CHANGE OF ATTENDING PHYSICIAN</h1>
                <!-- <div class="form-control mt-4"> -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center gap-2">
                            <div>
                                <input type="checkbox" class="form-check-input mt-0" id="designated_representative_1" name="designated_representative" />
                                <label class="form-check-label" for="designated_representative_1">|</label>
                            </div>
                            <div class="ml-3">
                                <input type="checkbox" class="form-check-input mt-0" id="designated_representative_2" name="designated_representative" />
                                <label class="form-check-label" for="designated_representative_2">My designated representative for,</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <label class="flex-shrink-0 mb-0" for="client_Name">NAME First, MI, Last</label>
                            <input type="text" class="py-0 form-control border-0 border-bottom" />
                        </div>
                    </div>
                </div>

                <!-- </div> -->
                <!-- <div class="form-control mt-4"> -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="client_Name">(Social Security #),</label>
                        <input type="text" class=" form-control border-0 border-bottom" />
                    </div>
                    <div class="col-md-6">
                        <label for="client_Name">choose to change my currently designated attending physician from:</label>
                        <input type="text" class=" form-control border-0 border-bottom" />
                    </div>
                </div>

                <!-- </div> -->
                <!-- <div class="form-control mt-4"> -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="client_Name">Full Name - First, MI, Last</label>
                        <input type="text" class=" form-control border-0 border-bottom" />
                    </div>
                    <div class="col-md-6">
                        <label for="client_Name">NPI #</label>
                        <input type="text" class=" form-control border-0 border-bottom" />
                    </div>
                </div>
                <!-- </div> -->
                <div class="row mt-4">
                    <label for="textarea_address_office"> located at (office address)</label>
                    <textarea class="form-control mt-2" id="textarea_address_office" rows="9"></textarea>
                </div>

                <!-- <div class="form-control mt-4"> -->
                <div class="row mt-5">
                    <div class="col text-center bg-light py-3 font-bold">
                        To the following physician
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-8">
                        <div class="physician_text">
                            <label></label>
                            <input type="text" class=" form-control border-0 border-bottom" />
                            <span class="d-block text-center">Full Name - First, MI, Last</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <label for="NPI_text">NPI #</label>
                            <input type="text" class=" form-control border-0 border-bottom" />
                        </div>
                    </div>
                </div>

                <!-- </div> -->
                <div class="row mt-4">
                    <label for="textarea_address"> located at (office address)</label>
                    <textarea class="form-control mt-2" id="textarea_address" rows="9"></textarea>
                </div>
                <!-- <div class="form-control mt-4"> -->
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="change_date">Effective Date of Change:</label>
                        <input type="date" class=" form-control border-0 border-bottom" />
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="form-control mt-4"> -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <span>(Date change can be no earlier than the date the statement is signed.)</span>
                    </div>
                </div>
                <!-- </div> -->
                <div class="row mt-4">
                    <div class="col">
                        <h4 class="font-bold text-left mb-4">I understand that by choosing to change my current
                            attending physician it will not affect the conditions
                            of my current benefit period.</h4>
                        <div class="radio-check_btn">
                            <input type="radio" class="radio_btn" id="radio_btn" name="my_choice_btn" />
                            <label class="form_radio_label" for="radio_btn">my choice</label>
                        </div>
                        <div class="radio-check_btn">
                            <input type="radio" class="radio_btn" id="radio_btn1" name="my_choice_btn" />
                            <label class="form-radio-label" for="radio_btn1">my designated representative’s choice</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="change_date">Date:</label>
                        <input type="date" class=" form-control border-0 border-bottom" />
                    </div>
                    <div class="col-md-8">
                        <input type="file" class="form-control border-0 border-bottom">
                        <label for="img_choose">Signature of Patient or Designated Representative (if Patient Is Unable to Sign):</label>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="form-control mt-4"> -->
                <div class="row mt-4">
                    <div class="col-md-4">
                        <input type="date" class=" form-control border-0 border-bottom" />
                        <label for="change_date">Date:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" class="form-control border-0 border-bottom">
                        <label for="img_choose">Signature of Patient or Designated Representative (if Patient Is Unable to Sign):</label>
                    </div>
                </div>

                <button type="submit" class="form-control btn btn-primary mt-5 save_btn">Save</button>
            </form>
        </div>
    </div>
</div>
