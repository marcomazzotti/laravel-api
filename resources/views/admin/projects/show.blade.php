@extends('layouts.admin')
@section('content')
    <h1>{{ $project->title }}</h1>
    @if ($project->type)
        <p>Tipo: {{ $project->type->name }}</p>
    @else
        <p>Nessun tipo</p>
    @endif
    <p>{{ $project->slug }}</p>
    <p>{{ $project->content }}</p>
    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna alla home</a>
@endsection
