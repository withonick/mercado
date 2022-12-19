@extends('layouts.app')

@section('title', 'Магазин')

@section('content')

    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Магазин</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Главная</a>
                            <span>Магазин</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Поиск...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Категории</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    @foreach($categories as $cat)
                                                    <li><a href="{{route('category.index',$cat)}}">{{$cat->name}}({{count($cat->products)}})</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Фильтр по ценам</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">5 000 KZT - 9 990 KZT</a></li>
                                                    <li><a href="#">10 000 KZT - 14 990 KZT</a></li>
                                                    <li><a href="#">15 000 KZT - 19 990 KZT</a></li>
                                                    <li><a href="#">20 000 KZT - 24 990 KZT</a></li>
                                                    <li><a href="#">25 000 KZT - 29 990 KZT</a></li>
                                                    <li><a href="#">30 000 KZT+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Показано {{count($products)}} из коллекции</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Сортировка по ценам:</p>
                                    <select>
                                        <option value="">От мин до макс.</option>
                                        <option value="">5000 KZT - 9990 KZT</option>
                                        <option value="">10000 KZT - 15000 KZT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="{{route('products.show', $product->id)}}"><div class="product__item__pic set-bg" data-setbg="{{$product->img_one}}">
                                        <ul class="product__hover">
                                            <form action="{{route('products.like', $product->id)}}" method="post">
                                                @csrf
                                                <li><button class="bg-transparent border-0" type="submit"><img src="{{asset('navbar/img/icon/heart.png')}}" alt=""></button></li>
                                            </form>
                                            </li>
                                            <li><button class="border-0 bg-transparent" href="#"><img src="{{asset('navbar/img/icon/search.png')}}" alt=""></button></li>
                                        </ul>
                                    </div></a>
                                <div class="product__item__text">
                                        <h6>{{$product->name}}</h6>
                                        <a href="#" class="add-cart">+ В корзину</a>
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5>{{number_format($product->price, 0, '', ' ')}} KZT</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
