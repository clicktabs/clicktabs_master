<div class="">
    <div class="container-full">
        <div
            class="list-title mt-4 d-flex flex-column flex-md-row justify-content-between">
            {{-- <h4>Authorization List</h4> --}}
            <button
                class="add_new_authorization btn btn-success !bg-[#4133BF] text-[#fff]">
                Add
                Authorization
            </button>
        </div>
        <div class="table-responsive">
            <table class="table mt-4">
                <thead class="bg-[#4133BF] text-[#fff] text-center">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th style="font-weight: bold; text-align: left;">
                        Active Authorization List
                        ({{$authorizations->where('status', 0)->count()}})
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="3"></th>
                </tr>
                <tr>
                    <th>Authorization #</th>
                    <th>Payer</th>
                    <th>Start of Care</th>
                    <th>End of Care</th>
                    <th>Service Code</th>
                    <th>Author Units</th>
                    <th>Used</th>
                    <th>Unused</th>
                    <th colspan="3">Actions</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($authorizations->where('status', 1) as $row)
                    <tr>
                        <td>{{ @$row->authorization_number }}</td>
                        <td>{{ @$row->payer }}</td>
                        <td>{{ @$row->startofcare }}</td>
                        <td>{{ @$row->eoc_date }}</td>
                        <td>{{ @$row->service_code }}</td>
                        <td>{{ @$row->authorized_units }}</td>
                        <td>{{ @$row->used }}</td>
                        <td>{{ @$row->unused }}</td>
                        <td>
                            <a href="{{ route('authorizations.changeStatus', $row->id) }}"
                                class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                            </a>
                        </td>
                        <td>
                            <button type="button"
                                    class="btn btn-primary authorization-edit-btn"
                                    data-authorization-id="{{ $row->id }}">
                                Edit
                            </button>
                        </td>
                        <td>
                            <form
                                action="{{ route('authorizations.destroy', $row->id) }}"
                                id="authorization-delete-form"
                                method="post">
                                @method('DELETE')
                                @csrf
                            </form>
                            <button type="button"
                                    onclick="event.preventDefault; document.getElementById('authorization-delete-form').submit()"
                                    class="btn btn-danger">
                                Delate
                            </button>
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
                        <th></th>
                        <th style="font-weight: bold; text-align: left;">
                            Inactive Authorization List
                            ({{$authorizations->where('status', 0)->count()}})
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th colspan="3"></th>
                    </tr>
                    <tr>
                        <th>Authorization #</th>
                        <th>Payer</th>
                        <th>Start of Care</th>
                        <th>End of Care</th>
                        <th>Service Code</th>
                        <th>Author Units</th>
                        <th>Used</th>
                        <th>Unused</th>
                        <th colspan="3">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($authorizations->where('status', 0) as $row)
                        <tr>
                            <td>{{ @$row->authorization_number }}</td>
                            <td>{{ @$row->payer }}</td>
                            <td>{{ @$row->startofcare }}</td>
                            <td>{{ @$row->eoc_date }}</td>
                            <td>{{ @$row->service_code }}</td>
                            <td>{{ @$row->authorized_units }}</td>
                            <td>{{ @$row->used }}</td>
                            <td>{{ @$row->unused }}</td>
                            <td>
                                <a href="{{ route('authorizations.changeStatus', $row->id) }}"
                                class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                                    {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                                </a>
                            </td>
                            <td>
                                <button type="button"
                                        class="btn btn-primary authorization-edit-btn"
                                        data-authorization-id="{{ $row->id }}">
                                    Edit
                                </button>
                            </td>
                            <td>
                                <form
                                    action="{{ route('authorizations.destroy', $row->id) }}"
                                    id="authorization-delete-form"
                                    method="post">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <button type="button"
                                        onclick="event.preventDefault; document.getElementById('authorization-delete-form').submit()"
                                        class="btn btn-danger">
                                    Delate
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        <div class="modal fade !max-w-full" id="authorizationModal"
                tabindex="-1" role="dialog"
                aria-labelledby="authorizationModal" aria-hidden="true">
            <div class="container">
                <h4 class="text-center font-[700] text-[20px] !bg-[#4133BF] text-[#fff] p-2">Add Service Authorzation</h4>
                <form action="{{ route('authorizations.store') }}"
                        method="POST">
                    @csrf
                    <div class="medication-content"
                            style="border: 1px solid gray; padding:3%">
                        <input type="hidden" name="patient_id"
                                value="{{ $patient->id }}">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="authorization_number"
                                        class="py-1">Authorization_number<span
                                        class="text-red">*</span></label>
                                <input type="number" class="form-control"
                                        id="authorization_number"
                                        name="authorization_number">
                            </div>
                            <div class="col-md-4">

                                <label for="service_code">Insurance</label>
                                    <select class="form-select" name="service_code" id="service_code" aria-label="Default select example">
                                    <option selected>Select Insurance</option>
                                    <option value=""></option>
                                    </select>

                                </div>
                            <div class="col-md-4">
                                <label for="payer"
                                        class="py-1">Start of Care<span
                                        class="text-red">*</span></label>
                                <input type="date" class="form-control"
                                        id="startofcare" name="startofcare">
                            </div>

                        </div>
                            <div class="row">
                                {{-- <div class="col-md-6">
                                    <label for="severity"
                                        class="py-1">severity<span
                                            class="text-red">*</span></label>
                                    <input type="text" class="form-control"
                                        id="severity" name="severity">
                                </div> --}}
                            </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="eoc_date"
                                        class="py-1">End of Care Date<span
                                        class="text-red">*</span></label>
                                <input type="date" class="form-control"
                                        id="eoc_date" name="eoc_date">
                                    </div>
                                    <div class="col-md-4">

                                    <label for="">Service Code</label>
                                    <select class="form-select" name="service_code" id="service_code" aria-label="Default select example">
                                        <option selected>Select Service Code</option>
                                        <option value=""></option>
                                    </select>

                                    </div>
                                    <div class="col-md-4">
                                        <label for="authorized_units"
                                        class="py-1">Authorzation units<span
                                        class="text-red">*</span></label>
                                            <input type="text" class="form-control"
                                        id="authorized_units"
                                        name="authorized_units">
                                    </div>
                                </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <label for="used" class="py-1">used<span
                                            class="text-red">*</span></label>
                                    <input type="text" class="form-control"
                                        id="used" name="used">
                                </div>
                                <div class="col-md-6">
                                    <label for="unused"
                                        class="py-1">unused<span
                                            class="text-red">*</span></label>
                                    <input type="text" class="form-control"
                                        id="unused" name="unused">
                                </div>
                            </div> --}}

                            <div class="row mt-5">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    {{-- <button type="submit"
                                            class="form-control btn-sm btn-primary">
                                        Save
                                        &
                                        Exit
                                    </button> --}}

                                    <button type="submit" class="btn btn-primary btn-lg !bg-[#4133BF] text-[#fff]">Save & Exit</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal fade !max-w-full" id="authorizationEditModal"
                tabindex="-1" role="dialog"
                aria-labelledby="authorizationModal" aria-hidden="true">
                <div class="container">

                </div>
            </div>
    </div>
</div>
