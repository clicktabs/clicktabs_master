<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ClickTabs</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            /* height: 100%; */
            /* object-fit: cover; */
        }

        .video-play-button {
            position: absolute;
            z-index: 10;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            display: block;
            cursor: pointer;
        }

        .video-play-button span {
            display: block;
            position: absolute;
            z-index: 3;
            top: 50%;
            left: 55%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            width: 0;
            height: 0;
            border-left: 15px solid #4133BF;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all ease-in-out 0.2s;
            transition: all ease-in-out 0.2s;
        }
        .video-play-button .button-circle {
            border-radius: 50%;
            padding: 18px 20px 18px 28px;
            width: 50px;
            height: 50px;
            background-color: #fff;
        }

        .video-play-button:after {
            content: "";
            position: absolute;
            z-index: -2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 80px;
            height: 80px;
            background: #4133BF;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }


        @keyframes pulse-border {
            0% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }
            100% {
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 100%;
            max-width: fit-content;
            position: relative;
            transform: scale(0.8);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .modal-content.show {
            transform: scale(1);
            opacity: 1;
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .video {
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            border: none;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .modal-button {
            margin: 10px;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

<nav class="bg-[#4133BF] fixed w-full z-20 top-0 left-0" x-data="{ show: false }">
    <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center gap-[3px]">
            <img class="w-[50px]" src="{{asset('assets/images/auth-decoration.png')}}" />
            <h3 class="font-[800] text-[20px] leading-[40px] uppercase text-[#fff]">Click-Tabs</h3>
        </a>
        <div class="flex md:order-2">
            @if (Route::has('login'))
                @auth
                    <button type="button" class="text-white bg-[#ff0000] hover:bg-[#ff0000] rounded-lg px-4 py-2 text-center mr-3 md:mr-0 mr-[20px]">
                        <a href="{{ url('/dashboard') }}" class="text-white font-[700] rounded-lg text-[18px]">Dashboard</a>
                    </button>
                @else
                    <button type="button" class="text-white bg-[#ff0000] hover:bg-[#ff0000] rounded-lg px-4 py-2 text-center mr-3 md:mr-0 mr-[20px]">
                        <a href="{{ route('login') }}" class="text-white font-[700] rounded-lg text-[18px]">Log in</a>
                    </button>
                @endauth
            @endif
            <button @click="show = !show" data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-700 dark:text-white" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" :class="{'hidden': !show}" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-300 md:p-0" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-300 md:p-0">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-300 md:p-0">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white hover:text-gray-300 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="banner_area mt-[50px]">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{asset('assets/images/slider-2.jpg')}}" /></div>
            <div class="swiper-slide"><img src="{{asset('assets/images/slider-3.jpg')}}" /></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<div class="bg-[#efefef] py-[30px] mb-[50px]">
    <div class="container mx-auto">
        <div class="header text-center">
            <h2 class="text-[35px] text-[#4133BF] mb-[8px] font-[700]">Click-Tabs Solutions Emphasizes on!!!!</h2>
            <p class="text-[18px] font-[700]">Security, Compliance, and Growth</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-[40px]">
            <div class="request_demo">
                <div class="image mb-[30px]">
                    <img src="https://blog.trello.com/hubfs/Industry_Trello_Use-Case_Article_%28Health_Care%29%20%281%29.png" />
                </div>
                <p class="text-base">The one solution that works with Clicks, performs all
                    the tasks in your agency, and uses your time wisely
                    and saves money. Implement our cutting-edge
                    Solution today!</p>
                <button class="btn-primary my-[30px] mb-[50px] bg-blue-600 text-white py-[10px] px-[20px] rounded-[15px]">Request a Demo</button>

            </div>
            <div class="request_demo_desc">
                <div class="image mb-[30px]">
                    <img src="https://blog.trello.com/hubfs/Industry_Trello_Use-Case_Article_%28Health_Care%29%20%281%29.png" />
                </div>
                <p class="text-base">Focusing on patient care with Click-tab
                    solutions that performs every task in
                    your Agency. With your agency in
                    mind, Click-tabs Home Care
                    streamlines the entire patient care,
                    from Employment, Admission,
                    Scheduling to Claim Submission all in
                    one place. Our EMR software is easyto-use, and because it’s cloud-based,
                    you have the freedom to work
                    anywhere and everywhere the
                    Internet is available.
                </p>
            </div>
        </div>
        {{--    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-[50px] pb-[100px]">--}}
        {{--        <div>--}}
        {{--            <h5 class="font-semibold text-xl">Security</h5>--}}
        {{--        </div>--}}
        {{--        <div>--}}
        {{--            <h5 class="font-semibold text-xl">Compliance</h5>--}}
        {{--        </div>--}}
        {{--        <div>--}}
        {{--            <h5 class="font-semibold text-xl">Growth</h5>--}}
        {{--        </div>--}}
        {{--    </div>--}}
    </div>
</div>

<div class="success_stories mb-[45px] mt-[5px]">
    <div class="container mx-auto">
        <div class="header text-center">
            <h2 class="text-[#4133BF] text-[35px] mb-[8px] font-[700]">Empowering Home Healthcare Agencies!!!</h2>
            <p class="text-[18px] font-[700]">Manage Services And Operate With Efficiency, Trust Click-Tabs</p>
        </div>
        <div class="flex items-center gap-[40px] mt-[40px] flex-wrap md:flex-nowrap">
            <div>
                <div class="overflow-hidden img rounded-[10px] shadow-[1px_1px_4px_rgba(0_0_0_0.2)] relative">
                    <img  class="w-full" src="{{asset('assets/images/video-image.jpg')}}" />
                    <div class="play modal-button" data-video="h2n2l3iFC3s">
                        <div class="video-play-button vid d-none d-md-inline-block" data-token="PvexmWMy--E">
                            <span>&nbsp;</span>
                            <div class="button-circle"></div>
                        </div>
                    </div>
                </div>
                {{--                <div class="mt-[10px]">--}}
                {{--                    <p class="text-[18px] font-[600] mb-[15px] text-[#4133BF]">Bill Dombi, President</p>--}}
                {{--                    <p class="text-[18px]">Palliative Care in CMMI Programs</p>--}}
                {{--                </div>--}}
            </div>
            <div>
                <div class="overflow-hidden img rounded-[10px] shadow-[1px_1px_4px_rgba(0_0_0_0.2)] relative">
                    <img  class="w-full" src="{{asset('assets/images/video-image.jpg')}}" />
                    <div class="play modal-button" data-video="h2n2l3iFC3s">
                        <div class="video-play-button vid d-none d-md-inline-block" data-token="PvexmWMy--E">
                            <span>&nbsp;</span>
                            <div class="button-circle"></div>
                        </div>
                    </div>
                </div>
                {{--                <div class="mt-[10px]">--}}
                {{--                    <p class="text-[18px] font-[600] mb-[15px] text-[#4133BF]">Bill Dombi, President</p>--}}
                {{--                    <p class="text-[18px]">Palliative Care in CMMI Programs</p>--}}
                {{--                </div>--}}
            </div>
            <div>
                <div class="overflow-hidden img rounded-[10px] shadow-[1px_1px_4px_rgba(0_0_0_0.2)] relative">
                        <img  class="w-full" src="{{asset('assets/images/video-image.jpg')}}" />
                    <div class="play modal-button" data-video="h2n2l3iFC3s">
                        <div class="video-play-button vid d-none d-md-inline-block" data-token="PvexmWMy--E">
                            <span>&nbsp;</span>
                            <div class="button-circle"></div>
                        </div>
                    </div>
                </div>
                {{--                <div class="mt-[10px]">--}}
                {{--                    <p class="text-[18px] font-[600] mb-[15px] text-[#4133BF]">Bill Dombi, President</p>--}}
                {{--                    <p class="text-[18px]">Palliative Care in CMMI Programs</p>--}}
                {{--                </div>--}}
            </div>

            {{--            <div class="modal" id="myModal">--}}
            {{--                <div class="modal-content">--}}
            {{--                    <span class="close">&times;</span>--}}
            {{--                    <div id="player"></div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>

<div class="success_stories mb-[60px]">
    <div class="container mx-auto">
        <div class="header text-center">
            <h2 class="text-[35px] text-[#4133BF] mb-[10px] font-[700]">Healthcare Made Easy</h2>
            <p class="text-[20px] font-[700]">Solutions from Paper to cloud-based process automation</p>
            <p class="text-[18px] font-[700]">Healthcare and Home Care Providers.</p>
        </div>
        <div class="flex items-center gap-[60px] mt-[40px] flex-wrap md:flex-nowrap">
            <div>
                <div class="overflow-hidden img rounded-[10px] shadow-[1px_1px_4px_rgba(0_0_0_0.2)]">
                    <img  class="w-full" src="{{asset('assets/images/video-image.jpg')}}" />
                </div>
                {{--                <div class="mt-[25px]">--}}
                {{--                    <p class="text-[18px]">Palliative Care in CMMI Programs</p>--}}
                {{--                    <a class="text-[0.8rem] text-[#4133BF]" href="#">Read More ⟶</a>--}}
                {{--                </div>--}}
            </div>
            <div>
                <div class="overflow-hidden img rounded-[10px] shadow-[1px_1px_4px_rgba(0_0_0_0.2)]">
                    <img  class="w-full" src="{{asset('assets/images/card-image.jpg')}}" />
                </div>
                {{--                <div class="mt-[25px]">--}}
                {{--                    <p class="text-[18px]">Palliative Care in CMMI Programs</p>--}}
                {{--                    <a class="text-[0.8rem] text-[#4133BF]" href="#">Read More ⟶</a>--}}
                {{--                </div>--}}
            </div>
            <div>
                <div class="overflow-hidden img rounded-[10px] shadow-[1px_1px_4px_rgba(0_0_0_0.2)]">
                    <img  class="w-full" src="{{asset('assets/images/iStock-1331029732.jpg')}}" />
                </div>
                {{--                <div class="mt-[25px]">--}}
                {{--                    <p class="text-[18px]">Palliative Care in CMMI Programs</p>--}}
                {{--                    <a class="text-[0.8rem] text-[#4133BF]" href="#">Read More ⟶</a>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</div>

<div class="trust_organization bg-[#efefef] xl:pb-[0px] pb-[50px] mb-[60px]">
    <div class="container mx-auto">
        <div class="xl:flex block gap-[40px] content-center py-[30px] flex-wrap">
            <div class="py-[50px] mr-auto flex-shrink-0 xl:items-start items-center justify-center flex flex-col">
                <div>
                    <h2 class="text-[#4133BF] text-[2.2rem] xl:text-left text-center font-[300] mb-[10px] font-[700]">The Ultimate Solution - EMR</h2>
                    <p class="text-[18px] xl:text-left text-center leading-[28px] font-[700]">For Home Healthcare? trust Click-Tabs.</p>
                </div>
                <div class="inline-flex">
                    <button data-video="h2n2l3iFC3s" class="modal-button bg-[#4133BF] text-center text-[#fff] mt-[30px] block px-[60px] py-[12px] border-[3px] border-[#4133BF] hover:bg-[#fff] hover:text-[#4133BF] rounded-[5px] ml-0">See Demo</button>
                </div>
            </div>
            <div class="flex items-center justify-center gap-[40px] flex-wrap">
                <img class="w-[250px] inline-block h-auto  rounded-[10px] grid content-center" src="{{asset('assets/images/small-1.jpg')}}" />
                <img class="w-[250px] inline-block h-auto rounded-[10px] grid content-center" src="{{asset('assets/images/small-2.jpg')}}" />
            </div>
        </div>

        {{--        <div class="flex items-center justify-center md:justify-between">--}}
        {{--            <div class="py-[50px]">--}}
        {{--                <div>--}}
        {{--                    <h2 class="text-[#4133BF] text-[2.2rem] font-[300] mb-[10px] font-[700]">The Ultimate Solution - EMR</h2>--}}
        {{--                    <p class="text-[18px] leading-[28px]">For Home Healthcare? trust Click-Tabs.</p>--}}
        {{--                </div>--}}
        {{--                <div>--}}
        {{--                    <a class="bg-[#4133BF] text-center text-[#fff] mt-[30px] block px-[60px] py-[12px] border-[3px] border-[#4133BF] hover:bg-[#fff] hover:text-[#4133BF] rounded-[5px]" href="#">See Demo</a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="hidden max-w-[500px] md:flex items-center gap-[40px]">--}}
        {{--                <img class="w-[250px]" src="{{asset('assets/images/watch-demo-hero-square.jpg')}}" />--}}
        {{--                <img class="w-[250px]" src="{{asset('assets/images/watch-demo-hero-square.jpg')}}" />--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</div>

<section class="footer bg-[#4133BF] pt-[30px]">
    <div class="container mx-auto">
        <div class="flex items-center justify-center flex-wrap flex-row">
            <div class="left lg:pr-[20px]">
                <h3 class="font-[800] text-[40px] leading-[40px] uppercase text-center xl:text-right block text-[#fff]">The Ultimate Solutions</h3>
                <p class="text-[#fff] text-center xl:text-right capitalize my-[10px] text-[20px] font-[100] leading-[25px]">To Manage Your Health Care Effectively</p>
            </div>
            <div class="right xl:pl-[20px] text-center xl:text-left">
                <p class="text-[1.1rem] xl:text-left text-center text-[#fff] font-[300] leading-[22px] mt-[20px] xl:mt-[0px] mb-[15px] ">Master the tools needed to assess opportunities and make strategic decisions <br class="hidden lg:block"> home health and home care providers.</p>
                <a class="text-[16px] text-[#4133BF] rounded-[3px] py-[5px] px-[10px] bg-[#fff] xl:text-center" href="#">Subscribe Today</a>
            </div>
        </div>
    </div>
    <div class="footer-menu py-[50px] bg-[#3E3E3E] mt-[30px]">
        <div class="container mx-auto">
            <div class="block md:flex md:flex-wrap md:items-center md:gap-[30px] lg:justify-between">
                <div class="md:mt-0 md:mb-auto">
                    <a href="/" class="flex items-center gap-[3px]">
                        <img class="w-[50px]" src="{{asset('assets/images/auth-decoration.png')}}" />
                        <h3 class="font-[800] text-[20px] leading-[40px] uppercase text-[#fff]">Click-Tabs</h3>
                    </a>
                    <div class="social mt-[20px] pt-[20px] border-t-[1px] border-[#7F7F7F] ">
                        <ul class="flex items-center gap-[5px] md:justify-center">
                            <li><a class="inline-flex w-[28px] h-[28px] bg-[#575757] p-[7px] hover:bg-[#4133BF] " href="#"><img class="w-[14px] h-[14px]" src="{{asset('assets/images/youtube-social.png')}}"></a> </li>
                            <li><a class="inline-flex w-[28px] h-[28px] bg-[#575757] p-[7px] hover:bg-[#4133BF] " href="#"><img class="w-[14px] h-[14px]" src="{{asset('assets/images/twitter-social.png')}}"></a> </li>
                            <li><a class="inline-flex w-[28px] h-[28px] bg-[#575757] p-[7px] hover:bg-[#4133BF] " href="#"><img class="w-[14px] h-[14px]" src="{{asset('assets/images/linkedin-social.png')}}"></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="md:pl-[20px] md:ml-[20px] mt-[50px] md:mt-0 md:mb-auto max-full">
                    <h4 class="mb-[12px] text-left text-[#fff] text-[15px] font-[600]">SOLUTIONS & SERVICES</h4>
                    <ul>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Home Health Software</a></li>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Home Care Software</a></li>
                        {{--                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Hospice Software </a></li>--}}
                        {{--                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Palliative Care Software </a></li>--}}
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Scheduling &amp; Staffing</a></li>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Revenue Cycle Management</a></li>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Patient Engagement</a></li>
                        {{--                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">ClickTabs Certification</a></li>--}}
                    </ul>
                </div>
                <div class="mt-[30px] md:mt-0 md:mb-auto max-w-[450px]">
                    <img class="w-full" src="{{asset('assets/images/map.jpg')}}" />
                </div>
                <div class="mt-[30px] md:mt-0 md:mb-auto max-full">
                    <h4 class="mb-[12px] text-left text-[#fff] text-[15px] uppercase font-[600]">Corporate Office</h4>
                    <ul>
                        <p class="text-[#fff] mb-[15px]">Click-tabs Technologies, LLC.<br>
                            4663 Executive Dr. Suite 17<br>
                            Columbus, Ohio 43220
                        </p>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Tel: +1 (614) 332-3613</a></li>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="#">Fax: +1 (614)</a></li>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="mailto: sales@click-tabs.com">E-mail: sales@click-tabs.com</a></li>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="mailto: customerservice@click-tabs.com">E-mail: customerservice@click-tabs.com</a></li>
                        <li class="leading-[30px]"><a class="text-[14px] text-[#fff] leading-[24px] hover:text-[#00dcff] font-[700]" href="mailto: support@click-tabs.com">E-mail: support@click-tabs.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright py-[10px] bg-[#4133BF] text-center">
        <p class="text-[#fff]">Copyright © 2023 Click-Tabs | All Rights Reserved | <a href="#">Privacy Policy</a> </p>
    </div>
</section>
<script src="https://www.youtube.com/iframe_api"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    // var modalButtons = document.getElementsByClassName("modal-button");
    // var modal = document.getElementById("myModal");
    // var closeButton = document.getElementsByClassName("close");
    // var modalContent = modal.querySelector(".modal-content");
    // var player;

    // Attach click event handlers to each button
    // for (var i = 0; i < modalButtons.length; i++) {
    //     modalButtons[i].addEventListener("click", function() {
    //         var videoId = this.dataset.video;
    //         modal.style.display = "block";
    //         modalContent.classList.add("show");
    //
    //         if (!player) {
    //             player = new YT.Player("player", {
    //                 height: "360",
    //                 width: "640",
    //                 videoId: videoId,
    //                 playerVars: {
    //                     autoplay: 1,
    //                     modestbranding: 1,
    //                     controls: 0, // Hide controls
    //                     showinfo: 0, // Hide video title
    //                 },
    //             });
    //         } else {
    //             player.loadVideoById(videoId);
    //         }
    //     });
    // }

    // Attach click event handlers to each close button
    // for (var i = 0; i < closeButton.length; i++) {
    //     closeButton[i].addEventListener("click", function() {
    //         modal.style.display = "none";
    //         modalContent.classList.remove("show");
    //         if (player) {
    //             player.stopVideo();
    //         }
    //     });
    // }

    // Close modal when clicking outside of it
    // window.addEventListener("click", function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //         modalContent.classList.remove("show");
    //         if (player) {
    //             player.stopVideo();
    //         }
    //     }
    // });
</script>

</body>
</html>
