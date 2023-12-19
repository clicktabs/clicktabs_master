<!-- Sidebar -->
<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="m w bg-[#ff0000] pu tb tex ted bz wr" :class="sidebarOpen ? 'ba' : 'opacity-0 pointer-events-none'"
         aria-hidden="true" x-cloak=""></div>

    <!-- Sidebar -->
    <div id="sidebar" class="flex ak g tb x k tea tec teh tts ss lp tth l or tej ttz 2xl:!w-64 ub hs dw we wr wu !bg-[#4133BF]"
         :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
         @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex fe nx vq j_">
            <!-- Close button -->
            <button class="tex text-slate-500 xl" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar"
                    :aria-expanded="sidebarOpen">
                <span class="d">Close sidebar</span>
                <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                </svg>
            </button>
            <!-- Logo -->
            <a class="block flex items-center gap-[3px]" href="{{ route('dashboard') }}">
                <img class="w-[50px]" src="{{asset('assets/images/auth-decoration.png')}}" />
                <h3 class="font-[800] text-[20px] leading-[40px] uppercase text-[#fff]">Click-Tabs</h3>
            </a>
        </div>

        <!-- Links -->
        <div class="ff rounded-[10px] bg-[#fff]">
            <!-- Pages group -->
            <div>
                <ul class="upper">
                    <!-- Dashboard -->
                    <li
                        class="vn vr rounded-sm n_ ww {{ request()->route()->getName() === 'dashboard'? 'bg-[#ff0000] active': '' }}">
                        <a class="block gj ld wt wi" href="{{ route('dashboard') }}">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du text-indigo-500"
                                              d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z">
                                        </path>
                                        <path class="du text-indigo-600"
                                              d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                        <path class="du text-indigo-200"
                                              d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100  wr text-[#000]">Dashboard</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- Community -->

{{--                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">--}}
{{--                        <a class="block gj xc ld wt wi" href="{{ route('employees.index') }}">--}}
{{--                            <div class="flex items-center fe">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <svg class="ub so oi" viewBox="0 0 24 24">--}}
{{--                                        <path class="du g_" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>--}}
{{--                                        <path class="du gq" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100  wr text-[#fff]">Employees</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                </ul>
            </div>
            <!-- More group -->
            <div>
                <h3 class="go gv text-[#000] font-[700] text-[18px] gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">Setup</span>
                </h3>
                <ul class="nk">
                    <!-- Setups -->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path>
                                        <path class="du gz" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path>
                                        <path class="du g_" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100  wr text-[#000]">Super Admin Setups</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww {{ request()->route()->getName() === 'addons-list.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                       href="{{ route('addons-list.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr">Add-ons</span>
                                    </a>
                                </li>
                                <li class="rt ww {{ request()->route()->getName() === 'organizations.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                       href="{{ route('organizations.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr">Create Organizations</span>
                                    </a>
                                </li>
                                <li class="rt ww {{ request()->route()->getName() === 'templates.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                       href="{{ route('templates.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr">Templates</span>
                                    </a>
                                </li>
                                <li class="rt ww {{ request()->route()->getName() === 'users.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]" href="{{ route('users.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr">Users</span>
                                    </a>
                                </li>
                                <li class="rt ww {{ request()->route()->getName() === 'role-list'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]" href="{{route('role-list')}}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr">Roles</span>
                                    </a>
                                </li>
                                @can('view-permission')
                                 <li class="rt ww {{ request()->route()->getName() === 'permission.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('permission.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Permission</span>
                                    </a>
                                </li>
                                @endcan
                                @hasrole('super-admin')
                                    <li class="rt ww {{ request()->route()->getName() === 'subscription.index'? 'bg-[#ff0000] active': '' }}">
                                        <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                            href="{{ route('subscription.index') }}">
                                            <span class="text-sm gp ttw tnn text-[#000] wr">Subscription Plans</span>
                                        </a>
                                    </li>

                                    <li class="rt ww {{ request()->route()->getName() === 'subscriptions.pending-payment'? 'bg-[#ff0000] active': '' }}">
                                        <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                            href="{{ route('subscriptions.pending-payment') }}">
                                            <span class="text-sm gp ttw tnn text-[#000] wr">Pending Subscription</span>
                                        </a>
                                    </li>
                                @endhasrole

                            </ul>
                        </div>
                    </li>
                    <!-- Settings -->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                        <path class="du gq" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                        <path class="du g_" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                        <path class="du gq" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                    </svg>
                                    <span class="text-sm gp ttw tnn text-[#000] wr ml-3">Settings</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww {{ request()->route()->getName() === 'profile.account'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]" href="{{route('profile.account')}}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr">My Account</span>
                                    </a>
                                </li>
{{--                                <li class="rt ww">--}}
{{--                                    <a class="block gq hover--text-slate-200 wt wi ld" href="#">--}}
{{--                                        <span class="text-sm gp ttw tnn text-[#000] wr">Profile Settings</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </li>
                    <!-- Settings -->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        {{-- <a class="block gj xc ld wt wi" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> --}}
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="oi so du _o" viewBox="0 0 24 24">
                                        <path class="gq" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                                        <path class="g_" d="M3 23H1V1h2z"></path>
                                    </svg>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit" class="text-sm gp ml-3 ttw tnn wr text-[#000] block xc ld wt wi">
                                            {{ __('Logout') }}
                                        </button>
                                    </form>
                                </div>

                            </div>
                        {{-- </a> --}}
                    </li>
                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="mt hidden tew 2xl:hidden justify-end rn">
            <div class="vn vr">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="d">Expand / collapse sidebar</span>
                    <svg class="oi so du _o" viewBox="0 0 24 24">
                        <path class="gq" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                        <path class="g_" d="M3 23H1V1h2z"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
