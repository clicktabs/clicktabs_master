<table class="ux ou">
    <thead class="go gv gq hp rounded-sm">
        <tr>
            <th class="dx">
                <div class="gh gt">Name</div>
            </th>
            <th class="dx">
                <div class="gh gn">Phone</div>
            </th>
            <th class="dx">
                <div class="gh gn">Email</div>
            </th>
            <th class="dx">
                <div class="gh gn">Status</div>
            </th>
            <th class="dx"></th>
            <th class="dx"></th>
            <th class="dx"></th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody class="text-sm gp le ln">
        <!-- Row -->
        @if ($patients)
            @foreach ($patients as $patient)
            <tr>
                <td class="dx">
                    <div class="flex items-center">
                        <svg class="ub mr-2 _b" width="36" height="36" viewBox="0 0 36 36">
                            <circle fill="#24292E" cx="18" cy="18" r="18"></circle>
                            <path d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" fill="#FFF"></path>
                        </svg>
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">{{ $patient->first_name ?? "N/A" }} {{ $patient->last_name ?? "N/A" }}</div>
                    </div>
                </td>
                <td class="dx">
                    <div class="gn">{{ $patient->extra_info->mobile_phone ?? "N/A" }}</div>
                </td>
                <td class="dx">
                    <div class="gn">{{ $patient->extra_info->email ?? "N/A" }}</div>
                </td>
                <td class="dx">
                    <div class="gn">
                        @if ($patient->status)
                            <span class="text-success">Active</span>
                        @else
                            <span class="text-danger">Inactive</span>
                        @endif
                    </div>
                </td>
                <td class="dx">
                    <a href="{{ route('admit_refered_patient', [$patient->patient_code]) }}" class="btn ho xi ye">Admit as Patient</a>
                </td>
                <td class="dx">
                    {{-- @if ($patient->status)
                        <a href="{{ route('patients.edit', [$patient->patient_code]) }}" class="btn ho xi ye">Edit</a>
                    @else
                        <button disabled class="btn ho xi ye">Edit</button>
                    @endif --}}
                </td>
                <td class="dx">
                    <form action="{{ route('patients.destroy', [$patient->patient_code]) }}" method="post">
                        @csrf
                        @method('delete')
                        @if ($patient->status)
                            <button class="btn ha xo ye" type="submit">Disable</button>
                        @else
                            <button class="btn hd xu ye" type="submit">Enable</button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
        @endif

    </tbody>
</table>
