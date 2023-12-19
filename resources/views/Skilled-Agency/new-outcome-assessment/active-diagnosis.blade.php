<div class="tab-pane tabcontent {{isset($active) && $active=='activeDig'?'active':''}}" id="active-diagnosis" role="tabpanel" tabindex="0">
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
    @include('skilled-agency.outcome-assessment.page20')
    <div class="mt-[20px]"><button type="submit" value="activeDig" name="activeDig" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="health-conditions">Save & Continue</button></div>
</form>
</div>
