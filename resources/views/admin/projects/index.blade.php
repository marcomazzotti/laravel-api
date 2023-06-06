@extends('layouts.admin')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1>Tutti i progetti</h1>
    <div class="text-end">
        <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Aggiungi un progetto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->slug) }}"><i
                                class="fa-solid fa-eye"></i></a>
                        <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}"><i
                                class="fa-solid fa-pen"></i></a>
                        {{-- <a class="btn btn-danger" href="{{ route('admin.projects.delete', $project->slug) }}"><i
                                class="fa-solid fa-trash"></i></a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
