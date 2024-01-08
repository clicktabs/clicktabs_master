<form method="POST" action="{{ route('subscription.store') }}">
    @csrf

    <div class="form-group">
        <label for="package_name">Package Name</label>
        <input type="text" id="package_name" name="package_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="type">Type</label>
        <select id="type" name="type" class="form-control" required>
            {{-- <option value="DOODD and home healthcare">DODD</option> --}}
            {{-- <option value="Home healthcare">Home Health Care</option> --}}
            <option value="Private Care">Home Care/Private Pay</option>
            {{-- <option value="Combo">Combo</option> --}}
        </select>
    </div>

    <div class="form-group">
        <label for="min_patient">Min Patients</label>
        <input type="number" id="min_patient" name="min_patient" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="max_patient">Max Patients</label>
        <input type="number" id="max_patient" name="max_patient" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" step="0.01" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <br>
    <div class="form-group mb-5">
        <button type="submit" class="btn btn-block hd xu ye float-right">Create</button>
    </div>
</form>
