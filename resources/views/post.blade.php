@extends('layouts.app')

@section('title')
    {{$post}} Post
@endsection

@section('content')
    @if($post=="test")
        <p>New post to be made {{$post}}.</p>
    @else
        <p>No post</p>
    @endif
@endsection
