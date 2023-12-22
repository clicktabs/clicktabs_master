<div id="patient-tracking" class="tabcontent tab-pane {{isset($active) && $active=='admin'?'active':''}}" role="tabpanel" tabindex="1">
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
             @include('skilled-agency.outcome-assessment.page1')
             <div class="mt-[20px]">
                <button type="submit" value="save_exit" class="!bg-[#4133BF] btn btn-primary" name="save_exit">Save & Exit</button>
                <button type="submit" value="admin" name="administrative" class="!bg-[#32CD32] btn btn-success continue_next" data-next="demographics">Save & Continue</button>
            </div>
</form>
</div>
