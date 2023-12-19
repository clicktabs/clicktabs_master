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
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100  wr text-[#000] fw-bolder">Dashboard</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    {{-- <li
                        class="vn vr rounded-sm n_ ww {{ request()->route()->getName() === 'new.hiring'? 'bg-[#ff0000] active': '' }}">
                        <a class="block gj ld wt wi" href="{{ route('new.hiring') }}">
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
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100  wr text-[#000] fw-bolder">New Hiring</span>
                                </div>
                            </div>
                        </a>
                    </li> --}}


                    <!-- Employees -->
                    @canany(['employee-create', 'employee-list'])
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Employees</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                @can('employee-create')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'employees.create'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('employees.create') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Add Employee</span>
                                    </a>
                                </li>
                                @endcan
                                @can('employee-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'employees.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('employees.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Employees</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                    @endcanany
                    @canany(['referral-create', 'referral-delete', 'referral-edit', 'referral-show'])
                    <!-- Social workers -->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Refarral</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re {{ request()->route()->getName() === 'referrals.create'? 'block': 'hidden' }}"
                                :class="open ? '!block' : 'hidden'">
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'referrals.create'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('referrals.create') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Referral Add</span>
                                    </a>
                                </li>
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'referrals.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('referrals.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Referral List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endcanany
                    @canany(['patient-create', 'patient-list', 'patient-show', 'physician-create', 'patient-delete', 'physician-list', 'pharmacy-list', 'orders-list', 'oasis-list', 'pending-list', 'non-admit-list', 'admit-list', 'discharge-list'])
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Patients</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re  {{ request()->route()->getName() === 'patients.create'? 'block': 'hidden' }}"
                                :class="open ? '!block' : 'hidden'">
                                {{-- <li class="rt ww {{request()->route()->getName() === 'referrals.create' ? 'bg-[#ff0000]': ''}}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('referrals.create') }}">
                                            <span class="text-sm gp ttw tnn text-[#000] wr">Create Referrals</span>
                                    </a>
                                    </li>
                                        <li class="rt ww {{request()->route()->getName() === 'referrals.index' ? 'bg-[#ff0000]': ''}}">
                                        <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]" href="{{ route('referrals.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr">View Referrals</span>
                                    </a>
                                    </li>  --}}
                                @can('patient-create')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'patients.create'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('patients.create') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Add New Patient</span>
                                    </a>
                                </li>
                                @endcan
                                @can('pending-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'patients.pending'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('patients.pending') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Pending Patients</span>
                                    </a>
                                </li>
                                @endcan
                                @can('non-admit-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'non-admit-patient.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('non-admit-patient.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Non Admit Patients</span>
                                    </a>
                                </li>
                                @endcan
                                @can('admit-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'patient.admission'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('patient.admission') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Admissions</span>
                                    </a>
                                </li>
                                @endcan
                                @can('discharge-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'discharge.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('discharge.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Discharge list</span>
                                    </a>
                                </li>
                                @endcan

                                @can('physician-create')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'physician.create'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('physician.create') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Physicians</span>
                                    </a>
                                </li>
                                @endcan
                                @can('physician-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'physician.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('physician.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">View Physicians</span>
                                    </a>
                                </li>
                                @endcan
                                @can('physician-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'skilled-agency.infection-control.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('skilled-agency.infection-control.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Infection Control</span>
                                    </a>
                                </li>
                                @endcan
                                @can('pharmacy-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'pharmacy.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('pharmacy.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Pharmacies</span>
                                    </a>
                                </li>
                                @endcan
                                @can('orders-list')
                                <li class="rt ww {{ request()->route()->getName() === 'order-management.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('order-management.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Orders Management</span>
                                    </a>
                                </li>
                                 @endcan
                                 @can('orders-list')
                                 <li class="rt ww {{ request()->route()->getName() === '.index'? 'bg-[#ff0000] active': '' }}">
                                     <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                         href="{{ route('export-oasis.index') }}">
                                         <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Export Oasis</span>
                                     </a>
                                 </li>
                                  @endcan

                               <li class="rt ww {{ request()->route()->getName() === 'patients.qa'? 'bg-[#ff0000] active': '' }}">
                                  <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('patients.qa') }}">
                                       <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">QA Center</span>
                                    </a>
                               </li>

                            </ul>
                        </div>
                    </li>
                    @endcanany
                    @canany(['', '', 'referral-contacts-edit', ''])
                     <!-- QA Section Ends-->
                     <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Report Center</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re {{ request()->route()->getName() === 'socialworker.index'? 'block': 'hidden' }}"
                                :class="open ? '!block' : 'hidden'">
                                @can('referral-contacts-create')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'socialworker.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('patients.reports') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">All Reports</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>




                    <!-- Documentation Section Ends-->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Continue Education</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re {{ request()->route()->getName() === 'socialworker.index'? 'block': 'hidden' }}"
                                :class="open ? '!block' : 'hidden'">
                                @can('referral-contacts-create')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'socialworker.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('socialworker.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Continue Education</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                    @endcanany

                    @canany(['referral-contacts-create', 'referral-contacts-delete', 'referral-contacts-edit', 'referral-contacts-show'])
                    <!-- Social workers -->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Social workers</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re {{ request()->route()->getName() === 'socialworker.index'? 'block': 'hidden' }}"
                                :class="open ? '!block' : 'hidden'">
                                @can('referral-contacts-create')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'socialworker.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('socialworker.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Referral Contacts</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                    @endcanany

                    <!-- Scheduling -->
                    @canany(['scheduled-create', 'schedule-list', 'scheduled-delete', 'schedule-show'])
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Scheduling</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <div class="tex ttj 2xl:block">
                            <ul class="me re {{ request()->route()->getName() === 'schedule.calendar'? 'block': 'hidden' }}"
                                :class="open ? '!block' : 'hidden'">
                                @can('scheduled-create')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'schedule.calendar'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('schedule.calendar') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Monthly Schedules</span>
                                    </a>
                                </li>
                                @endcan
                                @can('schedule-list')
                                <li
                                    class="rt ww {{ request()->route()->getName() === 'schedule.calendar.list'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('schedule.calendar.list') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">List Schedules</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                    @endcanany
                    <!-- Shift Resolution Center-->
                   {{-- <li class="vn vr rounded-sm n_ ww">
{{--                        <a class="block gj xc ld wt wi">--}}
{{--                            <div class="flex items-center fe">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <svg class="ub so oi" viewBox="0 0 24 24">--}}
{{--                                        <path class="du g_"--}}
{{--                                            d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">--}}
{{--                                        </path>--}}
{{--                                        <path class="du gq"--}}
{{--                                            d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">--}}
{{--                                        </path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000]">Shift Resolution Center--}}
{{--                                        </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <!-- EVV -->
{{--                    <li class="vn vr rounded-sm n_ ww {{ request()->route()->getName() === 'center.index'? 'bg-[#ff0000] active': '' }}">--}}
{{--                        <a class="block gj xc ld wt wi" href="{{ route('center.index') }}">--}}
{{--                            <div class="flex items-center fe">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <svg class="ub so oi" viewBox="0 0 24 24">--}}
{{--                                        <path class="du g_"--}}
{{--                                            d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">--}}
{{--                                        </path>--}}
{{--                                        <path class="du gq"--}}
{{--                                            d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">--}}
{{--                                        </path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000]">EVV Resolution--}}
{{--                                        Center</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <!-- Reports -->
                    @canany(['communication_list', 'interaction_list'])
                    @endcanany
                    <!-- Faxing -->
{{--                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">--}}
{{--                        <a class="block gj xc ld wt wi" href="#">--}}
{{--                            <div class="flex items-center fe">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <svg class="ub so oi" viewBox="0 0 24 24">--}}
{{--                                        <path class="du g_"--}}
{{--                                            d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z">--}}
{{--                                        </path>--}}
{{--                                        <path class="du gq"--}}
{{--                                            d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z">--}}
{{--                                        </path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000]">Faxing</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <!-- Time Clock -->
                    @canany(['clock_in', 'attendance_list', 'request_leave', 'leave_list', 'request_time_off', 'request_time_off_list'])
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Office Time Clock</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                @can('clock_in')
                                <li class="rt ww {{ request()->route()->getName() === 'clock-in-out'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('clock-in-out') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Clock in/out</span>
                                    </a>
                                </li>
                                @endcan
                                @can('attendance_list')
                                <li class="rt ww {{ request()->route()->getName() === 'employee-attendance-list'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('employee-attendance-list') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Attendance List</span>
                                    </a>
                                </li>
                                @endcan
                                @can('request_leave')
                                <li class="rt ww {{ request()->route()->getName() === 'leave-apply-form'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('leave-apply-form') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Request Leave</span>
                                    </a>
                                </li>
                                @endcan
                                @can('leave_list')
                                <li class="rt ww {{ request()->route()->getName() === 'leave-list'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('leave-list') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Leave List</span>
                                    </a>
                                </li>
                                @endcan
                                @can('request_time_off')
                                <li class="rt ww {{ request()->route()->getName() === 'request-time-off-form'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]" href="{{ route('request-time-off-form') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Request Time off</span>
                                    </a>
                                </li>
                                @endcan
                                @can('request_time_off_list')
                                <li class="rt ww {{ request()->route()->getName() === 'request-time-off-list'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]" href="{{ route('request-time-off-list') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Request Time off List</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </div>
                    </li>
                    @endcanany
                </ul>
            </div>
            <!-- More group -->
            <div>
                <h3 class="go gv text-slate-500 gh vz">
                    <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                    <span class="tex ttj 2xl:block">Setup</span>
                </h3>
                <ul class="nk">
                    <!-- Setups -->
                    @canany(['addons-list', 'addons-create', 'addons-delete', 'addons-edit', 'role-list', 'role-create', 'role-delete', 'role-edit', 'user-list', 'user-create', 'user-delete', 'user-show', 'user-edit'])
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du gq"
                                            d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z">
                                        </path>
                                        <path class="       du gz"
                                            d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z">
                                        </path>
                                        <path class="du g_"
                                            d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Organization Setups</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                @canany(['addons-list', 'addons-create', 'addons-delete', 'addons-edit'])
                                <li class="rt ww {{ request()->route()->getName() === 'addons-list.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('addons-list.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Add-ons</span>
                                    </a>
                                </li>
                                @endcanany
                                @canany(['user-create', 'user-list', 'user-delete'])
                                <li class="rt ww {{ request()->route()->getName() === 'users.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('users.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Users</span>
                                    </a>
                                </li>
                                @endcanany
                                @canany(['role-create', 'role-list', 'role-delete', 'role-edit'])
                                <li class="rt ww {{ request()->route()->getName() === 'roles.index'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('roles.index') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Roles</span>
                                    </a>
                                </li>
                                @endcanany

                            </ul>
                        </div>
                    </li>
                    @endcanany
                    <!-- Settings -->
                    <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                        <a class="block gj xc ld wt wi" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center fe">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_"
                                            d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z">
                                        </path>
                                        <path class="du gq"
                                            d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z">
                                        </path>
                                        <path class="du g_"
                                            d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z">
                                        </path>
                                        <path class="du gq"
                                            d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z">
                                        </path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn wr text-[#000] fw-bolder">Settings</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                    <svg class="w-3 h-3 ub nz du text-[#000]" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="tex ttj 2xl:block">
                            <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                <li class="rt ww {{ request()->route()->getName() === 'profile.account'? 'bg-[#ff0000] active': '' }}">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]"
                                        href="{{ route('profile.account') }}">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">My Account</span>
                                    </a>
                                </li>
                                <li class="rt ww">
                                    <a class="block gq hover--text-slate-200 wt wi ld  p-[10px] py-[5px] rounded-[5px]" href="#">
                                        <span class="text-sm gp ttw tnn text-[#000] wr fw-bolder">Organization
                                            Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                </li>
                    <!-- Settings -->
                    <li class="vn vr rounded-sm n_ ww !py-[15px] " x-data="{ open: false }">
                        {{-- <a class="block gj xc ld wt wi" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true"> --}}
                        <div class="flex items-center fe">
                            <div class="flex items-center">
                                <svg class="oi so du _o" viewBox="0 0 24 24">
                                    <path class="gq"
                                        d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                                    <path class="g_" d="M3 23H1V1h2z"></path>
                                </svg>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit"
                                        class="text-sm gp ml-3 ttw tnn wr text-[#000] block ld wt wi text-[#000] fw-bolder">
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
                        <path class="gq" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z">
                        </path>
                        <path class="g_" d="M3 23H1V1h2z"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
