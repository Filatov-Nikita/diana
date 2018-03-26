@extends('layouts.base')
@section('content')
    <div class="news_main">
        <div class="wrapper">
            <div class="blocks">
                <div class="container">
                    @foreach($animals as $animal)
                    <div class="item">
                        <div class="top_line">
                        </div>
                          <a  href = "{{route('animals.detail', ['id' => $animal->id])}}" class="foto">
                            <div class="black">
                                <div class="text">
                                    {{$animal->name}}
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

    @endsection
