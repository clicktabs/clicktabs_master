
        {{-- <div class="vs jj ttm vl ou uf na">
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
                                        <div class="gh gt">Patient Code</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Start Of Care Date</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Certification Period From</div>
                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Certification Period To</div>
                                    </th>

                                    </th>
                                    <th class="dx">
                                        <div class="gh gt">Action</div>
                                    </th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class=" text-sm gp le ln">
                                @forelse ($cmss as $cms)
                                    <tr>
                                        <td class="">
                                            <div>{{$cms->patient->first_name . ' ' . $cms->patient->last_name}}</div>
                                        </td>
                                        <td class="">
                                            <div class="gn">{{$cms->patient->patient_code}}</div>
                                        </td>
                                        <td class="">
                                            <div class="gn">{{$cms->startOfCareDate}}</div>
                                        </td>
                                        <td class="">
                                            <div class="gn">{{$cms->certiPeriodFrom}}</div>
                                        </td>
                                        <td class="">
                                            <div class="gn">{{$cms->certiPeriodTo}}</div>
                                        </td>
                                        <td class=" flex flex-wrap gap-[10px]">
                                            <a href="{{route('generate.cmsPDF', $cms->patient_history_id)}}" class="btn ho xi ye" target="_blank">Print</a>
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
        </div> --}}
