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
                    <img src={{$post->image}} class="card-img-top" alt="image"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->contents}}</p>
                        {{-- link to group here --}}
                        <dt>Group: {{$post->group->name}}</dt>
                    </div>

                    <div class="card mt-1">
                        <div class="card-header">
                            Comments
                        </div>
                        @foreach($post->comments as $comment)
                        <div class="card-body">
                            <b>{{$comment->user->name}} commented: </b>
                        {{ $comment->contents}}
                        </div>
                        @endforeach
                    </div>


                </div>
            @endforeach
            <div class="mt-4 mb-4 text-center">
                {!! $posts->links(); !!}
            </div>

        </div>
    </div>
</div>
@endsection
