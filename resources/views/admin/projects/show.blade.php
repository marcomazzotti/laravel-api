@extends('layouts.admin')
@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->slug }}</p>
    <p>{{ $project->content }}</p>
    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna alla home</a>
@endsection
