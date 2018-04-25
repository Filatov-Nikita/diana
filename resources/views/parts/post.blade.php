<div class="item">
    <div class="top_line">
    </div>
    <a  href = "{{route('postById', ['id' => $post->id])}}" class="foto">
        <div class="black">
            <div class="text">
                {{$post->title}}
            </div>
            <div class="date">
                {{articlesForamDate($post->created_at)}}
            </div>
        </div>
        <img src="{{$post->image}}" alt="">
    </a>
</div>