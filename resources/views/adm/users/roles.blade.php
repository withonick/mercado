@extends('layouts.adm')

@section('title', 'Пользователи')

@section('content')

    <div class="container bg-white" style="padding: 50px">
        <div class="row">
            <h1>Список всех ролей</h1>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Участники</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i<count($roles); $i++)
                    <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$roles[$i]->name}}</td>
                        <td>{{count($roles[$i]->users)}}</td>
                        <td>Обновить</td>
                    </tr>
                @endfor
                </tbody>
            </table>

        </div>
    </div>

@endsection
