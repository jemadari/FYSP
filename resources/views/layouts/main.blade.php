<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }} defer"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a title="logo" class="navbar-brand" href="{{ route('layouts.main') }}"><i class="fas fa-folder-open fa-2x"></i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('layouts.main') }}"><i class="fas fa-home"></i>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects.index') }}">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('documents.index') }}">Documents</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
                <div class="d-flex">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> --}}
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();" class="text-sm text-gray-700 underline">Logout</a>
                            <form action="{{ route('logout') }}" id="logout" method="post">
                              @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"></i>Login</a>
                            &nbsp;&nbsp;
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"></i>Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
              </div>
            </div>
          </nav>
          <div class="container">
            
            @yield('content')

          </div>
    </body>
</html>