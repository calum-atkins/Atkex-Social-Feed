<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profiles List - @yield('title')</title>
</head>
<body>
    <h1>Profiles List - @yield('title')</h1>

    @if ($errors->any())
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
</html>
