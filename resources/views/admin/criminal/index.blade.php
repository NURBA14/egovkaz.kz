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

        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">В розыске</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>ФИО</th>
                                        <th>Преступление</th>
                                        <th>Фотография</th>
                                        <th>Дата создания</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($crimes)
                                        @foreach ($crimes as $crime)
                                            <tr>
                                                <td class="text-bold-500">{{ $crime->id }}</td>
                                                <td>{{ $crime->fio }}</td>
                                                <td class="text-bold-500">{{ $crime->crime }}</td>
                                                <td><a target="blank" href="{{ asset($crime->getImage()) }}">фотография</a>
                                                </td>
                                                <td>{{ $crime->created_at }}</td>
                                                <td>
                                                    <form action="{{ route('searchs.destroy', ['search' => $crime->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="bi bi-trash3-fill"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('footer')
@endsection
