@extends('layouts.guest')

@section('title') Sign In @endsection

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
                        <a class="block" href="/">
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

                    <h1 class="text-3xl text-slate-800 font-bold rh">Welcome back! ✨</h1>

                    <!-- Warning -->

                    <form method="POST" name="loginForm" id="loginForm">
                        @csrf
                        <div class="fg">
                            <div>
                                <label class="block text-sm gp rt" for="email">Email Address</label>
                                <input id="email" class="s ou" type="email" name="email" />
                            </div>
                            <div>
                                <label class="block text-sm gp rt" for="password">Password</label>
                                <input id="password" class="s ou" type="password" autocomplete="on" name="password" />
                            </div>
                        </div>
                        <div class="flex items-center fe rk">
                            <div class="sign_in_button_wrapper !bg-[#6366f1] hover:bg-[#6366f1] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded relative">
                                <button type="submit" class="text-white sign_in_button font-medium cursor-pointer text-sm px-5 py-2.5 text-center mr-2 inline-flex items-center relative">
                                    Sign In
                                </button>
                                <div class=" button_loader_wrap flex justify-center items-center absolute top-0 w-full h-full">
                                    <div class="animate-spin rounded-full h-[15px] w-[15px] border-b-2 border-[#fff]"></div>
                                </div>
                            </div>
                        </div>
                    </form>
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

@section('extra_js')
    <script src="{{asset('assets/js/plugins/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.button_loader_wrap').fadeOut();
            $(document).on('submit', '#loginForm', function (e) {
                e.preventDefault();
                let validator = jQuery('#loginForm').validate({
                    rules: {
                        email: "required",
                        password: "required",
                    }
                });

                let email = $('#email').val();
                let password = $('#password').val();
                if(validator.valid()) {
                    $('.sign_in_button').css('opacity', '0');
                    $('.button_loader_wrap').fadeIn();
                    $.ajax({
                        url: '/api/login',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            email: email,
                            password: password
                        },
                        success: function (response) {
                            localStorage.setItem('token', response.data.token);
                            toastr.success(response.message)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;
                            window.location.reload();
                        },
                        error: function (xhr, status, error) {
                            toastr.error(xhr.responseJSON.data.error)
                            toastr.options.closeMethod = 'fadeOut';
                            toastr.options.closeDuration = 300;
                            toastr.options.closeEasing = 'swing';
                            toastr.options.progressBar = true;
                            $('.sign_in_button').css('opacity', '1');
                            $('.button_loader_wrap').fadeOut();
                        }
                    });
                }
            })
        })
    </script>
@endsection
