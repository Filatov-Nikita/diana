@extends('layouts.base')

@section('content')

    <div class="formAdd">
        <div class="wrapper">
            <div class="add">Добавление новости</div>
            @if(session('successNewsCreate'))
                <style>
                    .success {
                        background: #158c25b8;
                        color:#fff;
                        text-align: center;
                        padding: 5px 0;
                        margin: 15px 0;
                        font:18px lora;
                    }
                </style>
                <div class = "success">{{session('successNewsCreate')}}</div>
            @endif
            <div class="form">
                <form action="" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label for="title">Название новости</label> <input type="text" name="title">
                    <input type="file" name = "image"><br>
                    <textarea name="content" id = "content"></textarea><br>
                    <input type="submit" value="Сохранить"><br>
                </form>
            </div>
        </div>
    </div>

    @endsection