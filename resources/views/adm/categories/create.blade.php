@extends('layouts.adm')

@section('content')

    <div class="container bg-white" style="margin-bottom: 500px;">
        <div class="row justify-content-center align-items-center p-4" style="margin-top: 100px;">
            <h2>Добавить категорию</h2>
            <div class="col-sm-8">
                <form action="{{route('adm.category.store')}}" method="post">
                    @csrf
                    <div class="mt-2">
                        <input type="text" class="form-control" name="name" placeholder="Название категории">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
