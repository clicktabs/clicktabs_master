<form method="POST" action="{{ route('subscription.update', $subscriptionPlan->id) }}">
    @csrf
    @method('PUT') <!-- Use the PUT method for updates -->

    <div class="form-group">
        <label for="package_name">Package Name</label>
        <input type="text" id="package_name" name="package_name" class="form-control" value="{{ $subscriptionPlan->package_name }}" required>
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <select id="type" name="type" class="form-control" required>
            {{-- <option value="DOODD and home healthcare" {{ $subscriptionPlan->type === 'DOODD and home healthcare' ? 'selected' : '' }}>DODD</option> --}}
            {{-- <option value="Private Care" {{ $subscriptionPlan->type === 'Private Care' ? 'selected' : '' }}>Home Care/Private Pay</option> --}}
            <option value="Home healthcare" {{ $subscriptionPlan->type === 'Home healthcare' ? 'selected' : '' }}>Home Health Care</option>
            {{-- <option value="Combo" {{ $subscriptionPlan->type === 'Combo' ? 'selected' : '' }}>Combo</option> --}}
        </select>
    </div>

    <div class="form-group">
        <label for="min_patient">Min Patients</label>
        <input type="number" id="min_patient" name="min_patient" class="form-control" value="{{ $subscriptionPlan->min_patient }}" required>
    </div>

    <div class="form-group">
        <label for="max_patient">Max Patients</label>
        <input type="number" id="max_patient" name="max_patient" class="form-control" value="{{ $subscriptionPlan->max_patient }}" required>
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" step="0.01" class="form-control" value="{{ $subscriptionPlan->amount }}" required>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control" required>
            <option value="active" {{ $subscriptionPlan->status === 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $subscriptionPlan->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
    <br>
    <div class="form-group mb-5">
        <button type="submit" class="btn btn-block hd xu ye float-right">Update</button>
    </div>
</form>


