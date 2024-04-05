@extends('admin.layouts.layout')

@section('title')
    Reg user
@endsection
@section('header')
    Регистрация гражданина
@endsection

@section('content')
    <div class="container">
        @include('validation.errors')
        @include('validation.error')
        @include('validation.success')
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('reg.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="basicInput">ФИО</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="ФИО" name="name" value="{{ old("name") }}">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">ИИН</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="ИИН" name="iin" value="{{ old("iin") }}">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Телеграмм id</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Телеграмм id"
                                    name="telegram_user_id" value="{{ old("telegram_user_id") }}">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Пароль</label>
                                <input type="password" class="form-control" id="basicInput" placeholder="Пароль"
                                    name="password">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Подтверждение Пароля</label>
                                <input type="password" class="form-control" id="basicInput"
                                    placeholder="Подтверждение Пароля" name="password_confirmation">
                            </div>
                            <div class="form-group text-end mt-4">
                                <button type="submit" class="btn btn-success">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
