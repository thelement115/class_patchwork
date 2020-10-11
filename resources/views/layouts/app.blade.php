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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <style>
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        body{
            overflow-x: hidden;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
            opacity: 1; /* Firefox */
        }
    </style>

</head>
<body style="height: 100vh">
    <div id="app"style="height: 100%">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #f6c751;  height : 8%">
            <div class="container" style="height: 100%">
                <img src = "http://localhost/class_patchwork/storage/app/public/logo.jpg" style = "height: 90%">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-5">
                        <li class = "nav-item ml-4 mr-4" style="color:blue; font-weight:500">
                            <a class="nav-link" style="color:blue; font-weight:500" href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class = "nav-item mr-4" style="color:blue; font-weight:500">
                            <a class="nav-link" style="color:blue; font-weight:500" href="{{ route('information') }}"> ¿Quienes somos?</a>
                        </li>
                        <li class = "nav-item mr-4" style="color:blue; font-weight:500">
                            <a class="nav-link" style="color:blue; font-weight:500" href="{{ route('reservations') }}">Reservas</a>
                        </li>
                        <li class = "nav-item mr-4" style="color:blue; font-weight:500">
                            <a class="nav-link" style="color:blue; font-weight:500" href="{{ route('contact') }}">Ayuda</a>
                        </li>
                        <li class = "nav-item mr-4" style="color:blue; font-weight:500">
                            <a class="nav-link" style="color:blue; font-weight:500" href="{{ route('admin_panel') }}">Cuenta</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
            @yield('content')
        <div class = "row" id= "pieDePagina" style = "height: 10%;border-color:blue;border-style:groove;border-left:none;border-right:none;border-bottom:none">
            <div class = "col-6">
                <div class = "row">
                    <div class = "col-12 d-flex justify-content-center mt-4">
                        Institución Educativa
                    </div>
                    <div class = "col-12 d-flex justify-content-center" style="color: green; font-weight: bolder">
                        Alfredo Cock Arango
                    </div>
                    <div class = "col-12 d-flex justify-content-center">
                        Liderando procesos de formación y calidad humana
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <div class = "row">
                    <div class = "col-12 d-flex justify-content-center mt-4">
                        www.ieaca.edu.co
                    </div>
                    <div class = "col-12 d-flex justify-content-center" style = "">
                        Barrio Castilla-Carrera 72 No 99-55
                    </div>
                    <div class = "col-12 d-flex justify-content-center">
                        Telefax: 267 11 90 - 267 75 52
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
