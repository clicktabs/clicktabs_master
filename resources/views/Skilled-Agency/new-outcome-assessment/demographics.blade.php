<div class="tab-pane tabcontent {{isset($active) && $active=='demographic'?'active':''}}" id="demographics" role="tabpanel" tabindex="2">
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
    @include('skilled-agency.outcome-assessment.page2')
    @include('skilled-agency.outcome-assessment.page3')
    @include('skilled-agency.outcome-assessment.page4')
    @include('skilled-agency.outcome-assessment.page5')

    <div class="mt-[20px]"><button value="demographic" type="submit" name="demographic" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="speach-hearing-vision">Save & Continue</button></div>
</form>
    <!-- speach-hearing-vision -->
</div>


