<header>
    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </a>
                <div class="name">
                    <a href="{{url('/')}}">Потеряшки</a>
                </div>
            </div>
            <div class="left_info">
                <a href = "https://vk.com/poteriashki" class="name" target="_blank">
                    Благотворительный фонд <span>Потеряшки</span>
                </a>
                <div class="phone">
                   Горячая линия: (9044) 94-55-66
                </div>
                @if(Auth::check())
                <div class="phone">
                    <a href="{{url('logout')}}">Выход {{Auth::user()->name}}</a>
                </div>
                   @else
                    <div class="phone">
                        <a href="{{url('login')}}">Войти</a> /  <a href="{{url('/registration')}}">Регистрация</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <div class="wrapper">
        <ul>
            <li><a href="{{url('/')}}">Главная</a></li>
            <li><a href="{{url('/posts')}}">Новости</a></li>
            <li><a href="{{url('/about')}}">О нас</a></li>
            <li><a href="{{url('/help')}}">Как помочь</a></li>
            @can('admin')
                <li><a href="{{url('/news/add')}}">Добавить новость</a></li>
                @endcan
        </ul>
    </div>
</div>