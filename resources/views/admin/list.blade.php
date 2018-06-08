@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">{{ $title }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            @if( empty($orders->toArray()) )
                            <p>Список заказов пуст</p>
                            @else
                            <table class="table">
                                <tr>
                                    <th>Заказчик</th>
                                    <th>Контакты</th>
                                    <th>Email</th>
                                    <th>Сообщение</th>
                                    <th>Дата</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->text }}</td>
                                    <td>{{ $order->date }}</td>
                                    @if(request()->is('admin/orders'))
                                    <td><a href="/admin/process/{{ $order->id }}" class="btn btn-primary">Обработан</a></td>
                                    @endif
                                    <td><a href="/admin/delete/{{ $order->id }}" class="delete btn btn-danger">Удалить</a></td>
                                </tr>
                                @endforeach
                            </table>
                                {{ $orders->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
