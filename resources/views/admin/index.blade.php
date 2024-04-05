@extends('admin.layouts.layout')


@section('title')
    Admin home
@endsection
@section('header')
    Admin Home
@endsection
@section('content')
    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <button class="btn btn-xl btn-success rounded-4">
                                <i class="bi bi-person-fill"></i>
                            </button>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Гражданины</h6>
                            <h6 class="font-extrabold mb-0">{{ $users }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <button class="btn btn-xl btn-danger rounded-4">
                                <i class="bi bi-house-fill"></i>
                            </button>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Недвижемость</h6>
                            <h6 class="font-extrabold mb-0">{{ $properties }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <button class="btn btn-xl btn-primary rounded-4">
                                <i class="bi bi-car-front"></i>
                            </button>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Автомобили</h6>
                            <h6 class="font-extrabold mb-0">{{ $autos }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                            <button class="btn btn-xl btn-primary rounded-4">
                                <i class="bi bi-houses-fill"></i>
                            </button>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Регионы</h6>
                            <h6 class="font-extrabold mb-0">{{ $regions }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Количество визитов</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-visit"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe width="100%" height="500px"
                    style="box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); border-radius:15px;" allowtransparency="true"
                    allowfullscreen="true" scrolling="no" title="Embedded DrawSQL IFrame" frameborder="0"
                    src="https://drawsql.app/teams/nurba/diagrams/egovkaz-kz/embed"></iframe>
            </div>
        </div>
    </div>
@endsection


@section('footer')
@endsection
