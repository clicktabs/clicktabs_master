<div class="patient_info">
    <div class="patient_info_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="patient_image">
                        @if($employee->photo && file_exists(public_path('employee/' . $employee->photo)))
                            <img
                                src="{{ asset('employee/'.$employee->photo) }}">
                        @else
                            <img src="{{ asset('employee/avatar.svg') }}">
                        @endif
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="row h-full">
                        <div class="col-lg-6">
                            <div class="patient_info_content">
                                <div
                                    class="patient_info_content_header d-flex align-items-center">
                                    <h1>{{$employee->first_name}}
                                        , {{$employee->last_name}}</h1>
                                </div>
                                <div
                                    class="patient_info_table table-responsive">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td>Employee ID:</td>
                                            <td>{{$employee->employee_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Birthday:</td>
                                            <td>{{ \Carbon\Carbon::parse($employee->dob)->format('M d, Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Hire Date:</td>
                                            <td>{{ \Carbon\Carbon::parse($employee->doh)->format('M d, Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Employment Status:</td>
                                            <td>@if($employee->status == 1)
                                                    employee
                                                @else
                                                    ex employee
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="map_wrapper">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>