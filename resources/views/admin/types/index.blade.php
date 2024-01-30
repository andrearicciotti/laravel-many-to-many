@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-around align-content-center">
            <h1 class="my-4 text-center">Types</h1>
            
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection