@extends('layout.main')

@section('title')
    Редактирование пользователя №{{ $user->id }}
@endsection

@section('body')
    
<div class="container mt-5">
    <h2 class="mb-2">Редактирование пользователя №{{ $user->id }}</h2>
    
    <form action="{{ route('editUserForm') }}" method="post" id="editUserForm" onsubmit="ajaxForm(this, event)" enctype="multipart/form-data">
        <div class="input-group mb-2">
            <input type="hidden" name="id" value="{{ $user->id }}">
            <input type="text" name="surname" placeholder="Фамилия" value="{{ $user->surname }}" class="form-control" id="surnameInput">
            <div class="invalid-feedback" id="surnameError"></div>
        </div>
        <div class="input-group mb-2">
            <input type="text" name="name" placeholder="Имя" value="{{ $user->name }}" class="form-control" id="nameInput">
            <div class="invalid-feedback" id="nameError"></div>
        </div>
        <div class="input-group mb-2">
            <input type="text" name="patronymic" placeholder="Отчество" value="{{ $user->patronymic }}" class="form-control" id="patronymicInput">
            <div class="invalid-feedback" id="patronymicError"></div>
        </div>
        <div class="input-group mb-2">
            <input type="file" name="photo" class="form-control" id="photoInput">
            <div class="invalid-feedback" id="photoError"></div>
        </div>
        <img src="{{ $user->photo }}" width="100" height="100" class="shadow-sm rounted mb-2" alt=""><br>
        <button type="submit" class="btn btn-warning">Изменить</button>
    </form>
</div>

@endsection