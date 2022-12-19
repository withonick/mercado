@extends('layouts.app')

@section('title', 'Корзина')

@section('content')

    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Корзина</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Главная</a>
                            <a href="{{route('products.index')}}">Магазин</a>
                            <span>Корзина</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shopping-cart spad">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="shopping__cart__table">
                   <table>
                       <thead>
                       <tr>
                           <th>Продукт</th>
                           <th>Количество</th>
                           <th>Размер</th>
                           <th>Сумма</th>
                           <th>Обновить</th>
                           <th></th>
                       </tr>
                       </thead>
                       <tbody>
                           @foreach($cart as $product)
                               <tr>
                                   <td class="product__cart__item">
                                       <div class="product__cart__item__pic">
                                           <img src="{{$product->product->img_one}}" alt="" width="60">
                                       </div>
                                       <div class="product__cart__item__text">
                                           <h6>{{mb_strimwidth($product->product->name, 0, 38, '...')}}</h6>
                                           <h5>{{ number_format($product->product->price, 0, '', ' ')}} KZT</h5>
                                       </div>
                                   </td>
                                   <form action="{{route('cart.update')}}" method="post">
                                       @csrf
                                       @method('PUT')
                                       <td class="quantity__item">
                                           <div class="quantity">
                                               <div class="pro-qty-2">
                                                   <input type="text" name="amount" value="{{$product->amount}}">
                                               </div>
                                           </div>
                                       </td>
                                       <td class="cart__price">
                                           <select name="size">
                                               <option value="xxl" @if($product->size == "xxl") selected @endif>XXL</option>
                                               <option value="xl" @if($product->size == "xl") selected @endif>XL</option>
                                               <option value="l" @if($product->size == "l") selected @endif>L</option>
                                               <option value="s" @if($product->size == "s") selected @endif>S</option>
                                           </select>
                                       </td>
                                   <td class="cart__price">{{ number_format($product->product->price * $product->amount, 0, '', ' ')}} KZT</td>
                                   <input type="hidden" {{ $count+=$product->product->price * $product->amount }}>
                                   <td>
                                       <div class="continue__btn">
                                       <button type="submit" class="border-0 bg-transparent">Обновить заказ</button>
                                       </div>
                                   </td>
                                   </form>
                                   <td class="cart__close">
                                       <form action="{{route('cart.delete', $product)}}" method="post">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="border-0 bg-transparent"><i style="cursor:pointer;" class="fa fa-close"></i></button>
                                       </form>
                                   </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
               <div class="row">
                   <div class="col-lg-8 col-md-6 col-sm-6">
                       <div class="continue__btn">
                           <a href="{{route('products.index')}}">Продолжить покупку</a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-lg-12" style="margin-top: 20px;">
               <div class="cart__discount">
                   <form action="#">
                       <input type="text" placeholder="Код купона">
                       <button type="submit">Использовать</button>
                   </form>
               </div>
               <div class="cart__total">
                   <h6>Всего в корзине</h6>
                   <ul>
                       <li>Сумма <span>{{ number_format($count, 0, '', ' ') }} KZT</span></li>
                   </ul>
                   <a href="#" class="primary-btn">Перейти к оплате</a>
               </div>
           </div>
       </div>
   </div>
    </section>
@endsection
