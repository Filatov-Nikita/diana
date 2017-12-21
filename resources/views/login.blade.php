@extends('layouts.base')
@section('content')
<div class="auth_page">
    <div class="container">
        <div class="auth">
            <div class="name">Авторизация</div>
            <div class="form">
                <form action="" method = "POST">
                    {{ csrf_field() }}
                    <label>Логин*<input type="text" id = "one" name = "email"></label>
                    <label>Пароль <input type="password" name = "password"></label>
                    <input type="submit" value = "Войти" class = "btn">
                </form>
            </div>
            @if(session('authError'))
                <div class = "err">{{session('authError')}}</div>
            @endif
        </div>
    </div>
</div>

    @endsection