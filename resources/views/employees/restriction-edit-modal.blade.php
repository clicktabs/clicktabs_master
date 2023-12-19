    <form action="{{ route('restrictions.update', $restriction->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="created_by" value="{{ auth()->id() }}">
        <div class="row">
            <div class="col-md-12">
                <label for="">Restriction</label>
                <select name="restriction_code" required>
                    <option value="">Select restriction</option>
                    @foreach($restriction_codes as $restriction_code)
                    <option value="{{ $restriction_code->name }}" @if($restriction->restriction_code == $restriction_code->name) selected @endif>{{ $restriction_code->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="note">Notes</label>
                <textarea class="form-control" required id="note" name="note" cols="4">{{$restriction->note}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-end">Save</button>
    </form>
