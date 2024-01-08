@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{asset('assets/css/patients-admission.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/patient/communication/style.css')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/signature_pad/dist/signature-pad.css">
    <style>
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }

        .avatar-upload .avatar-edit input {
            display: none;
        }

        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .signature-container {
        max-width: 400px;
        margin: 0 auto;
    }

    #signatureCanvas {
        border: 2px solid #333;
        width: 100%;
        height: 200px;
        cursor: crosshair;
    }

    .button-container {
        margin-top: 0px;
        text-align: center;
    }

    .button-container button {
        margin: 0 10px;
    }
    .label{
        font-weight: bold;
    }
    @media (max-width: 767){
        .table-responsive2{
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }
    @media (min-width: 768px) {
    /* Add styles for smaller screens here */
    .tableDesign {
        table-layout: fixed;
        max-width: 100%;
    }

    /* Define specific pixel widths for each column */
    .w-35 {
        width: 35%;
    }

    .w-15 {
        width: 15%;
    }

    .w-20 {
        width: 20%;
    }

    .table td {
        white-space: normal;
    }
}

    </style>
@endsection

@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <!-- Page header -->
            <div class="rc">
                <!-- Title -->
                <h1 class="gu teu text-slate-800 font-bold">Account Settings ✨</h1>
            </div>
            <div id="tabs">
                <div class="main_content_nav">
                    <ul class="bg-[#4133BF]">
                        @if($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('Administrator'))
                            <li><a href="#tabs-account">My account</a></li>
                            <li><a href="#tabs-evv-setup">EVV Setup</a></li>
                            <li><a href="#tabs-signature">Signature</a></li>
                            <li><a href="#tabs-agreement">Agreement</a></li>
                            @if ($user->hasRole('admin') || $user->hasRole('Administrator'))
                                <li><a href="#tabs-subscription">Subscription</a></li>
                            @endif
                        @elseif($user->hasRole('Employee'))
                            <li><a href="#tabs-accountEmp">My account</a></li>
                            {{-- <li><a href="#tabs-signature">Signature</a></li> --}}
                            <li><a href="#tabs-agreement">Agreement</a></li>
                        @endif
                    </ul>
                </div>

                @if($user->hasRole('Employee'))
                    <div class="bg-white bd rounded-sm rc" id="tabs-accountEmp">
                        <div class="flex vt ak zc qv">
                            <!-- Panel -->
                            <div class="uw">
                                <!-- Panel body -->
                                <div class="d_fd">
                                    <form action="{{route('account.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <section>
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <div class="container">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            @if (!empty($account) && !empty($account->image))
                                                                <div id="imagePreview" style="background-image: url('{{ $account->image }}');"></div>
                                                            @else
                                                                <div id="imagePreview"
                                                                    style="background-image: url('{{asset('employee/avatar.svg')}}');">
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Business Profile -->

                                    <!-- Account Information -->
                                    <section class="px-[20px]">
                                        <h3 class="gf gb text-slate-800 font-bold rt">My Account (Employee Panel)</h3>
                                        <div class="je jc fg jm jb rw">
                                            <!-- Company Name -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="company_name">Company Name</label>
                                                <input id="company_name" name="company_name" class="s ou" type="text" value="{{ $account ? $account->company_name : '' }}">
                                            </div>
                                            <!-- Contact Person First Name -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="contact_person_firstname">Contact person FirstName</label>
                                                <input id="contact_person_firstname" name="contact_person_firstname" class="s ou" type="text" value="{{ $account ? $account->contact_person_firstname : '' }}">
                                            </div>
                                            <!-- Last Name -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="contact_person_lastname">LastName</label>
                                                <input id="contact_person_lastname" name="contact_person_lastname" class="s ou" type="text" value="{{ $account ? $account->contact_person_lastname : '' }}">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Address Information -->
                                    <section class="px-[20px]">
                                        <div class="je jc fg jm jb rw">
                                            <!-- Address Line 1 -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="address_line">Address Line 1</label>
                                                <input id="address_line" name="address_line" class="s ou" type="text" value="{{ $account ? $account->address_line : '' }}">
                                            </div>
                                            <!-- City -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="city">City</label>
                                                <input id="city" name="city" class="s ou" type="text" value="{{ $account ? $account->city : '' }}">
                                            </div>
                                            <!-- State -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="state">State</label>
                                                <input id="state" name="state" class="s ou" type="text" value="{{ $account ? $account->state : '' }}">
                                            </div>
                                            <!-- Zip -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="zip">Zip</label>
                                                <input id="zip" name="zip" class="s ou" type="text" value="{{ $account ? $account->zip : '' }}">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Contact Information -->
                                    <section class="px-[20px]">
                                        <div class="je jc fg jm jb rw">
                                            <!-- Phone -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="phone">Phone</label>
                                                <input id="phone" name="phone" class="s ou" type="text" value="{{ $account ? $account->phone : '' }}">
                                            </div>
                                            <!-- Fax -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="fax">Fax</label>
                                                <input id="fax" name="fax" class="s ou" type="text" value="{{ $account ? $account->fax : '' }}">
                                            </div>
                                            <!-- Email -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="email">Email</label>
                                                <input id="email" name="email" class="s ou" type="text" value="{{ $account ? $account->email : '' }}">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <!-- Panel footer -->
                                <footer class="mt-[20px]">
                                    <div class="flex ak vm vg co border-slate-200">
                                        <div class="flex ls">
                                            <button class="btn ho xi ye">Save Changes</button>
                                        </div>
                                    </div>
                                </footer>
                            </form>

                            </div>

                        </div>
                    </div>
                @else
                    <div class="bg-white bd rounded-sm rc" id="tabs-account">
                        <div class="flex vt ak zc qv">
                            <!-- Panel -->
                            <div class="uw">
                                <!-- Panel body -->
                                <div class="d_fd">
                                    <form action="{{route('account.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <section>
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <div class="container">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg"/>
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            @if (!empty($account) && !empty($account->image))
                                                                <div id="imagePreview" style="background-image: url('{{ $account->image }}');"></div>
                                                            @else
                                                                <div id="imagePreview"
                                                                    style="background-image: url('{{asset('employee/avatar.svg')}}');">
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Business Profile -->

                                    <!-- Account Information -->
                                    <section class="px-[20px]">
                                        <h3 class="gf gb text-slate-800 font-bold rt">My Account (Admin Panel)</h3>
                                        <div class="je jc fg jm jb rw">
                                            <!-- Company Name -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="company_name">Company Name</label>
                                                <input id="company_name" name="company_name" class="s ou" type="text" value="{{ $account ? $account->company_name : '' }}">
                                            </div>
                                            <!-- Contact Person First Name -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="contact_person_firstname">Contact person FirstName</label>
                                                <input id="contact_person_firstname" name="contact_person_firstname" class="s ou" type="text" value="{{ $account ? $account->contact_person_firstname : '' }}">
                                            </div>
                                            <!-- Last Name -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="contact_person_lastname">LastName</label>
                                                <input id="contact_person_lastname" name="contact_person_lastname" class="s ou" type="text" value="{{ $account ? $account->contact_person_lastname : '' }}">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Address Information -->
                                    <section class="px-[20px]">
                                        <div class="je jc fg jm jb rw">
                                            <!-- Address Line 1 -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="address_line">Address Line 1</label>
                                                <input id="address_line" name="address_line" class="s ou" type="text" value="{{ $account ? $account->address_line : '' }}">
                                            </div>
                                            <!-- City -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="city">City</label>
                                                <input id="city" name="city" class="s ou" type="text" value="{{ $account ? $account->city : '' }}">
                                            </div>
                                            <!-- State -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="state">State</label>
                                                <input id="state" name="state" class="s ou" type="text" value="{{ $account ? $account->state : '' }}">
                                            </div>
                                            <!-- Zip -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="zip">Zip</label>
                                                <input id="zip" name="zip" class="s ou" type="text" value="{{ $account ? $account->zip : '' }}">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Contact Information -->
                                    <section class="px-[20px]">
                                        <div class="je jc fg jm jb rw">
                                            <!-- Phone -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="phone">Phone</label>
                                                <input id="phone" name="phone" class="s ou" type="text" value="{{ $account ? $account->phone : '' }}">
                                            </div>
                                            <!-- Fax -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="fax">Fax</label>
                                                <input id="fax" name="fax" class="s ou" type="text" value="{{ $account ? $account->fax : '' }}">
                                            </div>
                                            <!-- Email -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="email">Email</label>
                                                <input id="email" name="email" class="s ou" type="text" value="{{ $account ? $account->email : '' }}">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Provider Information -->
                                    <section class="px-[20px]">
                                        <div class="je jc fg jm jb rw">
                                            <!-- National Provider ID (NPI) -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="npi">National Provider ID (NPI)</label>
                                                <input id="npi" name="npi" class="s ou" type="text" value="{{ $account ? $account->npi : '' }}">
                                            </div>
                                            <!-- Primary Tax ID -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="tax_id">Primary Tax ID</label>
                                                <input id="tax_id" name="tax_id" class="s ou" type="text" value="{{ $account ? $account->tax_id : '' }}">
                                            </div>
                                            <!-- Secondary Tax ID -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="secondary_tax">Secondary Tax ID</label>
                                                <input id="secondary_tax" name="secondary_tax" class="s ou" type="text" value="{{ $account ? $account->secondary_tax : '' }}">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Additional Information -->
                                    <section class="px-[20px]">
                                        <div class="je jc fg jm jb rw">
                                            <!-- Medicaid Provider Number -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="medicaid_p_n">Medicaid Provider Number</label>
                                                <input id="medicaid_p_n" name="medicaid_p_n" class="s ou" type="text" value="{{ $account ? $account->medicaid_p_n : '' }}">
                                            </div>
                                            <!-- Medicare Provider Number -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="medicare_p_n">Medicare Provider Number</label>
                                                <input id="medicare_p_n" name="medicare_p_n" class="s ou" type="text" value="{{ $account ? $account->medicare_p_n : '' }}">
                                            </div>
                                            <!-- DD Provider Contract ID -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="dd_contract">DD Provider Contract Number</label>
                                                <input id="dd_contract" name="dd_contract" class="s ou" type="text" value="{{ $account ? $account->provider_contract : '' }}">
                                            </div>
                                            <!-- Passport Provider Contract ID -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="provider_contract">Passport Contract Number</label>
                                                <input id="passport" name="passport" class="s ou" type="text" value="{{ $account ? $account->provider_contract : '' }}">
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Agency Information -->
                                    <section class="px-[20px]">
                                        <div class="je jc fg jm jb rw">
                                            <!-- Unique Agency Oasis ID Code -->
                                                <!-- CAPHS Vendor ID -->
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="caphs_vendor_id">CAPHS Vendor ID</label>
                                                    <input id="caphs_vendor_id" name="caphs_vendor_id" class="s ou" type="text" value="{{ $account ? $account->caphs_vendor_id : '' }}">
                                                </div>
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="unique_agency_oasis">Unique Agency Oasis ID Code</label>
                                                <input id="unique_agency_oasis" name="unique_agency_oasis" class="s ou" type="text" value="{{ $account ? $account->unique_agency_oasis : '' }}">
                                            </div>
                                            <!-- DME Medicaid Provider Identifier -->
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="dme_medicaid_p_i">DME Medicaid Provider Identifier</label>
                                                <input id="dme_medicaid_p_i" name="dme_medicaid_p_i" class="s ou" type="text" value="{{ $account ? $account->dme_medicaid_p_i : '' }}">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <!-- Panel footer -->
                                <footer class="mt-[20px]">
                                    <div class="flex ak vm vg co border-slate-200">
                                        <div class="flex ls">
                                            <button class="btn ho xi ye">Save Changes</button>
                                        </div>
                                    </div>
                                </footer>
                            </form>

                            </div>

                        </div>
                    </div>
                @endif

                @if($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('Administrator'))
                    <div class="bg-white bd rounded-sm rc" id="tabs-evv-setup">
                        <div class="flex ak zc qv">
                            <!-- Panel -->
                            <div class="uw">

                                <!-- Panel body -->
                                <div class="d_fd ">
                                    <form name="evv_information" id="evv_information">
                                        <section class="px-[20px] mt-3">
                                            <div class="je jc fg jm jb rw">
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="business_e_id">Provider</label>
                                                    <select name="evv_state" class="form-control" id="state">
                                                        <option value="">Select state</option>
                                                        <option value="ohio">Ohio State Medicaid</option>
                                                        <!--<option value="virginia">Virginia Medicaid</option>
                                                        <option value="maryland">Maryland Medicaid</option>
                                                        <option value="washington">Washington Medicaid</option>-->
                                                    </select>
                                                </div>
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="business_e_m_i">Payers</label>
                                                    <input id="business_e_m_i" class="s ou" type="text" value="">
                                                </div>
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="state">State</label>
                                                    <select name="evv_state" class="form-control" id="state">
                                                        <option value="">Select state</option>
                                                        <option value="ohio">Ohio State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="je jc fg jm jb rw">
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="business_e_id">Business Entity
                                                        ID</label>
                                                    <input id="business_e_id" class="s ou" type="text" value="">
                                                </div>
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="business_e_m_i">Business Entity
                                                        Medicaid Identify</label>
                                                    <input id="business_e_m_i" class="s ou" type="text" value="">
                                                </div>
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="u_id">User ID</label>
                                                    <input id="u_id" class="s ou" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="je jc fg jm jb rw">
                                                <div class="jr">
                                                    <label class="block text-sm gp rt" for="password">Password</label>
                                                    <input id="password" class="s ou" type="password" value="">
                                                </div>
                                                <!-- <div class="jr">
                                                    <label class="block text-sm gp rt" for="state">State</label>
                                                    <select name="evv_state" class="form-control" id="state">
                                                        <option value="">Select state</option>
                                                        <option value="ohaio">Ohaio</option>
                                                    </select>
                                                </div>--->
                                            </div>
                                        </section>
                                        <footer class="mt-[20px]">
                                            <div class="flex ak vg co border-slate-200">
                                                <div class="flex ls px-[20px]">
                                                    <button class="btn ho xi ye">Save Changes</button>
                                                </div>
                                            </div>
                                        </footer>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($user->hasRole('super-admin') || $user->hasRole('admin') || $user->hasRole('Administrator') || $user->hasRole('Employee'))
                    <div class="rounded-sm rc" id="tabs-agreement">
                        <div class="row p-3">
                            <div class="col-md-12">
                                <h1 class="fw-bolder">CLICK-TABS TECHNOLOGY, LLC SERVICES AGREEMENT TERMS AND CONDITIONS</h1>
                                <p>The Click-tabs Technology, LLC Services Agreement <span class="fw-bolder">(the “Agreement”) </span> consists of these terms and
                                    conditions <span class="fw-bolder">(the “Terms and Conditions”)</span> and one or more Agreements. These Terms and Conditions
                                    shall apply to each Agreement executed by Click-tabs Technology and Client.</p>
                                <ol class="list-group list-group-numbered" start="1">
                                    <li class="list-group-item">
                                        <span class="fw-bolder">DEFINITIONS.</span>
                                        <ol class="list-group list-group-numbered">
                                            <li class="">
                                                <span class="fw-bolder"> “Active Patients” </span>means accepted and admitted patients of Client.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder"> “Active Patient Census” or “Census” </span>means the rolling 3-month average
                                                number of Active Patients as determined by Click-tabs Technology’s Average
                                                Daily Census (“ADC”) records established by the Application Services.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Agency Management Software” </span>means Click-tabs Technology’s proprietary Point of
                                                Care EMR, Mobile EMR, advanced front office and private duty software licensed to Client
                                                for use in conjunction with the Application Services.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder"> “Authorized Users” </span>means persons authorized by Client to read and use the Services
                                                and who possess an authorized user ID and password.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Application Services” </span>means hosting and operating a Click-tabs Technology Application
                                                to provide Client with access to and use of such Click-tabs Technology Application over the Internet.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Click-tabs Technology Application” </span>means all software and databases used by Click-tabs Technology to
                                                provide the Agency Management Software or the Private Duty Software to Client.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Content”</span> means all Client Confidential Information, software applications, text, pictures, sound,
                                                graphics, video, and other data transmitted by Authorized Users using the Services.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Hours” </span>means the verified billable hours recorded in the Agency Management Software.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder"> “Licensed Software” </span>means the Agency Management Software licensed by Client under an Agreement.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder"> “Agreement” </span>means the written description of the Services to be provided by
                                                Click-tabs Technology to Client that is executed by Client and Click-tabs Technology
                                                and expressly refers to this Agreement.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder"> “Private Duty”</span> means the provision of a broad range of services by caregivers
                                                to allow persons to remain independent in their personal residences.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Private Duty Software” </span>means Click-tabs Technology’s proprietary private
                                                duty software licensed to Client for use in conjunction with the Application Services.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder"> “Private Duty Visits” </span>means, in connection with the use of the Agency Management
                                                Software, the rolling 3-month average number visits for the non-Medicare certified service
                                                line visits as determined by Click-tabs Technology’s records established by the Application Services.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder"> “Professional Services” </span>shall mean any training, consulting, data migration, additional site
                                                and location setup, conversion, integration, implementation and/or other services provided by
                                                Click-tabs Technology to Client, with associated fees for such services as described explicitly in an Agreement.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Services” </span>means the Application Services, Professional Services and Support Services.
                                            </li>
                                            <li class="">
                                                <span class="fw-bolder">“Support Services”</span>means the provision of technical support to Authorized Users via email and telephone
                                                during Click-tabs Technology’s regular business hours, in accordance with Click-tabs Technology’s then-current
                                                technical support policies, and any other support services set forth in an Agreement.
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bolder">SERVICES</span>
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Services. Click-tabs Technology shall use commercially reasonable efforts to provide the Services
                                                in accordance with the terms and conditions of this Agreement. In the event of any conflict between
                                                the body of this Agreement and an Agreement, the terms and conditions set forth in the body of this
                                                Agreement shall govern. Click-tabs Technology shall not be obligated to provide any particular service
                                                to Client, including without limitation installation, additional site or location setup, implementation,
                                                training and data migration services, unless such service is explicitly described in a fully executed Agreement.
                                            </li>
                                            <li>
                                                Client Operating Environment. Unless otherwise explicitly set forth in an Agreement, Client shall, at its sole expense,
                                                be responsible for procuring, installing and maintaining the telecommunications services, hardware (including point of care
                                                devices on which the Licensed Software will be installed by Client) and software needed to access the Application Services
                                                that meets Click-tabs Technology’s then-current telecommunications, hardware and software specifications
                                                (the “Client Operating Environment”). Client shall be solely responsible for the security of the Client Operating Environment.
                                            </li>
                                            <li>
                                                Click-tabs Technology Application Changes. Click-tabs Technology may from time to time develop enhancements, upgrades,
                                                updates, improvements, modifications, extensions and other changes to the Application Services
                                                (“Click-tabs Technology Application Changes”). Client hereby authorizes Click-tabs Technology to implement such
                                                Click-tabs Technology Application Changes for use with the Application Services, provided that such Click-tabs
                                                Technology Application Changes do not have a material adverse effect on the functionality or performance of the
                                                Application Services. When commercially practicable, Click-tabs Technology shall notify Client in advance of the
                                                implementation of any material Click-tabs Technology Application Changes.
                                            </li>
                                            <li>
                                                Cooperation; Access. Client acknowledges that the successful and timely rendering of the Services
                                                shall require the good faith cooperation of Client. Click-tabs Technology shall not be liable for any
                                                failure to perform the Services that arises from Client’s failure to cooperate with Click-tabs Technology.
                                            </li>
                                            <li>
                                                Special Terms. The Application Services provided to Client shall be subject to any specific terms or limitations set
                                                forth in the Agreement. In addition, terms and conditions applicable to certain third-party services included within
                                                the Application Service are located at https://www.click-tabs.com/contractsThird Party Terms”), which are incorporated
                                                herein by reference. Our client’s use of the Application Services is subject to its compliance with all Third-Party Terms.
                                            </li>
                                            <li>
                                                Business Associate Agreement. By executing an Agreement under which Click-tabs Technology will provide Services involving the
                                                use of Protected Health Information (as defined in HIPAA), Click-tabs Technology and Client hereby agree to be bound by
                                                Click-tabs Technology’s standard Business Associate Agreement set forth as Exhibit C hereto.
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        USE OF THE APPLICATION SERVICES.
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Application Service. Click-tabs Technology hereby grants to Client a nontransferable, non-exclusive, license during the term
                                                of the applicable Agreement, to allow Authorized Users to access and use, over public and private networks, the Application
                                                Services for its homecare and hospice service business.
                                            </li>
                                            <li>
                                                Licensed Software. Click-tabs Technology hereby grants to Client, a nontransferable, nonexclusive, license during the term
                                                of an Agreement under which Client purchases access to the Application Services to be used in conjunction with the Licensed Software.
                                                The client shall have the right to make additional copies of the Licensed Software for such use. Client shall be responsible for its
                                                Authorized Users use of the Licensed Software in compliance with the terms of this Agreement.
                                            </li>
                                            <li class="list-group-item">
                                                Restrictions.
                                                <ol class="list-group list-group-numbered">
                                                    <li>
                                                        Click-tabs Technology owns all right, title and interest in and to the Application Services, Click-tabs Technology
                                                        Application and Licensed Software. The Application Services, Click-tabs Technology Application and Licensed Software
                                                        are provided to Client for use only as expressly set forth in this Agreement, and Client will not use the Application
                                                        Services, Click-tabs Technology Application or Licensed Software in whole or in part for any other use or purpose.
                                                        Client will not, and will not allow any third party to (i) decompile, disassemble, reverse engineer or attempt to
                                                        reconstruct, identify or discover any source code, underlying ideas, underlying user interface techniques or algorithms
                                                        of the Click-tabs Technology Application or Licensed Software by any means, or disclose any of the foregoing;
                                                        (ii) except as expressly set forth in this Agreement, provide, rent, lease, lend, or use the Click-tabs Technology
                                                        Application or Licensed Software for timesharing, subscription, or service bureau purposes; or (iii) sublicense,
                                                        transfer or assign the Click-tabs Technology Application or Licensed Software or any of the rights or licenses granted
                                                        under this Agreement.
                                                    </li>
                                                    <li>
                                                        Client shall not use the Application Services for storage, possession, or transmission of any information, the
                                                        possession, creation, or transmission of which violates any state, local or federal law, including without limitation,
                                                        those laws regarding stolen materials, obscene materials or child pornography. Client shall not transmit Content over
                                                        the Application Services that infringes upon or misappropriates the intellectual property or privacy rights of any third
                                                        party.
                                                    </li>
                                                    <li>
                                                        Click-tabs Technology shall provide a password allowing Client to give each Authorized Users a username and password to
                                                        access the Application Services. Client shall establish and maintain lists of Authorized Users and comply with
                                                        Click-tabs Technology’s procedures for verification of Authorized Users, revision of access rights to Application Services,
                                                        security, and assignment and use of passwords. Client shall notify Click-tabs Technology immediately in writing if the security
                                                        or integrity of a password or authority level has been compromised. Client shall be fully responsible, and indemnify and hold
                                                        Click-tabs Technology harmless, for any charges, costs, expenses, and third party claims that may result from unauthorized use
                                                        of or access to the Application Services using Client’s usernames.
                                                    </li>
                                                    <li>
                                                        The client is responsible for its use of the Application Services. Click-tabs Technology may, from time to time, require a
                                                        person to agree to Click-tabs Technology’s then-current Terms of Services for the Application Service (or any part thereof)
                                                        prior to permitting such person to use the Application Services. Client hereby authorizes Click-tabs Technology to prominently
                                                        display within the Application Services, Click-tabs Technology’s then-current Privacy Policy and Terms of Service.
                                                        Click-tabs Technology shall be free to terminate an individual’s access to the Application Services if it determines, in its sole
                                                        discretion, that such individual’s use of the Application Services is in breach of Click-tabs Technology’s then-current Terms of
                                                        Service or could harm Click-tabs Technology’s reputation.
                                                    </li>
                                                    <li>
                                                        Regardless of whether Click-tabs Technology requires its Authorized Users to agree to Click-tabs Technology’s
                                                        then-current Terms of Service, Client agrees that it is responsible for developing and implementing appropriate
                                                        policies for use of the Application Services by such persons including policies regarding such person’s compliance
                                                        with the terms hereof. Click-tabs Technology is not responsible for Client’s access to or use of patients’ protected
                                                        health information (as defined under the Health Insurance Portability and Accountability Act of 1996 (“HIPAA”)) stored
                                                        within the Application Services. Any such access or use shall be in accordance with all applicable laws, rules and
                                                        regulations, including, without limitation HIPAA.
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        PAYMENTS.
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Fees. Client agrees to pay Click-tabs Technology for the performance of the Services in accordance with the rates and
                                                fees specified in the Agreement. Following the first year of the term, on each one-year anniversary of an Agreement,
                                                Click-tabs Technology may adjust the rates and fees set forth in such Agreement. Click-tabs Technology shall give Client not
                                                less than thirty (30) days written notice of such increase prior to its effective date. Unless otherwise set forth in the
                                                Agreement, all payments shall be made in United States dollars no later than thirty (30) days after the date of invoice.
                                                All payments not received when due shall accrue interest at a rate per month of one and one-half percent (1.5%) or seventy-five
                                                dollars ($75) per month, whichever is greater.
                                            </li>
                                            <li>
                                                Growth Clause. The client acknowledges that the initial fees for its use of the Application Services are based upon the Active
                                                Patient Census figures identified in the Services Agreement. At any time during the term, if the number of Active Patients under
                                                such Active Patient Census exceeds the Active Patient Census range upon which the fees were previously based, the fees shall be
                                                increased at Click-tabs Technology’s then-current rates, or if pre-determined at the rate set forth in the Agreement.
                                                Installation and implementation of the Application Services at additional sites or locations (regardless of the reason for such
                                                expansion) shall be subject to the negotiation and execution of an Agreement for the appropriate Professional Services, which Services
                                                will be performed at Click-tabs Technology’s then-current rates.
                                            </li>
                                            <li>
                                                Expenses. Client shall reimburse Click-tabs Technology for its out-of-pocket travel expenses to include food, lodging
                                                and incidentals. Transportation will be reimbursed to Click-tabs Technology by Client at the current IRS mileage rates or
                                                at current coach airfare rate for providing services to Client at facilities of Client. The client will bear the travel
                                                and other out-of-pocket expenses incurred by its employees and other designers who receive training at
                                                Click-tabs Technology’s facilities.
                                            </li>
                                            <li>
                                                Taxes. The fees payable under this Click-tabs Technology shall not include taxes or duties now in force
                                                or enacted in the future imposed on the transaction and/or the delivery of the Services, all of which Client
                                                shall be responsible for and pay in full.
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        TERM AND TERMINATION.
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Unless earlier terminated in accordance with its terms, each Agreement commences on the Effective Date and remains in effect for the
                                                Initial Term (Months) from the Billing Term Start Date (the “Initial Term”). Unless otherwise set forth in an Agreement, upon the
                                                expiration of each Initial Term, the term of an Agreement will renew automatically for additional terms of one (1) year each
                                                (“Renewal Term”), and together with the Initial Term, the “Term”), unless either a party notifies the other party, at least ninety
                                                (90) days prior to the end of the then-current Term that it has elected to terminate such Agreement, in which event such Agreement
                                                will terminate at the end of such Term. Unless earlier terminated in accordance with its terms, this Click-tabs Technology will
                                                expire on the date the last Agreement then in effect expires or is terminated pursuant to the terms and conditions set forth in this
                                                Click-tabs Technology.
                                            </li>
                                            <li>
                                                Termination for Cause. Except as otherwise provided herein, upon the material breach of the other party, either party may terminate
                                                this Click-tabs Technology or the applicable Agreement, if such breach remains uncured for thirty (30) days following written
                                                notice to the breaching party. Notwithstanding the foregoing, if the breaching party certifies to the other party in writing within
                                                the thirty (30) day period that a curable breach (other than a breach relating to the payment of fees owing under the
                                                Click-tabs Technology) cannot reasonably be cured in thirty (30) days but that it will be remedied by a specified date
                                                (which date may be no later than is commercially reasonable under the circumstances), the termination will be effective on the date
                                                specified in the certification if the breach has not been remedied by that date.
                                            </li>
                                            <li>
                                                Suspension of Services. In the event any payment hereunder is not received by Click-tabs Technology within thirty (30) days of the
                                                due date, Click-tabs Technology may, in addition to any other remedies available to it hereunder or at law, suspend access to
                                                Support Services and/or the Application Services in whole or in part under any Agreement to which Client is a party.
                                            </li>
                                            <li>
                                                Effect of Termination. Upon the expiration or termination of an Agreement or this Click-tabs Technology,
                                                Click-tabs Technology will terminate Client’s access to the Application Services under affected Agreement and will cease
                                                the provision of all Services under such Agreement.
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        WARRANTIES; DISCLAIMER
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Click-tabs Technology hereby warrants that during the term of an Agreement, the Application Service
                                                provided thereunder will perform, in all material respects, in accordance with its then-current
                                                published documentation. In the event of any reproducible failure of the Application Services to
                                                perform in a material respect to such documentation, Click-tabs Technology will, as Client’s sole and
                                                exclusive remedy for breach of the warranty set forth in this Section 6.1, use commercially reasonable
                                                efforts repair the applicable Application Service.
                                            </li>
                                            <li>
                                                DISCLAIMER OF WARRANTIES. EXCEPT AS SET FORTH IN SECTION 6.1, CLICK-TABS TECHNOLOGY MAKES NO WARRANTIES
                                                REGARDING THE SERVICES, AND CLICK-TABS TECHNOLOGY HEREBY DISCLAIMS ALL WARRANTIES, EXPRESS AND IMPLIED,
                                                WITH RESPECT TO THE SERVICES, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF MERCHANTABILITY,
                                                FITNESS FOR A PARTICULAR PURPOSE, NONINFRINGEMENT, COMPATIBILITY OR SECURITY. CLICK-TABS TECHNOLOGY
                                                DOES NOT WARRANT THAT ACCESS TO OR USE OF THE APPLICATION SERVICES WILL BE UNINTERRUPTED OR ERROR-FREE,
                                                THAT ALL DEFECTS AND ERRORS IN THE APPLICATION SERVICE WILL BE CORRECTED, OR THAT THE SERVICES WILL MEET
                                                ANY PARTICULAR CRITERIA OF PERFORMANCE OR QUALITY. CLICK-TABS TECHNOLOGY DOES NOT PROVIDE ANY WARRANTIES
                                                REGARDING THE ACCURACY OF DATA OR INFORMATION PROVIDED BY THIRD PARTIES.
                                                The provisions of this Section allocate the risks under this Click-tabs Technology between
                                                Click-tabs Technology and Client. Click-tabs Technology’s pricing reflects this allocation of risk
                                                and the limitation of liability specified herein.
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        INDEMNITY.
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Infringement. Click-tabs Technology shall defend, indemnify and hold harmless Client, its subsidiaries, affiliates,
                                                officers, directors, agents, employees and assigns, from and against any and all claims, suits, proceedings, losses,
                                                damages, liabilities, costs and expenses (including, without limitation, reasonable attorneys’ fees)
                                                (collectively, “Losses”) suffered or incurred by them in connection with a third party claim arising out of any
                                                actual or threatened claim that the Application Services infringes upon or misappropriates any copyright, patent,
                                                trademark, trade secret, or other proprietary or other rights of any third party. Click-tabs Technology shall have no
                                                obligation to indemnify Client to the extent the alleged infringement arises out of (i) the use of the Application Services
                                                in combination by Client with other data products, processes or materials not provided by Click-tabs Technology and such
                                                infringement would not have occurred but for Client’s combination; or (ii) the Content. Should the Application Services as
                                                used by Client become, or in Click-tabs Technology’s opinion be likely to become, the subject of an infringement claim,
                                                Click-tabs Technology shall at its option and sole expense either: (i) procure for Client the right to continue to use
                                                the Application Services as contemplated hereunder, or (ii) modify the Application Services to eliminate any such claim
                                                that might result from its use hereunder or (iii) replace the Application Services with an equally suitable, compatible
                                                and functionally equivalent non-infringing Application Services at no additional charge to Client. If none of these
                                                options is reasonably available to Click-tabs Technology, then this Click-tabs Technology may be terminated at the
                                                option of either party hereto without further obligation or liability on the part of either party hereto except that
                                                Click-tabs Technology agrees to promptly refund to Client the pro-rata portion of any fees prepaid by Client amortized
                                                on a straight-line basis based over the term of this Click-tabs Technology.
                                            </li>
                                            <li>
                                                Client Indemnity. Client shall defend, indemnify and hold harmless Click-tabs Technology, its subsidiaries, affiliates, officers,
                                                directors, agents, employees and assigns, from and against any and all Losses suffered or incurred by them in connection with a
                                                third party claim arising out of (i) a breach by Client of this Click-tabs Technology, (ii) Client’s use of the Licensed Software or
                                                Application Services or (iii) Client’s failure to comply with laws, rules, regulations or professional standards.
                                            </li>
                                            <li>
                                                Mechanics of Indemnity. The indemnifying party’s obligations are conditioned upon the indemnified party: (i) giving the indemnifying
                                                party prompt written notice of any claim, action, suit or proceeding for which the indemnified party is seeking indemnity;
                                                (ii) granting control of the defense and settlement to the indemnifying party; and (iii) reasonably cooperating with the indemnifying
                                                party at the indemnifying party’s expense.
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        CONFIDENTIAL INFORMATION.
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Except as expressly permitted in  Section 8, no party will, without the prior written consent of the other
                                                party, disclose any Confidential Information of the other party to any third party. Information will be
                                                considered Confidential Information of a party if either (i) it is disclosed by the party to the other
                                                party in tangible form and is conspicuously marked “Confidential”, “Proprietary” or the like; or
                                                (ii) (a) it is disclosed by a party to the other party in non-tangible form and is identified as
                                                confidential at the time of disclosure; and (b) it contains the disclosing party’s customer lists,
                                                customer information, technical information, pricing information, pricing methodologies, or information
                                                regarding the disclosing party’s business planning or business operations. In addition, notwithstanding
                                                anything in this Click-tabs Technology to the contrary, the terms of this Click-tabs Technology will
                                                be deemed Confidential Information of Click-tabs Technology. Click-tabs Technology may, in any manner,
                                                publicly announce the relationship with Client. Click-tabs Technology may also develop, with customer
                                                review and approval, a business use case that may be used for Click-tabs Technology marketing purposes.
                                            </li>
                                            <li>
                                                Other than the terms and conditions of this Click-tabs Technology, information will not be deemed
                                                Confidential Information hereunder if such information: (i) is known to the receiving party prior to
                                                receipt from the disclosing party directly or indirectly from a source other than one having an obligation
                                                of confidentiality to the disclosing party; (ii) becomes known (independently of disclosure by the
                                                disclosing party) to the receiving party directly or indirectly from a source other than one having
                                                an obligation of confidentiality to the disclosing party; (iii) becomes publicly known or otherwise
                                                ceases to be secret or confidential, except through a breach of this Click-tabs Technology by the
                                                receiving party; or (iv) is independently developed by the receiving party.
                                            </li>
                                            <li>
                                                Each party will secure and protect the Confidential Information of the other party
                                                (including, without limitation, the terms of this Click-tabs Technology) in a manner consistent with the
                                                steps taken to protect its own trade secrets and confidential information, but not less than a reasonable
                                                degree of care. Each party may disclose the other party’s Confidential Information where. (i) the
                                                disclosure is required by applicable law or regulation or by an order of a court or other governmental
                                                body having jurisdiction after giving reasonable notice to the other party with adequate time for such
                                                other party to seek a protective order; (ii) if in the opinion of counsel for such party, disclosure
                                                is advisable under any applicable securities laws regarding public disclosure of business information;
                                                    or (iii) the disclosure is reasonably necessary and is to that party’s, or its Affiliates’, employees,
                                                    officers, directors, attorneys, accountants and other advisors, or the disclosure is otherwise necessary
                                                    for a party to exercise its rights and perform its obligations under this Click-tabs Technology, so long
                                                    as in all cases the disclosure is no broader than necessary and the person or entity who receives the disclosure
                                                    agrees prior to receiving the disclosure to keep the information confidential. Each party is responsible for ensuring
                                                    that any Confidential Information of the other party that the first party discloses pursuant to this
                                                    Section 8 (other than disclosures pursuant to clauses (i) and (ii) above that cannot be kept confidential by the
                                                    first party) is kept confidential by the person receiving the disclosure.

                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        LIMITATIONS OF LIABILITY.
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED IN THIS CLICK-TABS TECHNOLOGY, CLICK-TABS TECHNOLOGY
                                                AND ITS SHAREHOLDERS, AFFILIATES, DIRECTORS, MANAGERS, EMPLOYEES OR OTHER REPRESENTATIVES SHALL NOT BE
                                                LIABLE TO CLIENT, AUTHORIZED USERS OR ANY THIRD PARTY FOR ANY INDIRECT, INCIDENTAL, SPECIAL, OR
                                                CONSEQUENTIAL DAMAGES (INCLUDING REASONABLE ATTORNEYS’ FEES AND LOST PROFITS) THAT RESULT FROM OR ARE
                                                RELATED TO THIS CLICK-TABS TECHNOLOGY, EVEN IF CLICK-TABS TECHNOLOGY HAS BEEN INFORMED OF THE POSSIBILITY
                                                OF SUCH DAMAGES. IN ANY EVENT, CLICK-TABS TECHNOLOGY’S AGGREGATE LIABILITY TO CLIENT FOR DAMAGES, COSTS,
                                                AND EXPENSES SHALL NOT EXCEED THE AMOUNTS RECEIVED BY CLICK-TABS TECHNOLOGY FROM CLIENT IN THE TWELVE
                                                (12) MONTHS PRECEDING THE EVENT GIVING RISE TO SUCH DAMAGES.
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="list-group-item">
                                        GENERAL PROVISIONS.
                                        <ol class="list-group list-group-numbered">
                                            <li>
                                                Governing Law. This Click-tabs Technology shall be governed by and construed in accordance with
                                                the laws of the State of Georgia, without regard to the choice of law provisions thereof. The United
                                                Nations Convention on Contracts for the International Sale of Goods shall not apply to this
                                                Click-tabs Technology. Any contract dispute or claim arising out of, or in connection with, this
                                                Click-tabs Technology shall be finally settled by binding arbitration in Atlanta, Georgia, and the
                                                then current rules and procedures of the Judicial Arbitration and Mediation Services (JAMS) by one (1)
                                                arbitrator appointed by JAMS. The arbitrator shall apply the law of the State of Georgia, without
                                                reference to rules of conflict of law or statutory rules of arbitration, to the merits of any dispute
                                                or claim. Judgment on the award rendered by the arbitrator may be entered in any court of competent
                                                jurisdiction. The parties agree that, any provision of applicable law notwithstanding, they will not
                                                request, and the arbitrator shall have no authority to award punitive or exemplary damages against any
                                                party. In the event of any arbitration, action or proceeding is brought in connection with this
                                                Click-tabs Technology, the prevailing party shall be entitled to recover its costs and reasonable
                                                attorneys' fees. Notwithstanding the foregoing, nothing herein shall preclude either party from seeking
                                                injunctive relief in any state or federal court of competent jurisdiction without first complying with
                                                the arbitration provisions of this Section.
                                            <li>
                                                Severability. If any provision of this Click-tabs Technology is held to be invalid or unenforceable for any reason,
                                                it shall be deemed omitted and the remaining provisions will continue in full force without being impaired or invalidated
                                                in any way. The parties agree to replace any invalid provision with a valid provision that most closely approximates the
                                                intent and economic effect of the invalid provision.
                                            </li>
                                            <li>
                                                Waiver. The waiver by either party of a breach of any provision of this Click-tabs Technology will not
                                                operate or be interpreted as a waiver of any other or subsequent breach.
                                            </li>
                                            <li>
                                                Assignment. This Click-tabs Technology shall be binding upon the parties’ respective successors and permitted
                                                assigns. Client shall not assign this Click-tabs Technology, and/or any of its rights and obligations hereunder, without
                                                the prior written consent of Click-tabs Technology, which consent shall not be unreasonably withheld.
                                                This Click-tabs Technology, and the rights and obligations herein, may be assigned by Click-tabs Technology to
                                                any person or entity without the written consent of the Client.
                                            </li>
                                            <li>
                                                Permission for Data Aggregation. Client agrees that Click-tabs Technology may utilize data that comes
                                                into the possession of Click-tabs Technology by virtue of its performance under this
                                                Click-tabs Technology for the purpose of aggregating statistics that may be helpful for Client’s
                                                benefit, for research and trend analysis, and for other lawful purposes, as determined by
                                                Click-tabs Technology. Click-tabs Technology. shall only aggregate data in a manner that is fully
                                                compliant with HIPAA and applicable legislation regarding private personal information. The data
                                                utilized or shared pursuant to this provision that is not directly connected to the provision of
                                                Services under this Click-tabs Technology shall not contain any Protected Health Information,
                                                as such term is defined by HIPAA.

                                            </li>
                                            <li>
                                                Excluded Entity. Each party represents that it and its employees, that perform services in connection
                                                with the business relationship between the parties is not presently debarred, suspended, ineligible,
                                                or excluded from participation in any state or federal health care programs. Each party will periodically
                                                check itself and its employees for listing within applicable federal and state databases and will
                                                notify the other party if it discovers that it or any of its employees has become so debarred,
                                                suspended, ineligible, or excluded (such a person, an “Excluded Person” or such an entity, an
                                                “Excluded Entity”). Neither party shall allow an Excluded Person to provide services to the other
                                                party. If a party becomes an Excluded Entity, the other party may terminate its relationship with
                                                the Excluded Entity.
                                            </li>
                                            <li>
                                                Independent Contractors. Click-tabs Technology is acting in performance of this Click-tabs Technology
                                                as an independent contractor.
                                            </li>
                                            <li>
                                                Notices. All notices required to be given under the terms of this Click-tabs Technology or which any of
                                                the parties hereto may desire to give hereunder, shall be in writing, shall be delivered via one of the following
                                                methods, and shall be deemed to have been received: (i) on the day given delivered by hand
                                                (securing a receipt evidencing such delivery); or (ii) on the second day after such notice is sent by a nationally
                                                recognized overnight or two (2) day air courier service, full delivery cost paid; or (iii) on the fifth day after
                                                such notice was mailed, registered mail, prepaid, return receipt requested, and addressed to the party to be notified
                                                at the addresses set forth in the Agreement.
                                            </li>
                                            <li>
                                                Survival. All provisions of Sections 3.3.1, 4, 6.2, 7, 8, 9 and 10 of this Click-tabs Technology shall survive
                                                the expiration or termination of any Agreement or any termination of this Click-tabs Technology.
                                            </li>
                                            <li>
                                                Legal Fees. In the event of any proceeding or lawsuit brought by Click-tabs Technology or Client in
                                                connection with this Click-tabs Technology, the prevailing party shall be entitled to recover its costs
                                                and legal fees (including, but not limited to, allocated costs of in- house staff counsel) and
                                                court costs.
                                            </li>
                                            <li>
                                                Force Majeure. Neither party will be liable to the other for failure to meet its obligations under
                                                this Click-tabs Technology where such failure is caused by events beyond its reasonable control such as fire,
                                                failure of communications networks, riots, civil disturbances, embargos, storms, acts of terrorism, pestilence,
                                                war, floods, tsunamis, earthquakes or other acts of God.
                                            </li>
                                            <li>
                                                Subsequent Modifications. No amendment, alteration or modification of this Click-tabs Technology
                                                shall be effective or binding unless it is set forth in a writing signed by duly authorized
                                                representatives of both parties.
                                            </li>
                                            <li>
                                                Entire Click-tabs Technology. This Click-tabs Technology and any exhibits and schedules attached hereto, constitutes
                                                the entire Click-tabs Technology between the parties in connection with the subject matter hereof and supersedes all
                                                prior and contemporaneous Click-tabs Technology, understandings, negotiations and discussions, whether oral or
                                                written, of the parties, and there are no warranties, representations and/or Click-tabs Technology among the
                                                parties in conjunction with the subject matter hereof except as set forth in this Click-tabs Technology.
                                            </li>
                                        </ol>
                                    </li>
                                </ol>


                                <h1 class="fw-bolder text-center mt-4">Exhibit C</h1>
                                <h2 class="fw-bolder text-center mt-2 mb-2">HIPAA Business Associate Addendum</h2>
                                <p class="">
                                    This HIPAA Business Associate Addendum (“Addendum”) supplements and is made a part of the Services
                                    Click-tabs Technology (“Click-tabs Technology”) by and between Client and Click-tabs Technology, LLC
                                    (“Click-tabs Technology”), and is effective as of the Effective Date of the Click-tabs Technology.
                                </p>
                                    <h2 class="fw-bolder text-center mt-2 mb-2">RECITALS</h2>
                                    <p class="">
                                        The client wishes to disclose certain information, some of which may constitute Protected Health Information
                                        (as defined below), to Click-tabs Technology pursuant to the terms of the Click-tabs Technology. Client and
                                        Click-tabs Technology intend to protect the privacy and provide for the security of PHI disclosed to
                                        Click-tabs Technology pursuant to the Click-tabs Technology in compliance with the Health Insurance
                                        Portability and Accountability Act of 1996, Public Law 104-191 (“HIPAA”), as amended by the Health
                                        Information Technology for Economic and Clinical Health (“HITECH”) Act, Public Law 111-005, and their
                                        respective implementing regulations, including the Privacy Rule, the Security Rule, the Breach Notification
                                        Standards adopted by the U.S. Department of Health and Human Services, as they may be amended from time to
                                        time, at 45 C.F.R. part 164, subpart D, as well as related state laws and/or regulations
                                        (the preceding collectively referred to as the “HIPAA Regulations”), all as may be amended from time to
                                        time. The HIPAA Regulations require Client to enter into an Click-tabs Technology with
                                        Click-tabs Technology containing specific requirements with respect to the disclosure of PHI and
                                        Electronic PHI, as set forth in, but not limited to, Title 45, Sections 164.308(b)(1), 164.310, 164.312,
                                        164.314(a), 164.502(e) and 164.504(e) of the Code of Federal Regulations (“CFR”), and as contained in this
                                        Addendum. In consideration of the mutual promises below and the exchange of information pursuant to
                                        the Click-tabs Technology, the parties agree as follows:
                                    </p>

                                    <ol class="list-group list-group-numbered">

                                <li class="">
                                    DEFINITIONS
                                    <ol  class="list-group list-group-numbered">
                                        <li>
                                            Terms used, but not otherwise defined, in this Business Associate Click-tabs Technology
                                            (the “Click-tabs Technology”) shall have the same meaning as those terms in the Health Insurance
                                            Portability and Accountability Act of 1996 (“HIPAA”), as amended by the Health Information Technology
                                            for Economic and Clinical Health Act of 2009 (“HITECH”) and their implementing regulations
                                            (the “Electronic Transaction Rule,” the “Privacy Rule,” the “Security Rule,” and the “Breach Notification
                                            Rule” as set forth at 45 CFR Parts 160, 162 and 164, and collectively, the “HIPAA Rules”).
                                        </li>
                                        <li>
                                            Business Associate” shall mean Click-tabs Technology.
                                        </li>
                                        <li>
                                            “Covered Entity” shall mean Client.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <ol  class="list-group list-group-numbered">
                                        <li>
                                            OBLIGATIONS AND ACTIVITIES OF BUSINESS ASSOCIATE
                                        </li>
                                        <li>
                                            Business Associate agrees not to use or disclose Protected Health Information including electronic
                                            Protected Health Information other than as permitted or required to perform the services under the
                                            Master License and Services Click-tabs Technology (the “Services”), as permitted or required by this
                                            Click-tabs Technology, as permitted by HIPAA, or as Required by Law.
                                        </li>
                                        <li>
                                            The Business Associate agrees to use appropriate safeguards to prevent use or disclosure of electronic
                                            Protected Health Information other than as provided for by this Click-tabs Technology. Business Associate
                                            agrees to implement administrative, physical and technical safeguards that reasonably and appropriately
                                            protect the confidentiality, integrity, and availability of any electronic Protected Health Information
                                            that it creates, receives, maintains or transmits from or on behalf of Covered Entity.
                                            Business Associate further agrees to ensure that any agent, including a subcontractor, to whom it
                                            provides such information, agrees to implement reasonable and appropriate safeguards to protect such
                                            information. Business Associate shall comply with 45 CFR §§ 164.308, 164.310, 164.312, and 164.316 of
                                            the Security Rule as such regulations are amended from time to time.
                                        </li>
                                        <li>
                                            Business Associate agrees to report to Covered Entity (i) any use or disclosure of Protected Health
                                            Information in violation of this Click-tabs Technology of which it becomes aware and (ii) any security
                                            incident of which it becomes aware. Business Associate agrees to report to Covered Entity any Breach of
                                            Unsecured Protected Health Information, as such terms are defined at 45 CFR § 164.402, in accord with
                                            Section 2(3) of this Click-tabs Technology.
                                        </li>
                                        <li>
                                            Business Associate agrees that, with the exception of law enforcement delays that satisfy the requirements
                                            under 45 CFR § 164.412 or as otherwise required by applicable state law, Business Associate shall notify
                                            Covered Entity in writing without unreasonable delay and in no case later than sixty (60) calendar days
                                            upon discovery of a Breach of Unsecured Protected Health Information, as such terms are defined at
                                            45 CFR § 164.402. Such notice must include, to the extent possible, the name of each individual whose
                                            Unsecured Protected Health Information has been, or is reasonably believed by Business Associate to have
                                            been, accessed, acquired, or disclosed during such breach. Business Associate shall also provide, to the
                                            extent possible, Covered Entity with any other available information that Covered Entity is required to
                                            include in its notification to individuals under 45 CFR § 164.404(c) at the time of Business Associate’s
                                            notification to Covered Entity or as promptly thereafter as such information becomes available. For
                                            purposes of this Click-tabs Technology, a Breach of Unsecured Protected Health Information shall be
                                            treated as discovered by Business Associate as of the first day on which such breach is known to Business
                                            Associate (including any person, other than the individual committing the breach, who is an employee,
                                            officer, or other agent of Business Associate, as determined in accordance with the federal common law
                                            of agency) or should reasonably have been known to Business Associate following the exercise of reasonable
                                            diligence.
                                        </li>
                                        <li>
                                            Business Associate agrees to ensure that any agent, including a subcontractor, to whom it provides Protected
                                            Health Information created, received, maintained, or transmitted by Business Associate from or on behalf of
                                            Covered Entity agrees to substantially the same restrictions and conditions that apply through this
                                            Click-tabs Technology to Business Associate with respect to such Protected Health Information.

                                        </li>
                                        <li>
                                            Business Associate agrees to make internal practices, books, and records, including policies and procedures
                                            relating to the use and disclosure of Protected Health Information received from, or created, received,
                                            maintained or transmitted by Business Associate from or on behalf of Covered Entity available to the
                                            Secretary, for purposes of the Secretary’s determining Covered Entity's compliance with the Privacy
                                            Rule, if and to the extent Required by Law.
                                        </li>
                                        <li>
                                            Business Associate agrees to document such disclosures of Protected Health Information as would be
                                            required for Covered Entity to respond to a request by an Individual for an accounting of disclosures
                                            of Protected Health Information in accordance with 45 CFR§ 164.528.
                                        </li>
                                        <li>
                                            Business Associate agrees to provide to Covered Entity information collected to permit Covered Entity
                                            to respond to a request by an Individual for an accounting of disclosures of Protected Health
                                            Information in accordance with 45 CFR § 164.528. In the event the request for an accounting of
                                            disclosures is delivered directly to Business Associate, Business Associates shall, as soon as
                                            practicable, forward such request to Covered Entity.
                                        </li>
                                        <li>
                                            Business Associate agrees to meet the requirements of 45 CFR § 164.504 if it knows of a pattern
                                            of activity or practice of one of its subcontractors that constitutes a material breach or violation
                                            of the subcontractor’s obligation under a contract or other arrangement with the Business Associate.
                                        </li>
                                    </ol>
                                </li>
                                    <li>
                                            <span class="fw-bolder">GENERAL USE AND DISCLOSURE PROVISIONS</span>
                                        <ol class="list-group list-group-numbered">

                                            <li>Except as otherwise limited in this Click-tabs Technology, Business Associate may use or disclose Protected
                                                Health Information to perform the Services for, or on behalf of, Covered Entity provided that such use or
                                                disclosure would not violate the Privacy Rule if done by Covered Entity except as otherwise permitted by the
                                                Privacy Rule. Business Associate agrees to limit, to the extent practicable and except as permitted by
                                                45 CFR § 164.502(b)(2), its uses, disclosures and requests of Protected Health Information under this
                                                Click-tabs Technology to the minimum necessary to accomplish the intended purpose of such use, disclosure or
                                                request in accord with HIPAA, HITECH and the HIPAA Rules.
                                            </li>
                                        </ol>
                                            <li>
                                                <span class="fw-bolder">SPECIFIC USE AND DISCLOSURE PROVISIONS </span>
                                                <ol type="A">
                                                    <li>
                                                        <li>a)
                                                            Business Associate and its affiliates may use Protected Health Information (i)
                                                            for the proper management and administration of Business Associate or its
                                                            affiliates, (ii) to carry out the legal responsibilities of Business Associate,
                                                            (iii) to provide data aggregation services relating to the healthcare operation
                                                            of the Covered Entity or other covered entities to permit the creation of data
                                                            for analyses that related to the health care operations of the respective
                                                            covered entities; and/ or (iv) to review and/or improve Business Associate
                                                            Services.
                                                        </li>
                                                        <li>b)
                                                            Business Associate may disclose Protected Health Information (i) for the proper management and
                                                            administration of Business Associate and its affiliates, (ii) to other covered entity(ies) or health
                                                            care provider(s) for the payment activities or healthcare operation activities of the entity that received
                                                            the Protected Health Information if that entity has or had a relationship with the individual, or (iii) to
                                                            carry out Business Associate’s legal responsibilities if (a) the disclosures are either permitted or Required
                                                            By Law or (b) Business Associate obtains reasonable assurances from the person to whom such information is
                                                            disclosed that such information will remain confidential and used or further disclosed only as Required By Law or
                                                            for the purpose for which it was disclosed to the person, and the person notifies Business Associate of any
                                                            instances of which it becomes aware in which the confidentiality of such information has been breached.
                                                        </li>
                                                        <li>c)
                                                            Business Associate may use Protected Health Information to report violations of law to appropriate Federal
                                                            and State authorities, consistent with 45 CFR § 164.512(j)(1).
                                                        </li>
                                                        <li>d)
                                                            Business Associate and its affiliates may de-identify Protected Health Information in accord with 45 CFR §
                                                            164.514 and use it in any manner determined by Business Associate.
                                                        </li>
                                                    </li>
                                                </ol>
                                            </li>

                                            <li>
                                                <span class="fw-bolder">OBLIGATIONS OF COVERED ENTITY</span>
                                                <ol>
                                                    <li>
                                                        <li>
                                                            a)	Covered Entity shall notify Business Associate of any limitation(s) in the notice of privacy practices
                                                            of Covered Entity in accordance with 45 CFR § 164.520 within five (5) business days of the imposition of
                                                            said limitation, to the extent that such limitation may affect Business Associate's use or disclosure of Protected
                                                            Health Information.
                                                        </li>
                                                        <li>
                                                            b)	Covered Entity shall notify Business Associate of any changes in, or revocation of, permission by an Individual
                                                            to use or disclose Protected Health Information, within five (5) business days of such changes, to the extent that
                                                            such changes may affect Business Associate's use or disclosure of Protected Health Information.
                                                        </li>
                                                        <li>
                                                            c)	Covered Entity shall notify Business Associate of any restriction on the use or disclosure of Protected Health
                                                            Information that Covered Entity has agreed to in accordance with 45 CFR § 164.522 within five (5) business days of
                                                            such restriction, to the extent that such restriction may affect Business Associate's use or disclosure of Protected
                                                            Health Information.
                                                        </li>
                                                        <li>
                                                            d)	Covered Entity shall limit its uses, disclosures and requests of Protected Health Information under this Click-tabs
                                                            Technology to the minimum necessary to accomplish the intended purpose of such use, disclosure or request in accord with
                                                            HIPAA, HITECH, and the HIPAA Rules.
                                                        </li>
                                                        <li>
                                                            e)	Electronic Protected Health Information transmitted or otherwise transferred from Covered Entity to Business
                                                            Associate must be encrypted by a process that renders the electronic Protected Health Information unusable, unreadable,
                                                            or indecipherable to unauthorized individuals within the meaning of HITECH § 13402 and any implementing guidance.
                                                        </li>
                                                    </li>
                                                </ol>
                                            </li>
                                    </li>
                                    <li>
                                        <span class="fw-bolder">PERMISSIBLE REQUESTS BY COVERED ENTITY</span>
                                        <ol>
                                            <li>
                                                <li>
                                                    a)	Covered Entity shall not request Business Associate to use or disclose Protected Health Information
                                                    in any manner that would not be permissible under the Privacy Rule or the Security Rule if done by Covered Entity.
                                                </li>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        <span class="fw-bolder">TERM AND TERMINATION</span>
                                        <ol>
                                            <li>
                                                <li>
                                                    a)	Term. The Term of this Click-tabs Technology shall be effective as of the date on which the Master
                                                    License and Services Click-tabs Technology is signed, or, if earlier, as of the date on which any
                                                    Protected Health Information is provided by Covered Entity to Business Associate or created, received,
                                                    maintained or transmitted by Business Associate from or on behalf of Covered Entity, and shall terminate
                                                    when all of the Protected Health Information provided by Covered Entity to Business Associate,
                                                    or created, received, maintained, or transmitted by Business Associate from or on behalf of Covered
                                                    Entity, is destroyed or returned to Covered Entity, or, if it is infeasible to return or destroy
                                                    Protected Health Information, protections are extended to such Protected Health Information,
                                                    in accordance with the termination provisions in this Section 7.
                                                </li>
                                                <li>
                                                    b)	Termination for Cause. Upon one Party’s knowledge of a material breach by the other Party, the
                                                        non-breaching Party shall: i)	Provide a reasonable opportunity for Business Associate to cure the material
                                                        breach or end the violation. ii) Immediately terminate this Click-tabs Technology
                                                        (and any underlying Click-tabs Technology) if Business Associate has breached a material term of this
                                                        Click-tabs Technology and cure is not possible; or iii)	If neither termination nor cure is feasible,
                                                        the non-breaching Party may report the violation to the Secretary of the U.S. Department of Health and
                                                        Human Services.
                                                </li>
                                                <li>
                                                    c)	Effect of Termination. i) Except as provided Section 7(c)(2), upon termination of
                                                    this Click-tabs Technology, for any reason, Business Associate shall return or destroy all Protected Health
                                                    Information received from Covered Entity, or created, received, maintained or transmitted by Business Associate
                                                    from or on behalf of Covered Entity. This provision shall apply to Protected Health Information that is in the
                                                    possession of subcontractors or agents of Business Associate. Business Associate shall retain no copies of the
                                                    Protected Health Information except as retained pursuant to Section 4, as set forth in this Section 7, or as
                                                    permitted by applicable law. ii) In the event that Business Associate determines that returning or destroying the
                                                    Protected Health Information is infeasible, Business Associate shall provide to Covered Entity notification of the
                                                    conditions that make return or destruction infeasible. If the return or destruction of Protected Health Information is
                                                    infeasible, Business Associate shall extend the protections of this Click-tabs Technology to such Protected Health
                                                    Information to those purposes that make the return or destruction infeasible, for so long as Business Associate
                                                    maintains such Protected Health Information.

                                                </li>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        <span class="fw-bolder">MISCELLANEOUS</span>
                                        <ol>
                                            <li>
                                                <li>
                                                    a)	Regulatory References. A reference in this Click-tabs Technology to a section in the HIPAA Rules means the
                                                    section as in effect or as amended.
                                                </li>
                                                <li>
                                                    b)	Amendment. The Parties mutually agree to enter into good faith negotiations to amend this Click-tabs Technology
                                                    from time to time in order for each of the Parties to comply with the requirements of the HIPAA Rules and any other
                                                    applicable law as may be in effect.
                                                </li>
                                                <li>
                                                    c)	Survival. The respective rights and obligations of Business Associate under Section 7(c) of this Click-tabs
                                                    Technology shall survive the termination of this Click-tabs Technology.
                                                </li>
                                                <li>
                                                    d)	Interpretation. Any ambiguity in this Click-tabs Technology shall be resolved to permit the Parties to
                                                    comply with the HIPAA Rules.
                                                </li>
                                                <li>
                                                    e)	Scope. This Click-tabs Technology shall apply only if and to the extent Click-tabs Technology is a “business
                                                    associate” to a “covered entity” as such terms are defined at 45 CFR § 160.103, and Click-tabs Technology does not,
                                                    merely by signing this Click-tabs Technology, concede that it holds such legal status.
                                                </li>
                                            </li>
                                        </ol>
                                    </li>
                                </li>
                                </ol>
                                <div class="col mt-3">
                                    <span class="fw-bold">
                                        IN WITNESS WHEREOF, the parties hereto have caused this Click-tabs Technology to be executed by their duly authorized representatives
                                        as of the Effective Date, and each represents and warrants to the other that it is legally free to enter into this Click-tabs
                                        Technology.
                                    </span>
                                </div>
                                <div class="row p-4">
                                    <div class="col-md-6">
                                        <h3><span class="fw-bold">CLICK-TABS TECHNOLGY, LLC</span></h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3><span class="fw-bold">CLIENT</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="bg-white bd rounded-sm rc" id="tabs-signature">
                        <div class="row p-3">
                            <div class="col-md-6">
                                <div class="signature-container">
                                    <div>
                                        <canvas id="signatureCanvas" width="400" height="200" style="border: 2px solid black"></canvas>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class="label">Password:</label>
                                    <input type="password" class="form-control" id="passwordq" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <label for="pin" class="label">PIN:</label>
                                    <input type="password" class="form-control" id="pin" placeholder="Enter PIN">
                                </div>
                                <div class="form-group">
                                    <label for="confirmPin" class="label">Confirm PIN:</label>
                                    <input type="password" class="form-control" id="confirmPin" placeholder="Confirm PIN">
                                </div>
                                <div class="button-container mt-3">
                                    <button id="saveButton" class="btn ho xi ye">Save</button>
                                    <button id="clearButton" class="btn btn-danger">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                @endif
                @if ($user->hasRole('admin') || $user->hasRole('Administrator'))
                    <div class="bg-white bd rounded-sm rc" id="tabs-subscription">
                        <div class="">
                            <div class="row">
                                <div class="container p-5">
                                    {{-- <div class="table-responsive2">

                                        <table class="table table-bordered table-striped tableDesign">
                                                <div class="col !bg-[#4133BF] p-2">
                                                    <h2 class="text-center text-white" style="font-weight: bold; font-size:2em;">DODD Subsciption Plan</h2>
                                                </div>
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="w-35" >Package Name</th>
                                                    <th class="w-15">Min Patients</th>
                                                    <th class="w-15">Max Patients</th>
                                                    <th class="w-15">Cost</th>
                                                    <th class="w-20">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subscriptionPlans->where('type', 'DOODD and home healthcare') as $subscriptionPlan)
                                                <tr>
                                                    <td>{{ $subscriptionPlan->package_name }}</td>
                                                    <td>{{ $subscriptionPlan->min_patient }}</td>
                                                    <td>{{ $subscriptionPlan->max_patient }}</td>
                                                    <td>$ {{ $subscriptionPlan->amount }}</td>
                                                    <td>
                                                        @if (!empty($existingSubscription) && $existingSubscription->subscription_plan_id == $subscriptionPlan->id)
                                                            @if ($existingSubscription->status == 'pending')
                                                                <button class="btn btn-warning"><span>Pending</span></button>
                                                            @elseif($existingSubscription->status == 'active')
                                                                <button class="btn btn-success"><span>Activated</span></button>
                                                            @else
                                                                <button  class="btn btn-danger"><span>Inactivated</span></button>
                                                            @endif
                                                        @else
                                                            <a href="{{ route('subscriptions.process-payment',$subscriptionPlan->id) }}" class="btn ho xi ye">Buy Now</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <br> --}}
                                    {{-- <div class="table-responsive2">
                                            <div class="col !bg-[#4133BF] p-2">
                                                <h2 class="text-center text-white" style="font-weight: bold; font-size:2em;">Home Care/Private Pay Subsciption Plan</h2>
                                        </div>
                                        <table class="table table-bordered table-striped tableDesign">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="w-35" >Package Name</th>
                                                    <th class="w-15">Min Patients</th>
                                                    <th class="w-15">Max Patients</th>
                                                    <th class="w-15">Cost</th>
                                                    <th class="w-20">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subscriptionPlans->where('type', 'Private Care') as $subscriptionPlan)
                                                <tr>
                                                    <td>{{ $subscriptionPlan->package_name }}</td>
                                                    <td>{{ $subscriptionPlan->min_patient }}</td>
                                                    <td>{{ $subscriptionPlan->max_patient }}</td>
                                                    <td>$ {{ $subscriptionPlan->amount }}</td>
                                                    <td>
                                                        @if (!empty($existingSubscription) && $existingSubscription->subscription_plan_id == $subscriptionPlan->id)
                                                            @if ($existingSubscription->status == 'pending')
                                                                <button class="btn btn-warning"><span>Pending</span></button>
                                                            @elseif($existingSubscription->status == 'active')
                                                                <button class="btn btn-success"><span>Activated</span></button>
                                                            @else
                                                                <button  class="btn btn-danger"><span>Inactivated</span></button>
                                                            @endif
                                                        @else
                                                            <a href="{{ route('subscriptions.process-payment',$subscriptionPlan->id) }}" class="btn ho xi ye">Buy Now</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <br> --}}
                                    <div class="table-responsive2">
                                            <div class="col !bg-[#4133BF] p-2">
                                                <h2 class="text-center text-white" style="font-weight: bold; font-size:2em;">Home Health Care Subsciption Plan</h2>
                                        </div>
                                        <table class="table table-bordered table-striped tableDesign">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="w-35" >Package Name</th>
                                                    <th class="w-15">Min Patients</th>
                                                    <th class="w-15">Max Patients</th>
                                                    <th class="w-15">Cost</th>
                                                    <th class="w-20">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subscriptionPlans->where('type', 'Home healthcare') as $subscriptionPlan)
                                                <tr>
                                                    <td>{{ $subscriptionPlan->package_name }}</td>
                                                    <td>{{ $subscriptionPlan->min_patient }}</td>
                                                    <td>{{ $subscriptionPlan->max_patient }}</td>
                                                    <td>$ {{ $subscriptionPlan->amount }}</td>
                                                    <td>
                                                        @if (!empty($existingSubscription) && $existingSubscription->subscription_plan_id == $subscriptionPlan->id)
                                                            @if ($existingSubscription->status == 'pending')
                                                                <button class="btn btn-warning"><span>Pending</span></button>
                                                            @elseif($existingSubscription->status == 'active')
                                                                <button class="btn btn-success"><span>Activated</span></button>
                                                            @else
                                                                <button  class="btn btn-danger"><span>Inactivated</span></button>
                                                            @endif
                                                        @else
                                                            <a href="{{ route('subscriptions.process-payment',$subscriptionPlan->id) }}" class="btn ho xi ye">Buy Now</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    {{-- <div class="table-responsive2">
                                            <div class="col !bg-[#4133BF]">
                                                <h2 class="text-center text-white" style="font-weight: bold; font-size: 2em;">Combo Subscription Plan</h2>
                                            </div>
                                        <table class="table table-bordered table-striped tableDesign">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="w-35">Package Name</th>
                                                    <th class="w-15">Min Patients</th>
                                                    <th class="w-15">Max Patients</th>
                                                    <th class="w-15">Cost</th>
                                                    <th class="w-20">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subscriptionPlans->where('type', 'Combo') as $subscriptionPlan)
                                                <tr>
                                                    <td>{{ $subscriptionPlan->package_name }}</td>
                                                    <td>{{ $subscriptionPlan->min_patient }}</td>
                                                    <td>{{ $subscriptionPlan->max_patient }}</td>
                                                    <td>$ {{ $subscriptionPlan->amount }}</td>
                                                    <td>
                                                        @if (!empty($existingSubscription) && $existingSubscription->subscription_plan_id == $subscriptionPlan->id)
                                                            @if ($existingSubscription->status == 'pending')
                                                                <button class="btn btn-warning"><span>Pending</span></button>
                                                            @elseif($existingSubscription->status == 'active')
                                                                <button class="btn btn-success"><span>Activated</span></button>
                                                            @else
                                                                <button class="btn btn-danger"><span>Inactivated</span></button>
                                                            @endif
                                                        @else
                                                            <a href="{{ route('subscriptions.process-payment',$subscriptionPlan->id) }}" class="btn ho xi ye">Buy Now</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> --}}


                                </div>
                            </div>
                        </div>

                    </div>
                @endif

            </div>
        </div>
    </main>

@endsection

@section('extra_js')
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script>
        $("#tabs").tabs();

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    jQuery('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    jQuery('#imagePreview').hide();
                    jQuery('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        jQuery("#imageUpload").change(function () {
            readURL(this);
        });
    </script>

<script src="https://unpkg.com/signature_pad"></script>
{{-- <script>
   document.addEventListener('DOMContentLoaded', function () {
    var canvas = document.getElementById('signatureCanvas');
    var signaturePad = new SignaturePad(canvas);

    document.getElementById('saveButton').addEventListener('click', function () {
        var signatureData = signaturePad.toDataURL(); // Get the signature as a base64-encoded image URL
        var password = document.getElementById('password').value;
        var pin = document.getElementById('pin').value;
        var confirmPin = document.getElementById('confirmPin').value;

        // Add validation for password and PIN here if needed

        // Send the signatureData, password, and pin to the server for saving to the database
        fetch('signatures/upload', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add Laravel's CSRF token for security
            },
            body: JSON.stringify({
                signatureImage: signatureData,
                password: password,
                pin: pin,
                confirmPin: confirmPin
            })
        })
        .then(function (response) {
            if (response.ok) {
                console.log('Signature saved successfully!');
                toastr.success('Signature saved successfully!');
                signaturePad.clear();
                // location.reload();
            } else {
                console.error('Failed to save the signature.');
            }
        })
        .catch(function (error) {
            console.error('Failed to save the signature:', error);
        });
    });

    document.getElementById('clearButton').addEventListener('click', function () {
        signaturePad.clear();

    });
});
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var canvas = document.getElementById('signatureCanvas');
        var signaturePad = new SignaturePad(canvas);

        document.getElementById('saveButton').addEventListener('click', function () {
            var signatureData = signaturePad.toDataURL();
            var password = document.getElementById('passwordq').value;
            var pin = document.getElementById('pin').value;
            var confirmPin = document.getElementById('confirmPin').value;

            // Send the signatureData, password, and pin to the server for saving to the database
            fetch('signatures/upload', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    signatureImage: signatureData,
                    password: password,
                    pin: pin,
                    confirmPin: confirmPin
                })
            })
                .then(function (response) {
                    if (response.ok) {
                        return response.json(); // Parse the response JSON
                    } else {
                        throw new Error('Failed to save the signature.');
                    }
                })
                .then(function (data) {
                if (data.success) {
                    console.log('Signature saved successfully!');
                    toastr.success(data.success);
                    signaturePad.clear();
                    document.getElementById('passwordq').value = '';
                    document.getElementById('pin').value = ''; // Clear pin field
                    document.getElementById('confirmPin').value = '';
                } else if (data.danger) {
                    console.error(data.danger);
                    toastr.error(data.danger);
                }
            })
                .catch(function (error) {
                    console.error('Failed to save the signature:', error);
                });
        });

        document.getElementById('clearButton').addEventListener('click', function () {
            signaturePad.clear();
        });
    });
</script>



@endsection
