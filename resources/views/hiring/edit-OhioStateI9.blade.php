<div class="vs jj ttm vl ou uf na">
    <div class="row mb-4">
        <form action="">
             <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                 <div class="dk">
                      <div class="container pt-5">
                  
                        <div class="form-holder">
                            <input type="hidden" name="tab_name" value="inine">
                            <table class="table table-borderless align-middle not-responsive default-td">
                                <tr>
                                    <td>
                                    <img src="{{asset('assets/hiring/Logo.png')}}" alt="">
                                    </td>
                                    <td class="text-center">
                                    <h2>Employment Eligibility Verification</h2>
                                    <h3>Department of Homeland Security</h3>
                                    <p>U.S. Citizenship and Immigration Services</p>
                                    </td>
                                    <td class="text-center">
                                    <b style="font-size: 18px;">USCIS</b><br>
                                    <b style="font-size: 18px;">Form I-9</b><br>
                                    OMB No. 1615-0047<br>
                                    Expires 10/31/2022
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <p><b>►START HERE</b>: Read instructions carefully before completing this form. The instructions must be available, either in paper or electronically, during completion of this form. Employers are liable for errors in the completion of this form.</p>
                            <p><b>ANTI-DISCRIMINATION NOTICE:</b> It is illegal to discriminate against work-authorized individuals. Employers CANNOT specify which document(s) an employee may present to establish employment authorization and identity. The refusal to hire or continue to employ an individual because the documentation presented has a future expiration date may also constitute illegal discrimination.</p>
                            
                        <table class="table table-bordered align-middle not-responsive default-td">
                        <tr>
                            <td class="bg-secondary-subtle" colspan="5">
                            <b style="font-size: 1.2em;">Section 1. Employee Information and Attestation</b> <i>(Employees must complete and sign Section 1 of Form 1-9 no later than the <b>first day of employment</b>, but not before accepting a job offer.)</i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <label for="lastName" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                            <input type="text" name="lastName" id="lastName" value="{{ old('lastName') }}" class="form-control">
                            </td>
                            <td>
                            <label for="middleName" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                            <input type="text" name="middleName" id="middleName" value="{{ old('middleName"') }}" class="form-control">
                            </td>
                            <td>
                            <label for="lastName" class="form-label fw-medium mb-1">Middle Initial</label>
                            <input type="text" name="lastName" id="lastName" value="{{ old('lastName') }}" class="form-control">
                            </td>
                            <td colspan="2">
                            <label for="otherName" class="form-label fw-medium mb-1">Other Last Names Used <i>(if any)</i></label>
                            <input type="text" name="otherName" id="otherName" value="{{ old('otherName') }}" class="form-control">
                            </td>
                        </tr>
                            <tr>
                                <td>
                                <label for="street_name" class="form-label fw-medium mb-1">Address <i>(Street Number and Name)</i></label>
                                <textarea name="street_name" id="street_name" value="{{ old('street_name') }}" cols="30" rows="1" class="form-control"></textarea>
                                </td>
                                <td>
                                <label for="" class="form-label fw-medium mb-1">Apt. Number</label>
                                <input type="text" name="apt_namber" id="apt_nambe" value="{{ old('apt_nambe') }}" class="form-control">
                                </td>
                                <td>
                                <label for="i9_city" class="form-label fw-medium mb-1">City or Town</label>
                                <input type="text" name="i9_city" id="i9_city" value="{{ old('i9_city') }}" class="form-control">
                                </td>
                                <td>
                                <label for="i9_state" class="form-label fw-medium mb-1">State</label>
                                <select class="form-select" name="i9_state" id="i9_state" value="{{ old('i9_state') }}" aria-label="">
                                    <option value=""></option>
                                    <option value="">AK</option>
                                    <option value="">AL</option>
                                    </select>
                                </td>
                                <td>
                                <label for="i9_zip" class="form-label fw-medium mb-1">ZIP Code</label>
                                <input type="text" name="i9_zip" id="i9_zip" value="{{ old('i9_zip') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="dateOfBirth" class="form-label fw-medium mb-1">Date of Birth <i>(mm/dd/yyyy)</i></label>
                                    <input type="date" name="dateOfBirth" id="dateOfBirth" value="{{ old('dateOfBirth') }}" class="form-control">
                                </td>
                                <td>
                                <label for="socialSecurityNumber" class="form-label fw-medium mb-1">U.S. Social Security Number</label>
                                    <input type="text" name="socialSecurityNumber" id="socialSecurityNumber" value="{{ old('socialSecurityNumber') }}" class="form-control">
                                </td>
                                <td colspan="2">
                                <label for="email" class="form-label fw-medium mb-1">Employee's E-mail Address</label>
                                    <input type="email" name="email" id="email" value="{{ old('email"') }}" class="form-control">
                                </td>
                                <td>
                                <label for="Phone" class="form-label fw-medium mb-1">Employee's Telephone Number</label>
                                    <input type="text" name="Phone" id="Phone" value="{{ old('Phone') }}" class="form-control">
                                </td>
                            </tr>
                          </table>

                          <p class="mb-1"><b>I am aware that federal law provides for imprisonment and/or fines for false statements or use of false documents in connection with the completion of this form.</b></p>
                            <p><b>I attest, under penalty of perjury, that I am (check one of the following boxes):</b></p>

                           <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td colspan="2">
                                <label class="form-check-label"><input type="checkbox" name="federal" id="federal" value="{{ old('federal') }}" class="form-check-input"> 1. A citizen of the United States</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <label class="form-check-label" for="imprisonment"><input type="checkbox" name="imprisonment" id="imprisonment" value="{{ old('imprisonment') }}" class="form-check-input"> 2. A noncitizen national of the United States (See instructions)</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="clean-input-group">
                                <label class="form-check-label">
                                    <input type="checkbox" name="app_statment" id="app_statment" value="" class="form-check-input"> 3. A lawful permanent resident (Alien Registration Number/USCIS Number):
                                </label>
                                &nbsp; <input type="text" name="permanentResidentDate" id="permanentResidentDate" value="{{ old('permanentResidentDate') }}" class="form-control w-auto d-inline-flex">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="clean-input-group">
                                <label class="form-check-label"  for="aliens">
                                    <input type="checkbox" name="aliens" id="aliens" value="{{ old('aliens') }}" class="form-check-input"> 4. An alien authorized to work until (expiration date, if applicable, mm/dd/yyyy):
                                </label>
                                &nbsp; <input type="text" name="alienAuthorizedDate" id="alienAuthorizedDate" value="{{ old('alienAuthorizedDate') }}" class="form-control w-auto d-inline-flex">
                                <p class="ps-3">Some aliens may write "N/A" in the expiration date field. <i>(See instructions)</i></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p style="line-height: normal;"><i>Aliens authorized to work must provide only one of the following document numbers to complete Form 1-9:<br>An Alien Registration Number/USCIS Number OR Form 1-94 Admission Number OR Foreign Passport Number.</i></p>
                                <div class="d-block">
                                    <label class="input-group clean-input-group" for="alienRegistrationNumber">
                                        <span class="input-group-text">1. Alien Registration Number/USCIS Number:</span>
                                        <input type="text" name="alienRegistrationNumber" id="alienRegistrationNumber" value="{{ old('alienRegistrationNumber') }}" class="form-control">
                                    </label>
                                </div>
                                <div class="d-block ps-3"><b>OR</b></div>
                                <div class="d-block">
                                    <label class="input-group clean-input-group">
                                        <span class="input-group-text">2. Form 1-94 Admission Number:</span>
                                        <input type="text" name="admissionNumber" id="admissionNumber" value="{{ old('admissionNumber"') }}" class="form-control">
                                    </label>
                                </div>
                                <div class="d-block ps-3"><b>OR</b></div>
                                <div class="d-block">
                                    <label class="input-group clean-input-group">
                                        <span class="input-group-text">3. Foreign Passport Number</span>
                                        <input type="text"name="foreignPassportNumber" id="foreignPassportNumber" value="{{ old('choolDistrictNo') }}" class="form-control">
                                    </label>
                                    <label class="input-group clean-input-group ps-3" for="country_of_issurance">
                                        <span class="input-group-text">Country of Issurance:</span>
                                        <input type="text"  name="country_of_issurance" id="country_of_issurance" value="{{ old('country_of_issurance') }}" class="form-control">
                                    </label>
                                </div>
                                </td>
                                <td class="text-center"><small>QR Code Section 1</small></td>
                            </tr>
                         </table>
                         <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td class="pb-4">Signature of Employee</td>
                                <td class="pb-4">Today's Date (mm/dd/yyyy)</td>
                            </tr>
                           </table>

                         <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td class="bg-secondary-subtle">
                                <b style="font-size: 1.2em;">Preparer and/or Translator Certification (check one):</b>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-0">
                                <table class="table table-borderless align-middle not-responsive default-td">
                                    <tr>
                                        <td class="bg-secondary-subtle">
                                            <label class="form-check-label" for="preparer"><input type="checkbox" name="preparer" id="preparer" value="{{ old('preparer') }}" class="form-check-input"> I did not use a preparer or translator</label>
                                        </td>
                                        <td class="bg-secondary-subtle" for="translator">
                                            <label class="form-check-label"><input type="checkbox" name="translator" id="translator" value="{{ old('translator') }}" class="form-check-input"> A preparer(s) and/or translator(s) assisted the employee in completing Section 1.</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-secondary-subtle pt-0"><i>(Fields below must be completed and signed when preparers and/or translators assist an employee in completing Section 1.)</i></td>
                                    </tr>
                                </table>
                                </td>
                            </tr>
                           </table>

                          <p><b>I attest, under penalty of perjury, that I have assisted in the completion of Section 1 of this form and that to the best of my knowledge the information is true and correct.</b></p>

                          <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td colspan="2" class="pb-4">
                                <p class="fw-medium">Signature of Preparer or Translator</p>
                                </td>
                                <td colspan="2" class="pb-4">
                                <p class="fw-medium">Today's Date (mm/dd/yyyy)</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <label for="verifyLastName" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                                <input type="text" name="verifyLastName" id="verifyLastName" value="{{ old('verifyLastName') }}" class="form-control">
                                </td>
                                <td colspan="2">
                                <label for="verifyFirstName" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                                <input type="text" name="verifyFirstName" id="verifyFirstName" value="{{ old('verifyFirstName') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="verifyAddress" class="form-label fw-medium mb-1">Address <i>(Street Number and Name)</i></label>
                                <textarea name="verifyAddress" id="verifyAddress" value="{{ old('verifyAddress') }}" cols="30" rows="1" class="form-control"></textarea>
                                </td>
                                <td>
                                <label for="verifyCity" class="form-label fw-medium mb-1">City or Town</label>
                                <input type="text" name="verifyCity" id="verifyCity" value="{{ old('verifyCity') }}" class="form-control">
                                </td>
                                <td>
                                <label for="verifyState" class="form-label fw-medium mb-1">State</label>
                                <select class="form-select" name="verifyState" id="verifyState" value="{{ old('verifyState') }}" aria-label="">
                                    <option value=""></option>
                                    <option value="AK">AK</option>
                                    <option value="AL">AL</option>
                                    </select>
                                </td>
                                <td>
                                <label for="verifyZip" class="form-label fw-medium mb-1">ZIP Code</label>
                                <input type="text" name="verifyZip" id="verifyZip" value="{{ old('verifyZip') }}" class="form-control">
                                </td>
                            </tr>
                          </table>

                         <div class="d-block text-center mb-3"><img src="{{asset('assets/hiring/Stop.png')}}" alt="" width="400"></div>

                            <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td class="bg-secondary-subtle" colspan="5">
                                <b style="font-size: 1.2em;">Section 2. Employer or Authorized Representative Review and Verification</b><br>
                                <i style="line-height: normal;display: block;">(Employers or their authorized representative must complete and sign Section 2 within 3 business days of the employee's first day of employment. You must physically examine one document from List A OR a combination of one document from List B and one document from List Cas listed on the "Lists of Acceptable Documents.")</i>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Employee Info from Section 1</b></td>
                                <td>
                                <label for="section_info" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                                <input type="text" name="section_info" id="section_info" value="{{ old('section_info') }}" class="form-control">
                                </td>
                                <td>
                                <label for="employee_section" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                                <input type="text" name="employee_section" id="employee_section" value="{{ old('employee_section') }}" class="form-control">
                                </td>
                                <td>
                                <label for="employee_info" class="form-label fw-medium mb-1">M.I.</label>
                                <input type="text" name="employee_info" id="employee_info" value="{{ old('employee_info') }}" class="form-control">
                                </td>
                                <td>
                                <label for="citizanship" class="form-label fw-medium mb-1">Citizenship/immigration Status</label>
                                <input type="text" name="citizanship" id="citizanship" value="{{ old('citizanship') }}" class="form-control">
                                </td>
                            </tr>
                           </table>

                         <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td class="text-center"><b>List A<br>Identity and Employment Authorization</b></td>
                                <td class="text-center px-1">
                                <b style="position: absolute;transform: translate(-50%, -50%);background: #fff;">OR</b>
                                </td>
                                <td class="text-center"><b>List B<br>Identity</b></td>
                                <td class="text-cente px-1">
                                <b style="position: absolute;transform: translate(-50%, -50%);background: #fff;">AND</b>
                                </td>
                                <td class="text-center"><b>List C<br>Employment Authorization</b></td>
                            </tr>
                            <tr>
                                <td>
                                <label for="docTitle1" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="docTitle1" id="docTitle1" value="{{ old('docTitle1') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="docTitle2" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="docTitle2" id="docTitle2" value="{{ old('docTitle2') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="docTitle3" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="docTitle3" id="docTitle3" value="{{ old('ocTitle3') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="issuingAuthority1" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="issuingAuthority1" id="issuingAuthority1" value="{{ old('issuingAuthority1') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="issuingAuthority2" id="issuingAuthority2" value="{{ old('issuingAuthority2') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="issuingAuthority3" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="issuingAuthority3" id="issuingAuthority3" value="{{ old('issuingAuthority3') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="documentNumber1" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="documentNumber1" id="documentNumber1" value="{{ old('documentNumber1') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="documentNumber2" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="documentNumber2" id="documentNumber2" value="{{ old('documentNumber2') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="documentNumber3" id="documentNumber3" value="{{ old('documentNumber3') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="expirationDate1" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="expirationDate1" id="expirationDate1" value="{{ old('expirationDate1') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="expirationDate2" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="expirationDate2" id="expirationDate2" value="{{ old('expirationDate2') }}" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="expirationDate3" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="expirationDate3" id="expirationDate3" value="{{ old('expirationDate3') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="docTitle1_2" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="docTitle1_2" id="docTitle1_2" value="" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;" rowspan="8"></td>
                                <td rowspan="8">
                                <label for="additionalInfo" class="form-label fw-medium mb-1">Additional Information</label>
                                <textarea name="additionalInfo" id="additionalInfo" value="{{ old('additionalInfo') }}" cols="30" rows="20" class="form-control"></textarea>
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;" rowspan="8"></td>
                                <td rowspan="8" class="text-center"><small>QR Code-Sections 2&3</small></td>
                            </tr>
                            <tr>
                                <td>
                                <label for="issuingAuthority1_2" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="issuingAuthority1_2" id="issuingAuthority1_2" value="{{ old('issuingAuthority1_2') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="documentNumber1_2" id="documentNumber1_2" value="{{ old('documentNumber1_2') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="expirationDate1_2" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="expirationDate1_2" id="expirationDate1_2" value="{{ old('expirationDate1_2') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="docTitle1_3" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="docTitle1_3" id="docTitle1_3" value="{{ old('docTitle1_3') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="documentNumber1_3" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="issuingAuthority1_3" id="issuingAuthority1_3" value="{{ old('issuingAuthority1_3') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="documentNumber1_3" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="documentNumber1_3" id="documentNumber1_3" value="{{ old('documentNumber1_3') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="expirationDate1_3" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="expirationDate1_3" id="expirationDate1_3" value="{{ old('expirationDate1_3') }}" class="form-control">
                                </td>
                            </tr>
                          </table>

                          <div class="d-block"><b>Certification: I attest, under penalty of perjury, that (1) I have examined the document(s) presented by the above-named employee, (2) the above-listed document(s) appear to be genuine and to relate to the employee named, and (3) to the best of my knowledge the employee is authorized to work in the United States.</b></div>

                          <div class="d-block clean-input-group my-3">
                                <label for="firstDayEmployment" class="form-label"><b>The employee's first day of employment (mm/dd/yyyy):</b></label>
                                &nbsp; <input type="date" name="firstDayEmployment" id="firstDayEmployment" value="{{ old('firstDayEmployment') }}" class="form-control d-inline-flex w-auto">
                                <b><i>(See instructions for exemptions)</i></b>
                           </div>

                            <table class="table table-bordered align-middle not-responsive default-td mb-0">
                            <tr>
                                <td class="pb-4">Signature of Employer or Authorized Representative</td>
                                <td class="pb-4">Today's Date <i>(mm/dd/yyyy)</i></td>
                                <td>
                                <label for="titleEmployer">Title of Employer or Authorized Representative</label>
                                <input type="text" name="titleEmployer" id="titleEmployer" value="{{ old('titleEmployer') }}" class="form-control">
                                </td>
                            </tr>
                             </table>
                              <table class="table table-bordered align-middle not-responsive default-td mb-0" style="margin-top: -1px;">
                            <tr>
                                <td>
                                <label for="lastNameEmployer">Last Name of Employer or Authorized Representative</label>
                                <input type="text" name="lastNameEmployer" id="lastNameEmployer" value="" class="form-control">
                                </td>
                                <td>
                                <label for="firstNameEmployer">First Name of Employer or Authorized Representative</label>
                                <input type="text" name="firstNameEmployer" id="firstNameEmployer" value="{{ old('firstNameEmployer') }}" class="form-control">
                                </td>
                                <td>
                                    <label for="employerOrg">Employer's Business or Organization Name</label>
                                <input type="text" name="employerOrg" id="employerOrg" value="{{ old('employerOrg') }}" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered align-middle not-responsive default-td" style="margin-top: -1px;">
                            <tr>
                                <td>
                                <label for="orgAddress">Employer's Business or Organization Address <i>(Street Number and Name)</i></label>
                                <input type="text" name="orgAddress" id="orgAddress" value="" class="form-control">
                                </td>
                                <td>
                                <label for="business_address">City or Town</label>
                                <input type="text" name="business_address" id="business_address" value="{{ old('business_address') }}" class="form-control">
                                </td>
                                <td>
                                <label for="" class="form-label fw-medium mb-1">State</label>
                                <select class="form-select" name="orgState" id="orgState" value="{{ old('orgState') }}" aria-label="">
                                    <option value=""></option>
                                    <option value="">AK</option>
                                    <option value="">AL</option>
                                    </select>
                                </td>
                                <td>
                                <label for="orgZip">ZIP Code</label>
                                <input type="text" name="orgZip" id="orgZip" value="{{ old('orgZip') }}" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td class="bg-secondary-subtle" colspan="4">
                                <b style="font-size: 1.2em;">Section 3. Reverification and Rehires</b> <i>(To be completed and signed by employer or authorized representative.)</i>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="bg-secondary-subtle"><b>A</b>. New Name <i>(if applicable)</i></td>
                                <td class="bg-secondary-subtle"><b>B</b>. Date of Rehire <i>(if applicable)</i></td>
                            </tr>
                            <tr>
                                <td>
                                <label for="reVerificationLastName" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                                <input type="text" name="reVerificationLastName" id="reVerificationLastName" value="{{ old('reVerificationLastName') }}" class="form-control">
                                </td>
                                <td>
                                <label for="reVerificationFristName" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                                <input type="text" name="reVerificationFristName" id="reVerificationFristName" value="{{ old('reVerificationFristName') }}" class="form-control">
                                </td>
                                <td>
                                <label for="reVerificationMiddle" class="form-label fw-medium mb-1">Middle Initial</label>
                                <input type="text" name="reVerificationMiddle" id="reVerificationMiddle" value="{{ old('reVerificationMiddle') }}" class="form-control">
                                </td>
                                <td>
                                <label for="reVerificationDate" class="form-label fw-medium mb-1">Date <i>(mm/dd/yyyy)</i></label>
                                <input type="date" name="reVerificationDate" id="reVerificationDate" value="{{ old('reVerificationDate') }}" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-secondary-subtle" colspan="4"><b>C</b>. If the employee's previous grant of employment authorization has expired, provide the information for the document or receipt that establishes continuing employment authorization in the space provided below.</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <label for="reVerificationDocumentTitle" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="reVerificationDocumentTitle" id="reVerificationDocumentTitle" value="{{ old('eVerificationDocumentTitle') }}" class="form-control">
                                </td>
                                <td>
                                <label for="reVerificationDocumentNumber" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="reVerificationDocumentNumber" id="reVerificationDocumentNumber" value="{{ old('reVerificationDocumentNumber') }}" class="form-control">
                                </td>
                                <td>
                                <label for="reVerificationDocumentDate" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="reVerificationDocumentDate" id="reVerificationDocumentDate" value="{{ old('reVerificationDocumentDate') }}" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <div class="d-block mb-3">
                            <b>I attest, under penalty of perjury, that to the best of my knowledge, this employee is authorized to work in the United States, and if the employee presented document(s), the document(s) I have examined appear to be genuine and to relate to the individual</b>
                        </div>

                        <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td class="pb-4">Signature of Employer or Authorized Representative</td>
                                <td class="pb-4">Today's Date <i>(mm/dd/yyyy)</i></td>
                                <td>
                                <label for="authorizedRepresentative">Title of Employer or Authorized Representative</label>
                                <input type="text" name="authorizedRepresentative" id="authorizedRepresentative" value="{{ old('authorizedRepresentative') }}" class="form-control">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            <div class=" pb-5">
                <button type="button" class="d-flex px-5 btn btn-primary float-left active">Save</button>
            </div>
        </form>
        </div>
    </div>
 
