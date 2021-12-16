@extends('layouts.app')

@section('title')
    <h1>Dashboard</h1>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header"><b>ATKEX Dashboard</b>
                </div>
                <div class="card-body">
                    <p><b>Username:</b> {{ Auth::user()->name }}</p>
                    <p><b>Email:</b> {{ Auth::user()->email }}</p>
                    <p><b>Number of posts:</b> {{ Auth::user()->posts()->count() }} </p>
                    <p><b>Number of groups:</b> {{ Auth::user()->groups()->count() }} </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


