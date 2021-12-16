@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="card mt-5">
            <div class="card-header">
                Forgot Password?
            </div>
            <div class="card-body">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <p>Email: <input class="form-control" type="email" name="email" :value="old('email')" required autofocus /></p>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="btn btn-secondary">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
@endsection
