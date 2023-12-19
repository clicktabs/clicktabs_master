<div id="matching">
    <div class="py-1"><button class="btn btn-primary add_new_caregiver" tabindex="0" aria-controls="attribute_table" type="button"><span>Add new</span></button> </div>
    <div class="patient_status_table mt-[15px]">
        <div class="patient_table">
            <table id="caregiver_table">
                <thead class="bg-[#4133BF] text-[#fff]">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Caregiver</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Matching Code</th>
                        <th>Compatility</th>
                        <th>Last Visit Date</th>
                        <th>Hours Together</th>
                        <th>Note</th>
                        <th>Modified On</th>
                        <th>Modified By</th>
                        <th>Created On</th>
                        <th>Created By</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($caregivers as $row)
                    <tr>
                        <td>{{ $row->matching_code }}</td>
                        <td>
                            {{ @$row->compatibility }}
                        </td>
                        <td>{{ $row->visit_date }}</td>
                        <td>{{ $row->hours_together }}</td>
                        <td>
                            {{ @$row->note }}
                        </td>
                        <td>
                            {{ $row->updated_at }}
                        </td>
                        <td>
                            {{ $row->modified_by ? $row->modified->first_name.' '.$row->modified->last_name : '' }}
                        </td>
                        <td>
                            {{ $row->created_at }}
                        </td>
                        <td>
                            {{ $row->user->first_name.' '.$row->user->last_name }}
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                        <button type="button"
                                            class="btn btn-primary caregiver-edit-btn"
                                            data-caregiver-id="{{ $row->id }}">Edit
                                        </button>
                                </div>
                                <div class="col-md-6">
                                    <form
                                        action="{{ route('caregivers.destroy', $row->id) }}"
                                        id="caregiver-delete-form"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                    <button type="button"
                                        onclick="event.preventDefault; document.getElementById('caregiver-delete-form').submit()"
                                        class="btn btn-danger">
                                        Delate
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div id="caregiverModal" style="height: auto;display: none;opacity: 1;">
        <form action="{{ route('caregivers.store') }}" method="POST">
            @csrf
            <input type="hidden" name="employee_id" value="{{ $employee->id }}">
            <input type="hidden" name="created_by" value="{{ auth()->id() }}">
            <div class="row">
                {{-- <div class="col-md-12">
                    <label for="">Caregiver</label>
                    <select name="caregiver" required>
                        <option value="">Select caregiver</option>
                        @foreach($employees as $empl)
                            <option value="{{ $empl->first_name }}">{{ $empl->first_name }} {{ $empl->last_name }}</option>
                        @endforeach
                    </select>
                </div> --}}
                    <div class="col-md-12">
                    <label for="">Matching Code</label>
                    <select name="matching_code" required>
                        <option value="">Select matching code</option>
                        @foreach($matching_codes as $matching_code)
                            <option value="{{ $matching_code->name }}">{{ $matching_code->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="">Compatibility</label>
                    <select name="compatibility" required>
                        <option value="">Select Compatibility</option>
                        @foreach($compatibilitys as $compatibility)
                            <option value="{{ $compatibility->name }}">{{ $compatibility->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="">Last Visit Date</label>
                    <input type="date" required class="form-control" name="visit_date" />
                </div>
                <div class="col-md-12">
                    <label for="">Hours Together</label>
                    <input type="number" required class="form-control" name="hours_together" />
                </div>
                <div class="col-md-12">
                    <label for="note">Notes</label>
                    <textarea class="form-control" required id="note" name="note" cols="4"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Save</button>
        </form>
    </div>

    <div class="modal fade !max-w-full" id="caregiverEditModal" tabindex="-1" role="dialog" aria-labelledby="caregiverModal" aria-hidden="true">
        <div class="container edit-modal-content2">

        </div>
    </div>

    <div class="py-1"><button class="btn btn-primary add_new_matching" tabindex="0" aria-controls="matching_table" type="button"><span>Add new</span></button> </div>
        <div class="patient_status_table mt-[15px]">
            <div class="patient_table">
                <table id="matching_table" >
                    <thead class="bg-[#4133BF] text-[#fff]">
                        <tr>
                            <th>Restriction</th>
                            <th>Notes</th>
                            <th>Modified On</th>
                            <th>Modified By</th>
                            <th>Created On</th>
                            <th>Created By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($restrictions as $row)
                        <tr>
                            <td>{{ $row->restriction_code }}</td>
                            <td>{{ $row->note }}</td>
                            <td>{{ $row->modified_on }}</td>
                            <td>{{ $row->modified_by ? $row->modified->first_name.' '.$row->modified->last_name : '' }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                {{ $row->user->first_name.' '.$row->user->last_name }}
                            </td>
                            <td>

                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button"
                                            class="btn btn-primary restriction-edit-btn"
                                            data-restriction-id="{{ $row->id }}">Edit
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <form
                                            action="{{ route('restrictions.destroy', $row->id) }}"
                                            id="restriction-delete-form"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="button"
                                            onclick="event.preventDefault; document.getElementById('restriction-delete-form').submit()"
                                            class="btn btn-danger">
                                            Delate
                                        </button>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div id="matchingModal" style="height: auto;">
            <form action="{{ route('restrictions.store') }}" method="POST">
                @csrf
                <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                <input type="hidden" name="created_by" value="{{ auth()->id() }}">
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Restriction</label>
                        <select name="restriction_code" required>
                            <option value="">Select restriction</option>
                            @foreach($restriction_codes as $restriction_code)
                            <option value="{{ $restriction_code->name }}">{{ $restriction_code->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="note">Notes</label>
                        <textarea class="form-control" required id="note" name="note" cols="4"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-end">Save</button>
            </form>
        </div>

        <div class="modal fade !max-w-full" id="restrictionEditModal"
            tabindex="-1" role="dialog"
            aria-labelledby="restrictionModal" aria-hidden="true">
            <div class="container edit-modal-content">

            </div>
        </div>

    <div class="py-1"><button class="btn btn-primary add_new_attribute" tabindex="0" aria-controls="attribute_table" type="button"><span>Add new</span></button> </div>
    <div class="patient_status_table mt-[15px]">
        <div class="patient_table">
            <table id="patientTable">
                <thead class="!border-none bg-[#4133BF] text-[#fff]">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Category</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Attribute</th>
                        <th>Score</th>
                        <th>Modified On</th>
                        <th>Modified By</th>
                        <th>Created On</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attributes as $row)
                    <tr>
                        <td>{{ $row->attribute }}</td>
                        <td>{{ $row->score }}</td>
                        <td>
                            {{ @$row->modified_on }}
                        </td>
                        <td>
                            {{ $row->modified_by ? $row->modified->first_name.' '.$row->modified->last_name : '' }}
                        </td>
                        <td>
                            {{ $row->created_at }}
                        </td>
                        <td>
                            {{ $row->user->first_name.' '.$row->user->last_name }}
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button"
                                            class="btn btn-primary attribute-edit-btn"
                                            data-attribute-id="{{ $row->id }}">Edit
                                        </button>
                                </div>
                                <div class="col-md-6">
                                    <form
                                        action="{{ route('attributes.destroy', $row->id) }}"
                                        id="attribute-delete-form"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                    <button type="button"
                                        onclick="event.preventDefault; document.getElementById('attribute-delete-form').submit()"
                                        class="btn btn-danger">
                                        Delate
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="attributeModal" class="modal" style="height: auto;display: none;opacity: 1;">
                <form action="{{ route('attributes.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                    <input type="hidden" name="created_by" value="{{ auth()->id() }}">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Attribute</label>
                            <select name="attribute" required>
                                <option value="">Select Attribute</option>
                                @foreach($allAttributes as $attribute)
                                <option value="{{ $attribute->name }}">{{ $attribute->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Save</button>
                </form>
            </div>

            <div class="modal fade !max-w-full" id="attributesEditModal" tabindex="-1" role="dialog" aria-labelledby="attributesModal" aria-hidden="true">
                <div class="container edit-modal-content3">

                </div>
            </div>

        </div>
    </div>
</div>


