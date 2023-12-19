   @extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/nursingVisitNote/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/oasisCss/style_page14.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}" />

@endsection
@section('content')
<main>
   <div class="container pt-5 px-4">
      <div class="form-holder">
         <form action="" method="post">
            <table class="table table-bordered align-middle mb-5">
               <!-- row -->
               <tr>
                  <td>
                     <address class="mb-0">
                        Precedence Home Healthcare<br>
                        4663 Executive Dr<br>
                        Suite 17<br>
                        COLUMBUS, OH, 43220<br>
                        Phone: (614) 827-3222 | Fax: (614) 300-8436
                     </address>
                  </td>
                  <td class="text-center">
                     <h1 class="fs-3">HHA Care Plan</h1>
                  </td>
               </tr>

               <!-- row -->
               <tr>
                  <td colspan="2" class="p-0">
                     <table class="table table-borderless">
                        <tr>
                           <td>
                              <label class="input-group clean-input-group" for="">
                                 <span class="input-group-text fw-medium">Patient Name:</span>
                                 <input type="text" name="PatientName" id="PatientName" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                              <label class="input-group clean-input-group mt-2" for="">
                                 <span class="input-group-text fw-medium">Associated Care Period:</span>
                                 <input type="text" name="AssociatedCarePeriod" id="AssociatedCarePeriod" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                              <label class="input-group clean-input-group mt-2" for="">
                                 <span class="input-group-text fw-medium">Primary Diagnosis:</span>
                                 <input type="text" name="PrimaryDiagnosis" id="PrimaryDiagnosis" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                              <label class="input-group clean-input-group mt-2" for="">
                                 <span class="input-group-text fw-medium">Diet:</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
         
                           <td>
                              <label class="input-group clean-input-group" for="">
                                 <span class="input-group-text fw-medium">MRN:</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
         
                           <td>
                              <label class="input-group clean-input-group" for="">
                                 <span class="input-group-text fw-medium">Visit Date:</span>
                                 <input type="date" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                              <label class="input-group clean-input-group mt-2" for="">
                                 <span class="input-group-text fw-medium">HHA Frequency:</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                              <label class="input-group clean-input-group mt-2" for="">
                                 <span class="input-group-text fw-medium">Secondary Diagnosis:</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                              <label class="input-group clean-input-group mt-2" for="">
                                 <span class="input-group-text fw-medium">Allergies:</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td>
                              <label class="input-group clean-input-group mt-2" for="">
                                 <span class="input-group-text fw-medium">DNR:</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td style="min-width: 80px;">
                              <label for="">
                              <label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> No</label>
                           </label>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!-- Vital Sign Parameters -->
               <tr>
                  <td colspan="2" class="text-center"><b>Vital Sign Parameters</b></td>
               </tr>

               <tr>
                  <td colspan="2" class="px-0">
                     <table class="table table-borderless align-middle mb-0 fw-medium text-center">
                        <tr>
                           <td class="py-0"></td>
                           <td class="py-0">SBP</td>
                           <td class="py-0">DBP</td>
                           <td class="py-0">Pulse</td>
                           <td class="py-0">Resp</td>
                           <td class="py-0">Temp</td>
                           <td class="py-0">Weight</td>
                        </tr>
                        <tr>
                           <td style="min-width: 125px;">Greater Than</td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td>Less Than</td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark" ><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0 border border-dark"><input type="text" id="" class="form-control"></td>
                        </tr>
                     </table>
                     <div class="mt-2 px-3"><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> NA</label></div>
                  </td>
               </tr>

               <!-- Safety Precautions -->
               <tr>
                  <td colspan="2" class="text-center"><b>Safety Precautions</b></td>
               </tr>
               <tr>
                  <td colspan="2" class="p-0">
                     <table class="table table-borderless">
                        <tr>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Anticoagulant Precautions</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Keep Pathway Clear</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Proper Position During Meals</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Sharps Safety</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Support During Transfer/Ambulation</label></div>
                           </td>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Emergency Plan Developed</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Keep Side Rails Up</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Safety in ADLs</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Slow Position Change</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Use of Assistive Devices</label></div>
                           </td>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Fall Precautions</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Neutropenic Precautions</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Seizure Precautions</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Standard Precautions/Infection Control</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> O2 Precautions</label></div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <label class="fw-medium" for="">Other</label>
                           </td>
                           <td class="clean-input-group" colspan="2">
                              <input type="text" id="" class="form-control">
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!-- Functional Limitations -->
               <tr>
                  <td colspan="2" class="text-center"><b>Functional Limitations</b></td>
               </tr>
               <tr> 
                  <td colspan="2" class="p-0">
                     <table class="table table-borderless mb-0">
                        <tr>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Amputation</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Hearing</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Ambulation</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Dyspnea with Minimal Exertion</label></div>
                           </td>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Bowel/Bladder Incontinence</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Paralysis</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Speech</label></div>
                              <div class="clean-input-group"><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Other</label> <input type="text" id="" class="form-control d-inline-flex w-auto"></div>
                           </td>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Contracture</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Endurance</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Legally Blind</label></div>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!-- Activities Permitted -->
               <tr>
                  <td colspan="2" class="text-center"><b>Activities Permitted</b></td>
               </tr>
               <tr>
                  <td colspan="2" class="p-0">
                     <table class="table table-borderless mb-0">
                        <tr>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Complete bed rest</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Transfer bed-chair</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Independent at home</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Wheelchair</label></div>
                           </td>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Bed rest with BRP</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Exercise prescribed</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Crutches</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Walker</label></div>
                           </td>
                           <td>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Up as tolerated</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Partial weight bearing</label></div>
                              <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Cane</label></div>
                              <div class="clean-input-group"><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Other</label> <input type="text" id="" class="form-control d-inline-flex w-auto"></div>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!-- Plan Details -->
               <tr>
                  <td colspan="2" class="text-center"><b>Plan Details</b></td>
               </tr>
               <tr>
                  <td colspan="2" class="p-0">
                     <table class="table table-borderless mb-2">
                        <tr>
                           <td class="text-center"><b>Vital Signs</b></td>
                           <td class="text-center"><b>Elimination</b></td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Temperature</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Assist with Bed Pan/Urinal</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Blood Pressure</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Assist with BSC</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Heart Rate</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Incontinence Care</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Respirations</span>
                                 <input type="text" id="" class="form-control" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Empty Drainage Bag</span>
                                 <input type="text" id="" class="form-control  border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Weight</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Record Bowel Movement</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center"><b>Personal Care</b></td>
                           <td class="text-center"><b>Catheter Care</b></td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Bed Bath</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Activity</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Assist with Chair Bath</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Dangle on Side of Bed</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Tub Bath</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Turn & Position</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Shower</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Assist with Transfer</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Shower w/ Chair</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Range of Motion</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Shampoo</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Assist with Ambulation</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Hair Care/Comb Hair</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Equipment Care</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Oral Care</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Household Task</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Skin Care</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Make Bed</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Pericare</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Change Linen</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Nail Care</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Light Housekeeping</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Shave</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Nutrition</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Assist with Dressing</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Meal Set-up</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                        <tr>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Medication Reminder</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                           <td class="pt-0">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text fw-medium">Assist with Feeding</span>
                                 <input type="text" id="" class="form-control border border-dark" style="min-width: 100px;">
                              </label>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!-- Comments / Additional Instructions -->
               <tr>
                  <td colspan="2" class="text-center"><b>Comments / Additional Instructions</b></td>
               </tr>
               <tr>
                  <td colspan="2"><textarea name="" id="" cols="30" rows="4" class="form-control border border-dark"></textarea></td>
               </tr>

               <!-- Notifications -->
               <tr>
                  <td colspan="2" class="text-center"><b>Notifications</b></td>
               </tr>
               <tr>
                  <td colspan="2" class="p-0">
                     <table class="table table-borderless mb-0">
                        <tr>
                           <td><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input border border-dark"> Reviewed with Home Health Aide</label></td>
                           <td><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input border border-dark"> Patient oriented with Care Plan</label></td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!-- Signature: -->
               <tr>
                  <td colspan="2">
                     <div class="d-md-flex gap-3 justify-content-between">
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fs-6"><b>Signature:</b></span>
                           <input type="text" id="" class="form-control border border-dark" style="min-width: 150px;">
                        </label>
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fs-6"><b>Date:</b></span>
                           <input type="date" id="" class="form-control border border-dark" style="min-width: 150px;">
                        </label>
                      </div>
                  </td>
               </tr>
            </table>
         </form>
      </div><!--/ .form-holder -->
   </div>
<main>

   @endsection
   
   @section('extra_js')