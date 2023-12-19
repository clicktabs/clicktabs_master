<div id="physician-order" class="tabcontent tab-pane {{isset($active) && $active=='physician'?'active':''}}" role="tabpanel">
 <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
    @csrf
    <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
      @include('skilled-agency.outcome-assessment.page29_withinput')
    <div class="mt-[20px]"><button type="submit" value="physicianSubmit" name="physicianSubmit" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="cms-485">Save & Continue</button></div>
</form>



</div>




