<div id="skin-conditions" class="tabcontent tab-pane {{isset($active) && $active=='skin'?'active':''}}" role="tabpanel">
<!-- <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section M</span> <span>Skin Conditions</span></h2> -->
 <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
                @include('skilled-agency.outcome-assessment.page23')
                 <div class="mt-[20px]"><button type="submit" value="skin" name="skin" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="medications">Save & Continue</button></div>
              </div>
           </form>
