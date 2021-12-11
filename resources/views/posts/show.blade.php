@extends('layouts.app')

@section('title', 'Post Details')

@section('content')

    <ul>
        <li>Title: {{$post->title}}</li>
        <li>Content: {{$post->content}}</li>
        <li>User: {{$post->user->username}}</li>
        <li>Group: {{$post->group->name}}</li>
    </ul>

@endsection
