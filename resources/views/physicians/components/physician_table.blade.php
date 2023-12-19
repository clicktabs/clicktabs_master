<table class="ux ou display nowrap" style="width:100%" id="physicianTable">
    <!-- Table header -->
    <thead class="go gv rounded-sm bg-[#4133BF] text-[#fff]">
        <tr>
            <th></th>
            <th class="dx">
                <div class="gh gt">NPI</div>
            </th>
            <th class="dx">
                <div class="gh gt">First Name</div>
            </th>
            <th class="dx">
                <div class="gh gt">Last Name</div>
            </th>
            <th class="dx">
                <div class="gh gt">Credentials</div>
            </th>
            <th class="dx">
                <div class="gh gn">Address Line 1</div>
            </th>
            <th class="dx">
                <div class="gh gn">City</div>
            </th>
            <th class="dx">
                <div class="gh gn">State</div>
            </th>
            <th class="dx">
                <div class="gh gn">Zip Code</div>
            </th>
            <th class="dx">
                <div class="gh gn">Phone Number</div>
            </th>
            <th class="dx">
                <div class="gh gn">Alternative Number</div>
            </th>
            <th class="dx">
                <div class="gh gn">Fax Number</div>
            </th>
            <th class="dx">
                <div class="gh gn">Physician Access</div>
            </th>
            <th class="dx">
                <div class="gh gn">PECOS</div>
            </th>
            <th class="dx">Action</th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody class="text-sm gp le ln">
        <!-- Row -->
        @if ($physicians)
            @foreach ($physicians as $physician)
            <tr>
                <td></td>
                <td class="dx">
                    <div>{{ $physician->npi_number }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->first_name }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->last_name }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->credentials }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->address_line_1 }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->city }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->state }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->zip }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->primary_phone }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->alternate_phone }}</div>
                </td>
                <td class="dx">
                    <div>{{ $physician->fax }}</div>
                </td>
                <td class="dx">
                    <div class="gn">
                        @if ($physician->active_status)
                            <span class="text-success">Yes</span>
                        @else
                            <span class="text-danger">No</span>
                        @endif
                    </div>
                </td>
                <td class="dx">
                    <div class="gn">
                        @if ($physician->pecos_verification)
                            <span class="text-success">Yes</span>
                        @else
                            <span class="text-danger">No</span>
                        @endif
                    </div>
                </td>
                <td class="dx">
                    <a href="{{ route('physician.show', encrypt($physician->id)) }}" class="btn ho xi ye">Edit</a>
                    <a href="{{ route('physician.show', encrypt($physician->id)) }}" class="btn ho xi ye">Delete</a>
                </td>
            </tr>
            @endforeach
        @endif

    </tbody>
</table>
