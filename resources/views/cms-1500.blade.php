<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CMS-1500</title>   
   <link rel="stylesheet" href="{{asset('outass/bs/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('outass/css/style.css')}}">
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style>
   body {font-size: 14px;}
   .form-check-input{width: 1.2em;height: 1.2em;}
   #oasis-e-form label.form-check-label {font-weight: normal;}
   .form-label {margin-bottom: 1px;}
   #oasis-e-form .table td {padding-left: 0.5rem;padding-right: 0.5rem;}
   .form-control {padding: .27rem .4rem;font-size: 14px;}
   .min-w-110 {min-width: 110px;}
   @media screen {
      .table tr {position: relative;}
      .table tr::before {content: attr(data-text);position: absolute;top: 50%;transform: translateY(-50%);left: -12px;}
   }
   /* Print Ready */
   @media print {
      .row .col-md {
         flex: 1 0 0%;
      }
      .table-4 {
         max-width: 400px;
      }
   }
  </style>
</head>

<body>
   <div class="container pt-5 px-4" style="max-width: 1400px;">
      <div class="form-holder">
         <form action="" method="post" id="oasis-e-form">
            <table class="table table-borderless align-middle not-responsive mb-0 default-td">
               <tr>
                  <td style="width: 120px;" class="ps-0">
                     <label class="input-group">
                        <input type="text" id="" class="form-control">
                        <span class="input-group-text">PICA</span>
                     </label>
                  </td>
                  <td>
                     <h1 class="fs-2 text-center m-0">HEALTH INSURANCE CLAIM FORM</h1>
                  </td>
                  <td style="width: 120px;" class="pe-0">
                     <label class="input-group">
                        <span class="input-group-text">PICA</span>
                        <input type="text" id="" class="form-control">
                     </label>
                  </td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td">
               <tr>
                  <td colspan="2">
                     <div class="row row-flex gy-2">
                        <div class="col-auto">
                           1. MEDICARE<br>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> <i>(Medicare #)</i></label>
                        </div>
                        <div class="col-auto">
                           MEDICAID<br>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> <i>(Medicaid #)</i></label>
                        </div>
                        <div class="col-auto">
                           CHAMPUS<br>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> <i>(Sponsor’s SSN)</i></label>
                        </div>
                        <div class="col-auto">
                           CHAMPVA<br>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> <i>(VA File #)</i></label>
                        </div>
                        <div class="col-auto">
                           GROUP HEALTH PLAN<br>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> <i>(SSN or ID)</i></label>
                        </div>
                        <div class="col-auto">
                           FECA BLK LUNG<br>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> <i>(SSN)</i></label>
                        </div>
                        <div class="col-auto">
                           OTHER<br>
                           <label class="form-check-label"><input type="checkbox" class="form-check-input"> <i>(ID)</i></label>
                        </div>
                     </div>
                  </td>
                  <td>
                     <div class="row row-flex g-2">
                        <div class="col-md">
                           <label for="" class="form-label">1a. INSURED’S I.D. NUMBER</label>
                           <input type="text" name="" class="form-control">
                        </div>
                        <div class="col-md">
                           <label for="" class="form-label">(FOR PROGRAM IN ITEM 1)</label>
                           <input type="text" name="" class="form-control">
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label">2. PATIENT’S NAME (Last Name, First Name, Middle Initial)</label>
                     <div class="row row-flex g-2">
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td>
                     <div class="row align-items-center gy-2">
                        <div class="col-md">
                           <p class="mb-0">3. PATIENT’S BIRTH DATE</p>
                           <div class="row g-2">
                              <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                           </div>
                        </div>
                        <div class="col-md">
                           <p class="mb-0">SEX</p>
                           <div class="row gx-3 gy-2">
                              <div class="col-auto">
                                 <label class="form-check-label">M <input type="radio" name="sex" class="form-check-input"></label>
                              </div>
                              <div class="col-auto text-center">
                                 <label class="form-check-label">F <input type="radio" name="sex" class="form-check-input"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
                  <td>
                     <label for="" class="form-label">4. INSURED’S NAME (Last Name, First Name, Middle Initial)</label>
                     <div class="row row-flex g-2">
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label">5. PATIENT’S ADDRESS (No., Street)</label>
                     <textarea name="" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
                  <td>
                     <p class="mb-0">6. PATIENT RELATIONSHIP TO INSURED</p>
                     <div class="row gy-2">
                        <div class="col-auto"><label class="form-check-label">Self <input type="checkbox" class="form-check-input"></label></div>
                        <div class="col-auto"><label class="form-check-label">Spouse <input type="checkbox" class="form-check-input"></label></div>
                        <div class="col-auto"><label class="form-check-label">Child <input type="checkbox" class="form-check-input"></label></div>
                        <div class="col-auto"><label class="form-check-label">Other <input type="checkbox" class="form-check-input"></label></div>
                     </div>
                  </td>
                  <td>
                     <label for="" class="form-label">7. INSURED’S ADDRESS (No., Street)</label>
                     <textarea name="" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td>
                     <label for="" class="form-label">CITY</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td>
                     <label for="" class="form-label">STATE</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td rowspan="2">
                     <label for="" class="form-label">8. PATIENT STATUS</label>
                     <div class="row g-2">
                        <div class="col-auto"><label class="form-check-label">Single <input type="radio" name="pms" class="form-check-input"></label></div>
                        <div class="col-auto"><label class="form-check-label">Married <input type="radio" name="pms" class="form-check-input"></label></div>
                        <div class="col-auto"><label class="form-check-label">Other <input type="radio" name="pms" class="form-check-input"></label></div>
                     </div>
                     <div class="row g-2 mt-1">
                        <div class="col-auto"><label class="form-check-label">Employed <input type="radio" name="pws" class="form-check-input"></label></div>
                        <div class="col-auto"><label class="form-check-label">Full-Time Student <input type="radio" name="pws" class="form-check-input"></label></div>
                        <div class="col-auto"><label class="form-check-label">Part-Time Student <input type="radio" name="pws" class="form-check-input"></label></div>
                     </div>
                  </td>
                  <td>
                     <label for="" class="form-label">CITY</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td>
                     <label for="" class="form-label">STATE</label>
                     <input type="text" name="" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td>
                     <label for="" class="form-label">ZIP CODE</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td>
                     <label for="" class="form-label">TELEPHONE (Include Area Code)</label>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text">(</span>
                        <input type="text" id="" class="form-control">
                        <span class="input-group-text">)</span>
                     </label>
                  </td>
                  <td>
                     <label for="" class="form-label">ZIP CODE</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td>
                     <label for="" class="form-label">TELEPHONE (Include Area Code)</label>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text">(</span>
                        <input type="text" id="" class="form-control">
                        <span class="input-group-text">)</span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <p class="mb-0">9. OTHER INSURED’S NAME (Last Name, First Name, Middle Initial)</p>
                     <div class="row row-flex g-2">
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                        <div class="col-md"><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td rowspan="4">
                     <p class="mb-0">10. IS PATIENT’S CONDITION RELATED TO:</p>
                     <input type="text" name="" class="form-control">
                     <p class="mb-0 mt-2">a. EMPLOYMENT? (CURRENT OR PREVIOUS)</p>
                     <div class="row gy-2">
                        <div class="col-auto"><label class="form-check-label"><input type="radio" name="emp_cop" class="form-check-input"> YES</label></div>
                        <div class="col-auto"><label class="form-check-label"><input type="radio" name="emp_cop" class="form-check-input"> NO</label></div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <p class="mb-0 mt-2">b. AUTO ACCIDENT?</p>
                           <div class="row gy-2">
                              <div class="col-auto"><label class="form-check-label"><input type="radio" name="auto_acc" class="form-check-input"> YES</label></div>
                              <div class="col-auto"><label class="form-check-label"><input type="radio" name="auto_acc" class="form-check-input"> NO</label></div>
                           </div>
                        </div>
                        <div class="col-auto clean-input-group">
                           <label for="" class="form-label">PLACE (State)</label>
                           <input type="text" name="" class="form-control" style="width: 70px">
                        </div>
                     </div>
                     <p class="mb-0 mt-2">c. OTHER ACCIDENT?</p>
                     <div class="row gy-2">
                        <div class="col-auto"><label class="form-check-label"><input type="radio" name="other_acc" class="form-check-input"> YES</label></div>
                        <div class="col-auto"><label class="form-check-label"><input type="radio" name="other_acc" class="form-check-input"> NO</label></div>
                     </div>
                  </td>
                  <td colspan="2">
                     <label for="" class="form-label">11. INSURED’S POLICY GROUP OR FECA NUMBER</label>
                     <input type="text" name="" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="" class="form-label">a. OTHER INSURED’S POLICY OR GROUP NUMBER</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td colspan="2">
                     <p class="mb-0">a. INSURED’S DATE OF BIRTH</p>
                     <div class="row">
                        <div class="col">
                           <div class="row g-2">
                              <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                           </div>
                        </div>
                        <div class="col-auto">
                           <p class="text-center">SEX</p>
                           <label class="form-check-label me-2">M <input type="radio" name="idb_sex" class="form-check-input"></label>
                           <label class="form-check-label">M <input type="radio" name="idb_sex" class="form-check-input"></label>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <p class="mb-0">b. OTHER INSURED’S DATE OF BIRTH</p>
                     <div class="row">
                        <div class="col">
                           <div class="row g-2">
                              <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                           </div>
                        </div>
                        <div class="col-auto">
                           <p class="text-center">SEX</p>
                           <label class="form-check-label me-2">M <input type="radio" name="oidb_sex" class="form-check-input"></label>
                           <label class="form-check-label">M <input type="radio" name="oidb_sex" class="form-check-input"></label>
                        </div>
                     </div>
                  </td>
                  <td colspan="2">
                     <label for="" class="form-label">b. EMPLOYER’S NAME OR SCHOOL NAME</label>
                     <input type="text" name="" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="" class="form-label">c. EMPLOYER’S NAME OR SCHOOL NAME</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td colspan="2">
                     <label for="" class="form-label">c. INSURANCE PLAN NAME OR PROGRAM NAME</label>
                     <input type="text" name="" class="form-control">
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <label for="" class="form-label">d. INSURANCE PLAN NAME OR PROGRAM NAME</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td>
                     <label for="" class="form-label">10d. RESERVED FOR LOCAL USE</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td colspan="2">
                     <label for="" class="form-label">d. IS THERE ANOTHER HEALTH BENEFIT PLAN?</label>
                     <div class="d-block">
                        <label class="form-check-label me-2"><input type="radio" name="ahbp" class="form-check-input"> YES</label>
                        <label class="form-check-label me-3"><input type="radio" name="ahbp" class="form-check-input"> NO</label>
                        <span><b><i>If yes</i></b>, return to and complete item 9 a-d.</span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="3">
                     <p class="mb-0"><b>READ BACK OF FORM BEFORE COMPLETING & SIGNING THIS FORM.</b></p>
                     <p style="line-height: normal;"><small>12. PATIENT’S OR AUTHORIZED PERSON’S SIGNATURE I authorize the release of any medical or other information necessary to process this claim. I also request payment of government benefits either to myself or to the party who accepts assignment below.</small></p>
                     <div class="row">
                        <div class="col">
                           <label class="input-group clean-input-group">
                              <span class="input-group-text">SIGNED</span>
                              <input type="text" id="" class="form-control" style="min-width: 150px;">
                           </label>
                        </div>
                        <div class="col-auto">
                           <label class="input-group clean-input-group">
                              <span class="input-group-text">DATE</span>
                              <input type="date" id="" class="form-control" style="min-width: 150px;">
                           </label>
                        </div>
                     </div>
                  </td>
                  <td colspan="2">
                     <p style="line-height: normal;"><small>13. INSURED’S OR AUTHORIZED PERSON’S SIGNATURE I authorize payment of medical benefits to the undersigned physician or supplier for services described below.</small></p>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text">SIGNED</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="row">
                        <div class="col">
                           <p class="mb-0">14. DATE OF CURRENT:</p>
                           <div class="row g-2">
                              <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                           </div>
                        </div>
                        <div class="col">
                           <p class="mb-0">ILLNESS (First symptom) OR INJURY (Accident) OR PREGNANCY(LMP)</p>
                           <input type="text" name="" class="form-control">
                        </div>
                     </div>
                  </td>
                  <td colspan="2">
                     <p class="mb-0">15. IF PATIENT HAS HAD SAME OR SIMILAR ILLNESS.</p>
                     <div class="row align-items-center">
                        <div class="col-auto">GIVE FIRST DATE</div>
                        <div class="col">
                           <div class="row g-2">
                              <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                              <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                           </div>
                        </div>
                     </div>
                  </td>
                  <td colspan="2">
                     <p class="mb-0">16. DATES PATIENT UNABLE TO WORK IN CURRENT OCCUPATION</p>
                     <div class="row">
                        <div class="col">
                           <div class="row align-items-center">
                              <div class="col-auto">FROM</div>
                              <div class="col">
                                 <div class="row g-2">
                                    <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="row align-items-center">
                              <div class="col-auto">TO</div>
                              <div class="col">
                                 <div class="row g-2">
                                    <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p class="mb-0">17. NAME OF REFERRING PHYSICIAN OR OTHER SOURCE</p>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td colspan="2">
                     <p class="mb-0">17a. I.D. NUMBER OF REFERRING PHYSICIAN</p>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td colspan="2">
                     <p class="mb-0">18. HOSPITALIZATION DATES RELATED TO CURRENT SERVICES</p>
                     <div class="row">
                        <div class="col">
                           <div class="row align-items-center">
                              <div class="col-auto">FROM</div>
                              <div class="col">
                                 <div class="row g-2">
                                    <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="row align-items-center">
                              <div class="col-auto">TO</div>
                              <div class="col">
                                 <div class="row g-2">
                                    <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                                    <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="3">
                     <p class="mb-0">19. RESERVED FOR LOCAL USE</p>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td colspan="2">
                     <div class="row g-2">
                        <div class="col">
                           <p class="mb-0">20. OUTSIDE LAB?</p>
                           <label class="form-check-label me-2"><input type="radio" name="oslab" class="form-check-input"> YES</label>
                           <label class="form-check-label"><input type="radio" name="oslab" class="form-check-input"> NO</label>
                        </div>
                        <div class="col">
                           <p class="mb-0">$ CHARGES</p>
                           <input type="text" name="" class="form-control">
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="3" rowspan="2">
                     <p class="mb-0">21. DIAGNOSIS OR NATURE OF ILLNESS OR INJURY. (RELATE ITEMS 1,2,3 OR 4 TO ITEM 24E BY LINE)</p>
                     <div class="row">
                        <div class="col">
                           <label class="input-group clean-input-group mt-2">
                              <span class="input-group-text">1</span>
                              <input type="text" id="" class="form-control" style="min-width: 150px;">
                           </label>
                           <label class="input-group clean-input-group mt-2">
                              <span class="input-group-text">2</span>
                              <input type="text" id="" class="form-control" style="min-width: 150px;">
                           </label>
                        </div>
                        <div class="col">
                           <label class="input-group clean-input-group mt-2">
                              <span class="input-group-text">3</span>
                              <input type="text" id="" class="form-control" style="min-width: 150px;">
                           </label>
                           <label class="input-group clean-input-group mt-2">
                              <span class="input-group-text">4</span>
                              <input type="text" id="" class="form-control" style="min-width: 150px;">
                           </label>
                        </div>
                     </div>
                  </td>
                  <td colspan="2">
                     <p class="mb-0">22. MEDICAID RESUBMISSION</p>
                     <div class="row g-2">
                        <div class="col">
                           <p class="mb-0">CODE</p>
                           <input type="text" name="" class="form-control">
                        </div>
                        <div class="col">
                           <p class="mb-0">ORIGINAL REF. NO.</p>
                           <input type="text" name="" class="form-control">
                        </div>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td colspan="2">
                     <p class="mb-0">23. PRIOR AUTHORIZATION NUMBER</p>
                     <input type="text" name="" class="form-control">
                  </td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td table-4" style="margin-top: -1px;">
               <tr>
                  <td colspan="2">24. A</td>
                  <td class="text-center">B</td>
                  <td class="text-center">C</td>
                  <td colspan="2" class="text-center">D</td>
                  <td class="text-center">E</td>
                  <td class="text-center">F</td>
                  <td class="text-center">G</td>
                  <td class="text-center">H</td>
                  <td class="text-center">I</td>
                  <td class="text-center">J</td>
                  <td class="text-center">K</td>
               </tr>
               <tr>
                  <td colspan="2" class="align-bottom" style="width: 25%;min-width: 260px;">
                     <p class="mb-0 text-center">DATE(S) OF SERVICE</p>
                     <div class="row">
                        <div class="col"><p class="mb-0 text-center">From</p></div>
                        <div class="col"><p class="mb-0 text-center">To</p></div>
                     </div>
                  </td>
                  <td class="text-center" style="width: 60px;">Place<br>of<br>Service</td>
                  <td class="text-center" style="width: 60px;">Type<br>of<br>Service</td>
                  <td colspan="2" style="min-width: 180px;">
                     <p class="mb-0 text-center">PROCEDURES, SERVICES, OR SUPPLIES<br>(Explain Unusual Circumstances)</p>
                     <div class="row">
                        <div class="col text-center">CPT/HCPCS</div>
                        <div class="col text-center">MODIFIER</div>
                     </div>
                  </td>
                  <td class="text-center" style="width: 60px;">DIAGNOSIS<br>CODE</td>
                  <td class="text-center" style="width: 90px;">$ CHARGES</td>
                  <td class="text-center" style="width: 60px;">DAYS<br>OR<br>UNITS</td>
                  <td class="text-center" style="width: 60px;">EPSDT<br>Family<br>Plan</td>
                  <td class="text-center" style="width: 60px;">EMG</td>
                  <td class="text-center" style="width: 60px;">COB</td>
                  <td class="text-center" style="width: 60px;">RESERVED FOR<br>LOCAL USE</td>
               </tr>
               <tr data-text="1">
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr data-text="2">
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr data-text="3">
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr data-text="4">
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr data-text="5">
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr data-text="6">
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td>
                     <div class="row gx-2">
                        <div class="col text-center"><label for="" class="form-label">MM</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">DD</label><br><input type="text" name="" class="form-control"></div>
                        <div class="col text-center"><label for="" class="form-label">YY</label><br><input type="text" name="" class="form-control"></div>
                     </div>
                  </td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td>
                     <div class="row g-2">
                        <div class="col">25. FEDERAL TAX I.D. NUMBER</div>
                        <div class="col-auto">
                           <div class="row g-2">
                              <div class="col">
                                 <label for="">SSN</label><br>
                                 <input type="checkbox" class="form-check-input">
                              </div>
                              <div class="col">
                                 <label for="">EIN</label><br>
                                 <input type="checkbox" class="form-check-input">
                              </div>
                           </div>
                        </div>
                     </div>
                  </td>
                  <td>
                     <label for="" class="form-label">26. PATIENT’S ACCOUNT NO.</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td>
                     <p class="mb-0">27. ACCEPT ASSIGNMENT?<br>(For govt. claims, see back)</p>
                     <label class="form-check-label me-2"><input type="radio" name="aa_gcs" class="form-check-input"> YES</label>
                     <label class="form-check-label"><input type="radio" name="aa_gcs" class="form-check-input"> NO</label>
                  </td>
                  <td>
                     <p class="mb-0">28. TOTAL CHARGE</p>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text">$</span>
                        <input type="text" id="" class="form-control" style="min-width: 100px;">
                     </label>
                  </td>
                  <td>
                     <p class="mb-0">29. AMOUNT PAID</p>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text">$</span>
                        <input type="text" id="" class="form-control" style="min-width: 100px;">
                     </label>
                  </td>
                  <td>
                     <p class="mb-0">30. BALANCE DUE</p>
                     <label class="input-group clean-input-group mt-2">
                        <span class="input-group-text">$</span>
                        <input type="text" id="" class="form-control" style="min-width: 100px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p class="mb-0">31. SIGNATURE OF PHYSICIAN OR SUPPLIER
                        INCLUDING DEGREES OR CREDENTIALS
                        (I certify that the statements on the reverse
                        apply to this bill and are made a part thereof.)</p>
                        <div class="row mt-4 gy-2">
                           <div class="col">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text">SIGNED</span>
                                 <input type="text" id="" class="form-control" style="min-width: 100px;">
                              </label>
                           </div>
                           <div class="col-auto">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text">DATE</span>
                                 <input type="date" id="" class="form-control" style="min-width: 100px;">
                              </label>
                           </div>
                        </div>
                  </td>
                  <td colspan="2">
                     <p class="mb-2">32. NAME AND ADDRESS OF FACILITY WHERE SERVICES WERE
                        RENDERED <small>(If other than home or office)</small></p>
                     <textarea name="" id="" cols="30" rows="1" class="form-control"></textarea>
                  </td>
                  <td colspan="3">
                     <p class="mb-0">33. PHYSICIAN’S, SUPPLIER’S BILLING NAME, ADDRESS, ZIP CODE
                        & PHONE #</p>
                        <div class="row mt-4">
                           <div class="col">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text">PIN#</span>
                                 <input type="text" id="" class="form-control" style="min-width: 100px;">
                              </label>
                           </div>
                           <div class="col-auto">
                              <label class="input-group clean-input-group">
                                 <span class="input-group-text">GRP#</span>
                                 <input type="text" id="" class="form-control" style="min-width: 100px;">
                              </label>
                           </div>
                        </div>
                  </td>
               </tr>
            </table>
            <table class="table table-borderless align-middle not-responsive default-td mb-5">
               <tr>
                  <td>(APPROVED BY AMA COUNCIL ON MEDICAL SERVICE 8/88)</td>
                  <td class="text-center"><b><i>PLEASE PRINT OR TYPE</i></b></td>
                  <td class="text-center">FORM HCFA-1500 (12-90), FORM RRB-1500,
                     FORM OWCP-1500</td>
               </tr>
            </table>
         </form>
      </div><!--/ .form-holder -->
   </div>

   <script src="bs/js/bootstrap.min.js"></script>
</body>

</html>