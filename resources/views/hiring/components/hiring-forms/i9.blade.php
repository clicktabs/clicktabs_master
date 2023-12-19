<div class="vs jj ttm vl ou uf na">
    <div class="row mb-4">
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk">
                        {{-- @if(session::get('success'))
                        <div class="alert alert-success">
                        {{ session::get('success')}}
                        </div>
                    @endif
                    @if(session::get('success'))
                    <div class="alert alert-danger">
                        {{ session::get('fail')}}
                    </div>
                @endif --}}
                <div class="container pt-5">
                  <form action="storeformi9" name="newhiringform" id="newhiringform" method="Post">
                    @csrf
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
                                <label for="formi9_lName" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                                <input type="text" name="formi9_lName" id="formi9_lName" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_fName" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                                <input type="text" name="formi9_fName" id="formi9_fName" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_mName" class="form-label fw-medium mb-1">Middle Initial</label>
                                <input type="text" name="formi9_mName" id="formi9_mName" class="form-control">
                                </td>
                                <td colspan="2">
                                <label for="formi9_oLastName" class="form-label fw-medium mb-1">Other Last Names Used <i>(if any)</i></label>
                                <input type="text" name="formi9_oLastName" id="formi9_oLastName" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_address" class="form-label fw-medium mb-1">Address <i>(Street Number and Name)</i></label>
                                <textarea name="formi9_address" id="formi9_address" cols="30" rows="1" class="form-control"></textarea>
                                </td>
                                <td>
                                <label for="formi9_aptNumber" class="form-label fw-medium mb-1">Apt. Number</label>
                                <input type="number" name="formi9_aptNumber" id="formi9_aptNumber" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_city" class="form-label fw-medium mb-1">City or Town</label>
                                <input type="text" name="formi9_city" id="formi9_city" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_state" class="form-label fw-medium mb-1">State</label>
                                <select class="form-select" name="formi9_state" id="formi9_state" aria-label="">
                                    <option value=""></option>
                                    <option value="">AK</option>
                                    <option value="">AL</option>
                                    </select>
                                </td>
                                <td>
                                <label for="formi9_zip" class="form-label fw-medium mb-1">ZIP Code</label>
                                <input type="number" name="formi9_zip" id="formi9_zip" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_dob" class="form-label fw-medium mb-1">Date of Birth <i>(mm/dd/yyyy)</i></label>
                                    <input type="date" name="formi9_dob" id="formi9_dob" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_ssn" class="form-label fw-medium mb-1">U.S. Social Security Number</label>
                                    <input type="number" name="formi9_ssn" id="formi9_ssn" class="form-control">
                                </td>
                                <td colspan="2">
                                <label for="formi9_email" class="form-label fw-medium mb-1">Employee's E-mail Address</label>
                                    <input type="email" name="formi9_email" id="formi9_email" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_employeePhone" class="form-label fw-medium mb-1">Employee's Telephone Number</label>
                                    <input type="number" name="formi9_employeePhone" id="formi9_employeePhone" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <p class="mb-1"><b>I am aware that federal law provides for imprisonment and/or fines for false statements or use of false documents in connection with the completion of this form.</b></p>
                        <p><b>I attest, under penalty of perjury, that I am (check one of the following boxes):</b></p>

                        <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td colspan="2">
                                <label class="form-check-label" for="formi9_ctizen"><input type="checkbox" name="formi9_citizen" id="formi9_citizen" value="" class="form-check-input"> 1. A citizen of the United States</label>
                                </td>I am aware that federal law provides for imprisonment and/or fines for false statements or use of false documents in connection with the completion of this form.</b></p>
                        <p><b>I attest, under pena
                            </tr>
                            <tr>
                                <td colspan="2">
                                <label class="form-check-label" for="formi9_permtDate">
                                    <input type="checkbox" name="formi9_permtDate" id="formi9_permtDate" value="2" class="form-check-input"> 2. A noncitizen national of the United States (See instructions)</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="clean-input-group">
                                <label class="form-check-label" for="formi9_lawful">
                                    <input type="checkbox" name="formi9_lawful" id="formi9_lawful" value="3" class="form-check-input"> 3. A lawful permanent resident (Alien Registration Number/USCIS Number):
                                </label>
                                &nbsp; <input type="text" name="formi9_lawful_1" id="formi9_lawful_1" class="form-control w-auto d-inline-flex">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="clean-input-group">
                                <label class="form-check-label" for="formi9_alien">
                                    <input type="checkbox" name="formi9_alien" id="formi9_alien" value="4" class="form-check-input"> 4. An alien authorized to work until (expiration date, if applicable, mm/dd/yyyy):
                                </label>
                                &nbsp; <input type="date" name="formi9_alien_1" id="formi9_alien_1" class="form-control w-auto d-inline-flex  border border-secondary">
                                <p class="ps-3">Some aliens may write "N/A" in the expiration date field. <i>(See instructions)</i></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <p style="line-height: normal;"><i>Aliens authorized to work must provide only one of the following document numbers to complete Form 1-9:<br>An Alien Registration Number/USCIS Number OR Form 1-94 Admission Number OR Foreign Passport Number.</i></p>
                                <div class="d-block">
                                    <label class="input-group clean-input-group"  for="formi9_alienNumber">
                                        <span class="input-group-text">1. Alien Registration Number/USCIS Number:</span>
                                        <input type="text" id="formi9_alienNumber" name="formi9_alienNumber" class="form-control  border border-secondary">
                                    </label>
                                </div>
                                <div class="d-block ps-3"><b>OR</b></div>
                                <div class="d-block">
                                    <label class="input-group clean-input-group" for="formi9_admissionNo">
                                        <span class="input-group-text">2. Form 1-94 Admission Number:</span>
                                        <input type="text" name="formi9_admissionNo" id="formi9_admissionNo" class="form-control  border border-secondary">
                                    </label>
                                </div>
                                <div class="d-block ps-3"><b>OR</b></div>
                                <div class="d-block">
                                    <label class="input-group clean-input-group" for="formi9_PassportNo">
                                        <span class="input-group-text">3. Foreign Passport Number</span>
                                        <input type="text" id="formi9_PassportNo" name="formi9_PassportNo" class="form-control  border border-secondary">
                                    </label>
                                    <label class="input-group clean-input-group ps-3" for="formi9_cuntry">
                                        <span class="input-group-text">Country of Issuance:</span>
                                        <input type="text" id="formi9_cuntry" name="formi9_cuntry" class="form-control  border border-secondary">
                                    </label>
                                </div>
                                </td>
                                <td class="text-center"><small>QR Code Section 1</small></td>
                            </tr>
                        </table>
                        <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                       
                
                                <td class="pb-4">
                                    <label for="">Signature of Employee</label>
                                    <input type="text" name="formi9_signature_1">
                                    </td>
                                <td class="pb-4">
                                    <label for="formi9_signatureDateofemployee">Today's Date (mm/dd/yyyy)</label>
                                    <input type="date" name="formi9_signatur_2">
                                </td>

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
                                            <label class="form-check-label" for="formi9_translator"><input type="checkbox" name="formi9_translator" id="formi9_translator" class="form-check-input"> I did not use a preparer or translator</label>
                                        </td>
                                        <td class="bg-secondary-subtle">
                                            <label class="form-check-label" for="formi9_preparer"><input type="checkbox" name="formi9_preparer" id="formi9_preparer" class="form-check-input"> A preparer(s) and/or translator(s) assisted the employee in completing Section 1.</label>
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
                                    <label for="formi9_signature_3">Signature of Preparer or Translator</label>
                                    <input type="text" name="formi9_signature_3">
                                </td>
                                <td colspan="2" class="pb-4">
                                <label for="formi9_signature_4">Today's Date (mm/dd/yyyy)</label>
                                <input type="date" name="formi9_signature_4">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <label for="formi9_LName_1" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                                <input type="text" name="formi9_LName_1" class="form-control">
                                </td>
                                <td colspan="2">
                                <label for="formi9_FName_1" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                                <input type="text" name="formi9_FName_1" id="formi9_verifyFirstName" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_Address_1" class="form-label fw-medium mb-1">Address <i>(Street Number and Name)</i></label>
                                <textarea name="formi9_verifyAddress" id="formi9_Address_1" cols="30" rows="1" class="form-control"></textarea>
                                </td>
                                <td>
                                <label for="formi9_City_1" class="form-label fw-medium mb-1">City or Town</label>
                                <input type="text" name="formi9_City_1" id="formi9_verifyCity" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_State_1" class="form-label fw-medium mb-1">State</label>
                                <select class="form-select" name="formi9_State_1" id="formi9_State_1" aria-label="">
                                    <option value=""></option>
                                    <option value="AK">AK</option>
                                    <option value="AL">AL</option>
                                    </select>
                                </td>
                                <td>
                                <label for="formi9_Zip_1" class="form-label fw-medium mb-1">ZIP Code</label>
                                <input type="text" name="formi9_Zip_1" id="fformi9_Zip_1" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <div class="d-block text-center mb-3"><img src="{{asset('assets/hiring/Stop.png')}}" alt="" width="400"></div>

                        <table class="table table-bordered align-middle not-responsive default-td">
                            <tr>
                                <td class="bg-secondary-subtle" colspan="5">

                                <label style="font-size: 1.2em;" for="formi9_employor_auth">Section 2. Employer or Authorized Representative Review and Verification</label><br>
                                <input type="date" name="formi9_employorname" style="line-height: normal;display: block;">(Employers or their authorized representative must complete and sign Section 2 within 3 business days of the employee's first day of employment. You must physically examine one document from List A OR a combination of one document from List B and one document from List Cas listed on the "Lists of Acceptable Documents.")>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Employee Info from Section 1</b></td>
                                <td>
                                <label for="formi9_employorLname" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                                <input type="text" name="formi9_employorLname" id="formi9_employorLname" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_employorFname" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                                <input type="text" name="formi9_employorFname" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_employorMI" class="form-label fw-medium mb-1">M.I.</label>
                                <input type="text" name="formi9_employorMI" id="formi9_employorMI" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_citizenship" class="form-label fw-medium mb-1">Citizenship/immigration Status</label>
                                <input type="text" name="formi9_citizenship" id="formi9_citizenship" class="form-control">
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
                                <label for="formi9_docTitle1" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="formi9_docTitle1" id="formi9_docTitle1" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_docTitle2" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="formi9_docTitle2" id="formi9_docTitle2" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_docTitle3" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="formi9_docTitle3" id="formi9_docTitle3" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_issuing_1" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="formi9_issuing_1" id="formi9_issuing_1" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_issuing_2" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="formi9_issuing_2" id="formi9_issuing_2" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_issuing_3" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="formi9_issuing_3" id="formi9_issuing_3" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_docNumber_1" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="formi9_docNumber_1" id="formi9_docNumber_1" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_docNumber_2" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="formi9_docNumber_2" id="formi9_docNumber_2" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_docNumber_3" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="formi9_docNumber_3" id="formi9_docNumber_3" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_expir_1" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="formi9_expir_1" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_expir_2" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="formi9_expir_2" id="formi9_expirationDate2" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;"></td>
                                <td>
                                <label for="formi9_expir_3" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="formi9_expir_3" id="formi9_expir_3" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_docTitle1_4" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="formi9_docTitle1_4" id="formi9_docTitle1_4" class="form-control">
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;" rowspan="8"></td>
                                <td rowspan="8">
                                <label for="formi9_additional" class="form-label fw-medium mb-1">Additional Information</label>
                                <textarea name="formi9_additional" id="formi9_additional" cols="30" rows="20" class="form-control"></textarea>
                                </td>
                                <td class="px-0" style="position: relative;bottom: -1px;" rowspan="8"></td>
                                <td rowspan="8" class="text-center"><small>QR Code-Sections 2&3</small></td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_Issuing_4" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="formi9_Issuing_4" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_docNumber_4" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="formi9_docNumber_4" id="formi9_docNumber_4" class="form-control">
                                </td>
                            </tr>
                            <tr>
                            <td>
                                <label for="formi9_expir_4" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="formi9_expir_4" id="formi9_expir_4" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_docTitle1_5" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="formi9_docTitle1_5" id="formi9_docTitle1_5" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_issuin_5" class="form-label fw-medium mb-1">Issuing Authority</label>
                                <input type="text" name="formi9_issuin_5" id="formi9_issuin_5" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_docNumber_5" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="text" name="formi9_docNumber_5" id="formi9_docNumber_5" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <label for="formi9_expir_5" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="formi9_expir_5" id="formi9_expir_5" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <div class="d-block"><b>Certification: I attest, under penalty of perjury, that (1) I have examined the document(s) presented by the above-named employee, (2) the above-listed document(s) appear to be genuine and to relate to the employee named, and (3) to the best of my knowledge the employee is authorized to work in the United States.</b></div>

                        <div class="d-block clean-input-group my-3">
                            <label for="formi9_firstDay" class="form-label"><b>The employee's first day of employment (mm/dd/yyyy):</b></label>
                            &nbsp; <input type="date" name="formi9_firstDay" id="formi9_firstDay" class="form-control d-inline-flex w-auto">
                            <b><i>(See instructions for exemptions)</i></b>
                        </div>

                        <table class="table table-bordered align-middle not-responsive default-td mb-0">
                            <tr>
                                <td class="pb-4">Signature of Employer or Authorized Representative</td>
                                <td class="pb-4">Today's Date <i>(mm/dd/yyyy)</i></td>
                                <td>
                                <label for="formi9_Authorized_1">Title of Employer or Authorized Representative</label>
                                <input type="text" name="formi9_Authorized_1" id="formi9_Authorized_1" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered align-middle not-responsive default-td mb-0" style="margin-top: -1px;">
                            <tr>
                                <td>
                                 <label for="formi9_Employer_authLname">  Last Name of Employer or Authorized Representative </label>
                                <input type="text" name="formi9_Employer_authLname" id="formi9_Employer_authLname" class="form-control">
                                </td>
                                <td>
                                    <label for="formi9_Employer_authFname">First Name of Employer or Authorized Representative</label>
                                <input type="text" name="formi9_Employer_authFname" id="formi9_Employer_authFname" class="form-control">
                                </td>
                                <td>
                                  <label for="formi9_employerOrg"> Employer's Business or Organization Name</label>
                                <input type="text" name="formi9_employerOrg" id="formi9_employerOrg" class="form-control">
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered align-middle not-responsive default-td" style="margin-top: -1px;">
                            <tr>
                                <td>
                                    <label for="formi9_oemployerorgAddress">Employer's Business or Organization Address </label><i>(Street Number and Name)</i>
                                <input type="text" name="formi9_oemployerorgAddress" id="formi9_oemployerorgAddress" class="form-control">
                                </td>
                                <td>
                                  <label for="formi9_employercity"></label>City or Town
                                <input type="text" name="formi9_employercity" id="formi9_employercity" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_employororgState" class="form-label fw-medium mb-1">State</label>
                                <select class="form-select" name="formi9_employororgState" id="formi9_employororgState" aria-label="">
                                    <option value=""></option>
                                    <option value="">AK</option>
                                    <option value="">AL</option>
                                    </select>
                                </td>
                                <td>
                                <label for="formi9_employororgZip">ZIP Code</label>
                                <input type="text" name="formi9_employororgZip" id="formi9_employororgZip" class="form-control">
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
                                <label for="formi9_LName_3" class="form-label fw-medium mb-1">Last Name <i>(Family Name)</i></label>
                                <input type="text" name="formi9_LName_3" id="formi9_LName_3" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_FName_3" class="form-label fw-medium mb-1">First Name <i>(Given Name)</i></label>
                                <input type="text" name="formi9_FName_3" id="formi9_FName_3" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_MName_3" class="form-label fw-medium mb-1">Middle Initial</label>
                                <input type="text" name="formi9_MName_3" id="formi9_MName_3" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_Date" class="form-label fw-medium mb-1">Date <i>(mm/dd/yyyy)</i></label>
                                <input type="date" name="formi9_Date" id="formi9_Date" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-secondary-subtle" colspan="4"><b>C</b>. If the employee's previous grant of employment authorization has expired, provide the information for the document or receipt that establishes continuing employment authorization in the space provided below.</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <label for="formi9_DocumentTitle_5" class="form-label fw-medium mb-1">Document Title</label>
                                <input type="text" name="formi9_DocumentTitle_5" id="formi9_DocumentTitle_5" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_DocumentNumber" class="form-label fw-medium mb-1">Document Number</label>
                                <input type="number" name="formi9_DocumentNumber" id="formi9_DocumentNumber" class="form-control">
                                </td>
                                <td>
                                <label for="formi9_expir_6" class="form-label fw-medium mb-1">Expiration Date <i>(if any) (mm/dd/yyyy)</i></label>
                                <input type="date" name="formi9_expir_6" id="formi9_expir_6" class="form-control">
                                </td>
                            </tr>
                        </table>

                        <div class="d-block mb-3">
                            <b>I attest, under penalty of perjury, that to the best of my knowledge, this employee is authorized to work in the United States, and if the employee presented document(s), the document(s) I have examined appear to be genuine and to relate to the individual</b>
                        </div>

                        <table class="table table-bordered align-middle not-responsive default-td">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="formi9_signature_5">Signature of Employer or Authorized Representative</label>
                                        <textarea id="formi9_signature_5" name="formi9_signature_5"></textarea>
                                    </div>
                                <div class="col-md-6">
                                    <label for="formi9_Authorized_4">Title of Employer or Authorized Representative</label>
                                    <input type="text" id="formi9_Authorized_4" name="formi9_Authorized_4">
                                </div>
                            </div>
                        </table>
                        <div>
                            <button type="submit" class=" btn btn-primary active">Save and Continue</button>
                        </div>
                    </div>
                </form>  
                </div>
            </div>
        </div>
    </div>
</div>
