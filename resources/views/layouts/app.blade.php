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
       <a href="/changelang?lang=lv">LV</a> / <a href="/changelang?lang=en">EN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navigation" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">{{__("Sākums")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kakiem">{{__("Kaķiem")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/suniem">{{__("Suņiem")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/grauzejiem">{{__("Grauzējiem")}}</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/login">{{__("Autorizēties")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">{{__("Reģistrēties")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">{{__("Izrakstīties")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cart"> <span> <img src="assets/shopping_cart.png" alt="Dog with cat"></span></a>
          </li>
          <?php 
            echo '<li class="nav-item"> <span class="nav-link name">';
                  echo $name ?? '';
            echo '</span></li>';
            ?>
    
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
