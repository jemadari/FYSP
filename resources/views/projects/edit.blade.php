@extends('layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-header">
                <div class="d-flex justify-content-center">
                    <h1 class="display-7">
                        Projects form
                    </h1>
                </div>
            </div>
            <div class="container">
                <form action="{{ route('projects.update', $project) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}">
                            @error('title')
                            <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="general_object" class="form-label">General Object</label>
                        <input type="text" name="general_object" id="general_object" class="form-control" value="{{ $project->general_object }}">
                        @error('general_object')
                            <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection