@extends('layouts.app')
@section('extra_css')
    <link rel="stylesheet" href="{{asset('assets/css/patients-admission.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/patient/communication/style.css')}}"/>
    <style>
        .dataTables_length label {
            width: 250px;
        }

        .dataTables_length label select {
            width: 100px;
        }

        table.dataTable > tbody > tr.child ul.dtr-details {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .jquery-modal .modal a.close-modal {
            top: 15px;
            right: 5px;
        }
        .modal {
            height: auto !important;
        }
        .dataTables_scroll {
            padding-top: 0 !important;
        }
        #reportsTable_length {
            display: block !important;
        }
    </style>
@endsection
@section('content')
    <div class="vs jj ttm vl ou uf na">

        <!-- Welcome banner -->
        <div class="y pr dw jk rounded-sm la rc !bg-[#4133BF]">

            <!-- Background illustration -->
            <div class="g q k ip id pointer-events-none hidden tnh" aria-hidden="true">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
                        <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
                        <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                            <stop stop-color="#A5B4FC" offset="0%"></stop>
                            <stop stop-color="#818CF8" offset="100%"></stop>
                        </linearGradient>
                        <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                            <stop stop-color="#4338CA" offset="0%"></stop>
                            <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <g transform="rotate(64 36.592 105.604)">
                            <mask id="welcome-d" fill="#fff">
                                <use xlink:href="#welcome-a"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
                        </g>
                        <g transform="rotate(-51 91.324 -105.372)">
                            <mask id="welcome-f" fill="#fff">
                                <use xlink:href="#welcome-e"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                        <g transform="rotate(44 61.546 392.623)">
                            <mask id="welcome-h" fill="#fff">
                                <use xlink:href="#welcome-g"></use>
                            </mask>
                            <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
                            <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <!-- Content -->
            <div class="y">
                <h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]"> Reports</h1>
                <p class="!text-[#fff]">Reports lists</p>
            </div>

        </div>

        <div class="table-responsive">
            <table class="ux ou display nowrap !pt-0" style="width:100%" id="reportsTable">
                <thead class="bg-[#4133BF] text-[#fff] text-center">
                <tr>
                    <th>Medication & Dosage</th>
                    <th>Freq</th>
                    <th>Route</th>
                    <th>Classification</th>
                    <th>Physician</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Medication name</td>
                        <td>Freq</td>
                        <td>Route</td>
                        <td>Classification</td>
                        <td>Physician</td>
                        <td>
                            <button class="btn btn-primary !bg-[#0b5ed7] print_medication">Print</button>
                            <button class="btn btn-danger !bg-[#bb2d3b] ho xi ye delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal fade !max-w-full" id="printMedicationModal" tabindex="-1"
                 role="dialog" aria-labelledby="printMedicationModal" aria-hidden="true">
                <div class="container">
                    <h3 class="font-[600] text-[18px] text-left text-[#000]">Sign Medication Profile</h3>
                    <div class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden mt-[25px]">
                        <div class="table-header bg-[#4133BF] text-white p-[10px]">
                            <h4 class="text-white">Patient Information</h4>
                        </div>
                        <div class="table-responsive p-[10px]">
                            <table class="table border-none">
                                <thead class="text-left border-none">
                                <tr class="border-none">
                                    <th class="border-none">Admission Period Associated</th>
                                    <th class="border-none">Terminal Diagnosis</th>
                                    <th class="border-none">Comorbiditles</th>
                                    <th class="border-none">Attending Physician</th>
                                </tr>
                                </thead>
                                <tbody class="text-left">
                                <tr>
                                    <td class="border-none">07/04/2022-12/31/1999</td>
                                    <td class="border-none">Parkinson's disease</td>
                                    <td class="border-none">Acute gastric ulcer without hemorrhage or perforation</td>
                                    <td class="border-none">Rose, Amy</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                        <div class="table-header bg-[#4133BF] text-white p-[10px]">
                            <h4 class="text-white">Active Medication (1)</h4>
                        </div>
                        <div class="table-responsive p-[10px]">
                            <table class="table border-none">
                                <thead class="text-left border-none">
                                <tr class="border-none">
                                    <th class="border-none">
                                        Medication Name
                                        <span class="block">Dosage/Route/Frequency</span>
                                    </th>
                                    <th class="border-none">Indication</th>
                                    <th class="border-none">
                                        Start Date
                                        <span class="block">Discontinue Date</span>
                                    </th>
                                    <th class="border-none">Administerated By</th>
                                </tr>
                                </thead>
                                <tbody class="text-left">
                                <tr>
                                    <td class="border-none">
                                        <h4 class="font-[700] text-[14px]">Benadryl 25mg Oral Capsule</h4>
                                        <ul class="flex items-center text-[11px]">
                                            <li>1 Tab <span class="circle bg-[green] w-[5px] h-[5px] inline-block rounded-[50px] relative top-[-2px] mx-[5px]"></span></li>
                                            <li>By Mouth <span class="circle"></span></li>
                                            <li>BID - </li>
                                            <li>Twice Daily</li>
                                        </ul>
                                    </td>
                                    <td class="border-none">Allergic Rhinitis</td>
                                    <td class="border-none">Jul 01, 2022</td>
                                    <td class="border-none">Caregiver, Patient</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                        <div class="table-header bg-[#4133BF] text-white p-[10px]">
                            <h4 class="text-white">Drug Interactions</h4>
                        </div>
                        <div class="table-responsive p-[10px]">
                            <ul>
                                <li class="flex items-center gap-[15px] text-[11px] mb-[15px]">
                                    <h4 class="font-[700] text-[14px]">Drug name :</h4>
                                    <p>Interaction</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                        <div class="table-header bg-[#4133BF] text-white p-[10px]">
                            <h4 class="text-white">Active Allergies</h4>
                        </div>
                        <div class="table-responsive p-[10px]">
                            <ul class="flex items-center gap-[20px] text-[12px]">
                                <li class="py-[5px] px-[10px] rounded-[6px] bg-[#4133bf] text-white">Allergy new</li>
                                <li class="py-[5px] px-[10px] rounded-[6px] bg-[#4133bf] text-white">All</li>
                                <li class="py-[5px] px-[10px] rounded-[6px] bg-[#4133bf] text-white">Allergy</li>
                            </ul>
                        </div>
                    </div>

                    <div class="shadow-[0px_0px_10px_0px_#d9d9d9] rounded-[6px] mb-[20px] overflow-hidden">
                        <div class="table-header bg-[#4133BF] text-white p-[10px]">
                            <h4 class="text-white">Signature</h4>
                        </div>
                        <div class="p-[10px]">
                            <div class="flex gap-[10px]">
                                <input  class="mt-[5px]" type="checkbox" name="medication_regimen" id="medication_regimen" />
                                <label for="medication_regimen" class="font-[600]">Medication regimen review acknowledgement: I have reviewed all the listed medications for potential adverse effects and drug reactions, including ineffective drug therapy, side effects, drug interactions, duplicate drug therapy, medication allergies, and noncompllance with drug therapy and reviewed significant findings with the physician.</label>
                            </div>
                            <div class="row mt-[20px]">
                                <div class="col-md-12">
                                    <label for="date_signed" class="py-1 font-[600]"> Date Signed <span class="text-red">*</span></label>
                                    <input name="date_signed" id="date_signed" type="date" class="form-control s ou  p-3" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-[15px] mt-[30px]">
                        <button type="button" class="!bg-[#4133BF] py-[5px] px-[15px] rounded-[5px] text-[#fff]">Sign Medication Profile</button>
                        <button type="button" class="border border-[#4133BF] rounded-[5px] bg-transparent text-[#4133BF] px-[15px] py-[5px]">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_js')
    <script>
        $(document).ready(function () {
            $('#reportsTable').DataTable({
                scrollX: true,
            });
            $('.print_medication').click(function () {
                $('#printMedicationModal').modal({fadeDuration: 100});
            });
        });
    </script>
@endsection
