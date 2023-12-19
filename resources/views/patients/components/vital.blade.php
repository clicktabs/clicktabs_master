<div class="">
    <div
        class="list-title mt-4 d-flex flex-column flex-md-row justify-content-between">
        {{-- <h4>Vitals</h4> --}}
        <button
            class="add_new_vital btn btn-primary !bg-[#4133BF] text-[#fff]">
            Add
            new
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
                    Vitals({{$vitals->where('status', 1)->count()}})
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th>Pulse</th>
                <th>Temperature</th>
                <th>Blood Pressure</th>
                <th>Respiratory</th>
                <th>Waight</th>
                <th>Blood Suger</th>
                <th>Pain</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($vitals->where('status', 1) as $vital)
                <tr>
                    <td>{{ $vital->pulse }}</td>
                    <td>{{ $vital->temperature }}C</td>
                    <td>{{ $vital->bp }}</td>
                    <td>{{ $vital->respiration }}</td>
                    <td>{{ $vital->waight }}</td>
                    <td>{{ $vital->bs }}%</td>
                    <td>{{ $vital->pain }}</td>
                    <td>
                        <a href="{{ route('vitals.changeStatus', $vital->id) }}"
                           class="btn btn-{{ $vital->status == 0 ? 'success' : 'danger' }}">
                            {{ $vital->status == 0 ? 'Active' : 'Inactive' }}
                        </a>
                    </td>
                    <td>
                        <button type="button"
                                class="btn btn-primary vital-edit-btn"
                                data-vital-id="{{ $vital->id }}">
                            Edit
                        </button>
                    </td>
                    <td>
                        <form
                            action="{{ route('vitals.destroy', $vital->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-danger">Delete
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table mt-4">
            <thead class="bg-[#4133BF] text-[#fff] text-center">
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th style="font-weight: bold; text-align: left;">Inactive
                    Vitals ({{$vitals->where('status', 0)->count()}})
                </th>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th>Pulse</th>
                <th>Temperature</th>
                <th>Blood Pressure</th>
                <th>Respiratory</th>
                <th>Waight</th>
                <th>Blood Suger</th>
                <th>Pain</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($vitals->where('status', 0) as $vital)
                <tr>
                    <td>{{ $vital->pulse }}</td>
                    <td>{{ $vital->temperature }}C</td>
                    <td>{{ $vital->bp }}</td>
                    <td>{{ $vital->respiration }}</td>
                    <td>{{ $vital->waight }}</td>
                    <td>{{ $vital->bs }}%</td>
                    <td>{{ $vital->pain }}</td>
                    <td>
                        <a href="{{ route('vitals.changeStatus', $vital->id) }}"
                           class="btn btn-{{ $vital->status == 0 ? 'success' : 'danger' }}">
                            {{ $vital->status == 0 ? 'Active' : 'Inactive' }}
                        </a>
                    </td>
                    <td>
                        <button type="button"
                                class="btn btn-primary vital-edit-btn"
                                data-vital-id="{{ $vital->id }}">
                            Edit
                        </button>
                    </td>
                    <td>
                        <form
                            action="{{ route('vitals.destroy', $vital->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn btn-danger">Delete
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade !max-w-full" id="vitalModal" tabindex="-1"
         role="dialog" aria-labelledby="vitalModal" aria-hidden="true">

        <div class="container">
            <h4 class="text-center font-[700] text-[20px] !bg-[#4133BF] text-[#fff] p-2">Add Vital</h4>
            <form action="{{ route('vitals.store') }}" method="POST">
                @csrf
                <div class="medication-content"
                     style="border: 1px solid gray; padding:3%">
                       <input type="hidden" name="patient_id"
                           value="{{ $patient->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pulse" class="py-1">Pulse <span
                                    class="text-red">*</span></label>
                            <input name="pulse" id="pulse"
                                   type="text" placeholder="Pulse"
                                   class="form-control s ou  p-3" required>
                        </div>
                        <div class="col-md-6">
                            <label for="temperature"
                                   class="py-1">Temperature <span
                                    class="text-red">*</span></label>
                            <input name="temperature" id="temperature"
                                   type="text" placeholder="Temperature"
                                   class="form-control s ou  p-3" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="waight" class="py-1">Waight<span
                                    class="text-red">*</span></label>
                            <input name="waight" id="waight"
                                   type="text" placeholder="Waight"
                                   class="form-control s ou  p-3" required>
                        </div>
                        <div class="col-md-6">
                            <label for="respiration"
                                   class="py-1">Respiratory<span
                                    class="text-red">*</span></label>
                            <input name="respiration" id="respiration"
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
                                   type="text" placeholder="Blood Pressure"
                                   class="form-control s ou  p-3" required>
                        </div>
                        <div class="col-md-6">
                            <label for="bs" class="py-1">Blood Suger
                                <span class="text-red">*</span></label>
                            <input name="bs" id="bs"
                                   type="text" placeholder="Blood Suger"
                                   class="form-control s ou  p-3" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pain" class="py-1">Pain
                                <span class="text-red">*</span></label>
                            <input name="pain" id="pain"
                                   type="text" placeholder="Pain"
                                   class="form-control s ou  p-3" required>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button type="submit"
                                    class="form-control btn btn-primary">
                                Save
                                &
                                Exit
                            </button>
                        </div>
                        {{-- <div class="col-md-6">
                        <button type="button" class="form-control">Save &
                            Add Allergy
                        </button>
                    </div> --}}

                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade !max-w-full" id="editquickViewvitalModal"
         tabindex="-1" role="dialog" aria-labelledby="vitalModal"
         aria-hidden="true">

        <div class="container edit-modal-content2">

        </div>
    </div>
</div>
