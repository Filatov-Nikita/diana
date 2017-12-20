@extends('layouts.base')
@section('content')
    <div class="news_main">
        <div class="wrapper">
            <div class="blocks">
                <div class="container">
                    <div class="item">
                        <div class="top_line">
                        </div>
                        <a  href = "" class="foto">
                            <div class="black">
                                <div class="text">
                                    День рождения группы в вк
                                </div>
                                <div class="date">
                                    22.01.2017
                                </div>
                            </div>
                            <img src="{{url('img/lost.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <div class="top_line">
                        </div>
                        <a  href = "" class="foto">
                            <div class="black">
                                <div class="text">
                                    Животные от населения
                                </div>
                            </div>
                            <img src="{{url('img/naselenie.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <div class="top_line">
                        </div>
                        <a  href = "" class="foto">
                            <div class="black">
                                <div class="text">
                                    Собаки от потеряшек
                                </div>
                            </div>
                            <img src="{{url('img/dog.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <div class="top_line">
                        </div>
                        <a  href = "" class="foto">
                            <div class="black">
                                <div class="text">
                                    Кошки от потеряшек
                                </div>
                            </div>
                            <img src="{{url('img/081.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <div class="top_line">
                        </div>
                        <a  href = "" class="foto">
                            <div class="black">
                                <div class="text">
                                    Нужна поддержка
                                </div>
                            </div>
                            <img src="{{url('img/needHelp.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
