<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>60-Day Summary/Case Conference</title>
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <style>
      :root {
         --bs-border-color: #a9a9a9;
      }
      .table>:not(caption)>*>* {
         padding-left: 0.8rem;
         padding-right: 0.81rem;
      }
      .clean-input-group {
         align-items: flex-end;
         column-gap: 10px;
      }
      .clean-input-group .input-group-text, .clean-input-group .form-control {
         border-radius: 0;
         border: 0 none;
         padding: 0;
         background: none;
      }
      .clean-input-group .form-control {
         border-bottom: var(--bs-border-width) solid var(--bs-border-color);
      }
      .clean-input-group .form-control:focus {
         border-color: transparent;
         box-shadow: none;
         border-bottom: var(--bs-border-width) solid #000;
      }
      /* Print */
      @media print {
         .d-flex,.d-md-flex,.d-lg-flex {
            display: flex!important;
         }
      }
  </style>
</head>

<body>
   <div class="container pt-5 px-4">
      <div class="vt p-2">@include('layouts.company_info')</div>
      <div class="form-holder">
         <form action="" method="post">
            <table class="table table-bordered align-middle mb-5">
               <!-- row -->
               <tr>
                  <td colspan="2">
                     <address class="mb-0">Precedence Home Healthcare<br>
                        4663 Executive Dr<br>
                        Suite 17<br>
                        COLUMBUS, OH, 43220
                     </address>
                  </td>
                  <td class="text-center">
                     <h1 class="fs-3">Custom Visit</h1>
                  </td>
               </tr>

               <!-- row -->
               <tr>
                  <td>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">Patient Name:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Care Period:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Associated Mileage:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>

                  <td>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">MRN:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Time In:</span>
                        <input type="time" id="" class="form-control" style="min-width: 150px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Surcharge:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>

                  <td>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">Visit Date:</span>
                        <input type="date" id="" class="form-control" style="min-width: 100px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Time Out:</span>
                        <input type="time" id="" class="form-control" style="min-width: 100px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Physician:</span>
                        <input type="text" id="" class="form-control" style="min-width: 100px;">
                     </label>
                  </td>
               </tr>

               <!-- Vital Sign Parameters -->
               <tr>
                  <td colspan="3" class="text-center"><b>Vital Sign Parameters</b></td>
               </tr>
               <tr>
                  <td colspan="3" class="px-0">
                     <table class="table table-borderless align-middle mb-0 fw-medium text-center">
                        <tr>
                           <td class="py-0"></td>
                           <td class="py-0">SBP</td>
                           <td class="py-0">DBP</td>
                           <td class="py-0">HR</td>
                           <td class="py-0">Resp</td>
                           <td class="py-0">Temp</td>
                           <td class="py-0">Weight</td>
                        </tr>
                        <tr>
                           <td style="min-width: 125px;">Greater Than</td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td>Less Than</td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                        </tr>
                     </table>
                     <div class="mt-2 px-3"><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> NA</label></div>
                  </td>
               </tr>

               <!-- Safety Precautions -->
               <tr>
                  <td colspan="3" class="text-center"><b>Safety Precautions</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-lg-flex gap-5">
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Anticoagulant Precautions</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Keep Pathway Clear</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Proper Position During Meals</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Sharps Safety</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Support During Transfer/Ambulation</label></li>
                        </ul>
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Emergency Plan Developed</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Keep Side Rails Up</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Safety in ADLs</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Slow Position Change</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Use of Assistive Devices</label></li>
                        </ul>
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Fall Precautions</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Neutropenic Precautions</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Seizure Precautions</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Standard Precautions/Infection Control</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> O2 Precautions</label></li>
                        </ul>
                     </div>
                     <div class="d-flex flex-wrap gap-3 mt-2">
                        <label class="fw-medium" for="date-sent">Other</label>
                        <div class="clean-input-group w-50"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="mt-2"><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> NA</label></div>
                  </td>
               </tr>

               <!-- Functional Limitations -->
               <tr>
                  <td colspan="3" class="text-center"><b>Functional Limitations</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-lg-flex gap-5">
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Amputation</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Hearing</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Ambulation</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Dyspnea with Minimal Exertion</label></li>
                        </ul>
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Bowel/Bladder Incontinence</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Paralysis</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Speech</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Other</label></li>
                        </ul>
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Contracture</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Endurance</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Legally Blind</label></li>
                        </ul>
                     </div>
                     <div class="mt-2"><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> NA</label></div>
                  </td>
               </tr>

               <!-- Activities Permitted -->
               <tr>
                  <td colspan="3" class="text-center"><b>Activities Permitted</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-lg-flex gap-5">
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Complete bed rest</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Transfer bed-chair</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Independent at home</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Wheelchair</label></li>
                        </ul>
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Bed rest with BRP</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Exercise prescribed</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Crutches</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Walker</label></li>
                        </ul>
                        <ul style="padding: 0;margin: 0;list-style-type: none;">
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Up as tolerated</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Partial weight bearing</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Cane</label></li>
                           <li><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Other</label></li>
                        </ul>
                     </div>
                     <div class="mt-2"><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> NA</label></div>
                  </td>
               </tr>

               <!-- Invoice Comments -->
               <tr>
                  <td colspan="3" class="text-center"><b>Invoice Comments</b></td>
               </tr>
               <tr>
                  <td colspan="3"><textarea name="" id="" cols="30" rows="2" class="form-control"></textarea></td>
               </tr>

               <!-- Care Plan Comments / Additional Instructions -->
               <tr>
                  <td colspan="3" class="text-center"><b>Care Plan Comments / Additional Instructions</b></td>
               </tr>
               <tr>
                  <td colspan="3"><textarea name="" id="" cols="30" rows="4" class="form-control"></textarea></td>
               </tr>

               <!-- Vital Signs -->
               <tr>
                  <td colspan="3" class="text-center"><b>Vital Signs</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> N/A</label></div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Respiration</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Weight</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Height (in inches)</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Temperature</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Pulse</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Blood Glucose</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Oxygen Saturation</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="d-md-flex flex-wrap gap-5 mt-2">
                        <label class="fw-medium" for="date-sent">Blood Pressure</label>
                        <div class="clean-input-group w-75"><input type="text" id="date-sent" class="form-control"></div>
                     </div>
                     <div class="mt-2">
                        <label class="fw-medium" for="date-sent">Comments</label>
                        <textarea name="" id="" cols="30" rows="2" class="form-control"></textarea>
                     </div>
                  </td>
               </tr>

               <!-- Comments -->
               <tr>
                  <td colspan="3" class="text-center"><b>Comments</b></td>
               </tr>
               <tr>
                  <td colspan="3"><textarea name="" id="" cols="30" rows="6" class="form-control"></textarea></td>
               </tr>

               <!-- Signature: -->
               <tr>
                  <td colspan="3">
                     <div class="d-md-flex gap-3 justify-content-between">
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fs-6"><b>Clinician Signature:</b></span>
                           <input type="text" id="" class="form-control" style="min-width: 150px;">
                        </label>
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fs-6"><b>Date:</b></span>
                           <input type="date" id="" class="form-control" style="min-width: 150px;">
                        </label>
                      </div>
                  </td>
               </tr>
            </table>
         </form>
      </div><!--/ .form-holder -->
   </div>

</body>

</html>