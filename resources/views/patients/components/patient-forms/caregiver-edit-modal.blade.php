
    <form action="{{ route('patientCaregivers.update', $caregiver->id) }}" method="POST">
        @csrf
        <input type="hidden" name="created_by" value="{{ auth()->id() }}">
        <div class="row">
            <div class="col-md-12">
                <label for="">Matching Code</label>
                <select name="matching_code" required>
                    <option value="">Select matching code</option>
                    @foreach($matching_codes as $matching_code)
                        <option value="{{ $matching_code->name }}" @if($matching_code->name == $caregiver->matching_code) selected @endif>{{ $matching_code->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="">Compatibility</label>
                <select name="compatibility" required>
                    <option value="">Select Compatibility</option>
                    @foreach($compatibilitys as $compatibility)
                        <option value="{{ $compatibility->name }}" @if($compatibility->name == $caregiver->compatibility) selected @endif>{{ $compatibility->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="">Last Visit Date</label>
                <input type="date" required class="form-control" name="visit_date" value="{{$caregiver->visit_date}}" />
            </div>
            <div class="col-md-12">
                <label for="">Hours Together</label>
                <input type="number" required class="form-control" name="hours_together" value="{{$caregiver->hours_together}}"/>
            </div>
            <div class="col-md-12">
                <label for="note">Notes</label>
                <textarea class="form-control" required id="note" name="note" cols="4">{{$caregiver->note}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-end">Save</button>
    </form>
