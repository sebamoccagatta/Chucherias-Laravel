<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5e51a129d6.js"></script>
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
    <link rel="stylesheet" href="/css/carrusel.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
    <div id="app">
      <img class="logo" src="/storage/logo.jpeg" alt="">
        <nav class="navbar navbar-expand-md navbar-light bg shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <a href="/ayuda" class="nav-item nav-link"><i class="fas fa-question-circle"></i>AYUDA</a>
                      <a href="#"class="nav-item nav-link">QUIENES SOMOS</a>
                      <a href="#"class="nav-item nav-link">CONTACTO</a>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('INICIAR SESION') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('|CREAR CUENTA') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fas fa-user"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-link iconos">
                                <i class="fas fa-cart-plus"></i>
                                <i class="fas fa-bell"></i>
                                <i class="fas fa-heart"></i>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('carrusel')
        <main class="py-4">

          @yield('content')
        </main>
    </div>

<footer>
  <div class="footer-conteiner">
  <div class=" col-md-3 col-sm-6 col-xs-12 caja1">
    <h3>¿Quienes Somos?</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
    <div class="col-md-3 col-sm-6 col-xs-12 caja2">
    <h3>Redes Sociales</h3>
    <p>Siguenos y enterate de las novedas </p>
      <ul class="red-social">
        <li class="nav-link iconos">
          <a href="#"><i class="fab fa-facebook redes"></i></a>
          <a href="#"><i class="fab fa-twitter redes"></i></a>
          <a href="#"><i class="fab fa-instagram
            redes"></i></a>
          <a href="#"><i class="fab fa-pinterest-square redes"></i></a>
        </li>
        {{-- <li></li>
        <li></li>
        <li></li> --}}
      </ul>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 caja3">
        <h3>Contactos</h3>
    <ul class="ul3">
      <li><a class="cont"  href="mailto:chucherias@gmail.com">Escribenos</a></li>
      <li><a class="cont"  href="#">Contactanos</a></li>
      <li><a class="cont" href="#">Calle fasa 123</a></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12 caja4">
        <h3>Encuentranos aqui</h3>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3288.824955927956!2d-58.83771228505654!3d-34.48196455857249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc9be41ce3bbaf%3A0x8d6ef3aa30e1cd59!2sBolivia+631%2C+B1635+Pres.+Derqui%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1566560852784!5m2!1ses!2sar" width="250" height="145" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </div>
</footer>
</body>
</html>
