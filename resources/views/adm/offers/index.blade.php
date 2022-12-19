@extends('layouts.adm')

@section('title', 'Пользователи')

@section('content')

    <div class="container bg-white" style="padding: 50px">
        <div class="row">
            <h1>Предложение недели</h1>

            <div>
                <a href="{{route('adm.offer.create')}}" style="margin-bottom: 10px" class="btn btn-outline-primary">Изменить предложение</a>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Время</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i<count($offers); $i++)
                    <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$offers[$i]->name}}</td>
                        <td>{{$offers[$i]->price}}</td>
                        <td>{{$offers[$i]->created_at->format('H')}}</td>
                    </tr>
                @endfor
                </tbody>
            </table>

        </div>
    </div>

@endsection
