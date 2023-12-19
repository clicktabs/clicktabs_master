<!DOCTYPE html><html lang="en">

<head>
    <meta charset="utf-8">
    <title>ClickTabs - @yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite(['resources/css/app.css'])
    <link href="{{ asset('assets/css/vendors/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <style>
        .vt{
            background-image: linear-gradient(rgb(238, 239, 192), rgb(203, 242, 240));
            border-radius: 4px;
        }
    </style>
</head>

<body class="gs bs hi g_">

@yield('content')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/alpinejs.min.js') }}" defer=""></script>
@yield('extra_js')
</body>

</html>
