<!DOCTYPE html>
<html ng-app="sampleApp" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Caveiras da Montanha</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <!-- Styles -->
    <link href="{{ asset('now-ui-kit-v1.1.0/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('now-ui-kit-v1.1.0/assets/css/now-ui-kit.css') }}" rel="stylesheet">
    <link href="{{ asset('images/favicon.ico') }}" rel="icon" type="image/x-icon"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    <script src="{{ asset('js/bower_components/angular-ui-mask/dist/mask.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <style type="text/css">
        .form-group.required .control-label:after {
            content: " *";
            color: red;
        }
    </style>
</head>
<body class="template-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top " color-on-scroll="400">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img style="height: inherit;" src="{{ asset('images/logo-header.png') }}">
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation"
             data-nav-image="../assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <p>Cadastro</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Amigo Oculto <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('amigo-oculto.create')}}">Participar</a>
                            <a class="dropdown-item" href="{{route('amigo-oculto.index')}}">Lista de participantes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedido.create') }}">Fazer encomenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedido.index') }}">Encomendas</a>
                    </li>
                    @if (Auth::user()->admin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('membros.index') }}">Membros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('evento.index') }}">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('produto.index') }}">Produtos</a>
                        </li>
                    @endif

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                Desconectar
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                @endguest

                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom"
                       href="https://twitter.com/CreativeTim" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom"
                       href="https://www.facebook.com/CreativeTim" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
                       href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper" id="app">
    <h1>@yield('title')</h1>
    <div class="page-header" hidden>
        {{--        <div class="page-header-image hide" data-parallax="true" style="background-image: ;">
                </div>--}}
    </div>
    <div class="section">
        @if (session('aviso'))
            <div class="alert alert-{{session('type')}} alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><i class="icon fa fa-check"></i> {{ session('aviso') }}</p>
            </div>
        @endif
        @yield('content')
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                            MIT License
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                , Designed by
                <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div>
        </div>
    </footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('now-ui-kit-v1.1.0/assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('now-ui-kit-v1.1.0/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('now-ui-kit-v1.1.0/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
</html>
