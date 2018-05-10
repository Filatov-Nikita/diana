<div class = "lastNews">
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