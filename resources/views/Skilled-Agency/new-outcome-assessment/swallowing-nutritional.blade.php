<div id="swallowing_nutritional_status" class="tabcontent tab-pane {{isset($active) && $active=='swallowing'?'active':''}}" role="tabpanel" >
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
             @include('skilled-agency.outcome-assessment.page22')
    <div class="mt-[20px]"><button type="submit" name="swallowing" value="swallowing" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="skin-conditions">Save & Continue</button></div>
</form>
</div>
