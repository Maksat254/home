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

                                    <a href="{{ route('apartments.create') }}" class="btn btn-primary">Добавить квартиру</a>
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
                                @foreach($apartments as $apartment)


                                <tr>
                                    <th scope="row">{{$apartment->number}}</th>
                                    <th scope="row">{{$apartment->rooms}}</th>
                                    <td>{{$apartment->floor}}</td>
                                    <td>{{$apartment->area}}</td>
                                    <td>{{$apartment->cost}}</td>
                                    <td>{{$apartment->home_id}}</td>
                                    <td>
                                        <a href="{{ route('apartments.show', $apartment) }}" type="submit" class="btn btn-danger">Показать</a>
                                        <a href="{{ route('apartments.edit', $apartment) }}" type="submit" class="btn btn-danger">Изменить</a>
                                        <form action="{{ route('apartments.destroy', $apartment) }}" method="post">
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

