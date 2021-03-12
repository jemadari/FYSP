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

                <form action="{{ route('admin.users.update', $user) }}" method="post">
                <div class="container">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name" value=" {{ old('name')}}  @isset($user) {{ $user->name }} @endisset">
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
                    <div class="mb-3">
                        @foreach ($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" id="{{ $role->name }}" value="{{ $role->id }}" class="form-check-input"
                                @isset($user) @if (in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset
                                >
                                <label for="{{ $role->name }}">{{ $role->name }}</label>
                            </div>
                        @endforeach
                    </div>
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