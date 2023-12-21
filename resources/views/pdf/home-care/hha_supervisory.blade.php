<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient History</title>
    <link rel="stylesheet" href="{{public_path('outass/bs/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{base_path(). 'outass/css/style.css'}}">

</head>
<body class="container">

<div class="container pt-5">

    <div class="form-holder mt-5">
        <form action="" method="post" id="oasis-e-form">
            <h3 class="text-white bg-dark border border-1 py-2 px-3">Aide Supervisory Visit</h3>
            <table class="table table-bordered align-middle default-td">
                <tr>
                    <td class="bg-secondary-subtle" colspan="4">
                        <b>Visit Assessment</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="fw-medium">Supervision Date:</span>
                    </td>
                    <td><input type="date" class="form-control" name=""></td>
                    <td>
                        <div class="input-group">
                            <label class="input-group-text">Start:</label>
                            <input type="time" id="" class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <label class="input-group-text">End:</label>
                            <input type="time" id="" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Supervisor Name:</span></td>
                    <td colspan="3">
                        <span class="fw-medium">Mariame Baraka,</span>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Clinician Name:</span></td>
                    <td colspan="3">
                        <input type="text" name="" class="form-control">
                        <span class="fw-medium"><i>Name of person being supervised</i></span>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Clinician Present at Time of Visit:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Notifies client/caregiver of schedule:</span></td>
                    <td colspan="3">
                        <input type="date" name="" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Reports for duty as assigned:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Cooperative with client and others:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Courteous toward client and others:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Maintains an open communication with client and others:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Follows client plan of care as instructed:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Documents appropriately:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Demonstrates competency with assigned tasks:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Timely notification to supervisor of client's needs or changes
                     in condition:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                <tr>
                    <td><span class="fw-medium">Adheres to organizational policies and procedures:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>
                <td><span class="fw-medium">Complies with infection prevention and control policies and procedures:</span></td>
                <td colspan="3" class="labels-group">
                    <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                    <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                </td>
                </tr>
                <tr>
                    <td><span class="fw-medium">Honors patient rights:</span></td>
                    <td colspan="3" class="labels-group">
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> Yes</label>
                        <label class="form-check-label"><input type="radio" name="cpatov" class="form-check-input"> No</label>
                    </td>
                </tr>

                <tr><td class="border-0"></td></tr>

                <tr>
                    <td class="bg-secondary-subtle" colspan="4">
                        <b>Changes and/or Instructions</b>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                    </td>
                </tr>
            </table>
            <div class=" py-5">
                <button type="button" class="bg-primary btn btn-primary">Save</button>
            </div>


        </form>
    </div>
</div>

<script src="bs/js/bootstrap.min.js"></script>
    @include('pdf.home-care.pagecounter')
</body>
</html>
