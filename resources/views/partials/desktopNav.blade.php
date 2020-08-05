<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="header__top__left">
                    <ul>
                        <li><i class="fa fa-envelope"></i> hello@fishnfood.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                    <div class="header__top__right__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    @guest
                        <div class="header__top__right__auth mr-2">
                            <a href="{{ route('register') }}"><i class="fa fa-user"></i> {{ __('Login') }}</a>
                        </div>
                        @if (Route::has('register'))
                            <div class="header__top__right__auth">
                                <a href="{{ route('register') }}"><i class="fa fa-user"></i> {{ __('Register') }}</a>
                            </div>
                        @endif
                    @else
                        <div class="header__top__right__auth mr-2">
                            <a href="#">{{ Auth::user()->name }}</a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="header__logo">
                <a href="./index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="col-lg-10">
            <nav class="header__menu">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Ginni Package</a></li>
                    <li><a href="#">Baburchi Package</a></li>
                    <li><a href="#">Utshob Package</a></li>
                    <li><a href="#">Special Recipe</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="humberger__open">
        <i class="fa fa-bars"></i>
    </div>
</div>
