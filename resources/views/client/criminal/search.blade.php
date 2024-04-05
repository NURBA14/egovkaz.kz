@extends('client.layouts.layout')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <p class="breadcrumb">
                <a href="#">Главная</a> / <a href="#">Розыск</a> / Особо опасные преступники
            </p>
        </div>
    </div>
    <div class="container">
        @include('validation.errors')
        @include('validation.error')
        @include('validation.success')
    </div>


    <section class="section-content-block  section-secondary-bg">
        <div class="container wow fadeInUp">
            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 text-center">
                    <h2>Розыск</h2>
                </div> <!-- end .col-sm-12  -->
            </div>
            <div class="row">

                @if ($crimes)
                    @foreach ($crimes as $crime)
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="latest-blog">
                                <div class="latest-thumbnail">
                                    <a href="#">
                                        <img src="{{ asset($crime->getImage()) }}" alt="" width="100%"
                                            height="300px">
                                    </a>
                                </div>
                                <div class="news-content">
                                    <h4 class="latest-title">
                                        <a href="#">{{ $crime->fio }}</a>
                                    </h4>
                                    <p>{{ $crime->crime }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div> <!--  end .row  -->
        </div> <!--  end .container  -->
    </section> <!--  end .news section  -->
@endsection

@section('footer')
@endsection
