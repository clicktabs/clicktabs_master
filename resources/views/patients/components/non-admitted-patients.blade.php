<table class="ux ou display nowrap" style="width:100%" id="nonPatientTable">
    <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
    <tr>
        <th class="dx">
            <div class="gh gt">MRN</div>
        </th>
        <th class="dx">
            <div class="gh gt">Patient</div>
        </th>
        <th class="dx">
            <div class="gh gt">Insurance</div>
        </th>
        <th class="dx">
            <div class="gh gt">Policy#</div>
        </th>
        <th class="dx">
            <div class="gh gt">Address</div>
        </th>
        <th class="dx">
            <div class="gh gt">Date of Birth</div>
        </th>
        <th class="dx">
            <div class="gh gt">Phone</div>
        </th>
        <th class="dx">
            <div class="gh gt">Gender</div>
        </th>
        <th class="dx">
            <div class="gh gt">Non Admit Reason</div>
        </th>
        <th class="dx">
            <div class="gh gt">Non Admit Date</div>
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
                    {{$patient->patient_code}}
                </td>
                <td class="dx">
                    <div>{{$patient->first_name .' '. $patient->last_name}}</div>
                </td>

                <td class="dx">
                    <div class="gn">{{$patient->insurance_type}}</div>
                </td>
                <td class="dx">
                    <div class="gn">Policy</div>
                </td>
                <td class="dx">
                    <div class="gn">{{$patient->address_line_1}}</div>
                </td>
                <td class="dx">
                    <div class="gn">{{$patient->date_of_birth}}</div>
                </td>
                <td class="dx">
                    <div class="gn">{{$patient->address->phone}}</div>
                </td>
                <td class="dx">
                    <div class="gn">{{$patient->gender}}</div>
                </td>
                <td class="dx">
                    @php
                        $reasons = json_decode($patient->reason->reasons, true);
                    @endphp
                    @foreach($reasons as $key => $reason)
                        <div class="gn">({{$key + 1}}) {{$reason}}</div>
                    @endforeach
                </td>
                <td class="dx">
                    <div class="gn">{{$patient->reason->non_admit_date}}</div>
                </td>
                <td class="dx">
                    <form name="patientAdmitForm" id="patientAdmitForm">
                        @csrf
                        <input type="text" class="hidden" id="patient_id" name="patient_id" value="{{$patient->id}}" />
                        <button class="btn ho xi ye admit" data-pid="{{$patient->id}}">Admit</button>
                        <button type="button" class="btn btn-danger !bg-[#bb2d3b] ho xi ye delete" data-id="{{$patient->id}}">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>
