<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'QBAdminUI') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('qbadminui/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/bootstrap-4.3.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/toastr.min.css') }}">
    <style>
    </style>
    <meta name="theme-color" content="#fafafa">
    <style>
        [v-cloak] {
            display: none
        }

        .cursor-pointer {
            cursor: pointer !important;
        }
    </style>
    @stack('css')
</head>

<body class="position-relative">
   
    @yield('content')



    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('qbadminui/js/vendor/popper-js/popper1.14.7.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/bootstrap.min.js') }}"></script>
    <!-- eChart -->
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.option.min.js') }}"></script>
    <!-- eChart script -->
    <script src="{{ asset('qbadminui/js/plugins/echart_drw.js') }}"></script>
    <script src="{{ asset('qbadminui/js/plugins.js') }}"></script>
    <script src="{{ asset('qbadminui/js/main.js') }}"></script>
    <script src="{{ asset('qbadminui/js/toastr.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/axios.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vue.js') }}"></script>
    @stack('js')
</body>

</html>