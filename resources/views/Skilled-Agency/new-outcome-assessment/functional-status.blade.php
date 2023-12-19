<div class="tab-pane tabcontent {{isset($active) && $active=='funStatus'?'active':''}}" id="functional-status" role="tabpanel" tabindex="0">
     <form action="{{route('oasis-soc-e.store')}}" method="POST" id="new-oasis-e-form">
             @csrf
             <input type="hidden" name="patient_history_id" value="{{$patient->id}}">
    @include('skilled-agency.outcome-assessment.page12')

    <table class="table table-bordered align-middle default-td">
        <tr>
            <td>
                <table class="table table-borderless align-middle table-nopadding">
                    <tr>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="restrictions" class="form-check-input"> No
                                Restrictions</label>
                            </td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="bedrest" class="form-check-input">
                                Complete bedrest</label>
                            </td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="privileges" class="form-check-input">
                                Bathroom privileges</label>
                            </td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="tolerated" class="form-check-input"> Up
                                as tolerated</label>
                            </td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="transfer" class="form-check-input">
                                Transfer bed/chair</label>
                            </td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="exercises" class="form-check-input">
                                Exercises prescribed</label>
                            </td>
                    </tr>
                    <tr>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="partial" class="form-check-input">
                                Partial weight bearing</label></td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="independent" class="form-check-input">
                                Independent in home</label></td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="crutches2" class="form-check-input">
                                Crutches</label></td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="cane2" class="form-check-input">
                                Cane</label></td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="wheelchair2" class="form-check-input">
                                Wheelchair</label></td>
                        <td><label class="form-check-label">
                            <input type="checkbox" value="1" name="walker2" class="form-check-input">
                                Walker</label></td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <label class="form-label fw-medium mb-1">Other (specify):</label>
                            <textarea name="otherSpecify1" id="" cols="30" rows="2" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <label class="form-label fw-medium mb-1 mt-2">Other (specify):</label>
                            <textarea name="otherSpecify2" id="" cols="30" rows="2" class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <label class="form-label fw-medium mb-1 mt-2">Plan/Comments regarding ADLs:</label>
                            <textarea name="otherSpecify3" id="" cols="30" rows="2" class="form-control"></textarea>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <div class="mt-[20px]"><button type="submit" value="funStatus" name="funStatus" class="!bg-[#4133BF] btn btn-primary continue_next" data-next="functional-abilities">Save & Continue</button></div>
</form>
</div>
