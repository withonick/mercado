@extends('layouts.adm')

@section('title', 'Пользователи')

@section('content')

    <div class="container bg-white" style="padding: 50px">
        <div class="row">
            <h1>Список всех купонов</h1>

            <div>
                <a href="{{route('adm.coupon.create')}}" style="margin-bottom: 10px" class="btn btn-outline-primary">Добавить купон +</a>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Код</th>
                    <th scope="col">Срок</th>
                    <th scope="col">Процент скидки</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i<count($coupons); $i++)
                    <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$coupons[$i]->code}}</td>
                        <td>{{$coupons[$i]->time}} недели</td>
                        <td>{{$coupons[$i]->percent}} %</td>
                    </tr>
                @endfor
                </tbody>
            </table>

        </div>
    </div>

@endsection
