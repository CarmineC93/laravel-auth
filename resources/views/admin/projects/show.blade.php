12 lines (11 sloc) 363 Bytes

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <p>{{ $project->slug }}</p>
        </div>
        <p class="mt-3">{{ $project->description }}</p>
    </div>
@endsection
