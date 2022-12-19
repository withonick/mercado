@extends('layouts.adm')

@section('content')
    <h1 class="text-center">Добавить продукт</h1>
    <div class="col-sm-8" style="margin-left: auto; margin-right: auto;">
    <form action="{{route('adm.products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mt-3">
            <label for="name">Название:</label>
            <input type="text" name="name" class="form-control" placeholder="Введите название продукта">
        </div>
        <div class="mt-3">
            <label for="name">Цена:</label>
            <input type="price" name="price" class="form-control" placeholder="Введите цену">
        </div>
        <div class="mt-3">
            <label for="name">Категория:</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="name">Изображение 1:</label>
            <input type="file" name="img_one" class="form-control" placeholder="Введите URL изображение">
        </div>
        <div class="mt-3">
            <label for="name">Изображение 2:</label>
            <input type="file" name="img_two" class="form-control" placeholder="Введите URL изображение">
        </div>
        <div class="mt-3">
            <label for="name">Изображение 3:</label>
            <input type="file" name="img_three" class="form-control" placeholder="Введите URL изображение">
        </div>
        <div class="mt-3">
            <label for="name">Описание:</label>
            <textarea id="inp_editor1" name="description">
        &lt;p&gt;&lt;/p&gt;
        </textarea>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
    </div>

    <script>
        let editor1 = new RichTextEditor("#inp_editor1");
    </script>
@endsection
