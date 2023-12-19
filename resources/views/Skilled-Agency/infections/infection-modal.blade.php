<div class="modal-dialog" style="max-width: 1200px;">
    <div class="modal-content">
        <div class="modal-header">
            <div>
                <h1 class="fw-bold fs-2 mb-0">Infection Control</h1>
                <p class="mb-0">Log New Patient Infection</p>
            </div>
        </div>
    <div class="modal-body">
        <form action="{{route('skilled-agency.infection-control.store')}}" method="post">
            @csrf
            <!-- Patient Information -->
            <div class="patient-information">
                <h3 class="fw-normal">Patient Information</h3>
                <div class="bg-primary-subtle border border-primary rounded-1">
                <p class="p-2 mb-0"><i>All fields in this section are required</i></p>
                <div class="row gy-1 gx-4">
                    <div class="col-lg">
                        <table class="table table-borderless align-middle bg-transparent">
                            <tr>
                            <td><label for=""><b>Patient:</b></label></td>
                            <td style="min-width: 260px;">
                                <select class="form-select" name="patient_id" aria-label="">
                                    <option>Select</option>
                                </select>
                            </td>
                            </tr>

                            <tr>
                            <td><label for=""><b>Primary Physician:</b></label></td>
                            <td>
                                <select class="form-select" name="primaryPhysician_id" aria-label="">
                                    <option>Select</option>
                                </select>
                            </td>
                            </tr>

                            <tr>
                            <td><label for=""><b>Case Manager:</b></label></td>
                            <td>
                                <select class="form-select" name="caseManager_id" aria-label="">
                                    <option>Select</option>
                                </select>
                            </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-lg">
                        <table class="table table-borderless align-middle bg-transparent">
                            <tr>
                                <td><label for=""><b>Infection Reported By:</b></label></td>
                                    <td colspan="2"> </td>
                                    <select class="form-select" name="infectionReportedBy_id" aria-label="">
                                        <option>Select</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                            <td><label for=""><b>Date Reported:</b></label></td>
                            <td><input type="date" name="dateReported" class="form-control" name=""></td>
                            <td>
                                <label class="input-group">
                                    <span class="input-group-text fw-medium">Time:</span>
                                    <input type="time" name="time" id="" class="form-control">
                                </label>
                            </td>
                            </tr>

                            <tr>
                                <td><label for=""><b>Infection Reported To:</b></label></td>
                                <td colspan="2">
                                    <select class="form-select" name="infectionReportedTo_id" aria-label="">
                                        <option>Select</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                </div>
            </div>

            <!-- Infection Information -->
            <div class="infection-information mt-4 bg-body-secondary border">
                <h3 class="bg-primary-subtle p-2 fs-4">Infection Information</h3>
                <table class="table table-borderless bg-transparent">
                <tr>
                    <td colspan="3">
                        <p class="mb-1"><b>Status</b></p>
                        <div class="d-md-flex gap-5 align-items-center">
                            <div><label class="form-check-label"><input type="radio" name="ii_status" value="1" class="form-check-input"> Investigating</label></div>
                            <div><label class="form-check-label"><input type="radio" name="ii_status" value="2" class="form-check-input"> Probable</label></div>
                            <div><label class="form-check-label"><input type="radio" name="ii_status" value="3" class="form-check-input"> Confirmed</label></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label for="" class="fw-medium">Date of Onset</label></td>
                    <td>
                        <input type="date" class="form-control" name="date_of_Onset">
                        <div class="mt-2"><label class="form-check-label"><input type="checkbox" value="1" name="dateSet" class="form-check-input"> Present Upon Admission</label></div>
                    </td>
                    <td rowspan="5">
                        <label for="" class="fw-medium mb-2">Infection Description</label>
                        <textarea name="infectionDescription" id="" cols="30" rows="8" maxlength="2000" class="form-control"></textarea>
                        <p class="d-flex justify-content-between gap-3"><small><i>2000 characters remaining</i></small> <span><a href="" class="clear-txr">Clear</a></span></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="fw-medium">Infection Type</label></td>
                    <td>
                        <select class="form-select" name="infectionType" aria-label="">
                            <option>Select</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="fw-medium">Infection Site</label></td>
                    <td>
                        <select class="form-select" name="infectionSite" aria-label="">
                            <option>Select</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="fw-medium">Patient Location<br>When Discovered</label></td>
                    <td>
                        <select class="form-select" name="patientLocation" aria-label="">
                            <option>Select</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="" class="fw-medium">Communicable?</label></td>
                    <td>
                        <label class="form-check-label me-2"><input type="radio" name="Communicable" value="1" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="Communicable" value="2" class="form-check-input"> No</label>
                    </td>
                </tr>
                </table>
            </div>

            <!-- Infection Actions Taken and Communication -->
            <div class="infection-atc mt-4 bg-body-secondary border">
                <h3 class="bg-primary-subtle p-2 fs-4">Infection Actions Taken and Communication</h3>
                <div class="row gy-0 gx-1">
                <div class="col-lg">
                    <table class="table table-borderless align-middle bg-transparent">
                        <tr>
                            <td><label for="" class="fw-medium">Physician Notified?</label></td>
                            <td style="min-width: 190px;">
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="PhysicianNotified" value="1" class="form-check-input"> Yes</label>
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="PhysicianNotified" value="2" class="form-check-input"> No</label>
                            <label class="form-check-label fw-medium"><input type="radio" name="PhysicianNotified" value="0" class="form-check-input"> N/A</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="" class="fw-medium">Labs Ordered?</label></td>
                            <td>
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="labsOrdered" value="1" class="form-check-input"> Yes</label>
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="labsOrdered" value="2" class="form-check-input"> No</label>
                            <label class="form-check-label fw-medium"><input type="radio" name="labsOrdered" value="0" class="form-check-input"> N/A</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="" class="fw-medium">Patient Hospitalized?</label></td>
                            <td>
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="PatientHospitalized" value="1" class="form-check-input"> Yes</label>
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="PatientHospitalized" value="2" class="form-check-input"> No</label>
                            <label class="form-check-label fw-medium"><input type="radio" name="PatientHospitalized" value="0" class="form-check-input"> N/A</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="" class="fw-medium">Culture Taken?</label></td>
                            <td>
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="CultureTaken" value="1" class="form-check-input"> Yes</label>
                            <label class="form-check-label me-2 fw-medium"><input type="radio" name="CultureTaken" value="2" class="form-check-input"> No</label>
                            <label class="form-check-label fw-medium"><input type="radio" name="CultureTaken" value="0" class="form-check-input"> N/A</label>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg">
                    <table class="table table-borderless align-middle bg-transparent">
                        <tr>
                            <td><label for="" class="fw-medium">Physician:</label></td>
                            <td colspan="2">
                            <select class="form-select" name="iatcPhysician_id" aria-label="">
                                <option>Select</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="min-width: 130px;"><label for="" class="fw-medium">Date Ordered:</label></td>
                            <td><input type="date" name="date_1" id="" class="form-control"></td>
                            <td style="min-width: 210px;">
                            <label class="input-group">
                                <span class="input-group-text fw-medium px-2">Time:</span>
                                <input type="time" id="" name="time_1" class="form-control">
                            </label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="" class="fw-medium">Date:</label></td>
                            <td><input type="date" name="date_1" id="" class="form-control"></td>
                            <td>
                            <label class="input-group">
                                <span class="input-group-text fw-medium px-2">Time:</span>
                                <input type="time" id="" name="time_2" class="form-control">
                            </label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="" class="fw-medium">Date:</label></td>
                            <td><input type="date" name="date_3" id="" class="form-control"></td>
                            <td>
                            <label class="input-group">
                                <span class="input-group-text fw-medium px-2">Time:</span>
                                <input type="time" id="" name="time_3"class="form-control">
                            </label>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="col-lg">
                    <table class="table table-borderless align-middle bg-transparent">
                        <tr>
                            <td style="min-width: 130px;"><label for="" class="fw-medium">Date Notified:</label></td>
                            <td><input type="date" name="dateNotified" id="" class="form-control"></td>
                            <td style="min-width: 210px;">
                            <label class="input-group">
                                <span class="input-group-text fw-medium px-2">Time:</span>
                                <input type="time" id="" name="timedNotified" class="form-control">
                            </label>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="" class="fw-medium">Notes:</label></td>
                            <td colspan="2"><textarea type="text" name="notes" class="form-control"></textarea></td>
                        </tr>
                    </table>
                </div>
                </div>
                <div class="p-3">
                <label for="" class="fw-medium mb-2">Treatment Notes</label>
                     <textarea name="treatmentNotes" id="" cols="30" rows="2" class="form-control"></textarea>
                <p class="d-flex justify-content-between gap-3"><span><a href="" class="clear-txr">Clear</a></span></p>
                </div>
            </div>

            <!-- Infection Medication Administration -->
            <div class="infection-ma mt-4 bg-body-secondary border">
                <h3 class="bg-primary-subtle p-2 fs-4">Infection Medication Administration</h3>
                <div class="px-3">
                <p class="mb-1 fw-medium">Medication Prescribed To Address Infection</p>
                <div class="d-flex gap-2">
                    <div class="form-group has-search">
                        <input type="text" class="form-control" placeholder="Search From Patient's Medication Profile" style="min-width: 340px">
                        <span class="icon icon-search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></span>
                        </div>
                        <button type="button" class="btn btn-primary"><svg style="width: 14px;fill:#ffffff;top:-2px;position:relative" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg> Add Med</button>
                </div>

                <table class="table bg-transparent mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Start Date</th>
                            <th scope="col">DC Date</th>
                            <th scope="col">Medication / Route / Form / Strength</th>
                            <th scope="col">Instructions</th>
                        </tr>
                        </thead>
                </table>

                <div class="row g-2 my-4">
                    <div class="col-lg">
                        <div class="d-flex align-items-center gap-2">
                            <div><label for="" class="fw-medium">Infection Follow-Up Due:</label></div>
                            <div><input type="date" name="infectionFollow" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="d-flex align-items-center gap-2">
                            <div><label for="" class="fw-medium">Follow-Up Required By:</label></div>
                            <div>
                            <select class="form-select" name="follow-UpRequired" aria-label="">
                                <option>Select</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <button type="button" class="btn btn-primary">Save Infection Log</button>
                        <button type="button" class="btn btn-light border ms-2">Cancel</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>

    </div>
