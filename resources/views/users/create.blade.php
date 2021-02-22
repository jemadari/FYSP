@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card  shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-7">
                            Create user
                        </h1>
                    </div>
                </div>

                <form action="{{ route('users.store') }}" method="post">
                <div class="container">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="your name" value="{{ old('name') }}">
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="your email" value="{{ old('email') }}">
                            @error('email')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="your name" value="{{ old('name') }}">
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-primary" type="submit">Save</button>
                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>

@endsection