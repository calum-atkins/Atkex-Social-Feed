@extends('layouts.app')

@section('title')
    <h1>ATKEX</h1>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



{{-- @if ($errors->any())
<div>
Errors:
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
    </ul>
</div>
@endif

@if (session('message'))
    <p><b>{{ session('message') }}</b></p>
@endif

<div>
@yield('content')
</div>
    </body>
</html> --}}

