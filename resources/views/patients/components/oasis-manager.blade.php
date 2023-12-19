<table class="client_table ux ou display nowrap" style="width:100% !important;" id="episodeManagerList">
    <thead class="bg-[#4133BF] text-[#fff]">
    <tr>
        <th>Patient Name</th>
        <th>Patient Code</th>
        <th>Gender</th>
        <th>Social Security Number</th>
        <th>Date of birth</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @if($patientHistorys)
        @foreach($patientHistorys as $patientHistory)
        <tr>
            <td>{{$patientHistory->patient->first_name . ' ' . $patientHistory->patient->last_name}}</td>
            <td>{{$patientHistory->patient->patient_code}}</td>
            <td>{{$patientHistory->patient->gender}}</td>
            <td>{{$patientHistory->patient->social_security_no}}</td>
            <td>{{$patientHistory->patient->date_of_birth}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('skilled-agency.get-oasis-e-start-of-care', ['id'=>$patientHistory->patient_id,'tab'=>'phistory'])}}">Edit</a>
                <a class="btn btn-success" href="{{route('generate.pdf', $patientHistory->patient_id)}}" target="_blank">Generate</a>
            </td>

        </tr>
        @endforeach
        @else
            <p>No data available in table</p>
        @endif
    </tbody>
</table>
