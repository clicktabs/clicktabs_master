<table class="ux ou">
    <!-- Table header -->
    <thead class="go gv gq hp rounded-sm">
    <tr>
        <th class="dx">
            <div class="gh gt">Full Name</div>
        </th>
        <th class="dx">
            <div class="gh gn">Email</div>
        </th>
        <th class="dx">
            <div class="gh gn">Organization</div>
        </th>
        <th class="dx">
            <div class="gh gn">Role</div>
        </th>
        <th class="dx"></th>
        <th class="dx"></th>
        <th class="dx"></th>
    </tr>
    </thead>
    <!-- Table body -->
    <tbody class="text-sm gp le ln">
    <!-- Row -->
    @if ($users)
        @foreach ($users as $user)
            @if($user->user_code !== Auth::user()->user_code)
            <tr>
                <td class="dx">
                    <div class="flex items-center">
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">
                            {{ $user->full_name }}</div>
                    </div>
                </td>
                <td class="dx">
                    <div class="gn">{{ $user->email }}</div>
                </td>
                <td class="dx">
                    <div class="gn">{{ $user->organization->name ?? ""}}</div>
                </td>
                <td class="dx">
                    <div class="gn">
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $role)
                                <div class="inline-flex gp hc ys rounded-full gn vp vd m-[5px]">{{ $role }}</div>
                            @endforeach
                        @endif
                    </div>
                </td>
                <td class="dx">
                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn ho xi ye">Edit</a>
                </td>
                <td class="dx">
                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn ho xi ye">Remove</button>
                    </form>
                </td>
            </tr>
            @endif
        @endforeach
    @endif

    </tbody>
</table>
