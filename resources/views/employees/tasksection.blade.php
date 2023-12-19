<div class="main_wrapper">
    <div class="container-full">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_content">
                    <div id="employee_info_tabs">
                        <div class="main_content_nav">
                            <div class="">
                                <ul>
                                    <li><a href="#mytask">My Tasks</a></li>
                                    <li><a href="#visit_note">Miss visit note</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="mytask">

                            <div class="bg-white bd rounded-sm border border-slate-200 mt-2">
                                <div class="dk">
                                    <table class="table client_table ux ou display nowrap" id="schedulingList2">
                                        <thead class="bg-[#4133BF] text-[#fff]">
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Task</th>
                                                <th>Schedule Date</th>
                                                <th>Assigned To</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div id="visit_note" class="mt-[30px]">
                            <form method="post" action="">
                                @csrf
                                    <div class="flex items-center gap-[40px]">
                                        <div class="flex items-center gap-[15px]">
                                            <label for="p_communication_date">Date: </label>
                                            <input type="date" id="p_communication_date" name="p_communication_date" value="{{ old('p_communication_date') }}" />
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-[15px]">
                                                <label for="p_communication_phy">Physician: </label>
                                                <select class="m-[0] w-[200px] border-[1px] border-[#dfdede]" id="p_communication_phy" name="p_communication_phy">
                                                    <option value="">Select physician</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-[15px]">
                                                <label for="p_communication_patient">Patient: </label>
                                                <select class="m-[0] w-[200px] border-[1px] border-[#dfdede]" id="p_communication_patient" name="p_communication_patient">
                                                    <option value="">Select patient</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-[20px]">
                                        <textarea name="p_communication_text" class="py-[10px] px-[10px] border-[1px] border-[#dfdede] w-full h-[250px]">{{ old('p_communication_text') }}</textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





{{-- <div class="patient_status_table"  style="margin-top: -30px;"><!-----Task Section Starts----->
    <div class="patient_table p-2">
        <div id="employee_info_tabs">
            <ul class="d-flex flex-nowrap align-items-center gap-3  py-[10px] px-[20px] mb-[15px] bg-[#4133BF] text-[#fff]" >
                <li class="flex-shrink-0">
                    <a href="#employee_patient">My patients</a>
                </li>

                <li class="flex-shrink-0">
                    <a href="#mytask">My Tasks</a>
                </li>

                <li class="flex-shrink-0">
                    <a href="#visit_note">Miss visit note</a>
                </li>
            </ul>
        </div>
        <div id="mytask" class="dk">
            <table class="client_table ux ou display nowrap" style="width:100%; padding: 3px;" id="schedulingList2">
                <thead class="bg-[#4133BF] text-[#fff]">
                    <tr>
                        <th>Patient Name</th>
                        <th>Task</th>
                        <th>Schedule Date</th>
                        <th>Assigned To</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div id="visit_note">
            <form method="post" action="">
            @csrf
                <div class="flex items-center gap-[40px]">
                    <div class="flex items-center gap-[15px]">
                        <label for="p_communication_date">Date: </label>
                        <input type="date" id="p_communication_date" name="p_communication_date" value="{{ old('p_communication_date') }}" />
                    </div>
                    <div>
                        <div class="flex items-center gap-[15px]">
                            <label for="p_communication_phy">Physician: </label>
                            <select class="m-[0] w-[200px] border-[1px] border-[#dfdede]" id="p_communication_phy" name="p_communication_phy">
                                <option value="">Select physician</option>

                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-[15px]">
                            <label for="p_communication_patient">Patient: </label>
                            <select class="m-[0] w-[200px] border-[1px] border-[#dfdede]" id="p_communication_patient" name="p_communication_patient">
                                <option value="">Select patient</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="mt-[20px]">
                    <textarea name="p_communication_text" class="py-[10px] px-[10px] border-[1px] border-[#dfdede] w-full h-[250px]">{{ old('p_communication_text') }}</textarea>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>

    </div>
</div><!-----Task Section Endss-----> --}}
