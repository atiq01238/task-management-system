@extends('layout.master')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('validate.message')
                    <div class="card">
                        <div class="card-header">
                            <h4>User
                                <a href="{{ url('users/create') }}" class="btn btn-primary" style="float: right;"> Invite User</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="padding: 10px;">ID</th>
                                        <th style="padding: 10px;">First Name</th>
                                        <th style="padding: 10px;">Last Name</th>
                                        <th style="padding: 10px;">Email</th>
                                        <th style="padding: 10px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <form action="{{ url('users', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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
@stop

