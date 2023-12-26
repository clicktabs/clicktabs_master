<div class="px-[15px]" id="tabs-alrg">
    <div class="">
        <div class="list-title mt-4 d-flex flex-column flex-md-row justify-content-between">
            <button class="add_new_allergy btn btn-primary !bg-[#4133BF] text-[#fff]"> Add new </button>
        </div>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="bg-[#4133BF] text-[#fff] text-center">
                <tr>
                    <th></th>
                    <th></th>
                    <th style="font-weight: bold; text-align: left;">Active 
                        Allergy List
                        ({{$allergies->where('status', 0)->count()}})
                    </th>
                    <th></th>
                    <th></th>
                    <th colspan="3"></th>
                </tr>
                <tr>
                    <th>Allergy</th>
                    <th>Type</th>
                    <th>Severity</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($allergies->where('status', 0) as $row)
                    <tr>
                        <td>{{ @$row->allergy }}</td>
                        <td>{{ @$row->type }}</td>
                        <td>{{ @$row->severity }}</td>
                        <td>{{ @$row->start_date }}</td>
                        <td>{{ @$row->end_date }}</td>
                        <td>
                            <a href="{{ route('allergies.changeStatus', $row->id) }}"
                                class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                            </a>
                        </td>
                        <td>
                            <button type="button"
                                    class="btn btn-primary allergy-edit-btn"
                                    data-allergy-id="{{ $row->id }}">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!------/End---->
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="bg-[#4133BF] text-[#fff] text-center">
                <tr>
                    <th></th>
                    <th></th>
                    <th style="font-weight: bold; text-align: left;">Inactive Allergy
                        Allergy List
                        ({{$allergies->where('status', 1)->count()}})
                    </th>
                    <th></th>
                    <th></th>
                    <th colspan="3"></th>
                </tr>
                <tr>
                    <th>Allergy</th>
                    <th>Type</th>
                    <th>Severity</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($allergies->where('status', 1) as $row)
                    <tr>
                        <td>{{ @$row->allergy }}</td>
                        <td>{{ @$row->type }}</td>
                        <td>{{ @$row->severity }}</td>
                        <td>{{ @$row->start_date }}</td>
                        <td>{{ @$row->end_date }}</td>

                        <td>
                            <a href="{{ route('allergies.changeStatus', $row->id) }}"
                                class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                            </a>
                        </td>

                        <td>
                            <button type="button"
                                    class="btn btn-primary allergy-edit-btn"
                                    data-allergy-id="{{ $row->id }}">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!------/End---->
        <div class="modal fade !max-w-full" id="allergyModal" tabindex="-1" role="dialog" aria-labelledby="allergyModal" aria-hidden="true">
            <div class="container">
                <h4 class="text-center font-[700] text-[20px] !bg-[#4133BF] text-[#fff] p-2">Add Allergy</h4>
                <form action="{{ route('allergies.store') }}" method="POST">
                    @csrf
                    <div class="medication-content"
                            style="border: 1px solid gray; padding:3%">
                        <input type="hidden" name="patient_id"
                                value="{{ $patient->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="allergy" class="py-1">Allergy <span
                                        class="text-red">*</span></label>
                                <input name="allergy" id="allergy"
                                        type="text" placeholder="Allergy"
                                        class="form-control s ou  p-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="allergy" class="py-1">Reaction
                                    <span class="text-red">*</span></label>
                                <input name="reaction" id="reaction"
                                        type="text" placeholder="Reaction"
                                        class="form-control s ou  p-3" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="type" class="py-1">Type<span
                                        class="text-red">*</span></label>
                                <input name="type" id="type"
                                        type="text" placeholder="Type"
                                        class="form-control s ou  p-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="start_date" class="py-1">Start Date
                                    <span class="text-red">*</span></label>
                                <input name="start_date" id="start_date"
                                        type="date" placeholder="Start Date"
                                        class="form-control s ou  p-3" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="severity" class="py-1">Severity<span
                                        class="text-red">*</span></label>
                                <input name="severity" id="severity"
                                        type="text" placeholder="Severity"
                                        class="form-control s ou  p-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="start_date" class="py-1">End Date
                                    <span class="text-red">*</span></label>
                                <input name="end_date" id="end_date"
                                        type="date" placeholder="End Date"
                                        class="form-control s ou  p-3" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="information_source"
                                        class="py-1">Information
                                    Source<span
                                        class="text-red">*</span></label>
                                <input name="information_source"
                                        id="information_source" type="text"
                                        placeholder="information_source"
                                        class="form-control s ou  p-3" required>
                            </div>
                            <div class="col-md-6">
                                <label for="comments" class="py-1">Comments
                                    <span class="text-red">*</span></label>
                                <textarea class="form-control s ou  p-3"
                                            name="comments" id="comments"
                                            cols="5" rows="4"></textarea>

                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-lg !bg-[#4133BF] text-[#fff]">Save & EXit</button>
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
        <div class="modal fade !max-w-full" id="editquickViewModal"
                tabindex="-1" role="dialog" aria-labelledby="allergyModal"
                aria-hidden="true">

            <div class="container edit-modal-content">

            </div>
        </div>
    </div>
</div>
