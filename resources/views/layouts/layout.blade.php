<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SISMON</title>
    <style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
    }
    </style>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 

</head>
<body>
 

<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand" rel="home" href="#" title="Ministerio de Salud y Deportes">
                <img style="max-width:80px; margin-top: -7px;" src="{{URL::asset('img/minsalud.png')}}">
            </a>
            <a class="navbar-brand" rel="home" href="#" title="UC CT Conan">
                <img style="max-width:100px; margin-top: -7px;" src="{{URL::asset('img/ctconan.png')}}">
                
            </a>

            <a class="navbar-brand" href="#"><span>SISMON</span></a>

        </div>

        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                        <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="">Inicio</a>
                </li>
                @foreach($privilegios as $pri)
                <li class="dropdown">
                    @if ($pri->id == $pri->padre_id)
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$pri->modulo}}<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                        @foreach($privilegios as $hijo)
                            @if ($pri->id == $hijo->padre_id && $hijo->padre_id != $hijo->id)
                                <li>
                                    <a href="{{ url('/'.$hijo->url) }}">{{$hijo->modulo}}</a>
                                </li>
                            @endif
                        @endforeach
                        </ul>
                    @endif            

                </li>
                @endforeach

                <li>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>

        </div>

    </div>

</div>
@yield('imagen')
<div class="flex-center position-ref full-height">

    <div class="container">
        @yield('content')
    </div>


</div>
</body>
</html>
