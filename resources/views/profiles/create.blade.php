@extends('layouts.app')

@section('title')
    Create Profile
@endsection

@section('content')
    <form method="POST" action="{{ route('profiles.store') }}">
        @csrf
        <p>Username: <input type="text" name="username"></p>
        <p>Password: <input type="text" name="password"></p>
        <p>Email: <input type="text" name="email"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('profiles.index') }}">Cancel</a>

    </form>

@endsection
