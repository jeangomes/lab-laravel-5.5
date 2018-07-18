<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Caveiras da Montanha</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link href="{{ asset('images/favicon.ico') }}" rel="icon" type="image/x-icon"/>

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('paper/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="{{ asset('paper/assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('paper/assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('paper/assets/css/themify-icons.css') }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ route('dash') }}" class="simple-text">
                    ADM - Caveiras {{auth()->user()->admin}}
                </a>
            </div>
            <ul class="nav">
                @if(auth()->user()->admin)
                    <li class="{{Route::currentRouteName()==='dash'?'active':''}}">
                        <a href="{{ route('dash') }}">
                            <i class="ti-pie-chart"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{Route::currentRouteName()==='evento.index'?'active':''}}">
                        <a href="{{ route('evento.index') }}">
                            <i class="ti-calendar"></i>
                            <p>Eventos</p>
                        </a>
                    </li>
                    <li class="{{Route::currentRouteName()==='membros.index'?'active':''}}">
                        <a href="{{ route('membros.index') }}">
                            <i class="ti-user"></i>
                            <p>Membros</p>
                        </a>
                    </li>

                    <li class="{{Route::currentRouteName()==='produto.index'?'active':''}}">
                        <a href="{{ route('produto.index') }}">
                            <i class="ti-tablet"></i>
                            <p>Produtos</p>
                        </a>
                    </li>
                    <li class="{{Route::currentRouteName()==='pedido.index'?'active':''}}">
                        <a href="{{ route('pedido.index') }}">
                            <i class="ti-shopping-cart-full"></i>
                            <p>Pedidos</p>
                        </a>
                    </li>
                    <li class="disabled">
                        <a href="{{ route('membros.index') }}">
                            <i class="ti-id-badge"></i>
                            <p>Parcerias</p>
                        </a>
                    </li>
                    <li class="disabled">
                        <a href="{{ route('membros.index') }}">
                            <i class="ti-list"></i>
                            <p>Relatórios</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-user"></i>
                        <p class="notification"></p>
                        <p>Amigo Oculto</p>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('subscribe',6)}}">Participar</a></li>
                        <li><a href="{{route('inscricao.index')}}">Lista de participantes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('pedido.index') }}"><p>Histórico de Eventos</p></a>
                </li>
                <li>
                    <a href="{{ route('pedido.create') }}"><p>Fazer encomenda</p></a>
                </li>
                <li>
                    <a href="{{ route('pedido.index') }}"><p>Encomendas</p></a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('title')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hide">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-user"></i>
                                <p class="notification"></p>
                                <p>{{ Auth::user()->name }}</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                        Desconectar
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p class="notification">5</p>
                                <p>Notificações</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Configurações</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @if (isset($results))
                        {{--@if($results->lastPage()>1)--}}
                        <div class="alert alert-info">
                            <p>
                                Registros {{ $results->firstItem() }} - {{ $results->lastItem() }}
                                de {{ $results->total() }} (para a página {{ $results->currentPage() }} )
                            </p>
                        </div>

                    @endif

                    @if(count($errors->all())>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="{{Route::currentRouteName()==='dash'?'':'card'}}">
                        @yield('content')
                    </div>
                    @if (isset($results))
                        <div class="text-center box-footer">
                            {{$results->appends(request()->query())->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                {{--                <nav class="pull-left">
                                    <ul>

                                        <li>
                                            <a href="#">
                                                Home
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="copyright pull-right">
                                    &copy;
                                    <script>document.write(new Date().getFullYear())</script>
                                    , made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative
                                        Tim</a>
                                </div>--}}
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('paper/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('paper/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('paper/assets/js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('paper/assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('paper/assets/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('paper/assets/js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project!
<script src="assets/js/demo.js"></script> -->


</html>
