@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul>
                <h1>{{$post->title}}</h1>
                <img src={{$post->img}} class="card-img-top" alt="image"></a>
                <h6>posted by <b>{{$post->user->name}}</b> in group <b>{{$post->group->name}}</b></h6>
                <h3>{{$post->contents}}</h3>
            </ul>
            <div class="row">
                <div class="cold-md-8 col-md-offset2">
                    @foreach($post->comments as $comment)
                    <div class="card">
                        {{ $comment->contents}}
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
