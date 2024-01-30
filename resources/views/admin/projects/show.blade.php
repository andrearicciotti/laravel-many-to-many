@extends('layouts.admin')

@section('content')
    <h1>Title: {{ $project->title }}</h1>
    <p><strong>Description: </strong>{{ $project->description }}</p>
    <p><strong>Type: </strong>{{ $project->type->name ?? 'No types specified.' }}</p>
    <p><strong>Technology: </strong>
        @foreach ($project->technologies as $technology)
            {{ $technology->name }}
            @if (!$loop->last)
                ,
            @endif
            @if ($loop->last)
                .
            @endif
        @endforeach
    </p>
    <p><strong>User skills: </strong>
        @foreach ($user->skills as $skill)
            {{ $skill->name }}
            @if (!$loop->last)
                ,
            @endif
            @if ($loop->last)
                .
            @endif
        @endforeach
    </p>@endsection
