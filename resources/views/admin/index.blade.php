@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="text-center">{{ __('admin.welcome', ['name' => Auth::user()->name]) }}</h3>
                            <div class="row">
                                <div class="col-sm-4 card-admin">
                                    <h5 class="font-weight-bold">{{ __('admin.ord') }}</h5>
                                    <p>{{ __('admin.total') }} {{ $orders->count() }}</p>
                                    <p>{{ __('admin.expect') }} {{ $orders->where('processed', '0')->count() }}</p>
                                    <p>{{ __('admin.reviewed') }} {{ $orders->where('processed', '1')->count() }}</p>
                                </div>
                                <div class="col-sm-4 card-admin">
                                    <h5 class="font-weight-bold">{{ __('admin.users') }}</h5>
                                    <p>{{ __('admin.current user') }} {{ Auth::user()->name }}</p>
                                    <p>{{ __('admin.all users') }} {{ $users->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
