@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{ asset('assets/refarral/style.css') }}" />
@endsection

@section('content')

    <main>
        <form action="{{ route('referrals.update', $referral->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                                       <label class="form-check-label"><input type="radio" name="type_of_visit" value="initial" {{ $referral->type_of_visit === 'initial' ? 'checked' : '' }}
                                             class="form-check-input"> INITIAL</label>
                                       <label class="form-check-label"><input type="radio" name="type_of_visit" value="change" {{ $referral->type_of_visit === 'change' ? 'checked' : '' }}
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
                                            <label for="service_req_name_address">SERVICE REQUEST FROM-NAME AND ADDRESS</label>
                                            <input type="text" id="service_req_name_address" name="service_req_name_address" class="form-control" value="{{$referral->service_req_name_address ? $referral->service_req_name_address : '' }}">
                                        </td>
                                        <td>
                                            <label for="date_of_request">DATE OF REQUEST</label>
                                            <input type="date" id="date_of_request" name="date_of_request" class="form-control" value="{{$referral->date_of_request ? $referral->date_of_request : '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="reply_name_dept">REPLY TO-NAME, DEPARTMENT OR CLINIC, TITLE</label>
                                            <input type="text" id="reply_name_dept" name="reply_name_dept" class="form-control" value="{{$referral->reply_name_dept ? $referral->reply_name_dept : '' }}">
                                        </td>
                                        <td>
                                            <label for="telephone_ext">TELEPHONE AND EXT</label>
                                            <input type="text" id="telephone_ext" name="telephone_ext" class="form-control" value="{{$referral->telephone_ext ? $referral->telephone_ext : '' }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-inline-block me-3">
                                                <label for="phy_order_soc_date">PHYSICIAN ORDERED SOC DATE (MO102)</label>
                                                <input type="date" id="phy_order_soc_date" name="phy_order_soc_date" class="form-control" value="{{$referral->phy_order_soc_date ? $referral->phy_order_soc_date : '' }}">
                                            </div>

                                            <div class="d-inline-block">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="na_no_specidic_soc" class="form-check-input" {{ $referral->na_no_specidic_soc ? 'checked' : '' }}>
                                                    NA-NO SPECIFIC SOC DATE ORDERED BY PHYSICIAN
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <label for="updated_reff_date">UPDATED REFERRAL DATE (MO104)</label>
                                            <input type="date" id="updated_reff_date" name="updated_reff_date" class="form-control" value="{{$referral->telephone_ext ? $referral->telephone_ext : '' }}">
                                        </td>
                                    </tr>
                                </table>
                            </div>

                           <div class="patient-info">
                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">PATIENT NAME-LAST, FIRST, MIDDLE</label>
                                       <input type="text" id="" name="patient_full_name" class="form-control" value="{{$referral->patient_full_name ? $referral->patient_full_name : '' }}">
                                    </td>
                                    <td>
                                       <label for="">DATE OF BIRTH</label>
                                       <input type="date" id="" name="patient_dob" class="form-control" value="{{$referral->patient_dob ? $referral->patient_dob : '' }}">
                                    </td>
                                    <td class="labels-group">
                                       <label class="form-check-label"><input type="radio" value="male" name="gender" {{ $referral->gender ? 'checked' : '' }} class="form-check-input">
                                          MALE</label>
                                       <label class="form-check-label"><input type="radio" value="female" name="gender" {{ $referral->gender ? 'checked' : '' }} class="form-check-input">
                                          FEMALE</label>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">ADDRESS - NO. AND STREET, CITY, BOROUGH, STATE</label>
                                       <input type="text" id="" name="patient_full_address" class="form-control" value="{{$referral->patient_full_address ? $referral->patient_full_address : '' }}">
                                    </td>
                                    <td>
                                       <label for="">APT. NO. AND FLOOR</label>
                                       <input type="text" id="" name="apt_no" class="form-control" value="{{$referral->apt_no ? $referral->apt_no : '' }}">
                                    </td>
                                    <td class="labels-group">
                                       <label for="">TELEPHONE NO.</label>
                                       <input type="text" id="" name="telephone_no" class="form-control" value="{{$referral->telephone_no ? $referral->telephone_no : '' }}">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">ADDRESS WHERE PATIENT IS TO BE VISITED-NO. AND STREET, CITY, BOROUGH, STATE
                                          (Care
                                          of Name)</label>
                                       <input type="text" id="" name="patient_visite_address" class="form-control" value="{{$referral->patient_visite_address ? $referral->patient_visite_address : '' }}">
                                    </td>
                                    <td>
                                       <label for="">APT. NO. AND FLOOR</label>
                                       <input type="text" id="" name="patient_visite_apt" class="form-control" value="{{$referral->patient_visite_apt ? $referral->patient_visite_apt : '' }}">
                                    </td>
                                    <td class="labels-group">
                                       <label for="">TELEPHONE NO.</label>
                                       <input type="text" id="" name="patient_visite_phone" class="form-control" value="{{$referral->patient_visite_phone ? $referral->patient_visite_phone : '' }}">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">MEDICARE NO.</label>
                                       <input type="text" id="" name="medicare_no" class="form-control" value="{{$referral->patient_dob ? $referral->patient_dob : '' }}">
                                    </td>
                                    <td>
                                       <label for="">MEDICAID OR DSS IDENTIFICATION NO.</label>
                                       <input type="text" id="" name="medicare_od_dss" class="form-control" value="{{$referral->patient_dob ? $referral->patient_dob : '' }}">
                                    </td>
                                    <td>
                                       <label for="">AUTHORIZATION REQUIRED:</label>
                                       <div class="labels-groug">
                                          <label class="form-check-label"><input type="radio" name="authorization_required" value="yes" {{ $referral->authorization_required ? 'checked' : '' }}
                                                class="form-check-input"> Yes</label>
                                          <label class="form-check-label"><input type="radio" name="authorization_required" value="no" {{ $referral->authorization_required ? 'checked' : '' }}
                                                class="form-check-input"> No</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">AUTHORIZATION RECEIVED:</label>
                                       <div class="labels-groug">
                                          <label class="form-check-label"><input type="radio" name="authorization_received" value="yes" {{ $referral->authorization_received ? 'checked' : '' }}
                                                class="form-check-input"> Yes</label>
                                          <label class="form-check-label"><input type="radio" name="authorization_received" value="no" {{ $referral->authorization_received ? 'checked' : '' }}
                                                class="form-check-input"> No</label>
                                       </div>
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">OTHER INSURANCE CARRIER</label>
                                       <input type="text" id="" name="other_ins" class="form-control" value="{{$referral->other_ins ? $referral->other_ins : '' }}">
                                    </td>
                                    <td>
                                       <label for="">POLICY NO. OR CLAIM NO.</label>
                                       <input type="text" id="" name="policy_no" class="form-control" value="{{$referral->policy_no ? $referral->policy_no : '' }}">
                                    </td>
                                    <td>
                                       <label for="">TYPE OF COVERAGE</label>
                                       <input type="text" id="" name="type_of_coverage" class="form-control" value="{{$referral->type_of_coverage ? $referral->type_of_coverage : '' }}">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">HOSPITAL OR PAC ADMISSION DATE</label>
                                       <input type="date" id="" name="hospital_or_pac_add_date" class="form-control" value="{{$referral->hospital_or_pac_add_date ? $referral->hospital_or_pac_add_date : '' }}">
                                    </td>
                                    <td>
                                       <label for="">HOSPITAL OR PAC DISCHARGE DATE</label>
                                       <input type="date" id="" name="hospital_or_pac_diss_date" class="form-control" value="{{$referral->hospital_or_pac_diss_date ? $referral->hospital_or_pac_diss_date : '' }}">
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
                                       <input type="text" id="" name="primary_diagnosis" class="form-control" value="{{$referral->diagnosis->primary_diagnosis ? $referral->diagnosis->primary_diagnosis : '' }}">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">SECONDARY DIAGNOSIS</label>
                                       <input type="text" id="" name="secondary_diagnosis" class="form-control" value="{{$referral->diagnosis->secondary_diagnosis ? $referral->diagnosis->secondary_diagnosis : '' }}">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">SURGERY AND DATES</label>
                                       <input type="date" id="" name="surgery_date" class="form-control" value="{{$referral->diagnosis->surgery_date ? $referral->diagnosis->surgery_date : '' }}">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">SIGNIFICANT MEDICAL AND SURGICAL HISTORY (Include functional
                                          limitations)</label>
                                       <input type="text" id="" name="signafiq_med_surg_history" class="form-control" value="{{$referral->diagnosis->signafiq_med_surg_history ? $referral->diagnosis->signafiq_med_surg_history : '' }}">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">PROGNOSIS</label>
                                       <input type="text" id="" name="prognosis" class="form-control" value="{{$referral->diagnosis->prognosis ? $referral->diagnosis->prognosis : '' }}">
                                    </td>
                                    <td>
                                       <label for="">THERAPEUTIC GOALS</label>
                                       <input type="text" id="" name="therapeutic_goals" class="form-control" value="{{$referral->diagnosis->therapeutic_goals ? $referral->diagnosis->therapeutic_goals : '' }}">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="labels-group">
                                       <label for="">DIAGNOSIS KNOWN BY:</label>
                                       <div class="d-inline-block">
                                          <label class="form-check-label"><input type="radio" value="patient" name="diagnosis_known_by" class="form-check-input" {{ $referral->diagnosis->diagnosis_known_by ? 'checked' : '' }}>
                                             PATIENT</label>
                                          <label class="form-check-label"><input type="radio" value="family" name="diagnosis_known_by" class="form-check-input" {{ $referral->diagnosis->diagnosis_known_by ? 'checked' : '' }}>
                                             FAMILY</label>
                                          <label class="form-check-label"><input type="radio" value="other" name="diagnosis_known_by" class="form-check-input" {{ $referral->diagnosis->diagnosis_known_by ? 'checked' : '' }}>
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
                                          <label class="form-check-label"><input type="checkbox" name="doc_request" class="form-check-input" value="{{$referral->diagnosis->doc_request ? $referral->diagnosis->doc_request : '' }}">
                                             DOCUMENTATION REQUESTED</label>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">CONFIRMED COMMUNITY PHYSICIAN WILL PROVIDE ORDERS/POC:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="provide_orders" value="yes" {{ $referral->diagnosis->provide_orders ? 'checked' : '' }}
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="provide_orders" value="no" {{ $referral->diagnosis->provide_orders ? 'checked' : '' }}
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">PHYSICIAN/PROVIDER NAME</label>
                                       <input type="text" id="" name="physician_provider" class="form-control" value="{{$referral->diagnosis->physician_provider ? $referral->diagnosis->physician_provider : '' }}">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">MEDICAL SUPERVISION AT HOME PROVIDED BY-NAME AND ADDRESS OF PHYSICIAN OR
                                          CLINIC</label>
                                       <input type="text" id="" name="clinic" class="form-control" value="{{$referral->diagnosis->clinic ? $referral->diagnosis->clinic : '' }}">
                                    </td>
                                    <td>
                                       <label for="">TELEPHONE NO.</label>
                                       <input type="text" id="" name="clinic_phone" class="form-control" value="{{$referral->diagnosis->clinic_phone ? $referral->diagnosis->clinic_phone : '' }}">
                                    </td>
                                 </tr>
                              </table>

                              <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                                 <tr>
                                    <td>
                                       <label for="">PATIENT ESSENTIALLY HOMEBOUND:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="patient_essentially_homebound" value="yes" {{ $referral->diagnosis->patient_essentially_homebound ? 'checked' : '' }}
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="patient_essentially_homebound" value="no" {{ $referral->diagnosis->patient_essentially_homebound ? 'checked' : '' }}
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">ESTIMATE OF PATIENT'S NEED FOR HOME HEALTH SERVICES:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="home_health_services" value="weeks" {{ $referral->diagnosis->home_health_services ? 'checked' : '' }}
                                                class="form-check-input"> WEEKS</label>
                                          <label class="form-check-label"><input type="radio" name="home_health_services" value="month" {{ $referral->diagnosis->home_health_services ? 'checked' : '' }}
                                                class="form-check-input"> MONTHS</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">THIS PLAN OF CARE IS RELATED TO CONDITION FOR WHICH PATIENT WAS
                                          HOSPITALIZED:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" name="condition_for_which_patient" value="yes" {{ $referral->diagnosis->condition_for_which_patient ? 'checked' : '' }}
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="condition_for_which_patient" value="no" {{ $referral->diagnosis->condition_for_which_patient ? 'checked' : '' }}
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">I CERTIFY THE PATIENT NEEDS HOME HEALTH SERVICES:</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="checkbox" name="skilled_nursing" class="form-check-input" {{ $referral->diagnosis->skilled_nursing ? 'checked' : '' }}>
                                             SKILLED NURSING</label>
                                          <label class="form-check-label"><input type="checkbox" name="pt" class="form-check-input" {{ $referral->diagnosis->pt ? 'checked' : '' }}>
                                             PT</label>
                                          <label class="form-check-label"><input type="checkbox" name="ot" class="form-check-input" {{ $referral->diagnosis->ot ? 'checked' : '' }}>
                                             OT</label>
                                          <label class="form-check-label"><input type="checkbox" name="slp" class="form-check-input" {{ $referral->diagnosis->slp ? 'checked' : '' }}>
                                             SLP</label>
                                          <label class="form-check-label"><input type="checkbox" name="mss" class="form-check-input" {{ $referral->diagnosis->mss ? 'checked' : '' }}>
                                             MSS</label>
                                          <label class="form-check-label"><input type="checkbox" name="other" class="form-check-input" {{ $referral->diagnosis->other ? 'checked' : '' }}>
                                             OTHER (Specify):</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">PHYSICIAN'S SIGNATURE</label>
                                    </td>
                                    <td>
                                       <label for="">DATE</label>
                                       <input type="date" name="physician_signature_date" id="" class="form-control" value="{{$referral->diagnosis->physician_signature_date ? $referral->diagnosis->physician_signature_date : '' }}">
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
                                       <textarea name="nursing_therapy_assignment" id="" cols="30" rows="4" class="form-control">{{$referral->referral->nursing_therapy_assignment}}</textarea>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label for="">MEDICATIONS, SUPPLIES, EQUIPMENT NEEDED (Specify Items)</label>
                                       <input type="text" name="med_sup_eqp" id="" class="form-control" value="{{$referral->referral->med_sup_eqp ? $referral->referral->med_sup_eqp : '' }}">
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
                                          <label class="form-check-label"><input type="radio" name="admitted" value="yes" {{ $referral->referral->admitted ? 'checked' : '' }}
                                                class="form-check-input"> YES</label>
                                          <label class="form-check-label"><input type="radio" name="admitted" value="no" {{ $referral->referral->admitted ? 'checked' : '' }}
                                                class="form-check-input"> NO</label>
                                       </div>
                                    </td>
                                    <td>
                                       <label for="">STAFF ASSIGNED FOR ADMISSION</label>
                                       <input type="text" id="" name="staff_assigned_add" class="form-control" value="{{$referral->referral->staff_assigned_add ? $referral->referral->staff_assigned_add : '' }}">
                                    </td>
                                    <td>
                                       <label for="">REASON WHY NOT ADMITTED</label>
                                       <input type="text" id="" name="reason_for_addmitted" class="form-control" value="{{$referral->referral->reason_for_addmitted ? $referral->referral->reason_for_addmitted : '' }}">
                                    </td>
                                 </tr>
                                 <tr>
                                    <td colspan="2">
                                       <label for="">OTHER PROFESSIONAL ASSESSMENTS AND RECOMMENDATIONS ATTACHED
                                          (Triplicate)</label>
                                       <div class="labels-group">
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_pt" class="form-check-input" {{ $referral->referral->recomendation_pt ? 'checked' : '' }}>
                                             PT</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_ot" class="form-check-input" {{ $referral->referral->recomendation_ot ? 'checked' : '' }}>
                                             OT</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_slp" class="form-check-input" {{ $referral->referral->recomendation_slp ? 'checked' : '' }}>
                                             SLP</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_msw" class="form-check-input" {{ $referral->referral->recomendation_msw ? 'checked' : '' }}>
                                             MSW</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_md" class="form-check-input" {{ $referral->referral->recomendation_md ? 'checked' : '' }}>
                                             MD</label>
                                          <label class="form-check-label"><input type="radio" value="1" name="recomendation_other" class="form-check-input" {{ $referral->referral->recomendation_other ? 'checked' : '' }}>
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
