@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-7">
                            Edit user
                        </h1>
                    </div>
                </div>

                <form action="{{ route('admin.users.store', $user) }}" method="post">
                <div class="container">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name" value="{{ $user->name }}">
                            @error('name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label"  for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" value="{{ $user->email }}">
                            @error('email')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{ implode(', ', $user->roles->pluck('name')->toArray()) }}
                    <div class="form-group">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-primary" type="submit">Update</button>
                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>

@endsection