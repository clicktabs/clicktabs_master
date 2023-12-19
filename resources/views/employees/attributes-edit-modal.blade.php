<form action="{{ route('attributes.update', $attributes->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="created_by" value="{{ auth()->id() }}">
    <div class="row">
        <div class="col-md-12">
            <label for="attribute">Attribute</label>
            <select name="attribute" required>
                <option value="">Select attribute code</option>
                @foreach($categories as $category)
                    <option value="{{ $category->name }}" @if($category->name == $attributes->attribute) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- <div class="col-md-12">
            <label for="score">Score</label>
            <textarea class="form-control" required id="score" name="score" cols="4"></textarea>
        </div> --}}
    </div>
    <button type="submit" class="btn btn-primary float-end">Save</button>
</form>
