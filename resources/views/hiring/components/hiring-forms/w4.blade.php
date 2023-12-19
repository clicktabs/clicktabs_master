<div class="container">
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
   <!-- Employee’s Withholding Certificate -->
   <form action="formw4" name="newhiringform" id="newhiringform"  method="POST">
      @csrf
   <table class="table table-borderless align-middle not-responsive default-td mb-0" style="border-bottom: 3px solid;">
       <tbody><tr>
          <td style="min-width: 220px;max-width: 140px;border-right: 3px solid;">
             <span>Form</span> <span class="fw-bold" style="font-size: 3em;">W-4</span>
             <br>
             <span class="d-block" style="line-height: normal;">Department of the Treasury Internal Revenue Service</span>
          </td>
          <td class="text-center">
             <h2><b>Employee’s Withholding Certificate</b></h2>
             <p><b>Complete Form W-4 so that your employer can withhold the correct federal income tax from your pay. Give Form W-4 to your employer.</b></p>
             <p><b>Your withholding is subject to review by the IRS.</b></p>
          </td>
          <td style="min-width: 170px;max-width: 140px;line-height: normal;border-left: 3px solid;">
             <span class="d-block border-bottom border-black pb-2">OMB No. 1545-0074</span>
             <span style="font-size: 3em;"><b>2023</b></span>
          </td>
       </tr>
    </tbody></table>
   
       <table class="table table-bordered align-middle not-responsive default-td" style="border-bottom: 3px solid;">
          <tr>
             <td style="width: 110px;" rowspan="4">
                <b style="font-size: 1.2em;">Step 1:<br>
                   Enter Personal Information</b>
             </td>
             <td>
                <label for="w4_first_and_middle_name" class="form-label fw-medium mb-1">(a) First name and middle initial</label>
                <input type="text" name="w4_first_and_middle_name" id="w4_first_and_middle_name" class="form-control">
             </td>
             <td>
                <label for="w4_last_name" class="form-label fw-medium mb-1">Last name</label>
                <input type="text" name="w4_last_name" id="w4_last_name" class="form-control">
             </td>
             <td>
                <label for="w4_social_number" class="form-label fw-medium mb-1">(b) Social security number</label>
                <input type="number" name="w4_social_number" id="w4_social_number" class="form-control">
             </td>
          </tr>
          <tr>
             <td colspan="2">
                <label for="w4_address" class="form-label fw-medium mb-1">Address</label>
                <input type="text" name="w4_address" id="w4_address" class="form-control">
             </td>
             <td style="max-width: 100px;" rowspan="2">
                <b>Does your name match the name on your social security card?</b> If not, to ensure you get credit for your earnings, contact SSA at 800-772-1213 or go to <a style="text-decoration: none;color: inherit;" href="http://www.ssa.gov" target="_blank"><i>www.ssa.gov</i></a>.
             </td>
          </tr>
          <tr>
             <td colspan="2">
                <label for="w4_city_town_state_zip" class="form-label fw-medium mb-1">City or town, state, and ZIP code</label>
                <input type="text" name="w4_city_town_state_zip" id="w4_city_town_state_zip" class="form-control">
             </td>
          </tr>
          <tr>
             <td colspan="3">
                <div class="d-flex">
                   <div class="me-3"><b>(c)</b></div>
                   <div>
                      <div class="d-block">
                         <label class="form-check-label" for="w4_single_or_married"><input type="checkbox" name="w4_single_or_married" id="w4_single_or_married" value="1" class="form-check-input"> <b>Single or Married filing separately</b></label>
                      </div>
                      <div class="d-block">
                         <label class="form-check-label" for="w4_married_filing"><input type="checkbox" name="w4_married_filing" id="w4_married_filing" value="1" class="form-check-input"> <b>Married filing jointly or Qualifying surviving spouse</b></label>
                      </div>
                      <div class="d-block">
                         <label class="form-check-label" for="w4_head_of_household"><input type="checkbox" name="w4_head_of_household" id="w4_head_of_household" class="form-check-input" value="1"> <b>Head of household</b> (Check only if you’re unmarried and pay more than half the costs of keeping up a home for yourself and a qualifying individual.)</label>
                      </div>
                   </div>
                </div>
             </td>
          </tr>
       </table>
   
       <div class="d-block pb-3" style="border-bottom: 3px solid;">
          <b>Complete Steps 2–4 ONLY if they apply to you; otherwise, skip to Step 5</b>. See page 2 for more information on each step, who can claim exemption from withholding, other details, and privacy.
       </div>
   
       <table class="table table-borderless align-middle not-responsive default-td mb-0" style="border-bottom: 3px solid;">
          <tr>
             <td style="width: 140px;">
                <b style="font-size: 1.2em;">Step 2:<br>
                   Multiple Jobs or Spouse Works</b>
             </td>
             <td>
                <p class="mb-1">Complete this step if you (1) hold more than one job at a time, or (2) are married filing jointly and your spouse also works. The correct amount of withholding depends on income earned from all of these jobs.</p>
                <p class="mb-1">Do <b>only one</b> of the following.</p>
                <p class="mb-1"><b>(a)</b> Reserved for future use.</p>
                <p class="mb-1"><b>(b)</b> Use the Multiple Jobs Worksheet on page 3 and enter the result in Step 4(c) below; <b>or</b></p>
                <p class="mb-1"><b>(c)</b> If there are only two jobs total, you may check this box. Do the same on Form W-4 for the other job. This option is generally more accurate than (b) if pay at the lower paying job is more than half of the pay at the higher paying job. Otherwise, (b) is more accurate . . . <input type="checkbox" name="w4_is_more_accurate" value="1" class="form-check-input"></p>
             </td>
          </tr>
          <tr>
             <td colspan="2">
                <b>Complete Steps 3–4(b) on Form W-4 for only ONE of these jobs</b>. Leave those steps blank for the other jobs. (Your withholding will be most accurate if you complete Steps 3–4(b) on the Form W-4 for the highest paying job.)
             </td>
          </tr>
       </table>
   
       <table class="table table-bordered align-middle not-responsive default-td mb-0" style="border-bottom: 3px solid;">
          <tr>
             <td style="width: 120px;">
                <b style="font-size: 1.2em;">Step 3:<br>
                   Claim Dependent and Other Credits</b>
             </td>
             <td>
                If your total income will be $200,000 or less ($400,000 or less if married filing jointly):<br>
                Multiply the number of qualifying children under age 17 by $2,000 &nbsp;
                <label class="input-group clean-input-group d-inline-flex w-auto" for="w4_under_age">
                   <span class="input-group-text"><b>$</b></span>
                   <input type="number" id="w4_under_age" name="w4_under_age" class="form-control border border-secondary">
                </label>
                <br>
                Multiply the number of other dependents by $500 . . .
                <label class="input-group clean-input-group d-inline-flex w-auto" for="w4_dependents">
                   <span class="input-group-text"><b>$</b></span>
                   <input type="umber" id="w4_dependents" name="w4_dependents" class="form-control border border-secondary">
                </label>
                <p class="mt-2">Add the amounts above for qualifying children and other dependents. You may add to this the amount of any other credits. Enter the total here . . .</p>
             </td>
             <td class="align-bottom"><b>3</b></td>
             <td class="align-bottom">
                <label class="input-group clean-input-group" for="w4_total">
                   <span class="input-group-text"><b>$</b></span>
                   <input type="number" id="w4_total" name="w4_total" class="form-control border border-secondary">
                </label>
             </td>
          </tr>
          <tr>
             <td style="width: 120px;" rowspan="3">
                <b style="font-size: 1.2em;">Step 4:<br>
                   (optional): Other Adjustments</b>
             </td>
             <td>
                <b>(a) Other income (not from jobs)</b>. If you want tax withheld for other income you expect this year that won’t have withholding, enter the amount of other income here. This may include interest, dividends, and retirement income . . .
             </td>
             <td class="align-bottom"><b>4(a)</b></td>
             <td>
                <label class="input-group clean-input-group" for="w4_four_a">
                   <span class="input-group-text"><b>$</b></span>
                   <input type="number" id="" name="w4_four_a" id="w4_four_a" value="" class="form-control border border border-secondary">
                </label>
             </td>
          </tr>
          <tr>
             <td>
                <b>(b) Deductions</b>. If you expect to claim deductions other than the standard deduction and want to reduce your withholding, use the Deductions Worksheet on page 3 and enter the result here . . .
             </td>
             <td class="align-bottom"><b>4(b)</b></td>
             <td>
                <label class="input-group clean-input-group" for="w4_four_b">
                   <span class="input-group-text"><b>$</b></span>
                   <input type="number" id="w4_four_b" name="w4_four_b" value="" class="form-control border border-secondary">
                </label>
             </td>
          </tr>
          <tr>
             <td>
                <b>(c) Extra withholding</b>. Enter any additional tax you want withheld each <b>pay period</b> . .
             </td>
             <td class="align-bottom"><b>4(c)</b></td>
             <td>
                <label class="input-group clean-input-group" for="w4_four_c">
                   <span class="input-group-text"><b>$</b></span>
                   <input type="number" id="w4_four_c" name="w4_four_c" value="" class="form-control border border-secondary">
                </label>
             </td>
          </tr>
       </table>
   
       <table class="table table-bordered align-middle not-responsive default-td mb-0" style="border-bottom: 3px solid;">
          <tr>
             <td style="width: 110px;" rowspan="2">
                <b style="font-size: 1.2em;">Step 5:<br> Sign Here</b>
             </td>
             <td colspan="2">Under penalties of perjury, I declare that this certificate, to the best of my knowledge and belief, is true, correct, and complete.</td>
          </tr>
          <tr>
             <td class="clean-input-group">
               <label for="w4_employee_signature">Employee’s signature (This form is not valid unless you sign it.)</label>
                <input type="text" id="w4_employee_signature" name="w4_employee_signature" class="form-control border border-secondary">
             </td>
             <td class="clean-input-group" for="w4_signature_date">
                  <label for=""> Date</label>
                <input type="date" id="w4_signature_date" name="w4_signature_date" class="form-control border border-secondary">
             </td>
          </tr>
       </table>
   
       <table class="table table-bordered align-middle not-responsive default-td mb-0" style="border-bottom: 3px solid;">
          <tr>
             <td style="width: 110px;">
                <b style="font-size: 1.2em;">Employers Only</b>
             </td>
             <td>
                <label for="w4_employersAddress" class="form-label">Employer’s name and address</label>
                <textarea name="w4_employersAddress" id="w4_employersAddress" cols="30" rows="2" class="form-control" ></textarea>
             </td>
             <td>
                <label for="w4_employee_first_date" class="form-label">First date of employment</label>
                <input type="date" name="w4_employee_first_date" id="w4_employee_first_date" class="form-control">
             </td>
             <td>
                <label for="w4_employee_id_number" class="form-label">Employer identification number (EIN)</label>
                <input type="number" name="w4_employee_id_number" id="w4_employee_id_number" class="form-control">
             </td>
          </tr>
       </table>
   
       <table class="table table-borderless align-middle not-responsive default-td">
          <tr>
             <td><b>For Privacy Act and Paperwork Reduction Act Notice</b></td>
             <td>Cat. No. 10220Q</td>
             <td>Form <b style="font-size: 1.5em;">W-4</b> (2023)</td>
          </tr>
       </table>
   
       <div class="form-holder">
            <table class="table table-borderless align-middle not-responsive mb-0">
               <tr>
                  <td colspan="2" class="text-center fs-5 px-0" style="border-bottom: 1px solid;"><b>Step 2(b)—Multiple Jobs Worksheet </b><i>(Keep for your records.)</i></td>
               </tr>
               <tr>
                  <td colspan="2" class="px-0">If you choose the option in Step 2(b) on Form W-4, complete this worksheet (which calculates the total extra tax for all jobs) on <b>only ONE</b> Form W-4. Withholding will be most accurate if you complete the worksheet and enter the result on the Form W-4 for the highest paying job. To be accurate, submit a new Form W-4 for all other jobs if you have not updated your withholding since 2019.</td>
               </tr>
               <tr>
                  <td colspan="2" class="px-0"><b>Note</b>: If more than one job has annual wages of more than $120,000 or there are more than three jobs, see Pub. 505 for additional tables.</td>
               </tr>
               <tr>
                  <td>
                     <b>1 Two jobs.</b> If you have two jobs or you’re married filing jointly and you and your spouse each have onejob, find the amount from the appropriate table on page 4. Using the “Higher Paying Job” row and the“Lower Paying Job” column, find the value at the intersection of the two household salaries and enter that value on line 1. Then, <b>skip</b> to line 3
                  </td>
                  <td class="align-bottom" style="min-width: 220px;" for="w4_marriedfilingjointly">
                     <label class="input-group clean-input-group">
                        <span class="input-group-text"><b>1 $</b></span>
                        <input type="number" id="w4_marriedfilingjointly" name="w4_marriedfilingjointly" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <b>2 Three jobs.</b> If you and/or your spouse have three jobs at the same time, complete lines 2a, 2b, and 2c below. Otherwise, skip to line 3.
                     <p class="mt-2 ms-3"><b>a</b> Find the amount from the appropriate table on page 4 using the annual wages from the highest paying job in the “Higher Paying Job” row and the annual wages for your next highest paying jobin the “Lower Paying Job” column. Find the value at the intersection of the two household salaries and enter that value on line 2a</p>
                  </td>
                  <td class="align-bottom">
                     <label class="input-group clean-input-group" for="w4_yourspousehavethreejobs">
                        <span class="input-group-text"><b>2a $</b></span>
                        <input type="text" id="w4_yourspousehavethreejobs" name="w4_yourspousehavethreejobs" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p class="ms-3 mb-0"><b>b</b> Add the annual wages of the two highest paying jobs from line 2a together and use the total as the wages in the “Higher Paying Job” row and use the annual wages for your third job in the “Lower Paying Job” column to find the amount from the appropriate table on page 4 and enter this amount on line 2b</p>
                  </td>
                  <td class="align-bottom">
                     <label class="input-group clean-input-group" for="w4_ofthetwohighestpayingjobs">
                        <span class="input-group-text"><b>2b $</b></span>
                        <input type="number" id="w4_ofthetwohighestpayingjobs" name="w4_ofthetwohighestpayingjobs" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p class="ms-3 mb-0"><b>c</b> Add the amounts from lines 2a and 2b and enter the result on line 2c</p>
                  </td>
                  <td class="align-bottom">
                     <label class="input-group clean-input-group" for="w4_Addtheamountsfromlines2a">
                        <span class="input-group-text"><b>2c $</b></span>
                        <input type="number" name="w4_Addtheamountsfromlines2a" id="w4_Addtheamountsfromlines2a" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td><b>3</b> Enter the number of pay periods per year for the highest paying job. For example, if that job paysweekly, enter 52; if it pays every other week, enter 26; if it pays monthly, enter 12, etc.</td>
                  <td class="align-bottom">
                     <label class="input-group clean-input-group" for="w4_Enterthenumberofpayperiodsperyear">
                        <span class="input-group-text"><b>3 $</b></span>
                        <input type="number" id="w4_Enterthenumberofpayperiodsperyear" name="w4_Enterthenumberofpayperiodsperyear" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td><b>4 Divide</b> the annual amount on line 1 or line 2c by the number of pay periods on line 3. Enter thisamount here and in <b>Step 4(c)</b> of Form W-4 for the highest paying job (along with any other additionalamount you want withheld)</td>
                  <td class="align-bottom">
                     <label class="input-group clean-input-group" for="w4_theannualamountonline1orline2c">
                        <span class="input-group-text"><b>3 $</b></span>
                        <input type="number" id="w4_theannualamountonline1orline2c" form="w4_theannualamountonline1orline2c" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td colspan="2" class="text-center fs-5 px-0" style="border-bottom: 1px solid;border-top: 2px solid;"><b>Step 4(b)—Deductions Worksheet</b> <i>(Keep for your records.)</i></td>
               </tr>
               <tr>
                  <td><b>1</b> Enter an estimate of your 2023 itemized deductions (from Schedule A (Form 1040)). Such deductionsmay include qualifying home mortgage interest, charitable contributions, state and local taxes (up to $10,000), and medical expenses in excess of 7.5% of your income</td>
                  <td class="align-bottom" style="min-width: 220px;">
                     <label class="input-group clean-input-group" for="w4_2023itemizeddeductions">
                        <span class="input-group-text"><b>1 $</b></span>
                        <input type="number" id="w4_2023itemizeddeductions" name="w4_2023itemizeddeductions" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td>
                     <div class="row row-flex align-items-center">
                        <div class="col-auto"><b>2</b> Enter:</div>
                        <div class="col-auto">
                           <style>
                              ul.before-after {position: relative;}
                              ul.before-after::before, ul.before-after::after {position: absolute;top: 50%;transform: translateY(-58%);font-size: 6em;font-weight: 300;}
                              ul.before-after::before {content: "{";left: -15px;}
                              ul.before-after::after {content: "}";right: -30px;}
                           </style>
                           <ul style="margin: 0;" class="before-after">
                              <li>$27,700 if you’re married filing jointly or a qualifying surviving spouse</li>
                              <li>$20,800 if you’re head of household</li>
                              <li>$13,850 if you’re single or married filing separately</li>
                           </ul>
                        </div>
                     </div>
                  </td>
                  <td class="align-bottom" style="min-width: 220px;">
                     <label class="input-group clean-input-group" for="w4_qualifyingsurvivingspouse">
                        <span class="input-group-text"><b>2 $</b></span>
                        <input type="number" id="w4_qualifyingsurvivingspouse" name="w4_qualifyingsurvivingspouse" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td><b>3</b> If line 1 is greater than line 2, subtract line 2 from line 1 and enter the result here. If line 2 is greater than line 1, enter “-0-”</td>
                  <td class="align-bottom" style="min-width: 220px;">
                     <label class="input-group clean-input-group" for="w4_subtractline2fromline1">
                        <span class="input-group-text"><b>3 $</b></span>
                        <input type="number" id="w4_subtractline2fromline1" name="w4_subtractline2fromline1" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td><b>4</b> Enter an estimate of your student loan interest, deductible IRA contributions, and certain other adjustments (from Part II of Schedule 1 (Form 1040)). See Pub. 505 for more information</td>
                  <td class="align-bottom" style="min-width: 220px;">
                     <label class="input-group clean-input-group" for="w4_studentloaninterest">
                        <span class="input-group-text"><b>4 $</b></span>
                        <input type="number" id="w4_studentloaninterest" name="w4_studentloaninterest" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td><b>5 Add</b> lines 3 and 4. Enter the result here and in <b>Step 4(b)</b> of Form W-4</td>
                  <td class="align-bottom" style="min-width: 220px;">
                     <label class="input-group clean-input-group" for="w4_Entertheresulthere">
                        <span class="input-group-text"><b>5 $</b></span>
                        <input type="number" id="w4_Entertheresulthere" name="w4_Entertheresulthere" class="form-control border border-secondary" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
            </table>
   
            <table class="table table-borderless">
               <tr style="border-top: 2px solid;">
                  <td><b>Privacy Act and Paperwork Reduction Act Notice.</b> We ask for the information on this form to carry out the Internal Revenue laws of the United States. Internal Revenue Code sections 3402(f)(2) and 6109 and their regulations require you to provide this information; your employer uses it to determine your federal income tax withholding. Failure to provide a properly completed form will result in your being treated as a single person with no other entries on the form; providing fraudulent information may subject you to penalties. Routine uses of this information include giving it to the Department of Justice for civil and criminal litigation; to cities, states, the District of Columbia, and U.S. commonwealths and territories for use in administering their tax laws; and to the Department of Health and Human Services for use in the National Directory of New Hires. We may also disclose this information to other countries under a tax treaty, to federal and state agencies to enforce federal nontax criminal laws, or to federal law enforcement and intelligence agencies to combat terrorism.</td>
                  <td>You are not required to provide the information requested on a form that is subject to the Paperwork Reduction Act unless the form displays a valid OMB control number. Books or records relating to a form or its instructions must be retained as long as their contents may become material in the administration of any Internal Revenue law. Generally, tax returns and return information are confidential, as required by Code section 6103. The average time and expenses required to complete and file this form will vary depending on individual circumstances. For estimated averages, see the instructions for your income tax return. If you have suggestions for making this form simpler, we would be happy to hear from you. See the instructions for your income tax return.</td>
               </tr>
            </table>
   
            <div class="table-responsive">
               <table class="table table-bordered not-responsive align-middle default-td">
                  <tr>
                     <td colspan="13" class="text-center fs-5 px-0" style="border-bottom: 1px solid;border-top: 2px solid;"><b>Married Filing Jointly or Qualifying Surviving Spouse</b></td>
                  </tr>
                  <tr>
                     <td rowspan="2" style="min-width: 150px;"><b>Higher Paying Job Annual Taxable Wage & Salary</b></td>
                     <td colspan="12"><b>Lower Paying Job Annual Taxable Wage & Salary</b></td>
                  </tr>
                  <tr>
                     <td>$0 - 9,999</td>
                     <td>$10,000 - 19,999</td>
                     <td>$20,000 - 29,999</td>
                     <td>$30,000 - 39,999</td>
                     <td>$40,000 - 49,999</td>
                     <td>$50,000 - 59,999</td>
                     <td>$60,000 - 69,999</td>
                     <td>$70,000 - 79,999</td>
                     <td>$80,000 - 89,999</td>
                     <td>$90,000 - 99,999</td>
                     <td>$100,000 - 109,999</td>
                     <td>$110,000 - 120,000</td>
                  </tr>
                  <tr>
                     <td>$0 - 9,999 <br>$10,000 - 19,999 <br>$20,000 - 29,999</td>
                     <td>$0 <br>0 <br>850</td>
                     <td>$0 <br> 930 <br> 1,850</td>
                     <td>$850 <br>1,850 <br> 2,920</td>
                     <td>$850 <br>2,000 <br>3,120</td>
                     <td>$1,000 <br>2,200 <br>3,320</td>
                     <td>$1,020 <br>2,220 <br>3,340</td>
                     <td>$1,020 <br>2,220 <br>3,340</td>
                     <td>$1,020 <br>2,220 <br>3,340</td>
                     <td>$1,020 <br>2,220 <br>3,340</td>
                     <td>$1,020 <br>2,220 <br>4,320</td>
                     <td>$1,020 <br>3,200 <br>5,320</td>
                     <td>$1,870 <br>4,070 <br>6,190</td>
                  </tr>
                  <tr>
                     <td>$30,000 - 39,999 <br>$40,000 - 49,999 <br>$50,000 - 59,999</td>
                     <td>850 <br>1,000 <br>1,020</td>
                     <td>2,000 <br>2,200 <br>2,220</td>
                     <td>3,120 <br>3,320 <br>3,340</td>
                     <td>3,320 <br>3,520 <br>3,540</td>
                     <td>3,520 <br>3,720 <br>3,740</td>
                     <td>3,540 <br>3,740 <br>3,760</td>
                     <td>3,540 <br>3,740 <br>4,750</td>
                     <td>3,540 <br>4,720 <br>5,750</td>
                     <td>4,520 <br>5,720 <br>6,750</td>
                     <td>5,520 <br>6,720 <br>7,750</td>
                     <td>6,520 <br>7,720 <br>8,750</td>
                     <td>7,390 <br>8,590 <br>9,610</td>
                  </tr>
                  <tr>
                     <td>$60,000 - 69,999 <br>$70,000 - 79,999 <br>$80,000 - 99,999</td>
                     <td>1,020 <br>1,020 <br>1,020</td>
                     <td>2,220 <br>2,220 <br>2,220</td>
                     <td>3,340 <br>3,340 <br>4,170</td>
                     <td>3,540 <br>3,540 <br>5,370</td>
                     <td>3,740 <br>4,720 <br>6,570</td>
                     <td>4,750 <br>5,750 <br>7,600</td>
                     <td>5,750 <br>6,750 <br>8,600</td>
                     <td>6,750 <br>7,750 <br>9,600</td>
                     <td>7,750 <br>8,750 <br>10,600</td>
                     <td>8,750 <br>9,750 <br>11,600</td>
                     <td>9,750 <br>10,750 <br>12,600</td>
                     <td>10,610 <br>11,610 <br>13,460</td>
                  </tr>
                  <tr>
                     <td>$100,000 - 149,999 <br>$150,000 - 239,999 <br>$240,000 - 259,999</td>
                     <td>1,870 <br>2,040 <br>2,040</td>
                     <td>4,070 <br>4,440 <br>4,440</td>
                     <td>6,190 <br>6,760 <br>6,760</td>
                     <td>7,390 <br>8,160 <br>8,160</td>
                     <td>8,590 <br>9,560 <br>9,560</td>
                     <td>9,610 <br>10,780 <br>10,780</td>
                     <td>10,610 <br>11,980 <br>11,980</td>
                     <td>11,660 <br>13,180 <br>13,180</td>
                     <td>12,860 <br>14,380 <br>14,380</td>
                     <td>14,060 <br>15,580 <br>15,580</td>
                     <td>15,260 <br>16,780 <br>16,780</td>
                     <td>16,330 <br>17,850 <br>17,850</td>
                  </tr>
                  <tr>
                     <td>$260,000 - 279,999 <br>$280,000 - 299,999 <br>$300,000 - 319,999</td>
                     <td>2,040 <br>2,040 <br>2,040</td>
                     <td>4,440 <br>4,440 <br>4,440</td>
                     <td>6,760 <br>6,760 <br>6,760</td>
                     <td>8,160 <br>8,160 <br>8,160</td>
                     <td>9,560 <br>9,560 <br>9,560</td>
                     <td>10,780 <br>10,780 <br>10,780</td>
                     <td>11,980 <br>11,980 <br>11,980</td>
                     <td>13,180 <br>13,180 <br>13,470</td>
                     <td>14,380 <br>14,380 <br>15,470</td>
                     <td>15,580 <br>15,870 <br>17,470</td>
                     <td>16,780 <br>17,870 <br>19,470</td>
                     <td>18,140 <br>19,740 <br>21,340</td>
                  </tr>
                  <tr>
                     <td>$320,000 - 364,999 <br>$365,000 - 524,999 <br>$525,000 and over</td>
                     <td>2,040 <br>2,970 <br>3,140</td>
                     <td>4,440 <br>6,470 <br>6,840</td>
                     <td>6,760 <br>9,890 <br>10,460</td>
                     <td>8,550 <br>12,390 <br>13,160</td>
                     <td>10,750 <br>14,890 <br>15,860</td>
                     <td>12,770 <br>17,220 <br>18,390</td>
                     <td>14,770 <br>19,520 <br>20,890</td>
                     <td>16,770 <br>21,820 <br>23,390</td>
                     <td>18,770 <br>24,120 <br>25,890</td>
                     <td>20,770 <br>26,420 <br>28,390</td>
                     <td>22,770 <br>28,720 <br>30,890</td>
                     <td>24,640 <br>30,880 <br>33,250</td>
                  </tr>
                  <tr>
                     <td colspan="13" class="text-center fs-5 px-0" style="border-bottom: 1px solid;border-top: 2px solid;"><b>Single or Married Filing Separately</b></td>
                  </tr>
                  <tr>
                     <td rowspan="2" style="min-width: 150px;"><b>Higher Paying Job Annual Taxable Wage & Salary</b></td>
                     <td colspan="12"><b>Lower Paying Job Annual Taxable Wage & Salary</b></td>
                  </tr>
                  <tr>
                     <td>$0 - 9,999</td>
                     <td>$10,000 - 19,999</td>
                     <td>$20,000 - 29,999</td>
                     <td>$30,000 - 39,999</td>
                     <td>$40,000 - 49,999</td>
                     <td>$50,000 - 59,999</td>
                     <td>$60,000 - 69,999</td>
                     <td>$70,000 - 79,999</td>
                     <td>$80,000 - 89,999</td>
                     <td>$90,000 - 99,999</td>
                     <td>$100,000 - 109,999</td>
                     <td>$110,000 - 120,000</td>
                  </tr>
                  <tr>
                     <td>$0 - 9,999 <br>$10,000 - 19,999 <br>$20,000 - 29,999</td>
                     <td>$310 <br>890 <br>1,020</td>
                     <td>$890 <br>1,630 <br>1,750</td>
                     <td>$1,020 <br> 1,750 <br>1,880</td>
                     <td>$1,020 <br>1,750 <br>2,720</td>
                     <td>$1,020 <br> 2,600 <br>3,720</td>
                     <td>$1,860 <br> 3,600 <br> 4,720</td>
                     <td>$1,870 <br> 3,600 <br>4,730</td>
                     <td>$1,870 <br>3,600 <br>4,730</td>
                     <td>$1,870 <br>3,600 <br>4,890</td>
                     <td>$1,870 <br>3,760 <br>5,090</td>
                     <td>$2,030 <br>3,960 <br>5,290</td>
                     <td>$2,040 <br>3,970 <br>5,300</td>
                  </tr>
                  <tr>
                     <td>$30,000 - 39,999 <br>$40,000 - 59,999 <br>$60,000 - 79,999</td>
                     <td>1,020 <br>1,710 <br>1,870</td>
                     <td>1,750 <br>3,450 <br>3,600</td>
                     <td>2,720 <br>4,570 <br>4,730</td>
                     <td>3,720 <br>5,570 <br>5,860</td>
                     <td>4,720 <br>6,570 <br>7,060</td>
                     <td>5,720 <br>7,700 <br>8,260</td>
                     <td>5,730 <br>7,910 <br>8,460</td>
                     <td>5,890 <br>8,110 <br>8,660</td>
                     <td>6,090 <br> 8,310 <br>8,860</td>
                     <td>6,290 <br>8,510 <br>9,060</td>
                     <td>6,490 <br>8,710 <br>9,260</td>
                     <td>6,500 <br>8,720 <br>9,280</td>
                  </tr>
                  <tr>
                     <td>$80,000 - 99,999 <br>$100,000 - 124,999 <br>$125,000 - 149,999</td>
                     <td>1,870 <br>2,040 <br>2,040</td>
                     <td>3,730 <br>3,970 <br>3,970</td>
                     <td>5,060 <br>5,300 <br>5,300</td>
                     <td>6,260 <br>6,500 <br>6,500</td>
                     <td>7,460 <br>7,700 <br>7,700</td>
                     <td>8,660 <br>8,900 <br>9,610</td>
                     <td>8,860 <br>9,110 <br>10,610</td>
                     <td>9,060 <br>9,610 <br>11,610</td>
                     <td>9,260 <br>10,610 <br>12,610</td>
                     <td>9,460 <br>11,610 <br>13,610</td>
                     <td>10,430 <br>12,610 <br>14,900</td>
                     <td>11,240 <br>13,430 <br>16,020</td>
                  </tr>
                  <tr>
                     <td>$150,000 - 174,999 <br>$175,000 - 199,999 <br>$200,000 - 249,999</td>
                     <td>2,040 <br>2,720 <br>2,900</td>
                     <td>3,970 <br>5,450 <br>5,930</td>
                     <td>5,610 <br>7,580 <br>8,360</td>
                     <td>7,610 <br>9,580 <br>10,660</td>
                     <td>9,610 <br>11,580 <br>12,960</td>
                     <td>11,610 <br>13,870 <br>15,260</td>
                     <td>12,610 <br>15,180 <br>16,570</td>
                     <td>13,750 <br>16,480 <br>17,870</td>
                     <td>15,050 <br>17,780 <br>19,170</td>
                     <td>16,350 <br>19,080 <br>20,470</td>
                     <td>17,650 <br>20,380 <br>21,770</td>
                     <td>18,770 <br>21,490 <br>22,880</td>
                  </tr>
                  <tr>
                     <td>$250,000 - 399,999 <br>$400,000 - 449,999 <br>$450,000 and over</td>
                     <td>2,970 <br>2,970 <br>3,140</td>
                     <td>6,010 <br>6,010 <br>6,380</td>
                     <td>8,440 <br>8,440 <br>9,010</td>
                     <td>10,740 <br>10,740 <br>11,510</td>
                     <td>13,040 <br>13,040 <br>14,010</td>
                     <td>15,340 <br>15,340 <br>16,510</td>
                     <td>16,640 <br>16,640 <br>18,010</td>
                     <td>17,940 <br>17,940 <br>19,510</td>
                     <td>19,240 <br> 19,240 <br>21,010</td>
                     <td>20,540 <br>20,540 <br>22,510</td>
                     <td>21,840 <br> 21,840 <br>24,010</td>
                     <td>22,960 <br>22,960 <br>25,330</td>
                  </tr>
                  <tr>
                     <td colspan="13" class="text-center fs-5 px-0" style="border-bottom: 1px solid;border-top: 2px solid;"><b>Head of Household</b></td>
                  </tr>
                  <tr>
                     <td rowspan="2" style="min-width: 150px;"><b>Higher Paying Job Annual Taxable Wage & Salary</b></td>
                     <td colspan="12"><b>Lower Paying Job Annual Taxable Wage & Salary</b></td>
                  </tr>
                  <tr>
                     <td>$0 - 9,999</td>
                     <td>$10,000 - 19,999</td>
                     <td>$20,000 - 29,999</td>
                     <td>$30,000 - 39,999</td>
                     <td>$40,000 - 49,999</td>
                     <td>$50,000 - 59,999</td>
                     <td>$60,000 - 69,999</td>
                     <td>$70,000 - 79,999</td>
                     <td>$80,000 - 89,999</td>
                     <td>$90,000 - 99,999</td>
                     <td>$100,000 - 109,999</td>
                     <td>$110,000 - 120,000</td>
                  </tr>
                  <tr>
                     <td>$0 - 9,999 <br>$10,000 - 19,999 <br>$20,000 - 29,999</td>
                     <td>$0 <br> 620 <br>860</td>
                     <td>$620 <br>1,630 <br>2,060</td>
                     <td>$860 <br>2,060 <br>2,490</td>
                     <td>$1,020 <br> 2,220 <br>2,650</td>
                     <td>$1,020 <br> 2,220 <br>2,650</td>
                     <td>$1,020 <br>2,220 <br>3,280</td>
                     <td>$1,020 <br>2,850 <br>4,280</td>
                     <td>$1,650 <br>3,850 <br>5,280</td>
                     <td>$1,870 <br>4,070 <br>5,520</td>
                     <td>$1,870 <br>4,090 <br>5,720</td>
                     <td>$1,890 <br>4,290 <br>5,920</td>
                     <td>$2,040 <br>4,440 <br>6,070</td>
                  </tr>
                  <tr>
                     <td>$30,000 - 39,999 <br>$40,000 - 59,999 <br>$60,000 - 79,999</td>
                     <td>1,020 <br>1,020 <br>1,500</td>
                     <td>2,220 <br>2,220 <br>3,700</td>
                     <td>2,650 <br>3,130 <br>3,130</td>
                     <td>2,810 <br>4,290 <br>6,290</td>
                     <td>3,440 <br>5,290 <br>7,480</td>
                     <td>4,440 <br>6,290 <br>8,680</td>
                     <td>5,440 <br>7,480 <br>9,880</td>
                     <td>6,460 <br>8,680 <br>11,080</td>
                     <td>6,880 <br>9,100 <br>11,500</td>
                     <td>7,080 <br>9,300 <br>11,700</td>
                     <td>7,280 <br>9,500 <br>11,900</td>
                     <td>7,430 <br>9,650 <br>12,050</td>
                  </tr>
                  <tr>
                     <td>$80,000 - 99,999 <br>$100,000 - 124,999 <br>$125,000 - 149,999</td>
                     <td>1,870 <br>2,040 <br>2,040</td>
                     <td>4,070 <br>4,440 <br>4,440</td>
                     <td>5,690 <br>6,070 <br>6,070</td>
                     <td>7,050 <br>7,430 <br>7,430</td>
                     <td>8,250 <br>8,630 <br>8,630</td>
                     <td>9,450 <br>9,830 <br>9,980</td>
                     <td>10,650 <br>11,030 <br>11,980</td>
                     <td>11,850 <br>12,230 <br>13,980</td>
                     <td>12,260 <br>13,190 <br>15,190</td>
                     <td>12,460 <br>14,190 <br>16,190</td>
                     <td>12,870 <br>15,190 <br>17,270</td>
                     <td>13,820 <br>16,150 <br>18,530</td>
                  </tr>
                  <tr>
                     <td>$150,000 - 174,999 <br>$175,000 - 199,999 <br>$200,000 - 249,999</td>
                     <td>2,040 <br>2,190 <br>2,720</td>
                     <td>4,440 <br>5,390 <br>6,190</td>
                     <td>6,070 <br>7,820 <br>8,920</td>
                     <td>7,980 <br>9,980 <br>11,380</td>
                     <td>9,980 <br>11,980 <br>13,680</td>
                     <td>11,980 <br>14,060 <br>15,980</td>
                     <td>13,980 <br>16,360 <br>18,280</td>
                     <td>15,980 <br>18,660 <br>20,580</td>
                     <td>17,420 <br>20,170 <br>22,090</td>
                     <td>18,720 <br>21,470 <br>23,390</td>
                     <td>20,020 <br>22,770 <br>24,690</td>
                     <td>21,280 <br>24,030 <br>25,950</td>
                  </tr>
                  <tr>
                     <td>$250,000 - 449,999 <br>$450,000 and over</td>
                     <td>2,970 <br>3,140</td>
                     <td>6,470 <br>6,840</td>
                     <td>9,200 <br>9,770</td>
                     <td>11,660 <br>12,430</td>
                     <td>13,960 <br>14,930</td>
                     <td>16,260 <br>17,430</td>
                     <td>18,560 <br>19,930</td>
                     <td>20,860 <br>22,430</td>
                     <td>22,380 <br>24,150</td>
                     <td>23,680 <br>25,650</td>
                     <td>24,980 <br>27,150</td>
                     <td>26,230 <br>28,600</td>
                  </tr>
               </table>
                  <div class="row">
                     <Label for="w4-signature" for="">Signature</Label>
                     <div class="col-md-6">
                           <textarea id="w4-signature" name="w4-signature"></textarea>
                     </div>
                     <div class="col-md-6"></div>
                  </div>
                  <div class="">
                     <button type="submit" class=" btn btn-primary active">Save and Continue</button>
                 </div>
            </div>
      </div><!--/ .form-holder -->
   </form>
   </div>
   