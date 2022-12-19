@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')

    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{asset('navbar/img/hero/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Mercado</h6>
                                <h2>Зимняя - осеняя коллекция</h2>
                                <a href="#" class="primary-btn">В Магазин <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{asset('navbar/img/hero/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Mercado</h6>
                                <h2>Зимняя - осеняя коллекция</h2>
                                <p></p>
                                <a href="{{route('products.index')}}" class="primary-btn">В Магазин <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="{{asset('navbar/img/banner/banner-1.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Коллекция одежд</h2>
                            <a href="{{route('products.index')}}">В Магазин</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="{{asset('navbar/img/banner/banner-2.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Аксессуары</h2>
                            <a href="{{route('products.index')}}">В Магазин</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="{{asset('navbar/img/banner/banner-3.jpg')}}" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Зимная обувь</h2>
                            <a href="{{route('products.index')}}">В Магазин</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Бестселлеры</li>
                        <li data-filter=".new-arrivals">Новинки</li>
                        <li data-filter=".hot-sales">В тренде</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-1.jpg')}}">
                            <span class="label">Новинки</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-2.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-3.jpg')}}">
                            <span class="label">Скидка</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-4.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$60.9</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-5.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Lether Backpack</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$31.37</h5>
                            <div class="product__color__select">
                                <label for="pc-13">
                                    <input type="radio" id="pc-13">
                                </label>
                                <label class="active black" for="pc-14">
                                    <input type="radio" id="pc-14">
                                </label>
                                <label class="grey" for="pc-15">
                                    <input type="radio" id="pc-15">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-6.jpg')}}">
                            <span class="label">Скидка</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$98.49</h5>
                            <div class="product__color__select">
                                <label for="pc-16">
                                    <input type="radio" id="pc-16">
                                </label>
                                <label class="active black" for="pc-17">
                                    <input type="radio" id="pc-17">
                                </label>
                                <label class="grey" for="pc-18">
                                    <input type="radio" id="pc-18">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-7.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-19">
                                    <input type="radio" id="pc-19">
                                </label>
                                <label class="active black" for="pc-20">
                                    <input type="radio" id="pc-20">
                                </label>
                                <label class="grey" for="pc-21">
                                    <input type="radio" id="pc-21">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('navbar/img/product/product-8.jpg')}}">
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/compare.png')}}" alt=""> <span>Сравнить</span></a></li>
                                <li><a href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ В корзину</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$26.28</h5>
                            <div class="product__color__select">
                                <label for="pc-22">
                                    <input type="radio" id="pc-22">
                                </label>
                                <label class="active black" for="pc-23">
                                    <input type="radio" id="pc-23">
                                </label>
                                <label class="grey" for="pc-24">
                                    <input type="radio" id="pc-24">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Трендовые одежды <br /> <span>Коллекция обувей</span> <br /> Аксессуары</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{asset('navbar/img/product-sale.png')}}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Скидка на</span>
                            <h5>13 480</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Предложение недели</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>дня</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>час</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>минут</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>секунд</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Заказать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram spad" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('navbar/img/instagram/instagram-1.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('navbar/img/instagram/instagram-2.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('navbar/img/instagram/instagram-3.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('navbar/img/instagram/instagram-4.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('navbar/img/instagram/instagram-5.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="{{asset('navbar/img/instagram/instagram-6.jpg')}}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <h3>#mercado</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection