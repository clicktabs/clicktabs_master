<form class="patientDiagnosisForm" name="patientDiagnosisForm" id="patientDiagnosisForm" method="post">
    @csrf
    <div class=" vt card mb-2 tabcontent" id="patient_diagnosis">
        <div class="card-header text-center !bg-[#4133BF]">
            <h2 class="gh text-slate-800 !text-white">Patient Diagnosis</h2>
        </div>
        <div class="card-body row">
            <div class="col">
                <label for="last_name"><span class="text-green">(M1021)</span> Primary Diagnosis:</label>
                <hr class="hr-st">
                <div class="row">
                    <div class="col">
                        <div class="row" id="icd_field">
                            <div class="col-md-8 form-group">
                                <label for="middle_name">ICD-10-CM Code: </label>
                                <input id="icd_name_search" type="text" class="form-control s ou" name="icd_name_search" value="{{ old('icd_name_search') }}">
                            </div>
                            <div class="col mt-3">
                                <label for="middle_name"></label>

                                <svg onclick="checkIcdName()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group">
                            <label for="ic_code_name">ICD-10-CM Code: </label>
                            <select name="ic_code_name" id="ic_code_name" class="form-control s ou icd-name-drop-down">
                                <option value="">--- Select ---</option>
                            </select>
                        </div>
                    </div>
                    <div class="col mt-2">
                        <div class="form-group pd1">
                            <label for="other_diagnosis_severity">Severity: </label>
                            <select name="primary_diagnosis_severity" id="primary_diagnosis_severity" class="form-control s ou primary_diagnosis_severity">
                                <option value="">Select Serverity</option>
                                @if($patient_severity_sub_addons)
                                    @foreach($patient_severity_sub_addons as $single_severity)
                                        <option value="{{$single_severity->name}}">{{$single_severity->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>

                <br>
                <br>
                <label for="last_name"><span class="text-green">(M1023)</span> Other Diagnoses:
                    <a class="add-button" onclick="addAnotherDiagnosis()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </a>
                </label>
                <hr class="hr-st">
                <div class="row mt-4" id="wrapper-other-diagnosis">
                    <div class="row other-diagnosis">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label for="other_diagnosis_code">ICD-10-CM Code: </label>
                                    <input type="text" id="other_diagnosis_code" class="form-control s ou other_diagnosis_code" name="other_diagnosis_code[]" />
                                </div>
                                <div class="col mt-3">
                                    <label for="middle_name"></label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-button check_another_icd_name" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="ic_another_code">ICD-10-CM Code: </label>
                                <select name="ic_another_code[]" id="ic_another_code" class=" another_icd_code form-control s ou ic-code-drop-down">
                                    <option value="">--- Select ---</option>
                                </select>
                            </div>
                        </div>
                        <div class="col mt-2">
                            <div class="form-group">
                                <label for="other_diagnosis_severity">Severity: </label>
                                {{-- <select name="other_diagnosis_severity" class="form-control s ou other_diagnosis_severity"> --}}
                                    <select name="severity" class="form-control s ou other_diagnosis_severity">
                                    <option value="">Select Serverity</option>
                                    @if($patient_severity_sub_addons)
                                        @foreach($patient_severity_sub_addons as $single_severity)
                                            <option value="{{$single_severity->name}}">{{$single_severity->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
                <div class="col pb-4 pl-3">
                    <button type="submit" class="btn btn-primary !bg-[#6366f1] !text-white">Save and Continue</button>
                </div>

    </div>
</form>
