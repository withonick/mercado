@extends('layouts.app')

@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Список желаемого</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Главная</a>
                            <a href="{{route('products.index')}}">Магазин</a>
                            <span>Список желаемого</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Категория</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $p)
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <a style="color: black" href="{{route('products.show', $p->id)}}"><img src="{{$p->img_one}}" width="100"></a>
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><a style="color: black" href="{{route('products.show', $p->id)}}">{{$p->name}}</a></h6>
                                            <h5>{{$p->price}} KZT</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                                <p>{{$p->category->name}}</p>
                                    </td>
                                    <td class="cart__close">
                                        <form action="{{route('products.like', $p->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="bg-transparent border-0">
                                                <i style="margin-bottom: 20px;" class="fa fa-close"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
