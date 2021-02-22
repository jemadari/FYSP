@extends('layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-header">
                <div class="d-flex justify-content-center">
                    <h1 class="display-7">Documents</h1>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('documents.create') }}" class="btn btn-outline-primary"><i class="fas fa-plus"></i> documents</a>
            </div>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            @if (count($documents) > 0)
                <div class="table-responsive">
                    <table class="table table-light table-striped table-hover">
                        <thead>

                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-warning" role="alert">No Document found in the Database!!!</div>
            @endif
        </div>
    </div>
</div>

@endsection