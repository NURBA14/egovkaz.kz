<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/compiled/css/iconly.css') }}">
</head>

<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="sidebar">
            @include('admin.layouts.sidebar')
        </div>
        <div id="main">
            <div class="page-heading">
                <h3 class="text-success">@yield('header')</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                @section("footer")
                    @include('admin.layouts.footer')
                @show
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/static/js/pages/dashboard.js') }}"></script>
</body>

</html>
