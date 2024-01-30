@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        
        <h1 class="my-4">New project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
    
            <div class="mb-3 has-validation">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ? old('title') : $project->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror"" id="description" name="description" value="{{ old('description') ? old('description') : $project->description }}">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-success">Save</button>
    
        </form>

    </div>
</div>
@endsection
