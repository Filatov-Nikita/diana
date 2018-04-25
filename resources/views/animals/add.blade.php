@extends('layouts.base')

@section('content')

    <div class="formAdd">
        <div class="wrapper">
            <div class="add">Добавление животного</div>
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
                    <label for="name">Имя животного</label> <input type="text" name="name" id = "name">
                    {{--  <input type="file" name = "image"><br>  --}}
                    <label for="category">Выберите категорию</label>
                    <select name="category" id="category">
                        @foreach($all_categories as $categorie)
                      <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                    </select><br><br>
                    <label for="age">Возраст животного</label>
                    <input type="text" name = "age" id = "age">
                    <label for="thumbnail">Миниатюра</label>
                    <input type="file" name = "thumbnail" id = "thumbnail"> <br>
                    <label for="animal_type">Выберите тип животного</label>
                    <select name="animal_type" id="animal_type">
                        @foreach($all_animal_types as $animal_type)
                             <option value="{{$animal_type->id}}">{{$animal_type->name}}</option>
                        @endforeach
                    </select> <br> <br>
                    <textarea name="content" id = "content"></textarea><br>
                    <input type="submit" value="Сохранить"><br>
                </form>
            </div>
        </div>
    </div>

    @endsection