<form action="{{ route('immunizations.update', $immunization->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="medication-content" style="border: 1px solid gray; padding:3%">
        <h1>Update immunization</h1>
        <input type="hidden" name="patient_id" value="{{ $immunization->patient_id }}">
        <div class="medication-content">
            <div class="row mx-auto">
                <div class="col-md-6">
                    <label for="immunization" class="py-1">Immunization
                        <span class="text-red">*</span></label>
                </div>
                <div class="col-md-6">
                    <input name="immunization" id="immunization" value="{{ $immunization->immunization }}"
                        type="text" placeholder="Immunization"
                        class="form-control s ou  p-3" required>
                </div>
            </div>

            <div class="row mx-auto">
                <div class="col-md-6">
                    <label for="type" class="py-1">Type
                        <span class="text-red">*</span></label>
                </div>
                <div class="col-md-6">
                        <div class="col-md-6">
                            <select  name="type" id="type"  value="{{ $immunization->type }} class="form-select" aria-label="Default select example">
                                <option value="Pneumonia">Pneumonia</option>
                                <option value="Tetanus">Tetanus</option>
                                <option value="Shingles">Shingles</option>
                                <option value="Hepatitis C">Hepatitis C</option>
                                <option value="Other">Other</option>
                          </select>
                    </div>
                </div>
            </div>

            <div class="row mx-auto">
                <div class="col-md-6">
                    <label for="administered"
                        class="py-1">Administeration
                        Date <span class="text-red">*</span></label>
                </div>
                <div class="col-md-6">
                    <input name="administered_on" id="administered" value="{{ $immunization->administered_on }}"
                        type="date" placeholder="Administered"
                        class="form-control s ou  p-3" required>
                </div>
            </div>

            <div class="row mx-auto">
                <div class="col-md-6">
                    <label for="administered_by "
                        class="py-1">Administered
                        By<span class="text-red">*</span></label>
                </div>
                <div class="col-md-6">
                    <input name="administered_by" id="administered_by" value="{{ $immunization->administered_by }}"
                        type="text" placeholder="Administered By"
                        class="form-control s ou  p-3" required>
                </div>
            </div>

            <div class="row mx-auto">
                <div class="col-md-6">
                    <label for="lot" class="py-1">Lot
                        <span class="text-red">*</span></label>
                </div>
                <div class="col-md-6">
                    <input name="lot" id="lot"
                        type="text" placeholder="Lot" value="{{ $immunization->lot }}"
                        class="form-control s ou  p-3" required>
                </div>
            </div>

            <div class="row mx-auto">
                <div class="col-md-6">
                    <label for="reason" class="py-1">Reason
                        <span class="text-red">*</span></label>
                </div>
                <div class="col-md-6">
                    <input name="reason" id="reason"
                        type="text" placeholder="Reason" value="{{ $immunization->reason }}"
                        class="form-control s ou  p-3" required>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-md-6">
                    <label for="status" class="py-1">Status
                        <span class="text-red">*</span></label>
                </div>
                <div class="col-md-6">
                    <select name="status" class="form-control s ou  p-3">
                        <option value="1" {{ $immunization->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $immunization->status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <button type="submit" class="form-control py-3">
                        Update
                    </button>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="form-control py-3">
                        Cancel
                    </button>
                </div>
            </div>
        </div>

    </div>
</form>
