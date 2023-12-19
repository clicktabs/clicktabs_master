<div class="flex items-center gap-[15px] mt-[20px] overflow-x-scroll">
    <button
        class="add_new_medication_continue btn btn-success text-white flex-shrink-0 !bg-[#4133BF]">
        Add Medication
    </button>
    <button
        class="print_medication btn btn-success text-white flex-shrink-0 !bg-[#4133BF]">
        Print Medication Profile
    </button>
    <button
        class="drug_interaction btn btn-success text-white flex-shrink-0 !bg-[#4133BF]">
        Drug Interactions
    </button>
</div>
<div class="table-responsive mt-4">
    <div
        class="bg-[#4133BF] py-[8px] border-b border-[#fff] font-bold text-[#fff] text-center">
        Medication List (Active Medication List)
    </div>
    <table class="table" id="firstTable">
        <thead class="bg-[#4133BF] text-[#fff] text-center">
        <tr>
            <th></th>
            <th>Medication & Dosage</th>
            <th>Freq</th>
            <th>Route</th>
            <th>Classification</th>
            <th>Physician</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($medications->where('status', 1) as $row)
            <tr>
                <td><label><input type="checkbox" class="checkbox"/><span class="ml-3">{{ @$row->start_date }}</span></label></td>
                <td>{{ @$row->medication_dosage }}</td>
                <td>{{ @$row->frequency }}</td>
                <td>{{ @$row->route }}</td>
                <td>{{ @$row->classification }}</td>
                <td>{{ !empty($row->physician) ? $row->physicianInfo->first_name . ' '. $row->physicianInfo->last_name : ''}}</td>
                <td>
                    <a href="{{ route('medication.changeStatus', $row->id) }}"
                       class="btn btn-{{ $row->status == 0 ? 'success' : 'danger' }}">
                        {{ $row->status == 0 ? 'Active' : 'Inactive' }}
                    </a>
                </td>
                <td>
                    <button type="button"
                            class="btn btn-primary medication-edit-btn"
                            data-medication-id="{{ $row->id }}">Edit
                    </button>
                </td>
                <td>
                    <form
                        action="{{ route('medications.destroy', $row->id) }}"
                        id="medication-delete-form"
                        method="post">
                        @method('DELETE')
                        @csrf
                    </form>
                    <button type="button"
                            onclick="event.preventDefault; document.getElementById('medication-delete-form').submit()"
                            class="btn btn-danger">
                        Delate
                    </button>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
<div class="table-responsive mt-4">
    <div
        class="bg-[#4133BF] py-[8px] border-b border-[#fff] font-bold text-[#fff] text-center">
        Medication List (Discontinue Medication List)
    </div>
    <table class="table">
        <thead class="bg-[#4133BF] text-[#fff] text-center">
        <tr>
            <th></th>
            <th>Medication & Dosage</th>
            <th>Freq</th>
            <th>Route</th>
            <th>Classification</th>
            <th>Physician</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach ($medications->where('status', 0) as $row)
            <tr>
                <td><label><input type="checkbox"/><span
                            class="ml-3">{{ @$row->start_date }}</span></label>
                </td>
                <td>{{ @$row->medication_dosage }}</td>
                <td>{{ @$row->frequency }}</td>
                <td>{{ @$row->route }}</td>
                <td>{{ @$row->classification }}</td>
                <td>{{ @$row->physician }}</td>
                <td>
                    <a href="{{ route('medication.changeStatus', $row->id) }}"
                       class="btn btn-{{ $row->status == 1 ? 'danger' : 'success' }}">
                        {{ $row->status == 1 ? 'Inactive' : 'Active' }}
                    </a>
                </td>
                <td>
                    <button type="button"
                            class="btn btn-primary medication-edit-btn"
                            data-medication-id="{{ $row->id }}">Edit
                    </button>
                </td>
                <td>
                    <form
                        action="{{ route('medications.destroy', $row->id) }}"
                        id="medication-delete-form"
                        method="post">
                        @method('DELETE')
                        @csrf
                    </form>
                    <button type="button"
                            onclick="event.preventDefault; document.getElementById('medication-delete-form').submit()"
                            class="btn btn-danger">
                        Delate
                    </button>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
<div class="modal fade !max-w-full" id="drugInteractionModal" tabindex="-1"
     role="dialog" aria-labelledby="drugInteraction" aria-hidden="true">
    <div class="container">
        <div class="instruction_header bg-[#4133BF] p-[10px]">
            <h3 class="font-[600] text-center text-white">Drug Interaction
                Checker</h3>
        </div>
        Please unselect the medications from the list to exclude from drug
        interaction check.
        <h5
            class="text-center font-[700] text-[20px] mt-[20px] mb-[10px] text-[#000]">
            Active Medication(S)</h5>
        <div class="table-responsive">
            <table id="secondTable" class="table">
                <thead class="bg-[#4133BF] text-[#fff] text-center">
                <tr>
                    <th></th>
                    <th>Medication & Dosage</th>
                    <th>Freq</th>
                    <th>Route</th>
                    <th>Classification</th>
                    <th>Physician</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody class="text-center"></tbody>
            </table>
        </div>
        <div class="flex items-center justify-center gap-[15px] mt-[20px]">
            <button onclick="fetchReactionMeddrapt()"
                    class="bg-[#4133BF] py-[10px] px-[15px] rounded-[6px] text-[#fff]">
                Check Interactions
            </button>
            <button onclick="closeModal()"
                class=" bg-[#4133BF] py-[10px] px-[15px] rounded-[6px] text-[#fff]">
                Close
            </button>
        </div>
    </div>
</div>
<div class="modal fade !max-w-full" id="printMedicationModal" tabindex="-1"
     role="dialog" aria-labelledby="printMedicationModal"
     aria-hidden="true">
    <div class="container">
        <h3 class="font-[600] text-[18px] text-left text-[#000]">Sign
            Medication Profile</h3>
        <div
            class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden mt-[25px]">
            <div class="table-header bg-[#4133BF] text-white p-[10px]">
                <h4 class="text-white">Patient Information</h4>
            </div>
            <div class="table-responsive p-[10px]">
                <table class="table border-none">
                    <thead
                        class="text-left bg-[#4133BF] text-[#fff] text-center border-none">
                    <tr class="border-none">
                        <th class="border-none">Admission Period
                            Associated
                        </th>
                        <th class="border-none">Terminal Diagnosis</th>
                        <th class="border-none">Comorbiditles</th>
                        <th class="border-none">Attending Physician</th>
                    </tr>
                    </thead>
                    <tbody class="text-left">
                    <tr>
                        <td class="border-none">07/04/2022-12/31/1999</td>
                        <td class="border-none">Parkinson's disease</td>
                        <td class="border-none">Acute gastric ulcer without
                            hemorrhage or perforation
                        </td>
                        <td class="border-none">Rose, Amy</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div
            class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
            <div class="table-header bg-[#4133BF] text-white p-[10px]">
                <h4 class="text-white">Active Medication
                    ({{$medications->where('status', 1)->count()}})</h4>
            </div>
            <div class="table-responsive p-[10px]">
                <table class="table border-none">
                    <thead
                        class="bg-[#4133BF] text-[#fff] text-center border-none">
                    <tr class="border-none">
                        <th>Medication & Dosage</th>
                        <th>Freq</th>
                        <th>Route</th>
                        <th>Classification</th>
                        <th>Physician</th>
                    </tr>
                    </thead>
                    <tbody class="text-left">
                    @foreach ($medications->where('status', 1) as $row)
                        <tr>
                            <td>{{ @$row->medication_dosage }}</td>
                            <td>{{ @$row->frequency }}</td>
                            <td>{{ @$row->route }}</td>
                            <td>{{ @$row->classification }}</td>
                            <td>{{ @$row->physician }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div
            class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
            <div class="table-header bg-[#4133BF] text-white p-[10px]">
                <h4 class="text-white">Drug Interactions</h4>
            </div>
            <div class="table-responsive p-[10px]">
                <ul>
                    <li
                        class="flex items-center gap-[15px] text-[11px] mb-[15px]">
                        <table id="reactionTable" class="table">
                            <thead
                                class="bg-[#4133BF] text-[#fff] text-left">
                            <tr>
                                <th>Medication & Dosage</th>
                                <th>Reactions</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
            <div class="table-header bg-[#4133BF] text-white p-[10px]">
                <h4 class="text-white">Active Allergies
                    ({{$allergies->where('status', 1)->count()}})</h4>
            </div>
            <div class="table-responsive p-[10px]">
                <table class="table mt-4">
                    <thead class="bg-[#4133BF] text-[#fff] text-center">
                    <tr>
                        <th>Allergy</th>
                        <th>Type</th>
                        <th>Severity</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($allergies->where('status', 1) as $row)
                        <tr>
                            <td>{{ @$row->allergy }}</td>
                            <td>{{ @$row->type }}</td>
                            <td>{{ @$row->severity }}</td>
                            <td>{{ @$row->start_date }}</td>
                            <td>{{ @$row->end_date }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div
            class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
            <div class="table-header bg-[#4133BF] text-white p-[10px]">
                <h4 class="text-white">Signature</h4>
            </div>
            <div class="p-[10px]">
                <div class="flex gap-[10px]">
                    <input class="mt-[5px]" type="checkbox"
                           name="medication_regimen"
                           id="medication_regimen"/>
                    <label for="medication_regimen"
                           class="font-[600]">Acknowledgement of Medication
                        regimen review:
                        I have reviewed all listed medications for potential
                        adverse effects and drug reactions,
                        including ineffective drug therapy, side effects,
                        drug interactions, duplicate drug therapy,
                        medication allergies, and non-compliance with drug
                        therapy and significant reviewed findings
                        with the physician.</label>
                </div>
                <div class="row mt-[20px]">
                    <div class="col-md-12">
                        <label for="date_signed" class="py-1 font-[600]">
                            Date Signed <span
                                class="text-red">*</span></label>
                        <input name="date_signed" id="date_signed"
                               type="date" class="form-control s ou  p-3"
                               required>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-[15px] mt-[30px]">
            <form action="{{route('medication-profile.pdf', $id)}}" method="POST" target="_blank" id="hiddenDataForm">
                @csrf
                <button type="submit" id="submitHiddenData" style="color: #fff" class="!bg-[#4133BF] py-[5px] px-[15px] rounded-[5px] text-[#fff] no-print">Sign Medication Profile</button>
            </form>
            
            <button type="button"
                    class="h-full inline-block w-auto border-[1px] border-[#4133BF] rounded-[5px] bg-transparent text-[#4133BF] px-[15px] py-[5px] no-print">
                Cancel
            </button>
        </div>
    </div>
</div>

<div class="modal fade !max-w-[768px] !w-[768px]" id="continueModal" tabindex="-1" role="dialog" aria-labelledby="continueModal" aria-hidden="true">
    <div class="overlay fixed top-0 left-0 w-full h-full"></div>
    <div class="container">
        <form action="{{ route('medication.discontinue.store') }}" method="POST">
            @csrf
            <div class="medication-content">
                <div class="row">
                    <h4 class="text-center font-[700] text-[20px] !bg-[#4133BF] text-[#fff] p-2">Add Medications</h4>
                    <div class="col-md-12">
                        <div class="flex items-center gap-[15px]">
                            <input type="checkbox" name="long_standing"
                                   id="long_standing" value="1"/>
                            <label for="long_standing">Long Standing</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="hidden" name="p_id" value="{{$patient->id}}">
                    <div class="col-md-6">
                        <label for="conStartDate" class="py-1">Start Date
                            <span class="text-red">*</span></label>
                        <input name="start_date" id="conStartDate"
                               type="date" placeholder="Date picker"
                               class="form-control s ou  p-3" required>
                    </div>
                    <div class="col-md-6">
                        <label for="dcThroughDate" class="py-1">D/C Through
                            Date<span class="text-red">*</span></label>
                        <input name="through_date" id="dcThroughDate"
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
                               name="medication_dosage"
                               id="medication_dosage"
                               placeholder="Drug name"/>
                        <span class="text-[12px] block font-[700]">Search for
                            Medication is required to include medication in drug
                            interactions check.</span>
                        <div id="results"></div>
                    </div>
                    <div class="col">
                        <label for="drug_strengths" class="py-1">
                            Medication & Dosage strength <span
                                class="text-red">*</span></label>
                        <select class="form-control" id="drug_strengths"
                                name="strength">
                            <option value="">Select drug strength
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="contRoute" class="py-1"> Route <span
                                class="text-red">*</span></label>
                        <input name="route" id="contRoute" type="text"
                               placeholder="Route"
                               class="form-control s ou  p-3"
                               required>
                    </div>
                    <div class="col-md-6">
                        <label for="contFrequency" class="py-1"> Frequency
                            <span class="text-red">*</span></label>
                        <input name="frequency" id="contFrequency"
                               type="text" placeholder="Frequency"
                               class="form-control s ou  p-3" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="contClassification"
                               class="py-1">Classification
                            <span class="text-red">*</span></label>
                        <input name="classification" id="contClassification"
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
                        <label for="contPhysician" class="py-1"> Physician <span class="text-red">*</span></label>
                        <select name="physician" required>
                            <option value="">Select physician</option>
                            @if($physicians)
                                @foreach( $physicians as $single_physician )
                                    <option value="{{$single_physician->id}}">{{$single_physician->first_name . ' ' . $single_physician->last_name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="contPharmacy" class="py-1"> Pharmacy<span class="text-red">*</span></label>
                        <select name="pharmacy" required>
                            <option value="">Select pharmacy</option>
                            @if($pharmacies)
                                @foreach( $pharmacies as $single_pharmacie )
                                    <option value="{{$single_pharmacie->id}}">{{$single_pharmacie->name}}</option>
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
                        <button type="submit" class="form-control btn btn-primary !bg-[#4133BF] text-[#fff]">Save &
                            Exit
                        </button>
                        <button type="button" class="form-control btn btn-primary !bg-[#4133BF] text-[#fff]">Exit
                            Without Saving
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade !max-w-full" id="editquickViewmedicationModal"
     tabindex="-1" role="dialog"
     aria-labelledby="medicationModal" aria-hidden="true">
    <div class="container edit-modal-content4">

    </div>
</div>
