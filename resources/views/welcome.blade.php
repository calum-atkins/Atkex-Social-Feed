@extends('layouts.app')

@section('title')
    <h1>Welcome Page</h1>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5 mt-5">
        <h3>You must be logged in to view posts, please
            <u><a href="/login">login</a></u> to continue.
        </h3>
    </div>
</div>
@endsection

