<table class="ux ou">
    <!-- Table header -->
    <thead class="go gv gq hp rounded-sm">
    <tr>
        <th class="dx">
            <div class="gh gt">Roles Name</div>
        </th>
        <th class="dx">
            <div class="gh gn">Permissions</div>
        </th>
        <th class="dx"></th>
        <th class="dx"></th>
        <th class="dx"></th>
    </tr>
    </thead>
    <!-- Table body -->
    <tbody class="text-sm gp le ln">
    <!-- Row -->
    @if ($roles)
        @foreach ($roles as $role)
            <tr>
                <td class="dx">
                    <div class="flex items-center">
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">{{ $role->name }}</div>
                    </div>
                </td>
                <td class="dx">
                    <div class="gn">
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $rolePermission)
                                @if($role->id === $rolePermission->role_id)
                                    <div class="inline-flex gp hc ys rounded-full gn vp vd">{{ $rolePermission->name }}</div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </td>
                <td class="dx">
                    <a href="{{ route('roles.edit', ['role' => $role->id]) }}" class="btn ho xi ye">Edit</a>
                </td>
                <td class="dx">
                    <a href="{{ route('roles.destroy', ['role' => $role->id]) }}"
                       class="btn ho xi ye" onclick="return confirm('Are you sure?')">Remove</a>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>
