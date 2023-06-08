@extends('layouts.admin')
@section('content')
    <h1>{{ $project->title }}</h1>
    @if ($project->type)
        <p>Tipo: {{ $project->type->name }}</p>
    @else
        <p>Nessun tipo</p>
    @endif
    <h5>Tecnologie: </h5>
    @forelse ($project->technologies as $technology)
        <span>{{ $technology->name }}{{ $loop->last ? '.' : ',' }}</span>
    @empty
        <p>Nessuna tecnologia specificata</p>
    @endforelse
    <p></p>
    <p>Slug: {{ $project->slug }}</p>
    <p>Contenuto: {{ $project->content }}</p>
    <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna alla home</a>
@endsection
