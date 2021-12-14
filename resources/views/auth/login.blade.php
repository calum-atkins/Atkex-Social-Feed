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
                Login Details
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    {{-- <x-label for="email" :value="__('Email')" /> --}}
                    <p>Email: <input class="form-control" type="email" name="email" :value="old('email')" required autofocus /></p>

                    {{-- <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus /> --}}
                </div>

                <!-- Password -->
                <div class="mt-4">

                    <p>Password: <input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-4" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="btn ml-5 btn-secondary">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    {{-- </x-auth-card> --}}
    @endsection
{{-- </x-guest-layout> --}}
