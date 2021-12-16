@extends('layouts.app')

@section('title')
    Groups
@endsection

@section('content')
    <div class="col-md-6">
        <ul>
            {{-- <a href="{{ route('posts.create') }}" class="btn btn-lg bg-light.bg-gradient btn-outline-secondary mt-4">Create Post</a> --}}
        </ul>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">

        @foreach ($groups as $group)
            <div class="card mt-5"> <a href="{{ route('groups.show', ['id' => $group->id]) }}">
                <div class="card-header">
                    <b>{{ $group->name }}</b> owned by <b>{{ $group->user->name }}</b>
                </div>

                <div class="card-body">
                    <p>Description: {{ $group->description }}</p>
                    <p>Number of posts: {{ $group->posts()->count() }}</p>
                </div>
            </div>
        @endforeach


    </div>
</div>
@endsection
