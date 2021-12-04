@extends('layouts.app')

@section('title')
    Profiles
@endsection

@section('content')

    <p>The profiles of Atkex:</p>
    <ul>
        @foreach ($profiles as $profile)
            <li>{{$profile->username}}</li>
        @endforeach
    </ul>

@endsection
