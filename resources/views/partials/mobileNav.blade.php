<div>
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="{{ route('login') }}"><i class="fa fa-user"></i> {{ __('Login') }}</a>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ route('register') }}"><i class="fa fa-user"></i> {{ __('Register') }}</a>
            </div>
        </div>

        {{-- mobile menu --}}
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Ginni Package</a></li>
                <li><a href="#">Baburchi Package</a></li>
                <li><a href="#">Utshob Package</a></li>
                <li><a href="#">Special Recipe</a></li>
            </ul>
        </nav>
        {{-- mobile menu --}}

        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@fishnfood.com</li>
            </ul>
        </div>
    </div>
</div>
