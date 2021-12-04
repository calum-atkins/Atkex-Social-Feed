@extends('layouts.app')

@section('title', 'Profile Details')

@section('content')

    <ul>
        <li>Username: {{$profile->username}}</li>
        <li>Password: {{$profile->password}}</li>
        <li>Email: {{$profile->email}}</li>
    </ul>

@endsection
