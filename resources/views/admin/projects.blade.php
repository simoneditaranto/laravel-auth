@extends('layouts.app')

@section('content')

    <div class="container py-5">
        
        <h2>Lista dei progetti</h2>

        <div class="row">
            @foreach($posts as $post)

                <div class="col">
                    <div class="title fw-bold">
                        {{$post->name}}
                    </div>
                    <div class="description">
                        {{$post->description}}
                    </div>
                    <div class="thumb">
                        <img src="{{$post->thumb}}" alt="">
                    </div>
                    <div class="technologies">
                        {{$post->technologies}}
                    </div>
                    <div class="link-repo text-decoration-underline">
                        {{$post->link_repo}}
                    </div>
                </div>

            @endforeach
        </div>

    </div>
    
@endsection