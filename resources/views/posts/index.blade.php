@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <a> test</a>
                    </div>
                    {{-- <div class="float-right">
                        <a href="{{ route('blog-post.create') }}" class="btn btn-primary btn-sm">
                            {{ __('blog_post.list_create_post') }}
                        </a>
                    </div> --}}
                </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($posts as $post)
                                <div class="card">
                                    <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">
                                        {{$post->title}}</a>
                                    </li>
                                    <dt> - Content: {{$post->contents}}</dt>
                                    <dt> - User: {{$post->user->name}}</dt>
                                    <dt> - Group: {{$post->group->name}}</dt>
                                    {{-- <dd> - test {{$post->comment->content}}</dd> --}}


                                    </li>
                                @endforeach
                                </div>
                            </ul>
                            <a href="{{ route('posts.create') }}">Create Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
