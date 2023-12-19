<div id="medications" class="tabcontent tab-pane {{isset($active) && $active=='medication'?'active':''}}" role="tabpanel">
    <!-- <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section N</span> <span>Medications</span></h2> -->
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
             @include('skilled-agency.outcome-assessment.page25')
    <div class="mt-[20px]"><button type="submit" value="medicationsubmit" name="medicationsubmit" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="discipline-treatment">Save & Continue</button></div>
</form>
</div>
