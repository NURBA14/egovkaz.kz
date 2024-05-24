@extends('admin.layouts.layout')


@section('title')
    Deposit
@endsection
@section('header')
    Наличие залога движимого и недвижемого имущества
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">{{ $user->name }}</h2>
                        <h4 class="card-title text-success">{{ $user->iin }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Ваша Недвижимость:</h4>
                                        </div>
                                        <div class="card-content">
                                            @if ($user->properties)
                                                @foreach ($user->properties as $property)
                                                    <div class="card-body">
                                                        <div class="list-group">
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">{{ $property->address }}
                                                                    </h5>
                                                                    <small class="">
                                                                        @if ($property->getDeposit())
                                                                            <button class="btn btn-danger">В залоге</button>
                                                                        @else
                                                                            <button class="btn btn-primary">Не в
                                                                                залоге</button>
                                                                        @endif
                                                                    </small>
                                                                </div>
                                                                <p class="mb-1">
                                                                    Регион:
                                                                    {{ $property->region->name }}
                                                                </p>
                                                                <small class="">{{ $property->created_at }}</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="card-body">
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item list-group-item-action">
                                                            <p class="mb-1">
                                                                У вас нет недвижимости
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Ваши Авто:</h4>
                                        </div>
                                        <div class="card-content">

                                            @if ($user->autos)
                                                @foreach ($user->autos as $auto)
                                                    <div class="card-body">
                                                        <div class="list-group">
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1">{{ $auto->stamp }}</h5>
                                                                    <small class="">
                                                                        @if ($auto->getDeposit())
                                                                            <button class="btn btn-danger">В залоге</button>
                                                                        @else
                                                                            <button class="btn btn-primary">Не в
                                                                                залоге</button>
                                                                        @endif
                                                                    </small>
                                                                </div>
                                                                <p class="mb-1">
                                                                    Регион:
                                                                    {{ $auto->region->name }}
                                                                </p>
                                                                <small class="">{{ $auto->created_at }}</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="card-body">
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item list-group-item-action">
                                                            <p class="mb-1">
                                                                У вас нет Авто
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
