@extends('client.layouts.layout')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <p class="breadcrumb">
                <a href="#">Главная</a> / <a href="#">Гражданам</a> / Бизнесу
            </p>
        </div>
    </div>
    <div class="container">
        @include('validation.errors')
        @include('validation.error')
        @include('validation.success')
    </div>
    @include('client.layouts.component.cta-2')
    @include('client.layouts.component.faq')
    @include('client.layouts.component.about')
@endsection
