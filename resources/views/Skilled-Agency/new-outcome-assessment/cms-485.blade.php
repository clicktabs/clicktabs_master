<div id="cms-485" class="tabcontent tab-pane {{isset($active) && $active=='cms'?'active':''}}" role="tabpanel">
    <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
   @include('skilled-agency.outcome-assessment.page30')

   <div class="mt-[20px] flex items-center gap-[20px]">
        <button type="submit" value="cmssubmit" class="!bg-[#4133BF] btn btn-primary" name="cmssubmit" data-next="cms-485">Save & Exit</button>

        <button type="submit" value="saveandcomplete" class="!bg-[#32CD32] btn btn-success" name="saveandcomplete">Save & Complete</button>
    </div>

</form>
</div>
