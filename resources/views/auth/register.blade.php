@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="shadow p-0 mb-5 bg-white rounded">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-7"> register </h1>
                    </div>
                </div>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name" value="{{ old('name') }}">
                            @error('name')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label"  for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" value="{{ old('email') }}">
                            @error('email')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your Password">
                            @error('password')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm your Password">
                            @error('password_confirmation')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-outline-primary" type="submit">register</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        </div>
    </div>

@endsection