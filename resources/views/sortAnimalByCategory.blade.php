@extends('layouts.base')
@section('content')
    <div class="news_main">
        <div class="wrapper">
            <div class="blocks">
                <div class="container">
                    @foreach($animals as $animal)
                        @include('parts.animal')
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endsection
