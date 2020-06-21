@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Pieslēgties</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Reģistrēties</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Fuzzy Wuzzy's Pet Store
                <h1>Grozs</h1>
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Kaķiem</a>
                    <a href="https://laracasts.com">Suņiem</a>
                    <a href="https://laravel-news.com">Grauzējiem</a>
                </div>
            
            </div>
        </div>
</body>
</html>