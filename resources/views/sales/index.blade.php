@extends('layouts.app')
@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <h4 class="text-center my-3 pb-3">Квартиры от компании home</h4>

                            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                                <div class="col-12">

                                </div>

                                <div class="col-12">

                                    <a href="{{ route('apartments.create') }}" class="btn btn-primary">Добавить запись о продаже</a>
                                </div>
                            </form>





                            <table class="table mb-4">
                                <thead>
                                <tr>
                                    <th scope="col">Клиент </th>
                                    <th scope="col">Дом</th>
                                    <th scope="col">Квартира</th>
                                    <th scope="col">Продажа</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sales as $sale)


                                    <tr>
                                        <th scope="row">{{$sale->date}}</th>
                                        <th scope="row">{{$sale->home_id}}</th>
                                        <td>{{$sale->apartment_id}}</td>
                                        <td>{{$sale->customer_id}}</td>
                                        <td>
                                            <a href="{{ route('sales.show', $sale) }}" type="submit" class="btn btn-danger">Показать</a>
                                            <a href="{{ route('sales.edit', $sale) }}" type="submit" class="btn btn-danger">Изменить</a>
                                            <form action="{{ route('sales.destroy', $sale) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Удалить</button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


