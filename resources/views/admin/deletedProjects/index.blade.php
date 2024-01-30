@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-around align-content-center">
            <h1 class="my-4 text-center">Deleted Projects</h1>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects_deleted as $project_deleted)
                        <tr>
                            <td>{{ $project_deleted->title }}</td>
                            <td>{{ substr($project_deleted->description, 0, 20) }}</td>

                            {{-- <td><a href="{{ route('admin.deletedProjects.show', ['deletedProject' => $project_deleted->slug]) }}" class="btn btn-primary">Details</a>
                            </td> --}}

                            {{-- <td>
                                <form method="POST" action="{{ route('admin.deletedProjects.destroy', ['deletedProject' => $project_deleted->slug]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-title="{{ $project_deleted->slug }}">Final delete</button>
                                </form>
                            </td> --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection