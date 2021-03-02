@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-7">Document input</h1>
                    </div>
                </div>

                <div class="container">

                    <div class="row justify-content-center">
                            <form action="{{ route('admin.documents.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="formFiletype" class="form-label">Type</label>
                                        <input class="form-control" type="text" name="type" id="formFiletype" value="{{ old('type') }}" placeholder="document type">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Name</label>
                                        <input class="form-control" type="file" name="name" id="formFile" value="{{ old('name') }}">
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
    </div>
@endsection