@extends('admin.layouts.layout')


@section('title')
    Deposit
@endsection
@section('header')
    Поиск наличия залога движимого и недвижемого имущества
@endsection
@section('content')
    <div class="container">
        @include('validation.errors')
        @include('validation.error')
        @include('validation.success')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Введите ИИН гражданина</h3>
                        <p>
                        <h5>Как получить услугу онлайн</h5>
                        </p>
                        <ul>
                            <li><b>Введите точный ИИН гражданина РК</b></li>
                            <li><b>Ответ на запрос придет через несколько минут.</b></li>
                        </ul>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <form action="{{ route('docs.deposit.search') }}" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control border-success" placeholder="ИИН"
                                                aria-label="Example text with button addon" name="iin" min="12"
                                                max="12" aria-describedby="button-addon1">
                                            <button class="btn btn-success" type="submit" id="button-addon1">Поиск</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
