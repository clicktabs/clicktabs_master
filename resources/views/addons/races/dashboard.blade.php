@extends('layouts.app')

@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">
            <!-- Welcome banner -->
            <div class="y pr dw jk rounded-sm la rc">

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
                    <h1 class="gu teu text-slate-800 font-bold rt">Race Addon</h1>
                    <p>Here is what’s happening with your projects today:</p>
                </div>

            </div>
            <!-- Dashboard actions -->
            <div class="je jd jc rc">

                <!-- Right: Actions -->
                <div class="sn am jo az jp ft">

                    <!-- Add view button -->
                    <a type="button" href="{{ route('races.create') }}" class="btn ho xi ye">
                        <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                        </svg>
                        <span class="hidden trm nq">Add New</span>
                    </a>

                    <!-- Datepicker built with flatpickr -->
                    <div class="y">
                        <input class="datepicker s me text-slate-500 hover--text-slate-600 gp xq ol" placeholder="Select dates" data-class="flatpickr-right">
                        <div class="g w j flex items-center pointer-events-none">
                            <svg class="oo sl du text-slate-500 ml-3" viewBox="0 0 16 16">
                                <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Filter button -->
                    @hasrole('super-admin')
                        @if (Auth::user()->organization_id == null)
                            <div class="y inline-flex" x-data="{ open: false }">
                                <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="d">Filter</span><wbr>
                                    <svg class="oo sl du" viewBox="0 0 16 16">
                                        <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                                <div class="uk tk g z x j qc qh bg-white organization-padding-custom border border-slate-200 mi rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                                    <form action="{{ route('check_addons') }}" method="post" class="row">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="organisation_id">Organisation (IDs)</label>
                                                    <select name="organisation_id" id="organisation_id" class="form-control s ou">
                                                        <option value="">Select Organisation ID</option>
                                                        @if ($organizations)
                                                            @foreach ($organizations as $organization)
                                                                <option value={{ $organization->id }}>{{ $organization->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vr vn co border-slate-200 hp">
                                            <ul class="flex items-center fe">
                                                <li>
                                                    <button class="btn-xs bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">Clear</button>
                                                </li>
                                                <li>
                                                    <button class="btn-xs ho xi ye" type="submit">Apply</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        @endif
                    @endhasrole
                </div>

            </div>

            <div class="row mb-4">

                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <header class="vc vu cs ch">
                        <h2 class="gh text-slate-800">Race Addons</h2>
                    </header>
                    <div class="dk">

                        <!-- Table -->
                        <div class="lf">

                            @include('addons.races.components.race_table')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
