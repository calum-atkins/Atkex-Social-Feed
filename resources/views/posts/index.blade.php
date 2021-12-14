@extends('layouts.app')

@section('title')
    Posts Feed
@endsection

@section('content')
    <div class="col-md-6">
        <ul>
            <a href="{{ route('posts.create') }}" class="btn btn-lg bg-light.bg-gradient btn-outline-secondary mt-4">Create Post</a>
        </ul>
    </div>

    <div class="row justify-content-center">
            <div class="col-md-5">
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
                    @foreach($post->comments as $comment)
                    <div class="card mt-1">
                        <div class="card-header">
                            Comments
                        </div>
                        <div class="card-body">
                            comment by {{$comment->user_id}}:
                        {{ $comment->contents}}
                        </div>
                    </div>
                    @endforeach

                </div>
            @endforeach


        </div>
    </div>
</div>
@endsection
