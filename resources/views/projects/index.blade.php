@extends('layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card-header">
                <div class="d-flex justify-content-center">
                    <h1 class="display-7">Projects</h1>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn btn-outline-primary" href="{{ route('admin.projects.create') }}"><i class="fas fa-plus"></i> Project</a>
            </div>
            @if(session('status'))
                <p class="alert alert-success" role="alert">{{session('status')}}</p>
            @endif
            @if (count($projects) > 0)
            <div class="table-responsive">
                <table class="table table-light table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">General objective</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $key=>$project)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->general_object }}</td>
                        <td>
                            <a class="btn btn-outline-primary" href="{{route('admin.projects.show', $project)}}"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-outline-secondary"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('delete-project').submit();"><i class="fas fa-trash-alt"></i></a> 
                            <form action="{{route('admin.projects.destroy', $project)}}" method="post" id="delete-project">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach    
                    </tbody>
                </table>
            </div>
            @else
                <p class="alert alert-warning" role="alert">No project found in the database!!!</p>
            @endif
        </div>
    </div>
</div>

@endsection