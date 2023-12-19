<div class="tab-pane tabcontent {{isset($active) && $active=='preference'?'active':''}}" id="preferences-routine-activities" role="tabpanel" tabindex="0">
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
    @include('skilled-agency.outcome-assessment.page11')

    <div class="mt-[20px]"><button type="submit" value="preference" name="preference" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="functional-status">Save & Continue</button></div>
</form>
</div>
