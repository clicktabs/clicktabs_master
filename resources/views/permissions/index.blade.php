@extends('layouts.app')
@section('content')
<main>
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
        <path fill="url(#welcome-c)" mask="url(#welcome-f)"
              d="M40.333-15.147h50v95h-50z"></path>
    </g>
    <g transform="rotate(44 61.546 392.623)">
        <mask id="welcome-h" fill="#fff">
            <use xlink:href="#welcome-g"></use>
        </mask>
        <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
        <path fill="url(#welcome-c)" mask="url(#welcome-h)"
              d="M40.333-15.147h50v95h-50z"></path>
    </g>
</g>
</svg>
</div>
<!-- Content -->
<div class="y">
<h1 class="gu teu text-slate-800 font-bold rt !text-[#fff]"> Permission</h1>
<p class="!text-[#fff]">Setup role with permissions</p>
</div>

</div>

<div class="row mb-4">
<!-- Table (Top Channels) -->
<div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
<header class="vc vu cs ch">
<h2 class="gh text-slate-800">Permission</h2>
</header>
<div class="dk">
<!-- Table -->
<div class="lf">
    <table class="ux ou">
        <!-- Table header -->
        <thead class="go gv gq hp rounded-sm">
        <tr>
            <th class="dx">
                <div class="gh gt">Roles Name</div>
            </th>
            <th class="dx">
                <div class="gh gn"></div>
            </th>
        </tr>
        </thead>
        <!-- Table body -->
        <tbody class="text-sm gp le ln">
        <!-- Row -->
        @if ($permissions)
            @foreach ($permissions as $role)
                @if($role->name !== 'super-admin')
                    <tr>
                        <td class="dx">
                            <div class="flex items-center">
                                <div class="text-slate-800 font-weight-bolder"
                                     style="font-weight: 700;">{{$role->name}}</div>
                            </div>
                        </td>
                        <td class="dx flex items-center gap-[5px]">
                            <a href="{{ route('edit-role', ['addon_subcategory_id' => $role->id]) }}" class="btn ho xi ye">Edit</a>
                            @hasrole('super-admin')
                            <form action="{{ route('roles.destroy', ['role' => $role->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ho xi ye ">Remove</button>
                            </form>
                            @endrole
                        </td>
                    </tr>
                @endif
            @endforeach
        @endif
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection




