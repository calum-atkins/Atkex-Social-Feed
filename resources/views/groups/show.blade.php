@extends('layouts.app')

@section('title', $group->name)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        @foreach ($posts as $post)
            @if ($post->group_id == $group->id)
            <div class="card mt-5"> <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                <div class="card-header">
                    posted by <b>{{$post->user->name}}</b>
                </div>
                <img src={{$post->image}} class="card-img-top" alt="image"></a>
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->contents}}</p>
                    {{-- link to group here --}}
                    <div class="card-text"> <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                    <dt>Group: {{$post->group->name}}</dt></a>
                    </div>

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
            @endif
        @endforeach
    </div>
</div>
@endsection
