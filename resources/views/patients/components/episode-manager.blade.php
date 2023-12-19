<table class="client_table ux ou display nowrap" style="width:100% !important;" id="episodeManagerList">
    <thead class="bg-[#4133BF] text-[#fff]">
    <tr>
        <th>Patient Name</th>
        <th>Start Of Care Date</th>
        <th>Episode End Date</th>
        <th>Primary insurance</th>
        <th>Secondary insurance</th>
        <th>Primary physician</th>
    </tr>
    </thead>
    <tbody>
        @if($episode_manager)
        @foreach($episode_manager as $single_episode_manager)
        @php
            $physician_info = App\Models\Physician::select('first_name', 'last_name')->where('id', $single_episode_manager->primary_physician)->first();
            $patient_info = App\Models\Patient::select('first_name', 'last_name')->where('id', $single_episode_manager->patient_id)->first();
        @endphp
        <tr>
            <td>{{$patient_info->first_name . ' ' . $patient_info->last_name}}</td>
            <td>{{$single_episode_manager->start_of_care_date}}</td>
            <td>{{$single_episode_manager->episode_end_date}}</td>
            <td>{{$single_episode_manager->primary_insurance}}</td>
            <td>{{$single_episode_manager->secondary_insurance}}</td>
            <td>{{!empty($physician_info->first_name) ? $physician_info->first_name : '' }} {{!empty($physician_info->last_name) ? $physician_info->last_name : ''}}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
