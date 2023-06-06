@extends('layouts.admin')

@section('content')
    <h2>Crea un nuovo progetto</h2>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Invia</button>
        <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Torna alla home</a>
    </form>
@endsection
