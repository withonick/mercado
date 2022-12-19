@extends('layouts.adm')

@section('content')

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h2>Добавить предложение недели</h2>
            <div class="col-sm-6">
                <form action="{{route('adm.offer.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-2">
                        <label for="name">Название:</label>
                        <input type="text" name="name" class="form-control" placeholder="Введите название">
                    </div>

                    <div class="mt-2">
                        <label for="price">Цена:</label>
                        <input type="number" name="price" class="form-control" placeholder="Введите цену">
                    </div>

                    <div class="mt-2">
                        <label for="img">Изображение:</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
