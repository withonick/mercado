@extends('layouts.adm')

@section('content')

    <div class="container bg-white p-4">
        <div class="row">
            <h1>Список всех продуктов</h1>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Категория</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i<count($products); $i++)
                    <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{mb_strimwidth($products[$i]->name, 0, 38, '...')}}</td>
                        <td>{{$products[$i]->price}} KZT</td>
                        <td>{{$products[$i]->category->name}}</td>
                    </tr>
                @endfor
                </tbody>
            </table>

        </div>
    </div>
@endsection
