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
                Register Account
            </div>
            <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <p>Username: <input class="form-control" type="name" name="name" :value="old('name')" required autofocus /></p>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <p>Email: <input class="form-control" type="email" name="email" :value="old('email')" required autofocus /></p>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <p>Password: <input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" /></p>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <p>Confirm Password: <input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required /></p>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn ml-4 btn-secondary">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
@endsection
