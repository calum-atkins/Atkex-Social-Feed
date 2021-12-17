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
                <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <p>Title: <input type="text" name="title" class="form-control"></p>
                <p>Content: <input type="text" name="contents" class="form-control"></p>
                <P>Image: <input type="file" name="image" class="form-control"></p>
                <p>Group:
                    <select class="form-control" name="group" required id="group">
                        <option value="option_select" disabled selected>Select a group...</option>


                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name}}</option>
                        @endforeach
                    </select>
                </p>
                <input type="submit" value="Create Post" class="form-control bg-success">
                <a href="{{ route('posts.index') }}" class="form-control bg-danger text-center">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
