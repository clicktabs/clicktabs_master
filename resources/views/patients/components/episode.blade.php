<div class="notes-form">
    <form class="patient_episode_manager" id="patientEpisodeManagerForm" name="patientEpisodeManagerForm" method="POST">
        @csrf
        <div class="row mt-3">
            <input type="hidden" class="hidden" name="patient_id" id="patient_id" value="{{$patient->id}}"/>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="start_of_care_date">Start of care date:</label>
                    <input type="date" class="form-control" value="{{ $patient->episode->start_care_date}}" name="start_of_care_date" id="start_of_care_date" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="episode_start_date">Episode start date:</label>
                    <input type="date" class="form-control" value="{{ $patient->episode->episode_start_date ? $patient->episode->episode_start_date : date('m/d/Y') }}" name="episode_start_date" id="episode_start_date" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="episode_end_date">Episode end date:</label>
                    <input type="" readonly class="form-control" value="" name="episode_end_date" id="episode_end_date" >
                </div>
            </div>
        </div>

        @php
            $case_manager_info = App\Models\Employee::select('id', 'first_name', 'last_name')
                    ->where('id', '=', $patient->caseManage->case_managers)
                    ->first();
        @endphp

        <div class="row mt-3">
            <div class="col">
                <div class="form-group">
                    <label for="case_manager">Case Manager:</label>
                    <select class="form-control" id="case_manager" name="case_manager">
                        <option selected value="{{ !empty($case_manager_info->id)?$case_manager_info->id:'' }}">{{ !empty($case_manager_info->first_name)?$case_manager_info->first_name:'' }} {{ !empty($case_manager_info->last_name)?$case_manager_info->last_name:'' }}</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="primary_insurance">Primary insurance:</label>
                    <select class="form-control" id="primary_insurance" name="primary_insurance">
                        @if($patient->insurance->primary_payor !== 'N/A')
                            <option selected value="{{$patient->insurance->primary_payor}}">{{$patient->insurance->primary_payor}}</option>
                        @else
                            <option value="">Select primary insurance</option>
                            @foreach ($payors as $primary_payor)
                                <option value="{{$primary_payor->name}}">{{$primary_payor->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="secondary_insurance">Secondary insurance:</label>
                    <select class="form-control" id="secondary_insurance" name="secondary_insurance">
                        @if($patient->insurance->secondary_payor !== 'N/A')
                            <option selected value="{{$patient->insurance->secondary_payor}}">{{$patient->insurance->secondary_payor}}</option>
                        @else
                            <option value="">Select secondary insurance</option>
                            @foreach ($payors as $secondary_payor)
                                <option value="{{$secondary_payor->name}}">{{$secondary_payor->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            @php
                $physician_id = $patient->extra_info->physician_id;
                $employee_physician = App\Models\Physician::select('id', 'first_name', 'last_name')->where('id', $physician_id)->first();
            @endphp
            <div class="col">
                <div class="form-group">
                    <label for="primary_physician">Primary Physician:</label>
                    <select class="form-control" id="primary_physician" name="primary_physician">
                        <option selected value="{{$employee_physician->id}}">{{$employee_physician->first_name}} {{$employee_physician->last_name}}</option>
                    </select>
                </div>
            </div>
        </div>

        <!--<div class="row mt-3">
            <div class="col">
                <div class="form-group form-check">
                    <label class="form-check-label" for="inactive_episode">Inactive Episode</label>
                    <input type="checkbox" name="in_active_episode" value="yes" class="form-check-input" id="inactive_episode">
                </div>
            </div>


            <div class="col">
                <div class="form-check">
                    <div>
                        <label>Visit authorization required ?</label>
                    </div>
                    <input class="form-check-input" type="radio" name="visit_authorization" id="visit_authorization_1" value="yes">
                    <label class="form-check-label" for="visit_authorization_1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="visit_authorization" id="visit_authorization_2" value="no">
                    <label class="form-check-label" for="visit_authorization_2">
                        No
                    </label>
                </div>
            </div>
           <div class="col">
               <div class="form-check">
                    <div><label>Enable Pre-Claim Review(PCR) Demonstration</label></div>
                    <input class="form-check-input" type="radio" name="pcr_demonstration" id="pcr_demonstration_1" value="yes">
                    <label class="form-check-label" for="pcr_demonstration_1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="pcr_demonstration" id="pcr_demonstration_2" value="no">
                    <label class="form-check-label" for="pcr_demonstration_2">
                        No
                    </label>
                </div>
            </div>
        </div>--->
            <br>

        <div class="row logos">
            <div class="col-lg-12">
                <label for="comment">Comment</label>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Comment" name="comment" id="texarea"></textarea>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <button type="submit" class="save-btn p-[15px] py-[10px] rounded-[5px] !bg-[#4133BF] text-[#fff]">Save</button>
            </div>
        </div>
    </form>
</div>
