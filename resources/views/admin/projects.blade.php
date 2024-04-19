@extends('layouts.app')

@section('content')

    <div class="container py-5">
        
        <h2>Lista dei progetti</h2>

        <div class="row mb-3">
            @foreach($projects as $project)

                <div class="col">
                    <div class="title fw-bold">
                        {{$project->name}}
                    </div>
                    <div class="description">
                        {{$project->description}}
                    </div>
                    <div class="thumb">
                        <img src="{{$project->thumb}}" alt="">
                    </div>
                    <div class="technologies">
                        {{$project->technologies}}
                    </div>
                    <div class="link-repo text-decoration-underline">
                        {{$project->link_repo}}
                    </div>
                </div>

            @endforeach
        </div>

        <button type="button" class="btn btn-primary">Aggiungi nuovo progetto</button>

    </div>
    
@endsection