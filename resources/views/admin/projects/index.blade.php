@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-around align-content-center">
            <h1 class="my-4 text-center">Projects</h1>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ substr($project->description, 0, 20) }}</td>

                            <td><a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}" class="btn btn-primary">Details</a>
                            </td>

                            <td>
                                <form method="POST" action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-title="{{ $project->slug }}">Delete</button>
                                </form>
                            </td>

                            <td><a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}" class="btn btn-info">Update</a>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection