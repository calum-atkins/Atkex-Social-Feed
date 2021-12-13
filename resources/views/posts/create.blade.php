@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <p>Title: <input type="text" name="title"></p>
        <p>Content: <input type="text" name="contents"></p>
        <p>User ID: <input type="text" name="user_id"></p>
        <p>Group ID: <input type="text" name="group_id"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('posts.index') }}">Cancel</a>

    </form>

@endsection
