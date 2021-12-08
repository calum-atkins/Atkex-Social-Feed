@extends('layouts.app')

@section('title')
    Profiles
@endsection

@section('content')

    <p>The profiles of Atkex:</p>
    <ul>
        @foreach ($users as $user)
            <li><a href="{{ route('profiles.show', ['id' => $user->id]) }}">
                {{$user->username}}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('profiles.create') }}">Create Profile</a>

@endsection
