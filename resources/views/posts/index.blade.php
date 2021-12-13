@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($posts as $post)
                <div class="card mt-5"> <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                    <div class="card-header">
                        posted by <b>{{$post->user->name}}</b>

                    </div>
                    <img src={{$post->img}} class="card-img-top" alt="image"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->contents}}</p>
                        {{-- link to group here --}}
                        <dt>Group: {{$post->group->name}}</dt>
                    </div>
                </div>
            @endforeach

            <div class="card">
                <ul>
                    <a href="{{ route('posts.create') }}">Create Post</a>
                </ul>
            </div>+
        </div>
    </div>
</div>
@endsection
