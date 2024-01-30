@extends('layouts.admin')

@section('content')
    <h1>Title: {{ $project->title }}</h1>
    <p><strong>Description: </strong>{{ $project->description }}</p>
    <p><strong>Type: </strong>{{ $project->type->name ?? 'No type specified.' }}</p>
@endsection
