@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">{{ $title }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>{{ __('admin.total') }} {{ $orders->count() }}</p>
                            <p>{{ __('admin.expect') }} {{ $orders->where('processed', '0')->count() }}</p>
                            <p>{{ __('admin.reviewed') }} {{ $orders->where('processed', '1')->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
