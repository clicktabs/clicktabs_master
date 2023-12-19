<!DOCTYPE html><html lang="en">
<head>
    <meta charset="utf-8">
    <title>ClickTabs @yield('title') </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendors/flatpickr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.modal.min.css')}}" />
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/scrollbar/simplebar.min.css') }}" rel="stylesheet" />
    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <style>
        .vt{
            padding: 0;
            background-image: linear-gradient(rgb(238, 239, 192), rgb(203, 242, 240));
            border-radius: 4px;
    }
     
    </style>
    @yield('extra_css')

</head>

<body class="gs bs hi g_" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">
<div class="loader_wrap">
    <div class="pre_loader"></div>
</div>
<script>
    if (localStorage.getItem('sidebar-expanded') == 'true') {
        document.querySelector('body').classList.add('sidebar-expanded');
    } else {
        document.querySelector('body').classList.remove('sidebar-expanded');
    }
</script>

<div class="flex ss la">

    @hasrole('super-admin')
        @include('layouts.navigation')
    @else
        @include('layouts.admin-navigation')
    @endhasrole

{{--    @php--}}
{{--        $role_name = \Auth::user()->getRoleNames()->first();--}}
{{--//        var_dump($role_name !== 'super-admin');--}}
{{--//        dd('Hello world');--}}
{{--    @endphp--}}
{{--    @hasrole('super-admin')--}}
{{--    --}}
{{--    @endhasrole--}}


    <div class="y flex ak ug ll lc">

        <!-- Site header -->
        @include('layouts.site_header')

        @include('components.notification')

        @yield('content')

    </div>

</div>

@yield('outer_html')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/vendors/alpinejs.min.js') }}" defer=""></script>
<script src="{{ asset('assets/js/vendors/chart.js') }}"></script>
<script src="{{ asset('assets/js/vendors/moment.js') }}"></script>
<script src="{{ asset('assets/js/vendors/chartjs-adapter-moment.js') }}"></script>
<script src="{{ asset('assets/js/dashboard-charts.js') }}"></script>
<script src="{{ asset('assets/js/vendors/flatpickr.js') }}"></script>
<script src="{{ asset('assets/js/flatpickr-init.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.modal.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/scrollbar/simplebar.min.js')}}"></script>

 
@yield('extra_js')
<script>
    jQuery(window).on('load', function() {
        jQuery('.loader_wrap').fadeOut('slow');
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content'),
                'Authorization': 'Bearer ' + localStorage.getItem('token') // Add the token here
            }
        });
    })
</script>
</body>
@flasher_render
</html>
