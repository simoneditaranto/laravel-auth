@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <h1>Modifica il tuo progetto</h1>

        <form action="{{route('admin.projects.update', $project->id)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome del progetto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description">
                    {{$project->description}}
                </textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine del progetto</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$project->thumb}}">
            </div>

            <div class="mb-3">
                <label for="technologies" class="form-label">Tecnologie utilizzate</label>
                <input type="text" class="form-control" id="technologies" name="technologies" value="{{$project->technologies}}">
            </div>

            <div class="mb-3">
                <label for="link_repo" class="form-label">Link repo GitHub</label>
                <input type="text" class="form-control" id="link_repo" name="link_repo" value="{{$project->link_repo}}">
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="submit" class="btn btn-warning">
                <a href="/admin/projects" class="text-white text-decoration-none">Annulla</a>
            </button>

        </form>
    </div>

@endsection