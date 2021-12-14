@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card mt-5">
            <div class="card-header">
                    Create New Post
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <p>Title: <input type="text" name="title" class="form-control"></p>
                <p>Content: <input type="text" name="contents" class="form-control"></p>
                <P>Image (URL): <input type="test" name="image" class="form-control"></p>
                <p>User ID: <input type="text" name="user_id" class="form-control"></p>
                <p>Group ID: <input type="text" name="group_id" class="form-control"></p>
                <input type="submit" value="Submit" class="form-control bg-success">
                <a href="{{ route('posts.index') }}" class="form-control bg-danger text-center">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
