<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Verify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/venobox.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css" />
</head>

<body>

    <div id="preloader">
        <span class="margin-bottom"><img src="{{ asset('images/loader.gif') }}" alt="Loading......" /></span>
    </div>
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Подтвредите личность
                    </h3>
                    <p class="page-breadcrumb">
                    <form action="{{ route('login.logout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            Выйти
                        </button>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @include('validation.errors')
        @include('validation.error')
        @include('validation.success')
    </div>

    <section class="section-content-block section-appointment-bg no-bottom-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="appointment-form-wrapper clearfix">
                        <div class="appointment-form-heading">
                            <p class="form-title text-center">
                                Введите Код Подтвержение
                            </p>
                        </div>
                        <form class="appoinment-form" method="POST" action="{{ route('verify.store') }}">
                            @csrf
                            <div class="form-group col-md-12">
                                <input id="your_phone" class="form-control" name="code" placeholder="Код"
                                    type="password">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
                                <button id="btn_submit" class="btn btn-lg btn-appointment-submit"
                                    type="submit">Подтвердить</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                </div>
            </div>
        </div>
    </section>

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
