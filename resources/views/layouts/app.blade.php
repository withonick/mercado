<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link
        href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
        rel="stylesheet"
    />
    <meta
        name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1"
    />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
    <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
        defer
    ></script>

    <link href="{{asset('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('navbar/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('navbar/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('navbar/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('navbar/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('navbar/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('navbar/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('navbar/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('navbar/css/style.css')}}" type="text/css">

    <script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"></script>
</head>

<body>
<div id="preloder">
    <div class="loader"></div>
</div>

<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            @guest()
            <a href="{{route('login.form')}}">Войти</a>
            @endguest
            <a href="#">Помощь</a>
        </div>
        <div class="offcanvas__top">
            <span id="#user-city"></span>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a>
        <a href="#"><img src="{{asset('navbar/img/icon/cart.png')}}" alt=""> <span>0</span></a>
        <div class="price">$0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Бесплатная доставка, 30-дневная гарантия возврата или возврата денег.</p>
    </div>
</div>

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Бесплатная доставка, 30-дневная гарантия возврата или возврата денег.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            @guest()
                            <a href="{{route('login.form')}}">Войти</a>
                            @endguest
                            <a href="#">Помощь</a>
                        </div>
                        <div class="header__top__hover">
                            <span id="user-city"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{route('index')}}"><img src="{{asset('navbar/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('index')}}">Главная</a></li>
                        <li><a href="{{route('products.index')}}">Магазин</a></li>
                        <li><a href="{{route('print.clothes')}}">Создать</a></li>
                        <li><a href="{{route('contacts')}}">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a>
                    <a href="{{route('wishlist')}}"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a>
                    <a href="{{route('cart.index')}}"><img src="{{asset('navbar/img/icon/cart.png')}}" alt=""> @auth() <span>{{count(Auth::user()->cartProducts)}}</span>@endauth</a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    @yield('content')
</div>

@if (session('message'))
    <div class="alert alert-success-alt alert-dismissable" style="position: fixed; bottom:0; left:0; width: 100%">
        <span class="glyphicon glyphicon-certificate"></span>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            ×</button><strong>OK</strong> <a href="#" target="_blank">{{session('message')}}</a></div>
@endif

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src="{{asset('navbar/img/footer-logo.png')}}" alt=""></a>
                    </div>
                    <p>Ваш универсальный ресурс для умных покупок.</p>
                    <a href="#"><img src="{{asset('navbar/img/payment.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Покупка</h6>
                    <ul>
                        <li><a href="#">Магазин одежды</a></li>
                        <li><a href="#">Тренды</a></li>
                        <li><a href="#">Аксессуары</a></li>
                        <li><a href="#">Скидка</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Покупка</h6>
                    <ul>
                        <li><a href="{{route('contacts')}}">Контакты</a></li>
                        <li><a href="#">Методы оплаты</a></li>
                        <li><a href="#">Доставка</a></li>
                        <li><a href="#">Возврат и обмен</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>Рассылка</h6>
                    <div class="footer__newslatter">
                        <p>Узнавайте первыми о новых поступлениях, лукбуках, распродажах и акциях!</p>
                        <form action="#">
                            <input type="text" placeholder="Введите email">
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <p>Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Mercado</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Поиск.....">
        </form>
    </div>
</div>

<script type="text/javascript">
    window.onload = function () {
        jQuery("#user-city").text(ymaps.geolocation.city);
    }
</script>


<script src="{{asset('navbar/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('navbar/js/bootstrap.min.js')}}"></script>
<script src="{{asset('navbar/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('navbar/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('navbar/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('navbar/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('navbar/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('navbar/js/mixitup.min.js')}}"></script>
<script src="{{asset('navbar/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('navbar/js/main.js')}}"></script>
</body>

</html>
