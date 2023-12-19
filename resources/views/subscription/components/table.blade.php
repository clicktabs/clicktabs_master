<table class="ux ou">
    <!-- Table header -->
    <thead class="go gv gq hp rounded-sm">
        <tr>
            <th class="dx" style="width: 20%;">
                <div class="gh gt">Name</div>
            </th>

            <th class="dx" style="width: 10%;">
                <div class="gh gn">Min Patient</div>
            </th>
            <th class="dx" style="width: 10%;">
                <div class="gh gn">Max Patient</div>
            </th>
            <th class="dx" style="width: 20%;">
                <div class="gh gn">Type</div>
            </th>
            <th class="dx" style="width: 20%;">
                <div class="gh gn">Status</div>
            </th>
            <th class="dx" style="width: 20%;">Action</th>

        </tr>
    </thead>
    <!-- Table body -->
    <tbody class="text-sm gp le ln">
        <!-- Row -->
        @if ($subscriptionPlans)
            @foreach ($subscriptionPlans as $subscriptionPlan)
            <tr>
                <td class="dx">
                    <div class="flex items-center">
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">{{ $subscriptionPlan->package_name }}</div>
                    </div>
                </td>
                <td class="dx">
                    <div class="flex items-center">
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">{{ $subscriptionPlan->min_patient }}</div>
                    </div>
                </td>
                <td class="dx">
                    <div class="flex items-center">
                        <div class="text-slate-800 font-weight-bolder" style="font-weight: 700;">{{ $subscriptionPlan->max_patient }}</div>
                    </div>
                </td>

                <td class="dx">
                    <div class="gn">
                        @if ($subscriptionPlan->type == 'DOODD and home healthcare')
                            <span class="text-primary">DODD</span>
                        @elseif ( $subscriptionPlan->type == 'Private Care')
                            <span class="text-primary">Private Care</span>
                        @elseif ( $subscriptionPlan->type == 'Combo')
                            <span class="text-primary">Combo</span>
                        @else
                            <span class="text-warning">Home Care/Private Pay</span>
                        @endif
                    </div>
                </td>

                <td class="dx">
                    <div class="gn">
                        @if ($subscriptionPlan->status == 'active')
                            <span class="text-success">Active</span>
                        @else
                            <span class="text-danger">Inactive</span>
                        @endif
                    </div>
                </td>


                <td class="dx">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('subscription.edit',$subscriptionPlan->id) }}" class="btn ho xi ye">Edit</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('subscription.destroy',$subscriptionPlan->id) }}" class="btn ho xo ye">Delete</a>
                        </div>
                </div>
                </td>
            </tr>
            @endforeach
        @endif

    </tbody>
</table>
