<form action="{{ route('allergies.update', $allergy->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="medication-content" style="border: 1px solid gray; padding:3%">
        <h1>Update Allergy</h1>
        <input type="hidden" name="patient_id" value="{{ $allergy->patient_id }}">
        <div class="row">
            <div class="col-md-6">
                <label for="allergy" class="py-1">Allergy <span class="text-red">*</span></label>
                <input name="allergy" value="{{ $allergy->allergy }}" id="allergy" type="text"
                    placeholder="Allergy" class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="allergy" class="py-1">Reaction
                    <span class="text-red">*</span></label>
                <input name="reaction" value="{{ $allergy->reaction }}" id="reaction" type="text"
                    placeholder="Reaction" class="form-control s ou  p-3" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="type" class="py-1">Type<span class="text-red">*</span></label>
                <input name="type" value="{{ $allergy->type }}" id="type" type="text" placeholder="Type"
                    class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="start_date" class="py-1">Start Date
                    <span class="text-red">*</span></label>
                <input name="start_date" value="{{ $allergy->start_date }}" id="start_date" type="date"
                    placeholder="Start Date" class="form-control s ou  p-3" required>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="severity" class="py-1">Severity<span class="text-red">*</span></label>
                <input name="severity" value="{{ $allergy->severity }}" id="severity" type="text"
                    placeholder="Severity" class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="start_date" class="py-1">End Date
                    <span class="text-red">*</span></label>
                <input name="end_date" value="{{ $allergy->end_date }}" id="end_date" type="date"
                    placeholder="End Date" class="form-control s ou  p-3" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="information_source" class="py-1">Information
                    Source<span class="text-red">*</span></label>
                <input name="information_source" value="{{ $allergy->information_source }}" id="information_source"
                    type="text" placeholder="information_source" class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="comments" class="py-1">Commants
                    <span class="text-red">*</span></label>
                <textarea class="form-control s ou  p-3" name="comments" id="comments" cols="30" rows="10">{{ $allergy->comments }}</textarea>

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
