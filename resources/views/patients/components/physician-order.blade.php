<div class="vs jj ttm vl ou uf na">
    <div class="row mb-4">
        <!-- Table (Top Channels) -->
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk">
                <!-- Table -->
                <div class="col-md-12">
                    <table class="ux ou" id="oasis-export">
                        <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
                        <tr>
                            <th class="dx">
                                <div class="gh gt">Patient Name</div>
                            </th>

                            <th class="dx">
                                <div class="gh gt">Physician</div>
                            </th>
                            <th class="dx">
                                <div class="gh gt">Physician Phone</div>
                            </th>
                            <th class="dx">
                                <div class="gh gt">Physician Speciality</div>
                            </th>
                            <th class="dx">
                                <div class="gh gt">Physician Current Date</div>
                            </th>

                            <th class="dx">
                                <div class="gh gt">Action</div>
                            </th>
                        </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody class=" text-sm gp le ln">
                        @forelse ($physicianOrders as $physicianOrder)
                            <tr>
                                <td class="">
                                    <div>{{$physicianOrder->patientName}}</div>
                                </td>
                                <td class="">
                                    <div class="gn">{{$physicianOrder->physicianName}}</div>
                                </td>
                                <td class="">
                                    <div class="gn">{{$physicianOrder->physicianPrimaryPhone}}</div>
                                </td>
                                <td class="">
                                    <div class="gn">{{$physicianOrder->physicianSpeciality}}</div>
                                </td>
                                <td class="">
                                    <div class="gn">{{$physicianOrder->physicianCurrentDate}}</div>
                                </td>

                                <td class=" flex flex-wrap gap-[10px]">
                                    <a href="{{route('generate.phusicianPDF', $physicianOrder->patient_history_id)}}" class="btn ho xi ye" target="_blank">Print</a>
                                </td>
                            </tr>
                        @empty

                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
