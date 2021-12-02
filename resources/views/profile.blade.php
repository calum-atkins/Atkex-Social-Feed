@extends('layouts.app')

@section('title')
    {{$profile}} Profile
@endsection

@section('content')
    @if($profile=="calum")
        <p>New profile to be made {{$profile}}.</p>
    @else
        <p>No profile</p>
    @endif
@endsection