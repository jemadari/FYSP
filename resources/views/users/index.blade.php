@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-7">
                            Users
                        </h1>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-outline-primary" href="{{ route('users.create') }}"><i class="fas fa-plus"></i> user</a>
                </div>
                @if (count($users) > 0)
                    <div class="table-responsive">
                        <table class="table table-light table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role(s)</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key=>$user)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ implode(', ', $user->roles->pluck('name')->toArray()) }}</td>
                                        <td>
                                            <a href="{{ route('users.show', $user) }}" class="btn btn-outline-primary" title="view"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('users.edit', $user) }}" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('users.destroy', $user) }}" class='btn btn-outline-danger' onclick="event.preventDefault(); document.querySelector('#delete-user').submit();"><i class="fas fa-trash-alt"></i></a>
                                            <form action="{{ route('users.destroy', $user) }}" id="delete-user" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        No user found in the database!!!
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection