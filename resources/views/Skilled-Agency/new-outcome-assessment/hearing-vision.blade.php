<div class="tab-pane tabcontent {{isset($active) && $active=='hearing'?'active':''}}" id="speach-hearing-vision" role="tabpanel" tabindex="0">
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
    @include('skilled-agency.outcome-assessment.page6')

    <div class="mt-[20px]"><button type="submit" value="hearingSubmit" name="hearingSubmit" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="cognitive-mood-behaviour">Save & Continue</button></div>
</form>
</div>