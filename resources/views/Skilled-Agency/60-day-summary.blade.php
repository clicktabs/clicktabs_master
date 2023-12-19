@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/nursingVisitNote/style.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/oasisCss/style_page14.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/patients-admission.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/patient/communication/style.css') }}" />

@endsection
@section('content')
<main>
</head>

<body>
   <div class="container-fluid pt-5 px-4">
      <div class="vt p-2">@include('layouts.company_info')</div>
      <div class="form-holder vt">
         <form action="" method="post">
            <table class="table table-bordered align-middle mb-5">
               <tr>
                  <td>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">Client Name:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Care Period:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>

                  <td>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium">MRN:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text fw-medium">Physician:</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>

                  <td>
                     <div class="row align-items-end gy-2">
                        <div class="col">
                           <label class="input-group clean-input-group">
                              <span class="input-group-text fw-medium">DOB:</span>
                              <input type="text" id="" class="form-control" style="min-width: 100px;">
                           </label>
                           <label class="input-group clean-input-group mt-2">
                              <span class="input-group-text fw-medium">DNR:</span>
                              <input type="text" id="" class="form-control" style="min-width: 100px;">
                           </label>
                        </div>
                        <div class="col-auto">
                           <label class="input-group clean-input-group">
                              <span class="input-group-text fw-medium">No</span>
                              <input type="text" id="" class="form-control" style="min-width: 100px;">
                           </label>
                        </div>
                     </div>
                  </td>
               </tr>

               <!-- Patient Condition -->
               <tr>
                  <td colspan="3" class="text-center"><b>Patient Condition</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-md-flex gap-3 justify-content-around">
                        <div><label class="form-check-label fw-medium"><input type="radio" name="PatientCondition" class="form-check-input"> Stable</label></div>
                        <div><label class="form-check-label fw-medium"><input type="radio" name="PatientCondition" class="form-check-input"> Improved</label></div>
                        <div><label class="form-check-label fw-medium"><input type="radio" name="PatientCondition" class="form-check-input"> Unchanged</label></div>
                        <div><label class="form-check-label fw-medium"><input type="radio" name="PatientCondition" class="form-check-input"> Unstable</label></div>
                        <div><label class="form-check-label fw-medium"><input type="radio" name="PatientCondition" class="form-check-input"> Declined</label></div>
                     </div>
                  </td>
               </tr>

               <!-- Service(s) Provided -->
               <tr>
                  <td colspan="3" class="text-center"><b>Service(s) Provided</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-md-flex gap-3 justify-content-around align-items-center">
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> SN</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> PT</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> OT</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> ST</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> MSW</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> HHA</label></div>
                        <div>
                           <label class="clean-input-group d-inline-flex gap-1">
                              <input type="checkbox" name="" class="form-check-input">
                              <span class="fw-medium position-relative" style="top: 3px;">Other</span>
                              <input type="text" id="" class="form-control" style="width: 120px;">
                           </label>
                        </div>
                     </div>
                  </td>
               </tr>

               <!-- Vital Sign Ranges -->
               <tr>
                  <td colspan="3" class="text-center"><b>Vital Sign Ranges</b></td>
               </tr>
               <tr>
                  <td colspan="3" class="px-0">
                     <table class="table table-borderless align-middle mb-0 fw-medium text-center">
                        <tr>
                           <td class="py-0"></td>
                           <td class="py-0">BPsys</td>
                           <td class="py-0">BPdia</td>
                           <td class="py-0">HR</td>
                           <td class="py-0">Resp</td>
                           <td class="py-0">Temp</td>
                           <td class="py-0">Weight</td>
                           <td class="py-0">BS</td>
                           <td class="py-0">Pain</td>
                        </tr>
                        <tr>
                           <td>Lowest</td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                        </tr>
                        <tr>
                           <td>Highest</td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                           <td class="clean-input-group pt-0"><input type="text" id="" class="form-control"></td>
                        </tr>
                     </table>
                  </td>
               </tr>

               <!-- Summary of Care Provided -->
               <tr>
                  <td colspan="3" class="text-center"><b>Summary of Care Provided</b></td>
               </tr>
               <tr>
                  <td colspan="3"><textarea name="" id="" cols="30" rows="2" class="form-control"></textarea></td>
               </tr>

               <!-- Patient’s Current Condition -->
               <tr>
                  <td colspan="3" class="text-center"><b>Patient’s Current Condition</b></td>
               </tr>
               <tr>
                  <td colspan="3"><textarea name="" id="" cols="30" rows="2" class="form-control"></textarea></td>
               </tr>

               <!-- Goals -->
               <tr>
                  <td colspan="3" class="text-center"><b>Goals</b></td>
               </tr>
               <tr>
                  <td colspan="3"><textarea name="" id="" cols="30" rows="2" class="form-control"></textarea></td>
               </tr>

               <!-- Recommended Services -->
               <tr>
                  <td colspan="3" class="text-center"><b>Recommended Services</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-md-flex gap-3 justify-content-around align-items-center">
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> SN</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> PT</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> OT</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> ST</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> MSW</label></div>
                        <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> HHA</label></div>
                        <div>
                           <label class="clean-input-group d-inline-flex gap-1">
                              <input type="checkbox" name="" class="form-check-input">
                              <span class="fw-medium position-relative" style="top: 3px;">Other</span>
                              <input type="text" id="" class="form-control" style="width: 120px;">
                           </label>
                        </div>
                     </div>
                  </td>
               </tr>

               <!-- Notifications -->
               <tr>
                  <td colspan="3" class="text-center"><b>Notifications</b></td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div><label class="form-check-label fw-medium"><input type="checkbox" name="" class="form-check-input"> Summary Sent to Physician</label></div>
                      <div class="d-flex flex-wrap gap-3 justify-content-between mt-2">
                        <label class="fw-medium" for="date-sent">Date Sent</label>
                        <div class="clean-input-group w-50"><input type="date" id="date-sent" class="form-control"></div>
                      </div>
                  </td>
               </tr>

               <!-- Signatures & Dates -->
               <tr>
                  <td colspan="3">
                     <div class="d-md-flex gap-3 justify-content-between">
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fw-medium">Signature:</span>
                           <input type="text" id="" class="form-control" style="min-width: 150px;">
                        </label>
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fw-medium">Date:</span>
                           <input type="date" id="" class="form-control" style="min-width: 150px;">
                        </label>
                      </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-md-flex gap-3 justify-content-between">
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fw-medium">Signature:</span>
                           <input type="text" id="" class="form-control" style="min-width: 150px;">
                        </label>
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fw-medium">Date:</span>
                           <input type="date" id="" class="form-control" style="min-width: 150px;">
                        </label>
                      </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="3">
                     <div class="d-md-flex gap-3 justify-content-between">
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fw-medium">Signature:</span>
                           <input type="text" id="" class="form-control" style="min-width: 150px;">
                        </label>
                        <label class="input-group clean-input-group">
                           <span class="input-group-text fw-medium">Date:</span>
                           <input type="date" id="" class="form-control" style="min-width: 150px;">
                        </label>
                      </div>
                  </td>
               </tr>
            </table>
         </form>
      </div><!--/ .form-holder -->
   </div>


   @endsection
   
   @section('extra_js')