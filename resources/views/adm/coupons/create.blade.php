@extends('layouts.adm')

@section('content')

    <div class="container bg-white" style="margin-bottom: 500px;">
        <div class="row justify-content-center align-items-center p-4" style="margin-top: 100px;">
            <h2>Добавить купон</h2>
            <div class="col-sm-8">
                <form action="{{route('adm.coupon.store')}}" method="post">
                    @csrf
                    <div class="mt-2">
                        <label for="code">Код:</label>
                        <input type="text" class="form-control" name="code" placeholder="Код купона">
                    </div>
                    <div class="mt-2">
                        <label for="time">Срок/неделя:</label>
                        <input type="number" class="form-control" name="time" placeholder="Срок/неделя">
                    </div>
                    <div class="mt-2">
                        <label for="percent">Процент скидки:</label>
                        <input type="number" name="percent" placeholder="Процент скидки" class="form-control">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
