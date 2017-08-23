<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
 <!--<h2 class="navbar-brand brand-name">
           <a href="index.html"><img class="img-responsive2"       
           src="{{URL::asset('img/ctconan.png')}}"></a>
       </h2>  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'SISMON') }}</title> -->
    <title>SISMON</title>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                     <!-- Branding Image -->

                      <!--<a class="navbar-brand" href={{URL::asset('img/ctconan.png')}}">     </a>
                  
                 
                    <a href="#" class="pull-left"><img src="/path/to/image.png"></a> 
                    <a class="navbar-brand" href="{{ url('/ctconan.png') }}">    </a> 
 <div class="row">
    <div class="col-md-4">
        <img src="/minsalud.png" width="220px;" height="100px;">
    </div>
       <div class="col-md-4">
        <img src="/ctconan.png">
    </div>

</div> -->

</head>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> Salir  </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
