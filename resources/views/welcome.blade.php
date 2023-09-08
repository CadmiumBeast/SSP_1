<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body >
        <div class="nav">
            <div class="logo">
                <img src="{{ asset('../images/logo-no-background.png') }}" alt="logo">
            </div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="selection">
            <a>
                <div class="PC">
            <div class="pc">
                <div class="selection-text">
                    <h1>PC</h1>
                    <p>Currently Available PC : 15</p>
                    <p>Total Number of PC : 30</p>
                </div>
            </div>
                </div>
                </a>
                <a>
                <div class="CONSOLE">
                    <div class="console">
                    <div class="selection-text">
                        <h1>Console</h1>
                        <p>Currently Available Console : 8</p>
                        <p>Total Number of Console : 15</p>
                    </div>
                </div>
                    </div>
                </a>
        </div>

    </body>
</html>
