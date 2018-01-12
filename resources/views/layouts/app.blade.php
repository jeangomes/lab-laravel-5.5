<!DOCTYPE html>
<html ng-app="sampleApp" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Caveiras da Montanha</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('images/favicon.ico') }}" rel="icon" type="image/x-icon" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        
        <script src="{{ asset('js/bower_components/angular-ui-mask/dist/mask.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
        <style type="text/css">
            .form-group.required .control-label:after {
                content:" *";
                color:red;
            }
        </style>
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
                        <a style="padding: 0 15px;" class="navbar-brand" href="{{ url('/') }}">
<!--                            {{ config('app.name', 'Laravel') }}-->
                            <img style="height: inherit;" src="{{ asset('images/logo-header.png') }}" >
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Cadastro</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Amigo Oculto <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="{{route('amigo-oculto.create')}}">Participar</a></li>                                      
                                      <li><a href="{{route('amigo-oculto.index')}}">Lista de participantes</a></li>
                                      <li>
                                          <a href="{{route('amigo-oculto.index')}}"></a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['amigo-oculto.destroy', Auth::user()->id],'style'=>'display:inline']) !!}
                                            <button type="submit" style="display: inline;" class="btn btn-link">Deixar de participar</button>
                                            {!! Form::close() !!}
                                      </li>
                                    </ul>
                                </li>                                
                                <li><a href="{{ route('pedido.create') }}">Fazer encomenda</a></li>
                                <li><a href="{{ route('pedido.index') }}">Encomendas</a></li>                                 
                                @if (Auth::user()->admin)
                                    <li><a href="{{ route('membros.index') }}">Membros</a></li>
                                    <li><a href="{{ route('evento.index') }}">Eventos</a></li>
                                    <li><a href="{{ route('produto.index') }}">Produtos</a></li>
                                @endif                            
                                                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Desconectar
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
            @if (session('aviso'))
                <div class="alert alert-{{session('type')}} alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p><i class="icon fa fa-check"></i> {{ session('aviso') }}</p>            
                </div>
            @endif
                <div class="page-header">
                    <h1>@yield('title')</h1>
                </div>
                
                @yield('content')
            </div>
        </div>

    </body>
</html>
