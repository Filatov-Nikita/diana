@extends('layouts.base')
@section('content')
    <div class="auth_page">
        <div class="container">
<div class="auth">
    <div class="name">Регистрация</div>
    <div class="form">
        <form action="" method = "POST">
            {{ csrf_field() }}
            <label>Имя*<input type="text" name = "name" value = "{{old('name')}}"></label>
            @if ($errors->has('name'))
                <div>Неправильно введенное имя</div>
            @endif
            <label>Email*<input type="text" name = "email" value = "{{old('email')}}"></label>
            @if ($errors->has('email'))
                <div>email введен неверно</div>
            @endif
            <label>Пароль <input type="password" name = "password"></label>
            <label>Повтор пароля <input type="password" name = "password_confirmation"></label>
            @if ($errors->has('password_confirmation'))
                <div>Пароли не совпадают</div>
            @endif
            <input type="submit" value = "Регистрация" class = "btn">
        </form>
    </div>
</div>
        </div>
    </div>
@endsection