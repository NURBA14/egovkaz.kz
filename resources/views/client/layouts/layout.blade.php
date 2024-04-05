<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>egov.kz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/venobox.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div id="preloader">
        <span class="margin-bottom"><img src="{{ asset('images/loader.gif') }}" alt="Loading......" /></span>
    </div>
    <header class="main-header clearfix" data-sticky_header="true">
        @include('client.layouts.header')
        @include('client.layouts.navbar')
    </header>
    <main>
        @yield('content')
    </main>
    <!--  HOME SLIDER BLOCK  -->
    {{-- @include('client.layouts.component.slider') --}}

    <!--  ABOUT US -->
    {{-- @include('client.layouts.component.about') --}}

    <!-- PROCESS SECTION 02-->
    {{-- @include('client.layouts.component.process') --}}

    <!--  HOW WE WORK SECTION 2 -->
    {{-- @include('client.layouts.component.work') --}}

    <!--  SECTION APPOINTMENT   -->
    {{-- @include('client.layouts.component.appointment') --}}

    <!--  START TESTIMONIAL LAYOUT 02 -->
    {{-- @include('client.layouts.component.testimonial') --}}

    <!-- TEAM SECTION 01 -->
    {{-- @include('client.layouts.component.team') --}}

    <!--  SECTION CTA 02 -->
    {{-- @include('client.layouts.component.cta-2') --}}

    <!--  GALLERY CONTENT  -->
    {{-- @include('client.layouts.component.gallery') --}}

    <!--  BLOG SECTION  -->
    {{-- @include('client.layouts.component.blog') --}}

    <!--  START LOGO LAYOUT 02 -->
    {{-- @include('client.layouts.component.client-logo') --}}

    {{-- Footer --}}
    <footer>
        @section('footer')
            @include('client.layouts.footer')
        @show
    </footer>

    <a id="backTop">Back To Top</a>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.backTop.min.js') }} "></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom-scripts.js') }}"></script>
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
</body>

</html>
