<form action="{{ route('vitals.update', $vital->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="medication-content" style="border: 1px solid gray; padding:3%">
        <h1>Update Vital</h1>
        <input type="hidden" name="patient_id" value="{{ $vital->patient_id }}">
        <div class="row">
            <div class="col-md-6">
                <label for="pulse" class="py-1">Pulse <span
                        class="text-red">*</span></label>
                <input name="pulse" id="pulse" value="{{ $vital->pulse }}"
                    type="text" placeholder="Pulse"
                    class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="temperature"
                    class="py-1">Temperature <span
                        class="text-red">*</span></label>
                <input name="temperature" id="temperature" value="{{ $vital->temperature }}"
                    type="text" placeholder="Temperature"
                    class="form-control s ou  p-3" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="waight" class="py-1">Waight<span
                        class="text-red">*</span></label>
                <input name="waight" id="waight" value="{{ $vital->waight }}"
                    type="text" placeholder="Waight"
                    class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="respiration"
                    class="py-1">Respiratory<span
                        class="text-red">*</span></label>
                <input name="respiration" id="respiration" value="{{ $vital->respiration }}"
                    type="text" placeholder="Respiratory"
                    class="form-control s ou  p-3" required>
            </div>


        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="bp" class="py-1">Blood
                    Pressure<span
                        class="text-red">*</span></label>
                <input name="bp" id="bp"
                    type="text" placeholder="Blood Pressure" value="{{ $vital->bp }}"
                    class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="bs" class="py-1">Blood Suger
                    <span class="text-red">*</span></label>
                <input name="bs" id="bs"
                    type="text" placeholder="Blood Suger" value="{{ $vital->bs }}"
                    class="form-control s ou  p-3" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="pain" class="py-1">Pain
                    <span class="text-red">*</span></label>
                <input name="pain" id="pain"
                    type="text" placeholder="Pain" value="{{ $vital->pain }}"
                    class="form-control s ou  p-3" required>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6"></div>
            <div class="col-md-2">
                <button type="submit" class="form-control btn btn-primary">Update</button>
            </div>

        </div>
    </div>
</form>
