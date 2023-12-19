<!-- <h2 class="bg-secondary-subtle border border-1 d-md-flex"><span class="border-md-end-1">Section I</span> <span>Active Diagnoses</span></h2> -->

                  <table class="table table-bordered align-middle default-td">

                      <tr>
            <td class="bg-black py-2 px-3" colspan="2">
                <h3 class="text-center m-0 text-white">Active Diagnoses</h3>
            </td>
        </tr>
                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1021. Primary Diagnosis & M1023. Other Diagnoses</b>
                        </td>
                     </tr>
                     <tr class="d-none d-lg-table-row">
                        <td class="text-center"><b>Column 1</b></td>
                        <td class="text-center"><b>Column 2</b></td>
                     </tr>
                     <tr>
                        <td data-title="Column 1">Diagnoses (Sequencing of diagnoses should reflect the seriousness of each condition and support the disciplines and services provided)</td>
                        <td data-title="Column 2">ICD-10-CM and symptom control rating for each condition. Note that the sequencing of these ratings may not match the sequencing of the diagnoses</td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1021. Primary Diagnosis</b>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <div class="input-group">
                              <label class="input-group-text">a.</label>
                              <input type="text" name="parimaryOne" class="form-control" value="{{isset($patient->diagnosis->primary_diagnosis_name)?$patient->diagnosis->primary_diagnosis_name:''}}">
                           </div>
                        </td>
                        <td>
                           <p class="mb-1">V, W, X, Y Not allowed</p>
                           <div class="row row-flex align-items-center">
                              <div class="col-auto">
                                 <div class="input-group">
                                    <label class="input-group-text">a.</label>
                                    <input type="text" id="" name="primaryAllow" value="{{isset($patient->diagnosis->primary_diagnosis_code)?$patient->diagnosis->primary_diagnosis_code:''}}" class="form-control">
                                 </div>
                              </div>
                              @php
$allowValue=isset($patient->diagnosis->primaryAllowValue)?$patient->diagnosis->primaryAllowValue:'';
                              @endphp
                              <div class="col-auto labels-group">
                                 <label class="form-check-label"><input type="checkbox" name="primaryAllowValue0" value="1" class="form-check-input"> 0</label>
                                 <label class="form-check-label"><input type="checkbox" name="primaryAllowValue1" value="1" class="form-check-input"> 1</label>
                                 <label class="form-check-label"><input type="checkbox" name="primaryAllowValue2" value="1" class="form-check-input"> 2</label>
                                 <label class="form-check-label"><input type="checkbox" name="primaryAllowValue3" value="1"  class="form-check-input"> 3</label>
                                 <label class="form-check-label"><input type="checkbox" name="primaryAllowValue4" value="1" class="form-check-input"> 4</label>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr><td class="border-0"></td></tr>

                     <tr>
                        <td class="bg-secondary-subtle" colspan="2">
                           <b>M1023. Other Diagnoses</b>
                        </td>
                     </tr>
                     @php
                        $other_diagnosis_code = json_decode($patient->diagnosis->other_diagnosis_code, true);
                        $other_diagnosis_name = json_decode($patient->diagnosis->other_diagnosis_name, true);
                    @endphp

                    @if (count($other_diagnosis_code) === count($other_diagnosis_name))
                        @foreach ($other_diagnosis_code as $index => $code)
                            <tr>
                                <td>
                                    <div class="input-group">
                                        <label class="input-group-text">b.</label>
                                        <input value="{{ $code }}" name="otherdig[]" type="text" id="" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-1">All ICD-10-CM codes allowed</p>
                                    <div class="row row-flex align-items-center">
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <label class="input-group-text">b.</label>
                                                <input type="text" id="" value="{{ $other_diagnosis_name[$index] }}" name="otherDiagnosisb[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-auto labels-group">
                                            @for ($i = 0; $i < 5; $i++)
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="otherDiagnosisb{{ $i }}" value="1" class="form-check-input"> {{ $i }}
                                                </label>
                                            @endfor
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <!-- Handle the case where the arrays have different lengths -->
                        <p>Arrays have different lengths.</p>
                    @endif


                  </table>

                  <table class="table table-bordered align-middle default-td mt-4">
                     <tr>
                        <td class="bg-secondary-subtle">
                           <strong>M1028. Active Diagnoses – Comorbidities and Co-existing Conditions</strong>
                        </td>
                     </tr>
                     <tr>
                        <td><strong>↓ Check all that apply</strong></td>
                     </tr>
                     <tr>
                        <td><label class="form-check-label"><input type="checkbox" name="activeDiogonisis" value="1" class="form-check-input"> 1. <b>Peripheral Vascular Disease (PVD) or Peripheral Arterial Disease (PAD)</b></label></td>
                     </tr>
                     <tr>
                        <td><label class="form-check-label"><input type="checkbox" name="diabetesMellitus" value="1" class="form-check-input"> 2. <b>Diabetes Mellitus (DM)</b></label></td>
                     </tr>
                     <tr>
                        <td><label class="form-check-label"><input type="checkbox" name="diogonisisNoa" value="1" class="form-check-input"> 3. <b>None of the above</b></label></td>
                     </tr>
                  </table>
