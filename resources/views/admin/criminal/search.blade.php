@extends('admin.layouts.layout')

@section('title')
    Admin criminal search
@endsection
@section('header')
    Admin criminal search
@endsection

@section('content')
    <div class="container">
        @include('validation.errors')
        @include('validation.error')
        @include('validation.success')
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Введите Розыскиваемого преступника</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('searchs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="basicInput">ФИО</label>
                                <input type="text" class="form-control" id="basicInput" name="fio" placeholder="ФИО">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Описание преступления</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="crime" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="formFile" class="form-label">Фотография преступника</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
                            <div class="form-group mb-3">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Отправить</button>
                                </div>
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
