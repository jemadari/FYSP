@extends('layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="shadow p-0 mb-5 bg-white rounded">
        <div class="card">

            <div class="d-flex justify-content-center">
                <h1 class="display-7">
                    login
                </h1>
            </div>

            <form action="{{ route('login') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <div class="mb-3">
                        <label class="label" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" value="{{ old('email') }}">
                            @error('email')
                            <span>{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your Password">
                        @error('password')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary1" type="submit">login</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection