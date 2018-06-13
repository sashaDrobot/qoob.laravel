@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">{{ $title }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="user-add">
                                <p class="font-weight-bold">{{ __('users.add new') }}</p>
                                <form action="/admin/add" method="post" class="form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">{{ __('users.name') }}:</label>
                                        <input class="form-control" type="text" name="name" id="name" autocomplete="new-user">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input class="form-control" type="email" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">{{ __('login.password') }}:</label>
                                        <input class="form-control" type="password" name="password" id="password" autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-plus"></i>  {{ __('users.add') }}</button>
                                    </div>
                                </form>
                            </div>

                            <div class="users-list">
                                <p class="font-weight-bold">{{ __('users.list') }}</p>
                                <table class="table table-list">
                                    <tr>
                                        <th>{{ __('users.user') }}</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                            <td>
                                                <form action="/admin/users/delete/{{ $user->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="delete btn btn-danger" value="{{ __('admin.delete') }}">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="cards-list">
                                    @foreach($users as $user)
                                        <div class="card">
                                            <div class="card-header">
                                                <form action="/admin/users/delete/{{ $user->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-mob delete-mob">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="card-body">
                                                <p>{{ __('users.user') }}: {{ $user->name }}</p>
                                                <p>Email: {{ $user->email }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
