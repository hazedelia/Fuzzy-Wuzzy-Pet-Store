<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
       <a class="navbar-brand" href="/"><span> <img style="max-width: 4rem;" src="assets/logo.jpg" alt="Dog with cat"></span> Fuzzy Wuzzy</a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kakiem">Kaķiem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/suniem">Suņiem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/grauzejiem">Grauzējiem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Autorizēties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Reģistrēties</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <div class="container">
            <div class="row">
            @yield('content')
            </div>
        </div>
</body>
</html>
