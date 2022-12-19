@extends('layouts.adm')

@section('title', 'Пользователи')

@section('content')

        <div class="container bg-white" style="padding: 50px">
            <div class="row">
                <h1>Список всех пользователей</h1>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Email</th>
                        <th scope="col">Роль</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0; $i<count($users); $i++)
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$users[$i]->name}}</td>
                            <td>{{$users[$i]->email}}</td>
                            <td>{{$users[$i]->role->name}}</td>
                            <td><a href="{{route('adm.users.edit', $users[$i]->id)}}">Редактировать</a></td>
                        </tr>
                    @endfor
                    </tbody>
                </table>

            </div>
        </div>

@endsection
