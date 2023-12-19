@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/refarral/style.css') }}" />
@endsection

@section('content')

    <main>
        <form action="{{ route('referrals.store') }}" method="post" enctype="multipart/form-data">
            @csrf
               <div class="container">
                  <div class="form-holder pt-5 pb-5">
                     <div class="form-heading">

                     </div>
                        <div class="row row-flex flex-md-row-reverse align-items-center">
                           <div class="col-lg-7">
                              <h1 class="text-lg-end text-uppercase">HOME HEALTH SERVICES REQUEST</h1>
                           </div>
                           <div class="col-lg-5">
                              <table class="table table-borderless align-middle m-0">
                                 <tr>
                                    <td style="max-width: 140px;" class="p-0">
                                       <h4>TYPE OF VISIT:</h4>
                                    </td>
                                    <td class="labels-group p-0">
                                       <label class="form-check-label"><input type="radio" name="type_of_visit" value="initial"
                                             class="form-check-input"> INITIAL</label>
                                       <label class="form-check-label"><input type="radio" name="type_of_visit" value="change"
                                             class="form-check-input"> CHANGE OF ORDER</label>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                        </div>

                        <div class="form-fields-wrapper">
                           <div class="request-data">
                              <table class="table table-bordered align-middle m-0 bg-white rounded-top">
                                 <tr>
                                    <td>
                                       <label for="">SERVICE REQUEST FROM-NAME AND ADDRESS</label>
                                       <input type="text" id="" name="service_req_name_address" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">DATE OF REQUEST</label>
                                       <input type="date" id="" name="date_of_request" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">REPLY TO-NAME, DEPARTMENT OR CLINIC, TITLE</label>
                                       <input type="text" id="" name="reply_name_dept" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">TELEPHONE AND EXT</label>
                                       <input type="text" id="" name="telephone_ext" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="d-inline-block me-3">
                                          <label for="">PHYSICIAN ORDERED SOC DATE (MO102)</label>
                                          <input type="date" id="" name="phy_order_soc_date" class="form-control">
                                       </div>

                                       <div class="d-inline-block">
                                          <label class="form-check-label"><input type="checkbox" name="na_no_specidic_soc" class="form-check-input">
                                             NA-NO SPECIFIC SOC DATE ORDERED BY PHYSICIAN</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">UPDATED REFERRAL DATE (MO104)</label>
                                       <input type="date" id="" name="updated_reff_date" class="form-control">
                                    </td>
                                 </tr>
                              </table>
                           </div>

                           <div class="patient-info">
                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">PATIENT NAME-LAST, FIRST, MIDDLE</label>
                                       <input type="text" id="" name="patient_full_name" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">DATE OF BIRTH</label>
                                       <input type="date" id="" name="patient_dob" class="form-control">
                                    </td>
                                    <td class="labels-group">
                                       <label class="form-check-label"><input type="radio" value="male" name="gender" class="form-check-input">
                                          MALE</label>
                                       <label class="form-check-label"><input type="radio" value="female" name="gender" class="form-check-input">
                                          FEMALE</label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">ADDRESS - NO. AND STREET, CITY, BOROUGH, STATE</label>
                                       <input type="text" id="" name="patient_full_address" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">APT. NO. AND FLOOR</label>
                                       <input type="text" id="" name="apt_no" class="form-control">
                                    </td>
                                    <td class="labels-group">
                                       <label for="">TELEPHONE NO.</label>
                                       <input type="text" id="" name="telephone_no" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">ADDRESS WHERE PATIENT IS TO BE VISITED-NO. AND STREET, CITY, BOROUGH, STATE
                                          (Care
                                          of Name)</label>
                                       <input type="text" id="" name="patient_visite_address" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">APT. NO. AND FLOOR</label>
                                       <input type="text" id="" name="patient_visite_apt" class="form-control">
                                    </td>
                                    <td class="labels-group">
                                       <label for="">TELEPHONE NO.</label>
                                       <input type="text" id="" name="patient_visite_phone" class="form-control">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">MEDICARE NO.</label>
                                       <input type="text" id="" name="medicare_no" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">MEDICAID OR DSS IDENTIFICATION NO.</label>
                                       <input type="text" id="" name="medicare_od_dss" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">AUTHORIZATION REQUIRED:</label>
                                       <div class="labels-groug">
                                          <label class="form-check-label"><input type="radio" name="authorization_required" value="yes"
                                                class="form-check-input"> Yes</label>
                                          <label class="form-check-label"><input type="radio" name="authorization_required" value="no"
                                                class="form-check-input"> No</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">AUTHORIZATION RECEIVED:</label>
                                       <div class="labels-groug">
                                          <label class="form-check-label"><input type="radio" name="authorization_received" value="yes"
                                                class="form-check-input"> Yes</label>
                                          <label class="form-check-label"><input type="radio" name="authorization_received" value="no"
                                                class="form-check-input"> No</label>
                                       </div>
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">OTHER INSURANCE CARRIER</label>
                                       <input type="text" id="" name="other_ins" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">POLICY NO. OR CLAIM NO.</label>
                                       <input type="text" id="" name="policy_no" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">TYPE OF COVERAGE</label>
                                       <input type="text" id="" name="type_of_coverage" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">HOSPITAL OR PAC ADMISSION DATE</label>
                                       <input type="date" id="" name="hospital_or_pac_add_date" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">HOSPITAL OR PAC DISCHARGE DATE</label>
                                       <input type="date" id="" name="hospital_or_pac_diss_date" class="form-control">
                                    </td>
                                    <td>
                                    </td>
                                 </tr>
                              </table>
                           </div>

                           <div class="medical-information">
                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">PRIMARY DIAGNOSIS</label>
                                       <input type="text" id="" name="primary_diagnosis" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">SECONDARY DIAGNOSIS</label>
                                       <input type="text" id="" name="secondary_diagnosis" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">SURGERY AND DATES</label>
                                       <input type="date" id="" name="surgery_date" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">SIGNIFICANT MEDICAL AND SURGICAL HISTORY (Include functional
                                          limitations)</label>
                                       <input type="text" id="" name="signafiq_med_surg_history" class="form-control">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">PROGNOSIS</label>
                                       <input type="text" id="" name="prognosis" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">THERAPEUTIC GOALS</label>
                                       <input type="text" id="" name="therapeutic_goals" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="labels-group">
                                       <label for="">DIAGNOSIS KNOWN BY:</label>
                                       <div class="d-inline-block">
                                          <label class="form-check-label"><input type="radio" value="patient" name="diagnosis_known_by" class="form-check-input">
                                             PATIENT</label>
                                          <label class="form-check-label"><input type="radio" value="family" name="diagnosis_known_by" class="form-check-input">
                                             FAMILY</label>
                                          <label class="form-check-label"><input type="radio" value="other" name="diagnosis_known_by" class="form-check-input">
                                             OTHER-EXPLAIN</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label class="form-check-label"><input type="checkbox" name="not_kown_explain" class="form-check-input"> NOT
                                          KNOWN-EXPLAIN</label>
                                    </td>
                                 </tr>
                              </table>
                           </div>

                           <div class="physician-order">
                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td colspan="2" class="labels-groug">
                                       <label for="">TREATMENTS, MEDICATIONS, DIET, ACTIVITY PERMITTED -</label>
                                       <div class="d-inline-block">
                                          <label class="form-check-label"><input type="checkbox" name="doc_request" class="form-check-input">
                                             DOCUMENTATION REQUESTED</label>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">CONFIRMED COMMUNITY PHYSICIAN WILL PROVIDE ORDERS/POC:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="provide_orders" value="yes"
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="provide_orders" value="no"
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">PHYSICIAN/PROVIDER NAME</label>
                                       <input type="text" id="" name="physician_provider" class="form-control">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">MEDICAL SUPERVISION AT HOME PROVIDED BY-NAME AND ADDRESS OF PHYSICIAN OR
                                          CLINIC</label>
                                       <input type="text" id="" name="clinic" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">TELEPHONE NO.</label>
                                       <input type="text" id="" name="clinic_phone" class="form-control">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">PATIENT ESSENTIALLY HOMEBOUND:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="patient_essentially_homebound" value="yes"
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="patient_essentially_homebound" value="no"
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">ESTIMATE OF PATIENT'S NEED FOR HOME HEALTH SERVICES:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="home_health_services" value="weeks"
                                                class="form-check-input"> WEEKS</label>
                                          <label class="form-check-label"><input type="radio" name="home_health_services" value="month"
                                                class="form-check-input"> MONTHS</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">THIS PLAN OF CARE IS RELATED TO CONDITION FOR WHICH PATIENT WAS
                                          HOSPITALIZED:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="condition_for_which_patient" value="yes"
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="condition_for_which_patient" value="no"
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">I CERTIFY THE PATIENT NEEDS HOME HEALTH SERVICES:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="checkbox" name="skilled_nursing" class="form-check-input">
                                             SKILLED NURSING</label>
                                          <label class="form-check-label"><input type="checkbox" name="pt" class="form-check-input">
                                             PT</label>
                                          <label class="form-check-label"><input type="checkbox" name="ot" class="form-check-input">
                                             OT</label>
                                          <label class="form-check-label"><input type="checkbox" name="slp" class="form-check-input">
                                             SLP</label>
                                          <label class="form-check-label"><input type="checkbox" name="mss" class="form-check-input">
                                             MSS</label>
                                          <label class="form-check-label"><input type="checkbox" name="other" class="form-check-input">
                                             OTHER (Specify):</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">PHYSICIAN'S SIGNATURE</label>
                                    </td>
                                    <td>
                                       <label for="">DATE</label>
                                       <input type="date" name="physician_signature_date" id="" class="form-control">
                                    </td>
                                 </tr>
                              </table>
                           </div>

                           <div class="nursing-information">
                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">NURSING/THERAPY ASSESSMENT AND RECOMMENDATIONS (Include symptoms and reactions
                                          to be observed, techniques to be taught, related to face-to-face)</label>
                                       <textarea name="nursing_therapy_assignment" id="" cols="30" rows="4" class="form-control"></textarea>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">MEDICATIONS, SUPPLIES, EQUIPMENT NEEDED (Specify Items)</label>
                                       <input type="text" name="med_sup_eqp" id="" class="form-control">
                                    </td>
                                 </tr>
                              </table>
                           </div>

                           <div class="others">
                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">ADMITTED:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="admitted" value="yes"
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="admitted" value="no"
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">STAFF ASSIGNED FOR ADMISSION</label>
                                       <input type="text" id="" name="staff_assigned_add" class="form-control">
                                    </td>
                                    <td>
                                       <label for="">REASON WHY NOT ADMITTED</label>
                                       <input type="text" id="" name="reason_for_addmitted" class="form-control">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td colspan="2">
                                       <label for="">OTHER PROFESSIONAL ASSESSMENTS AND RECOMMENDATIONS ATTACHED
                                          (Triplicate)</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_pt" class="form-check-input">
                                             PT</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_ot" class="form-check-input">
                                             OT</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_slp" class="form-check-input">
                                             SLP</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_msw" class="form-check-input">
                                             MSW</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_md" class="form-check-input">
                                             MD</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_other" class="form-check-input">
                                             OTHER (Specify):</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">AGENCY STAFF SIGNATURE</label>
                                    </td>
                                 </tr>
                              </table>
                           </div>
                            <div class="row p-5">
                                <button class="btn ho xi ye" type="submit">Submit</button>
                            </div>
                        </div>
                  </div>
               </div>
        </form>
    </main>

@endsection
