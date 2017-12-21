<header>
    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="img/logo.png" alt="">
                </a>
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
                        <a href="{{url('login')}}">Войти</a>
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
            <li><a href="{{url('/news')}}">Новости</a></li>
            <li><a href="{{url('/about')}}">О нас</a></li>
            <li><a href="">Как помочь</a></li>
        </ul>
    </div>
</div>