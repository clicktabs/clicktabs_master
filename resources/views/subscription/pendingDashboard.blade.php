@extends('layouts.app')

@section('extra_css')
    <link rel="stylesheet" href="{{asset('assets/css/patients-admission.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/patient/communication/style.css')}}"/>
@endsection

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
                    <h1 class="gu teu text-slate-800 font-bold rt">Subscriptions</h1>
                </div>

            </div>

            <div id="tabs">
                <div class="main_content_nav">
                    <ul class="bg-[#4133BF]">
                        <li><a href="#tabs-pending">Pending</a></li>
                        <li><a href="#tabs-complete">Active</a></li>
                        <li><a href="#tabs-inactive">Inactive</a></li>
                    </ul>
                </div>
                <div class="bg-white bd rounded-sm rc" id="tabs-pending">
                    <div class="row pt-3">
                        <h2 class="text-center" style="font-weight: bold">Pending Subscriptions</h2>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table table-bordered table-striped p-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Package Name</th>
                                    <th>Organization Name</th>
                                    <th>Package Type</th>
                                    <th>Order Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($allSubscriptions->where('status', 'pending'))
                                    @foreach ($allSubscriptions->where('status', 'pending') as $pendingSubscription)
                                        <tr>
                                            <td>{{ $pendingSubscription->subscriptionPlan->package_name }}</td>
                                            <td>{{ $pendingSubscription->organization->name }}</td>
                                            <td>
                                                @if ( $pendingSubscription->subscriptionPlan->type == 'DOODD and home healthcare')
                                                    <span class="text-primary">DODD</span>
                                                @elseif ( $pendingSubscription->subscriptionPlan->type == 'Private Care')
                                                    <span class="text-primary">Private Care</span>
                                                @elseif ( $pendingSubscription->subscriptionPlan->type == 'Combo')
                                                    <span class="text-primary">Combo</span>
                                                @else
                                                    <span class="text-warning">Home Care/Private Pay</span>
                                                @endif
                                            </td>
                                            <td>{{ $pendingSubscription->created_at->format('f d Y') }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="{{route('update.subscription')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="pendingId" value="{{$pendingSubscription->id}}">
                                                            <input type="date" name="expire_date" required>
                                                            <button type="submit" class="btn ho xi ye">Active</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="bg-white bd rounded-sm rc" id="tabs-complete">
                    <div class="row pt-3">
                        <h2 class="text-center" style="font-weight: bold">Active Subscriptions</h2>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table table-bordered table-striped p-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Package Name</th>
                                    <th>Organization Name</th>
                                    <th>Package Type</th>
                                    <th>Expire Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($allSubscriptions->where('status', 'active'))
                                    @foreach ($allSubscriptions->where('status', 'active') as $activeSubscription)
                                        <tr>
                                            <td>{{ $activeSubscription->subscriptionPlan->package_name }}</td>
                                            <td>{{ $activeSubscription->organization->name }}</td>
                                            <td>
                                                @if ( $activeSubscription->subscriptionPlan->type == 'DOODD and home healthcare')
                                                    <span class="text-primary">DODD</span>
                                                @elseif ( $activeSubscription->subscriptionPlan->type == 'Private Care')
                                                    <span class="text-primary">Private Care</span>
                                                @elseif ( $activeSubscription->subscriptionPlan->type == 'Combo')
                                                    <span class="text-primary">Combo</span>
                                                @else
                                                    <span class="text-warning">Home Care/Private Pay</span>
                                                @endif
                                            </td>
                                            <td>{{ date('d-m-Y', strtotime($activeSubscription->expires_at)) }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="{{route('update.subscription')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="pendingId" value="{{$activeSubscription->id}}">
                                                            <input type="date" name="expire_date" required>
                                                            <button type="submit" class="btn ho xi ye">Active</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="bg-white bd rounded-sm rc" id="tabs-inactive">
                    <div class="row pt-3">
                        <h2 class="text-center" style="font-weight: bold">Inactive Subscriptions</h2>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table table-bordered table-striped p-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Package Name</th>
                                    <th>Organization Name</th>
                                    <th>Package Type</th>
                                    <th>Expire Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($allSubscriptions->where('status', 'inactive'))
                                    @foreach ($allSubscriptions->where('status', 'inactive') as $activeSubscription)
                                        <tr>
                                            <td>{{ $activeSubscription->subscriptionPlan->package_name }}</td>
                                            <td>{{ $activeSubscription->organization->name }}</td>
                                            <td>
                                                @if ( $activeSubscription->subscriptionPlan->type == 'DOODD and home healthcare')
                                                    <span class="text-primary">DODD</span>
                                                @elseif ( $activeSubscription->subscriptionPlan->type == 'Private Care')
                                                    <span class="text-primary">Private Care</span>
                                                @elseif ( $activeSubscription->subscriptionPlan->type == 'Combo')
                                                    <span class="text-primary">Combo</span>
                                                @else
                                                    <span class="text-warning">Home Care/Private Pay</span>
                                                @endif
                                            </td>
                                            <td>{{ date('d-m-Y', strtotime($activeSubscription->expires_at)) }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="{{route('update.subscription')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="pendingId" value="{{$activeSubscription->id}}">
                                                            <input type="date" name="expire_date" required>
                                                            <button type="submit" class="btn ho xi ye">Active</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




















        </div>
    </main>

@endsection
@section('extra_js')

<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script>
    $("#tabs").tabs();
</script>

@endsection
