@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="row justify-content-center">
            <div class="mt-4" style="width: 80rem">
                <ul>
                    <h6></h6>
                    <h1>{{$post->title}}</h1>
                    <img src={{$post->image}} class="card-img-top" alt="image"></a>
                    <h6>posted by <b>{{$post->user->name}}</b> in group <b>{{$post->group->name}}</b></h6>
                    <h3>{{$post->contents}}</h3>
                </ul>
                <div class="row">
                    <div class="cold-md-8 col-md-offset2">
                        @foreach($post->comments as $comment)
                        <div class="card">
                            <div class="card-header">
                                Comment by:
                                {{ $comment->user->name}}
                            </div>
                            <div class="card-body">
                                {{ $comment->contents}}
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 ">
        <div class="card mt-4 " style="width: 30rem">
            <div class="card-header">
                Post Details
            </div>
            <dl class="dl-horizontal text-center">
                <dt>Created At:</dt>
                <dd>{{ date( 'M j, Y H:i', strtotime($post->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal text-center">
                <dt>Updated At:</dt>
                <dd>{{ date( 'M j, Y H:i', strtotime($post->updated_at)) }}</dd>
            </dl>
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="form-control bg-warning text-center">Edit Post</a>
                    <a href="{{ route('posts.destroy', ['id' => $post->id]) }}" class="form-control bg-danger text-center mb-3">Delete Post</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
