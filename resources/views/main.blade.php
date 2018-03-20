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
                        <div class="item">
                            <div class="foto">
                                <a href="">
                                    <img src="{{url('img/icon1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="">СрочноСрочно СрочноСрочно нужна помощь</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="foto">
                                <a href="">
                                    <img src="{{url('img/icon2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="">Срочно нужна помощь</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="foto">
                                <a href="">
                                    <img src="{{url('img/icon1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="">Срочно нужна помощь</a>
                            </div>
                        </div>
                    </div>
                    <div class="show">
                        <a href="{{url('/news')}}">Показать еще</a>
                    </div>
                </div>
                <div class="right_panel">
                    <div class="top">
                        <img src="{{url('img/2.jpg')}}" alt="">
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