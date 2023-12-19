@extends('layouts.guest')

@section('title')Sign Up @endsection

@section('content')

<main class="bg-white">

    <div class="y flex">

        <!-- Content -->
        <div class="ou zi">

            <div class="on sh flex ak wl">

                <!-- Header -->
                <div class="ug">
                    <div class="flex items-center fe sa vs jj ttm">
                        <!-- Logo -->
                        <a class="block" href="index.html">
                            <svg width="32" height="32" viewBox="0 0 32 32">
                                <defs>
                                    <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                        <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#A5B4FC" offset="100%"></stop>
                                    </linearGradient>
                                    <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                        <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#38BDF8" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                                <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                                <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                                <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="ul na vs vl">

                    <h1 class="text-3xl text-slate-800 font-bold rh">Join Us! ✨</h1>

                    <!-- Warning -->

                    <form method="POST" action="{{ route('register') }}">
                        @if($errors->any())
                            <div class="rw bg-red-700">
                                <div class="hb ya vn vr rounded">
                                    <svg class="inline w-3 h-3 ub du" viewBox="0 0 12 12">
                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                    </svg>
                                    <span class="text-md text-white">
                                        {{ implode('', $errors->all(':message')) }}
                                        {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
                                    </span>
                                </div>
                            </div>
                        @endif

                        @csrf
                        <div class="fg">
                            <div>
                                <label class="block text-sm gp rt" for="email">Email Address</label>
                                <input id="email" class="s ou" type="email" name="email" :value="old('email')" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <label class="block text-sm gp rt" for="password">Password</label>
                                <input id="password" class="s ou" type="password" autocomplete="on" name="password" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div>
                                <label class="block text-sm gp rt" for="password">Confirm Password</label>
                                <input id="password" class="s ou" type="password" autocomplete="on" name="password_confirmation" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex items-center fe rk">
                            <button type="submit" class="btn ho xi ye ml-3">Register</button>
                        </div>
                    </form>


                    <!-- Footer -->
                    <div class="mb rk co border-slate-200">
                        <div class="text-sm">
                            Have an account already? <a class="gp text-indigo-500 xh" href="{{ route('login') }}">Sign In</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Image -->
        <div class="hidden qx g k te q zi" aria-hidden="true">
            <img class="dy db ou sh" src="{{asset('assets/images/auth-image.jpg')}}" width="760" height="1024" alt="Authentication image">
            <img class="g tg x uz ig hidden tey" src="{{asset('assets/images/auth-decoration.png')}}" width="218" height="224" alt="Authentication decoration">
        </div>

    </div>

</main>

@endsection
