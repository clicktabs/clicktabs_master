<table class="ux ou">
    <thead class="go gv gq hp rounded-sm">
        <tr>
            <th class="dx">
                <div class="gh gt">patient name</div>
            </th>
            <th class="dx">
                <div class="gh gn">Insurance </div>
            </th>
            <th class="dx">
                <div class="gh gn">Address </div>
            </th>
            <th class="dx">
                <div class="gh gn">Phone  </div>
            </th>
            <th class="dx">
                <div class="gh gn">Date of Referral</div>
            </th>
            <th class="dx">
                <div class="gh gn">created by</div>
            </th>
            <th class="dx">
                <div class="gh gn">Action</div>
            </th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody class="text-sm gp le ln">
        <!-- Row -->
        @if ($referrals)
            @foreach ($referrals as $referral)
            <tr>
                <td class="dx">
                    <div class="gn">{{ $referral->patient_full_name ?? "N/A" }}</div>
                </td>

                <td class="dx">
                    <div class="gn">{{ $referral->mobile_phone ?? "N/A" }}</div>
                </td>

                <td class="dx">
                    <div class="gn">{{ $referral->patient_full_address ?? "N/A" }}</div>
                </td>

                <td class="dx">
                    <div class="gn">
                        {{ $referral->telephone_no ?? "N/A" }}
                    </div>
                </td>

                <td class="dx">
                    <div class="gn">
                        {{ $referral->date_of_request ?? "N/A" }}
                    </div>
                </td>

                <td class="dx">
                    <div class="gn">
                        {{ $referral->user->first_name ?? "N/A" }}
                    </div>
                </td>

                <td class="dx">
                    <div class="gn">
                        <a href="{{ route('patients.create', ['ref_id' => $referral->id]) }}" class="btn ho xi ye edit">Convert</a>
                        <a href="{{ route('referrals.edit', $referral->id) }}" class="btn ho xi ye edit">Edit</a>
                        <form action="{{ route('referrals.destroy', $referral->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn ho xi ye"  type="submit">Delete</button>
                        </form>
                    </div>

                </td>
            </tr>
            @endforeach
        @endif

    </tbody>
</table>
