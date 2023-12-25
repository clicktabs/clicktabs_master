@php
    $routeName=request()->route()->getName();
@endphp

<table class="table table-bordered align-middle">
    <tr>
        <td class="bg-black py-2 px-3">
            <h3 class="text-center m-0 text-white">ADMINISTRATIVE</h3>
        </td>
    </tr>
    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0018. National Provider Identifier (NPI) for the attending physician who has signed
                the plan of care</strong>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex align-items-center">
                <div class="col-6">
                    <input name="npi" type="text" value="{{!empty($account->npi)?$account->npi:''}}"
                           class="form-control">   
                </div>
                <div class="col-6">
                    <label class="form-check-label">
                        <input type="checkbox" value="1" name="ukUnknown" class="form-check-input"> UK - Unknown or Not
                        Available</label>
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0010. CMS Certification Number</strong>
        </td>
    </tr>
    <tr>
        <td>

<input type="text" name="medicare" value="{{!empty($account->medicaid_p_n)?$account->medicaid_p_n:''}}"
                   class="form-control">
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0014. Branch State</strong>
        </td>

    </tr>
    <tr>
        <td>
            <input type="text" name="branchState" value="{{!empty($account->state)?$account->state:''}}"
                   class="form-control">
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0016. Branch ID Number</strong>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="branchId" value="@if ($routeName=='skilled-agency.get-oasis-e-start-of-care'){{!empty($administrative->branchId)?$administrative->branchId:''}}@endif"
                   class="form-control">
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0020. Patient ID Number</strong>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="patientIdNo"
                   value="{{$patient->patient_code}}"
                   class="form-control">
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0040. Patient Name</strong>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex align-items-center g-2 gx-5">
                <div class="col-lg-6">
                    <div class="row row-flex align-items-center">
                        <div class="col-auto flex-grow-1">
                            <div class="input-group">
                                <input type="text" name="patientName"
                                       value="{{$patient->first_name}}" id=""
                                       class="form-control">
                                <label class="input-group-text">(First)</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="checkbox" value="1" name="patientMi" class="form-check-input"> (MI)</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-flex align-items-center g-2">
                        <div class="col-auto flex-grow-1">
                            <div class="input-group">
                                <input type="text" name="lastName"
                                       value="{{$patient->last_name}}" id=""
                                       class="form-control">
                                <label class="input-group-text">(Last)</label>
                            </div>
                        </div>
                        <div class="col-auto flex-shrink-1">
                            <div class="input-group">
                                <input type="text" id=""
                                       value="{{$patient->middle_name}}"
                                       name="middleName" class="form-control">
                                <label class="input-group-text">(Suffix)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0050. Patient State of Residence</strong>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="state"
                   value="{{ $patient->address->state }}" class="form-control">
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0060. Patient ZIP Code</strong>
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="zip"
                   value="{{ $patient->address->zip }}"
                   class="form-control">
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0064. Social Security Number</strong>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex align-items-center">
                <div class="col-6">
                    <input type="text" name="socialSecurityNumber"
                           value="{{ $patient->social_security_no }}"
                           class="form-control"></div>
                <div class="col-6">
                    <label class="form-check-label">
                        <input type="checkbox" value="1" name="ssnUnknown" value="1" class="form-check-input"> UK - Unknown or Not
                        Available</label>
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0063. Medicare Number</strong>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex align-items-center">
                <div class="col-6">
                    <input type="text" name="medicare" value="{{!empty($account->medicare_p_n)?$account->medicare_p_n:''}}"
                           class="form-control"></div>
                <div class="col-6">
                    <label class="form-check-label">
                        <input type="checkbox" value="1" name="noMedicare" class="form-check-input"> NA - No Medicare
                    </label>
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">

            <strong>M0065. Medicaid Number</strong>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex align-items-center">
                <div class="col-6">
                    <input type="text" name="medicare" value="{{!empty($account->medicaid_p_n)?$account->medicaid_p_n:''}}"
                           class="form-control"></div>
                <div class="col-6">
                    <label class="form-check-label">
                        <input type="checkbox" value="1" name="noMedicaid" class="form-check-input"> NA - No Medicaid
                    </label>
                </div>
            </div>
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0069. Gender</strong>
        </td>
    </tr>
    <tr>
        <td class="labels-group">
            <label class="form-check-label">
                <input {{ $patient->gender === 'male' ? 'checked' : '' }} type="radio" name="gender" value="1" />
                1. Male</label>
            <label class="form-check-label">
                <input {{ $patient->gender === 'female' ? 'checked' : '' }} type="radio" value="0" name="gender" class="form-check-input">
                2. Female</label>
        </td>
    </tr>

    <tr>
        <td class="bg-secondary-subtle">
            <strong>M0066. Birth Date</strong>
        </td>
    </tr>
    <tr>
        <td>
            <div class="row row-flex align-items-center g-2">
                <div class="col-auto">
                    <div class="input-group">
                        <label class="input-group-text">Date</label>
                        <input name="dateofbirth" type="date" id="" value="{{ $patient->date_of_birth }}" class="form-control">
                    </div>
                    <!--  <div class="col-auto">
                        <div class="input-group">
                           <label class="input-group-text">Day</label>
                           <input type="text" id="" class="form-control">
                        </div>
                     </div>
                     <div class="col-auto">
                        <div class="input-group">
                           <label class="input-group-text">Year</label>
                           <input type="text" id="" class="form-control">
                        </div>
                    </div> -->
                </div>
        </td>
    </tr>
</table>



