@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="card" style="width: 18rem;">
            <img src="{{$project->thumb}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$project->name}}</h5>
              <p class="card-text">{{$project->description}}</p>
              <a href="#" class="btn btn-warning">Modifica</a>
              <a href="#" class="btn btn-danger">elimina</a>
            </div>
        </div>

        <button type="button" class="btn btn-primary">
            <a href="/admin/projects" class="text-white text-decoration-none">Torna ai progetti</a>
        </button>
    </div>


@endsection