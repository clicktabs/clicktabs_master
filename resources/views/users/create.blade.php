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
                    <h1 class="gu teu font-bold rt text-[#fff]"> Add New User</h1>
{{--                    <p>Setup new role</p>--}}
                </div>

            </div>

            <!-- Dashboard actions -->
            <div class="je jd jc rc">

                <!-- Right: Actions -->
{{--                <div class="sn am jo az jp ft">--}}

{{--                    <!-- Add view button -->--}}
{{--                    <a type="button" href="{{ route('users.create') }}" class="btn ho xi ye">--}}
{{--                        <svg class="oo sl du bf ub" viewBox="0 0 16 16">--}}
{{--                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>--}}
{{--                        </svg>--}}
{{--                        <span class="hidden trm nq">Add New</span>--}}
{{--                    </a>--}}
{{--                </div>--}}

            </div>

            <div class="row mb-4">

                <!-- Table (Top Channels) -->
                <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
                    <header class="vc vu cs ch">
                        <h2 class="gh text-slate-800">Users</h2>
                    </header>
                    <div class="dk">

                        <!-- Table -->
                        <div class="lf">

                            @include('users.components.users-create')

                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script
        src="https://www.jqueryscript.net/demo/Two-side-Multi-Select-Plugin-with-jQuery-multiselect-js/js/multiselect.js">
    </script>
    <script>
        $('#multiselect').multiselect();
        element = document.getElementById('save');
        element.addEventListener('click', function(selectBox) {
            selectBox = document.getElementById('multiselect_to');
            selectedOptions = Array.from(selectBox.options);
            let selectedOptionValues=[];
            selectedValues = document.getElementById('selectedValues');
            selectedOptions.forEach(function(selectedOption) {
            // selectedOptionValues.push(parseInt(selectedOption.value));
              selectedOptionValues.push(selectedOption.value);
            });

            if(selectedOptionValues.length>0){
            selectedValues.value=selectedOptionValues;
            selectedValues.setAttribute("name","roles[]");
          }else{
            selectedValues.setAttribute("value");
            selectedValues.setAttribute("name","roles[]");
          }
        });
          selectedValues = document.getElementById('selectedValues');
          selectedValues.removeAttribute("name");


    </script>
@endsection
