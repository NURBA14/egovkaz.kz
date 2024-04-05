@extends('client.layouts.layout')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <p class="breadcrumb">
                <a href="#">Главная</a> / <a href="#">Гражданам</a> / Имущество
            </p>
        </div>
    </div>
    <div class="container">
        @include('validation.errors')
        @include('validation.error')
        @include('validation.success')
    </div>

    <section class="section-content-block section-secondary-bg">

        <div class="container">
            <div class="row section-heading-wrapper">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 text-center">
                    <h2>Мое имущество</h2>
                </div>

            </div>

            <h2>Недвижимость:</h2>
            <div class="row text-center">
                @if ($properties)
                    @foreach ($properties as $property)
                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                            <div class="team-layout-1">
                                <article class="team-info">
                                    <h3>Адрес: {{ $property->address }}</h3>
                                    <h4>Регион: {{ $property->region->name }}</h4>
                                    @if ($property->getDeposit())
                                        <p class="text-danger">
                                            В залоге
                                        </p>
                                    @else
                                        <p class="text-success">
                                            Не в залоге
                                        </p>
                                    @endif
                                </article>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div><br>

            <h2>Автомобили:</h2>
            <div class="row text-center">
                @if ($autos)
                    @foreach ($autos as $auto)
                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                            <div class="team-layout-1">
                                <article class="team-info">
                                    <h3>Марка: {{ $auto->stamp }}</h3>
                                    <h4>Регион: {{ $auto->region->name }}</h4>
                                    @if ($auto->getDeposit())
                                        <p class="text-danger">
                                            В залоге
                                        </p>
                                    @else
                                        <p class="text-success">
                                            Не в залоге
                                        </p>
                                    @endif
                                </article>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

@section('footer')
@endsection
