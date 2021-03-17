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
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="project title">
                            @error('title')
                            <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="general_object" class="form-label">General Object</label>
                        <input type="text" name="general_object" id="general_object" class="form-control" value="{{ old('general_object') }}" placeholder="general object">
                        @error('general_object')
                            <div class="alert alert-warning">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="userid" class="form-label">Owner</label>
                            <input type="text" name="user_id" id="userid" class="form-control" value="{{ old('user_id') }}" placeholder="Owner's name">
                            @error('user_id')
                                <div class="alert alert-warning">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection