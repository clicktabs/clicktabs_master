<table class="ux ou display nowrap !pt-0" style="width:100%" id="patientTable">
    <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
    <tr>
        <th class="dx">
            <div class="gh gt">Patient</div>
        </th>
        <th class="dx">
            <div class="gh gt">MRN</div>
        </th>
        <th class="dx">
            <div class="gh gt">Primary Insurance</div>
        </th>
        <th class="dx">
            <div class="gh gt">Date of Birth</div>
        </th>
        <th class="dx">
            <div class="gh gt">Telephone</div>
        </th>
        <th class="dx">
            <div class="gh gt">Referral date</div>
        </th>
        <th class="dx">
            Action
        </th>
    </tr>
    </thead>
    <!-- Table body -->
    <tbody class=" text-center text-sm gp le ln">
    @if($patients)
        @foreach($patients as $patient)
            <tr>
                <td class="dx">
                    <div class="flex items-center">
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">
                            {{$patient->first_name . $patient->last_name}}
                        </div>
                    </div>
                </td>
                <td class="dx">
                    {{$patient->patient_code}}
                </td>

                <td class="dx">
                    <div class="gn">{{$patient->insurance_type}}</div>
                </td>
                <td class="dx">
                    @php
                        $date=date_create($patient->date_of_birth);
                    @endphp
                    <div class="gn">{{date_format($date,"m-d-Y")}}</div>
                </td>
                <td class="dx">
                    <div class="gn">{{!empty($patient->address->phone)?$patient->address->phone:''}}</div>
                </td>
                <td class="dx">
                    <div class="gn">{{date('m-d-Y', strtotime($patient->created_at))}}</div>
                </td>
                <td class="dx flex items-center gap-[10px] shrink-0">
                    <a href="/patients/{{$patient->id}}/edit" class="btn ho xi ye">Edit</a>
                    <form name="patientAdmitForm" id="patientAdmitForm">
                        @csrf
                        <input type="text" class="hidden" id="patient_id" name="patient_id" value="{{$patient->id}}" />
                        <button class="btn ho xi ye admit" data-pid="{{$patient->id}}">Admit</button>
                    </form>
                    <button type="button" class="btn btn-danger !bg-[#bb2d3b] ho xi ye non_admit" data-id="{{$patient->id}}">Non-Admit</button>
                    <button type="button" class="btn btn-danger !bg-[#bb2d3b] ho xi ye delete" data-id="{{$patient->id}}">Delete</button>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
