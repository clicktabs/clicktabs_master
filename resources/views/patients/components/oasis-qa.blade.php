<table class="ux ou display nowrap" style="width:100%" id="nonPatientTable">
    <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
    <tr>
        <th class="dx">
            <div class="gh gt">MRN</div>
        </th>
        <th class="dx">
            <div class="gh gt">Patient</div>
        </th>
        <th class="dx">
            <div class="gh gt">Insurance</div>
        </th>
        <th class="dx">
            <div class="gh gt">Policy#</div>
        </th>
        <th class="dx">
            <div class="gh gt">Address</div>
        </th>
        <th class="dx">
            <div class="gh gt">Date of Birth</div>
        </th>
        <th class="dx">
            <div class="gh gt">Phone</div>
        </th>
        <th class="dx">
            <div class="gh gt">Gender</div>
        </th>
        <th class="dx">
            <div class="gh gt">Non Admit Reason</div>
        </th>
        <th class="dx">
            <div class="gh gt">Non Admit Date</div>
        </th>
        <th class="dx">
            Action
        </th>
    </tr>
    </thead>
    <!-- Table body -->
    <tbody class=" text-center text-sm gp le ln">

            <tr>
                <td class="dx">
                   
                </td>
                <td class="dx">
                    <div></div>
                </td>

                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
                    <div class="gn">Policy</div>
                </td>
                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
                      <div class="gn"></div>
                    
                </td>
                <td class="dx">
                    <div class="gn"></div>
                </td>
                <td class="dx">
                    <form name="patientAdmitForm" id="patientAdmitForm">
                        @csrf
                        <input type="text" class="hidden" id="patient_id" name="patient_id" value="" />
                        <button class="btn ho xi ye admit" data-pid="">Admit</button>
                        <button type="button" class="btn btn-danger !bg-[#bb2d3b] ho xi ye delete" data-id="">Delete</button>
                    </form>
                </td>
            </tr>
     </tbody>
</table>
