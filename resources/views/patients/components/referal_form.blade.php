<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nursing Visit Form</title>
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>



<form action="{{ route('referrals.store') }}" method="post" class="row">
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
                               <label class="form-check-label"><input type="radio" name="type_of_visit"
                                     class="form-check-input"> INITIAL</label>
                               <label class="form-check-label"><input type="radio" name="type_of_visit"
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
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">DATE OF REQUEST</label>
                               <input type="date" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">REPLY TO-NAME, DEPARTMENT OR CLINIC, TITLE</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">TELEPHONE AND EXT</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="d-inline-block me-3">
                                  <label for="">PHYSICIAN ORDERED SOC DATE (MO102)</label>
                                  <input type="date" id="" class="form-control">
                               </div>

                               <div class="d-inline-block">
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     NA-NO SPECIFIC SOC DATE ORDERED BY PHYSICIAN</label>
                               </div>
                            </td>
                            <td>
                               <label for="">UPDATED REFERRAL DATE (MO104)</label>
                               <input type="date" id="" class="form-control">
                            </td>
                         </tr>
                      </table>
                   </div>

                   <div class="patient-info">
                      <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                         <tr>
                            <td>
                               <label for="">PATIENT NAME-LAST, FIRST, MIDDLE</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">DATE OF BIRTH</label>
                               <input type="date" id="" class="form-control">
                            </td>
                            <td class="labels-group">
                               <label class="form-check-label"><input type="radio" name="gender" class="form-check-input">
                                  MALE</label>
                               <label class="form-check-label"><input type="radio" name="gender" class="form-check-input">
                                  FEMALE</label>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">ADDRESS - NO. AND STREET, CITY, BOROUGH, STATE</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">APT. NO. AND FLOOR</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td class="labels-group">
                               <label for="">TELEPHONE NO.</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">ADDRESS WHERE PATIENT IS TO BE VISITED-NO. AND STREET, CITY, BOROUGH, STATE
                                  (Care
                                  of Name)</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">APT. NO. AND FLOOR</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td class="labels-group">
                               <label for="">TELEPHONE NO.</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                      </table>

                      <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                         <tr>
                            <td>
                               <label for="">MEDICARE NO.</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">MEDICAID OR DSS IDENTIFICATION NO.</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">AUTHORIZATION REQUIRED:</label>
                               <div class="labels-groug">
                                  <label class="form-check-label"><input type="radio" name="AUTHORIZATION_REQUIRED"
                                        class="form-check-input"> Yes</label>
                                  <label class="form-check-label"><input type="radio" name="AUTHORIZATION_REQUIRED"
                                        class="form-check-input"> Yes</label>
                               </div>
                            </td>
                            <td>
                               <label for="">AUTHORIZATION RECEIVED:</label>
                               <div class="labels-groug">
                                  <label class="form-check-label"><input type="radio" name="AUTHORIZATION_RECEIVED"
                                        class="form-check-input"> Yes</label>
                                  <label class="form-check-label"><input type="radio" name="AUTHORIZATION_RECEIVED"
                                        class="form-check-input"> Yes</label>
                               </div>
                            </td>
                         </tr>
                      </table>

                      <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                         <tr>
                            <td>
                               <label for="">OTHER INSURANCE CARRIER</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">POLICY NO. OR CLAIM NO.</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">TYPE OF COVERAGE</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">HOSPITAL OR PAC ADMISSION DATE</label>
                               <input type="date" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">HOSPITAL OR PAC DISCHARGE DATE</label>
                               <input type="date" id="" class="form-control">
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
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">SECONDARY DIAGNOSIS</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">SURGERY AND DATES</label>
                               <input type="date" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">SIGNIFICANT MEDICAL AND SURGICAL HISTORY (Include functional
                                  limitations)</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                      </table>

                      <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                         <tr>
                            <td>
                               <label for="">PROGNOSIS</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">THERAPEUTIC GOALS</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td class="labels-group">
                               <label for="">DIAGNOSIS KNOWN BY:</label>
                               <div class="d-inline-block">
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     PATIENT</label>
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     FAMILY</label>
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     OTHER-EXPLAIN</label>
                               </div>
                            </td>
                            <td>
                               <label class="form-check-label"><input type="checkbox" name="" class="form-check-input"> NOT
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
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     DOCUMENTATION REQUESTED</label>
                               </div>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">CONFIRMED COMMUNITY PHYSICIAN WILL PROVIDE ORDERS/POC:</label>
                               <div class="labels-group">
                                  <label class="form-check-label"><input type="radio" name="PROVIDE_ORDERS"
                                        class="form-check-input"> YES</label>
                                  <label class="form-check-label"><input type="radio" name="PROVIDE_ORDERS"
                                        class="form-check-input"> NO</label>
                               </div>
                            </td>
                            <td>
                               <label for="">PHYSICIAN/PROVIDER NAME</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                      </table>

                      <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                         <tr>
                            <td>
                               <label for="">MEDICAL SUPERVISION AT HOME PROVIDED BY-NAME AND ADDRESS OF PHYSICIAN OR
                                  CLINIC</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">TELEPHONE NO.</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                      </table>

                      <table style="margin-top: -1px !important;" class="table table-bordered align-middle m-0 bg-white">
                         <tr>
                            <td>
                               <label for="">PATIENT ESSENTIALLY HOMEBOUND:</label>
                               <div class="labels-group">
                                  <label class="form-check-label"><input type="radio" name="PATIENT_ESSENTIALLY_HOMEBOUND"
                                        class="form-check-input"> YES</label>
                                  <label class="form-check-label"><input type="radio" name="PATIENT_ESSENTIALLY_HOMEBOUND"
                                        class="form-check-input"> NO</label>
                               </div>
                            </td>
                            <td>
                               <label for="">ESTIMATE OF PATIENT'S NEED FOR HOME HEALTH SERVICES:</label>
                               <div class="labels-group">
                                  <label class="form-check-label"><input type="radio" name="HOME_HEALTH_SERVICES"
                                        class="form-check-input"> WEEKS</label>
                                  <label class="form-check-label"><input type="radio" name="HOME_HEALTH_SERVICES"
                                        class="form-check-input"> MONTHS</label>
                               </div>
                            </td>
                            <td>
                               <label for="">THIS PLAN OF CARE IS RELATED TO CONDITION FOR WHICH PATIENT WAS
                                  HOSPITALIZED:</label>
                               <div class="labels-group">
                                  <label class="form-check-label"><input type="radio" name="CONDITION_FOR_WHICH_PATIENT"
                                        class="form-check-input"> YES</label>
                                  <label class="form-check-label"><input type="radio" name="CONDITION_FOR_WHICH_PATIENT"
                                        class="form-check-input"> NO</label>
                               </div>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">I CERTIFY THE PATIENT NEEDS HOME HEALTH SERVICES:</label>
                               <div class="labels-group">
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     SKILLED NURSING</label>
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     PT</label>
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     OT</label>
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     SLP</label>
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     MSS</label>
                                  <label class="form-check-label"><input type="checkbox" name="" class="form-check-input">
                                     OTHER (Specify):</label>
                               </div>
                            </td>
                            <td>
                               <label for="">PHYSICIAN'S SIGNATURE</label>
                            </td>
                            <td>
                               <label for="">DATE</label>
                               <input type="date" name="" id="" class="form-control">
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
                               <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <label for="">MEDICATIONS, SUPPLIES, EQUIPMENT NEEDED (Specify Items)</label>
                               <input type="text" id="" class="form-control">
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
                                  <label class="form-check-label"><input type="radio" name="ADMITTED"
                                        class="form-check-input"> YES</label>
                                  <label class="form-check-label"><input type="radio" name="ADMITTED"
                                        class="form-check-input"> NO</label>
                               </div>
                            </td>
                            <td>
                               <label for="">STAFF ASSIGNED FOR ADMISSION</label>
                               <input type="text" id="" class="form-control">
                            </td>
                            <td>
                               <label for="">REASON WHY NOT ADMITTED</label>
                               <input type="text" id="" class="form-control">
                            </td>
                         </tr>
                         <tr>
                            <td colspan="2">
                               <label for="">OTHER PROFESSIONAL ASSESSMENTS AND RECOMMENDATIONS ATTACHED
                                  (Triplicate)</label>
                               <div class="labels-group">
                                  <label class="form-check-label"><input type="radio" name="" class="form-check-input">
                                     PT</label>
                                  <label class="form-check-label"><input type="radio" name="" class="form-check-input">
                                     OT</label>
                                  <label class="form-check-label"><input type="radio" name="" class="form-check-input">
                                     SLP</label>
                                  <label class="form-check-label"><input type="radio" name="" class="form-check-input">
                                     MSW</label>
                                  <label class="form-check-label"><input type="radio" name="" class="form-check-input">
                                     MD</label>
                                  <label class="form-check-label"><input type="radio" name="" class="form-check-input">
                                     OTHER (Specify):</label>
                               </div>
                            </td>
                            <td>
                               <label for="">AGENCY STAFF SIGNATURE</label>
                            </td>
                         </tr>
                      </table>
                   </div>
                </div>
          </div>
       </div>
</form>

    </body>

    </html>


















    <!---<div class="card mb-2">
        <div class="card-header text-center bg-dark">
            <h2 class="gh text-slate-800 text-white">Demographics</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="org_id" value="{{ request('org') }}">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="first_name">First Name: </label>
                        <input id="first_name" type="text" class="form-control s ou" name="first_name" value="{{ old('first_name') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="middle_name">Middle Name: </label>
                        <input id="middle_name" type="text" class="form-control s ou" name="middle_name" value="{{ old('middle_name') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_name">Last Name: </label>
                        <input id="last_name" type="text" class="form-control s ou" name="last_name" value="{{ old('last_name') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender: </label>
                        <select name="gender" id="gender" class="form-control s ou">
                            <option value="">Select</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth: </label>
                        <input id="date_of_birth" type="date" class="form-control s ou" name="date_of_birth" value="{{ old('date_of_birth') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control s ou" id="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mobile_phone">Mobile Phone</label>
                        <input type="text" name="mobile_phone" class="form-control s ou" id="mobile_phone" value="{{ old('mobile_phone') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="altenate_phone">Alternate Phone</label>
                        <input type="text" name="altenate_phone" class="form-control s ou" id="altenate_phone" value="{{ old('altenate_phone') }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="marital_status">Marital Status</label>
                        <select name="marital_status" id="marital_status" class="form-control s ou">
                            <option value="">Select an option</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="married">Divorced</option>
                            <option value="widower">Widower</option>
                            <option value="widow">Widow</option>
                        </select>
                    </div>
                </div>


                {{-- addrees area --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="country">Country: </label>
                        <select name="country" id="country" class="form-control s ou">
                            <option value="">Select Country</option>
                            <option value="1">United States of America</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="zip_code">Zip Code: </label>
                        <input id="zip_code" type="text" class="form-control s ou" name="zip_code" value="{{ old('zip_code') }}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="primary_address_line_1">Primary Address Line 1: </label>
                        <input id="primary_address_line_1" type="text" class="form-control s ou" name="primary_address_line_1" value="{{ old('primary_address_line_1') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="primary_address_line_2">Primary Address Line 2: </label>
                        <input id="primary_address_line_2" type="text" class="form-control s ou" name="primary_address_line_2" value="{{ old('primary_address_line_2') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="county">County: </label>
                        <input id="county" type="text" class="form-control s ou" name="county" value="{{ old('county') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="city">City: </label>
                        <input id="city" type="text" class="form-control s ou" name="city" value="{{ old('city') }}">
                    </div>
                </div>

                {{-- language details --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="primary_language">Primary Language</label>
                        <input type="text" name="primary_language" id="primary_language" class="form-control" value="{{ old('primary_language') }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" name="language_barrier" id="language_barrier" class="form-control">
                        <label for="language_barrier">Language Barrier</label>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="checkbox" name="needs_interpreter" id="needs_interpreter" class="form-control">
                        <label for="needs_interpreter">Needs Interpreter</label>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-12 mt-1">
        <input type="submit" value="Save" class="btn btn-block hd xu ye float-right">
    </div>--->

{{--    <div class="card mb-2">--}}
{{--        <div class="card-header text-center  bg-dark">--}}
{{--            <h2 class="gh text-slate-800 text-white">Insurance</h2>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="row">--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="mbi_number">Medicare Number:</label>--}}
{{--                        <input type="text" name="mbi_number" class="form-control s ou" id="mbi_number" value="{{ old('mbi_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="medicaid_number">Medicaid Number</label>--}}
{{--                        <input type="text" name="medicaid_number" class="form-control s ou" id="medicaid_number" value="{{ old('medicaid_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="secondary_number">Secondary Payer</label>--}}
{{--                        <input type="text" name="secondary_number" class="form-control s ou" id="secondary_number" value="{{ old('secondary_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-2">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="secondary_number_id">ID</label>--}}
{{--                        <input type="text" name="secondary_number_id" class="form-control s ou" id="secondary_number_id" value="{{ old('secondary_number_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="mcr_advantage_plan">MCR Advantage Plan</label>--}}
{{--                        <input type="text" name="mcr_advantage_plan" class="form-control s ou" id="mcr_advantage_plan" value="{{ old('mcr_advantage_plan') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="mcr_advantage_number">MCR Advantage Number</label>--}}
{{--                        <input type="text" name="mcr_advantage_number" class="form-control s ou" id="mcr_advantage_number" value="{{ old('mcr_advantage_number') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-2">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="auth_required">Auth Required</label>--}}
{{--                        <select name="auth_required" id="auth_required">--}}
{{--                            <option value="">Select Option</option>--}}
{{--                            <option value="Yes">Yes</option>--}}
{{--                            <option value="No">No</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="reimbursement_is">Reimbursement is</label>--}}
{{--                        <select name="reimbursement_is" id="reimbursement_is">--}}
{{--                            <option value="">Select Option</option>--}}
{{--                            <option value="episodic">Episodic</option>--}}
{{--                            <option value="pay_per_visit">Pay per visit</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="new_patient_id">New Patient ID</label>--}}
{{--                        <input type="text" name="new_patient_id" class="form-control s ou" id="new_patient_id" value="{{ old('new_patient_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="former_patient_id">Former Patient ID</label>--}}
{{--                        <input type="text" name="former_patient_id" class="form-control s ou" id="former_patient_id" value="{{ old('former_patient_id') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="eligibility_checked_by">Eligibity Checked By</label>--}}
{{--                        <input type="text" name="eligibility_checked_by" class="form-control s ou" id="eligibility_checked_by" value="{{ old('eligibility_checked_by') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                --}}{{-- emergency contact details --}}




{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</form>
