<div class="">
    <div
        class="list-title mt-1 d-flex flex-column flex-md-row justify-content-between">
        <div class="">
            <button
                class="add_new_immunization btn btn-primary !bg-[#4133BF] text-[#fff]">
                Add
                Immunization
            </button>
            {{-- <button
                class="btn btn-primary !bg-[#4133BF] text-[#fff]">
                Decline/Contraindicate
                Immunization
            </button> --}}
        </div>
        <button class=" btn btn-primary !bg-[#4133BF] text-[#fff]">Export to
            Excel
        </button>

    </div>
    <div class="table-responsive">
        <table class="table mt-4">
            <thead class="bg-[#4133BF] text-[#fff] text-center">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th style="font-weight: bold; text-align: left;">Active
                    Immunizations
                    ({{$immunizations->where('status', 1)->count()}})
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th>Immunization</th>
                <th>Type</th>
                <th>Date Administered</th>
                <th>Administered by</th>
                <th>Lot#</th>
                <th>Reason</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @if($immunizations)
                @foreach ($immunizations->where('status', 1) as $row)
                    <tr>
                        <td>{{ @$row->immunization }}</td>
                        <td>{{ @$row->type }}</td>
                        <td>{{ @$row->administered_on }}</td>
                        <td>{{ @$row->administered_by }}</td>
                        <td>{{ @$row->lot }}</td>
                        <td>{{ @$row->reason }}</td>
                        <td>
                            <a href="{{ route('immunizations.changeStatus', $row->id) }}"
                               class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                {{ $row->status == 0 ? 'Active' : 'Inactive' }}

                            </a>
                        </td>
                        <td>
                            <form
                                action="{{ route('immunizations.destroy', $row->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-danger">Delete
                                </button>
                            </form>
                        </td>
                        <td>
                            <button type="button"
                                    class="btn btn-primary immunization-edit-btn"
                                    data-immunization-id="{{ $row->id }}">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <div
        class="list-title mt-4 d-flex flex-column flex-md-row justify-content-between">
    </div>
    <div class="table-responsive">
        <table class="table mt-4">
            <thead class="bg-[#4133BF] text-[#fff] text-center">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th style="font-weight: bold; text-align: left;">Inactive
                    Immunizations
                    ({{$immunizations->where('status', 0)->count()}})
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th>Immunization</th>
                <th>Type</th>
                <th>Administeration Date</th>
                <th>Administered by</th>
                <th>Lot#</th>
                <th>Reason</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @if($immunizations)
                @foreach ($immunizations->where('status', 0) as $row)
                    <tr>
                        <td>{{ $row->immunization }}</td>
                        <td>{{ @$row->type }}</td>
                        <td>{{ $row->administered_on }}</td>
                        <td>{{ $row->administered_by }}</td>
                        <td>{{ $row->lot }}</td>
                        <td>{{ $row->reason }}</td>
                        <td>
                            <a href="{{ route('immunizations.changeStatus', $row->id) }}"
                               class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                {{ $row->status == 0 ? 'Active' : 'Inactive' }}

                            </a>
                        </td>
                        <td>
                            <form
                                action="{{ route('immunizations.destroy', $row->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-danger">Delete
                                </button>
                            </form>
                        </td>
                        <td>
                            <button type="button"
                                    class="btn btn-primary immunization-edit-btn"
                                    data-immunization-id="{{ $row->id }}">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    <div class="modal fade mw-100" id="immunizationModal" tabindex="-1"
         role="dialog" aria-labelledby="immunizationModal"
         aria-hidden="true">
        <h4 class="text-center font-[700] text-[20px] !bg-[#4133BF] text-[#fff] p-2">Immunization Log Information</h4>
        <div class="container" style="margin-top: -4em;">
            <form action="{{ route('immunizations.store') }}" method="POST">
                @csrf
                <input type="hidden" name="patient_id"
                       value="{{ $patient->id }}">
                <div class="medication-content">
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <label for="immunization"
                                   class="py-1">Immunization
                                <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input name="immunization" id="immunization"
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
                                <select  name="type" id="type" class="form-select" aria-label="Default select example">
                                    <option selected>Select Type</option>
                                    <option value="Pneumonia">Pneumonia</option>
                                    <option value="Tetanus">Tetanus</option>
                                    <option value="Shingles">Shingles</option>
                                    <option value="Hepatitis C">Hepatitis C</option>
                                    <option value="Other">Other</option>
                              </select>
                        </div>
                    </div>

                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <label for="administered"
                                   class="py-1">Administeration
                                Date <span class="text-red">*</span></label>
                        </div>
                        <div class="col-md-6">
                            <input name="administered_on" id="administered"
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
                            <input name="administered_by"
                                   id="administered_by"
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
                                   type="text" placeholder="Lot"
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
                                   type="text" placeholder="Reason"
                                   class="form-control s ou  p-3" required>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="form-control py-3 !bg-[#4133BF] text-[#fff] btn-primary btn btn-sm">
                                Save
                                & Close
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="form-control py-3 !bg-[#4133BF] text-[#fff] btn-primary btn btn-sm">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade !max-w-full" id="editquickViewimmunModal"
         tabindex="-1" role="dialog" aria-labelledby="immunModal"
         aria-hidden="true">

        <div class="container edit-modal-content3">

        </div>
    </div>

</div>
