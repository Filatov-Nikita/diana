<div class="item">
    <div class="top_line">
    </div>
      <a  href = "{{route('animals.detail', ['id' => $animal->id])}}" class="foto">
        <div class="black">
            <div class="text">
                {{$animal->name}}
            </div>
        </div>
        <img src="{{url('public/' . $animal->thumbnail)}}" alt="">
    </a>
</div>