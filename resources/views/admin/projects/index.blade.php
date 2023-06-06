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
                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" class="d-inline-block"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="showAlert()"><i
                                    class="fa-solid fa-trash"></i></button>
                            <script>
                                function showAlert() {
                                    if (confirm("Sei sicuro di voler eliminare questo progetto?")) {
                                        document.getElementById("delete-form").submit();
                                    }
                                }
                            </script>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
