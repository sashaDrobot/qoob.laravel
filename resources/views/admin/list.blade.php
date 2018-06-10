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
                            <table class="table">
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
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->text }}</td>
                                    <td>{{ $order->date }}</td>
                                    @if(request()->is('admin/orders'))
                                    <td><a href="/admin/process/{{ $order->id }}" class="btn btn-primary">{{ __('admin.process') }}</a></td>
                                    @endif
                                    <td>
                                        <form action="/admin/delete/{{ $order->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="delete btn btn-danger" value="{{ __('admin.delete') }}">
                                        </form>
                                    </td>
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
