@extends('layouts.app')

@section('title')
    Profiles
@endsection

@section('content')

    <p>The profiles of Atkex:</p>
    <ul>
        @foreach ($profiles as $profile)
            <li><a href="{{ route('profiles.show', ['id' => $profile->id]) }}">
                {{$profile->username}}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('profiles.create') }}">Create Profile</a>

@endsection
