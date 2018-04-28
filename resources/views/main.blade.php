@extends('layouts.base')
@section('content')
    <div class="two_panel">
        <div class="wrapper">
            <div class="container">
                <div class="left_panel">
                    <div class="top">
                        Последние новости
                    </div>
                    <div class="content">
                        @foreach($posts as $post)
                        <div class="item">
                            <div class="foto">
                                <a href="{{route('postById', ['id' => $post->id])}}">
                                    <img src="{{url($post->image)}}" alt="">
                                </a>
                            </div>
                            <div class="text">
                                 <a href="{{route('postById', ['id' => $post->id])}}">{{$post->title}}</a>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                   
                    <div class="show">
                        <a href="{{url('/posts')}}">Показать еще</a>
                    </div>
                </div>
                <div class="right_panel">
                    <div class="top">
                          @include('parts.slider')
                    </div>
                    <div class="blocks">
                        <div class="container">
                            @foreach($categories as $categorie)
                            <div class="item">
                                <div class="top_line">
                                </div>
                                    <a  href = "{{route('listFromCategories', ['id' => $categorie->id])}}" class="foto">
                                    <div class="black">
                                        <div class="text">
                                            {{$categorie->name}}
                                        </div>
                                    </div>
                                    <img src="{{url('img/lost.jpg')}}" alt="">
                                </a>
                          </div>
                          @endforeach
                     </div>
                </div>
            </div>
         </div>
    </div>


@endsection