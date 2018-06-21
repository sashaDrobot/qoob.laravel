@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">{{ $title }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            @if( $orders->isEmpty() )
                                <p>{{ __('admin.empty') }}</p>
                            @else
                                <table class="table table-list">
                                    <tr>
                                        <th>{{ __('admin.customer') }}</th>
                                        <th>{{ __('admin.contacts') }}</th>
                                        <th>{{ __('admin.email') }}</th>
                                        <th>{{ __('admin.message') }}</th>
                                        <th>{{ __('admin.date') }}</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->name }}</td>
                                            <td><a href="tel:{{ $order->phone }}">{{ $order->phone }}</a></td>
                                            <td><a href="mailto:{{ $order->email }}">{{ $order->email }}</a></td>
                                            <td>{{ $order->text }}</td>
                                            <td>{{ $order->date }}</td>
                                            @if(request()->is('admin/orders'))
                                                <td><a href="/admin/process/{{ $order->id }}" class="btn btn-primary">{{ __('admin.process') }}</a></td>
                                            @endif
                                            <td>
                                                <form id="delete-user" action="/admin/delete/{{ $order->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="delete btn btn-danger" value="{{ __('admin.delete') }}">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                                <div class="cards-list">
                                    @foreach($orders as $order)
                                        <div class="card">
                                            <div class="card-header">
                                                @if(request()->is('admin/orders'))
                                                    <a href="/admin/process/{{ $order->id }}" class="btn-mob">{{ __('admin.process') }}</a>
                                                @endif
                                                <form action="/admin/delete/{{ $order->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-mob delete-mob">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="card-body">
                                                <p>{{ __('admin.customer') }}: {{ $order->name }}</p>
                                                <p>{{ __('admin.contacts') }}: <a href="tel:{{ $order->phone }}">{{ $order->phone }}</a></p>
                                                <p>{{ __('admin.email') }}: <a href="mailto:{{ $order->email }}">{{ $order->email }}</a></p>
                                                <p>{{ __('admin.message') }}: {{ $order->text }}</p>
                                                <p>{{ __('admin.date') }}: {{ $order->date }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{ $orders->links() }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
