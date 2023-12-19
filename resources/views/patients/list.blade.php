@extends('layouts.app')
@section('extra_css')
@endsection
@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <div class="row mb-4">
                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <div class="dk">
                        <div class="row mb-[30px]">
                            <div class="col-md-4">
                                <div class="flex gap-[15px]">
                                    <label for="branch">Branch</label>
                                    <select name="branch" class="form-control">
                                        <option>Branch 1</option>
                                        <option>Branch 2</option>
                                        <option>Branch 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="flex gap-[15px]">
                                    <label for="branch">Status</label>
                                    <select name="status" class="form-control">
                                        <option>Pending</option>
                                        <option>Approved</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="y flex flex-wrap shrink-0 gap-[15px] justify-end">
                                    <a href="{{route('patients.create')}}" class="btn btn-primary bg-[#6366f1]"
                                       type="button">New Patient</a>
                                    <button class="btn btn-primary bg-[#6366f1]" type="button">Generate</button>
                                    <button class="btn btn-primary bg-[#6366f1]" type="button">Export Excel</button>
                                </div>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="lf">
                            <table class="ux ou display nowrap" id="orderTable">
                                <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                                <tr>
                                    <th>MRN</th>
                                    <th class="dx">
                                        <div class="gh gt">Last Name</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">First Name</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Insurance</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Policy#</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Address Line 1</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Address Line 2</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">City</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">State</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Zip Code</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">County</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Date of Birth</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Gender</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Phone</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Status</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Action</div>
                                    </th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class=" text-center text-sm gp le ln">
                                @if($patients)
                                    @foreach($patients as $patient)
                                        <tr>
                                            <td>{{$patient->patient_code}}</td>
                                            <td class="dx">
                                                {{$patient->first_name}}
                                            </td>
                                            <td class="dx">
                                                <div>{{$patient->last_name}}</div>
                                            </td>

                                            <td class="dx">
                                                <div class="gn">{{$patient->insurance_type}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">Dbhcfa2133</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->address->address_line_1}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->address->address_line_2}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->address->city}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->address->state}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->address->zip}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->address->country}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->date_of_birth}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn capitalize">{{$patient->gender}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn">{{$patient->address->phone}}</div>
                                            </td>
                                            <td class="dx">
                                                <div class="gn capitalize">{{$patient->status}}</div>
                                            </td>

                                            <td class="dx flex gap-[10px]">
                                                <a href="#" class="btn ho xi ye edit" data-id="{{$patient->id}}">Edit</a>
                                                <a href="#" class="btn ho xi ye">Print</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div id="orderModal" class="max-w-[450px] hidden !h-fit">
                                <form class="patientStatusUpdate">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="flex flex-wrap gap-[15px]">
                                                <label for="sent_date">Sent Date:</label>
                                                <input type="date" class="form-control" name="sent_date"
                                                       id="sent_date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="flex flex-wrap gap-[15px]">
                                                <label for="receive_date">Received Date:</label>
                                                <input type="date" class="form-control" name="receive_date"
                                                       id="receive_date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="flex flex-wrap gap-[15px]">
                                                <label for="physician_date">Physician Signature Date:</label>
                                                <input type="date" class="form-control" name="physician_date"
                                                       id="physician_date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-[15px]">
                                        <button class="btn btn-primary">Update</button>
                                        <button class="btn btn-primary">Exit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('extra_js')
    <script>
        $(document).ready(function () {
            $('#orderTable').DataTable({
                "scrollX": true,
                order: [1, 'asc'],
            });

            $('.edit').click(function () {
                $('#orderModal').modal({
                    fadeDuration: 100
                });
            });
        });
    </script>
@endsection
