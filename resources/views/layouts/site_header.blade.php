<header class="b k cs tw !bg-[#4133BF]">
    <div class="vs jj ttm">
            <div class="col-md-12">
                <p class="p-1">
                    <marquee behavior="scroll" direction="left" class="text-white">
                     
                    </marquee>
                </p>
            </div>
        <div class="flex items-center fe sa rr" style="margin-top: -20px">

            <!-- Header: Left side -->
            <div class="flex">
                <!-- Hamburger button -->
                <button class="text-slate-500 hover--text-slate-600 tex" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                    <span class="d">Open sidebar</span>
                    <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2"></rect>
                        <rect x="4" y="11" width="16" height="2"></rect>
                        <rect x="4" y="17" width="16" height="2"></rect>
                    </svg>
                </button>
            </div>
             <!-- Header: Right side -->
            <div class="flex items-center fl">

                            <!-- Search button -->
            <div class="top-bar-area bg-color">
                <div class="container">
                     <div class="row align-items-center">
                         <div class="col-md-12">
                            <h1 class="fw-bolder display-4 text-white text-center" style="font-size: 25px; font-family:'Times New Roman', Times, serif;">{{ !empty(Auth::user()->organization->name)?Auth::user()->organization->name:'' }}</h1>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Notifications button -->
                <div class="y inline-flex" x-data="{ open: false }">
                    <button class="os sf flex items-center justify-center hi xt wt wi rounded-full" :class="{ 'hu': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                        <span class="d">Notifications</span>
                        <svg class="oo sl" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path class="du text-slate-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path>
                            <path class="du gq" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path>
                        </svg>
                        <div class="g k q oa sc ha cr cc rounded-full"></div>
                    </button>
                    <div class="uk tk g z q rf _g ut bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                        <div class="go gh gq gv mi ms vs">Notifications</div>
                        <ul>
                            <li class="cs border-slate-200 wk">
                                <a class="block vr vs xr" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                    <span class="block text-sm ru">📣 <span class="gp text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                    <span class="block go gp gq">Feb 12, 2021</span>
                                </a>
                            </li>
                            <li class="cs border-slate-200 wk">
                                <a class="block vr vs xr" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                    <span class="block text-sm ru">📣 <span class="gp text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                    <span class="block go gp gq">Feb 9, 2021</span>
                                </a>
                            </li>
                            <li class="cs border-slate-200 wk">
                                <a class="block vr vs xr" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                    <span class="block text-sm ru">🚀<span class="gp text-slate-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                    <span class="block go gp gq">Jan 24, 2020</span>
                                </a>
                            </li>
                          </ul>
                    </div>
                </div>
                <!-- Info button -->
                <div class="y inline-flex" x-data="{ open: false }">
                    <button class="os sf flex items-center justify-center hi xt wt wi rounded-full" :class="{ 'hu': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                        <span class="d">Info</span>
                        <svg class="oo sl" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path class="du text-slate-500" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                        </svg>
                    </button>
                    <div class="uk tk g z q un bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                        <div class="go gh gq gv mi ms vn">Need help?</div>
                        <ul>
                            <li>
                                <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                    <svg class="w-3 h-3 du text-indigo-300 ub mr-2" viewBox="0 0 12 12">
                                        <rect y="3" width="12" height="9" rx="1"></rect>
                                        <path d="M2 0h8v2H2z"></path>
                                    </svg>
                                    <span>Documentation</span>
                                </a>
                            </li>
                            <li>
                                <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                    <svg class="w-3 h-3 du text-indigo-300 ub mr-2" viewBox="0 0 12 12">
                                        <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"></path>
                                    </svg>
                                    <span>Support Site</span>
                                </a>
                            </li>
                            <li>
                                <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                    <svg class="w-3 h-3 du text-indigo-300 ub mr-2" viewBox="0 0 12 12">
                                        <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path>
                                    </svg>
                                    <span>Contact us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User button -->
                <div class="y inline-flex" x-data="{ open: false }">
                    <button class="inline-flex justify-center items-center hover:text-[#fff]" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                        <img class="os sf rounded-full" src="{{ empty(\Illuminate\Support\Facades\Auth::user()->account->image) ? asset('employee/avatar.svg') : asset(\Illuminate\Support\Facades\Auth::user()->account->image) }}" width="32" height="32" alt="User">

                        <div class="flex items-center ld">
                            @hasrole('admin')
                            <span class="ld nq text-sm gp kz text-[#fff] hover:text-[#fff]">{{\Illuminate\Support\Facades\Auth::user()->organization->name}}</span>
                            <svg class="w-3 h-3 ub nz du gq" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                            </svg>
                            @endhasrole
                        </div>
                    </button>
                    <div class="uk tk g z q un bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                        <div class="mu ms vn rt cs border-slate-200">
                            <div class="gp text-slate-800">{{\Illuminate\Support\Facades\Auth::user()->full_name}}</div>
                            {{-- <div class="go text-slate-500 gm">{{ \Auth::user()->getRoleNames()->first() ?? ""}}</div> --}}
                        </div>
                        <ul>
                            <li>
                                <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="{{ route('profile.account') }}" @click="open = false" @focus="open = true" @focusout="open = false">My Account</a>
                            </li>
                            <li>
{{--                                <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="signin.html" @click="open = false" @focus="open = true" @focusout="open = false">Sign Out</a>--}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="gp text-sm text-indigo-500 xh flex items-center vf vn">
                                        {{ __('Logout') }}
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</header>


