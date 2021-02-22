@extends('layouts.main')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                <div class="d-flex justify-content-center">
                    <h1 class="display-7">Students Input</h1>
                </div>

                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                </form>
            </div>
        </div>
    </div>

@endsection