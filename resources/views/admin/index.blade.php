@extends('layout.main')

@section('title')
    Панель управления
@endsection

@section('body')
    
<div class="container mt-5">
    <h2>Панель управления</h2>
    
    @foreach ($users as $u)
    
    <div class="row">
        <div class="col-6">
            <b>{{ $u->surname }} {{ $u->name }} {{ $u->patronymic }}</b>
        </div>
        <div class="col-6">
            <a href="{{ route('editUser', ['id' => $u->id]) }}" class="btn btn-warning btn-sm">Изменить</a>
        </div>
    </div>

    @endforeach
    
</div>

@endsection