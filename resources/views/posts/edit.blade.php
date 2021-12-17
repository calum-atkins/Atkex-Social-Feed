@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header">
                    Edit Details Below
                </div>
                <div class="card-body">

                <form method="post" action="{{ route('posts.update', $post->id) }}">
                    {{ method_field('put') }}
                    @csrf
                    <p>Title: <input type="text" name="title" class="form-control" value="{{ $post->title }}"></p>
                    <p>Content: <input type="text" name="contents" class="form-control" value="{{ $post->contents }}"></p>
                    <P>Image: <input type="text" name="image" class="form-control" value="{{ $post->image }}"></p>
                    <p>Group:
                        <select class="form-control" name="group" required id="group_id">
                            <option value="option_select" disabled selected>{{ $g }}</option>


                            @foreach($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name}}</option>
                            @endforeach
                        </select>
                    </p>
                    <input type="submit" value="Submit" class="form-control bg-success">
                    <a href="{{ route('posts.show', $post->id) }}" class="form-control bg-danger text-center">Cancel</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
