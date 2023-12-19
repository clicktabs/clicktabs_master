<form action="{{ route('medications.update', $medication->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="medication-content">
        <div class="row">
            <div class="col-md-12">
                <div class="flex items-center gap-[15px]">
                    <input type="checkbox" name="long_standing"
                        id="long_standing" value="1" {{ $medication->long_standing == 1 ? 'checked' : '' }} />
                    <label for="long_standing">Long Standing</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="conStartDate" class="py-1">Start Date
                    <span class="text-red">*</span></label>
                <input name="start_date" id="conStartDate"
                    type="date" placeholder="Date picker" value="{{ $medication->start_date}}"
                    class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="dcThroughDate" class="py-1">D/C Through
                    Date<span class="text-red">*</span></label>
                <input name="through_date" id="dcThroughDate" value="{{ $medication->through_date}}"
                    type="date" class="form-control s ou  p-3"
                    required>
            </div>
        </div>
        <div class="row">
            <div class="col relative">
                <label for="medication_dosage" class="block py-1">
                    Medication & Dosage <span
                        class="text-red">*</span></label>
                <input class="form-control" type="text"
                    name="medication_dosage" id="medication_dosage_edit" value="{{ $medication->medication_dosage}}"
                    placeholder="Drug name" />
                <span class="text-[12px] block font-[700]">Search for
                    Medication is required to include medication in drug
                    interactions check.</span>
                    <div id="results_edit"></div>
            </div>
            <div class="col">
                <label for="drug_strengths" class="py-1">
                    Medication & Dosage strength <span
                        class="text-red">*</span></label>
                        {{$medication->strength}}
                        <input class="form-control" type="text"
                    name="strength" id="drug_strengths" value="{{ $medication->strength}}"
                    placeholder="Strength" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="contRoute" class="py-1"> Route <span
                        class="text-red">*</span></label>
                <input name="route" id="contRoute" type="text" value="{{ $medication->route}}"
                    placeholder="Route" class="form-control s ou  p-3"
                    required>
            </div>
            <div class="col-md-6">
                <label for="contFrequency" class="py-1"> Frequency
                    <span class="text-red">*</span></label>
                <input name="frequency" id="contFrequency" value="{{ $medication->frequency}}"
                    type="text" placeholder="Frequency"
                    class="form-control s ou  p-3" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="contClassification"
                    class="py-1">Classification
                    <span class="text-red">*</span></label>
                <input name="classification" id="contClassification" value="{{ $medication->classification}}"
                    type="text" placeholder="Classification"
                    class="form-control s ou  p-3" required>
            </div>
            <div class="col-md-6">
                <label for="medicationType" class="py-1"> Type<span
                        class="text-red">*</span></label>
                <select class="form-control !py-[16px]"
                    name="type">
                    <option value="1">New</option>
                    <option value="0">New</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="contPhysician" class="py-1"> Physician
                    <span class="text-red">*</span></label>
                    @php
                        $org_id = auth()->user()->organization_id;
                        $physicians = App\Models\Physician::select('first_name', 'last_name', 'id')->where('org_id', $org_id)->get();
                    @endphp
                    <select name="physician">
                        <option value="">Select physician</option>
                        @if($physicians)
                            @foreach( $physicians as $single_physician )
                                @if($medication->physician == $single_physician->id)
                                    <option selected value="{{$single_physician->id}}">{{$single_physician->first_name . ' ' . $single_physician->last_name}}</option>
                                @else
                                    <option value="{{$single_physician->id}}">{{$single_physician->first_name . ' ' . $single_physician->last_name}}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
            </div>
            <div class="col-md-6">
                <label for="contPharmacy" class="py-1"> Pharmacy
                    <span class="text-red">*</span></label>


                    @php
                        $org_id = auth()->user()->organization_id;
                        $pharmacies = App\Models\Pharmacy::where('org_id', $org_id)->get();
                    @endphp
                    <select name="pharmacy">
                        <option value="">Select pharmacy</option>
                        @if($pharmacies)
                            @foreach( $pharmacies as $single_pharmacie )
                                @if($medication->pharmacy == $single_pharmacie->id)
                                    <option selected value="{{$single_pharmacie->id}}">{{$single_pharmacie->name}}</option>
                                @else
                                    <option value="{{$single_pharmacie->id}}">{{$single_pharmacie->name}}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="medicationType" class="py-1"> Medication
                    status
                    <span class="text-red">*</span></label>
                <select class="form-control !py-[16px]"
                    name="status">
                    <option value="1">Continue</option>
                    <option value="0">Dis continue</option>
                </select>
            </div>
        </div>
        <div class="row mt-5">
            <div class="flex items-center gap-[15px]">
                <button type="submit" class="form-control">Save &
                    Exit
                </button>
                <button type="button" class="form-control">Exit
                    Without Saving
                </button>
            </div>
        </div>
    </div>
</form>
