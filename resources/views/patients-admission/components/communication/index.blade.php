@php
$employees = \App\Models\Employee::latest()->get();
@endphp
<div class="table-responsive">
    <table class="ux ou !w-full" id="communicationNotes">
        <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff] !w-full">
            <tr>
                <th>Employee Name</th>
                <th>PDF Message</th>
                <th>Phone</th>
                <th>Date</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($communications as $row)
            <tr>
                <td>{{ $row->employee->first_name.' '.$row->employee->last_name }}</td>
                <td>{{ $row->subject }}</td>
                <td>{{ $row->date }}</td>
                <td><button type="button" class="btn btn-primary">Print</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{--<div class="modal fade mw-100" id="communicationModal" tabindex="-1" role="dialog" aria-labelledby="communicationModal" aria-hidden="true" style="max-width: auto !important;">--}}
{{--    <div class="container">--}}
{{--        <form action="{{ route('communications.store') }}" method="post">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="patient_id" value="{{ $patient->id }}">--}}
{{--            <div class="medication-content">--}}
{{--                <h4 class="mb-3 pt-3">Patient Communication</h4>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="d-flex">--}}
{{--                            <label for="physician" class="py-1">Employee</label>--}}
{{--                            <select id="physician" name="employee_id" required class="form-control">--}}
{{--                                <option value="">Select One</option>--}}
{{--                                @foreach($employees as $row)--}}
{{--                                <option value="{{ $row->id }}">{{ $row->first_name.' '.$row->last_name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="d-flex">--}}
{{--                            <label for="subject" class="py-1">Subject</label>--}}
{{--                            <input id="subject" type="text" name="subject" required class="form-control">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="d-flex">--}}
{{--                            <label for="date" class="py-1">Date</label>--}}
{{--                            <input id="date" type="date" name="date" required class="form-control">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="d-flex">--}}
{{--                            <label for="status" class="py-1">status</label>--}}
{{--                            <select id="status" name="status" required class="form-control">--}}
{{--                                <option value="1">Active</option>--}}
{{--                                <option value="0">Inactive</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-5">--}}
{{--                    <div class="action_btn">--}}
{{--                        <button type="submit" class="form-control">Save & Exit</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
