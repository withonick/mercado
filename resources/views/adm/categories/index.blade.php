@extends('layouts.adm')

@section('content')

    <div class="container bg-white p-4">
        <div class="row">
            <h1>Список всех категории</h1>
            <div style="margin-bottom: 10px">
                <a href="{{route('adm.category.create')}}" class="btn btn-outline-primary">Добавить категорию +</a>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Продукты</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i<count($categories); $i++)
                    <tr>
                        <th scope="row">{{$i+1}}</th>
                        <td>{{$categories[$i]->name}}</td>
                        <td>{{count($categories[$i]->products)}}</td>
                        <td style="display: flex;">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                            <form action="{{route('adm.category.delete', $categories[$i]->id)}}" method="post" style="margin-left: 10px">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>

        </div>
    </div>
@endsection
