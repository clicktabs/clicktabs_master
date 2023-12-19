<table class="table table-bordered align-middle default-td">  Diagnosed disorder
    <tr>
        <td class="bg-black py-2 px-3" colspan="3">
            <h3 class="text-center m-0 text-white">NEUROLOGICAL STATUS</h3>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p class="mb-1"><b>No Problem</b></p>
            <label for="" class="form-label fw-medium">Diagnosed disorder(s) of neurological system (type):</label>
            <textarea name="diagnosed_disorder_neurological_system" id="" cols="30" rows="2" class="form-control"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            <label class="form-check-label"><input type="checkbox" name="history_traumatic_brain_injury" class="form-check-input"> History of a traumatic brain injury</label>
        </td>
        <td>
            <label class="input-group clean-input-group">
                <span class="input-group-text fw-medium">Date of injury:</span>
                <input type="date" id="" name="date_injury" class="form-control">
            </label>
        </td>
        <td>
            <label class="input-group clean-input-group">
                <span class="input-group-text fw-medium">(Type):</span>
                <input type="text" id="" name="injury_type" class="form-control">
            </label>
        </td>
    </tr>
    <tr>
        <td>
            <label class="form-check-label"><input type="checkbox" name="history_of_headache" class="form-check-input"> History of headaches</label>
        </td>
        <td>
            <label class="input-group clean-input-group">
                <span class="input-group-text fw-medium">Date of last headache:</span>
                <input type="date" id="" name="date_last_headache" class="form-control">
            </label>
        </td>
        <td>
            <label class="input-group clean-input-group">
                <span class="input-group-text fw-medium">(Type):</span>
                <input type="text" id="" name="headache_type" class="form-control">
            </label>
        </td>
    </tr>
    <tr>
        <td>
            <label class="form-check-label"><input type="checkbox" name="history_of_seizures" class="form-check-input"> History of seizures</label>
        </td>
        <td>
            <label class="input-group clean-input-group">
                <span class="input-group-text fw-medium">Date of last seizure:</span>
                <input type="date" id="" name="date_last_seizure" class="form-control">
            </label>
        </td>
        <td>
            <label class="input-group clean-input-group">
                <span class="input-group-text fw-medium">(Type):</span>
                <input type="text" id="" name="type_of_seizure" class="form-control">
            </label>
        </td>
    </tr>
    <tr>
        <td colspan="3" class="labels-group">
            <span class="fw-medium me-2">Tremors:</span>
            <label class="form-check-label"><input type="checkbox" name="tremors[]" value="0" class="form-check-input"> At Rest</label>
            <label class="form-check-label"><input type="checkbox" name="tremors[]" value="1" class="form-check-input"> At With voluntary movement</label>
            <label class="form-check-label"><input type="checkbox" name="tremors[]" value="2" class="form-check-input"> At Continuous</label>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <label class="input-group clean-input-group">
                <span class="input-group-text fw-medium">Spasms (for example; back, bladder, legs) Location:</span>
                <input type="text" id="" name="spasms_location" class="form-control">
            </label>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <div class="row row-flex gy-2">
                <div class="col-auto labels-group">
                    <span class="fw-medium me-2">Dominant side:</span>
                    <label class="form-check-label"><input type="radio" name="dominant_side" value="0" class="form-check-input"> Right</label>
                    <label class="form-check-label"><input type="radio" name="dominant_side" value="1" class="form-check-input"> Left</label>
                </div>
                <div class="col-auto labels-group">
                    <span class="fw-medium me-2">Hemiplegia:</span>
                    <label class="form-check-label"><input type="radio" name="Hemiplegia" value="0" class="form-check-input"> Right</label>
                    <label class="form-check-label"><input type="radio" name="Hemiplegia" value="1" class="form-check-input"> Left</label>
                </div>
                <div class="col-auto">
                    <label class="form-check-label"><input type="checkbox" name="paraplegia" class="form-check-input"> Paraplegia</label>
                </div>
                <div class="col-auto">
                    <label class="form-check-label"><input type="checkbox" name="quadriplegia_tetraplegia" class="form-check-input"> Quadriplegia/Tetraplegia</label>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3" class="labels-group">
            <span class="fw-medium me-2">Does the patient's condition affect functional ability and/or safety?</span>
            <label class="form-check-label"><input type="radio" name="pcafa" value="0" class="form-check-input"> No</label>
            <label class="form-check-label"><input type="radio" name="pcafa" value="1" class="form-check-input"> Yes</label>
            <label class="input-group clean-input-group d-inline-flex w-auto">
                <span class="input-group-text fw-medium">If yes, explain:</span>
                <input type="text" id="" name="pcafa_explain" class="form-control">
            </label>
        </td>
    </tr>
</table>